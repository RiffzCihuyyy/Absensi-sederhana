<?php
include 'config.php';

$user_id = $_POST['user_id'];
$tanggal = date('Y-m-d');

$sql = "INSERT INTO absensi (user_id, tanggal) VALUES ('$user_id', '$tanggal')";

if ($conn->query($sql)) {
    echo "Absensi berhasil dicatat. <a href='dashboard.php'>Kembali</a>";
} else {
    echo "Gagal mencatat absensi.";
}
?>
