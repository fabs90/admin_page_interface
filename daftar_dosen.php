<?php
require 'connection.php';
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
              <a class="nav-link active" href="#"><i class="fa-solid fa-arrow-right-from-bracket" data-bs-toggle="tooltip" title="Logout"></i></a>
            </li>
        </ul>
    </div>
    </div>
  </div>
</nav>
</section>
<!-- Akhir Navbar -->

<!-- Bagian menu sidebar -->
<div class="row mt-5">
<section class="sidebar" id="sidebar">
  <div class="sidebar col-md-2 bg-dark mt-3">
      <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
      <ul class="nav flex-column text-white w-100 mt-2 mb-5">
        <li class="nav-link">
          <a  href="dashboard.php" class="nav-link text-white"><i class="fa-solid fa-gauge me-2"></i> Dashboard</a>
        </li>
        <hr>
        <li class="nav-link">
          <a class="nav-link text-white" href="daftar_mhs.php"><i class="fa-solid fa-graduation-cap me-2"></i> Daftar Mahasiswa</a>
        </li>
        <hr>
        <li class="nav-link">
          <a class="nav-link text-white" href="daftar_dosen.php"><i class="fa-solid fa-chalkboard-user me-2"></i> Daftar Dosen</a>
        </li>
        <hr>
        <li class="nav-link">
          <a class="nav-link text-white"><i class="fa-solid fa-file-pen me-2"></i> Nilai Mahasiswa</a>
        </li>
        <hr>
        <li class="nav-link">
          <a class="nav-link text-white"><i class="fa-solid fa-calendar me-2"></i> Jadwal Kuliah</a>
        </li>
      </ul>
    </div>
  </div>
  </section>
  </div>
<!-- Akhir Sidebar -->

<!-- Jumbotron -->
<div class="container pt-5 text-center">
  <div class="row" style="margin-left: 300px ;">
    <div class="col-12 col-lg-10">
      <h3><i class="fa-solid fa-chalkboard-user me-2"></i><b>Daftar Dosen</b></h3>
      <hr>
    </div>
  </div>
</div>
<!-- Akhir Jumbotron -->

<!-- Table Dosen -->
<div class="container content">
    <div class="row justify-content-center" style="margin-left: 1rem ;">
        <div class="col-12 col-lg-10">
<?php
$no = 1;
$output = "";

$output = "<table class=' table table-dark table-striped'>
  <thead>
    <tr>
      <th scope='col'>No</th>
      <th scope='col'>Nama</th>
      <th scope='col'>NIP</th>
      <th scope='col'>Mata kuliah</th>
      <th scope='col'>Aksi</th>
    </tr>
  </thead>";

$query = mysqli_query($conn, "SELECT dosen.*, matkul.nama as Matakuliah FROM dosen inner join matkul on dosen.id_mata_kuliah = matkul.id;");
$num_row = mysqli_num_rows($query);

if ($num_row != 0) {
    while ($result = mysqli_fetch_assoc($query)) {
        $output .= "
          <tbody>
            <tr>
              <td>" . $no . "</td>
              <td>" . $result['nama'] . "</td>
              <td>" . $result['nip'] . "</td>
              <td>" . $result['Matakuliah'] . "</td>
              <td><button type='button' class='btn btn-success'><a href='halaman_edit.php?id=" . $result['id'] . " ' >Edit</a></button> <button type='button' class='btn btn-danger'><a href='function_hapus.php?id=" . $result['id'] . " '>Hapus</a></button></td>
            </tr>
          </tbody>
        ";
        $no++;
    }

}

echo $output;
?>
        </div>
    </div>
</div>


<!-- Akhir Table Mahasiswa -->


</body>
    <!-- Link JS -->
    <script type="text/javascript" src="admin.js"></script>
    <!-- all.js loads all styles and icons -->
  <script defer src="fontawesome/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
