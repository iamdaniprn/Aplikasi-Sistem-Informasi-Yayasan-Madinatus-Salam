<!DOCTYPE html>
<html>
<head>
    
</head>
<body>

                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Alamat Asal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include "koneksi.php";
                                          
                                        $tampil=mysql_query("select * from data_santri order by id_santri desc");
                                        $no = 1;      
                                        while($k=mysql_fetch_array($tampil)){
                                            $user=($k['id_santri']);
                                            $nama=($k['nama_santri']);
                                            $jns=($k['jenis_kelamin']);
                                            $tl=($k['tempat_lahir']);
                                            $tanggal=($k['tanggal_lahir']);
                                            $kab=($k['kab']);
                                              echo "<tr class=gradeX>";
                                              echo "<td>$no</td>";
                                              echo "<td>$nama</td>";
                                              echo "<td>$jns</td>";
                                              echo "<td>$tl</td>";
                                              echo "<td>$tanggal</td>";
                                              echo "<td>$kab</td>";
                                              $no++;
                                        }  
                                        echo "</tbody></table> ";            
                                        ?>
                                        </tbody>
                                    </table>
                               
</body>
</html>


<?php
$content=ob_get_clean();
require_once("html2pdf/html2pdf.class.php");
$pdf=new HTML2PDF('p','A4','fr','utf-8');
$pdf->writeHTML($content);
$pdf->pdf->IncludeJS('print(TRUE)');
$pdf->output('tes.pdf');

?>
