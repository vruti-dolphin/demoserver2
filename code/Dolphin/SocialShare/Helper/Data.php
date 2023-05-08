<?php

namespace Dolphin\SocialShare\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
	 public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
   {
      $this->scopeConfig = $scopeConfig;
   }

	// const XML_PATH_HELLOWORLD = 'socialshare/';

	public function getConfigValue($field, $storeId = null)
	{
		return $this->scopeConfig->getValue(
			$field, ScopeInterface::SCOPE_STORE, $storeId
		);
	}

	// public function getGeneralConfig($code, $storeId = null)
	// {

	// 	return $this->getConfigValue(self::XML_PATH_HELLOWORLD .'general/'. $code, $storeId);
	// }

  	// public function isAllow()
    // {
    //     $isWishlistActive = $this->scopeConfig->getValue(
    //         'socialshare\url\custom',
    //         \Magento\Store\Model\ScopeInterface::SCOPE_STORE
    //     );
    //     echo $isWishlistActive;
    //     exit();
    //     return $isOutputEnabled && $isWishlistActive;
    // }

    protected $scopeConfig;
     const XML_PATH_EMAIL_RECIPIENT = 'socialshare\url\use_custom';

  	public function getReceipentEmail() {
     $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;

    return $this->scopeConfig->getValue(self::XML_PATH_EMAIL_RECIPIENT, $storeScope);

    }
}


