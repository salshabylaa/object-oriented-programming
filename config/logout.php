<?php if (isset($_SESSION['email_pendaftar'])): ?>
    <form action="../config/proses_logout.php" method="post">
        <button type="submit" class="btn btn-outline-secondary" style="width:140px;">Log Out</button>
    </form>
<?php endif; ?>
