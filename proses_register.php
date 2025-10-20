<?php
include 'config.php';

$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (nama_lengkap, username, password) VALUES ('$nama_lengkap', '$username', '$password')";

$check = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
if (mysqli_num_rows($check) > 0) {
    echo "<script>
        alert('Username sudah digunakan!');
        window.location = 'register.php';
    </script>";
    exit;
}

if ($conn->query($sql)) {
    header("Location: login.php");
} else {
    echo "Gagal registrasi: " . $conn->error;
}
?>
