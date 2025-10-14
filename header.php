<?php
$halaman = basename($_SERVER['PHP_SELF']); // ambil nama file
?>

<nav class="sticky-top"  style="background-color: #06b6d4; padding: 15px;">
  <div class="container d-flex justify-content-between align-items-center">
    <h5 style="color: aliceblue;"><i class="fas fa-code me-2"></i> ITHub</h5>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link <?= $halaman == 'index.php' ? 'fw-bold text-white' : 'text-white' ?>" href="index.php">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php#kursus">Kursus</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= $halaman == 'tentang.php' ? 'fw-bold text-white' : 'text-white' ?>" href="tentang.php">Tentang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= $halaman == 'kontak.php' ? 'fw-bold text-white' : 'text-white' ?>" href="kontak.php">Kontak</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-light rounded-5" data-bs-toggle="modal" data-bs-target="#modalDaftar">Daftar</a>
      </li>
    </ul>
  </div>
</nav>
