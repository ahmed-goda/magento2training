<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Api\ColorInterface;
use SimplifiedMagento\FirstModule\Api\SizeInterface;

class Pencil implements PencilInterface
{
    protected $color;
    protected $size;
    protected $name;

    /**
     * Class constructor.
     */
    public function __construct(
        ColorInterface $color,
        SizeInterface $size,
        string $name = null,
        string $school = null
    )
    {
        $this->color = $color;
        $this->size = $size;
        $this->name = $name;
        $this->school = $school;
    }

    public function getPencilType()
    {
        return "Pencil has ".$this->color->getColor()." color and ".$this->size->getSize()." size";
    }
}