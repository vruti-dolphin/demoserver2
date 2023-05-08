<?php

namespace Test\Helloworld\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\StoreManagerInterface;

class Data extends AbstractHelper
{

    protected $storeManager;

    public function __construct(
        Context $context,
        StoreManagerInterface $storeManager
    )
    {
        $this->storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getStoreManagerData()
    {
       $storeUrl = $this->storeManager->getStore()->getBaseUrl();
       echo $storeUrl;

        // get Link Url of store
        $storeLinkUrl = $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_DIRECT_LINK);
        echo $storeLinkUrl;

        // get media Base Url
        $storeMediaUrl = $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        echo $storeMediaUrl;
    }

    public function getStoreConfig()
    {
        echo '<input type="submit" value="Submit">';
    }
}


