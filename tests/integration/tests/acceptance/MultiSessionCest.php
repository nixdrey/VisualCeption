<?php

class MultiSessionCest
{


    /**
     * @param \WebGuy $I
     * @param $scenario
     * @return void
     */
    public function dontSeeVisualChangesInMultiSessions(WebGuy $I, $scenario): void
    {
        $I->amOnPage("/multiSession.html");
        $I->dontSeeVisualChanges("block", ".block");

        $friend = $I->haveFriend('friend', 'WebGuy');
        $friend->does(function (WebGuy $I) {
            $I->amOnPage("/multiSessionChanged.html");
            $I->dontSeeVisualChanges("blockInAnotherSession", ".block");
        });

        $I->amOnPage("/multiSession.html");
        $I->dontSeeVisualChanges("block", ".block");
    }

}
