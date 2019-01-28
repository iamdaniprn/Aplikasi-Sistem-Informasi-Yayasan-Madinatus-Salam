<div class="container">
        <div class="row footer-widgets">
        <?php 
            include("koneksi.php");
            $sql=mysql_query("select * from kontak") or die(mysql_error());
            while($row=mysql_fetch_array($sql))
            {
              ?>

          <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-4 col-xs-12">
            <div class="footer-widget mail-subscribe-widget">
              <h4>Info Lokasi<span class="head-line"></span></h4>
              <p><?php echo $row['alamat']?></p>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->
		  
		  <!-- Start Contact Widget -->
          <div class="col-md-4 col-xs-12">
            <div class="footer-widget contact-widget">
              <h4>Kontak Kami<span class="head-line"></span></h4>
              <ul>
                <li><span>Nomor Telepon:</span> <?php echo $row['no_telp']?></li>
                <li><span>Email:</span> <?php echo $row['email']?></li>
              </ul>
            </div>
          </div>
          <?php
              }
            ?>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->

         <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-4 col-xs-12">
            <div class="footer-widget social-widget">
              <h4>Join Kami<span class="head-line"></span></h4>
              <ul class="social-icons">
                <li>
                  <a class="twitter" href="https://twitter.com/madinatus_salam"><i class="fa fa-twitter"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->

        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2017 - sistem informasi yayasan madinatus Salam bandung</p>
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-6">
              <ul class="footer-nav">
                <li><a href="index.php">Beranda</a>
                </li>
                <li><a href="profil.php">Profil</a>
                </li>
                <li><a href="artikel.php">Artikel</a>
                </li>
                 <li><a href="program.php">Program</a>
                </li>
                <li><a href="galeri.php">Galeri</a>
                </li>
                <li><a href="cantact.php">Kontak Kami</a>
                </li>
                 <li><a href="admin">Login Master</a>
                </li>
              </ul>
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- End Copyright -->

      </div>