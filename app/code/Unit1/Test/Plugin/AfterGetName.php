<?php

namespace Unit1\Test\Plugin;

class AfterGetName
{

public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
{       
    if($subject->getPrice()<60){
        $result=$result."   On Sale";
    }
    return $result;
}
}