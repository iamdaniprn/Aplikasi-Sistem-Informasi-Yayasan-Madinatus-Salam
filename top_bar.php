<div class="top-bar" style="background: silver">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <?php 
                    include("koneksi.php");
                    $sql=mysql_query("select * from kontak") or die(mysql_error());
                    while($row=mysql_fetch_array($sql))
                    {
                      ?>
                      <li><a href="#"><i class="fa fa-map-marker"></i> <?php echo $row['alamat']?></a>
                      </li>
                      <li><a href="#"><i class="fa fa-envelope-o"></i> <?php echo $row['email']?></a>
                      </li>
                      <li><a href="#"><i class="fa fa-phone"></i> <?php echo $row['no_telp']?></a>
                      </li>
                      <?php
                    }
                  ?>
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-5">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="https://twitter.com/madinatus_salam"><i class="fa fa-twitter"></i></a>
                </li>
              </ul>
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>