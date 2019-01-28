<?php
if(isset($_GET['id'])){
	 include('koneksi.php');
	 $id = $_GET['id'];
	  $cek = mysql_query("SELECT id_santri FROM data_santri WHERE id_santri='$id'") or die(mysql_error());
	  $cek2 = mysql_query("SELECT id_santri FROM identitas_ayah WHERE id_santri='$id'") or die(mysql_error());
	  $cek3 = mysql_query("SELECT id_santri FROM identitas_ibu WHERE id_santri='$id'") or die(mysql_error());

	 if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	 }else{
		$del1 = mysql_query("DELETE FROM data_santri WHERE id_santri='$id'");
		$del2 = mysql_query("DELETE FROM identitas_ayah WHERE id_santri='$id'");
		$del3 = mysql_query("DELETE FROM identitas_ibu WHERE id_santri='$id'");
		echo "<script language='JavaScript'>
				alert('Data Berhasil Dihapus');
				document.location='data_santri.php';
			</script>";
	 }
}
?>