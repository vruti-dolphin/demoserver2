<?php

namespace Dolphin\SocialShare\Helper;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\Context;

class Data extends AbstractHelper 
{
   protected $scopeConfig;

   public function __construct(
      ScopeConfigInterface $scopeConfig,
      \Magento\Store\Model\StoreManagerInterface $storeManager,
      Context $context
   )
   {
      $this->scopeConfig = $scopeConfig;
      $this->_storeManager = $storeManager;
      parent::__construct($context);
   }

   public function isEnabled($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
   {
      return $this->scopeConfig->getValue(
         'socialshare/url/custom',
         $scope
      );
   }

   public function isEnabledfb($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
   {
      return $this->scopeConfig->getValue(
         'socialshare/url/facebook',
         $scope
      );
   }

   public function isEnabledtwitter($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
   {
      return $this->scopeConfig->getValue(
         'socialshare/url/twitter',
         $scope
      );
   }

   public function isEnabledwhatsapp($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
   {
      return $this->scopeConfig->getValue(
         'socialshare/url/whatsapp',
         $scope
      );
   }

   public function isEnabledpinterest($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
   {
      return $this->scopeConfig->getValue(
         'socialshare/url/pinterest',
         $scope
      );
   }

   // get image in admin 

   // get value

   public function issEnabledshare($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
   {
      return $this->scopeConfig->getValue(
         'socialshare/general/share/image',
         $scope
      );
   }

   // get media url

   public function getMediaUrl(){
      return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA).'Dolphin/SocialShare/twitter2';
   }
   
}



