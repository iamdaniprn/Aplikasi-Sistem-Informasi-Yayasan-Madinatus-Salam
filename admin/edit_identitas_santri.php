i<?php
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
                    <h1 class="page-header">Edit Identitas Santri</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Identitas Santri
                        </div>
                            <div class="panel-body">
                                <div class="col-md-8">
                                <?php
                                    Include('koneksi.php');
                                    $user=$_GET['id'];
                                    $sql=mysql_query("select * from data_santri where id_santri='$user'");
                                    while($row=mysql_fetch_array($sql)){
                                ?>
                                    <form enctype="multipart/form-data" action="proses_edit_identitas_santri.php" method="post">
                                    <div class="form-group">
                                        <input type="hidden" name="id_santri" size="120" value="<?php echo $row['id_santri']?>" />
                                    </div>
                                    <table class="table table-sm">
                                      <tbody>
                                        <tr>
                                          <td><label>Nama</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="nama" class="form-control" size="70" value="<?php echo $row['nama_santri']?>"></td>
                                        </tr>
                                        <tr>
                                          <td><label>Jenis Kelamin</label></td>
                                          <td>:</td>
                                          <td><select name="jns_kelamin" class="form-control" value="<?php echo $row['jenis_kelamin']?>">
                                                <option>-pilih salah satu-</option>
                                                <option name="Laki-Laki">Laki-Laki</option>
                                                <option name="Perempuan">Perempuan</option>
                                          </select>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><label>Tempat Lahir</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="tempat_lahir" class="form-control" size="70" value="<?php echo $row['tempat_lahir']?>"></td>
                                        </tr>
                                        <tr>
                                          <td><label>Tanggal Lahir</label></td>
                                          <td>:</td>
                                          <td>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="tanggal">
                                                        <option value="">-Tanggal-</option>
                                                       <?php for($hari=1; $hari<=31; $hari++){ ?>
                                                        <option value="<?php echo $hari; ?>">
                                                            <?php echo $hari; ?>
                                                        </option>
                                                        <?php  } ?>
                                                    </select>
                                                    
                                                    <select class="form-control" name="bulan">
                                                        <option value="">-Bulan-</option>
                                                        <?php
                                                            $bulan = array("Januari" , "Februari" , "Maret" , "April" , "Mei" , "Juni" , "Juli" , "Agustus" , "September" , "Oktober" , "Novermber" , "Desember");
                                                            foreach ($bulan as $newbulan) {
                                                            echo "<option value=$newbulan> $newbulan </option>";
                                                            }
                                                        ?>
                                                    </select>
                                                    <select class="form-control" name="tahun">
                                                        <option value="">-Tahun-</option>
                                                        <?php
                                                            for($i=1990;$i<=2017;$i++){
                                                            echo "<option value=$i> $i </option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><label>Alamat</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="alamat" class="form-control" size="70" value="<?php echo $row['alamat']?>"></td>
                                        </tr>
                                         <tr>
                                          <td><label>RT</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="rt" class="form-control" size="70" value="<?php echo $row['rt']?>"></td>
                                        </tr>
                                         <tr>
                                          <td><label>RW</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="rw" class="form-control" size="70" value="<?php echo $row['rw']?>"></td>
                                        </tr>
                                        <tr>
                                          <td><label>Desa</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="desa" class="form-control" size="70" value="<?php echo $row['desa']?>"></td>
                                        </tr>
                                        <tr>
                                          <td><label>Kecamatan</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="kec" class="form-control" size="70" value="<?php echo $row['kec']?>"></td>
                                        </tr>
                                        <tr>
                                          <td><label>Kabupaten</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="kab" class="form-control" size="70" value="<?php echo $row['kab']?>"></td>
                                        </tr>
                                        <tr>
                                          <td><label>Provinsi</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="provinsi" class="form-control" size="70" value="<?php echo $row['provinsi']?>"></td>
                                        </tr>
                                         <tr>
                                          <td><label>Agama</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="agama" class="form-control" size="70" value="<?php echo $row['agama']?>"></td>
                                        </tr>
                                         <tr>
                                          <td><label>Kewarganegaraan</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="kewarganegaraan" class="form-control" size="70" value="<?php echo $row['kewarganegaraan']?>"></td>
                                        </tr>
                                         <tr>
                                          <td><label>Anak Ke</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="anak_ke" class="form-control" size="70" value="<?php echo $row['anak_ke']?>"></td>
                                        </tr>
                                         <tr>
                                          <td><label>Jumlah Saudara kandung</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="jml_sdr_kandung" class="form-control" size="70" value="<?php echo $row['jml_sdr_kandung']?>"></td>
                                        </tr>
                                         <tr>
                                          <td><label>Jumlah Saudara Tiri</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="jml_sdr_tiri" class="form-control" size="70" value="<?php echo $row['jml_sdr_tiri']?>"></td>
                                        </tr>
                                         <tr>
                                          <td><label>Jumlah Saudara Angkat</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="jml_sdr_angkat" class="form-control" size="70" value="<?php echo $row['jml_sdr_angkat']?>"></td>
                                        </tr>
                                         <tr>
                                          <td><label>Status Anak</label></td>
                                          <td>:</td>
                                          <td>
                                            <select class="form-control" name="status_anak">
                                                <option value="">-Pilih Salah Satu-</option>
                                                <option value="Anak Yatim">Anak Yatim</option>
                                                <option value="Piatu">Piatu</option>
                                                <option value="Yatim Piatu">Yatim Piatu</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                          </td>
                                        </tr>
                                         <tr>
                                          <td><label>Bahasa Sehari-hari</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="bahasa" class="form-control" size="70" value="<?php echo $row['bahasa']?>"></td>
                                        </tr>
                                         <tr>
                                          <td><label>No Handphone</label></td>
                                          <td>:</td>
                                          <td><input type="text" name="no_hp" class="form-control" size="70" value="<?php echo $row['no_hp']?>"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="btn btn-primary" name="submit" type="submit" value="Edit" />
                                            </td>
                                        </tr>
                                      </tbody>
                                    </table>   
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
