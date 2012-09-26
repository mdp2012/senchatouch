<?php

class Senchahack_Sencha_ProductController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        $productId  = (int)$this->getRequest()->getParam('id');
        $product    = Mage::getModel('catalog/product')->load($productId);

        if (!$product) {
            return;
        }

        $json = json_encode($product->getData());
        return $json;
    }
}