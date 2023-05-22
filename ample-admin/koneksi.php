<!DOCTYPE html>
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/html">
<body>
<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_perisai';

$koneksi = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
}
?>
</body>
</html>
