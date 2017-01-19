<?php
class WindsorCircle_Analytics_Model_Controller_Orderplaced extends WindsorCircle_Analytics_Model_Controller_Base
{
    public function getBlock($block)
    {
        $params = $block->getParams();

        $info    = Mage::getModel('sales/order_api')
        ->info($params['increment_id']);

        $params['total']            = (float) $info['grand_total'];
        $params['revenue']          = (float) $info['subtotal'];
        $params['status']           = $info['status'];
        $params['shipping']         = (float) $info['shipping_amount'];
        $params['tax']              = (float) $info['tax_amount'];
        $params['discount']         = (-1 * (float) $info['discount_amount']);
        $params['products']         = array();
        foreach($info['items'] as $item)
        {
            $tmp = array();
            $tmp['sku']           = $item['sku'];
            $tmp['name']          = $item['name'];
            $tmp['price']         = (float) $item['price'];
            $tmp['quantity']      = (float) $item['qty_ordered'];
            $tmp['product_id']    = (int) $item['product_id'];

            $params['products'][] = $tmp;
        }


        //the serialized information
        $block->setParams($params);

        $customer = $this->_getCustomer();
        $block->setUserId($customer->getId());
        $tmp = array();
        $firstName                = $info['customer_firstname'];
        $lastName                 = $info['customer_lastname'];
        $tmp['first_name']         = $firstName;
        $tmp['last_name']          = $lastName;
        $tmp['name']              = "$firstName lastName";
        $tmp['email']             = $info['customer_email'];
        $block->setCustomerInfo($tmp);

        return $block;
    }
}
