<?php
class WindsorCircle_Analytics_Model_Controller_Reviewedproduct extends WindsorCircle_Analytics_Model_Controller_Base
{
    public function getBlock($block)
    {
        $review = $block->getReview();
        unset($review['customer_id']);
        unset($review['form_key']);
        $review = Mage::helper('windsorcircle_analytics')->normalizeReviewwData($review);
        $block->setReview($review);
        return $block;
    }
}
