<!-- Panggil file koneksi, karena kita membutuhkan nya -->
<?php
  include "koneksi.php"
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
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
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
            <a class="navbar-brand" href="index.php" style="color: #FFFFFF">PEREKAMAN DATA LAPTOP </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php"style="color: #FFFFFF">Home</a>
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
                <h3 class="text-center fw-bold text-uppercase">PEREKAMAN DATA LAPTOP</h3>
                <hr>
            </div>
        </div>
        <div class="row m-2">
            <div class="col-md">
                <a href="tambah.php" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data</a>
       <div class="row my-3">
            <div class="col-md">
                <table id="data" class="table table-striped table-responsive table-hover text-center" style="width:100%">
                    <thead class="table-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Merek LAPTOP</th>
                  <th scope="col">Seri LAPTOP</th>
                  <th scope="col">Tahun Produksi LAPTOP</th>  
                  <th scope="col">Update|Delete</th>    
                </tr>
              </thead>
          <?php
              // variable no digunakan untuk meng-increments field no pada table. Karena nanti kita akan melooping data hasil query select kita. 
              $no = 1;
              // Simpan query kita kedalam variable agar lebih rapi, dan bisa reusable.
              // Arti dari query di bawah adalah pilih semua data dari table tblhp.
              $query = "SELECT * FROM tblhp";
              // Eksekusi Query
              // Simpan hasil eksekusi query kita ke dalam variable. Di sini variable nya saya kasih nama result.
              $result = mysqli_query($koneksi, $query);
              // Done. Waktunya Looping
          ?>
        <tbody>
          <?php
            foreach ($result as $data){
              echo "
                <tr>
                  <th scope='row'>". $no++ ."</th>
                  <td>". $data["merek"] ."</td>
                  <td>". $data["tipe"] ."</td>
                  <td>". $data["tahun"] ."</td>
                  <td> 
                    <a href='update.php?id=".$data["id"]."' type='button' class='btn btn-success'>Update</a>
                    <a href='delete.php?id=".$data["id"]."' type='button' class='btn btn-danger' onlick='return confirm('Yakin ingin menghapus data?')'>Delete</a>
                  </td>
                </tr>  
              ";
            }
          ?>
        </tbody>  
      </table>
    </div>
  </section>

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