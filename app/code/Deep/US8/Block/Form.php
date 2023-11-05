<?php
namespace Deep\US8\Block;

class Form extends \Magento\Framework\View\Element\Template
{
    public function getFormAction(){
        return $this->getUrl('mod9/employee/employee');
    }    
}
