<?php  //[STAMP] 55d18dacef45786a9f515861d1de5c03
namespace _generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

trait FunctionalTesterActions
{
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Make sure you are connected to the right database.
     *
     * ```php
     * <?php
     * $I->seeNumRecords(2, 'users');   //executed on default database
     * $I->amConnectedToDatabase('db_books');
     * $I->seeNumRecords(30, 'books');  //executed on db_books database
     * //All the next queries will be on db_books
     * ```
     * @param $databaseKey
     * @throws ModuleConfigException
     * @see \Codeception\Module\Db::amConnectedToDatabase()
     */
    public function amConnectedToDatabase($databaseKey) {
        return $this->getScenario()->runStep(new \Codeception\Step\Condition('amConnectedToDatabase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Can be used with a callback if you don't want to change the current database in your test.
     *
     * ```php
     * <?php
     * $I->seeNumRecords(2, 'users');   //executed on default database
     * $I->performInDatabase('db_books', function($I) {
     *     $I->seeNumRecords(30, 'books');  //executed on db_books database
     * });
     * $I->seeNumRecords(2, 'users');  //executed on default database
     * ```
     * List of actions can be pragmatically built using `Codeception\Util\ActionSequence`:
     *
     * ```php
     * <?php
     * $I->performInDatabase('db_books', ActionSequence::build()
     *     ->seeNumRecords(30, 'books')
     * );
     * ```
     * Alternatively an array can be used:
     *
     * ```php
     * $I->performInDatabase('db_books', ['seeNumRecords' => [30, 'books']]);
     * ```
     *
     * Choose the syntax you like the most and use it,
     *
     * Actions executed from array or ActionSequence will print debug output for actions, and adds an action name to
     * exception on failure.
     *
     * @param $databaseKey
     * @param \Codeception\Util\ActionSequence|array|callable $actions
     * @throws ModuleConfigException
     * @see \Codeception\Module\Db::performInDatabase()
     */
    public function performInDatabase($databaseKey, $actions) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('performInDatabase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Inserts an SQL record into a database. This record will be erased after the test.
     *
     * ```php
     * <?php
     * $I->haveInDatabase('users', array('name' => 'miles', 'email' => 'miles@davis.com'));
     * ?>
     * ```
     *
     * @param string $table
     * @param array $data
     *
     * @return integer $id
     * @see \Codeception\Module\Db::haveInDatabase()
     */
    public function haveInDatabase($table, $data) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('haveInDatabase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that a row with the given column values exists.
     * Provide table name and column values.
     *
     * ```php
     * <?php
     * $I->seeInDatabase('users', ['name' => 'Davert', 'email' => 'davert@mail.com']);
     * ```
     * Fails if no such user found.
     *
     * Comparison expressions can be used as well:
     *
     * ```php
     * <?php
     * $I->seeInDatabase('posts', ['num_comments >=' => '0']);
     * $I->seeInDatabase('users', ['email like' => 'miles@davis.com']);
     * ```
     *
     * Supported operators: `<`, `>`, `>=`, `<=`, `!=`, `like`.
     *
     *
     * @param string $table
     * @param array $criteria
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Db::seeInDatabase()
     */
    public function canSeeInDatabase($table, $criteria = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeInDatabase', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that a row with the given column values exists.
     * Provide table name and column values.
     *
     * ```php
     * <?php
     * $I->seeInDatabase('users', ['name' => 'Davert', 'email' => 'davert@mail.com']);
     * ```
     * Fails if no such user found.
     *
     * Comparison expressions can be used as well:
     *
     * ```php
     * <?php
     * $I->seeInDatabase('posts', ['num_comments >=' => '0']);
     * $I->seeInDatabase('users', ['email like' => 'miles@davis.com']);
     * ```
     *
     * Supported operators: `<`, `>`, `>=`, `<=`, `!=`, `like`.
     *
     *
     * @param string $table
     * @param array $criteria
     * @see \Codeception\Module\Db::seeInDatabase()
     */
    public function seeInDatabase($table, $criteria = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeInDatabase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that the given number of records were found in the database.
     *
     * ```php
     * <?php
     * $I->seeNumRecords(1, 'users', ['name' => 'davert'])
     * ?>
     * ```
     *
     * @param int $expectedNumber Expected number
     * @param string $table Table name
     * @param array $criteria Search criteria [Optional]
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Db::seeNumRecords()
     */
    public function canSeeNumRecords($expectedNumber, $table, $criteria = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeNumRecords', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that the given number of records were found in the database.
     *
     * ```php
     * <?php
     * $I->seeNumRecords(1, 'users', ['name' => 'davert'])
     * ?>
     * ```
     *
     * @param int $expectedNumber Expected number
     * @param string $table Table name
     * @param array $criteria Search criteria [Optional]
     * @see \Codeception\Module\Db::seeNumRecords()
     */
    public function seeNumRecords($expectedNumber, $table, $criteria = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeNumRecords', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Effect is opposite to ->seeInDatabase
     *
     * Asserts that there is no record with the given column values in a database.
     * Provide table name and column values.
     *
     * ``` php
     * <?php
     * $I->dontSeeInDatabase('users', ['name' => 'Davert', 'email' => 'davert@mail.com']);
     * ```
     * Fails if such user was found.
     *
     * Comparison expressions can be used as well:
     *
     * ```php
     * <?php
     * $I->dontSeeInDatabase('posts', ['num_comments >=' => '0']);
     * $I->dontSeeInDatabase('users', ['email like' => 'miles%']);
     * ```
     *
     * Supported operators: `<`, `>`, `>=`, `<=`, `!=`, `like`.
     *
     * @param string $table
     * @param array $criteria
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Db::dontSeeInDatabase()
     */
    public function cantSeeInDatabase($table, $criteria = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeInDatabase', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Effect is opposite to ->seeInDatabase
     *
     * Asserts that there is no record with the given column values in a database.
     * Provide table name and column values.
     *
     * ``` php
     * <?php
     * $I->dontSeeInDatabase('users', ['name' => 'Davert', 'email' => 'davert@mail.com']);
     * ```
     * Fails if such user was found.
     *
     * Comparison expressions can be used as well:
     *
     * ```php
     * <?php
     * $I->dontSeeInDatabase('posts', ['num_comments >=' => '0']);
     * $I->dontSeeInDatabase('users', ['email like' => 'miles%']);
     * ```
     *
     * Supported operators: `<`, `>`, `>=`, `<=`, `!=`, `like`.
     *
     * @param string $table
     * @param array $criteria
     * @see \Codeception\Module\Db::dontSeeInDatabase()
     */
    public function dontSeeInDatabase($table, $criteria = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('dontSeeInDatabase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Fetches all values from the column in database.
     * Provide table name, desired column and criteria.
     *
     * ``` php
     * <?php
     * $mails = $I->grabColumnFromDatabase('users', 'email', array('name' => 'RebOOter'));
     * ```
     *
     * @param string $table
     * @param string $column
     * @param array $criteria
     *
     * @return array
     * @see \Codeception\Module\Db::grabColumnFromDatabase()
     */
    public function grabColumnFromDatabase($table, $column, $criteria = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('grabColumnFromDatabase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Fetches all values from the column in database.
     * Provide table name, desired column and criteria.
     *
     * ``` php
     * <?php
     * $mails = $I->grabFromDatabase('users', 'email', array('name' => 'RebOOter'));
     * ```
     *
     * @param string $table
     * @param string $column
     * @param array  $criteria
     *
     * @return mixed
     * @see \Codeception\Module\Db::grabFromDatabase()
     */
    public function grabFromDatabase($table, $column, $criteria = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('grabFromDatabase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Returns the number of rows in a database
     *
     * @param string $table    Table name
     * @param array  $criteria Search criteria [Optional]
     *
     * @return int
     * @see \Codeception\Module\Db::grabNumRecords()
     */
    public function grabNumRecords($table, $criteria = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('grabNumRecords', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Update an SQL record into a database.
     *
     * ```php
     * <?php
     * $I->updateInDatabase('users', array('isAdmin' => true), array('email' => 'miles@davis.com'));
     * ?>
     * ```
     *
     * @param string $table
     * @param array $data
     * @param array $criteria
     * @see \Codeception\Module\Db::updateInDatabase()
     */
    public function updateInDatabase($table, $data, $criteria = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('updateInDatabase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Enters a directory In local filesystem.
     * Project root directory is used by default
     *
     * @param string $path
     * @see \Codeception\Module\Filesystem::amInPath()
     */
    public function amInPath($path) {
        return $this->getScenario()->runStep(new \Codeception\Step\Condition('amInPath', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Opens a file and stores it's content.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param string $filename
     * @see \Codeception\Module\Filesystem::openFile()
     */
    public function openFile($filename) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('openFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Deletes a file
     *
     * ``` php
     * <?php
     * $I->deleteFile('composer.lock');
     * ?>
     * ```
     *
     * @param string $filename
     * @see \Codeception\Module\Filesystem::deleteFile()
     */
    public function deleteFile($filename) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('deleteFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Deletes directory with all subdirectories
     *
     * ``` php
     * <?php
     * $I->deleteDir('vendor');
     * ?>
     * ```
     *
     * @param string $dirname
     * @see \Codeception\Module\Filesystem::deleteDir()
     */
    public function deleteDir($dirname) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('deleteDir', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Copies directory with all contents
     *
     * ``` php
     * <?php
     * $I->copyDir('vendor','old_vendor');
     * ?>
     * ```
     *
     * @param string $src
     * @param string $dst
     * @see \Codeception\Module\Filesystem::copyDir()
     */
    public function copyDir($src, $dst) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('copyDir', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks If opened file has `text` in it.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param string $text
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Filesystem::seeInThisFile()
     */
    public function canSeeInThisFile($text) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeInThisFile', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks If opened file has `text` in it.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param string $text
     * @see \Codeception\Module\Filesystem::seeInThisFile()
     */
    public function seeInThisFile($text) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeInThisFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks If opened file has the `number` of new lines.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeNumberNewLines(5);
     * ?>
     * ```
     *
     * @param int $number New lines
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Filesystem::seeNumberNewLines()
     */
    public function canSeeNumberNewLines($number) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeNumberNewLines', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks If opened file has the `number` of new lines.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeNumberNewLines(5);
     * ?>
     * ```
     *
     * @param int $number New lines
     * @see \Codeception\Module\Filesystem::seeNumberNewLines()
     */
    public function seeNumberNewLines($number) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeNumberNewLines', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that contents of currently opened file matches $regex
     *
     * @param string $regex
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Filesystem::seeThisFileMatches()
     */
    public function canSeeThisFileMatches($regex) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeThisFileMatches', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that contents of currently opened file matches $regex
     *
     * @param string $regex
     * @see \Codeception\Module\Filesystem::seeThisFileMatches()
     */
    public function seeThisFileMatches($regex) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeThisFileMatches', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks the strict matching of file contents.
     * Unlike `seeInThisFile` will fail if file has something more than expected lines.
     * Better to use with HEREDOC strings.
     * Matching is done after removing "\r" chars from file content.
     *
     * ``` php
     * <?php
     * $I->openFile('process.pid');
     * $I->seeFileContentsEqual('3192');
     * ?>
     * ```
     *
     * @param string $text
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Filesystem::seeFileContentsEqual()
     */
    public function canSeeFileContentsEqual($text) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeFileContentsEqual', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks the strict matching of file contents.
     * Unlike `seeInThisFile` will fail if file has something more than expected lines.
     * Better to use with HEREDOC strings.
     * Matching is done after removing "\r" chars from file content.
     *
     * ``` php
     * <?php
     * $I->openFile('process.pid');
     * $I->seeFileContentsEqual('3192');
     * ?>
     * ```
     *
     * @param string $text
     * @see \Codeception\Module\Filesystem::seeFileContentsEqual()
     */
    public function seeFileContentsEqual($text) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeFileContentsEqual', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks If opened file doesn't contain `text` in it
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->dontSeeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param string $text
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Filesystem::dontSeeInThisFile()
     */
    public function cantSeeInThisFile($text) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeInThisFile', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks If opened file doesn't contain `text` in it
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->dontSeeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param string $text
     * @see \Codeception\Module\Filesystem::dontSeeInThisFile()
     */
    public function dontSeeInThisFile($text) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('dontSeeInThisFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Deletes a file
     * @see \Codeception\Module\Filesystem::deleteThisFile()
     */
    public function deleteThisFile() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('deleteThisFile', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file exists in path.
     * Opens a file when it's exists
     *
     * ``` php
     * <?php
     * $I->seeFileFound('UserModel.php','app/models');
     * ?>
     * ```
     *
     * @param string $filename
     * @param string $path
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Filesystem::seeFileFound()
     */
    public function canSeeFileFound($filename, $path = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('seeFileFound', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file exists in path.
     * Opens a file when it's exists
     *
     * ``` php
     * <?php
     * $I->seeFileFound('UserModel.php','app/models');
     * ?>
     * ```
     *
     * @param string $filename
     * @param string $path
     * @see \Codeception\Module\Filesystem::seeFileFound()
     */
    public function seeFileFound($filename, $path = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('seeFileFound', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file does not exist in path
     *
     * @param string $filename
     * @param string $path
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Filesystem::dontSeeFileFound()
     */
    public function cantSeeFileFound($filename, $path = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeFileFound', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file does not exist in path
     *
     * @param string $filename
     * @param string $path
     * @see \Codeception\Module\Filesystem::dontSeeFileFound()
     */
    public function dontSeeFileFound($filename, $path = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Assertion('dontSeeFileFound', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Erases directory contents
     *
     * ``` php
     * <?php
     * $I->cleanDir('logs');
     * ?>
     * ```
     *
     * @param string $dirname
     * @see \Codeception\Module\Filesystem::cleanDir()
     */
    public function cleanDir($dirname) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('cleanDir', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Saves contents to file
     *
     * @param string $filename
     * @param string $contents
     * @see \Codeception\Module\Filesystem::writeToFile()
     */
    public function writeToFile($filename, $contents) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('writeToFile', func_get_args()));
    }
}
