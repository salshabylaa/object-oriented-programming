<?php
session_start();
include('koneksi.php'); // Pastikan Anda memiliki file koneksi.php untuk koneksi database

if (isset($_POST['submit'])) {
    $email_pendaftar = $_POST['email_pendaftar'];
    $password = $_POST['password'];

    // Cek jika email dan password adalah 'admin'
    if ($email_pendaftar == 'admin' && $password == 'admin') {
        $_SESSION['email_pendaftar'] = 'admin';
        header('Location: ../backend/profile.php');
        exit();
    }

    // Cegah SQL Injection
    $email_pendaftar = mysqli_real_escape_string($koneksi, $email_pendaftar);
    $password = mysqli_real_escape_string($koneksi, $password);

    // Hashing password jika disimpan dalam bentuk hash
    $hashed_password = md5($password);

    $query = "SELECT * FROM pendaftaran WHERE email_pendaftar='$email_pendaftar' AND password='$hashed_password'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['email_pendaftar'] = $row['email_pendaftar'];

            // Mengarahkan semua pengguna yang berhasil login ke halaman frontend/profile.php
            header('Location: ../frontend/profile.php');
        } else {
            echo "<script>alert('Login Sukses'); window.location.href='../frontend/profile.php';</script>";
        }
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
