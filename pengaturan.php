<?php
  include "./connection/config.php";
  include "./controller/controllerPengaturan.php";
  
  if(isset($_COOKIE['nin'])) {
    $nin = $_COOKIE['nin'];
  } else {
    header("Location: index.php");
  }
?>
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
            <a href="index.php" class="nav-item nav-link">Home</a>
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
          <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4">
                  <h3 class="mb-4 pb-md-0 mb-md-5 text-center">Registration Form</h3>
                  <form method="POST" enctype="multipart/form-data">
                    <?php
                $sql = "SELECT * FROM `users` WHERE nin=$nin";
                $data = $conn->query($sql);
                foreach($data as $row) {
                  ?>
                    <div class="d-flex justify-content-center align-items-center flex-column mb-5">
                      <img class="img-profile" src="./imageProfile/<?= $row['profile'] ?>" alt="">
                      <label class="btn btn-primary mt-3">
                        Edit Profil<input type="file" style="display: none;" name="profile" id="profile" required>
                      </label>
                    </div>
                    <script>
                      document.getElementById('profile').addEventListener('change', function () {
                        if (this.value.length > 0) {
                          alert("Berhasil mengganti foto profile");
                        } else {
                          alert("Gagal mengganti foto profile");
                        }
                      });
                    </script>
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline datepicker w-100">
                          <label for="" class="form-label">NIK</label>
                          <input type="number" name="nin" value="<?= $row['nin'] ?>"
                            class="form-control form-control-lg" readonly />
                        </div>
                      </div>
                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline datepicker w-100">
                          <label for="" class="form-label">Username</label>
                          <input type="text" name="username" value="<?= $row['username'] ?>"
                            class="form-control form-control-lg" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label class="form-label" for="firstName">Nama Depan</label>
                          <input type="text" name="fname" value="<?= $row['nama_depan'] ?>"
                            class="form-control form-control-lg" />
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label class="form-label" for="lastName">Nama Belakang</label>
                          <input type="text" name="lname" value="<?= $row['nama_belakang'] ?>"
                            class="form-control form-control-lg" />
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline datepicker w-100">
                          <label for="birthdayDate" class="form-label">Tanggal lahir</label>
                          <input type="date" class="form-control form-control-lg" name="tanggalLahir"
                            value="<?= $row['tanggal_lahir'] ?>" />
                        </div>
                      </div>
                      <div class="col-md-6 mb-4 d-flex flex-column">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenisKelamin" value="Laki-laki"
                            <?php if($row['jenis_kelamin'] == "Laki-laki") { echo "checked"; } ?> />
                          <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenisKelamin" value="Perempuan"
                            <?php if($row['jenis_kelamin'] == "Perempuan") { echo "checked"; } ?> />
                          <label class="form-check-label">Perempuan</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control form-control-lg" name="email"
                            value="<?= $row['email'] ?>" />
                        </div>
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                          <label class="form-label" for="emailAddress">Alamat</label>
                          <input type="alamat" name="alamat" class="form-control form-control-lg"
                            value="<?= $row['alamat'] ?>" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                          <label class="form-label">Agama</label>
                          <input type="text" class="form-control form-control-lg" name="agama"
                            value="<?= $row['agama'] ?>" />
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label class="form-label">Nomor HandPhone</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text">+62</span>
                            <input type="text" name="noTelp" class="form-control" placeholder="-"
                              value="<?= $row['no_telp'] ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mt-4 pt-2">
                      <input class="btn btn-primary btn-lg" type="submit" value="Simpan" name="simpan" />
                    </div>
                    <?php } ?>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
      <div class="container">
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