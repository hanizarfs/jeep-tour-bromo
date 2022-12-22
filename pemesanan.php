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

    <section class="wow fadeInUp mt-5" data-wow-delay="0.1s">
      <div class="container">
        <?php if(isset($_COOKIE['username'])) { ?>
        <h1 class="text-center" style="text-transform:capitalize;">Pesanan Paket Wisata <?= $_COOKIE['username']?> </h1>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr class="bg-primary text-light">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Penjemputan</th>
                <th scope="col">Paket</th>
                <th scope="col">Tanggal Penjemputan</th>
                <th scope="col">Orang</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Total Pembayaran</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
          $counter = 1;
          $nin = $_COOKIE['nin'];
          $sql = "SELECT * FROM `orders` WHERE id_users=$nin";
          $q = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($q)) {
            ?>
              <tr>
                <td scope="col" style="vertical-align: middle;"><?= $counter ?></td>
                <td scope="col" style="vertical-align: middle;"><?= $row['nama'] ?></td>
                <td scope="col" style="vertical-align: middle;"><?= $row['penjemputan'] ?></td>
                <td scope="col" style="vertical-align: middle;"><?= $row['paket'] ?></td>
                <td scope="col" style="vertical-align: middle;"><?= $row['tanggal_penjemputan'] ?></td>
                <td scope="col" style="vertical-align: middle;"><?= $row['jumlah_orang'] ?></td>
                <td scope="col" style="vertical-align: middle;"><?= $row['keterangan'] ?></td>
                <td scope="col" style="vertical-align: middle;">Rp. <?= number_format($row['harga']); ?></td>
                <td scope="col" style="vertical-align: middle;">
                  <?php
                if($row['keterangan'] == "Belum lunas") {
                  ?>
                  <button type="button" class="btn btn-success bayar" data-bs-toggle="modal"
                    data-bs-target="#bayar<?= $row['id']?>">Bayar</button>
                  <!-- Modal -->
                  <div class="modal fade" id="bayar<?= $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <form class="modal-content" method="POST">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Pembayaran Paket Go-Jeep</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <?php
                          $id = $row['id'];
                          $sql = "SELECT * FROM `orders` WHERE id=$id";
                          $data = $conn->query($sql);
                          foreach($data as $row) {  
                          ?>
                          <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" value="<?= $row['nama']?>" class="form-control" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Penjemputan</label>
                            <input type="text" name="penjemputan" value="<?= $row['penjemputan']?>" class="form-control"
                              readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Paket</label>
                            <input type="text" name="paket" value="<?= $row['paket']?>" class="form-control" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Orang</label>
                            <input type="text" name="jumlahOrang" value="<?= $row['jumlah_orang']?>"
                              class="form-control" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Nama Bank</label>
                            <input type="text" name="namaBank" class="form-control">
                          </div>
                          <div class="mb-3">
                            <label class="form-label">No. Rekening</label>
                            <input type="text" name="noRek" class="form-control">
                          </div>
                          <hr>
                          <div class="mb-3">
                            <label class="form-label">Total Pembayaran</label>
                            <input type="number" name="harga" value="<?= $row['harga'] ?>" class="form-control"
                              readonly>
                          </div>
                          <?php
                          }
                          ?>
                        </div>
                        <div class="modal-footer">
                          <input type="submit" name="bayar" value="Bayar Sekarang" class="btn btn-success">
                        </div>
                      </form>
                    </div>
                  </div>

                  <button type="button" class="btn btn-info" data-bs-toggle="modal"
                    data-bs-target="#edit<?= $row['id']?>">Edit</button>
                  <!-- Modal -->
                  <div class="modal fade" id="edit<?= $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <form class="modal-content" method="POST">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Pembayaran Paket Go-Jeep</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <?php
                      $sql = "SELECT * FROM `orders` WHERE id=$id";
                      $data = $conn->query($sql);
                      foreach($data as $row) {  
                      ?>
                          <input type='hidden' name='id' value=<?= $id ?>>
                          <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" value="<?= $row['nama']?>" class="form-control">
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
                            <label class="form-label">Tanggal Penjemputan</label>
                            <input type="date" name="tanggal" value="<?= $row['tanggal_penjemputan']?>"
                              class="form-control">
                          </div>
                          <?php
                  }
                  ?>
                        </div>
                        <div class="modal-footer">
                          <input type="submit" name="edit" value="Edit" class="btn btn-info">
                        </div>
                      </form>
                    </div>
                  </div>
                  <?php
                } else {
                  ?>
                  <a href="cetak.php?id=<?= $row['id']?>" class="btn btn-primary">Cetak</a>
                  <?php
                }
              ?>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#batal<?= $row['id']?>">Batal</button>

                  <!-- Modal -->
                  <div class="modal fade" id="batal<?= $row['id']?>" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <form class="modal-content" method="POST">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Yakin untuk membatalkan pesanan
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <input type="hidden" name="id" value="<?= $row['id'] ?>">
                          <input type="submit" class="btn btn-danger" name="batal" value="Batal">
                        </div>
                        </fo>
                    </div>
                  </div>
                </td>
              </tr>
              <?php
          $counter ++;
          }
          ?>
            </tbody>
          </table>
        </div>
        <?php } ?>
      </div>
    </section>

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