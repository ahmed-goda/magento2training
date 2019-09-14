<?php
/**
 * Created by PhpStorm.
 * User: liyassoladogun
 * Date: 1/21/19
 * Time: 4:43 PM
 */

namespace SimplifiedMagento\CustomAdmin\Controller\Adminhtml\Member;
use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{

    private $pageFactory;
   public function __construct(
       PageFactory $pageFactory,
       Action\Context $context)
   {
       $this->pageFactory = $pageFactory;
       parent::__construct($context);
   }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('SimplifiedMagento_CustomAdmin::parent');
    }


    public function execute()
    {
        return $this->pageFactory->create();
    }
}