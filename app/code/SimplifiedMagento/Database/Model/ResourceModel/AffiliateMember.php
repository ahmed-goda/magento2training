<?php

namespace SimplifiedMagento\Database\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDB;

class AffiliateMember extends AbstractDB
{

    /**
     * Class constructor.
     */
    protected function _construct()
    {
        $this->_init('affiliate_member', 'entity_id');
    }
}