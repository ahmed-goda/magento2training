<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\SizeInterface;

class NormalSize implements SizeInterface
{

    public function getSize()
    {
        return "Normal";
    }
}