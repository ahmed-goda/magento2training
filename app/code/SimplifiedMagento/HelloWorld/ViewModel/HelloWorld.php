<?php

namespace SimplifiedMagento\HelloWorld\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;

class HelloWorld implements ArgumentInterface
{
    protected $product;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->product = $productRepository;
    }

    public function getHelloWorld()
    {
        return 'This Comes From The View Element!';
    }
    
    public function getArrayToTemplate()
    {
        $arrayToReturn = [
            'First Element From View Model',
            'Second Element From View Model',
            'Third Element From View Model'
        ];

        return $arrayToReturn;
    }

    public function getProductName()
    {
        $product = $this->product->get('24-MB01');
        return $product->getName();
    }
}
