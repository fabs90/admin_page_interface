<?php
// Masukin layout dari file fragment
include 'fragment/header.php';
include 'fragment/sidebar.php';

?>
<!-- Jumbotron -->
<div class="container pt-5 text-center">
  <div class="row" style="margin-left: 300px ;">
    <div class="col-12 col-lg-10">
      <h3><i class="fa-solid fa-graduation-cap me-2"></i><b>Jadwal Matkul</b></h3>
      <hr>
    </div>
  </div>
</div>
<!-- Akhir Jumbotron -->

<!-- Table Jadwal -->
<div class="container content">
    <div class="row">
        <div class="col-12 col-lg-10">
        <table class="table table-light table-striped" style="width:80%; margin-left: 8rem;">
            <thead >
            <tr>
              <th>KELAS</th>
              <th>HARI</th>
              <th>MATA KULIAH</th>
              <th>WAKTU</th>
              <th>RUANG</th>
              <th>DOSEN</th>
            </tr>
            </thead>

            <tbody>
                        <tr>
              <td>2KA23</td>
              <td>Rabu</td>
              <td style="text-align: left">Pengantar Akuntansi Keuangan 1</td>
              <td>1/2</td>
              <td>J1318</td>
              <td style="text-align: left">NOOR MUHAMMAD ADIPATI</td>
            </tr>
                        <tr>
              <td>2KA23</td>
              <td>Rabu</td>
              <td style="text-align: left">Matematika Sistem Informasi 1</td>
              <td>3/4</td>
              <td>J1318</td>
              <td style="text-align: left">SIGIT MUHAMAD YAKUB</td>
            </tr>
                        <tr>
              <td>2KA23</td>
              <td>Rabu</td>
              <td style="text-align: left">Manajemen &amp; SIM 1 *</td>
              <td>6/7</td>
              <td>J1318</td>
              <td style="text-align: left">IRAWATY</td>
            </tr>
                        <tr>
              <td>2KA23</td>
              <td>Rabu</td>
              <td style="text-align: left">Sistem Basis Data 1 **</td>
              <td>8/9/10</td>
              <td>J1318</td>
              <td style="text-align: left">RINA NOVIANA</td>
            </tr>
                        <tr>
              <td>2KA23</td>
              <td>Jum'at</td>
              <td style="text-align: left">Peng. Org. &amp; Arst Komputer</td>
              <td>2/3/4</td>
              <td>J342</td>
              <td style="text-align: left">INDAH TRI HANDAYANI</td>
            </tr>
                        <tr>
              <td>2KA23</td>
              <td>Jum'at</td>
              <td style="text-align: left">Matematika Lanjut 1 */**</td>
              <td>7/8</td>
              <td>J342</td>
              <td style="text-align: left">ACHMAD FAHRUROZI</td>
            </tr>
                        <tr>
              <td>2KA23</td>
              <td>Jum'at</td>
              <td style="text-align: left">Inovasi SI &amp; New Technology</td>
              <td>9/10</td>
              <td>J342</td>
              <td style="text-align: left">SITI RAHMA</td>
            </tr>
                        <tr>
              <td>2KA23</td>
              <td>Sabtu</td>
              <td style="text-align: left">Teknik Pemrog. Terstruktur **</td>
              <td>4/5</td>
              <td>J61002</td>
              <td style="text-align: left">DIMAS NUGEROHO</td>
            </tr>
                        <tr>
              <td>2KA23</td>
              <td>Sabtu</td>
              <td style="text-align: left">Struktur &amp; Organisasi Data *</td>
              <td>8/9/10</td>
              <td>J61002</td>
              <td style="text-align: left">INDRA PURNAMA</td>
            </tr>
                      </tbody>
        </table>
        </div>
    </div>
</div>
<!-- Akhir dari table jadwal -->

<?php
// Layout Footer
include 'fragment/footer.php';
?>