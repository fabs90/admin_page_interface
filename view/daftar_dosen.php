<?php
require '../model/connection.php';
require '../fragment/header.php';
require '../fragment/sidebar.php';
?>



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

            <!-- Tombol Print PDF -->
            <a name="btn-pdf" class="btn btn-success mb-2" href="pdf_dosen.php" role="button"> <i
                    class="bi bi-file-earmark-pdf"></i> PRINT</a>
            <!-- Akhir tombol print pdf -->
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