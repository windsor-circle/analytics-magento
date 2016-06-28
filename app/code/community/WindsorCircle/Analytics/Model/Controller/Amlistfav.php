<?php
class WindsorCircle_Analytics_Model_Controller_Amlistfav extends WindsorCircle_Analytics_Model_Controller_Base
{
    public function getBlock($block)
    {        
        $info   = Mage::getModel('catalog/product_api')->info($block->getProductId());
        $info   = Mage::helper('windsorcircle_analytics')
        ->getNormalizedProductInformation($info);        
        $block->setParams($info);
        return $block;
    }
}
