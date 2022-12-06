<?php
namespace Unit1\Test\Plugin;

use Magento\Theme\Block\Html\Footer;

class AfterGetCopyright
{
    public function afterGetCopyright(Footer $subject,$result){
        return "This is custom footer RJ.";
    }
}
?>