<?php

namespace SimplifiedMagento\Database\Model;

use Magento\Framework\DataObject;
use SimplifiedMagento\Database\Api\AffiliateMemberRepositoryInterface;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember\CollectionFactory;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember;
use SimplifiedMagento\Database\Api\Data\AffiliateMemberSearchResultInterfaceFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor;
use Magento\Framework\Api\SearchCriteriaInterface;

class AffiliateMemberRepository implements AffiliateMemberRepositoryInterface
{
    private $collectionFactory;
    private $affiliateMemberFactory;
    private $affiliateMember;
    private $resultInterfaceFactory;
    private $collectionProcessor;

    /**
     * Class constructor.
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        AffiliateMemberFactory $affiliateMemberFactory,
        AffiliateMember $affiliateMember,
        AffiliateMemberSearchResultInterfaceFactory $resultInterfaceFactory,
        CollectionProcessor $collectionProcessor
    )
    {
        $this->collectionFactory = $collectionFactory;
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        $this->affiliateMember = $affiliateMember;
        $this->resultInterfaceFactory = $resultInterfaceFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }

    /**
     *
     * @param int $id
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function getAffiliateMemberById(int $id)
    {
        return $this->affiliateMemberFactory->create()->load($id);
    }

    /**
     *
     * @param \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $member
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function saveAffiliateMember(\SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $member)
    {
        if ($member->getId() == null) {
            $this->affiliateMember->save($member);
            return $member;
        } else {
            $new_member = $this->affiliateMemberFactory->create()->load($member->getId());
            foreach ($new_member->getData() as $key => $value) {
                $new_member->setData($key, $value);
            }
            $this->affiliateMember->save($new_member);
            return $new_member;
        }
    }

    /**
     *
     * @param int $id
     * @return void
     */
    public function deleteAffiliateMemberById(int $id)
    {
        $member = $this->affiliateMemberFactory->create()->load($id);
        $member->delete();
    }

    /**
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return SimplifiedMagento\Database\Api\Data\AffiliateMemberSearchResultInterface
     */
    public function getSearchResultsList(SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->affiliateMemberFactory->create()->getCollection();
        $this->collectionProcessor->process($searchCriteria, $collection);
        $searchResults = $this->resultInterfaceFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getData());
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }
}