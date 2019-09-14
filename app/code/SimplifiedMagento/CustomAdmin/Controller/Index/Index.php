<?php

namespace SimplifiedMagento\CustomAdmin\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Index extends Action
{
    private $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig, Context $context)
    {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    public function execute()
    {
        echo $this->scopeConfig->getValue('First_Section/First_Group/First_Field') . '</br>';
        print_r(
            $this->scopeConfig->getValue('First_Section/First_Group/Third_Field')
        );
    }
    
}
