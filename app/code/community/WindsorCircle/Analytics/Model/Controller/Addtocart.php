<?php
class WindsorCircle_Analytics_Model_Controller_Addtocart extends WindsorCircle_Analytics_Model_Controller_Base
{
    public function getBlock($block)
    {
        $params = $block->getParams();
        $product   = Mage::getModel('catalog/product_api')
        ->info($params['product_id']);

        $product = Mage::helper('windsorcircle_analytics')
        ->getNormalizedProductInformation($product);

        $block->setProduct($product);

        return $block;
    }
}
