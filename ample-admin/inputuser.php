<!DOCTYPE html>
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/html">
<body>
<?php
include 'koneksi.php';
$koneksi = mysqli_connect("localhost","root","","db_perisai");

$nama = $_POST['nama'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$pesan = $_POST['pesan'];

mysqli_query($koneksi,"insert into user values('','$nama','$email','$telp','$pesan')");

header("location:basic-table.html");

?>
</body>
</html>