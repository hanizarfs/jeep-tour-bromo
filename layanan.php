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
            <a href="layanan.php" class="nav-item nav-link active">Layanan</a>
            <a href="blog.php" class="nav-item nav-link">Blog</a>
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

      <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
          <h1 class="display-3 text-white mb-3 animated slideInDown">Layanan Kami</h1>
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


    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                <h5>Professional Driver</h5>
                <p class="pb-4">Driver kami merupakan orang yang sudah ahli di bidangnya dan mengutamakan keamanan
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fas fa-3x text-primary mb-4 fa-car-side"></i>
                <h5>Jeep Yang Nyaman</h5>
                <p class="pb-5">Unit Jeep kami merupakan
                  yang terbaik dan ternyaman</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                <h5>Online Order</h5>
                <p class="pb-4">Kamu bisa membeli tiket
                  dengan online melalui website
                  ini dengan praktis</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                <h5>24/7 Service</h5>
                <p class="pb-4">Kami memberikan layanan
                  setiap hari untuk memberikan
                  informasi kepada anda</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fas fa-dollar-sign text-primary mb-4"></i>
                <h5>Harga Terjangkau</h5>
                <p class="pb-5">Jeep Tour kami memberikan
                  harga yang terjangkau bagi
                  pengunjung
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fas fa-3x text-primary mb-4 fa-solid fa-user-check"></i>
                <h5>Pelayanan Terbaik</h5>
                <p class="pb-3">Kami memberikan pelayanan
                  yang terbaik untuk kamu yang
                  menggunakan jasa kami</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fas fa-hospital text-primary mb-4"></i>
                <h5>Jaminan Asuransi</h5>
                <p class="pb-4">Kami memberikan jaminan
                  asuransi untuk mengatasi
                  kejadian tak terduga</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fas fa-users text-primary mb-4"></i>
                <h5>Tidak Perlu Antri</h5>
                <p class="pb-4">Kalian tidak perlu takut antri
                  karna kami menyediakan unit
                  Jeep yang cukup banyak</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <p>Kami merupakan penyedia jasa sewa jeep Bromo yang sudah berpengalaman sejak tahun 2016 dan
              telah melayani ribuan pengunjung wisata gunung Bromo untuk mengeksplore dan menikmati
              keindahan wisata Gunung Bromo.</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Perusahaan</h4>
            <h6 class="fw-normal"><a href="tentang.html" style="color: aliceblue !important;"> - Tentang
                Kami</a></h6>
            <h6 class="fw-normal"><a href="blog.html" style="color: aliceblue !important;"> - Blog</a></h6>
            <h6 class="fw-normal"><a href="layanan.html" style="color: aliceblue !important;"> - Layanan</a>
            </h6>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Ahmad Yani No. 200 Kampus V FKIP
              UNS Pabelan Surakarta

            </p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+6289678123456</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>jeeptourbromo@gmail.com</p>
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