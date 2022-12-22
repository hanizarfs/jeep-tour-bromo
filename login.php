<?php
  include "./connection/config.php";
  include "./controller/controllerAuth.php";
?>
<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selamat Datang di Pendaftaran Bank BayJack</title>
  <!-- LINK FONTS POPPINS -->
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Poppins;
    }

    body {
      background: url('../assets/img');
      background: url('./img/login/bg.jpg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      position: relative;
      width: 900px;
      height: 540px;
      margin: 20px;
    }


    /* Background Form */
    .backgroundForm {
      position: absolute;
      width: 100%;
      height: 540px;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #FEA116;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
      border-radius: 15px;
    }

    .backgroundForm .box {
      position: relative;
      width: 50%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      flex-direction: column;
      color: #fff;
    }

    .backgroundForm .box h2 {
      font-weight: 600px;
      padding-top: 10px;
    }

    .backgroundForm .box p {
      font-weight: 500px;
    }

    .box button {
      width: 150px;
      border-radius: 25px;
      text-decoration: none;
      display: inline-block;
      margin: 0 10px;
      padding: 12px 0;
      color: #ffff;
      background: none;
      border: .5px solid #ffff;
      position: relative;
      z-index: 1;
      transition: color 0.5s;
    }

    .box button span {
      border-radius: 25px;
      width: 0;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background-color: #fff;
      z-index: -1;
      transition: 0.5s;
    }

    .box button:hover {
      color: black;
    }

    .box button:hover span {
      width: 100%;
    }

    /* Form Box Input */
    .formBox {
      position: absolute;
      top: 0;
      left: 0;
      width: 50%;
      height: 100%;
      background: #fff;
      z-index: 1000;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
      transition: 0.5s ease-in-out;
      overflow: hidden;
      border-radius: 15px;
    }

    .formBox img {
      margin-bottom: 50px;
      width: 70%;
      margin-left: auto;
      margin-right: auto;
      display: block;
    }

    .formBox.active {
      left: 50%;
    }

    .formBox .form {
      position: absolute;
      left: 0;
      width: 100%;
      padding: 50px;
      transition: .5s;
    }

    .formBox .signinForm {
      transition-delay: 0.25s;
    }

    .formBox.active .signinForm {
      left: -100%;
      transition-delay: 0.25s;
    }

    .formBox .signupForm {
      left: 100%;
      transition-delay: 0.25s;
    }

    .formBox.active .signupForm {
      left: 0%;
      transition-delay: 0.25s;
    }

    .formBox .form form {
      width: 100%;
      display: flex;
      flex-direction: column;
    }

    .formBox .form form h2 {
      text-align: center;
      font-weight: 900;
      color: #333;
      margin-bottom: 20px;
    }

    .formBox .form form input {
      width: 100%;
      margin-bottom: 20px;
      padding: 10px;
      border: none;
      border-radius: 20px;
      font-size: 16px;
      background-color: rgb(231, 231, 231);
      padding-left: 20px;
    }

    .formBox .form form input[type="checkbox"] {
      width: 20px;
      margin-bottom: 20px;
      padding: 10px;
      background-color: rgb(231, 231, 231);
    }

    .formBox label {
      font-weight: 500;
      color: #333;
    }

    .formBox .form a {
      float: right;
      font-weight: 500;
      color: #333;

    }

    .formBox .form a:hover {
      float: right;
      font-weight: 600;
      color: #333;
    }

    .formBox .form form #btnMasuk,
    #btnDaftar {
      width: 100%;
      margin-bottom: 20px;
      padding: 10px;
      border: none;
      padding-left: 20px;
      background: #FEA116;
      border: none;
      cursor: pointer;
      border-radius: 20px;
      justify-content: center;
      text-align: center;
      cursor: pointer;
    }

    .formBox .form #btnMasuk,
    #btnDaftar:hover {
      background-color: #0275d8;
      transition: .5s;
      cursor: pointer;
    }

    .form #btnMasuk a {
      width: 100%;
      border: none;
      font-size: 16px;
      text-decoration: none;
      color: #fff;
    }

    .form #btnDaftar a {
      width: 100%;
      border: none;
      font-size: 16px;
      text-decoration: none;
      color: #fff;
    }

    .formBox .form form .forgot {
      color: #333;
    }

    @media (max-width: 991px) {

      .container {
        max-width: 400px;
        height: 750px;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .container .backgroundForm {
        top: 0;
        height: 100%;
      }

      .formBox {
        width: 100%;
        height: 540px;
        top: 0;
        box-shadow: none;
      }

      .backgroundForm .box {
        position: absolute;
        width: 100%;
        height: 225px;
        bottom: 0;
      }

      .box.signin {
        top: 0;
      }

      .formBox.active {
        left: 0;
        top: 225px;
      }
    }

    .header {
      display: flex;
      justify-content: center;
      margin-bottom: 5vh;
    }

    .signup img {
      width: 200px;
      margin-top: -10vh;
    }

    .signin img {
      width: 200px;
      margin-top: -10vh;
    }

    .logo-login {
      width: 75px !important;
    }
  </style>
</head>

<!-- BODY -->

<body>
  <!-- CONTAINER -->
  <div class="container" id="formLogin">
    <!-- BACKGROUND FORM LOGIN / SIGNUP -->
    <div class="backgroundForm">
      <div class="box signin">
        <div>
          <img src="./img/login/logo.png" class="logo-login" alt="">
        </div>
        <h2>Selamat Datang</h2>
        <p>di pendaftaran GoJeep Bromo<br>Sudah punya akun?</p><br>
        <button class="btnMasuk" href="#"><span></span>MASUK</button>
        <a href="index.php" style="margin-top: 10px; color: #fff; text-decoration: none;">Kembali ke
          Beranda</a>
      </div>
      <div class="box signup">
        <div>
          <img src="./img/login/logo.png" class="logo-login" alt="">
        </div>
        <h2>Selamat Datang</h2>
        <p>di pendaftaran GoJeep Bromo<br>Belum punya akun?</p><br>
        <button class="btnDaftar"><span></span>DAFTAR</button>
        <a href="index.php" style="margin-top: 10px; color: #fff; text-decoration: none;">Kembali ke
          Beranda</a>
      </div>
    </div>
    <!-- END OF BACKGROUND FORM LOGIN / SIGNUP -->
    <!-- FORM BOX FOR LOGIN / SIGNUP -->
    <div class="formBox">
      <!-- FORM BOX FOR LOGIN -->
      <div class="form signinForm">
        <form method="POST">
          <div class="header">
            <h1>Login</h1>
          </div>
          <input type="text" name="nin" placeholder="NIK">
          <input type="password" name="password" placeholder="Kata Sandi">
          <div class="checkbox">
            <input type="checkbox" id="ingatSaya" name="remember"><label for=ingatSaya> Ingat Saya</label>
            <a href="#" class="lupaKataSandi" style="text-align:left;">Lupa Kata Sandi</a>
          </div>
          <input type="submit" style="background-color: #FEA116; color: #fff; cursor: pointer;" value="MASUK"
            name="login">
        </form>
      </div>
      <!-- END OF FORM BOX FOR LOGIN -->

      <!-- FORM BOX FOR SIGNUP -->
      <div class="form signupForm">
        <form method="POST">
          <h2>Daftar Akun</h2>
          <input type="text" name="username" placeholder="Nama Pengguna">
          <input type="text" name="nin" placeholder="NIK">
          <input type="email" name="email" placeholder="Email">
          <input type="password" name="password" placeholder="Kata Sandi">
          <input type="password" name="passwordConfirmation" placeholder="Verifikasi Kata Sandi">
          <input type="submit" style="background-color: #FEA116; color: #fff;" value="DAFTAR" name="signup">
        </form>
      </div>
      <!-- END FORM BOX FOR SIGNUP -->
    </div>
    <!-- END FORM BOX FOR LOGIN / SIGNUP -->
  </div>
  <!-- END OF CONTAINER -->

  <!-- SCRIPT JAVASCRIPT -->
  <script>
    const btnMasuk = document.querySelector('.btnMasuk');
    const btnDaftar = document.querySelector('.btnDaftar');
    const formBox = document.querySelector('.formBox');
    const body = document.querySelector('body');

    btnDaftar.onclick = function () {
      formBox.classList.add('active')
    }

    btnMasuk.onclick = function () {
      formBox.classList.remove('active')
    }
  </script>
  <!-- END OF SCRIPT JAVASCRIPT -->

</body>
<!-- END OF BODY -->

</html>