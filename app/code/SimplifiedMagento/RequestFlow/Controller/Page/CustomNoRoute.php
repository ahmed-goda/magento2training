<?php

namespace SimplifiedMagento\RequestFlow\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\ResponseInterface;

class CustomNoRoute extends Action
{
    public function execute()
    {
        echo 'This is Custom 404 Page' . '<br>';
    }
}