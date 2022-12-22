<?php
  if(isset($_POST['simpan'])) {
    $nin = $_POST['nin'];
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $tanggalSaatIni = date('Y-m-d');
    $timestampTanggalLahir = strtotime($tanggalLahir);
    $timestampTanggalSaatIni = strtotime($tanggalSaatIni);
    $profile = $_FILES['profile']['name'];
    $profileExtension = pathinfo($profile, PATHINFO_EXTENSION);
    $jenisKelamin = $_POST['jenisKelamin'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $noTelp = $_POST['noTelp'];
    
    if($timestampTanggalLahir > $timestampTanggalSaatIni) {
      ?>
      <script>
        alert("Tanggal lahir tidak sesuai!");
      </script>
      <?php
    } else {

      if(($profileExtension == "jpg" || $profileExtension == "png")) {
        $profileTmpname = $_FILES['profile']['tmp_name'];
        $profileUpload = './imageProfile/' . $profile;
        $sql = "UPDATE `users` SET `nama_depan`='$fname', `nama_belakang`='$lname', `username`='$username', `email`='$email', `jenis_kelamin`='$jenisKelamin',
        `tanggal_lahir`='$tanggalLahir', `alamat`='$alamat', `agama`='$agama', `no_telp`='$noTelp', `profile`='$profile' WHERE `nin`=$nin";
        if(mysqli_query($conn, $sql)) {
          move_uploaded_file($profileTmpname, $profileUpload);
          ?>
        <script>
          alert("Berhasil mengupdate data diri");
        </script>
        <?php
        } else {
          ?>
        <script>
          alert("Gagal mengupdate data diri");
        </script>
        <?php
        }
      } else {
        ?>
        <script>
          alert("Ekstensi tidak sesuai");
        </script>
        <?php
      }
    }
  }
?>