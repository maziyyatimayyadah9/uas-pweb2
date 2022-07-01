<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>PEREKAMAN DATA HP</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg text-uppercase" style="background-color: #FF1493">
        <div class="container">
            <a class="navbar-brand" href="index.php" style="color: #FFFFFF">PEREKAMAN DATA LAPTOP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php" style="color: #FFFFFF">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" style="color: #FFFFFF">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #FFFFFF">Logout</a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Close Navbar -->
    <!-- Container -->
    <div class="container">
        <div class="row my-2">
          <div class="col-md">
              <h3 class="fw-bold text-uppercase"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data LAPTOP</h3>
            </div>
            <hr>
  <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center mt-4">Form Tambah Data</h1>
      <form method="POST">
        <div class="mb-3">
          <label for="inputMerek" class="form-label">Merek</label>
          <input type="text" class="form-control" id="inputMerek" name="merek" placeholder="Masukan Merek LAPTOP">
        </div>
        <div class="mb-3">
          <label for="inputTipe" class="form-label">Tipe</label>
          <input type="text" class="form-control" id="inputTipe" name="tipe" placeholder="Masukan Tipe LAPTOP">
        </div>
        <div class="mb-3">
          <label for="inputTahun" class="form-label">Tahun Produksi</label>
          <input type="text" class="form-control" id="inputTahun" name="tahun" placeholder="Masukan Tahun Produksi LAPTOP">
        </div>
        <input name="daftar" type="submit" class="btn btn-primary" value="Tambah">
        <a href="index.php" type="button" class="btn btn-info text-white">Kembali</a>
      </form>
    </div>
  </section>

  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['daftar'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $merek = $_POST['merek'];
      $tipe = $_POST['tipe'];
      $tahun = $_POST['tahun'];

      // Membuat Query
      $query = "INSERT INTO tblhp (merek, tipe, tahun) VALUES('".$merek."', '".$tipe."', '".$tahun."')";

      $result = mysqli_query($koneksi, $query);

      if($result){
        header("location: index.php");
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
      }

    }    

  ?>

  <!-- Footer -->
    <div class="container-fluid" style="margin-top: 30px;">
        <div class="row text-white"style="background-color: #FF1493">
            <div class="col-md-6 my-2" id="about">
                <h4 class="fw-bold text-uppercase">About</h4>
                <p>Politeknik Harapan Bersama Tegal, Program Studi Teknik Informatika</p>
            </div>
            <div class="col-md-6 my-2 text-center link">
                <h4 class="fw-bold text-uppercase">Social Media</h4>
                <a href="#" target="_blank"><i class="bi bi-facebook fs-3"></i></a>
                <a href="#" target="_blank"><i class="bi bi-github fs-3"></i></a>
                <a href="#" target="_blank"><i class="bi bi-instagram fs-3"></i></a>
                <a href="#" target="_blank"><i class="bi bi-twitter fs-3"></i></a>
            </div>
        </div>
    </div>
    <footer class=" text-white text-center" style="padding: 5px;background-color: #FF1493">
        <p>Created with <i class="bi bi-suit-heart-fill" style="color: red;"></i> by <u style="color: #fff;">mmayyadah</u></p>
    </footer>
    <!-- Close Footer -->
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>