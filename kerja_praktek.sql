-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 01:23 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kerja_praktek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `des` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `gambar`, `des`, `tanggal`) VALUES
(4, '7 Nama Neraka dan Ngerinya Azab di Dalamnya', './artikel/makah3.jpg', 'Nama Neraka â€“ Dunia merupakan tempat persinggahan sementara yang harus dilalui oleh manusia sebelum bisa sampai ke kehidupan yang kekal yaitu alam akhirat. Di dunia manusia akan diuji dengan banyak permasalahan, dan dari ujian â€“ ujian ini, manusia akan dihitung amal perbuatannya untuk kemudian ditentukan tempat kehidupan akhirnya di alam Akhirat nanti.\r\n\r\nManusia yang memiliki timbangan amal perbuatan baik lebih besar akan memiliki kehidupan akhirat yang baik yaitu di surga, sedangkan manusia yang memiliki timbangan amal perbuatan buruk yang lebih besar akan memiliki kehidupan akhirat yang amat sangat buruk yaitu di neraka.\r\n\r\nBerbicara mengenai kehidupan di akhirat, kali ini kami akan membagikan sedikit informasi mengenai 7 nama neraka yang ada di alam akhirat kelak. Apa sajakah nama neraka â€“ neraka tersebut dan seperti apakah isinya? Berikut informasi lengkapnya telah kami siapkan untuk Anda :', '2017-06-18'),
(8, 'Dunia dan Neraka', './artikel/checklist_email_web_cabestan-710x744.jpg', 'Nama Neraka Ã¢â‚¬â€œ Dunia merupakan tempat persinggahan sementara yang harus dilalui oleh manusia sebelum bisa sampai ke kehidupan yang kekal yaitu alam akhirat. Di dunia manusia akan diuji dengan banyak permasalahan, dan dari ujian Ã¢â‚¬â€œ ujian ini, manusia akan dihitung amal perbuatannya untuk kemudian ditentukan tempat kehidupan akhirnya di alam Akhirat nanti.\r\n\r\nManusia yang memiliki timbangan amal perbuatan baik lebih besar akan memiliki kehidupan akhirat yang baik yaitu di surga, sedangkan manusia yang memiliki timbangan amal perbuatan buruk yang lebih besar akan memiliki kehidupan akhirat yang amat sangat buruk yaitu di neraka.\r\n\r\nBerbicara mengenai kehidupan di akhirat, kali ini kami akan membagikan sedikit informasi mengenai 7 nama neraka yang ada di alam akhirat kelak. Apa sajakah nama neraka Ã¢â‚¬â€œ neraka tersebut dan seperti apakah isinya? Berikut informasi lengkapnya telah kami siapkan untuk Anda :', '2017-06-18'),
(9, 'Belajar Tahfid', './artikel/11.jpg', '<p>Belajar Tahfid itu mengasikan</p>\r\n', '2017-10-28');

-- --------------------------------------------------------

--
-- Table structure for table `data_santri`
--

CREATE TABLE `data_santri` (
  `id_santri` int(3) NOT NULL,
  `nama_santri` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `kewarganegaraan` varchar(20) DEFAULT NULL,
  `anak_ke` int(2) DEFAULT NULL,
  `jml_sdr_kandung` int(2) DEFAULT NULL,
  `jml_sdr_tiri` int(2) DEFAULT NULL,
  `jml_sdr_angkat` int(2) DEFAULT NULL,
  `status_anak` varchar(20) DEFAULT NULL,
  `bahasa` varchar(50) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_santri`
--

INSERT INTO `data_santri` (`id_santri`, `nama_santri`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `rt`, `rw`, `desa`, `kec`, `kab`, `provinsi`, `agama`, `kewarganegaraan`, `anak_ke`, `jml_sdr_kandung`, `jml_sdr_tiri`, `jml_sdr_angkat`, `status_anak`, `bahasa`, `no_hp`, `gambar`) VALUES
(1, 'Danil Kardia', 'Laki-Laki', 'Ciamis', '13-Juli-1994', 'z', 0, 0, 'z', 'kk', 'Ciamis', 'z', 'z', 'z', 0, 0, 0, 0, 'Lainnya', 'z', 'z', './profil/ciri-mata-katarak.jpg'),
(3, 'Ahmad', 'Laki-Laki', 'Bogor', '15-September-1996', 'w', 0, 0, 'w', 'w', 'Bogor', 'w', 'w', 'w', 0, 0, 0, 0, 'Yatim Piatu', 'w', 'w', './profil/uji-mata-bayi (Katanya digambar dibawah ada bayi ya, apakah anda melihatnya).jpg'),
(5, 'Dani Purnama', 'Laki-Laki', 'Ciamis', '13-Juli-1995', 'Ciamis', 0, 0, 'c', 'c', 'Ciamis', 'c', 'c', 'c', 0, 0, 0, 0, 'Piatu', 'c', 'c', './profil/download.png');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_gambar` int(3) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_gambar`, `gambar`, `ket`) VALUES
(1, './galeri/4.jpg', 'Penerimaan Santri Baru'),
(2, './galeri/3.JPG', 'Acara Sholawatan'),
(4, './galeri/makah3.jpg', 'Mesjid Makkah'),
(5, './galeri/1.JPG', 'Pengenalan Budaya');

-- --------------------------------------------------------

--
-- Table structure for table `identitas_ayah`
--

CREATE TABLE `identitas_ayah` (
  `id_santri` int(3) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `pendidikan` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL,
  `alamat` text,
  `no_hp` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas_ayah`
--

INSERT INTO `identitas_ayah` (`id_santri`, `nama_ayah`, `tempat_lahir`, `tgl_lahir`, `agama`, `kewarganegaraan`, `pendidikan`, `pekerjaan`, `alamat`, `no_hp`) VALUES
(1, 'z', 'z', '13-Januari-1915', 'z', 'z', 'z', 'z', 'z', 'z'),
(3, 'w', 'w', '3-Februari-1916', 'w', 'w', 'w', 'w', 'w', 'w'),
(5, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `identitas_ibu`
--

CREATE TABLE `identitas_ibu` (
  `id_santri` int(3) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) DEFAULT NULL,
  `pendidikan` varchar(30) DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL,
  `alamat` text,
  `no_hp` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas_ibu`
--

INSERT INTO `identitas_ibu` (`id_santri`, `nama_ibu`, `tempat_lahir`, `tgl_lahir`, `agama`, `kewarganegaraan`, `pendidikan`, `pekerjaan`, `alamat`, `no_hp`) VALUES
(1, 'z', 'z', '19-Maret-1917', 'z', 'z', 'z', 'z', 'z', 'z'),
(3, '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(1) NOT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `lokasi`, `alamat`, `email`, `no_telp`) VALUES
(3, './kontak/lokasi.png', 'Komplek Permata Biru Blok R No. 135 RT 03 RW 20 Cinunuk', 'msb_yayasan@yahoo.co.id', '022-8782200');

-- --------------------------------------------------------

--
-- Table structure for table `login_santri`
--

CREATE TABLE `login_santri` (
  `id_santri` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_santri`
--

INSERT INTO `login_santri` (`id_santri`, `username`, `password`) VALUES
(1, '1147050034', '1147050034');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(2) NOT NULL,
  `nama_profil` varchar(100) DEFAULT NULL,
  `isi` text,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_profil`, `isi`, `gambar`) VALUES
(1, 'Selayang Pandang ', '<p><strong>Yayasan Madinatussalam&nbsp;</strong>Adalah yayasan sosial dan pendidikan yang berasaskan Pancasila dan Undang-Undang Dasar 1945. Yayasan ini berdiri sejak tahun 2012 di Kabupaten Bandung yang disahkan dengan Akte notaris Drs. Juher Zaidir, S.H. M.Kn., : No 10 Tanggal 12 Oktober 2012.&nbsp;<br />\r\n<br />\r\nYayasan Madinatus Salam Bandung merupakan yayasan yang memiliki dasar kesamaan kegiatan/ Profesi/ Fungsi/ Agama/ Kepercayaan kepada Tuhan Yang Maha Esa yang memiliki tujuan umum untuk: Menyelenggarakan pengajian Khotmil Qur&rsquo;an, Pembebasan Rekening Listrik Masjid, Pemberian Insentif para petugas kebersihan dan Pemeliharaan Masjid, Pesantren anak-anak SD, SMP, SMA sampai Perguruan Tinggi, santunan pada Fakir Miskin Anak Jalanan dan Yatim Piatu. Sifat khususnya adalah bidang sosial keagamaan sesuai denga AD/ART Yayasan Madinatus Salam Bandung.&nbsp;<br />\r\n<br />\r\nYayasan ini telah memiliki NPWP lembaga atau yayasan No. 03.268.752.7.444.000 tanggal 01 November 2012 dengan periode kepengurusan dari tahun 2013 &ndash; 2018 selama 5 tahun dengan ketua: Nase Saepudin Zuhri, S.Ag., MM. Sekretaris: Joni Anwar, SE dan Bendahara: Rosmana yang memiliki Kantor beralamat di Komplek Permata Biru Blok R No. 135 RT 03 RW 20 Cinunuk &ndash; Cileunyi Kabupaten Bandung 40393 Tlp. 022-8782200 HP. 0857 2290 9574, Yang didukung oleh fasilitas kantor yang dapat mendukung aktivitas yayasan kami.&nbsp;<br />\r\n<br />\r\nKepengurusan yayasan ini berpusat di Komplek Permata Biru Blok R No. 135 RT 03 RW 20 Cinunuk &ndash; Cileunyi Kabupaten Bandung dan hingga saat ini belum memiliki cabang dengan jumlah anggota 12 orang.&nbsp;<br />\r\n<br />\r\nDemikian selayang pandang Yayasan Madinatus Salam Bandung.</p>\r\n', './galeri/'),
(2, 'Penjelasan Logo', '<p><strong>Kata Madinah:&nbsp;</strong>Kata &ldquo;Madinatus Salam&rdquo; terambil dari kata &lsquo;Madinah&rsquo; dan &lsquo;As-Salam&rsquo;. Madinah sendiri adalah kota suci kedua bagi umat Islam setelah kota Mekkah. Jika kota Mekkah mendapat gelar Al-Mukarommah (Yang Dimuliakan), kota Madinah mendapat gelar Al-Munawwarah (Yang Tercerahkan). Kota Madinah menjadi &ldquo;cerah&rdquo; karena di sanalah untuk pertama kalinya terbentuk peradaban umat manusia yang sangat maju dalam segala bidang, baik bidang ilmu, agama, sosial, ekonomi, politik, kebudayaan, dan lain-lain. Maka dari itu, masyarakat Madinah menjadi cikal bakal dari pembentukan Masyarakat Madani (masyarakat yang berperadaban). Singkatnya, dengan mengambil nama Madinah, diharapakan yayasan ini bisa membentuk masyarakat yang madani, terutama dalam bidang agama dan sosial kemasyarakatan yang menjadi paragdima yayasan ini.&nbsp;<br />\r\n<br />\r\n<strong>Kata Salam:&nbsp;</strong>Secara bahasa kata &lsquo;Salam&rsquo; berarti kedamaian, keselamatan, kesejahteraan, keselarasan, dan keharmonisan. Kata &lsquo;salam&rsquo; diambil dengan harapan bahwa yayasan ini membawa kesejahteraan dan kedamaian bagi masyarakat. Selain itu, dengan mengambil nama &lsquo;salam&rsquo;, semoga yayasan ini menjadi titik equilibrium (penyimbang) diantara ketimpangan yang terjadi di masyarakat, sehingga perbedaan yang ada di masyarakat menajadi harmonis dan selaras.&nbsp;<br />\r\n<br />\r\n<strong>Kata Bandung:&nbsp;</strong>&ldquo;Bandung&rdquo; menjadi identitas di mana yayasan ini didirikan. Bandung adalah sebuah kota yang terkenal dengan kultur parahiyangan-nya. Bandung juga merupakan sebuah daerah asal dari masyarakat sunda yang berkarakter ramah, sopan, dan penuh kasih sayang. Semoga saja, masyarakat Bandung &ndash;yakni tempat yayasan ini berdiri&ndash; bisa mewarisi karakteristik masyarakat kota Madinah dan bisa membawa kedamaian bagi masyarakat lainnya.&nbsp;<br />\r\n<br />\r\n<strong>Gambar Sketsa Buku:&nbsp;</strong>Sebagaimana sudah diketahui, bahwa buku adalah sumber ilmu. Seperti buku pulalah fungsi dari yayasan ini. Semoga yayasan ini bisa menjadi sumber ilmu bagi semuannya.&nbsp;<br />\r\n<br />\r\n<strong>Gambar Sketsa Kubah:</strong>&nbsp;Kubah adalah sebuah atap bangunan masjid. Kubah ini adalah simbolisasi dari sebuah atap bangunan yang menaungi apa yang ada di bawahnya. Seperti halnya kubah, semoga yayasan ini bisa menaungi masyarakat yang membutuhkan naungan dalam hal keagamaan dan sosial kemasyarakatan.&nbsp;</p>\r\n\r\n<p><strong>Warna Garis Kuning:</strong>&nbsp;Warna kuning yang digunakan pada garis dalam logo yayasan ini adalah warna kuning emas. Emas adalah benda yang sangat bernilai dan mahal hargannya. Emas juga merupakan simbolisasi dari kemakmuran dan kejayaan. Dipilihnya warna kuning emas, dengan harapan yayasan ini bisa memakmurakan masyarakat, dan semoga saja yayasan ini bisa mencapai masa keemasannya (kejayaannya).&nbsp;<br />\r\n<br />\r\n<strong>Warna Garis Hijau:</strong>&nbsp;Warna hijau diidentikan dengan warna alam dan lingkungan. Hal ini terbukti dengan dikenalnya istilah Go Green, yaitu anjuran untuk menjaga alam dan lingkungan dengan melakukan penanaman pohon. Pada intinya, yayasan ini juga peduli terhadap kondisi alam dan lingkungan di tengah terpaan global warming yang sedang meng-hegemoni. (Sal_Zammil).</p>\r\n', './galeri/logo.jpg'),
(3, 'RAT Yayasan', '', './galeri/'),
(4, 'Visi dan Misi', '<p>pp</p>\r\n', './galeri/');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id_program` int(1) NOT NULL,
  `nama_program` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id_program`, `nama_program`, `deskripsi`, `gambar`) VALUES
(2, 'Semalam Bersama Alquran', '<p>You asked, Font Awesome delivers with 41 shiny new icons in version 4.7. Want to request new icons?&nbsp;<a href=\"http://fontawesome.io/community/#requesting-new-icons\">Here&#39;s how</a>.&nbsp;Need vectors or want to use on the desktop? Check the&nbsp;<a href=\"http://fontawesome.io/cheatsheet/\">cheatsheet</a>.</p>\r\n', './galeri/abstract_colorful_watercolor_texture_by_love_kay-d78zxhg.jpg'),
(4, 'Tahfid Madinatus Salam', '<p>Halo kawan, jumpa lagi.. beberapa waktu yang lalu ada temen bertanya bagaimana caranya membuat inputan dimana kita bisa mengatur text dengan lebih nyaman, kita bisa mengatur rata text, ukuran font, memasukkan gambar dll.</p>\r\n\r\n<p>Inputan tersebut umum disebut dengan What You See Is What You Get (WYSIWYG). Pada umumnya inputan seperti itu digunakan untuk menginput data berita dalam blog atau forum.</p>\r\n\r\n<p>Cara membuat input WYSIWYG sangatlah mudah, karena saat ini telah banyak tersedia library untuk membangun WYSIWYG. Yang paling populer diantaranya ada tinymce dan ckeditor.</p>\r\n\r\n<p>Pada kesempatan kali ini saya akan mencoba membuat dengan menggunakan ckeditor. Baiklah agar tidak penasaran langsung saja kita coba membuatnya.</p>\r\n\r\n<p>Step 1 : Silahkan anda download&nbsp;<a href=\"http://ckeditor.com/download\" target=\"_blank\">CKEditor di website</a>&nbsp;nya atau anda bisa mendonwloadnya pada link di akhir artikel ini. Anda juga perlu mendownload&nbsp;<a href=\"http://jquery.com/download/\" target=\"_blank\">jquery di sini</a>&nbsp;atau pada link di akhir artikel ini.</p>\r\n\r\n<p>Step 2 : Buatlah folder wysiwyg dalam C:xampphtdocs. Letakkan hasil extrak ckeditor dan jquery ke dalam folder wysiwyg tersebut.</p>\r\n\r\n<p>Step 3 : Buatlah file index.php di dalamnya dengan kode sebagai berikut :</p>\r\n', './galeri/6a6798e2281655ef28ce9ba963991e11--watercolor-texture-watercolor-brushes.jpg'),
(5, 'Tahfidz Qurâ€™an', '<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Tahfidz Qur&rsquo;an Semalaman</span></span></span></span></p>\r\n', './galeri/tax.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `susunan`
--

CREATE TABLE `susunan` (
  `id_susunan` int(1) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `susunan`
--

INSERT INTO `susunan` (`id_susunan`, `nama`, `keterangan`, `gambar`) VALUES
(2, 'Prof. Dr. Sukiwa M.Pd ', 'Ketua Yayasan Madinatussalam', './gambar/1.JPG'),
(3, 'Iis Susilawati', 'wakil Ketua Yayasan Madinatussalam', './gambar/2.jpg'),
(4, 'Deni Purnama, S.Pd', 'Wakil Ketua Kesiswaan ', './gambar/3.JPG'),
(5, 'Heni Herawati, S.Pd', 'Wakil Ketua Hubungan Masyarakat ', './gambar/4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `data_santri`
--
ALTER TABLE `data_santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `identitas_ayah`
--
ALTER TABLE `identitas_ayah`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `identitas_ibu`
--
ALTER TABLE `identitas_ibu`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `login_santri`
--
ALTER TABLE `login_santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `susunan`
--
ALTER TABLE `susunan`
  ADD PRIMARY KEY (`id_susunan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_santri`
--
ALTER TABLE `data_santri`
  MODIFY `id_santri` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_gambar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `identitas_ayah`
--
ALTER TABLE `identitas_ayah`
  MODIFY `id_santri` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `identitas_ibu`
--
ALTER TABLE `identitas_ibu`
  MODIFY `id_santri` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_santri`
--
ALTER TABLE `login_santri`
  MODIFY `id_santri` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `susunan`
--
ALTER TABLE `susunan`
  MODIFY `id_susunan` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_santri`
--
ALTER TABLE `data_santri`
  ADD CONSTRAINT `data_santri_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `identitas_ayah` (`id_santri`),
  ADD CONSTRAINT `data_santri_ibfk_2` FOREIGN KEY (`id_santri`) REFERENCES `identitas_ibu` (`id_santri`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
