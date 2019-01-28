<div>
<?php
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";

	$nama           = $_POST['nama_program'];
	$des            = $_POST['deskripsi'];
	$nama_gambar=$_FILES['gambar']['name'];

		//definisikan variabel file dan alamat file
		$uploaddir='./galeri/';
		$alamatfile=$uploaddir.$nama_gambar;

		//periksa jika proses upload berjalan sukses
		if (move_uploaded_file($_FILES['gambar']['tmp_name'],$alamatfile))
		{
			//catat data file yang berhasil di upload
			$upload=mysql_query("INSERT INTO program VALUES('','$nama','$des', '$alamatfile')");
			
			if($upload){
				//jika berhasil
				?>
                     <script language="JavaScript">
						alert('Data Berhasil Ditambahkan.');
						document.location='program.php';
					</script>
				<?php
			}else{
				?>
                    <script language="JavaScript">
						alert('Data Gagal Ditambahkan.');
						document.location='tambah_program.php';
					</script>
				<?php
			}
		}else{
			//jika gagal
			?>
                <script language="JavaScript">
					alert('Gambar belum dimasukkan');
					window.location=history.go(-1);
				</script>
			<?php
		}
	}
?>
</div>