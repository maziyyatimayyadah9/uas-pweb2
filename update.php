<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
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

    <title>PEREKAMAN DATA LAPTOP</title>
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
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php"style="color: #FFFFFF"> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" style="color: #FFFFFF">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #FFFFFF">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
      <!-- Close Navbar -->

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-pencil-square"></i>&nbsp;Update Data LAPTOP</h3>
            </div>
            <hr>
        </div>
<body>

  <?php

    // Ambil data dari patameter url browser
    $id = $_GET['id'];

    // Query ambil data dari param jika ada.
    $query = "SELECT * FROM tblhp WHERE id = $id";
    // Hasil Query
    $result = mysqli_query($koneksi, $query);
    foreach($result as $data) {
  ?>

  <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center mt-4">Form Update Data LAPTOP</h1>
      <form method="POST">
        <!-- Inputan tersembunyi untuk menyimpan data id yang digunakan untuk mengupdate data, lebih aman di banding menggunakan id dari params -->
        <input type="hidden" value="<?= $data['id'] ?>" name="id">
        <div class="mb-3">
          <label for="inputMerek" class="form-label">Merek LAPTOP</label>
          <input type="text" class="form-control" id="inputMerek" value="<?= $data['merek'] ?>" name="merek" placeholder="Masukan Merek HP">
        </div>
        <div class="mb-3">
          <label for="inputTipe" class="form-label">Tipe LAPTOP</label>
          <input type="text" class="form-control" id="inputTipe" value="<?= $data['tipe'] ?>" name="tipe" placeholder="Masukan Tipe HP">
        </div>
        <div class="mb-3">
          <label for="inputTahun" class="form-label">Tahun Produksi</label>
          <input type="text" class="form-control" id="inputTahun" value="<?= $data['tahun'] ?>" name="tahun" placeholder="Masukan Tahun Produksi HP">
        </div>
        <input name="daftar" type="submit" class="btn btn-primary" value="Update">
        <a href="index.php" type="button" class="btn btn-info text-white">Kembali</a>
      </form>
    </div>
  </section>

  <?php } ?>

  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['daftar'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $id = $_POST['id'];
      $merek = $_POST['merek'];
      $tipe = $_POST['tipe'];
      $tahun = $_POST['tahun'];

      // Membuat Query
      $query = "UPDATE tblhp SET merek = '$merek', tipe = '$tipe', tahun = '$tahun' WHERE id = '$id'";

      $result = mysqli_query($koneksi, $query);

      if($result){
        header("location: index.php");
      } else {
        echo "<script>alert('Data Gagal di update!')</script>";
      }

    }    

  ?>

    <!-- Close Footer -->
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>