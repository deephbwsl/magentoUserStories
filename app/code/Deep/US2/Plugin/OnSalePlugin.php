<?php
namespace Deep\US2\Plugin;

class OnSalePlugin
{
    public function afterGetName( \Magento\Catalog\Model\Product $subject, $result){
        if($subject->getFinalPrice() < 60){
            $result .= ' On Sale!';
        }
        return $result;
    }
}
