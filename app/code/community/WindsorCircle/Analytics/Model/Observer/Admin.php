<?php
class WindsorCircle_Analytics_Model_Observer_Admin
{
    public function addExplainationTextToConfigScreen($observer)
    {
        $action = $observer->getAction();
        if(!$action)
        {
            return;
        }

        if($action->getRequest()->getParam('section') !== 'windsorcircle_analytics')
        {
            return;
        }

        $layout  = Mage::getSingleton('core/layout');
        $content = $layout->getBlock('content');

        if(!$content)
        {
            return;
        }

        $json = new stdClass;
        $json->content = $layout->createBlock('adminhtml/template')
        ->setTemplate('windsorcircle_analytics/welcome.phtml')
        ->toHtml();
    }
}
