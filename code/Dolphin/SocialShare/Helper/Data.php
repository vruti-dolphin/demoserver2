<?php

namespace Dolphin\SocialShare\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Data extends AbstractHelper 
{
   protected $scopeConfig;

   const XML_PATH_EMAIL_RECIPIENT = 'socialshare/url/custom';

   public function __construct(
      ScopeConfigInterface $scopeConfig)
   {
      $this->scopeConfig = $scopeConfig;
   }

   public function getReceipentEmail() {
     $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;

     return $this->scopeConfig->getValue(self::XML_PATH_EMAIL_RECIPIENT, $storeScope);
   }

   public function isEnabled($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
   {
      return $this->scopeConfig->isSetFlag(
         'socialshare/url/custom',
         $scope
      );
   }

   public function isEnabledfb($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
   {
      return $this->scopeConfig->isSetFlag(
         'socialshare/url/facebook',
          $scope
      );
   }

   public function isEnabledtwitter($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
   {
      return $this->scopeConfig->isSetFlag(
         'socialshare/url/twitter',
          $scope
      );
   }
}



