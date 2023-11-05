<?php

namespace Deep\US3\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogProductName implements ObserverInterface{
    protected $logger;
    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }

    public function execute(Observer $observer){
        $product = $observer->getEvent()->getProduct();
        $productName = $product->getName();

        $this->logger->info("Product Name:" . $productName);
    }
}