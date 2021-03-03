<?php

    $arr1 = array("one", "two", "three","four", "pap");

    $char = 'a';

    foreach ($arr1 as $value) {
        if(strpos($value, $char)){
           echo '=> '.$value;
        } 
        
    }

?>