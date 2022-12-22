<?php
  include "./connection/config.php";
  $id = $_GET['id'];
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
    <div class="table-responsive">
    <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Penjemputan</th>
              <th scope="col">Paket</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Orang</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Total Pembayaran</th>
            </tr>
          </thead>
          <tbody>
            <?php
          $counter = 1;
          $sql = "SELECT * FROM `orders` WHERE id=$id";
          $q = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($q)) {
            ?>
            <tr>
              <td scope="col"><?= $counter ?></td>
              <td scope="col"><?= $row['nama'] ?></td>
              <td scope="col"><?= $row['penjemputan'] ?></td>
              <td scope="col"><?= $row['paket'] ?></td>
              <td scope="col"><?= $row['tanggal'] ?></td>
              <td scope="col"><?= $row['jumlah_orang'] ?></td>
              <td scope="col"><?= $row['keterangan'] ?></td>
              <td scope="col">Rp. <?= number_format($row['harga']); ?></td>
            </tr>
            <?php
          $counter ++;
          }
          ?>
          </tbody>
        </table>
      </div>
    </div>
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

  <script>
    window.print();
  </script>
</body>

</html>