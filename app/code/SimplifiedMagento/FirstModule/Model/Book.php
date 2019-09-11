<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\BookInterface;
use SimplifiedMagento\FirstModule\Api\ColorInterface;
use SimplifiedMagento\FirstModule\Api\SizeInterface;

class Book implements BookInterface
{
    protected $color;
    protected $size;

    /**
     * Class constructor.
     */
    public function __construct(ColorInterface $color, SizeInterface $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    public function getBookAttributes()
    {
        return "Book has ".$this->color->getColor()." color and ".$this->size->getSize()." size";
    }
}