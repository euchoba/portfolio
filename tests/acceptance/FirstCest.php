<?php


class FirstCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Title of a longer featured blog post');
    }
//    public function _before(AcceptanceTester $I)
//    {
//    }
//
//    public function _after(AcceptanceTester $I)
//    {
//    }
//
//    // tests
//    public function tryToTest(AcceptanceTester $I)
//    {
//    }
}
