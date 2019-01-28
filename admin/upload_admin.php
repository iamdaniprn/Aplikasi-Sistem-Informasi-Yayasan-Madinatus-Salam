<div>
<?php
ini_set('date.timezone', 'Asia/Jakarta');
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";

	$username=$_POST['username'];
	$password=$_POST['password'];
			//catat data file yang berhasil di upload
			$upload=mysql_query("INSERT INTO admin VALUES('','$username','$password')");
			
			if($upload){
				//jika berhasil
				?>
                     <script language="JavaScript">
						alert('Data Berhasil Ditambahkan.');
						window.location=history.go(-2);
					</script>
				<?php
			}else{
				?>
                    <script language="JavaScript">
						alert('Data Gagal Ditambahkan.');
						window.location=history.go(-1);
					</script>
				<?php
			}
	}
?>
</div>