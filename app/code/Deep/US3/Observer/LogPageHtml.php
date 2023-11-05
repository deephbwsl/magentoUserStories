<?php
namespace Deep\US3\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogPageHtml implements ObserverInterface {
    protected $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    public function execute(Observer $observer) {
        $response = $observer->getEvent()->getData('response');
        
        if ($response instanceof \Magento\Framework\App\Response\Http) {
            $html = $response->getBody();
            $this->logger->info("HTML Content: " . $html);
        } else {
            $this->logger->info("Response is not of type \Magento\Framework\App\Response\Http.");
        }
    }
}
