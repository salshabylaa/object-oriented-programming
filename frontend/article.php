<?php include "../config/koneksi.php";
    include "../config/header.php";
?> 
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="article.php">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galery.php">Galery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pengumuman.php">Pendaftaran</a>
                </li>
                </ul>
            </div>
            <?php include "../config/logout.php"; ?>
        </nav>
        <br>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-4">
                    <img src="gambar-galery/artikel 1.jpg" width="100%">
                    <h3>Dampak Kesenjangan Sosial Terhadap Pembangunan dan Stabilitas Sosial</h3>
                </div>
                <div class="col-sm-4">
                    <img src="gambar-galery/artikel 2.jpg" width="100%" height="235px">
                    <h3>Hak Asasi Manusia di Era Digital</h3>
                </div>
                <div class="col-sm-4">
                    <img src="gambar-galery/artikel 3.jpg" width="100%">     
                    <h3>
                        Tantangan Transformasi Indonesia: Terbatasnya Sumber Daya dan Teknologi dalam Proyek Ibu Kota Nusantara (IKN)
                    </h3>
                </div>
                <div class="col-sm-4">
                    <img src="gambar-galery/artikel 4.jpeg" width="100%">
                    <h3>Wamenkeu soal Ekonomi RI Tumbuh 5,11 Persen: Pemilu Berkontribusi</h3>
                </div>
                <div class="col-sm-4">
                    <img src="gambar-galery/artikel 5.jpeg" width="100%" height="235px">
                    <h3>Bos Bappenas Catat Pembangunan IKN Tahap Pertama Sudah 80 Persen</h3>
                </div>
                <div class="col-sm-4">
                    <img src="gambar-galery/artikel 6.jpeg" width="100%">     
                    <h3>
                        IHSG Unjuk Gigi ke 7.135 Sore Ini
                    </h3>
                </div>
                <div class="col-sm-4">
                    <img src="gambar-galery/artikel 7.webp" width="100%">
                    <h3>Ramalan Pertumbuhan Ekonomi Global Terbaru dari IMF hingga OECD</h3>
                </div>
                <div class="col-sm-4">
                    <img src="gambar-galery/artikel 8.webp" width="100%">
                    <h3>Ekonomi AS Pulih, OECD Kerek Outlook Ekonomi Global Jadi 3,1% Tahun Ini</h3>
                </div>
                <div class="col-sm-4">
                    <img src="gambar-galery/artikel 9.jpg" width="100%">     
                    <h3>
                        BI: Cuan Eksportir saat Dolar AS Melonjak tak Pengaruhi Pertumbuhan Ekonomi
                    </h3>
                </div>
                <div class="col-sm-4">
                    <img src="gambar-galery/artikel 10.jpg" width="100%">     
                    <h3>
                        IMF Ramal Ekonomi Global Stabil, Tumbuh 3,2% di 2024 dan 2025
                    </h3>
                </div>
            </div>
        </div>
        <?php include "../config/footer.php"; ?>