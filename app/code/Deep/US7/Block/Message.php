<?php
namespace Deep\US7\Block;

class Message extends \Magento\Framework\View\Element\Template
{
    protected function _afterToHtml($html){
        return "This is displayed on all pages". $html;        
    }
    public function getMessage(){
        return "This is displayed on all pages";
    }
}
