<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Jeep Tour Bromo</title>
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
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="tentang.php" class="nav-item nav-link">Tentang</a>
            <a href="layanan.php" class="nav-item nav-link">Layanan</a>
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
        <div class="container my-5 py-5">
          <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
              <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Jeep Tour Bromo</h1>
              <p class="text-white animated slideInLeft mb-4 pb-2">Jeep Tour secara khusus untuk para
                wisatawan gunung Bromo telah menyediakan
                sarana kendaraan wisata menuju gunung Bromo tanpa paket wisata. Anda cukup
                dengan sewa Jeep Bromo, dengan fasilitas tiket masuk gunung Bromo atau booking
                sendiri untuk tiketnya. Penjemputan di alamat atau hotel tempat menginap.</p>
              <a href="tiket.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Pesan
                Sekarang</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
              <img class="img-fluid" src="./img/logo-jeep-hero.png" alt="">
            </div>
          </div>
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
                <p>Driver kami merupakan orang yang sudah ahli di bidangnya dan mengutamakan keamanan
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
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <div class="row g-3">
              <div class="col-6 text-start">
                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="./img/imgjeep1-about.jpg">
              </div>
              <div class="col-6 text-start">
                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="./img/imgjeep2-about.jpg"
                  style="margin-top: 25%;">
              </div>
              <div class="col-6 text-end">
                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="./img/imgjeep3-about.jpg">
              </div>
              <div class="col-6 text-end">
                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="./img/imgjeep4-about.jpeg">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h5 class="section-title ff-secondary text-start text-primary fw-normal">Tentang Kami</h5>
            <h1 class="mb-4">Welcome to Jeep Tour Bromo</h1>
            <p class="mb-4">Sewa Jeep Wisata Gunung Bromo, Wisata ke Gunung Bromo tanpa paket wisata atau
              agen wisata sangat mungkin dilakukan, lebih-lebih yang berencana berangkat ke Gunung Bromo
              dengan kendaraan sendiri.</p>
            <p class="mb-4">Yang kamu perlu lakukan cukup dengan sewa Jeep Bromo untuk menikmati Golden
              Sunrise dari puncak tertinggi, Pananjakan. Dan berkeliling di sekitar kaldera Bromo mulai
              dari Kawah Bromo, Pura Luhur Poten, Savanah, Pasir Berbisik hingga Bukit Teletubbies. Bisa
              memilih start dan berangkat dari berbagai kota, Batu, Malang, Tumpang, Pasuruan dan
              Probolinggo.</p>
            <div class="row g-4 mb-4">
              <div class="col-sm-6">
                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                  <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">8
                  </h1>
                  <div class="ps-4">
                    <p class="mb-0">Tahun</p>
                    <h6 class="text-uppercase mb-0">Pengalaman</h6>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                  <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">25
                  </h1>
                  <div class="ps-4">
                    <p class="mb-0">Unit</p>
                    <h6 class="text-uppercase mb-0">Jeep Layak Pakai</h6>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn btn-primary py-3 px-5 mt-2" href="tentang.html">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->


    <!--galeri -->
    <h1 class="text-center p-5 wow fadeInUp" data-wow-delay="0.1s" style="border-top: solid 1px rgb(179, 179, 179)">
      Tempat Wisata Bromo</h1>
    <div class="cont s--inactive wow fadeInUp" data-wow-delay="0.1s">
      <!-- cont inner start -->
      <div class="cont__inner">
        <!-- el start -->
        <div class="el">
          <div class="el__overflow">
            <div class="el__inner">
              <div class="el__bg"></div>
              <div class="el__preview-cont">
                <h2 class="el__heading">Spot Sunrise</h2>
              </div>
              <div class="el__content">
                <div class="el__text">Spot Sunrise</div>
                <div class="el__close-btn"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- el end -->
        <!-- el start -->
        <div class="el">
          <div class="el__overflow">
            <div class="el__inner">
              <div class="el__bg"></div>
              <div class="el__preview-cont">
                <h2 class="el__heading">Lembah Widodaren</h2>
              </div>
              <div class="el__content">
                <div class="el__text">Lembah Widodaren</div>
                <div class="el__close-btn"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- el end -->
        <!-- el start -->
        <div class="el">
          <div class="el__overflow">
            <div class="el__inner">
              <div class="el__bg"></div>
              <div class="el__preview-cont">
                <h2 class="el__heading">Gunung Batok</h2>
              </div>
              <div class="el__content">
                <div class="el__text">Gunung Batok</div>
                <div class="el__close-btn"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- el end -->
        <!-- el start -->
        <div class="el">
          <div class="el__overflow">
            <div class="el__inner">
              <div class="el__bg"></div>
              <div class="el__preview-cont">
                <h2 class="el__heading">Bukit Teletabis</h2>
              </div>
              <div class="el__content">
                <div class="el__text">Bukit Teletabis</div>
                <div class="el__close-btn"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- el end -->
        <!-- el start -->
        <div class="el">
          <div class="el__overflow">
            <div class="el__inner">
              <div class="el__bg"></div>
              <div class="el__preview-cont">
                <h2 class="el__heading">Bukit Kingkong</h2>
              </div>
              <div class="el__content">
                <div class="el__text">Bukit Kingkong</div>
                <div class="el__close-btn"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- el end -->
      </div>
      <!-- cont inner end -->
    </div>
    <!-- end Galeri -->

    <!-- Team Start -->
    <div class="container-xxl pt-5 pb-3">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h1 class="mb-5">Tim Kita</h1>
        </div>
        <div class="row g-2">
          <div class="col-lg-1"></div>
          <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item text-center rounded overflow-hidden">
              <div class="rounded-circle overflow-hidden m-4">
                <img class="img-fluid" src="./img/team-bayu.jpg" alt="">
              </div>
              <h5 class="mb-0">Bayu Triwicaksono Yulianto</h5>
              <small>(K3521015)</small>
              <div class="d-flex justify-content-center mt-3">
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item text-center rounded overflow-hidden">
              <div class="rounded-circle overflow-hidden m-4">
                <img class="img-fluid" src="./img/team-desva.jpg" alt="">
              </div>
              <h5 class="mb-0">Desva Fitranda Majid</h5>
              <small>(K3521019)</small>
              <div class="d-flex justify-content-center mt-3">
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item text-center rounded overflow-hidden">
              <div class="rounded-circle overflow-hidden m-4">
                <img class="img-fluid" src="./img/team-dimas.jpg" alt="">
              </div>
              <h5 class="mb-0">Dimas Prima Cahyadi</h5>
              <small>(K3521021)</small>
              <div class="d-flex justify-content-center mt-3">
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item text-center rounded overflow-hidden">
              <div class="rounded-circle overflow-hidden m-4">
                <img class="img-fluid" src="./img/team-hanizar.jpg" alt="">
              </div>
              <h5 class="mb-0">Hanizar Florian Sukma</h5>
              <small>(K3521033)</small>
              <div class="d-flex justify-content-center mt-3">
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item text-center rounded overflow-hidden">
              <div class="rounded-circle overflow-hidden m-4">
                <img class="img-fluid" src="./img/team-adhi.jpg" alt="">
              </div>
              <h5 class="mb-0">Adhi Zakiah Nur Illahi</h5>
              <small>(K3521073)</small>
              <div class="d-flex justify-content-center mt-3">
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-1"></div>
        </div>
      </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="text-center">
          <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimoni</h5>
          <h1 class="mb-5">Kata Pelanggan</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
          <div class="testimonial-item bg-transparent border rounded p-4">
            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
            <p>Intine jeep tour e penak wes titik.</p>
            <div class="d-flex align-items-center">
              <img class="img-fluid flex-shrink-0 rounded-circle" src="./img/testimonial-1.jpg"
                style="width: 50px; height: 50px;">
              <div class="ps-3">
                <h5 class="mb-1">Vamel</h5>
              </div>
            </div>
          </div>
          <div class="testimonial-item bg-transparent border rounded p-4">
            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
            <p>Jeep Tour ini sangat recomend YGY</p>
            <div class="d-flex align-items-center">
              <img class="img-fluid flex-shrink-0 rounded-circle" src="./img/testimonial-2.jpg"
                style="width: 50px; height: 50px;">
              <div class="ps-3">
                <h5 class="mb-1">Yulianto</h5>
              </div>
            </div>
          </div>
          <div class="testimonial-item bg-transparent border rounded p-4">
            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
            <p> Jeep Tour Muasokk masehh!!! </p>
            <div class="d-flex align-items-center">
              <img class="img-fluid flex-shrink-0 rounded-circle" src="./img/testimonial-3.jpg"
                style="width: 50px; height: 50px;">
              <div class="ps-3">
                <h5 class="mb-1">Bagas Dwi</h5>
              </div>
            </div>
          </div>
          <div class="testimonial-item bg-transparent border rounded p-4">
            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
            <p>Pelayanan sangat baik, mantep dah </p>
            <div class="d-flex align-items-center">
              <img class="img-fluid flex-shrink-0 rounded-circle" src="./img/testimonial-4.jpg"
                style="width: 50px; height: 50px;">
              <div class="ps-3">
                <h5 class="mb-1">Sintya</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

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

  <script>
    var $cont = document.querySelector('.cont');
    var $elsArr = [].slice.call(document.querySelectorAll('.el'));
    var $closeBtnsArr = [].slice.call(document.querySelectorAll('.el__close-btn'));

    setTimeout(function () {
      $cont.classList.remove('s--inactive');
    }, 200);

    $elsArr.forEach(function ($el) {
      $el.addEventListener('click', function () {
        if (this.classList.contains('s--active')) return;
        $cont.classList.add('s--el-active');
        this.classList.add('s--active');
      });
    });

    $closeBtnsArr.forEach(function ($btn) {
      $btn.addEventListener('click', function (e) {
        e.stopPropagation();
        $cont.classList.remove('s--el-active');
        document.querySelector('.el.s--active').classList.remove('s--active');
      });
    });
  </script>

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