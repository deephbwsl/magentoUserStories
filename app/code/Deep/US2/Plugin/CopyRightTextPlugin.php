<?php
namespace Deep\US2\Plugin;
use Magento\Theme\Block\Html\Footer;

class CopyRightTextPlugin
{
    public function afterGetCopyright(Footer $subject,$result){
        $result = "changed";
        return $result;
        
    }
}
