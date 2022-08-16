<?php

namespace Amasty\YLikhtarModule\Block;

use Magento\Framework\View\Element\Template;

class Index extends Template
{
    public function sayHiTo(string $block)
    {
        return $block;
    }
}