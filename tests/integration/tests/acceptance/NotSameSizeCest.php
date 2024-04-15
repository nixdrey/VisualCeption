<?php

class NotSameSizeCest
{

    /**
     * Comparing a div, that change it's size
     */
    public function seeVisualChangesAfterSizeChanges(WebGuy $I, $scenario)
    {
        $I->amOnPage("/redBlockBig.html");
        $I->seeVisualChanges("getRedDiv", "div");
    }
}
