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
        <div class="container mt-3">
            <h2>Informasi Kelulusan</h2>
            <table class="table">
                    <tbody>
                    <tr>
                        <td>Nama:</td>
                        <td>Ananda Salsabila</td>
                    </tr>
                    <tr>
                        <td>No:</td>
                        <td>240424</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin:</td>
                        <td>Perempuan</td>
                    </tr>
                    <tr>
                        <td>Lahir:</td>
                        <td>23 February 2005</td>
                    </tr>
                    <tr>
                        <td>Kelas:</td>
                        <td>XII MIPA2</td>
                    </tr>
                    </tbody>
            </table>
            <div class="alert alert-danger">
                        <strong>GAGAL!!</strong> Anda telah di nyatakan tidak lulus</div>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link active" href="pengumuman.php">Daftar</a></li>
                        <li class="page-item"><a class="page-link" href="pengumuman-biaya.php">Biaya</a></li>
                        <li class="page-item"><a class="page-link" href="pengumuman-kelulusan.php">Kelulusan</a></li>
                    </ul>
        </div>
        <?php
        include "../config/footer.php";
        ?>