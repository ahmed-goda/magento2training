<?php

namespace SimplifiedMagento\CustomAdmin\Model;

use Magento\Framework\Option\ArrayInterface;

class AdminArray implements ArrayInterface
{
    /**
     * Returns Array of option as value-label pairs
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => __('First')],
            ['value' => 1, 'label' => __('Second')],
            ['value' => 2, 'label' => __('Third')],
            ['value' => 3, 'label' => __('Forth')],
        ];
    }
}
