<?php

namespace Dolphin\SocialShare\Model\Config\Backend;

class Image extends \Magento\Config\Model\Config\Backend\Image
{   
    const UPLOAD_DIR = 'Dolphin/SocialShare/twitter2';

    protected function _getUploadDir()
    {
        return $this->_mediaDirectory->getAbsolutePath($this->_appendScopeInfo(self::UPLOAD_DIR));
    }

    protected function _getAllowedExtensions()
    {
        return ['png'];
    }
    
}