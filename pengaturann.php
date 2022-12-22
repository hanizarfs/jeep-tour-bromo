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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .gradient-custom {
      height: fit-content !important;
      min-height: 100vh !important;

      /* fallback for old browsers */
      background: #fea116;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to bottom right, #fea116, rgba(245, 87, 108, 1))
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
    }

    .card-registration .select-arrow {
      top: 13px;
    }

    .img-profile {
      width: 100px;
    }
  </style>
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
  <link href="./css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="./css/style.css" rel="stylesheet">
</head>

<body>
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
  </div>
  <!-- Navbar & Hero End -->

  <section class="gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
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
                  <img class="img-profile" src="./imageUsers/<?= $row['profile'] ?>" alt="">
                  <label class="btn btn-primary mt-3">
                    Edit Profil<input type="file" style="display: none;" name="profile" id="profile">
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
                      <input type="number" name="nin" value="<?= $row['nin'] ?>" class="form-control form-control-lg"
                        readonly />
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
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>