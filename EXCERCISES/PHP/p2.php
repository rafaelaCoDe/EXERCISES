<?php
    function h1($msg) {
        echo "<h1>$msg</h1>" ; 
    }

    function hs($size , $msg) {
        echo "<h$size>$msg</h$size>" ; 
    }

    function hss($size , $msg , $st) {
        echo "<h$size style=$st>$msg</h$size>" ; 
    }

    h1("hello world!") ; 
    hs(6 , "geia sas ") ; 
    hss(1 , "kolokuthokeftes kai den ftais" , "background-color:red;color:blue;") ;

    $msg="munhmaaa" ;
    for($i=1 ; $i<7 ; $i++) {
        echo "<h$i>$msg</h$i>" ; 
    }


?>