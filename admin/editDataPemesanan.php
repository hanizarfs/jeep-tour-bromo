<?php
  include "../connection/config.php";
  include "../controller/controllerDashboard.php";
?>
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
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="../css/style.css" rel="stylesheet">
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
        <a href="" class="navbar-brand p-0">
          <img src="./img/jeep-navbar.png" class="w-100 mx-auto d-block" alt="">
          <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="index.php" class="nav-item nav-link">Home</a>
            <a href="tentang.php" class="nav-item nav-link">Tentang</a>
            <a href="layanan.php" class="nav-item nav-link">Layanan</a>
            <a href="blog.php" class="nav-item nav-link">Blog</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Tiket</a>
              <div class="dropdown-menu m-0">
                <a href="pesan-tiket.php" class="dropdown-item">Pesan Tiket</a>
                <a href="pemesanan.php" class="dropdown-item">Pesanan Saya</a>
              </div>
            </div>
            <a href="kontak.php" class="nav-item nav-link">Kontak</a>
          </div>
          <?php if(isset($_COOKIE['username'])) { ?>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link active dropdown-toggle btn btn-primary py-2 px-4 fw-bold"
              data-bs-toggle="dropdown"><?= $_COOKIE['username']; ?></a>
            <div class="dropdown-menu m-0">
              <a href="pengaturan.php" class="dropdown-item">Pengaturan</a>
              <a href="logout.php" class="dropdown-item">Logout</a>
            </div>
          </div>
          <?php } else { ?>
          <a href="login.php" class="btn btn-primary py-2 px-4 fw-bold">Login</a>
          <?php } ?>
          <!-- <a href="login.php" class="btn btn-primary py-2 px-4 fw-bold">Login</a> -->
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
              <a href="pesan-tiket.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Pesan
                Sekarang</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
              <img class="img-fluid" src="img/logo-jeep-hero.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar & Hero End -->

    <section class="wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <form method="POST">
          <?php
          $id = $_GET['id'];
          $sql = "SELECT * FROM `orders` WHERE id=$id";
          $data = $conn->query($sql);
          foreach($data as $row) {
          ?>
          <div class="mb-3">
            <label class="form-label">Nama Pemesan</label>
            <input type="text" name="nama" value="<?= $row['nama'] ?>" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Penjemputan</label>
            <select class="form-select" id="select1" name="penjemputan">
              <option value="Batu">Batu</option>
              <option value="Lumajang">Lumajang</option>
              <option value="Malang">Malang</option>
              <option value="Probolinggo">Probolinggo</option>
              <option value="Surabaya">Surabaya</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Paket</label>
            <select class="form-select" id="select1" name="paket">
              <option value="Paket A">Paket A</option>
              <option value="Paket B">Paket B</option>
              <option value="Paket C">Paket C</option>
              <option value="Paket D">Paket D</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Tanggal Penjemputan</label>
            <input type="date" name="tanggalPenjemputan" value="<?= $row['tanggal_penjemputan'] ?>"
              class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Orang</label>
            <select class="form-select" id="select1" name="jumlahOrang">
              <option value="1">1 Orang</option>
              <option value="2">2 Orang</option>
              <option value="3">3 Orang</option>
              <option value="4">4 Orang</option>
              <option value="5">5 Orang</option>
              <option value="6">6 Orang</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Catatan</label>
            <input type="text" name="catatan" value="<?= $row['catatan'] ?>" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Bank</label>
            <input type="text" name="namaBank" value="<?= $row['nama_bank'] ?>" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Nomor Rekening</label>
            <input type="text" name="noRek" value="<?= $row['no_rek'] ?>" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <label class="form-label">Orang</label>
            <select class="form-select" id="select1" name="keterangan">
              <option value="Belum lunas">Belum Lunas</option>
              <option value="Lunas">Lunas</option>
            </select>
          </div>
          <input type="hidden" name="id" value="<?= $id ?>">
          <button type="submit" class="btn btn-primary" name="editDataPemesanan">Simpan</button>
          <?php } ?>
        </form>
      </div>
    </section>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Reservation</a>
            <a class="btn btn-link" href="">Privacy Policy</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
            <h5 class="text-light fw-normal">Monday - Saturday</h5>
            <p>09AM - 09PM</p>
            <h5 class="text-light fw-normal">Sunday</h5>
            <p>10AM - 08PM</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
            <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
            <div class="position-relative mx-auto" style="max-width: 400px;">
              <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
              <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
          © 2022 Copyright:
          <a class="text-white">Bank BayJack</a>
        </div>
      </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/tempusdominus/js/moment.min.js"></script>
  <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="../js/main.js"></script>
</body>

</html>