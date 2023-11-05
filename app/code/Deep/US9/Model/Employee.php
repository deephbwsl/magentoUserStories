<?php

namespace Deep\US9\Model;


use Magento\Framework\Model\AbstractModel;

class Employee extends AbstractModel{
    protected function _construct(){
        $this->_init('Deep\US9\Model\ResourceModel\Employee');
    }

}