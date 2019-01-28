<div>
<?php
ini_set('date.timezone', 'Asia/Jakarta');
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";

	$judul=$_POST['judul'];
	$des=$_POST['des'];
	$tanggal = date("Y-m-d H:i:s");
	$nama_gambar=$_FILES['gambar']['name'];

	if($judul!= null && $des != null && $tanggal != null && $nama_gambar != null )
	{

		//definisikan variabel file dan alamat file
		$uploaddir='./artikel/';
		$alamatfile=$uploaddir.$nama_gambar;

		//periksa jika proses upload berjalan sukses
		if (move_uploaded_file($_FILES['gambar']['tmp_name'],$alamatfile))
		{
			//catat data file yang berhasil di upload
			$upload=mysql_query("INSERT INTO artikel VALUES('','$judul','$alamatfile','$des','$tanggal')");
			
			if($upload){
				//jika berhasil
				?>
                     <script language="JavaScript">
						alert('Data Berhasil Ditambahkan.');
						document.location='artikel.php';
					</script>
				<?php
			}else{
				?>
                    <script language="JavaScript">
						alert('Data Gagal Ditambahkan.');
						document.location='tambah_artikel.php';
					</script>
				<?php
			}
		}else{
			//jika gagal
			echo "<p>Proses tambah gambar gagal, kode error = " . $_FILES['location']['error']."</p>";
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