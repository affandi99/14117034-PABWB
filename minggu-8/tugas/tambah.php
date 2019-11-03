<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<BODY>
  <h1>Tambah Data Mahasiswa</h1>
<?php
   	$NRP = $_POST["NRP"];
   	$nama = $_POST["nama"];
   	$alamat = $_POST["file_foto"];
   	$jurusan = $_POST["id_jur"];
  	$conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
	mysqli_select_db($conn,"lomba");
	$sqlstr="insert into mahasiswa (NRP,nama,alamat,id_jur)
    values ('$NRP','$nama','$alamat','$jurusan')";
    $hasil = mysqli_query($conn,$sqlstr);
            
    if($hasil) echo "<h3>Simpan data mahasiswa berhasil dilakukan</h3><br>";
    else echo "<h3>Gagal</h3><br>";
    mysqli_select_db($conn,"lomba");
    $hasil=mysqli_query($conn,"select nama from jurusan where id_jur='$jurusan'");
    $row=mysqli_fetch_array($hasil);
    $jurusan=$row[0];
    echo "NRP : $NRP <br>";
    echo "Nama : $nama <br>";
    echo "Alamat : $alamat <br>";
    echo "Jurusan : $jurusan <br>";
?>
<a href="data.html">Return to Home</a>
</BODY>
</html>