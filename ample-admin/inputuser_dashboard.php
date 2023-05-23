<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $pesan = $_POST['pesan'];

    // Melakukan koneksi ke database (gantilah sesuai dengan informasi koneksi database Anda)
    $koneksi = mysqli_connect("localhost", "root", "", "db_perisai");

    // Memasukkan data ke dalam tabel "user" (gantilah sesuai dengan nama tabel Anda)
    $query = "INSERT INTO `user` (`nama`, `email`, `telp`, `pesan`) VALUES ('$nama', '$email', '$telp', '$pesan')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Redirect ke halaman index.php jika berhasil memasukkan data
        header("location: basic-table.php?status=success");
        exit;
    } else {
        // Tampilkan pesan error jika terjadi kesalahan
        echo "Error: " . mysqli_error($koneksi);
    }

    // Menutup koneksi database
    mysqli_close($koneksi);
}
?>


