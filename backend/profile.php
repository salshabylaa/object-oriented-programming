<?php 
include "../config/koneksi.php";
include "../config/header.php";
session_start();

    if (!isset($_SESSION['email_pendaftar'])) {
        header("Location: ../tamu/pengumuman.php");
        exit();
    }
?>  
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="article.php">Article</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="galery.php">Gallery</a>
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
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>No Hp</th>
                <th>Alamat</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($koneksi, "SELECT id_pendaftar, nama_pendaftar, jenis_kelamin, tgl_lahir, nohp_pendaftar, alamat_pendaftar, foto FROM pendaftaran");
            $no = 1;
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $row['nama_pendaftar'] . "</td>";
                echo "<td>" . $row['jenis_kelamin'] . "</td>";
                echo "<td>" . $row['tgl_lahir'] . "</td>";
                echo "<td>" . $row['nohp_pendaftar'] . "</td>";
                echo "<td>" . $row['alamat_pendaftar'] . "</td>";
                echo "<td><img src='../gambar/" . $row['foto'] . "' width='50'></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <h2>Status</h2>            
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Password</th>
                <th>Asal Sekolah</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($koneksi, "SELECT id_pendaftar, nama_pendaftar, email_pendaftar, password, asal_sekolah, status FROM pendaftaran");
            $no = 1;
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $row['nama_pendaftar'] . "</td>";
                echo "<td>" . $row['email_pendaftar'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['asal_sekolah'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td><button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#myModal" . $row['id_pendaftar'] . "'>Edit</button></td>";
                echo "<td><button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#deleteModal" . $row['id_pendaftar'] . "'>Hapus</button></td>";
                echo "</tr>";
                ?>
                <!-- Edit Modal -->
                <div class="modal fade" id="myModal<?php echo $row['id_pendaftar']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Status</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="../config/proses_edit.php" method="post">
                                    <input type="hidden" name="id_pendaftar" value="<?php echo $row['id_pendaftar']; ?>">
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <input type="text" class="form-control" name="status" value="<?php echo $row['status']; ?>" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Edit Data</button>
                                </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Edit Modal -->

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal<?php echo $row['id_pendaftar']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Hapus Pendaftar</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <p>Apakah Anda yakin ingin menghapus pendaftar ini?</p>
                                <form action="../config/proses_hapus.php" method="post">
                                    <input type="hidden" name="id_pendaftar" value="<?php echo $row['id_pendaftar']; ?>">
                                    <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Delete Modal -->
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?php include "../config/footer.php"; ?>
