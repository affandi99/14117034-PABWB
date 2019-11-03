<!DOCTYPE html>
<html>
<head>
	<title>faktorial</title>
</head>
<body>
	<?php 
		function faktorial(&$a){
			$hasil=1;
			for ($i=$a; $i>0 ; $i--) { 
				$hasil = $hasil * $i;
			}
			return $hasil;
		}
		$fak = 3;
		echo "input angka faktorial :$fak";
		echo "<br>";
		$hasil = faktorial($fak);
		echo "Hasilnya : $hasil";
	 ?>
</body>
</html>