<?php
    function retArrayH($a) {
        for($i=0;$i<count($a);$i++) {
            echo "$a[$i] , " ; 
        }
        echo "<br>" ;
    }

    function retArrayV($a) {
        for($i=0;$i<count($a);$i++) {
            echo "$a[$i] , " ; 
            echo "<br>" ;
        }
    }

    function addArrays($a1 , $a2 , &$a3) {
        $a3=array() ;
        for($i=0;$i<count($a1);$i++) {
          $a3[$i] = $a1[$i] + $a2[$i] ; 
        }
    }

    $na1 = array(1,2,3,4,5,6,7,8,9) ; 
    $na2 = array(11,22,33,44,55,66,77,88,99) ;
    $na3 = array (0,0,0,0,0,0,0,0,0) ;  

    array_push($na1 , 1010) ;
    retArrayH($na1);

    echo array_pop($na1) , "<br>" ; 
    retArrayH($na1);
    retArrayH($na2);
    addArrays($na1 , $na2 , $na3) ;
    retArrayH($na3);


?>