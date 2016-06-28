<?php
class WindsorCircle_Analytics_Model_Controller_Customerloggedin extends WindsorCircle_Analytics_Model_Controller_Base
{
    public function getBlock($block)
    {
        $customer = $this->_getCustomer();
        $block->setUserId($customer->getId());
        
        $data = $block->getData();        
        $data = Mage::helper('windsorcircle_analytics')->getNormalizedCustomerInformation($data);
        $block->setData($data);
        
        return $block;
    }
}
