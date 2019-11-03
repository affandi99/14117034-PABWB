<!DOCTYPE html>
<html>
<head>
	<title>tugas</title>
</head>
<body>
	<?php 
		function cetak ($array){
			print_r($array);
		}
		
		if (isset($_POST['proses'])) {
			if(empty($_POST['hobbyy'])){
			    $hobyy = ""; // default value
			}else{
			    $hobyy = $_POST['hobbyy'];
			}
			if(empty($_POST['hobbyyy'])){
			    $hobyyy = ""; // default value
			}else{
			    $hobyyy = $_POST['hobbyyy'];
			}
			if(empty($_POST['hobbyyyy'])){
			    $hobyyyy = ""; // default value
			}else{
			    $hobyyyy = $_POST['hobbyyyy'];
			}
			if(empty($_POST['jk'])){
			    $jenis_kelamin = ""; // default value
			}else{
			    $jenis_kelamin = $_POST['jk'];
			}
            $user = [
                'name' => $_POST['nama'],
                'address' => $_POST['alamat'],
                'jenisk' => $jenis_kelamin,
                'goddar' => $_POST['gd'],
                'hobyy' => $hobi11,
                'hobyyy' => $hobi22,
                'hobyyyy' => $hobi33,
                'ktrangan' => $_POST['keterangan']
            ];
            cetak($user);
        }
	 ?>
</body>
</html>