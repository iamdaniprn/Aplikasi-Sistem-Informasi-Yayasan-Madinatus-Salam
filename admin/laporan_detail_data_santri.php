<?php
include "koneksi.php";
require('fpdf17/fpdf.php');
if (isset($_POST['submit']))
{  
    $id      = $_POST['id'];

    $result=mysql_query("
        SELECT data_santri.`id_santri`, data_santri.`nama_santri`, data_santri.`jenis_kelamin` , data_santri.`tempat_lahir`, data_santri.`tanggal_lahir`, data_santri.`kab`, data_ortu.`nama_ayah`,
            data_ortu.`pekerjaan_ayah`, data_ortu.`nama_ibu`, data_ortu.`pekerjaan_ibu`, 
            riwayat_pendidikan.`tk`, riwayat_pendidikan.`sd`, riwayat_pendidikan.`smp`, riwayat_pendidikan.`sma`, riwayat_pendidikan.`kuliah`
            FROM data_santri
            JOIN data_ortu ON (data_santri.`id_santri` = data_ortu.`id_santri`)
            JOIN riwayat_pendidikan ON (data_santri.`id_santri` = riwayat_pendidikan.`id_santri`) WHERE data_santri.`id_santri`= '$id'") or die(mysql_error());

    //Inisiasi untuk membuat header kolom
    $column_id_santri = "";
    $column_nama_santri = "";
    $column_jenis_kelamin = "";
    $column_tempat_lahir = "";
    $column_tanggal_lahir = "";
    $column_kab = "";

    $column_nama_ayah = "";

    //For each row, add the field to the corresponding column
    while($row = mysql_fetch_array($result))
    {
    	$id_santri = $row["id_santri"];
        $nama_santri = $row["nama_santri"];
        $jenis_kelamin = $row["jenis_kelamin"];
        $tempat_lahir = $row["tempat_lahir"];
        $tanggal_lahir = $row["tanggal_lahir"];
        $kab = $row["kab"] ;
    	$nama_ayah = $row["nama_ayah"];
     
        

    	$column_id_santri = $column_id_santri.$id_santri."\n";
        $column_nama_santri = $column_nama_santri.$nama_santri."\n";
        $column_jenis_kelamin = $column_jenis_kelamin.$jenis_kelamin."\n";
        $column_tanggal_lahir = $column_tanggal_lahir.$tanggal_lahir."\n";
        $column_tempat_lahir = $column_tempat_lahir.$tempat_lahir."\n";
        $column_kab = $column_kab.$kab."\n";
        $column_nama_ayah = $column_nama_ayah.$nama_ayah."\n";
        

    //Create a new PDF file
    $pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
    $pdf->AddPage();

    //Menambahkan Gambar
    $pdf->Image('gambar/logo2.jpg',10,10,-175);

    $pdf->SetFont('Arial','B',13);
    $pdf->Cell(80);
    $pdf->Cell(30,10,'Detail Data Santri',0,0,'C');
    $pdf->Ln();
    $pdf->Cell(80);
    $pdf->Cell(30,10,'Yayasan Madinatussalam Bandung',0,0,'C');
    $pdf->Ln();

    }
    //Fields Name position
    $Y_Fields_Name_position = 30;

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
    $pdf->Cell(25,8,'Tanggal Lahir',1,0,'C',1);
    $pdf->SetX(165);
    $pdf->Cell(40,8,'Nama Ayah',1,0,'C',1);
    $pdf->Ln();

    //Table position, under Fields Name
    $Y_Table_Position = 38;

    //Now show the columns
    $pdf->SetFont('Arial','',10);

    $pdf->SetY($Y_Table_Position);
    $pdf->SetX(5);
    $pdf->MultiCell(25,6,$column_id_santri,1,'C');

    $pdf->SetY($Y_Table_Position);
    $pdf->SetX(30);
    $pdf->MultiCell(80,6,$column_nama_santri,1,'L');

    $pdf->SetY($Y_Table_Position);
    $pdf->SetX(110);
    $pdf->MultiCell(30,6,$column_jenis_kelamin,1,'C');

    $pdf->SetY($Y_Table_Position);
    $pdf->SetX(140);
    $pdf->MultiCell(25,6,$column_tanggal_lahir,1,'L');

    $pdf->SetY($Y_Table_Position);
    $pdf->SetX(165);
    $pdf->MultiCell(40,6,$column_nama_ayah,1,'L');

    $pdf->Output();
}
?>
