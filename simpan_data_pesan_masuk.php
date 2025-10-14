<?php
include "db.php";

// Ambil data dari form
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$wa       = $_POST['wa'];
$kategori = $_POST['kategori'];
$pesan    = $_POST['pesan'];


$sql = "INSERT INTO pesan_masuk (nama, email, wa, kategori, pesan) 
        VALUES ('$nama', '$email', '$wa', '$kategori', '$pesan')";

if ($conn->query($sql) === true ) {
    echo '<script>alert("Pesan berhasil dikirim. Terima kasih!");</script>';
    echo '<script>window.location.href = "kontak.php";</script>';
} else {
    echo '<script>alert("Terjadi kesalahan saat mengirim pesan.");</script>';
    echo '<script>window.location.href = "kontak.php";</script>';
}

$stmt->close();
$conn->close();
?>
