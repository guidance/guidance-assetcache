<?php

class Guidance_Assetcache_Model_File
{

    const CACHE_LIFETIME = 86400;
    const CACHE_ID = 'GUIDANCE_ASSETCACHE';

    public function filemtime($filename)
    {
        $cacheId = self::CACHE_ID . '_' . md5($filename);
        $data = Mage::app()->getCache()->load($cacheId);
        if ($data === false) {
            $data = (string) filemtime($filename);
            Mage::app()->getCache()->save($data, $cacheId, array(self::CACHE_ID), self::CACHE_LIFETIME);
        }
        return $data;
    }

}