<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\SizeInterface;

class SmallSize implements SizeInterface
{

    public function getSize()
    {
        return "Small";
    }
}