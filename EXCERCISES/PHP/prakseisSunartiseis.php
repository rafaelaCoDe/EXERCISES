<?php

function add($x , $y) {
	return $x+$y ;
}

function sub($x , $y) {
	return $x-$y ;
}

function mult($x , $y) {
	return $x*$y ;
}

function div($x , $y) {
	return $x/$y ;
}

$x=10 ;
$y=5 ;

echo " $x + $y = ", add($x , $y) , "<br>" ;
echo " $x - $y = ", sub($x , $y) , "<br>" ;
echo " $x * $y = ", mult($x , $y) , "<br>" ;
echo " $x / $y = ", div($x , $y) , "<br>" ;

?>