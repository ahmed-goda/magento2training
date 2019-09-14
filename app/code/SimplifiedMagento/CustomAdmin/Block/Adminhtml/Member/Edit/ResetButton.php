<?php
/**
 * Created by PhpStorm.
 * User: liyassoladogun
 * Date: 2/9/19
 * Time: 8:46 AM
 */

namespace SimplifiedMagento\CustomAdmin\Block\Adminhtml\Member\Edit;


use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class ResetButton implements ButtonProviderInterface
{

    public function getButtonData()
    {
       return [
           'label' => __('Reset'),
           'class' =>'reset',
           'on_click' =>'location.reload()',
           'sort_order' => 30
       ];
    }
}