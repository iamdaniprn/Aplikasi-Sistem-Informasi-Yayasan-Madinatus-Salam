<div>
<?php
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";

	$username           = $_POST['username'];
	$password           = $_POST['password'];
		
		$upload=mysql_query("UPDATE admin set username ='$username',
											  password='$password' where id_admin = 1 ");
		
		if($upload){
			//jika berhasil
			?>
                 <script language="JavaScript">
					alert('Akun Berhasil Diperbaharui.');
					document.location='index.html';
				</script>
			<?php
		}else{
			?>
                 <script language="JavaScript">
					alert('Akun Gagal Diperbaharui.');
					document.location='ganti_akun.php';
				</script>
			<?php
		}
}
?>
</div>