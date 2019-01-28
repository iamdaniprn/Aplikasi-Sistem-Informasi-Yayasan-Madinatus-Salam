<div>
<?php
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";

	$id=$_POST['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];
			//catat data file yang berhasil di upload
			$upload=mysql_query("UPDATE admin set username='$username', password='$password' where id_admin = '$id'");
			if($upload){
				//jika berhasil
				?>
                     <script language="JavaScript">
						alert('Data Berhasil Diperbaharui.');
						window.location=history.go(-2);
					</script>
				<?php
			}else{
				?>
                    <script language="JavaScript">
						alert('Data Gagal Diperbaharui.');
						window.location=history.go(-1);
					</script>
				<?php
			}
		}
?>
</div>