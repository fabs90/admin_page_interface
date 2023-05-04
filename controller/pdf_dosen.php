<?php
// Import library fpdf
require '../library/fpdf.php';

// import connection file
include "../model/connection.php";

// inisiasi objek dan atur layout page pdf
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Times', 'B', 13);
$pdf->Cell(200, 10, 'Data Mahasiswa', 0, 0, 'C');

$pdf->Cell(10, 15, '', 0, 1);
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(10, 7, 'No', 1, 0, 'C');
$pdf->Cell(60, 7, 'Nama', 1, 0, 'C');
$pdf->Cell(45, 7, 'NIP', 1, 0, 'C');
$pdf->Cell(55, 7, 'Mata Kuliah', 1, 0, 'C');

$pdf->cell(10, 7, '', 0, 1);
$pdf->setFont('Times', '', 10);
$no = 1;

// query ke db
$query = mysqli_query($conn, "SELECT dosen.*, matkul.nama as Matakuliah FROM dosen inner join matkul on dosen.id_mata_kuliah = matkul.id;");

// loop buat ambil data dari db
while ($row = mysqli_fetch_assoc($query)) {
    $pdf->Cell(10, 7, $no++, 1, 0, 'C');
    $pdf->Cell(60, 7, $row['nama'], 1, 0, 'C');
    $pdf->Cell(45, 7, $row['nip'], 1, 0, 'C');
    $pdf->Cell(55, 7, $row['Matakuliah'], 1, 0, 'C');
    // Buat baris baru tiap perulangan
    $pdf->Ln();
}

$pdf->Output();
