<?php

namespace Dolphin\SocialShare\Helper;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Api\ProductRepositoryInterface;

class Data extends AbstractHelper 
{
   protected $scopeConfig;
   protected $productModel;
   protected $productRepository;

   const XML_PATH_EMAIL_RECIPIENT = 'socialshare/url/custom';

   public function __construct(
      ScopeConfigInterface $scopeConfig,
      Context $context,
      Product $productModel,
      ProductRepositoryInterface $productRepository)
   {
      $this->scopeConfig = $scopeConfig;
      $this->productModel = $productModel;
      $this->productRepository = $productRepository;
      parent::__construct($context);
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

   public function getProductUrl($productId, $storeId)
   {
        $product = $this->productModel->load($productId);
        $product->setStoreId($storeId);
        $url = $product->getProductUrl();
   }

}



