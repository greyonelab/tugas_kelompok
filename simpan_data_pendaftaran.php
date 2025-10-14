<?php
// ngambil data db
include "db.php";

// var data form
$D_nama = $_POST['nama'];
$D_umur = $_POST['umur'];
$D_jenis_kelamin = $_POST['jenis_kelamin'];
$D_no_hp = $_POST['no_hp'];
$D_alamat = $_POST['alamat'];
$D_kursus = $_POST['kursus'];

// sql simpan data
$sql = "INSERT INTO form_pendaftaran (nama, umur, jenis_kelamin, no_hp, alamat, kursus) 
        VALUES ('$D_nama', $D_umur, '$D_jenis_kelamin', '$D_no_hp', '$D_alamat', '$D_kursus')";

if ($conn->query($sql) === true ) {
    echo '<script>alert("Pendaftaran berhasil diajukan, Silahkan datang ke tempat lokasi untuk registrasi ulang");</script>';
    echo '<script>window.location.href = "index.php"</script>';
} 
else {
    echo '<script>alert("data gagal disimpan");</script>';
    echo '<script>window.location.href = "index.php"</script>';
}

$conn->close();
?>