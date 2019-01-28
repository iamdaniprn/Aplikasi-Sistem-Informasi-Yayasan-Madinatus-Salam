<?php
if(isset($_GET['id'])){
	 include('koneksi.php');
	 $id = $_GET['id'];
	  $cek = mysql_query("SELECT id_gambar FROM galeri WHERE id_gambar='$id'") or die(mysql_error());
	 if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	 }else{
		$del = mysql_query("DELETE FROM galeri WHERE id_gambar='$id'");
		echo "<script language='JavaScript'>
				alert('Data Berhasil Dihapus');
				document.location='galeri.php';
			</script>";
	 }
}
?>