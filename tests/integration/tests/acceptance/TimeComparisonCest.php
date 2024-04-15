<?php
declare(strict_types=1);
class TimeComparisonCest
{

    /**
     * Comparing a div that renders the current time
     */
    public function seeVisualChanges(WebGuy $I, $scenario): void
    {
        $I->amOnPage("/staticTimeChanged.html");
        $I->seeVisualChanges("block", "#theblock");
    }

    public function dontSeeVisualChanges(WebGuy $I, $scenario): void
    {
        $I->amOnPage("/staticTime.html");
        $I->dontSeeVisualChanges("block2", "#theblock");
    }

    public function seeVisualChangesAndHideElement(WebGuy $I, $scenario): void
    {
        $I->amOnPage("/staticTimeChanged.html");
        $I->seeVisualChanges("hideTheIntro", "#theblock");
    }

    public function dontSeeVisualChangesAndHideElement (WebGuy $I, $scenario): void
    {
        $I->amOnPage("/staticTimeChanged.html");
        $I->dontSeeVisualChanges("hideTheBlock", "#intro");
    }
}
