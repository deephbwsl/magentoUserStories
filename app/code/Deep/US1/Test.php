<?php

namespace Deep\US1;
// use Deep\US1\Api\CustomCategoryInterface;
use Magento\Catalog\Api\Data\CategoryInterface;

class Test
{
    protected $customCategory;
    protected $dataArray;
    protected $stringValue;

    public function __construct(
        CategoryInterface $customCategory,
        array $dataArray = [4,5,6],
        string $stringValue = "Deep"
    ) {
        $this->customCategory = $customCategory;
        $this->dataArray = $dataArray;
        $this->stringValue = $stringValue;
    }

    public function displayParams()
    {
        echo "Array Argument: ";
        print_r($this->dataArray);
        echo "String Argument: " . $this->stringValue;
    }
}
