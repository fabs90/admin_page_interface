<?php
require 'connection.php';

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: dashboard.php');
}

// Menangkap id yg dikirim url
$id = $_GET['id'];

// Buat Query ambil data yg dipilih dengan parameter id yg dikirim di url
$result = mysqli_query($conn, "SELECT dosen.*, matkul.nama as Matakuliah FROM dosen INNER JOIN matkul on dosen.id_mata_kuliah = matkul.id  WHERE dosen.id ='$id'");
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
    <link rel="stylesheet" href="mhs.css">

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

<div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form" action="halaman_edit.php">
        <label for="user-email" style="padding-top:13px">
            &nbsp;Nama
          </label>
        <input id="user-email" class="form-content" type="text" name="username" value="<?=$data['nama']?>" required />
        <div class="form-border"></div>
        <label for="nip" style="padding-top:22px">&nbsp;NIP
          </label>
        <input id="nip" class="form-content" type="text" name="nip" value="<?=$data['nip']?>" required />
        <br>
        <label for="matkul" style="padding-top:22px">
            &nbsp;Mata Kuliah
          </label>
        <input id="matkul" class="form-content" type="text" name="matkul"  value="<?=$data['Matakuliah']?>" required />
        <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="submit" value="Submit" />

      </form>
    </div>
  </div>

<!-- Edit Form -->


<!-- Akhir Edit Form -->

  </body>
    <!-- Link JS -->
    <script type="text/javascript" src="admin.js"></script>
    <!-- all.js loads all styles and icons -->
  <script defer src="fontawesome/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
