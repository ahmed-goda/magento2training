<?php
/**
 * Created by PhpStorm.
 * User: liyassoladogun
 * Date: 1/24/19
 * Time: 5:18 PM
 */

namespace SimplifiedMagento\CustomAdmin\Controller\Adminhtml\Member;
use Magento\Backend\App\Action;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use SimplifiedMagento\Database\Model\AffiliateMember;


class Edit extends Action
{
    protected $affiliateMember;

    private $pageFactory;
    protected $registry;

    public function __construct(
        PageFactory $pageFactory,
        AffiliateMember $affiliateMember,
        Registry $registry,
        Action\Context $context)
    {
        $this->affiliateMember = $affiliateMember;
        $this->pageFactory = $pageFactory;
        $this->registry = $registry;
        parent::__construct($context);
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('SimplifiedMagento_CustomAdmin::parent');
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $model = $this->affiliateMember;

        if($id) {
            $model->load($id);
            if(!$model->getId()) {
                $this->messageManager->addErrorMessage(__('This member does not exists'));

                $result = $this->resultRedirectFactory->create();
                return $result->setPath("affiliate/member/index");
            }
        }

        $data = $this->_getSession()->getFormData(true);

        if(!empty($data)) {
            $model->setData($data);
        }

        $this->registry->register('member', $model);

        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->pageFactory->create();

        $resultPage->addBreadcrumb(
            $id ? __('Edit Member') : __('Add a New Member'),
            $id ? __('Edit Member') : __('Add a New Member')
        );
        if($id) {
            $resultPage->getConfig()->getTitle()->prepend('Edit');
        } else {
            $resultPage->getConfig()->getTitle()->prepend('Add');
        }
        return $this->pageFactory->create();
    }
}