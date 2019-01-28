<?php
include "koneksi.php";
require('fpdf17/fpdf.php');

$result=mysql_query("SELECT * FROM data_santri ORDER BY id_santri ASC") or die(mysql_error());

//Inisiasi untuk membuat header kolom
$column_id_santri = "";
$column_nama_santri = "";
$column_jenis_kelamin = "";
$column_tanggal_lahir = "";
$column_alamat = "";


//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
	$id_santri = $row["id_santri"];
    $nama_santri = $row["nama_santri"];
    $jenis_kelamin = $row["jenis_kelamin"];
    $tanggal_lahir = $row["tanggal_lahir"];
    $alamat = $row["alamat"] ;
	$rt = $row["rt"];
    $rw = $row["rw"];
    $desa = $row["desa"];
    $kec = $row["kec"];
    $kab = $row["kab"];
    $provinsi = $row["provinsi"];

 
    

	$column_id_santri = $column_id_santri.$id_santri."\n";
    $column_nama_santri = $column_nama_santri.$nama_santri."\n";
    $column_jenis_kelamin = $column_jenis_kelamin.$jenis_kelamin."\n";
    $column_tanggal_lahir = $column_tanggal_lahir.$tanggal_lahir."\n";
    $column_alamat = $column_alamat.$kab."\n";
    

//Create a new PDF file
$pdf = new FPDF('L','mm',array(210,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
$pdf->Image('gambar/logo2.jpg',10,10,-175);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(125);
$pdf->Cell(30,10,'Laporan Data Santri',0,0,'C');
$pdf->Ln();
$pdf->Cell(125);
$pdf->Cell(30,10,'Yayasan Madinatussalam Bandung',0,0,'C');
$pdf->Ln();
$pdf->Cell(125);
$pdf->Cell(30,10,'Komplek Permata Biru Blok R No. 135 RT 03 RW 20 Cinunuk',0,0,'C');
$pdf->Ln();
}


//Fields Name position
$Y_Fields_Name_position = 40;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,230);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(25,8,'ID Santri',1,0,'C',1);
$pdf->SetX(30);
$pdf->Cell(80,8,'Nama Santri',1,0,'C',1);
$pdf->SetX(110);
$pdf->Cell(30,8,'Jenis Kelamin',1,0,'C',1);
$pdf->SetX(140);
$pdf->Cell(50,8,'Tanggal Lahir',1,0,'C',1);
$pdf->SetX(190);
$pdf->Cell(40,8,'Alamat',1,0,'C',1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 48;

//Now show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(25,8,$column_id_santri,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(30);
$pdf->MultiCell(80,8,$column_nama_santri,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(110);
$pdf->MultiCell(30,8,$column_jenis_kelamin,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(140);
$pdf->MultiCell(50,8,$column_tanggal_lahir,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(190);
$pdf->MultiCell(40,8,$column_alamat,1,'C');

$pdf->Output();
?>
