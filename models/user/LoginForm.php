<?php

namespace app\models\user;

use yii\base\Model;

class LoginForm extends Model
{
    /**
     * @var string username
     */
    public $username;
    /**
     * @var string $password
     */
    public $password;
    /**
     * @var boolean $rememberMe
     */
    public $rememberMe;

    /** @var UserRecord */
    public $user;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [
                [
                    'username',
                    'password',
                ],
                'required',
            ],
            [
                'rememberMe',
                'boolean',
            ],
            [
                'password',
                'validatePassword',
            ],
        ];
    }

    /**
     * Validate password.
     * @param $attributeName
     */
    public function validatePassword($attributeName)
    {
        if ($this->hasErrors()) {
            return;
        }
        $user = $this->getUser($this->username);
        if (!($user and $this->isCorrectHash($this->$attributeName, $user->password))) {
            $this->addError('password', 'Incorrect username or password');
        }
    }

    /**
     * Get user.
     * @param $username
     * @return UserRecord|null
     */
    private function getUser($username)
    {
        if (!$this->user) {
            $this->user = $this->fetchUser($username);
        }
        return $this->user;
    }

    /**
     * Get all about one user.
     * @param $username
     * @return UserRecord|null
     */
    private function fetchUser($username)
    {
        return UserRecord::findOne(compact('username'));
    }

    /**
     * Check password hash.
     * @param $plaintext
     * @param $hash
     * @return bool
     */
    private function isCorrectHash($plaintext, $hash)
    {
        return \Yii::$app->security->validatePassword($plaintext, $hash);
    }

    /**
     * @return bool
     */
    public function login()
    {
        if (!$this->validate())
            return false;
        $user = $this->getUser($this->username);
        if (!$user)
            return false;
        return \Yii::$app->user->login(
            $user,
            $this->rememberMe ? 3600 * 24 * 30 : 0
        );
    }
}