<?php

namespace SimplifiedMagento\Database\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface AffiliateMemberRepositoryInterface
{
    /**
     *
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface[]
     */
    public function getList();
    
    /**
     *
     * @param int $id
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function getAffiliateMemberById(int $id);
    
    /**
     *
     * @param \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $member
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function saveAffiliateMember(\SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $member);

    /**
     *
     * @param int $id
     * @return void
     */
    public function deleteAffiliateMemberById(int $id);

    /**
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return SimplifiedMagento\Database\Api\Data\AffiliateMemberSearchResultInterface
     */
    public function getSearchResultsList(SearchCriteriaInterface $searchCriteria);
}
