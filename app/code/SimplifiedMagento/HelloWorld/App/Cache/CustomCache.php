<?php

namespace SimplifiedMagento\HelloWorld\App\Cache;

use Magento\Framework\App\Cache\Type\FrontendPool;
use Magento\Framework\Cache\Frontend\Decorator\TagScope;
use Magento\Framework\Config\CacheInterface;

class CustomCache extends TagScope implements CacheInterface
{
    const TYPE_IDENTIFIER = 'hello';
    const CACHE_TAG = 'HELLO';

    /**
     *
     * @param FrontendPool $frontendPool
     * @param string $tag Cache tag name
     */
    public function __construct(FrontendPool $frontendPool)
    {
        $this->frontendPool = $frontendPool;
        parent::__construct($frontendPool->get(self::TYPE_IDENTIFIER), self::CACHE_TAG);
    }
}
