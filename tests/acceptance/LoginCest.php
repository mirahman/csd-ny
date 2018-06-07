<?php


class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function checkLogin(AcceptanceTester $I)
    {
        $I->amOnPage('/get-certified/practitioners/csm-certification');
        $I->see('Discover how you can earn your ScrumMaster certification');
        //$I->fillField('username', 'mizan');
        //$I->fillField('password', '123');
        $I->click('ScrumMaster role');
        $I->see('Scrum Values');
    }
}
