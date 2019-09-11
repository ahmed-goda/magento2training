<?php

namespace SimplifiedMagento\FirstModule\NotMagento;

class BigPencil implements PencilInterface
{
    public function getPencilType()
    {
        return "Big Pencil";
    }
}