<?php
include "../config/koneksi.php";

if (isset($_POST['submit'])) {
    $id_pendaftar = $_POST['id_pendaftar'];

    // Delete query
    $query = "DELETE FROM pendaftaran WHERE id_pendaftar='$id_pendaftar'";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Pendaftar berhasil dihapus'); window.location.href='../backend/profile.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus pendaftar'); window.location.href='../backend/profile.php';</script>";
    }
} else {
    header("Location: ../backend/profile.php");
}
?>
