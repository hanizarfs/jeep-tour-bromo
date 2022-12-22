<?php
  include "./connection/config.php";
  include "./controller/controllerTiket.php";
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
          <h1 class="display-3 text-white mb-3 animated slideInDown">Pemesanan Tiket</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Pesan Tiket</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Reservation Start -->
    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
      <h1 class="ff-secondary d-flex justify-content-center text-primary fw-normal pb-5">Reservation</h1>
      <div class="row g-0">
        <div class="col-md-6">
          <div class="video"></div>
        </div>
        <div class="col-md-6 bg-dark d-flex align-items-center">
          <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
            <h1 class="text-white mb-4">Pemesanan Tiket Online</h1>
            <form method="POST">
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="fname" name="fname" placeholder="Nama" required>
                      <label for="fname">Nama Depan</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="lname" name="lname" placeholder="Nama">
                      <label for="lname">Nama Belakang</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <select class="form-select" id="select1" name="penjemputan" required>
                        <option value="Batu">Batu</option>
                        <option value="Lumajang">Lumajang</option>
                        <option value="Malang">Malang</option>
                        <option value="Probolinggo">Probolinggo</option>
                        <option value="Surabaya">Surabaya</option>
                      </select>
                      <label for="select1">Penjemputan</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <select class="form-select" id="select1" name="paket" required>
                        <option value="Paket A">Paket A</option>
                        <option value="Paket B">Paket B</option>
                        <option value="Paket C">Paket C</option>
                        <option value="Paket D">Paket D</option>
                      </select>
                      <label for="select1">Pilih paket</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating date" id="date3" data-target-input="nearest">
                      <input type="date" class="form-control" name="tanggal" required>
                      <label for="datetime">Date & Time</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <select class="form-select" id="select1" name="jumlahOrang" required>
                        <option value="1">1 Orang</option>
                        <option value="2">2 Orang</option>
                        <option value="3">3 Orang</option>
                        <option value="4">4 Orang</option>
                        <option value="5">5 Orang</option>
                        <option value="6">6 Orang</option>
                      </select>
                      <label for="select1">Jumlah Penumpang</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control" name="catatan" placeholder="Special Request" id="message"
                        style="height: 100px"></textarea>
                      <label for="message">Catatan</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <?php if(isset($_COOKIE['username'])) {
                    ?>
                    <input type="submit" class="btn btn-primary w-100 py-3" name="pesan" value="Pesan">
                    <?php
                  } else {
                    ?>
                    <input type="submit" class="btn btn-primary w-100 py-3" value="Pesan"
                      onclick="alert('Tidak bisa memesan tiket! Silakan login dahulu')">
                    <?php
                  }
                    ?>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Reservation Start -->

    <section class="wow fadeInUp data-wow-delay mt-5" data-wow-delay="0.1s">
      <div class="container">
        <h1 class="text-center">Keterangan Paket Wisata</h1>
        <table class="table table-hover">
          <thead>
            <tr class="bg-primary text-light">
              <th scope="col">No</th>
              <th scope="col" style="width: 110px;">Jenis Paket</th>
              <th scope="col">Keterangan</th>
              <th scope="col" style="width: 140px;">Harga</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Paket A</td>
              <td>Spot Sunrise (Penanjakan 1, Seruni Point, Bukit Kingkong, Bukit Cinta, metigen, Simpang dingklik) -
                Lembah Widodaren - Gunung Bromo</td>
              <td>Rp. 400.000</td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td>2</td>
              <td>Paket B</td>
              <td>Spot Sunrise (Penanjakan 1, Seruni Point, Bukit Kingkong, Bukit Cinta, metigen, Simpang dingklik) -
                Lembah Widodaren - Lautan Pasir - Gunung Bromo</td>
              <td>Rp. 450.000</td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td>3</td>
              <td>Paket C</td>
              <td>Spot Sunrise (Penanjakan 1, Seruni Point, Bukit Kingkong, Bukit Cinta, metigen, Simpang dingklik) -
                Lembah Widodaren - Gunung Batok - Lautan Pasir - Gunung Bromo</td>
              <td>Rp. 500.000</td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td>4</td>
              <td>Paket D</td>
              <td>Spot Sunrise (Penanjakan 1, Seruni Point, Bukit Kingkong, Bukit Cinta, metigen, Simpang dingklik) -
                Lembah Widodaren - Gunung Batok - Lautan Pasir - Gunung Bromo - Pura Luhur Poten - Bukit Telerubbies
              </td>
              <td>Rp. 550.000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

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