<?php
if(isset($_GET['id'])){
	 include('koneksi.php');
	 $id = $_GET['id'];
	  $cek = mysql_query("SELECT id_artikel FROM artikel WHERE id_artikel='$id'") or die(mysql_error());
	 if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	 }else{
		$del = mysql_query("DELETE FROM artikel WHERE id_artikel='$id'");
		echo "<script language='JavaScript'>
				alert('Data Berhasil Dihapus');
				document.location='artikel.php';
			</script>";
	 }
}
?>