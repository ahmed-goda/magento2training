<?php

namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;
use SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface;

class AffiliateMember extends AbstractExtensibleModel implements AffiliateMemberInterface
{

    /**
     * Class constructor.
     */
    protected function _construct()
    {
        $this->_init(AffiliateMemberResource::class);
    }

    /**
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(AffiliateMemberInterface::ID);
    }
    
    /**
     *
     * @return string
     */
    public function getName()
    {
        return $this->getData(AffiliateMemberInterface::NAME);
    }
    
    /**
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->getData(AffiliateMemberInterface::STATUS);
    }
    
    /**
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->getData(AffiliateMemberInterface::ADDRESS);
    }
    
    /**
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->getData(AffiliateMemberInterface::PHONE_NUMBER);
    }
    
    /**
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(AffiliateMemberInterface::CREATED_AT);
    }
    
    /**
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getData(AffiliateMemberInterface::UPDATED_AT);
    }
    
    /**
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        return $this->setData(AffiliateMemberInterface::NAME, $name);
    }
    
    /**
     *
     * @param bool $status
     */
    public function setStatus(bool $status)
    {
        return $this->setData(AffiliateMemberInterface::STATUS, $status);
    }
    
    /**
     *
     * @param string $address
     */
    public function setAddress(string $address)
    {
        return $this->setData(AffiliateMemberInterface::ADDRESS, $address);
    }
    
    /**
     *
     * @param string $phone_number
     */
    public function setPhoneNumber(string $phone_number)
    {
        return $this->setData(AffiliateMemberInterface::PHONE_NUMBER, $phone_number);
    }

    /**
     *
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }
    
    /**
     *
     * @param \SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface $affiliateMemberExtension
     * 
     * @return $this
     */
    public function setExtensionAttributes(\SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface $affiliateMemberExtension)
    {
        return $this->_setExtensionAttributes($affiliateMemberExtension);
    }
}