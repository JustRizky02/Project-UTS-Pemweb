<?php

include 'koneksi.php';

// menyimpan data kedalam variabel
$id_user = $_POST['id_user'];
$nama = $_POST ['nama'];
$email = $_POST ['email'];
$telp = $_POST ['telp'];
$pesan = $_POST ['pesan'];


// query SQL untuk insert data
$query = "UPDATE user SET id_user='$id_user',nama = '$nama', email = '$email', telp = '$telp', 
pesan = '$pesan'WHERE id_user = '$id_user'";

mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:basic-table.php");
?>