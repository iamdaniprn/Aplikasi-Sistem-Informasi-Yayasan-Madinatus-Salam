<div>
<?php
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";

	$ket=$_POST['ket'];
	$nama_gambar=$_FILES['gambar']['name'];

	if($ket != null && $nama_gambar != null)
	{
		//definisikan variabel file dan alamat file
		$uploaddir='./galeri/';
		$alamatfile=$uploaddir.$nama_gambar;

		//periksa jika proses upload berjalan sukses
		if (move_uploaded_file($_FILES['gambar']['tmp_name'],$alamatfile))
		{
			//catat data file yang berhasil di upload
			$upload=mysql_query("INSERT INTO galeri VALUES('','$alamatfile','$ket')");
			
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
		}else{
			?>
                <script language="JavaScript">
					alert('Gambar Belum Dimasukkan');
					window.location=history.go(-1);
				</script>
			<?php
		}
	}
	else{
		?>
	        <script language="JavaScript">
				alert('Data Belum Lengkap');
				window.location=history.go(-1);
			</script>
		<?php
	}

	}
?>
</div>