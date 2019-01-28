<?php
if(isset($_GET['id'])){
	 include('koneksi.php');
	 $id = $_GET['id'];
	  $cek = mysql_query("SELECT id_admin FROM admin WHERE id_admin='$id'") or die(mysql_error());
	 if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	 }else{
		$del = mysql_query("DELETE FROM admin WHERE id_admin='$id'");
		echo "<script language='JavaScript'>
				alert('Data Berhasil Dihapus');
				window.location=history.go(-1);
			</script>";
	 }
}
?>