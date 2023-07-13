<?php
include 'koneksi.php';

// menyimpan data kedalam variabel
$id_admin = $_POST['id_admin'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];


$query = "UPDATE admin SET nama = '$nama', email = '$email', password = '$password' WHERE id_admin = '$id_admin'";

mysqli_query($koneksi, $query);
header("location: Admin-table.php");
?>
