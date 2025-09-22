<!-- Login Button -->
<button type="button" class="btn btn-success" style="width:140px;" data-bs-toggle="modal" data-bs-target="#loginModal">
    Login
</button>

<!-- Login Modal -->
<div class="modal fade" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="../config/proses_login.php" method="post">
                    <div class="mb-3">
                        <label for="email_pendaftar" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email_pendaftar" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End of Login Modal -->
