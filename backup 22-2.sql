-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 12:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `date_created` int(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `devisi` varchar(128) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `date_created`, `nama`, `devisi`, `tanggal`, `keterangan`) VALUES
(1, 1602565008, 'Sigit Prasetyo', 'Support', '22-10-2020', 'Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `divisi` varchar(128) NOT NULL,
  `durasi` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nama_id` int(128) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `date_created` varchar(128) NOT NULL,
  `kategori_cuti` varchar(128) NOT NULL,
  `date_end` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `status1` varchar(123) NOT NULL,
  `persetujuan_dari` varchar(128) NOT NULL,
  `mengetahui` varchar(128) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id`, `email`, `divisi`, `durasi`, `nama`, `nama_id`, `tanggal`, `date_created`, `kategori_cuti`, `date_end`, `status`, `status1`, `persetujuan_dari`, `mengetahui`, `keterangan`, `note`, `foto`) VALUES
(514, 'sigit@garudamart.com', '17', '2', 'Sigit Prasetyo', 14, 'Wed 20-Jan-2021', '20-Jan-2021', 'Personal', 'Thu 21-Jan-2021', '1', '1', 'Bapak Andrias Eko Susanto', '', 'ke kampus bimbingan kerja praktek', '', 'sigitweb.jpg'),
(515, 'sigit@garudamart.com', '17', '1', 'Sigit Prasetyo', 14, 'Wed 20-Jan-2021', '20-Jan-2021', 'Melahirkan', 'Wed 20-Jan-2021', '1', '1', '', '', 'Liburan', '', 'sigitweb.jpg'),
(516, 'sigit@garudamart.com', '17', '1', 'Sigit Prasetyo', 14, 'Wed 20-Jan-2021', '20-Jan-2021', 'Personal', 'Wed 20-Jan-2021', '1', '1', '', '', 'ke kampus bimbingan kerja praktek', '', 'sigitweb.jpg'),
(517, 'amanda@garudamart.com', '14', '2', 'Amanda mahfiroh', 16, 'Wed 20-Jan-2021', '20-Jan-2021', 'Personal', 'Thu 21-Jan-2021', '2', '1', 'Bapak Andrias Eko Susanto', '', 'liburan ke bali', 'okehh', 'manda.png'),
(518, 'amanda@garudamart.com', '14', '1', 'Amanda mahfiroh', 16, 'Thu 21-Jan-2021', '21-Jan-2021', 'Personal', 'Thu 21-Jan-2021', '1', '1', '', '', 'liburan ke bali dada', '', 'manda.jpg'),
(519, 'jenab@gmail.com', '2', '1', 'Silvaleska', 7, 'Fri 22-Jan-2021', '22-Jan-2021', 'Personal', 'Fri 22-Jan-2021', '1', '1', '', '', 'liburan ke bali', '', 'Untitled-1.jpg'),
(520, 'felix@garudamart.com', '18', '2', 'felix ardiansyah', 18, 'Wed 03-Feb-2021', '03-Feb-2021', 'Personal', 'Thu 04-Feb-2021', '2', '2', 'Ibu Bernadetta Anna P', 'Silvaleska', 'liburan ke bali', 'okeh acc head hrd', 'felix.jpg'),
(521, 'sigit@garudamart.com', '17', '1', 'Sigit Prasetyo', 14, 'Wed 03-Feb-2021', '03-Feb-2021', 'Personal', 'Wed 03-Feb-2021', '1', '2', '', 'Sigit Prasetyo', 'ke kampus bimbingan kerja praktek', '', 'masgan.jpg'),
(522, 'sigit@garudamart.com', '17', '1', 'Sigit Prasetyo', 14, 'Wed 03-Feb-2021', '03-Feb-2021', 'Personal', 'Wed 03-Feb-2021', '2', '2', 'Ibu Bernadetta Anna P', 'Sigit Prasetyo', 'ke kampus bimbingan kerja praktek', 'okeh acc head dan hrd', 'masgan.jpg'),
(524, 'amanda@garudamart.com', '14', '2', 'Amanda mahfiroh', 16, 'Wed 03-Feb-2021', '03-Feb-2021', 'Personal', 'Thu 04-Feb-2021', '1', '1', '', '', 'tesss personal', '', 'manda.jpg'),
(525, 'amanda@garudamart.com', '14', '1', 'Amanda mahfiroh', 16, 'Wed 03-Feb-2021', '03-Feb-2021', 'Melahirkan', 'Wed 03-Feb-2021', '1', '1', '', '', 'tess cuti bukan personal', '', 'manda.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id_data_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `devisi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_data_user`, `nama`, `devisi`) VALUES
(1, 'Sigit prasetyo', 'Support'),
(2, 'felix', 'manufacture'),
(3, 'Hulda', 'Finance');

-- --------------------------------------------------------

--
-- Table structure for table `devisi`
--

CREATE TABLE `devisi` (
  `id` int(11) NOT NULL,
  `nama_divisi` varchar(128) NOT NULL,
  `head` varchar(128) NOT NULL,
  `email_head` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `devisi`
--

INSERT INTO `devisi` (`id`, `nama_divisi`, `head`, `email_head`) VALUES
(1, 'FINANCE', 'Melly Sulistia', 'sulissetia@garudamart.com'),
(2, 'LOGISTIC', 'Bunga Ratnani', 'bunga@garudamart.com'),
(13, 'SERVICE', 'M. Suhail', 'suhail@garudamart.com'),
(14, 'WAREHOUSE', 'Ben Yoseph N', 'yoseph@garudamart.com'),
(15, 'GANERAL AFFAIR', 'Mu inggrid', 'inggrid@garudamart.com'),
(17, 'IT', 'Mu inggrid', 'hrd@garudamart.com'),
(18, 'MANUFAKTURE & PABRICATION', 'Aceng Rusnadi', 'aceng@garudamart.com'),
(22, 'MARKETING', 'Bernadetta Anna P', 'anna@garudamart.com'),
(23, 'HRD', 'Mu inggrid\r\n', 'inggrid@garudamart.com');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `actived` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `nama`, `actived`) VALUES
(1, 'PAK MIDI', 0),
(2, 'PAK SURYA', 1),
(3, 'MAS AHMAD', 1),
(4, 'MAS IGO', 1),
(5, 'LAINNYA', 1),
(6, 'LAINNYA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `input_kasbon`
--

CREATE TABLE `input_kasbon` (
  `id` int(11) NOT NULL,
  `id_kasbon` int(11) NOT NULL,
  `date_created` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `angsuran_ke` varchar(128) NOT NULL,
  `jumlah_bayar` int(128) NOT NULL,
  `note` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `input_kasbon`
--

INSERT INTO `input_kasbon` (`id`, `id_kasbon`, `date_created`, `nama`, `angsuran_ke`, `jumlah_bayar`, `note`) VALUES
(3, 15, '27-Jan-2021', 'Silvaleska', '1', 500000, 'januari'),
(4, 15, '27-Jan-2021', 'Silvaleska', '1', 500000, ''),
(5, 15, '27-Jan-2021', 'Silvaleska', '3', 500000, 'maret'),
(6, 15, '27-Jan-2021', 'Silvaleska', '4', 500000, 'april'),
(8, 16, '27-Jan-2021', 'Amanda mahfiroh', '0', 200000, 'angsuran bulan januari'),
(9, 16, '27-Jan-2021', 'Amanda mahfiroh', '1', 200000, 'angsuran bulan februari'),
(10, 16, '27-Jan-2021', 'Amanda mahfiroh', '2', 200000, 'maret'),
(17, 11, '04-Feb-2021', 'Amanda mahfiroh', '0', 1500000, ''),
(18, 2, '04-Feb-2021', 'Amanda mahfiroh', '0', 1000000, ''),
(19, 16, '04-Feb-2021', 'Amanda mahfiroh', '3', 200000, ''),
(21, 16, '04-Feb-2021', 'Amanda mahfiroh', '4', 200000, '');

-- --------------------------------------------------------

--
-- Table structure for table `izin`
--

CREATE TABLE `izin` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nama_id` int(128) NOT NULL,
  `note` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `date_end` varchar(128) NOT NULL,
  `jenis_izin` varchar(128) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `date_created` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `durasi` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `izin`
--

INSERT INTO `izin` (`id`, `nama`, `nama_id`, `note`, `email`, `tanggal`, `date_end`, `jenis_izin`, `Keterangan`, `date_created`, `status`, `durasi`, `foto`) VALUES
(48, 'Sigit Prasetyo', 14, 'Belum ada catatan', 'sigit@garudamart.com', 'Wed 20-Jan-2021', 'Wed 20-Jan-2021', 'Sakit', 'demam', '20-Jan-2021', '1', '1', 'sigitweb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `id_jabatan` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `is_active` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `id_jabatan`, `nama`, `is_active`) VALUES
(1, '1', 'Head / SPV', '1'),
(2, '1', 'ACC PAYABLE', '1'),
(4, '1', 'ACC RECEIVABLE', '1'),
(5, '1', 'ADMIN', '1'),
(6, '1', 'KASIR', '1'),
(7, '2', 'HEAD', '1'),
(8, '2', 'PURCHASING', '1'),
(9, '2', 'ADMIN', '1'),
(10, '13', 'HEAD', '1'),
(11, '13', 'TEAM LEADER', '1'),
(12, '13', 'TEKNISI', '1'),
(13, '13', 'ADMIN', '1'),
(14, '14', 'SPV', '1'),
(15, '14', 'ADMIN', '1'),
(16, '14', 'PARTMEN', '1'),
(17, '15', 'ADMIN GA', '1'),
(18, '15', 'OB / OG', '1'),
(19, '15', 'DRIVER', '1'),
(20, '17', 'IT SUPPORT', '1'),
(21, '18', 'HEAD', '1'),
(22, '22', 'MARKETING', '1'),
(23, '22', 'SPV / MARKETING', '1');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_cuti`
--

CREATE TABLE `jenis_cuti` (
  `id_jeniscuti` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `lama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_cuti`
--

INSERT INTO `jenis_cuti` (`id_jeniscuti`, `nama`, `lama`) VALUES
(1, 'Personal', 12),
(2, 'Melahirkan', 90),
(3, 'Istri Melahirkan', 2),
(4, 'Istri keguguran', 2),
(5, 'Saudara Meninggal', 1),
(6, 'Menikah', 3),
(7, 'Mengkhitankan Anak', 2),
(8, 'Membaktis Anak/saudara', 2),
(9, 'Menikahkan Anak', 3);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_izin`
--

CREATE TABLE `jenis_izin` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_izin`
--

INSERT INTO `jenis_izin` (`id`, `nama`) VALUES
(1, 'Sakit'),
(2, 'Keperluan Pribadi'),
(5, 'Setengah Hari(pagi)'),
(6, 'Setengah Hari(siang)');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `sapaan` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nrp` varchar(128) NOT NULL,
  `divisi` varchar(128) NOT NULL,
  `tanggal_gabung` varchar(128) NOT NULL,
  `tahun_gabung` int(12) NOT NULL,
  `tempat` varchar(128) NOT NULL,
  `ttl` varchar(128) NOT NULL,
  `tahun_lahir` int(11) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `pendidikan` varchar(128) NOT NULL,
  `jenjang` varchar(128) NOT NULL,
  `gol_darah` varchar(128) NOT NULL,
  `ktp` varchar(128) NOT NULL,
  `bpjs_kese` varchar(128) NOT NULL,
  `bpjs_kete` varchar(128) NOT NULL,
  `npwp` varchar(128) NOT NULL,
  `tlp` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `role_id` int(1) NOT NULL,
  `kuota_cuti` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `sapaan`, `username`, `password`, `nrp`, `divisi`, `tanggal_gabung`, `tahun_gabung`, `tempat`, `ttl`, `tahun_lahir`, `alamat`, `pendidikan`, `jenjang`, `gol_darah`, `ktp`, `bpjs_kese`, `bpjs_kete`, `npwp`, `tlp`, `jabatan`, `email`, `foto`, `is_active`, `role_id`, `kuota_cuti`) VALUES
(1, 'Lasmidi', 'Pak', 'lasmidi', 'Xx#lasmidi', 'G11010007', '15', '1-Nov', 2010, 'Madiun', '20-Nov', 1961, 'Jl. Transad VI No. 15 Jati Ranggon. Jati sampurna Bekasi. 17432', '', 'SD', '-', '3275102011610004', '0001472462098', '10030281157', '93.741.035.5-447.000', '081296301906', 'Driver', 'adjengh@gmail.com', 'lasmidi.jpg', 1, 5, 12),
(2, 'Bunga Ratnani', 'Ibu', 'bunga', 'Xx#bunga', 'G11010006', '2', '1-Dec', 2010, 'jakarta', '1-Mar', 1985, 'Komplek DKI Blok A6 No.12 RT 009/013 Sunter Agung Tanjung priok Jakarta Utara 14350', '', 'S1', 'A', '3172024103850009', '0000037671186', '14029173110', '24.720.748.3-048.000', '0811817023', 'Head', 'ahmadfirdauss334@gmail.com', 'bunga.jpg', 1, 1, 12),
(3, 'Siti Anisa Maelani', 'Mba', 'anisa', 'Xx#anisa', 'G14010075', '1', '12-Aug', 2014, 'Purbalingga', '14-May', 1996, 'Wanogara Wetan RT/RW: 002/001. Kel. Wanogara Wetan Kec. Rembang. Kab. Purbalingga Jawa Tengah 53356', '', 'SMK', '-', '3303135405960001', '0001017534504', '14029173219', '81.886.640.2-529.000', '08568477612', 'AP', 'anisa@garudamart.com', 'anisa.jpg', 1, 5, 12),
(4, 'Toto Nihyana', 'Pak', 'toto', 'Xx#toto', 'G15010082', '13', '27-Nov', 2015, 'Cilacap', '8-Mar', 1977, 'Dsn. Peundeuy RT 04/RW 09 Kel. Panulisan Barat Kec. Dayeuhluhur Kab. Cilacap Jateng 53266', '', 'SMP', 'B', '3301160803770002', '0002648579995', '16032037208', '91.241.990.0-522.000', '081298044644', 'Team Leader', 'totogaruda04@gmail.com', 'toto.jpg', 1, 5, 12),
(5, 'M. Suhail S', 'Pak', 'suhail', 'Xx#suhail', 'G14080076', '13', '17-Oct', 2014, 'Ujung Pandang', '12-Mar', 1974, 'Jl. Raya PS Kecapi Gg. Namin Rt. 001 RW. 004 Kel. Jatiwarna Kec. Pondok Melati Bekasi 17415', '', 'SMK ', 'O', '3172050312740004', '0001290988809', '14037439826 D1', '91.128.295.2-044.000', '082312022121', 'Head', 'suhail@garudamart.com', 'suhail.jpg', 1, 1, 12),
(6, 'Achmad Gustian', 'Mas', 'achmad', 'Xx#achmad', 'G1501101', '15', '30-Aug', 2016, 'Jakarta', '31-Aug', 1996, 'KP. Pamahan RT.001 RW.008 Kel. Jatimekar Kec. Jatiasih. Bekasi 17422', '', 'SMK', 'O', '3175043108960003', '0002100067852', '18006190997', '93.761.840.3-005.000', '089643787310/0895358648991', 'Driver', 'gustianachmad@gmail.com', 'ahmad.jpg', 1, 5, 12),
(7, 'Meilissa', 'Mba', 'meilissa', 'Xx#meilissa', 'G1601100', '13', '16-Sep', 2016, 'Ambon', '5-May', 1986, 'Komp. Jati permai I jl. Nakula no. 54 jatirahayu pondok melati bekasi 17414', '', 'S1', 'B', '3275124505860001', '0002511007345', '18006191011', '44.517.207.5-432.000', '087884198422', 'Senior Service Adm', 'meilissa@garudamart.com', 'mel.jpg', 1, 1, 12),
(8, 'Azwita Febriyanti', 'Mba', 'azwita', 'Xx#azwita', 'G1601110', '1', '21-Nov', 2016, 'bekasi', '16-Feb', 1987, 'Jl. Setia I No. 23 RT/RW. 005/012 Kel. Jatiwaringin Kec. Pondok Gede. Bekasi 17411', '', 'D3', 'A', '3275085602870011', '0001621140726', '18006191029', '98.548.536.6-432.000', '087882091602/081770827299', 'AR', 'wita@garudamart.com', 'wita.jpg', 1, 5, 12),
(9, 'Aceng Rusnadi', 'Pak', 'aceng', 'Xx#aceng', 'G1701112', '18', '10-Apr', 2017, 'Cilacap', '4-May', 1970, 'Dusun Peundeuy RT.003 RW. 008 Kel. Panulisan Barat Kec. Dayeuhluhur. Cilacap. Jawa Tengah 53266', '', 'SMA', 'A', '3301160405700001', '0002511007356', '18006191037', '77.426.837.9-522.000', '081347456055', 'Head', 'acengrusnadi04@gmail.com', 'aceng.jpg', 1, 1, 12),
(10, 'Ahmad Sugiyanto', 'Mas', 'ahmad', 'Xx#ahmad', 'G1701113', '13', '18-Apr', 2017, 'Klaten', '4-Aug', 1990, 'Jl. Mahakam RT.003 RW.003 Kel. Mojopunggung Kec. Giri. Banyuwangi 68425', '', 'SMK ', 'B', '3510170408900001', '0000701293241', '18006191045', '91.869.917.4-627.000', '081807444929/ 081770801115', 'Mekanik', 'ahmad.s040890@gmail.com', 'sugi.jpg', 1, 5, 12),
(11, 'Alfons Vicky Daniels', 'Mas', 'alfons', 'Xx#alfons', 'G1708130', '14', '29-May', 2017, 'Balikpapan', '9-Jan', 1990, 'Jl. Sepinggan Baru No 4 RT/RW. 026/000 Sepinggan. Balikpapan Selatan. Kota Balikpapan. Kal Tim', '', 'SMK ', 'O', '6471050901900002', '0001148258092', '18006191060', '66.858.187.9-728.000', '085921047867 / 08115998222', 'Head ', 'alfons@garudamart.com', 'alfons.jpg', 1, 1, 12),
(12, 'Sunyoto', 'Pak', 'sunyoto', 'Xx#sunyoto', 'G1601103', '18', '25-Jan', 2017, 'Batang', '12-Dec', 1973, 'Dukuh kumesu RT 19/RW 5 Kel. Desa kumesu 51273', '', 'SD', '-', '3325041212730001', 'PBI', '19004278503', '93.200.528.3-513.000', '085327027677', 'Manufacture', 'nyoto2302@gmail.com', 'nyoto.jpg', 1, 5, 12),
(13, 'Iwan Ase', 'Pak', 'iwan', 'Xx#iwan', 'G1501096', '13', '10-Jun', 2017, 'Cilacap', '12-Jan', 1988, 'Dusun Panulisan. RT 004/ RW 002 Kel. Panulisan Kec. Dayeuhluhur. Kab. Cilacap 53266', '', 'SLTP', 'AB', '3301161201880001', '0002643505817', '19004279741', '91.241.920.7-522.000', '081314496082', 'Mekanik', 'sabianase@gmail.com', 'ase.jpg', 1, 5, 12),
(14, 'Eko Kiswanto', 'Pak', 'eko', 'Xx#eko', 'G1701117', '13', '14-Jul', 2017, 'Semarang', '27-Oct', 1990, 'BTN AD Jl. Bacang C III No. 9 RT/TW. 002/0012 Kel. Sukamaju Baru Kec. Tapos. Depok 16462', '', 'SMK', 'A', '3324082710900001', '0000807811499', '18006191078', '59.355.872.9-513.000', '087880216178', 'Mekanik', 'kiswanto90@gmail.com', 'eko.jpg', 1, 5, 12),
(15, 'Ahmad Haerul Huda', 'Pak', 'huda', 'Xx#huda', 'G1701118', '13', '14-Jul', 2017, 'Jember', '20-Jul', 1991, 'Dsn. Padukuan Lor RT. 005 Rw. 002 Karang Semanding. Balung. Kab Jember Jawa Timur 68161', '', 'SMK', 'O', '3509102007910003', '0002511007367', '18006191086', '93.719.829.9-626.000', '085779740515/085782696252', 'Mekanik', 'khoirulyhuda07@gmail.com', 'huda.jpg', 1, 5, 12),
(16, 'Melly Sulissetia Ningrum', 'Ibu', 'sulis', 'Xx#sulis', 'G1701126', '1', '26-Jul', 2017, 'Purworejo', '15-Jun', 1996, 'Kp. Pondok Ranggon RT 006/RW 003. Jati Murni. Pondok Melati. Kota Bekasi 17431', '', 'SMA', '-', '3306085506960004', '0002511007334', '18006191094', '84.067.177.0-447.000', '083844160790', 'Head', 'sulissetia@garudamart.com', 'sulis.jpg', 1, 1, 12),
(17, 'Jacky Haryanto', 'Mas', 'jacky', 'Xx#jacky', 'G1701132', '14', '31-Jul', 2017, 'Bekasi', '24-Jan', 1996, 'Kp. Pondok Ranggon Sasak Jikin RT 01/RW 05 No. 33 Kel. Jatimurni Kec. PondoK Melati 17431', '', 'SMK', '-', '3275122401960004', '0001338581441', '18006191102', '93.657.196.7-447.000', '085717564012 / 089523557287', 'Admin', 'jacky@garudamart.com', 'jacky.jpg', 1, 5, 12),
(18, 'Ben Yoseph Nugroho Tri Hartanto', 'Pak', 'yoseph', 'Xx#yoseph', 'G1701135', '14', '16-Oct', 2017, 'Bekasi', '31-Mar', 1994, 'Jl. Setia II No. 23 RT.007/004 Kel. Jatiwaringin Kec. Pondok Gede - Bekasi 17411', '', 'D3', 'A', '3275083103940017', '0001742869192', '18006191136 D1', '74.169.035.8-447.000', '085215151221', 'Spv', 'Benyosephnugroho@gmail.com', 'yosep.jpg', 1, 1, 12),
(19, 'Angga Prayoga', 'Mas', 'angga', 'Xx#angga', 'G1701136', '14', '23-Oct', 2017, 'Bekasi', '15-Jun', 1992, 'Jl. Setia I No. 9 RT 005/RW 004 Kel. Jatiwaringin Kec. Pondok Gede 17411', '', 'SMK', '-', '3275081506920018', '0002511007323', '18006191144 D1', '93.070.675.9-447.000', '089630913358', 'Partman', 'Anggatotenk60@gmail.com', 'angga.jpg', 1, 5, 12),
(20, 'Bennedita Tambunan ', 'Mba', 'dita', 'Xx#dita', 'G1701137', '2', '26-Oct', 2017, 'Jakarta', '28-Dec', 1999, 'Kp. Kebantenan RT 007/RW 006 Kel. Jatiasih Kec. Jatiasih Bekasi 17423', '', 'SMK', '-', '3275096812990007', '0002615586412', '18006191151', '91.361.212.3-447.000', '085893557933 ', 'Admin', 'dita@garudamart.com', 'dita.jpg', 1, 5, 12),
(21, 'Sheintriana Ayu Putri', 'Mba', 'triana', 'Xx#triana', 'G1701138', '2', '26-Oct', 2017, 'Depok', '3-Aug', 1995, 'Perum Darmawangsa Residence Jl. Prambanan 7 Blok BP9 No 12 RT 005/ RW 014 Kel. Satria Mekar Kec. Tambun Utara', '', 'SMK', 'O', '3276024308950008', '0001771081705', '18006191169 D1', '72.933.106.6-009.000', '0895366528621', 'Admin', 'triana@garudamart.com', 'triana.jpg', 1, 5, 12),
(22, 'Bonifacio Mau Buti', 'Pak', 'boni', 'Xx#boni', 'G1708139', '22', '6-Nov', 2017, 'maumela', '13-Sep', 1987, 'Jl. Mulawarman no. 10 RT. 011 RW. 000 Kel. Sepingan Kec. Balikpapan Selatan', '', 'SMA', 'O', '6471051309870010', '0001449849969', '18006191177', '-', '082251091975', 'Marketing', 'boni@garudamart.com', 'boni.jpg', 1, 5, 12),
(23, 'Kanisius Kefi', 'Pak', 'kefi', 'Xx#kefi', 'G1701141', '18', '26-Oct', 2017, 'Siolasis', '11-Nov', 1981, 'Jl. Raya Hankam-Ujung Aspal RT 001/RW 008 Jatiranggon. Jatisampurna Bekasi', '', 'SD', 'AB', '5303011111810004', '0002511007378', '18006191185', '93.759.378.8-447.000', '081281793006', 'Fabrikasi', 'kenskefi8@gmail.com', 'kefi.jpg', 1, 5, 12),
(24, 'Sabri', 'Pak', 'sabri', 'Xx#sabri', 'G1801144', '13', '2-Feb', 2018, 'Ujung Pandang', '5-Jun', 1982, 'Jl. Raya pasar kecapi 66 namin no 45 RT 001/RW 004 Jatiawarna Pondok melati. Bekasi 17415', '', 'SMA', 'B', '3275120506820005', '0001726753206', '18032308191 D1', '93.740.981.1-447.000', '081315865636', 'Manufacture', 'sabrihaq82@gmail.com', 'sabri.jpg', 1, 5, 12),
(25, 'Violentino Felix Ardiyanto Utoyo', 'Mas', 'felix', 'Xx#felix', 'GI801147', '18', '22-Feb', 2018, 'Semarang', '22-Jul', 1998, 'Jl. Bina Asih 3E Cluster Jatiasih Village Blok F1 No.9 RT 006/RW 008  Kel. Jatiasih Kec. Jatiasih. Bekasi ', 'STMIK Nusa mandiri', 'S1', 'A', '3275092207980013', '0001467199991', '18032308183', '90.923.016.1-447.000', '081385747746', 'Admin', 'felix@garudamart.com', 'felix.jpg', 1, 5, 12),
(26, 'Silvalescha Astarani', 'Mba', 'silva', 'Xx#silva', 'GI801148', '2', '5-Mar', 2018, 'Jakarta', '23-Jun', 1998, 'Sakura Regncy Jl. Bunga Sakura XIV Blok T-20 RT.004 RW.017 Kel. Jatiasih Kec. Jatiasih. Bekasi 17423', 'STMIK Nusa mandiri', 'S1', 'B+', '3275096306980017', '0001719362733', '18053332328', '91.202.218.3-477.000', '087785382601', 'Admin', 'silva@garudamart.com', 'silva.jpg', 1, 5, 12),
(27, 'Mohamad Ilvan Ridhoni', 'Mas', 'ilvan', 'Xx#ilvan', 'G1801155', '14', '6-Apr', 2018, 'Jakarta', '14-Feb', 1997, 'KTP: Jl. Harsono RM RT.003 RW.004 Kel. Ragunan Kec. Pasar Minggu. Jakarta Selatan 12550 / Domisili: Jl. Raya Hankam Sasak Jikin RT 01/RW 05 KEL. Jatimurni. Bekasi', '', 'SMK', '-', '3174041402970004', '0000042756557', '19004278529', '92.909.142.9-017.000', '085695357097', 'Partman', 'ilavanridhoni52@gmail.com', 'ilvan.jpg', 1, 5, 12),
(28, 'Yogi Eka Pratama', 'Mas', 'yogi', 'Xx#yogi', 'G1801158', '15', '11-Apr', 2018, 'Bekasi', '15-Jun', 1996, 'KP. Pondok Ranggon  RT 001/RW 005 No. 86 Kel. Jati Murni. Kec. Pondok Melati. Bekasi 17431', '', 'SMK', '-', '3275121506960003', '0000506952505', '19004278511', '80.056.859.4-447.000', '082124960091 / 081290969298', 'Staff', 'gepengyogi@gmail.com', 'yogi.jpg', 1, 5, 12),
(29, 'Yugo Miharjo Darkim', 'Pak', 'darkim', 'Xx#darkim', 'G1801159', '18', '4-May', 2018, 'Purbalingga', '6-Feb', 1969, 'Wanogara Wetan RT/RW: 002/001. Kel. Wanogara Wetan Kec. Rembang. Kab. Purbalingga Jawa Tengah 53356', '', 'SMP', 'O', '3303130602690001', '0001017534486', '18066015662', '91.667.276.9-529.000', ' 0813820466010', 'Fabrikasi', 'yugomiharjodarkim@gmail.com', 'darkim.jpg', 1, 5, 12),
(30, 'Alberthus Tandek ', 'Pak', 'alberth', 'Xx#alberth', 'G1808170', '13', '5-Sep', 2018, 'Makale Tator', '6-Feb', 1971, 'Jl. Pongtiku Gg. Rantepao No. 7 RT/RW. 013/000 Kel. Singa Gembara Kec. Sangatta Utara. Kutai Timur. Kaltim 76611', 'Mesin', 'S1', 'AB', '6408042005710006', '0001903179284', '14037690188', '14.712.538.9-721.000', '08111149926/081256049007', 'Mekanik', 'albert@garudamart.com', 'albert.jpg', 1, 5, 12),
(31, 'Vincentia Hanna Wibowo', 'Mba', 'tia', 'Xx#tia', 'G1801179', '2', '26-Oct', 2018, 'Jakarta', '26-Jan', 1994, 'Jl. Pisang lumut No. 10 RT 06/RW 09 Kel. Kota Baru Kec. Bekasi Barat. Bekasi 17133', 'Teknik Elektro', 'S1', 'O', '3275026601940005', '0001737471385', '19007802986', '86.285.501.2-427.000', '085710986126', 'Admin', 'tia@garudamart.com', 'tia.jpg', 1, 5, 12),
(32, 'Mu Inggrid', 'Ibu', 'inggrid', 'Xx#inggrid', 'G1801180', '23', '1-Nov', 2018, 'Sanggau', '4-Jul', 1986, 'Bekasi Timur Regency 3 Cluster Florite Blok F9 No. 26  RT.012 RW.006 Kel. Paduranen Kec. Mustika Jaya. Bekasi 17156', 'Ekonomi', 'S1', 'B+', '3275074407860017', '0001717478324', '19015234990', '67.096.176.2-432.000', '087788777235', 'HRD', 'inggrid@garudamart.com', 'inggrid.jpg', 1, 2, 12),
(33, 'Anderson Simangunsong', 'Mas', 'anderson', 'Xx#anderson', 'G1801182', '22', '1-Nov', 2018, 'Tebing Tinggi', '17-Oct', 1992, 'Jl. Cipendawa Lama RT. 005 RW. 007 Kel. Bojong Menteng Kec. Rawalumbu Bekasi 17117', '', 'D III', 'B', '1276031710920001', '0001962783044', '19015234982', '44.048.475.6-114.000', '085362897392', 'Marketing', 'anderson@garudamart.com', 'erson.jpg', 1, 5, 12),
(34, 'Muhamad Risman', 'Mas', 'risman', 'Xx#risman', 'G1905185', '13', '7-Jan', 2019, 'Tasikmalaya', '30-Jul', 1989, 'Kp. Limbangan RT/RW. 005/007 Cikadongdong. Singaparna. Tasikmalaya 46418', '', 'SMK', 'B', '3206263007890001', '0001962093093', '19007803026', '92.299.957.8-425.000', '082255692505', 'Mekanik', 'risman.omod@gmail.com', 'risman.jpg', 1, 5, 12),
(35, 'Sigit Prasetyo', 'Mas', 'prasetyo', 'Xx#prasetyo', 'G1901187', '17', '28-Jan', 2019, 'Brebes', '22-Feb', 1997, 'KTP: DK Kubang Urang RT/RW: 003/008 Kel. Cilibur Kec. Paguyangan. Brebes 52276/Domisili: Jl. Kemang Raya No. 28A  Jaticempaka. Pondok Gede. Bekasi ', 'Nurul Huda PGY', 'SMA', '-', '3329041206970007', '0001656569722', '19034139840', '91.281.160.1-501.000 ', '085604111395 / 08970606865', 'IT Support', 'sigit@garudamart.com', 'sigit.jpg', 1, 4, 12),
(36, 'Hulda Vincensia Masiglaat', 'Mba', 'hulda', 'Xx#hulda', 'G1901190', '1', '11-Feb', 2019, 'Bekasi', '3-Jul', 2000, 'Kp. Rawa Semut RT. 001/012 No. 26 Kel. Margahayu Kec. Bekasi Timur 17113', 'Akuntansi', 'SMK', '-', '3275015307000009', '0002272012143', '19034139857', '90.442.300.1-407.000', '089659498996', 'Cashier', 'hulda@garudamart.com', 'hulda.jpg', 1, 5, 12),
(37, 'Achmad Firdaus', 'Mas', 'firdaus', 'Xx#firdaus', 'G1901191', '15', '15-Feb', 2019, 'Bekasi', '28-Apr', 1998, 'KP. Pondok Ranggon RT/RW. 001/005. Jatimurni. Pondok Melati. Bekasi 17431', '', 'SD', '-', '3275122804980003', '0002766552726', '19034139881', '-', '0895391806028', 'Office Boy', 'ahmdfirdauss334@gmail.com', 'uus.jpg', 1, 5, 12),
(38, 'Supandi Irawan', 'Pak', 'pandi', 'Xx#pandi', 'G1901193', '18', '20-Feb', 2019, 'Bekasi', '7-Jul', 1989, 'Jl. Nangka Siman Atas Baru RT/RW 002/003 Kel. Jatibening Kec. Pondok Gede. Bekasi 17413', '', 'SLTA', '-', '3275080707890022', '0002096239162', '19034139873', '93.258.658.0-447.000', '085921267637', 'Manufacture', 'supandiirawan6@gmail.com', 'pandi.jpg', 1, 5, 12),
(39, 'Urbanus Tombi', 'Pak', 'urbanus', 'Xx#urbanus', 'G1908194', '15', '12-Mar', 2019, 'langda', '11-Jun', 1976, 'Jl. Sukarno Hatta RT/RW. 047/000 Karang Joang. Balikpapan Utara. Kaltim 76127', '', 'SMK', '-', '6472040512760004', '0002196872403', '19046802096', '-', '081258213491', 'Driver', 'urbanustombi24@gmail.com', 'urbanus.jpg', 1, 5, 12),
(40, 'Andreas Jasri Siringo-ringo', 'Mas', 'ringo', 'Xx#ringo', 'G1901195', '15', '18-Mar', 2019, 'Dolok Masihul', '17-Apr', 1997, 'Telaga Mas Blok G2 No. 50. RT/RW. 013/014. Harapan Baru. Bekasi Utara 17123', 'Bhayangkara', 'S1', 'B', '3275031804970016', '0002216592832', '19046802088', '74.355.684.7-407.000', '082114171075', 'ADMIN GA', 'ringo@garudamart.com', 'ringo.jpg', 1, 0, 12),
(41, 'Alek Gunawan', 'Mas', 'alek', 'Xx#alek', 'G1901196', '18', '25-Mar', 2019, 'bekasi', '20-Jul', 1992, 'Kp. Kebantenan No. 19 RT 004/RW 008 Kel. Jatiasih Kec. Jatiasih Bekasi 17423', '', 'SMK', 'O', '3275092007920017', '0001647999472', '19046802070', '16.927.206.9-432.000', '089650596910 / 0859-4733-7394', 'Fabrikasi', 'gunawanalex55@gmail.com', 'alex.jpg', 1, 5, 12),
(42, 'Heri Setiawan', 'Mas', 'heri', 'Xx#heri', 'G1901199', '18', '18-Jan', 2019, 'Batang', '20-Oct', 1999, 'Dukuh Kumesu RT.019 RW.005 Kel. Kumesu Kec. Reban Kab. Batang Jawa Tengah 51273', '', 'SMK', 'A', '3325042010990002', '000611036267', '19063223960', '93.133.804.0-513.000', '082326526948', 'Manufacture', 'herisetiawan6948@gmail.com', 'heri.jpg', 1, 5, 12),
(43, 'Ahmed Gibran Coreda', 'Mas', 'gibran', 'Xx#gibran', 'G1905202', '13', '24-Jul', 2019, 'Tanjung Enim', '24-Jul', 2000, 'Jl. Lingga Raya No. 52 RT/RW: 000/000 Kel. Lingga Kec. Lawang Kidul Muara Enim. Sumatera Selatan 31711', '', 'SMK', 'AB+', '1603072407000001', '0001514250461', '19092225879', '94.483.271.6-313.000', '089628433850', 'Helper', 'ahmedgibran25@gmail.com', 'gibran.jpg', 1, 5, 12),
(44, 'Ferdianus Lambe Manggasa', 'Mas', 'ferdianus', 'Xx#ferdianus', 'G1908205', '15', '30-Jul', 2019, 'Balikpapan', '11-Feb', 1989, 'Jl. D.I Panjaitan No. 09 RT/RW 055/000 Kel. Gunung Samarinda Kec. Balikpapan Utara. Kal Tim', '', 'SMA', 'B', '6471031102890002', '0002217994536', '19073559791', '-', '082153211415', 'Office Boy', 'ferdianuslm@gmail.com', 'lambe.jpg', 1, 5, 12),
(45, 'Dhony Ariwibowo', 'Mas', 'dhony', 'Xx#dhony', 'G1905206', '13', '5-Aug', 2019, 'Tanjung Enim', '28-Jan', 1998, 'Jl. Alamanda Blok E No. 8 BTN Air Paku. Kel. Tanjung Enim Selatan  Kec. Lawang Kidul. Muara Enim. Sumatra Selatan 31714', '', 'SLTA', 'A', '1603072801980003', '0001882768871', '19092225887', '-', '0895637373288', 'Driver', 'dhodon280198@gmail.com', 'dhony.jpg', 1, 5, 12),
(46, 'Rony Rudiansyah', 'Mas', 'rony', 'Xx#rony', 'G1908208', '22', '12-Aug', 2019, 'Nganjuk', '21-Feb', 1995, 'Jl. Mulawarman RT/RW. 005/000 Kel. Lamaru Kec. Balikpapan Timur. Balikpapan', '', 'SMK', '-', '3518072102950003', '0002904762071', '19082276692', '-', '082255382246', 'Marketing', 'rony@garudamart.com', 'roni.jpg', 1, 5, 12),
(47, 'Fernando Gomgom Aritonang', 'Mas', 'gomgom', 'Xx#gomgom', 'G1908210', '22', '12-Aug', 2019, 'Doloksanggul', '12-Jan', 1994, 'KTP: Jl. Karya. Kel. Pasar Doloksanggul Kec. Doloksanggul. Humbang Hasunatan 22457/Domisili : Jl. Malioboro No. 67 RT/RW 37/00 Kel. Gunung Bahagia Kec. Balikpapan Selatan. Balikpapan. KALTIM 76281', '', 'D3', 'O', '1216061201940001', '0000013913155', '19082276700', '82.089.136.4-127.000', '08111176829 / 085360885918', 'Marketing', 'gomgom@garudamart.com', 'gomgom.jpg', 1, 5, 12),
(48, 'Surya Dinata', 'Pak', 'surya', 'Xx#surya', 'G1908218', '15', '22-Oct', 2019, 'jakarta', '27-Jan', 1985, 'Jl. H. Harun VI RT/RW: 005/011 Kel. Jatirahayu Kec. Pondok Melati. Bekasi 17414', '', 'SMK', '-', '3175032710850012', '0002340465131', '19092225929', '81.841.049.0-002.000', '08998813093', 'Driver', 'suryarendi2013@gmail.com', 'surya.jpg', 1, 5, 12),
(49, 'Metahsari', 'Mba', 'metah', 'Xx#metah', 'G1908219', '2', '28-Oct', 2019, 'Bekasi', '23-Sep', 1997, 'Pondok Surya Mandala Jl. Surya Aasri I Blok L2 No. 5 Kel. Jaka Mulya. Kec. Bekasi Selatan Kota Bekasi 17146', '', 'D3', 'B', '3275046309970001', '0001282050538', '19092225911', '91.380.628.7-432.000', '082272790075', 'Admin', 'methasari@garudamart.com', 'metah.jpg', 1, 5, 12),
(50, 'Amanda Maghfiroh Chairani', 'Mba', 'amanda', 'Xx#amanda', 'G1908220', '14', '28-Oct', 2019, 'Bekasi', '22-Dec', 1999, 'Jl. Duku D8/2 Perum. Sapta Pesona RT.004/008. Jatiluhur. Jatiasih 17425', '', 'SMA', 'A', '3275096212990014', '0002198540204', '19092225903', '93.703.916.2-447.000', '082130849184', 'Admin', 'amanda@garudamart.com', 'manda.jpg', 1, 5, 12),
(51, 'Yudi Saputra', 'Mas', 'yudi', 'Xx#yudi', 'G2008221', '15', '2-Mar', 2020, 'Jakarta', '23-Jul', 2000, 'KTP: Lubang Buaya RT 013 RW 001 Kel. Lubang Buaya Kec. Cipayung Jakarta Timur 13810 / Rumah: Jl. Raya Hankam Gg. Sasak Jikin RT. 001 RW. 005 Kel. Jatimurni Kec. Pondok Melati Bekasi 17431', '', 'SMA', 'A', '3175102307000008', '0001840884232', '20028849592', '-', '089608517669', 'Office Boy', 'yudisaputra230700@gmail.com', 'yudi.jpg', 1, 5, 12),
(52, 'Vinna Rosalina', 'Mba', 'vinna', 'Xx#vinna', 'G2008222', '15', '1-Jun', 2020, 'Bekasi', '25-May', 1996, 'KP Sawah RT/RW: 001/003 Kel. Jatimelati Kec. Pondok Melati. Bekasi 17113', '', 'SMK', 'O', '3275126505960002', '0002643795505', '20046263149', '-', '087872698075', 'Office Girl', 'vinnarosalina07@gmail.com', 'vinna.jpg', 1, 5, 12),
(53, 'Ridhan Fauzan', 'Mas', 'ridhan', 'Xx#ridhan', 'G2008223', '22', '24-Aug', 2020, 'Bekasi', '17-Jun', 1996, 'Taman Wisma Asri Blok AA25 No 17 RT.007 RW. 028 Kel. Teluk Pucung Kec. Bekasi Utara 17121', '', 'S1', 'O', ' \'3275031706930015', '0000037865237', '20075611242', '90.607.620.3-407.000', '082246942006', 'Marketing', 'ridhan@garudamart.com', 'ridhan.jpg', 1, 5, 12),
(54, 'Muhammad Rivaldi', 'Mas', 'rivaldi', 'Xx#rivaldi', 'G2008224', '14', '24-Sep', 2020, 'Bekasi', '10-Feb', 2002, 'KP. Jati Kramat RT.005 RW.005 Kel. Jatikramat Kec. Jatikramat. Bekasi 17421', '', 'SMK', '-', '3275091002020008', '0000509436472', '20084597986', '-', '089637839802', 'Partman', 'rivaldimuhammad429@gmail.com', 'ipal.jpg', 1, 5, 12),
(55, 'Sinta Riski Anisa Putri', 'Mba', 'sinta', 'Xx#sinta', 'G2108225', '15', '5-Jan', 2021, 'Balikpapan', '27-Oct', 1996, 'Jl. Soekarno Hatta KM.20 RT.046 RW.000 Kel. Karang Joang Kec. Balikpapan Utara. Balikpapan. Kal-Tim 76127', '', 'D2', '-', '6471016710960003', '', '', '41.168.724.7-721.000', '082340800651', 'Admin', 'shintaminii027@gmail.com', 'default.png', 1, 5, 12);

-- --------------------------------------------------------

--
-- Table structure for table `kasbon`
--

CREATE TABLE `kasbon` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nama_id` int(11) NOT NULL,
  `date_created` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `durasi_angsuran` int(128) NOT NULL,
  `kasbon` varchar(128) NOT NULL,
  `jumlah_angsuran` varchar(128) NOT NULL,
  `lainnya` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `note` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `bayar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasbon`
--

INSERT INTO `kasbon` (`id`, `nama`, `nama_id`, `date_created`, `email`, `durasi_angsuran`, `kasbon`, `jumlah_angsuran`, `lainnya`, `status`, `note`, `keterangan`, `foto`, `bayar`) VALUES
(2, 'Amanda mahfiroh', 16, '26-Jan-2021', 'amanda@garudamart.com', 2, '1000000', '500000', '', '2', '', '', '', 'Lunas'),
(11, 'Amanda mahfiroh', 16, '26-Jan-2021', 'amanda@garudamart.com', 2, '1500000', '1juta dan 500 ribu', '1juta dan 500 ribu', '', 'okeh mantap', '', 'manda.jpg', 'Lunas'),
(14, 'Silvaleska', 7, '26-Jan-2021', 'jenab@gmail.com', 2, '3000000', '1500000', '', '1', '', 'biaya kuliah', '', 'Berlangsung'),
(15, 'Silvaleska', 7, '26-Jan-2021', 'jenab@gmail.com', 4, '2000000', '500000', 'Rp 500.000,00', '2', 'jangan lupa bayar yak kwkwkwk', 'liburan ke bali dada', '', 'Berlangsung'),
(16, 'Amanda mahfiroh', 16, '27-Jan-2021', 'amanda@garudamart.com', 4, '1000000', '250000', '', '2', 'okeh silahkan gunakan masa cuti anda dengan bijak', 'pembiayaan kuliah', 'manda.jpg', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `actived` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nama`, `actived`) VALUES
(1, 'Honda beat', 1),
(2, 'Daihatsu Grand Max Blaind fan', 1),
(3, 'Daihatsu Grand Max Silver', 1),
(4, 'Daihatsu Grand Max Putih', 1),
(6, 'Wuling Confero', 1),
(7, 'Toyota Hilux', 1),
(8, 'Mitsubishu Triton', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `id_nama` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `date_end` varchar(128) NOT NULL,
  `durasi` varchar(128) NOT NULL,
  `jam_berangkat` varchar(128) NOT NULL,
  `kendaraan` varchar(128) NOT NULL,
  `driver` varchar(128) NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  `jam_kembali` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `status` varchar(128) NOT NULL,
  `date_created` varchar(128) NOT NULL,
  `note` varchar(255) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id`, `nama`, `id_nama`, `email`, `tanggal`, `date_end`, `durasi`, `jam_berangkat`, `kendaraan`, `driver`, `deskripsi`, `jam_kembali`, `alamat`, `status`, `date_created`, `note`, `foto`) VALUES
(265, 'Sigit Prasetyo', 14, 'sigit@garudamart.com', 'Wed 20-Jan-2021', 'Thu 28-Jan-2021', '9', '20:11', '1', '1', 'igo / bawa barang ke kartika', '4:58 am', 'tesss update peminjaman', '5', '20-Jan-2021', '', 'sigitweb.jpg'),
(266, 'Sigit Prasetyo', 14, 'sigit@garudamart.com', 'Wed 20-Jan-2021', 'Fri 19-Feb-2021', '31', '20:18', '2', '2', 'igo / bawa barang ke kartika', '16:32 ', 'cuti acara keluarga tesss', '5', '20-Jan-2021', '', 'sigitweb.jpg'),
(267, 'Amanda mahfiroh', 16, 'amanda@garudamart.com', 'Thu 28-Jan-2021', 'Thu 28-Jan-2021', '1', '09:16', '1', '1', 'tessss update dari user', '11:04 ', 'liburan ke bali dada', '5', '28-Jan-2021', '', 'manda.jpg'),
(268, 'Yudi Saputra', 51, 'yudisaputra230700@gmail.com', 'Mon 22-Feb-2021', 'Mon 22-Feb-2021', '1', '14:17', '1', '2', 'tesss', '14:23 ', 'liburan ke bali', '5', '22-Feb-2021 07:17:11', '', 'yudi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role_menu`
--

CREATE TABLE `role_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spl`
--

CREATE TABLE `spl` (
  `id` int(11) NOT NULL,
  `kode_spl` varchar(20) NOT NULL,
  `date_created` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `date_end` varchar(128) NOT NULL,
  `divisi` varchar(128) NOT NULL,
  `anggota` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `mengetahui` varchar(128) NOT NULL,
  `emailhead` varchar(128) NOT NULL,
  `note` varchar(128) NOT NULL,
  `jam` varchar(6) NOT NULL,
  `kembali` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spl`
--

INSERT INTO `spl` (`id`, `kode_spl`, `date_created`, `status`, `nama`, `email`, `tanggal`, `date_end`, `divisi`, `anggota`, `pekerjaan`, `mengetahui`, `emailhead`, `note`, `jam`, `kembali`, `foto`) VALUES
(84, 'SPL-GMI-21-0001', '19-Feb-2021 09:25:40', '', 'Sigit Prasetyo', 'sigit@garudamart.com', 'Fri 19-Feb-2021', 'Fri 19-Feb-2021', '17', 'sigit punjati, Aceng Rusnadi, Andrias jasri rIngo', 'tes untuk print spl lho in guys', '', 'inggrid@garudamart.com', 'pekerjaan pak aceng: membantu menyiapkan ini itu dll ,pak darkim kjwjwjajkhfjkahfd fajkfdsjfhjdsf df jhjdhfj fhds, pak nyoto adj', '16:26', '15:26', 'masgan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `devisi` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `devisi`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(55, 'sigit prasetyo', 'Logistic', 'ssprasetyo08@gmail.com', 'default.jpg', '$2y$10$JZ7Vw65WtsTSqoGmaNwbM.wFiQ6FkzjgSCkBzuC4RtwWD6midcLZ6', 4, 1, 1600661162),
(56, 'sigit prasetyo', 'Finance', 'jenab@gmail.com', 'default.jpg', '$2y$10$vcJtiQCw.XOUMgenCKk1i.PtyTavKLwUIcGkRa5nZFsbgbLPaFJCO', 1, 1, 1600682253),
(58, 'sigit prasetyo@garudamart.com', 'Support', 'sigit@garudamart.com', 'default.jpg', '$2y$10$d6s8yCbAIh2F8IZ.lVPIzeeZ0DreMOphVlRxXL8QqBmwqdhxSQg9O', 2, 1, 1601876114),
(59, 'willian', 'Warehouse', 'wiliam@gmail.com', 'default.jpg', '$2y$10$g724UBPc13LtLyDOUPAWoOtceleWeORwUWg4SB7cbdmb5jBs3BVkG', 3, 1, 1602844295),
(60, 'Pak Alin', 'IT', 'alin@gis.com', '', '$2y$10$g724UBPc13LtLyDOUPAWoOtceleWeORwUWg4SB7cbdmb5jBs3BVkG', 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(128) NOT NULL,
  `menu_id` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(4, 2, 2),
(7, 1, 1),
(10, 4, 1),
(12, 4, 2),
(13, 4, 3),
(15, 3, 9),
(18, 5, 10),
(20, 4, 5),
(21, 1, 3),
(22, 2, 1),
(23, 2, 3),
(24, 3, 3),
(25, 3, 4),
(26, 5, 3),
(27, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'HRD'),
(3, 'User'),
(4, 'GA'),
(5, 'Setting');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'HRD'),
(3, 'Ga'),
(4, 'Super'),
(5, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 2, 'Dashboard', 'Hrd', 'fa fa-home', 1),
(2, 2, 'Data Karyawan', 'Hrd/data_karyawan', 'fa fa-users', 1),
(18, 3, 'Home', 'User', 'fa fa-home', 1),
(19, 3, 'Cuti', 'User/cuti', 'fa fa-file', 1),
(20, 3, 'Izin', 'User/izin', 'fa fa-file-text-o', 1),
(21, 2, 'Data Peminjaman', 'Hrd/admin_peminjaman', 'fa fa-car', 1),
(22, 1, 'Data Cuti', 'Hrd/cuti_acc', 'fa fa-file', 1),
(23, 2, 'Data Izin', 'Hrd/admin_izin', 'fa fa-file-text-o', 1),
(24, 5, 'Menu', 'Menu', 'fa fa-bars', 1),
(25, 5, 'Submenu', 'Menu/submenu', 'fa fa-sort-desc', 1),
(26, 5, 'Role', 'Admin/role', 'fa fa-user', 1),
(27, 3, 'Peminjaman', 'User/peminjaman', 'fa fa-car', 1),
(30, 4, 'Data Peminjaman', 'Ga/admin', 'fa fa-car', 1),
(31, 2, 'Data SPL', 'Hrd/admin_spl', 'fa fa-calendar-check-o', 1),
(32, 3, 'SPL', 'User/spl', 'fa fa-calendar-check-o', 1),
(33, 2, 'Data Absen', 'Hrd/absen', 'fa fa-calendar', 1),
(35, 2, 'Tambah Karyawan', 'Hrd/tambah_karyawan', 'fa fa-user-plus', 1),
(36, 5, 'Divisi', 'Menu/divisi', 'fa fa-arrow-circle-right', 1),
(38, 2, 'Data Cuti / ACC Head', 'Hrd/cuti_acc', 'fa fa-file', 1),
(39, 3, 'Kasbon', 'User/kasbon', 'fa fa-money', 1),
(41, 2, 'Data Kasbon', 'Hrd/admin_kasbon', 'fa fa-money', 1),
(42, 3, 'Karyawan', 'User/user', 'fa fa-user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(38, 'kartika@gmail.com', 'iN8uScS0b8Qs6jBnFB94enj6TY9z+ksNDvK+ACtM198=', 1600659460),
(41, 'jenab@gmail.com', '/GM2rT2R5C52on0cJtLK9FUkobfJ1k0fmsKawc4dL6g=', 1600682253),
(42, 'ssprasetyo08@gmail.com', 'zGrtETiqh/NjZG4XNMheCcnkyDIJz0IfpoAb0VSsB+U=', 1601437829),
(43, 'ssprasetyo08@gmail.com', '7MC+LEMgE2gvz8PoOzF8xcsFWm9ITG0IEpiqRVZAQUw=', 1601438081),
(44, 'ssprasetyo08@gmail.com', 'jFx9ZltBLQialHtgT5cyKZt3Q3IsZ1ajicmIbMGhnVw=', 1601438391),
(45, 'sigit@garudamart.com', 'dfCi+UbK4Bl9TuJCnR5K/m02dRxNhUtHdW1OBteyBvw=', 1601875978),
(46, 'sigit@garudamart.com', '5kyeGLipxJqvfq8ThrYYu3JKfX1IkH+rp9/VqC2R/lI=', 1601876114),
(47, 'wiliam@gmail.com', 'YbE6SZJSYyEKXFzSCp18ZtLAExovaTkkEOHa0edY2Ns=', 1602844295);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_data_user`);

--
-- Indexes for table `devisi`
--
ALTER TABLE `devisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_kasbon`
--
ALTER TABLE `input_kasbon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_cuti`
--
ALTER TABLE `jenis_cuti`
  ADD PRIMARY KEY (`id_jeniscuti`);

--
-- Indexes for table `jenis_izin`
--
ALTER TABLE `jenis_izin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasbon`
--
ALTER TABLE `kasbon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_menu`
--
ALTER TABLE `role_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spl`
--
ALTER TABLE `spl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=526;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_data_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `devisi`
--
ALTER TABLE `devisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `input_kasbon`
--
ALTER TABLE `input_kasbon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `jenis_cuti`
--
ALTER TABLE `jenis_cuti`
  MODIFY `id_jeniscuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jenis_izin`
--
ALTER TABLE `jenis_izin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `kasbon`
--
ALTER TABLE `kasbon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `role_menu`
--
ALTER TABLE `role_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spl`
--
ALTER TABLE `spl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
