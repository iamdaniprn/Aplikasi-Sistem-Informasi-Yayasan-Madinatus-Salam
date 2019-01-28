<?php
session_start();
	require_once("koneksi.php");
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$cekuser = mysql_query("SELECT * FROM admin WHERE username = '$username'");
	$jumlah = mysql_num_rows($cekuser);
	$hasil = mysql_fetch_array($cekuser);
	if($jumlah == 0) {
		echo "<script> document.location.href='ceklogin2.php'; </script>";
	} else {
			if($pass <> $hasil['password']) {
				echo "<script> document.location.href='ceklogin.php'; </script>";
			} else {
				$_SESSION['username'] = $hasil['username'];
				header('location:home.php');
			}
	}
?>