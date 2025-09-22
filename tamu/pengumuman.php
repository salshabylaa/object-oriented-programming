<?php 
include "../config/koneksi.php";
include "../config/header.php";
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Cek Kelulusan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="pengumuman.php">Pendaftaran</a>
            </li>
        </ul>
    </div>
    <?php include "../config/login.php"; ?>
</nav>
<div class="container mt-3">
    <h2>Forum Pendaftaran</h2>
    <?php
    if(isset($_POST['submit'])) {
        // Menangkap isi variabel dari file yang telah kita isi pada form.php
        $nama_pendaftar = $_POST['nama_pendaftar'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $alamat_pendaftar = $_POST['alamat_pendaftar'];
        $email_pendaftar = $_POST['email_pendaftar'];
        $nohp_pendaftar = $_POST['nohp_pendaftar'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $asal_sekolah = $_POST['asal_sekolah'];
        $password = $_POST['password'];
        $foto = $_FILES['foto']['name'];

        // Upload the photo
        $target_dir = "../gambar/";
        $target_file = $target_dir . basename($foto);
        move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO pendaftaran (nama_pendaftar, tgl_lahir, alamat_pendaftar, email_pendaftar, nohp_pendaftar, jenis_kelamin, asal_sekolah, password, foto) VALUES('$nama_pendaftar', '$tgl_lahir', '$alamat_pendaftar', '$email_pendaftar', '$nohp_pendaftar', '$jenis_kelamin', '$asal_sekolah', '$password', '$foto')");
    }
    ?>
    <form action="pengumuman.php" method="post" enctype="multipart/form-data" role="form">
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="nama_pendaftar" placeholder="Masukan Nama" name="nama_pendaftar">
            <label for="nama_pendaftar">Nama Lengkap</label>
        </div>
        <div class="form-floating mt-3 mb-3">
            <input type="date" class="form-control" id="tgl_lahir" placeholder="Masukan Tanggal Lahir" name="tgl_lahir">
            <label for="tgl_lahir">Tanggal Lahir</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="alamat_pendaftar" placeholder="Masukan Alamat" name="alamat_pendaftar">
            <label for="alamat_pendaftar">Alamat</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="email" class="form-control" id="email_pendaftar" placeholder="Masukan Email" name="email_pendaftar">
            <label for="email_pendaftar">Email</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="number" class="form-control" id="nohp_pendaftar" placeholder="Masukan No HP" name="nohp_pendaftar" style="-moz-appearance:textfield;">
            <label for="nohp_pendaftar">No HP</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="jenis_kelamin" placeholder="Masukan Jenis Kelamin" name="jenis_kelamin">
            <label for="jenis_kelamin">Jenis Kelamin</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="asal_sekolah" placeholder="Masukan Asal Sekolah" name="asal_sekolah">
            <label for="asal_sekolah">Asal Sekolah</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password">
            <label for="password">Password</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="file" class="form-control" id="foto" placeholder="Upload Foto" name="foto">
            <label for="foto">Foto</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
    </form>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="pengumuman.php">Daftar</a></li>
        <li class="page-item"><a class="page-link" href="pengumuman-biaya.php">Biaya</a></li>
        <li class="page-item"><a class="page-link" href="pengumuman-kelulusan.php">Kelulusan</a></li>
    </ul>
</div>
<?php include "../config/footer.php"; ?>
