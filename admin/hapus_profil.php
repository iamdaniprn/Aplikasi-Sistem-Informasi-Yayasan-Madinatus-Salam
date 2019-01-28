<?php
if(isset($_GET['id'])){
	 include('koneksi.php');
	 $id = $_GET['id'];
	  $cek = mysql_query("SELECT id_profil FROM profil WHERE id_profil='$id'") or die(mysql_error());
	 if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	 }else{
		$del = mysql_query("DELETE FROM profil WHERE id_profil='$id'");
		echo "<script language='JavaScript'>
				alert('Profil Berhasil Dihapus');
				document.location='profil.php';
			</script>";
	 }
}
?>