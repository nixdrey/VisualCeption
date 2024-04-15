<?php

use Codeception\Exception\ImageDeviationException;
use PHPUnit\Framework\ExpectationFailedException;

class WriteCurrentImageCest
{

    /**
     * fail the test. lookup is current image is written
     */
    public function writeCurrentImageFile(WebGuy $I, $scenario)
    {
        // expect failing the test
        $I->amOnPage("/staticTimeChanged.html");
        try {
            $I->dontSeeVisualChanges("currentImageIdentifier", "#theblock");
        } catch (ImageDeviationException $exception) {
            $currentImagePath = $exception->getCurrentImage();

            if (!is_file($exception->getCurrentImage())) {
                throw new ExpectationFailedException("The screenshot was not saved successfully.");
            }
        }
    }
}
