<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "kerja_praktek";
$koneksi = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal! ');
mysql_select_db($database);
?>