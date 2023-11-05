<?php
namespace Deep\US5\Controller\Display;

class Display extends \Magento\Framework\App\Action\Action
{
    
    protected $pageFactory;
    protected $context;

    public function __construct(
       \Magento\Framework\App\Action\Context $context,
       \Magento\Framework\View\Result\PageFactory $pageFactory,
    )
    {
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->pageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__("Hello World"));
        return $resultPage;
    }

   


}
