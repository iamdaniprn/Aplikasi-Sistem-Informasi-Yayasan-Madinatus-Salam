<div>
<?php
ini_set('date.timezone', 'Asia/Jakarta');
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";

	$id_santri        = $_POST['id_santri'];
	$nama_ayah        = $_POST['nama_ayah'];
	$tempat_lahir     = $_POST['tempat_lahir'];
	$tanggal          = $_POST['tanggal'];
	$bulan			  = $_POST['bulan'];
	$tahun			  = $_POST['tahun'];
	$agama            = $_POST['agama'];
	$kewarganegaraan  = $_POST['kewarganegaraan'];
	$pendidikan       = $_POST['pendidikan'];
	$pekerjaan        = $_POST['pekerjaan'];
	$alamat           = $_POST['alamat'];
	$no_hp            = $_POST['no_hp'];

	if($nama_ayah != null && $tempat_lahir != null && $tanggal != null && $tanggal != null && $bulan != null && $tahun != null && $agama != null && $kewarganegaraan != null && $pendidikan != null && $pekerjaan != null && $alamat != null && $no_hp != null)
	{
		//catat data file yang berhasil di upload
		$upload=mysql_query("UPDATE identitas_ayah set 
												nama_ayah ='$nama_ayah',
					 							tempat_lahir ='$tempat_lahir',
					 							tgl_lahir ='$tanggal-' '$bulan-' '$tahun',
					 							agama ='$agama',
					 							kewarganegaraan ='$kewarganegaraan',
					 							pendidikan ='$pendidikan',
					 							pekerjaan ='$pekerjaan',
					 							alamat ='$alamat',
					 							no_hp ='$no_hp' where id_santri = '$id_santri'");
		
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