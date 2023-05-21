<?php
// koneksi database
global $koneksi;
include 'koneksi.php';

// menangkap data yang di kirim dari form
$username = $_POST['user_name'];
$password = $_POST['password'];
$level = $_POST['level'];

// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$username','$password','$level')");

// mengalihkan halaman kembali ke index.php
header("location:Beranda.html");

?>