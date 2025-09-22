<?php include "../config/koneksi.php";
    include "../config/header.php";
?>  
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="article.php">Article</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="galery.php">Galery</a>
            </li>
            </ul>
        </div>
        <?php include "../config/logout.php"; ?>
        </nav>
        <div class="container mt-3">
  <h2>Profil</h2>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Keterangan</th>
        <th>Foto</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
        <?php include "../config/footer.php"; ?>