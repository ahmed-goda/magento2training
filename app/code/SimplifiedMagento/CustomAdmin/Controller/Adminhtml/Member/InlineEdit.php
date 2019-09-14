<?php

namespace SimplifiedMagento\CustomAdmin\Controller\Adminhtml\Member;


use Magento\Backend\App\Action;
use Magento\Framework\Controller\Result\JsonFactory;
use SimplifiedMagento\Database\Model\AffiliateMember;

class InlineEdit extends Action
{
    protected $affiliateMember;
    protected $jsonFactory;

    public function __construct(
        AffiliateMember $affiliateMember,
        JsonFactory $jsonFactory,
        Action\Context $context)
    {
        $this->affiliateMember = $affiliateMember;
        $this->jsonFactory = $jsonFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultJson = $this->jsonFactory->create();

        $error = false;

        $message = [];
        if($this->getRequest()->getParam('isAjax')) {
            $postItems = $this->getRequest()->getParam('items', []);

            if(!count($postItems)) {
                $message[] = __('Please correct data sent');
                $error = true;
            } else {
                foreach (array_keys($postItems) as $modelId) {
                    $model = $this->affiliateMember->load($modelId);
                    try {
                        $model->setData(array_merge($model->getData(), $postItems[$modelId]));
                        $model->save();c

                    } catch (\Exception $e) {
                        $message[] = $e->getMessage();
                        $error = true;
                    }
                }

            }
        }

        return $resultJson->setData([
            'messages' => $message,
            'error' => $error
        ]);
    }


}