<?php
/**
 * Created by PhpStorm.
 * User: liyassoladogun
 * Date: 1/24/19
 * Time: 5:33 PM
 */

namespace SimplifiedMagento\CustomAdmin\Controller\Adminhtml\Member;

use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\Model\View\Result\ForwardFactory;

class NewAction extends Action
{

    protected  $forwardFactory;
    private $pageFactory;
    public function __construct(
        PageFactory $pageFactory,
        ForwardFactory $forwardFactory,
        Action\Context $context)
    {
        $this->forwardFactory = $forwardFactory;
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('SimplifiedMagento_CustomAdmin::parent');
    }


    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Forward $resultForward */
        $resultForward = $this->forwardFactory->create();
        return $resultForward->forward('edit');
    }
}