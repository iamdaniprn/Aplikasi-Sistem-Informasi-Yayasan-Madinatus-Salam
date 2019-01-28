<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:index.html'); }
else { $username = $_SESSION['username']; }
require_once("koneksi.php");

$query = mysql_query("SELECT * FROM admin WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Sistem Informasi Yayasan Madinatus Salam </title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style3.css" type="text/css" />
    <link rel="icon" type="image/png" href="../gambar/logo.jpg" />
    <style type="text/css">
            @import "media/css/demo_table_jui.css";
            @import "media/themes/sunny/jquery-ui.css";
    </style>    
    <script src="media/js/jquery.js"></script>
    <script src="media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
        $('#datatables').dataTable({
                     "oLanguage": {
                          "sLengthMenu": "Tampilkan _MENU_ data per halaman",
                          "sSearch": "Pencarian: ", 
                          "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
                          "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
                          "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
                          "sInfoFiltered": "(di filter dari _MAX_ total data)",
                          "oPaginate": {
                              "sFirst": "<<",
                              "sLast": ">>", 
                              "sPrevious": "<", 
                              "sNext": ">"
                       }
                  },
          "sPaginationType":"full_numbers",
          "bJQueryUI":true
        });
      })    
    </script>
</head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <?php
                Include('header.php');
            ?>
            <!-- end navbar-header -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <?php
            Include('menu.php');
        ?>
        <!-- end navbar side -->
        
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Data Santri Mahasiswa/i</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Santri Mahasiswa/i
                        </div>
                            <div class="panel-body">
                                <div class="col-md-4 col-sm-6 col-xs-12"">
                                    <?php 
                                        include("koneksi.php");
                                        $user=$_GET['id'];
                                        $sql=mysql_query("select * from data_santri where id_santri=$user") or die(mysql_error());
                                        while($row=mysql_fetch_array($sql))
                                        {
                                            echo"<img src='profil/.$row[21]' class='img-responsive' alt='portfolio img 1' width='220' height='300'><br>";

                                            echo"<a class='btn btn-primary' href='edit_foto_santri.php?id=$user'><i class='fa fa-pencil'></i> Edit</a>";
                                        }
                                    ?>
                                </div>
                                <div class="col-md-8 col-sm-6 col-xs-12">
                                    <h3>A. Identitas Santri Mahasiswa/i</h3>
                                    <?php 
                                        include("koneksi.php");
                                        $user=$_GET['id'];
                                        $sql=mysql_query("select * from data_santri where id_santri=$user") or die(mysql_error());
                                        while($row=mysql_fetch_array($sql))
                                        {
                                        ?>
                                        <table class="table table-sm">
                                          <tbody>
                                            <tr>
                                              <td>Nama Lengkap</td>
                                              <td>:</td>
                                              <td><?php echo $row['nama_santri']?></td>
                                            </tr>
                                            <tr>
                                              <td>Jenis Kelamin</td>
                                              <td>:</td>
                                              <td><?php echo $row['jenis_kelamin']?></td>
                                            </tr>
                                            <tr>
                                              <td>Tempat Tanggal Lahir</td>
                                              <td>:</td>
                                              <td><?php echo $row['tempat_lahir'] .", " . $row['tanggal_lahir']?></td>
                                            </tr>
                                            <tr>
                                              <td>Alamat</td>
                                              <td>:</td>
                                              <td><?php echo $row['alamat'] ." RT: ". $row['rt'] ." RW: ". $row['rw'] ." Desa: ". $row['desa'] ." Kecamatan: ". $row['kec'] ." Kab/Kota: ". $row['kab'] ." Provinsi: ". $row['provinsi']?></td>
                                            </tr>
                                            <tr>
                                              <td>Agama</td>
                                              <td>:</td>
                                              <td><?php echo $row['agama']?></td>
                                            </tr>
                                            <tr>
                                              <td>Kewarganegaraan</td>
                                              <td>:</td>
                                              <td><?php echo $row['kewarganegaraan']?></td>
                                            </tr>
                                            <tr>
                                              <td>Anak Ke</td>
                                              <td>:</td>
                                              <td><?php echo $row['anak_ke']?></td>
                                            </tr>
                                            <tr>
                                              <td>Jumlah Saudara Kandung</td>
                                              <td>:</td>
                                              <td><?php echo $row['jml_sdr_kandung']?></td>
                                            </tr>
                                            <tr>
                                              <td>Jumlah Saudara Tiri</td>
                                              <td>:</td>
                                              <td><?php echo $row['jml_sdr_tiri']?></td>
                                            </tr>
                                            <tr>
                                              <td>Jumlah Saudara Angkat</td>
                                              <td>:</td>
                                              <td><?php echo $row['jml_sdr_angkat']?></td>
                                            </tr>
                                            <tr>
                                              <td>Status Anak</td>
                                              <td>:</td>
                                              <td><?php echo $row['status_anak']?></td>
                                            </tr>
                                            <tr>
                                              <td>Bahasa Sehari-hari</td>
                                              <td>:</td>
                                              <td><?php echo $row['bahasa']?></td>
                                            </tr>
                                            <tr>
                                              <td>No Handphone</td>
                                              <td>:</td>
                                              <td><?php echo $row['no_hp']?></td>
                                            </tr>
                                            <tr>
                                              <td>
                                              <?php
                                                  echo"<a class='btn btn-primary' href='edit_identitas_santri.php?id=$user'><i class='fa fa-pencil'></i> Edit</a>";
                                              ?>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                     <?php }?>

                                    <h3>B. Identitas Ayah Kandung</h3>
                                    <?php 
                                        include("koneksi.php");
                                        $user=$_GET['id'];
                                        $sql=mysql_query("select * from identitas_ayah where id_santri=$user") or die(mysql_error());
                                        while($row=mysql_fetch_array($sql))
                                        {
                                        ?>
                                        <table class="table table-sm">
                                          <tbody>
                                            <tr>
                                              <td>Nama Lengkap</td>
                                              <td>:</td>
                                              <td><?php echo $row['nama_ayah']?></td>
                                            </tr>
                                            <tr>
                                              <td>Tempat Tanggal Lahir</td>
                                              <td>:</td>
                                              <td><?php echo $row['tempat_lahir'] .", " . $row['tgl_lahir']?></td>
                                            </tr>
                                           <tr>
                                              <td>Agama</td>
                                              <td>:</td>
                                              <td><?php echo $row['agama']?></td>
                                            </tr>
                                            <tr>
                                              <td>Kewarganegaraan</td>
                                              <td>:</td>
                                              <td><?php echo $row['kewarganegaraan']?></td>
                                            </tr>
                                            <tr>
                                              <td>Penddidikan</td>
                                              <td>:</td>
                                              <td><?php echo $row['pendidikan']?></td>
                                            </tr><tr>
                                              <td>Pekerjaan</td>
                                              <td>:</td>
                                              <td><?php echo $row['pekerjaan']?></td>
                                            </tr><tr>
                                              <td>Alamat</td>
                                              <td>:</td>
                                              <td><?php echo $row['alamat']?></td>
                                            </tr>

                                            <tr>
                                              <td>
                                              <?php
                                                  echo"<a class='btn btn-primary' href='identitas_ayah.php?id=$user'><i class='fa fa-pencil'></i> Edit</a>";
                                              ?>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                     <?php }?>

                                    <h3>C. Identitas Ibu Kandung</h3>
                                    <?php 
                                        include("koneksi.php");
                                        $user=$_GET['id'];
                                        $sql=mysql_query("select * from identitas_ibu where id_santri=$user") or die(mysql_error());
                                        while($row=mysql_fetch_array($sql))
                                        {
                                        ?>
                                        <table class="table table-sm">
                                          <tbody>
                                            <tr>
                                              <td>Nama Lengkap</td>
                                              <td>:</td>
                                              <td><?php echo $row['nama_ibu']?></td>
                                            </tr>
                                            <tr>
                                              <td>Tempat Tanggal Lahir</td>
                                              <td>:</td>
                                              <td><?php echo $row['tempat_lahir'] .", " . $row['tgl_lahir']?></td>
                                            </tr>
                                           <tr>
                                              <td>Agama</td>
                                              <td>:</td>
                                              <td><?php echo $row['agama']?></td>
                                            </tr>
                                            <tr>
                                              <td>Kewarganegaraan</td>
                                              <td>:</td>
                                              <td><?php echo $row['kewarganegaraan']?></td>
                                            </tr>
                                            <tr>
                                              <td>Penddidikan</td>
                                              <td>:</td>
                                              <td><?php echo $row['pendidikan']?></td>
                                            </tr><tr>
                                              <td>Pekerjaan</td>
                                              <td>:</td>
                                              <td><?php echo $row['pekerjaan']?></td>
                                            </tr><tr>
                                              <td>Alamat</td>
                                              <td>:</td>
                                              <td><?php echo $row['alamat']?></td>
                                            </tr>
                                              <td>
                                              <?php
                                                  echo"<a class='btn btn-primary' href='edit_identitas_ibu.php?id=$user'><i class='fa fa-pencil'></i> Edit</a>";
                                              ?>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                     <?php }?>
                                </div>
                                <?php
                                    echo"<a class='btn btn-primary' href='laporan_detail_data_santri.php?id=$user'><i class='fa fa-eye'></i> Cetak Data Santri</a>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>

</body>
</html>
