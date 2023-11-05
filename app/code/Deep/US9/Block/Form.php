<?php
namespace Deep\US9\Block;

class Form extends \Magento\Framework\View\Element\Template
{
    public function getFormAction(){
        return $this->getUrl('mod9/employee/employee');
    }    
}
