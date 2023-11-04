<?php
namespace Deep\US1\Controller\Index;
use  Deep\US1\Test;



class Index extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;
    protected $test;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\view\Result\PageFactory $pageFactory,
        Test $test){
            parent::__construct($context);
            $this->pageFactory = $pageFactory;
            $this->test = $test;
        }

    public function execute(){
        $this->test->displayParams();
        $resultPage = $this->pageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('Hello World'));
        return $resultPage;
    }
}
