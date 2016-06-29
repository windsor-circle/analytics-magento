<?php
class Segment_Analytics_Model_Controller_Viewedproduct extends Segment_Analytics_Model_Controller_Base
{
    public function getBlock($block)
    {
        $params = $block->getParams();
        // $product = Mage::getModel('catalog/product_api')->info($params['id']);

        if (!array_key_exists('id', $params) || is_null($params['id'])) {
            return;
        }
        $product   = Mage::helper('segment_analytics')
        ->getNormalizedProductInformation($params['id']);   
                
        $block->setParams($product);
        return $block;
    }
}
