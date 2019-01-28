<div>
<?php
ini_set('date.timezone', 'Asia/Jakarta');
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";
	$id=$_POST['id'];
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
			$upload=mysql_query("UPDATE artikel SET 
													judul='$judul', 
													gambar='$alamatfile', 
													des='$des',
													tanggal='$tanggal' WHERE id_artikel = '$id'");
			
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
						alert('Data Gagal Ditambahkan.');
						window.location=history.go(-1);
					</script>
				<?php
			}
		}else{
			?>
			<script language="JavaScript">
					alert('Gambar belum dimasukkan, Mohon ulangi kembali.');
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