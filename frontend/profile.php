<?php 
include "../config/koneksi.php";
include "../config/header.php";
?> 
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="article.php">Article</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="galery.php">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pengumuman.php">Pengumuman</a>
            </li>
        </ul>
    </div>
    <?php include "../config/logout.php"; ?>
</nav>

<div class="container-fluid">
    <?php
        $result = mysqli_query($koneksi, "SELECT * FROM pendaftaran");
        while ($user_data = mysqli_fetch_array($result)) {
    ?>
    <div class="row">
        <div class="col-3 bg-primary text-white p-3">
            <img src="../gambar/<?php echo $user_data['foto']; ?>" style="width:100%;">
        </div>
        <div class="col-sm-9 bg-dark text-white">
            <div class="container mt-3">
                <table class="table table-dark table-hover">
                    <tbody>
                        <tr>
                            <td>Nama:</td>
                            <td><?php echo $user_data['nama_pendaftar']; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin:</td>
                            <td><?php echo $user_data['jenis_kelamin']; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir:</td>
                            <td><?php echo $user_data['tgl_lahir']; ?></td>
                        </tr>
                        <tr>
                            <td>No HP:</td>
                            <td><?php echo $user_data['nohp_pendaftar']; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat:</td>
                            <td><?php echo $user_data['alamat_pendaftar']; ?></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><?php echo $user_data['email_pendaftar']; ?></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah:</td>
                            <td><?php echo $user_data['asal_sekolah']; ?></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal<?php echo $user_data['id_pendaftar']; ?>">Edit Profile</button>

                <!-- The Modal -->
                <div class="modal fade" id="myModal<?php echo $user_data['id_pendaftar']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <?php
                                $id = $user_data['id_pendaftar'];
                                $result_modal = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE id_pendaftar='$id'");
                                $data = mysqli_fetch_assoc($result_modal);
                            ?>
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Profile</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="../config/proses_edit.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $data['id_pendaftar']; ?>">
                                    <div class="mb-3">
                                        <label for="nama_pendaftar" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama_pendaftar" value="<?php echo $data['nama_pendaftar']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                        <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nohp_pendaftar" class="form-label">No HP</label>
                                        <input type="text" class="form-control" name="nohp_pendaftar" value="<?php echo $data['nohp_pendaftar']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat_pendaftar" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" name="alamat_pendaftar" value="<?php echo $data['alamat_pendaftar']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email_pendaftar" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email_pendaftar" value="<?php echo $data['email_pendaftar']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                                        <input type="text" class="form-control" name="asal_sekolah" value="<?php echo $data['asal_sekolah']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto" class="form-label">Foto</label>
                                        <input type="file" class="form-control" name="foto">
                                    </div>
                                    <button type="submit" name="submitB" class="btn btn-primary">Edit Data</button>
                                </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Modal -->
            </div>
        </div>
    </div>
    <?php 
        }
    ?>
</div>

<?php include "../config/footer.php"; ?>
