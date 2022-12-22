<?php
if(isset($_POST['editDataUser'])) {
  $nin = $_POST['nin'];
  $username = $_POST['username'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $tanggalLahir = $_POST['tanggalLahir'];
  $tanggalSaatIni = date('Y-m-d');
  $timestampTanggalLahir = strtotime($tanggalLahir);
  $timestampTanggalSaatIni = strtotime($tanggalSaatIni);
  $alamat = $_POST['alamat'];
  $jenisKelamin = $_POST['jenisKelamin'];
  $agama = $_POST['agama'];
  $noTelp = $_POST['noTelp'];
  $password = $_POST['password'];
  $passwordConfirmation = $_POST['passwordConfirmation'];

  if($timestampTanggalLahir > $timestampTanggalSaatIni) {
    ?>
    <script>
      alert("Tanggal lahir tidak sesuai!");
    </script>
    <?php
  } else {
    $parts = explode(" ", $nama);
    if(count($parts) > 1) {
        $lname = array_pop($parts);
        $fname = implode(" ", $parts);
    } else {
      $fname = $nama;
      $lname = " ";
    }
      $sql = "UPDATE `users` SET `nama_depan`='$fname', `nama_belakang`='$lname', `username`='$username', `email`='$email', `jenis_kelamin`='$jenisKelamin',
      `tanggal_lahir`='$tanggalLahir', `alamat`='$alamat', `agama`='$agama', `no_telp`='$noTelp', `password`='$password', `password_confirmation`='$passwordConfirmation' WHERE `nin`=$nin";
      echo $sql;
      if(mysqli_query($conn, $sql)) {
        ?>
      <script>
        alert("Berhasil mengupdate data diri");
      </script>
      <?php
      header("Location: dashboard.php");
      } else {
        ?>
      <script>
        alert("Gagal mengupdate data diri");
      </script>
      <?php
      }
    }
  }

  if(isset($_POST['addDataUser'])) {
    $nin = $_POST['nin'];
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $tanggalSaatIni = date('Y-m-d');
    $timestampTanggalLahir = strtotime($tanggalLahir);
    $timestampTanggalSaatIni = strtotime($tanggalSaatIni);
    $alamat = $_POST['alamat'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $agama = $_POST['agama'];
    $noTelp = $_POST['noTelp'];
    $password = $_POST['password'];
    $passwordConfirmation = $_POST['passwordConfirmation'];
    print_r($_POST);

  if($timestampTanggalLahir > $timestampTanggalSaatIni) {
    ?>
    <script>
      alert("Tanggal lahir tidak sesuai!");
    </script>
    <?php
  } else {
    $parts = explode(" ", $nama);
    if(count($parts) > 1) {
        $lname = array_pop($parts);
        $fname = implode(" ", $parts);
    } else {
      $fname = $nama;
      $lname = " ";
    }
    $password = md5($password);
    $passwordConfirmation = md5($passwordConfirmation);
      $sql = "INSERT INTO `users` (`nin`, `nama_depan`, `nama_belakang`, `username`, `email`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `agama`, `no_telp`, `password`, `password_confirmation`, `role`)
              VALUES ($nin, '$fname', '$lname', '$username', '$email', '$jenisKelamin', '$tanggalLahir', '$alamat', '$agama', '$noTelp', '$password', '$passwordConfirmation', 1)";
      echo $sql;
      if(mysqli_query($conn, $sql)) {
        ?>
      <script>
        alert("Berhasil membuat akun user");
      </script>
      <?php
      header("Location: dashboard.php");
      } else {
        ?>
      <script>
        alert("Gagal membuat akun user");
      </script>
      <?php
      }
    }
  }

  if(isset($_POST['editDataPemesanan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $penjemputan = $_POST['penjemputan'];
    $paket = $_POST['paket'];
    $tanggalPemesanan = date('Y-m-d');
    $tanggalPenjemputan = $_POST['tanggalPenjemputan'];
    $syaratTanggal = date('Y-m-d', strtotime('+4 days'));
    $timestampTanggalPesan = strtotime($tanggalPenjemputan);
    $timestampSyaratTanggal = strtotime($syaratTanggal);
    $jumlahOrang = $_POST['jumlahOrang'];
    $namaBank = $_POST['namaBank'];
    $noRek = $_POST['noRek'];
    $keterangan = $_POST['keterangan'];

    if($paket == "Paket A") {
      $hargaPaket = 400000;
    } else if($paket == "Paket B") {
      $hargaPaket = 450000;
    } elseif($paket == "Paket C") {
      $hargaPaket = 500000;
    } elseif($paket == "Paket D") {
      $hargaPaket = 550000;
    }

    if($penjemputan == "Malang") {
      $totalPembayaran = 300000 + ($hargaPaket * $jumlahOrang);
    } elseif($penjemputan == "Lumajang") {
      $totalPembayaran = 200000 + ($hargaPaket * $jumlahOrang);
    } elseif($penjemputan == "Probolinggo") {
      $totalPembayaran = 250000 + ($hargaPaket * $jumlahOrang);
    } elseif($penjemputan == "Batu") {
      $totalPembayaran = 200000 + ($hargaPaket * $jumlahOrang);
    } elseif($penjemputan == "Surabaya") {
      $totalPembayaran = 400000 + ($hargaPaket * $jumlahOrang);
    }

    if($timestampSyaratTanggal > $timestampTanggalPesan) {
      ?>
      <script>
        alert("Minimal pemesanan 3 hari dari hari ini");
      </script>
      <?php
    } else {
      $sql = "UPDATE `orders` SET `nama`='$nama', `penjemputan`='$penjemputan', `jumlah_orang`=$jumlahOrang, `paket`='$paket', `tanggal_pemesanan`='$tanggalPemesanan', `tanggal_penjemputan`='$tanggalPenjemputan', `harga`='$totalPembayaran', keterangan='$keterangan', `nama_bank`='$namaBank', `no_rek`='$noRek' WHERE id = '$id'";
      if(mysqli_query($conn, $sql)) {
        ?>
        <script>
          alert("Berhasil mengupdate paket go-jeep");
        </script>
        <?php
        header("Location: dashboard.php");
      } else {
        ?>
        <script>
          alert("Gagal mengupdate paket go-jeep");
        </script>
        <?php
      }
    }
  }

  if(isset($_POST['batal'])) {


    $id = $_POST['id'];
    $sql = "DELETE FROM `orders` WHERE id=$id";
    if(mysqli_query($conn, $sql)) {
      ?>
      <script>
        alert("Berhasil menghapus pesanan");
      </script>
      <?php
      header("Location: booking.php");
    } else {
      ?>
      <script>
        alert("Gagal menghapus pesanan");
      </script>
      <?php
    }
  }
?>