<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    $nama_db="lomba";
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,$nama_db);
    $query="DROP DATABASE IF EXISTS lomba";
    $exec=mysqli_query($conn,$query);
    $query="CREATE DATABASE IF NOT EXISTS lomba";
    $exec=mysqli_query($conn,$query);
    mysqli_select_db($conn,$nama_db);
    $query="DROP TABLE IF EXISTS jurusan";
    $exec=mysqli_query($conn,$query);
    $query="CREATE TABLE IF NOT EXISTS jurusan(
         ID_Jur VARCHAR(2) PRIMARY KEY,
         Nama VARCHAR(255) NOT NULL
    )";
    $exec=mysqli_query($conn,$query);
    mysqli_select_db($conn,$nama_db);
    $query="insert into jurusan values 
    ('TL','Teknik Telekomunikasi'),
    ('IF','Teknik Informatika'),
    ('EL','Teknik Elektro'),
    ('SA','Sains Aktuaria')
    ";
    $exec=mysqli_query($conn,$query);
    
    mysqli_select_db($conn,$nama_db);
    $query="DROP TABLE IF EXISTS mahasiswa";
    $exec=mysqli_query($conn,$query);
    $query="CREATE TABLE IF NOT EXISTS mahasiswa(
        NRP int PRIMARY KEY AUTO_INCREMENT,
        Nama VARCHAR(255) NOT NULL,
        alamat VARCHAR(255) NOT NULL,
        ID_Jur VARCHAR(2) NOT NULL
    )";
    $exec=mysqli_query($conn,$query);
    
    $query="ALTER TABLE mahasiswa ADD FOREIGN KEY (ID_Jur) REFERENCES jurusan(ID_Jur)";
    $exec=mysqli_query($conn,$query);
?>
</body>
</html>