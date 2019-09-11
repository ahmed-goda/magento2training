<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\ColorInterface;
use SimplifiedMagento\FirstModule\Api\BrightnessInterface;

class YellowColor implements ColorInterface
{

    protected $brightness;

    /**
     * Class constructor.
     */
    public function __construct(BrightnessInterface $brightness)
    {
        $this->brightness = $brightness;
    }

    public function getColor()
    {
        return "Yellow";
    }
}