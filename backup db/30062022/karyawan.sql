-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 30, 2022 at 08:53 AM
-- Server version: 10.2.43-MariaDB-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garud439_mockup`
--

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
(1, 'Lasmidi', 'Pak', 'lasmidi', 'gmi123', 'G11010007', '15', '1-Nov', 2010, 'Madiun', '20-Nov', 1961, 'Jl. Transad VI No. 15 Jati Ranggon. Jati sampurna Bekasi. 17432', '', 'SD', '-', '3275102011610004', '0001472462098', '10030281157', '93.741.035.5-447.000', '081296301906', 'Driver', 'adjengh@gmail.com', 'lasmidi.jpg', 1, 5, -1),
(2, 'Bunga Ratnani', 'Ibu', 'bunga', 'gmi123', 'G11010006', '2', '1-Dec', 2010, 'jakarta', '1-Mar', 1985, 'Komplek DKI Blok A6 No.12 RT 009/013 Sunter Agung Tanjung priok Jakarta Utara 14350', '', 'S1', 'A', '3172024103850009', '0000037671186', '14029173110', '24.720.748.3-048.000', '0811817023', 'Head', 'bunga@garudamart.com', 'bunga.jpg', 1, 10, 12),
(3, 'Siti Anisa Maelani', 'Mba', 'anisa', 'gmi123', 'G14010075', '1', '12-Aug', 2014, 'Purbalingga', '14-May', 1996, 'Wanogara Wetan RT/RW: 002/001. Kel. Wanogara Wetan Kec. Rembang. Kab. Purbalingga Jawa Tengah 53356', '', 'SMK', '-', '3303135405960001', '0001017534504', '14029173219', '81.886.640.2-529.000', '08568477612', 'AP', 'anisa@garudamart.com', 'anisa.jpg', 1, 5, -2),
(4, 'Toto Nihyana', 'Pak', 'toto', 'gmi123', 'G15010082', '13', '27-Nov', 2015, 'Cilacap', '8-Mar', 1977, 'Dsn. Peundeuy RT 04/RW 09 Kel. Panulisan Barat Kec. Dayeuhluhur Kab. Cilacap Jateng 53266', '', 'SMP', 'B', '3301160803770002', '0002648579995', '16032037208', '91.241.990.0-522.000', '081298044644', 'Team Leader', 'totogaruda04@gmail.com', 'toto.jpg', 1, 5, -2),
(5, 'M. Suhail S', 'Pak', 'suhail', 'gmi123', 'G14080076', '13', '17-Oct', 2014, 'Ujung Pandang', '3-Dec', 1974, 'Jl. Raya PS Kecapi Gg. Namin Rt. 001 RW. 004 Kel. Jatiwarna Kec. Pondok Melati Bekasi 17415', '', 'SMK', 'O', '3172050312740004', '0001290988809', '14037439826 D1', '91.128.295.2-044.000', '082312022121', 'Head', 'suhail@garudamart.com', 'suhail.jpg', 0, 1, -3),
(6, 'Achmad Gustian', 'Mas', 'achmad', 'gmi123', 'G1501101', '15', '30-Aug', 2016, 'Jakarta', '31-Aug', 1996, 'KP. Pamahan RT.001 RW.008 Kel. Jatimekar Kec. Jatiasih. Bekasi 17422', '', 'SMK', 'O', '3175043108960003', '0002100067852', '18006190997', '93.761.840.3-005.000', '089643787310', 'Driver', 'gustianachmad@gmail.com', 'ahmad.jpg', 1, 5, -3),
(7, 'Meilissa', 'Mba', 'meilissa', 'gmi123', 'G1601100', '13', '16-Sep', 2016, 'Ambon', '5-May', 1986, 'Komp. Jati permai I jl. Nakula no. 54 jatirahayu pondok melati bekasi 17414', '', 'S1', 'B', '3275124505860001', '0002511007345', '18006191011', '44.517.207.5-432.000', '087884198422', 'Senior Service Adm', 'meilissa@garudamart.com', 'mel.jpg', 1, 1, -1),
(8, 'Azwita Febriyanti', 'Mba', 'azwita', 'gmi123', 'G1601110', '1', '21-Nov', 2016, 'bekasi', '16-Feb', 1987, 'Jl. Setia I No. 23 RT/RW. 005/012 Kel. Jatiwaringin Kec. Pondok Gede. Bekasi 17411', '', 'D3', 'A', '3275085602870011', '0001621140726', '18006191029', '98.548.536.6-432.000', '087882091602', 'AR', 'wita@garudamart.com', 'wita.jpg', 1, 5, -1),
(9, 'Aceng Rusnadi', 'Pak', 'aceng', 'gmi123', 'G1701112', '18', '10-Apr', 2017, 'Cilacap', '4-May', 1970, 'Dusun Peundeuy RT.003 RW. 008 Kel. Panulisan Barat Kec. Dayeuhluhur. Cilacap. Jawa Tengah 53266', '', 'SMA', 'A', '3301160405700001', '0002511007356', '18006191037', '77.426.837.9-522.000', '081347456055', 'Head', 'acengrusnadi04@gmail.com', 'aceng.jpg', 1, 1, -2),
(10, 'Ahmad Sugiyanto', 'Mas', 'sugiyanto', 'gmi123', 'G1701113', '13', '18-Apr', 2017, 'Klaten', '4-Aug', 1990, 'Jl. Mahakam RT.003 RW.003 Kel. Mojopunggung Kec. Giri. Banyuwangi 68425', '', 'SMK', 'B', '3510170408900001', '0000701293241', '18006191045', '91.869.917.4-627.000', '081807444929', 'Mekanik', 'ahmad.s040890@gmail.com', 'sugi.jpg', 1, 5, -9),
(11, 'Alfons Vicky Daniels', 'Mas', 'alfons', 'gmi123', 'G1708130', '14', '29-May', 2017, 'Balikpapan', '9-Jan', 1990, 'Jl. Sepinggan Baru No 4 RT/RW. 026/000 Sepinggan. Balikpapan Selatan. Kota Balikpapan. Kal Tim', '', 'SMK', 'O', '6471050901900002', '0001148258092', '18006191060', '66.858.187.9-728.000', '085921047867', 'Head', 'alfons@garudamart.com', 'alfons.jpg', 1, 1, -6),
(12, 'Sunyoto', 'Pak', 'sunyoto', 'gmi123', 'G1601103', '18', '25-Jan', 2017, 'Batang', '12-Dec', 1973, 'Dukuh kumesu RT 19/RW 5 Kel. Desa kumesu 51273', '', 'SD', '-', '3325041212730001', 'PBI', '19004278503', '93.200.528.3-513.000', '085327027677', 'Manufacture', 'nyoto2302@gmail.com', 'nyoto.jpg', 1, 5, -3),
(13, 'Iwan Ase', 'Pak', 'iwan', 'gmi123', 'G1501096', '13', '10-Jun', 2017, 'Cilacap', '12-Jan', 1988, 'Dusun Panulisan. RT 004/ RW 002 Kel. Panulisan Kec. Dayeuhluhur. Kab. Cilacap 53266', '', 'SLTP', 'AB', '3301161201880001', '0002643505817', '19004279741', '91.241.920.7-522.000', '081314496082', 'Mekanik', 'sabianase@gmail.com', 'ase.jpg', 1, 5, -3),
(14, 'Eko Kiswanto', 'Pak', 'eko', 'gmi123', 'G1701117', '13', '14-Jul', 2017, 'Semarang', '27-Oct', 1990, 'BTN AD Jl. Bacang C III No. 9 RT/TW. 002/0012 Kel. Sukamaju Baru Kec. Tapos. Depok 16462', '', 'SMK', 'A', '3324082710900001', '0000807811499', '18006191078', '59.355.872.9-513.000', '087880216178', 'Mekanik', 'kiswanto90@gmail.com', 'eko.jpg', 1, 1, -1),
(15, 'Ahmad Haerul Huda', 'Pak', 'huda', 'gmi123', 'G1701118', '13', '14-Jul', 2017, 'Jember', '20-Jul', 1991, 'Dsn. Padukuan Lor RT. 005 Rw. 002 Karang Semanding. Balung. Kab Jember Jawa Timur 68161', '', 'SMK', 'O', '3509102007910003', '0002511007367', '18006191086', '93.719.829.9-626.000', '085779740515', 'Mekanik', 'khoirulyhuda07@gmail.com', 'huda.jpg', 1, 5, -11),
(16, 'Melly Sulissetia Ningrum', 'Ibu', 'sulis', 'gmi123', 'G1701126', '1', '26-Jul', 2017, 'Purworejo', '15-Jun', 1996, 'Kp. Pondok Ranggon RT 006/RW 003. Jati Murni. Pondok Melati. Kota Bekasi 17431', '', 'SMA', '-', '3306085506960004', '0002511007334', '18006191094', '84.067.177.0-447.000', '083844160790', 'Head', 'sulissetia@garudamart.com', 'sulis.jpg', 0, 1, 7),
(17, 'Jacky Haryanto', 'Mas', 'jacky', 'gmi123', 'G1701132', '14', '31-Jul', 2017, 'Bekasi', '24-Jan', 1996, 'Kp. Pondok Ranggon Sasak Jikin RT 01/RW 05 No. 33 Kel. Jatimurni Kec. PondoK Melati 17431', '', 'SMK', '-', '3275122401960004', '0001338581441', '18006191102', '93.657.196.7-447.000', '085717564012', 'Admin', 'jacky@garudamart.com', 'jacky.jpg', 1, 5, -1),
(18, 'Ben Yoseph Nugroho Tri Hartanto', 'Pak', 'yoseph', 'gmi123', 'G1701135', '14', '16-Oct', 2017, 'Bekasi', '31-Mar', 1994, 'Jl. Setia II No. 23 RT.007/004 Kel. Jatiwaringin Kec. Pondok Gede - Bekasi 17411', '', 'D3', 'A', '3275083103940017', '0001742869192', '18006191136 D1', '74.169.035.8-447.000', '085215151221', 'Spv', 'Benyosephnugroho@gmail.com', 'yosep.jpg', 0, 10, 3),
(19, 'Angga Prayoga', 'Mas', 'angga', 'gmi123', 'G1701136', '14', '23-Oct', 2017, 'Bekasi', '15-Jun', 1992, 'Jl. Setia I No. 9 RT 005/RW 004 Kel. Jatiwaringin Kec. Pondok Gede 17411', '', 'SMK', '-', '3275081506920018', '0002511007323', '18006191144 D1', '93.070.675.9-447.000', '089630913358', 'Partman', 'Anggatotenk60@gmail.com', 'angga.jpg', 1, 5, 9),
(20, 'Bennedita Tambunan ', 'Mba', 'dita', 'gmi123', 'G1701137', '2', '26-Oct', 2017, 'Jakarta', '28-Dec', 1999, 'Kp. Kebantenan RT 007/RW 006 Kel. Jatiasih Kec. Jatiasih Bekasi 17423', '', 'SMK', '-', '3275096812990007', '0002615586412', '18006191151', '91.361.212.3-447.000', '085893557933 ', 'Admin', 'dita@garudamart.com', 'dita.jpg', 1, 5, -1),
(21, 'Sheintriana Ayu Putri', 'Mba', 'triana', 'Xx#triana', 'G1701138', '2', '26-Oct', 2017, 'Depok', '3-Aug', 1995, 'Perum Darmawangsa Residence Jl. Prambanan 7 Blok BP9 No 12 RT 005/ RW 014 Kel. Satria Mekar Kec. Tambun Utara', '', 'SMK', 'O', '3276024308950008', '0001771081705', '18006191169 D1', '72.933.106.6-009.000', '0895366528621', 'PURCHASING', 'triana@garudamart.com', 'triana.jpg', 1, 5, -3),
(22, 'Bonifacio Mau Buti', 'Pak', 'boni', 'gmi123', 'G1708139', '22', '6-Nov', 2017, 'maumela', '13-Sep', 1987, 'Jl. Mulawarman no. 10 RT. 011 RW. 000 Kel. Sepingan Kec. Balikpapan Selatan', '', 'SMA', 'O', '6471051309870010', '0001449849969', '18006191177', '-', '082251091975', 'Marketing', 'boni@garudamart.com', 'boni.jpg', 1, 5, -5),
(23, 'Kanisius Kefi', 'Pak', 'kefi', 'gmi123', 'G1701141', '18', '26-Oct', 2017, 'Siolasis', '11-Nov', 1981, 'Jl. Raya Hankam-Ujung Aspal RT 001/RW 008 Jatiranggon. Jatisampurna Bekasi', '', 'SD', 'AB', '5303011111810004', '0002511007378', '18006191185', '93.759.378.8-447.000', '081281793006', 'Fabrikasi', 'kenskefi8@gmail.com', 'kefi.jpg', 1, 5, 5),
(24, 'Sabri', 'Pak', 'sabri', 'gmi123', 'G1801144', '13', '2-Feb', 2018, 'Ujung Pandang', '5-Jun', 1982, 'Jl. Raya pasar kecapi 66 namin no 45 RT 001/RW 004 Jatiawarna Pondok melati. Bekasi 17415', '', 'SMA', 'B', '3275120506820005', '0001726753206', '18032308191 D1', '93.740.981.1-447.000', '081315865636', 'MEKANIK', 'sabrihaq82@gmail.com', 'sabri.jpg', 1, 5, 3),
(25, 'Violentino Felix Ardiyanto Utoyo', 'Mas', 'felix', 'gmi123', 'GI801147', '18', '22-Feb', 2018, 'Semarang', '22-Jul', 1998, 'Jl. Bina Asih 3E Cluster Jatiasih Village Blok F1 No.9 RT 006/RW 008  Kel. Jatiasih Kec. Jatiasih. Bekasi ', 'STMIK Nusa mandiri', 'S1', 'A', '3275092207980013', '0001467199991', '18032308183', '90.923.016.1-447.000', '081385747746', 'Admin', 'felix@garudamart.com', 'felix.jpg', 1, 10, -4),
(26, 'Silvalescha Astarani', 'Mba', 'silva', 'gmi123', 'GI801148', '2', '5-Mar', 2018, 'Jakarta', '23-Jun', 1998, 'Sakura Regncy Jl. Bunga Sakura XIV Blok T-20 RT.004 RW.017 Kel. Jatiasih Kec. Jatiasih. Bekasi 17423', 'STMIK Nusa mandiri', 'S1', 'B+', '3275096306980017', '0001719362733', '18053332328', '91.202.218.3-477.000', '087785382601', 'Admin', 'silva@garudamart.com', 'silva.jpg', 0, 5, -1),
(27, 'Mohamad Ilvan Ridhoni', 'Mas', 'ilvan', 'gmi123', 'G1801155', '14', '6-Apr', 2018, 'Jakarta', '14-Feb', 1997, 'KTP: Jl. Harsono RM RT.003 RW.004 Kel. Ragunan Kec. Pasar Minggu. Jakarta Selatan 12550 / Domisili: Jl. Raya Hankam Sasak Jikin RT 01/RW 05 KEL. Jatimurni. Bekasi', '', 'SMK', '-', '3174041402970004', '0000042756557', '19004278529', '92.909.142.9-017.000', '085695357097', 'Partman', 'ilavanridhoni52@gmail.com', 'ilvan.jpg', 1, 5, -2),
(28, 'Yogi Eka Pratama', 'Mas', 'yogi', 'gmi123', 'G1801158', '15', '11-Apr', 2018, 'Bekasi', '15-Jun', 1996, 'KP. Pondok Ranggon  RT 001/RW 005 No. 86 Kel. Jati Murni. Kec. Pondok Melati. Bekasi 17431', '', 'SMK', '-', '3275121506960003', '0000506952505', '19004278511', '80.056.859.4-447.000', '082124960091', 'Staff', 'gepengyogi@gmail.com', 'yogi.jpg', 1, 5, -1),
(29, 'Yugo Miharjo Darkim', 'Pak', 'darkim', 'gmi123', 'G1801159', '18', '4-May', 2018, 'Purbalingga', '6-Feb', 1969, 'Wanogara Wetan RT/RW: 002/001. Kel. Wanogara Wetan Kec. Rembang. Kab. Purbalingga Jawa Tengah 53356', '', 'SMP', 'O', '3303130602690001', '0001017534486', '18066015662', '91.667.276.9-529.000', ' 0813820466010', 'MANUFAKTURE', 'yugomiharjodarkim@gmail.com', 'darkim.jpg', 1, 5, -2),
(30, 'Alberthus Tandek ', 'Pak', 'alberth', 'gmi123', 'G1808170', '13', '5-Sep', 2018, 'Makale Tator', '20-May', 1971, 'Jl. Pongtiku Gg. Rantepao No. 7 RT/RW. 013/000 Kel. Singa Gembara Kec. Sangatta Utara. Kutai Timur. Kaltim 76611', 'Mesin', 'S1', 'AB', '6408042005710006', '0001903179284', '14037690188', '14.712.538.9-721.000', '08111149926', 'Mekanik', 'albert@garudamart.com', 'albert.jpg', 1, 5, -5),
(31, 'Vincentia Hanna Wibowo', 'Mba', 'tia', 'gmi123', 'G1801179', '2', '26-Oct', 2018, 'Jakarta', '26-Jan', 1994, 'Jl. Pisang lumut No. 10 RT 06/RW 09 Kel. Kota Baru Kec. Bekasi Barat. Bekasi 17133', 'Teknik Elektro', 'S1', 'O', '3275026601940005', '0001737471385', '19007802986', '86.285.501.2-427.000', '085710986126', 'PURCHASING', 'tia@garudamart.com', 'tia.jpg', 1, 1, -1),
(32, 'Mu Inggrid', 'Ibu', 'inggrid@garudamart.com', '123', 'G1801180', '23', '1-Nov', 2018, 'Sanggau', '4-Jul', 1986, 'Bekasi Timur Regency 3 Cluster Florite Blok F9 No. 26  RT.012 RW.006 Kel. Paduranen Kec. Mustika Jaya. Bekasi 17156', 'Ekonomi', 'S1', 'B+', '3275074407860017', '0001717478324', '19015234990', '67.096.176.2-432.000', '087788777235', 'HRD', 'inggrid@garudamart.com', 'inggrid.jpg', 1, 2, -1),
(33, 'Anderson Simangunsong', 'Mas', 'anderson', 'gmi123', 'G1801182', '22', '1-Nov', 2018, 'Tebing Tinggi', '17-Oct', 1992, 'Jl. Cipendawa Lama RT. 005 RW. 007 Kel. Bojong Menteng Kec. Rawalumbu Bekasi 17117', '', 'D III', 'B', '1276031710920001', '0001962783044', '19015234982', '44.048.475.6-114.000', '085362897392', 'Marketing', 'anderson@garudamart.com', 'erson.jpg', 1, 5, 6),
(34, 'Muhamad Risman', 'Mas', 'risman', 'gmi123', 'G1905185', '13', '7-Jan', 2019, 'Tasikmalaya', '30-Jul', 1989, 'Kp. Limbangan RT/RW. 005/007 Cikadongdong. Singaparna. Tasikmalaya 46418', '', 'SMK', 'B', '3206263007890001', '0001962093093', '19007803026', '92.299.957.8-425.000', '082255692505', 'Mekanik', 'risman.omod@gmail.com', 'risman.jpg', 1, 5, -5),
(35, 'Sigit Prasetyo', 'Mas', 'sigit', 'gmi', 'G1901187', '17', '28-Jan', 2019, 'Brebes', '12-Jun', 1997, 'KTP: DK Kubang Urang RT/RW: 003/008 Kel. Cilibur Kec. Paguyangan. Brebes 52276/Domisili: Jl. Kemang Raya No. 28A  Jaticempaka. Pondok Gede. Bekasi ', 'Nurul Huda PGY', 'SMA', 'A', '3329041206970007', '0001656569722', '19034139840', '91.281.160.1-501.000 ', '085604111395', 'IT Support', 'sigit@garudamart.com', 'sigit.jpg', 1, 4, -2),
(36, 'Hulda Vincensia Masiglaat', 'Mba', 'hulda', 'gmi123', 'G1901190', '1', '11-Feb', 2019, 'Bekasi', '3-Jul', 2000, 'Kp. Rawa Semut RT. 001/012 No. 26 Kel. Margahayu Kec. Bekasi Timur 17113', 'Akuntansi', 'SMK', '-', '3275015307000009', '0002272012143', '19034139857', '90.442.300.1-407.000', '089659498996', 'Cashier', 'hulda@garudamart.com', 'hulda.jpg', 1, 5, 12),
(37, 'Achmad Firdaus', 'Mas', 'firdaus', 'gmi123', 'G1901191', '15', '15-Feb', 2019, 'Bekasi', '28-Apr', 1998, 'KP. Pondok Ranggon RT/RW. 001/005. Jatimurni. Pondok Melati. Bekasi 17431', '', 'SD', '-', '3275122804980003', '0002766552726', '19034139881', '-', '0895391806028', 'Office Boy', 'ahmdfirdauss334@gmail.com', 'uus.jpg', 1, 5, -1),
(38, 'Supandi Irawan', 'Pak', 'pandi', 'gmi123', 'G1901193', '18', '20-Feb', 2019, 'Bekasi', '7-Jul', 1989, 'Jl. Nangka Siman Atas Baru RT/RW 002/003 Kel. Jatibening Kec. Pondok Gede. Bekasi 17413', '', 'SLTA', '-', '3275080707890022', '0002096239162', '19034139873', '93.258.658.0-447.000', '085921267637', 'Fabrication', 'supandiirawan6@gmail.com', 'pandi.jpg', 1, 5, -10),
(39, 'Urbanus Tombi', 'Pak', 'urbanus', 'gmi123', 'G1908194', '15', '12-Mar', 2019, 'langda', '11-Jun', 1976, 'Jl. Sukarno Hatta RT/RW. 047/000 Karang Joang. Balikpapan Utara. Kaltim 76127', '', 'SMK', '-', '6472040512760004', '0002196872403', '19046802096', '-', '081258213491', 'Driver', 'urbanustombi24@gmail.com', 'urbanus.jpg', 1, 5, 11),
(40, 'Andreas Jasri Siringo-ringo', 'Mas', 'ringo@garudamart.com', '123', 'G1901195', '15', '18-Mar', 2019, 'Dolok Masihul', '17-Apr', 1997, 'Telaga Mas Blok G2 No. 50. RT/RW. 013/014. Harapan Baru. Bekasi Utara 17123', 'Bhayangkara', 'S1', 'B', '3275031804970016', '0002216592832', '19046802088', '74.355.684.7-407.000', '082114171075', 'ADMIN GA', 'ringo@garudamart.com', 'ringo.jpg', 0, 3, -2),
(41, 'Alek Gunawan', 'Mas', 'alek', 'gmi123', 'G1901196', '13', '25-Mar', 2019, 'bekasi', '20-Jul', 1992, 'Kp. Kebantenan No. 19 RT 004/RW 008 Kel. Jatiasih Kec. Jatiasih Bekasi 17423', '', 'SMK', 'O', '3275092007920017', '0001647999472', '19046802070', '16.927.206.9-432.000', '089650596910', 'MEKANIK', 'gunawanalex55@gmail.com', 'alex.jpg', 1, 5, 11),
(42, 'Heri Setiawan', 'Mas', 'heri', 'gmi123', 'G1901199', '18', '18-Jan', 2019, 'Batang', '20-Oct', 1999, 'Dukuh Kumesu RT.019 RW.005 Kel. Kumesu Kec. Reban Kab. Batang Jawa Tengah 51273', '', 'SMK', 'A', '3325042010990002', '000611036267', '19063223960', '93.133.804.0-513.000', '082326526948', 'Manufacture', 'herisetiawan6948@gmail.com', 'heri.jpg', 1, 5, -7),
(43, 'Ahmed Gibran Coreda', 'Mas', 'gibran', 'gmi123', 'G1905202', '13', '24-Jul', 2019, 'Tanjung Enim', '24-Jul', 2000, 'Jl. Lingga Raya No. 52 RT/RW: 000/000 Kel. Lingga Kec. Lawang Kidul Muara Enim. Sumatera Selatan 31711', '', 'SMK', 'AB+', '1603072407000001', '0001514250461', '19092225879', '94.483.271.6-313.000', '089628433850', 'Helper', 'ahmedgibran25@gmail.com', 'gibran.jpg', 1, 5, -5),
(44, 'Ferdianus Lambe Manggasa', 'Mas', 'ferdianus', 'gmi123', 'G1908205', '15', '30-Jul', 2019, 'Balikpapan', '11-Feb', 1989, 'Jl. D.I Panjaitan No. 09 RT/RW 055/000 Kel. Gunung Samarinda Kec. Balikpapan Utara. Kal Tim', '', 'SMA', 'B', '6471031102890002', '0002217994536', '19073559791', '-', '082153211415', 'Office Boy', 'ferdianuslm@gmail.com', 'lambe.jpg', 1, 5, -5),
(45, 'Dhony Ariwibowo', 'Mas', 'dhony', 'gmi123', 'G1905206', '13', '5-Aug', 2019, 'Tanjung Enim', '28-Jan', 1998, 'Jl. Alamanda Blok E No. 8 BTN Air Paku. Kel. Tanjung Enim Selatan  Kec. Lawang Kidul. Muara Enim. Sumatra Selatan 31714', '', 'SLTA', 'A', '1603072801980003', '0001882768871', '19092225887', '-', '0895637373288', 'Driver', 'dhodon280198@gmail.com', 'dhony.jpg', 1, 5, 1),
(46, 'Rony Rudiansyah', 'Mas', 'rony', 'gmi123', 'G1908208', '22', '12-Aug', 2019, 'Nganjuk', '21-Feb', 1995, 'Jl. Mulawarman RT/RW. 005/000 Kel. Lamaru Kec. Balikpapan Timur. Balikpapan', '', 'SMK', '-', '3518072102950003', '0002904762071', '19082276692', '-', '082255382246', 'Marketing', 'rony@garudamart.com', 'roni.jpg', 1, 5, -4),
(47, 'Fernando Gomgom Aritonang', 'Mas', 'gomgom', 'gmi123', 'G1908210', '22', '12-Aug', 2019, 'Doloksanggul', '12-Jan', 1994, 'KTP: Jl. Karya. Kel. Pasar Doloksanggul Kec. Doloksanggul. Humbang Hasunatan 22457/Domisili : Jl. Malioboro No. 67 RT/RW 37/00 Kel. Gunung Bahagia Kec. Balikpapan Selatan. Balikpapan. KALTIM 76281', '', 'D3', 'O', '1216061201940001', '0000013913155', '19082276700', '82.089.136.4-127.000', '08111176829', 'Marketing', 'gomgom@garudamart.com', 'gomgom.jpg', 0, 5, 2),
(48, 'Surya Dinata', 'Pak', 'surya', 'gmi123', 'G1908218', '15', '22-Oct', 2019, 'jakarta', '27-Oct', 1985, 'Jl. H. Harun VI RT/RW: 005/011 Kel. Jatirahayu Kec. Pondok Melati. Bekasi 17414', '', 'SMK', '-', '3175032710850012', '0002340465131', '19092225929', '81.841.049.0-002.000', '08998813093', 'Driver', 'suryarendi2013@gmail.com', 'surya.jpg', 1, 5, 3),
(49, 'Metahsari', 'Mba', 'metah', 'gmi123', 'G1908219', '2', '28-Oct', 2019, 'Bekasi', '23-Sep', 1997, 'Pondok Surya Mandala Jl. Surya Aasri I Blok L2 No. 5 Kel. Jaka Mulya. Kec. Bekasi Selatan Kota Bekasi 17146', '', 'D3', 'B', '3275046309970001', '0001282050538', '19092225911', '91.380.628.7-432.000', '082272790075', 'ADMIN', 'methasari@garudamart.com', 'metah.jpg', 1, 5, -1),
(50, 'Amanda Maghfiroh Chairani', 'Mba', 'amanda', 'Xxamanda', 'G1908220', '14', '28-Oct', 2019, 'Bekasi', '22-Dec', 1999, 'Jl. Duku D8/2 Perum. Sapta Pesona RT.004/008. Jatiluhur. Jatiasih 17425', '', 'SMA', 'A', '3275096212990014', '0002198540204', '19092225903', '93.703.916.2-447.000', '082130849184', 'Admin', 'amanda@garudamart.com', 'manda.jpg', 1, 5, -1),
(51, 'Yudi Saputra', 'Mas', 'yudi', 'gmi123', 'G2008221', '15', '2-Mar', 2020, 'Jakarta', '23-Jul', 2000, 'KTP: Lubang Buaya RT 013 RW 001 Kel. Lubang Buaya Kec. Cipayung Jakarta Timur 13810 / Rumah: Jl. Raya Hankam Gg. Sasak Jikin RT. 001 RW. 005 Kel. Jatimurni Kec. Pondok Melati Bekasi 17431', '', 'SMA', 'A', '3175102307000008', '0001840884232', '20028849592', '-', '089608517669', 'Office Boy', 'yudisaputra230700@gmail.com', 'yudi.jpg', 1, 5, -1),
(52, 'Vinna Rosalina', 'Mba', 'vinna', 'gmi123', 'G2008222', '15', '1-Jun', 2020, 'Bekasi', '25-May', 1996, 'KP Sawah RT/RW: 001/003 Kel. Jatimelati Kec. Pondok Melati. Bekasi 17113', '', 'SMK', 'O', '3275126505960002', '0002643795505', '20046263149', '-', '087872698075', 'OB / OG', 'vinnarosalina07@gmail.com', 'vinna.jpg', 1, 5, -2),
(53, 'Ridhan Fauzan', 'Mas', 'ridhan', 'gmi123', 'G2008223', '22', '24-Aug', 2020, 'Bekasi', '17-Jun', 1996, 'Taman Wisma Asri Blok AA25 No 17 RT.007 RW. 028 Kel. Teluk Pucung Kec. Bekasi Utara 17121', '', 'S1', 'O', ' \'3275031706930015', '0000037865237', '20075611242', '90.607.620.3-407.000', '082246942006', 'Marketing', 'ridhan@garudamart.com', 'ridhan.jpg', 1, 5, 7),
(54, 'Muhammad Rivaldi', 'Mas', 'rivaldi', 'gmi123', 'G2008224', '14', '24-Sep', 2020, 'Bekasi', '10-Feb', 2002, 'KP. Jati Kramat RT.005 RW.005 Kel. Jatikramat Kec. Jatikramat. Bekasi 17421', '', 'SMK', '-', '3275091002020008', '0000509436472', '20084597986', '-', '089637839802', 'PARTMEN', 'rivaldimuhammad429@gmail.com', 'ipal.jpg', 1, 5, -1),
(55, 'Sinta Riski Anisa Putri', 'Mba', 'sinta', 'gmi123', 'G2108225', '15', '5-Jan', 2021, 'Balikpapan', '27-Oct', 1996, 'Jl. Soekarno Hatta KM.20 RT.046 RW.000 Kel. Karang Joang Kec. Balikpapan Utara. Balikpapan. Kal-Tim 76127', '', 'D2', '-', '6471016710960003', '', '21011888746', '41.168.724.7-721.000', '082340800651', 'ADMIN GA', 'shintaminii027@gmail.com', 'sinta.jpg', 1, 5, 12),
(102, 'Bernadetta Anna Purwita Sari', '', 'anna', 'gmi123', 'G568469', '23', '1-Mar', 2011, 'Jakarta', '20-Aug', 1977, 'Komplek Sakura Regency Jl. Sakura Raya II Blok N No. 1 RT/RW: 002/017 Kel. Jatiasih Kec. Jatiasih Bekasi 17423', 'Atmajaya', 'S1', 'B', '654665454', '0001308014278', '10030281082 D1', '57.528.393.2-432.000', '08111033311', 'HRD', 'anna@garudamart.com', 'anna.jpg', 1, 2, 12),
(103, 'Helena Jati', '', 'helena', 'gmi123', 'G2101226', '15', '21-Apr', 2021, 'Jakarta', '1-Aug', 1993, 'Jl. Rambutan Indah No. 12 RT.02 RW.011 Kel. Jatimekar, Kec. Jatiasih, Bekasi 17422', 'Atmajaya', 'S1', 'A', '3275094108930021', '0001769966357', '', '85.301.740.8-447.000', '08816828611', 'ADMIN GA', 'helenajati@gmail.com', 'helen.jpg', 0, 3, 12),
(104, 'Silvi Ramadianti', '', 'silvi', 'gmi123', 'G2101227', '1', '26-Apr', 2021, 'Purwodadi', '25-Jan', 1998, 'Komp. Mediterania Regency Cikunir, Jl.Bougenville 1 Blok B no.76, Jatibening 17146', 'akuntasi/ Universitas Gunadarma', 'S1', '-', '1207236501980008', '', '', '', '082125221429', 'ACC PAYABLE', 'Finance.Silvi@garudamart.com', 'silvi1.jpg', 1, 5, 12),
(105, 'Rizky  Bangkit Andrian', '', 'rizky', 'gmi123', 'G-2101228', '14', '21-May', 2021, 'Bekasi', '20-May', 1995, 'Jl. Beringin raya RT. 04/04 No.163 Kranji Bekasi barat', 'UNIVERSITAS BHAYANGKARA', 'S1', '-', '-', '', '', '', '089699845944', 'SPV', 'rizky@garudamart.com', 'rizky.jpg', 1, 1, 11),
(106, 'IRINDA AULIYASARI H', '', 'IRINDA', 'gmi123', 'G-2101231', '2', '25-May', 2021, 'NGAWI', '23-Apr', 1997, 'JL. BUNGA SAKURA RAYA II BLOK N NO.5 JATIASIH BEKASI', 'UNIVERSITAS TELKOM', 'S1', '-', '-', '', '', '', '085778762604', 'ADMIN', 'IRINDA@GARUDAMART.COM', 'irinda.jpg', 0, 5, 12),
(107, 'SLAMET RIYANTO', '', 'SLAMET', 'gmi123', 'G-2101230', '18', '25-May', 2021, 'PEMALANG', '17-Jun', 1992, 'WALAGSANGA RT 07/02 MOGA PEMALANG', 'MI 01 WALANGSANGA', '-pilih jenjang-', '-', '-', '', '', '', '083872837095', 'Fabrication', 'UMMAMNENDAR46@GMAIL.COM', 'slamet.jpg', 1, 5, -2),
(108, 'Grace Dessyca Kahiking', '', 'grace', 'gmi123', 'G-2101232', '22', '14-Jun', 2021, 'Bekasi', '11-Dec', 1996, 'Chandra Baru Jl.Anggrek B 80 Rt002/021 Pondok Melati', 'SMAN 6 Bekasi', '-pilih jenjang-', '', '-', '-', '-', '-', '082114781115', 'ADMIN', 'grace@garudamart.com', 'grace.jpg', 1, 5, -1),
(109, 'Nana Handayana', '', 'NANA', 'gmi123', 'G2101236', '18', '29-Jun', 2021, 'Cilacap', '26-Jan', 1993, 'DUSUN CIWALEN RT 02/01 CIWALEN DAYEUHLUHUR, CILACAP JAWA TENGAH', 'NEGERI 2 DAYEUHLUHUR', '-pilih jenjang-', '', '3301162601930001', '', '', '', '083820651613', 'Fabrication', 'nana@garudamart.com', 'nan.jpg', 1, 5, 12),
(110, 'RUSMANTO', '', 'RUSMANTO', 'gmi123', 'G2101237', '18', '29-Jun', 2021, 'CILACAP', '3-May', 1979, 'DUSUN PANULISAN RT 03/01 PENULISAN DAYEUHLUHUR, CILACAP', '-', 'SMP', '-', '3301160305790001', '', '', '', '081221927224', 'Fabrication', 'RUSMANTO@GARUDAMART.COM', 'rismanto.jpg', 0, 5, 12),
(111, 'DEBI NUR WIBOWO', '', 'debi', 'gmi123', 'G2101234', '13', '29-Jun', 2021, 'CILACAP', '29-Jun', 2003, 'JLN.SADEWA TIMUR,RT02/06 ,KAB.CILACAP', '01 SAMPANG', '-pilih jenjang-', '', '-', '', '', '', '085773482955', 'HELPER', 'bowoalpenliebe54@gmail.com', 'debi.jpg', 1, 5, 12),
(112, 'CAHYADI SETIAWAN', '', 'cahyadi', 'gmi123', 'G2101233', '13', '22-Jun', 2021, '', '28-Jun', 0, '-', '-', '-pilih jenjang-', '', '-', '', '', '', '-', 'HELPER', 'CAHYADI@GMI.COM', 'cahyadi1.jpg', 1, 5, 12),
(113, 'AHMAD NUR', '', 'AHMAD NUR', 'gmi123', 'G2101229', '18', '16-Jul', 2021, 'Sumbe Rejo', '29-Nov', 2001, 'Dusun Mekar Sari RT.004 RW.006 Kel. Sumber Rejo Kec. Waway Karya, Lampung Timur', '-', 'SMA', '-', '1807202911010001', ' 0000342186669', '-', '-', '-', 'Fabrication', 'NUR@GARUDAMART.COM', 'cowo.png', 1, 5, 12),
(114, 'MARKUS PALIMBONG', '', 'MARKUS', 'gmi123', 'G2101238', '13', '21-Jul', 2021, 'KUPANG', '7-Aug', 1996, '-', '-', '-pilih jenjang-', '-', '-', '-', '-', '-', '082150880153', 'HELPER', 'MARKUS@GMI.COM', 'cowo1.png', 1, 5, 12),
(115, 'Sri Yulianti', '', 'yuli', 'gmi123', 'G2101240', '1', '20-Aug', 2021, 'Yogyakarta', '7-Jul', 1983, 'Rawa Semut No. 69 RT006 RW011 Kel. Margahayu Kec. Bekasi Timur, Bekasi', '-', '-pilih jenjang-', '', '3275014707830029', '0001641984726', '-', '-', '-', 'Head / SPV', 'head.finance@garudamart.com', 'cewe.png', 1, 1, 12),
(116, 'Bayu Riyanto', '', 'bayu', 'gmi123', 'G2101241', '18', '5-Oct', 2021, 'Kebumen', '8-Apr', 1992, 'Jl. Brigjen Katamso RT006 RW007 Kel. Wonokriyo Kec. Gombang, Kebumen, Jawa Tengah 54412', '-', '-pilih jenjang-', '-', '3305180804920003', '0000541810877', '17024646816', '', '083844999992', 'Fabrication', 'riyantobayu70@gmail.com', 'cowo2.png', 1, 5, 12),
(117, 'Harun Arian Lesse', '', 'harun', 'gmi123', 'G2201243', '2', '10-Jan', 2022, 'KUPANG', '27-Jun', 1996, 'Perum Bumi Teluk Jambe Blok T No. 177 RT004 RW011 Kel. Sukaharja Kec. Teluk Jambe Timur, Karawang, Jawa Barat 41361', '-', '-pilih jenjang-', '-', '3216132706960002', ' 0001824421252', '98.371.443.7-414.000', '-', '089525505171', 'ADMIN', 'harun@garudamart.com', 'harun.jpg', 1, 5, 12),
(118, 'Sharfina Eka Nauvanda', '', 'Sharfina', 'gmi123', 'G2101242', '18', '13-Dec', 2021, 'Jakarta', '19-Nov', 2000, 'Jl. Bojong Molek IV F23 No.22 RT04 RW14 Kec. Rawalumbu Kel. Bojong Rawalumbu', '-', 'SMA', '-', '3175025911000006', '0001218337569', '-', '-', '087771070923', 'ADMIN', 'sharfinaeka12@gmail.com', 'cewe1.png', 1, 5, 12),
(119, 'Aldian Dwi Putra', '', 'aldian ', 'gmi123', 'G2201252', '22', '9-May', 2022, 'Padang', '10-Sep', 1996, 'Pondok Pinang J-3 RT003 RW009 Kel. Lubuk Buaya Kec. Kota Tangah, Padang Sumbar 25173', 'Univ. Negeri Padang', 'S1', '-', '1371111109960011', '0000163247332', '-', '', '085265417731', 'MARKETING', 'aldian@garudmart.com', 'cowo.jpg', 1, 5, 12),
(120, 'Puji Satrio', '', 'puji', 'gmi123', 'GG2201245', '13', '9-Feb', 2022, 'Jakarta', '23-Feb', 1992, 'Jl. Aren Jaya 5 RT006 RW002 Kel. Aren Jaya Kec. Bekasi Timur, Kota Bekasi 17111', '-', 'SMA', '-', '3275012302920034', '0000508146592', '-', '82.456.598.0-407.000', '081281056811', 'MEKANIK', 'fujisatrio@gmail.com', 'cowo1.jpg', 1, 5, 12),
(121, 'Shinthya Indriayana', '', 'Shinthya ', 'gmi123', 'G2201251', '15', '9-May', 2022, 'Bekasi', '6-Sep', 1996, 'Jl. P. Sumba 2 No.443 RT006 RW010 Kel. Aren Jaya Kec. Bekasi Timur, Bekasi 17111', 'SMK Strada Budi Luhur', 'SMA', 'B', '3275014609960026', '0001622771829', '-', '75.419.228.4-407.000', '081212349097', 'ADMIN GA', 'ga@garudamart.com', 'cewe3.png', 1, 3, 12),
(122, 'SUKRON FAHRUDIN', '', 'sukron', 'gmi123', 'G2201247', '18', '25-Mar', 2022, 'CILACAP', '12-Nov', 1998, 'DK. CIWALEN RT 01/02 DAYEUH LUHUR', 'DAYEH LUHUR', 'SMA', '-', '3301161211980001', '0002983317513', '-', '-', '081326778320', 'FINISHING', 'sukronfakhrudin76@gmail.com', 'cowo3.jpg', 1, 5, 12),
(123, 'SELLY TRIYANI', '', 'SELLY', 'gmi123', 'G2201249', '18', '31-Mar', 2022, 'JAKARTA', '24-Apr', 1997, 'BEKASI TIMUR REGENSY 3, CLUSSTER JADE BELOK J9-28 CIMUNING MUSTIKA JAYA', 'AKUNTANSI', 'SMA', 'A', '3275116404970006', '-', '-', '746809532432000', '081315111822', 'ADMIN', 'SELLY@GARUDAMART.COM', 'cewe2.png', 1, 5, 12),
(124, 'JUSUF TRIHANDOKO', '', 'jusuf', 'gmi123', 'G2201251', '18', '31-Mar', 2022, 'MALANG', '19-Apr', 1981, 'JL. IR RAIS 17/354 RT 09/04 KOTA MALANG', '-', 'SMA', 'O', '3573041904810002', '0002510413007', '-', '740830070623000', '082112346929', 'FINISHING', 'JUSUF@GARUDAMART.COM', 'cowo3.png', 1, 5, 12),
(125, 'Nanda Perwira Negara', '', 'nanda', 'gmi123', 'G2201248', '14', '29-Mar', 2022, 'Tanjung Enim', '3-Oct', 1990, 'Talang Gabus RT005 RW002 Kel. Pasar Tanjung Enim Kec. Lawang Kidul, Kab. Muara Enim, Sumsel 31712', '-', 'S1', 'O', '1603070310900005', '0000029106178', '', '63.879.527.8-313.000', '081279813075', 'ADMIN', 'nanda@garudamart.com', 'nanda2.PNG', 1, 5, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
