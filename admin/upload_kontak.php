<div>
<?php
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";

	$nama_gambar=$_FILES['gambar']['name'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	$no_telp=$_POST['no_telp'];

		//definisikan variabel file dan alamat file
		$uploaddir='./kontak/';
		$alamatfile=$uploaddir.$nama_gambar;

		//periksa jika proses upload berjalan sukses
		if (move_uploaded_file($_FILES['gambar']['tmp_name'],$alamatfile))
		{
			//catat data file yang berhasil di upload
			$upload=mysql_query("INSERT INTO kontak VALUES('','$alamatfile','$alamat','$email','$no_telp')");
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
						alert('Data Gagal Diperbaharui.');
						window.location=history.go(-1);
					</script>
				<?php
			}
		}else{
			?>
                <script language="JavaScript">
						alert('Gambar belum dimasukkan, Mohon ulangi kembali.');
						document.location='galeri.php';
					</script>
				<?php
		}
	}
?>
</div>