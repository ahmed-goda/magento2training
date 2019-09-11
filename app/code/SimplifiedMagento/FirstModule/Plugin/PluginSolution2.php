<?php

namespace SimplifiedMagento\FirstModule\Plugin;

class PluginSolution2
{

    public function beforeExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject)
    {
        echo "Before execute sort order 20" . "<br>";
    }

    public function afterExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject)
    {
        echo "After execute sort order 20" . "<br>";
    }

    public function aroundExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject, callable $proceed)
    {
        echo "Before execute sort order 20" . "<br>";
        $proceed();
        echo "After execute sort order 20" . "<br>";
    }
}