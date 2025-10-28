<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-6.7.2-web/css/all.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <title>Kontak - ITHub</title>
</head>

<body>

  <body class="bg-light">

    <!-- navigasi -->
    <?php
    include 'header.php';
    ?>
    
    <!-- Kontak -->
    <section class="py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
      <div class="container">
        <div class="row g-5">

          <!-- tampilan kiri -->
          <div class="col-lg-6">
            <h1 class="display-4 fw-bold text-dark mb-3">Hubungi Kami</h1>
            <p class="lead text-muted mb-4">Siap membantu perjalanan belajar teknologi Anda. Tim support kami tersedia 24/7 untuk menjawab pertanyaan dan memberikan bantuan terbaik.</p>

            <div class="mb-4">
              <div class="d-flex align-items-center mb-3">
                <div class="bg-primary rounded-circle p-3 me-3">
                  <i class="fas fa-map-marker-alt text-white fa-lg"></i>
                </div>
                <div>
                  <h6 class="mb-1 fw-bold text-dark">Alamat Kantor</h6>
                  <p class="mb-0 text-muted">Jl. Perjuangan No. 0123, Tasikmalaya, 12345</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="d-flex align-items-center">
                  <div class="bg-success rounded-circle p-3 me-3">
                    <i class="fab fa-whatsapp text-white fa-lg"></i>
                  </div>
                  <div>
                    <h6 class="mb-1 fw-bold text-dark">WhatsApp</h6>
                    <a href="https://wa.me/083892532749" class="text-decoration-none text-muted">+62 838 9253 2749</a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <div class="d-flex align-items-center">
                  <div class="bg-info rounded-circle p-3 me-3">
                    <i class="fas fa-envelope text-white fa-lg"></i>
                  </div>
                  <div>
                    <h6 class="mb-1 fw-bold text-dark">Email</h6>
                    <a href="mailto:ITHubtasikk@gmail.com" class="text-decoration-none text-muted">ITHubtasikk@gmail.com</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="text-center mt-3">
              <p class="text-muted mb-3">Atau hubungi kami langsung:</p>
              <div class="d-flex gap-2 justify-content-center">
                <a href="https://wa.me/6281234567890" class="btn btn-success btn-sm rounded-pill">
                  <i class="fab fa-whatsapp me-1"></i>Chat WhatsApp
                </a>
                <a href="mailto:info@ithub.com" class="btn btn-outline-info btn-sm rounded-pill">
                  <i class="fas fa-envelope me-1"></i>Kirim Email
                </a>
              </div>
            </div>

          </div>

          <!-- tampilan kanan -->
          <div class="col-lg-6">
            <div class="px-2 py-3 px-lg-4">
              <h3 class="fw-bold text-dark mb-3">
                <i class="fas fa-paper-plane me-2 text-info"></i>Kirim Pesan
              </h3>
              <form action="simpan_data_pesan_masuk.php" method="POST">
                <div class="row g-3 mb-3">
                  <div class="col-md-6">
                    <label for="nama" class="form-label fw-semibold">
                      <i class="fas fa-user text-muted me-1"></i>Nama Lengkap
                    </label>
                    <input type="text" class="form-control border rounded-3" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                  </div>
                  <div class="col-md-6">
                    <label for="email" class="form-label fw-semibold">
                      <i class="fas fa-envelope text-muted me-1"></i>Email
                    </label>
                    <input type="email" class="form-control border rounded-3" id="email" name="email" placeholder="nama@email.com" required>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="wa" class="form-label fw-semibold">
                    <i class="fab fa-whatsapp text-muted me-1"></i>No. WhatsApp
                  </label>
                  <input type="text" class="form-control border rounded-3" id="wa" name="wa" placeholder="08123456789" required>
                </div>

                <div class="mb-3">
                  <label for="kategori" class="form-label fw-semibold">
                    <i class="fas fa-tag text-muted me-1"></i>Kategori Pertanyaan
                  </label>
                  <select class="form-select border rounded-3" id="kategori" name="kategori" required>
                    <option value="">Pilih kategori...</option>
                    <option value="kursus">Informasi Kursus</option>
                    <option value="teknis">Bantuan Teknis</option>
                    <option value="pembayaran">Pembayaran</option>
                    <option value="sertifikat">Sertifikat</option>
                    <option value="sanran dan masukan">Saran & masukan</option>
                    <option value="lainnya">Lainnya</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="pesan" class="form-label fw-semibold">
                    <i class="fas fa-comment text-muted me-1"></i>Pesan
                  </label>
                  <textarea class="form-control border rounded-3" id="pesan" name="pesan" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                </div>
                
                <button type="submit" class="btn btn-info text-white px-4 py-2 fw-semibold rounded-pill">
                  <i class="fas fa-paper-plane me-1"></i> Kirim Pesan
                </button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="py-5 bg-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center mb-5">
            <h2 class="fw-bold text-dark mb-3">Pertanyaan yang Sering Diajukan</h2>
            <p class="lead text-muted">Mungkin jawaban yang Anda cari sudah tersedia di bawah ini</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="accordion" id="faqAccordion">
              <div class="accordion-item border-0 shadow-sm mb-3">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    Berapa lama waktu respons untuk pertanyaan?
                  </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-muted">
                    Kami berkomitmen untuk merespons semua pertanyaan dalam waktu maksimal 24 jam pada hari kerja. Untuk pertanyaan urgent, Anda dapat menghubungi kami melalui WhatsApp.
                  </div>
                </div>
              </div>

              <div class="accordion-item border-0 shadow-sm mb-3">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    berapa harga per kursusnya?
                  </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-muted">
                    untuk harga kami berkomitmen untuk memberikan harga yang terjangkau semua flat dari Rp 1000.000 per kursus
                  </div>
                </div>
              </div>

              <div class="accordion-item border-0 shadow-sm mb-3">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    Bagaimana cara mendaftar kursus?
                  </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-muted">
                    Anda dapat mendaftar langsung melalui website atau menghubungi tim kami. Proses pendaftaran sangat mudah dan tim support akan memandu Anda step by step.
                  </div>
                </div>
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