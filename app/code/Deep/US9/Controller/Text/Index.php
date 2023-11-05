<?php
namespace Deep\US9\Controller\Text;


class Index extends \Magento\Framework\App\Action\Action
{
    
    protected $pageFactory;
    protected $context;
    public $scopeConfig;
    public $notify;

    public function __construct(
       \Magento\Framework\App\Action\Context $context,
       \Magento\Framework\View\Result\PageFactory $pageFactory,
       \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
       \Magento\Framework\Message\ManagerInterface $messageManager
    )
    {
        $this->pageFactory = $pageFactory;
        $this->scopeConfig = $scopeConfig;
        $this->notify = $messageManager;
        return parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->pageFactory->create();
        $flag = $this->scopeConfig->getValue('general1/general2/enable');
       

        $message = $this->scopeConfig->getValue('general1/general2/text_input');

        
        if($flag == '1'){
            $resultPage->getConfig()->getTitle()->set(__($message));
            $this->notify->addSuccessMessage(__('Text Displayed'));
        }
        else{
            $this->notify->addErrorMessage(__('Text Cant Display'));

        }
        $resultPage = $this->pageFactory->create();
        
        return $resultPage;
    }

   


}
