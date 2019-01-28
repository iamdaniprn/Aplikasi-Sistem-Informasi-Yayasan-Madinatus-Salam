<div>
<?php
//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
if (isset($_POST['submit']))
{
	include "koneksi.php";

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
	$nama_gambar    =$_FILES['gambar']['name'];

		//definisikan variabel file dan alamat file
		$uploaddir='./profil/';
		$alamatfile=$uploaddir.$nama_gambar;

		//periksa jika proses upload berjalan sukses
		if (move_uploaded_file($_FILES['gambar']['tmp_name'],$alamatfile))
		{
			//catat data file yang berhasil di upload
			$upload=mysql_query("INSERT INTO data_santri VALUES('','$nama','$jns','$tempat','$tanggal-' '$bulan-' '$tahun','$alamat','$rt','$rw','$desa','$kec','$kab','$provinsi' ,'$agama','$kewarganegaraan','$anak_ke','$jml_sdr_kandung','$jml_sdr_tiri','$jml_sdr_angkat','$status_anak','$bahasa','$no_hp','$alamatfile')");	

			$upload2=mysql_query("INSERT INTO identitas_ayah VALUES('','','','','','','','','','')");

			$upload2=mysql_query("INSERT INTO identitas_ibu VALUES('','','','','','','','','','')");
			
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
						alert('Data Gagal Ditambahkan.');
						window.location=history.go(-1);
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