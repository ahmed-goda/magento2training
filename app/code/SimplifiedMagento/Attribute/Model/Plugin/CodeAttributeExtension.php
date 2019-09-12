<?php

namespace SimplifiedMagento\Attribute\Model\Plugin;

use SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionFactory;
use SimplifiedMagento\Database\Model\AffiliateMemberRepository;

class CodeAttributeExtension
{
    protected $extensionFactory;

    /**
     * Class constructor.
     */
    public function __construct(AffiliateMemberExtensionFactory $extensionFactory)
    {
        $this->extensionFactory = $extensionFactory;
    }

    public function aroundGetAffiliateMemberById(
        AffiliateMemberRepository $affiliateMemberRepository,
        \Closure $proceed,
        int $id
    )
    {
        $model = $proceed($id);
        $extensionAttributes = $model->getExtensionAttributes();
        
        if (null == $extensionAttributes) {
            $extensionAttributes = $this->extensionFactory->create();
        }

        $extensionAttributes->setCode('Code #' . $id);
        $model->setExtensionAttributes($extensionAttributes);

        return $model;
    }
}