<?php
/**
 * Created by PhpStorm.
 * User: liyassoladogun
 * Date: 2/9/19
 * Time: 8:48 AM
 */

namespace SimplifiedMagento\CustomAdmin\Block\Adminhtml\Member\Edit;


use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class SaveButton implements ButtonProviderInterface
{

    public function getButtonData()
    {
        return [
            'label' => __('Save Member'),
            'class' => 'save primary',
            'sort_order' => 50
        ];
    }
}