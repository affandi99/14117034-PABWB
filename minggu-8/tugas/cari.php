<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>Pencarian Data Mahasiswa</h1>
<?php
   $cari=$_GET['nama'];
   $conn=mysqli_connect("localhost","root","");
   mysqli_select_db($conn,"lomba");
   $sqlstr="select * from mahasiswa where nama like '%$cari%'";
   $hasil=mysqli_query($conn,$sqlstr);
   $jumlah=mysqli_num_rows($hasil);
   echo "<h3>Data ditemukan : $jumlah</h3>";
   while($record=mysqli_fetch_row($hasil)){
   echo "<br>NRP : $record[0] <br>";
   echo "Nama : $record[1] <br>";
   echo "Foto : $record[2] <br>";
   $sqlstr="select nama from jurusan where id_jur='$record[3]'";
   $hasil2=mysqli_fetch_row(mysqli_query($conn,$sqlstr));
   echo "Jurusan : $hasil2[0] <br>";
   }
?>
        <a href="data.html">Return to Home</a>
</body>
</html>