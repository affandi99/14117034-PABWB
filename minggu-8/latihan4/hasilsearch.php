<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    $kolom=$_POST['kolom'];
    $cari=$_POST['cari'];
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"lomba");
    $hasil=mysqli_query($conn,"select * from bukutamu where $kolom like '%$cari%'");
    $jumlah=mysqli_num_rows($hasil);
        echo "<br>";
        echo "Ditemukan: $jumlah";
        echo "<br>";
    while($baris=mysqli_fetch_array($hasil)){
        echo "Nama : ";
        echo $baris[0];
        echo "<br>";
        echo "Email : ";
        echo $baris[1];
        echo "<br>";
        echo "Komentar :";
        echo $baris[2];
    }
?>
</body>
</html>