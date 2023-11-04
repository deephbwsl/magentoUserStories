<?php
namespace Deep\US1\Api;

use \Magento\Catalog\Api\Data\CategoryInterface;

interface CustomCategoryInterface extends CategoryInterface
{
    public function displayParams();

}
