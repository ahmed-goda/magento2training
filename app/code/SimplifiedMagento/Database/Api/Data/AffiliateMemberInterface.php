<?php

namespace SimplifiedMagento\Database\Api\Data;

interface AffiliateMemberInterface
{
    const ID = 'entity_id';
    const NAME = 'name';
    const STATUS = 'status';
    const ADDRESS = 'address';
    const PHONE_NUMBER = 'phone_number';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     *
     * @return int
     */
    public function getId();
    
    /**
     *
     * @return string
     */
    public function getName();
    
    /**
     *
     * @return bool
     */
    public function getStatus();
    
    /**
     *
     * @return string
     */
    public function getAddress();
    
    /**
     *
     * @return string
     */
    public function getPhoneNumber();
    
    /**
     *
     * @return string
     */
    public function getCreatedAt();
    
    /**
     *
     * @return string
     */
    public function getUpdatedAt();
    
    /**
     *
     * @param string $name
     * 
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setName(string $name);
    
    /**
     *
     * @param bool $status
     * 
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setStatus(bool $status);
    
    /**
     *
     * @param string $address
     * 
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setAddress(string $address);
    
    /**
     *
     * @param string $phone_number
     * 
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setPhoneNumber(string $phone_number);
    
    /**
     *
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface|null
     */
    public function getExtensionAttributes();
    
    /**
     *
     * @param \SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface $affiliateMemberExtension
     * 
     * @return $this
     */
    public function setExtensionAttributes(\SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface $affiliateMemberExtension);
}
