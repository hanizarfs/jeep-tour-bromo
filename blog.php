<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Restoran - Bootstrap Restaurant Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <style>
    .caraousel {
      z-index: -1;
      height: 20vh !important;
    }

    .bg-carousel {
      display: flex !important;
      align-items: center !important;
    }

    .h-50 {
      height: 60vh !important;
      object-fit: cover;
    }

    .tiket {
      height: 100vh;
      z-index: 10;
      position: absolute;
      margin-top: -41vh;
    }

    .tiket-content {
      border-radius: 20px;
      width: 80%;
    }
  </style>

</head>

<body>
  <div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
          <img src="./img/jeep-navbar.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="index.php" class="nav-item nav-link">Home</a>
            <a href="tentang.php" class="nav-item nav-link">Tentang</a>
            <a href="layanan.php" class="nav-item nav-link">Layanan</a>
            <a href="blog.php" class="nav-item nav-link active">Blog</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tiket</a>
              <div class="dropdown-menu m-0">
                <a href="pesan-tiket.php" class="dropdown-item">Pesan Tiket</a>
                <a href="pemesanan.php" class="dropdown-item">Pesanan Saya</a>
              </div>
            </div>
            <a href="kontak.php" class="nav-item nav-link">Kontak</a>
          </div>
          <?php if(isset($_COOKIE['username'])) { ?>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle btn btn-primary py-2 px-4 fw-bold"
              data-bs-toggle="dropdown"><?= $_COOKIE['username']; ?></a>
            <div class="dropdown-menu m-0">
              <a href="pengaturan.php" class="dropdown-item">Pengaturan</a>
              <a href="logout.php" class="dropdown-item">Logout</a>
            </div>
          </div>
          <?php } else { ?>
          <a href="login.php" class="btn btn-primary py-2 px-4 fw-bold">Login</a>
          <?php } ?>
        </div>
      </nav>

      <div class="container-xxl py-5 bg-dark hero-header">
        <div class="container text-center my-5 pt-5 pb-4">
          <h1 class="display-3 text-white mb-3 animated slideInDown">Blog Kami</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Layanan</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <!-- Navbar & Hero End -->



    <!-- Blog -->
    <div class="container-fluid">
      <h1 class="text-center p-5">Trending Topik</h1>
      <div class=" bg-carousel bg-dark p-5">
        <div id="carouselExampleIndicators" class="carousel slide d-flex mx-auto w-75" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="https://t-2.tstatic.net/medan/foto/bank/images/Viral-Ambil-Foto-di-Gunung-Bromo-Harus-Bayar-Rp-1-Juta.jpg"
                class="d-block w-100 h-50" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://i.ytimg.com/vi/7rav2A1qGJc/maxresdefault.jpg" class="d-block w-100 h-50" alt="...">
            </div>
            <div class="carousel-item">
              <img
                src="https://cdn1-production-images-kly.akamaized.net/KQuDuIHZXF21t-fwt7ipkL1I4yM=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/thumbnails/2818239/original/041095600_1559070468-turis-lamar-kekasih-di-puncak-bromo-romantis-tapi-bikin-deg-degan-stock-lebaran-6bcc47.jpg"
                class="d-block w-100 h-50" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <section class="pt-5 pb-5 efek-scroll">
        <div class="container">
          <div class="row">
            <div class="col-6">
              <h3 class="mb-5">Berita Terkini</h3>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <a href="https://www.orami.co.id/magazine/wisata-bromo">
                          <div class="card" type="" href="">
                            <img class="img-fluid" alt="100%x280"
                              src="https://melampa.com/wp-content/uploads/2018/04/Amazing-landscape-view-of-Mt.-Bromo.jpg">
                            <div class="card-body">
                              <h4 class="card-title">Intip Keindahan Wisata Bromo yang Wajib untuk Dikunjungi
                              </h4>
                              <p class="card-text">cdf.orami.co.id</p>
                              <a href="https://www.orami.co.id/magazine/wisata-bromo" target="_blank"
                                class="btn bg-primary border border-white text-decoration-none">Selengkapnya
                              </a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col-md-4 mb-3">
                        <a
                          href="https://repjogja.republika.co.id/berita/rn8gp5327/catat-ini-aturan-kunjungan-wisata-di-gunung-bromo-selama-nataru">
                          <div class="card" type="" href="">
                            <img class="img-fluid" alt="100%x280"
                              src="https://static.republika.co.id/uploads/images/inpicture_slide/085691600-1660722350-830-556.jpg">
                            <div class="card-body">
                              <h4 class="card-title">Ini Aturan Kunjungan Wisata di Gunung Bromo Selama Nataru
                              </h4>
                              <p class="card-text">repjogja.republika.co.id</p>
                              <a href="" target="_blank"
                                class="btn bg-primary border border-white text-decoration-none">Selengkapnya
                              </a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col-md-4 mb-3">
                        <a
                          href="https://www.medcom.id/nasional/daerah/DkqAPARk-wulan-kapitu-wisata-gunung-bromo-ditutup-23-24-desember-2022">
                          <div class="card" type="" href="">
                            <img class="img-fluid" alt="100%x280"
                              src="https://cdn.medcom.id/dynamic/content/2022/12/21/1516672/uUM3xQDNSf.jpg?w=1024">
                            <div class="card-body">
                              <h4 class="card-title">Wulan Kapitu, Wisata Gunung Bromo Ditutup 23-24 Desember 2022
                              </h4>
                              <p class="card-text">www.medcom.id</p>
                              <a href="https://www.medcom.id/nasional/daerah/DkqAPARk-wulan-kapitu-wisata-gunung-bromo-ditutup-23-24-desember-2022"
                                target="_blank"
                                class="btn bg-primary border border-white text-decoration-none">Selengkapnya
                              </a>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <a
                          href="https://www.kompasiana.com/illyas1812/63a22ffb4addee3e1e7a6bc2/destinasi-wisata-baru-bromo-dan-wajib-anda-kunjungi">
                          <div class="card" type="" href="">
                            <img class="img-fluid" alt="100%x280"
                              src="https://beruangtravelmalang.com/berita/983499256orig1446100738.jpg">
                            <div class="card-body">
                              <h4 class="card-title">Destinasi Wisata Baru Bromo dan Wajib Anda kunjungi
                              </h4>
                              <p class="card-text">www.kompasiana.com</p>
                              <a href="https://www.kompasiana.com/illyas1812/63a22ffb4addee3e1e7a6bc2/destinasi-wisata-baru-bromo-dan-wajib-anda-kunjungi"
                                target="_blank"
                                class="btn bg-primary border border-white text-decoration-none">Selengkapnya
                              </a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col-md-4 mb-3">
                        <a
                          href="https://www.detik.com/jatim/wisata/d-6312164/harga-sewa-jip-wisata-bromo-naik-segini-tarifnya-sekarang">
                          <div class="card" type="" href="">
                            <img class="img-fluid" alt="100%x280"
                              src="https://akcdn.detik.net.id/community/media/visual/2022/09/26/jeep-bromo.jpeg?w=700&q=90">
                            <div class="card-body">
                              <h4 class="card-title">Harga Sewa Jip Wisata Bromo Naik, Segini Tarifnya Sekarang
                              </h4>
                              <p class="card-text">www.detik.com</p>
                              <a href="hhttps://www.detik.com/jatim/wisata/d-6312164/harga-sewa-jip-wisata-bromo-naik-segini-tarifnya-sekarang"
                                target="_blank"
                                class="btn bg-primary border border-white text-decoration-none">Selengkapnya
                              </a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col-md-4 mb-3">
                        <a
                          href="https://travel.kompas.com/read/2022/12/12/070700127/jembatan-kaca-di-bromo-sudah-rampung-tinggal-tunggu-peresmian">
                          <div class="card" type="" href="">
                            <img class="img-fluid" alt="100%x280"
                              src="https://asset.kompas.com/crops/BieGTobBzE6tjL-azKLzUgLN7w0=/0x0:0x0/750x500/data/photo/2022/06/26/62b81cb21776f.jpeg">
                            <div class="card-body">
                              <h4 class="card-title">Jembatan Kaca di Bromo Sudah Rampung, Tinggal Tunggu Peresmian
                              </h4>
                              <p class="card-text">travel.kompas.com</p>
                              <a href="https://travel.kompas.com/read/2022/12/12/070700127/jembatan-kaca-di-bromo-sudah-rampung-tinggal-tunggu-peresmian"
                                target="_blank"
                                class="btn bg-primary border border-white text-decoration-none">Selengkapnya
                              </a>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Blog end -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <p>Kami merupakan penyedia jasa sewa jeep Bromo yang sudah berpengalaman sejak tahun 2016 dan telah melayani
              ribuan pengunjung wisata gunung Bromo untuk mengeksplore dan menikmati keindahan wisata Gunung Bromo.</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Perusahaan</h4>
            <h6 class="fw-normal"><a href="tentang.html" style="color: aliceblue !important;"> - Tentang Kami</a></h6>
            <h6 class="fw-normal"><a href="blog.html" style="color: aliceblue !important;"> - Blog</a></h6>
            <h6 class="fw-normal"><a href="layanan.html" style="color: aliceblue !important;"> - Layanan</a></h6>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Ahmad Yani No. 200 Kampus V FKIP UNS Pabelan
              Surakarta

            </p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+6289678123456</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>jeeptourbromo@gmail.com </p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Kirim Email</h4>
            <p>Hubungi kami jika ada pertanyaan
              kami melayani 24 Jam</p>
            <div class="position-relative mx-auto" style="max-width: 400px;">
              <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
              <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Kirim</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-100 bg-dark h-100">
      <div class="text-center p-3" style="background-color: rgb(2, 7, 34);">
        © 2022 Copyright:
        <a class="text-white">Jeep Tour</a>
      </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>