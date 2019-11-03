<!DOCTYPE html>
<html>
<head>
	<title>warna</title>
</head>
<body>
<?php  
function namelength($length, $word, $color = "red"){
	if($length <11 && $length !=0){
		$price = 300*$length;
		echo "<font color=$color>$word</font> <br>";
		echo "harga = $price";
	}
	elseif($length <20){
		$price = 500*$length;
		echo "<font color=$color>$word</font> <br>";
		echo "harga = $price";
	}
	else{
		$price = 700*$length;
		echo "<font color=$color>$word</font> <br>";
		echo "harga = $price";
	}
}
$x = "Muhammad Affandi";
$color = "blue";
$price = 0;
$length = strlen($x);
namelength($length, $x, $color);
?>
</body>
</html>