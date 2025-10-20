<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE username = '$username'");
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header("Location: dashboard.php");
} else {
    echo "Login gagal. <a href='index.php'>Coba lagi</a>";
}
?>
