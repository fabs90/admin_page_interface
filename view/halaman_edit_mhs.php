<?php
require '../model/connection.php';
require '../fragment/header.php';
require '../fragment/sidebar.php';

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

<!-- Edit Form -->
<div class="container container-card">
    <div class="row justify-content-center" style="margin-left: 25rem; margin-top: 8rem;" id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>Edit Data</h2>
                <div class="underline-title"></div>
            </div>

            <form method="post" class="form" action="function_update_mhs.php">
                <input type="hidden" name="id" value="<?=$data['id']?>">
                <label for="username" style="padding-top:13px; padding-right:3px;">
                    &nbsp;Nama
                </label>
                <input id="username" class="form-content" type="text" name="nama" value="<?=$data['nama']?>" required />

                <div class="form-border"></div>

                <label for="nim" style="padding-top:25px; margin-left:20px; padding-right:3px;">&nbsp;NIM
                </label>
                <input id="nim" class="form-content" type="text" name="nim" value="<?=$data['nim']?>" required />
                <br>

                <label for="kelas" style="padding-top:25px; padding-right:3px;">
                    &nbsp;Kelas
                </label>
                <input id="kelas" class="form-content" type="text" name="kelas" value="<?=$data['kelas']?>" required
                    style="margin-right:30px; width: 200px;" />
                <br>

                <label for="jurusan" style="padding-top:25px; padding-right:3px;">
                    &nbsp;Jurusan
                </label>
                <input id="jurusan" class="form-content" type="text" name="jurusan" value="<?=$data['Jurusan']?>"
                    required style="margin-right:30px; width: 200px;" />
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>

</html>