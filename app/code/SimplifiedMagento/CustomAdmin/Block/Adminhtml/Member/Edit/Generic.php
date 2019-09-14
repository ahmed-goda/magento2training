<?php
/**
 * Created by PhpStorm.
 * User: liyassoladogun
 * Date: 2/9/19
 * Time: 8:14 AM
 */

namespace SimplifiedMagento\CustomAdmin\Block\Adminhtml\Member\Edit;


use Magento\Framework\Registry;
use SimplifiedMagento\Database\Model\AffiliateMember;

class Generic
{
    protected $urlBuilder;

    protected $registry;

    public function __construct(
        \Magento\Backend\Block\Widget\Context $context,
        Registry $registry
    )
    {
        $this->urlBuilder = $context->getUrlBuilder();
        $this->registry = $registry;
    }

    public function getId() {
        /** @var AffiliateMember $member */
        $member = $this->registry->registry('member');
        return $member ? $member->getId() : null;
    }

    public function getUrl($route='', $param=[]) {
       return $this->urlBuilder->getUrl($route, $param);
    }

}