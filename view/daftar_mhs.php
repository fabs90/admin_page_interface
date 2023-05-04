<?php
require '../model/connection.php';
require '../fragment/header.php';
require '../fragment/sidebar.php';
?>

<!-- Jumbotron -->
<div class="container pt-5 text-center">
    <div class="row" style="margin-left: 300px ;">
        <div class="col-12 col-lg-10">
            <h3><i class="fa-solid fa-graduation-cap me-2"></i><b>Daftar Mahasiswa</b></h3>
            <hr>
        </div>
    </div>
</div>
<!-- Akhir Jumbotron -->

<!-- Table Mahasiswa -->
<div class="container content">
    <div class="row justify-content-center" style="margin-left: 1rem ;">
        <div class="col-12 col-lg-10">
            <table class="table table-dark table-striped">
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>NIM</td>
                    <td>Kelas</td>
                    <td>Jurusan</td>
                    <td>Aksi</td>
                </tr>

                <?php
// declare variabel mau berapa banyak data per-halaman
$perPage = 10;

// Cek apakah ada halaman di url (http://localhost:3000/try1.php?*halaman=2*)
// Kalau ada halaman ke-... di url maka diambil dan initiate di var $_GET
// Kalau gaada halaman ke-..., otomatis halaman dilempar ke 1
$page = isset($_GET['halaman']) ? (int) $_GET['halaman'] : 1;

// Cek mau mulai ambil data dari ID berapa
// Kalo halaman 1 berarti ambil dari id 0
/* Kalo halaman lebih dari > 1 (misal 2) maka ($page = 2 * $perPage = 10) - 10 = 10
berarti utk halaman dua diambil dari indeks 10 */
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

$query = mysqli_query($conn, "SELECT mahasiswa.*, jurusan.nama as Nama_jurusan FROM mahasiswa inner join jurusan on mahasiswa.jurusan_id = jurusan.id LIMIT $start, $perPage");

// Buat menghitung jumlah baris yg muncul abis di execute query
$result = mysqli_query($conn, "SELECT mahasiswa.*, jurusan.nama as Nama_jurusan FROM mahasiswa inner join jurusan on mahasiswa.jurusan_id = jurusan.id");
$total = mysqli_num_rows($result);
$banyakHalaman = ceil($total / $perPage);

// Show Data Tables
$no = 1;
while ($data = mysqli_fetch_assoc($query)) {?>
                <tr>
                    <td><?=$no?></td>

                    <td><?=$data["nama"]?></td>
                    <td><?=$data["nim"]?></td>
                    <td><?=$data["kelas"]?></td>
                    <td><?=$data["Nama_jurusan"]?></td>
                    <td><button type='button' class='btn btn-success'><a
                                href='halaman_edit_mhs.php?id=<?=$data['id']?> '>Edit</a></button> <button type='button'
                            class='btn btn-danger'><a
                                href='../controller/function_hapus_mhs.php?id=<?=$data['id']?> '>Hapus</a></button></td>
                    <?php $no++?>
                </tr>
                <?php
}

?>
            </table>


            <!-- Tombol Print PDF -->
            <a name="btn-pdf" class="btn btn-success mb-2" href="../controller/pdf_mhs.php" role="button"> <i
                    class="bi bi-file-earmark-pdf"></i> PRINT</a>
            <!-- Akhir tombol print pdf -->

            <!-- Pagination -->
            <div id="pagination">
                <?php
for ($i = 1; $i <= $banyakHalaman; $i++) {?>
                <a href='?halaman=<?=$i?>'><?=$i?></a>
                <?php
}
?>
            </div>
            <!-- Akhir Pagination -->

        </div>
    </div>

</div>
<!-- Akhir Table Mahasiswa -->

</body>
<!-- Link JS -->
<script type="text/javascript" src="admin.js"></script>
<!-- all.js loads all styles and icons -->
<script defer src="fontawesome/js/all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>

</html>