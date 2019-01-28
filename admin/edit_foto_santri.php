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
    <title>Admin | Sistem Informasi Yayasan Madinatus salam </title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="../gambar/logo.jpg" />
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
                            Edit Galeri
                        </div>
                            <div class="panel-body">
                                <div class="col-md-6">
                                <?php
                                    Include('koneksi.php');
                                    $id=$_GET['id'];
                                    $sql=mysql_query("select * from data_santri where id_santri='$id'");
                                    while($row=mysql_fetch_array($sql)){
                                ?>
                                    <form enctype="multipart/form-data" action="proses_edit_foto_santri.php" method="post">
                                    <div class="form-group">
                                        <input type="hidden" name="id_santri" size="120" value="<?php echo $row['id_santri']?>" />
                                    </div> 
                                    <div class="form-group">
                                        <label>Masukkan Foto Kembali <i>(Format: jpg/jpeg/png)</i></label>
                                        <input type="file" name="gambar" />
                                    </div>                                       
                                    <input class="btn btn-primary" name="submit" type="submit" value="Edit" />
                                    </form>
                                    <?php }
                                    ?>
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

</body>
</html>
