<?php
/**
 * Created by PhpStorm.
 * User: liyassoladogun
 * Date: 1/20/19
 * Time: 12:21 AM
 */

namespace SimplifiedMagento\CustomAdmin\Model;


use Magento\Framework\Option\ArrayInterface;

class AdminArray implements ArrayInterface
{

    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => __('First')],
            ['value' => 1, 'label' => __('Second')],
            ['value' => 2, 'label' => __('Third')],
            ['value' => 3, 'label' => __('Fourth')]
        ];
    }
}