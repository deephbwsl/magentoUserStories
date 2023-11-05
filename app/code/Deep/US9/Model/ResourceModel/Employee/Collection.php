<?php
namespace Deep\US9\Model\ResourceModel\Employee;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';
    protected $_eventPrefix = 'deep_us9_employee_collection';
    protected $_eventObject = 'employee_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Deep\US9\Model\Employee', 'Deep\US9\Model\ResourceModel\Employee');
    }
}
