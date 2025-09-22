<?php
include "../config/koneksi.php";
include "../config/header.php";
?> 

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="home.php">Cek Kelulusan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pengumuman.php">Pendaftaran</a>
            </li>
        </ul>
    </div>
    <?php include "../config/login.php"; ?>
</nav>

<form action="" method="post" enctype="multipart/form-data" role="form">
    <div class="form-floating mb-3 mt-3">
        <input type="email" class="form-control" id="email_pendaftar" placeholder="Masukan Email" name="email_pendaftar" required>
        <label for="email_pendaftar">Email</label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Cek Status</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $email_pendaftar = $_POST['email_pendaftar'];
    $email_pendaftar = mysqli_real_escape_string($koneksi, $email_pendaftar);

    $query = "SELECT status FROM pendaftaran WHERE email_pendaftar='$email_pendaftar'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $status = $row['status'];

        if ($status == 'lulus') {
            header('Location: pengumuman-kelulusan.php');
        } elseif ($status == 'gagal') {
            header('Location: pengumuman-kelulusan-gagal.php');
        } else {
            echo "<script>alert('Status tidak diketahui!');</script>";
        }
    } else {
        echo "<script>alert('Email tidak ditemukan!');</script>";
    }
}

include "../config/footer.php";
?>
