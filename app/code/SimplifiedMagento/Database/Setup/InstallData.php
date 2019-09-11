<?php

namespace SimplifiedMagento\Database\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        
        $setup->getConnection()->insert(
            $setup->getTable('affiliate_member'),
            ['name'=>'Bob', 'address'=>'No 10, Dubai', 'status'=>true]
        );
        
        $setup->getConnection()->insert(
            $setup->getTable('affiliate_member'),
            ['name'=>'Alex', 'address'=>'No 11, Dubai']
        );

        $setup->endSetup();
    }
}