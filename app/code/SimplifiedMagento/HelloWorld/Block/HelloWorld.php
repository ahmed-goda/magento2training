<?php

namespace SimplifiedMagento\HelloWorld\Block;

use Magento\Framework\View\Element\Template;
use Magento\Catalog\Api\ProductRepositoryInterface;

class HelloWorld extends Template
{
    protected $product;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        Template\Context $context,
        array $data = []
    )
    {
        $this->product = $productRepository;
        parent::__construct($context, $data);
    }

    public function getHelloWorld()
    {
        return 'This Comes From Custom Block';
    }
    
    public function getArrayToTemplate()
    {
        $arrayToReturn = [
            'First_element',
            'Second_element',
            'Third_element'
        ];

        return $arrayToReturn;
    }

    public function getProductName()
    {
        $product = $this->product->get('24-MB01');
        return $product->getName();
    }
}
