<?php

namespace Dolphin\SocialShare\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Inviqa\SystemConfigExample\Helper\Data;

class Share extends Template
{
    protected $helper;

    public function __construct(Context $context, Data $helper) {
        $this->helper = $helper;
        parent::__construct($context);
    }


}


