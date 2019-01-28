<div>
<?php
ini_set('date.timezone', 'Asia/Jakarta');
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$keterangan=$_POST['keterangan'];
	$nama_gambar=$_FILES['gambar']['name'];

		//definisikan variabel file dan alamat file
		$uploaddir='./gambar/';
		$alamatfile=$uploaddir.$nama_gambar;

		//periksa jika proses upload berjalan sukses
		if (move_uploaded_file($_FILES['gambar']['tmp_name'],$alamatfile))
		{
			//catat data file yang berhasil di upload
			$upload=mysql_query("UPDATE susunan set nama='$nama', keterangan='$keterangan', gambar='$alamatfile' where id_susunan = '$id'");
			
			if($upload){
				//jika berhasil
				?>
                     <script language="JavaScript">
						alert('Data Berhasil Diperbaharui.');
						document.location='susunan.php';
					</script>
				<?php
			}else{
				?>
                    <script language="JavaScript">
						alert('Data Gagal Ditambahkan.');
						document.location='susunan.php';
					</script>
				<?php
			}
		}else{
			?>
			<script language="JavaScript">
					alert('Gambar belum dimasukkan, Mohon ulangi kembali.');
					document.location='artikel.php';
				</script>
			<?php
		}
	}
?>
</div>