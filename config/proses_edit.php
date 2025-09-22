<?php
include "../config/koneksi.php";

if (isset($_POST['submit'])) {
    $id_pendaftar = $_POST['id_pendaftar'];
    $status = $_POST['status'];

    // Update query
    $query = "UPDATE pendaftaran SET status='$status' WHERE id_pendaftar='$id_pendaftar'";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Status berhasil diupdate'); window.location.href='../backend/profile.php';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate status'); window.location.href='../backend/profile.php';</script>";
    }
} else {
    header("Location: ../backend/profile.php");
}

include "../config/koneksi.php";

if (isset($_POST['submitB'])) {
    $id = $_POST['id'];
    $nama_pendaftar = $_POST['nama_pendaftar'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $nohp_pendaftar = $_POST['nohp_pendaftar'];
    $alamat_pendaftar = $_POST['alamat_pendaftar'];
    $email_pendaftar = $_POST['email_pendaftar'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    
    // If a new photo is uploaded
    if ($foto) {
        $path = "../gambar/".$foto;
        
        // Move the uploaded file to the designated folder
        if (move_uploaded_file($tmp, $path)) {
            // Get the current photo to delete the old one if exists
            $query = "SELECT foto FROM pendaftaran WHERE id_pendaftar='$id'";
            $result = mysqli_query($koneksi, $query);
            $row = mysqli_fetch_assoc($result);
            $old_photo = $row['foto'];
            
            if ($old_photo) {
                unlink("../gambar/".$old_photo);
            }
            
            // Update query with new photo
            $query = "UPDATE pendaftaran SET 
                        nama_pendaftar='$nama_pendaftar', 
                        jenis_kelamin='$jenis_kelamin', 
                        tgl_lahir='$tgl_lahir', 
                        nohp_pendaftar='$nohp_pendaftar', 
                        alamat_pendaftar='$alamat_pendaftar', 
                        email_pendaftar='$email_pendaftar', 
                        asal_sekolah='$asal_sekolah', 
                        foto='$foto' 
                      WHERE id_pendaftar='$id'";
        } else {
            echo "<script>alert('Gagal mengupload foto'); window.location.href='../frontend/profile.php';</script>";
        }
    } else {
        // Update query without changing the photo
        $query = "UPDATE pendaftaran SET 
                    nama_pendaftar='$nama_pendaftar', 
                    jenis_kelamin='$jenis_kelamin', 
                    tgl_lahir='$tgl_lahir', 
                    nohp_pendaftar='$nohp_pendaftar', 
                    alamat_pendaftar='$alamat_pendaftar', 
                    email_pendaftar='$email_pendaftar', 
                    asal_sekolah='$asal_sekolah' 
                  WHERE id_pendaftar='$id'";
    }

    // Execute the update query
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil diupdate'); window.location.href='../frontend/profile.php';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate data'); window.location.href='../frontend/profile.php';</script>";
    }
} else {
    header("Location: ../frontend/profile.php");
}
?>

