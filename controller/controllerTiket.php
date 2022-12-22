<?php
  if(isset($_POST['pesan'])) {
    $nin = $_COOKIE['nin'];
    $namaDepan = $_POST['fname'];
    $namaBelakang = $_POST['lname'];
    $nama = "$namaDepan $namaBelakang";
    $penjemputan = $_POST['penjemputan'];
    $paket = $_POST['paket'];
    $tanggalPenjemputan = $_POST['tanggal'];
    $syaratTanggal = date('Y-m-d', strtotime('+4 days'));
    $timestampTanggalPesan = strtotime($tanggalPenjemputan);
    $timestampSyaratTanggal = strtotime($syaratTanggal);
    $jumlahOrang = $_POST['jumlahOrang'];
    $catatan = $_POST['catatan'];
    $keterangan = "Belum lunas";

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
      $tanggalPemesanan = date("Y-m-d");
      $sql = "INSERT INTO `orders` (`id_users`, `nama`, `penjemputan`, `paket`, `tanggal_pemesanan`, `tanggal_penjemputan`, `jumlah_orang`, `catatan`, `keterangan`, `harga`) VALUES ($nin, '$nama', '$penjemputan', '$paket', '$tanggalPemesanan', '$tanggalPenjemputan', $jumlahOrang, '$catatan', '$keterangan', $totalPembayaran)";
      if(mysqli_query($conn, $sql)) {
        ?>
        <script>
          alert("Berhasil memesan paket go-jeep");
        </script>
        <?php
        header("Location: pemesanan.php");
      } else {
        ?>
        <script>
          alert("Gagal memesan paket go-jeep");
        </script>
        <?php
      }
    }
  }

  if(isset($_POST['bayar'])) {
    $nama = $_POST['nama'];
    $namaBank = $_POST['namaBank'];
    $no_rek = $_POST['noRek'];
    $keterangan = "Lunas";
    $sql = "UPDATE `orders` SET `no_rek`='$no_rek', `nama_bank`='$namaBank', `keterangan`='$keterangan' WHERE nama = '$nama'";
    if(mysqli_query($conn, $sql)) {
      ?>
      <script>
        alert("Berhasil membayar paket go-jeep");
      </script>
      <?php
    } else {
      ?>
      <script>
        alert("Gagal membayar paket go-jeep");
      </script>
      <?php
    }
  }

  if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $penjemputan = $_POST['penjemputan'];
    $paket = $_POST['paket'];
    $tanggalPenjemputan = $_POST['tanggal'];
    $syaratTanggal = date('Y-m-d', strtotime('+4 days'));
    $timestampTanggalPesan = strtotime($tanggalPenjemputan);
    $timestampSyaratTanggal = strtotime($syaratTanggal);
    $jumlahOrang = $_POST['jumlahOrang'];
    $keterangan = "Belum lunas";

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
      $sql = "UPDATE `orders` SET `nama`='$nama', `penjemputan`='$penjemputan', `jumlah_orang`=$jumlahOrang, `paket`='$paket', `tanggal_penjemputan`='$tanggalPenjemputan', `harga`='$totalPembayaran' WHERE id = '$id'";
      if(mysqli_query($conn, $sql)) {
        ?>
        <script>
          alert("Berhasil mengupdate paket go-jeep");
        </script>
        <?php
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
      header("Location: pemesanan.php");
    } else {
      ?>
      <script>
        alert("Gagal menghapus pesanan");
      </script>
      <?php
    }
  }
?>