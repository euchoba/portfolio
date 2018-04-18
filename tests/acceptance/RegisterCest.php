<?php

use Codeception\Step\Argument\PasswordArgument;

/**
 * @run java -Dwebdriver.chrome.driver=chromedriver -jar ~/Sites/tools/selenium-server-standone-3.11.0.jar
 */
class RegisterCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('test password confirmation that does not match');
        $I->amOnPage('/register');
        $I->click('Sign up');
        $I->fillField('name', 'John Doe');
        $I->fillField('email', 'john@example.com');
        $I->fillField('password', 'password');
        $I->fillField('password_confirmation', 'passwordsdfsdf');
        $I->click('Register');
        $I->see('The password confirmation does not match.');
    }
}
