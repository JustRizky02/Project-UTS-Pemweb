<?php
session_start();
include 'ample-admin/koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * FROM admin WHERE email='$email' and password='$password'");
$cek = mysqli_num_rows($data);
if($cek>0){
    $_SESSION['email']=$email;
    $_SESSION['status']="login";
    header("ample-admin/dashboard.php");
}
else{
    echo "<script> alert ('Login Gagal ! Username dan Password tidak benar ');
</script>";
    echo"<script> window.location ='index.php';</script>";

}
?>