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
    <link rel="stylesheet" href="style.css">

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

<!-- Sidebar -->
<div class="row no-gutters mt-5">
  <!-- Bagian menu sidebar -->
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

  <!-- Bagian utama template website admin -->
  <div class="content col-10">
        <h3><i class="fa-solid fa-gauge me-2"></i>Dashboard</h3><hr>

        <!-- Card Daftar Mahasiswa -->
        <div class="row text-white g-3">
          <div class="col-lg-4 col-12">
          <div class="card bg-info" style="width: 18rem; margin-left: 100px;">
              <div class="card-body">
                <div class="card-body-icon"><i class="fa-solid fa-graduation-cap me-2"></i></div>
              <h5 class="card-title">Jumlah Mahasiswa</h5>
                <div class="display-4 mb-2">1253</div>
                <a href="daftar_mhs.php" class="text-white"><p class="card-text text-white">Lihat detail mahasiswa<i class="fas fa-angle-double-right ms-2" ></i></p></a>
              </div>
              </div>
            </div>

            <div class="col-lg-4 col-12">
              <div class="card bg-success" style="width: 18rem; margin-left: 50px;">
                  <div class="card-body">
                    <div class="card-body-icon"><i class="fa-solid fa-chalkboard-user me-2"></i></div>
                  <h5 class="card-title">Jumlah Dosen</h5>
                    <div class="display-4 mb-2">150</div>
                    <a href="#" class="text-white"><p class="card-text text-white">Lihat detail dosen<i class="fas fa-angle-double-right ms-2" ></i></p></a>
                </div>
                </div>
          </div>

          <div class="col-lg-4 col-12">
            <div class="card bg-danger" style="width: 18rem; height: 189px ;">
                <div class="card-body">
                  <div class="card-body-icon"><i class="fa-solid fa-file-pen me-2"></i></div>
                <h5 class="card-title">Nilai Mahasiswa</h5>
                  <div class="display-4 mb-2"></div>
                  <a href="#" class="text-white"><p class="card-text text-white">Lihat detail nilai<i class="fas fa-angle-double-right ms-2" ></i></p></a>
              </div>
            </div>
          </div>
          </div>

            <div class="row text-white mt-3 g-3">
              <div class="col-lg-4 col-12">
                    <div class="card bg-warning" style="width: 18rem; margin-left: 100px;">
                      <div class="card-body">
                        <div class="card-body-icon"><i class="fa-brands fa-instagram me-2"></i></div>
                      <h5 class="card-title">Instagram</h5>
                        <div class="display-4 mb-2">Link</div>
                        <a href="#" class="text-white"><p class="card-text text-white">Go to Instagram<i class="fas fa-angle-double-right ms-2" ></i></p></a>
                      </div>
                    </div>
                </div>
              </div>



          </div>
        </div>
</div>
<!-- Akhir Sidebar -->


  </body>
    <!-- Link JS -->
    <script type="text/javascript" src="admin.js"></script>
    <!-- all.js loads all styles and icons -->
  <script defer src="fontawesome/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
