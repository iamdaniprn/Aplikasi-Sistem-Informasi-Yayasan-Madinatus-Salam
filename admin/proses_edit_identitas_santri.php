<div>
<?php
ini_set('date.timezone', 'Asia/Jakarta');
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";

	$id_santri      = $_POST['id_santri'];
	$nama           = $_POST['nama'];
	$jns            = $_POST['jns_kelamin'];
	$tempat         = $_POST['tempat_lahir'];
	$tanggal        = $_POST['tanggal'];
	$bulan			= $_POST['bulan'];
	$tahun			= $_POST['tahun'];
	$alamat         = $_POST['alamat'];
	$rt             = $_POST['rt'];
	$rw             = $_POST['rw'];
	$desa           = $_POST['desa'];
	$kec            = $_POST['kec'];
	$kab            = $_POST['kab'];
	$provinsi       = $_POST['provinsi'];
	$agama          = $_POST['agama'];
	$kewarganegaraan= $_POST['kewarganegaraan'];
	$anak_ke        = $_POST['anak_ke'];
	$jml_sdr_kandung= $_POST['jml_sdr_kandung'];
	$jml_sdr_tiri   = $_POST['jml_sdr_tiri'];
	$jml_sdr_angkat = $_POST['jml_sdr_angkat'];
	$status_anak    = $_POST['status_anak'];
	$bahasa         = $_POST['bahasa'];
	$no_hp          = $_POST['no_hp'];	

	if($nama!=null && $jns!=null && $tempat!=null && $tanggal!=null && $bulan!=null && $tahun!=null && $alamat!=null && $rt!=null && $rw!=null && $desa!=null && $kec!=null && $kab!=null && $provinsi!=null && $agama!=null && $kewarganegaraan!=null && $anak_ke!=null && $jml_sdr_kandung!=null && $jml_sdr_tiri!=null && $jml_sdr_angkat!=null && $status_anak!=null && $bahasa!=null && $no_hp!=null){

		//catat data file yang berhasil di upload
		$upload=mysql_query("UPDATE data_santri set  nama_santri='$nama', 
													 jenis_kelamin='$jns', 
													 tempat_lahir='$tempat',
													 tanggal_lahir='$tanggal' '-$bulan' '-$tahun',
													 alamat='$alamat',
													 rt='$rt',
													 rw='$rw',
													 desa='$desa',
													 kec='$kec',
													 kab='$kab',
													 provinsi='$provinsi',
													 agama='$agama',
													 kewarganegaraan='$kewarganegaraan',
													 anak_ke='$anak_ke',
													 jml_sdr_kandung='$jml_sdr_kandung',
													 jml_sdr_tiri='$jml_sdr_tiri',
													 jml_sdr_angkat='$jml_sdr_angkat',
													 status_anak='$status_anak',
													 bahasa='$bahasa',
													 no_hp='$no_hp' where id_santri = '$id_santri'");
		
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