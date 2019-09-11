<?php

namespace SimplifiedMagento\Attribute\Model\Config;

use Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend;
use Magento\Framework\Exception\LocalizedException;

class Validation extends AbstractBackend
{
    /**
     * Validate object
     *
     * @param \Magento\Framework\DataObject $object
     * @return bool
     * @throws LocalizedException
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function validate($object)
    {
        if ($object->getData($this->getAttribute()->getAttributeCode()) < 10) {
            throw new LocalizedException(__('Value must not be less than 10'));
        }
        return parent::validate($object);
    }
}