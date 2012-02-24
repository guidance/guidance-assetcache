<?php

class Guidance_Assetcache_Model_Design_Package extends Mage_Core_Model_Design_Package
{

    /**
     * Get skin file url
     *
     * @param string $file
     * @param array $params
     * @return string
     */
    public function getSkinUrl($file = null, array $params = array())
    {
        if (!Mage::helper('guidance_assetcache')->isEnabled()) {
            return parent::getSkinUrl($file, $params);
        }
        Varien_Profiler::start(__METHOD__);
        if (empty($params['_type'])) {
            $params['_type'] = 'skin';
        }
        if (empty($params['_default'])) {
            $params['_default'] = false;
        }
        $this->updateParamDefaults($params);
        if (!empty($file)) {
            $filename = $this->_fallback($file, $params, array(
                array(),
                array('_theme' => $this->getFallbackTheme()),
                array('_theme' => self::DEFAULT_THEME),
            ));
        }
        $result = $this->getSkinBaseUrl($params) . (empty($file) ? '' : $file);
        Varien_Profiler::stop(__METHOD__);
        if (!empty($file)) {
            $result = $result . '?v=' . Mage::getSingleton('guidance_assetcache/file')->filemtime($filename);
        }
        return $result;
    }

}