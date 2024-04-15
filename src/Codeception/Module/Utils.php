<?php

namespace Codeception\Module;

use Codeception\Test\Descriptor;
use Codeception\TestInterface;

class Utils
{
    /**
     * @throws \JsonException
     */
    public function getTestFileName(TestInterface $test, $identifier)
    {
        $filename = preg_replace('~\W~', '.', Descriptor::getTestSignatureUnique($test));
        return mb_strcut($filename, 0, 249 - strlen($identifier), 'utf-8') . '.' . $identifier . '.png';
    }
}
