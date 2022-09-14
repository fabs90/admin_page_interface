<?php
require 'connection.php';

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: dashboard.php');
}

// Menangkap id yg dikirim url
$id = $_GET['id'];

// Buat Query ambil data yg dipilih dengan parameter id yg dikirim di url
$result = mysqli_query($conn, "SELECT mahasiswa.*, jurusan.nama as Jurusan FROM mahasiswa INNER JOIN jurusan on mahasiswa.jurusan_id = jurusan.id  WHERE mahasiswa.id ='$id'");
$data = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akademik Sistem Informasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

      <!-- Icon Web -->
  <link rel="shortcut icon" href="fontawesome/house-solid.svg" type="image/x-icon">

    <!-- Css Link  -->
    <link rel="stylesheet" href="halaman_edit.css">

     <!--load all Font Awesome styles -->
  <link href="fontawesome/css/all.css" rel="stylesheet">
  </head>
  <body>

<!-- Navbar -->
<section id="navbar">
<nav class="navbar navbar-expand-lg bg-warning fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Selamat Datang Admin | <b>Universitas Gunadarma</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="icon">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-4">
            <li class="nav-item mx-2">
              <a class="nav-link active" href="#"><i class="fa-solid fa-envelope" data-bs-toggle="tooltip" title="Surat Masuk"></i></a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link active" href="#"><i class="fa-solid fa-bell" data-bs-toggle="tooltip" title="Notifikasi"></i></a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link active" href="dashboard.php"><i class="fa-solid fa-arrow-right-from-bracket" data-bs-toggle="tooltip" title="Logout"></i></a>
            </li>
        </ul>
    </div>
    </div>
  </div>
</nav>
</section>
<!-- Akhir Navbar -->

<!-- Edit Form -->
<div class="container container-card py-5 my-5">
        <div class="row"  id="card">
            <div id="card-content">
            <div id="card-title">
                <h2>Edit Data</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form" action="halaman_edit.php">
                <label for="user-email" style="padding-top:13px; padding-right:3px;">
                    &nbsp;Nama
                </label>
                <input id="user-email" class="form-content" type="text" name="username" value="<?=$data['nama']?>" required />
                <div class="form-border"></div>
                <label for="nim" style="padding-top:25px; margin-left:20px; padding-right:3px;">&nbsp;NIM
                </label>
                <input id="nim" class="form-content" type="text" name="nim" value="<?=$data['nim']?>" required />
                <br>
                <label for="kelas" style="padding-top:25px; padding-right:3px;">
                    &nbsp;Kelas
                </label>
                <input id="kelas" class="form-content" type="text" name="kelas"  value="<?=$data['kelas']?>" required style="margin-right:30px; width: 200px;" />
                <br>
                <label for="jurusan" style="padding-top:25px; padding-right:3px;">
                    &nbsp;Jurusan
                </label>
                <input id="jurusan" class="form-content" type="text" name="jurusan"  value="<?=$data['Jurusan']?>" required style="margin-right:30px; width: 200px;" />
                <div class="form-border"></div>
                <input id="submit-btn" type="submit" name="submit" value="Submit" style="margin-top: 1rem ;" />
            </form>
            </div>
        </div>
</div>
<!-- Akhir Edit Form -->
  </body>
    <!-- Link JS -->
    <script type="text/javascript" src="admin.js"></script>
    <!-- all.js loads all styles and icons -->
  <script defer src="fontawesome/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
