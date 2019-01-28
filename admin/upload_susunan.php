<div>
<?php
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";

	$nama           = $_POST['nama'];
	$keterangan     = $_POST['keterangan'];
	
	$nama_gambar=$_FILES['gambar']['name'];

		//definisikan variabel file dan alamat file
		$uploaddir='./gambar/';
		$alamatfile=$uploaddir.$nama_gambar;

		//periksa jika proses upload berjalan sukses
		if (move_uploaded_file($_FILES['gambar']['tmp_name'],$alamatfile))
		{
			//catat data file yang berhasil di upload
			$upload=mysql_query("INSERT INTO susunan VALUES('','$nama','$keterangan','$alamatfile')");
			
			if($upload){
				//jika berhasil
				?>
                     <script language="JavaScript">
						alert('Data Berhasil Ditambahkan.');
						document.location='susunan.php';
					</script>
				<?php
			}else{
				?>
                    <script language="JavaScript">
						alert('Data Gagal Ditambahkan.');
						document.location='tambah_susunan.php';
					</script>
				<?php
			}
		}else{
			//jika gagal
			?>
                <script language="JavaScript">
					alert('Data Gagal Ditambahkan.');
					document.location='tambah_kepengurusan.php';
				</script>
			<?php
		}
	}
?>
</div>