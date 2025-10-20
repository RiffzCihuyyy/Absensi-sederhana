<?php
include 'config.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Selamat datang, <?= $_SESSION['username']; ?>!</h2>
    <a href="logout.php" class="btn btn-danger">Logout</a>

    <hr>
    <h4>Absen Kehadiran</h4>
    <form action="proses_absen.php" method="POST">
        <input type="hidden" name="user_id" value="<?= $_SESSION['user_id']; ?>">
        <button type="submit" name="hadir" class="btn btn-primary">Absen Hadir</button>
    </form>
</body>
</html>
