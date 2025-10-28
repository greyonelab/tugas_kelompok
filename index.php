<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.7.2-web/css/all.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <title>ITHub</title>
</head>

<body>
    <!-- navigasi -->
  <?php
  include 'header.php'; 
  ?>


  <!-- beranda -->
  <section id="beranda" class="bg-light p-5">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-8">
        </div>
      </div>
    </div>
    <div class="container-fluid ">
    <div class="row rows-cols-md-5 align-items-center">
      <div class="col">
        <div class="p-3 align-items-center">
          <h1 class="mt-5">Selamat Datang Semuannya di ITHub</h1>
          <p class="lead">Tempat Belajar IT untuk meningkatkan keterampilan Anda.</p>
          <a href="#" class="btn btn-info btn-lg mt-3 text-light" data-bs-toggle="modal"
            data-bs-target="#modalDaftar">Daftar Sekarang</a>
        </div>
      </div>
      <div class="col">
        <img class="p-3 align-items-center rounded-5 mt-4" src="image/courses-13.webp" alt="gedunng uncip" width="700" >
      </div>
    </div>
  </div>
  </section>

  <!-- kursus -->
<section id="kursus" class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center fw-bold mb-5 text-dark">Kategori Kursus Populer</h2>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- MERN Stack -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center text-white mb-3" style="width: 80px; height: 80px;">
                            <i class="fab fa-react fa-2x"></i>
                        </div>
                        <h3 class="card-title h4 fw-bold text-dark mb-3">MERN Stack</h3>
                        <p class="card-text text-muted mb-4">
                            Pelajari MongoDB, Express.js, React, dan Node.js untuk menjadi Full Stack Developer yang handal. Bangun aplikasi web modern dan scalable.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Laravel -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="bg-danger rounded-circle d-inline-flex align-items-center justify-content-center text-white mb-3" style="width: 80px; height: 80px;">
                            <i class="fab fa-laravel fa-2x"></i>
                        </div>
                        <h3 class="card-title h4 fw-bold text-dark mb-3">Laravel</h3>
                        <p class="card-text text-muted mb-4">
                            Kuasai framework PHP terpopuler untuk pengembangan web. Dari konsep dasar hingga advanced features seperti API dan microservices.
                        </p>

                    </div>
                </div>
            </div>

            <!-- Flutter -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="bg-info rounded-circle d-inline-flex align-items-center justify-content-center text-white mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-mobile-alt fa-2x"></i>
                        </div>
                        <h3 class="card-title h4 fw-bold text-dark mb-3">Flutter</h3>
                        <p class="card-text text-muted mb-4">
                            Buat aplikasi mobile cross-platform yang menakjubkan dengan Flutter. Satu kode untuk Android dan iOS dengan performa native.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Kotlin -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="bg-success rounded-circle d-inline-flex align-items-center justify-content-center text-white mb-3" style="width: 80px; height: 80px;">
                            <i class="fab fa-android fa-2x"></i>
                        </div>
                        <h3 class="card-title h4 fw-bold text-dark mb-3">Kotlin</h3>
                        <p class="card-text text-muted mb-4">
                            Bahasa pemrograman modern untuk Android Development. Pelajari syntax yang concise dan powerful untuk membuat aplikasi Android yang robust.
                        </p>
                    </div>
                </div>
            </div>

            <!-- JavaScript -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="bg-warning rounded-circle d-inline-flex align-items-center justify-content-center text-dark mb-3" style="width: 80px; height: 80px;">
                            <i class="fab fa-js-square fa-2x"></i>
                        </div>
                        <h3 class="card-title h4 fw-bold text-dark mb-3">JavaScript</h3>
                        <p class="card-text text-muted mb-4">
                            Fondasi dari semua pengembangan web modern. Dari ES6+ hingga framework populer, kuasai bahasa yang paling dibutuhkan di industri.
                        </p>
                    </div>
                </div>
            </div>

            <!-- DevOps & Cloud -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="bg-secondary rounded-circle d-inline-flex align-items-center justify-content-center text-white mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-cloud fa-2x"></i>
                        </div>
                        <h3 class="card-title h4 fw-bold text-dark mb-3">DevOps & Cloud</h3>
                        <p class="card-text text-muted mb-4">
                            Pelajari deployment, containerization dengan Docker, CI/CD, dan cloud services seperti AWS, Azure, dan Google Cloud Platform.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'modal.php';

include 'footer.php';

?>
</body>

</html>