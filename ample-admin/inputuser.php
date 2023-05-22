<?php
// koneksi database
include 'koneksi.php';
$koneksi = 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$pesan = $_POST['pesan'];

// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$nama','$email','$telp','$pesan')");

// mengalihkan halaman kembali ke index.php
header("location:basic-table.html");

?>