<?php

namespace Unit1\Test\Plugin;
use Magento\Theme\Block\Html\Header;

class AfterGetWelcome
{
 /**
* @param \Magento\Theme\Block\Html\Footer $subject
* @param $result
* @return string
*/
    public function afterGetWelcome(Header $subject,$result){
        return "Hello there. Welcome !";
    }
}
?>
