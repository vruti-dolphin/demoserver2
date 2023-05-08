<?php
namespace Test\Helloworld\Block; 

use Magento\Framework\View\Element\Template;

class Helloworld extends Template
{
    public function getHelloWorldText()
    {
        return 'test data';
    }

    protected function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Test Page'));
        return parent::_prepareLayout();
    }

}