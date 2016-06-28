<?php
class WindsorCircle_Analytics_Model_Controller_Customerregistered extends WindsorCircle_Analytics_Model_Controller_Base
{
    public function getBlock($block)
    {    
        $data = $block->getData();        
        $data = Mage::helper('windsorcircle_analytics')->getNormalizedCustomerInformation($data);
        $block->setData($data);    
        return $block;
    }
}
