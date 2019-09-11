<?php

namespace SimplifiedMagento\FirstModule\Model;

class HeavyService
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        echo 'Heavy Service Instantiated!' . '<br>';
    }

    public function printMessage()
    {
        echo 'A Message From Heavy Service' . '<br>';
    }
}