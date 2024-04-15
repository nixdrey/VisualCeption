<?php
declare(strict_types=1);

namespace Codeception\Exception;

use PHPUnit\Framework\Exception;

class ImageDeviationException extends Exception
{

    /**
     * @param $message
     * @param string $identifier
     * @param string $expectedImage
     * @param string $currentImage
     * @param string $deviationImage
     */
    public function __construct(protected $message, private string $identifier, private string $expectedImage, private string $currentImage, private string $deviationImage)
    {
        parent::__construct($message);
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    public function getDeviationImage()
    {
        return $this->deviationImage;
    }

    /**
     * @return string
     */
    public function getCurrentImage()
    {
        return $this->currentImage;
    }

    public function getExpectedImage()
    {
        return $this->expectedImage;
    }

    /**
     * Wrapper for getMessage() which is declared as final.
     */
    public function __toString(): string
    {
        return $this->message;
    }
}
