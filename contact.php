<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>Sistem Informasi | Yayasan Madinatus Salam</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="iThemesLab">
  <link rel="icon" type="image/png" href="gambar/logo.jpg" />


  <!-- Bootstrap CSS  -->
  <?php
	include ('link_css.php');
  ?>
</head>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Start Header -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
	  <?php
		include ('top_bar.php');
	  ?>
      <!-- End Top Bar -->

      <!-- Start Header ( Logo & Naviagtion ) -->
      <div class="navbar navbar-default navbar-top" style="background: black">
         <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.php">Sistem Informasi Yayasan Madinatus Salam
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="index.php">BERANDA</a>
              </li>
              <li>
                <a href="profil.php">PROFIL</a>
              </li>
              <li>
                <a href="artikel.php">ARTIKEL</a>
              </li>
              <li>
                <a href="program.php">PROGRAM</a>
              </li>
              <li>
                <a href="galeri.php">GALERI</a>
              </li>
      			  <li>
      				  <a class="active" href="contact.php">KONTAK KAMI</a>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

      </div>
      <!-- End Header ( Logo & Naviagtion ) -->

    </header>
    <!-- End Header -->

    
    <!-- Start Content -->
    <div id="content">
      <div class="container">

        <div class="row">

          <div class="col-md-8">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Lokasi Kami</span></h4>

            <!-- Start Contact Form -->
            <?php 
              include("koneksi.php");
              $sql=mysql_query("select * from kontak") or die(mysql_error());
              while($row=mysql_fetch_array($sql))
              {
                echo"<img src='admin/kontak/.$row[1]' class='img-responsive' alt='portfolio img 1'><br>";
              }
            ?>
            <!-- End Contact Form -->

          </div>

          <div class="col-md-4">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Sedekat Sentuhan</span></h4>

            <!-- Some Info -->
            <p style="text-align: justify;">Hubungi kami hanya sedekat dengan sentuhan jari, kami selalu hadir untuk melayani kebutuhan pendidikan islami yang khususnya di sekolah menengah maupun di perguruan tinggi sebagai bentuk partisipasi dalam rangka mencerdaskan bangsa.</p>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:10px;"></div>

            <!-- Info - Icons List -->
            

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:15px;"></div>

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Informasi Kontak</span></h4>

            <!-- Info - List -->
            <ul class="icons-list">
            <?php 
              include("koneksi.php");
              $sql=mysql_query("select * from kontak") or die(mysql_error());
              while($row=mysql_fetch_array($sql))
              {
                ?>
                <li><i class="fa fa-globe">  </i> <strong>Alamat:</strong> <?php echo $row['alamat']?></li>
                <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> <?php echo $row['email']?></li>
                <li><i class="fa fa-mobile"></i> <strong>Nomor Telepon:</strong> <?php echo $row['no_telp']?></li>
                <?php
              }
            ?>
            </ul>

          </div>

        </div>

      </div>
    </div>
    <!-- End content -->


    <!-- Start Footer -->
    <footer>
      <?php
	    include('footer.php');
	  ?>
    </footer>
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Style Switcher -->
  <div class="switcher-box">
    <a class="open-switcher show-switcher"><i class="fa fa-cog fa-2x"></i></a>
    <h4>Style Switcher</h4>
    <span>Pilih Menu</span>
    <ul class="">
      <li>
        <a href="index.php">BERANDA</a>
      </li>
      <li>
        <a href="profil.php">PROFIL</a>
      </li>
      <li>
        <a href="#">BERITA</a>
      </li>
      <li>
        <a class="active"  href="program.php">PROGRAM</a>
      </li>
      <li>
        <a href="contact.php">KONTAK KAMI</a>
      </li>
    </ul>
    
    <span>Menu</span>

    <span>12 Warna Skin</span>
    <ul class="colors-list">
      <li>
        <a onClick="setActiveStyleSheet('blue'); return false;" title="Blue" class="blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('sky-blue'); return false;" title="Sky Blue" class="sky-blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('cyan'); return false;" title="Cyan" class="cyan"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('jade'); return false;" title="Jade" class="jade"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('green'); return false;" title="Green" class="green"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('purple'); return false;" title="Purple" class="purple"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('pink'); return false;" title="Pink" class="pink"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('red'); return false;" title="Red" class="red"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('orange'); return false;" title="Orange" class="orange"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('yellow'); return false;" title="Yellow" class="yellow"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('peach'); return false;" title="Peach" class="peach"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('beige'); return false;" title="Biege" class="beige"></a>
      </li>
    </ul>
    <span>Top Bar Color</span>
    <select id="topbar-style" class="topbar-style">
      <option value="1">Light (Default)</option>
      <option value="2">Dark</option>
      <option value="3">Color</option>
    </select>
    <span>Layout Style</span>
    <select id="layout-style" class="layout-style">
      <option value="1">Wide</option>
      <option value="2">Boxed</option>
    </select>
    <span>Patterns for Boxed Version</span>
    <ul class="bg-list">
      <li>
        <a href="#" class="bg1"></a>
      </li>
      <li>
        <a href="#" class="bg2"></a>
      </li>
      <li>
        <a href="#" class="bg3"></a>
      </li>
      <li>
        <a href="#" class="bg4"></a>
      </li>
      <li>
        <a href="#" class="bg5"></a>
      </li>
      <li>
        <a href="#" class="bg6"></a>
      </li>
      <li>
        <a href="#" class="bg7"></a>
      </li>
      <li>
        <a href="#" class="bg8"></a>
      </li>
      <li>
        <a href="#" class="bg9"></a>
      </li>
      <li>
        <a href="#" class="bg10"></a>
      </li>
      <li>
        <a href="#" class="bg11"></a>
      </li>
      <li>
        <a href="#" class="bg12"></a>
      </li>
      <li>
        <a href="#" class="bg13"></a>
      </li>
      <li>
        <a href="#" class="bg14"></a>
      </li>
    </ul>
  </div>

  <script type="text/javascript" src="js/script.js"></script>

  <script type="text/javascript">
    //Contact Form

    $('#submit').click(function() {

      $.post("php/send.php", $(".contact-form").serialize(), function(response) {
        $('#success').html(response);
      });
      return false;

    });
  </script>

</body>

</html>