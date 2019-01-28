<?php
if(isset($_GET['id'])){
	 include('koneksi.php');
	 $id = $_GET['id'];
	  $cek = mysql_query("SELECT id_program FROM program WHERE id_program='$id'") or die(mysql_error());
	 if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	 }else{
		$del = mysql_query("DELETE FROM program WHERE id_program='$id'");
		echo "<script language='JavaScript'>
				alert('Program Berhasil Dihapus');
				document.location='program.php';
			</script>";
	 }
}
?>