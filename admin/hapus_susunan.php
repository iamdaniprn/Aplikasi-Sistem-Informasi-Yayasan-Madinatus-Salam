<?php
if(isset($_GET['id'])){
	 include('koneksi.php');
	 $id = $_GET['id'];
	  $cek = mysql_query("SELECT id_susunan FROM susunan WHERE id_susunan='$id'") or die(mysql_error());
	 if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	 }else{
		$del = mysql_query("DELETE FROM susunan WHERE id_susunan='$id'");
		echo "<script language='JavaScript'>
				alert('Data Berhasil Dihapus');
				document.location='susunan.php';
			</script>";
	 }
}
?>