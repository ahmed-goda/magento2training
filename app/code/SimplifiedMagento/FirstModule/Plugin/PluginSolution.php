<?php

namespace SimplifiedMagento\FirstModule\Plugin;

class PluginSolution
{

    public function beforeExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject)
    {
        echo "Before execute sort order 10" . "<br>";
    }

    public function afterExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject)
    {
        echo "After execute sort order 10" . "<br>";
    }

    public function aroundExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject, callable $proceed)
    {
        echo "Before execute sort order 10" . "<br>";
        $proceed();
        echo "After execute sort order 10" . "<br>";
    }

    // public function beforeSetName(\Magento\Catalog\Model\Product $subject, string $name)
    // {
    //     return "Before plugin " . $name;
    // }

    // public function afterGetName(\Magento\Catalog\Model\Product $subject, string $result)
    // {
    //     return $result . " After plugin";
    // }

    // public function aroundGetName(\Magento\Catalog\Model\Product $subject, callable $proceed)
    // {
    //     echo "Before Proceed" . "<br>";
    //     $name = $proceed();
    //     echo $name . "<br>";
    //     echo "After Proceed" . "<br>";
    //     return $name;
    // }

    // public function aroundGetIdBySku(\Magento\Catalog\Model\Product $subject, callable $proceed, string $sku)
    // {
    //     echo "Before Proceed" . "<br>";
    //     $id = $proceed($sku);
    //     echo $id . "<br>";
    //     echo "After Proceed" . "<br>";
    //     return $id;
    // }
}