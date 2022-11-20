<?php
require 'library/fpdf.php';
require 'connection.php';

// inisiasi objek dan atur layout page pdf
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Times', 'B', 13);
$pdf->Cell(200, 10, 'Data Mahasiswa', 0, 0, 'C');

$pdf->Cell(10, 15, '', 0, 1);
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(10, 7, 'No', 1, 0, 'C');
$pdf->Cell(50, 7, 'Nama', 1, 0, 'C');
$pdf->Cell(35, 7, 'Nim', 1, 0, 'C');
$pdf->Cell(45, 7, 'Kelas', 1, 0, 'C');
$pdf->Cell(50, 7, 'Jurusan', 1, 0, 'C');

$pdf->cell(10, 7, '', 0, 1);
$pdf->setFont('Times', '', 10);
$no = 1;

// query ke db
$query = mysqli_query($conn, "SELECT mahasiswa.*, jurusan.nama as Nama_jurusan FROM mahasiswa inner join jurusan on mahasiswa.jurusan_id = jurusan.id ORDER BY mahasiswa.nim ASC");

// loop buat ambil data dari db
while ($row = mysqli_fetch_assoc($query)) {
    $pdf->Cell(10, 7, $no++, 1, 0, 'C');
    $pdf->Cell(50, 7, $row['nama'], 1, 0, 'C');
    $pdf->Cell(35, 7, $row['nim'], 1, 0, 'C');
    $pdf->Cell(45, 7, $row['kelas'], 1, 0, 'C');
    $pdf->Cell(50, 7, $row['Nama_jurusan'], 1, 0, 'C');
    // Buat baris baru tiap perulangan
    $pdf->Ln();
}

$pdf->Output();
