<?php

namespace SimplifiedMagento\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class HelloWorld extends Template
{
    public function getHelloWorld()
    {
        return 'This Comes From Custom Block';
    }
    
    public function gendArrayToTemplate()
    {
        $array_to_return = [
            'First_element',
            'Second_element',
            'Third_element'
        ];

        return $array_to_return;
    }
}
