<?php
class WindsorCircle_Analytics_Model_Controller_Alias extends WindsorCircle_Analytics_Model_Controller_Base
{
    public function getBlock($block)
    {
        $customer = $this->_getCustomerSession();
        if($customer->getCustomer()->getData('is_aliased'))
        {
            return false;
        }
        $customer->getCustomer()->setData('is_aliased','1')->save();
        $block->setUserId($customer->getId());                        
        return $block;       
    }

    
}
