<?php
require '../fragment/header.php';
require '../fragment/sidebar.php';
?>

<!-- Bagian utama template website admin -->
<div class="content col-10">
    <h3><i class="fa-solid fa-gauge me-2"></i>Dashboard</h3>
    <hr>

    <!-- Card Daftar Mahasiswa -->
    <div class="row text-white g-3">
        <div class="col-lg-4 col-12">
            <div class="card bg-info" style="width: 18rem; margin-left: 100px;">
                <div class="card-body">
                    <div class="card-body-icon"><i class="fa-solid fa-graduation-cap me-2"></i></div>
                    <h5 class="card-title">Jumlah Mahasiswa</h5>
                    <div class="display-4 mb-2">1253</div>
                    <a href="daftar_mhs.php" class="text-white">
                        <p class="card-text text-white">Lihat detail mahasiswa<i
                                class="fas fa-angle-double-right ms-2"></i></p>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-12">
            <div class="card bg-success" style="width: 18rem; margin-left: 50px;">
                <div class="card-body">
                    <div class="card-body-icon"><i class="fa-solid fa-chalkboard-user me-2"></i></div>
                    <h5 class="card-title">Jumlah Dosen</h5>
                    <div class="display-4 mb-2">150</div>
                    <a href="#" class="text-white">
                        <p class="card-text text-white">Lihat detail dosen<i class="fas fa-angle-double-right ms-2"></i>
                        </p>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-12">
            <div class="card bg-danger" style="width: 18rem; height: 189px ;">
                <div class="card-body">
                    <div class="card-body-icon"><i class="fa-solid fa-file-pen me-2"></i></div>
                    <h5 class="card-title">Nilai Mahasiswa</h5>
                    <div class="display-4 mb-2"></div>
                    <a href="#" class="text-white">
                        <p class="card-text text-white">Lihat detail nilai<i class="fas fa-angle-double-right ms-2"></i>
                        </p>
                    </a>
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
                    <a href="#" class="text-white">
                        <p class="card-text text-white">Go to Instagram<i class="fas fa-angle-double-right ms-2"></i>
                        </p>
                    </a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>

</html>
