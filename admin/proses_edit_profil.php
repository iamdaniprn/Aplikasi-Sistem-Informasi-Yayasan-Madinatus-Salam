<div>
<?php
ini_set('date.timezone', 'Asia/Jakarta');
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";
	$id=$_POST['id_profil'];
	$nama_profil=$_POST['nama_profil'];
	$isi=$_POST['isi'];
	$nama_gambar=$_FILES['gambar']['name'];

	if($nama_profil != null && $isi != null)
	{

		//definisikan variabel file dan alamat file
		$uploaddir='./galeri/';
		$alamatfile=$uploaddir.$nama_gambar;
		move_uploaded_file($_FILES['gambar']['tmp_name'],$alamatfile);

		//periksa jika proses upload berjalan sukses
			//catat data file yang berhasil di upload
			$upload=mysql_query("UPDATE profil SET 
													nama_profil='$nama_profil', 
													isi='$isi',
													gambar='$alamatfile' WHERE id_profil = '$id'");
			
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