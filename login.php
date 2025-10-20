<?php include 'config.php'; ?>
<?php include 'partials/header.php'; ?>

<div class="container login-container">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">
                <i class="bi bi-person-circle"></i> Login
            </h3>
            <form action="proses_login.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-box-arrow-in-right"></i> Login
                    </button>
                    <a href="register.php" class="btn btn-outline-secondary">
                        <i class="bi bi-person-plus"></i> Register
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>