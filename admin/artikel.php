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
                    <h1 class="page-header">Artikel</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Artikel
                        </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <a href="tambah_artikel.php" class="btn btn-success" role="button"><i class='fa fa-pencil'></i> Tambah Artikel</a>
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Gambar</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include "koneksi.php";
                                          
                                        $tampil=mysql_query("select * from artikel ORDER BY id_artikel desc");
                                        $no = 1;      
                                        while($k=mysql_fetch_array($tampil)){
                                            $id=($k['id_artikel']);
                                            $judul=($k['judul']);
                                            $des=($k['des']);
                                              echo "<tr class=gradeX>";
                                              echo "<td>$no</td>";
                                              echo "<td>$judul</td>";
                                              echo "<td><img src='artikel/.$k[2].' width = 80 height = 80 class=img-circle></td>";
                                              echo "<td><a class='btn btn-primary' href='detail_artikel.php?id=$id'><i class='fa fa-pencil'></i> Detail</a></td>";
                                              echo "<td><a class='btn btn-success' href='edit_artikel.php?id=$id'><i class='fa fa-pencil'></i> Edit</a> <a class='btn btn-danger' href='hapus_artikel.php?id=$id'> <i class='fa fa-times'></i> Hapus</a></td>";
                                              ?><?php
                                              echo "</tr>";
                                              $no++;
                                        }  
                                        echo "</tbody></table> ";            
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
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
