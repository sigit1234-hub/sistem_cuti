-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 02:43 AM
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
  `tanggal` varchar(128) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `date_created`, `nama`, `tanggal`, `keterangan`) VALUES
(3, 24, 'Aceng Rusnadi', 'Wed 24-Feb-2021', 'gfsgfhfd update');

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
  `kuota_cuti` varchar(128) NOT NULL,
  `persetujuan_dari` varchar(128) NOT NULL,
  `mengetahui` varchar(128) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id`, `email`, `divisi`, `durasi`, `nama`, `nama_id`, `tanggal`, `date_created`, `kategori_cuti`, `date_end`, `status`, `status1`, `kuota_cuti`, `persetujuan_dari`, `mengetahui`, `keterangan`, `note`, `foto`) VALUES
(560, 'sigit@garudamart.com', '35', '2', 'Sigit Prasetyo', 1, 'Mon 15-Mar-2021', '15-Mar-2021 07:46:20', 'Personal', 'Tue 16-Mar-2021', '2', '2', '11                                                                                                        ', 'Ibu Bernadetta Anna P', 'Sigit Prasetyo', 'ke kampus bimbingan kerja praktek', '', 'sigit.jpg'),
(561, 'sigit@garudamart.com', '35', '2', 'Sigit Prasetyo', 1, 'Mon 15-Mar-2021', '15-Mar-2021 07:51:31', 'Personal', 'Tue 16-Mar-2021', '2', '2', '9                                                                                                        ', 'Ibu Bernadetta Anna P', 'Sigit Prasetyo', 'ke kampus bimbingan kerja praktek', 'okeh', 'sigit.jpg'),
(562, 'sigit@garudamart.com', '35', '1', 'Sigit Prasetyo', 1, 'Thu 18-Mar-2021', '18-Mar-2021 09:07:23', 'Melahirkan', 'Thu 18-Mar-2021', '1', '1', '7                                                                                                        ', '', '', 'ke kampus bimbingan kerja praktek', '', 'sigit.jpg'),
(563, 'sigit@garudamart.com', '35', '1', 'Sigit Prasetyo', 1, 'Thu 18-Mar-2021', '18-Mar-2021 09:15:10', 'Istri Melahirkan', 'Thu 18-Mar-2021', '1', '1', '7                                                                                                        ', '', '', 'ke kampus bimbingan kerja praktek', '', 'sigit.jpg'),
(564, 'sigit@garudamart.com', '35', '1', 'Sigit Prasetyo', 1, 'Thu 18-Mar-2021', '18-Mar-2021 09:22:03', 'Istri keguguran', 'Thu 18-Mar-2021', '1', '1', '7                                                                                                        ', '', '', 'ke kampus bimbingan kerja praktek cxcv ertdsdsgfdsgsgdsfgdsgds dsgdfgds dsfdsfs asd fafadfads  d adfdsfdasfd', '', 'sigit.jpg'),
(567, 'sigit@garudamart.com', '35', '1', 'Sigit Prasetyo', 1, 'Thu 01-Apr-2021', '01-Apr-2021 10:06:45', 'Melahirkan', 'Thu 01-Apr-2021', '1', '1', '7                                                                                                        ', '', '', 'ke kampus bimbingan kerja praktek', '', 'sigit.jpg'),
(568, 'sigit@garudamart.com', '17', '1', 'Sigit Prasetyo', 1, '2021-11-01', '01-Nov-2021 09:43:52', 'Personal', '2021-11-01', '2', '2', '7                                                                                                        ', 'Ibu Bernadetta Anna P', 'Sigit Prasetyo', 'ke kampus bimbingan kerja praktek', '', 'sigit.jpg'),
(569, 'sigit@garudamart.com', '17', '1', 'Sigit Prasetyo', 1, '2021-11-15', '15-Nov-2021 03:56:25', 'Personal', '2021-11-15', '2', '2', '6                                                                                                        ', 'Ibu Bernadetta Anna P', 'Sigit Prasetyo', 'tesss update peminjaman', '', 'sigit.jpg'),
(570, 'sigit@garudamart.com', '17', '1', 'Sigit Prasetyo', 1, '2021-12-28', '28-Dec-2021 10:06:20', 'Istri Melahirkan', '2021-12-28', '1', '1', '5                                                                                                        ', '', '', 'fgsdfg', '', 'sigit.jpg'),
(571, 'sigit@garudamart.com', '17', '1', 'Sigit Prasetyo', 1, '2021-12-28', '28-Dec-2021 10:08:16', 'Istri Melahirkan', '2021-12-28', '1', '1', '5                                                                                                        ', '', '', 'ke kampus bimbingan kerja praktek', '', 'sigit.jpg'),
(572, '', '', '1', 'Sigit Prasetyo', 1, '2021-12-31', '31-Dec-2021 08:42:35', '', '2021-12-31', '1', '1', '5                                                                                                        ', '', '', 'ke kampus bimbingan kerja praktek', '', ''),
(573, '', '', '1', 'Sigit Prasetyo', 1, '2021-12-31', '31-Dec-2021', '', '2021-12-31', '1', '1', '', '', '', 'ke kampus bimbingan kerja praktek', '', '');

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
(1, 'FINANCE', 'Ibu Yuli', 'head.finance@garudamart.com'),
(2, 'LOGISTIC', 'Bunga Ratnani', 'bunga@garudamart.com'),
(13, 'SERVICE', 'M. Suhail', 'suhail@garudamart.com'),
(14, 'WAREHOUSE', 'Rizky', 'rizky@garudamart.com'),
(15, 'GANERAL AFFAIR', 'Mu inggrid', 'inggrid@garudamart.com'),
(17, 'IT', 'Mu inggrid', 'inggrid@garudamart.com'),
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
(2, 'PAK SURYA', 0),
(3, 'MAS AHMAD', 0),
(4, 'MAS IGO', 0),
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
(5, 15, '27-Jan-2021', 'Silvaleska', '3', 500000, 'maret'),
(6, 15, '27-Jan-2021', 'Silvaleska', '4', 500000, 'april'),
(8, 16, '27-Jan-2021', 'Amanda mahfiroh', '1', 200000, 'angsuran bulan januari'),
(17, 11, '04-Feb-2021', 'Amanda mahfiroh', '0', 1500000, ''),
(18, 2, '04-Feb-2021', 'Amanda mahfiroh', '0', 1000000, ''),
(22, 15, '25-Feb-2021', 'Silvaleska', '3', 200000, 'tess'),
(28, 16, '26-Feb-2021', 'Amanda mahfiroh', '2', 240000, 'tessl'),
(29, 16, '26-Feb-2021', 'Amanda mahfiroh', '3', 200000, 'harusnya angsuran ke-2'),
(30, 16, '26-Feb-2021', 'Amanda mahfiroh', '4', 100000, 'update status');

-- --------------------------------------------------------

--
-- Table structure for table `input_mr`
--

CREATE TABLE `input_mr` (
  `id` int(11) NOT NULL,
  `kode_mr` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `part` varchar(128) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `qty` varchar(5) NOT NULL,
  `ouv` varchar(128) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `note` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `note_admin` varchar(255) NOT NULL,
  `status_mr` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `input_mr`
--

INSERT INTO `input_mr` (`id`, `kode_mr`, `status`, `part`, `deskripsi`, `qty`, `ouv`, `lokasi`, `note`, `foto`, `tanggal`, `note_admin`, `status_mr`) VALUES
(31, 'MR-A-GMI-21-0001', '1', '1', 'barang 1', '1', 'ea', 'j3', 'tesss', '', '', '', ''),
(32, 'MR-A-GMI-21-0001', '1', '2', 'barang 2', '1', 'wa', 'j4', 'tesss catatan', '', '', '', ''),
(33, 'MR-A-GMI-21-0002', '1', '12', 'tesss mr ke 2', '1', 'ea', 'j5', 'tesss', '', '', '', ''),
(34, 'MR-A-GMI-21-0002', '1', '13', 'tesss mr ke 2 barang ke 2', '2', 'ea', 'j5', 'dfdsf', '', '', '', ''),
(35, 'MR-A-GMI-21-0003', '1', 'w', 'ewr', 'er', 'erewr', 'rwr', 'rewr', '', '', '', ''),
(36, 'MR-A-GMI-21-0004', '1', '5', 'tes', '1', 'tes', 'tes', 'tes', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `input_spl`
--

CREATE TABLE `input_spl` (
  `id` int(11) NOT NULL,
  `kode_input_spl` varchar(128) NOT NULL,
  `anggota` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `input_spl`
--

INSERT INTO `input_spl` (`id`, `kode_input_spl`, `anggota`, `pekerjaan`, `note`) VALUES
(37, 'SPL-GMI-21-0001', '22', 'pekerjaan', 'tesss catatan'),
(38, 'SPL-GMI-21-0002', '12', 'd', 'sdfds'),
(39, 'SPL-GMI-21-0002', '15', 'vdgdsgdsgfdsadgdasgdasgdasg', 'dasgdasgdsgdasgasgasgdasgds'),
(40, 'SPL-GMI-21-0002', '9', 'dgdgdsgdsgs', 'adgdsgdgdasgs'),
(41, 'SPL-GMI-21-0002', '2', 'dgdgdsgdsg', 'asdgdasgdsgs'),
(42, 'SPL-GMI-21-0002', '12', 'dfdfdasfsd', 'asfasfds rewrewrewrewrwsfsfa fs efds fasdf rffzasf'),
(43, 'SPL-GMI-21-0002', '18', 'fdsfdsfasfdasfdsfds', 'afdsfdasfdasfdsfdasfdsgfese'),
(44, 'SPL-GMI-21-0002', '45', 'dfasfdsfdsfdas', 'adfdsfdferewre'),
(45, 'SPL-GMI-21-0002', '17', 'fdsfs', 'sdfdsfasfs'),
(46, 'SPL-GMI-21-0002', '44', 'pekerjaan', 'dfafdsfdss'),
(47, 'SPL-GMI-21-0585', '5', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(48, 'SPL-GMI-21-0585', '4', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(49, 'SPL-GMI-21-0585', '13', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(50, 'SPL-GMI-21-0585', '14', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(51, 'SPL-GMI-21-0585', '15', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(52, 'SPL-GMI-21-0585', '10', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(53, 'SPL-GMI-21-0585', '24', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(54, 'SPL-GMI-21-0585', '41', 'Instalasi UT SKP D85E-SS-2', 'Team Welder'),
(55, 'SPL-GMI-21-0585', '111', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(56, 'SPL-GMI-21-0585', '112', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(58, 'SPL-GMI-21-0586', '9', 'bracket', '-'),
(59, 'SPL-GMI-21-0586', '23', 'bracket', '-'),
(60, 'SPL-GMI-21-0586', '107', 'bracket', '-'),
(61, 'SPL-GMI-21-0586', '38', 'bracket', '-'),
(62, 'SPL-GMI-21-0586', '113', 'bracket', '-'),
(63, 'SPL-GMI-21-0586', '12', 'spmc', '-'),
(64, 'SPL-GMI-21-0586', '42', 'spmc', '-'),
(66, 'SPL-GMI-21-0586', '109', 'spmc', '-'),
(67, 'SPL-GMI-21-0588', '35', 'setting radio', 'setting 4 radio'),
(68, 'SPL-GMI-21-0589', '34', 'backup assembling DT4135,4204,4232  ', 'backup assembling DT4135,4204,4232 '),
(69, 'SPL-GMI-21-0589', '43', 'backup assembling DT4135,4204,4232 ', 'backup assembling DT4135,4204,4232 '),
(70, 'SPL-GMI-21-0587', '2', '-', '-'),
(71, 'SPL-GMI-21-0590', '36', 'Input transaksi bank', '-'),
(72, 'SPL-GMI-21-0590', '115', 'Persiapan dokumen persiapan pajak', '-'),
(73, 'SPL-GMI-21-0591', '2', 'cek stock GIS terpakai GMI', 'via excel dan accurate'),
(74, 'SPL-GMI-21-0592', '23', 'bracket', '-'),
(75, 'SPL-GMI-21-0592', '38', 'bracket', '-'),
(76, 'SPL-GMI-21-0592', '107', 'bracket', '-'),
(77, 'SPL-GMI-21-0592', '113', 'bracket', '-'),
(78, 'SPL-GMI-21-0592', 'Pilih Nama', 'bracket', 'BAYU'),
(79, 'SPL-GMI-21-0593', '5', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(80, 'SPL-GMI-21-0593', '4', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(81, 'SPL-GMI-21-0593', '14', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(82, 'SPL-GMI-21-0593', '15', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(83, 'SPL-GMI-21-0593', '24', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(84, 'SPL-GMI-21-0593', '112', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(85, 'SPL-GMI-21-0593', '111', 'Instalasi UT SKP D85E-SS-2', 'Team Service'),
(86, 'SPL-GMI-21-0594', '31', 'Tarik DO untuk PO GIS', 'Logistik'),
(87, 'SPL-GMI-21-0595', '34', '  -backup assembling DT4135,4204,4232 -proses ulang BAST 2x D375 -proses BAST pc1250 ex1201 -check horn ex1202 -setting idle tim', 'backup assembling DT4135,4204,4232 -proses ulang BAST 2x D375 -proses BAST pc1250 ex1201 -check horn ex1202 -setting idle timer ex1201,1202,dz1166'),
(88, 'SPL-GMI-21-0595', '43', 'backup assembling DT4135,4204,4232 -proses ulang BAST 2x D375 -proses BAST pc1250 ex1201 -check horn ex1202 -setting idle timer ', 'backup assembling DT4135,4204,4232 -proses ulang BAST 2x D375 -proses BAST pc1250 ex1201 -check horn ex1202 -setting idle timer ex1201,1202,dz1166'),
(89, 'SPL-GMI-21-0596', '25', 'jobcoasting', '-'),
(90, 'SPL-GMI-21-0597', '108', 'Laporan SO Marketing ', 'September 2021'),
(91, 'SPL-GMI-21-0598', '27', 'anter barang cargo bandara', 'driver ahmad agustian'),
(92, 'SPL-GMI-21-0599', '12', 'harnes spmc', '-'),
(93, 'SPL-GMI-21-0599', '42', 'harnes spmc', '-'),
(94, 'SPL-GMI-21-0599', '109', 'harnes spmc', '-'),
(95, 'SPL-GMI-21-0600', '5', 'Instalasi UT SKP', 'Team Service'),
(96, 'SPL-GMI-21-0600', '4', 'Instalasi UT SKP', 'Team Service'),
(97, 'SPL-GMI-21-0600', '13', 'Instalasi UT SKP', 'Team Service'),
(98, 'SPL-GMI-21-0600', '14', 'Instalasi UT SKP', 'Team Service'),
(99, 'SPL-GMI-21-0600', '15', 'Instalasi UT SKP', 'Team Service'),
(100, 'SPL-GMI-21-0600', '111', 'Instalasi UT SKP', 'Team Service'),
(101, 'SPL-GMI-21-0600', '112', 'Instalasi UT SKP', 'Team Service'),
(102, 'SPL-GMI-21-0600', '24', 'Instalasi UT SKP', 'Team Service'),
(103, 'SPL-GMI-21-0600', '41', 'Instalasi UT SKP', 'Team Service'),
(104, 'SPL-GMI-21-0601', '19', 'prepare hd 785 4 set, JO fatigue warning 100 set, pc1250 3 set', 'untuk jumat'),
(105, 'SPL-GMI-21-0601', '54', 'prepare hd 785 4 set, JO fatigue warning 100 set, pc1250 3 set', 'untuk jumat'),
(107, 'SPL-GMI-21-0601', '50', 'report data DM', 'untuk jumat'),
(108, 'SPL-GMI-21-0601', '105', 'monitoring, part spmc & double check job costing manufaktur', 'untuk jumat'),
(109, 'SPL-GMI-21-0602', '20', 'Update List Serial Number', '-'),
(110, 'SPL-GMI-21-0603', '49', 'Input IT GIS dan Kalkulasi', '-'),
(111, 'SPL-GMI-21-0599', '23', 'Harnes SPMC', '-'),
(112, 'SPL-GMI-21-0604', '30', 'mengerjakan Harness SPMC cap 777 10 set', 'GMI BPN'),
(113, 'SPL-GMI-21-0604', '114', 'Mengerjakan Harness SPMC cap 777 10 set', 'GMI BPN'),
(114, 'SPL-GMI-21-0605', '31', 'Kalkulasi  PO GIS', '-'),
(118, 'SPL-GMI-21-0608', '25', 'jobcoasting', '-'),
(119, 'SPL-GMI-21-0608', '42', 'harnes spmc', '-'),
(120, 'SPL-GMI-21-0608', '12', 'harnes spmc', '-'),
(121, 'SPL-GMI-21-0608', '109', 'harnes spmc', '-'),
(122, 'SPL-GMI-21-0608', '29', 'harnes spmc', '-'),
(123, 'SPL-GMI-21-0608', '23', 'bracket', '-'),
(124, 'SPL-GMI-21-0608', '107', 'bracket', '-'),
(125, 'SPL-GMI-21-0608', '110', 'harnes spmc', '-'),
(126, 'SPL-GMI-21-0608', '113', 'bracket', '-'),
(127, 'SPL-GMI-21-0608', '116', 'bracket', '-'),
(128, 'SPL-GMI-21-0608', '9', 'bracket', '-'),
(129, 'SPL-GMI-21-0608', '38', 'bracket', '-'),
(132, 'SPL-GMI-21-0607', '20', 'Lanjut Updte List DO ', '-'),
(133, 'SPL-GMI-21-0607', '108', 'BAST gantung dan SO', '-'),
(134, 'SPL-GMI-21-0609', '20', '-', '-'),
(135, 'SPL-GMI-21-0610', '105', 'monitoring, unit d 155 po gis 10 unit, d 85 2 unit ', 'd 155 delivery senin, d 85 delivery sabtu'),
(136, 'SPL-GMI-21-0610', '19', 'prepare d 155 10 set, d 85 2 set', 'd 155 delivery senin, d 85 delivery sabtu'),
(137, 'SPL-GMI-21-0610', '27', 'prepare d 155 10 set, d 85 2 set', 'd 155 delivery senin, d 85 delivery sabtu'),
(138, 'SPL-GMI-21-0610', '17', 'it d 155 10 set, d 85 2 set', 'd 155 delivery senin, d 85 delivery sabtu'),
(139, 'SPL-GMI-21-0611', '105', 'rekap dm all gudang, double check list job costing', '-'),
(140, 'SPL-GMI-21-0611', '50', 'report DM', '-'),
(143, 'SPL-GMI-21-0612', '115', 'Persiapan dokumen pemeriksaan pajak', 'Persiapan dokumen pemeriksaan pajak'),
(144, 'SPL-GMI-21-0612', '8', 'Persiapan dokumen pemeriksaan pajak', 'Persiapan dokumen pemeriksaan pajak'),
(145, 'SPL-GMI-21-0612', '3', 'Persiapan dokumen pemeriksaan pajak', 'Persiapan dokumen pemeriksaan pajak'),
(146, 'SPL-GMI-21-0612', '104', 'Persiapan dokumen pemeriksaan pajak', 'Persiapan dokumen pemeriksaan pajak'),
(147, 'SPL-GMI-21-0613', '32', 'Upgrade OSS RBA & Lapor LKPM 2021 GMI (bersama mba Sisca GIS)', '-'),
(148, 'SPL-GMI-21-0614', '5', 'Instalasi UT SKP', '-'),
(149, 'SPL-GMI-21-0614', '4', 'Instalasi UT SKP', '-'),
(150, 'SPL-GMI-21-0614', '14', 'Instalasi UT SKP', '-'),
(151, 'SPL-GMI-21-0614', '13', 'Instalasi UT SKP', '-'),
(152, 'SPL-GMI-21-0614', '24', 'Instalasi UT SKP', '-'),
(153, 'SPL-GMI-21-0614', '15', 'Instalasi UT SKP', '-'),
(154, 'SPL-GMI-21-0614', '111', 'Instalasi UT SKP', '-'),
(155, 'SPL-GMI-21-0614', '112', 'Instalasi UT SKP', '-'),
(156, 'SPL-GMI-21-0614', '41', 'Instalasi UT SKP', '-'),
(157, 'SPL-GMI-21-0615', '5', 'Instalasi UT SKP dan Trakindo', '-'),
(158, 'SPL-GMI-21-0615', '4', 'Instalasi UT SKP dan Trakindo', '-'),
(159, 'SPL-GMI-21-0615', '14', 'Instalasi UT SKP dan Trakindo', '-'),
(160, 'SPL-GMI-21-0615', '13', 'Instalasi UT SKP dan Trakindo', '-'),
(161, 'SPL-GMI-21-0615', '24', 'Instalasi UT SKP dan Trakindo', '-'),
(162, 'SPL-GMI-21-0615', '15', 'Instalasi UT SKP dan Trakindo', '-'),
(163, 'SPL-GMI-21-0615', '111', 'Instalasi UT SKP dan Trakindo', '-'),
(164, 'SPL-GMI-21-0615', '41', 'Instalasi UT SKP dan Trakindo', '-'),
(165, 'SPL-GMI-21-0616', '31', 'Lanjut Kalkulasi PO GIS, buat budgeting SPMC', '-'),
(166, 'SPL-GMI-21-0617', '43', '-Comissioning Internal Dt 4243,4334,4234 Ex 1202 ', 'Comissioning Internal Dt 4243,4334,4234 Ex 1202 '),
(167, 'SPL-GMI-21-0618', '34', '-Backup DT4202,4232  -Koneksi fwdlamp,foglamp,setting idle timer,fatique warning,autolamp,download spmc DT4135 ', '-Backup DT4202,4232  -Koneksi fwdlamp,foglamp,setting idle timer,fatique warning,autolamp,download spmc DT4135 '),
(168, 'SPL-GMI-21-0618', '43', '  -Backup DT4202,4232  -Koneksi fwdlamp,foglamp,setting idle timer,fatique warning,autolamp,download spmc DT4135 ', ' -Backup DT4202,4232  -Koneksi fwdlamp,foglamp,setting idle timer,fatique warning,autolamp,download spmc DT4135 '),
(169, 'SPL-GMI-21-0619', '34', '  -download SPMC DT 4344  -koneksi fog,fwd,strobe,fire,setting idle timer,f/warning,autolamp,download spmc DT4202,4232  -kordina', '  -download SPMC DT 4344  -koneksi fog,fwd,strobe,fire,setting idle timer,f/warning,autolamp,download spmc DT4202,4232  -kordinasi dan check manitou terkait rencana perbaikan ac'),
(170, 'SPL-GMI-21-0619', 'Pilih Nama', '  -download SPMC DT 4344  -koneksi fog,fwd,strobe,fire,setting idle timer,f/warning,autolamp,download spmc DT4202,4232  -kordina', ' -download SPMC DT 4344  -koneksi fog,fwd,strobe,fire,setting idle timer,f/warning,autolamp,download spmc DT4202,4232  -kordinasi dan check manitou terkait rencana perbaikan ac'),
(171, 'SPL-GMI-21-0620', '43', '  -download SPMC DT 4344  -koneksi fog,fwd,strobe,fire,setting idle timer,f/warning,autolamp,download spmc DT4202,4232  -kordina', '  -download SPMC DT 4344  -koneksi fog,fwd,strobe,fire,setting idle timer,f/warning,autolamp,download spmc DT4202,4232  -kordinasi dan check manitou terkait rencana perbaikan ac'),
(172, 'SPL-GMI-21-0621', '9', 'bracket', '-'),
(173, 'SPL-GMI-21-0621', '23', 'bracket', '-'),
(174, 'SPL-GMI-21-0621', '41', 'bracket', '-'),
(175, 'SPL-GMI-21-0621', '107', 'bracket', '-'),
(176, 'SPL-GMI-21-0621', '113', 'bracket', '-'),
(177, 'SPL-GMI-21-0621', '12', 'harnes spmc', '-'),
(178, 'SPL-GMI-21-0621', '42', 'harnes spmc', '-'),
(179, 'SPL-GMI-21-0621', '109', 'harnes spmc', '-'),
(180, 'SPL-GMI-21-0621', '110', 'harnes spmc', '-'),
(181, 'SPL-GMI-21-0621', '29', 'harnes fatique warning', '-'),
(182, 'SPL-GMI-21-0621', '116', 'bracket', '-'),
(183, 'SPL-GMI-21-0622', '34', 'backup Assembly DT4212,4222,4237  ', 'backup Assembly DT4212,4222,4237 '),
(184, 'SPL-GMI-21-0622', '43', 'backup Assembly DT4212,4222,4237 ', 'backup Assembly DT4212,4222,4237 '),
(185, 'SPL-GMI-21-0623', '27', 'anter barang cargo bandara', 'driver ahmad agustian'),
(187, 'SPL-GMI-21-0624', '12', 'harnes spmc', '-'),
(188, 'SPL-GMI-21-0624', '42', 'harnes spmc', '-'),
(189, 'SPL-GMI-21-0624', '109', 'harnes spmc', '-'),
(191, 'SPL-GMI-21-0624', '29', 'HARNES FATIQUE WARNING', '-'),
(192, 'SPL-GMI-21-0624', '23', 'bracket', '-'),
(194, 'SPL-GMI-21-0624', '107', 'bracket', '-'),
(195, 'SPL-GMI-21-0624', '38', 'bracket', '-'),
(196, 'SPL-GMI-21-0624', '116', 'bracket', '-'),
(197, 'SPL-GMI-21-0624', '113', 'bracket', '-'),
(198, 'SPL-GMI-21-0625', '115', 'Persiapan  dokumen pemeriksaan pajak', '-'),
(199, 'SPL-GMI-21-0625', '8', 'Cek DP PO GIS utk persiapan dokumen pemeriksaan pajak', '-'),
(200, 'SPL-GMI-21-0625', '36', 'Input transaksi bank 647', '-'),
(201, 'SPL-GMI-21-0626', '19', 'prepare hd 785 4 set,  dan pemidahan part SPMC dari j4 ke j3', '-'),
(202, 'SPL-GMI-21-0626', '54', 'prepare hd 785 4 set,  dan pemidahan part SPMC dari j4 ke j3', '-'),
(203, 'SPL-GMI-21-0626', '17', 'it hd 785 4 set,  dan pemidahan part SPMC dari j4 ke j3', '-'),
(204, 'SPL-GMI-21-0626', '105', 'monitoring hd 785 & pemindahan part SPMC', '-'),
(205, 'SPL-GMI-21-0627', '32', 'Input RI dan Tarik Invoice (GA)', '-'),
(206, 'SPL-GMI-21-0625', '3', 'Persiapakan dokumen pemeriksaan pajak', '-'),
(207, 'SPL-GMI-21-0628', '34', 'chek ulang fungsi SPMC DT4202,4135,koneksi fire,setting autolube>enginerunn ', '  backup Assembly DT4212,4222,4237   -chek ulang fungsi SPMC DT4202,4135,koneksi fire,setting autolube>enginerunn'),
(208, 'SPL-GMI-21-0628', '43', 'backup Assembly DT4212,4222,4237   -chek ulang fungsi SPMC DT4202,4135,koneksi fire,setting autolube>enginerunn', 'backup Assembly DT4212,4222,4237   -chek ulang fungsi SPMC DT4202,4135,koneksi fire,setting autolube>enginerunn '),
(209, 'SPL-GMI-21-0629', '35', 'Maintance cctv dan radio untuk jaringan gis', '-'),
(210, 'SPL-GMI-21-0630', '115', 'Mempersiapkan dokumen pemeriksaan pajak', '-'),
(211, 'SPL-GMI-21-0630', '104', 'Cek ppn masukan 2018', '-'),
(212, 'SPL-GMI-21-0630', '36', 'Input transaksi bank ', '-'),
(213, 'SPL-GMI-21-0631', '2', 'kalkulasi SPMC Trakindo', 'excel dan accurate'),
(214, 'SPL-GMI-21-0632', '31', 'tarik DO GMi dan RI GIS', '-'),
(215, 'SPL-GMI-21-0632', '20', 'Updte Oust PO, Outs DO Kembali dan Input List DO', '-'),
(217, 'SPL-GMI-21-0633', '23', 'bracket', '-'),
(218, 'SPL-GMI-21-0633', '41', 'bracket', '-'),
(219, 'SPL-GMI-21-0633', '107', 'bracket', '-'),
(220, 'SPL-GMI-21-0633', '116', 'bracket', '-'),
(221, 'SPL-GMI-21-0633', '38', 'bracket', '-'),
(222, 'SPL-GMI-21-0633', '113', 'bracket', '-'),
(223, 'SPL-GMI-21-0633', '42', 'harnes spmc', '-'),
(224, 'SPL-GMI-21-0633', '109', 'harnes spmc', '-'),
(225, 'SPL-GMI-21-0633', '110', 'harnes spmc', '-'),
(226, 'SPL-GMI-21-0633', '29', 'harnes spmc', '-'),
(227, 'SPL-GMI-21-0634', '8', 'Cek DP PO GIS tahun 2018 s/d 2019Untuk persiapan pemeriksaan pajak', 'Cek DP PO GIS tahun 2018 s/d 2019Untuk persiapan pemeriksaan pajak  '),
(228, 'SPL-GMI-21-0635', '34', 'Check error SPMC DT4232( OP DCDC CvtShort) -Replace theemistor,fuse(Dc converter belum di ganti,blum ada part spare) -Download S', 'Check error SPMC DT4232( OP DCDC CvtShort) -Replace theemistor,fuse(Dc converter belum di ganti,blum ada part spare) -Download SPMC -reset fault  -Check DT4234 Engine shutdown (fire surp active) '),
(229, 'SPL-GMI-21-0635', '43', '  -Check error SPMC DT4232( OP DCDC CvtShort) -Replace theemistor,fuse(Dc converter belum di ganti,blum ada part spare) -Downloa', '-Check error SPMC DT4232( OP DCDC CvtShort) -Replace theemistor,fuse(Dc converter belum di ganti,blum ada part spare) -Download SPMC -reset fault  -Check DT4234 Engine shutdown (fire surp active)  '),
(230, 'SPL-GMI-21-0633', '9', 'Harnes SPMC', '-'),
(231, 'SPL-GMI-21-0636', '115', 'Mempersiapkan dokumen pemeriksaan pajak', '-'),
(232, 'SPL-GMI-21-0636', '8', 'Cek DP PO GIS th 2018', '-'),
(233, 'SPL-GMI-21-0636', '104', 'Ngeprint laporan keuangan 2018', '-'),
(234, 'SPL-GMI-21-0636', '36', 'Input transaksi bank', '-'),
(235, 'SPL-GMI-21-0636', '3', 'Ngeprint laporan keuangan 2019', '-'),
(236, 'SPL-GMI-21-0637', '50', 'Input Data PIN DT ke DM base on Accurate', 'Di J5'),
(244, 'SPL-GMI-21-0638', '42', 'harnes spmc', '-'),
(245, 'SPL-GMI-21-0638', '29', 'harnes spmc', '-'),
(246, 'SPL-GMI-21-0638', '109', 'harnes spmc', '-'),
(247, 'SPL-GMI-21-0638', '110', 'harnes spmc', '-'),
(248, 'SPL-GMI-21-0639', '34', ' -commisioning internal PAMA DT4135,4204,4232  -Ttd BAST ex1202 di SM PAMA ', 'commisioning internal PAMA DT4135,4204,4232  -Ttd BAST ex1202 di SM PAMA'),
(249, 'SPL-GMI-21-0639', '43', '-commisioning internal PAMA DT4135,4204,4232  -Ttd BAST ex1202 di SM PAMA', '-commisioning internal PAMA DT4135,4204,4232  -Ttd BAST ex1202 di SM PAMA'),
(250, 'SPL-GMI-21-0640', '106', 'Training DM WH J3, Permintaan harga tender PT SSB (89 Items), PI invoice', '-'),
(252, 'SPL-GMI-21-0641', '25', 'Bikin Po & Job costing', 'po'),
(253, 'SPL-GMI-21-0642', '31', 'Kalkulasi  PO GIS dan Filing landed cost', '-'),
(254, 'SPL-GMI-21-0642', '20', 'aku ngerjain List DO-IT-DO Manual dan Failing', '-'),
(255, 'SPL-GMI-21-0643', '14', 'Instalasi PC400', '-'),
(256, 'SPL-GMI-21-0643', '13', 'Instalasi PC400', '-'),
(257, 'SPL-GMI-21-0643', '24', 'Instalasi PPC400', '-'),
(258, 'SPL-GMI-21-0643', '10', 'Instalasi PC400', '-'),
(259, 'SPL-GMI-21-0643', '15', 'Instalasi PC400', '-'),
(261, 'SPL-GMI-21-0645', '9', 'bracket', '-'),
(262, 'SPL-GMI-21-0645', '23', 'bracket', '-'),
(263, 'SPL-GMI-21-0645', '107', 'bracket', '-'),
(264, 'SPL-GMI-21-0645', '116', 'bracket', '-'),
(268, 'SPL-GMI-21-0646', '30', 'harness Fatig Warning 20 set', 'Teknisi'),
(269, 'SPL-GMI-21-0646', '11', 'Mengerjakan data manual, packing barang, susun barang', 'warehouse'),
(275, 'SPL-GMI-21-0650', '27', 'anter barang cargo bandara', 'driver ahmad agustian'),
(276, 'SPL-GMI-21-0651', '50', 'Training Lanjutan Gudang J3 dan Laporan Mingguan', 'bersama Irinda'),
(277, 'SPL-GMI-21-0652', '36', 'Input petty cash hld bln sept-okt', '-'),
(278, 'SPL-GMI-21-0652', '104', 'Input petty cash bpn & tj enim', '-'),
(279, 'SPL-GMI-21-0652', '8', 'Filling invoice on process, paid, customer received', '-'),
(280, 'SPL-GMI-21-0644', '2', 'kalkulasi SPMC Trakindo, stock minus', '-'),
(281, 'SPL-GMI-21-0648', '110', 'Harnes SPMC', '-'),
(282, 'SPL-GMI-21-0648', '109', 'Harnes SPMC', '-'),
(283, 'SPL-GMI-21-0648', '29', 'Harnes SPMC', '-'),
(285, 'SPL-GMI-21-0653', '19', 'Prepare Pick Up Part dan Packing PAMA ERKA', '-'),
(286, 'SPL-GMI-21-0653', '17', 'Prepare Pick Up Part dan Packing PAMA ERKA', '-'),
(287, 'SPL-GMI-21-0653', '27', 'Prepare Pick Up Part dan Packing PAMA ERKA', '-'),
(288, 'SPL-GMI-21-0653', '54', 'Prepare Pick Up Part dan Packing PAMA ERKA', '-'),
(289, 'SPL-GMI-21-0654', '34', 'commisioning PT.BA DT4135,4204,4232  ', 'commisioning PT.BA DT4135,4204,4232   '),
(290, 'SPL-GMI-21-0654', '43', 'commisioning PT.BA DT4135,4204,4232  ', 'commisioning PT.BA DT4135,4204,4232   '),
(292, 'SPL-GMI-21-0656', '34', '  -koneksi routing harness dan konesi fwd,strobe,foglamp,setting idle timer,f/warning,incline,autolamp,autolube(engine runn),dow', '  -koneksi routing harness dan konesi fwd,strobe,foglamp,setting idle timer,f/warning,incline,autolamp,autolube(engine runn),download SPMC DT4222,DT4212,DT4237,test esd in out  -setting ulang idle timer DT4135,4204,4232,EX1202,DZ1158  '),
(293, 'SPL-GMI-21-0656', '43', '  -koneksi routing harness dan konesi fwd,strobe,foglamp,setting idle timer,f/warning,incline,autolamp,autolube(engine runn),dow', '  -koneksi routing harness dan konesi fwd,strobe,foglamp,setting idle timer,f/warning,incline,autolamp,autolube(engine runn),download SPMC DT4222,DT4212,DT4237,test esd in out  -setting ulang idle timer DT4135,4204,4232,EX1202,DZ1158 '),
(294, 'SPL-GMI-21-0648', '116', 'Bracket', '-'),
(295, 'SPL-GMI-21-0648', '9', 'Bracket', '-'),
(296, 'SPL-GMI-21-0648', '23', 'Bracket', '-'),
(297, 'SPL-GMI-21-0648', '107', 'Bracket', '-'),
(298, 'SPL-GMI-21-0648', '113', 'Bracket', '-'),
(299, 'SPL-GMI-21-0648', '38', 'Bracket', '-'),
(300, 'SPL-GMI-21-0657', '20', 'Input LIST DO IT', '-'),
(301, 'SPL-GMI-21-0657', '108', 'Jobcosting ', '-'),
(302, 'SPL-GMI-21-0658', '27', 'anter barang cargo bandara', 'driver ahmad agustian'),
(303, 'SPL-GMI-21-0659', '19', 'Prepare Barang GMG', '-'),
(304, 'SPL-GMI-21-0659', '54', 'Prepare Barang GMG', '-'),
(305, 'SPL-GMI-21-0660', '9', 'bracket', '-'),
(306, 'SPL-GMI-21-0660', '23', 'bracket', '-'),
(307, 'SPL-GMI-21-0660', '107', 'bracket', '-'),
(309, 'SPL-GMI-21-0660', '113', 'bracket', '-'),
(310, 'SPL-GMI-21-0660', '38', 'bracket', '-'),
(311, 'SPL-GMI-21-0661', '34', 'monitoring unit untuk setting ulang di workshop Wheel Pama -standby site -kordinasi dngan bang wahyu terkait hasil inspeksi AC m', 'monitoring unit untuk setting ulang di workshop Wheel Pama -standby site -kordinasi dngan bang wahyu terkait hasil inspeksi manitou'),
(312, 'SPL-GMI-21-0661', '43', '  -monitoring unit untuk setting ulang di workshop Wheel Pama -standby site -kordinasi dngan bang wahyu terkait hasil inspeksi ', '  -monitoring unit untuk setting ulang di workshop Wheel Pama -standby site -kordinasi dngan bang wahyu terkait hasil inspeksi AC manitou  '),
(313, 'SPL-GMI-21-0660', '116', 'Bracket', '-'),
(314, 'SPL-GMI-21-0662', '9', 'bracket', '-'),
(315, 'SPL-GMI-21-0662', '23', 'bracket', '-'),
(316, 'SPL-GMI-21-0662', '113', 'bracket', '-'),
(317, 'SPL-GMI-21-0662', '107', 'bracket', '-'),
(318, 'SPL-GMI-21-0662', '116', 'bracket', '-'),
(319, 'SPL-GMI-21-0662', '38', 'bracket', '-'),
(320, 'SPL-GMI-21-0662', '29', 'Harnes SPMC', '-'),
(321, 'SPL-GMI-21-0662', '109', 'Harnes SPMC', '-'),
(322, 'SPL-GMI-21-0662', '110', 'Harnes SPMC', '-'),
(323, 'SPL-GMI-21-0662', '12', 'Harnes SPMC', '-'),
(324, 'SPL-GMI-21-0663', '1', 'tes', 'tes'),
(325, 'SPL-GMI-21-0664', '20', 'pekerjaan', 'adfdf'),
(326, 'SPL-GMI-21-0665', '43', 'pekerjaan', 'tesss catatan');

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
(52, 'Sigit Prasetyo', 35, 'Belum ada catatan', 'sigit@garudamart.com', 'Sun 28-Feb-2021', 'Sun 28-Feb-2021', 'Sakit', 'khjlkhfsf', '28-Feb-2021 16:50:24', '1', '1', 'sigit.jpg'),
(53, 'Mu Inggrid', 32, 'Belum ada catatan', 'inggrid@garudamart.com', 'Sun 28-Feb-2021', 'Sun 28-Feb-2021', 'Sakit', 'jkhfgkjshkjdf', '28-Feb-2021 16:51:19', '1', '1', 'inggrid.jpg'),
(54, 'Sigit Prasetyo', 35, 'Belum ada catatan', 'sigit@garudamart.com', 'Sun 28-Feb-2021', 'Sun 28-Feb-2021', 'Sakit', 'hyufhj', '28-Feb-2021 16:54:49', '1', '1', 'sigit.jpg'),
(56, 'Sigit Prasetyo', 1, 'Belum ada catatan', 'sigit@garudamart.com', 'Thu 25-Mar-2021', 'Thu 25-Mar-2021', 'Sakit', 'ke kampus bimbingan kerja praktek', '25-Mar-2021 05:37:15', '3', '1', 'sigit.jpg'),
(57, 'Sigit Prasetyo', 1, 'Belum ada catatan', 'sigit@garudamart.com', 'Thu 01-Apr-2021', 'Thu 01-Apr-2021', 'Sakit', 'ke kampus bimbingan kerja praktek', '01-Apr-2021 09:36:28', '1', '1', 'sigit.jpg'),
(58, 'Sigit Prasetyo', 1, 'Belum ada catatan', 'sigit@garudamart.com', 'Thu 01-Apr-2021', 'Thu 01-Apr-2021', 'Sakit', 'demam', '01-Apr-2021 09:46:05', '2', '1', 'sigit.jpg'),
(59, 'Sigit Prasetyo', 1, 'Belum ada catatan', 'sigit@garudamart.com', '2021-11-15', '2021-11-15', 'Sakit', 'ke kampus bimbingan kerja praktek', '15-Nov-2021 08:50:52', '1', '1', 'sigit.jpg');

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
-- Table structure for table `jo`
--

CREATE TABLE `jo` (
  `id` int(11) NOT NULL,
  `no_jo` varchar(128) NOT NULL,
  `date_created` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `part_number` varchar(128) NOT NULL,
  `po/mr` varchar(128) NOT NULL,
  `harga_ea` varchar(128) NOT NULL,
  `total` varchar(128) NOT NULL,
  `no_jbc` int(11) NOT NULL,
  `qty` int(128) NOT NULL,
  `vom` varchar(128) NOT NULL,
  `it` varchar(128) NOT NULL,
  `mulai` varchar(128) NOT NULL,
  `selesai` varchar(128) NOT NULL,
  `request` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `done` int(128) NOT NULL,
  `estimasi_selesai` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jo`
--

INSERT INTO `jo` (`id`, `no_jo`, `date_created`, `deskripsi`, `part_number`, `po/mr`, `harga_ea`, `total`, `no_jbc`, `qty`, `vom`, `it`, `mulai`, `selesai`, `request`, `status`, `lokasi`, `done`, `estimasi_selesai`) VALUES
(441, '000-587', '2020-04-06', 'BRACKET MODUL SPMC DZ375 &quot;', '10LBRM-375', '3110', '250000', '1250000', 16497, 5, 'EA', '87', 'Mon 30-Mar-2020', 'Mon 13-Apr-2020', 'LOGISTIK', 'On Progres', 'GIS', 3, '13-Apr-2020\r'),
(442, '000-588', '2020-04-06', 'HARNESS NEW  SPMC 375 ', '13L-HRSPMC375-K', 'TRACKINDO 48002623', '1000000', '1000000', 0, 1, 'SET', '', '6-Apr-2020', '', 'LOGISTIK', 'Done', 'GMI', 1, '\r'),
(443, '000-589', '2020-04-06', 'SWITCH BOX SPMC ', '11L-SPMC-SB-1530', 'TRACKINDO 48002623', '250000', '250000', 16479, 1, 'SET', '', '6-Apr-2020', '20-Apr-2020', 'LOGISTIK', 'Done', 'GMI', 1, '20-Apr-2020\r'),
(444, '000-590', '2020-04-08', 'PALANG MOBIL', '11L-2315/ASSET2', '3382', '350000', '1050000', 16504, 3, 'SET', '', '9-Apr-2020', '20-Apr-2020', 'LOGISTIK', 'Done', 'GIS', 3, '20-Apr-2020\r'),
(445, '000-591', '2020-04-08', 'BASE PLATE LOTOBOX 2 SYSTEM', '11L-1259-Q', 'MR 080402020-JO', '125000', '1250000', 16503, 10, 'EA', '', '9-Apr-2020', '9-Apr-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '9-Apr-2020\r'),
(446, '000-592', '2020-04-08', 'REPAIR BRACKET APAR QUESTER', '10L255-Q', 'MR 080402020-JO', '50000', '400000', 0, 8, 'EA', '', '9-Apr-2020', '9-Apr-2020', 'WAREHOUSE', 'Done', 'GMI', 8, '9-Apr-2020\r'),
(447, '000-593', '2020-04-08', 'HARNESS 4 METER 2 KABEL', '13L-HR4M2K', 'MR 080402020-JO-2', '25000', '375000', 16461, 15, 'SET', '', '8-Apr-2020', '14-Apr-2020', 'WAREHOUSE', 'Done', 'GMI ', 15, '14-Apr-2020\r'),
(448, '000-594', '2020-04-08', 'HARNES 10 METER 4 KABEL', '13L-HR10M4K', 'MR 080402020-JO-2', '25000', '375000', 16465, 15, 'SET', '', '8-Apr-2020', '14-Apr-2020', 'WAREHOUSE', 'Done', 'GMI ', 15, '14-Apr-2020\r'),
(449, '000-595', '2020-04-13', 'BASEPLATE LOTO 2 SYSTEM HORIZONTAL FOR CWE', '10L314', 'MR-DH-155', '125000', '1000000', 16505, 8, 'EA', '', '13-Apr-2020', '14-Apr-2020', 'SERVICE', 'Done', 'GMI', 8, '14-Apr-2020\r'),
(450, '000-596', '2020-04-15', 'SWITCH BOX CAT 6015 FOR 2L3-26KIT', '11L-SW-CAT6015', '3386', '250000', '500000', 16509, 2, 'SET', '', '23-Apr-2020', '24-Apr-2020', 'LOGISTIK', 'Done', 'GIS', 2, '24-Apr-2020\r'),
(451, '000-597', '2020-04-15', 'HARNES FOR SWITCHBOX CAT 6015 2L3-26KIT', '13L-HRSB', '3386', '400000', '800000', 16510, 2, 'SET', '', '23-Apr-2020', '24-Apr-2020', 'LOGISTIK', 'Done', 'GIS', 2, '24-Apr-2020\r'),
(452, '000-598', '2020-04-15', 'CABLE BATRE CAT 6015', '13L-CBCAT 6015', '3386', '75000', '150000', 16507, 2, 'SET', '', '23-Apr-2020', '24-Apr-2020', 'LOGISTIK', 'Done', 'GIS', 2, '24-Apr-2020\r'),
(453, '000-599', '2020-04-15', 'BOX CB CAT 6015', '11L-BCBCAT6015', '3386', '350000', '700000', 16508, 2, 'SET', '', '23-Apr-2020', '24-Apr-2020', 'LOGISTIK', 'Done', 'GIS', 2, '24-Apr-2020\r'),
(454, '000-600', '2020-04-15', 'BOX MODUL LED FOR LED LAMP CAT 6015', '11L-MODUL-LED-LAMP', '3386', '500000', '1000000', 16516, 2, 'SET', '', '16-Apr-2020', '28-Apr-2020', 'LOGISTIK', 'Done', 'GIS', 2, '28-Apr-2020\r'),
(455, '000-601', '2020-04-15', 'BRACKET BOX CB CAT 6015', '10L304-VN', '3386', '20000', '40000', 16541, 2, 'EA', '', '15-Apr-2020', '11-May-2020', 'LOGISTIK', 'Done', 'GIS', 2, '11-May-2020\r'),
(456, '000-602', '2020-04-15', 'BRACKET BOX LED LAMP CAT 6015', '10L305-VN', '3386', '200000', '400000', 16542, 2, 'EA', '', '15-Apr-2020', '11-May-2020', 'LOGISTIK', 'Done', 'GIS', 2, '11-May-2020\r'),
(457, '000-603', '2020-04-15', 'BRACKET LED 120 SL', '10L296-SL', '3386', '250000', '500000', 16543, 2, 'EA', '', '15-Apr-2020', '11-May-2020', 'LOGISTIK', 'Done', 'GIS', 2, '11-May-2020\r'),
(458, '000-604', '2020-04-15', 'BRACKET LED 120 SR', '10L296-SR', '3386', '250000', '500000', 16544, 2, 'EA', '', '15-Apr-2020', '11-May-2020', 'LOGISTIK', 'Done', 'GIS', 2, '11-May-2020\r'),
(459, '000-605', '2020-04-15', 'BRACKET LED 120 R', '10L296-R', '3386', '150000', '600000', 16545, 4, 'EA', '', '15-Apr-2020', '11-May-2020', 'LOGISTIK', 'Done', 'GIS', 4, '11-May-2020\r'),
(460, '000-606', '2020-04-15', 'BRACKET LED 360 W CABIN', '10L297-CABIN', '3386', '250000', '500000', 16546, 2, 'EA', '', '15-Apr-2020', '11-May-2020', 'LOGISTIK', 'Done', 'GIS', 2, '11-May-2020\r'),
(461, '000-607', '2020-04-15', 'BRACKET LED 360 W FR', '10L297-FR', '3386', '250000', '500000', 16547, 2, 'EA', '', '15-Apr-2020', '11-May-2020', 'LOGISTIK', 'Done', 'GIS', 2, '11-May-2020\r'),
(462, '000-608', '2020-04-15', 'HARNESS FOR LED LAMP CAT 6015', '13L-HR24F-26F', '3386', '400000', '800000', 16517, 2, 'SET', '', '28-Apr-2020', '28-Apr-2020', 'LOGISTIK', 'Done', 'GIS', 2, '28-Apr-2020\r'),
(463, '000-609', '2020-04-16', 'BRACKET WHEEL CHOKE (11L-2319)', '10L316', 'MR-DH-156', '300000', '2400000', 16502, 8, 'EA', '', '16-Apr-2020', '17-Apr-2020', 'SERVICE', 'Done', 'GMI ', 8, '17-Apr-2020\r'),
(464, '000-610', '2020-04-16', 'HARNES NEW SPMC 785 -K', '13L-HRSPMC-785-K-1', 'MR-DH-157', '1000000', '1000000', 16616, 1, 'SET', '', '20-Apr-2020', '24-Apr-2020', 'SERVICE', 'Done', 'GMI', 1, '24-Apr-2020\r'),
(465, '000-611', '2020-04-21', 'BRACKET APAR SCANIA ', '10L255-6P', 'MR-01704020202-JO', '100000', '500000', 16531, 5, 'EA', '', '21-Apr-2020', '5-May-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '5-May-2020\r'),
(466, '000-612', '2020-04-21', 'BRACKET RIVERS LAMP ', '10L285-5', 'MR-01704020202-JO', '150000', '3000000', 16592, 20, 'EA', '', '21-Apr-2020', '19-May-2020', 'WAREHOUSE', 'Done', 'GMI', 20, '19-May-2020\r'),
(467, '000-613', '2020-04-21', 'HARNES 2 METER 2 KABEL', '13L-HR2M2K', 'MR-01704020202-JO', '25000', '375000', 16499, 15, 'SET', '', '21-Apr-2020', '23-Apr-2020', 'WAREHOUSE', 'Done', 'GMI', 15, '23-Apr-2020\r'),
(468, '000-614', '2020-04-21', 'HARNESS RIVERS SCANIA', '13L-2L1-1F-24-SC', 'MR-020042020', '25000', '375000', 16506, 15, 'SET', '', '21-Apr-2020', '24-Apr-2020', 'WAREHOUSE', 'Done', 'GMI', 15, '24-Apr-2020\r'),
(469, '000-615', '2020-04-21', 'HARNESS LED COMBINASI', '13L-LEDCOMB', 'MR-020042020', '25000', '250000', 16515, 10, 'SET', '', '21-Apr-2020', '28-Apr-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '28-Apr-2020\r'),
(470, '000-616', '2020-04-21', 'BRACKET APAR HD/PC 6KG', '10L255-6P', 'MR-020042020', '150000', '3000000', 16615, 20, 'EA', '', '21-Apr-2020', '14-May-2020', 'WAREHOUSE', 'Done', 'GMI', 20, '14-May-2020\r'),
(471, '000-617', '2020-04-28', 'CABLE BATRE NYAF 95 RED', '5L5-9-30RD', '3399', '75000', '75000', 16518, 1, 'ROLL', '', '28-Apr-2020', '29-Apr-2020', 'LOGISTIK', 'Done', 'GIS', 1, '29-Apr-2020\r'),
(472, '000-618', '2020-05-12', 'FATIQUE WARNING', '1L5-S-1-HD/PC', '3400', '100000', '5000000', 16574, 50, 'SET', '', '12-May-2020', '18-May-2020', 'WAREHOUSE', 'Done', 'GIS', 50, '18-May-2020\r'),
(473, '000-619', '2020-05-14', 'BUGGY WHIP Hitshrink Merah', '11L-0060-4', 'PO JOMON PERSADA NUSANTARA', '25000', '200000', 16561, 8, 'SET', '', '14-May-2020', '18-May-2020', 'LOGISTIK', 'Done', 'GMI', 8, '18-May-2020\r'),
(474, '000-619', '2020-05-14', 'BUGGY WHIP Hitshrink Merah', '11L-0060-36', 'PO JOMON PERSADA NUSANTARA', '25000', '175000', 16562, 7, 'SET', '', '14-May-2020', '15-May-2020', 'LOGISTIK', 'Done', 'GMI', 7, '15-May-2020\r'),
(475, '000-620', '2020-05-14', 'BRACKET OUTSIDE DISPLAY', '10L318', 'MR-CH-009', '200000', '200000', 16585, 1, 'EA', '', '14-May-2020', '2-Jun-2020', 'LOGISTIK', 'Done', 'GMI', 1, '2-Jun-2020\r'),
(476, '000-621', '2020-05-18', 'FATIQUE WARNING 4 METER', '1L5-S-1-HD/PC', '3400', '100000', '5000000', 17168, 50, 'SET', '', '18-May-2020', '17-Sep-2020', 'LOGISTIK', 'Done', 'GIS', 50, '17-Sep-2020\r'),
(477, '000-622', '2020-05-27', 'HARNESS NEW SPMC CAT 773', '13L-HRSPMC773-B', '3085', '1000000', '4000000', 16680, 4, 'SET', '', '27-May-2020', '16-Jun-2020', 'LOGISTIK', 'Done', 'GIS', 4, '16-Jun-2020\r'),
(478, '000-623', '2020-05-27', 'SWITCHBOX CAT 773 E BUMA', '11L-SW-SPMC-773-BN', '3085', '250000', '1000000', 16761, 4, 'SET', '', '22-Jun-2020', '15-Jul-2020', 'LOGISTIK', 'Done', 'GIS', 4, '15-Jul-2020\r'),
(479, '000-624', '2020-05-27', 'BRACKET MODUL SPMC CAT 773 E', '10LBRM-773B', '3085', '250000', '1000000', 16674, 4, 'EA', '', '27-May-2020', '16-Jul-2020', 'LOGISTIK', 'Done', 'GIS', 4, '16-Jul-2020\r'),
(480, '000-625', '2020-05-27', 'BRACKET SWITCH BOX 773 E', '10L290-N', '3085', '250000', '1250000', 16705, 5, 'EA', '', '27-May-2020', '1-Jul-2020', 'LOGISTIK', 'Done', 'GIS', 5, '1-Jul-2020\r'),
(481, '000-626', '2020-05-27', 'BRACKET FUSE', '10L311-N', '3085', '50000', '200000', 16625, 4, 'EA', '', '27-May-2020', '3-Jun-2020', 'LOGISTIK', 'Done', 'GIS', 4, '3-Jun-2020\r'),
(482, '000-627', '2020-05-29', 'BRACKET WHEEL CHOCKE FOR SCANIA HEAVY TIPPER', '10L274-P410', 'MR -0280502020', '250000', '1250000', 16676, 5, 'EA', '', '29-May-2020', '24-Jun-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '24-Jun-2020\r'),
(483, '000-627', '2020-05-29', 'BRACKET WHEEL CHOCKE FOR SCANIA HEAVY TIPPER', '10L274-P411', 'MR -0280502021', '250001', '1250005', 16720, 5, 'EA', '', '29-May-2020', '3-Jul-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '3-Jul-2020\r'),
(484, '000-627', '2020-05-29', 'BRACKET WHEEL CHOCKE FOR SCANIA HEAVY TIPPER', '10L274-P412', 'MR -0280502022', '250002', '1000008', 16739, 4, 'EA', '', '29-May-2020', '7-Jul-2020', 'WAREHOUSE', 'Done', 'GMI', 4, '7-Jul-2020\r'),
(485, '000-628', '2020-05-29', 'BRACKET RIVERSE LAMP', '10L285-S', 'MR -0280502020-1', '150000', '1500000', 16690, 10, 'EA', '', '29-May-2020', '24-Jun-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '24-Jun-2020\r'),
(486, '000-629', '2020-05-29', 'LOTOBOX 2 SSTEM FOR HEAVY TIPPER', '12L-LB2-KITSCP410', 'MR -0280502020-1', '200000', '3000000', 16672, 15, 'SET', '', '29-May-2020', '24-Jun-2020', 'WAREHOUSE', 'Done', 'GMI', 15, '24-Jun-2020\r'),
(487, '000-630', '2020-05-29', 'BRACKET BUGGY WHIP FOR INSTALASI', '10L277-P410', 'MR -0280502020-1', '150000', '1500000', 16688, 10, 'EA', '', '29-May-2020', '30-Jun-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '30-Jun-2020\r'),
(488, '000-631', '2020-05-29', 'BRACKET APAR 6 FOR SCANIA HEAVY TIPPER', '10L255-6P410', 'MR -0280502020-1', '100000', '1000000', 16648, 10, 'EA', '', '29-May-2020', '22-Jun-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '22-Jun-2020\r'),
(489, '000-632', '2020-05-29', 'BRACKET ALARM SCANIA', '10L278-SC', 'MR -0280502020-1', '50000', '500000', 16687, 10, 'EA', '', '29-May-2020', '30-Jun-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '30-Jun-2020\r'),
(490, '000-633', '2020-05-29', 'HARNESS FOG LAMP FOR SCANIA', '13L-FL-SC', 'MR -0280502020-1', '25000', '375000', 16630, 15, 'SET', '', '29-May-2020', '4-Jun-2020', 'WAREHOUSE', 'Done', 'GMI', 15, '4-Jun-2020\r'),
(491, '000-634', '2020-05-29', 'BRACKET LED COMBINASI LAMP', '10L276-P410', 'MR -0280502020-1', '250000', '1250000', 16689, 5, 'SET', '', '29-May-2020', '16-Jul-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '16-Jul-2020\r'),
(492, '000-635', '2020-06-04', 'BRACKET T BOX UK 80 X 250 X70', '10L319', 'MR-DH-158', '100000', '100000', 16683, 1, 'EA', '', '4-Jun-2020', '29-Jun-2020', 'SERVICE', 'Done', 'SIMPLE', 1, '29-Jun-2020\r'),
(493, '000-636', '2020-06-05', 'FOG LAMP FOR SCANIA ASSY', '11L-0084-24SR-B', 'MR -0280502020-1', '25000', '125000', 16674, 5, 'SET', '', '2-Jun-2020', '24-Jun-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '24-Jun-2020\r'),
(494, '000-636', '2020-06-05', 'FOG LAMP FOR SCANIA ASSY', '11L-0084-24SR-B', 'MR -0280502020-2', '25001', '125005', 16679, 5, 'SET', '', '2-Jun-2020', '29-Jun-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '29-Jun-2020\r'),
(495, '000-636', '2020-06-05', 'FOG LAMP FOR SCANIA ASSY', '11L-0084-24SR-B', 'MR -0280502020-3', '25002', '100008', 16701, 4, 'SET', '', '2-Jun-2020', '30-Jun-2020', 'WAREHOUSE', 'Done', 'GMI', 4, '30-Jun-2020\r'),
(496, '000-636', '2020-06-05', 'FOG LAMP FOR SCANIA ASSY', '11L-0084-24SR-B', 'MR -0280502020-4', '25003', '150018', 16179, 6, 'SET', '', '2-Jun-2020', '3-Jul-2020', 'WAREHOUSE', 'Done', 'GMI', 6, '3-Jul-2020\r'),
(497, '000-637', '2020-06-05', 'PLAT NUMBER (BELAKANG) MANUFAKTUR', '11L-2037-M', 'MR -DH-159', '100000', '1400000', 0, 14, 'EA', '', '', '', 'SERVICE', 'Done', 'GMI', 14, '\r'),
(498, '000-638', '2020-06-05', 'PLAT NUMBER (DEPAN) MANUFAKTUR', '11L-1599M', 'MR-DH-159', '100000', '1400000', 16647, 14, 'EA', '', '5-Jun-2020', '18-Aug-2020', 'SERVICE', 'Done', 'GMI', 14, '18-Aug-2020\r'),
(499, '000-639', '2020-06-10', 'BRACKET EXTENSION MIRROR', '11L-1041-P410', 'MR-080602020-JO', '150000', '750000', 16675, 5, 'SET', '', '10-Jun-2020', '24-Jun-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '24-Jun-2020\r'),
(500, '000-639', '2020-06-10', 'BRACKET EXTENSION MIRROR', '11L-1041-P411', 'MR-080602020-JO', '150001', '1350009', 16694, 9, 'SET', '', '10-Jun-2020', '30-Jun-2020', 'WAREHOUSE', 'Done', 'GMI', 9, '30-Jun-2020\r'),
(501, '000-639', '2020-06-10', 'BRACKET EXTENSION MIRROR', '11L-1041-P412', 'MR-080602020-JO', '150002', '150002', 16749, 1, 'SET', '', '10-Jun-2020', '8-Jul-2020', 'WAREHOUSE', 'Done', 'GMI', 1, '8-Jul-2020\r'),
(502, '000-640', '2020-06-15', 'BRACKET T BOX UK 80 X 250 X70', '10L319', '3034  & 3085', '100000', '500000', 16682, 5, 'EA', '', '15-Jun-2020', '29-Jun-2020', 'LOGISTIK', 'Done', 'GIS', 5, '29-Jun-2020\r'),
(503, '000-641', '2020-06-16', 'TEST LAMPU + STIKER 500 WATT', '11L-1365-1-500', '3407', '25000', '1250000', 0, 50, 'EA', '', '17-Jun-2020', '17-Jun-2020', 'LOGISTIK', 'Done', 'GIS', 50, '17-Jun-2020\r'),
(504, '000-642', '2020-06-16', 'BRACKET T BOX UK 80 X 250 X70', '10L319', '3310.3266.3393.3310.3072.3034', '100000', '700000', 16684, 7, 'EA', '', '16-Jun-2020', '29-Jun-2020', 'LOGISTIK', 'Done', 'GIS', 7, '29-Jun-2020\r'),
(505, '000-643', '2020-06-17', 'HARNESS NEW SPMC DZ375', '13L-HRSPMC 375-K', '3293', '1000000', '1000000', 16685, 1, 'SET', '', '17-Jun-2020', '29-Jun-2020', 'LOGISTIK', 'Done', 'GIS', 1, '29-Jun-2020\r'),
(506, '000-644', '2020-06-17', 'SWITCH BOX SPMC DZ375 NEW', '11L-SPMC-SB-1530N', '3293', '250000', '250000', 17652, 1, 'SET', '', '17-Jun-2020', '1-Sep-2020', 'LOGISTIK', 'Done', 'GIS', 1, '1-Sep-2020\r'),
(507, '000-645', '2020-06-17', 'BRACKET SWITCHBOX ', '10L290', '3293', '250000', '250000', 16986, 1, 'EA', '', '17-Jun-2020', '1-Sep-2020', 'LOGISTIK', 'Done', 'GIS', 1, '1-Sep-2020\r'),
(508, '000-646', '2020-06-17', 'BRACKET ESD IN', '10L307', '3293', '150000', '150000', 16981, 1, 'EA', '', '17-Jun-2020', '2-Sep-2020', 'LOGISTIK', 'Done', 'GIS', 1, '2-Sep-2020\r'),
(509, '000-647', '2020-06-17', 'BRACKET DT CLIP', '10L306', '3293', '100000', '100000', 16704, 1, 'EA', '', '17-Jun-2020', '1-Jun-2020', 'LOGISTIK', 'Done', 'GIS', 1, '1-Jun-2020\r'),
(510, '000-648', '2020-06-19', 'BASE PLATE WL FOR GD535', '10L320', 'MR-DH 160', '150000', '300000', 16649, 2, 'EA', '', '19-Jun-2020', '19-Jun-2020', 'SERVICE', 'Done', 'GMI', 2, '19-Jun-2020\r'),
(511, '000-649', '2020-06-19', 'REPAIR FATIQUE WARNING 4 ', '1L5-5-1-2.5', 'MR-0190602020-JO', '100000', '1500000', 16656, 15, 'SET', '', '22-Feb-2020', '22-Feb-2020', 'WAREHOUSE', 'Done', 'GMI', 15, '22-Feb-2020\r'),
(512, '000-650', '2020-06-24', 'HARNESS NEW SPMC GD 825 PAMA', '13L-HRSPMCGD825-P', '3110', '1000000', '2000000', 16686, 2, 'SET', '', '24-Jun-2020', '29-Jun-2020', 'LOGISTIK', 'Done', 'GIS', 2, '29-Jun-2020\r'),
(513, '000-651', '2020-06-24', 'SWITCHBOX NEW GD 825', '11L-SW-SPMC -N825', '3110', '250000', '500000', 17307, 2, 'SET', '', '24-Jun-2020', '13-Oct-2020', 'LOGISTIK', 'Done', 'GIS', 2, '13-Oct-2020\r'),
(514, '000-652', '2020-06-24', 'BRACKET MODUL SPMC GD825', '10LBRM-GD825', '3110', '250000', '500000', 16989, 2, 'EA', '', '24-Jun-2020', '1-Sep-2020', 'LOGISTIK', 'Done', 'GIS', 2, '1-Sep-2020\r'),
(515, '000-653', '2020-06-24', 'BRACKET SWITCH BOX GD825', '10L290-GD825', '3110', '250000', '500000', 17309, 2, 'EA', '', '24-Jun-2020', '13-Oct-2020', 'LOGISTIK', 'Done', 'GIS', 2, '13-Oct-2020\r'),
(516, '000-654', '2020-06-24', 'BRACKET DT CLIP', '10L306', '3110', '100000', '200000', 16724, 2, 'EA', '', '6-Jul-2020', '7-Jul-2020', 'LOGISTIK', 'Done', 'GIS', 2, '7-Jul-2020\r'),
(517, '000-655', '2020-06-26', 'CABLE JUMPER HD785', '11L-1252-5', 'PO UT-990364388', '75000', '75000', 16681, 1, 'SET', '', '29-Jun-2020', '29-Jun-2020', 'LOGISTIK', 'Done', 'GMI', 1, '29-Jun-2020\r'),
(518, '000-656', '2020-06-26', 'LOTOBOX 2 SYSTEM SPMC HD 785', '12L-LB2-KIT-MPHD785', '3293', '', '0', 0, 5, 'SET', '', '', '', 'LOGISTIK', '', 'GIS', 5, '\r'),
(519, '000-657', '2020-06-26', 'HARNES SPMC 785 KOMATSU ERKA', '13L-HRSPMC-K-1', '3293', '1000000', '3000000', 16714, 3, 'SET', '', '26-Jun-2020', '2-Jul-2020', 'WAREHOUSE', 'Done', 'GIS', 3, '2-Jul-2020\r'),
(520, '000-657', '2020-06-26', 'HARNES SPMC 785 KOMATSU ERKA', '13L-HRSPMC-K-2', '3294', '1000001', '2000002', 16756, 2, 'SET', '', '26-Jun-2020', '13-Jul-2020', 'WAREHOUSE', 'Done', 'GIS', 2, '13-Jul-2020\r'),
(521, '000-658', '2020-06-26', 'BRACKET FUSE', '10L311-N', '3293', '100000', '700000', 16713, 7, 'SET', '', '26-Jun-2020', '2-Jul-2020', 'WAREHOUSE', 'Done', 'GIS', 7, '2-Jul-2020\r'),
(522, '000-659', '2020-06-26', 'BRACKET STROBE', '3L5-12', 'MR-DH-163', '250000', '1250000', 16731, 5, 'EA', '', '26-Jun-2020', '30-Jun-2020', 'SERVICE', 'Done', 'GMI', 5, '30-Jun-2020\r'),
(523, '000-659', '2020-06-26', 'BRACKET STROBE', '3L5-13', 'MR-DH-164', '250001', '2000008', 16732, 8, 'EA', '', '26-Jun-2020', '3-Jul-2020', 'SERVICE', 'Done', 'GMI', 8, '3-Jul-2020\r'),
(524, '000-659', '2020-06-26', 'BRACKET STROBE', '3L5-14', 'MR-DH-165', '250002', '250002', 17651, 1, 'EA', '', '26-Jun-2020', '6-Jul-2020', 'SERVICE', 'Done', 'GMI', 1, '6-Jul-2020\r'),
(525, '000-660', '2020-06-30', 'HARNES 5 METER 2 KABEL', '13L-HR5M2K', 'MR-0290602020', '25000', '375000', 16703, 15, 'SET', '', '30-Jun-2020', '1-Jul-2020', 'WAREHOUSE', 'Done', 'GMI', 15, '1-Jul-2020\r'),
(526, '000-661', '2020-06-30', 'HARNESS 8 .5 METER 4 KABEL', '13L-HR8.5M4K', 'MR-0290602020', '25000', '375000', 16709, 15, 'SET', '', '30-Jun-2020', '1-Jul-2020', 'WAREHOUSE', 'Done', 'GMI ', 15, '1-Jul-2020\r'),
(527, '000-662', '2020-06-30', 'BRACKET RADIO CONVERTER', '11L-1040-25SB', 'MR-0300602020-JO', '100000', '1000000', 16801, 10, 'EA', '', '30-Jun-2020', '29-Jul-2020', 'WAREHOUSE', 'Done', 'GMI ', 10, '29-Jul-2020\r'),
(528, '000-663', '2020-06-30', 'BASEPLATE GD 705', '11L-1180-GD', 'MR-DH-167', '150000', '1500000', 16728, 10, 'EA', '', '30-Jun-2020', '10-Jul-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '10-Jul-2020\r'),
(529, '000-664', '2020-06-30', 'BASEPLATE APAR 9 KG', '10L321', 'MR-001070202', '250000', '2500000', 16729, 10, 'EA', '', '30-Jun-2020', '10-Jul-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '10-Jul-2020\r'),
(530, '000-665', '2020-07-01', 'PLAT NUMBER DEPAN ', '11L-1599M', 'MR-DH-167', '100000', '100000', 16726, 1, 'EA', '', '1-Jul-2020', '2-Jul-2020', 'SERVICE', 'Done', 'GMI', 1, '2-Jul-2020\r'),
(531, '000-666', '2020-07-01', 'PLAT NUMBER BELAKANG', '11L-2037M', 'MR-DH-167', '100000', '100000', 16725, 1, 'EA', '', '1-Jul-2020', '2-Jul-2020', 'SERVICE', 'Done', 'GMI', 1, '2-Jul-2020\r'),
(532, '000-667', '2020-07-01', 'HARNES LED COMBINASI', '13L-HRLEDCOM', 'MR-0010702020-JO', '25000', '250000', 16717, 10, 'SET', '', '1-Jul-2020', '3-Jul-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '3-Jul-2020\r'),
(533, '000-668', '2020-07-01', 'HARNES FOG LAMP', '13L-FL-SC', 'MR-0010702020-JO', '25000', '500000', 16755, 20, 'SET', '', '1-Jul-2020', '10-Jul-2020', 'WAREHOUSE', 'Done', 'GMI ', 20, '10-Jul-2020\r'),
(534, '000-669', '2020-07-01', 'HARNES 6 METER 2 KABEL', '13L-HR6M2K', 'MR-070702020-JO', '25000', '375000', 16718, 15, 'SET', '', '1-Jul-2020', '3-Jul-2020', 'WAREHOUSE', 'Done', 'GMI', 15, '3-Jul-2020\r'),
(535, '000-670', '2020-07-07', 'LOTO BOX 2 SYSTEM VERTICAL', '12L-LB2KIT-Q', 'MR-070702020-JO', '225000', '3375000', 16841, 15, 'SET', '', '7-Jul-2020', '30-Jul-2020', 'WAREHOUSE', 'Done', 'GMI', 15, '30-Jul-2020\r'),
(536, '000-671', '2020-07-07', 'BRACKET MODUL SPMC HD 785', '10L289-HD', 'PO 3110', '250000', '500000', 16795, 2, 'EA', '', '7-Jul-2020', '13-Jul-2020', 'WAREHOUSE', 'Done', 'GIS', 2, '13-Jul-2020\r'),
(537, '000-672', '2020-07-08', 'BASEPLATE LOTO 2 SYSTEM HORIZONTAL', '10L314', 'MR-0800702020-JO', '150000', '3750000', 16802, 25, 'SET', '', '8-Jul-2020', '29-Jul-2020', 'WAREHOUSE', 'Done', 'GMI', 25, '29-Jul-2020\r'),
(538, '000-673', '2020-07-08', 'BRACKETLOTO 2 SYSTEM VERTICAL', '10L256', 'MR-080702020-JO', '250000', '5250000', 16804, 21, 'SET', '', '8-Jul-2020', '29-Jul-2020', 'WAREHOUSE', 'Done', 'GMI', 21, '29-Jul-2020\r'),
(539, '000-674', '2020-07-13', 'HARNESS NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-1', 'PO : 2292', '1000000', '3000000', 16794, 3, 'SET', '', '15-Jul-2020', '20-Jul-2020', 'LOGISTIK', 'Done', 'GIS', 3, '20-Jul-2020\r'),
(540, '000-674', '2020-07-13', 'HARNESS NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-2', 'PO : 2293', '1000001', '3000003', 16817, 3, 'SET', '', '15-Jul-2020', '24-Jul-2020', 'LOGISTIK', 'Done', 'GIS', 3, '24-Jul-2020\r'),
(541, '000-674', '2020-07-13', 'HARNESS NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-3', 'PO : 2294', '1000002', '4000008', 16827, 4, 'SET', '', '15-Jul-2020', '11-Aug-2020', 'LOGISTIK', 'Done', 'GIS', 4, '11-Aug-2020\r'),
(542, '000-675', '2020-07-13', 'BRACKET MODUL SPMC HD 785', '10L289-HD', 'PO : 2292', '250000', '750000', 16796, 3, 'SET', '', '13-Jul-2020', '20-Jul-2020', 'LOGISTIK', 'Done', 'GIS', 3, '20-Jul-2020\r'),
(543, '000-675', '2020-07-13', 'BRACKET MODUL SPMC HD 786', '10L289-HD', 'PO : 2293', '250001', '750003', 16821, 3, 'SET', '', '13-Jul-2020', '24-Jul-2020', 'LOGISTIK', 'Done', 'GIS', 3, '24-Jul-2020\r'),
(544, '000-675', '2020-07-13', 'BRACKET MODUL SPMC HD 787', '10L289-HD', 'PO : 2294', '250002', '1000008', 16842, 4, 'SET', '', '13-Jul-2020', '27-Jul-2020', 'LOGISTIK', 'Done', 'GIS', 4, '27-Jul-2020\r'),
(545, '000-676', '2020-07-13', 'BRACKET FUSE ', '10L311-N', 'PO : 2292', '100000', '1000000', 16678, 10, 'SET', '', '16-Jul-2020', '17-Jun-2020', 'LOGISTIK', 'Done', 'GIS', 10, '17-Jun-2020\r'),
(546, '000-677', '2020-07-22', 'LOTOBOX 4 SYSTEM', '12L-LB4-KIT PC/HD', 'MR-0220702020-JO', '225000', '1125000', 17271, 5, 'SET', '', '22-Jul-2020', '2-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '2-Oct-2020\r'),
(547, '000-677', '2020-07-22', 'LOTOBOX 4 SYSTEM', '12L-LB4-KIT PC/HD', 'MR-0220702020-JO', '225000', '1125000', 17283, 5, 'SET', '', '2-Oct-2020', '6-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '6-Oct-2020\r'),
(548, '000-678', '2020-07-22', 'CABLE BATRE HD465', '13L-CBHD465', 'MR -0220702020-JO', '75000', '375000', 16926, 5, 'SET', '', '25-Aug-2020', '26-Aug-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '26-Aug-2020\r'),
(549, '000-679', '2020-07-22', 'CABLE BATRE GD705', '13L-CBGD705', 'MR -0220702020-JO', '75000', '375000', 16938, 5, 'SET', '', '25-Aug-2020', '28-Aug-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '28-Aug-2020\r'),
(550, '000-680', '2020-07-22', 'CABLE BATRE PC1250', '13L-CBPC1250', 'MR -0220702020-JO', '75000', '375000', 16939, 5, 'SET', '', '25-Aug-2020', '28-Aug-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '28-Aug-2020\r'),
(551, '000-681', '2020-07-22', 'CABLE BATRE HM400', '13L-CBHM400', 'MR -0220702020-JO', '75000', '375000', 16937, 5, 'SET', '', '25-Aug-2020', '28-Aug-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '28-Aug-2020\r'),
(552, '000-682', '2020-07-22', 'HARNESS LOTO BOX D85', '13L-3WAY-DZ', 'MR -0220702020-JO', '25000', '250000', 16871, 10, 'SET', '', '22-Jul-2020', '6-Aug-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '6-Aug-2020\r'),
(553, '000-683', '2020-07-22', 'HARNESS 2 METER 2 KABEL', '13L-HR2M2K', 'MR -0220702020-JO', '25000', '250000', 16842, 10, 'SET', '', '22-Jul-2020', '30-Jul-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '30-Jul-2020\r'),
(554, '000-684', '2020-07-22', 'BRACKET FOG LAMP SCANIA', '10L275-P410', 'MR -0220702020-JO', '150000', '1500000', 16907, 10, 'SET', '', '23-Jul-2020', '3-Nov-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '3-Nov-2020\r'),
(555, '000-685', '2020-07-22', 'BTRACKET FOG LAMP QUESTER', '10L275-Q', 'MR -0220702020-JO', '150000', '1500000', 16908, 10, 'SET', '', '22-Jul-2020', '29-Sep-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '29-Sep-2020\r'),
(556, '000-686', '2020-07-22', 'BASEPLATE LOTO 1 SYSTEM', '10L264-2', 'MR -0220702020-JO', '100000', '1000000', 17650, 10, 'EA', '', '22-Jul-2020', '12-Aug-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '12-Aug-2020\r'),
(557, '000-687', '2020-07-24', 'HARNESS NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-1', 'PO: 3486', '1000000', '3000000', 16870, 3, 'SET', '', '3-Aug-2020', '10-Aug-2020', 'LOGISTIK', 'Done', 'GIS', 3, '10-Aug-2020\r'),
(558, '000-687', '2020-07-24', 'HARNESS NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-2', 'PO: 3487', '1000001', '2000002', 16900, 2, 'SET', '', '3-Aug-2020', '14-Aug-2020', 'LOGISTIK', 'Done', 'GIS', 2, '14-Aug-2020\r'),
(559, '000-687', '2020-07-24', 'HARNESS NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-3', 'PO: 3488', '1000002', '3000006', 16909, 3, 'SET', '', '3-Aug-2020', '21-Aug-2020', 'LOGISTIK', 'Done', 'GIS', 3, '21-Aug-2020\r'),
(560, '000-687', '2020-07-24', 'HARNESS NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-4', 'PO: 3489', '1000003', '2000006', 17000, 2, 'SET', '', '3-Aug-2020', '3-Sep-2020', 'LOGISTIK', 'Done', 'GIS', 2, '3-Sep-2020\r'),
(561, '000-688', '2020-07-24', 'BRACKET MODUL SPMC HD 785', '10L289-HD', 'PO : 3486', '250000', '750000', 16888, 3, 'SET', '', '3-Aug-2020', '7-Aug-2020', 'LOGISTIK', 'Done', 'GIS', 3, '7-Aug-2020\r'),
(562, '000-688', '2020-07-24', 'BRACKET MODUL SPMC HD 786', '10L289-HD', 'PO : 3487', '250001', '500002', 16901, 2, 'SET', '', '13-Aug-2020', '13-Aug-2020', 'LOGISTIK', 'Done', 'GIS', 2, '13-Aug-2020\r'),
(563, '000-688', '2020-07-24', 'BRACKET MODUL SPMC HD 787', '10L289-HD', 'PO : 3488', '250002', '1250010', 16925, 5, 'SET', '', '13-Aug-2020', '25-Aug-2020', 'LOGISTIK', 'Done', 'GIS', 5, '25-Aug-2020\r'),
(564, '000-689', '2020-07-24', 'BRACKET FUSE', '10L311-N', 'PO : 3486', '100000', '1000000', 16896, 10, 'SET', '', '24-Jul-2020', '10-Aug-2020', 'LOGISTIK', 'Done', 'GIS', 10, '10-Aug-2020\r'),
(565, '000-690', '2020-07-24', 'BRACKET LOTOBOX 2 SYSTEM FOR KOBELCO', '10L323', 'MR-CH-010', '110000', '550000', 0, 5, 'EA', '', '', '', 'SERVICE', '', 'GIS', 5, '\r'),
(566, '000-691', '2020-07-27', 'PLAT PAINTING NUMBER VESSEL', '10L322', 'MR-DH-170', '60000', '840000', 16891, 14, 'EA', '', '27-Jul-2020', '30-Jul-2020', 'SERVICE', 'Done', 'GMI', 14, '30-Jul-2020\r'),
(567, '000-692', '2020-07-29', 'BASEPLATE LOTOBOX 2 SYSTEM LUBBETRUCK', '10L324', 'MR-DH-171/PO 3502', '250000', '2500000', 16899, 10, 'EA', '', '27-Jul-2020', '4-Aug-2020', 'SERVICE', 'Done', 'GIS', 10, '4-Aug-2020\r'),
(568, '000-693', '2020-08-05', 'BRACKET APAR 6 KG FOR SCANIA', '10L255-6P410', 'MR-040802020-JO', '100000', '1000000', 16904, 10, 'EA', '', '5-Aug-2020', '26-Aug-2020', 'LOGISTIK', 'Done', 'GMI ', 10, '26-Aug-2020\r'),
(569, '000-694', '2020-08-05', 'BRACKET SAFTY CONE', '10L273-70', 'MR-040802020-JO', '100000', '1000000', 16905, 10, 'EA', '', '5-Aug-2020', '5-Aug-2020', 'LOGISTIK', 'Done', 'GMI ', 10, '5-Aug-2020\r'),
(570, '000-695', '2020-08-05', 'REPAIR 10L324', '', 'DH-0174', '25000', '50000', 0, 2, 'EA', '', '5-Aug-2020', '5-Aug-2020', 'LOGISTIK', 'Done', 'GIS', 2, '5-Aug-2020\r'),
(571, '000-696', '2020-08-13', 'TEST LAMPU + STIKER 500 W', '11L-1365-1-500', 'PO :3453', '25000', '625000', 0, 25, 'EA', '', '13-Aug-2020', '13-Aug-2020', 'LOGISTIK', 'Done', 'GIS', 25, '13-Aug-2020\r'),
(572, '000-697', '2020-08-14', 'TEST LAMPU + STIKER 300 W', '11L-1365-3-300', 'PO :3454', '25000', '400000', 0, 16, 'EA', '', '13-Aug-2020', '13-Aug-2020', 'LOGISTIK', 'Done', 'GIS', 16, '13-Aug-2020\r'),
(573, '000-697', '2020-08-13', 'PLAT NUMBER UNIT BELAKANG', '11L-2037 M', 'MR-DH-176', '100000', '400000', 16903, 4, 'EA', '', '13-Aug-2020', '13-Aug-2020', 'SERVICE', 'Done', 'GMI', 4, '13-Aug-2020\r'),
(574, '000-698', '2020-08-13', 'PLAT NUMBER UNIT DEPAN', '11L-1599M', 'MR-DH-176', '100000', '400000', 16902, 4, 'EA', '', '13-Aug-2020', '13-Aug-2020', 'SERVICE', 'Done', 'GMI', 4, '13-Aug-2020\r'),
(575, '000-699', '2020-08-13', 'TEST + STIKER LAMPU ND40F', '2L3-ND40F', 'PO : 3451', '10000', '2500000', 0, 250, 'EA', '', '13-Aug-2020', '27-Aug-2020', 'LOGISTIK', 'Done', 'GIS', 250, '27-Aug-2020\r'),
(576, '000-699', '2020-08-13', 'TEST + STIKER LAMPU ND 40S', '2L3-ND40S', 'PO : 3452', '10000', '1000000', 0, 100, 'EA', '', '14-Aug-2020', '27-Aug-2020', 'LOGISTIK', 'Done', 'GIS', 100, '27-Aug-2020\r'),
(577, '000-700', '2020-08-14', 'BRACKET LOTO BOX 2 SYSTEM VERTICAL SPMC HD 785', '10L256-HD785', 'PO :3486', '250000', '1250000', 17002, 5, 'EA', '', '14-Aug-2020', '7-Sep-2020', 'LOGISTIK', 'Done', 'GIS', 5, '7-Sep-2020\r'),
(578, '000-701', '2020-08-14', 'LOTOBOX 2 SYSTEM SPMC HD 785', '12L-LB2KIT-MPHD785', 'PO :3486', '500000', '2500000', 17336, 5, 'SET', '', '14-Aug-2020', '22-Oct-2020', 'LOGISTIK', 'Done', 'GIS', 5, '22-Oct-2020\r'),
(579, '000-702', '2020-08-14', 'BRACKET LOTO BOX 2 SYSTEM VERTICAL SPMC HD 785', '10L256-HD785', 'PO :3487', '250000', '2500000', 17004, 10, 'EA', '', '14-Aug-2020', '11-Sep-2020', 'LOGISTIK', 'Done', 'GIS', 10, '11-Sep-2020\r'),
(580, '000-703', '2020-08-14', 'LOTOBOX 2 SYSTEM SPMC HD 785', '12L-LB2KIT-MPHD785', 'PO :3487', '500000', '5000000', 17143, 10, 'SET', '', '14-Aug-2020', '16-Sep-2020', 'LOGISTIK', 'Done', 'GIS', 10, '16-Sep-2020\r'),
(581, '000-704', '2020-08-14', 'BRACKET LOTO BOX 2 SYSTEM VERTICAL SPMC HD 785', '10L256-HD785', 'PO : 3488', '250000', '2500000', 17005, 10, 'EA', '', '14-Aug-2020', '11-Sep-2020', 'LOGISTIK', 'Done', 'GIS', 10, '11-Sep-2020\r'),
(582, '000-705', '2020-08-14', 'LOTOBOX 2 SYSTEM SPMC HD 785', '12L-LB2KIT-MPHD785', 'PO : 3488', '500000', '5000000', 17335, 10, 'SET', '', '14-Aug-2020', '22-Oct-2020', 'LOGISTIK', 'Done', 'GIS', 10, '22-Oct-2020\r'),
(583, '000-706', '2020-08-18', 'BRACKET STROBE 3L4-7ASA', '3L5-HFM260', 'PO :3525', '100000', '2000000', 16992, 20, 'EA', '', '18-Aug-2020', '2-Sep-2020', 'SERVICE', 'Done', 'GIS', 20, '2-Sep-2020\r'),
(584, '000-707', '2020-08-18', 'BRACKET APAR 6 KG SCANIA P410 HEAVY TIPPER', '10L255-6P410', 'PO :3525', '100000', '1500000', 16940, 15, 'EA', '', '18-Aug-2020', '2-Sep-2020', 'SERVICE', 'Done', 'GIS', 15, '2-Sep-2020\r'),
(585, '000-708', '2020-08-24', 'BASEPLATE LOTO 2 SYSTEM HORIZONTAL FOR SK', '10L326', 'MR-DH 180', '200000', '400000', 16928, 2, 'EA', '', '24-Aug-2020', '26-Aug-2020', 'SERVICE', 'Done', 'GMI', 2, '26-Aug-2020\r'),
(586, '000-709', '2020-08-24', 'BASEPLATE LOTO 2 SYSTEM VERTICAL FOR 773', '10L327', 'MR-DH 180', '200000', '200000', 16934, 1, 'EA', '', '24-Aug-2020', '26-Aug-2020', 'SERVICE', 'Done', 'GMI', 1, '26-Aug-2020\r'),
(587, '000-710', '2020-08-24', 'LOTO 2 SYSTEM HORIZONTAL FOR SK ASSY ', '12L-LB2H-KITSK', 'MR-DH 180', '250000', '500000', 16931, 2, 'SET', '', '24-Aug-2020', '26-Aug-2020', 'SERVICE', 'Done', 'GMI ', 2, '26-Aug-2020\r'),
(588, '000-711', '2020-08-24', 'LOTO 2 SYSTEM VERTICAL FOR 773 ASSY', '12L-LB2V-KIT773', 'MR-DH 180', '250000', '250000', 16936, 1, 'SET', '', '24-Aug-2020', '26-Aug-2020', 'SERVICE', 'Done', 'GMI', 1, '26-Aug-2020\r'),
(589, '000-712', '2020-08-28', 'HARNESS NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-1', 'PO :3487', '1000000', '2000000', 17043, 2, 'SET', '', '28-Aug-2020', '8-Sep-2020', 'LOGISTIK', 'Done', 'GIS', 2, '8-Sep-2020\r'),
(590, '000-712', '2020-08-28', 'HARNESS NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-2', 'PO :3488', '1000000', '1000000', 17230, 1, 'SET', '', '28-Aug-2020', '23-Sep-2020', 'LOGISTIK', 'Done', 'GIS', 1, '23-Sep-2020\r'),
(591, '000-712', '2020-08-28', 'HARNESS NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-3', 'PO :3489', '1000000', '3000000', 17385, 3, 'SET', '', '28-Aug-2020', '17-Nov-2020', 'LOGISTIK', 'Done', 'GIS', 3, '17-Nov-2020\r'),
(592, '000-712', '2020-08-28', 'HARNESS NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-4', 'PO :3490', '1000000', '4000000', 17648, 4, 'SET', '', '28-Aug-2020', '17-Nov-2020', 'LOGISTIK', 'Done', 'GIS', 4, '17-Nov-2020\r'),
(593, '000-713', '2020-08-27', 'BRACKET MODUL SPMC HD785', '10L289-HD', 'PO : 3487', '250000', '2500000', 17001, 10, 'EA', '', '27-Aug-2020', '18-Aug-2020', 'LOGISTIK', 'Done', 'GIS', 10, '18-Aug-2020\r'),
(594, '000-714', '2020-08-27', 'BRACKET FUSE', '10L311-N', 'PO : 3487', '100000', '1000000', 17202, 10, 'EA', '', '27-Aug-2020', '22-Sep-2020', 'LOGISTIK', 'Done', 'GIS', 10, '22-Sep-2020\r'),
(595, '000-715', '2020-08-27', 'TEST LAMPU + STIKER 500 W', '11L-1365-1-500', 'PO :3478', '25000', '750000', 0, 30, 'EA', '', '27-Aug-2020', '31-Aug-2020', 'LOGISTIK', 'Done', 'GIS', 30, '31-Aug-2020\r'),
(596, '000-716', '2020-08-28', 'LED STROBE INCLUDE BRACKET HARNESS FOR HINO DUMP TRUCK ASSY', '3L4-7ASA', 'MR-DH-181 / PO :3525', '25000', '500000', 16693, 20, 'SET', '', '28-Aug-2020', '2-Sep-2020', 'SERVICE', 'Done', 'GIS', 20, '2-Sep-2020\r'),
(597, '000-717', '2020-08-31', 'TEST + STIKER LED INVERTER', '11L-1365-INV', 'PO :3509', '15000', '300000', 0, 20, 'EA', '', '31-Aug-2020', '30-Sep-2020', 'LOGISTIK', 'Done', 'GIS', 20, '30-Sep-2020\r'),
(598, '000-718', '2020-08-31', 'HARNESS 5 METER 3 KABEL', '13L-HR5M3K', 'PO BMT 1376', '25000', '75000', 16973, 3, 'EA', '', '31-Aug-2020', '31-Aug-2020', 'SERVICE', 'Done', 'GMI', 3, '31-Aug-2020\r'),
(599, '000-719', '2020-09-01', 'BRACKET CAMERA CCTV for Unit Kubota ', '10l328', 'MR-DH-183 (SPK BMT)', '125000', '375000', 16974, 3, 'EA', '', '1-Sep-2020', '1-Sep-2020', 'SERVICE', 'Done', 'GMI', 3, '1-Sep-2020\r'),
(600, '000-720', '2020-09-01', 'ROLL NUT + BAUT', '11L-1042', 'MR-01092020', '10000', '500000', 17120, 50, 'EA', '', '1-Sep-2020', '17-Sep-2020', 'SERVICE', 'Done', 'GMI', 50, '17-Sep-2020\r'),
(601, '000-721', '2020-09-01', 'BRACKET APAR 6KG D85', '10L255-6D', 'MR-01092020', '150000', '1500000', 17118, 10, 'EA', '', '1-Sep-2020', '18-Sep-2020', 'SERVICE', 'Done', 'GMI', 10, '18-Sep-2020\r'),
(602, '000-722', '2020-09-03', 'HARNESS NEW SPMC DZ375', '13L-HRSPMC375-K', 'PO :4800023320', '1000000', '5000000', 17110, 5, 'SET', '', '7-Sep-2020', '14-Sep-2020', 'LOGISTIK', 'Done', 'GMI', 5, '14-Sep-2020\r'),
(603, '000-723', '2020-09-03', 'BRACKET FUSE N ', '10L311-N', 'PO :4800023320', '100000', '600000', 17124, 6, 'EA', '', '3-Sep-2020', '15-Sep-2020', 'LOGISTIK', 'Done', 'GMI', 6, '15-Sep-2020\r'),
(604, '000-724', '2020-09-03', 'SWITCH BOX DZ375 NEW', '11L-SPMC-SB-1530-N', 'PO :4800023320', '250000', '1250000', 17101, 5, 'SET', '', '7-Sep-2020', '13-Sep-2020', 'LOGISTIK', 'Done', 'GMI', 5, '13-Sep-2020\r'),
(605, '000-725', '2020-09-03', 'BOX 80X250X70MM', '10L319', 'PO :4800023320', '100000', '600000', 17119, 6, 'EA', '', '3-Sep-2020', '14-Sep-2020', 'LOGISTIK', 'Done', 'GMI', 6, '14-Sep-2020\r'),
(606, '000-726', '2020-09-07', 'BRACKET CAMERA 11L-0514 FOR WATER TRUCK', '10L329', 'MR-DH-184', '175000', '175000', 17044, 1, 'EA', '', '7-Sep-2020', '8-Sep-2020', 'SERVICE', 'Done', 'GMI', 1, '8-Sep-2020\r'),
(607, '000-727', '2020-09-14', 'BRACKET CONVERTER', '11L-1040-25B', 'MR-0140902020-JO', '100000', '1000000', 17295, 10, 'EA', '', '14-Sep-2020', '5-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '5-Oct-2020\r'),
(608, '000-728', '2020-09-14', 'HARNESS 4 METER 2 KABEL', '13L-HR4M2K', 'MR-0140902020-JO', '25000', '375000', 17144, 15, 'SET', '', '15-Sep-2020', '17-Sep-2020', 'WAREHOUSE', 'Done', 'GMI', 15, '17-Sep-2020\r'),
(609, '000-729', '2020-09-14', 'HARNESS 8.5 METER 4 KABEL', '13L-HR8.5M4K', 'MR-0140902020-JO', '25000', '375000', 17145, 15, 'SET', '', '15-Sep-2020', '17-Sep-2020', 'WAREHOUSE', 'Done', 'GMI', 15, '17-Sep-2020\r'),
(610, '000-730', '2020-09-14', 'HARNESS LOTOBOX BOMAG', '13LHRBW', 'MR-0140902020-JO', '25000', '250000', 17153, 10, 'SET', '', '16-Sep-2020', '18-Sep-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '18-Sep-2020\r'),
(611, '000-731', '2020-09-14', 'BRACKET FUSE', '10L311-N', 'MR-0140902020-JO', '100000', '1500000', 17203, 15, 'EA', '', '14-Sep-2020', '22-Sep-2020', 'WAREHOUSE', 'Done', 'GMI', 15, '22-Sep-2020\r'),
(612, '000-732', '2020-09-15', 'PEMOTONGAN KABEL AVS 1.25 MM RED 100 METER', '5LAVSS 1.25 - RD', 'MR-0140902020-JO-2', '25000', '25000', 0, 1, 'ROLL', '', '15-Sep-2020', '16-Sep-2020', 'WAREHOUSE', 'Done', 'GMI', 1, '16-Sep-2020\r'),
(613, '000-732', '2020-09-15', 'PEMOTONGAN KABEL AVS 1.25 MM YELLOW 50 METER ', '5LAVSS 1.25 - YW', 'MR-0140902020-JO-3', '25000', '25000', 0, 1, 'ROLL', '', '15-Sep-2020', '16-Sep-2020', 'WAREHOUSE', 'Done', 'GMI', 1, '16-Sep-2020\r'),
(614, '000-732', '2020-09-15', 'PEMOTONGAN KABEL AVS 1.25 MM GREEN 100 METER', '5LAVSS 1.25 - GR', 'MR-0140902020-JO-4', '25000', '25000', 0, 1, 'ROLL', '', '15-Sep-2020', '16-Sep-2020', 'WAREHOUSE', 'Done', 'GMI', 1, '16-Sep-2020\r'),
(615, '000-732', '2020-09-15', 'PEMOTONGAN KABEL AVS 1.25 MM BROWN 50 METER', '5LAVSS 1.25 - BR', 'MR-0140902020-JO-5', '25000', '25000', 0, 1, 'ROLL', '', '15-Sep-2020', '16-Sep-2020', 'WAREHOUSE', 'Done', 'GMI', 1, '16-Sep-2020\r'),
(616, '000-732', '2020-09-15', 'PEMOTONGAN KABEL AVS 1.25 MM ORANGE 50 METER', '5LAVSS 1.25 - OR', 'MR-0140902020-JO-6', '25000', '25000', 0, 1, 'ROLL', '', '15-Sep-2020', '16-Sep-2020', 'WAREHOUSE', 'Done', 'GMI', 1, '16-Sep-2020\r'),
(617, '000-733', '2020-09-15', 'PEMOTONGAN KABEL AVS 1.25 MM UNGU 50 METER', '5LAVSS 1.25 - PR', 'MR-0140902020-JO-2', '25000', '25000', 0, 1, 'ROLL', '', '15-Sep-2020', '16-Sep-2020', 'WAREHOUSE', 'Done', 'GMI', 1, '16-Sep-2020\r'),
(618, '000-734', '2020-09-16', 'PEMOTONGAN KABEL AVS 1.25 MM HITAM 100 METER', '5LAVSS 1.25 - BK', 'MR-0140902020-JO-3', '25000', '25000', 0, 1, 'ROLL', '', '15-Sep-2020', '16-Sep-2020', 'WAREHOUSE', 'Done', 'GMI', 1, '16-Sep-2020\r'),
(619, '000-735', '2020-09-17', 'PEMOTONGAN KABEL AVS 1.25 MM BIRU 70 METER', '5LAVSS 1.25 - BL', 'MR-0140902020-JO-4', '25000', '25000', 0, 1, 'ROLL', '', '15-Sep-2020', '16-Sep-2020', 'WAREHOUSE', 'Done', 'GMI', 1, '16-Sep-2020\r'),
(620, '000-736', '2020-09-18', 'PEMOTONGAN KABEL AVS 1.25 MM PUTIH 50 METER', '5LAVSS 1.25 - WH', 'MR-0140902020-JO-5', '25000', '25000', 0, 1, 'ROLL', '', '15-Sep-2020', '16-Sep-2020', 'WAREHOUSE', 'Done', 'GMI', 1, '16-Sep-2020\r'),
(621, '000-734', '2020-09-16', 'BRACKET LOTOBOX 2 SYSTEM VERTICAL FOR WA 600 REPAIR FROM 10L256-HD785', '10L330', 'MR-DH-190 / PO :3559', '250000', '250000', 17315, 1, 'EA', '', '16-Sep-2020', '22-Sep-2020', 'SERVICE', 'Done', 'GIS', 1, '22-Sep-2020\r'),
(622, '000-735', '2020-09-16', 'LOTOBOX 2 SYTSEM WITH ESP 6/6 FOR WA ASSY', '12L-LB2VKIT-WA600', 'MR-DH-190/PO GIS 3559', '250000', '250000', 17316, 1, 'SET', '', '16-Sep-2020', '22-Sep-2020', 'SERVICE', 'Done', 'GIS', 1, '22-Sep-2020\r'),
(623, '000-736', '2020-09-17', 'BASEPLATE LOTO BOX 2 SYSTEM HORIZONTAL FOR SCANIA', '10L331', 'MR-0170902020', '200000', '200000', 17167, 1, 'SET', '', '17-Sep-2020', '17-Sep-2020', 'SERVICE', 'Done', 'GMI', 1, '17-Sep-2020\r'),
(624, '000-737', '2020-09-17', 'REPAIR BASEPLAT APAR 9 KG GD 825  10L321', '10L2556GD-1', 'MR-0170902020', '100000', '500000', 17248, 5, 'EA', '', '17-Sep-2020', '23-Sep-2020', 'SERVICE', 'Done', 'GMI', 5, '23-Sep-2020\r'),
(625, '000-738', '2020-09-21', 'BASEPLATE LOTO SYSTEM SCANIA P460', '10L331', 'MR-0210902020-JO', '200000', '1000000', 17296, 5, 'EA', '', '21-Sep-2020', '22-Sep-2020', 'SERVICE', 'Done', 'GMI', 5, '22-Sep-2020\r'),
(626, '000-739', '2020-09-21', 'BRACKET SWITCHBOX ', '10L290', 'PO :480023320', '250000', '1250000', 17649, 5, 'EA', '', '21-Sep-2020', '22-Sep-2020', 'LOGISTIK', 'Done', 'GMI', 5, '22-Sep-2020\r'),
(627, '000-740', '2020-09-21', 'BRACKET DT CLIP', '10L306', 'PO :480023320', '100000', '200000', 17249, 2, 'EA', '', '22-Sep-2020', '23-Sep-2020', 'LOGISTIK', 'Done', 'GMI', 2, '23-Sep-2020\r'),
(628, '000-740', '2020-09-22', 'BRACKET DT CLIP', '10L307', 'PO :480023321', '100000', '300000', 17341, 3, 'EA', '', '12-Oct-2020', '22-Oct-2020', 'LOGISTIK', 'Done', 'GMI', 3, '22-Oct-2020\r'),
(629, '000-741', '2020-09-23', 'REPAIR BRACKET WORKLAMP 2L3-6F (10L270)', '10L332', 'MR-0230902020-JO', '120000', '240000', 17297, 2, 'EA', '', '23-Sep-2020', '23-Sep-2020', 'SERVICE', 'Done', 'GMI', 2, '23-Sep-2020\r'),
(630, '000-742', '2020-09-23', 'BASEPLATE BRACKET WORKLAMP', '10L332-B', 'MR-0230902020-JO', '175000', '350000', 17298, 2, 'EA', '', '23-Sep-2020', '24-Sep-2020', 'SERVICE', 'Done', 'GMI', 2, '24-Sep-2020\r'),
(631, '000-743', '2020-09-23', 'HARNES 10 METER 2 KABEL', '13L-HR10M2K', 'MR-0230902020-JO', '25000', '25000', 17276, 1, 'SET', '', '23-Sep-2020', '23-Sep-2020', 'SERVICE', 'Done', 'GMI', 1, '23-Sep-2020\r'),
(632, '000-744', '2020-09-29', 'HARNES NEW SPMC D8T', '13L-HRSPMC8T', 'CH -018 / PO 4800023563 ', '1000000', '17000000', 17331, 17, 'SET', '', '29-Sep-2020', '22-Oct-2020', 'LOGISTIK', 'Done', 'GMI', 17, '22-Oct-2020\r'),
(633, '000-745', '2020-09-29', 'BRAKET FUSE N', '10L311-N', 'CH -018 / PO 4800023563 ', '100000', '1700000', 17275, 17, 'EA', '', '29-Sep-2020', '2-Oct-2020', 'LOGISTIK', 'Done', 'GMI', 17, '2-Oct-2020\r'),
(634, '000-746', '2020-09-29', 'SWITCHBOX SPMC D8T', '11L-SPMC SB-8T', 'CH -018 / PO 4800023563 ', '250000', '4250000', 17333, 17, 'EA', '', '12-Oct-2020', '22-Oct-2020', 'LOGISTIK', 'Done', 'GMI', 17, '22-Oct-2020\r'),
(635, '000-747', '2020-09-29', 'BRACKET DT CLIP', '10L306', 'CH -018 / PO 4800023563 ', '100000', '1700000', 17334, 17, 'EA', '', '12-Oct-2020', '22-Oct-2020', 'LOGISTIK', 'Done', 'GMI', 17, '22-Oct-2020\r'),
(636, '000-748', '2020-09-29', 'TEST LAMPU ND60F + STIKER', '', 'PO 3354', '25000', '1500000', 0, 60, 'EA', '', '29-Sep-2020', '9-Oct-2020', 'LOGISTIK', 'Done', 'GIS', 60, '9-Oct-2020\r'),
(637, '000-748', '2020-09-29', 'TEST LAMPU ND60S + STIKER', '', 'PO 3355', '25000', '2300000', 0, 92, 'EA', '', '29-Sep-2020', '9-Oct-2020', 'LOGISTIK', 'Done', 'GIS', 92, '9-Oct-2020\r'),
(638, '000-749', '2020-09-29', 'BASEPLATE WORK LAMP FOR 10L285-S (KECIL)', '10L333-K', 'MR-DH 192', '175000', '350000', 17299, 2, 'EA', '', '29-Sep-2020', '1-Oct-2020', 'LOGISTIK', 'Done', 'GMI', 2, '1-Oct-2020\r'),
(639, '000-750', '2020-09-29', 'BASEPLATE WORK LAMP 10L285 FOR GD705', '10L333-B', 'DH -193', '200000', '200000', 17300, 1, 'EA', '', '29-Sep-2020', '1-Oct-2020', 'SERVICE', 'Done', 'GMI', 1, '1-Oct-2020\r'),
(640, '000-751', '2020-09-29', 'BRACKET WORKLAMP ND50 FOR GD705 10L285-S', '10L334', 'DH -193', '175000', '350000', 17301, 2, 'EA', '', '29-Sep-2020', '1-Oct-2020', 'SERVICE', 'Done', 'GMI', 2, '1-Oct-2020\r'),
(641, '000-752', '2020-09-30', 'BRACKET T BOX UK 80X210X70', '10L319', 'CH -019', '200000', '3400000', 17332, 17, 'EA', '', '30-Sep-2020', '7-Oct-2020', 'LOGISTIK', 'Done', 'GMI', 17, '7-Oct-2020\r'),
(642, '000-753', '2020-10-06', 'TEST LAMPU + STIKER 500 W', '11L-1365-1-500', 'PO :3514', '25000', '375000', 0, 15, 'SET', '', '6-Oct-2020', '9-Oct-2020', 'WAREHOUSE', 'Done', 'GIS', 15, '9-Oct-2020\r'),
(643, '000-754', '2020-10-06', 'HARNES 5 METER 2 KABEL', '13L-HR5M2K', 'MR -0501002020-JO', '25000', '375000', 17284, 15, 'SET', '', '6-Oct-2020', '8-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 15, '8-Oct-2020\r'),
(644, '000-755', '2020-10-06', 'HARNESS 7 METER 4 KABEL', '13L-HR7M4K', 'MR-0501002020-JO', '25000', '375000', 17287, 15, 'SET', '', '6-Oct-2020', '8-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 15, '8-Oct-2020\r'),
(645, '000-756', '2020-10-06', 'HARNESS 2 METER 4 KABEL', '13L-HR2M4K', 'MR-0501002020-JO', '25000', '375000', 17289, 15, 'SET', '', '6-Oct-2020', '8-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 15, '8-Oct-2020\r'),
(646, '000-757', '2020-10-06', 'LOTOBOX PC/HD 4 SYSTEM', '12L-LB4-KITHD/PC', 'MR-0501002020-JO', '225000', '1125000', 17365, 5, 'SET', '', '2-Nov-2020', '3-Nov-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '3-Nov-2020\r'),
(647, '000-758', '2020-10-06', 'CABLE BATRE PC200/300/400', '13L-CBPC200/300/400', 'MR-0501002020-JO', '75000', '750000', 17302, 10, 'SET', '', '6-Oct-2020', '12-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '12-Oct-2020\r'),
(648, '000-759', '2020-10-08', 'POTONG KABEL AVS 2MM Black 30 Meter 1 roll', '5L2-2-30BK', 'PO : 65000048664 (Intraco Penta)', '25000', '25000', 17303, 1, 'ROL', '', '8-Oct-2020', '8-Oct-2020', 'LOGISTIK', 'Done', 'GMI', 1, '8-Oct-2020\r'),
(649, '000-759', '2020-10-09', 'POTONG KABEL AVS 2MM Black 30 Meter 1 roll', '5L2-2-30RD', 'PO : 65000048664 (Intraco Penta)', '25000', '50000', 17304, 2, 'ROL', '', '8-Oct-2020', '8-Oct-2020', 'LOGISTIK', 'Done', 'GMI', 2, '8-Oct-2020\r'),
(650, '000-760', '2020-10-08', 'LOTOBOX 2 SYSTEM VERTICAL FOR 460 ', '12LB2KIT-QS', 'MR - 0801002020 - JO', '225000', '1125000', 17155, 5, 'SET', '', '13/14/2020', '14-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '14-Oct-2020\r'),
(651, '000-761', '2020-10-08', 'BASEPLATE LOTO SYSTEM SCANIA P460', '10L331', 'MR-0801002020-JO', '200000', '1000000', 17345, 5, 'EA', '', '8-Oct-2020', '14-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '14-Oct-2020\r'),
(652, '000-762', '2020-10-08', 'HARNES 10 METER 4 KABEL', '13L-HR10M4K', 'MR-0801002020-JO', '25000', '25000', 17306, 1, 'SET', '', '8-Oct-2020', '13-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 1, '13-Oct-2020\r'),
(653, '000-763', '2020-10-08', 'CABLE BATRE LOTOBOX HD465', '13L-CBHD465-90', '', '75000', '75000', 17317, 1, 'SET', '', '13/14/2020', '14-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 1, '14-Oct-2020\r'),
(654, '000-764', '2020-10-13', 'BRACKET STROBE HEAVY TIPPER', '3L5-12', 'MR-0130102020-WH JO', '250000', '2500000', 17346, 10, 'EA', '', '13-Oct-2020', '28-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '28-Oct-2020\r'),
(655, '000-765', '2020-10-13', 'BRACKET EXTENTION MIROR', '11L-1041-P410', 'MR-0130102020-WH-JO', '150000', '1500000', 17388, 10, 'EA', '', '13-Oct-2020', '18-Nov-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '18-Nov-2020\r'),
(656, '000-766', '2020-10-13', 'BRACKET LOTOBOX 4 SYSTEM PC/HD', '11L-0912-4-1', 'MR-0130102020-WH-JO', '225000', '2250000', 17393, 10, 'EA', '', '13-Oct-2020', '18-Nov-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '18-Nov-2020\r'),
(657, '000-767', '2020-10-13', 'TEST POWER SUPPLY 24 20 A', '11L-2352-20', 'PO :4500139056', '15000', '15000', 0, 1, 'EA', '', '13-Oct-2020', '13-Oct-2020', 'LOGISTIK', 'Done', 'GMI', 1, '13-Oct-2020\r'),
(658, '000-768', '2020-10-16', 'LOTOBOX 2 SYSTEM KIT FOR PC PAMA', '12L-LB2H-KITPCP', 'PO :3586', '250000', '250000', 17314, 1, 'SET', '', '16-Oct-2020', '16-Oct-2020', 'WAREHOUSE', 'Done', 'GIS', 1, '16-Oct-2020\r'),
(659, '000-769', '2020-10-16', 'TEST SPEED LIMITER', '1L6-5-N', 'PO STM 20-090033 & STM 20-090082', '25000', '1025000', 0, 41, 'SET', '', '17-Oct-2020', '17-Oct-2020', 'LOGISTIK', 'Done', 'GMI', 41, '17-Oct-2020\r'),
(660, '000-770', '2020-10-19', 'CABLE BATRE HD465', '13L-CBHD465-70', 'DH -201', '70000', '70000', 17340, 1, 'SET', '', '19-Oct-2020', '19-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 1, '19-Oct-2020\r'),
(661, '000-771', '2020-10-19', 'BASEPLATE LOTO 4 SYSTEM HD485', '10L335', 'DH -202', '125000', '125000', 17347, 1, 'SET', '', '19-Oct-2020', '19-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 1, '19-Oct-2020\r'),
(662, '000-772', '2020-10-21', 'HARNES 10 METER 4 KABEL', '13L-HR10M4K', 'MR-02101002020-1-JO', '25000', '250000', 17343, 10, 'SET', '', '21-Oct-2020', '23-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '23-Oct-2020\r'),
(663, '000-773', '2020-10-21', 'HARNES 2 METER 2 KABEL ', '13L-HR2M2K', 'MR-02101002020-1-JO', '25000', '250000', 17357, 10, 'SET', '', '21-Oct-2020', '23-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '23-Oct-2020\r'),
(664, '000-774', '2020-10-21', 'BRACKET TYRE LAMP SCANIA P410', '10L336', 'MR-DH202', '125000', '250000', 17344, 2, 'EA', '', '21-Oct-2020', '22-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 2, '22-Oct-2020\r'),
(665, '000-775', '2020-10-21', 'CABLE SWITCH FOR 13L-FL-SC', '13L-FL-C', 'MR-02101002020', '25000', '50000', 17338, 2, 'EA', '', '22-Oct-2020', '22-Oct-2020', 'WAREHOUSE', 'Done', 'GMI', 2, '22-Oct-2020\r'),
(666, '000-776', '2020-10-26', 'BRACKET APAR 9KG FOR BOMAG', '10L255-9-BW211', 'MR-DH-203', '200000', '600000', 17370, 3, 'EA', '', '27-Oct-2020', '30-Sep-2020', 'SERVICE', 'Done', 'GMI', 3, '30-Sep-2020\r'),
(667, '000-777', '2020-10-27', 'FAN GUARD', '10L337', 'MR-02701002020-WH-SPK', '150000', '300000', 17371, 2, 'EA', '', '27-Oct-2020', '5-Nov-2020', 'SERVICE', 'Done', 'GMI', 2, '5-Nov-2020\r'),
(668, '000-777', '2020-10-28', 'FAN GUARD', '10L338', '', '150000', '300000', 0, 2, 'EA', '', '28-Oct-2020', '', 'SERVICE', 'Done', '', 2, '\r'),
(669, '000-778', '2020-10-30', 'HARNESS NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-1', 'PO GIS-3488', '1000000', '1000000', 17413, 1, 'SET', '', '30-Oct-2020', '26-Nov-2020', 'LOGISTIK', 'Done', 'GIS', 1, '26-Nov-2020\r'),
(670, '000-778', '2020-10-31', 'HARNESS NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-2', 'PO GIS-3488', '1000000', '6000000', 17475, 6, 'SET', '', '30-Oct-2020', '7-Dec-2020', 'LOGISTIK', 'Done', 'GIS', 6, '7-Dec-2020\r'),
(671, '000-778', '2020-11-01', 'HARNESS NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-3', 'PO GIS-3488', '1000000', '3000000', 17516, 3, 'SET', '', '30-Oct-2020', '21-Dec-2020', 'LOGISTIK', 'Done', 'GIS', 3, '21-Dec-2020\r'),
(672, '000-779', '2020-10-30', 'BRACKET MODUL SPMC HD785', '10L289-HD', 'PO GIS-3488', '250000', '2500000', 17501, 10, 'EA', '', '30-Oct-2020', '18-Dec-2020', 'LOGISTIK', 'Done', 'GIS', 10, '18-Dec-2020\r'),
(673, '000-780', '2020-10-30', 'BRACKET FUSE', '10L311-N', 'PO GIS-3488', '100000', '1000000', 17317, 10, 'EA', '', '30-Oct-2020', '18-Nov-2020', 'LOGISTIK', 'Done', 'GIS', 10, '18-Nov-2020\r'),
(674, '000-781', '2020-11-04', 'BRACKET CSHAPE', '3L5-2', 'MR-0401102020-JO', '150000', '2250000', 17414, 15, 'EA', '', '4-Nov-2020', '23-Nov-2020', 'SERVICE', 'Done', 'GMI', 15, '23-Nov-2020\r'),
(675, '000-782', '2020-11-09', 'BRACKET  LOTO DOUBLE  FUNCTION  (VERTICAL)', '10L296', 'PO :3065', '250000', '4250000', 17389, 17, 'EA', '', '9-Nov-2020', '10-Nov-2020', 'LOGISTIK', 'Done', 'GIS', 17, '10-Nov-2020\r'),
(676, '000-783', '2020-11-09', 'LOTOBOX 2 SYSTEM VERTICAL', '12L-LB2V-KITS-X', 'PO :3065', '200000', '3400000', 17376, 17, 'SET', '', '9-Nov-2020', '11-Nov-2020', 'LOGISTIK', 'Done', 'GIS', 17, '11-Nov-2020\r'),
(677, '000-784', '2020-11-09', 'TEST SPEED LIMITER ', '1L6-5-N', 'PO  :  278/KAK-WBN/X/2020 & STM 20-090033', '25000', '275000', 0, 11, 'SET', '', '9-Nov-2020', '11-Nov-2020', 'LOGISTIK', 'Done', 'GMI', 11, '11-Nov-2020\r'),
(678, '000-785', '2020-11-12', 'BRACKET  APAR 6 BOMAG', '10L256 -6G', 'MR -0120112020-WH-02', '100000', '500000', 17505, 5, 'EA', '', '12-Nov-2020', '21-Dec-2020', 'WAREHOUSE', 'Done', 'GMI', 5, '21-Dec-2020\r'),
(679, '000-786', '2020-11-12', 'LOTOBOX 2 SYSTEM VERTICAL ', '12L-LB2VKIT-QS', 'MR-0120112020-WH-02', '200000', '2000000', 17507, 10, 'SET', '', '17-Dec-2020', '18-Dec-2020', 'WAREHOUSE', 'Done', 'GMI', 10, '18-Dec-2020\r');
INSERT INTO `jo` (`id`, `no_jo`, `date_created`, `deskripsi`, `part_number`, `po/mr`, `harga_ea`, `total`, `no_jbc`, `qty`, `vom`, `it`, `mulai`, `selesai`, `request`, `status`, `lokasi`, `done`, `estimasi_selesai`) VALUES
(680, '000-787', '2020-11-12', 'BRACKET LOTO 2 SYSTEM VERTICAL QUESTER FOR SCANIA', '10L256-QS', 'MR -0120112020-WH-02', '250000', '5000000', 17416, 20, 'EA', '', '12-Nov-2020', '24-Nov-2020', 'WAREHOUSE', 'Done', 'GMI', 20, '24-Nov-2020\r'),
(681, '000-788', '2020-11-13', 'LOTOBOX 2 SYSTEM KIT', '12L-LB2H-KIT-PCP-1', 'PO :3612', '225000', '900000', 17386, 4, 'SET', '', '13-Nov-2020', '17-Nov-2020', 'LOGISTIK', 'Done', 'GIS', 4, '17-Nov-2020\r'),
(682, '000-789', '2020-11-13', 'TEST SPEED LIMITER', '1L6-5-N', 'PO  279 /KAK/WBN/X/2020', '25000', '975000', 0, 39, 'SET', '', '13-Nov-2020', '14-Nov-2020', 'LOGISTIK', 'Done', 'GMI', 39, '14-Nov-2020\r'),
(683, '000-790', '2020-11-13', 'FATIQUE WARNING 4 METER ', '1L5-S-1-HD/PC', 'PO :3601', '100000', '4200000', 17460, 42, 'SET', '', '17-Nov-2020', '1-Dec-2020', 'LOGISTIK', 'Done', 'GIS', 42, '1-Dec-2020\r'),
(684, '000-790', '2020-11-14', 'FATIQUE WARNING 4 METER ', '1L5-S-1-HD/PC', 'PO :3602', '100001', '800008', 17517, 8, 'SET', '', '18-Dec-2020', '21-Dec-2020', 'LOGISTIK', 'Done', 'GIS', 8, '21-Dec-2020\r'),
(685, '000-792', '2020-11-24', 'WIRING HARNES FOR LV ', '13L-HRLV-T', 'PO : 3623', '500000', '500000', 17465, 1, 'SET', '', '25-Nov-2020', '2-Dec-2020', 'LOGISTIK', 'Done', 'GIS', 1, '2-Dec-2020\r'),
(686, '000-793', '2020-11-24', 'BRACKET APAR 3 KG  FOR  LV', '10L255-3-LV', 'PO :3623', '75000', '75000', 17462, 1, 'SET', '', '24-Nov-2020', '2-Dec-2020', 'LOGISTIK', 'Done', 'GIS', 1, '2-Dec-2020\r'),
(687, '000-794', '2020-12-02', 'LOTOBOX 2 SYSTEM', '12L-LB2H-KIT-E', 'PO :3636', '200000', '200000', 17464, 1, 'SET', '', '01/012/2020', '2-Dec-2020', 'LOGISTIK', 'Done', 'GIS', 1, '2-Dec-2020\r'),
(688, '000-795', '2020-12-04', 'HARNES NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-1', 'PO : 3614', '1000000', '5000000', 17679, 5, 'SET', '', '12-Dec-2020', '', 'LOGISTIK', 'On Proses', 'GIS', 5, '\r'),
(689, '000-795', '2020-12-04', 'HARNES NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-1', 'PO : 3614', '1000000', '5000000', 0, 5, 'SET', '', '12-Dec-2020', '', 'LOGISTIK', 'On Proses', 'GIS', 5, '\r'),
(690, '000-796', '2020-12-04', 'BRACKET FUSE ', '10L311-N', 'PO : 3614', '100000', '1000000', 17503, 10, 'EA', '', '4-Dec-2020', '18-Dec-2020', 'LOGISTIK', 'Done', 'GIS', 10, '18-Dec-2020\r'),
(691, '000-797', '2020-12-04', 'HARNES NEW SPMC 785 KOMATSU ERKA', '13L-HRSPMC785-K-1', 'PO :3529', '1000000', '10000000', 17767, 10, 'SET', '', '4-Dec-2020', '9-Feb-2021', 'LOGISTIK', 'Done', 'GIS', 10, '9-Feb-2021\r'),
(692, '000-798', '2020-12-04', 'BRACKET FUSE', '10L311-N', 'PO :3529', '100000', '1000000', 17504, 10, 'EA', '', '4-Dec-2020', '18-Dec-2020', 'LOGISTIK', 'Done', 'GIS', 10, '18-Dec-2020\r'),
(693, '000-799', '2020-12-11', 'BASEPLATE INCLINO MODUL', '11L1581-B', 'PO:3649', '150000', '150000', 17499, 1, 'EA', '', '11-Dec-2020', '17-Dec-2020', 'LOGISTIK', 'Done', 'GIS', 1, '17-Dec-2020\r'),
(694, '000-800', '2020-12-11', 'HARNES INCLINO MODUL 6015', '13L-INCLINO-MODUL-CAT6015', 'PO:3649', '200000', '200000', 17498, 1, 'SET', '', '11-Dec-2020', '17-Dec-2020', 'LOGISTIK', 'Done', 'GIS', 1, '17-Dec-2020\r'),
(695, '000-801', '2020-12-11', 'HARNES FOR SENSOR TRAVEL', '13L-WIRLINO-CAT6015', 'PO:3649', '250000', '250000', 17493, 1, 'SET', '', '11-Dec-2020', '16-Dec-2020', 'LOGISTIK', 'Done', 'GIS', 1, '16-Dec-2020\r'),
(696, '000-802', '2020-12-14', 'CABLE BATRE FOR PC130', '13L-CBPC130', 'MR-01401202020', '75000', '75000', 17491, 1, 'SET', '', '15-Dec-2020', '15-Dec-2020', 'SERVICE', 'Done', 'GMI', 1, '15-Dec-2020\r'),
(697, '000-803', '2020-12-14', 'BRACKET SAFETY BELT', '10L338', 'MR-01401202020', '150000', '150000', 17502, 1, 'EA', '', '14-Dec-2020', '14-Dec-2020', 'SERVICE', 'Done', 'GMI', 1, '14-Dec-2020\r'),
(698, '000-804', '2020-12-15', 'BRACKET MODUL SPMC HD 785', '10L289-HD', 'PO:3614', '250000', '2500000', 17812, 10, 'EA', '', '15-Dec-2020', '15-Feb-2021', 'LOGISTIK', 'Done', 'GIS', 10, '15-Feb-2021\r'),
(699, '000-805', '2020-12-15', 'BRACKET MODUL SPMC HD 785', '10L289-HD', 'PO:3529', '250000', '2500000', 17812, 10, 'EA', '', '15-Dec-2020', '15-Feb-2021', 'LOGISTIK', 'Done', 'GIS', 10, '15-Feb-2021\r'),
(700, '000-806', '2020-12-18', 'BRACKET SENSOR MUNDUR', '10L339-4', 'DH-209', '100000', '600000', 17523, 6, 'SET', '', '18-Dec-2020', '18-Dec-2020', 'SERVICE', 'Done', 'GMI', 6, '18-Dec-2020\r'),
(701, '000-807', '2020-12-23', 'BRACKET SENSOR MUNDUR 4 TITIK DIATAS KABIN', '10L339-4C', 'PR20101294 Kobexindo', '100000', '100000', 17680, 1, 'SET', '', '23-Dec-2020', '23-Dec-2020', 'SERVICE', 'Done', 'GMI', 1, '23-Dec-2020\r'),
(702, '000-808', '2020-12-28', 'BRACKET LAMPU GANTIUNG ', 'ASSET02', 'PO :3670', '50000', '100000', 0, 2, 'EA', '', '28-Dec-2020', '28-Dec-2020', 'SERVICE', 'Done', 'GIS', 2, '28-Dec-2020\r'),
(703, '000-809', '2020-12-28', 'CABLE BATRE 375 ', '13L-CBD375', 'MR-02801202020-JO', '75000', '375000', 0, 5, 'SET', '', '', '', 'SERVICE', 'Done', 'GMI', 5, '\r'),
(704, '000-810', '2020-12-28', 'BRACKET CSHAPE', '3L5-2', 'MR-02801202020-JO', '125000', '1250000', 17664, 10, 'EA', '', '28-Dec-2020', '14-Jan-2021', 'SERVICE', 'Done', 'GMI', 10, '14-Jan-2021\r'),
(705, '000-811', '2021-01-06', 'BASEPLATE BRAKET ESP', '10L264-2', 'MR-02801202020-JO', '125000', '125000', 17589, 1, 'EA', '', '6-Jan-2021', '6-Jan-2021', 'SERVICE', 'Done', 'GMI', 1, '6-Jan-2021\r'),
(706, '000-812', '2021-01-06', 'REPAIR LOTO ESP (10L264-1) MOUNTINGAN DARI ESP - TELEMEKANIK', '', 'MR-DH-210', '125000', '125000', 0, 1, 'EA', '', '6-Jan-2021', '6-Jan-2021', 'SERVICE', 'Done', 'GMI', 1, '6-Jan-2021\r'),
(707, '000-813', '2021-01-07', 'LOTOBOX 2 SYSTEM ASSY ', '12L-LB2H-KIT-PCP-1', 'PO :3672', '225000', '675000', 17678, 3, 'SET', '', '14-Jan-2021', '22-Jan-2021', 'LOGISTIK', 'Done', 'GIS', 3, '22-Jan-2021\r'),
(708, '000-814', '2021-01-08', 'LOTOBOX 2 SYSTEM HORIZONTAL WITH ESP 6/6', '12L-LB2H-KIT-E', 'MR-008-001-02021', '225000', '1125000', 17571, 5, 'SET', '', '8-Jan-2021', '11-Jan-2021', 'LOGISTIK', 'Done', 'GMI', 5, '11-Jan-2021\r'),
(709, '000-815', '2021-01-12', 'FATIQUE WARNING  HARNES 4 METER', '1L5-S-1-HD/PC', 'PO :3685', '100000', '3000000', 17728, 30, 'SET', '', '1-Feb-2021', '2-Feb-2021', 'LOGISTIK', 'Done', 'GIS', 30, '2-Feb-2021\r'),
(710, '000-815', '2021-01-12', 'FATIQUE WARNING  HARNES 4 METER', '1L5-S-1-HD/PC', 'PO :3686', '100000', '2000000', 17812, 20, 'SET', '', '1-Feb-2021', '16-Feb-2021', 'LOGISTIK', 'Done', 'GIS', 20, '16-Feb-2021\r'),
(711, '000-815', '2021-01-12', 'FATIQUE WARNING  HARNES 4 METER', '1L5-S-1-HD/PC', 'PO :3687', '100000', '2000000', 17954, 20, 'SET', '', '1-Feb-2021', '3-Mar-2020', 'LOGISTIK', 'Done', 'GIS', 20, '3-Mar-2020\r'),
(712, '000-815', '0000-00-00', 'FATIQUE WARNING  HARNES 4 METER', '1L5-S-1-HD/PC', '', '100000', '3000000', 0, 30, '', '', '', '', '', 'Done', '', 30, '\r'),
(713, '000-816', '2021-01-12', 'FATIQUE WARNING HARNES HD/PC', '1L5-S-1-HD/PC', 'MR-060102021', '100000', '400000', 0, 4, 'SET', '', '12-Jan-2021', '24-Feb-2021', 'LOGISTIK', 'Done', 'GMI ', 4, '24-Feb-2021\r'),
(714, '000-816', '2021-01-12', 'FATIQUE WARNING HARNES HD/PC', '1L5-S-1-HD/PC', 'MR-060102021', '100000', '1600000', 0, 16, 'SET', '', '12-Jan-2021', '24-Feb-2021', 'LOGISTIK', 'Done', 'GMI ', 16, '24-Feb-2021\r'),
(715, '000-817', '2021-01-13', 'FATIQUEWARNING HARNES 4 METER WITH SENSOR', '1L5-1-HD/PC-SR', 'PO :3698', '100000', '1700000', 17743, 17, 'SET', '', '22-Jan-2021', '2-Feb-2021', 'LOGISTIK', 'Done', 'GIS', 17, '2-Feb-2021\r'),
(716, '000-817', '2021-01-13', 'FATIQUEWARNING HARNES 4 METER WITH SENSOR', '1L5-1-HD/PC-SR', 'PO :3698', '100000', '1400000', 17715, 14, 'SET', '', '22-Jan-2021', '5-Feb-2021', 'LOGISTIK', 'Done', 'GIS', 14, '5-Feb-2021\r'),
(717, '000-817', '2021-01-13', 'FATIQUEWARNING HARNES 4 METER WITH SENSOR', '1L5-1-HD/PC-SR', 'PO :3698', '100000', '1900000', 0, 19, 'SET', '', '22-Jan-2021', '24-Feb-2021', 'LOGISTIK', 'Done', 'GIS', 19, '24-Feb-2021\r'),
(718, '000-817', '2021-01-13', 'FATIQUEWARNING HARNES 4 METER WITH SENSOR', '1L5-1-HD/PC-SR', 'PO :3698', '100000', '200000', 0, 2, 'SET', '', '22-Jan-2021', '', 'LOGISTIK', 'Done', 'GIS', 2, '\r'),
(719, '000-817', '2021-01-13', 'REPAIR FATIQUE WARNING (1L5-1-HD/PC)', '1L5-1-HD/PC-SR', 'PO :3698', '100000', '1600000', 17854, 16, 'SET', '', '22-Jan-2021', '2-Feb-2021', 'LOGISTIK', 'Done', 'GIS', 16, '2-Feb-2021\r'),
(720, '000-818', '2021-01-13', 'HARNES 5 METER 2 KABEL AWG 18 (Merah Hitam)', '13L-HR5M2K-18AWG', '', '15000', '1020000', 0, 68, 'SET', '', '', '', 'LOGISTIK', 'Done', '', 68, '\r'),
(721, '000-819', '2021-01-14', 'HARNES 10 METER 2 KABEL (Merah-Merah)', '13L-HR10M2K-RD', '', '25000', '250000', 17696, 10, 'SET', '', '14-Jan-2021', '25-Jan-2021', 'LOGISTIK', 'Done', 'GMI', 10, '25-Jan-2021\r'),
(722, '000-820', '2021-01-14', 'HARNES 10 METER 2 KABEL ', '13L-HR10M2K', 'MR-0140102021-JO', '25000', '250000', 17671, 10, 'SET', '', '14-Jan-2021', '20-Jan-2021', 'LOGISTIK', 'Done', 'GMI', 10, '20-Jan-2021\r'),
(723, '000-821', '2021-01-15', 'LOTOBOX 2 SYSTEM', '12L-LB2H-KIT-E', 'MR-0150102021-JO', '225000', '1800000', 17754, 8, 'SET', '', '15-Jan-2021', '15-Jan-2021', 'SERVICE', 'Done', 'GMI', 8, '15-Jan-2021\r'),
(724, '000-821', '2021-01-15', 'LOTOBOX 2 SYSTEM', '12L-LB2VKIT-QS', 'MR-0150102021-JO', '', '0', 17717, 3, 'SET', '', '15-Jan-2021', '22-Jan-2021', 'SERVICE', 'Done', 'GMI', 3, '22-Jan-2021\r'),
(725, '000-822', '2021-01-15', 'BASEPLATE LOTO BOX 2 SYSTEM D31', '11L-1259-HM', 'MR-0150102021-JO', '125000', '1250000', 0, 10, 'EA', '', '', '', 'SERVICE', 'Done', 'GMI', 10, '\r'),
(726, '000-823', '2021-01-15', 'BRACKET SAFETY CONE', '10L273-70', 'MR-0150102021-JO', '100000', '1000000', 0, 10, 'EA', '', '15-Jan-2021', '25-Jan-2021', 'SERVICE', 'Done', 'GMI', 10, '25-Jan-2021\r'),
(727, '000-824', '2021-01-15', 'BRACKET WHEEL CHOKE', '10L274', 'MR-0150102021-JO', '250000', '750000', 17982, 3, 'EA', '', '15-Jan-2021', '21-Jan-2021', 'SERVICE', 'Done', 'GMI ', 3, '21-Jan-2021\r'),
(728, '000-826', '2021-01-15', 'ROLL NUT', '11L-1042', 'MR-0150102021-JO', '10000', '1000000', 17813, 100, 'EA', '', '15-Jan-2021', '26-Jan-2021', 'SERVICE', 'Done', 'GMI', 100, '26-Jan-2021\r'),
(729, '000-827', '2021-01-15', 'BRACKET LED KOMBINASI', '10L276-P410', 'MR-0150102021-JO', '250000', '2500000', 0, 10, 'SET', '', '', '', 'SERVICE', 'Done', 'GMI', 10, '\r'),
(730, '000-828', '2021-01-15', 'BRACKET BUGGY WHIP', '10L277-S', 'MR-0150102021-JO', '150000', '1500000', 0, 10, 'EA', '', '', '18-Feb-2021', 'SERVICE', 'Done', 'GMI', 10, '18-Feb-2021\r'),
(731, '000-829', '2021-01-18', 'BRACKET SWITCH ALARM ', '10L288', 'MR-0180102021-JO', '110000', '2200000', 0, 20, 'EA', '', '', '22-Jan-2021', 'WAREHOUSE', 'Done', 'GMI', 20, '22-Jan-2021\r'),
(732, '000-830', '2021-01-18', 'BASEPLATE LOTOBOX 2 SYSTEM for SCANIA R850', '11L-1239-SR', 'MR-0180102021-JO', '150000', '1650000', 0, 11, 'EA', '', '', '', 'WAREHOUSE', 'Done', 'GMI', 11, '\r'),
(733, '000-831', '2021-01-18', 'BASEPLATE WHEELCHOKE FOR SCANIA R850', '10L344', 'MR-0180102021-JO', '200000', '1400000', 17983, 7, 'EA', '', '18-Jan-2021', '23-Jan-2021', 'WAREHOUSE', 'Done', 'GMI', 7, '23-Jan-2021\r'),
(734, '000-832', '2021-01-20', 'FATIQUE WARNING WITH PARKING BREAK', '1L5-S-1-HD/PC-EK', 'MR-0190102021-JO', '100000', '200000', 17695, 2, 'SET', '', '20-Jan-2021', '20-Jan-2021', 'WAREHOUSE', 'Done', 'GMI', 2, '20-Jan-2021\r'),
(735, '000-833', '2021-01-20', 'PLAT NO UNIT DEPAN', '11L-1599M', 'MR-DH0214', '100000', '300000', 17836, 3, 'SET', '', '20-Jan-2021', '22-Jan-2021', 'WAREHOUSE', 'Done', 'GMI', 3, '22-Jan-2021\r'),
(736, '000-834', '2021-01-20', 'Tes lampu LED  WORK LAMP 500 W', '11L-1365-1-500', 'PO : 3650', '25000', '125000', 0, 5, 'EA', '', '', '', 'LOGISTIK', 'Done', 'GIS', 5, '\r'),
(737, '000-834', '2021-01-20', 'Tes lampu LED WORK LAMP 300 W ', '11L-1365-3-300', 'PO : 3650', '25000', '250000', 0, 10, 'EA', '', '', '', 'LOGISTIK', 'Done', 'GIS', 10, '\r'),
(738, '000-835', '2021-01-21', 'HARNES 10 METER 4 KABEL ', '13L-HR10M4K', 'MR-02001021-JO', '25000', '250000', 17718, 10, 'EA', '', '21-Jan-2021', '23-Jan-2021', 'SERVICE', 'DONE', 'GIS', 10, '23-Jan-2021\r'),
(739, '000-836', '2021-01-21', 'BRACKET APAR PC/HD 6KG', '10L255-6P', '', '150000', '1500000', 17830, 10, 'EA', '', '21-Jan-2021', '18-Jan-2021', 'SERVICE', 'DONE', 'GMI', 10, '18-Jan-2021\r'),
(740, '000-837', '2021-01-21', 'LOTOBOX 4 SYSTEM PC/HD', '12L-LB4-KIT PC/HD', '', '225000', '2250000', 17719, 10, 'SET', '', '21-Jan-2021', '27-Jan-2021', 'SERVICE', 'DONE', 'GMI', 10, '27-Jan-2021\r'),
(741, '000-838', '2021-01-21', 'HARNES 4 METER 2 KABEL ', '13L-HR4M2K', '', '25000', '375000', 17697, 15, 'SET', '', '21-Jan-2021', '25-Jan-2021', 'SERVICE', 'DONE', 'GMI', 15, '25-Jan-2021\r'),
(742, '000-839', '2021-01-21', 'REPAIR BRACKET FOGLAMP (10L275-Q)', '10L275-P410', '', '75000', '225000', 17838, 3, 'EA', '', '21-Jan-2021', '23-Jan-2021', 'SERVICE', 'DONE', 'GMI ', 3, '23-Jan-2021\r'),
(743, '000-840', '2021-01-21', 'ASSY FOGLAMP', '11L-0084-24SR-B', '', '50000', '150000', 17694, 3, 'SET', '', '21-Jan-2021', '20-Jan-2021', 'SERVICE', 'DONE', 'GMI', 3, '20-Jan-2021\r'),
(744, '000-840', '2021-01-21', 'ASSY FOGLAMP', '11L-0084-24SR-B', '', '50000', '350000', 17694, 7, 'SET', '', '21-Jan-2021', '20-Jan-2021', 'SERVICE', 'DONE', 'GMI', 7, '20-Jan-2021\r'),
(745, '000-841', '2021-01-21', 'REPAI R BRACKET LOTO 2 SYSTEM VERTICAL FOR QUESTER (10L256-Q)', '10L256-S', '', '75000', '225000', 17984, 3, 'EA', '', '21-Jan-2021', '23-Jan-2021', 'SERVICE', 'DONE', 'GMI', 3, '23-Jan-2021\r'),
(746, '000-842', '2021-01-21', 'LOTO BOX DOUBLE FUNCTION FOR SCANIA (Left)', '12L-LB2KIT-SCP410', '', '215000', '645000', 0, 3, 'SET', '', '21-Jan-2021', '23-Jan-2021', 'SERVICE', 'DONE', 'GMI', 3, '23-Jan-2021\r'),
(747, '000-843', '2021-01-21', 'BRACKET REVERSE LAMP', '10L285-S', '', '150000', '300000', 0, 2, 'EA', '', '21-Jan-2021', '27-Jan-2021', 'SERVICE', 'DONE', 'GMI', 2, '27-Jan-2021\r'),
(748, '000-843', '2021-01-21', 'BRACKET REVERSE LAMP', '10L285-S', '', '150000', '2700000', 0, 18, 'EA', '', '21-Jan-2021', '', 'SERVICE', '', 'GMI', 0, '\r'),
(749, '000-844', '2021-01-25', 'BRACKET EXTENSION WHEELCHOKE ', '10L344', '', '150000', '450000', 17981, 3, 'SET', '', '', '25-Jan-2021', 'SERVICE', 'DONE', 'GMI', 3, '25-Jan-2021\r'),
(750, '000-845', '2021-01-26', 'REPAIR ASSY 11L-0026-X-128', '12L-LB2H-KIT-X', '', '425000', '4250000', 17716, 10, 'SET', '', '26-Jan-2021', '27-Jan-2021', 'LOGISTIK', 'DONE', 'GIS', 10, '27-Jan-2021\r'),
(751, '000-845', '2021-01-26', 'REPAIR ASSY 11L-0026-X-128', '12L-LB2H-KIT-X', '', '425000', '4250000', 17724, 10, 'SET', '', '26-Jan-2021', '29-Jan-2021', 'LOGISTIK', 'DONE', 'GIS', 10, '29-Jan-2021\r'),
(752, '000-845', '2021-01-26', 'REPAIR ASSY 11L-0026-X-128', '12L-LB2H-KIT-X', '', '425000', '2125000', 0, 5, 'SET', '', '26-Jan-2021', '0/02/2021', 'LOGISTIK', 'DONE', 'GIS', 5, '0/02/2022\r'),
(753, '000-846', '2021-01-26', 'HARNES 10 METER 4 KABEL', '13L-HR10M4K', '', '25000', '250000', 17725, 10, 'SET', '', '26-Jan-2021', '27-Jan-2021', 'LOGISTIK', 'DONE', 'GIS', 10, '27-Jan-2021\r'),
(754, '000-846', '2021-01-26', 'HARNES 10 METER 4 KABEL', '13L-HR10M4K', '', '25000', '250000', 17856, 10, 'SET', '', '26-Jan-2021', '27-Jan-2021', 'LOGISTIK', 'DONE', 'GIS', 10, '27-Jan-2021\r'),
(755, '000-846', '2021-01-26', 'HARNES 10 METER 4 KABEL', '13L-HR10M4K', '', '25000', '375000', 0, 15, 'SET', '', '26-Jan-2021', '27-Jan-2021', 'LOGISTIK', 'DONE', 'GIS', 15, '27-Jan-2021\r'),
(756, '000-847', '2021-01-26', 'BRACKET STROBE LAMP ', '3L5-SYZ', '', '150000', '5250000', 17840, 35, 'EA', '', '26-Jan-2021', '27-Jan-2021', 'LOGISTIK', 'DONE', 'GIS', 35, '27-Jan-2021\r'),
(757, '000-848', '2021-01-26', 'HARNES 10 METER 2 KABEL ', '13L-HR10M2K', '', '25000', '875000', 17726, 35, 'SET', '', '26-Jan-2021', '27-Jan-2021', 'LOGISTIK', 'DONE', 'GIS', 35, '27-Jan-2021\r'),
(758, '000-849', '2021-01-26', 'LOTOBOX 2 SYSTEM HORIZONTAL FOR TELEMEKANIK', '12L-LB2H-KIT-X', '', '225000', '3150000', 0, 14, 'SET', '', '', '', 'LOGISTIK', 'DONE', 'GIS', 14, '\r'),
(759, '000-850', '2021-01-27', 'BRACKET APAR 6 KG FOR SANNY', '10L346-2', '', '200000', '1200000', 17735, 6, 'EA', '', '27-Jan-2021', '3-Feb-2021', 'SERVICE', 'DONE', 'GMI', 6, '3-Feb-2021\r'),
(760, '000-851', '2021-01-27', 'REPAIR BRACKET 10L263-X', '10L263', '', '200000', '1200000', 17842, 6, 'EA', '', '27-Jan-2021', '2-Feb-2021', 'SERVICE', 'DONE', 'GMI', 6, '2-Feb-2021\r'),
(761, '000-852', '2021-01-27', 'BRACKET STROBE ', '3L5-SKT', '', '125000', '875000', 17821, 7, 'EA', '', '27-Jan-2021', '3-Feb-2021', 'SERVICE', 'DONE', 'GMI', 7, '3-Feb-2021\r'),
(762, '000-853', '2021-01-27', 'BASEPLATE WORKLAMP /REVRSE  LAMP ', '10L347', '', '250000', '750000', 17989, 3, 'SET', '', '27-Jan-2021', '27-Jan-2021', 'SERVICE', 'DONE', 'GMI', 3, '27-Jan-2021\r'),
(763, '000-854', '2021-01-28', 'BRACKET CONVERTER ', '11L-1040-25B', '', '100000', '1500000', 17987, 15, 'EA', '', '28-Jan-2021', '9-Mar-2021', 'SERVICE', 'DONE', 'GMI', 15, '9-Mar-2021\r'),
(764, '000-855', '2021-01-28', 'LOTOBOX 2 SYSTEM  HORIZONTAL ', '12L-LB2H-KIT-X', '', '215000', '1290000', 0, 6, 'SET', '', '28-Jan-2021', '03/02.2021', 'SERVICE', 'DONE', 'GMI', 6, '03/02.2022\r'),
(765, '000-856', '2021-01-29', 'REPAIR LOTOBOX', '', '', '', '0', 0, 6, 'EA', '', '29-Jan-2021', '29-Jan-2021', 'SERVICE', 'DONE', 'GMI ', 6, '29-Jan-2021\r'),
(766, '000-857', '2021-02-01', 'BASEPLATE APAR 9 KG ', '10L349', '', '175000', '175000', 17868, 1, 'EA', '', '1-Feb-2021', '1-Feb-2021', 'SERVICE', 'DONE', 'GMI', 1, '1-Feb-2021\r'),
(767, '000-858', '2021-02-01', 'BRACKET STROBE LIGHT FOR D85', '3L5-D85D', '', '225000', '450000', 17837, 2, 'EA', '', '1-Feb-2021', '2-Feb-2021', 'SERVICE', 'DONE', 'GMI', 2, '2-Feb-2021\r'),
(768, '000-859', '2021-02-03', 'BRACKET LOTOBOX 4 SYSTEM PC/HD', '11L-0912-4-1', '', '220000', '2200000', 0, 10, 'EA', '', '', '', 'SERVICE', '', '', 0, '\r'),
(769, '000-860', '2021-02-04', 'HARNESS 8 METER 2 KABEL', '13LHR8M2K', '', '25000', '500000', 17843, 20, 'SET', '', '4-Feb-2021', '18-Feb-2021', 'SERVICE', 'DONE', 'GMI', 20, '18-Feb-2021\r'),
(770, '000-861', '2021-02-04', 'HARNES 10 METER 2 KABEL', '13L-HR10M2K', '', '25000', '500000', 17844, 20, 'SET', '', '4-Feb-2021', '18-Feb-2021', 'SERVICE', 'DONE', 'GMI', 20, '18-Feb-2021\r'),
(771, '000-862', '2021-02-04', 'HARNES 10 METER 4 KABEL', '13L-HR10M4K', '', '25000', '225000', 17793, 9, 'SET', '', '11-Feb-2021', '11-Feb-2021', 'SERVICE', 'DONE', 'GMI', 9, '11-Feb-2021\r'),
(772, '000-862', '2021-02-04', 'HARNES 10 METER 4 KABEL', '13L-HR10M4K', '', '25000', '275000', 0, 11, 'SET', '', '', '18-Feb-2021', '', 'DONE', '', 11, '18-Feb-2021\r'),
(773, '000-863', '2021-02-04', 'LOTOBOX 2 SYSTEM VERTICAL SCANIA', '12L-LB2V-KIT', '', '215000', '1290000', 0, 6, 'SET', '', '4-Feb-2021', '4-Mar-2021', 'SERVICE', 'DONE', 'GMI ', 6, '4-Mar-2021\r'),
(774, '000-863', '2021-02-04', 'LOTOBOX 2 SYSTEM VERTICAL SCANIA', '12L-LB2V-KIT', '', '215000', '3010000', 0, 14, 'SET', '', '4-Feb-2021', '', 'SERVICE', '', '', 0, '\r'),
(775, '000-864', '2021-02-04', 'LOTOBOX 2 SYSTEM VERTICAL WITH TELEMEKANIK', '12L-LB2V-KITSN', '', '220000', '1100000', 0, 5, 'SET', '', '', '', 'LOGISTIK', '', '', 0, '\r'),
(776, '000-865', '2021-02-04', 'BRACKET LOTOBOX  2 SYSTEM SANY VERTICAL', '10L351', '', '210000', '1050000', 0, 5, 'SET', '', '', '', 'LOGISTIK', 'DONE', 'GMI', 5, '\r'),
(777, '000-866', '2021-02-04', 'HARNES 10 METER 4 KABEL ', '13L-HR10M4K', '', '25000', '125000', 0, 5, 'SET', '', '', '1-Mar-2021', 'LOGISTIK', 'DONE', 'GIS', 5, '1-Mar-2021\r'),
(778, '000-867', '2021-02-04', 'BRACKET STROBE LAMP FOR CAGE', '3L5-SKT90', '', '125000', '625000', 0, 5, 'EA', '', '', '', 'LOGISTIK', '', '', 0, '\r'),
(779, '000-868', '2021-02-04', 'BRACKET APAR FOR SANY', '10L346', '', '200000', '1000000', 0, 5, 'EA', '', '', '', 'LOGISTIK', '', '', 0, '\r'),
(780, '000-869', '2021-02-04', 'HARNES 10 METER 2 KABEL', '13L-HR10M2K', '', '25000', '125000', 0, 5, 'SET', '', '', '1-Mar-2021', 'LOGISTIK', 'DONE', 'GIS', 5, '1-Mar-2021\r'),
(781, '000-870', '2021-02-04', 'LOTOBOX 2 SYSTEM HORIZONTAL WITH TELEMEKANIK', '12L-LB2H-KIT-X', '', '225000', '2250000', 0, 10, 'SET', '', '', '', 'LOGISTIK', '', '', 0, '\r'),
(782, '000-871', '2021-02-04', 'HARNES 10 METER 4 KABEL ', '13L-HR10M4K', '', '25000', '250000', 0, 10, 'SET', '', '', '1-Mar-2021', 'LOGISTIK', 'DONE', 'GIS', 10, '1-Mar-2021\r'),
(783, '000-872', '2021-02-04', 'BRACKET STROBE LAMP ', '3L5-SYZ', '', '25000', '250000', 0, 10, 'EA', '', '', '', 'LOGISTIK', '', '', 0, '\r'),
(784, '000-873', '2021-02-04', 'HARNES 10 METER 2 KABEL ', '13L-HR10M2K', '', '25000', '250000', 0, 10, 'SET', '', '', '1-Mar-2021', 'LOGISTIK', 'DONE', 'GIS', 10, '1-Mar-2021\r'),
(785, '000-874', '2021-02-08', 'MODIFIKASI CABLE FOR DASH CAMP 11L-2482', '11L-2482-I', '', '25000', '400000', 0, 16, 'SET', '', '', '', 'LOGISTIK', '', '', 0, '\r'),
(786, '000-875', '2021-02-08', 'BRACKET LOTOBOX 2 SYSTEM VERTICAL ', '10L351', '', '215000', '1290000', 0, 6, 'EA', '', '8-Feb-2021', '9-Feb-2021', 'SERVICE', 'DONE', 'GMI', 6, '9-Feb-2021\r'),
(787, '000-876', '2021-02-08', 'BRACKET APAR SKT 90', '10L346-2', '', '200000', '1200000', 17891, 6, 'EA', '', '8-Feb-2021', '11-Feb-2021', 'SERVICE', 'DONE', 'GMI', 6, '11-Feb-2021\r'),
(788, '000-877', '2021-02-08', 'BRACKET STROBE CAGE', '3L5-SKT90', '', '125000', '750000', 17841, 6, 'EA', '', '8-Feb-2021', '9-Feb-2021', 'SERVICE', 'DONE', 'GMI', 6, '9-Feb-2021\r'),
(789, '000-878', '2021-02-08', 'LOTOBOX 2 SYSTEM VERTICAL ', '12L-LB2H-KITSN', '', '220000', '1320000', 17883, 6, 'SET', '', '8-Feb-2021', '9-Feb-2021', 'SERVICE', 'DONE', 'GMI', 6, '9-Feb-2021\r'),
(790, '000-879', '2021-02-10', 'BRACKET WORK LAMP FOR WA', '10L352', '', '450000', '900000', 0, 2, 'EA', '', '', '11-Feb-2021', 'WAREHOUSE', 'DONE', 'GMI', 2, '11-Feb-2021\r'),
(791, '000-880', '2021-02-10', 'ASSY LOTOBOX 2 SYSTEM EKADARMA', '12L-LB2H-KIT-E', '', '215000', '1290000', 17529, 6, 'SET', '', '10-Feb-2021', '15-Feb-2021', 'WAREHOUSE', 'DONE', 'GMI', 6, '15-Feb-2021\r'),
(792, '000-881', '2021-02-11', 'MODIFIKASI CABLE FOR DASH CAM 11L-2482', '11L-2482-I', '', '25000', '900000', 0, 36, 'SET', '', '', '', 'SERVICE', '', 'GMI', 0, '\r'),
(793, '000-882', '2021-02-11', 'BRACKET APAR SCANIA ', '10L255-6P410', '', '125000', '1250000', 17831, 10, 'EA', '', '11-Feb-2021', '18-Feb-2021', 'SERVICE', 'DONE', 'GMI', 10, '18-Feb-2021\r'),
(794, '000-883', '2021-02-11', 'BRACKET STROBE LAMP FOR QUESTER', '3L5-6Q', '', '200000', '400000', 0, 2, 'EA', '', '', '', 'SERVICE', '', 'GMI', 0, '\r'),
(795, '000-884', '2021-02-11', 'BRACKET CAMERA ', '11L-2630', '', '125000', '125000', 17839, 1, 'EA', '', '11-Feb-2021', '11-Feb-2021', 'SERVICE', 'DONE', 'GMI', 1, '11-Feb-2021\r'),
(796, '000-885', '2021-02-11', 'BASEPLATE BRACKET WORKLAMP', '10L332-B', '', '175000', '350000', 0, 2, 'EA', '', '11-Feb-2021', '11-Feb-2021', 'SERVICE', 'DONE', 'GMI', 2, '11-Feb-2021\r'),
(797, '000-886', '2021-02-11', 'TEST LAMPU + STIKER 500 WATT', '11L-1365-1-500', '', '25000', '875000', 0, 35, 'EA', '', '11-Feb-2021', '11-Feb-2021', 'SERVICE', 'DONE', 'GIS', 35, '11-Feb-2021\r'),
(798, '000-887', '2021-02-17', 'HARNES FOGLAMP PANJANG 1 METER', '13L-FL-SC-1', '', '25000', '175000', 17899, 7, 'SET', '', '17-Feb-2021', '22-Feb-2021', 'SERVICE', 'DONE', 'GMI', 7, '22-Feb-2021\r'),
(799, '000-888', '2021-02-17', 'REPAIR BRACKET FOGLAMP', '10L275-S', '', '75000', '525000', 17959, 7, 'EA', '', '17-Feb-2021', '20-Feb-2021', 'WAREHOUSE', 'DONE', 'GMI', 7, '20-Feb-2021\r'),
(800, '000-889', '2021-02-17', 'BRACKET REAR LAMP', '10L285-S', '', '100000', '700000', 17980, 7, 'EA', '', '17-Feb-2021', '2-Feb-2021', 'WAREHOUSE', 'DONE', 'GMI', 7, '2-Feb-2021\r'),
(801, '000-890', '2021-02-17', 'BRACKET WHEELCHOKE', '10L274-P410', '', '250000', '1250000', 17968, 5, 'EA', '', '17-Feb-2021', '4-Mar-2021', 'WAREHOUSE', 'DONE', 'GMI', 5, '4-Mar-2021\r'),
(802, '000-891', '2021-02-19', 'LOTOBOX 2 SYSTEM VERTICAL', '12L-LB2KIT-QS', '', '225000', '225000', 17890, 1, 'SET', '', '19-Feb-2021', '22-Feb-2021', 'SERVICE', 'DONE', 'GMI', 1, '22-Feb-2021\r'),
(803, '000-891', '2021-02-19', 'LOTOBOX 2 SYSTEM VERTICAL', '12L-LB2KIT-QS', '', '225000', '1350000', 0, 6, 'SET', '', '19-Feb-2021', '1-Mar-2021', 'SERVICE', 'DONE', 'GMI', 6, '1-Mar-2021\r'),
(804, '000-892', '0000-00-00', 'BRACKET APAR SCANIA', '10L255-6410', '', '115000', '1150000', 17972, 10, 'EA', '', '19/02/202', '8-Mar-2021', 'SERVIICE', 'DONE', '', 10, '8-Mar-2021\r'),
(805, '000-893', '2021-02-19', 'BASEPLATE LOTOBOX 2 SYSTEM', '10L331', '', '115000', '805000', 17932, 7, 'SET', '', '19-Feb-2021', '1-Mar-2021', 'SERVICE', 'DONE', '', 7, '1-Mar-2021\r'),
(806, '000-894', '2021-02-19', 'REPAIR BRACKET FOGLAMP(10L275-Q)', '10L275-S', '', '75000', '525000', 17978, 7, 'SET', '', '19-Feb-2021', '1-Mar-2021', 'SERVICE', 'DONE', 'GMI', 7, '1-Mar-2021\r'),
(807, '000-895', '2021-02-19', 'BRACKET WHEELCHOKE', '10L274-P410', '', '250000', '2000000', 17971, 8, 'EA', '', '19-Feb-2021', '8-Mar-2021', 'SERVICE', 'DONE', 'GMI', 8, '8-Mar-2021\r'),
(808, '000-896', '2021-02-19', 'BRACKET BUGGY WHIP', '10L277-S', '', '100000', '1000000', 0, 10, 'EA', '', '19-Feb-2021', '', 'SERVICE', '', 'GMI', 0, '\r'),
(809, '000-897', '2021-02-19', 'NOMOR UNIT DEPAN', '11L-1599M', '', '100000', '500000', 17898, 5, 'SET', '', '19-Feb-2021', '22-Feb-2021', 'SERVICE', 'DONE', 'GMI', 5, '22-Feb-2021\r'),
(810, '000-897', '2021-02-19', 'NOMOR UNIT DEPAN', '11L-1599M', '', '100000', '200000', 17925, 2, 'SET', '', '19-Feb-2021', '25-Feb-2021', 'SERVICE', 'DONE', 'GMI', 2, '25-Feb-2021\r'),
(811, '000-898', '2021-02-22', 'FATIQUE WARNING 2.5 METER', '1L5-5-1.25', '', '100000', '1500000', 17893, 15, 'SET', '', '22-Feb-2021', '25-Feb-2021', 'SERVICE', 'DONE', 'GMI', 15, '25-Feb-2021\r'),
(812, '000-898', '0000-00-00', 'FATIQUE WARNING 2.5 METER', '1L5-5-1.25', '', '100000', '500000', 0, 5, '', '', '', '', '', '', '', 0, '\r'),
(813, '000-899', '2021-02-22', ' HARNES 2METER 2 KABEL', '13L-HR2M2K', '', '25000', '500000', 17894, 20, 'SET', '', '22-Feb-2021', '26-Feb-2021', 'WAREHOUSE', 'DONE', 'GMI', 20, '26-Feb-2021\r'),
(814, '000-900', '2021-02-24', 'HARNES 4 METER 2KABEL', '13L-HR4M2K', '', '25000', '250000', 17895, 10, 'SET', '', '22-Feb-2021', '26-Feb-2021', 'WAREHOUSE', 'DONE', 'GMI', 10, '26-Feb-2021\r'),
(815, '000-901', '2021-02-22', 'HARNES 5 METER 2KABEL', '13L-HR5M2K', '', '25000', '250000', 17896, 10, 'SET', '', '22-Feb-2021', '26-Feb-2021', 'WAREHOUSE', 'DONE', 'GMI', 10, '26-Feb-2021\r'),
(816, '000-902', '2021-02-23', 'EXTENSION MIROR', '11L-1041-SCANIA', '', '150000', '1500000', 0, 10, 'SET', '', '', '', 'WAREHOUSE', '', 'GMI', 0, '\r'),
(817, '000-903', '2021-02-24', 'CABLE BATRE HD785', '13L-CBHD785-90', '', '75000', '750000', 17999, 10, 'SET', '', '24-Feb-2021', '9-Mar-2021', 'WAREHOUSE', 'DONE', 'GMI', 10, '9-Mar-2021\r'),
(818, '000-904', '2021-02-24', 'HARNES 5 METER 4 KABEL', '13L-HR5M4K', '', '25000', '250000', 17897, 10, 'SET', '', '22-Feb-2021', '26-Feb-2021', 'WAREHOUSE', 'DONE', 'GMI', 10, '26-Feb-2021\r'),
(819, '000-905', '2021-02-25', 'BRACKET SAFETY CONE', '10L273-70', '', '25000', '250000', 17979, 10, 'SET', '', '25-Feb-2021', '27-Feb-2021', 'WAREHOUSE', 'DONE', 'GMI', 10, '27-Feb-2021\r'),
(820, '000-906', '2021-02-25', 'BRACKET BUGGY WHIP', '10L2775-S', '', '100000', '1000000', 17923, 10, 'EA', '', '25-Feb-2021', '03/03/021', 'WAREHOUSE', 'DONE', 'GMI', 10, '03/03/022\r'),
(821, '000-907', '2021-02-25', 'REPAIR BRACKET FOGLAMP', '10L275-P410', '', '75000', '750000', 17928, 10, 'SET', '', '25-Feb-2021', '27-Feb-2021', 'WAREHOUSE', 'DONE', 'GMI', 10, '27-Feb-2021\r'),
(822, '000-908', '2021-02-25', 'BASEPLATE LOTOBOX ', '10L311', '', '115000', '1495000', 17958, 13, 'EA', '', '25-Feb-2021', '1-Mar-2021', 'WAREHOUSE', 'DONE', '', 13, '1-Mar-2021\r'),
(823, '000-909', '2021-02-25', 'HARNES FOGLAMP + 1 METER ', '13L-FL-SC-1', '', '25000', '250000', 17977, 10, 'SET', '', '25-Feb-2021', '7-Mar-2021', 'WAREHOUSE', 'DONE', 'GMI', 10, '7-Mar-2021\r'),
(824, '000-910', '2021-02-26', 'ASY FOGLAMP B', '11L-0084-24SR-B', '', '50000', '650000', 0, 13, 'SET', '', '26-Feb-2021', '3-Mar-2021', 'WAREHOUSE', 'DONE', 'GMI', 13, '3-Mar-2021\r'),
(825, '000-911', '2021-02-26', 'BRACKET LAMP FOR SCANIA ', '10L303', '', '125000', '1250000', 0, 10, 'EA', '', '26-Feb-2021', '5-Mar-2021', 'WAREHOUSE', 'DONE', '', 10, '5-Mar-2021\r'),
(826, '000-912', '2021-02-26', 'BRACKET STROBE LAMP FOR SCANIA', '3L5-SR620', '', '200000', '2000000', 0, 10, 'EA', '', '26-Feb-2021', '3-Mar-2021', 'WAREHOUSE', 'DONE', 'GMI', 10, '3-Mar-2021\r'),
(827, '000-913', '2021-03-02', 'HARNES 6 METER 2 2K ', '13L-HR6M2K', '', '25000', '375000', 0, 15, 'SET', '', '', '', 'WAREHOUSE', '', 'GMI ', 0, '\r'),
(828, '000-914', '2021-03-02', 'LOTOBOX 4 SYSTEM PC/HD', '12L-LB4-KITPC/HD', '', '225000', '1125000', 0, 5, 'SET', '', '', '', 'WAREHOUSE', '', '', 0, '\r'),
(829, '000-915', '2021-03-02', ' HARNES FATIQUE WARNING SENSOR', '1L5-5-1HD/PC-SR', '', '100000', '1400000', 0, 14, 'SET', '', '', '', 'WAREHOUSE', '', '', 0, '\r'),
(830, '000-916', '2021-03-02', 'PLAT NUMBER DEPAN', '11L-1599M', '', '100000', '600000', 0, 6, 'SET', '', '2-Mar-2021', '4-Mar-2021', 'WAREHOUSE', 'DONE', 'GMI', 6, '4-Mar-2021\r'),
(831, '000-917', '2021-03-02', 'HARNES SPMC 785 PAMA ERKA', '13L-HRSPMC-785-K-1', '', '1000000', '20000000', 0, 20, 'SET', '', '', '', 'WAREHOUSE', '', '', 0, '\r'),
(832, '000-918', '2021-03-02', 'BRACKET MODUL SPMC HD 785', '10L289-HD', '', '250000', '5000000', 0, 20, 'SET', '', '', '', 'WAREHOUSE', '', '', 0, '\r'),
(833, '000-919', '0000-00-00', 'BRACKET FUSE', '10l311-N', '', '100000', '0', 0, 0, '', '', '', '', '', '', '', 0, '\r'),
(834, '000-920', '2021-03-02', 'BRACKET FUSE', '10l311-N', '', '100000', '2000000', 0, 20, 'SET', '', '', '', '', '', '', 0, '\r'),
(835, '000-921', '2021-03-02', 'HARNES NEW SPMC CAT 777 ', '13L-HRSPMC777', '', '1000000', '5000000', 0, 5, 'SET', '', '', '', '', '', '', 0, '\r'),
(836, '000-922', '0000-00-00', 'BRACKET MODUL SPMC CAT 773', '10LBRM-773', '', '', '0', 0, 0, '', '', '', '', '', '', '', 0, '\r'),
(837, '000-923', '2021-03-02', 'BRACKET APAR 6 KG SANY', '10L346-2', '', '200000', '2000000', 0, 10, 'EA', '', '', '', '', '', '', 0, '\r'),
(838, '000-924', '2021-03-02', 'BRACKET STROBE  SANY SKT 90', '3L5-SKT90', '', '125000', '1250000', 0, 10, 'EA', '', '', '', '', '', '', 0, '\r'),
(839, '000-925', '0000-00-00', '', '', '', '', '0', 0, 0, '', '', '', '', '', '', '', 0, '\r'),
(840, '000-926', '0000-00-00', 'LOTO DOUBLE FUNCTION FOR SANY', '12L-LB2V-KITSN', '', '', '0', 0, 10, 'SET', '', '', '', '', '', '', 0, '\r'),
(841, '000-927', '0000-00-00', '', '', '', '', '0', 0, 0, '', '', '', '', '', '', '', 0, '\r'),
(842, '000-928', '0000-00-00', '', '', '', '', '0', 0, 0, '', '', '', '', '', '', '', 0, '\r'),
(843, '000-929', '0000-00-00', '', '', '', '', '0', 0, 0, '', '', '', '', '', '', '', 0, '\r'),
(844, '000-930', '2021-03-03', 'HARNES RIVERSE SCANIA', '13L-FL-SC', '', '25000', '250000', 0, 10, 'SET', '', '', '', 'WAREHOUSE', '', '', 0, '\r'),
(845, '000-931', '2021-03-03', 'BASEPLATE WORK LAMP FOR REVERSE LAMP', '10L285-S', '', '100000', '1000000', 0, 10, 'EA', '', '', '', 'WAREHOUSE', '', '', 0, '\r'),
(846, '000-932', '2021-03-03', 'HARNES 10 METER 2 KABEL', '13L-HR10M2K', '', '25000', '250000', 0, 10, 'SET', '', '3-Mar-2021', '11-Feb-2021', 'WAREHOUSE', 'DONE', 'GMI', 10, '11-Feb-2021\r'),
(847, '000-933', '2021-03-03', 'HARNES 10 METER 4  KABEL', '13L-HR10M4K', '', '25000', '250000', 0, 10, 'SET', '', '12-Mar-2021', '12-Mar-2021', 'WAREHOUSE', 'DONE', 'GMI', 10, '12-Mar-2021\r'),
(863, '000-934', '2021-03-17', 'dfdsfd&quot;&quot;&quot;', 'edit fd', 'dfdsf', '21000', '252000', 0, 12, 'EA', 'dfgsd', '', '', 'HRD', 'On Progres', 'GMI', 0, ''),
(864, '000-935', '2021-03-17', 'tesss&quot;&quot;', ' update', 'dfgfdg', '21000', '252000', 0, 12, 'EA', 'fgds', '', 'Wed 17-Mar-2021', 'HRD', 'On Progres', 'GMI', 0, ''),
(865, '000-936', '2021-03-22', 'dsfdf', '34', '432423', '2500', '25000', 0, 10, 'EA', '2323', 'Mon 22-Mar-2021', 'Mon 22-Mar-2021', 'HRD', 'On Progres', 'GMI', 0, '');

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
  `kuota_cuti` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `sapaan`, `username`, `password`, `nrp`, `divisi`, `tanggal_gabung`, `tahun_gabung`, `tempat`, `ttl`, `tahun_lahir`, `alamat`, `pendidikan`, `jenjang`, `gol_darah`, `ktp`, `bpjs_kese`, `bpjs_kete`, `npwp`, `tlp`, `jabatan`, `email`, `foto`, `is_active`, `role_id`, `kuota_cuti`) VALUES
(1, 'Sigit Prasetyo', 'Mas', 'sigit', 'gmi', 'G1901187', '17', '28-Jan', 2019, 'Brebes', '08-Nov', 1997, 'KTP: DK Kubang Urang RT/RW: 003/008 Kel. Cilibur Kec. Paguyangan. Brebes 52276/Domisili: Jl. Kemang Raya No. 28A  Jaticempaka. Pondok Gede. Bekasi ', 'Nurul Huda PGY', 'SMA', '-', '3329041206970007', '0001656569722', '19034139840', '91.281.160.1-501.000 ', '085604111395 / 08970606865', 'IT SUPPORT', 'sigit@garudamart.com', 'sigit.jpg', 1, 4, '5'),
(2, 'Bunga Ratnani', 'Ibu', 'bunga', 'Xx#bunga', 'G11010006', '2', '1-Dec', 2010, 'jakarta', '08-Nov', 1985, 'Komplek DKI Blok A6 No.12 RT 009/013 Sunter Agung Tanjung priok Jakarta Utara 14350', '', 'S1', 'A', '3172024103850009', '0000037671186', '14029173110', '24.720.748.3-048.000', '0811817023', 'Head', 'ahmadfirdauss334@gmail.com', 'bunga.jpg', 1, 10, '12'),
(3, 'Siti Anisa Maelani', 'Mba', 'anisa', 'Xx#anisa', 'G14010075', '1', '12-Aug', 2014, 'Purbalingga', '14-May', 1996, 'Wanogara Wetan RT/RW: 002/001. Kel. Wanogara Wetan Kec. Rembang. Kab. Purbalingga Jawa Tengah 53356', '', 'SMK', '-', '3303135405960001', '0001017534504', '14029173219', '81.886.640.2-529.000', '08568477612', 'AP', 'anisa@garudamart.com', 'anisa.jpg', 1, 5, '12'),
(4, 'Toto Nihyana', 'Pak', 'toto', 'Xx#toto', 'G15010082', '13', '27-Nov', 2015, 'Cilacap', '8-Mar', 1977, 'Dsn. Peundeuy RT 04/RW 09 Kel. Panulisan Barat Kec. Dayeuhluhur Kab. Cilacap Jateng 53266', '', 'SMP', 'B', '3301160803770002', '0002648579995', '16032037208', '91.241.990.0-522.000', '081298044644', 'Team Leader', 'totogaruda04@gmail.com', 'toto.jpg', 1, 5, '12'),
(5, 'M. Suhail S', 'Pak', 'suhail', 'Xx#suhail', 'G14080076', '13', '17-Oct', 2014, 'Ujung Pandang', '12-Mar', 1974, 'Jl. Raya PS Kecapi Gg. Namin Rt. 001 RW. 004 Kel. Jatiwarna Kec. Pondok Melati Bekasi 17415', '', 'SMK ', 'O', '3172050312740004', '0001290988809', '14037439826 D1', '91.128.295.2-044.000', '082312022121', 'Head', 'suhail@garudamart.com', 'suhail.jpg', 1, 1, '12'),
(6, 'Achmad Gustian', 'Mas', 'achmad', 'Xx#achmad', 'G1501101', '15', '30-Aug', 2016, 'Jakarta', '31-Aug', 1996, 'KP. Pamahan RT.001 RW.008 Kel. Jatimekar Kec. Jatiasih. Bekasi 17422', '', 'SMK', 'O', '3175043108960003', '0002100067852', '18006190997', '93.761.840.3-005.000', '089643787310/0895358648991', 'Driver', 'gustianachmad@gmail.com', 'ahmad.jpg', 1, 5, '12'),
(7, 'Meilissa', 'Mba', 'meilissa', 'Xx#meilissa', 'G1601100', '13', '16-Sep', 2016, 'Ambon', '5-May', 1986, 'Komp. Jati permai I jl. Nakula no. 54 jatirahayu pondok melati bekasi 17414', '', 'S1', 'B', '3275124505860001', '0002511007345', '18006191011', '44.517.207.5-432.000', '087884198422', 'Senior Service Adm', 'meilissa@garudamart.com', 'mel.jpg', 1, 1, '12'),
(8, 'Azwita Febriyanti', 'Mba', 'azwita', 'Xx#azwita', 'G1601110', '1', '21-Nov', 2016, 'bekasi', '16-Feb', 1987, 'Jl. Setia I No. 23 RT/RW. 005/012 Kel. Jatiwaringin Kec. Pondok Gede. Bekasi 17411', '', 'D3', 'A', '3275085602870011', '0001621140726', '18006191029', '98.548.536.6-432.000', '087882091602/081770827299', 'AR', 'wita@garudamart.com', 'wita.jpg', 1, 5, '12'),
(9, 'Aceng Rusnadi', 'Pak', 'aceng', 'Xx#aceng', 'G1701112', '18', '10-Apr', 2017, 'Cilacap', '4-May', 1970, 'Dusun Peundeuy RT.003 RW. 008 Kel. Panulisan Barat Kec. Dayeuhluhur. Cilacap. Jawa Tengah 53266', '', 'SMA', 'A', '3301160405700001', '0002511007356', '18006191037', '77.426.837.9-522.000', '081347456055', 'Head', 'acengrusnadi04@gmail.com', 'aceng.jpg', 1, 1, '12'),
(10, 'Ahmad Sugiyanto', 'Mas', 'ahmad', 'Xx#ahmad', 'G1701113', '13', '18-Apr', 2017, 'Klaten', '4-Aug', 1990, 'Jl. Mahakam RT.003 RW.003 Kel. Mojopunggung Kec. Giri. Banyuwangi 68425', '', 'SMK ', 'B', '3510170408900001', '0000701293241', '18006191045', '91.869.917.4-627.000', '081807444929/ 081770801115', 'Mekanik', 'ahmad.s040890@gmail.com', 'sugi.jpg', 1, 5, '12'),
(11, 'Alfons Vicky Daniels', 'Mas', 'alfons', 'Xx#alfons', 'G1708130', '14', '29-May', 2017, 'Balikpapan', '9-Jan', 1990, 'Jl. Sepinggan Baru No 4 RT/RW. 026/000 Sepinggan. Balikpapan Selatan. Kota Balikpapan. Kal Tim', '', 'SMK ', 'O', '6471050901900002', '0001148258092', '18006191060', '66.858.187.9-728.000', '085921047867 / 08115998222', 'Head ', 'alfons@garudamart.com', 'alfons.jpg', 1, 1, '12'),
(12, 'Sunyoto', 'Pak', 'sunyoto', 'Xx#sunyoto', 'G1601103', '18', '25-Jan', 2017, 'Batang', '12-Dec', 1973, 'Dukuh kumesu RT 19/RW 5 Kel. Desa kumesu 51273', '', 'SD', '-', '3325041212730001', 'PBI', '19004278503', '93.200.528.3-513.000', '085327027677', 'Manufacture', 'nyoto2302@gmail.com', 'nyoto.jpg', 1, 5, '12'),
(13, 'Iwan Ase', 'Pak', 'iwan', 'Xx#iwan', 'G1501096', '13', '10-Jun', 2017, 'Cilacap', '12-Jan', 1988, 'Dusun Panulisan. RT 004/ RW 002 Kel. Panulisan Kec. Dayeuhluhur. Kab. Cilacap 53266', '', 'SLTP', 'AB', '3301161201880001', '0002643505817', '19004279741', '91.241.920.7-522.000', '081314496082', 'Mekanik', 'sabianase@gmail.com', 'ase.jpg', 1, 5, '12'),
(14, 'Eko Kiswanto', 'Pak', 'eko', 'Xx#eko', 'G1701117', '13', '14-Jul', 2017, 'Semarang', '27-Oct', 1990, 'BTN AD Jl. Bacang C III No. 9 RT/TW. 002/0012 Kel. Sukamaju Baru Kec. Tapos. Depok 16462', '', 'SMK', 'A', '3324082710900001', '0000807811499', '18006191078', '59.355.872.9-513.000', '087880216178', 'Mekanik', 'kiswanto90@gmail.com', 'eko.jpg', 1, 5, '12'),
(15, 'Ahmad Haerul Huda', 'Pak', 'huda', 'Xx#huda', 'G1701118', '13', '14-Jul', 2017, 'Jember', '20-Jul', 1991, 'Dsn. Padukuan Lor RT. 005 Rw. 002 Karang Semanding. Balung. Kab Jember Jawa Timur 68161', '', 'SMK', 'O', '3509102007910003', '0002511007367', '18006191086', '93.719.829.9-626.000', '085779740515/085782696252', 'Mekanik', 'khoirulyhuda07@gmail.com', 'huda.jpg', 1, 5, '12'),
(16, 'Melly Sulissetia Ningrum', 'Ibu', 'sulis', 'Xx#sulis', 'G1701126', '1', '26-Jul', 2017, 'Purworejo', '15-Jun', 1996, 'Kp. Pondok Ranggon RT 006/RW 003. Jati Murni. Pondok Melati. Kota Bekasi 17431', '', 'SMA', '-', '3306085506960004', '0002511007334', '18006191094', '84.067.177.0-447.000', '083844160790', 'Head', 'sulissetia@garudamart.com', 'sulis.jpg', 1, 1, '12'),
(17, 'Jacky Haryanto', 'Mas', 'jacky', 'Xx#jacky', 'G1701132', '14', '31-Jul', 2017, 'Bekasi', '24-Jan', 1996, 'Kp. Pondok Ranggon Sasak Jikin RT 01/RW 05 No. 33 Kel. Jatimurni Kec. PondoK Melati 17431', '', 'SMK', '-', '3275122401960004', '0001338581441', '18006191102', '93.657.196.7-447.000', '085717564012 / 089523557287', 'Admin', 'jacky@garudamart.com', 'jacky.jpg', 1, 5, '12'),
(18, 'Ben Yoseph Nugroho Tri Hartanto', 'Pak', 'yoseph', 'Xx#yoseph', 'G1701135', '14', '16-Oct', 2017, 'Bekasi', '31-Mar', 1994, 'Jl. Setia II No. 23 RT.007/004 Kel. Jatiwaringin Kec. Pondok Gede - Bekasi 17411', '', 'D3', 'A', '3275083103940017', '0001742869192', '18006191136 D1', '74.169.035.8-447.000', '085215151221', 'Spv', 'Benyosephnugroho@gmail.com', 'yosep.jpg', 0, 1, '12'),
(19, 'Angga Prayoga', 'Mas', 'angga', 'Xx#angga', 'G1701136', '14', '23-Oct', 2017, 'Bekasi', '15-Jun', 1992, 'Jl. Setia I No. 9 RT 005/RW 004 Kel. Jatiwaringin Kec. Pondok Gede 17411', '', 'SMK', '-', '3275081506920018', '0002511007323', '18006191144 D1', '93.070.675.9-447.000', '089630913358', 'Partman', 'Anggatotenk60@gmail.com', 'angga.jpg', 1, 5, '12'),
(20, 'Bennedita Tambunan ', 'Mba', 'dita', 'Xx#dita', 'G1701137', '2', '26-Oct', 2017, 'Jakarta', '28-Dec', 1999, 'Kp. Kebantenan RT 007/RW 006 Kel. Jatiasih Kec. Jatiasih Bekasi 17423', '', 'SMK', '-', '3275096812990007', '0002615586412', '18006191151', '91.361.212.3-447.000', '085893557933 ', 'Admin', 'dita@garudamart.com', 'dita.jpg', 1, 5, '12'),
(21, 'Sheintriana Ayu Putri', 'Mba', 'triana', 'Xx#triana', 'G1701138', '2', '26-Oct', 2017, 'Depok', '3-Aug', 1995, 'Perum Darmawangsa Residence Jl. Prambanan 7 Blok BP9 No 12 RT 005/ RW 014 Kel. Satria Mekar Kec. Tambun Utara', '', 'SMK', 'O', '3276024308950008', '0001771081705', '18006191169 D1', '72.933.106.6-009.000', '0895366528621', 'Admin', 'triana@garudamart.com', 'triana.jpg', 1, 5, '12'),
(22, 'Bonifacio Mau Buti', 'Pak', 'boni', 'Xx#boni', 'G1708139', '22', '6-Nov', 2017, 'maumela', '13-Sep', 1987, 'Jl. Mulawarman no. 10 RT. 011 RW. 000 Kel. Sepingan Kec. Balikpapan Selatan', '', 'SMA', 'O', '6471051309870010', '0001449849969', '18006191177', '-', '082251091975', 'Marketing', 'boni@garudamart.com', 'boni.jpg', 1, 5, '12'),
(23, 'Kanisius Kefi', 'Pak', 'kefi', 'Xx#kefi', 'G1701141', '18', '26-Oct', 2017, 'Siolasis', '11-Nov', 1981, 'Jl. Raya Hankam-Ujung Aspal RT 001/RW 008 Jatiranggon. Jatisampurna Bekasi', '', 'SD', 'AB', '5303011111810004', '0002511007378', '18006191185', '93.759.378.8-447.000', '081281793006', 'Fabrikasi', 'kenskefi8@gmail.com', 'kefi.jpg', 1, 5, '12'),
(24, 'Sabri', 'Pak', 'sabri', 'Xx#sabri', 'G1801144', '13', '2-Feb', 2018, 'Ujung Pandang', '5-Jun', 1982, 'Jl. Raya pasar kecapi 66 namin no 45 RT 001/RW 004 Jatiawarna Pondok melati. Bekasi 17415', '', 'SMA', 'B', '3275120506820005', '0001726753206', '18032308191 D1', '93.740.981.1-447.000', '081315865636', 'Manufacture', 'sabrihaq82@gmail.com', 'sabri.jpg', 1, 5, '12'),
(25, 'Violentino Felix Ardiyanto Utoyo', 'Mas', 'felix', 'Xx#felix', 'GI801147', '18', '22-Feb', 2018, 'Semarang', '22-Jul', 1998, 'Jl. Bina Asih 3E Cluster Jatiasih Village Blok F1 No.9 RT 006/RW 008  Kel. Jatiasih Kec. Jatiasih. Bekasi ', 'STMIK Nusa mandiri', 'S1', 'A', '3275092207980013', '0001467199991', '18032308183', '90.923.016.1-447.000', '081385747746', 'Admin', 'felix@garudamart.com', 'felix.jpg', 1, 5, '10'),
(26, 'Silvalescha Astarani', 'Mba', 'silva', 'Xx#silva', 'GI801148', '2', '5-Mar', 2018, 'Jakarta', '23-Jun', 1998, 'Sakura Regncy Jl. Bunga Sakura XIV Blok T-20 RT.004 RW.017 Kel. Jatiasih Kec. Jatiasih. Bekasi 17423', 'STMIK Nusa mandiri', 'S1', 'B+', '3275096306980017', '0001719362733', '18053332328', '91.202.218.3-477.000', '087785382601', 'Admin', 'silva@garudamart.com', 'silva.jpg', 1, 5, '12'),
(27, 'Mohamad Ilvan Ridhoni', 'Mas', 'ilvan', 'Xx#ilvan', 'G1801155', '14', '6-Apr', 2018, 'Jakarta', '14-Feb', 1997, 'KTP: Jl. Harsono RM RT.003 RW.004 Kel. Ragunan Kec. Pasar Minggu. Jakarta Selatan 12550 / Domisili: Jl. Raya Hankam Sasak Jikin RT 01/RW 05 KEL. Jatimurni. Bekasi', '', 'SMK', '-', '3174041402970004', '0000042756557', '19004278529', '92.909.142.9-017.000', '085695357097', 'Partman', 'ilavanridhoni52@gmail.com', 'ilvan.jpg', 1, 5, '12'),
(28, 'Yogi Eka Pratama', 'Mas', 'yogi', 'Xx#yogi', 'G1801158', '15', '11-Apr', 2018, 'Bekasi', '15-Jun', 1996, 'KP. Pondok Ranggon  RT 001/RW 005 No. 86 Kel. Jati Murni. Kec. Pondok Melati. Bekasi 17431', '', 'SMK', '-', '3275121506960003', '0000506952505', '19004278511', '80.056.859.4-447.000', '082124960091 / 081290969298', 'Staff', 'gepengyogi@gmail.com', 'yogi.jpg', 1, 5, '12'),
(29, 'Yugo Miharjo Darkim', 'Pak', 'darkim', 'Xx#darkim', 'G1801159', '18', '4-May', 2018, 'Purbalingga', '6-Feb', 1969, 'Wanogara Wetan RT/RW: 002/001. Kel. Wanogara Wetan Kec. Rembang. Kab. Purbalingga Jawa Tengah 53356', '', 'SMP', 'O', '3303130602690001', '0001017534486', '18066015662', '91.667.276.9-529.000', ' 0813820466010', 'Fabrikasi', 'yugomiharjodarkim@gmail.com', 'darkim.jpg', 1, 5, '12'),
(30, 'Alberthus Tandek ', 'Pak', 'alberth', 'Xx#alberth', 'G1808170', '13', '5-Sep', 2018, 'Makale Tator', '6-Feb', 1971, 'Jl. Pongtiku Gg. Rantepao No. 7 RT/RW. 013/000 Kel. Singa Gembara Kec. Sangatta Utara. Kutai Timur. Kaltim 76611', 'Mesin', 'S1', 'AB', '6408042005710006', '0001903179284', '14037690188', '14.712.538.9-721.000', '08111149926/081256049007', 'Mekanik', 'albert@garudamart.com', 'albert.jpg', 1, 5, '12'),
(31, 'Vincentia Hanna Wibowo', 'Mba', 'tia', 'Xx#tia', 'G1801179', '2', '26-Oct', 2018, 'Jakarta', '26-Jan', 1994, 'Jl. Pisang lumut No. 10 RT 06/RW 09 Kel. Kota Baru Kec. Bekasi Barat. Bekasi 17133', 'Teknik Elektro', 'S1', 'O', '3275026601940005', '0001737471385', '19007802986', '86.285.501.2-427.000', '085710986126', 'Admin', 'tia@garudamart.com', 'tia.jpg', 1, 5, '12'),
(32, 'Mu Inggrid', 'Ibu', 'inggrid', 'gmi', 'G1801180', '23', '1-Nov', 2018, 'Sanggau', '4-Jul', 1986, 'Bekasi Timur Regency 3 Cluster Florite Blok F9 No. 26  RT.012 RW.006 Kel. Paduranen Kec. Mustika Jaya. Bekasi 17156', 'Ekonomi', 'S1', 'B+', '3275074407860017', '0001717478324', '19015234990', '67.096.176.2-432.000', '087788777235', 'HRD', 'inggrid@garudamart.com', 'inggrid.jpg', 1, 2, '12'),
(33, 'Anderson Simangunsong', 'Mas', 'anderson', 'Xx#anderson', 'G1801182', '22', '1-Nov', 2018, 'Tebing Tinggi', '17-Oct', 1992, 'Jl. Cipendawa Lama RT. 005 RW. 007 Kel. Bojong Menteng Kec. Rawalumbu Bekasi 17117', '', 'D III', 'B', '1276031710920001', '0001962783044', '19015234982', '44.048.475.6-114.000', '085362897392', 'Marketing', 'anderson@garudamart.com', 'erson.jpg', 1, 5, '12'),
(34, 'Muhamad Risman', 'Mas', 'risman', 'Xx#risman', 'G1905185', '13', '7-Jan', 2019, 'Tasikmalaya', '30-Jul', 1989, 'Kp. Limbangan RT/RW. 005/007 Cikadongdong. Singaparna. Tasikmalaya 46418', '', 'SMK', 'B', '3206263007890001', '0001962093093', '19007803026', '92.299.957.8-425.000', '082255692505', 'Mekanik', 'risman.omod@gmail.com', 'risman.jpg', 1, 5, '12'),
(36, 'Hulda Vincensia Masiglaat', 'Mba', 'hulda', 'gmi', 'G1901190', '1', '11-Feb', 2019, 'Bekasi', '3-Jul', 2000, 'Kp. Rawa Semut RT. 001/012 No. 26 Kel. Margahayu Kec. Bekasi Timur 17113', 'Akuntansi', 'SMK', '-', '3275015307000009', '0002272012143', '19034139857', '90.442.300.1-407.000', '089659498996', 'Cashier', 'hulda@garudamart.com', 'hulda.jpg', 1, 5, '12'),
(37, 'Achmad Firdaus', 'Mas', 'firdaus', 'Xx#firdaus', 'G1901191', '15', '15-Feb', 2019, 'Bekasi', '28-Apr', 1998, 'KP. Pondok Ranggon RT/RW. 001/005. Jatimurni. Pondok Melati. Bekasi 17431', '', 'SD', '-', '3275122804980003', '0002766552726', '19034139881', '-', '0895391806028', 'Office Boy', 'ahmdfirdauss334@gmail.com', 'uus.jpg', 1, 5, '12'),
(38, 'Supandi Irawan', 'Pak', 'pandi', 'Xx#pandi', 'G1901193', '18', '20-Feb', 2019, 'Bekasi', '7-Jul', 1989, 'Jl. Nangka Siman Atas Baru RT/RW 002/003 Kel. Jatibening Kec. Pondok Gede. Bekasi 17413', '', 'SLTA', '-', '3275080707890022', '0002096239162', '19034139873', '93.258.658.0-447.000', '085921267637', 'Manufacture', 'supandiirawan6@gmail.com', 'pandi.jpg', 1, 5, '12'),
(39, 'Urbanus Tombi', 'Pak', 'urbanus', 'Xx#urbanus', 'G1908194', '15', '12-Mar', 2019, 'langda', '11-Jun', 1976, 'Jl. Sukarno Hatta RT/RW. 047/000 Karang Joang. Balikpapan Utara. Kaltim 76127', '', 'SMK', '-', '6472040512760004', '0002196872403', '19046802096', '-', '081258213491', 'Driver', 'urbanustombi24@gmail.com', 'urbanus.jpg', 1, 5, '12'),
(40, 'Andreas Jasri Siringo-ringo', 'Mas', 'ringo', 'Xx#ringo', 'G1901195', '15', '18-Mar', 2019, 'Dolok Masihul', '17-Apr', 1997, 'Telaga Mas Blok G2 No. 50. RT/RW. 013/014. Harapan Baru. Bekasi Utara 17123', 'Bhayangkara', 'S1', 'B', '3275031804970016', '0002216592832', '19046802088', '74.355.684.7-407.000', '082114171075', 'ADMIN GA', 'ringo@garudamart.com', 'ringo.jpg', 0, 0, '12'),
(41, 'Alek Gunawan', 'Mas', 'alek', 'Xx#alek', 'G1901196', '18', '25-Mar', 2019, 'bekasi', '20-Jul', 1992, 'Kp. Kebantenan No. 19 RT 004/RW 008 Kel. Jatiasih Kec. Jatiasih Bekasi 17423', '', 'SMK', 'O', '3275092007920017', '0001647999472', '19046802070', '16.927.206.9-432.000', '089650596910 / 0859-4733-7394', 'Fabrikasi', 'gunawanalex55@gmail.com', 'alex.jpg', 1, 5, '12'),
(42, 'Heri Setiawan', 'Mas', 'heri', 'Xx#heri', 'G1901199', '18', '18-Jan', 2019, 'Batang', '20-Oct', 1999, 'Dukuh Kumesu RT.019 RW.005 Kel. Kumesu Kec. Reban Kab. Batang Jawa Tengah 51273', '', 'SMK', 'A', '3325042010990002', '000611036267', '19063223960', '93.133.804.0-513.000', '082326526948', 'Manufacture', 'herisetiawan6948@gmail.com', 'heri.jpg', 1, 5, '12'),
(43, 'Ahmed Gibran Coreda', 'Mas', 'gibran', 'Xx#gibran', 'G1905202', '13', '24-Jul', 2019, 'Tanjung Enim', '24-Jul', 2000, 'Jl. Lingga Raya No. 52 RT/RW: 000/000 Kel. Lingga Kec. Lawang Kidul Muara Enim. Sumatera Selatan 31711', '', 'SMK', 'AB+', '1603072407000001', '0001514250461', '19092225879', '94.483.271.6-313.000', '089628433850', 'Helper', 'ahmedgibran25@gmail.com', 'gibran.jpg', 1, 5, '12'),
(44, 'Ferdianus Lambe Manggasa', 'Mas', 'ferdianus', 'Xx#ferdianus', 'G1908205', '15', '30-Jul', 2019, 'Balikpapan', '11-Feb', 1989, 'Jl. D.I Panjaitan No. 09 RT/RW 055/000 Kel. Gunung Samarinda Kec. Balikpapan Utara. Kal Tim', '', 'SMA', 'B', '6471031102890002', '0002217994536', '19073559791', '-', '082153211415', 'Office Boy', 'ferdianuslm@gmail.com', 'lambe.jpg', 1, 5, '12'),
(45, 'Dhony Ariwibowo', 'Mas', 'dhony', 'Xx#dhony', 'G1905206', '13', '5-Aug', 2019, 'Tanjung Enim', '28-Jan', 1998, 'Jl. Alamanda Blok E No. 8 BTN Air Paku. Kel. Tanjung Enim Selatan  Kec. Lawang Kidul. Muara Enim. Sumatra Selatan 31714', '', 'SLTA', 'A', '1603072801980003', '0001882768871', '19092225887', '-', '0895637373288', 'Driver', 'dhodon280198@gmail.com', 'dhony.jpg', 1, 5, '12'),
(46, 'Rony Rudiansyah', 'Mas', 'rony', 'Xx#rony', 'G1908208', '22', '12-Aug', 2019, 'Nganjuk', '21-Feb', 1995, 'Jl. Mulawarman RT/RW. 005/000 Kel. Lamaru Kec. Balikpapan Timur. Balikpapan', '', 'SMK', '-', '3518072102950003', '0002904762071', '19082276692', '-', '082255382246', 'Marketing', 'rony@garudamart.com', 'roni.jpg', 1, 5, '12'),
(47, 'Fernando Gomgom Aritonang', 'Mas', 'gomgom', 'Xx#gomgom', 'G1908210', '22', '12-Aug', 2019, 'Doloksanggul', '12-Jan', 1994, 'KTP: Jl. Karya. Kel. Pasar Doloksanggul Kec. Doloksanggul. Humbang Hasunatan 22457/Domisili : Jl. Malioboro No. 67 RT/RW 37/00 Kel. Gunung Bahagia Kec. Balikpapan Selatan. Balikpapan. KALTIM 76281', '', 'D3', 'O', '1216061201940001', '0000013913155', '19082276700', '82.089.136.4-127.000', '08111176829 / 085360885918', 'Marketing', 'gomgom@garudamart.com', 'gomgom.jpg', 1, 5, '12'),
(48, 'Surya Dinata', 'Pak', 'surya', 'Xx#surya', 'G1908218', '15', '22-Oct', 2019, 'jakarta', '27-Jan', 1985, 'Jl. H. Harun VI RT/RW: 005/011 Kel. Jatirahayu Kec. Pondok Melati. Bekasi 17414', '', 'SMK', '-', '3175032710850012', '0002340465131', '19092225929', '81.841.049.0-002.000', '08998813093', 'Driver', 'suryarendi2013@gmail.com', 'surya.jpg', 1, 5, '12'),
(49, 'Metahsari', 'Mba', 'metah', 'Xx#metah', 'G1908219', '2', '28-Oct', 2019, 'Bekasi', '23-Sep', 1997, 'Pondok Surya Mandala Jl. Surya Aasri I Blok L2 No. 5 Kel. Jaka Mulya. Kec. Bekasi Selatan Kota Bekasi 17146', '', 'D3', 'B', '3275046309970001', '0001282050538', '19092225911', '91.380.628.7-432.000', '082272790075', 'Admin', 'methasari@garudamart.com', 'metah.jpg', 1, 5, '12'),
(50, 'Amanda Maghfiroh Chairani', 'Mba', 'amanda', 'Xx#amanda', 'G1908220', '14', '28-Oct', 2019, 'Bekasi', '22-Dec', 1999, 'Jl. Duku D8/2 Perum. Sapta Pesona RT.004/008. Jatiluhur. Jatiasih 17425', '', 'SMA', 'A', '3275096212990014', '0002198540204', '19092225903', '93.703.916.2-447.000', '082130849184', 'Admin', 'amanda@garudamart.com', 'manda.jpg', 1, 5, '12'),
(51, 'Yudi Saputra', 'Mas', 'yudi', 'Xx#yudi', 'G2008221', '15', '2-Mar', 2020, 'Jakarta', '23-Jul', 2000, 'KTP: Lubang Buaya RT 013 RW 001 Kel. Lubang Buaya Kec. Cipayung Jakarta Timur 13810 / Rumah: Jl. Raya Hankam Gg. Sasak Jikin RT. 001 RW. 005 Kel. Jatimurni Kec. Pondok Melati Bekasi 17431', '', 'SMA', 'A', '3175102307000008', '0001840884232', '20028849592', '-', '089608517669', 'Office Boy', 'yudisaputra230700@gmail.com', 'yudi.jpg', 1, 5, '12'),
(52, 'Vinna Rosalina', 'Mba', 'vinna', 'Xx#vinna', 'G2008222', '15', '1-Jun', 2020, 'Bekasi', '25-May', 1996, 'KP Sawah RT/RW: 001/003 Kel. Jatimelati Kec. Pondok Melati. Bekasi 17113', '', 'SMK', 'O', '3275126505960002', '0002643795505', '20046263149', '-', '087872698075', 'Office Girl', 'vinnarosalina07@gmail.com', 'vinna.jpg', 1, 5, '12'),
(53, 'Ridhan Fauzan', 'Mas', 'ridhan', 'Xx#ridhan', 'G2008223', '22', '24-Aug', 2020, 'Bekasi', '17-Jun', 1996, 'Taman Wisma Asri Blok AA25 No 17 RT.007 RW. 028 Kel. Teluk Pucung Kec. Bekasi Utara 17121', '', 'S1', 'O', ' \'3275031706930015', '0000037865237', '20075611242', '90.607.620.3-407.000', '082246942006', 'Marketing', 'ridhan@garudamart.com', 'ridhan.jpg', 1, 5, '12'),
(54, 'Muhammad Rivaldi', 'Mas', 'rivaldi', 'Xx#rivaldi', 'G2008224', '14', '24-Sep', 2020, 'Bekasi', '10-Feb', 2002, 'KP. Jati Kramat RT.005 RW.005 Kel. Jatikramat Kec. Jatikramat. Bekasi 17421', '', 'SMK', '-', '3275091002020008', '0000509436472', '20084597986', '-', '089637839802', 'Partman', 'rivaldimuhammad429@gmail.com', 'ipal.jpg', 1, 5, '12'),
(55, 'Sinta Riski Anisa Putri', 'Mba', 'sinta', 'Xx#sinta', 'G2108225', '15', '5-Jan', 2021, 'Balikpapan', '27-Oct', 1996, 'Jl. Soekarno Hatta KM.20 RT.046 RW.000 Kel. Karang Joang Kec. Balikpapan Utara. Balikpapan. Kal-Tim 76127', '', 'D2', 'A', '6471016710960003', '', '', '41.168.724.7-721.000', '082340800651', 'ADMIN GA', 'shintaminii027@gmail.com', 'default.png', 1, 5, '12'),
(90, 'Lasmidi', 'Pak', 'lasmidi', 'Xx#lasmidi', 'G11010007', '15', '28-Apr', 2010, 'Madiun', '28-Apr', 1961, 'Jl. Transad VI No. 15 Jati Ranggon. Jati sampurna Bekasi. 17432', '', 'SMP', '-', '3275102011610004', '0001472462098', '10030281157', '93.741.035.5-447.000', '081296301906', 'DRIVER', 'adjengh@gmail.com', 'lasmidi.jpg', 1, 5, '12');

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
(17, 'Mu Inggrid', 32, '28-Feb-2021 17:02:42', 'inggrid@garudamart.com', 1, '100000', '100000', '', '1', '', 'tesss', 'inggrid.jpg', 'Berlangsung');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `driver` int(2) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `actived` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nama`, `driver`, `tujuan`, `actived`) VALUES
(1, 'Honda beat', 1, '', 0),
(2, 'Daihatsu Grand Max Blaind fan', 0, '', 0),
(3, 'Daihatsu Grand Max Silver', 0, '', 0),
(4, 'Daihatsu Grand Max Putih', 0, '', 0),
(6, 'Wuling Confero', 0, '', 0),
(7, 'Toyota Hilux', 0, '', 0),
(8, 'Mitsubishu Triton', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mr`
--

CREATE TABLE `mr` (
  `id` int(11) NOT NULL,
  `kode_mr` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `divisi` varchar(128) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mr`
--

INSERT INTO `mr` (`id`, `kode_mr`, `status`, `nama`, `divisi`, `date_created`) VALUES
(13, 'MR-A-GMi-21-0001', '2', 'Sigit Prasetyo', 'IT', '20 Sep 2021'),
(14, 'MR-A-GMi-21-0002', '1', 'Sigit Prasetyo', 'IT', '20 Sep 2021'),
(15, 'MR-A-GMi-21-0003', '1', 'Sigit Prasetyo', 'IT', '29 Oct 2021'),
(16, 'MR-A-GMi-21-0004', '1', 'Hulda Vincensia Masiglaat', 'FINANCE', '16 Nov 2021');

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
(267, 'Amanda mahfiroh', 16, 'amanda@garudamart.com', 'Thu 28-Jan-2021', 'Thu 28-Jan-2021', '1', '09:16', '1', '1', 'tessss update dari user', '11:04 ', 'liburan ke bali dada', '5', '28-Jan-2021', '', 'manda.jpg'),
(268, 'Yudi Saputra', 51, 'yudisaputra230700@gmail.com', 'Mon 22-Feb-2021', 'Mon 22-Feb-2021', '1', '14:17', '1', '2', 'tesss', '18:36 ', 'liburan ke bali', '5', '22-Feb-2021 07:17:11', '', 'yudi.jpg'),
(269, 'Sigit Prasetyo', 35, 'sigit@garudamart.com', 'Sat 27-Feb-2021', 'Sat 27-Feb-2021', '1', '17:02', '1', '2', 'igo / bawa barang ke kartika', 'Belum Diisi', 'ke kampus bimbingan kerja praktek', '2', '27-Feb-2021 11:02:33', '', 'sigit.jpg'),
(270, 'Sigit Prasetyo', 35, 'sigit@garudamart.com', 'Sat 27-Feb-2021', 'Sat 27-Feb-2021', '1', '17:43', '3', '4', 'igo / bawa barang ke kartika', 'Belum Diisi', 'ke kampus bimbingan kerja praktek', '2', '27-Feb-2021 11:43:23', '', 'sigit.jpg'),
(271, 'Sigit Prasetyo', 35, 'sigit@garudamart.com', 'Sat 27-Feb-2021', 'Sat 27-Feb-2021', '1', '', '4', '5', '', 'Belum Diisi', '', '1', '27-Feb-2021 11:53:03', '', 'sigit.jpg'),
(272, 'Amanda Maghfiroh Chairani', 50, 'amanda@garudamart.com', 'Sat 27-Feb-2021', 'Sat 27-Feb-2021', '1', '18:10', '6', '6', 'tes untuk print spl lho in guys', '18:10', 'cuti acara keluarga', '1', '27-Feb-2021 12:10:12', '', 'manda.jpg'),
(273, 'Amanda Maghfiroh Chairani', 50, 'amanda@garudamart.com', 'Sat 27-Feb-2021', 'Sat 27-Feb-2021', '1', '18:30', '7', '1', 'Tesssss', '18:30', 'istri melahirkan', '1', '27-Feb-2021 12:29:57', '', 'manda.jpg'),
(274, 'Amanda Maghfiroh Chairani', 50, 'amanda@garudamart.com', '2021-10-29', '2021-10-29', '1', '18:32', '2', '1', 'tesss spl', 'Belum Diisi', 'cuti acara keluarga', '2', '27-Feb-2021 12:32:41', '', 'manda.jpg'),
(275, 'Mu Inggrid', 32, 'inggrid@garudamart.com', '2021-10-07', '2021-10-07', '1', '10:00', '8', '2', 'tess', 'Belum Diisi', 'tesss personal', '2', '28-Feb-2021 16:32:05', '', 'inggrid.jpg'),
(276, 'Sigit Prasetyo', 1, 'sigit@garudamart.com', '2021-10-29', 'Mon 01-Nov-2021', '4', '10:35', '1', '2', 'pasang kamera cctv diatas meja server ', '15:28 ', 'okeh', '5', '29-Oct-2021 05:35:33', '', 'sigit.jpg'),
(277, 'Sigit Prasetyo', 1, 'sigit@garudamart.com', '2021-11-01', '2021-11-01', '1', '15:50', '1', '2', 'Penggantian kabel telephone J4, indikasi digigit tikus, untuk perbantuan dengan pak aceng dan pak nyoto untuk tarik kabelnya.', 'Belum Diisi', 'tesss update peminjaman', '2', '01-Nov-2021 09:49:34', '', 'sigit.jpg'),
(278, 'Sigit Prasetyo', 1, 'sigit@garudamart.com', '2021-11-16', '2021-11-17', '2', '11:05', '2', '3', 'igo / bawa barang ke kartika', '16:05', 'tesss', '1', '16-Nov-2021 05:05:05', '', 'sigit.jpg'),
(279, 'Sigit Prasetyo', 1, 'sigit@garudamart.com', '2021-12-23', '2021-12-23', '1', '11:07', '3', '4', 'Penggantian kabel telephone J4, indikasi digigit tikus, untuk perbantuan dengan pak aceng dan pak nyoto untuk tarik kabelnya.', '03:07', 'cuti acara keluarga', '1', '23-Dec-2021 05:07:44', '', 'sigit.jpg');

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
(89, 'SPL-GMI-21-0005', '01-Mar-2021 13:21:20', '2', 'Meilissa', 'meilissa@garudamart.com', '2021-09-19', '2021-10-20', '13', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri', 'Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '18:00', '21:00', 'mel.jpg'),
(90, 'SPL-GMI-21-0006', '02-Mar-2021 11:00:58', '2', 'Meilissa', 'meilissa@garudamart.com', '2021-10-19', '2021-10-19', '13', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri', 'Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '18:00', '21:00', 'mel.jpg'),
(91, 'SPL-GMI-21-0007', '02-Mar-2021 15:13:00', '', 'Sigit Prasetyo', 'sigit@garudamart.com', '2021-10-19', 'Sat 06-Mar-2021', '17', 'Aceng Rusnadi, Sigit', 'Penggantian kabel telephone J4, indikasi digigit tikus, untuk perbantuan dengan pak aceng untuk tarik kabelnya.', '', 'inggrid@garudamart.com', '', '09:00', '17:00', 'sigit.jpg'),
(92, 'SPL-GMI-21-0008', '02-Mar-2021 16:37:31', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', '2021-10-19', 'Tue 02-Mar-2021', '18', 'Kefi, Supandi , Alek', 'bracket KPP &amp; Bracket PBT', '', 'aceng@garudamart.com', '', '18:00', '20:13', 'felix.jpg'),
(93, 'SPL-GMI-21-0009', '03-Mar-2021 16:07:39', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', '2021-10-19', 'Wed 03-Mar-2021', '18', 'Aceng, Sunyoto, Darkim, Heri', 'bracket &amp; loto box KPP &amp; UT', '', 'aceng@garudamart.com', '', '18:00', '22:20', 'felix.jpg'),
(94, 'SPL-GMI-21-0010', '04-Mar-2021 16:27:13', '', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', '2021-10-19', 'Thu 04-Mar-2021', '18', 'Aceng , Kefi, Alek ', 'brackep optional kpp', '', 'aceng@garudamart.com', '', '18:00', '22:29', 'felix.jpg'),
(95, 'SPL-GMI-21-0011', '05-Mar-2021 14:53:09', '2', 'Meilissa', 'meilissa@garudamart.com', '2021-07-10', 'Sat 06-Mar-2021', '13', 'Toto, Suhail, Sugiyanto, Iwan, Eko, Huda, Sabri', 'Jumat: Suhail,Toto,Eko,Huda (Instalasi UTE Jababeka) &amp; Sabri,Sugiyanto,Iwan (SKP) | Sabtu: All personil Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '08:00', '21:00', 'mel.jpg'),
(96, 'SPL-GMI-21-0012', '05-Mar-2021 15:37:36', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', '2021-12-11', 'Sat 06-Mar-2021', '18', 'Aceng, Sunyoto, Kefi, Heri, Darkim', 'Kpp &amp; spmc ', '', 'aceng@garudamart.com', 'Jumat: Sunyito &amp; Heri s/d 22:01 | Sabtu: Aceng, Darkim, Sunyoto, Heri, Kefi s/d 00:03', '17:00', '22:00', 'felix.jpg'),
(97, 'SPL-GMI-21-0013', '05-Mar-2021 17:39:17', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', '2021-03-06', '2021-03-06', '14', 'Angga Prayoga, Amanda Maghfiroh Chairani', 'Standby dan prepare Team Service, stand by pemasangan kabel telpon, failing received item dan part instalasi', '', 'yoseph@garudamart.com', '', '09:00', '17:00', 'manda.jpg'),
(98, 'SPL-GMI-21-0014', '08-Mar-2021 13:34:35', '2', 'Meilissa', 'meilissa@garudamart.com', 'Mon 08-Mar-2021', 'Mon 08-Mar-2021', '13', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri', 'Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '18:00', '21:39', 'mel.jpg'),
(99, 'SPL-GMI-21-0015', '08-Mar-2021 13:44:58', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Mon 08-Mar-2021', 'Mon 08-Mar-2021', '2', 'Bunga Ratnani', 'adjustment part di gudang customer. transfer item barang salah tarik gudang', '', 'anna@garudamart.com', '', '17:00', '20:00', 'bunga.jpg'),
(101, 'SPL-GMI-21-0017', '08-Mar-2021 14:02:19', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Mon 08-Mar-2021', 'Mon 08-Mar-2021', '23', 'Mu Inggrid', 'PPH21 tahun 2020 GMI', '', 'anna@garudamart.com', '', '17:00', '20:00', 'inggrid.jpg'),
(104, 'SPL-GMI-21-0018', '09-Mar-2021 09:18:29', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 08-Mar-2021', 'Mon 08-Mar-2021', '18', 'Violentino Felix Ardiyanto Utoyo', 'jobcosting', '', 'aceng@garudamart.com', '', '17:00', '20:00', 'felix.jpg'),
(105, 'SPL-GMI-21-0019', '09-Mar-2021 14:04:28', '2', 'Meilissa', 'meilissa@garudamart.com', 'Tue 09-Mar-2021', 'Tue 09-Mar-2021', '13', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Ahmad Haerul Huda', 'Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '17:00', '21:00', 'mel.jpg'),
(106, 'SPL-GMI-21-0020', '09-Mar-2021 15:32:58', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Tue 09-Mar-2021', 'Tue 09-Mar-2021', '18', 'Sunyoto, Heri ', 'assy loto buat hino', '', 'aceng@garudamart.com', '', '18:00', '20:28', 'felix.jpg'),
(107, 'SPL-GMI-21-0021', '09-Mar-2021 15:47:43', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Wed 10-Mar-2021', 'Wed 10-Mar-2021', '2', 'Bennedita Tambunan', 'Input Laporan List DO-IT dan Failing DO', '', 'bunga@garudamart.com', '', '17:01', '21:30', 'dita.jpg'),
(108, 'SPL-GMI-21-0022', '09-Mar-2021 16:33:00', '2', 'Sigit Prasetyo', 'sigit@garudamart.com', 'Tue 09-Mar-2021', 'Tue 09-Mar-2021', '17', 'Sigit Prasetyo', 'Setting radio motorola xir m3688 di jababeka - mekanik', '', 'inggrid@garudamart.com', '', '18:00', '20:18', 'sigit.jpg'),
(109, 'SPL-GMI-21-0023', '10-Mar-2021 13:06:18', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Wed 10-Mar-2021', 'Wed 10-Mar-2021', '2', 'Vincentia Hanna Wibowo', 'Kalkulasi PO GMI-GIS &amp; GIS-GMI', '', 'bunga@garudamart.com', '', '18:00', '21:00', 'tia.jpg'),
(110, 'SPL-GMI-21-0024', '10-Mar-2021 14:33:54', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Wed 10-Mar-2021', 'Wed 10-Mar-2021', '14', 'Angga, Amanda, Rivaldi', 'Menulis KS Tubing, Heatshrink, PVC dan disamain ke Data Manual', '', 'yoseph@garudamart.com', '', '18:00', '21:00', 'manda.jpg'),
(111, 'SPL-GMI-21-0025', '10-Mar-2021 15:55:08', '2', 'Meilissa', 'meilissa@garudamart.com', 'Wed 10-Mar-2021', 'Wed 10-Mar-2021', '13', 'Toto Nihyana, M. Suhail S, Ahmad Haerul Huda', 'Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '17:00', '21:00', 'mel.jpg'),
(112, 'SPL-GMI-21-0026', '10-Mar-2021 15:56:08', '2', 'Meilissa', 'meilissa@garudamart.com', 'Wed 10-Mar-2021', 'Wed 10-Mar-2021', '13', 'Ahmad Sugiyanto', 'Instalasi HINO di Tangerang', '', 'suhail@garudamart.com', '', '17:00', '21:00', 'mel.jpg'),
(113, 'SPL-GMI-21-0027', '10-Mar-2021 15:56:48', '2', 'Meilissa', 'meilissa@garudamart.com', 'Thu 11-Mar-2021', 'Thu 11-Mar-2021', '13', 'Toto Nihyana, M. Suhail S, Iwan Ase, Ahmad Haerul Huda, Sabri', 'Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '08:00', '20:00', 'mel.jpg'),
(114, 'SPL-GMI-21-0028', '10-Mar-2021 15:57:57', '', 'Meilissa', 'meilissa@garudamart.com', 'Thu 11-Mar-2021', 'Thu 11-Mar-2021', '13', 'Ahmad Sugiyanto, Eko Kiswanto', 'Instalasi HINO di Tangerang', '', 'suhail@garudamart.com', '', '08:00', '21:00', 'mel.jpg'),
(115, 'SPL-GMI-21-0029', '10-Mar-2021 17:05:47', '2', 'Sigit Prasetyo', 'sigit@garudamart.com', 'Wed 10-Mar-2021', 'Wed 10-Mar-2021', '17', 'Sigit Prasetyo', 'Tes instalasi frekuensi radio', '', 'inggrid@garudamart.com', '', '18:00', '19:00', 'sigit.jpg'),
(116, 'SPL-GMI-21-0030', '12-Mar-2021 14:29:03', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Fri 12-Mar-2021', 'Fri 12-Mar-2021', '2', 'Bunga Ratnani', 'Stock Minus 2020', '', 'anna@garudamart.com', '', '17:00', '20:00', 'bunga.jpg'),
(117, 'SPL-GMI-21-0031', '12-Mar-2021 14:29:40', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Sat 13-Mar-2021', 'Sat 13-Mar-2021', '2', 'Bunga Ratnani', 'Stock Minus 2020', '', 'anna@garudamart.com', '', '10:00', '14:00', 'bunga.jpg'),
(118, 'SPL-GMI-21-0032', '12-Mar-2021 16:02:00', '2', 'Sigit Prasetyo', 'sigit@garudamart.com', 'Sat 13-Mar-2021', 'Sat 13-Mar-2021', '17', 'Aceng Rusnadi, Sunyoto, Sigit Prasetyo', 'Penggantian kabel telephone J4, indikasi digigit tikus, untuk perbantuan dengan pak aceng dan pak nyoto untuk tarik kabelnya.', '', 'inggrid@garudamart.com', '', '21:00', '17:00', 'sigit.jpg'),
(119, 'SPL-GMI-21-0033', '15-Mar-2021 16:17:16', '2', 'Meilissa', 'meilissa@garudamart.com', 'Mon 15-Mar-2021', 'Tue 16-Mar-2021', '13', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Ahmad Haerul Huda, Sabri', 'Instalasi UT Jababeka', '', 'suhail@garudamart.com', '', '18:00', '20:00', 'mel.jpg'),
(120, 'SPL-GMI-21-0034', '17-Mar-2021 16:38:59', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Wed 17-Mar-2021', 'Wed 17-Mar-2021', '14', 'Angga Prayoga, Mohamad Ilvan Ridhoni, Amanda Maghfiroh Chairani, Muhammad Rivaldi', 'pengerjaan SO yg belum lengkap', '', 'yoseph@garudamart.com', '', '18:00', '20:00', 'manda.jpg'),
(121, 'SPL-GMI-21-0035', '17-Mar-2021 16:49:37', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Wed 17-Mar-2021', 'Wed 17-Mar-2021', '14', 'Jacky Haryanto', 'pengerjaan SO yg belum lengkap', '', 'yoseph@garudamart.com', '', '17:00', '20:00', 'manda.jpg'),
(123, 'SPL-GMI-21-0036', '18-Mar-2021 15:55:50', '2', 'Meilissa', 'meilissa@garudamart.com', 'Thu 18-Mar-2021', 'Thu 18-Mar-2021', '13', 'Iwan Ase, Eko Kiswanto, Sabri', 'Instalasi UTE Jababeka ada Trouble utk unit yang mau delivery', '', 'suhail@garudamart.com', '', '18:00', '21:00', 'mel.jpg'),
(124, 'SPL-GMI-21-0037', '18-Mar-2021 16:47:29', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Thu 18-Mar-2021', 'Thu 18-Mar-2021', '14', 'Angga Prayoga, Amanda Maghfiroh Chairani', 'Input Hasil SO dan Packing Barang', '', 'yoseph@garudamart.com', '', '18:00', '20:00', 'manda.jpg'),
(125, 'SPL-GMI-21-0038', '19-Mar-2021 15:40:16', '2', 'Azwita Febriyanti', 'wita@garudamart.com', 'Fri 19-Mar-2021', 'Fri 19-Mar-2021', '1', 'Azwita Febriyanti', 'Update bank dan membuat laporan fee marketing', '', 'sulissetia@garudamart.com', '', '18:00', '21:35', 'wita.jpg'),
(126, 'SPL-GMI-21-0039', '19-Mar-2021 15:50:07', '2', 'Silvalescha Astarani', 'silva@garudamart.com', 'Fri 19-Mar-2021', 'Fri 19-Mar-2021', '2', 'Silvalescha Astarani', 'Export gudang accurate, laporan bast, laporan jobcosting, laporan meeting', '', 'bunga@garudamart.com', '', '18:00', '21:35', 'silva.jpg'),
(127, 'SPL-GMI-21-0040', '19-Mar-2021 17:05:17', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Fri 19-Mar-2021', 'Fri 19-Mar-2021', '23', 'Meilissa, Mu Inggrid', 'Absensi', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(128, 'SPL-GMI-21-0041', '19-Mar-2021 17:05:57', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sun 21-Mar-2021', 'Sun 21-Mar-2021', '23', 'Meilissa, Mu Inggrid', 'Absensi', '', 'anna@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(129, 'SPL-GMI-21-0042', '19-Mar-2021 18:21:41', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 20-Mar-2021', 'Sat 20-Mar-2021', '23', 'Andreas Jasri Siringo-ringo', 'Semprot disinfektan 4 gedung', '', 'anna@garudamart.com', '', '10:30', '14:15', 'inggrid.jpg'),
(130, 'SPL-GMI-21-0043', '19-Mar-2021 18:41:33', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Fri 19-Mar-2021', 'Fri 19-Mar-2021', '13', 'Ahmed Gibran Coreda, Dhony Ariwibowo', 'inspeksi ac di ABL,LAHAT', '', 'suhail@garudamart.com', '', '06:30', '18:38', 'risman.jpg'),
(131, 'SPL-GMI-21-0044', '19-Mar-2021 18:43:28', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Sat 20-Mar-2021', 'Sat 20-Mar-2021', '13', 'Ahmed Gibran Coreda, Dhony Ariwibowo', 'continue inspeksi unit abl,lahat', '', 'suhail@garudamart.com', '', '06:30', '17:52', 'risman.jpg'),
(132, 'SPL-GMI-21-0045', '22-Mar-2021 14:44:12', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Mon 22-Mar-2021', 'Mon 22-Mar-2021', '2', 'Bennedita Tambunan', 'Input Laporan List DO-IT dan Input List DO Manual', '', 'bunga@garudamart.com', '', '17:00', '21:30', 'dita.jpg'),
(133, 'SPL-GMI-21-0046', '26-Mar-2021 09:47:13', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Sat 27-Mar-2021', 'Sat 27-Mar-2021', '2', 'Bunga Ratnani', 'PO Outstanding GIS, DP PO, stock inventory 2020', '', 'bunga@garudamart.com', '', '10:00', '18:30', 'bunga.jpg'),
(134, 'SPL-GMI-21-0047', '26-Mar-2021 13:36:20', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Sat 27-Mar-2021', 'Sat 27-Mar-2021', '1', 'Hulda Vincensia Masiglaat', 'Filing voucher purchase, payment, jurnal', '', 'sulissetia@garudamart.com', '', '09:00', '18:30', 'hulda.jpg'),
(135, 'SPL-GMI-21-0048', '26-Mar-2021 14:07:51', '2', 'Azwita Febriyanti', 'wita@garudamart.com', 'Sat 27-Mar-2021', 'Sat 27-Mar-2021', '1', 'Azwita Febriyanti', 'Filling Invoice On process, Paid dan Customer Receipt', '', 'sulissetia@garudamart.com', '', '09:00', '18:30', 'wita.jpg'),
(137, 'SPL-GMI-21-0050', '26-Mar-2021 14:48:40', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Fri 26-Mar-2021', 'Fri 26-Mar-2021', '2', 'Tia, Dita', 'Tia: Kalkulasi PO GMI-GIS &amp; GIS-GMI | Dita: Update laporan List DO-IT', '', 'bunga@garudamart.com', '', '18:00', '22:00', 'tia.jpg'),
(138, 'SPL-GMI-21-0051', '30-Mar-2021 16:02:17', '4', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Tue 30-Mar-2021', 'Tue 30-Mar-2021', '2', 'Bunga Ratnani', 'IT Gudang', '', 'bunga@garudamart.com', '', '17:00', '20:00', 'bunga.jpg'),
(139, 'SPL-GMI-21-0052', '30-Mar-2021 16:57:35', '', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Tue 30-Mar-2021', 'Tue 30-Mar-2021', '14', 'Angga, Ilvan, Amanda, dan Rivaldi', 'SO Ulang Gudang Jakarta', '', 'yoseph@garudamart.com', '', '18:00', '20:45', 'manda.jpg'),
(140, 'SPL-GMI-21-0053', '30-Mar-2021 18:25:50', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Tue 30-Mar-2021', 'Tue 30-Mar-2021', '13', 'Ahmed Gibran Coreda, Dhony Ariwibowo', 'proses BAST, pengecekan ulang exca302 di ABL,LAHAT(T/S electrical ac system)', '', 'suhail@garudamart.com', '', '07:00', '18:20', 'risman.jpg'),
(141, 'SPL-GMI-21-0054', '01-Apr-2021 16:32:06', '4', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 01-Apr-2021', 'Thu 01-Apr-2021', '18', 'Yugo Miharjo Darkim, Heri Setiawan', 'assy loto buat Anderson 3 set', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(142, 'SPL-GMI-21-0055', '01-Apr-2021 18:24:37', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Thu 01-Apr-2021', 'Thu 01-Apr-2021', '13', 'Ahmed Gibran Coreda, Dhony Ariwibowo', 'continue ts electrical ac exca 302 abl,diskusi part ac', '', 'suhail@garudamart.com', '', '17:00', '18:20', 'risman.jpg'),
(143, 'SPL-GMI-21-0056', '02-Apr-2021 23:13:15', '2', 'Andreas Jasri Siringo-ringo', 'ringo@garudamart.com', 'Sat 03-Apr-2021', 'Sat 03-Apr-2021', '15', 'Aceng Rusnadi', 'servis mobil grandmax blindvan', '', 'inggrid@garudamart.com', '', '09:00', '00:00', 'ringo.jpg'),
(144, 'SPL-GMI-21-0057', '05-Apr-2021 16:00:05', '2', 'Silvalescha Astarani', 'silva@garudamart.com', 'Mon 05-Apr-2021', 'Mon 05-Apr-2021', '2', 'Silvalescha Astarani', 'laporan inventory', '', 'bunga@garudamart.com', '', '17:00', '21:00', 'silva.jpg'),
(145, 'SPL-GMI-21-0058', '05-Apr-2021 16:34:37', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Mon 05-Apr-2021', 'Mon 05-Apr-2021', '14', 'Angga Prayoga, Mohamad Ilvan Ridhoni, Amanda Maghfiroh Chairani, Muhammad Rivaldi', 'SO Lanjutan Gudang Jakarta', '', 'yoseph@garudamart.com', '', '18:00', '21:30', 'manda.jpg'),
(146, 'SPL-GMI-21-0059', '06-Apr-2021 15:20:56', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Tue 06-Apr-2021', 'Tue 06-Apr-2021', '2', 'Bunga Ratnani', 'inventory', '', 'bunga@garudamart.com', '', '17:00', '21:00', 'bunga.jpg'),
(147, 'SPL-GMI-21-0060', '06-Apr-2021 16:08:07', '2', 'Silvalescha Astarani', 'silva@garudamart.com', 'Tue 06-Apr-2021', 'Tue 06-Apr-2021', '2', 'Silvalescha Astarani', 'Pengerjaan laporan', '', 'bunga@garudamart.com', '', '17:00', '21:30', 'silva.jpg'),
(148, 'SPL-GMI-21-0061', '06-Apr-2021 16:38:12', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Tue 06-Apr-2021', 'Tue 06-Apr-2021', '14', 'Amanda Maghfiroh Chairani', 'Laporan Mingguan In-Out Gudang Jakarta', '', 'yoseph@garudamart.com', '', '18:00', '21:30', 'manda.jpg'),
(149, 'SPL-GMI-21-0062', '06-Apr-2021 17:16:43', '2', 'Azwita Febriyanti', 'wita@garudamart.com', 'Tue 06-Apr-2021', 'Tue 06-Apr-2021', '1', 'Azwita Febriyanti', 'Mengerjakan laporan AR Detail April', '', 'sulissetia@garudamart.com', '', '18:00', '21:00', 'wita.jpg'),
(150, 'SPL-GMI-21-0063', '07-Apr-2021 09:00:46', '2', 'Ben Yoseph Nugroho Tri Hartanto', 'Benyosephnugroho@gmail.com', 'Tue 06-Apr-2021', 'Tue 06-Apr-2021', '14', 'Ben Yoseph Nugroho Tri Hartanto', 'Pengecekan Data Inventory', '', 'yoseph@garudamart.com', '', '18:00', '20:44', 'yosep.jpg'),
(151, 'SPL-GMI-21-0064', '07-Apr-2021 09:52:58', '2', 'Sigit Prasetyo', 'sigit@garudamart.com', 'Sat 10-Apr-2021', 'Sat 10-Apr-2021', '17', 'Aceng Rusnadi, Sigit Prasetyo', 'Penarikan kabel lan untuk integrasi dengan mesin absen dan komputer', '', 'inggrid@garudamart.com', '', '09:00', '17:00', 'sigit.jpg'),
(152, 'SPL-GMI-21-0065', '08-Apr-2021 16:29:26', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Thu 08-Apr-2021', 'Thu 08-Apr-2021', '14', 'Amanda Maghfiroh Chairani', 'Pengecekan KS dan DM dicompare dengan Accurate', '', 'yoseph@garudamart.com', '', '18:00', '21:20', 'manda.jpg'),
(153, 'SPL-GMI-21-0066', '08-Apr-2021 16:31:15', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Thu 08-Apr-2021', 'Thu 08-Apr-2021', '2', 'Bennedita Tambunan', 'Input Laporan List IT dan List Serial Number', '', 'bunga@garudamart.com', '', '19:00', '21:20', 'dita.jpg'),
(154, 'SPL-GMI-21-0067', '09-Apr-2021 16:02:51', '2', 'Alfons Vicky Daniels', 'alfons@garudamart.com', 'Sat 10-Apr-2021', 'Sat 10-Apr-2021', '14', 'Alfons Vicky Daniels', 'Bantu SO barang Gis', '', 'yoseph@garudamart.com', '', '08:00', '17:03', 'alfons.jpg'),
(155, 'SPL-GMI-21-0068', '09-Apr-2021 16:18:16', '2', 'Silvalescha Astarani', 'silva@garudamart.com', 'Fri 09-Apr-2021', 'Sat 10-Apr-2021', '2', 'Silvalescha Astarani', 'Jobcosting gis dan gmi, laporan in out 40barang inventory, SO gis jkt dan bpp', '', 'bunga@garudamart.com', '', '17:00', '22:00', 'silva.jpg'),
(156, 'SPL-GMI-21-0069', '09-Apr-2021 16:21:25', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Fri 09-Apr-2021', 'Fri 09-Apr-2021', '18', 'Sunyoto, Heri ', 'assy lotobox 3 system buat UT instalasi', '', 'aceng@garudamart.com', '', '18:00', '21:14', 'felix.jpg'),
(157, 'SPL-GMI-21-0070', '09-Apr-2021 16:28:54', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Fri 09-Apr-2021', 'Fri 09-Apr-2021', '14', 'Jacky, Angga, Ilvan , Amanda, Rivaldi', 'Ilvan, rival dan angga: Cek inventory. | Jacky: Monitoring | Amanda: Kompare KS dan Dm dengan Accurate', '', 'yoseph@garudamart.com', '', '18:00', '21:30', 'manda.jpg'),
(158, 'SPL-GMI-21-0071', '09-Apr-2021 16:22:49', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Fri 09-Apr-2021', 'Fri 09-Apr-2021', '18', 'Violentino Felix Ardiyanto Utoyo', 'so manufaktur', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(159, 'SPL-GMI-21-0072', '09-Apr-2021 16:31:02', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Sat 10-Apr-2021', 'Sat 10-Apr-2021', '14', 'Amanda Maghfiroh Chairani', 'Kompare data DM dan KS dengan Accurate', '', 'yoseph@garudamart.com', '', '09:00', '22:00', 'manda.jpg'),
(160, 'SPL-GMI-21-0073', '09-Apr-2021 16:39:38', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Sat 10-Apr-2021', 'Sat 10-Apr-2021', '2', 'Bennedita Tambunan', 'Failing DO and IT', '', 'bunga@garudamart.com', '', '09:00', '18:00', 'dita.jpg'),
(161, 'SPL-GMI-21-0074', '10-Apr-2021 13:08:48', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Sat 10-Apr-2021', 'Sat 10-Apr-2021', '14', 'Jacky , Angga ', 'Pengecekan Data Inventory, deadline hari senin.', '', 'yoseph@garudamart.com', '', '09:00', '13:40', 'manda.jpg'),
(163, 'SPL-GMI-21-0076', '14-Apr-2021 15:53:53', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Wed 14-Apr-2021', 'Wed 14-Apr-2021', '18', 'Aceng, Sunyoto, Heri ', 'harnes spmc 777 &amp; fatique warning', '', 'aceng@garudamart.com', '', '16:30', '21:02', 'felix.jpg'),
(164, 'SPL-GMI-21-0077', '15-Apr-2021 15:40:47', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 15-Apr-2021', 'Thu 15-Apr-2021', '18', 'Sunyoto, Heri, Kefi', 'fatique warning &amp; spmc', '', 'aceng@garudamart.com', '', '17:00', '21:12', 'felix.jpg'),
(165, 'SPL-GMI-21-0078', '15-Apr-2021 18:17:26', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Thu 15-Apr-2021', 'Thu 15-Apr-2021', '13', 'Ahmed Gibran Coreda, Dhony Ariwibowo', 'progres ac exca 502 dan monitorng exca 302 di ABL,Lahat', '', 'suhail@garudamart.com', '', '17:00', '18:00', 'risman.jpg'),
(166, 'SPL-GMI-21-0079', '16-Apr-2021 13:20:29', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Sat 17-Apr-2021', 'Sat 17-Apr-2021', '2', 'Bunga Ratnani', 'Adjustment Plus &amp; Minus hasil SO 2020', '', 'bunga@garudamart.com', '', '08:00', '15:00', 'bunga.jpg'),
(167, 'SPL-GMI-21-0080', '16-Apr-2021 14:20:07', '2', 'Melly Sulissetia Ningrum', 'sulissetia@garudamart.com', 'Sat 17-Apr-2021', 'Sat 17-Apr-2021', '1', 'Siti Anisa Maelani, Melly Sulissetia Ningrum', 'Adjustment akun-akun Laporan Keuangan', '', 'sulissetia@garudamart.com', '', '09:00', '13:00', 'sulis.jpg'),
(168, 'SPL-GMI-21-0081', '16-Apr-2021 14:33:02', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Sat 17-Apr-2021', 'Sat 17-Apr-2021', '1', 'Hulda Vincensia Masiglaat', 'Input faktur pajak bulan Maret 2021, input pengeluaran petty cash BPN 2 bulan, payment, purchase payment', '', 'sulissetia@garudamart.com', '', '09:00', '17:00', 'hulda.jpg'),
(169, 'SPL-GMI-21-0082', '16-Apr-2021 14:35:16', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Sat 17-Apr-2021', 'Sat 17-Apr-2021', '2', 'Bennedita Tambunan', 'Update Laporan DO-IT and failing PO,DO,IT,DO Manual', '', 'bunga@garudamart.com', '', '08:37', '17:00', 'dita.jpg'),
(170, 'SPL-GMI-21-0083', '16-Apr-2021 14:40:29', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Sat 17-Apr-2021', 'Sat 17-Apr-2021', '2', 'Vincentia Hanna Wibowo', 'Kalkulasi PO GIS &amp; Kalkulasi penawaran part AC permintaan PT Gunung Mas Grup', '', 'bunga@garudamart.com', '', '09:00', '17:00', 'tia.jpg'),
(171, 'SPL-GMI-21-0084', '16-Apr-2021 15:38:50', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sat 17-Apr-2021', 'Sat 17-Apr-2021', '18', 'Sunyoto, Darkim, Heri ', 'spmc 777 + fatique warning', '', 'aceng@garudamart.com', '', '08:00', '16:30', 'felix.jpg'),
(172, 'SPL-GMI-21-0085', '16-Apr-2021 16:02:39', '2', 'Azwita Febriyanti', 'wita@garudamart.com', 'Sat 17-Apr-2021', 'Sat 17-Apr-2021', '1', 'Azwita Febriyanti', 'Filling invoice paid, on process dan customer receipt', '', 'sulissetia@garudamart.com', '', '09:00', '17:00', 'wita.jpg'),
(173, 'SPL-GMI-21-0086', '16-Apr-2021 16:13:59', '2', 'Silvalescha Astarani', 'silva@garudamart.com', 'Fri 16-Apr-2021', 'Fri 16-Apr-2021', '2', 'Silvalescha Astarani', 'jobcosting gis', '', 'bunga@garudamart.com', '', '17:00', '21:30', 'silva.jpg'),
(174, 'SPL-GMI-21-0087', '16-Apr-2021 16:29:40', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Fri 16-Apr-2021', 'Fri 16-Apr-2021', '14', 'Amanda Maghfiroh Chairani', 'Laporan Mingguan (5 April - 16 April 2021)', '', 'yoseph@garudamart.com', '', '17:30', '21:30', 'manda.jpg'),
(175, 'SPL-GMI-21-0088', '18-Apr-2021 18:59:15', '2', 'Sigit Prasetyo', 'sigit@garudamart.com', 'Sun 18-Apr-2021', 'Sun 18-Apr-2021', '17', 'Sigit Prasetyo', 'Standby and admin meeting pak andre dengan client from japan', '', 'inggrid@garudamart.com', '', '14:00', '15:00', 'sigit.jpg'),
(176, 'SPL-GMI-21-0089', '19-Apr-2021 16:27:15', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 19-Apr-2021', 'Mon 19-Apr-2021', '18', 'Sunyoto, Darkim, Heri, Aceng, Kefi', 'harnes spmc 777 ', '', 'aceng@garudamart.com', '', '16:30', '21:00', 'felix.jpg'),
(177, 'SPL-GMI-21-0090', '21-Apr-2021 16:41:59', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Wed 21-Apr-2021', 'Thu 22-Apr-2021', '23', 'Meilissa, Mu Inggrid', 'Absensi', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(178, 'SPL-GMI-21-0091', '21-Apr-2021 18:35:54', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Wed 21-Apr-2021', 'Wed 21-Apr-2021', '13', 'Ahmed Gibran Coreda, Dhony Ariwibowo', 'pengerjaan exca 502 dan exca 305 di ABL,lahat', '', 'suhail@garudamart.com', '', '17:00', '18:30', 'risman.jpg'),
(179, 'SPL-GMI-21-0092', '22-Apr-2021 16:30:03', '', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 22-Apr-2021', 'Thu 22-Apr-2021', '18', 'Aceng, Kefi', 'Bracket apar scania kpp &amp; Lotobox 2 system', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(180, 'SPL-GMI-21-0093', '22-Apr-2021 16:31:55', '2', 'Azwita Febriyanti', 'wita@garudamart.com', 'Thu 22-Apr-2021', 'Thu 22-Apr-2021', '1', 'Azwita Febriyanti', 'Mengerjakan laporan fee marketing', '', 'sulissetia@garudamart.com', '', '18:00', '21:00', 'wita.jpg'),
(181, 'SPL-GMI-21-0094', '22-Apr-2021 18:09:56', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Thu 22-Apr-2021', 'Thu 22-Apr-2021', '13', 'Ahmed Gibran Coreda', 'continue progres exca 502', '', 'suhail@garudamart.com', '', '17:00', '18:00', 'risman.jpg'),
(182, 'SPL-GMI-21-0095', '23-Apr-2021 13:21:32', '2', 'Meilissa', 'meilissa@garudamart.com', 'Fri 23-Apr-2021', 'Fri 23-Apr-2021', '13', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Ahmad Haerul Huda, Kanisius Kefi, Sabri', 'Instalasi UT SKP', '', 'suhail@garudamart.com', '', '16:30', '19:00', 'mel.jpg'),
(183, 'SPL-GMI-21-0096', '23-Apr-2021 15:42:21', '2', 'Sigit Prasetyo', 'sigit@garudamart.com', 'Sat 24-Apr-2021', 'Sat 24-Apr-2021', '17', 'Sigit Prasetyo', 'instalasi windows laptop mba wita dan maintance laptop helen ', '', 'inggrid@garudamart.com', '', '09:00', '16:00', 'sigit.jpg'),
(184, 'SPL-GMI-21-0097', '23-Apr-2021 15:35:14', '2', 'Meilissa', 'meilissa@garudamart.com', 'Sat 24-Apr-2021', 'Sat 24-Apr-2021', '13', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Kanisius Kefi, Sabri', 'Instalasi UT SKP', '', 'suhail@garudamart.com', '', '08:00', '17:00', 'mel.jpg'),
(185, 'SPL-GMI-21-0098', '23-Apr-2021 16:08:45', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Fri 23-Apr-2021', 'Fri 23-Apr-2021', '23', 'Mu Inggrid', 'data case kenaikan biaya gaji di SPT Pph21, GIS &amp; GMI', '', 'anna@garudamart.com', '', '17:00', '20:00', 'inggrid.jpg'),
(186, 'SPL-GMI-21-0099', '23-Apr-2021 16:47:06', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sat 24-Apr-2021', 'Sat 24-Apr-2021', '18', 'Supandi, Alek, Aceng', 'bracket apar buat UT', '', 'aceng@garudamart.com', '', '08:00', '14:00', 'felix.jpg'),
(187, 'SPL-GMI-21-0100', '23-Apr-2021 17:00:29', '2', 'Sigit Prasetyo', 'sigit@garudamart.com', 'Fri 23-Apr-2021', 'Fri 23-Apr-2021', '17', 'Sigit Prasetyo', 'design dan cetak stiker urgent untuk rocker switch di pakai besok', '', 'inggrid@garudamart.com', '', '16:30', '20:00', 'sigit.jpg'),
(188, 'SPL-GMI-21-0101', '23-Apr-2021 18:11:17', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Mon 12-Apr-2021', 'Mon 12-Apr-2021', '13', 'Ahmed Gibran Coreda', 'kirim part ke PT.ZEN ARMADA,LAHAT dan Progres ac exca 502 di  pt.abl,lahat', '', 'suhail@garudamart.com', '', '07:30', '19:20', 'risman.jpg'),
(189, 'SPL-GMI-21-0102', '26-Apr-2021 15:27:22', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 26-Apr-2021', 'Mon 26-Apr-2021', '18', 'Aceng , Sunyoto, Heri ', 'pengetesan harnes spmc 777 dan pc 2000  dan 2 system  lotoboxd85', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(190, 'SPL-GMI-21-0103', '27-Apr-2021 14:57:24', '2', 'Meilissa', 'meilissa@garudamart.com', 'Tue 27-Apr-2021', 'Tue 27-Apr-2021', '13', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Kanisius Kefi', 'Instalasi UT SKP', '', 'suhail@garudamart.com', '', '16:30', '19:00', 'mel.jpg'),
(191, 'SPL-GMI-21-0104', '28-Apr-2021 16:10:36', '', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Wed 28-Apr-2021', 'Wed 28-Apr-2021', '18', 'Aceng Rusnadi, Sunyoto, Heri Setiawan', 'Pengerjaan harnes spmc hd 785 pama erka po gis', '', 'aceng@garudamart.com', '', '17:00', '22:00', 'felix.jpg'),
(192, 'SPL-GMI-21-0105', '29-Apr-2021 16:15:56', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 29-Apr-2021', 'Thu 29-Apr-2021', '18', 'Sunyoto, Heri Setiawan', 'harnes spmc hd785 po pama erka dan fatique warning', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(193, 'SPL-GMI-21-0106', '29-Apr-2021 16:31:01', '2', 'Meilissa', 'meilissa@garudamart.com', 'Thu 29-Apr-2021', 'Thu 29-Apr-2021', '13', 'Toto Nihyana, M. Suhail S, Ahmad Haerul Huda', 'Instalasi UT Jababeka', '', 'suhail@garudamart.com', '', '16:30', '19:00', 'mel.jpg'),
(194, 'SPL-GMI-21-0107', '30-Apr-2021 08:54:41', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Sat 01-May-2021', 'Sat 01-May-2021', '2', 'Bunga Ratnani', 'Tarik DO GMI', '', 'bunga@garudamart.com', '', '08:00', '16:00', 'bunga.jpg'),
(195, 'SPL-GMI-21-0108', '30-Apr-2021 09:11:45', '2', 'Azwita Febriyanti', 'wita@garudamart.com', 'Thu 29-Apr-2021', 'Thu 29-Apr-2021', '1', 'Azwita Febriyanti', 'Proses membuat laporan BAP Customer (PT.Artha Mineral Recources) ke polsek Jati Asih', '', 'sulissetia@garudamart.com', '', '18:00', '20:34', 'wita.jpg'),
(196, 'SPL-GMI-21-0109', '30-Apr-2021 12:33:11', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Sat 01-May-2021', 'Sat 01-May-2021', '1', 'Hulda Vincensia Masiglaat', 'Rekap stok dapur bulan april 2021, buat list belanja kebutuhan dapur 2021, filling voucher (jurnal,payment,purchase payment)', '', 'sulissetia@garudamart.com', '', '09:00', '17:00', 'hulda.jpg'),
(197, 'SPL-GMI-21-0110', '30-Apr-2021 13:26:29', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Sat 01-May-2021', 'Sat 01-May-2021', '2', 'Vincentia Hanna Wibowo', 'Tarik DO GMI, RI di accurate GIS, kalkulasi PO GIS', '', 'bunga@garudamart.com', '', '09:00', '17:00', 'tia.jpg'),
(198, 'SPL-GMI-21-0111', '30-Apr-2021 14:37:51', '2', 'Meilissa', 'meilissa@garudamart.com', 'Sat 01-May-2021', 'Sat 01-May-2021', '13', 'Meilissa', 'LIST BAST &amp; MR PN OPTIONAL SAFETY DEVICE', '', 'suhail@garudamart.com', '', '09:00', '17:00', 'mel.jpg'),
(199, 'SPL-GMI-21-0112', '30-Apr-2021 16:04:17', '', 'Bennedita Tambunan', 'dita@garudamart.com', 'Sat 01-May-2021', 'Sun 02-May-2021', '2', 'Bennedita Tambunan', 'cek data-data AMR dan ke Polsek', '', 'bunga@garudamart.com', '', '09:00', '16:00', 'dita.jpg'),
(200, 'SPL-GMI-21-0113', '03-May-2021 15:40:17', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 03-May-2021', 'Mon 03-May-2021', '18', 'Kanisius Kefi, Alek Gunawan', 'Bracket ektension mirror untuk spk UT', '', 'aceng@garudamart.com', '', '17:00', '22:10', 'felix.jpg'),
(201, 'SPL-GMI-21-0114', '04-May-2021 16:03:18', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Tue 04-May-2021', 'Tue 04-May-2021', '18', 'Sunyoto, Heri ', 'manufaktur fatique warning', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(202, 'SPL-GMI-21-0115', '05-May-2021 15:43:15', '2', 'Meilissa', 'meilissa@garudamart.com', 'Wed 05-May-2021', 'Wed 05-May-2021', '13', 'Toto Nihyana, Ahmad Sugiyanto, Ahmad Haerul Huda', 'Instalasi UT Jababeka', '', 'suhail@garudamart.com', '', '16:30', '19:00', 'mel.jpg'),
(203, 'SPL-GMI-21-0116', '07-May-2021 08:55:08', '2', 'Meilissa', 'meilissa@garudamart.com', 'Thu 06-May-2021', 'Thu 06-May-2021', '13', 'Toto Nihyana, Ahmad Sugiyanto, Ahmad Haerul Huda', 'Instalasi UT Jababeka', '', 'suhail@garudamart.com', '', '16:30', '19:00', 'mel.jpg'),
(204, 'SPL-GMI-21-0117', '07-May-2021 10:55:08', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Sat 08-May-2021', 'Sat 08-May-2021', '2', 'Bunga Ratnani', 'Tarik DO GMI untuk GIS bulan feb 2021', '', 'bunga@garudamart.com', '', '09:00', '16:00', 'bunga.jpg'),
(205, 'SPL-GMI-21-0118', '07-May-2021 14:42:00', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Fri 07-May-2021', 'Fri 07-May-2021', '1', 'Hulda Vincensia Masiglaat', 'Input pengeluaran bank 647 bulan April 2021', '', 'anisa@garudamart.com', '', '18:00', '22:00', 'hulda.jpg'),
(206, 'SPL-GMI-21-0119', '07-May-2021 14:44:30', '2', 'Siti Anisa Maelani', 'anisa@garudamart.com', 'Sat 08-May-2021', 'Sat 08-May-2021', '1', 'Siti Anisa Maelani, Hulda Vincensia Masiglaat', 'Modifikasi Akun', '', 'anisa@garudamart.com', '', '09:00', '16:30', 'anisa.jpg'),
(207, 'SPL-GMI-21-0120', '07-May-2021 14:47:50', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sat 08-May-2021', 'Sat 08-May-2021', '18', 'Aceng Rusnadi, Sunyoto, Kanisius Kefi, Supandi Irawan, Heri Setiawan', 'fatique warning', '', 'aceng@garudamart.com', '', '07:00', '21:39', 'felix.jpg'),
(208, 'SPL-GMI-21-0121', '07-May-2021 15:37:11', '', 'Meilissa', 'meilissa@garudamart.com', 'Fri 07-May-2021', 'Fri 07-May-2021', '13', 'Toto Nihyana, Ahmad Sugiyanto, Ahmad Haerul Huda', 'Instalasi UT Jababeka', '', 'suhail@garudamart.com', '', '16:30', '19:00', 'mel.jpg'),
(209, 'SPL-GMI-21-0122', '07-May-2021 16:49:16', '2', 'Azwita Febriyanti', 'wita@garudamart.com', 'Fri 07-May-2021', 'Fri 07-May-2021', '1', 'Azwita Febriyanti', 'Filling Invoice On process, Paid dan Customer Receipt', '', 'sulissetia@garudamart.com', '', '18:00', '22:00', 'wita.jpg'),
(210, 'SPL-GMI-21-0123', '10-May-2021 16:30:30', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 10-May-2021', 'Mon 10-May-2021', '18', 'Aceng , Sunyoto, Heri ', 'Harnes fatique warning po gis', '', 'aceng@garudamart.com', '', '16:30', '21:00', 'felix.jpg'),
(211, 'SPL-GMI-21-0124', '17-May-2021 16:30:51', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 17-May-2021', 'Mon 17-May-2021', '18', 'Aceng Rusnadi, Sunyoto, Heri Setiawan', 'harnes spmc hd785 po pama erka ', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(212, 'SPL-GMI-21-0125', '18-May-2021 10:24:40', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Tue 18-May-2021', 'Tue 18-May-2021', '18', 'Aceng Rusnadi, Sunyoto, Kanisius Kefi, Yugo Miharjo Darkim, Alek Gunawan, Heri Setiawan', 'harnes spmc hd785 po pama erka ', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(213, 'SPL-GMI-21-0126', '19-May-2021 15:01:58', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Wed 19-May-2021', 'Wed 19-May-2021', '18', 'Aceng , Sunyoto, Kefi, Darkim, Alek , Heri ', 'harnes spmc hd785 po pama erka ', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(214, 'SPL-GMI-21-0127', '19-May-2021 15:04:44', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Wed 19-May-2021', 'Wed 19-May-2021', '18', 'Risman, Gibran ', 'Harnes  fatique warning Po ridhan', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(215, 'SPL-GMI-21-0128', '20-May-2021 14:26:58', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 20-May-2021', 'Thu 20-May-2021', '18', 'Aceng , Sunyoto, Kefi, Alek , Heri ', 'prepair kabel spmc hd 785 &amp; 777 dan pengetesan harnes spmc hd 785', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(216, 'SPL-GMI-21-0129', '20-May-2021 16:19:06', '2', 'Meilissa', 'meilissa@garudamart.com', 'Thu 20-May-2021', 'Thu 20-May-2021', '13', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri', 'Progress SPK Manufaktur', '', 'suhail@garudamart.com', '', '18:00', '20:00', 'mel.jpg'),
(217, 'SPL-GMI-21-0130', '21-May-2021 09:11:40', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Sat 22-May-2021', 'Sat 22-May-2021', '2', 'Bennedita Tambunan', 'failing DO,PO,IT', '', 'bunga@garudamart.com', '', '08:01', '16:13', 'dita.jpg'),
(218, 'SPL-GMI-21-0131', '21-May-2021 13:34:18', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sat 22-May-2021', 'Sat 22-May-2021', '18', 'Aceng, Sunyoto,  Darkim, Risman, Heri , Gibran', 'fatique warning, prepair spmc ', '', 'aceng@garudamart.com', '', '08:00', '17:00', 'felix.jpg'),
(219, 'SPL-GMI-21-0132', '21-May-2021 14:31:37', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Fri 21-May-2021', 'Fri 21-May-2021', '23', 'Meilissa, Mu Inggrid', 'Absensi', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(220, 'SPL-GMI-21-0133', '21-May-2021 14:33:26', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 22-May-2021', 'Sat 22-May-2021', '23', 'Meilissa, Azwita Febriyanti, Mu Inggrid', 'Meilissa&amp;Inggrid: Absensi | Wita: Filling document', '', 'anna@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(221, 'SPL-GMI-21-0134', '21-May-2021 14:38:06', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Sat 22-May-2021', 'Sat 22-May-2021', '2', 'Bunga Ratnani', 'kalkulasi SPMC GIS, cek adjustment stock, monitoring cek fisik gudang dengan team service', '', 'bunga@garudamart.com', '', '09:00', '16:00', 'bunga.jpg'),
(222, 'SPL-GMI-21-0135', '21-May-2021 15:14:47', '2', 'Meilissa', 'meilissa@garudamart.com', 'Fri 21-May-2021', 'Fri 21-May-2021', '13', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri', 'Instalasi UT Jababeka', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(223, 'SPL-GMI-21-0136', '21-May-2021 15:35:49', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Sat 22-May-2021', 'Sat 22-May-2021', '1', 'Hulda Vincensia Masiglaat', 'Ngeprint voucher payment, purchase payment, jurnal umum', '', 'sulissetia@garudamart.com', '', '08:00', '18:30', 'hulda.jpg'),
(224, 'SPL-GMI-21-0137', '21-May-2021 16:11:58', '4', 'Meilissa', 'meilissa@garudamart.com', 'Sat 22-May-2021', 'Sat 22-May-2021', '13', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Eko Kiswanto, Kanisius Kefi', 'Instalasi UT SKP HD785', '', 'suhail@garudamart.com', '', '08:00', '17:01', 'mel.jpg'),
(225, 'SPL-GMI-21-0138', '21-May-2021 16:14:10', '2', 'Meilissa', 'meilissa@garudamart.com', 'Sat 22-May-2021', 'Sat 22-May-2021', '13', 'Iwan , Huda, Sugiyanto', 'BANTU WH UNTUK STOCK OPNAME', '', 'suhail@garudamart.com', '', '08:00', '17:00', 'mel.jpg'),
(226, 'SPL-GMI-21-0139', '21-May-2021 16:15:29', '2', 'Azwita Febriyanti', 'wita@garudamart.com', 'Fri 21-May-2021', 'Fri 21-May-2021', '1', 'Azwita Febriyanti', 'Membuat Laporan Fee Marketing', '', 'sulissetia@garudamart.com', '', '18:00', '20:00', 'wita.jpg'),
(227, 'SPL-GMI-21-0140', '21-May-2021 17:20:49', '2', 'Sigit Prasetyo', 'sigit@garudamart.com', 'Sat 22-May-2021', 'Sat 22-May-2021', '17', 'Sigit Prasetyo', 'pasang kamera cctv diatas meja server ', '', 'inggrid@garudamart.com', '', '09:00', '17:00', 'sigit.jpg'),
(228, 'SPL-GMI-21-0141', '21-May-2021 22:41:02', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Sat 22-May-2021', 'Sat 22-May-2021', '14', 'Jacky, Angga, Ilvan , Rivaldi', 'SO Warehouse', '', 'yoseph@garudamart.com', '', '08:00', '17:00', 'manda.jpg'),
(229, 'SPL-GMI-21-0142', '24-May-2021 16:35:43', '2', 'Meilissa', 'meilissa@garudamart.com', 'Mon 24-May-2021', 'Mon 24-May-2021', '13', 'Toto Nihyana, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri', 'Instalasi UT Jababeka', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(230, 'SPL-GMI-21-0143', '24-May-2021 16:13:23', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 24-May-2021', 'Mon 24-May-2021', '18', 'Sunyoto, Yugo Miharjo Darkim, Supandi Irawan, Alek Gunawan, Heri Setiawan', 'assy lotobox 2 system buat ut', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(231, 'SPL-GMI-21-0144', '25-May-2021 15:12:04', '2', 'Meilissa', 'meilissa@garudamart.com', 'Wed 26-May-2021', 'Wed 26-May-2021', '13', 'Toto , Suhail, Sugiyanto, Iwan, Eko , Huda, Kefi, Sabri', 'Instalasi UT SKP', '', 'suhail@garudamart.com', '', '08:00', '17:00', 'mel.jpg'),
(232, 'SPL-GMI-21-0145', '25-May-2021 16:11:17', '4', 'Alfons Vicky Daniels', 'alfons@garudamart.com', 'Tue 25-May-2021', 'Tue 25-May-2021', '14', 'Alfons Vicky Daniels', 'menyelesaikan laporan mingguan', '', 'yoseph@garudamart.com', 'cancel dari Alfons', '17:00', '21:00', 'alfons.jpg'),
(233, 'SPL-GMI-21-0146', '25-May-2021 08:53:59', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Wed 26-May-2021', 'Wed 26-May-2021', '2', 'Vincentia Hanna Wibowo', 'Tarik DO GMI, RI di accurate GIS, kalkulasi PO GIS', '', 'bunga@garudamart.com', '', '10:00', '19:20', 'tia.jpg'),
(234, 'SPL-GMI-21-0147', '25-May-2021 16:11:05', '2', 'Silvalescha Astarani', 'silva@garudamart.com', 'Wed 26-May-2021', 'Wed 26-May-2021', '2', 'Silvalescha Astarani', 'Laporan compare dm dan accurate ', '', 'bunga@garudamart.com', '', '09:00', '19:20', 'silva.jpg'),
(235, 'SPL-GMI-21-0148', '25-May-2021 15:13:28', '2', 'Meilissa', 'meilissa@garudamart.com', 'Tue 25-May-2021', 'Tue 25-May-2021', '13', 'Toto , Suhail, Sugiyanto, Huda', 'Instalasi UT Jababeka', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(236, 'SPL-GMI-21-0149', '27-May-2021 13:46:36', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 27-May-2021', 'Thu 27-May-2021', '18', 'Aceng , Sunyoto, Kefi, Felix , Alek , Heri, Riyan', 'PABRIKASI : BRACKET LOTOBOX &amp; BRACKET APAR | MANUFAKTUR : ASSY LOTOBOX DAN MANUFAKTUR | FELIX : JOBCOSTING &amp; BIKIN POFA', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(237, 'SPL-GMI-21-0150', '28-May-2021 14:25:38', '2', 'Yudi Saputra', 'yudisaputra230700@gmail.com', 'Thu 27-May-2021', 'Thu 27-May-2021', '15', 'Yudi Saputra', 'Beberes J3 dan tunggu mba meeting', '', 'inggrid@garudamart.com', '', '17:00', '19:22', 'yudi.jpg'),
(238, 'SPL-GMI-21-0151', '28-May-2021 15:23:33', '2', 'Meilissa', 'meilissa@garudamart.com', 'Fri 28-May-2021', 'Fri 28-May-2021', '13', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Ahmad Haerul Huda', 'Instalasi UT Jababeka', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(239, 'SPL-GMI-21-0152', '28-May-2021 15:31:55', '2', 'Meilissa', 'meilissa@garudamart.com', 'Fri 28-May-2021', 'Fri 28-May-2021', '13', 'Iwan Ase, Eko Kiswanto, Sabri, Muhamad Risman, Ahmed Gibran Coreda', 'Instalasi di Korindo Tangerang', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(240, 'SPL-GMI-21-0153', '28-May-2021 15:33:11', '2', 'Meilissa', 'meilissa@garudamart.com', 'Sat 29-May-2021', 'Sat 29-May-2021', '13', 'Eko Kiswanto, Sabri', 'Instalasi UT SKP', '', 'suhail@garudamart.com', '', '08:00', '17:00', 'mel.jpg'),
(241, 'SPL-GMI-21-0154', '28-May-2021 15:28:00', '2', 'Silvalescha Astarani', 'silva@garudamart.com', 'Sat 29-May-2021', 'Sat 29-May-2021', '2', 'Silvalescha Astarani', 'ekspor data dan buat laporan inventory 8 januari 2021', '', 'bunga@garudamart.com', '', '10:00', '21:00', 'silva.jpg'),
(242, 'SPL-GMI-21-0155', '28-May-2021 15:32:53', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Sat 29-May-2021', 'Sat 29-May-2021', '14', 'Amanda Maghfiroh Chairani, Rizky Bangkit Andrian', 'Rizky: Prepare data Meeting 4 Juni 2021 || Amanda: Laporan Warehouse 24-28 2021', '', 'yoseph@garudamart.com', '', '09:00', '21:00', 'manda.jpg'),
(243, 'SPL-GMI-21-0156', '28-May-2021 15:54:05', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Sat 29-May-2021', 'Sat 29-May-2021', '2', 'Bennedita Tambunan, Vincentia Hanna Wibowo', 'Update List DO (dita), Training Ekspor data dan buat laporan inventory 8 Jan 2021 (tia)', '', 'bunga@garudamart.com', '', '08:00', '17:00', 'dita.jpg'),
(244, 'SPL-GMI-21-0157', '28-May-2021 15:06:55', '', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sat 29-May-2021', 'Sat 29-May-2021', '18', 'Aceng , Sunyoto, Darkim, Riyanto, Kefi', 'Wirring harnes lotobox dan bracket', '', 'aceng@garudamart.com', '', '08:00', '21:00', 'felix.jpg'),
(245, 'SPL-GMI-21-0158', '31-May-2021 15:22:06', '2', 'Meilissa', 'meilissa@garudamart.com', 'Mon 31-May-2021', 'Mon 31-May-2021', '13', 'Eko , Sabri, Risman, Gibran ', 'Instalasi UT (Korindo)', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(246, 'SPL-GMI-21-0159', '31-May-2021 16:54:58', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Mon 31-May-2021', 'Mon 31-May-2021', '23', 'Sunyoto, Kefi, Darkim, Alek, Riyan', 'All Bracket', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(247, 'SPL-GMI-21-0160', '31-May-2021 17:46:19', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Mon 31-May-2021', 'Mon 31-May-2021', '14', 'Angga , Ilvan , Rivaldi', 'Packing Instalasi BPP 5 UNIT. P1', '', 'yoseph@garudamart.com', '', '17:46', '18:16', 'manda.jpg'),
(248, 'SPL-GMI-21-0161', '02-Jun-2021 15:48:23', '2', 'Sigit Prasetyo', 'sigit@garudamart.com', 'Wed 02-Jun-2021', 'Wed 02-Jun-2021', '17', 'Sigit Prasetyo', 'Ke sentul menemani pak andre', '', 'inggrid@garudamart.com', '', '17:00', '00:00', 'sigit.jpg'),
(249, 'SPL-GMI-21-0162', '02-Jun-2021 16:02:18', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Wed 02-Jun-2021', 'Wed 02-Jun-2021', '18', 'Aceng , Kefi, Supandi , Heri ', 'all bracket', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(250, 'SPL-GMI-21-0163', '03-Jun-2021 14:37:27', '', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Thu 03-Jun-2021', 'Thu 03-Jun-2021', '1', 'Hulda Vincensia Masiglaat', 'Input transaksi bank 647 bulan Mei 2021', '', 'anisa@garudamart.com', '', '17:00', '22:15', 'hulda.jpg'),
(252, 'SPL-GMI-21-0165', '03-Jun-2021 15:00:44', '2', 'Azwita Febriyanti', 'wita@garudamart.com', 'Thu 03-Jun-2021', 'Thu 03-Jun-2021', '1', 'Azwita Febriyanti', 'Membuat laporan AR Detail Juni 2021', '', 'sulissetia@garudamart.com', '', '18:00', '22:15', 'wita.jpg'),
(253, 'SPL-GMI-21-0166', '03-Jun-2021 15:07:45', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Thu 03-Jun-2021', 'Thu 03-Jun-2021', '23', 'Aceng, Kefi, Felix , Alek , Heri , RIYANTO', 'Bracket, fatiq &amp; Loto box | Felix: Job costing', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(254, 'SPL-GMI-21-0167', '03-Jun-2021 15:05:10', '2', 'Sigit Prasetyo', 'sigit@garudamart.com', 'Thu 03-Jun-2021', 'Thu 03-Jun-2021', '17', 'Sigit Prasetyo', 'repair file outlook meta corrupt - sudah 2 hari', '', 'inggrid@garudamart.com', '', '18:00', '21:00', 'sigit.jpg'),
(255, 'SPL-GMI-21-0168', '03-Jun-2021 15:58:55', '2', 'Meilissa', 'meilissa@garudamart.com', 'Thu 03-Jun-2021', 'Thu 03-Jun-2021', '13', 'M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri, Muhamad Risman, Ahmed Gibran Coreda', 'Instalasi SPMC Trakindo', '', 'suhail@garudamart.com', '', '17:00', '19:02', 'mel.jpg'),
(256, 'SPL-GMI-21-0169', '03-Jun-2021 17:13:55', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Thu 03-Jun-2021', 'Thu 03-Jun-2021', '14', 'Angga , Ilvan , Rivaldi', 'Persiapan Barang SPMC PC2000 GIS dan 3 SPK GMI', '', 'yoseph@garudamart.com', '', '17:14', '20:00', 'manda.jpg'),
(257, 'SPL-GMI-21-0170', '04-Jun-2021 08:39:07', '2', 'Andreas Jasri Siringo-ringo', 'ringo@garudamart.com', 'Thu 03-Jun-2021', 'Thu 03-Jun-2021', '15', 'Andreas Jasri Siringo-ringo', 'Cari Genset untuk mekanik JKT', '', 'inggrid@garudamart.com', '', '17:00', '20:36', 'ringo.jpg'),
(258, 'SPL-GMI-21-0171', '04-Jun-2021 13:09:46', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Sat 05-Jun-2021', 'Sat 05-Jun-2021', '2', 'Bunga Ratnani', 'cek kalkulasi PO GIS, cek jobcosting instalasi, kalkulasi instalasi GIS, edit jobcosting instalasi', '', 'bunga@garudamart.com', '', '09:00', '19:00', 'bunga.jpg'),
(259, 'SPL-GMI-21-0172', '04-Jun-2021 13:58:54', '2', 'Meilissa', 'meilissa@garudamart.com', 'Fri 04-Jun-2021', 'Fri 04-Jun-2021', '13', 'M. Suhail S, Iwan Ase, Eko Kiswanto, Sabri, Muhamad Risman, Ahmed Gibran Coreda', 'Instalasi SPMC Trakindo', '', 'suhail@garudamart.com', '', '17:04', '19:59', 'mel.jpg'),
(260, 'SPL-GMI-21-0173', '04-Jun-2021 14:14:28', '2', 'Meilissa', 'meilissa@garudamart.com', 'Sat 05-Jun-2021', 'Sun 06-Jun-2021', '13', 'M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Sabri', 'Instalasi SPMC Trakindo', '', 'suhail@garudamart.com', '', '08:00', '17:00', 'mel.jpg'),
(261, 'SPL-GMI-21-0174', '04-Jun-2021 15:57:10', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Fri 04-Jun-2021', 'Sat 05-Jun-2021', '18', 'Aceng , Kefi, Alek , Heri , RIYANTO', 'Fatique warning lotobox scania &amp; bracket ', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(262, 'SPL-GMI-21-0175', '04-Jun-2021 16:18:40', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Sat 05-Jun-2021', 'Sat 05-Jun-2021', '1', 'Hulda , Silvi ', 'Ngeprint voucher dan modifikasi akun', '', 'Anisa@garudamart.com', '', '09:00', '16:00', 'hulda.jpg'),
(263, 'SPL-GMI-21-0176', '04-Jun-2021 20:31:04', '2', 'Meilissa', 'meilissa@garudamart.com', 'Sat 05-Jun-2021', 'Sun 06-Jun-2021', '13', 'Risman, Gibran ', 'Instalasi SPMC Trakindo', '', 'suhail@garudamart.com', '', '08:31', '17:02', 'mel.jpg'),
(264, 'SPL-GMI-21-0177', '04-Jun-2021 20:32:17', '2', 'Meilissa', 'meilissa@garudamart.com', 'Fri 04-Jun-2021', 'Fri 04-Jun-2021', '13', 'Ahmad Sugiyanto', 'Instalasi SPMC Trakindo', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(265, 'SPL-GMI-21-0178', '05-Jun-2021 21:39:52', '', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Sun 06-Jun-2021', 'Sun 06-Jun-2021', '14', 'Rizky', 'Prepare barang SPMC CAT 777 ( 2 set) ', '', 'yoseph@garudamart.com', '', '07:00', '10:00', 'manda.jpg'),
(267, 'SPL-GMI-21-0179', '07-Jun-2021 12:01:13', '1', 'Sigit Prasetyo', 'sigit@garudamart.com', 'Sat 12-Jun-2021', 'Sun 13-Jun-2021', '17', 'Aceng Rusnadi, Sigit Prasetyo', 'instalasi kabel dan pemasangan CCTV j3 untuk 8 titik', '', 'inggrid@garudamart.com', '', '08:00', '17:00', 'sigit.jpg'),
(268, 'SPL-GMI-21-0180', '07-Jun-2021 14:27:56', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 07-Jun-2021', 'Mon 07-Jun-2021', '18', 'Aceng, Sunyoto, Kefi, Supandi, Alek, Heri, RIYANTO', 'all bracket&amp; fatique warning', '', 'aceng@garudamart.com', '', '17:00', '21:49', 'felix.jpg'),
(269, 'SPL-GMI-21-0181', '07-Jun-2021 16:42:24', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Mon 07-Jun-2021', 'Mon 07-Jun-2021', '1', 'Hulda Vincensia Masiglaat', 'Input transaksi bank 647 bulan Mei 2021', '', 'Anisa@garudamart.com', '', '17:00', '21:30', 'hulda.jpg');
INSERT INTO `spl` (`id`, `kode_spl`, `date_created`, `status`, `nama`, `email`, `tanggal`, `date_end`, `divisi`, `anggota`, `pekerjaan`, `mengetahui`, `emailhead`, `note`, `jam`, `kembali`, `foto`) VALUES
(270, 'SPL-GMI-21-0182', '07-Jun-2021 16:43:06', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Mon 07-Jun-2021', 'Mon 07-Jun-2021', '14', 'Amanda Maghfiroh Chairani', 'Tambahan Laporan Mingguan Week 1 (karena dokumen baru ada di saya&quot;', '', 'yoseph@garudamart.com', '', '18:00', '21:30', 'manda.jpg'),
(271, 'SPL-GMI-21-0183', '08-Jun-2021 08:22:39', '2', 'Meilissa', 'meilissa@garudamart.com', 'Mon 07-Jun-2021', 'Mon 07-Jun-2021', '13', 'Toto Nihyana, M. Suhail S, Iwan Ase, Eko Kiswanto, Sabri', 'Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '17:00', '19:30', 'mel.jpg'),
(272, 'SPL-GMI-21-0184', '08-Jun-2021 14:54:40', '2', 'Meilissa', 'meilissa@garudamart.com', 'Tue 08-Jun-2021', 'Tue 08-Jun-2021', '13', 'Eko Kiswanto, Sabri, Ahmed Gibran Coreda', 'Instalasi UT SKP', '', 'suhail@garudamart.com', '', '17:00', '19:00', 'mel.jpg'),
(273, 'SPL-GMI-21-0185', '08-Jun-2021 15:42:57', '2', 'Meilissa', 'meilissa@garudamart.com', 'Tue 08-Jun-2021', 'Tue 08-Jun-2021', '13', 'Ahmad Sugiyanto, Muhamad Risman', 'COMMISIONING TRAKINDO', '', 'suhail@garudamart.com', '', '17:00', '19:00', 'mel.jpg'),
(275, 'SPL-GMI-21-0187', '08-Jun-2021 15:44:05', '2', 'Meilissa', 'meilissa@garudamart.com', 'Tue 08-Jun-2021', 'Tue 08-Jun-2021', '13', 'Toto Nihyana, M. Suhail S, Iwan Ase', 'Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(276, 'SPL-GMI-21-0188', '08-Jun-2021 16:26:42', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Tue 08-Jun-2021', 'Tue 08-Jun-2021', '18', 'Aceng , Sunyoto, Heri ', 'harnes fatique warning', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(277, 'SPL-GMI-21-0189', '09-Jun-2021 13:12:49', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Wed 09-Jun-2021', 'Wed 09-Jun-2021', '18', 'Aceng, Sunyoto, Kefi, Felix, Supandi, Alek, Heri, RIYANTO', 'pabrikasi : bracket loto ridhan, manufaktur : repair harnes spmc 777 &amp; fatique warning , felix : job costing', '', 'aceng@garudamart.com', '', '17:00', '21:30', 'felix.jpg'),
(278, 'SPL-GMI-21-0190', '09-Jun-2021 13:35:11', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Wed 09-Jun-2021', 'Wed 09-Jun-2021', '2', 'Bennedita Tambunan', 'Input List DO-IT', '', 'bunga@garudamart.com', '', '18:00', '21:30', 'dita.jpg'),
(279, 'SPL-GMI-21-0191', '09-Jun-2021 13:56:42', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Wed 09-Jun-2021', 'Wed 09-Jun-2021', '2', 'Bunga Ratnani', 'arrange ulang jobdesc, kalkulasi SPMC', '', 'bunga@garudamart.com', '', '17:00', '20:30', 'bunga.jpg'),
(280, 'SPL-GMI-21-0192', '09-Jun-2021 14:28:03', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Wed 09-Jun-2021', 'Wed 09-Jun-2021', '1', 'Hulda Vincensia Masiglaat', 'Lanjut input transaksi bank 647', '', 'anisa@garudamart.com', '', '18:00', '21:30', 'hulda.jpg'),
(281, 'SPL-GMI-21-0193', '09-Jun-2021 15:52:07', '', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Wed 09-Jun-2021', 'Wed 09-Jun-2021', '2', 'Vincentia Hanna Wibowo', 'Kalkulasi PO GIS', '', 'bunga@garudamart.com', '', '17:00', '21:30', 'tia.jpg'),
(282, 'SPL-GMI-21-0194', '09-Jun-2021 16:25:30', '2', 'Meilissa', 'meilissa@garudamart.com', 'Wed 09-Jun-2021', 'Wed 09-Jun-2021', '13', 'Toto, Sabri, Iwan ', 'Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '17:00', '19:00', 'mel.jpg'),
(284, 'SPL-GMI-21-0196', '10-Jun-2021 14:21:44', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Thu 10-Jun-2021', 'Thu 10-Jun-2021', '2', 'Silvalescha Astarani, Vincentia Hanna Wibowo', 'Tia : Cek laporan DM Amanda; Silva : Training Rizky untuk rekap laporan gudang', '', 'bunga@garudamart.com', '', '18:30', '22:00', 'tia.jpg'),
(285, 'SPL-GMI-21-0197', '10-Jun-2021 14:30:51', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Thu 10-Jun-2021', 'Thu 10-Jun-2021', '14', 'Amanda Maghfiroh Chairani, Rizky Bangkit Andrian', 'Rizky: Prepare data Meeting 11 Juni 2021 || Amanda: Revisi Rumus List Stock', '', 'yoseph@garudamart.com', '', '18:00', '22:00', 'manda.jpg'),
(286, 'SPL-GMI-21-0198', '10-Jun-2021 14:32:40', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Thu 10-Jun-2021', 'Thu 10-Jun-2021', '2', 'Bennedita Tambunan', 'Lanjut update list DO-IT', '', 'bunga@garudamart.com', '', '17:00', '22:00', 'dita.jpg'),
(287, 'SPL-GMI-21-0199', '10-Jun-2021 15:56:08', '2', 'Meilissa', 'meilissa@garudamart.com', 'Thu 10-Jun-2021', 'Thu 10-Jun-2021', '13', 'Toto, Iwan, Eko, Sabri', 'Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '17:00', '19:00', 'mel.jpg'),
(288, 'SPL-GMI-21-0200', '10-Jun-2021 16:53:49', '', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 10-Jun-2021', 'Thu 10-Jun-2021', '18', 'Aceng, Sunyoto, Kefi, Supandi, Alek, Heri, RIYANTO', 'all bracket, fatique warning&amp; harnes spmc pc 2000', '', 'aceng@garudamart.com', '', '17:00', '22:00', 'felix.jpg'),
(289, 'SPL-GMI-21-0201', '11-Jun-2021 13:43:33', '4', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Sat 12-Jun-2021', 'Sat 12-Jun-2021', '1', 'Hulda Vincensia Masiglaat', 'Update semua bank di accurate bulan Mei 2021', '', 'Anisa@garudamart.com', 'cancel byHulda', '09:00', '17:00', 'hulda.jpg'),
(290, 'SPL-GMI-21-0202', '11-Jun-2021 15:12:17', '4', 'Meilissa', 'meilissa@garudamart.com', 'Fri 11-Jun-2021', 'Fri 11-Jun-2021', '13', 'M. Suhail S, Ahmad Sugiyanto, Kanisius Kefi, Ahmed Gibran Coreda', 'Instalasi UT SKP HD785', '', 'suhail@garudamart.com', '', '17:00', '19:00', 'mel.jpg'),
(291, 'SPL-GMI-21-0203', '11-Jun-2021 15:14:25', '2', 'Alfons Vicky Daniels', 'alfons@garudamart.com', 'Sat 12-Jun-2021', 'Sat 12-Jun-2021', '14', 'Alfons Vicky Daniels', 'Prepare, packing dan delivery barang Putra Perkasa Abadi dan gudang Jakarta, dan laporan mingguan', '', 'rizky@garudamart.com', '', '08:00', '17:00', 'alfons.jpg'),
(292, 'SPL-GMI-21-0204', '11-Jun-2021 16:36:55', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Fri 11-Jun-2021', 'Fri 11-Jun-2021', '23', 'Aceng, Sunyoto, Kefi, Darkim, Supandi, Heri, RIYANTO', 'Manuf: Lotobox 2 system scania, harnes reverse, harnes fatique warning | Fabrikasi: loto box 3 system, bracket strobe, bracket switch box', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(293, 'SPL-GMI-21-0205', '11-Jun-2021 17:02:38', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 12-Jun-2021', 'Sat 12-Jun-2021', '23', 'Aceng, Sunyoto, Kefi, Darkim, Supandi, Heri, RIYANTO', 'Manuf: Lotobox 2 system scania, harnes reverse, harnes fatique warning | Fabrikasi: loto box 3 system, bracket strobe, bracket switch box', '', 'aceng@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(294, 'SPL-GMI-21-0206', '11-Jun-2021 17:14:31', '', 'Azwita Febriyanti', 'wita@garudamart.com', 'Sat 12-Jun-2021', 'Sat 12-Jun-2021', '1', 'Azwita Febriyanti', 'Tarik All DO Gantung GIS ke invoice (untuk Next payment GIS)', '', 'anisa@garudamart.com', '', '08:00', '15:00', 'wita.jpg'),
(296, 'SPL-GMI-21-0208', '14-Jun-2021 16:02:20', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Mon 14-Jun-2021', 'Mon 14-Jun-2021', '23', 'Ferdianus Lambe Manggasa', 'bantu Beni packing kayu untuk kirim barang ke PT. BUMA (GIS)', '', 'anna@garudamart.com', '', '17:00', '03:05', 'inggrid.jpg'),
(297, 'SPL-GMI-21-0209', '15-Jun-2021 08:29:29', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Mon 14-Jun-2021', 'Mon 14-Jun-2021', '23', 'Amanda Maghfiroh Chairani', 'Laporan week 2 dan perbaikan list stock ', '', 'rizky@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(298, 'SPL-GMI-21-0210', '15-Jun-2021 08:40:49', '2', 'Meilissa', 'meilissa@garudamart.com', 'Mon 14-Jun-2021', 'Mon 14-Jun-2021', '13', 'Toto Nihyana, M. Suhail S, Iwan Ase, Eko Kiswanto, Sabri', 'Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '17:00', '19:30', 'mel.jpg'),
(299, 'SPL-GMI-21-0211', '15-Jun-2021 09:49:41', '2', 'Andreas Jasri Siringo-ringo', 'ringo@garudamart.com', 'Fri 11-Jun-2021', 'Fri 11-Jun-2021', '15', 'Andreas Jasri Siringo-ringo', 'Mencari Mesin Las Co2', '', 'inggrid@garudamart.com', '', '17:00', '21:00', 'ringo.jpg'),
(300, 'SPL-GMI-21-0212', '15-Jun-2021 13:08:49', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Tue 15-Jun-2021', 'Tue 15-Jun-2021', '2', 'Bennedita Tambunan', 'Review Report Mingguan Gudang dan Input List DO-IT', '', 'bunga@garudamart.com', '', '17:00', '21:09', 'dita.jpg'),
(302, 'SPL-GMI-21-0214', '15-Jun-2021 13:27:53', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Tue 15-Jun-2021', 'Tue 15-Jun-2021', '2', 'Silvalescha Astarani', 'Revisi Laporan Inventory 4 Juni', '', 'bunga@garudamart.com', '', '17:00', '21:00', 'dita.jpg'),
(303, 'SPL-GMI-21-0215', '15-Jun-2021 14:30:03', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Tue 15-Jun-2021', 'Tue 15-Jun-2021', '1', 'Hulda Vincensia Masiglaat', 'Update semua bank di accurate', '', 'Anisa@garudamart.com', '', '18:00', '21:30', 'hulda.jpg'),
(305, 'SPL-GMI-21-0217', '15-Jun-2021 14:31:54', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Tue 15-Jun-2021', 'Tue 15-Jun-2021', '14', 'Amanda Maghfiroh Chairani, Rizky Bangkit Andrian', 'Rizky: Membuat Laporan Inventory || Amanda: Revisi Rumus List Stock', '', 'yoseph@garudamart.com', '', '18:00', '21:00', 'manda.jpg'),
(306, 'SPL-GMI-21-0218', '15-Jun-2021 14:35:02', '2', 'Meilissa', 'meilissa@garudamart.com', 'Tue 15-Jun-2021', 'Tue 15-Jun-2021', '13', 'Toto Nihyana, Iwan Ase, Eko Kiswanto, Sabri', 'Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '17:00', '19:30', 'mel.jpg'),
(307, 'SPL-GMI-21-0219', '15-Jun-2021 14:38:19', '2', 'Meilissa', 'meilissa@garudamart.com', 'Tue 15-Jun-2021', 'Tue 15-Jun-2021', '13', 'Ahmad Sugiyanto, Surya Dinata', 'Instalasi SPMC Trakindo', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(308, 'SPL-GMI-21-0220', '16-Jun-2021 14:44:39', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Wed 16-Jun-2021', 'Wed 16-Jun-2021', '14', 'Amanda Maghfiroh Chairani', 'Revisi List Stock (6L, dll) dan Sheet New (4L11 dll)', '', 'yoseph@garudamart.com', '', '18:00', '21:00', 'manda.jpg'),
(309, 'SPL-GMI-21-0221', '16-Jun-2021 15:05:58', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Wed 16-Jun-2021', 'Wed 16-Jun-2021', '2', 'Vincentia Hanna Wibowo', 'Kalkulasi PO GIS', '', 'bunga@garudamart.com', '', '18:00', '21:00', 'tia.jpg'),
(310, 'SPL-GMI-21-0222', '16-Jun-2021 15:10:36', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Wed 16-Jun-2021', 'Wed 16-Jun-2021', '18', 'Aceng, Sunyoto, Kefi, Darkim, Supandi, Alek , Heri , RIYANTO', 'Lotobox 3 system ', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(311, 'SPL-GMI-21-0223', '16-Jun-2021 15:34:24', '2', 'Meilissa', 'meilissa@garudamart.com', 'Wed 16-Jun-2021', 'Wed 16-Jun-2021', '13', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto', 'Instalasi UT Jababeka', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(312, 'SPL-GMI-21-0224', '16-Jun-2021 15:35:30', '2', 'Meilissa', 'meilissa@garudamart.com', 'Wed 16-Jun-2021', 'Wed 16-Jun-2021', '13', 'Iwan Ase, Eko Kiswanto, Sabri', 'Instalasi UT SKP', '', 'suhail@garudamart.com', '', '17:00', '19:00', 'mel.jpg'),
(313, 'SPL-GMI-21-0225', '16-Jun-2021 17:22:03', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Wed 16-Jun-2021', 'Wed 16-Jun-2021', '2', 'Bennedita Tambunan,  Ilvan ', 'Ke cargo garuda  driver igho', '', 'bunga@garudamart.com', '', '17:00', '21:30', 'dita.jpg'),
(314, 'SPL-GMI-21-0226', '17-Jun-2021 15:46:17', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Thu 17-Jun-2021', 'Thu 17-Jun-2021', '14', 'Amanda , Rizky', 'Rizky: Laporan Inventory ||  Amanda: Lanjutin Revisi List Stock dan Sheet NEW', '', 'yoseph@garudamart.com', '', '18:00', '21:00', 'manda.jpg'),
(315, 'SPL-GMI-21-0227', '17-Jun-2021 15:55:11', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 17-Jun-2021', 'Thu 17-Jun-2021', '18', 'Sunyoto, Heri ', 'All bracket &amp; Fatique warning', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(316, 'SPL-GMI-21-0228', '17-Jun-2021 15:56:07', '2', 'Meilissa', 'meilissa@garudamart.com', 'Thu 17-Jun-2021', 'Thu 17-Jun-2021', '13', 'Toto Nihyana, Eko Kiswanto', 'Instalasi UT Jababeka', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(317, 'SPL-GMI-21-0229', '17-Jun-2021 16:00:48', '2', 'Meilissa', 'meilissa@garudamart.com', 'Thu 17-Jun-2021', 'Thu 17-Jun-2021', '13', 'Suhail, Sugiyanto, Iwan, Kefi, Sabri', 'Instalasi UT SKP', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(319, 'SPL-GMI-21-0230', '18-Jun-2021 11:09:12', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Fri 18-Jun-2021', 'Fri 18-Jun-2021', '18', 'Violentino Felix Ardiyanto Utoyo', 'jobcosting', '', 'aceng@garudamart.com', '', '17:00', '19:45', 'felix.jpg'),
(320, 'SPL-GMI-21-0231', '18-Jun-2021 11:10:29', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sat 19-Jun-2021', 'Sat 19-Jun-2021', '18', 'Aceng, Sunyoto, Kefi, Darkim, Supandi, Heri, RIYANTO', 'all bracket &amp; fstique warning', '', 'aceng@garudamart.com', '', '08:00', '17:00', 'felix.jpg'),
(321, 'SPL-GMI-21-0232', '18-Jun-2021 14:19:05', '4', 'Bennedita Tambunan', 'dita@garudamart.com', 'Sat 19-Jun-2021', 'Sat 19-Jun-2021', '2', 'Bennedita Tambunan', 'failing DO,PO,IT', '', 'bunga@garudamart.com', '', '08:05', '17:19', 'dita.jpg'),
(322, 'SPL-GMI-21-0233', '18-Jun-2021 16:12:19', '4', 'Meilissa', 'meilissa@garudamart.com', 'Fri 18-Jun-2021', 'Fri 18-Jun-2021', '13', 'Ahmad Sugiyanto, Iwan Ase, Sabri', 'Instalasi UT SKP - UT Cakung', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(323, 'SPL-GMI-21-0234', '18-Jun-2021 17:25:20', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 19-Jun-2021', 'Sun 20-Jun-2021', '23', 'Meilissa, Mu Inggrid', 'Absensi', '', 'anna@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(324, 'SPL-GMI-21-0235', '18-Jun-2021 17:55:56', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Fri 18-Jun-2021', 'Fri 18-Jun-2021', '2', 'Bennedita Tambunan, Mohamad Ilvan Ridhoni', 'Anter barang ke cargo garuda', '', 'bunga@garudamart.com', '', '17:00', '21:00', 'dita.jpg'),
(325, 'SPL-GMI-21-0236', '20-Jun-2021 10:14:46', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Sun 20-Jun-2021', 'Sun 20-Jun-2021', '14', 'Rizky Bangkit Andrian', 'Penyemprotan disinfektan', '', 'yoseph@garudamart.com', '', '10:00', '12:00', 'cowo1.jpg'),
(326, 'SPL-GMI-21-0237', '21-Jun-2021 14:14:29', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 21-Jun-2021', 'Mon 21-Jun-2021', '18', 'Aceng, Sunyoto, Kefi, Darkim, Alek, Heri, RIYANTO', 'pabrikasi : bracket pbt &amp; manufaktur = harnes spmc hd785', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(327, 'SPL-GMI-21-0238', '21-Jun-2021 15:27:32', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Mon 21-Jun-2021', 'Mon 21-Jun-2021', '2', 'Bennedita Tambunan', 'failing DO,PO,IT', '', 'bunga@garudamart.com', '', '17:00', '22:00', 'dita.jpg'),
(328, 'SPL-GMI-21-0239', '21-Jun-2021 16:11:45', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Mon 21-Jun-2021', 'Mon 21-Jun-2021', '14', 'Amanda Maghfiroh Chairani', 'Laporan Mingguan Week 3', '', 'yoseph@garudamart.com', '', '18:00', '21:43', 'manda.jpg'),
(329, 'SPL-GMI-21-0240', '21-Jun-2021 16:54:52', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Mon 21-Jun-2021', 'Mon 21-Jun-2021', '23', 'Mu Inggrid', 'Absensi', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(330, 'SPL-GMI-21-0241', '22-Jun-2021 11:35:21', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Tue 22-Jun-2021', 'Tue 22-Jun-2021', '18', 'Aceng, Sunyoto, Kefi, Darkim, Alek, Heri, RIYANTO', 'all bracket &amp; harnes spmc 777', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(331, 'SPL-GMI-21-0242', '23-Jun-2021 15:29:00', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Wed 23-Jun-2021', 'Wed 23-Jun-2021', '14', 'Rizky Bangkit Andrian', 'Laporan inventory', '', 'yoseph@garudamart.com', '', '17:00', '20:00', 'cowo1.jpg'),
(332, 'SPL-GMI-21-0243', '23-Jun-2021 16:12:10', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Wed 23-Jun-2021', 'Wed 23-Jun-2021', '18', 'Aceng, Sunyoto, Kefi, Darkim, Supandi , Heri , RIYANTO', 'bracket ssb , pegasus &amp; harnes spmc 777', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(333, 'SPL-GMI-21-0244', '24-Jun-2021 14:00:03', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 24-Jun-2021', 'Thu 24-Jun-2021', '18', 'Aceng, Sunyoto, Kefi, Felix, Darkim, Supandi, Alek, Heri, RIYANTO', 'Pabrikasi : all bracket | manufaktur : harnes spmc 777 nana &amp; rismanto | Felix : Jobcosting', '', 'aceng@garudamart.com', '', '17:00', '21:46', 'felix.jpg'),
(334, 'SPL-GMI-21-0245', '24-Jun-2021 15:01:26', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Thu 24-Jun-2021', 'Thu 24-Jun-2021', '23', 'Sugiyanto, Eko, Sabri, Toto, Huda', 'pengerjaan HD777 trakindo (bersama Debi dan Cahyadi)', '', 'anna@garudamart.com', '', '17:00', '19:32', 'inggrid.jpg'),
(335, 'SPL-GMI-21-0246', '24-Jun-2021 15:05:13', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Wed 23-Jun-2021', 'Wed 23-Jun-2021', '23', 'Iwan Ase, Eko Kiswanto, Sabri', 'Gd755 di SKP', '', 'anna@garudamart.com', '', '17:30', '18:30', 'inggrid.jpg'),
(336, 'SPL-GMI-21-0247', '25-Jun-2021 13:38:34', '2', 'Andreas Jasri Siringo-ringo', 'ringo@garudamart.com', 'Sat 26-Jun-2021', 'Sat 26-Jun-2021', '15', 'Andreas Jasri Siringo-ringo', 'NGERJAIN CSMS', '', 'inggrid@garudamart.com', '', '10:10', '00:00', 'ringo.jpg'),
(337, 'SPL-GMI-21-0248', '25-Jun-2021 14:45:15', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Fri 25-Jun-2021', 'Fri 25-Jun-2021', '18', 'Kanisius Kefi, Supandi Irawan, Alek Gunawan, SLAMET RIYANTO', 'Pabrikasi : bracket 3 system', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(338, 'SPL-GMI-21-0249', '25-Jun-2021 14:47:25', '', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sat 26-Jun-2021', 'Sat 26-Jun-2021', '18', 'Aceng, Sunyoto, Kefi, Darkim, Supandi , Alek , Heri, RIYANTO, Nana, Rusmanto', 'pabrikasi : bracket 3 system &amp; 1 system manufaktur : spmc 785 &amp; dz375', '', 'aceng@garudamart.com', '', '08:00', '21:00', 'felix.jpg'),
(339, 'SPL-GMI-21-0250', '25-Jun-2021 14:50:52', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Sat 26-Jun-2021', 'Sat 26-Jun-2021', '2', 'Bennedita Tambunan', 'Update List DO-IT dan Lanjut Failing Dokumen', '', 'bunga@garudamart.com', '', '08:00', '17:30', 'dita.jpg'),
(341, 'SPL-GMI-21-0252', '25-Jun-2021 14:50:14', '', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Fri 25-Jun-2021', 'Fri 25-Jun-2021', '18', 'Sunyoto, Heri ', 'harnes spmc 777 ', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(342, 'SPL-GMI-21-0253', '25-Jun-2021 15:46:26', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Fri 25-Jun-2021', 'Fri 25-Jun-2021', '23', 'Toto Nihyana, Ahmad Sugiyanto, Eko Kiswanto, Ahmad Haerul Huda, Sabri', 'Trakindo (Debi dan Cahyadi)', '', 'anna@garudamart.com', '', '17:00', '19:00', 'inggrid.jpg'),
(343, 'SPL-GMI-21-0254', '25-Jun-2021 14:53:56', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Sat 26-Jun-2021', 'Sat 26-Jun-2021', '14', 'Amanda Maghfiroh Chairani', 'Laporan Week 4 (21-25 Juni 2021)', '', 'yoseph@garudamart.com', '', '09:00', '17:30', 'manda.jpg'),
(344, 'SPL-GMI-21-0255', '26-Jun-2021 17:53:37', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sun 27-Jun-2021', 'Sun 27-Jun-2021', '18', 'Aceng Rusnadi, Sunyoto, Heri Setiawan', 'Revisi pengerjaan lotobox 3 system buat spk senin', '', 'aceng@garudamart.com', '', '08:00', '17:00', 'felix.jpg'),
(345, 'SPL-GMI-21-0256', '28-Jun-2021 16:12:46', '', 'Mu Inggrid', 'inggrid@garudamart.com', 'Mon 28-Jun-2021', 'Mon 28-Jun-2021', '23', 'Toto Nihyana, Ahmad Sugiyanto, Eko Kiswanto, Debi', 'Instalasi SKP', '', 'anna@garudamart.com', '', '05:00', '07:00', 'inggrid.jpg'),
(346, 'SPL-GMI-21-0257', '28-Jun-2021 16:23:05', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Mon 28-Jun-2021', 'Mon 28-Jun-2021', '23', 'Ahmad Haerul Huda, Sabri', 'Instalasi di Tangerang (dengan Cahyadi)', '', 'anna@garudamart.com', '', '05:00', '07:00', 'inggrid.jpg'),
(347, 'SPL-GMI-21-0258', '29-Jun-2021 15:41:25', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Tue 29-Jun-2021', 'Tue 29-Jun-2021', '23', 'Ahmad Haerul Huda, Sabri', ' Scania di PT SSB balaraja (dengan Cahyadi)', '', 'anna@garudamart.com', '', '17:00', '19:00', 'inggrid.jpg'),
(348, 'SPL-GMI-21-0259', '29-Jun-2021 15:46:18', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Tue 29-Jun-2021', 'Tue 29-Jun-2021', '2', 'Bennedita Tambunan', 'Review laporan mingguan All gudang', '', 'bunga@garudamart.com', '', '17:00', '22:11', 'dita.jpg'),
(349, 'SPL-GMI-21-0260', '29-Jun-2021 15:53:15', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Tue 29-Jun-2021', 'Tue 29-Jun-2021', '14', 'Amanda Maghfiroh Chairani', 'Jobcosting Barang dan Revisi Laporan Week 4', '', 'yoseph@garudamart.com', '', '18:00', '22:11', 'manda.jpg'),
(350, 'SPL-GMI-21-0261', '29-Jun-2021 15:59:54', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Tue 29-Jun-2021', 'Tue 29-Jun-2021', '1', 'Hulda Vincensia Masiglaat', 'Menyiapkan surat tugas dan spk, buat form BAST dan komisioning', '', 'Hulda@garudamart.com', '', '18:00', '22:11', 'hulda.jpg'),
(351, 'SPL-GMI-21-0262', '29-Jun-2021 18:04:29', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Tue 29-Jun-2021', 'Tue 29-Jun-2021', '23', 'Ahmad Sugiyanto, DEBI NUR WIBOWO', 'SPMC Trakindo Cakung', '', 'anna@garudamart.com', '', '17:00', '19:00', 'inggrid.jpg'),
(352, 'SPL-GMI-21-0263', '30-Jun-2021 16:58:01', '2', 'Andreas Jasri Siringo-ringo', 'ringo@garudamart.com', '2021-10-17', 'Wed 30-Jun-2021', '15', 'Andreas Jasri Siringo-ringo', 'Submit CSMS', '', 'inggrid@garudamart.com', '', '18:00', '19:00', 'ringo.jpg'),
(353, 'SPL-GMI-21-0264', '30-Jun-2021 17:35:13', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Tue 30-Jun-2020', 'Wed 30-Jun-2021', '23', 'Toto Nihyana, Ahmad Sugiyanto, Eko Kiswanto, Ahmad Haerul Huda, Sabri, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi UT SKP', '', 'anna@garudamart.com', '', '17:00', '19:00', 'inggrid.jpg'),
(354, 'SPL-GMI-21-0265', '01-Jul-2021 15:49:15', '4', 'Bennedita Tambunan', 'dita@garudamart.com', 'Thu 01-Jul-2021', 'Thu 01-Jul-2021', '2', 'Bennedita Tambunan, Mohamad Ilvan Ridhoni', 'Anter barang ke Cargo Bandara (Driver Igho)', '', 'rizky@garudamart.com', '', '17:00', '21:30', 'dita.jpg'),
(355, 'SPL-GMI-21-0266', '01-Jul-2021 15:59:41', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Thu 01-Jul-2021', 'Thu 01-Jul-2021', '14', 'Rizky Bangkit Andrian', 'Laporan inventory tanggal 25 Juni', '', 'yoseph@garudamart.com', '', '17:00', '20:00', 'rizky.jpg'),
(356, 'SPL-GMI-21-0267', '02-Jul-2021 13:04:11', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Sat 03-Jul-2021', 'Sat 03-Jul-2021', '2', 'Bennedita Tambunan', 'Input List DO-IT dan List Serial Number', '', 'bunga@garudamart.com', '', '08:04', '17:30', 'dita.jpg'),
(357, 'SPL-GMI-21-0268', '02-Jul-2021 15:45:21', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Sat 03-Jul-2021', 'Sat 03-Jul-2021', '1', 'Hulda Vincensia Masiglaat', 'Input transaksi bank', '', 'sulissetia@garudamart.com', '', '08:00', '17:30', 'hulda.jpg'),
(358, 'SPL-GMI-21-0269', '02-Jul-2021 16:05:13', '', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 03-Jul-2021', 'Sat 03-Jul-2021', '23', 'Alfons Vicky Daniels', 'Tunggu dan ambil barang di Cargo, laporan data manual, packing&amp;kirim barang untuk WH JKT, packing barang utk supply KPP hari Senin', '', 'anna@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(359, 'SPL-GMI-21-0270', '02-Jul-2021 17:02:49', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sat 03-Jul-2021', 'Sat 03-Jul-2021', '18', 'Aceng Rusnadi', 'pengambilang barang di cjm', '', 'aceng@garudamart.com', '', '08:00', '17:54', 'felix.jpg'),
(360, 'SPL-GMI-21-0271', '02-Jul-2021 17:06:44', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Fri 02-Jul-2021', 'Fri 02-Jul-2021', '23', 'Ahmad Haerul Huda, CAHYADI SETIAWAN', 'Commisioning Unit Scania BUMA dengan org SSB', '', 'anna@garudamart.com', '', '17:00', '19:00', 'inggrid.jpg'),
(361, 'SPL-GMI-21-0272', '05-Jul-2021 15:34:41', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 05-Jul-2021', 'Mon 05-Jul-2021', '18', 'Sunyoto, Kefi, Darkim, Her , RIYANTO, Nana, RUSMANTO', 'bracket lotobox sabat &amp; harnes spmc anderson', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(362, 'SPL-GMI-21-0273', '05-Jul-2021 17:59:21', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Mon 05-Jul-2021', 'Mon 05-Jul-2021', '23', 'Toto Nihyana, Ahmad Haerul Huda, Sabri, CAHYADI SETIAWAN', 'Intalasi SKP', '', 'anna@garudamart.com', '', '17:00', '19:00', 'inggrid.jpg'),
(363, 'SPL-GMI-21-0274', '06-Jul-2021 15:08:52', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Tue 06-Jul-2021', 'Tue 06-Jul-2021', '18', 'Sunyoto, Kefi, Felix, Supandi ,Heri, RIYANTO', 'Bracket lotobox sabat , assy lotobox ridhan ,spmc D8T , jobcosting', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(364, 'SPL-GMI-21-0275', '08-Jul-2021 16:53:03', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 08-Jul-2021', 'Thu 08-Jul-2021', '18', 'Kefi, Felix , RIYANTO', 'Bracket lotobox  , assy lotobox ridhan  , jobcosting', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(365, 'SPL-GMI-21-0276', '09-Jul-2021 14:38:55', '2', 'ALFONS', 'shintaminii027@gmail.com', 'Fri 09-Jul-2021', 'Fri 09-Jul-2021', '15', 'Alfons, Ferdianus', 'Stiker waranty, test 207 lampu, tempel stiker PN, packing kayu (Project GIS)', '', 'inggrid@garudamart.com', '', '17:00', '22:00', 'sinta.jpg'),
(366, 'SPL-GMI-21-0277', '09-Jul-2021 14:49:55', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Sat 10-Jul-2021', 'Sat 10-Jul-2021', '2', 'Bennedita Tambunan', 'Failing dokumen', '', 'bunga@garudamart.com', '', '08:00', '14:30', 'dita.jpg'),
(367, 'SPL-GMI-21-0278', '09-Jul-2021 14:55:36', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Sat 10-Jul-2021', 'Sat 10-Jul-2021', '14', 'Amanda Maghfiroh Chairani', 'Laporan Mingguan 9 Juli 2021 ', '', 'yoseph@garudamart.com', '', '09:00', '17:30', 'manda.jpg'),
(368, 'SPL-GMI-21-0279', '09-Jul-2021 15:05:29', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 10-Jul-2021', 'Sat 10-Jul-2021', '23', 'Alfons Vicky Daniels', 'Update Data manual, Packing Barang KPP', '', 'anna@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(369, 'SPL-GMI-21-0280', '09-Jul-2021 15:06:51', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 10-Jul-2021', 'Sat 10-Jul-2021', '23', 'Alberthus Tandek', 'Manufacture Fatique', '', 'anna@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(371, 'SPL-GMI-21-0282', '09-Jul-2021 15:16:43', '2', 'Azwita Febriyanti', 'wita@garudamart.com', 'Sat 10-Jul-2021', 'Sat 10-Jul-2021', '1', 'Azwita Febriyanti', 'Mengerjakan invoice Customer Pending Juni 2021', '', 'anisa@garudamart.com', '', '09:15', '17:30', 'wita.jpg'),
(372, 'SPL-GMI-21-0283', '09-Jul-2021 15:26:41', '2', 'Meilissa', 'meilissa@garudamart.com', 'Sat 10-Jul-2021', 'Sun 11-Jul-2021', '13', 'Toto Nihyana, Eko Kiswanto, Ahmad Haerul Huda, Kanisius Kefi, Sabri, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi UT SKP PC1250 &amp; HM400', '', 'suhail@garudamart.com', '', '08:00', '17:00', 'mel.jpg'),
(373, 'SPL-GMI-21-0284', '09-Jul-2021 17:30:38', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sat 10-Jul-2021', 'Sat 10-Jul-2021', '18', 'Sunyoto, Heri, Darkim, Nana, Rismanto', 'Siapin sparepart buat gis ', '', 'aceng@garudamart.com', '', '08:00', '12:00', 'felix.jpg'),
(374, 'SPL-GMI-21-0285', '12-Jul-2021 15:29:13', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 12-Jul-2021', 'Mon 12-Jul-2021', '18', 'Sunyoto, Kefi, Darkim, RIYANTO, Nana, RUSMANTO', 'SPMC D8T', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(375, 'SPL-GMI-21-0286', '13-Jul-2021 16:41:29', '2', 'Meilissa', 'meilissa@garudamart.com', 'Tue 13-Jul-2021', 'Tue 13-Jul-2021', '13', 'Toto Nihyana, M. Suhail S, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi SPMC Trakindo', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(376, 'SPL-GMI-21-0287', '13-Jul-2021 18:27:23', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Tue 13-Jul-2021', 'Tue 13-Jul-2021', '13', 'Risman, Gibran ', '-induksi di pama MTBU  -minitoring  -backup assembly (job GIS)  ', '', 'suhail@garudamart.com', '', '07:00', '18:20', 'risman.jpg'),
(378, 'SPL-GMI-21-0289', '14-Jul-2021 17:01:48', '2', 'Meilissa', 'meilissa@garudamart.com', 'Wed 14-Jul-2021', 'Wed 14-Jul-2021', '13', 'Toto Nihyana, M. Suhail S, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi SPMC Trakindo', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(379, 'SPL-GMI-21-0290', '14-Jul-2021 19:05:29', '', 'Muhamad Risman', 'risman.omod@gmail.com', 'Wed 14-Jul-2021', 'Wed 14-Jul-2021', '13', 'Risman, Gibran ', ' cek spmc HD 785 : DT 4566 ( Set auto lamp eng run : onlybcn)  &gt; cek koneksi DT 4566 : fog lam, fwd lamp, strobe lamp, key sw, Autolube, Fire supp, lotto &gt; download spmc DT 4566, 4564  ', '', 'suhail@garudamart.com', '', '07:00', '19:00', 'risman.jpg'),
(380, 'SPL-GMI-21-0291', '15-Jul-2021 11:28:03', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 15-Jul-2021', 'Thu 15-Jul-2021', '18', 'Kefi, Felix , RIYANTO', 'Jobcosting pabrikasi all bracket', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(381, 'SPL-GMI-21-0292', '15-Jul-2021 15:38:48', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Thu 15-Jul-2021', 'Thu 15-Jul-2021', '23', 'Ferdianus Lambe Manggasa', 'tempel stiker SN+PN, test lampu 83 ea,packing kayu (bantu Beni GIS)', '', 'anna@garudamart.com', '', '17:00', '00:18', 'inggrid.jpg'),
(382, 'SPL-GMI-21-0293', '16-Jul-2021 10:27:32', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Sat 17-Jul-2021', 'Sat 17-Jul-2021', '14', 'Jacky Haryanto, Angga Prayoga, Mohamad Ilvan Ridhoni, Muhammad Rivaldi, Rizky Bangkit Andrian', 'merapihkan area gudang (5s) &amp; pengerjaan part harnes hd785 untuk vendor', '', 'yoseph@garudamart.com', '', '08:00', '17:00', 'rizky.jpg'),
(383, 'SPL-GMI-21-0294', '16-Jul-2021 14:38:07', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Sat 17-Jul-2021', 'Sat 17-Jul-2021', '2', 'Bennedita Tambunan', 'Lanjut failing Dokumen', '', 'bunga@garudamart.com', '', '09:30', '15:00', 'dita.jpg'),
(384, 'SPL-GMI-21-0295', '16-Jul-2021 15:53:41', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Fri 16-Jul-2021', 'Fri 16-Jul-2021', '14', 'Rizky Bangkit Andrian', 'export accurate tgl 16 juli', '', 'rizky@garudamart.com', '', '17:00', '20:00', 'rizky.jpg'),
(385, 'SPL-GMI-21-0296', '16-Jul-2021 15:58:05', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Fri 16-Jul-2021', 'Sat 17-Jul-2021', '18', 'Felix, Sunyoto, Heri', 'Felix 16-17: jobcosting &amp; bikin jo  | Sunoto&amp;Heri : harnes SPMC', '', 'aceng@garudamart.com', '', '17:00', '20:00', 'felix.jpg'),
(386, 'SPL-GMI-21-0297', '16-Jul-2021 16:00:15', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sat 17-Jul-2021', 'Sat 17-Jul-2021', '18', 'Kefi, Darkim, SLAMET, Nana, RUSMANTO', 'all bracket &amp; harnes spmc d8T', '', 'aceng@garudamart.com', 'cancel byHulda', '08:00', '17:00', 'felix.jpg'),
(387, 'SPL-GMI-21-0298', '16-Jul-2021 16:12:42', '4', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 17-Jul-2021', 'Sat 17-Jul-2021', '23', 'Alfons Vicky Daniels', 'laporan data manual', '', 'anna@garudamart.com', '', '08:00', '12:00', 'inggrid.jpg'),
(388, 'SPL-GMI-21-0299', '16-Jul-2021 18:51:31', '2', 'Meilissa', 'meilissa@garudamart.com', 'Fri 16-Jul-2021', 'Fri 16-Jul-2021', '13', 'Ahmad Haerul Huda', 'Commisioning SPMC Trakindo', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(389, 'SPL-GMI-21-0300', '16-Jul-2021 18:51:56', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Fri 16-Jul-2021', 'Fri 16-Jul-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', 'Cek spmc DZ1144 : DC-DC short ( ganti dc converter baru) &gt; Cek harness &amp; cek koneksi DZ1144 : lottobox, lampu, autolube, radio, fire suppresion  (job GIS)', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(390, 'SPL-GMI-21-0301', '16-Jul-2021 21:41:59', '2', 'Meilissa', 'meilissa@garudamart.com', 'Sat 17-Jul-2021', 'Sat 17-Jul-2021', '13', 'Toto Nihyana, Ahmad Haerul Huda', 'Commisioning SPMC Trakindo ganti switchbox SPMC', '', 'suhail@garudamart.com', '', '08:00', '17:00', 'mel.jpg'),
(391, 'SPL-GMI-21-0302', '19-Jul-2021 14:02:12', '2', 'Meilissa', 'meilissa@garudamart.com', 'Mon 19-Jul-2021', 'Mon 19-Jul-2021', '13', 'Meilissa', 'INVOICE KPP DAN UT (BAST)', '', 'suhail@garudamart.com', '', '18:00', '20:27', 'mel.jpg'),
(392, 'SPL-GMI-21-0303', '19-Jul-2021 15:46:13', '2', 'Azwita Febriyanti', 'wita@garudamart.com', 'Mon 19-Jul-2021', 'Mon 19-Jul-2021', '1', 'Azwita Febriyanti', 'Mengerjakan laporan Fee Marketing Juli 2021', '', 'sulissetia@garudamart.com', '', '18:00', '20:42', 'wita.jpg'),
(393, 'SPL-GMI-21-0304', '19-Jul-2021 16:20:56', '2', 'Yudi Saputra', 'yudisaputra230700@gmail.com', 'Mon 19-Jul-2021', 'Mon 19-Jul-2021', '15', 'Yudi Saputra', 'Temenin mbak Meilissa', '', 'inggrid@garudamart.com', '', '18:00', '20:30', 'yudi.jpg'),
(394, 'SPL-GMI-21-0305', '19-Jul-2021 17:12:47', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Mon 19-Jul-2021', 'Mon 19-Jul-2021', '14', 'Rizky Bangkit Andrian', 'menunggu pick up material hd785 pak deny, dan membuat rekap data manual all gudang', '', 'rizky@garudamart.com', '', '17:00', '19:00', 'rizky.jpg'),
(395, 'SPL-GMI-21-0306', '19-Jul-2021 18:45:55', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Mon 19-Jul-2021', 'Mon 19-Jul-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', 'monitoring assembling : pc 2000, pc 1250, hd 785  (job GIS)', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(396, 'SPL-GMI-21-0307', '21-Jul-2021 15:51:37', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Wed 21-Jul-2021', 'Wed 21-Jul-2021', '23', 'Sunyoto, Kefi, Supandi, Heri, RIYANTO, Nana , RUSMANTO', 'SPMC &amp; Bracket Trakindo &amp; KPP', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(397, 'SPL-GMI-21-0308', '21-Jul-2021 16:05:55', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Wed 21-Jul-2021', 'Thu 22-Jul-2021', '23', 'Meilissa, Mu Inggrid', 'Absensi', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(398, 'SPL-GMI-21-0309', '21-Jul-2021 18:47:16', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Wed 21-Jul-2021', 'Wed 21-Jul-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' &gt; troubleshot spmc hd 785 DT 4532 ( fire supp aktif )  &gt; monitoring assembling pc 1250 (ex1199) 90%, pc 2000 (ex 1751) 50%. (job GIS)', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(399, 'SPL-GMI-21-0310', '21-Jul-2021 18:44:01', '2', 'Andreas Jasri Siringo-ringo', 'ringo@garudamart.com', 'Wed 21-Jul-2021', 'Wed 21-Jul-2021', '15', 'Andreas Jasri Siringo-ringo', 'laporan LKPM', '', 'inggrid@garudamart.com', '', '18:00', '19:00', 'ringo.jpg'),
(400, 'SPL-GMI-21-0311', '22-Jul-2021 16:28:59', '2', 'Meilissa', 'meilissa@garudamart.com', 'Thu 22-Jul-2021', 'Thu 22-Jul-2021', '13', 'M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, CAHYADI SETIAWAN', 'Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(401, 'SPL-GMI-21-0312', '22-Jul-2021 17:22:41', '2', 'Andreas Jasri Siringo-ringo', 'ringo@garudamart.com', 'Thu 22-Jul-2021', 'Thu 22-Jul-2021', '15', 'Andreas Jasri Siringo-ringo', 'pengerjaan laporan lkpm', '', 'inggrid@garudamart.com', '', '17:00', '21:00', 'ringo.jpg'),
(402, 'SPL-GMI-21-0313', '23-Jul-2021 11:36:25', '', 'Muhamad Risman', 'risman.omod@gmail.com', 'Thu 22-Jul-2021', 'Thu 22-Jul-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', 'setting spmc hd 785 DT 4532 : autolamp eng run ( beacon only ) - cek koneksi &amp; jalur harness hd 785 DT 4532 : fwd lamp, fog lamp, autolube.     (Job GIS)', '', 'suhail@garudamart.com', '', '07:00', '19:00', 'risman.jpg'),
(404, 'SPL-GMI-21-0315', '23-Jul-2021 13:53:25', '', 'Bennedita Tambunan', 'dita@garudamart.com', 'Sat 24-Jul-2021', 'Sat 24-Jul-2021', '2', 'Bennedita Tambunan', 'Review Report Laporan  Minggu Lalu dan Input List DO-IT', '', 'bunga@garudamart.com', '', '09:30', '19:30', 'dita.jpg'),
(405, 'SPL-GMI-21-0316', '23-Jul-2021 15:43:08', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 24-Jul-2021', 'Sat 24-Jul-2021', '23', 'Ferdianus Lambe Manggasa', 'Packing barang (Bantu kerjaan GIS)', '', 'anna@garudamart.com', '', '08:00', '18:00', 'inggrid.jpg'),
(406, 'SPL-GMI-21-0317', '23-Jul-2021 15:57:42', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Sat 24-Jul-2021', 'Sat 24-Jul-2021', '14', 'Amanda Maghfiroh Chairani', 'Laporan Mingguan JULI', '', 'yoseph@garudamart.com', '', '09:00', '19:30', 'manda.jpg'),
(407, 'SPL-GMI-21-0318', '23-Jul-2021 15:49:02', '', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 24-Jul-2021', 'Sat 24-Jul-2021', '23', 'Sunyoto, Darkim, Heri, Nana, RUSMANTO, Ahmad', 'SPMC', '', 'anna@garudamart.com', '', '08:00', '21:00', 'inggrid.jpg'),
(408, 'SPL-GMI-21-0319', '23-Jul-2021 16:28:24', '2', 'Mu Inggrid', 'inggrid@garudamart.com', '', '', '23', 'Sunyoto, Heri , Nana , RUSMANTO, Ahmad', 'SPMC', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(409, 'SPL-GMI-21-0320', '23-Jul-2021 16:29:09', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Fri 23-Jul-2021', 'Fri 23-Jul-2021', '23', 'Mu Inggrid, Andreas Jasri Siringo-ringo', 'Hand Over Pekerjaan GA', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(410, 'SPL-GMI-21-0321', '23-Jul-2021 17:01:09', '2', 'Sigit Prasetyo', 'sigit@garudamart.com', 'Sat 24-Jul-2021', 'Sat 24-Jul-2021', '17', 'Sigit Prasetyo', 'instal ulang laptop rizky', '', 'inggrid@garudamart.com', '', '09:00', '16:00', 'sigit.jpg'),
(411, 'SPL-GMI-21-0322', '23-Jul-2021 17:36:38', '2', 'Meilissa', 'meilissa@garudamart.com', 'Fri 23-Jul-2021', 'Fri 23-Jul-2021', '13', 'Suhail, Sugiyanto, Iwan, Eko, Huda', 'Instalasi SPMC Trakindo', '', 'suhail@garudamart.com', '', '17:00', '21:00', 'mel.jpg'),
(412, 'SPL-GMI-21-0323', '24-Jul-2021 07:38:08', '2', 'Meilissa', 'meilissa@garudamart.com', 'Sat 24-Jul-2021', 'Sat 24-Jul-2021', '13', 'Ahmad Sugiyanto, Iwan Ase', 'Instalasi SPMC Trakindo', '', 'suhail@garudamart.com', '', '08:00', '17:00', 'mel.jpg'),
(413, 'SPL-GMI-21-0324', '25-Jul-2021 06:32:21', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Fri 23-Jul-2021', 'Fri 23-Jul-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', 'instal spmc pc 1250 ex1199 : bracket lotto box, esd in, gelar harness ( key sw, lampu cabin, batt direct, lotto box, lampu working belakang )  Pendingan  Koneksi : lampu worklamp, strobe amber blue, batt direct, horn, starting, lotto box, esd in ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(414, 'SPL-GMI-21-0325', '25-Jul-2021 06:34:45', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Sat 24-Jul-2021', 'Sat 24-Jul-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' -instal pc 1250 ex1199 Koneksi : lampu worklamp, strobe amber blue, batt direct, horn, starting, lotto box, esd in  ', '', 'suhail@garudamart.com', '', '07:00', '18:00', 'risman.jpg'),
(415, 'SPL-GMI-21-0326', '25-Jul-2021 18:44:22', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Sun 25-Jul-2021', 'Sun 25-Jul-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' setting spmc pc 1250 EX1199 &gt; download spmc pc 1250 EX1199 &gt; Instal harness pc 2000 EX1571 : lotto box, worklamp, starting, strobe amber, blue (Job GIS)', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(416, 'SPL-GMI-21-0327', '26-Jul-2021 15:19:54', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 26-Jul-2021', 'Mon 26-Jul-2021', '18', 'Sunyoto, Kefi, Felix ,Darkim, Supandi, Alek, Heri, SLAMET , Nana , RUSMANTO, AHMAD NUR', 'ALL BRACKET &amp; Harnes spmc trakindo', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(417, 'SPL-GMI-21-0328', '26-Jul-2021 16:21:35', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Mon 26-Jul-12021', 'Mon 26-Jul-2021', '14', 'Rizky Bangkit Andrian', 'Rekap data all gudang, dan data part min max stock', '', 'yoseph@garudamart.com', '', '17:00', '21:00', 'rizky.jpg'),
(418, 'SPL-GMI-21-0329', '26-Jul-2021 15:26:19', '2', 'Meilissa', 'meilissa@garudamart.com', 'Mon 26-Jul-2021', 'Mon 26-Jul-2021', '13', 'Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, CAHYADI SETIAWAN', 'Instalasi di BMT', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(419, 'SPL-GMI-21-0330', '27-Jul-2021 14:53:50', '2', 'Meilissa', 'meilissa@garudamart.com', 'Tue 27-Jul-2021', 'Tue 27-Jul-2021', '13', 'Eko  Huda, CAHYADI', 'Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(420, 'SPL-GMI-21-0331', '28-Jul-2021 10:00:35', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Tue 27-Jul-2021', 'Tue 27-Jul-2021', '23', 'Sunyoto, Kefi, Darkim, Supandi, Alek, Heri, SLAMET, Nana, RUSMANTO, AHMAD', 'All braket &amp; Harnes SPMC Trakindo', '', 'anna@garudamart.com', '', '17:00', '22:00', 'inggrid.jpg'),
(421, 'SPL-GMI-21-0332', '28-Jul-2021 13:04:29', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Wed 28-Jul-2021', 'Wed 28-Jul-2021', '18', 'Sunyoto, Kefi, Felix , Darkim, Supandi , Alek, Heri, RIYANTO, Nana, RUSMANTO, AHMAD NUR', 'ALL BRACKET &amp; Harnes spmc trakindo, jobcosting', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(422, 'SPL-GMI-21-0333', '28-Jul-2021 17:03:32', '', 'Meilissa', 'meilissa@garudamart.com', 'Wed 28-Jul-2021', 'Wed 28-Jul-2021', '13', 'Ahmad Haerul Huda, Eko Kiswanto, CAHYADI SETIAWAN', 'Instalasi di BMT', '', 'suhail@garudamart.com', '', '17:04', '08:04', 'mel.jpg'),
(423, 'SPL-GMI-21-0334', '28-Jul-2021 17:04:52', '2', 'Meilissa', 'meilissa@garudamart.com', 'Wed 28-Jul-2021', 'Wed 28-Jul-2021', '13', 'Ahmad Sugiyanto, Iwan Ase', 'Instalasi Trakindo', '', 'suhail@garudamart.com', '', '17:06', '08:05', 'mel.jpg'),
(424, 'SPL-GMI-21-0335', '29-Jul-2021 09:17:18', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Mon 26-Jul-2021', 'Mon 26-Jul-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' &gt; komisioning pama pc 1250 ex 1199 &gt; instal harness dalam cabin pc 2000 ex 1751 : fire suppresion, key sw, esd in, sw box. (JOB GIS)', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(425, 'SPL-GMI-21-0336', '29-Jul-2021 09:19:07', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Tue 27-Jul-2021', 'Tue 27-Jul-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', '&gt; koneksi pc 2000 EX1751 : Koneksi lotto box, sw box, key sw starting, batt direct, dc cinverter(Job Gis)', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(426, 'SPL-GMI-21-0337', '29-Jul-2021 09:20:55', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Wed 28-Jul-2021', 'Wed 28-Jul-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' koneksi pc 2000 EX 1751 : Koneksi horn, esd in &gt; setting spmc pc 2000 EX 1751 &gt; PC 2000 Belum bisa test running karena masih ada progres dari UT.  (job gis)', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(427, 'SPL-GMI-21-0338', '29-Jul-2021 15:13:19', '2', 'Meilissa', 'meilissa@garudamart.com', 'Thu 29-Jul-2021', 'Thu 29-Jul-2021', '13', 'Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, CAHYADI SETIAWAN', 'Instalasi SPMC Trakindo', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(428, 'SPL-GMI-21-0339', '29-Jul-2021 15:29:52', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Thu 29-Jul-2021', 'Thu 29-Jul-2021', '1', 'Hulda Vincensia Masiglaat', 'Input transaksi bpn dan tj enim', '', 'anisa@garudamart.com', '', '18:00', '21:20', 'hulda.jpg'),
(429, 'SPL-GMI-21-0340', '29-Jul-2021 16:00:58', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 29-Jul-2021', 'Thu 29-Jul-2021', '18', 'Violentino Felix Ardiyanto Utoyo', 'Input po', '', 'aceng@garudamart.com', '', '18:00', '21:20', 'felix.jpg'),
(430, 'SPL-GMI-21-0341', '29-Jul-2021 21:03:44', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Thu 29-Jul-2021', 'Thu 29-Jul-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', 'koneksi pc 2000 ex1751 : Koneksi strobe amber, strobe blue, worklamp atas cabin, worklamp belakang, &gt;test running pc 2000 EX1751 &gt;test esd in &amp; esd out &gt;test worklamp, strobe amber, strobe blue &gt;download spmc pc 2000 ex1751  (job gis)', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(431, 'SPL-GMI-21-0342', '30-Jul-2021 12:10:03', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Sat 31-Jul-2021', 'Sat 31-Jul-2021', '2', 'Bennedita Tambunan', 'Lanjut Input List DO-IT', '', 'bunga@garudamart.com', '', '08:00', '11:00', 'dita.jpg'),
(432, 'SPL-GMI-21-0343', '30-Jul-2021 12:49:34', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Sat 31-Jul-2021', 'Sat 31-Jul-2021', '1', 'Hulda Vincensia Masiglaat', 'Input transaksi bank 647', '', 'Anisa@garudamart.com', '', '08:00', '19:30', 'hulda.jpg'),
(433, 'SPL-GMI-21-0344', '30-Jul-2021 14:57:32', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Fri 30-Jul-2021', 'Fri 30-Jul-2021', '18', 'Sunyoto, Darkim, Kefi, Supandi Irawan, Alek Gunawan, Heri Setiawan, SLAMET RIYANTO, Nana Handayana, RUSMANTO, AHMAD NUR', 'All bracket , harnes spmc dz155 , lotobox 4 system , lotobox 3 system fatique warning', '', 'aceng@garudamart.com', '', '18:00', '22:00', 'felix.jpg'),
(434, 'SPL-GMI-21-0345', '30-Jul-2021 15:00:53', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sat 31-Jul-2021', 'Sat 31-Jul-2021', '18', 'Sunyoto, Kefi, Darkim, Supandi, Heri, Nana, RUSMANTO, AHMAD NUR', 'All bracket , harnes spmc d345&amp; 320', '', 'aceng@garudamart.com', '', '08:00', '21:00', 'felix.jpg'),
(435, 'SPL-GMI-21-0346', '30-Jul-2021 15:24:02', '2', 'Meilissa', 'meilissa@garudamart.com', 'Fri 30-Jul-2021', 'Fri 30-Jul-2021', '13', 'Ahmad Sugiyanto, Ahmad Haerul Huda', 'Instalasi SPMC Trakindo', '', 'suhail@garudamart.com', '', '17:00', '19:00', 'mel.jpg'),
(436, 'SPL-GMI-21-0347', '30-Jul-2021 16:18:49', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Sat 31-Jul-2021', 'Sat 31-Jul-2021', '14', 'Amanda Maghfiroh Chairani', 'Laporan Mingguan dan IT Instalasi', '', 'yoseph@garudamart.com', '', '09:00', '17:30', 'manda.jpg'),
(437, 'SPL-GMI-21-0348', '30-Jul-2021 17:01:45', '2', 'Azwita Febriyanti', 'wita@garudamart.com', 'Sat 31-Jul-2021', 'Sat 31-Jul-2021', '1', 'Azwita Febriyanti', 'Filling invoice on process, Customer receipt dan invoice paid', '', 'anisa@garudamart.com', '', '08:30', '19:30', 'wita.jpg'),
(438, 'SPL-GMI-21-0349', '30-Jul-2021 16:40:59', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 31-Jul-2021', 'Sat 31-Jul-2021', '23', 'Alberthus Tandek', '+Markus = Harness SPMC 777', '', 'anna@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(439, 'SPL-GMI-21-0350', '01-Aug-2021 07:59:22', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Fri 30-Jul-2021', 'Fri 30-Jul-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' &gt;koneksi pc2000 ex1751 koneksi fire sup,radio,autolube &gt;commisioning ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(440, 'SPL-GMI-21-0351', '01-Aug-2021 18:49:51', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Sun 01-Aug-2021', 'Sun 01-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' -monitoring pc 2000 koneksi optional autolube,radio -backup assembly HD 785 : DT4231,DT4344 ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(441, 'SPL-GMI-21-0352', '02-Aug-2021 08:40:12', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 31-Jul-2021', 'Sat 31-Jul-2021', '23', 'Alfons Vicky Daniels', 'Laporan Data manual dan mempersiapkan barang utk KPP', '', 'anna@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(442, 'SPL-GMI-21-0353', '02-Aug-2021 08:42:25', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sun 01-Aug-2021', 'Sun 01-Aug-2021', '23', 'Sunyoto, Heri Setiawan', 'Test beban Harnes D155 &amp; 345', '', 'anna@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(443, 'SPL-GMI-21-0354', '02-Aug-2021 14:33:19', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Mon 02-Aug-2021', 'Mon 02-Aug-2021', '14', 'Angga, Ilvan, Rivaldi, Rizky', 'WH: prepare hd 785 4 unit, dz 155 2 unit,  dan prepare partial unit cat 777 | Rizky: Rekap DM', '', 'yoseph@garudamart.com', '', '17:00', '20:00', 'rizky.jpg'),
(444, 'SPL-GMI-21-0355', '02-Aug-2021 15:28:32', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Mon 02-Aug-2021', 'Mon 02-Aug-2021', '23', 'Aceng Rusnadi, Sunyoto, Violentino Felix Ardiyanto Utoyo, Heri Setiawan, Nana Handayana, RUSMANTO, AHMAD NUR', 'Manuf: All braket &amp; Harnes SPMC dan pengetesan |Felix: Jobcosting', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(445, 'SPL-GMI-21-0356', '02-Aug-2021 16:41:35', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Mon 02-Aug-2021', 'Mon 02-Aug-2021', '23', 'Kanisius Kefi, SLAMET RIYANTO', 'SPK Scania Lub Truck', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(446, 'SPL-GMI-21-0357', '02-Aug-2021 18:48:29', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Mon 02-Aug-2021', 'Mon 02-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' &gt; monitoring PC2000 EX1751 &gt;Calibrasi incline sensibility &gt;Setting Jyro calibration karena spmc muncul tilting ketika key switch di on kan ( posisi acc )  ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg');
INSERT INTO `spl` (`id`, `kode_spl`, `date_created`, `status`, `nama`, `email`, `tanggal`, `date_end`, `divisi`, `anggota`, `pekerjaan`, `mengetahui`, `emailhead`, `note`, `jam`, `kembali`, `foto`) VALUES
(447, 'SPL-GMI-21-0358', '03-Aug-2021 15:21:28', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Tue 03-Aug-2021', 'Tue 03-Aug-2021', '1', 'Hulda Vincensia Masiglaat', 'Rekap pengeluaran stok dapur Juli 2021 dan list belanja', '', 'Anisa@garudamart.com', '', '18:00', '21:00', 'hulda.jpg'),
(448, 'SPL-GMI-21-0359', '03-Aug-2021 16:37:07', '2', 'Meilissa', 'meilissa@garudamart.com', 'Tue 03-Aug-2021', 'Tue 03-Aug-2021', '13', 'Toto Nihyana, Iwan Ase, Eko Kiswanto, Sabri, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi UT Jababeka', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(449, 'SPL-GMI-21-0360', '03-Aug-2021 16:43:04', '2', 'Azwita Febriyanti', 'wita@garudamart.com', 'Tue 03-Aug-2021', 'Tue 03-Aug-2021', '1', 'Azwita Febriyanti', 'Mengerjakan Laporan AR Detail Agustus 2021', '', 'anisa@garudamart.com', '', '18:00', '21:00', 'wita.jpg'),
(450, 'SPL-GMI-21-0361', '03-Aug-2021 18:47:09', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Tue 03-Aug-2021', 'Wed 04-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', '&gt;diskusi dengan pihak pama terkait T/S di ex1199 dan ex1751 &gt;setting ulang jyro calibration &gt; download spmc ex1751 ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(451, 'SPL-GMI-21-0362', '04-Aug-2021 14:56:56', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Wed 04-Aug-2021', 'Wed 04-Aug-2021', '18', 'Kefi, Darkim, Alek, RIYANTO, AHMAD NUR', 'pabrikasi : bracket lotobox  2 system ridhan 30 ea', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(452, 'SPL-GMI-21-0363', '04-Aug-2021 16:21:46', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Wed 04-Aug-2021', 'Wed 04-Aug-2021', '14', 'Angga, Ilvan, Rivaldi', 'Prepare to Vendor (Andi), Toolbag UT dan Nunggu pick up Vendor (Deni)', '', 'yoseph@garudamart.com', '', '18:00', '20:12', 'manda.jpg'),
(453, 'SPL-GMI-21-0364', '04-Aug-2021 19:23:28', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Wed 04-Aug-2021', 'Wed 04-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', 'Backup assembling DT4231,DT4344  T/S DT4532 engine can\'t runn -fault fire surpression active -fault battery low -reset fault -download spmc ', '', 'suhail@garudamart.com', '', '07:00', '19:00', 'risman.jpg'),
(454, 'SPL-GMI-21-0365', '05-Aug-2021 13:27:17', '2', 'Meilissa', 'meilissa@garudamart.com', 'Thu 05-Aug-2021', 'Thu 05-Aug-2021', '13', 'Toto, Sugiyanto, Huda, Kefi', 'Instalasi UTE Jababeka', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(455, 'SPL-GMI-21-0366', '05-Aug-2021 13:09:38', '', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 05-Aug-2021', 'Thu 05-Aug-2021', '18', 'Violentino Felix Ardiyanto Utoyo', 'Jobcosting', '', 'aceng@garudamart.com', '', '18:00', '20:00', 'felix.jpg'),
(456, 'SPL-GMI-21-0367', '05-Aug-2021 19:10:22', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Thu 05-Aug-2021', 'Thu 05-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', 'Backup assembling HD 785 - DT4344(koneksi fwd lamp,fog,autolube,test esd in,esd out) - DT4231(koneksi fwd lamp,fog,autolube,test esd in,esd out) -Download SPMC   ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(457, 'SPL-GMI-21-0368', '06-Aug-2021 15:39:04', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 07-Aug-2021', 'Sat 07-Aug-2021', '23', 'Alberthus Tandek, MARKUS PALIMBONG', 'Manufacturing Harness SPMC 777  cat', '', 'anna@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(458, 'SPL-GMI-21-0369', '06-Aug-2021 15:40:56', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 07-Aug-2021', 'Sat 07-Aug-2021', '23', 'Darkim, RIYANTO, Supandi', 'Loto Box (Ridhan)', '', 'anna@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(460, 'SPL-GMI-21-0371', '07-Aug-2021 18:46:02', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Sat 07-Aug-2021', 'Sat 07-Aug-2021', '13', 'Muhamad Risman', ' &gt; Swab antigen di Pama &gt; Backup Assembling HD785 DT4231,DT4344 -conect strobe lamp -setting SPMC (auto lamp enggine runn only BCN) &gt; Backup DT4091,DT4134 ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(461, 'SPL-GMI-21-0372', '07-Aug-2021 20:55:52', '2', 'Meilissa', 'meilissa@garudamart.com', 'Sun 08-Aug-2021', 'Sun 08-Aug-2021', '13', 'Toto Nihyana, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri', 'Membersihkan sampah di UT SKP', '', 'suhail@garudamart.com', '', '08:00', '17:00', 'mel.jpg'),
(462, 'SPL-GMI-21-0373', '09-Aug-2021 16:47:52', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Mon 09-Aug-2021', 'Mon 09-Aug-2021', '22', 'Toto, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi UT SKP', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(463, 'SPL-GMI-21-0374', '09-Aug-2021 19:23:44', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Mon 09-Aug-2021', 'Mon 09-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', '&gt;Backup HD785 -DT4231 Setting Fatigue Alarm dari 600s ke 180s - DT4344 Setting Fatigue Alarm dari 600s ke 180s -DT4134 koneksi fwd lamp,fog lamp,setting fatigue alarm,setting auto lamp enggine runn only BCN,download spmc', '', 'suhail@garudamart.com', '', '07:00', '19:15', 'risman.jpg'),
(464, 'SPL-GMI-21-0375', '10-Aug-2021 13:48:03', '2', 'P. Alberthus', 'shintaminii027@gmail.com', 'Wed 11-Aug-2021', 'Wed 11-Aug-2021', '15', 'ALBERT, MARKUS', 'Mengerjakan manufaktur harness SPMC 777 cat ', '', 'inggrid@garudamart.com', '', '08:00', '19:00', 'sinta.jpg'),
(465, 'SPL-GMI-21-0376', '10-Aug-2021 14:24:47', '2', 'Meilissa', 'meilissa@garudamart.com', 'Wed 11-Aug-2021', 'Wed 11-Aug-2021', '13', 'Toto Nihyana, Ahmad Sugiyanto, Iwan Ase, Ahmad Haerul Huda, Kanisius Kefi, Sabri, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi UT SKP HD465 MAU DELIVERY', '', 'suhail@garudamart.com', '', '08:00', '17:00', 'mel.jpg'),
(466, 'SPL-GMI-21-0377', '10-Aug-2021 14:28:02', '', 'Meilissa', 'meilissa@garudamart.com', 'Tue 10-Aug-2021', 'Tue 10-Aug-2021', '13', 'Meilissa, Grace Dessyca Kahiking', 'Hand Over pekerjaan dan Invoice BAST KPP', '', 'suhail@garudamart.com', '', '17:00', '19:30', 'mel.jpg'),
(467, 'SPL-GMI-21-0378', '10-Aug-2021 15:44:58', '', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Tue 10-Aug-2021', 'Tue 10-Aug-2021', '18', 'Violentino Felix Ardiyanto Utoyo', 'jobcosting ', '', 'aceng@garudamart.com', '', '17:00', '19:30', 'felix.jpg'),
(468, 'SPL-GMI-21-0379', '10-Aug-2021 15:54:05', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Wed 11-Aug-2021', 'Wed 11-Aug-2021', '18', 'Sunyoto, Heri Setiawan', 'Spmc + test', '', 'aceng@garudamart.com', '', '08:00', '17:00', 'felix.jpg'),
(469, 'SPL-GMI-21-0380', '10-Aug-2021 15:41:18', '2', 'Meilissa', 'meilissa@garudamart.com', 'Tue 10-Aug-2021', 'Tue 10-Aug-2021', '13', 'Toto, Sugiyanto, Iwan, Huda, Kefi, Eko, DEBI, CAHYADI', 'Instalasi UT SKP', '', 'suhail@garudamart.com', '', '17:00', '20:00', 'mel.jpg'),
(470, 'SPL-GMI-21-0381', '10-Aug-2021 17:06:43', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Tue 10-Aug-2021', 'Tue 10-Aug-2021', '14', 'Yudi Saputra', 'Temenin Mbak Mel dan Grace SPL di J3', '', 'yoseph@garudamart.com', '', '18:00', '19:30', 'manda.jpg'),
(471, 'SPL-GMI-21-0382', '10-Aug-2021 18:46:55', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Tue 10-Aug-2021', 'Tue 10-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' &gt;DT4091 -Koneksi fwd lamp,fog lamp,rotary lamp -Setting SPMC(auto lamp engine runn only BCN,Fatigue alarm,idle timer) -Test esd in out -Download SPMC  ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(472, 'SPL-GMI-21-0383', '12-Aug-2021 15:33:56', '', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 12-Aug-2021', 'Thu 12-Aug-2021', '18', 'Sunyoto, Darkim, Supandi, Alek, Heri, RIYANTO, Nana, RUSMANTO, AHMAD NUR', 'pabrikasi : bracket apar 9kg &amp; bracket strobe pc 1250 | manufaktur : harnes spmc hitachi + 820 &amp; test beban harnes spmc 777 dan d6r', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(473, 'SPL-GMI-21-0384', '12-Aug-2021 17:03:19', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Thu 12-Aug-2021', 'Thu 12-Aug-2021', '22', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi UT SKP', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(474, 'SPL-GMI-21-0385', '12-Aug-2021 18:43:20', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Thu 12-Aug-2021', 'Thu 12-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', '  &gt;Backup HD785 DT4344 -T/S OP DCDC CvtShort, Reset fault Backup assembling D155 Dz568 ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(475, 'SPL-GMI-21-0386', '13-Aug-2021 14:42:13', '2', 'Albetrhus T.', 'shintaminii027@gmail.com', 'Sat 14-Aug-2021', 'Sat 14-Aug-2021', '15', 'ALBERT, MARKUS ', 'Mengerjakan manufaktur harness SPMC 777 cat ', '', 'inggrid@garudamart.com', '', '08:00', '17:00', 'sinta.jpg'),
(476, 'SPL-GMI-21-0387', '13-Aug-2021 14:56:56', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Sat 14-Aug-2021', 'Sat 14-Aug-2021', '14', 'Amanda Maghfiroh Chairani', 'Melengkapi Laporan DM ', '', 'yoseph@garudamart.com', '', '09:00', '20:06', 'manda.jpg'),
(477, 'SPL-GMI-21-0388', '13-Aug-2021 15:09:10', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Fri 13-Aug-2021', 'Sat 14-Aug-2021', '18', 'Aceng, Darkim, Heri, RIYANTO, Nana , RUSMANTO, AHMAD NUR', 'bracket ut &amp; bracket sabat assy loto sabat', '', 'aceng@garudamart.com', '', '08:08', '21:00', 'felix.jpg'),
(478, 'SPL-GMI-21-0389', '13-Aug-2021 16:43:13', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Fri 13-Aug-2021', 'Fri 13-Aug-2021', '22', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi UT SKP,UT Cakung', '', 'anna@garudamart.com', '', '17:00', '20:30', 'grace.jpg'),
(479, 'SPL-GMI-21-0390', '13-Aug-2021 16:45:20', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Sat 14-Aug-2021', 'Sat 14-Aug-2021', '22', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri, Alek Gunawan, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi UT SKP', '', 'anna@garudamart.com', '', '08:00', '15:00', 'grace.jpg'),
(480, 'SPL-GMI-21-0391', '13-Aug-2021 16:53:12', '2', 'Azwita Febriyanti', 'wita@garudamart.com', 'Sat 14-Aug-2021', 'Sat 14-Aug-2021', '1', 'Azwita Febriyanti', 'Filling Invoice On process, invoice Paid dan Customer Receipt', '', 'anisa@garudamart.com', '', '08:30', '16:00', 'wita.jpg'),
(481, 'SPL-GMI-21-0392', '13-Aug-2021 19:30:10', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Fri 13-Aug-2021', 'Fri 13-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' &gt;Backup Assembling D155-6 -Dz1173 (koneksi worklamp,strobelamp,re-wiring lottobox,test esd in out, download ) -Dz1195 (re-wiring &amp; routing worklamp,strobe,re-wiring lotto box,change position lottobox,test esd in out,download)', '', 'suhail@garudamart.com', '', '07:00', '19:00', 'risman.jpg'),
(482, 'SPL-GMI-21-0393', '14-Aug-2021 16:29:44', '4', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sun 15-Aug-2021', 'Sun 15-Aug-2021', '18', 'ugo Miharjo Darkim, Supandi Irawan, Heri Setiawan, SLAMET RIYANTO, Nana Handayana, RUSMANTO, AHMAD NUR', 'Bracket lotobox sabbat 20 set', '', 'aceng@garudamart.com', '', '08:00', '21:00', 'felix.jpg'),
(483, 'SPL-GMI-21-0394', '14-Aug-2021 19:07:45', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Sat 14-Aug-2021', 'Sat 14-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' &gt;Remove PDU lama &gt;Instal SPMC D375 DZ568 - Bracket Spmc,box switch - Routing harness -Koneksi box switch,dc converter,thermistor  ', '', 'suhail@garudamart.com', '', '07:00', '19:00', 'risman.jpg'),
(484, 'SPL-GMI-21-0395', '15-Aug-2021 18:34:50', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Sun 15-Aug-2021', 'Sun 15-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', '&gt;Continue Dz568 - Koneksi starting switch worklamp,strobelamp,optlamp,main power Spmc - Setting  -Test esd in out -setting  minus horn', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(485, 'SPL-GMI-21-0396', '16-Aug-2021 16:49:55', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 16-Aug-2021', 'Mon 16-Aug-2021', '18', 'Supandi Irawan, Alek Gunawan, SLAMET RIYANTO', 'bracket lotobox 3 system', '', 'aceng@garudamart.com', '', '17:00', '18:11', 'felix.jpg'),
(486, 'SPL-GMI-21-0397', '18-Aug-2021 18:47:37', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Mon 16-Aug-2021', 'Mon 16-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' &gt; Continue Dz568 -Koneksi Horn Spmc -T/S, Horn Mulfungtion - Change SPMC  &gt;Backup Assembling DT4216,DT4384,DT4226  ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(487, 'SPL-GMI-21-0398', '18-Aug-2021 18:48:44', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Wed 18-Aug-2021', 'Wed 18-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', '  &gt;T/S DT4091 OPT DCDC CVT  - Change DC converter -Download  &gt;Instal SPMC DZ511  -Replace SPMC,BOXSWITCH,Routing Harness,Koneksi esd cab,koneksi switch box ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(488, 'SPL-GMI-21-0399', '19-Aug-2021 15:44:13', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Thu 19-Aug-2021', 'Thu 19-Aug-2021', '22', 'M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Sabri', 'Instalasi UT SKP', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(489, 'SPL-GMI-21-0400', '19-Aug-2021 15:52:08', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Thu 19-Aug-2021', 'Thu 19-Aug-2021', '22', 'Toto Nihyana, Ahmad Haerul Huda, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi UTE Jababeka', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(490, 'SPL-GMI-21-0401', '19-Aug-2021 18:39:21', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Thu 19-Aug-2021', 'Thu 19-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', '&gt;Continue DZ511 -komeksi starting switch,coneksi worklamp,strobe lamp,main power spmc,reposition esd out,koneksi wiring esd out,horn,setting,download ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(491, 'SPL-GMI-21-0402', '20-Aug-2021 13:10:07', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Sat 21-Aug-2021', 'Sat 21-Aug-2021', '1', 'Hulda Vincensia Masiglaat', 'Input petty cash hld, rekap uang makan karyawan gmi', '', 'Anisa@garudamart.com', '', '08:00', '19:00', 'hulda.jpg'),
(492, 'SPL-GMI-21-0403', '20-Aug-2021 13:10:12', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Sat 21-Aug-2021', 'Sat 21-Aug-2021', '2', 'Vincentia Hanna Wibowo', 'Edit SO, Tarik DO untuk PO GIS dan RI di accurate GIS', '', 'bunga@garudamart.com', '', '10:00', '17:00', 'tia.jpg'),
(493, 'SPL-GMI-21-0404', '20-Aug-2021 15:43:27', '2', 'Azwita Febriyanti', 'wita@garudamart.com', 'Sat 21-Aug-2021', 'Sat 21-Aug-2021', '1', 'Azwita Febriyanti', 'Mengerjakan Laporan Fee All marketing dan Input Pendingan Cash in DP PO GIS ', '', 'head.finance@garudamart.com', '', '09:00', '19:00', 'wita.jpg'),
(494, 'SPL-GMI-21-0405', '20-Aug-2021 15:48:53', '2', 'Alfons', 'shintaminii027@gmail.com', 'Sat 21-Aug-2021', 'Sat 21-Aug-2021', '15', 'Ferdianus Lambe Manggasa', 'Packing SPMC, Mengwrjakan data manual, pindahkan barang ke rak', '', 'inggrid@garudamart.com', '', '08:00', '17:00', 'sinta.jpg'),
(495, 'SPL-GMI-21-0406', '20-Aug-2021 15:55:08', '', 'Albetrhus T.', 'shintaminii027@gmail.com', 'Fri 20-Aug-2021', 'Fri 20-Aug-2021', '15', 'MARKUS PALIMBONG', 'Mengerjakan manufaktur harness SPMC 777 cat ', '', 'inggrid@garudamart.com', '', '08:00', '19:00', 'sinta.jpg'),
(496, 'SPL-GMI-21-0407', '20-Aug-2021 16:20:45', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Sat 21-Aug-2021', 'Sat 21-Aug-2021', '22', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi 6 Unit 777E Trakindo', '', 'anna@garudamart.com', '', '09:00', '16:00', 'grace.jpg'),
(497, 'SPL-GMI-21-0408', '20-Aug-2021 16:48:44', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Fri 20-Aug-2021', 'Fri 20-Aug-2021', '23', 'Mu Inggrid, Grace Dessyca Kahiking', 'Absensi', '', 'anna@garudamart.com', '', '17:00', '22:14', 'inggrid.jpg'),
(498, 'SPL-GMI-21-0409', '20-Aug-2021 16:49:49', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 21-Aug-2021', 'Sat 21-Aug-2021', '23', 'Mu Inggrid, Grace Dessyca Kahiking', 'Absensi', '', 'anna@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(499, 'SPL-GMI-21-0410', '20-Aug-2021 16:50:29', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 21-Aug-2021', 'Sat 21-Aug-2021', '23', 'Aceng, Sunyoto, Darkim, Heri, AHMAD NUR, riyanto, Nana, Rusmanto', 'SPMC', '', 'anna@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(500, 'SPL-GMI-21-0411', '20-Aug-2021 18:28:28', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Fri 20-Aug-2021', 'Fri 20-Aug-2021', '18', 'Violentino Felix Ardiyanto Utoyo', 'Jobcosting', '', 'aceng@garudamart.com', '', '18:00', '21:30', 'felix.jpg'),
(501, 'SPL-GMI-21-0412', '20-Aug-2021 18:40:31', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Fri 20-Aug-2021', 'Fri 20-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' &gt;DZ511 -Commisioning internal Pama  &gt;DT4226,DT4216 -Koneksi fwd lamp,strobelamp,fog,setting FA,idle timer,test esd in out  &gt;DT4384 -Koneksi fwd lamp,strobelamp,fog,setting FA,idle timer,test esd in out,Fault check Dcdc cvtshort - Dc converter be', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(502, 'SPL-GMI-21-0413', '21-Aug-2021 11:51:04', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Sun 22-Aug-2021', 'Sun 22-Aug-2021', '22', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, DEBI NUR WIBOWO', 'Instalasi 6 Unit 777E Trakindo', '', 'anna@garudamart.com', '', '07:00', '16:40', 'grace.jpg'),
(503, 'SPL-GMI-21-0414', '21-Aug-2021 18:39:32', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Tue 21-Dec-2021', 'Sat 21-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' &gt; T/S Op Dcdc cvtshort DT4384 -Ganti Dc converter,reset,download  &gt;Commisioning DT4384,DT4226,DT4216 ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(504, 'SPL-GMI-21-0415', '23-Aug-2021 16:29:29', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Mon 23-Aug-2021', 'Mon 23-Aug-2021', '22', 'Ahmad Sugiyanto, Eko Kiswanto', 'commisioning spmc trakindo ', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(505, 'SPL-GMI-21-0416', '24-Aug-2021 16:08:11', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Tue 24-Aug-2021', 'Tue 24-Aug-2021', '22', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi Trakindo', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(506, 'SPL-GMI-21-0417', '24-Aug-2021 16:33:04', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Tue 24-Aug-2021', 'Tue 24-Aug-2021', '14', 'Angga Prayoga, Mohamad Ilvan Ridhoni, Muhammad Rivaldi', ' prepare  unit cat 777 16 set, unit 850, prepare jo harnes cat 777 10 set', '', 'yoseph@garudamart.com', '', '17:00', '20:00', 'rizky.jpg'),
(507, 'SPL-GMI-21-0418', '24-Aug-2021 16:30:32', '', 'Mu Inggrid', 'inggrid@garudamart.com', 'Tue 24-Aug-2021', 'Tue 24-Aug-2021', '23', 'Aceng Rusnadi, Sunyoto, Kanisius Kefi, Supandi Irawan, Alek Gunawan, Heri Setiawan, SLAMET RIYANTO, Nana Handayana, RUSMANTO, AHMAD NUR', 'SPMC dan bracket loto', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(508, 'SPL-GMI-21-0419', '24-Aug-2021 16:53:48', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Tue 24-Aug-2021', 'Tue 24-Aug-2021', '2', 'Bunga Ratnani', 'Cek invoice fedex, cek draft PIB fedex, kalkulasi invoice', '', 'bunga@garudamart.com', '', '17:00', '20:30', 'bunga.jpg'),
(509, 'SPL-GMI-21-0420', '24-Aug-2021 16:54:28', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Tue 24-Aug-2021', 'Tue 24-Aug-2021', '2', 'Vincentia Hanna Wibowo', 'Kalkulasi Landed cost Fix &amp; input PI di accurate', '', 'bunga@garudamart.com', '', '17:00', '20:30', 'tia.jpg'),
(510, 'SPL-GMI-21-0421', '24-Aug-2021 16:58:15', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Tue 24-Aug-2021', 'Tue 24-Aug-2021', '22', 'Grace Dessyca Kahiking', 'Input SO, Bikin penawaran KPP', '', 'anna@garudamart.com', '', '17:00', '20:30', 'grace.jpg'),
(511, 'SPL-GMI-21-0422', '24-Aug-2021 17:08:16', '2', 'Metahsari', 'methasari@garudamart.com', 'Tue 24-Aug-2021', 'Tue 24-Aug-2021', '2', 'Metahsari', 'Input IT GIS', '', 'bunga@garudamart.com', '', '17:00', '20:30', 'metah.jpg'),
(512, 'SPL-GMI-21-0423', '24-Aug-2021 17:13:00', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Tue 24-Aug-2021', 'Tue 24-Aug-2021', '14', 'Jacky Haryanto', 'Monitoring Part SPMC 16 Set', '', 'yoseph@garudamart.com', '', '18:00', '20:00', 'manda.jpg'),
(513, 'SPL-GMI-21-0424', '24-Aug-2021 18:18:02', '2', 'Sigit Prasetyo', 'sigit@garudamart.com', 'Tue 24-Aug-2021', 'Tue 31-Aug-2021', '17', 'Sigit Prasetyo', 'Buat video bu anna untuk lomba', '', 'inggrid@garudamart.com', '', '18:00', '21:30', 'sigit.jpg'),
(514, 'SPL-GMI-21-0425', '24-Aug-2021 18:35:14', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Mon 23-Aug-2021', 'Mon 23-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' &gt;setting autolamp engine runn only bcn DT4226,DT4216,DT4384  &gt;Monitoring  ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(515, 'SPL-GMI-21-0426', '24-Aug-2021 18:36:48', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Tue 24-Aug-2021', 'Tue 24-Aug-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', '  &gt; Suply part spare SPMC di SM PAMA  &gt; Monitoring  ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(516, 'SPL-GMI-21-0427', '25-Aug-2021 15:56:37', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Wed 25-Aug-2021', 'Wed 25-Aug-2021', '18', 'Sunyoto, Kanisius Kefi, Yugo Miharjo Darkim, Heri Setiawan, SLAMET RIYANTO, Nana Handayana, RUSMANTO, AHMAD NUR', 'harnes spmc &amp; all barcket', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(517, 'SPL-GMI-21-0428', '25-Aug-2021 16:27:55', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Wed 25-Aug-2021', 'Wed 25-Aug-2021', '14', 'Angga Prayoga, Mohamad Ilvan Ridhoni', 'prepare jo hd 785 10 set, prepare instalasi 4 unit cat 777', '', 'yoseph@garudamart.com', '', '17:00', '20:00', 'rizky.jpg'),
(518, 'SPL-GMI-21-0429', '25-Aug-2021 16:32:39', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Wed 25-Aug-2021', 'Wed 25-Aug-2021', '14', 'Rizky Bangkit Andrian', 'monitoring pengerjaan cat 777,dan membuat rekap gudang', '', 'yoseph@garudamart.com', '', '17:00', '20:00', 'rizky.jpg'),
(519, 'SPL-GMI-21-0430', '26-Aug-2021 13:09:19', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Thu 26-Aug-2021', 'Thu 26-Aug-2021', '1', 'Hulda Vincensia Masiglaat', 'Input petty cash', '', 'Head.finance@garudamart.com', '', '18:00', '21:37', 'hulda.jpg'),
(520, 'SPL-GMI-21-0431', '26-Aug-2021 13:19:34', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 26-Aug-2021', 'Thu 26-Aug-2021', '18', 'Violentino Felix Ardiyanto Utoyo', 'bikin po', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(521, 'SPL-GMI-21-0432', '26-Aug-2021 16:44:32', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Thu 26-Aug-2021', 'Thu 26-Aug-2021', '22', 'M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Ahmad Haerul Huda, DEBI NUR WIBOWO', 'Instalasi SPMC Trakindo', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(522, 'SPL-GMI-21-0433', '27-Aug-2021 13:36:03', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Sat 28-Aug-2021', 'Sat 28-Aug-2021', '2', 'Bunga Ratnani', 'Kalkulasi instalasi GIS', '', 'bunga@garudamart.com', '', '09:00', '19:30', 'bunga.jpg'),
(523, 'SPL-GMI-21-0434', '27-Aug-2021 13:40:56', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Fri 27-Aug-2021', 'Fri 27-Aug-2021', '14', 'Jacky Haryanto, Angga Prayoga, Mohamad Ilvan Ridhoni, Muhammad Rivaldi', 'prepare hd 785 4 unit untuk instalasi sabtu minggu, menunggu part dari manufaktur', '', 'yoseph@garudamart.com', '', '17:00', '20:00', 'rizky.jpg'),
(524, 'SPL-GMI-21-0435', '27-Aug-2021 14:06:38', '', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Fri 27-Aug-2021', 'Fri 27-Aug-2021', '1', 'Hulda Vincensia Masiglaat', 'Lanjut input petty cash', '', 'head.finance@garudamart.com', '', '18:00', '21:00', 'hulda.jpg'),
(525, 'SPL-GMI-21-0436', '27-Aug-2021 14:09:14', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Fri 27-Aug-2021', 'Fri 27-Aug-2021', '2', 'Bennedita Tambunan', 'update list outsnding PO dan updte List DO Kembali', '', 'bunga@garudamart.com', '', '17:09', '21:00', 'dita.jpg'),
(526, 'SPL-GMI-21-0437', '27-Aug-2021 15:45:51', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Fri 27-Aug-2021', 'Fri 27-Aug-2021', '18', 'Violentino Felix Ardiyanto Utoyo', 'Jobcosting', '', 'aceng@garudamart.com', '', '17:00', '20:00', 'felix.jpg'),
(527, 'SPL-GMI-21-0438', '27-Aug-2021 15:48:31', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 26-Aug-2021', 'Fri 27-Aug-2021', '18', 'Kanisius Kefi', 'Instalasi gis ', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(528, 'SPL-GMI-21-0439', '27-Aug-2021 15:49:25', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sat 28-Aug-2021', 'Sat 28-Aug-2021', '18', 'Aceng, Sunyoto, Kefi, , Supandi, Heri, Nana, RUSMANTO, AHMAD NUR', 'Harnes spmc', '', 'aceng@garudamart.com', '', '08:00', '17:00', 'felix.jpg'),
(529, 'SPL-GMI-21-0440', '27-Aug-2021 15:55:16', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Fri 27-Aug-2021', 'Fri 27-Aug-2021', '14', 'Rizky Bangkit Andrian', 'monitoring pengerjaan hd 785 instalasi UT, dan hd 785 instalasi  GIS BPN', '', 'yoseph@garudamart.com', '', '17:00', '20:00', 'rizky.jpg'),
(530, 'SPL-GMI-21-0441', '27-Aug-2021 16:39:38', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 28-Aug-2021', 'Sat 28-Aug-2021', '23', 'M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Ahmad Haerul Huda, DEBI NUR WIBOWO', 'Trakindo', '', 'anna@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(531, 'SPL-GMI-21-0442', '27-Aug-2021 16:46:32', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 28-Aug-2021', 'Sat 28-Aug-2021', '23', 'Toto Nihyana, Eko Kiswanto, Sabri, Alek Gunawan, CAHYADI SETIAWAN', 'UT SKP HD 785', '', 'anna@garudamart.com', '', '08:00', '17:00', 'inggrid.jpg'),
(533, 'SPL-GMI-21-0443', '30-Aug-2021 08:52:14', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Fri 27-Aug-2021', 'Fri 27-Aug-2021', '23', 'Mu Inggrid', 'Meeting online dengan Pak Andre+persiapkan dokumen IMB&amp;Akta Ruko BPN', '', 'anna@garudamart.com', '', '17:00', '20:00', 'inggrid.jpg'),
(534, 'SPL-GMI-21-0444', '30-Aug-2021 14:16:05', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Mon 30-Aug-2021', 'Mon 30-Aug-2021', '14', 'Amanda Maghfiroh Chairani', 'Revisi Laporan Gudang Jakarta', '', 'rizky@garudamart.com', '', '18:00', '22:00', 'manda.jpg'),
(535, 'SPL-GMI-21-0445', '30-Aug-2021 15:16:03', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 30-Aug-2021', 'Mon 30-Aug-2021', '18', 'Aceng Rusnadi, Sunyoto, Violentino Felix Ardiyanto Utoyo, Yugo Miharjo Darkim, Supandi Irawan, Heri Setiawan, Nana Handayana, RUSMANTO', 'Jobcosting,switchbox spmc , harnes spmc, bikin all bracket', '', 'aceng@garudamart.com', '', '18:00', '22:22', 'felix.jpg'),
(536, 'SPL-GMI-21-0446', '30-Aug-2021 15:11:36', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Mon 30-Aug-2021', 'Tue 31-Aug-2021', '22', 'Grace Dessyca Kahiking', 'Filling SO, Jobcosting GIS', '', 'anna@garudamart.com', '', '17:00', '21:30', 'grace.jpg'),
(537, 'SPL-GMI-21-0447', '31-Aug-2021 08:44:40', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Mon 30-Aug-2021', 'Mon 30-Aug-2021', '23', 'Kanisius Kefi', 'Instalasi GIS', '', 'anna@garudamart.com', '', '17:00', '19:43', 'inggrid.jpg'),
(538, 'SPL-GMI-21-0448', '31-Aug-2021 16:40:10', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Sun 29-Aug-2021', 'Sun 29-Aug-2021', '22', 'Toto Nihyana, Eko Kiswanto, Sabri', 'Instalasi UT SKP', '', 'anna@garudamart.com', '', '08:00', '16:00', 'grace.jpg'),
(539, 'SPL-GMI-21-0449', '31-Aug-2021 16:41:16', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Tue 31-Aug-2021', 'Tue 31-Aug-2021', '22', 'Toto Nihyana, Eko Kiswanto, Sabri, CAHYADI SETIAWAN', 'Instalasi UT SKP', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(540, 'SPL-GMI-21-0450', '01-Sep-2021 15:14:26', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Wed 01-Sep-2021', 'Wed 01-Sep-2021', '23', 'Aceng Rusnadi, Sunyoto, Kanisius Kefi, Violentino Felix Ardiyanto Utoyo, Yugo Miharjo Darkim, Heri Setiawan, SLAMET RIYANTO, Nana Handayana, RUSMANTO, AHMAD NUR', 'SPMC &amp; Bracket  | Job costing', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(541, 'SPL-GMI-21-0451', '02-Sep-2021 16:01:36', '', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Thu 02-Sep-2021', 'Thu 02-Sep-2021', '1', 'Azwita Febriyanti, Hulda Vincensia Masiglaat', 'Hulda : Rekap stok dapur | Wita : Menginput Customer Receipt, Update bank mandiri 47 menginput DP PO PT. Global Inti Sejati', '', 'Head.finance@garudamart.com', '', '18:00', '18:45', 'hulda.jpg'),
(542, 'SPL-GMI-21-0452', '03-Sep-2021 13:23:14', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Sat 04-Sep-2021', 'Sat 04-Sep-2021', '2', 'Bunga Ratnani', 'kalkulasi instalasi SPMC GIS dan part lain, input RI di accurate GIS PO-PO outstanding', '', 'bunga@garudamart.com', '', '09:30', '20:45', 'bunga.jpg'),
(543, 'SPL-GMI-21-0453', '03-Sep-2021 13:37:00', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Thu 02-Sep-2021', 'Thu 02-Sep-2021', '23', 'Sunyoto, Kanisius Kefi, Yugo Miharjo Darkim, Supandi Irawan, Alek Gunawan, Heri Setiawan, SLAMET RIYANTO, Nana Handayana, RUSMANTO, AHMAD NUR', 'SPMC &amp; Bracket ', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(545, 'SPL-GMI-21-0455', '03-Sep-2021 14:51:37', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Sat 04-Sep-2021', 'Fri 27-Aug-2021', '1', 'Azwita Febriyanti, Hulda Vincensia Masiglaat, Silvi Ramadianti', 'Hulda : Input petty cash | Silvi : ngeprint &amp; filling voucher | Wita : Filling invoice on process, invoice paid &amp; customer receipt', '', 'head.finance@garudamart.com', '', '09:00', '19:00', 'hulda.jpg'),
(546, 'SPL-GMI-21-0456', '03-Sep-2021 15:44:33', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Fri 03-Sep-2021', 'Fri 03-Sep-2021', '22', 'M. Suhail S, Ahmad Sugiyanto, Ahmad Haerul Huda, DEBI NUR WIBOWO', 'Instalasi Trakindo', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(547, 'SPL-GMI-21-0457', '03-Sep-2021 15:49:36', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Fri 03-Sep-2021', 'Fri 03-Sep-2021', '14', 'Jacky Haryanto, Angga Prayoga, Mohamad Ilvan Ridhoni', 'prepare hd 785 4 unit, ex2600 untuk gis bpn, pc1250 1 unit instalasi sabtu GIS JKT', '', 'yoseph@garudamart.com', '', '17:00', '19:00', 'rizky.jpg'),
(548, 'SPL-GMI-21-0458', '03-Sep-2021 15:49:58', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 04-Sep-2021', 'Sat 04-Sep-2021', '23', 'Aceng, Sunyoto, Heri, Nana, RUSMANTO, AHMAD NUR', 'SPMC &amp; Bracket ', '', 'anna@garudamart.com', '', '08:00', '21:00', 'inggrid.jpg'),
(549, 'SPL-GMI-21-0459', '03-Sep-2021 15:51:12', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Fri 03-Sep-2021', 'Fri 03-Sep-2021', '14', 'Rizky Bangkit Andrian', 'monitoring Stock SPMC', '', 'yoseph@garudamart.com', '', '17:00', '19:00', 'rizky.jpg'),
(550, 'SPL-GMI-21-0460', '03-Sep-2021 15:58:25', '2', 'P. Markus', 'shintaminii027@gmail.com', 'Fri 03-Sep-2021', 'Fri 03-Sep-2021', '15', 'MARKUS PALIMBONG', 'Menunggu Pekerjaan P. Giardi (GIS) &amp; antar pulang ke Mess. ', '', 'inggrid@garudamart.com', '', '17:00', '19:52', 'sinta.jpg'),
(551, 'SPL-GMI-21-0461', '03-Sep-2021 16:09:53', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Sat 04-Sep-2021', 'Sat 04-Sep-2021', '2', 'Sheintriana Ayu Putri, Vincentia Hanna Wibowo', 'Tia : Revisi kalkulasi PO GIS, Tarik SO dan DO untuk GIS | Triana : kalkulasi pricelist untuk bab 1-10', '', 'bunga@garudamart.com', '', '08:00', '20:45', 'tia.jpg'),
(552, 'SPL-GMI-21-0462', '03-Sep-2021 16:34:43', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Fri 03-Sep-2021', 'Fri 03-Sep-2021', '22', 'Toto Nihyana, Eko Kiswanto, Sabri, Alek Gunawan, DEBI NUR WIBOWO', 'Instalasi UT SKP', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(553, 'SPL-GMI-21-0463', '03-Sep-2021 15:36:42', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Sat 04-Sep-2021', 'Sat 04-Sep-2021', '14', 'Amanda Maghfiroh Chairani', 'Tracking PN Blank di DM, Benerin REFF di STOCK', '', 'yoseph@garudamart.com', '', '09:00', '20:45', 'manda.jpg'),
(554, 'SPL-GMI-21-0464', '03-Sep-2021 17:04:36', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Sat 04-Sep-2021', 'Sat 04-Sep-2021', '22', 'M. Suhail S, Ahmad Sugiyanto, Ahmad Haerul Huda, DEBI NUR WIBOWO', 'Instalasi Trakindo', '', 'anna@garudamart.com', '', '08:00', '15:00', 'grace.jpg'),
(555, 'SPL-GMI-21-0465', '03-Sep-2021 17:05:34', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Sat 04-Sep-2021', 'Sat 04-Sep-2021', '22', 'Eko Kiswanto, Sabri, CAHYADI SETIAWAN', 'Instalasi UT SKP', '', 'anna@garudamart.com', '', '08:00', '15:00', 'grace.jpg'),
(557, 'SPL-GMI-21-0467', '05-Sep-2021 08:07:32', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Sun 05-Sep-2021', 'Sun 05-Sep-2021', '22', 'M. Suhail S, Ahmad Sugiyanto, Ahmad Haerul Huda, DEBI NUR WIBOWO', 'Instalasi Trakindo', '', 'anna@garudamart.com', '', '07:00', '15:00', 'grace.jpg'),
(558, 'SPL-GMI-21-0468', '06-Sep-2021 15:26:57', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 06-Sep-2021', 'Mon 06-Sep-2021', '18', 'Aceng Rusnadi, Sunyoto, Kanisius Kefi, Yugo Miharjo Darkim, Heri Setiawan, Nana Handayana, RUSMANTO, AHMAD NUR', 'All bracket &amp; spmc', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(559, 'SPL-GMI-21-0469', '07-Sep-2021 15:24:44', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Tue 07-Sep-2021', 'Tue 07-Sep-2021', '18', 'Sunyoto, Heri, Nana, RUSMANTO, AHMAD NUR', 'ALL BRACKET &amp; Harnes spmc trakindo', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(560, 'SPL-GMI-21-0470', '07-Sep-2021 15:40:16', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Tue 07-Sep-2021', 'Tue 07-Sep-2021', '14', 'Angga Prayoga, Mohamad Ilvan Ridhoni, Amanda Maghfiroh Chairani', 'prepare JO hd 785 20 set, prepare volvo 8 unit untuk gis', '', 'yoseph@garudamart.com', '', '17:00', '19:30', 'rizky.jpg'),
(561, 'SPL-GMI-21-0471', '07-Sep-2021 16:56:06', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Tue 07-Sep-2021', 'Tue 07-Sep-2021', '22', 'Eko Kiswanto, Sabri, CAHYADI SETIAWAN', 'Instalasi UT SKP', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(562, 'SPL-GMI-21-0472', '08-Sep-2021 14:12:42', '', 'Bennedita Tambunan', 'dita@garudamart.com', 'Wed 08-Sep-2021', 'Wed 08-Sep-2021', '2', 'Mohamad Ilvan Ridhoni', 'Anter barang ke Cargo Bandara (Driver Ahmad )', '', 'rizky@garudamart.com', '', '17:00', '23:30', 'dita.jpg'),
(563, 'SPL-GMI-21-0473', '08-Sep-2021 16:28:50', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Wed 08-Sep-2021', 'Wed 08-Sep-2021', '22', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi PC500 dan HM400', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(564, 'SPL-GMI-21-0474', '09-Sep-2021 10:42:53', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Wed 08-Sep-2021', 'Wed 08-Sep-2021', '18', 'Kanisius Kefi, Yugo Miharjo Darkim, Supandi Irawan, Alek Gunawan, SLAMET RIYANTO, AHMAD NUR', 'all bracket', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(565, 'SPL-GMI-21-0475', '09-Sep-2021 13:06:40', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Thu 09-Sep-2021', 'Thu 09-Sep-2021', '2', 'Bennedita Tambunan', 'Input List DO-IT', '', 'bunga@garudamart.com', '', '17:00', '21:08', 'dita.jpg'),
(566, 'SPL-GMI-21-0476', '09-Sep-2021 13:04:50', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Thu 09-Sep-2021', 'Thu 09-Sep-2021', '22', 'Grace Dessyca Kahiking', 'Laporan SO ', '', 'anna@garudamart.com', '', '18:00', '20:00', 'grace.jpg'),
(567, 'SPL-GMI-21-0477', '09-Sep-2021 15:55:56', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Thu 09-Sep-2021', 'Thu 09-Sep-2021', '14', 'Angga, Ilvan, Rizky', 'prepare hd 785 4 unit, d155, d375, JO Harnes hd 785 Vendor Andi', '', 'yoseph@garudamart.com', '', '17:00', '20:00', 'rizky.jpg'),
(568, 'SPL-GMI-21-0478', '09-Sep-2021 16:10:23', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Thu 09-Sep-2021', 'Thu 09-Sep-2021', '22', 'Toto Nihyana, M. Suhail S, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi UT SKP', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(569, 'SPL-GMI-21-0479', '09-Sep-2021 17:05:47', '2', 'Metahsari', 'methasari@garudamart.com', 'Thu 09-Sep-2021', 'Fri 09-Apr-2021', '2', 'Metahsari', 'Input IT GIS dan Kalkulasi', '', 'bunga@garudamart.com', '', '18:00', '21:16', 'metah.jpg'),
(570, 'SPL-GMI-21-0480', '09-Sep-2021 18:40:52', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Thu 09-Sep-2021', 'Thu 09-Sep-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', '  - kalibrasi jyroincline DT4344 - setting timer fatique alarm -check fault and reset -download', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(571, 'SPL-GMI-21-0481', '10-Sep-2021 12:04:08', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Sat 11-Sep-2021', 'Sat 11-Sep-2021', '2', 'Bunga Ratnani', 'kalkulasi instalasi SPMC GIS dan part lain, input RI di accurate GIS PO-PO outstanding, finishing jobcosting yg pending', '', 'bunga@garudamart.com', '', '09:00', '17:00', 'bunga.jpg'),
(572, 'SPL-GMI-21-0482', '10-Sep-2021 14:10:29', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Fri 10-Sep-2021', 'Fri 10-Sep-2021', '2', 'Bennedita Tambunan, Vincentia Hanna Wibowo', 'Dita: update list outs PO dan DO Kembali Tia: tarik SO dan DO GIS dan RI di accurate GIS ', '', 'bunga@garudamart.com', '', '17:00', '22:00', 'dita.jpg'),
(573, 'SPL-GMI-21-0483', '10-Sep-2021 14:42:11', '2', 'IRINDA AULIYASARI H', 'IRINDA@GARUDAMART.COM', 'Fri 10-Sep-2021', 'Fri 10-Sep-2021', '2', 'IRINDA AULIYASARI H', 'Kalkulasi penawaran PT INKA (29 items),  PT KAI, nego penawaran PT INKA, PT AJL, PT LBS, PT Kideco', '', 'bunga@garudamart.com', '', '17:00', '21:00', 'irinda.jpg'),
(574, 'SPL-GMI-21-0484', '10-Sep-2021 14:50:32', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Fri 10-Sep-2021', 'Sat 11-Sep-2021', '18', 'Aceng Rusnadi, Sunyoto, Kanisius Kefi, Violentino Felix Ardiyanto Utoyo, Yugo Miharjo Darkim, Supandi Irawan, Heri Setiawan, SLAMET RIYANTO, Nana Handayana, RUSMANTO, AHMAD NUR', 'Bracket ALLn,HARNES SPMC CAT 777 , jobcosting', '', 'aceng@garudamart.com', '', '17:00', '21:09', 'felix.jpg'),
(575, 'SPL-GMI-21-0485', '10-Sep-2021 14:54:39', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Fri 10-Sep-2021', 'Fri 10-Sep-2021', '14', 'Jacky Haryanto, Angga Prayoga, Mohamad Ilvan Ridhoni, Amanda Maghfiroh Chairani, Muhammad Rivaldi', 'Admin : melengkapi laporan mingguan | Partman : prepare barang instal', '', 'rizky@garudamart.com', '', '18:00', '20:00', 'manda.jpg'),
(576, 'SPL-GMI-21-0486', '10-Sep-2021 15:07:01', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Sat 11-Sep-2021', 'Sat 11-Sep-2021', '14', 'Rizky Bangkit Andrian', 'tracking QTY In OUT part, dan menyamakan QTY part dm dan accurate all gudang', '', 'yoseph@garudamart.com', '', '08:00', '16:00', 'rizky.jpg'),
(577, 'SPL-GMI-21-0487', '10-Sep-2021 16:02:18', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Sat 11-Sep-2021', 'Sat 11-Sep-2021', '2', 'Vincentia Hanna Wibowo', 'Tarik SO &amp; DO GMI, RI di accurate GIS, revisi kalkulasi PO GIS', '', 'bunga@garudamart.com', '', '09:00', '17:00', 'tia.jpg'),
(578, 'SPL-GMI-21-0488', '10-Sep-2021 16:24:51', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Sat 11-Sep-2021', 'Sat 11-Sep-2021', '22', 'Toto Nihyana, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri', 'Instalasi D6R Trakindo', '', 'anna@garudamart.com', '', '08:00', '16:00', 'grace.jpg'),
(580, 'SPL-GMI-21-0490', '10-Sep-2021 18:58:39', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Fri 10-Sep-2021', 'Fri 10-Sep-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', '-swab antigen di Pama MTBU -proses surat tanda terima  part spmc GIS di SM Pama  ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(581, 'SPL-GMI-21-0491', '13-Sep-2021 08:14:08', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Sun 12-Sep-2021', 'Sun 12-Sep-2021', '22', 'Suhail, Toto, Sugiyanto, Eko, Huda', 'Instalasi D6R Trakindo', '', 'anna@garudamart.com', '', '08:00', '15:00', 'grace.jpg'),
(582, 'SPL-GMI-21-0492', '13-Sep-2021 15:50:23', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 13-Sep-2021', 'Mon 13-Sep-2021', '18', 'Aceng Rusnadi, Sunyoto, Kanisius Kefi, Yugo Miharjo Darkim, Heri Setiawan, SLAMET RIYANTO, Nana Handayana, RUSMANTO, AHMAD NUR', 'ALL BRACKET &amp; Harnes spmc trakindo', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(583, 'SPL-GMI-21-0493', '14-Sep-2021 15:42:38', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Tue 14-Sep-2021', 'Tue 14-Sep-2021', '18', 'Aceng Rusnadi, Sunyoto, Kanisius Kefi, Yugo Miharjo Darkim, Supandi Irawan, Heri Setiawan, SLAMET RIYANTO, Nana Handayana, RUSMANTO, AHMAD NUR', 'ALL BRACKET &amp; Harnes new spmc dz155', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(584, 'SPL-GMI-21-0494', '14-Sep-2021 18:13:22', '2', 'Sigit Prasetyo', 'sigit@garudamart.com', 'Tue 14-Sep-2021', 'Tue 14-Sep-2021', '17', 'Sigit Prasetyo', 'backup dan cloning hdd to ssd laptop felix', '', 'inggrid@garudamart.com', '', '18:00', '20:00', 'sigit.jpg'),
(585, 'SPL-GMI-21-0495', '15-Sep-2021 15:21:56', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Wed 15-Sep-2021', 'Wed 15-Sep-2021', '2', 'Mohamad Ilvan Ridhoni', 'Anter barang ke Cargo Bandara (Driver Ahmad )', '', 'rizky@garudamart.com', '', '17:00', '22:30', 'dita.jpg'),
(586, 'SPL-GMI-21-0496', '15-Sep-2021 16:09:47', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Wed 15-Sep-2021', 'Wed 15-Sep-2021', '22', 'Toto Nihyana, Eko Kiswanto, Ahmad Haerul Huda, DEBI NUR WIBOWO', 'Instalasi UT', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(587, 'SPL-GMI-21-0497', '16-Sep-2021 15:11:26', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 16-Sep-2021', 'Thu 16-Sep-2021', '18', 'Aceng Rusnadi, Sunyoto, Kanisius Kefi, Violentino Felix Ardiyanto Utoyo, Yugo Miharjo Darkim, Supandi Irawan, Heri Setiawan, SLAMET RIYANTO, Nana Handayana, RUSMANTO, AHMAD NUR', 'bracket sabat , harnes spmc gis , assy loto sabat , jobcosting', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(588, 'SPL-GMI-21-0498', '16-Sep-2021 15:23:05', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Thu 16-Sep-2021', 'Thu 16-Sep-2021', '14', 'Angga Prayoga, Mohamad Ilvan Ridhoni, Amanda Maghfiroh Chairani, Rizky Bangkit Andrian', 'Pengerjaan Unit PO GIS  pc 1250, pc 850, JO LOTO BOX GIS ', '', 'yoseph@garudamart.com', '', '17:00', '20:00', 'rizky.jpg'),
(590, 'SPL-GMI-21-0500', '16-Sep-2021 15:31:14', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Thu 16-Sep-2021', 'Thu 16-Sep-2021', '2', 'Vincentia Hanna Wibowo', 'Input RI di accurate GIS &amp; tarik DO GMI', '', 'bunga@garudamart.com', '', '17:00', '20:45', 'tia.jpg'),
(591, 'SPL-GMI-21-0501', '17-Sep-2021 11:55:59', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Fri 17-Sep-2021', 'Fri 17-Sep-2021', '18', 'Violentino Felix Ardiyanto Utoyo', 'jobcosting', '', 'aceng@garudamart.com', '', '17:00', '20:30', 'felix.jpg'),
(592, 'SPL-GMI-21-0502', '17-Sep-2021 13:24:58', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Sat 18-Sep-2021', 'Sat 18-Sep-2021', '1', 'Azwita Febriyanti, Hulda Vincensia Masiglaat, Silvi Ramadianti', 'Hulda : Ngeprint &amp; tanda tangan voucher | silvi : Filling voucher | Wita : Filling invoice on process,paid,&amp; customer received', '', 'head.finance@garudamart.com', '', '09:00', '21:17', 'hulda.jpg'),
(593, 'SPL-GMI-21-0503', '17-Sep-2021 13:40:52', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Fri 17-Sep-2021', 'Fri 17-Sep-2021', '2', 'Bennedita Tambunan', 'Input List Outs PO dan DO kembali', '', 'bunga@garudamart.com', '', '17:00', '21:00', 'dita.jpg'),
(594, 'SPL-GMI-21-0504', '17-Sep-2021 13:41:36', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Fri 17-Sep-2021', 'Fri 17-Sep-2021', '22', 'Grace Dessyca Kahiking', 'Laporan Quotation, Rekap PO KPP buat BAST', '', 'anna@garudamart.com', '', '17:00', '21:00', 'grace.jpg'),
(595, 'SPL-GMI-21-0505', '17-Sep-2021 13:42:34', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Sat 18-Sep-2021', 'Sat 18-Sep-2021', '22', 'Grace Dessyca Kahiking', 'Jobcosting, filling SO', '', 'anna@garudamart.com', '', '09:00', '15:00', 'grace.jpg'),
(596, 'SPL-GMI-21-0506', '17-Sep-2021 13:42:26', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Sat 18-Sep-2021', 'Sat 18-Sep-2021', '2', 'Bennedita Tambunan', 'Update List DO-IT', '', 'bunga@garudamart.com', '', '09:00', '11:00', 'dita.jpg'),
(597, 'SPL-GMI-21-0507', '17-Sep-2021 14:12:32', '2', 'P. Albert', 'shintaminii027@gmail.com', 'Sat 18-Sep-2021', 'Sat 18-Sep-2021', '15', 'Alberthus Tandek', 'Manufactur harness spmc cat 777 (10 set) ', '', 'inggrid@garudamart.com', '', '08:00', '17:00', 'sinta.jpg'),
(598, 'SPL-GMI-21-0508', '17-Sep-2021 14:44:40', '2', 'Alfons', 'shintaminii027@gmail.com', 'Sat 18-Sep-2021', 'Sat 18-Sep-2021', '15', 'Alfons Vicky Daniels', 'Mengerjakan data manual untuk gudang', '', 'inggrid@garudamart.com', '', '08:00', '17:00', 'sinta.jpg'),
(599, 'SPL-GMI-21-0509', '17-Sep-2021 14:45:59', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Sat 18-Sep-2021', 'Sat 18-Sep-2021', '2', 'Sheintriana Ayu Putri', 'Input List PO, Failing', '', 'bunga@garudamart.com', '', '09:00', '15:00', 'tia.jpg'),
(601, 'SPL-GMI-21-0511', '17-Sep-2021 14:48:57', '4', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Fri 17-Sep-2021', 'Fri 17-Sep-2021', '2', 'Vincentia Hanna Wibowo', ' Tarik DO GMI &amp; RI di Accurate GIS', '', 'bunga@garudamart.com', '', '17:00', '20:00', 'tia.jpg'),
(602, 'SPL-GMI-21-0512', '17-Sep-2021 15:51:03', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Fri 17-Sep-2021', 'Fri 17-Sep-2021', '14', 'Jacky Haryanto, Angga Prayoga, Amanda Maghfiroh Chairani, Muhammad Rivaldi, Rizky Bangkit Andrian', 'PM : Prepare PO GIS || Admin : Laporan Mingguan ', '', 'rizky@garudamart.com', '', '18:00', '20:00', 'manda.jpg'),
(603, 'SPL-GMI-21-0513', '17-Sep-2021 16:07:53', '', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sat 18-Sep-2021', 'Sat 18-Sep-2021', '18', 'Aceng Rusnadi, Sunyoto, Kanisius Kefi, Heri Setiawan, SLAMET RIYANTO, Nana Handayana, RUSMANTO, AHMAD NUR', 'all bracket &amp; test harnes spmc hd 785 + cable batre', '', 'aceng@garudamart.com', '', '08:00', '21:00', 'felix.jpg'),
(604, 'SPL-GMI-21-0514', '20-Sep-2021 16:15:01', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Mon 20-Sep-2021', 'Mon 20-Sep-2021', '22', 'Toto Nihyana, Ahmad Sugiyanto, Ahmad Haerul Huda, Kanisius Kefi', 'Instalasi UT SKP', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(605, 'SPL-GMI-21-0515', '21-Sep-2021 14:26:28', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Tue 21-Sep-2021', 'Tue 21-Sep-2021', '2', 'Mohamad Ilvan Ridhoni', 'Anter barang ke Cargo Bandara (Driver Ahmad )', '', 'rizky@garudamart.com', '', '17:00', '22:34', 'dita.jpg'),
(606, 'SPL-GMI-21-0516', '21-Sep-2021 15:04:15', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Tue 21-Sep-2021', 'Tue 21-Sep-2021', '2', 'Bunga Ratnani', 'kalkalasi PO GIS', '', 'bunga@garudamart.com', '', '17:00', '20:30', 'bunga.jpg'),
(607, 'SPL-GMI-21-0517', '21-Sep-2021 16:31:28', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Tue 21-Sep-2021', 'Tue 21-Sep-2021', '18', 'Kanisius Kefi, Alek Gunawan, SLAMET RIYANTO, AHMAD NUR', 'All bracket', '', 'aceng@garudamart.com', '', '18:00', '01:18', 'felix.jpg'),
(608, 'SPL-GMI-21-0518', '21-Sep-2021 12:07:27', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Tue 21-Sep-2021', 'Thu 23-Sep-2021', '23', 'Mu Inggrid, Grace Dessyca Kahiking', 'Absensi', '', 'anna@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(609, 'SPL-GMI-21-0519', '21-Sep-2021 16:42:32', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Tue 21-Sep-2021', 'Tue 21-Sep-2021', '22', 'Ahmad Sugiyanto, Iwan Ase, Ahmad Haerul Huda, Sabri, DEBI NUR WIBOWO', 'Instalasi Trakindo 2 Unit D6R', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(610, 'SPL-GMI-21-0520', '22-Sep-2021 14:19:45', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Wed 22-Sep-2021', 'Wed 22-Sep-2021', '2', 'Bennedita Tambunan, Vincentia Hanna Wibowo', 'Tia : kalkulasi PO GIS &amp; failing landed cost | DIta : Input List DO IT &amp; List serial number', '', 'bunga@garudamart.com', '', '17:00', '20:15', 'tia.jpg');
INSERT INTO `spl` (`id`, `kode_spl`, `date_created`, `status`, `nama`, `email`, `tanggal`, `date_end`, `divisi`, `anggota`, `pekerjaan`, `mengetahui`, `emailhead`, `note`, `jam`, `kembali`, `foto`) VALUES
(611, 'SPL-GMI-21-0521', '22-Sep-2021 14:52:05', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Wed 22-Sep-2021', 'Wed 22-Sep-2021', '1', 'Azwita Febriyanti, Hulda Vincensia Masiglaat', 'Hulda : input bank 647 | Wita : laporan Fee marketing', '', 'head.finance@garudamart.com', '', '18:00', '21:10', 'hulda.jpg'),
(612, 'SPL-GMI-21-0522', '22-Sep-2021 15:39:46', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Wed 22-Sep-2021', 'Wed 22-Sep-2021', '14', 'Jacky Haryanto, Angga Prayoga, Mohamad Ilvan Ridhoni, Amanda Maghfiroh Chairani, Muhammad Rivaldi, Rizky Bangkit Andrian', 'prepare SPMC D10T, SPK GIS gd535, MR GIS,dan IT', '', 'rizky@garudamart.com', '', '17:00', '20:00', 'rizky.jpg'),
(613, 'SPL-GMI-21-0523', '22-Sep-2021 16:34:25', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Wed 22-Sep-2021', 'Wed 22-Sep-2021', '2', 'Bunga Ratnani', 'Kalkulasi instalasi GIS', '', 'bunga@garudamart.com', '', '17:00', '19:30', 'bunga.jpg'),
(614, 'SPL-GMI-21-0524', '23-Sep-2021 07:18:01', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Mon 20-Sep-2021', 'Mon 20-Sep-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' -reset spmc Dt 4384 (cabut cn1) -reset fault -download - backup assembly ex 1201 ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(615, 'SPL-GMI-21-0525', '23-Sep-2021 07:20:18', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Tue 21-Sep-2021', 'Tue 21-Sep-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', 'backup assembling ex1201 di pama mtbu -diskusi dngan pak kusno dan pihak kpp terkait trouble 1unit HD KPP lahat', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(616, 'SPL-GMI-21-0526', '23-Sep-2021 07:22:27', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Wed 22-Sep-2021', 'Wed 22-Sep-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', 'Backup assembling DT4220, DT4221  -Instal Spmc EX1201 &gt; instal bracket dan spmc,instal bracket dan switch box,koneksi thermistor,dc converter,radio  ', '', 'suhail@garudamart.com', '', '07:00', '19:00', 'risman.jpg'),
(617, 'SPL-GMI-21-0527', '23-Sep-2021 13:33:25', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Tue 21-Sep-2021', 'Tue 21-Sep-2021', '18', 'Kanisius Kefi, Alek Gunawan, SLAMET RIYANTO, AHMAD NUR', 'bracket dozer spmc', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(618, 'SPL-GMI-21-0528', '23-Sep-2021 15:13:22', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Thu 23-Sep-2021', 'Thu 23-Sep-2021', '2', 'Mohamad Ilvan Ridhoni', 'Anter barang ke Cargo Bandara (Driver Ahmad )', '', 'rizky@garudamart.com', '', '17:03', '22:30', 'dita.jpg'),
(619, 'SPL-GMI-21-0529', '23-Sep-2021 14:23:28', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 23-Sep-2021', 'Thu 23-Sep-2021', '18', 'Kanisius Kefi, Alek Gunawan, SLAMET RIYANTO, AHMAD NUR', 'bracket intalasi ut', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(620, 'SPL-GMI-21-0530', '23-Sep-2021 16:59:36', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Thu 23-Sep-2021', 'Thu 23-Sep-2021', '2', 'Angga Prayoga, Vincentia Hanna Wibowo', 'Angga : Stand by untuk tender SIS (ambil part req pak andre) | Tia : Assist Pak Andre untuk tender SIS', '', 'bunga@garudamart.com', '', '17:00', '20:00', 'tia.jpg'),
(622, 'SPL-GMI-21-0532', '23-Sep-2021 19:06:25', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Thu 23-Sep-2021', 'Thu 23-Sep-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', 'continue Ex1201 &gt; routing harness worklamp,strobe lamp,koneksi worklamp,strobelamp cabun &gt;routing harness main power, &gt;routing dan koneksi harness worklamp counterweight &gt;routing harness lotto ', '', 'suhail@garudamart.com', '', '07:00', '19:00', 'risman.jpg'),
(624, 'SPL-GMI-21-0534', '24-Sep-2021 12:56:50', '2', 'P. Albert', 'shintaminii027@gmail.com', 'Sat 25-Sep-2021', 'Sun 26-Sep-2021', '15', 'Alberthus Tandek', 'electrical 747 di PAMA Erka', '', 'inggrid@garudamart.com', '', '08:00', '17:00', 'sinta.jpg'),
(625, 'SPL-GMI-21-0535', '24-Sep-2021 13:14:16', '', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sat 25-Sep-2021', 'Sat 25-Sep-2021', '18', 'Aceng Rusnadi, Sunyoto, Kanisius Kefi, Violentino Felix Ardiyanto Utoyo, Yugo Miharjo Darkim, Heri Setiawan, SLAMET RIYANTO, Nana Handayana, RUSMANTO, AHMAD NUR', 'pindahan ruko dan beres beres ruko, pak Aceng lanjut ke Cikarang', '', 'aceng@garudamart.com', '', '08:00', '17:00', 'felix.jpg'),
(626, 'SPL-GMI-21-0536', '24-Sep-2021 14:06:51', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Fri 24-Sep-2021', 'Fri 24-Sep-2021', '2', 'Bunga Ratnani', 'jobcosting SPMC Trakindo', '', 'bunga@garudamart.com', '', '17:00', '20:00', 'bunga.jpg'),
(627, 'SPL-GMI-21-0537', '24-Sep-2021 14:08:50', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Sat 25-Sep-2021', 'Sat 25-Sep-2021', '2', 'Bunga Ratnani', 'kalkulasi instalasi GIS, jobcosting, adjustment 2020, stock minus 2021, IT', '', 'bunga@garudamart.com', '', '09:00', '19:00', 'bunga.jpg'),
(628, 'SPL-GMI-21-0538', '24-Sep-2021 15:34:15', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Fri 24-Sep-2021', 'Fri 24-Sep-2021', '2', 'Vincentia Hanna Wibowo', 'Tarik RI GIS &amp; DO GMI', '', 'bunga@garudamart.com', '', '17:00', '21:00', 'tia.jpg'),
(629, 'SPL-GMI-21-0539', '24-Sep-2021 14:02:43', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Fri 24-Sep-2021', 'Fri 24-Sep-2021', '14', 'Jacky Haryanto, Angga Prayoga, Mohamad Ilvan Ridhoni, Muhammad Rivaldi, Rizky Bangkit Andrian', 'prepare d8t, cat 777, partial jo harnes hd785 30 set', '', 'yoseph@garudamart.com', '', '17:59', '20:00', 'rizky.jpg'),
(630, 'SPL-GMI-21-0540', '24-Sep-2021 15:54:44', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Sat 25-Sep-2021', 'Sat 25-Sep-2021', '14', 'Amanda Maghfiroh Chairani', 'Laporan Mingguan, finishing sheet &quot;NEW&quot; dan cek it instalasi GIS', '', 'RIZKY@garudamart.com', '', '09:00', '17:00', 'manda.jpg'),
(631, 'SPL-GMI-21-0541', '24-Sep-2021 15:57:14', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Fri 24-Sep-2021', 'Fri 24-Sep-2021', '22', 'Ahmad Sugiyanto, Ahmad Haerul Huda, Kanisius Kefi, Sabri, CAHYADI SETIAWAN', 'Instalasi Kobelco Cibitung', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(632, 'SPL-GMI-21-0542', '24-Sep-2021 15:59:29', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Sat 25-Sep-2021', 'Sat 25-Sep-2021', '22', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri, DEBI NUR WIBOWO, CAHYADI SETIAWAN', 'Instalasi D10T Trakindo', '', 'anna@garudamart.com', '', '08:00', '16:00', 'grace.jpg'),
(633, 'SPL-GMI-21-0543', '24-Sep-2021 16:58:26', '2', 'Sri Yulianti', 'head.finance@garudamart.com', 'Fri 24-Sep-2021', 'Fri 24-Sep-2021', '1', 'Sri Yulianti, Anisa', 'Persiapan pemeriksaan Pajak', '', 'sulissetia@garudamart.com', '', '17:00', '20:00', 'cewe.png'),
(634, 'SPL-GMI-21-0544', '24-Sep-2021 17:17:01', '2', 'Metahsari', 'methasari@garudamart.com', 'Fri 24-Sep-2021', 'Fri 24-Sep-2021', '2', 'Metahsari', 'Input IT GIS', '', 'bunga@garudamart.com', '', '17:00', '21:00', 'metah.jpg'),
(635, 'SPL-GMI-21-0545', '24-Sep-2021 17:23:34', '2', 'P. Urbanus', 'shintaminii027@gmail.com', 'Fri 24-Sep-2021', 'Fri 24-Sep-2021', '15', 'Urbanus Tombi', 'Jemput P. Albert di PAMA', '', 'inggrid@garudamart.com', '', '17:00', '19:00', 'sinta.jpg'),
(636, 'SPL-GMI-21-0546', '24-Sep-2021 19:17:12', '', 'Muhamad Risman', 'risman.omod@gmail.com', 'Fri 24-Sep-2021', 'Fri 24-Sep-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', 'continue ex1201 &gt;instal lotto out&amp;cab dan koneksi harnes &gt;koneksi main power &gt;koneksi start key &gt;koneksi harness horn &gt; TS OP FWD SHORT &gt;setting -download', '', 'suhail@garudamart.com', '', '07:00', '19:00', 'risman.jpg'),
(637, 'SPL-GMI-21-0547', '25-Sep-2021 09:27:48', '', 'Sri Yulianti', 'head.finance@garudamart.com', 'Sat 25-Sep-2021', 'Sat 25-Sep-2021', '1', 'Sri Yulianti', 'Persiapan Dokumen pemeriksaan Pajak', '', 'sulissetia@garudamart.com', '', '08:30', '19:00', 'cewe.png'),
(638, 'SPL-GMI-21-0548', '25-Sep-2021 18:41:30', '', 'Muhamad Risman', 'risman.omod@gmail.com', 'Sat 25-Sep-2021', 'Sat 25-Sep-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', '-Continue Ex1201 -TS OP FWD SHORT, ganti lampu counterweight (PMP) -koneksi firesurpression -komisioning internal Pama ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(639, 'SPL-GMI-21-0549', '27-Sep-2021 15:55:47', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 27-Sep-2021', 'Mon 27-Sep-2021', '18', 'Sunyoto, Kanisius Kefi, Supandi Irawan, Alek Gunawan, Heri Setiawan, SLAMET RIYANTO, Nana Handayana, AHMAD NUR', 'BRACKET D10T &amp; HARNES PC 2000 &amp; HD785', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(640, 'SPL-GMI-21-0550', '27-Sep-2021 17:15:24', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Mon 27-Sep-2021', 'Mon 27-Sep-2021', '2', 'Mohamad Ilvan Ridhoni', 'Anter barang ke cargo garuda (driver ahmad)', '', 'Rizky@garudamart.com', '', '17:00', '22:00', 'dita.jpg'),
(641, 'SPL-GMI-21-0551', '27-Sep-2021 19:01:50', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Mon 27-Sep-2021', 'Mon 27-Sep-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', 'komisioning Ex1201 oleh PT.BA -Koneksi lampu rotary,lampu kerja,lampu kabut,setting idle timer,f/warning,download spmc DT 4221,DT4238 ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(642, 'SPL-GMI-21-0552', '28-Sep-2021 08:36:00', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Tue 28-Sep-2021', 'Tue 28-Sep-2021', '2', 'Bunga Ratnani', 'Kalkulasi instalasi GIS', '', 'bunga@garudamart.com', '', '17:00', '19:45', 'bunga.jpg'),
(643, 'SPL-GMI-21-0553', '28-Sep-2021 16:51:31', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Tue 28-Sep-2021', 'Tue 28-Sep-2021', '22', 'Toto Nihyana, Iwan Ase, Eko Kiswanto, DEBI NUR WIBOWO', 'Instalasi Unit Scania UT Jababeka', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(644, 'SPL-GMI-21-0554', '28-Sep-2021 16:52:27', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Tue 28-Sep-2021', 'Tue 28-Sep-2021', '22', 'M. Suhail S, Ahmad Sugiyanto, Ahmad Haerul Huda, Sabri, CAHYADI SETIAWAN', 'Instalasi D10T Trakindo', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(645, 'SPL-GMI-21-0555', '28-Sep-2021 17:32:52', '', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Tue 28-Sep-2021', 'Tue 28-Sep-2021', '18', 'Sunyoto, Yugo Miharjo Darkim, Heri Setiawan, Nana Handayana, RUSMANTO, Ahmad Nur', 'cable batre , lotobox &amp; harnes', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(646, 'SPL-GMI-21-0556', '28-Sep-2021 18:37:59', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Tue 28-Sep-2021', 'Wed 29-Sep-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' -Backup Assembly D155 DZ1166 -Koneksi lampu rotary,lampu kerja,lampu kabut,setting idle timer,f/warning,download spmc DT 4220 ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(647, 'SPL-GMI-21-0557', '29-Sep-2021 09:36:02', '2', 'Siti Anisa Maelani', 'anisa@garudamart.com', 'Tue 28-Sep-2021', 'Tue 28-Sep-2021', '1', 'Sri Yulianti', 'Meeting pemeriksaan Pajak', '', 'head.finance@garudamart.com', '', '18:00', '19:20', 'anisa.jpg'),
(648, 'SPL-GMI-21-0558', '29-Sep-2021 11:15:34', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Wed 29-Sep-2021', 'Wed 29-Sep-2021', '22', 'Grace Dessyca Kahiking', 'Jobcosting', '', 'anna@garudamart.com', '', '17:00', '20:30', 'grace.jpg'),
(649, 'SPL-GMI-21-0559', '29-Sep-2021 13:47:23', '2', 'Bennedita Tambunan', 'dita@garudamart.com', 'Wed 29-Sep-2021', 'Wed 29-Sep-2021', '2', 'Bennedita Tambunan', 'LIst Outs PO dan DO Kembali , List DO-IT', '', 'bunga@garudamart.com', '', '17:00', '21:10', 'dita.jpg'),
(650, 'SPL-GMI-21-0560', '29-Sep-2021 13:53:08', '2', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Wed 29-Sep-2021', 'Wed 29-Sep-2021', '1', 'Hulda Vincensia Masiglaat', 'Rekap pengeluaran stok dapur sept 2021', '', 'Head.finance@garudamart.com', '', '18:00', '21:10', 'hulda.jpg'),
(651, 'SPL-GMI-21-0561', '29-Sep-2021 15:15:09', '2', 'Amanda Maghfiroh Chairani', 'amanda@garudamart.com', 'Wed 29-Sep-2021', 'Wed 29-Sep-2021', '14', 'Jacky Haryanto, Angga Prayoga, Mohamad Ilvan Ridhoni, Amanda Maghfiroh Chairani, Rizky Bangkit Andrian', 'Prepare SPMC 777 (5 set) dan JO D155 ', '', 'rizky@garudamart.com', '', '18:00', '21:10', 'manda.jpg'),
(652, 'SPL-GMI-21-0562', '29-Sep-2021 15:17:31', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Wed 29-Sep-2021', 'Wed 29-Sep-2021', '2', 'Bunga Ratnani', 'Kalkulasi instalasi GIS, jobcosting', '', 'bunga@garudamart.com', '', '17:00', '20:00', 'bunga.jpg'),
(653, 'SPL-GMI-21-0563', '29-Sep-2021 16:03:10', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Wed 29-Sep-2021', 'Wed 29-Sep-2021', '18', 'Aceng Rusnadi, Sunyoto, Kanisius Kefi, Alek Gunawan, Heri Setiawan, SLAMET RIYANTO, Nana Handayana, RUSMANTO, AHMAD NUR', 'all bracket &amp; test harnes spmc hd 785 + cable batre', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(654, 'SPL-GMI-21-0564', '29-Sep-2021 17:02:45', '', 'P. Urbanus', 'shintaminii027@gmail.com', 'Wed 29-Sep-2021', 'Wed 29-Sep-2021', '15', 'Urbanus Tombi', 'Jemput P. Albert di Pama Kariangau', '', 'inggrid@garudamart.com', '', '17:00', '18:15', 'sinta.jpg'),
(655, 'SPL-GMI-21-0565', '29-Sep-2021 18:54:26', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Wed 29-Sep-2021', 'Wed 29-Sep-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' -Check koneksi FWD lamp DT 4220  -Reposisi lotto box dz1166 -koneksi lotto box  -check koneksi strobe lamp,worklamp,opt lamp -test esd in out Download spmc ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(656, 'SPL-GMI-21-0566', '30-Sep-2021 16:04:02', '2', 'P. Urbanus', 'shintaminii027@gmail.com', 'Thu 30-Sep-2021', 'Thu 30-Sep-2021', '15', 'Urbanus Tombi', 'jemput P. Albert di Pama Kariangau', '', 'inggrid@garudamart.com', '', '17:00', '18:20', 'sinta.jpg'),
(657, 'SPL-GMI-21-0567', '30-Sep-2021 19:07:17', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Thu 30-Sep-2021', 'Thu 30-Sep-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' -Komisioning internal Pama DT4220,4221,4238,DZ1166 -Backup assembling DT4334,4234,4243 -Replace Braket spmc ex1202 ', '', 'suhail@garudamart.com', '', '07:00', '19:00', 'risman.jpg'),
(658, 'SPL-GMI-21-0568', '01-Oct-2021 13:38:31', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Thu 30-Sep-2021', 'Thu 30-Sep-2021', '18', 'Sunyoto, Yugo Miharjo Darkim, Heri Setiawan, Nana Handayana, RUSMANTO', 'spmc &amp; lotobox', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(659, 'SPL-GMI-21-0569', '01-Oct-2021 14:56:25', '2', 'Bunga Ratnani', 'ahmadfirdauss334@gmail.com', 'Sat 02-Oct-2021', 'Sat 02-Oct-2021', '2', 'Bunga Ratnani', 'kalkulasi instalasi GIS, jobcosting, adjustment 2020, stock minus', '', 'bunga@garudamart.com', '', '09:00', '17:00', 'bunga.jpg'),
(660, 'SPL-GMI-21-0570', '01-Oct-2021 13:40:40', '', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Sat 02-Oct-2021', 'Sat 02-Oct-2021', '18', 'Aceng Rusnadi, Sunyoto, Violentino Felix Ardiyanto Utoyo, Yugo Miharjo Darkim, Heri Setiawan', 'all bracket&amp; harnes spmc | Felix: Job costing', '', 'aceng@garudamart.com', '', '08:00', '17:41', 'felix.jpg'),
(661, 'SPL-GMI-21-0571', '01-Oct-2021 13:33:55', '', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Fri 01-Oct-2021', 'Fri 01-Oct-2021', '14', 'Rizky Bangkit Andrian', 'Monitoring instalasi RAK, gudang j3', '', 'yoseph@garudamart.com', '', '17:00', '19:00', 'rizky.jpg'),
(662, 'SPL-GMI-21-0572', '01-Oct-2021 15:15:18', '2', 'Vincentia Hanna Wibowo', 'tia@garudamart.com', 'Fri 01-Oct-2021', 'Fri 01-Oct-2021', '2', 'Vincentia Hanna Wibowo', 'kalkulasi PO GIS', '', 'bunga@garudamart.com', '', '18:00', '21:00', 'tia.jpg'),
(663, 'SPL-GMI-21-0573', '01-Oct-2021 15:23:10', '2', 'Rizky  Bangkit Andrian', 'rizky@garudamart.com', 'Sat 02-Oct-2021', 'Sat 02-Oct-2021', '14', 'Mohamad Ilvan Ridhoni, Amanda Maghfiroh Chairani, Rizky Bangkit Andrian', 'lay out gudang j3, penempatan rak, prepare cat 777 5 unit', '', 'yoseph@garudamart.com', 'Amanda 19:00 | Rizky&amp;Ilvan 17:00', '08:00', '21:00', 'rizky.jpg'),
(664, 'SPL-GMI-21-0574', '01-Oct-2021 15:58:36', '2', 'Mu Inggrid', 'inggrid@garudamart.com', 'Sat 02-Oct-2021', 'Sat 02-Oct-2021', '23', 'Alberthus Tandek, Ferdianus Lambe Manggasa, MARKUS PALIMBONG', 'Manufacturing Harnes SPMC 10 Set', '', 'anna@garudamart.com', '', '08:00', '21:00', 'inggrid.jpg'),
(665, 'SPL-GMI-21-0575', '01-Oct-2021 16:01:21', '', 'Hulda Vincensia Masiglaat', 'hulda@garudamart.com', 'Sat 02-Oct-2021', 'Sat 02-Oct-2021', '1', 'Siti Anisa Maelani, Azwita Febriyanti, Hulda Vincensia Masiglaat, Silvi Ramadianti, Sri Yulianti', 'Yuli &amp; anisa :  laporan pajak | wita : update bank, customer received &amp; tarik invoice customer | hulda : update petty cash | silvi : filling voucher', '', 'Head.finance@garudamart.com', 'Yuli&amp;Anisa 17.30 | Silvi 19.10 | Hulda&amp;Wita 21.37', '08:00', '21:37', 'hulda.jpg'),
(666, 'SPL-GMI-21-0576', '01-Oct-2021 16:53:21', '', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Fri 01-Oct-2021', 'Fri 01-Oct-2021', '18', 'Kanisius Kefi, SLAMET RIYANTO, AHMAD NUR', 'bracket cshape dan bracket modul pc 2000', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(667, 'SPL-GMI-21-0577', '01-Oct-2021 16:43:32', '2', 'Metahsari', 'methasari@garudamart.com', 'Fri 01-Oct-2021', 'Fri 01-Oct-2021', '2', 'Metahsari', 'Input IT GIS', '', 'bunga@garudamart.com', '', '18:00', '21:00', 'metah.jpg'),
(668, 'SPL-GMI-21-0578', '01-Oct-2021 17:30:35', '2', 'Sri Yulianti', 'head.finance@garudamart.com', 'Fri 01-Oct-2021', 'Fri 01-Oct-2021', '1', 'Hulda Vincensia Masiglaat, Sri Yulianti', 'Persiapan Dokumen pemeriksaan Pajak, Update bank', '', 'sulissetia@garudamart.com', '', '17:00', '20:00', 'cewe.png'),
(669, 'SPL-GMI-21-0579', '01-Oct-2021 18:38:41', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Fri 01-Oct-2021', 'Fri 01-Oct-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', '  -Komisioning PT.BA  DT4220,4221,4238,DZ1166  -Progres BAST D375 (D511,D568)  -Instal spmc ex1202 &gt;Routing harness spmc -koneksi strobe,opt lamp,worklamp counterweight -replace switch box dan koneksi ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(670, 'SPL-GMI-21-0580', '02-Oct-2021 18:36:59', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Sat 02-Oct-2021', 'Sat 02-Oct-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', ' -Continue ex1202 &gt;koneksi starting switch,thermistor,dc converter,autolube,fire surpression,esd in out,routing harnes horn dan koneksi,koneksi ground harness,test fungsi,download  ', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(671, 'SPL-GMI-21-0581', '04-Oct-2021 10:30:16', '2', 'Grace Dessyca Kahiking', 'grace@garudamart.com', 'Sat 02-Oct-2021', 'Sun 03-Oct-2021', '22', 'Toto Nihyana, M. Suhail S, Ahmad Sugiyanto, Iwan Ase, Eko Kiswanto, Ahmad Haerul Huda, Sabri, DEBI NUR WIBOWO', 'Instalasi 17 Unit CAT 777E', '', 'anna@garudamart.com', '', '08:00', '17:00', 'grace.jpg'),
(672, 'SPL-GMI-21-0582', '04-Oct-2021 15:15:52', '2', 'Violentino Felix Ardiyanto Utoyo', 'felix@garudamart.com', 'Mon 04-Oct-2021', 'Mon 04-Oct-2021', '18', 'Sunyoto, Kanisius Kefi, Heri Setiawan, SLAMET RIYANTO, Nana Handayana, AHMAD NUR, Supandi Iranwan', 'bracket intalasi ut &amp; harnes spmc', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(673, 'SPL-GMI-21-0583', '04-Oct-2021 18:36:16', '2', 'Muhamad Risman', 'risman.omod@gmail.com', 'Mon 04-Oct-2021', 'Mon 04-Oct-2021', '13', 'Muhamad Risman, Ahmed Gibran Coreda', 'koneksi strobe,fwd lamp,fog lamp,setting f/alarm,idle timer,autolube,autolamp,testcesdcin out,download DT4334,4234,4243', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(674, 'SPL-GMI-21-0584', '05-Oct-2021 07:31:05', '2', 'Mu Inggrid', 'inggrid@garudamart.com', '', '', '23', 'Sri Yulianti', 'Meeting dengan Pak Andre u/ Persiapan pemeriksaan Pajak', '', 'anna@garudamart.com', '', '17:00', '20:00', 'inggrid.jpg'),
(675, 'SPL-GMI-21-0585', '05-Oct-2021 15:25:40', '2', 'Grace Dessyca Kahiking', '', 'Tue 05-Oct-2021', 'Tue 05-Oct-2021', 'SERVICE', '', '', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(676, 'SPL-GMI-21-0587', '05-Oct-2021 16:15:15', '2', 'Bunga Ratnani', '', 'Tue 05-Oct-2021', 'Tue 05-Oct-2021', 'LOGISTIC', '', '', '', 'bunga@garudamart.com', '', '17:00', '21:00', 'bunga.jpg'),
(677, 'SPL-GMI-21-0586', '05-Oct-2021 16:06:44', '2', 'Violentino Felix Ardiyanto Utoyo', '', 'Tue 05-Oct-2021', 'Tue 05-Oct-2021', 'MANUFAKTURE &amp; PABRICATION', '', '', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(678, 'SPL-GMI-21-0588', '05-Oct-2021 16:31:31', '2', 'Sigit Prasetyo', '', 'Tue 05-Oct-2021', 'Tue 05-Oct-2021', 'IT', '', '', '', 'hrd@garudamart.com', '', '18:00', '21:00', 'sigit.jpg'),
(679, 'SPL-GMI-21-0589', '05-Oct-2021 18:39:05', '2', 'Muhamad Risman', '', 'Tue 05-Oct-2021', 'Tue 05-Oct-2021', 'SERVICE', '', '', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(680, 'SPL-GMI-21-0590', '06-Oct-2021 12:33:08', '2', 'Hulda Vincensia Masiglaat', '', 'Wed 06-Oct-2021', 'Wed 06-Oct-2021', 'FINANCE', '', '', '', 'head.financegarudamart.com', '', '18:00', '20:15', 'hulda.jpg'),
(681, 'SPL-GMI-21-0591', '06-Oct-2021 14:56:07', '2', 'Bunga Ratnani', '', 'Wed 06-Oct-2021', 'Wed 06-Oct-2021', 'LOGISTIC', '', '', '', 'bunga@garudamart.com', '', '17:00', '20:30', 'bunga.jpg'),
(682, 'SPL-GMI-21-0592', '06-Oct-2021 15:17:40', '2', 'Violentino Felix Ardiyanto Utoyo', '', 'Wed 06-Oct-2021', 'Wed 06-Oct-2021', 'MANUFAKTURE &amp; PABRICATION', '', '', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(683, 'SPL-GMI-21-0593', '06-Oct-2021 15:34:19', '2', 'Grace Dessyca Kahiking', '', 'Wed 06-Oct-2021', 'Wed 06-Oct-2021', 'SERVICE', '', '', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(684, 'SPL-GMI-21-0594', '06-Oct-2021 15:37:39', '2', 'Vincentia Hanna Wibowo', '', 'Wed 06-Oct-2021', 'Wed 06-Oct-2021', 'LOGISTIC', '', '', '', 'bunga@garudamart.com', '', '18:00', '20:30', 'tia.jpg'),
(685, 'SPL-GMI-21-0595', '06-Oct-2021 18:40:42', '2', 'Muhamad Risman', '', 'Wed 06-Oct-2021', 'Wed 06-Oct-2021', 'SERVICE', '', '', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(686, 'SPL-GMI-21-0596', '07-Oct-2021 11:45:57', '2', 'Violentino Felix Ardiyanto Utoyo', '', 'Thu 07-Oct-2021', 'Thu 07-Oct-2021', 'MANUFAKTURE &amp; PABRICATION', '', '', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(687, 'SPL-GMI-21-0597', '07-Oct-2021 13:04:41', '2', 'Grace Dessyca Kahiking', '', 'Thu 07-Oct-2021', 'Thu 07-Oct-2021', 'MARKETING', '', '', '', 'anna@garudamart.com', '', '17:00', '20:30', 'grace.jpg'),
(688, 'SPL-GMI-21-0598', '07-Oct-2021 13:40:45', '2', 'Mohamad Ilvan Ridhoni', '', 'Thu 07-Oct-2021', 'Thu 07-Oct-2021', 'WAREHOUSE', '', '', '', 'Rizky@garudamart.com', '', '17:40', '23:00', 'ilvan.jpg'),
(689, 'SPL-GMI-21-0599', '07-Oct-2021 15:00:13', '2', 'Violentino Felix Ardiyanto Utoyo', '', 'Thu 07-Oct-2021', 'Thu 07-Oct-2021', 'MANUFAKTURE &amp; PABRICATION', '', '', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(690, 'SPL-GMI-21-0600', '07-Oct-2021 15:27:48', '2', 'Grace Dessyca Kahiking', '', 'Thu 07-Oct-2021', 'Thu 07-Oct-2021', 'SERVICE', '', '', '', 'anna@garudamart.com', '', '17:00', '19:00', 'grace.jpg'),
(691, 'SPL-GMI-21-0601', '07-Oct-2021 15:53:47', '2', 'Rizky  Bangkit Andrian', '', 'Thu 07-Oct-2021', 'Thu 07-Oct-2021', 'WAREHOUSE', '', '', '', 'rizky@garudamart.com', '', '17:00', '20:00', 'rizky.jpg'),
(692, 'SPL-GMI-21-0602', '07-Oct-2021 16:09:57', '2', 'Bennedita Tambunan ', '', 'Thu 07-Oct-2021', 'Thu 07-Oct-2021', 'LOGISTIC', '', '', '', 'bunga@garudamart.com', '', '17:00', '20:00', 'dita.jpg'),
(693, 'SPL-GMI-21-0603', '07-Oct-2021 17:18:37', '2', 'Metahsari', '', 'Thu 07-Oct-2021', 'Thu 07-Oct-2021', 'LOGISTIC', '', '', '', 'bunga@garudamart.com', '', '17:00', '20:30', 'metah.jpg'),
(694, 'SPL-GMI-21-0604', '08-Oct-2021 13:58:56', '2', 'P. Albert &amp; P. Markus', '', 'Sat 09-Oct-2021', 'Sat 09-Oct-2021', 'Mekanik', '', '', '', 'inggrid@garudamart.com', '', '08:00', '19:00', 'sinta.jpg'),
(695, 'SPL-GMI-21-0605', '08-Oct-2021 14:28:05', '2', 'Vincentia Hanna Wibowo', '', 'Fri 08-Oct-2021', 'Fri 08-Oct-2021', 'LOGISTIC', '', '', '', 'bunga@garudamart.com', '', '18:00', '21:30', 'tia.jpg'),
(698, 'SPL-GMI-21-0608', '08-Oct-2021 15:20:54', '2', 'Violentino Felix Ardiyanto Utoyo', '', 'Fri 08-Oct-2021', 'Sat 09-Oct-2021', 'MANUFAKTURE &amp; PABRICATION', '', '', '', 'aceng@garudamart.com', '', '08:00', '21:00', 'felix.jpg'),
(699, 'SPL-GMI-21-0607', '08-Oct-2021 15:35:09', '2', 'Grace Dessyca Kahiking', '', 'Sat 09-Oct-2021', 'Sat 09-Oct-2021', 'MARKETING', '', '', '', 'anna@garudamart.com', '', '08:00', '16:00', 'grace.jpg'),
(700, 'SPL-GMI-21-0609', '08-Oct-2021 15:37:01', '2', 'Bennedita Tambunan ', '', 'Fri 08-Oct-2021', 'Fri 08-Oct-2021', 'LOGISTIC', '', '', '', 'bunga@garudamart.com', '', '17:00', '21:30', 'dita.jpg'),
(701, 'SPL-GMI-21-0610', '08-Oct-2021 16:07:54', '2', 'Rizky  Bangkit Andrian', '', 'Fri 08-Oct-2021', 'Fri 08-Oct-2021', 'WAREHOUSE', '', '', '', 'yoseph@garudamart.com', '', '17:00', '20:00', 'rizky.jpg'),
(702, 'SPL-GMI-21-0611', '08-Oct-2021 16:24:50', '2', 'Rizky  Bangkit Andrian', '', 'Sat 09-Oct-2021', 'Sat 09-Oct-2021', 'WAREHOUSE', '', '', '', 'yoseph@garudamart.com', '', '08:00', '18:00', 'rizky.jpg'),
(704, 'SPL-GMI-21-0612', '08-Oct-2021 16:35:50', '2', 'Silvi Ramadianti', '', 'Fri 08-Oct-2021', 'Fri 08-Oct-2021', 'FINANCE', '', '', '', 'head.finance@garudamart.com', '', '18:00', '21:00', 'silvi1.jpg'),
(705, 'SPL-GMI-21-0613', '08-Oct-2021 17:02:42', '2', 'Mu Inggrid', '', 'Sat 09-Oct-2021', 'Sat 09-Oct-2021', 'HRD', '', '', '', 'inggrid@garudamart.com', '', '09:00', '17:00', 'inggrid.jpg'),
(706, 'SPL-GMI-21-0614', '08-Oct-2021 17:35:26', '2', 'Grace Dessyca Kahiking', '', 'Fri 08-Oct-2021', 'Fri 08-Oct-2021', 'SERVICE', '', '', '', 'anna@garudamart.com', '', '17:00', '20:00', 'grace.jpg'),
(707, 'SPL-GMI-21-0615', '08-Oct-2021 17:41:03', '2', 'Grace Dessyca Kahiking', '', 'Sat 09-Oct-2021', 'Sun 10-Oct-2021', 'SERVICE', '', '', '', 'anna@garudamart.com', '', '08:00', '17:00', 'grace.jpg'),
(708, 'SPL-GMI-21-0616', '08-Oct-2021 18:16:08', '3', 'Vincentia Hanna Wibowo', '', 'Sat 09-Oct-2021', 'Sat 09-Oct-2021', 'LOGISTIC', '', '', '', 'bunga@garudamart.com', '', '08:00', '13:00', 'tia.jpg'),
(709, 'SPL-GMI-21-0617', '08-Oct-2021 18:48:52', '2', 'Muhamad Risman', '', 'Thu 07-Oct-2021', 'Thu 07-Oct-2021', 'SERVICE', '', '', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(710, 'SPL-GMI-21-0618', '08-Oct-2021 18:51:38', '2', 'Muhamad Risman', '', 'Fri 08-Oct-2021', 'Fri 08-Oct-2021', 'SERVICE', '', '', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(711, 'SPL-GMI-21-0619', '09-Oct-2021 19:17:34', '2', 'Muhamad Risman', '', 'Sat 09-Oct-2021', 'Sat 09-Oct-2021', 'SERVICE', '', '', '', 'suhail@garudamart.com', '', '07:00', '19:00', 'risman.jpg'),
(712, 'SPL-GMI-21-0620', '09-Oct-2021 19:20:12', '2', 'Muhamad Risman', '', 'Sat 09-Oct-2021', 'Sat 09-Oct-2021', 'SERVICE', '', '', '', 'suhail@garudamart.com', '', '07:00', '19:00', 'risman.jpg'),
(713, 'SPL-GMI-21-0621', '11-Oct-2021 15:53:54', '2', 'Violentino Felix Ardiyanto Utoyo', '', 'Mon 11-Oct-2021', 'Tue 12-Oct-2021', 'MANUFAKTURE &amp; PABRICATION', '', '', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(714, 'SPL-GMI-21-0622', '11-Oct-2021 18:36:17', '2', 'Muhamad Risman', '', 'Mon 11-Oct-2021', 'Mon 11-Oct-2021', 'SERVICE', '', '', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(715, 'SPL-GMI-21-0623', '12-Oct-2021 15:36:56', '2', 'Mohamad Ilvan Ridhoni', '', 'Tue 12-Oct-2021', 'Tue 12-Oct-2021', 'WAREHOUSE', '', '', '', 'Rizky@garudamart.com', '', '17:00', '23:00', 'ilvan.jpg'),
(716, 'SPL-GMI-21-0624', '12-Oct-2021 15:45:17', '2', 'Violentino Felix Ardiyanto Utoyo', '', 'Tue 12-Oct-2021', 'Tue 12-Oct-2021', 'MANUFAKTURE &amp; PABRICATION', '', '', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(717, 'SPL-GMI-21-0625', '12-Oct-2021 16:08:50', '2', 'Hulda Vincensia Masiglaat', '', 'Tue 12-Oct-2021', 'Tue 12-Oct-2021', 'FINANCE', '', '', '', 'sulissetia@garudamart.com', '', '18:00', '21:00', 'hulda.jpg'),
(718, 'SPL-GMI-21-0626', '12-Oct-2021 16:23:34', '2', 'Rizky  Bangkit Andrian', '', 'Tue 12-Oct-2021', 'Tue 12-Oct-2021', 'WAREHOUSE', '', '', '', 'yoseph@garudamart.com', '', '17:00', '20:00', 'rizky.jpg'),
(719, 'SPL-GMI-21-0627', '12-Oct-2021 16:57:07', '2', 'Mu Inggrid', '', 'Tue 12-Oct-2021', 'Tue 12-Oct-2021', 'HRD', '', '', '', 'inggrid@garudamart.com', '', '17:00', '21:00', 'inggrid.jpg'),
(720, 'SPL-GMI-21-0628', '12-Oct-2021 18:38:04', '2', 'Muhamad Risman', '', 'Tue 12-Oct-2021', 'Tue 12-Oct-2021', 'SERVICE', '', '', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(721, 'SPL-GMI-21-0629', '12-Oct-2021 20:41:58', '2', 'Sigit Prasetyo', '', 'Tue 12-Oct-2021', 'Tue 12-Oct-2021', 'IT', '', '', '', 'hrd@garudamart.com', '', '17:00', '21:00', 'sigit.jpg'),
(722, 'SPL-GMI-21-0630', '13-Oct-2021 14:45:41', '2', 'Hulda Vincensia Masiglaat', '', 'Wed 13-Oct-2021', 'Wed 13-Oct-2021', 'FINANCE', '', '', '', 'sulissetia@garudamart.com', '', '18:00', '21:10', 'hulda.jpg'),
(723, 'SPL-GMI-21-0631', '13-Oct-2021 14:51:11', '2', 'Bunga Ratnani', '', 'Wed 13-Oct-2021', 'Wed 13-Oct-2021', 'LOGISTIC', '', '', '', 'bunga@garudamart.com', '', '17:00', '20:50', 'bunga.jpg'),
(724, 'SPL-GMI-21-0632', '13-Oct-2021 15:28:18', '2', 'Bennedita Tambunan ', '', 'Wed 13-Oct-2021', 'Wed 13-Oct-2021', 'LOGISTIC', '', '', '', 'bunga@garudamart.com', '', '17:00', '21:15', 'dita.jpg'),
(725, 'SPL-GMI-21-0633', '13-Oct-2021 15:32:00', '2', 'Violentino Felix Ardiyanto Utoyo', '', 'Wed 13-Oct-2021', 'Wed 13-Oct-2021', 'MANUFAKTURE &amp; PABRICATION', '', '', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(726, 'SPL-GMI-21-0634', '13-Oct-2021 17:09:26', '2', 'Sri Yulianti', '', 'Wed 13-Oct-2021', 'Wed 13-Oct-2021', 'FINANCE', '', '', '', 'Yuli | Head Finance (head.finance@garudamart.com)', '', '18:00', '21:00', 'wita.jpg'),
(727, 'SPL-GMI-21-0635', '13-Oct-2021 18:38:18', '2', 'Muhamad Risman', '', 'Wed 13-Oct-2021', 'Wed 13-Oct-2021', 'SERVICE', '', '', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(728, 'SPL-GMI-21-0636', '14-Oct-2021 15:35:21', '2', 'Hulda Vincensia Masiglaat', '', 'Thu 14-Oct-2021', 'Thu 14-Oct-2021', 'FINANCE', '', '', '', 'head.finance@garudamart.com', '', '18:00', '21:20', 'hulda.jpg'),
(729, 'SPL-GMI-21-0637', '14-Oct-2021 16:16:44', '2', 'Amanda Maghfiroh Chairani', '', 'Thu 14-Oct-2021', 'Thu 14-Oct-2021', 'WAREHOUSE', '', '', '', 'rizky@garudamart.com', '', '18:00', '21:20', 'manda.jpg'),
(730, 'SPL-GMI-21-0638', '14-Oct-2021 16:23:11', '2', 'Violentino Felix Ardiyanto Utoyo', '', 'Thu 14-Oct-2021', 'Thu 14-Oct-2021', 'MANUFAKTURE &amp; PABRICATION', '', '', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(731, 'SPL-GMI-21-0639', '14-Oct-2021 19:01:40', '2', 'Muhamad Risman', '', 'Thu 14-Oct-2021', 'Thu 14-Oct-2021', 'SERVICE', '', '', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(732, 'SPL-GMI-21-0640', '15-Oct-2021 13:36:16', '2', 'IRINDA AULIYASARI H', '', 'Fri 15-Oct-2021', 'Fri 15-Oct-2021', 'LOGISTIC', '', '', '', 'bunga@garudamart.com', '', '18:00', '21:30', 'irinda.jpg'),
(733, 'SPL-GMI-21-0641', '15-Oct-2021 14:47:35', '2', 'Violentino Felix Ardiyanto Utoyo', '', 'Fri 15-Oct-2021', 'Fri 15-Oct-2021', 'MANUFAKTURE &amp; PABRICATION', '', '', '', 'aceng@garudamart.com', '', '18:00', '19:30', 'felix.jpg'),
(734, 'SPL-GMI-21-0642', '15-Oct-2021 15:11:24', '2', 'Vincentia Hanna Wibowo', '', 'Sat 16-Oct-2021', 'Sat 16-Oct-2021', 'LOGISTIC', '', '', '', 'bunga@garudamart.com', '', '08:00', '20:12', 'tia.jpg'),
(735, 'SPL-GMI-21-0643', '15-Oct-2021 15:27:41', '2', 'Grace Dessyca Kahiking', '', 'Sat 16-Oct-2021', 'Sat 16-Oct-2021', 'SERVICE', '', '', '', 'anna@garudamart.com', '', '08:00', '17:00', 'grace.jpg'),
(736, 'SPL-GMI-21-0644', '15-Oct-2021 15:17:18', '2', 'Bunga Ratnani', '', 'Fri 15-Oct-2021', 'Sat 16-Oct-2021', 'LOGISTIC', '', '', '', 'bunga@garudamart.com', '', '09:30', '20:02', 'bunga.jpg'),
(737, 'SPL-GMI-21-0645', '15-Oct-2021 15:29:55', '2', 'Violentino Felix Ardiyanto Utoyo', '', 'Fri 15-Oct-2021', 'Fri 15-Oct-2021', 'MANUFAKTURE &amp; PABRICATION', '', '', '', 'aceng@garudamart.com', '', '18:00', '21:00', 'felix.jpg'),
(738, 'SPL-GMI-21-0646', '15-Oct-2021 15:30:18', '2', 'Sinta Riski Anisa Putri', '', 'Sat 16-Oct-2021', 'Sat 16-Oct-2021', 'GANERAL AFFAIR', '', '', '', 'inggrid@garudamart.com', 'Albert 17:00 | Alfons 19:00', '08:00', '21:00', 'sinta.jpg'),
(740, 'SPL-GMI-21-0648', '15-Oct-2021 15:33:23', '2', 'Violentino Felix Ardiyanto Utoyo', '', 'Sat 16-Oct-2021', 'Sat 16-Oct-2021', 'MANUFAKTURE &amp; PABRICATION', '', '', '', 'aceng@garudamart.com', '', '08:00', '17:00', 'felix.jpg'),
(742, 'SPL-GMI-21-0650', '15-Oct-2021 15:41:30', '2', 'Bennedita Tambunan ', '', 'Fri 15-Oct-2021', 'Fri 15-Oct-2021', 'LOGISTIC', '', '', '', 'bunga@garudamart.com', '', '17:00', '21:30', 'dita.jpg'),
(743, 'SPL-GMI-21-0651', '15-Oct-2021 15:51:36', '2', 'Amanda Maghfiroh Chairani', '', 'Fri 15-Oct-2021', 'Fri 15-Oct-2021', 'WAREHOUSE', '', '', '', 'yoseph@garudamart.com', '', '18:00', '21:30', 'manda.jpg'),
(744, 'SPL-GMI-21-0652', '15-Oct-2021 16:11:51', '2', 'Hulda Vincensia Masiglaat', '', 'Sat 16-Oct-2021', 'Sat 16-Oct-2021', 'FINANCE', '', '', '', 'head.finance@garudamart.com', '', '09:00', '20:20', 'hulda.jpg'),
(745, 'SPL-GMI-21-0653', '15-Oct-2021 17:21:55', '2', 'Amanda Maghfiroh Chairani', '', 'Sat 16-Oct-2021', 'Sat 16-Oct-2021', 'WAREHOUSE', '', '', '', 'yoseph@garudamart.com', '', '08:00', '14:00', 'manda.jpg'),
(746, 'SPL-GMI-21-0654', '15-Oct-2021 18:49:14', '2', 'Muhamad Risman', '', '2021-09-15', '2021-09-15', 'SERVICE', '', '', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(748, 'SPL-GMI-21-0656', '17-Oct-2021 18:46:46', '2', 'Muhamad Risman', '', '2021-08-15', '2021-08-15', 'SERVICE', '', '', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(749, 'SPL-GMI-21-0657', '18-Oct-2021 14:39:06', '2', 'Grace Dessyca Kahiking', '', 'Mon 18-Oct-2021', 'Mon 18-Oct-2021', 'MARKETING', '', '', '', 'anna@garudamart.com', '', '17:00', '21:15', 'grace.jpg'),
(750, 'SPL-GMI-21-0658', '18-Oct-2021 16:06:51', '2', 'Mohamad Ilvan Ridhoni', '', 'Mon 18-Oct-2021', 'Mon 18-Oct-2021', 'WAREHOUSE', '', '', '', 'Rizky@garudamart.com', '', '17:00', '23:12', 'ilvan.jpg'),
(751, 'SPL-GMI-21-0659', '18-Oct-2021 16:23:58', '2', 'Amanda Maghfiroh Chairani', '', 'Mon 18-Oct-2021', 'Mon 18-Oct-2021', 'WAREHOUSE', '', '', '', 'rizky@garudamart.com', '', '18:00', '19:53', 'manda.jpg'),
(752, 'SPL-GMI-21-0660', '18-Oct-2021 17:02:37', '2', 'Violentino Felix Ardiyanto Utoyo', '', 'Mon 18-Oct-2021', 'Mon 18-Oct-2021', 'MANUFAKTURE &amp; PABRICATION', '', '', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(753, 'SPL-GMI-21-0661', '18-Oct-2021 18:36:29', '2', 'Muhamad Risman', '', 'Mon 18-Oct-2021', 'Mon 18-Oct-2021', 'SERVICE', '', '', '', 'suhail@garudamart.com', '', '07:00', '18:30', 'risman.jpg'),
(754, 'SPL-GMI-21-0662', '19-Oct-2021 16:18:48', '2', 'Violentino Felix Ardiyanto Utoyo', '', 'Tue 19-Oct-2021', 'Wed 20-Oct-2021', 'MANUFAKTURE &amp; PABRICATION', '', '', '', 'aceng@garudamart.com', '', '17:00', '21:00', 'felix.jpg'),
(755, 'SPL-GMI-21-0663', '25-Oct-2021 08:22:29', '1', 'Sigit Prasetyo', '', '2021-10-25', '2021-10-25', 'IT', '', '', '', 'inggrid@garudamart.com', '', '14:22', '17:22', 'sigit.jpg'),
(756, 'SPL-GMI-21-0664', '16-Nov-2021 09:16:56', '1', 'Sigit Prasetyo', '', '2021-11-16', '2021-11-16', 'IT', '', '', '', 'inggrid@garudamart.com', '', '18:00', '21:00', 'sigit.jpg'),
(757, 'SPL-GMI-21-0665', '16-Nov-2021 09:18:48', '1', 'Sigit Prasetyo', '', '2021-11-16', '2021-11-17', 'IT', '', '', '', 'inggrid@garudamart.com', '', '15:19', '17:18', 'sigit.jpg');

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
(27, 4, 4),
(28, 2, 4),
(29, 4, 13),
(30, 10, 1),
(31, 10, 3),
(32, 10, 13),
(33, 11, 3),
(34, 11, 13),
(35, 4, 14);

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
(2, 'HRD'),
(3, 'User'),
(4, 'GA'),
(5, 'Menu');

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
(1, 'Admin'),
(2, 'HRD'),
(3, 'Ga'),
(4, 'Super'),
(5, 'Member'),
(10, 'Admin Jo'),
(11, 'User Jo');

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
  `is_active` int(1) NOT NULL,
  `label` varchar(128) NOT NULL,
  `isi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`, `label`, `isi`) VALUES
(1, 2, 'Dashboard', 'Hrd', 'view-dashboard', 1, '', '0'),
(2, 2, 'Data Karyawan', 'Hrd/data_karyawan', 'accounts-outline', 1, '', '0'),
(18, 3, 'Home', 'User', 'home', 1, '', '0'),
(19, 3, 'Cuti', 'User/cuti', 'airline-seat-individual-suite', 1, '', '0'),
(20, 3, 'Izin', 'User/izin', 'airline-seat-flat', 1, '', '0'),
(22, 1, 'Data Cuti', 'Admin/admin_cuti', 'airline-seat-individual-suite', 1, 'label pull-right bg-green', 'tot-cuti'),
(23, 2, 'Data Izin', 'Hrd/admin_izin', 'airline-seat-flat', 1, 'label pull-right bg-blue', 'tot-izin'),
(24, 5, 'Menu', 'Menu', 'menu', 1, '', '0'),
(25, 5, 'Submenu', 'Menu/submenu', 'more-vert', 1, '', '0'),
(26, 5, 'Role', 'Admin/role', 'settings', 1, '', '0'),
(27, 3, 'Peminjaman', 'User/peminjaman', 'directions-car', 1, '', '0'),
(30, 4, 'Data Peminjaman', 'Ga/admin', 'directions-car', 1, 'label pull-right bg-gray-active color-palette', 'tot-pem'),
(31, 2, 'Data SPL', 'Hrd/admin_spl', 'puzzle-piece', 1, 'label pull-right bg-red', 'tot-spl'),
(32, 3, 'SPL', 'User/spl', 'puzzle-piece', 1, '', '0'),
(33, 2, 'Data Absen', 'Hrd/absen', 'hotel', 1, '', '0'),
(35, 2, 'Tambah Karyawan', 'Hrd/tambah_karyawan', 'accounts-add', 1, '', '0'),
(36, 5, 'Divisi', 'Menu/divisi', 'menu', 1, '', '0'),
(38, 2, 'Data Cuti / ACC Head', 'Hrd/cuti_acc', 'file', 1, 'label pull-right bg-blue', 'tot-cuti-acc'),
(39, 3, 'Kasbon', 'User/kasbon', 'money-box', 1, '', '0'),
(41, 2, 'Data Kasbon', 'Hrd/admin_kasbon', 'money-box', 1, 'label pull-right bg-yellow', 'tot-kasbon'),
(42, 3, 'Karyawan', 'User/user', 'accounts-list-alt', 1, '', '0'),
(43, 4, 'Atur Peminjaman', 'Ga', 'settings-square', 1, '', '0'),
(44, 3, 'Pengajuan MR', 'User/index_mr', 'shopping-cart-plus', 1, 'label pull-right bg-green', 'tot-mr_user'),
(45, 13, 'Data JO', 'Data_Jo', 'shopping-cart', 1, 'label pull-right bg-blue', ''),
(47, 4, 'Data MR', 'Ga/data_mr', 'shopping-cart-plus', 1, 'label pull-right bg-blue', 'tot-mr');

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
-- Indexes for table `input_mr`
--
ALTER TABLE `input_mr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_spl`
--
ALTER TABLE `input_spl`
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
-- Indexes for table `jo`
--
ALTER TABLE `jo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_jo` (`no_jo`);

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
-- Indexes for table `mr`
--
ALTER TABLE `mr`
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
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=574;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `input_kasbon`
--
ALTER TABLE `input_kasbon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `input_mr`
--
ALTER TABLE `input_mr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `input_spl`
--
ALTER TABLE `input_spl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;

--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

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
-- AUTO_INCREMENT for table `jo`
--
ALTER TABLE `jo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=866;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `kasbon`
--
ALTER TABLE `kasbon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mr`
--
ALTER TABLE `mr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `role_menu`
--
ALTER TABLE `role_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spl`
--
ALTER TABLE `spl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=758;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
