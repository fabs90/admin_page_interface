<?php
// koneksi database
include "connection.php";

// menangkap data id yang di kirim dari url
$id = $_GET["id"];

$query = mysqli_query($conn, "DELETE FROM mahasiswa where id = '$id'");

if ($query) {
    echo "<script type='text/javascript'> alert('Data Successfully Deleted!'); document.location.href='daftar_mhs.php';</script>";
} else {
    echo "<script type='text/javascript'> alert('Data Unsuccesfully Deleted!'); document.location.href='daftar_mhs.php';</script>";
    exit();
}
