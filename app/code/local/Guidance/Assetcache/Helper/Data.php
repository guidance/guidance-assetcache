<?php

class Guidance_Assetcache_Helper_Data extends Mage_Core_Helper_Data
{

    public function isEnabled()
    {
        return Mage::app()->useCache('asset_mtimes');
    }

}