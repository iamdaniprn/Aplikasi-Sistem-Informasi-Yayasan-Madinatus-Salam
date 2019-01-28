<?php
$query = mysql_query("SELECT * FROM admin WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>

<!-- navbar side -->
<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    <div class="user-section-inner">
                        <img src="assets/img/user.png" alt="">
                    </div>
                    <div class="user-info">
                        <div>Administrator</div>
                        <div class="user-text-online">
                            <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                        </div>
                    </div>
                </div>
                <!--end user image section-->
            </li>
            <li class="selected">
                <a href="home.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li style="background: grey;">
                <a href="data_santri.php"><i class="fa fa-table fa-fw"></i> Data Santri Mahasiswa/i</a>
            </li>
            <li style="background: grey;">
                <a href="profil.php"><i class="fa fa-columns fa-fw"></i> Profil</a>
            </li>
            <li style="background: grey;">
                <a href="galeri.php"><i class="fa fa-bar-chart-o fa-fw"></i> Galeri</a>
            </li>
            <li style="background: grey;">
                <a href="artikel.php"><i class="fa fa-edit fa-fw"></i> Artikel</a>
            </li>
            <li style="background: grey;">
                <a href="susunan.php"><i class="fa fa-th-large fa-fw"></i> Susunan Kepengurusan</a>
            </li>
            <li style="background: grey;">
                <a href="program.php"><i class="fa fa-plus-square-o fa-fw"></i> Program Yayasan</span></a>
            </li>
            <li style="background: grey;">
                <a href="kontak.php"><i class="fa fa-phone fa-fw"></i> Kontak</a>
            </li>
            <li style="background: grey;">
                <a href="admin.php"><i class="fa fa-user fa-fw"></i> Admin</a>
            </li>
        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>
<!-- end navbar side -->