<?php
function tukar(&$a, &$b){
	$temp = $a;
	$a = $b;
	$b = $temp;
	echo "a = ".$a."<br>";
	echo "b = ".$b."<br>";
}
$A = 10;
$B = 20;
echo "A = ".$A."<br>";
echo "B = ".$B."<br>";
tukar($A , $B);
?>