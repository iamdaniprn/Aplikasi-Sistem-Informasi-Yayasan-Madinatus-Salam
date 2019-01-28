<div>
<?php
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";

	$nama           = $_POST['nama_profil'];
	$isi            = $_POST['isi'];
	$nama_gambar=$_FILES['gambar']['name'];

	if($nama != null && $isi != null)
	{

		//definisikan variabel file dan alamat file
		$uploaddir='./galeri/';
		$alamatfile=$uploaddir.$nama_gambar;
		move_uploaded_file($_FILES['gambar']['tmp_name'],$alamatfile);

		//periksa jika proses upload berjalan sukses
		//catat data file yang berhasil di upload
			$upload=mysql_query("INSERT INTO profil VALUES('','$nama','$isi', '$alamatfile')");
			
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