<?php
include "../model/connection.php";

// cek jika tombol submit sudah di klik
if (isset($_POST["submit"])) {

    // Ambil data dari input user
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];

    $query = mysqli_query($conn, "UPDATE mahasiswa set nama = '$nama', nim = '$nim', kelas ='$kelas' where id = '$id' ");

    if ($query) {
        echo "<script type='text/javascript'> alert('Data Successfully Update!'); document.location.href='daftar_mhs.php';</script>";
    } else {
        echo "<script type='text/javascript'> alert('Data Failed to be Update!'); document.location.href='daftar_mhs.php';</script>";
        exit();
    }
}
