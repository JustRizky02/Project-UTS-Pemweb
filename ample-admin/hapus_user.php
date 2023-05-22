<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_user = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi,"delete from user where id_user='$id_user'");

header("location:basic-table.php");

?>