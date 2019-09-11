<?php

namespace SimplifiedMagento\Database\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\ResponseInterface;
use Magento\Framework\App\Action\Action;
use SimplifiedMagento\Database\Model\AffiliateMember;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;

class Index extends Action
{
    protected $affiliateMemberFactory;

    /**
     * Class constructor.
     */
    public function __construct(Context $context, AffiliateMemberFactory $affiliateMemberFactory)
    {
        $this->affiliateMember = $affiliateMemberFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $affiliateMember = $this->affiliateMember->create();
        // $member = $affiliateMember->load(4);
        // $member->setAddress('New Address');
        // $member->save();
        // var_dump($member->getData());
        // $member->delete();

        // $new_member = $this->affiliateMember->create()->addData([
        //     'name'=>'Rand',
        //     'address'=>'a new address',
        //     'status'=>true,
        //     'phone_number'=>'987456948',
        // ]);
        // $new_member->save();

        $collection = $affiliateMember->getCollection()
            ->addFieldToSelect(['name'])
            ->addFieldToFilter('status', 1);
        foreach ($collection as $key => $row) {
            print_r($row->getData());
            echo '<br>';
        }
    }
}