<?php
class WindsorCircle_Analytics_Model_Controller_Layerednavfilter extends WindsorCircle_Analytics_Model_Controller_Base
{
    public function getBlock($block)
    {
        $params = $block->getParams();
        
        $params['category'] = Mage::helper('windsorcircle_analytics')
        ->getCategoryNamesFromIds($params['request']['id']);
        $block->setParams($params);
        
        return $block;
    }
}
