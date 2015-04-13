<?php

class Edge_Instagram_Block_Gallery extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{
    protected function _toHtml()
    {
        $this->setTemplate('edge/instagram/gallery.phtml');
        return $this->renderView();
    }
}