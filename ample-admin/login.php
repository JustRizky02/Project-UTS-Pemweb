<?php
global $koneksi;
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * FROM admin WHERE email='$email' and `password`='$password'");

$cek = mysqli_num_rows($data);
if($cek > 0){
    $_SESSION['email'] =$email;
    $_SESSION['status'] ="login";
    header("location:ample-admin/dashboard.php");
}
else{
    echo "<script> alert ('login gagal ! username dan password tidak benar');</script>";
    echo "<script> window.location='index.php';</script>";
}
?>