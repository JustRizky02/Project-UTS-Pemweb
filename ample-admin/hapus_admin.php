<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_admin = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi,"delete from admin where id_admin='$id_admin'");

header("location:Admin-table.php");

?>