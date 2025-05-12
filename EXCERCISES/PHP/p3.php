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

    $fruits = array("mhlo" , "portokali" , "mpanana") ; 

    echo "o pinakas exei " , count($fruits) , "stoixeia.<br><br>" ; 
    echo "to proto frouto einai : " . $fruits[0] . "<br>" ; 
    echo "to deutero frouto einai : " . $fruits[1] . "<br>" ; 
    echo "to trito frouto einai : " . $fruits[2] . "<br>" ; 

    for($i=0;$i<count($fruits);$i++) {
        echo "fruits[$i] = $fruits[$i] <br>" ; 
    }



    echo "<br>" ;
    retArrayH($fruits) ; 

    
    echo "<br>" ;
    retArrayV($fruits) ; 


?>