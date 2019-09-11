<?php

namespace SimplifiedMagento\FirstModule\NotMagento;

class YellowPencil implements PencilInterface
{
    public function getPencilType()
    {
        return "Yellow Pencil";
    }
}