<?php

    $open = "";
    $close = "";
    $txt = "";
    $num = 2;

    switch ($num) {
        case 0:
           $open = "<h1>";
           $close = "</h1>";
           $txt = "This is my H1";
           break;
        case 1:
            $open = "<h2>";
            $close = "</h2>";
            $txt = "This is my H2";
            break;
        case 2:
            $open = "<h3>";
            $close = "</h3>";
            $txt = "This is my H3";
            break;
    }
    echo $open.$txt.$close;
?>