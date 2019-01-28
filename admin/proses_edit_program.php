<div>
<?php
ini_set('date.timezone', 'Asia/Jakarta');
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";
	$id=$_POST['id_program'];
	$nama_program=$_POST['nama_program'];
	$des=$_POST['des'];
	$nama_gambar=$_FILES['gambar']['name'];

		//definisikan variabel file dan alamat file
		$uploaddir='./galeri/';
		$alamatfile=$uploaddir.$nama_gambar;

		//periksa jika proses upload berjalan sukses
		if (move_uploaded_file($_FILES['gambar']['tmp_name'],$alamatfile))
		{
			//catat data file yang berhasil di upload
			$upload=mysql_query("UPDATE program SET 
													nama_program='$nama_program', 
													deskripsi='$des',
													gambar='$alamatfile' WHERE id_program = '$id'");
			
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
?>
</div>