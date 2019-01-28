<div>
<?php
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";

	$id_santri =$_POST['id_santri'];
	$nama_gambar=$_FILES['gambar']['name'];

		//definisikan variabel file dan alamat file
		$uploaddir='./profil/';
		$alamatfile=$uploaddir.$nama_gambar;

		//periksa jika proses upload berjalan sukses
		if (move_uploaded_file($_FILES['gambar']['tmp_name'],$alamatfile))
		{
			//catat data file yang berhasil di upload
			$upload=mysql_query("UPDATE data_santri set gambar='$alamatfile' where id_santri = '$id_santri'");
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