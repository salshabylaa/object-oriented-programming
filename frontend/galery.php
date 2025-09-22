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
                <a class="nav-link" href="article.php">Article</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="galery.php">Galery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pengumuman.php">Pendaftaran</a>
            </li>
            </ul>
        </div>
        <?php include "../config/logout.php"; ?>
        </nav>
        
        <br>
        <?php include "../config/footer.php"; ?>