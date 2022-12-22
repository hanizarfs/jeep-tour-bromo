<?php
  if (isset($_POST['signup'])) {
    $nin = $_POST['nin'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirmation = $_POST['passwordConfirmation'];
    $role = 1;
    $pattern = '/^(?=.*[A-Z])(?=.*[0-8])/'; 
    if ($password != $passwordConfirmation) {
      ?>
<script>
  alert("Kata sandi berbeda");
</script>
<?php
    } 
    else {
      if (preg_match($pattern, $password)) {
        $password = md5($password);
        $passwordConfirmation = md5($passwordConfirmation);
        $sql = "SELECT nin FROM `users` WHERE nin = $nin";
        $result = mysqli_query ( $conn, $sql);
        if ( mysqli_num_rows ( $result ) ) {
          ?>
        <script>
          alert("Akun sudah terdaftar");
        </script>
      <?php
        } else {
          $sql = "INSERT INTO `users` (`nin`, `username`, `email`, `password`, `password_confirmation`, `role`)
          VALUES ('$nin', '$username', '$email', '$password', '$passwordConfirmation', '$role')";
          if(mysqli_query($conn, $sql)) {
            ?>
<script>
  alert("Berhasil membuat akun");
</script>
<?php
          }
        }
      }
        else {
          ?>
<script>
  alert("Kata sandi tidak sesuai, minimal terdiri dari 8 karakter dan gabungan dari huruf kapital dan angka");
</script>
<?php
        }
      }
    }



    if(isset($_POST['login'])) {
      $nin = $_POST['nin'];
      $password = md5($_POST['password']);
  
      $sql = "SELECT * FROM `users` WHERE nin = '$nin'";
      $data = $conn->query($sql);
      foreach($data as $row) {
        if($nin == $row['nin']) {
          if($password == $row['password']) {
            if($row['role'] == 1) {
              setcookie('nin', $nin, time()+3600, '/');
              setcookie('username', $row['username'], time()+3600, '/');
              header("Location: index.php");
            } else {
              setcookie('nin', $nin, time()+3600, '/');
              setcookie('username', $row['username'], time()+3600, '/');
              header("Location: ./admin/dashboard.php");
            }
          } else {
            ?>
  <script>
    alert("Password salah");
  </script>
  <?php
          }
        } else {
          ?>
  <script>
    alert("nin belum terdaftar");
  </script>
  <?php
        }
      }
    }

    if(isset($_POST['logout'])) {
      setcookie('nin', '', time() + (-1), '/');
      setcookie('username', '', time() + (-1), '/');
      header("Location: ../../../index.php");
  }
?>