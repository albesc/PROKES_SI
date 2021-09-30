-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 04:18 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lurah`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `agm_id` int(5) NOT NULL,
  `agm_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`agm_id`, `agm_ket`) VALUES
(1, 'Islam'),
(2, 'Khatolik'),
(3, 'Protestan'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `ag_id` int(10) NOT NULL,
  `ag_name` varchar(255) NOT NULL,
  `ag_date` date NOT NULL,
  `ag_ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `brt_id` int(5) NOT NULL,
  `usr_id` int(5) NOT NULL,
  `sts_id` int(10) NOT NULL,
  `brt_kd` varchar(40) NOT NULL,
  `brt_judul` text NOT NULL,
  `brt_isi` text NOT NULL,
  `brt_tgl` datetime NOT NULL,
  `brt_gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `gal_id` int(10) NOT NULL,
  `hal_title` varchar(100) NOT NULL,
  `gal_url` text NOT NULL,
  `gal_gambar` varchar(100) NOT NULL,
  `gal_date` date NOT NULL,
  `gal_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gol_darah`
--

CREATE TABLE `gol_darah` (
  `goldr_id` int(5) NOT NULL,
  `goldr_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gol_darah`
--

INSERT INTO `gol_darah` (`goldr_id`, `goldr_ket`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'O');

-- --------------------------------------------------------

--
-- Table structure for table `jns_asuransi`
--

CREATE TABLE `jns_asuransi` (
  `jnsasn_id` int(5) NOT NULL,
  `jnsasn_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jns_asuransi`
--

INSERT INTO `jns_asuransi` (`jnsasn_id`, `jnsasn_ket`) VALUES
(1, 'BPJS');

-- --------------------------------------------------------

--
-- Table structure for table `kewarganegaraan`
--

CREATE TABLE `kewarganegaraan` (
  `kwgn_id` int(5) NOT NULL,
  `kwgn_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kewarganegaraan`
--

INSERT INTO `kewarganegaraan` (`kwgn_id`, `kwgn_ket`) VALUES
(1, 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `kmtr_id` int(10) NOT NULL,
  `brt_id` int(5) NOT NULL,
  `sts_id` int(10) NOT NULL,
  `kmtr_fullname` varchar(255) NOT NULL,
  `kmtr_email` varchar(255) NOT NULL,
  `kmtr_date` datetime NOT NULL,
  `kmtr_isi` text NOT NULL,
  `kmtr_gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ortu`
--

CREATE TABLE `ortu` (
  `ortu_id` int(50) NOT NULL,
  `ortu_nik_ibu` int(50) NOT NULL,
  `ortu_namaibu` varchar(100) NOT NULL,
  `ortu_nik_ayah` int(50) NOT NULL,
  `ortu_namaayah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `pkrj_id` int(5) NOT NULL,
  `pkrj_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`pkrj_id`, `pkrj_ket`) VALUES
(1, 'Pelajar/Mahasiswa'),
(2, 'Wiraswasta');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `pnd_id` int(5) NOT NULL,
  `pnd_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`pnd_id`, `pnd_ket`) VALUES
(1, 'SD'),
(2, 'SMP'),
(3, 'SMA'),
(4, 'SMK'),
(5, 'Kuliah');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `pndk_id` int(10) NOT NULL,
  `pndk_nik` bigint(16) NOT NULL,
  `pndk_nokk` varchar(50) NOT NULL,
  `pndk_alamat` varchar(50) NOT NULL,
  `rt_id` int(5) NOT NULL,
  `rw_id` int(5) NOT NULL,
  `pndk_fullname` varchar(100) NOT NULL,
  `pndk_jk` varchar(100) NOT NULL,
  `pndk_tmp_lahir` varchar(100) NOT NULL,
  `pndk_tgl_lahir` date NOT NULL,
  `pndk_tlp` varchar(50) NOT NULL,
  `agm_id` int(5) NOT NULL,
  `goldr_id` int(5) NOT NULL,
  `pnd_id` int(5) NOT NULL,
  `pkrj_id` int(5) NOT NULL,
  `sts_hub_id` int(5) NOT NULL,
  `stspnkn_id` int(5) NOT NULL,
  `kwgn_id` int(5) NOT NULL,
  `jnsasn_id` int(5) NOT NULL,
  `pndk_foto` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`pndk_id`, `pndk_nik`, `pndk_nokk`, `pndk_alamat`, `rt_id`, `rw_id`, `pndk_fullname`, `pndk_jk`, `pndk_tmp_lahir`, `pndk_tgl_lahir`, `pndk_tlp`, `agm_id`, `goldr_id`, `pnd_id`, `pkrj_id`, `sts_hub_id`, `stspnkn_id`, `kwgn_id`, `jnsasn_id`, `pndk_foto`) VALUES
(1, 1782190210291101, '1782190212292311', 'Jl. Paus', 1, 2, 'Didi andika', 'Laki-laki', 'Pekanbaru', '2003-08-19', '081922198112', 1, 2, 5, 1, 1, 2, 1, 1, 'default.png'),
(3, 578695092, '305441308', 'Umban Sari', 1, 2, 'User 612b2e7d5b87b', 'Laki-laki', 'Pekanbaru', '1944-08-22', '038770523140', 3, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(4, 1375722271, '1620734282', 'Umban Sari', 1, 2, 'User 612b2e7d79ed8', 'Laki-laki', 'Bogor', '1974-02-10', '026001266374', 1, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(5, 202213591, '286540526', 'Umban Sari', 1, 2, 'User 612b2e7d8e075', 'Perempuan', 'Jakarta', '2019-12-17', '019007714380', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(6, 330596111, '837610333', 'Umban Sari', 2, 2, 'User 612b2e7d9a1cd', 'Laki-laki', 'Jakarta', '1960-08-29', '020280842460', 1, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(7, 116516395, '1584219169', 'Umban Sari', 1, 2, 'User 612b2e7da05e5', 'Laki-laki', 'Bogor', '1998-11-01', '072318692439', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(9, 1405034704, '567553725', 'Umban Sari', 2, 2, 'User 612b2e933b047', 'Perempuan', 'Jakarta', '1965-08-16', '012866366441', 2, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(10, 72686390, '103712353', 'Umban Sari', 2, 1, 'User 612b2e9342452', 'Perempuan', 'Jakarta', '2013-03-31', '021549030657', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(11, 1527566737, '197579787', 'Umban Sari', 2, 2, 'User 612b2e9348706', 'Laki-laki', 'Pekanbaru', '1956-02-29', '060761874672', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(12, 305693423, '1331440840', 'Umban Sari', 1, 1, 'User 612b2e935cb96', 'Laki-laki', 'Pekanbaru', '1978-04-23', '084968174201', 4, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(13, 390637030, '921116983', 'Umban Sari', 2, 2, 'User 612b2e9362b83', 'Perempuan', 'Bogor', '1958-04-08', '041308471243', 6, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(14, 83259528, '1579498085', 'Umban Sari', 2, 1, 'User 612b2e9368f3b', 'Laki-laki', 'Bogor', '1965-06-06', '076538915251', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(15, 668031104, '1529756760', 'Umban Sari', 2, 1, 'User 612b2e936ee5d', 'Laki-laki', 'Bogor', '1970-12-20', '080082021903', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(16, 91630176, '1116210324', 'Umban Sari', 1, 2, 'User 612b2e9375116', 'Perempuan', 'Bogor', '2001-03-02', '054891008742', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(17, 1450911063, '537219387', 'Umban Sari', 1, 1, 'User 612b2e937b237', 'Laki-laki', 'Pekanbaru', '1942-02-27', '088533516157', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(18, 828460806, '1448406546', 'Umban Sari', 1, 1, 'User 612b2e93814ee', 'Perempuan', 'Jakarta', '1954-05-26', '016262009520', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(19, 878144820, '471266172', 'Umban Sari', 1, 2, 'User 612b2e938da92', 'Laki-laki', 'Pekanbaru', '2015-10-16', '079118595169', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(20, 295974074, '1402339226', 'Umban Sari', 2, 2, 'User 612b2e93c062d', 'Perempuan', 'Jakarta', '1998-09-21', '028366014312', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(21, 63362305, '440658068', 'Umban Sari', 1, 2, 'User 612b2e93cc921', 'Perempuan', 'Pekanbaru', '1991-03-30', '026338844608', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(22, 975337531, '768409905', 'Umban Sari', 2, 2, 'User 612b2e93d8b4b', 'Perempuan', 'Pekanbaru', '1990-11-05', '053889542800', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(23, 368986455, '600038522', 'Umban Sari', 2, 1, 'User 612b2e93e5002', 'Laki-laki', 'Jakarta', '1966-10-03', '010072991971', 6, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(24, 210145271, '202956978', 'Umban Sari', 1, 2, 'User 612b2e93eb07c', 'Laki-laki', 'Pekanbaru', '2006-07-05', '025725805961', 2, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(25, 783632280, '1351997221', 'Umban Sari', 1, 2, 'User 612b2e93f1391', 'Laki-laki', 'Pekanbaru', '2014-06-22', '015817210406', 1, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(26, 170788894, '1135110488', 'Umban Sari', 2, 1, 'User 612b2e940941c', 'Laki-laki', 'Jakarta', '2010-04-13', '065509077500', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(27, 446737104, '548217075', 'Umban Sari', 1, 2, 'User 612b2e940f4ee', 'Laki-laki', 'Bogor', '1978-07-30', '032671025838', 2, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(28, 717096509, '410038185', 'Umban Sari', 2, 2, 'User 612b2e941574e', 'Perempuan', 'Jakarta', '1953-10-29', '079283300257', 1, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(29, 460272740, '1384572603', 'Umban Sari', 1, 1, 'User 612b2e941b819', 'Perempuan', 'Pekanbaru', '1957-04-02', '071502628684', 2, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(30, 220299475, '1059263643', 'Umban Sari', 1, 2, 'User 612b2e9421abd', 'Laki-laki', 'Bogor', '1969-10-15', '053501079581', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(31, 1114935257, '1102879989', 'Umban Sari', 2, 2, 'User 612b2e9427b8e', 'Laki-laki', 'Jakarta', '1956-12-17', '078018612852', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(32, 840030676, '688545090', 'Umban Sari', 2, 2, 'User 612b2e942de4f', 'Perempuan', 'Bogor', '2003-04-16', '045920879979', 1, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(33, 766134116, '1463070732', 'Umban Sari', 2, 1, 'User 612b2e9433ec2', 'Laki-laki', 'Pekanbaru', '2002-03-26', '048853454867', 4, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(34, 41929179, '1533456109', 'Umban Sari', 1, 1, 'User 612b2e943a157', 'Laki-laki', 'Pekanbaru', '1958-02-07', '076154504751', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(35, 257870165, '1049984985', 'Umban Sari', 1, 2, 'User 612b2e9440275', 'Perempuan', 'Pekanbaru', '1991-06-13', '052502268630', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(36, 744186852, '1089847589', 'Umban Sari', 2, 1, 'User 612b2e9446500', 'Perempuan', 'Jakarta', '2012-02-29', '083163696042', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(37, 802325878, '168424983', 'Umban Sari', 2, 1, 'User 612b2e944c57f', 'Laki-laki', 'Jakarta', '1964-04-01', '084109540810', 5, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(38, 1593421270, '1378726966', 'Umban Sari', 2, 1, 'User 612b2e9452808', 'Perempuan', 'Jakarta', '2004-01-27', '071094007069', 3, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(39, 1351852941, '318455338', 'Umban Sari', 1, 1, 'User 612b2e945ecd2', 'Laki-laki', 'Pekanbaru', '1966-09-20', '073298876031', 1, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(40, 1366193318, '1083257306', 'Umban Sari', 1, 2, 'User 612b2e9464d4d', 'Perempuan', 'Bogor', '1960-02-20', '023622415942', 4, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(41, 1037593749, '265001819', 'Umban Sari', 2, 2, 'User 612b2e946ad83', 'Perempuan', 'Jakarta', '1963-11-03', '055183558013', 5, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(42, 116251650, '921660160', 'Umban Sari', 2, 1, 'User 612b2e9471095', 'Laki-laki', 'Jakarta', '1947-04-03', '059304067226', 6, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(43, 832747464, '418660284', 'Umban Sari', 2, 2, 'User 612b2e9477108', 'Laki-laki', 'Bogor', '1946-12-03', '061526865243', 2, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(44, 1504146770, '997531624', 'Umban Sari', 2, 1, 'User 612b2e9481637', 'Laki-laki', 'Jakarta', '1984-08-01', '019809549145', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(45, 1409834421, '1312133567', 'Umban Sari', 1, 1, 'User 612b2e9491ad9', 'Laki-laki', 'Bogor', '1989-01-15', '037642358674', 5, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(46, 904340009, '561294659', 'Umban Sari', 1, 2, 'User 612b2e949f107', 'Laki-laki', 'Bogor', '1970-03-18', '083444531146', 1, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(47, 171443537, '1177547809', 'Umban Sari', 2, 2, 'User 612b2e94bc3fb', 'Perempuan', 'Jakarta', '1964-06-25', '016551806266', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(48, 103469252, '905992756', 'Umban Sari', 2, 2, 'User 612b2e94c2741', 'Perempuan', 'Jakarta', '1961-07-09', '070888879838', 5, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(49, 1475618013, '1201515159', 'Umban Sari', 2, 1, 'User 612b2e94c870a', 'Laki-laki', 'Bogor', '1953-01-11', '027596773276', 5, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(50, 992298246, '1237557996', 'Umban Sari', 2, 2, 'User 612b2e94cea1f', 'Laki-laki', 'Bogor', '1959-12-23', '067002440471', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(51, 1058049051, '748046428', 'Umban Sari', 1, 1, 'User 612b2e94d4aab', 'Laki-laki', 'Pekanbaru', '1942-09-12', '035868979622', 1, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(52, 501422281, '1539191140', 'Umban Sari', 2, 1, 'User 612b2e94dad66', 'Laki-laki', 'Bogor', '1966-12-10', '068559771680', 1, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(53, 1162643254, '543897274', 'Umban Sari', 1, 2, 'User 612b2e94e0e60', 'Laki-laki', 'Bogor', '1967-05-21', '049240015741', 6, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(54, 739234751, '259158742', 'Umban Sari', 2, 1, 'User 612b2e94e70a6', 'Laki-laki', 'Bogor', '1956-05-04', '074494159249', 6, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(55, 1346962677, '607682039', 'Umban Sari', 2, 1, 'User 612b2e94ed18e', 'Laki-laki', 'Jakarta', '2012-09-20', '043859357170', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(56, 550248061, '1165595399', 'Umban Sari', 1, 2, 'User 612b2e94f3413', 'Perempuan', 'Jakarta', '2012-09-08', '083141004765', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(57, 383161826, '1215365796', 'Umban Sari', 2, 2, 'User 612b2e950533f', 'Laki-laki', 'Jakarta', '1944-07-04', '052319999166', 3, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(58, 806822374, '888812791', 'Umban Sari', 2, 1, 'User 612b2e950b553', 'Laki-laki', 'Jakarta', '1971-10-05', '015562496903', 6, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(59, 360055402, '452092906', 'Umban Sari', 2, 2, 'User 612b2e9511664', 'Laki-laki', 'Pekanbaru', '2015-01-24', '054052528372', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(60, 1196887092, '304039101', 'Umban Sari', 2, 1, 'User 612b2e95178f3', 'Laki-laki', 'Jakarta', '2013-01-10', '083464638801', 1, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(61, 862167966, '1434282988', 'Umban Sari', 1, 2, 'User 612b2e951d947', 'Laki-laki', 'Bogor', '1979-04-27', '062154194284', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(62, 1359883717, '1274963190', 'Umban Sari', 2, 1, 'User 612b2e9523b95', 'Laki-laki', 'Jakarta', '1979-04-07', '073519271223', 3, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(63, 348499982, '578989556', 'Umban Sari', 1, 1, 'User 612b2e9529eac', 'Laki-laki', 'Pekanbaru', '1997-12-29', '031367937441', 6, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(64, 303210500, '1283049948', 'Umban Sari', 1, 1, 'User 612b2e952fef6', 'Laki-laki', 'Jakarta', '2016-08-04', '014260946963', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(65, 1137141091, '220336158', 'Umban Sari', 1, 2, 'User 612b2e9536069', 'Perempuan', 'Bogor', '1999-01-20', '040034552511', 2, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(66, 338567586, '172250768', 'Umban Sari', 1, 2, 'User 612b2e953c244', 'Laki-laki', 'Pekanbaru', '1955-11-30', '066330786173', 4, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(67, 1192409472, '254768933', 'Umban Sari', 1, 2, 'User 612b2e954c652', 'Laki-laki', 'Bogor', '2019-08-29', '013498975971', 6, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(68, 870848699, '407531649', 'Umban Sari', 2, 2, 'User 612b2e95529f7', 'Perempuan', 'Bogor', '1977-06-16', '073890536436', 2, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(69, 159342200, '1025024592', 'Umban Sari', 1, 1, 'User 612b2e95588f0', 'Laki-laki', 'Pekanbaru', '1971-02-27', '039183984988', 1, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(70, 330421824, '864615056', 'Umban Sari', 1, 1, 'User 612b2e955ec5a', 'Laki-laki', 'Bogor', '1980-03-24', '088642572551', 1, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(71, 775932855, '1169849198', 'Umban Sari', 1, 2, 'User 612b2e9564c56', 'Laki-laki', 'Jakarta', '1944-07-14', '028752598712', 4, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(72, 613322848, '1463568040', 'Umban Sari', 1, 1, 'User 612b2e956afc5', 'Perempuan', 'Bogor', '1943-10-09', '020016549803', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(73, 661251072, '275345681', 'Umban Sari', 1, 1, 'User 612b2e9570fa8', 'Laki-laki', 'Jakarta', '1960-05-31', '079910723705', 3, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(74, 995249618, '446068968', 'Umban Sari', 2, 1, 'User 612b2e95772ab', 'Perempuan', 'Jakarta', '1982-12-25', '089762317820', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(75, 1089313406, '759434104', 'Umban Sari', 1, 2, 'User 612b2e957d2dc', 'Laki-laki', 'Pekanbaru', '1947-05-21', '028723642506', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(76, 312983172, '102711581', 'Umban Sari', 2, 1, 'User 612b2e95853f3', 'Laki-laki', 'Jakarta', '1960-06-06', '013915741460', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(77, 406787590, '219977808', 'Umban Sari', 1, 2, 'User 612b2e958b76a', 'Laki-laki', 'Bogor', '1993-11-22', '027897883952', 3, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(78, 568538630, '1225483238', 'Umban Sari', 1, 1, 'User 612b2e959172f', 'Laki-laki', 'Pekanbaru', '1943-06-08', '036481041433', 2, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(79, 1249141989, '1068607634', 'Umban Sari', 2, 1, 'User 612b2e9597a7f', 'Perempuan', 'Jakarta', '2015-01-15', '056432755289', 3, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(80, 507139432, '903494067', 'Umban Sari', 2, 1, 'User 612b2e959daee', 'Laki-laki', 'Bogor', '2002-09-18', '027075887659', 4, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(81, 896845833, '833956992', 'Umban Sari', 2, 2, 'User 612b2e95ac08c', 'Perempuan', 'Bogor', '1945-04-08', '055044990013', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(82, 1580881132, '924002939', 'Umban Sari', 1, 2, 'User 612b2e96106ab', 'Perempuan', 'Pekanbaru', '1989-04-10', '070445953720', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(83, 814013232, '1377962540', 'Umban Sari', 2, 1, 'User 612b2e96199ee', 'Perempuan', 'Jakarta', '1999-07-04', '033928366722', 3, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(84, 625781773, '1150943349', 'Umban Sari', 2, 2, 'User 612b2e9626418', 'Laki-laki', 'Jakarta', '1969-12-14', '071033599414', 2, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(85, 1230856481, '1387097128', 'Umban Sari', 2, 1, 'User 612b2e96320a2', 'Laki-laki', 'Pekanbaru', '1955-02-07', '072183216037', 4, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(86, 954244384, '185813797', 'Umban Sari', 2, 1, 'User 612b2e9640932', 'Perempuan', 'Pekanbaru', '1944-05-13', '017811161506', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(87, 65841622, '416792927', 'Umban Sari', 1, 1, 'User 612b2e9652dab', 'Laki-laki', 'Pekanbaru', '1997-04-22', '079071343611', 2, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(88, 1208531738, '689377212', 'Umban Sari', 1, 2, 'User 612b2e9664e77', 'Laki-laki', 'Jakarta', '1957-07-07', '026030248543', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(89, 70863201, '867662106', 'Umban Sari', 1, 1, 'User 612b2e966d058', 'Laki-laki', 'Jakarta', '1965-11-17', '013536158386', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(90, 718195740, '918034559', 'Umban Sari', 1, 2, 'User 612b2e96730c3', 'Perempuan', 'Pekanbaru', '1955-12-03', '079826162855', 1, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(91, 1602412721, '94007066', 'Umban Sari', 1, 2, 'User 612b2e9679142', 'Perempuan', 'Jakarta', '2011-12-03', '055520237155', 6, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(92, 730578246, '230926378', 'Umban Sari', 1, 1, 'User 612b2e967f433', 'Perempuan', 'Bogor', '1970-12-12', '025392717163', 3, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(93, 748791130, '762162736', 'Umban Sari', 1, 2, 'User 612b2e968547d', 'Laki-laki', 'Bogor', '1985-08-10', '070039080074', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(94, 562860485, '832724026', 'Umban Sari', 2, 1, 'User 612b2e968b78f', 'Laki-laki', 'Pekanbaru', '1988-08-05', '084099803186', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(95, 394277003, '300339715', 'Umban Sari', 1, 2, 'User 612b2e9697aa3', 'Laki-laki', 'Jakarta', '2001-01-29', '09150153430', 4, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(96, 840722002, '830911370', 'Umban Sari', 1, 2, 'User 612b2e969daf9', 'Perempuan', 'Pekanbaru', '1971-07-28', '059120489998', 4, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(97, 641095060, '1587320230', 'Umban Sari', 1, 2, 'User 612b2e96a3e30', 'Laki-laki', 'Jakarta', '1991-05-04', '046583024224', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(98, 1607101823, '887633623', 'Umban Sari', 1, 1, 'User 612b2e96a9eae', 'Laki-laki', 'Jakarta', '2021-02-07', '058499395817', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(99, 1059331193, '690988949', 'Umban Sari', 1, 1, 'User 612b2e96b018c', 'Laki-laki', 'Jakarta', '2013-02-03', '075933131240', 5, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(100, 1211595371, '694585927', 'Umban Sari', 1, 1, 'User 612b2e96b6356', 'Perempuan', 'Bogor', '1949-04-04', '070083886253', 6, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(101, 109802025, '6662625', 'Umban Sari', 2, 1, 'User 612b2e96c25b2', 'Perempuan', 'Jakarta', '1947-08-30', '022966243612', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(102, 1005259850, '1411146768', 'Umban Sari', 2, 2, 'User 612b2e96c87c5', 'Perempuan', 'Jakarta', '1998-04-12', '049564074973', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(103, 997330827, '334629309', 'Umban Sari', 1, 1, 'User 612b2e96ce993', 'Perempuan', 'Pekanbaru', '1950-01-03', '086685442122', 1, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(104, 321019799, '1115235077', 'Umban Sari', 2, 1, 'User 612b2e96d4bd1', 'Perempuan', 'Bogor', '1972-02-21', '077050898243', 5, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(105, 1015243352, '543574013', 'Umban Sari', 2, 2, 'User 612b2e96dad3b', 'Laki-laki', 'Jakarta', '1993-05-15', '047388788479', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(106, 1423788644, '1379985160', 'Umban Sari', 2, 1, 'User 612b2e96e0e6b', 'Laki-laki', 'Jakarta', '1944-05-22', '045409198657', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(107, 459767117, '341554344', 'Umban Sari', 1, 1, 'User 612b2e9760dad', 'Perempuan', 'Bogor', '1985-11-11', '084651189214', 5, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(108, 1370285486, '1291396200', 'Umban Sari', 2, 2, 'User 612b2e9774551', 'Laki-laki', 'Pekanbaru', '1954-03-30', '078215061956', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(109, 416277811, '96194212', 'Umban Sari', 1, 1, 'User 612b30884ef86', 'Laki-laki', 'Bogor', '1994-07-06', '063975419277', 6, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(110, 1422910685, '189014622', 'Umban Sari', 1, 1, 'User 612b30885acaf', 'Laki-laki', 'Pekanbaru', '1953-06-03', '073288595003', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(111, 828993536, '61482927', 'Umban Sari', 2, 1, 'User 612b308866c44', 'Perempuan', 'Pekanbaru', '1979-12-02', '028443165326', 5, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(112, 844253860, '427984615', 'Umban Sari', 2, 2, 'User 612b308873395', 'Perempuan', 'Jakarta', '1968-10-08', '087625350917', 5, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(113, 1595836243, '1360185806', 'Umban Sari', 2, 2, 'User 612b30887913a', 'Laki-laki', 'Jakarta', '1945-04-27', '062130825014', 5, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(114, 340375567, '177513299', 'Umban Sari', 1, 2, 'User 612b30887f3d0', 'Laki-laki', 'Bogor', '2006-11-12', '049594795109', 6, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(115, 807424639, '1479904998', 'Umban Sari', 1, 1, 'User 612b308885481', 'Perempuan', 'Pekanbaru', '1960-11-20', '062869679563', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(116, 1561062326, '1313250843', 'Umban Sari', 1, 1, 'User 612b30888b712', 'Perempuan', 'Jakarta', '1966-10-12', '064374479743', 3, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(117, 1114001113, '1288946964', 'Umban Sari', 2, 2, 'User 612b3088917e3', 'Laki-laki', 'Jakarta', '2012-07-27', '048654532068', 6, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(118, 1080692497, '1288483148', 'Umban Sari', 1, 2, 'User 612b308897a61', 'Perempuan', 'Jakarta', '1971-09-21', '020593805369', 3, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(119, 916154564, '1430346759', 'Umban Sari', 2, 2, 'User 612b30889db24', 'Laki-laki', 'Pekanbaru', '2000-04-18', '082182999841', 4, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(120, 526880634, '569762082', 'Umban Sari', 2, 2, 'User 612b3088a3dda', 'Laki-laki', 'Jakarta', '1941-08-10', '061436760028', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(121, 530394777, '512065531', 'Umban Sari', 1, 2, 'User 612b3088a9ea8', 'Perempuan', 'Bogor', '1981-02-25', '069020094295', 4, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(122, 516152940, '708737209', 'Umban Sari', 1, 2, 'User 612b3088b019f', 'Laki-laki', 'Pekanbaru', '2006-08-08', '072875046571', 5, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(123, 390195502, '1061394211', 'Umban Sari', 1, 1, 'User 612b3088c24cb', 'Laki-laki', 'Pekanbaru', '1950-07-14', '045080508048', 1, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(124, 1257104581, '755649920', 'Umban Sari', 1, 1, 'User 612b3088c877d', 'Perempuan', 'Bogor', '1991-01-14', '011908085140', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(125, 853587094, '1358049831', 'Umban Sari', 2, 1, 'User 612b3088d8f27', 'Laki-laki', 'Bogor', '1992-03-10', '015242615336', 6, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(126, 876768760, '200131106', 'Umban Sari', 1, 1, 'User 612b3088deda0', 'Perempuan', 'Jakarta', '1999-06-12', '075892903974', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(127, 150457793, '1584210973', 'Umban Sari', 2, 2, 'User 612b3088eb439', 'Laki-laki', 'Jakarta', '1970-05-05', '029999052704', 2, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(128, 1059543957, '890173405', 'Umban Sari', 1, 2, 'User 612b308931efa', 'Laki-laki', 'Bogor', '1949-09-09', '023415920234', 2, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(129, 890669712, '1143566132', 'Umban Sari', 2, 2, 'User 612b308944429', 'Perempuan', 'Pekanbaru', '1975-07-21', '041853733310', 5, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(130, 1337035294, '750963042', 'Umban Sari', 2, 1, 'User 612b308954b5d', 'Perempuan', 'Bogor', '1967-12-16', '068128660500', 1, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(131, 619763116, '525437579', 'Umban Sari', 2, 1, 'User 612b308963afa', 'Laki-laki', 'Jakarta', '1955-08-08', '075669699487', 4, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(132, 85552714, '835953329', 'Umban Sari', 2, 1, 'User 612b30897b2fe', 'Perempuan', 'Pekanbaru', '1963-07-24', '059444296115', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(133, 1046206255, '1430496696', 'Umban Sari', 2, 1, 'User 612b30898f83e', 'Laki-laki', 'Bogor', '1991-07-07', '035888591077', 6, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(134, 1165565932, '341247050', 'Umban Sari', 2, 1, 'User 612b308995928', 'Laki-laki', 'Bogor', '1961-09-21', '068325816338', 2, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(135, 674869650, '322806731', 'Umban Sari', 2, 1, 'User 612b3089a5d92', 'Laki-laki', 'Pekanbaru', '1960-07-13', '021987835140', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(136, 46674867, '635767821', 'Umban Sari', 1, 1, 'User 612b3089adfa3', 'Perempuan', 'Jakarta', '1946-03-09', '021743331324', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(137, 1445105883, '697712869', 'Umban Sari', 2, 2, 'User 612b3089ba6b3', 'Laki-laki', 'Jakarta', '1947-08-24', '025678565890', 3, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(138, 1344916737, '1436536904', 'Umban Sari', 2, 1, 'User 612b3089c69f8', 'Perempuan', 'Pekanbaru', '2015-11-30', '056228478031', 5, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(139, 240890883, '268911708', 'Umban Sari', 1, 2, 'User 612b3089cc994', 'Laki-laki', 'Pekanbaru', '1966-07-05', '074197470765', 2, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(140, 297285630, '1478119425', 'Umban Sari', 2, 1, 'User 612b3089d3407', 'Laki-laki', 'Pekanbaru', '2010-10-28', '046146141349', 5, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(141, 1187551457, '1561793184', 'Umban Sari', 2, 1, 'User 612b3089d8b2b', 'Perempuan', 'Pekanbaru', '2002-11-09', '044167731120', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(142, 364192007, '713645664', 'Umban Sari', 2, 1, 'User 612b3089deb92', 'Laki-laki', 'Jakarta', '1985-12-07', '083337199600', 4, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(143, 590226227, '935407404', 'Umban Sari', 2, 2, 'User 612b3089e4ef5', 'Laki-laki', 'Pekanbaru', '1984-12-27', '039372776734', 5, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(144, 636712751, '1544200921', 'Umban Sari', 2, 1, 'User 612b308a00fe3', 'Laki-laki', 'Jakarta', '2020-01-24', '073476104372', 5, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(145, 345660424, '799745563', 'Umban Sari', 1, 1, 'User 612b308a0d2d2', 'Perempuan', 'Bogor', '2004-06-27', '014880693341', 1, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(146, 960752997, '802183387', 'Umban Sari', 2, 1, 'User 612b308a135a2', 'Perempuan', 'Bogor', '1977-06-08', '016314762789', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(147, 1160423029, '1121120140', 'Umban Sari', 2, 1, 'User 612b308a238ee', 'Perempuan', 'Jakarta', '2017-11-20', '013934459071', 1, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(148, 380862352, '963762709', 'Umban Sari', 1, 2, 'User 612b308a29b9b', 'Laki-laki', 'Pekanbaru', '2017-07-26', '056708662497', 3, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(149, 272873309, '864159680', 'Umban Sari', 2, 1, 'User 612b308a362df', 'Laki-laki', 'Pekanbaru', '1989-07-03', '09877003470', 5, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(150, 146559317, '619907222', 'Umban Sari', 1, 2, 'User 612b308a3bfac', 'Laki-laki', 'Jakarta', '2002-01-20', '012478218084', 2, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(151, 1236772284, '1081522711', 'Umban Sari', 1, 2, 'User 612b308a4227d', 'Laki-laki', 'Bogor', '1962-09-05', '018362343958', 5, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(152, 607063428, '1156681273', 'Umban Sari', 2, 2, 'User 612b308a48305', 'Laki-laki', 'Jakarta', '1986-10-09', '082336337018', 3, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(153, 420826716, '1579413442', 'Umban Sari', 1, 1, 'User 612b308a4e5a6', 'Laki-laki', 'Jakarta', '1955-02-14', '015797351592', 2, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(154, 177418513, '650704009', 'Umban Sari', 1, 2, 'User 612b308a54631', 'Laki-laki', 'Bogor', '1990-06-15', '036810047674', 6, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(155, 682817669, '172032191', 'Umban Sari', 1, 2, 'User 612b308a5a902', 'Perempuan', 'Jakarta', '2005-01-16', '045653746856', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(156, 314394496, '540436178', 'Umban Sari', 2, 1, 'User 612b308a609b7', 'Laki-laki', 'Jakarta', '2010-01-02', '032278960883', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(157, 27028116, '765282700', 'Umban Sari', 2, 1, 'User 612b308a66c7d', 'Perempuan', 'Bogor', '1966-11-17', '011152117187', 1, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(158, 1126240460, '857251648', 'Umban Sari', 2, 1, 'User 612b308a6ccd7', 'Perempuan', 'Jakarta', '1955-06-19', '081024728148', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(159, 283145961, '1490315162', 'Umban Sari', 2, 1, 'User 612b308a72f90', 'Laki-laki', 'Jakarta', '2002-04-27', '086111936869', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(160, 740723194, '1028682253', 'Umban Sari', 1, 1, 'User 612b308a79045', 'Laki-laki', 'Bogor', '1948-06-22', '072050436384', 1, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(161, 1572314127, '206646495', 'Umban Sari', 1, 1, 'User 612b308a7f30e', 'Perempuan', 'Pekanbaru', '1953-10-01', '015228470542', 4, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(162, 721198445, '397228286', 'Umban Sari', 2, 2, 'User 612b308a853ac', 'Laki-laki', 'Pekanbaru', '2007-11-26', '038557528296', 1, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(163, 1516077028, '319171165', 'Umban Sari', 2, 2, 'User 612b308a8b67b', 'Laki-laki', 'Bogor', '1979-07-18', '064161025951', 2, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(164, 1850704, '610768385', 'Umban Sari', 2, 1, 'User 612b308a916db', 'Laki-laki', 'Pekanbaru', '1975-06-16', '029661049003', 6, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(165, 455208736, '29781616', 'Umban Sari', 1, 1, 'User 612b308a9ffc4', 'Perempuan', 'Jakarta', '1960-03-28', '047154506908', 2, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(166, 392045099, '698057536', 'Umban Sari', 1, 1, 'User 612b308ab0441', 'Laki-laki', 'Pekanbaru', '1950-05-18', '024827994599', 5, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(167, 1005427559, '1124876807', 'Umban Sari', 2, 2, 'User 612b308ab8261', 'Laki-laki', 'Pekanbaru', '1957-12-07', '054639753283', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(168, 322811384, '647040013', 'Umban Sari', 1, 1, 'User 612b308abe2e8', 'Perempuan', 'Jakarta', '1947-11-12', '041946595492', 3, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(169, 853987661, '1234245848', 'Umban Sari', 1, 1, 'User 612b308ac462b', 'Perempuan', 'Jakarta', '2009-09-09', '045356325364', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(170, 38950793, '85448954', 'Umban Sari', 2, 2, 'User 612b308aca666', 'Laki-laki', 'Pekanbaru', '1999-07-30', '079628262298', 1, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(171, 1453090971, '1545200453', 'Umban Sari', 1, 2, 'User 612b308ad0907', 'Laki-laki', 'Bogor', '1950-10-31', '09573234932', 4, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(172, 419659491, '877982925', 'Umban Sari', 1, 2, 'User 612b308ad6993', 'Perempuan', 'Bogor', '1946-04-07', '019415492942', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(173, 780421820, '829077969', 'Umban Sari', 1, 2, 'User 612b308adcc55', 'Perempuan', 'Jakarta', '1959-02-18', '085537196891', 1, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(174, 1319398511, '76099560', 'Umban Sari', 2, 1, 'User 612b308ae2cd9', 'Laki-laki', 'Pekanbaru', '1998-08-20', '081469248380', 6, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(175, 1184545391, '705530092', 'Umban Sari', 1, 1, 'User 612b308ae9017', 'Laki-laki', 'Pekanbaru', '1975-06-08', '041751080295', 3, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(176, 1080716928, '59251467', 'Umban Sari', 1, 2, 'User 612b308aef005', 'Perempuan', 'Jakarta', '1954-01-27', '034261895771', 2, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(177, 1430881736, '308088405', 'Umban Sari', 2, 2, 'User 612b308b010e4', 'Laki-laki', 'Jakarta', '2007-04-27', '079688977347', 2, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(178, 369950654, '276242433', 'Umban Sari', 1, 1, 'User 612b308b0712c', 'Perempuan', 'Bogor', '1957-01-21', '042281862797', 6, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(179, 901467804, '962275553', 'Umban Sari', 1, 2, 'User 612b308b0d416', 'Perempuan', 'Pekanbaru', '1988-02-22', '085678979075', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(180, 755492128, '1317405648', 'Umban Sari', 1, 1, 'User 612b308b197b6', 'Perempuan', 'Pekanbaru', '1963-01-14', '033288180547', 3, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(181, 1482838649, '808444309', 'Umban Sari', 2, 1, 'User 612b308b54b53', 'Laki-laki', 'Jakarta', '2001-03-11', '033530452374', 2, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(182, 1241976256, '1497979058', 'Umban Sari', 1, 2, 'User 612b308b5a813', 'Laki-laki', 'Jakarta', '1975-08-02', '082912011091', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(183, 100765497, '1144088127', 'Umban Sari', 1, 2, 'User 612b308b60ad3', 'Perempuan', 'Pekanbaru', '1962-11-16', '019591446329', 3, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(184, 1405049593, '471698948', 'Umban Sari', 2, 1, 'User 612b308b6ed7d', 'Perempuan', 'Jakarta', '1954-03-08', '088579589647', 2, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(185, 783464006, '1177420727', 'Umban Sari', 1, 2, 'User 612b308b79033', 'Perempuan', 'Bogor', '2006-08-29', '052388068832', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(186, 8017203, '151958292', 'Umban Sari', 2, 2, 'User 612b308b7f2ff', 'Laki-laki', 'Bogor', '2020-09-19', '062509948630', 2, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(187, 939440571, '1626317816', 'Umban Sari', 1, 1, 'User 612b308b853ee', 'Laki-laki', 'Jakarta', '2018-01-30', '061172941838', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(188, 1566398966, '546924979', 'Umban Sari', 1, 2, 'User 612b308b8b647', 'Laki-laki', 'Jakarta', '2012-12-04', '032089118082', 1, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(189, 1621997858, '59206005', 'Umban Sari', 2, 1, 'User 612b308b916de', 'Laki-laki', 'Bogor', '1996-04-01', '060436424544', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(190, 743776900, '1437863420', 'Umban Sari', 1, 2, 'User 612b308b979d5', 'Perempuan', 'Bogor', '2011-12-16', '072829594605', 5, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(191, 376834494, '578473871', 'Umban Sari', 1, 2, 'User 612b308b9daf7', 'Perempuan', 'Jakarta', '2011-08-18', '015304760068', 2, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(192, 721919528, '675275809', 'Umban Sari', 1, 2, 'User 612b308ba3d0b', 'Perempuan', 'Jakarta', '1963-07-17', '060721664800', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(193, 989804629, '109742094', 'Umban Sari', 1, 1, 'User 612b308bb408c', 'Laki-laki', 'Jakarta', '2013-12-26', '09832350423', 5, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(194, 148581625, '219052606', 'Umban Sari', 1, 1, 'User 612b308bba32f', 'Laki-laki', 'Pekanbaru', '1967-03-29', '074523023786', 5, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(195, 408323155, '37258284', 'Umban Sari', 2, 2, 'User 612b308bc03f7', 'Perempuan', 'Jakarta', '2004-03-01', '017133394346', 1, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(196, 93525734, '1554603862', 'Umban Sari', 1, 2, 'User 612b308bc6684', 'Laki-laki', 'Pekanbaru', '1944-12-22', '039883854825', 6, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(197, 1545611454, '1000106802', 'Umban Sari', 1, 2, 'User 612b308bcc71b', 'Laki-laki', 'Jakarta', '1953-10-03', '054331224229', 1, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(198, 563411507, '89090518', 'Umban Sari', 2, 1, 'User 612b308bd2ab1', 'Perempuan', 'Bogor', '1987-04-25', '055853488054', 4, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(199, 744156222, '1621719989', 'Umban Sari', 1, 2, 'User 612b308bd8a41', 'Laki-laki', 'Bogor', '1957-06-26', '072563945471', 1, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(200, 499850736, '1462256782', 'Umban Sari', 1, 1, 'User 612b308bded23', 'Laki-laki', 'Jakarta', '2008-04-25', '071580484483', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(201, 1468844032, '1032783300', 'Umban Sari', 2, 2, 'User 612b308be4d6c', 'Perempuan', 'Jakarta', '1989-12-12', '040919807437', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(202, 831758833, '290930144', 'Umban Sari', 2, 2, 'User 612b308beb0b2', 'Perempuan', 'Pekanbaru', '1959-12-11', '023654783946', 6, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(203, 766335686, '176064156', 'Umban Sari', 1, 1, 'User 612b308c055c5', 'Perempuan', 'Pekanbaru', '2009-07-10', '053423710461', 1, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(204, 1389500002, '679153056', 'Umban Sari', 1, 1, 'User 612b308c1192b', 'Perempuan', 'Bogor', '1963-07-17', '09570494326', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(205, 1338128835, '338105964', 'Umban Sari', 2, 2, 'User 612b308c1bcb2', 'Perempuan', 'Jakarta', '1966-02-22', '086047454598', 2, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(206, 1240189334, '478516141', 'Umban Sari', 1, 2, 'User 612b308c29ae1', 'Perempuan', 'Bogor', '1979-10-11', '059286601880', 1, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(207, 3083234, '1304018375', 'Umban Sari', 2, 2, 'User 612b308c342a8', 'Laki-laki', 'Pekanbaru', '1951-07-08', '084470074893', 6, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(208, 1539782477, '1381033721', 'Umban Sari', 1, 2, 'User 612b308c39f1d', 'Laki-laki', 'Pekanbaru', '2015-12-05', '057994084710', 2, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(209, 928285603, '1445514132', 'Umban Sari', 1, 1, 'User 612b308c4022a', 'Laki-laki', 'Jakarta', '1986-08-04', '016011924325', 5, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(210, 1196033127, '30904420', 'Umban Sari', 1, 1, 'User 612b308c8383c', 'Perempuan', 'Pekanbaru', '1999-07-24', '064211739957', 4, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(211, 1296376613, '845998356', 'Umban Sari', 1, 2, 'User 612b308c91bc7', 'Laki-laki', 'Pekanbaru', '1984-05-29', '063473698251', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(212, 1239484466, '1399215025', 'Umban Sari', 2, 1, 'User 612b308c979de', 'Laki-laki', 'Bogor', '1962-01-16', '046237416400', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(213, 1184439836, '1572381824', 'Umban Sari', 1, 2, 'User 612b308c9e615', 'Perempuan', 'Pekanbaru', '1977-09-09', '021248372860', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(214, 633067149, '1521266895', 'Umban Sari', 2, 2, 'User 612b308cae3df', 'Perempuan', 'Jakarta', '1993-02-24', '085821995289', 4, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(215, 707215420, '577849166', 'Umban Sari', 2, 1, 'User 612b308cb3f23', 'Laki-laki', 'Pekanbaru', '1966-02-25', '075877419741', 4, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(216, 1084690365, '480282574', 'Umban Sari', 2, 1, 'User 612b308cba1e1', 'Laki-laki', 'Bogor', '1985-11-28', '037893142376', 5, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(217, 1577417660, '1181163450', 'Umban Sari', 1, 2, 'User 612b308cc0259', 'Perempuan', 'Jakarta', '1942-07-24', '087721858475', 1, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(218, 400700346, '640983519', 'Umban Sari', 2, 2, 'User 612b308cc6561', 'Laki-laki', 'Jakarta', '1991-08-16', '057296999948', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(219, 737465124, '608838054', 'Umban Sari', 2, 1, 'User 612b308ccc5d5', 'Perempuan', 'Bogor', '1949-12-16', '062617899162', 5, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(220, 394245303, '75329019', 'Umban Sari', 1, 1, 'User 612b308cd28b4', 'Laki-laki', 'Jakarta', '1978-11-09', '025448828271', 6, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(221, 847491437, '294651912', 'Umban Sari', 1, 1, 'User 612b308cd891e', 'Laki-laki', 'Pekanbaru', '1990-01-19', '037336833792', 4, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(222, 1497530703, '1077469670', 'Umban Sari', 2, 2, 'User 612b308cdebd5', 'Perempuan', 'Pekanbaru', '2012-05-02', '031707099953', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(223, 186867647, '178312473', 'Umban Sari', 2, 1, 'User 612b308ce4d08', 'Laki-laki', 'Pekanbaru', '2002-10-27', '060246193212', 2, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(224, 1385078037, '895528770', 'Umban Sari', 1, 1, 'User 612b308ceaf59', 'Laki-laki', 'Pekanbaru', '1951-02-06', '036341507194', 3, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(225, 1272043922, '1460613959', 'Umban Sari', 1, 1, 'User 612b308cf0fb8', 'Laki-laki', 'Pekanbaru', '1963-02-07', '044556288360', 2, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(226, 720450814, '1134727789', 'Umban Sari', 2, 2, 'User 612b308d0309c', 'Perempuan', 'Jakarta', '2017-11-19', '054985701031', 4, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(227, 586360771, '1516810974', 'Umban Sari', 1, 2, 'User 612b308d090ed', 'Perempuan', 'Pekanbaru', '1992-02-03', '060824914571', 4, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(228, 1561867182, '295941510', 'Umban Sari', 2, 2, 'User 612b308d1dc46', 'Laki-laki', 'Jakarta', '1964-09-19', '041251574348', 2, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(229, 1457753642, '1557710736', 'Umban Sari', 1, 2, 'User 612b308d23805', 'Perempuan', 'Pekanbaru', '2013-06-01', '033321068972', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(230, 1266810075, '1304950775', 'Umban Sari', 2, 1, 'User 612b308d2ba4e', 'Laki-laki', 'Jakarta', '1991-09-14', '063973890367', 4, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(231, 144929548, '1628032940', 'Umban Sari', 1, 2, 'User 612b308d37dc6', 'Laki-laki', 'Bogor', '1989-10-27', '079204676481', 3, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(232, 1341312324, '362847853', 'Umban Sari', 2, 1, 'User 612b308d3e03c', 'Perempuan', 'Jakarta', '1942-06-01', '068435230170', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(233, 1546902407, '1123044306', 'Umban Sari', 2, 2, 'User 612b308d44109', 'Perempuan', 'Pekanbaru', '1980-07-25', '067277295130', 1, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(234, 1037950444, '25425358', 'Umban Sari', 1, 2, 'User 612b308d4a396', 'Laki-laki', 'Pekanbaru', '1974-02-23', '067659634136', 4, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(235, 1462834854, '1244857041', 'Umban Sari', 2, 1, 'User 612b308d50492', 'Perempuan', 'Bogor', '1976-09-14', '029363960073', 5, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(236, 395595669, '410647734', 'Umban Sari', 1, 1, 'User 612b308d566e2', 'Perempuan', 'Jakarta', '1989-04-18', '034537934733', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(237, 137640808, '1476627318', 'Umban Sari', 1, 1, 'User 612b308d5c7c4', 'Perempuan', 'Bogor', '1942-09-21', '061556842195', 3, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(238, 1333424410, '813107822', 'Umban Sari', 1, 2, 'User 612b308d62a2f', 'Laki-laki', 'Bogor', '2021-04-25', '015575305368', 4, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(239, 828107266, '896690406', 'Umban Sari', 2, 2, 'User 612b308d6d201', 'Laki-laki', 'Jakarta', '1943-03-22', '030450319794', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(240, 1569035308, '402124909', 'Umban Sari', 1, 1, 'User 612b308d7a776', 'Laki-laki', 'Bogor', '1980-08-19', '062706885228', 6, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(241, 239709476, '691435712', 'Umban Sari', 2, 2, 'User 612b308e39f5d', 'Laki-laki', 'Pekanbaru', '1972-02-28', '019238005390', 1, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(242, 1255468573, '1024324344', 'Umban Sari', 2, 2, 'User 612b308e4e956', 'Laki-laki', 'Pekanbaru', '1960-11-22', '042260112544', 5, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(243, 709733103, '229542020', 'Umban Sari', 2, 1, 'User 612b308e54511', 'Laki-laki', 'Jakarta', '1998-08-21', '09882410383', 5, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(244, 430494314, '733691005', 'Umban Sari', 1, 1, 'User 612b308e5a836', 'Perempuan', 'Bogor', '2017-01-02', '057058676869', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(245, 96593421, '620983311', 'Umban Sari', 2, 1, 'User 612b308e60856', 'Perempuan', 'Bogor', '1946-10-09', '050176318047', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(246, 67644898, '951312556', 'Umban Sari', 2, 2, 'User 612b308e6ec4e', 'Laki-laki', 'Bogor', '1959-03-04', '011447658574', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(247, 1222522570, '1516613009', 'Umban Sari', 2, 2, 'User 612b308e74f25', 'Laki-laki', 'Pekanbaru', '1950-08-29', '017218101793', 2, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(248, 571021121, '385896713', 'Umban Sari', 1, 1, 'User 612b308e7af84', 'Perempuan', 'Bogor', '2010-07-19', '057409166700', 5, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(249, 1475613504, '1597107317', 'Umban Sari', 1, 2, 'User 612b308e8128f', 'Perempuan', 'Bogor', '1985-06-27', '070816180688', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(250, 80768423, '1303461949', 'Umban Sari', 1, 2, 'User 612b308e91bad', 'Perempuan', 'Bogor', '1989-05-21', '08247678059', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(251, 1135587454, '751136368', 'Umban Sari', 1, 2, 'User 612b308e9785f', 'Laki-laki', 'Pekanbaru', '2002-11-27', '082808989289', 4, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(252, 1140106757, '1119865553', 'Umban Sari', 2, 1, 'User 612b308e9d8f6', 'Laki-laki', 'Jakarta', '1960-05-20', '040995529059', 4, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(253, 926834887, '751378395', 'Umban Sari', 2, 2, 'User 612b308ea3bcc', 'Perempuan', 'Pekanbaru', '1946-09-18', '088694797715', 1, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(254, 528897867, '198320994', 'Umban Sari', 2, 2, 'User 612b308ea9c3f', 'Perempuan', 'Jakarta', '1989-07-28', '033536611814', 2, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(255, 1080523460, '158529214', 'Umban Sari', 1, 2, 'User 612b308eaff65', 'Laki-laki', 'Pekanbaru', '2020-11-17', '012782461202', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(256, 1423791088, '1223298894', 'Umban Sari', 1, 1, 'User 612b308eca669', 'Perempuan', 'Pekanbaru', '1952-03-18', '030263051132', 5, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(257, 560696285, '920356001', 'Umban Sari', 1, 1, 'User 612b308ed0719', 'Perempuan', 'Bogor', '2000-10-15', '043093711347', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(258, 211687728, '870184424', 'Umban Sari', 1, 1, 'User 612b308ed69a8', 'Perempuan', 'Pekanbaru', '2012-02-28', '080398229869', 2, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(259, 697152480, '1454122421', 'Umban Sari', 2, 1, 'User 612b308edca22', 'Perempuan', 'Jakarta', '1982-03-17', '079614207460', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(260, 1408799630, '607877739', 'Umban Sari', 2, 1, 'User 612b308eecfd7', 'Perempuan', 'Jakarta', '2008-03-18', '074272097449', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(261, 48124382, '995044764', 'Umban Sari', 2, 2, 'User 612b308ef420c', 'Laki-laki', 'Jakarta', '1964-10-12', '027816592026', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(262, 109577081, '714704813', 'Umban Sari', 2, 2, 'User 612b308f07094', 'Perempuan', 'Jakarta', '1991-01-30', '066925210842', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(263, 1333241790, '364444864', 'Umban Sari', 1, 1, 'User 612b308f0d123', 'Perempuan', 'Bogor', '1972-06-26', '046504872523', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(264, 64650162, '1086593067', 'Umban Sari', 2, 1, 'User 612b308f133dc', 'Perempuan', 'Jakarta', '2014-01-20', '075770885779', 5, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(265, 620740473, '560106021', 'Umban Sari', 2, 2, 'User 612b308f19475', 'Laki-laki', 'Bogor', '1957-11-20', '058693582031', 2, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(266, 1605614417, '790345352', 'Umban Sari', 1, 2, 'User 612b308f1f781', 'Perempuan', 'Pekanbaru', '1960-10-11', '055439879699', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(267, 1363717096, '1399993730', 'Umban Sari', 2, 2, 'User 612b308f257e0', 'Perempuan', 'Jakarta', '1966-07-08', '073996483915', 4, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(268, 986121727, '106993444', 'Umban Sari', 2, 2, 'User 612b308f2ba86', 'Laki-laki', 'Pekanbaru', '1947-04-02', '047119957232', 6, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(269, 541586181, '224150786', 'Umban Sari', 2, 1, 'User 612b308f31b13', 'Laki-laki', 'Bogor', '1994-09-18', '050686844341', 3, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(270, 656906876, '145173624', 'Umban Sari', 1, 2, 'User 612b308f37e16', 'Laki-laki', 'Pekanbaru', '2018-06-04', '067518208038', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(271, 703607070, '1558498418', 'Umban Sari', 1, 2, 'User 612b308f3de5f', 'Perempuan', 'Jakarta', '1969-12-07', '065397954515', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(272, 15844883, '26232312', 'Umban Sari', 1, 1, 'User 612b308f4413b', 'Laki-laki', 'Jakarta', '2008-06-12', '083231097064', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(273, 1618566667, '664912671', 'Umban Sari', 2, 2, 'User 612b308f5a73d', 'Perempuan', 'Jakarta', '2018-11-03', '080364891096', 6, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(274, 159649482, '294665592', 'Umban Sari', 2, 1, 'User 612b308f607c0', 'Laki-laki', 'Bogor', '1991-01-19', '054540075760', 2, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(275, 332921587, '625284881', 'Umban Sari', 2, 2, 'User 612b308f66ac3', 'Laki-laki', 'Pekanbaru', '1946-06-26', '062169643816', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(276, 657254150, '567267512', 'Umban Sari', 1, 2, 'User 612b308f6cb19', 'Laki-laki', 'Jakarta', '1948-12-05', '075527962241', 5, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(277, 1116879086, '883921503', 'Umban Sari', 2, 2, 'User 612b308f72dee', 'Laki-laki', 'Jakarta', '1977-07-10', '083943844531', 6, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(278, 1312447449, '1466508194', 'Umban Sari', 2, 1, 'User 612b308f78e9d', 'Laki-laki', 'Bogor', '1981-02-12', '080493000689', 5, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(279, 701143751, '1266442766', 'Umban Sari', 2, 2, 'User 612b308f87375', 'Perempuan', 'Pekanbaru', '2017-01-15', '019514712344', 4, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(280, 1273434970, '341493148', 'Umban Sari', 2, 2, 'User 612b308f8d3f4', 'Laki-laki', 'Bogor', '1981-12-15', '066410441415', 3, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(281, 844541854, '161112305', 'Umban Sari', 2, 2, 'User 612b308f93721', 'Laki-laki', 'Pekanbaru', '1970-05-08', '014884351416', 4, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(282, 1120617553, '502438805', 'Umban Sari', 1, 2, 'User 612b308f9974a', 'Laki-laki', 'Bogor', '1987-12-06', '074293493967', 2, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(283, 919271528, '591152399', 'Umban Sari', 2, 1, 'User 612b308f9fa1b', 'Laki-laki', 'Jakarta', '1954-06-21', '036730286396', 2, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(284, 759651848, '599916007', 'Umban Sari', 1, 2, 'User 612b308fa5ada', 'Perempuan', 'Bogor', '1957-01-23', '066631819172', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(285, 578818423, '928902410', 'Umban Sari', 1, 2, 'User 612b308fabd5e', 'Perempuan', 'Bogor', '1976-10-30', '034803320244', 2, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(286, 1590314394, '1328362507', 'Umban Sari', 1, 1, 'User 612b308fb1de9', 'Perempuan', 'Jakarta', '2013-03-05', '082447052502', 5, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(287, 1164555545, '1497183554', 'Umban Sari', 2, 2, 'User 612b308fb80e3', 'Laki-laki', 'Pekanbaru', '2015-06-07', '073547857269', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(288, 728595579, '1285583097', 'Umban Sari', 2, 1, 'User 612b308fca49c', 'Laki-laki', 'Bogor', '2012-12-16', '030257818367', 6, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(289, 469917175, '223358984', 'Umban Sari', 1, 1, 'User 612b308fd0751', 'Perempuan', 'Bogor', '1945-11-18', '073606631351', 6, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(290, 702716707, '618403460', 'Umban Sari', 2, 2, 'User 612b308fd67da', 'Perempuan', 'Bogor', '1941-12-13', '081655395811', 5, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(291, 1154872504, '1525933912', 'Umban Sari', 2, 1, 'User 612b308fdcab2', 'Laki-laki', 'Jakarta', '1999-03-05', '013966782438', 1, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(292, 834173862, '1364423889', 'Umban Sari', 1, 2, 'User 612b308fe2b39', 'Laki-laki', 'Pekanbaru', '2019-04-01', '041338526613', 3, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(293, 1371701103, '1583942710', 'Umban Sari', 2, 1, 'User 612b308fe8e2f', 'Perempuan', 'Pekanbaru', '1998-01-26', '046634234663', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(294, 731389625, '934337077', 'Umban Sari', 2, 1, 'User 612b30900b0b9', 'Perempuan', 'Bogor', '2018-07-19', '065947487562', 6, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(295, 66597144, '340725424', 'Umban Sari', 2, 2, 'User 612b3090132f4', 'Laki-laki', 'Jakarta', '2008-04-28', '064617448650', 4, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(296, 1139954744, '906373742', 'Umban Sari', 1, 2, 'User 612b30901dc3e', 'Laki-laki', 'Bogor', '2017-05-03', '045944996853', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(297, 56933155, '1598005166', 'Umban Sari', 2, 1, 'User 612b309023750', 'Laki-laki', 'Jakarta', '1942-11-09', '053116265271', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(298, 1273527531, '45753418', 'Umban Sari', 2, 2, 'User 612b309029a1c', 'Laki-laki', 'Bogor', '2004-10-13', '075543913735', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(299, 338679152, '1394737884', 'Umban Sari', 1, 1, 'User 612b30902faed', 'Perempuan', 'Jakarta', '1999-02-14', '070055674727', 4, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(300, 102560242, '560536655', 'Umban Sari', 1, 2, 'User 612b309035db3', 'Laki-laki', 'Jakarta', '1978-03-14', '08352655518', 2, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(301, 1513479281, '1423195129', 'Umban Sari', 2, 2, 'User 612b30903be4c', 'Laki-laki', 'Bogor', '1996-01-01', '052117986486', 1, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(302, 1086084953, '346250339', 'Umban Sari', 1, 1, 'User 612b3090420c4', 'Laki-laki', 'Pekanbaru', '1953-11-13', '074021765873', 3, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(303, 1519892305, '180312985', 'Umban Sari', 1, 1, 'User 612b309048130', 'Perempuan', 'Pekanbaru', '1966-04-26', '040809435924', 5, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(304, 248629040, '1209393168', 'Umban Sari', 1, 1, 'User 612b30904e406', 'Laki-laki', 'Bogor', '1949-04-05', '080973421761', 3, 2, 1, 1, 1, 2, 1, 1, 'default.jpg');
INSERT INTO `penduduk` (`pndk_id`, `pndk_nik`, `pndk_nokk`, `pndk_alamat`, `rt_id`, `rw_id`, `pndk_fullname`, `pndk_jk`, `pndk_tmp_lahir`, `pndk_tgl_lahir`, `pndk_tlp`, `agm_id`, `goldr_id`, `pnd_id`, `pkrj_id`, `sts_hub_id`, `stspnkn_id`, `kwgn_id`, `jnsasn_id`, `pndk_foto`) VALUES
(305, 273022589, '1197605012', 'Umban Sari', 2, 2, 'User 612b309054519', 'Laki-laki', 'Jakarta', '1978-12-15', '039409605636', 4, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(306, 683563301, '1386977908', 'Umban Sari', 1, 2, 'User 612b30905a764', 'Perempuan', 'Jakarta', '2010-09-26', '031643721880', 1, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(307, 1467968974, '1026465865', 'Umban Sari', 1, 2, 'User 612b309066b00', 'Perempuan', 'Bogor', '2013-02-06', '037668439000', 1, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(308, 521991699, '1234605740', 'Umban Sari', 1, 1, 'User 612b30906cb3f', 'Laki-laki', 'Pekanbaru', '1981-10-25', '080917843006', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(309, 599491106, '887617906', 'Umban Sari', 1, 2, 'User 612b309072dff', 'Laki-laki', 'Jakarta', '2006-07-28', '049094066957', 4, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(310, 604572018, '898003028', 'Umban Sari', 1, 2, 'User 612b309078e88', 'Laki-laki', 'Bogor', '1943-03-23', '038149650994', 4, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(311, 217935763, '379474893', 'Umban Sari', 2, 1, 'User 612b30907f185', 'Perempuan', 'Jakarta', '1973-01-18', '029574983212', 3, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(312, 122700114, '1123048558', 'Umban Sari', 2, 2, 'User 612b309085248', 'Perempuan', 'Jakarta', '1947-07-15', '034757339236', 4, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(313, 609268582, '280203201', 'Umban Sari', 1, 2, 'User 612b30908b4a1', 'Laki-laki', 'Jakarta', '1997-10-07', '068059380661', 5, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(314, 126737299, '206064333', 'Umban Sari', 2, 1, 'User 612b309091545', 'Perempuan', 'Bogor', '1966-07-18', '039510118647', 6, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(315, 312093928, '598922445', 'Umban Sari', 2, 2, 'User 612b30909783b', 'Perempuan', 'Bogor', '2013-12-02', '049553012234', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(316, 221389707, '844790129', 'Umban Sari', 1, 1, 'User 612b30909d877', 'Laki-laki', 'Pekanbaru', '1945-03-30', '081667026670', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(317, 1336533, '1156082569', 'Umban Sari', 2, 1, 'User 612b3090a3b5e', 'Perempuan', 'Bogor', '1944-12-14', '089010344186', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(318, 1595387433, '1600928404', 'Umban Sari', 2, 2, 'User 612b3090a9c14', 'Laki-laki', 'Jakarta', '2014-07-13', '039735580232', 5, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(319, 533494903, '740255825', 'Umban Sari', 1, 1, 'User 612b3090aff02', 'Perempuan', 'Bogor', '1981-01-08', '047200648137', 5, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(320, 1502175496, '1477374642', 'Umban Sari', 1, 1, 'User 612b3090b5f4a', 'Perempuan', 'Pekanbaru', '1982-08-07', '022091682313', 1, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(321, 936291348, '560198043', 'Umban Sari', 2, 2, 'User 612b3090bc1e2', 'Laki-laki', 'Pekanbaru', '1963-02-14', '018361056472', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(322, 1049562911, '1306759459', 'Umban Sari', 2, 2, 'User 612b3090c22ac', 'Perempuan', 'Pekanbaru', '1947-04-27', '082231794675', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(323, 1332599665, '252651737', 'Umban Sari', 1, 2, 'User 612b3091852fa', 'Perempuan', 'Bogor', '2009-11-30', '075666442498', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(324, 1368093468, '479696098', 'Umban Sari', 1, 1, 'User 612b30918b373', 'Perempuan', 'Bogor', '1974-05-05', '088747058352', 6, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(325, 83608226, '47118773', 'Umban Sari', 1, 2, 'User 612b309191639', 'Perempuan', 'Pekanbaru', '1951-05-20', '059245619588', 5, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(326, 923079488, '621506250', 'Umban Sari', 2, 1, 'User 612b3091976c6', 'Perempuan', 'Jakarta', '1977-09-02', '040419892881', 6, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(327, 1097708609, '1067777054', 'Umban Sari', 1, 2, 'User 612b30919da65', 'Perempuan', 'Pekanbaru', '1999-07-02', '012173584555', 6, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(328, 337518643, '785977743', 'Umban Sari', 2, 2, 'User 612b3091a3a12', 'Laki-laki', 'Pekanbaru', '1973-10-15', '051895920102', 6, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(329, 443718767, '877176538', 'Umban Sari', 2, 1, 'User 612b3091a9ce7', 'Laki-laki', 'Jakarta', '2009-01-24', '010739908273', 3, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(330, 699923626, '285049313', 'Umban Sari', 2, 2, 'User 612b3091afd6a', 'Laki-laki', 'Jakarta', '1948-06-09', '070543076150', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(331, 1527812778, '1016431294', 'Umban Sari', 2, 2, 'User 612b3091b6038', 'Perempuan', 'Pekanbaru', '1949-07-28', '079556119517', 4, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(332, 286368409, '1458542014', 'Umban Sari', 2, 2, 'User 612b3091bc0e2', 'Perempuan', 'Jakarta', '1989-09-21', '011814105122', 1, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(333, 913440778, '1275915372', 'Umban Sari', 2, 2, 'User 612b3091d0967', 'Perempuan', 'Bogor', '1971-09-14', '066420302300', 2, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(334, 183002113, '631876507', 'Umban Sari', 2, 2, 'User 612b3091df0f3', 'Perempuan', 'Bogor', '1950-09-08', '060823228602', 5, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(335, 317273119, '60983204', 'Umban Sari', 2, 2, 'User 612b3091e4bf3', 'Laki-laki', 'Bogor', '2013-02-21', '044212101550', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(336, 1333112441, '799849548', 'Umban Sari', 1, 1, 'User 612b30928b426', 'Laki-laki', 'Bogor', '1997-02-20', '012279033923', 6, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(337, 596133755, '1190097711', 'Umban Sari', 2, 1, 'User 612b3092a2014', 'Perempuan', 'Pekanbaru', '2016-10-13', '089641886740', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(338, 256404277, '182630099', 'Umban Sari', 1, 2, 'User 612b3092a7be2', 'Laki-laki', 'Bogor', '1996-09-02', '022520426433', 1, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(339, 389939904, '630988676', 'Umban Sari', 2, 1, 'User 612b3092adc98', 'Laki-laki', 'Pekanbaru', '1950-01-10', '039074747803', 6, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(340, 963840845, '1557703581', 'Umban Sari', 2, 2, 'User 612b3092bc14d', 'Perempuan', 'Jakarta', '2009-04-14', '052073375868', 1, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(341, 1386995123, '20466343', 'Umban Sari', 2, 2, 'User 612b3092c492c', 'Laki-laki', 'Jakarta', '1981-01-06', '060143124333', 1, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(342, 1588080186, '1471386969', 'Umban Sari', 1, 1, 'User 612b3092ca537', 'Laki-laki', 'Jakarta', '1978-10-21', '027135008009', 3, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(343, 1066564945, '1248770634', 'Umban Sari', 2, 2, 'User 612b3092da987', 'Perempuan', 'Pekanbaru', '1978-01-19', '038781073373', 5, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(344, 684806631, '201690799', 'Umban Sari', 1, 2, 'User 612b3092e0ab2', 'Perempuan', 'Pekanbaru', '1995-07-20', '028387646520', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(345, 1177214970, '518122186', 'Umban Sari', 1, 2, 'User 612b3092f3076', 'Perempuan', 'Pekanbaru', '1945-07-15', '084266074605', 5, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(346, 95978618, '70988363', 'Umban Sari', 1, 2, 'User 612b30930aff8', 'Laki-laki', 'Jakarta', '1988-08-28', '049945575271', 1, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(347, 1128142049, '1335308510', 'Umban Sari', 2, 1, 'User 612b309323dd1', 'Laki-laki', 'Bogor', '2001-12-22', '020936836966', 4, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(348, 1130602444, '1195961292', 'Umban Sari', 2, 2, 'User 612b309331bdf', 'Laki-laki', 'Jakarta', '2012-11-02', '045465588347', 4, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(349, 260759710, '1038320717', 'Umban Sari', 1, 2, 'User 612b30938d4b3', 'Laki-laki', 'Bogor', '2006-08-21', '052775494450', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(350, 1188104668, '1147818084', 'Umban Sari', 2, 1, 'User 612b309393504', 'Laki-laki', 'Jakarta', '1949-04-05', '072170739306', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(351, 951105663, '1514343560', 'Umban Sari', 1, 1, 'User 612b309399835', 'Laki-laki', 'Bogor', '2003-07-30', '012836493271', 6, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(352, 1319865984, '1420480138', 'Umban Sari', 1, 2, 'User 612b3093a5b71', 'Laki-laki', 'Pekanbaru', '2001-05-31', '077014949553', 5, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(353, 931705506, '264421822', 'Umban Sari', 2, 1, 'User 612b3093abbcc', 'Laki-laki', 'Bogor', '1955-01-18', '063514323375', 6, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(354, 1482754857, '229379788', 'Umban Sari', 1, 2, 'User 612b3093be1b8', 'Laki-laki', 'Pekanbaru', '2017-08-10', '036462882604', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(355, 203207319, '862749948', 'Umban Sari', 2, 1, 'User 612b3093cebd6', 'Perempuan', 'Pekanbaru', '1944-02-28', '087564994681', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(356, 1257571556, '986679687', 'Umban Sari', 2, 2, 'User 612b3093ecf07', 'Perempuan', 'Bogor', '1985-05-03', '030853712135', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(357, 198150400, '1349200094', 'Umban Sari', 2, 1, 'User 612b3093f2f1f', 'Perempuan', 'Pekanbaru', '1984-04-29', '084317393745', 6, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(358, 1517759128, '122524435', 'Umban Sari', 2, 2, 'User 612b309404f96', 'Perempuan', 'Pekanbaru', '1991-06-13', '035216898370', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(359, 162172249, '1038675445', 'Umban Sari', 1, 1, 'User 612b30940b005', 'Perempuan', 'Pekanbaru', '1977-12-17', '047213354978', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(360, 1265526103, '1089442624', 'Umban Sari', 1, 2, 'User 612b3094125ed', 'Laki-laki', 'Pekanbaru', '1955-09-09', '061870063809', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(361, 1153706159, '1517961997', 'Umban Sari', 2, 1, 'User 612b309419309', 'Laki-laki', 'Jakarta', '1974-01-28', '051779955013', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(362, 854244590, '17693672', 'Umban Sari', 1, 1, 'User 612b30941f5cc', 'Perempuan', 'Jakarta', '1954-09-16', '037921234996', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(363, 280002593, '140934411', 'Umban Sari', 1, 2, 'User 612b309425603', 'Laki-laki', 'Pekanbaru', '1950-10-28', '028810336261', 2, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(364, 677835294, '1169931131', 'Umban Sari', 1, 1, 'User 612b30942b8d3', 'Laki-laki', 'Pekanbaru', '1955-12-14', '052481166854', 6, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(365, 1508259460, '1365951910', 'Umban Sari', 2, 2, 'User 612b30943c4c1', 'Laki-laki', 'Pekanbaru', '1991-09-02', '055256558651', 2, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(366, 1562773407, '506206953', 'Umban Sari', 2, 2, 'User 612b309441f34', 'Laki-laki', 'Jakarta', '1950-05-07', '042572200262', 4, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(367, 1164542050, '193554939', 'Umban Sari', 1, 2, 'User 612b309447f91', 'Laki-laki', 'Bogor', '1974-08-14', '066012302552', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(368, 427406455, '1153116075', 'Umban Sari', 2, 1, 'User 612b30944e26f', 'Perempuan', 'Bogor', '1948-09-28', '068981369679', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(369, 593634117, '724545744', 'Umban Sari', 1, 1, 'User 612b3094542da', 'Perempuan', 'Pekanbaru', '1960-10-22', '014572665134', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(370, 773487587, '575482833', 'Umban Sari', 2, 1, 'User 612b3094690d9', 'Perempuan', 'Bogor', '2004-11-01', '012896465459', 5, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(371, 421041796, '990756989', 'Umban Sari', 2, 1, 'User 612b30946ea00', 'Laki-laki', 'Bogor', '1950-02-13', '024239997650', 1, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(372, 303404081, '1491691872', 'Umban Sari', 2, 2, 'User 612b30948b2f8', 'Laki-laki', 'Jakarta', '1989-02-06', '050442018941', 3, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(373, 1056747081, '1608202014', 'Umban Sari', 2, 1, 'User 612b309491359', 'Laki-laki', 'Bogor', '2019-08-12', '045773349039', 4, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(374, 488378308, '1297873632', 'Umban Sari', 1, 1, 'User 612b309497623', 'Laki-laki', 'Pekanbaru', '2016-12-08', '020664710136', 5, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(375, 1045655410, '1066926741', 'Umban Sari', 1, 2, 'User 612b30949d6b9', 'Laki-laki', 'Bogor', '1954-10-22', '089436741918', 1, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(376, 58540620, '1286724814', 'Umban Sari', 2, 1, 'User 612b3094a3969', 'Perempuan', 'Bogor', '1997-02-22', '015907028545', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(377, 1122973155, '13754285', 'Umban Sari', 2, 2, 'User 612b3094afcc2', 'Laki-laki', 'Bogor', '1958-01-17', '048140099732', 6, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(378, 19680557, '512926276', 'Umban Sari', 1, 2, 'User 612b3094b5d46', 'Laki-laki', 'Pekanbaru', '1990-03-14', '087830766607', 6, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(379, 1313566821, '976192193', 'Umban Sari', 2, 2, 'User 612b3094bc03e', 'Perempuan', 'Bogor', '1993-07-10', '089122836775', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(380, 1291123422, '452355070', 'Umban Sari', 2, 1, 'User 612b3094c20f0', 'Laki-laki', 'Pekanbaru', '1990-08-15', '060593236419', 6, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(381, 403809562, '484816734', 'Umban Sari', 2, 2, 'User 612b3094c835a', 'Laki-laki', 'Pekanbaru', '1943-08-09', '036086847706', 5, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(382, 569268079, '1349685044', 'Umban Sari', 1, 2, 'User 612b3094ce410', 'Perempuan', 'Jakarta', '2009-12-06', '067537225667', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(383, 117237239, '691215989', 'Umban Sari', 1, 2, 'User 612b3094d46b3', 'Laki-laki', 'Bogor', '1949-05-10', '054629827989', 6, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(384, 573890995, '179235679', 'Umban Sari', 1, 2, 'User 612b3094da74f', 'Laki-laki', 'Jakarta', '1990-10-16', '018393536823', 3, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(385, 406060842, '172272737', 'Umban Sari', 1, 1, 'User 612b3094e0a36', 'Perempuan', 'Pekanbaru', '1997-05-21', '055138785080', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(386, 478981572, '214457885', 'Umban Sari', 1, 2, 'User 612b3094ebfc5', 'Laki-laki', 'Jakarta', '1950-08-21', '022286175103', 2, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(387, 1527854657, '880110444', 'Umban Sari', 1, 2, 'User 612b30950351e', 'Laki-laki', 'Pekanbaru', '1961-01-21', '08472428757', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(388, 1492398482, '1372466143', 'Umban Sari', 1, 1, 'User 612b30950cf9b', 'Laki-laki', 'Pekanbaru', '1962-05-22', '082028294236', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(389, 588932547, '927920095', 'Umban Sari', 2, 2, 'User 612b30951327a', 'Laki-laki', 'Jakarta', '2003-01-06', '081335660094', 5, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(390, 573424335, '52105179', 'Umban Sari', 1, 2, 'User 612b3095192e4', 'Laki-laki', 'Jakarta', '1946-06-30', '048113929665', 3, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(391, 736492326, '1012936265', 'Umban Sari', 2, 2, 'User 612b30951f5f3', 'Perempuan', 'Pekanbaru', '1960-02-17', '060269191636', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(392, 1176122604, '1333080929', 'Umban Sari', 2, 2, 'User 612b30952563e', 'Laki-laki', 'Jakarta', '1948-09-05', '016733778935', 5, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(393, 1003834782, '1056419489', 'Umban Sari', 1, 2, 'User 612b30952b92f', 'Perempuan', 'Pekanbaru', '2016-06-22', '061522794352', 2, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(394, 621444773, '820653792', 'Umban Sari', 1, 1, 'User 612b3095319f7', 'Perempuan', 'Bogor', '1982-05-24', '077897174182', 6, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(395, 314864055, '243614168', 'Umban Sari', 2, 1, 'User 612b309537ca8', 'Perempuan', 'Bogor', '1992-11-11', '075671344812', 4, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(396, 241693955, '1019950557', 'Umban Sari', 2, 1, 'User 612b30953dcb7', 'Perempuan', 'Pekanbaru', '1990-04-11', '013384346015', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(397, 1361956048, '85076875', 'Umban Sari', 2, 1, 'User 612b309543fc2', 'Laki-laki', 'Jakarta', '2013-01-29', '013082412688', 2, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(398, 34775868, '505111228', 'Umban Sari', 2, 2, 'User 612b30954a026', 'Perempuan', 'Pekanbaru', '2019-07-05', '086373390302', 6, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(399, 1178656276, '1060193796', 'Umban Sari', 2, 2, 'User 612b30955031e', 'Perempuan', 'Jakarta', '1971-01-25', '077953581518', 6, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(400, 237781723, '267711793', 'Umban Sari', 1, 1, 'User 612b309556375', 'Laki-laki', 'Pekanbaru', '2001-07-15', '061378171249', 6, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(401, 901798694, '560366043', 'Umban Sari', 2, 2, 'User 612b30955c66b', 'Perempuan', 'Bogor', '1996-12-02', '049357205534', 1, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(402, 504228694, '1187359580', 'Umban Sari', 1, 1, 'User 612b309562717', 'Perempuan', 'Pekanbaru', '1997-11-12', '062693679574', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(403, 824399062, '747421482', 'Umban Sari', 2, 2, 'User 612b309568a10', 'Laki-laki', 'Jakarta', '1994-07-17', '065470130996', 3, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(404, 861338062, '1106734876', 'Umban Sari', 2, 1, 'User 612b30956ea5b', 'Perempuan', 'Bogor', '1992-08-27', '049223709737', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(405, 292134094, '831552123', 'Umban Sari', 2, 2, 'User 612b309581037', 'Laki-laki', 'Pekanbaru', '1999-09-15', '020726201357', 2, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(406, 1129667624, '963785647', 'Umban Sari', 2, 2, 'User 612b3095870c3', 'Perempuan', 'Jakarta', '2007-06-23', '026322601823', 5, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(407, 1057428593, '12058910', 'Umban Sari', 1, 2, 'User 612b3095a7999', 'Perempuan', 'Pekanbaru', '1945-07-28', '051248445344', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(408, 68653569, '1043630635', 'Umban Sari', 1, 2, 'User 612b3095b861f', 'Perempuan', 'Jakarta', '1959-06-12', '063427524686', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(409, 435316269, '678192261', 'Umban Sari', 2, 2, 'User 612b3095c42bd', 'Laki-laki', 'Jakarta', '1968-07-31', '036821571289', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(410, 656692688, '1594701643', 'Umban Sari', 1, 1, 'User 612b3095d461c', 'Perempuan', 'Pekanbaru', '1974-09-29', '064787223590', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(411, 1449270042, '669255655', 'Umban Sari', 1, 2, 'User 612b3095da87c', 'Perempuan', 'Jakarta', '2017-11-21', '067691042594', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(412, 638878875, '201743216', 'Umban Sari', 2, 2, 'User 612b3095e0912', 'Laki-laki', 'Jakarta', '2009-03-25', '022506845371', 3, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(413, 483786571, '1516233014', 'Umban Sari', 2, 1, 'User 612b3095e6bcf', 'Laki-laki', 'Jakarta', '1971-08-03', '087532565539', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(414, 968785123, '1173581264', 'Umban Sari', 1, 2, 'User 612b3095eccf0', 'Laki-laki', 'Bogor', '1972-05-27', '063765827599', 6, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(415, 860529936, '1591437798', 'Umban Sari', 2, 1, 'User 612b3095f33d4', 'Perempuan', 'Jakarta', '1999-12-04', '049255903036', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(416, 1339579519, '661341338', 'Umban Sari', 1, 1, 'User 612b309606e1c', 'Perempuan', 'Bogor', '1987-09-11', '018268417350', 5, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(417, 1256307651, '93004452', 'Umban Sari', 2, 1, 'User 612b30960d092', 'Perempuan', 'Pekanbaru', '1973-03-09', '040840219393', 6, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(418, 283722814, '1118857276', 'Umban Sari', 1, 2, 'User 612b30961dc1a', 'Laki-laki', 'Pekanbaru', '2005-11-10', '063100826532', 6, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(419, 1350873050, '558134329', 'Umban Sari', 2, 2, 'User 612b30963011d', 'Perempuan', 'Bogor', '1983-11-01', '071991781767', 5, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(420, 1556414175, '1070144138', 'Umban Sari', 2, 2, 'User 612b3096405e2', 'Perempuan', 'Bogor', '1948-10-22', '052803056027', 2, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(421, 364613368, '1313624114', 'Umban Sari', 2, 2, 'User 612b309650337', 'Laki-laki', 'Pekanbaru', '1950-12-10', '031727718205', 6, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(422, 61197063, '1102463122', 'Umban Sari', 1, 2, 'User 612b30965638e', 'Laki-laki', 'Pekanbaru', '1998-05-02', '084769122171', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(423, 806015971, '1586612028', 'Umban Sari', 2, 2, 'User 612b30965c64a', 'Perempuan', 'Bogor', '1997-07-20', '067842355244', 2, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(424, 1456093295, '1432679767', 'Umban Sari', 1, 1, 'User 612b3096626d9', 'Laki-laki', 'Jakarta', '1948-01-17', '033977953083', 2, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(425, 283526060, '811280840', 'Umban Sari', 1, 2, 'User 612b3096689e1', 'Perempuan', 'Jakarta', '2019-11-10', '074584848688', 1, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(426, 435915791, '766330789', 'Umban Sari', 2, 1, 'User 612b30966ea2c', 'Perempuan', 'Pekanbaru', '1976-07-01', '058768377094', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(427, 1233145415, '417937785', 'Umban Sari', 1, 2, 'User 612b309674ced', 'Perempuan', 'Jakarta', '1982-09-20', '038136607678', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(428, 1562361746, '1115946661', 'Umban Sari', 2, 1, 'User 612b30967ad95', 'Perempuan', 'Pekanbaru', '2006-02-05', '020864595297', 1, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(429, 846105954, '1010815173', 'Umban Sari', 2, 2, 'User 612b30968d3e1', 'Laki-laki', 'Pekanbaru', '2019-11-27', '067096960806', 5, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(430, 517494250, '845530001', 'Umban Sari', 2, 1, 'User 612b3096934ef', 'Perempuan', 'Bogor', '1978-06-22', '046756045928', 1, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(431, 1602029903, '1336856077', 'Umban Sari', 1, 2, 'User 612b30969974d', 'Perempuan', 'Jakarta', '1953-04-10', '011086405905', 1, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(432, 933595384, '825005662', 'Umban Sari', 2, 2, 'User 612b30969f796', 'Perempuan', 'Bogor', '1997-01-21', '013494500563', 2, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(433, 1144940663, '1264879032', 'Umban Sari', 1, 2, 'User 612b30973bb7d', 'Laki-laki', 'Bogor', '1988-04-19', '062050068786', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(434, 1480193384, '1135089987', 'Umban Sari', 1, 1, 'User 612b30974a834', 'Laki-laki', 'Pekanbaru', '1953-02-28', '09919827897', 2, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(435, 685709889, '207137949', 'Umban Sari', 2, 2, 'User 612b3097500e0', 'Perempuan', 'Jakarta', '2001-02-26', '053839224125', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(436, 757256616, '676368409', 'Umban Sari', 1, 1, 'User 612b30975e603', 'Laki-laki', 'Pekanbaru', '1961-05-16', '012497001784', 6, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(437, 1561124228, '8406363', 'Umban Sari', 2, 1, 'User 612b30976467a', 'Laki-laki', 'Jakarta', '1963-03-20', '051123169505', 1, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(438, 137573308, '657647021', 'Umban Sari', 1, 1, 'User 612b30976a91f', 'Laki-laki', 'Pekanbaru', '1995-09-16', '077103307148', 1, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(439, 1170622624, '723846962', 'Umban Sari', 2, 2, 'User 612b309772b4b', 'Laki-laki', 'Pekanbaru', '2010-09-21', '011149091110', 2, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(440, 384057380, '431090319', 'Umban Sari', 2, 2, 'User 612b309778c16', 'Laki-laki', 'Jakarta', '1960-06-28', '032435722604', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(441, 1089569550, '322538489', 'Umban Sari', 2, 1, 'User 612b30977ee9e', 'Perempuan', 'Pekanbaru', '1950-04-28', '047815949583', 6, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(442, 1010673137, '1547060085', 'Umban Sari', 2, 2, 'User 612b309784f00', 'Laki-laki', 'Jakarta', '2015-10-29', '084878289564', 4, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(443, 634865064, '949387457', 'Umban Sari', 2, 2, 'User 612b30978b20e', 'Perempuan', 'Pekanbaru', '1962-07-07', '081656179415', 4, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(444, 566952442, '400476417', 'Umban Sari', 2, 2, 'User 612b309791262', 'Laki-laki', 'Pekanbaru', '2019-09-15', '086561885930', 1, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(445, 819902527, '810911609', 'Umban Sari', 2, 1, 'User 612b309797556', 'Laki-laki', 'Jakarta', '1962-05-05', '045043389646', 6, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(446, 945883172, '858721833', 'Umban Sari', 2, 1, 'User 612b30979d5be', 'Laki-laki', 'Pekanbaru', '1994-02-23', '070951851064', 4, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(447, 503651308, '148924823', 'Umban Sari', 2, 1, 'User 612b3097a389d', 'Laki-laki', 'Bogor', '1987-11-15', '063651967571', 1, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(448, 626387331, '1071951937', 'Umban Sari', 2, 2, 'User 612b3097a9911', 'Perempuan', 'Jakarta', '2011-05-04', '013318414752', 6, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(449, 1421455521, '527803051', 'Umban Sari', 1, 1, 'User 612b3097ba684', 'Laki-laki', 'Jakarta', '1970-06-19', '072732821260', 5, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(450, 80962898, '1552893012', 'Umban Sari', 1, 1, 'User 612b3097c008a', 'Laki-laki', 'Pekanbaru', '2009-03-03', '028728622425', 4, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(451, 674850192, '422821806', 'Umban Sari', 1, 1, 'User 612b3097caadc', 'Perempuan', 'Bogor', '2015-12-25', '015233036821', 2, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(452, 488919280, '1390767699', 'Umban Sari', 1, 2, 'User 612b3097d0449', 'Perempuan', 'Pekanbaru', '2000-11-26', '017599820945', 6, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(453, 523782125, '697886236', 'Umban Sari', 1, 1, 'User 612b3097d654b', 'Laki-laki', 'Jakarta', '1971-03-04', '027378264428', 2, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(454, 1026245102, '1521239761', 'Umban Sari', 1, 1, 'User 612b3097dc7b9', 'Laki-laki', 'Jakarta', '1946-07-16', '017660043049', 1, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(455, 730736455, '1559994932', 'Umban Sari', 1, 1, 'User 612b3097e2845', 'Perempuan', 'Pekanbaru', '1989-07-01', '046600283649', 2, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(456, 1389556018, '861925848', 'Umban Sari', 2, 2, 'User 612b3097e8b60', 'Laki-laki', 'Pekanbaru', '1984-01-10', '080893838639', 1, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(457, 1447981799, '1024872027', 'Umban Sari', 1, 1, 'User 612b3097eebf1', 'Laki-laki', 'Bogor', '2002-12-05', '034204624888', 1, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(458, 1180724654, '887390841', 'Umban Sari', 2, 2, 'User 612b309800c16', 'Laki-laki', 'Jakarta', '2013-02-23', '020927228304', 2, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(459, 337755088, '532962884', 'Umban Sari', 2, 2, 'User 612b309806d10', 'Laki-laki', 'Bogor', '1981-10-30', '063326550084', 4, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(460, 566107427, '482853290', 'Umban Sari', 1, 1, 'User 612b30980cfe9', 'Perempuan', 'Pekanbaru', '1972-03-16', '079618403410', 2, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(461, 317384356, '6072273', 'Umban Sari', 1, 1, 'User 612b30985b14b', 'Perempuan', 'Jakarta', '1995-05-31', '035879565875', 6, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(462, 960441179, '654986211', 'Umban Sari', 1, 1, 'User 612b309864607', 'Perempuan', 'Pekanbaru', '1982-09-28', '027289308318', 5, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(463, 1542218346, '618296274', 'Umban Sari', 2, 2, 'User 612b30986a92f', 'Laki-laki', 'Jakarta', '2011-01-11', '041904105482', 2, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(464, 565947780, '277283635', 'Umban Sari', 2, 2, 'User 612b30987ccb2', 'Perempuan', 'Jakarta', '1990-12-10', '089310121358', 6, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(465, 1258628559, '1086948143', 'Umban Sari', 1, 1, 'User 612b309886f5b', 'Laki-laki', 'Jakarta', '1989-08-10', '071341839965', 5, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(466, 365960846, '1604605649', 'Umban Sari', 1, 1, 'User 612b309897501', 'Perempuan', 'Pekanbaru', '1986-07-11', '026497343137', 5, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(467, 1414415596, '63140232', 'Umban Sari', 1, 1, 'User 612b30989d585', 'Perempuan', 'Pekanbaru', '1964-01-29', '036695109810', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(468, 1190818262, '1400333930', 'Umban Sari', 1, 2, 'User 612b3098a383b', 'Laki-laki', 'Jakarta', '1999-09-28', '034289254952', 2, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(469, 791714038, '999284442', 'Umban Sari', 2, 2, 'User 612b3098a98ec', 'Perempuan', 'Pekanbaru', '1971-03-02', '017709201992', 1, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(470, 918855092, '1234176618', 'Umban Sari', 2, 2, 'User 612b3098afbd3', 'Laki-laki', 'Bogor', '1962-07-08', '010984513569', 2, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(471, 1444657588, '1396978154', 'Umban Sari', 2, 2, 'User 612b3098b5c3b', 'Perempuan', 'Pekanbaru', '2004-02-17', '068590944041', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(472, 577451208, '1078756561', 'Umban Sari', 1, 2, 'User 612b3098bbef0', 'Perempuan', 'Bogor', '2018-10-16', '032507168979', 4, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(473, 1038717021, '1443587976', 'Umban Sari', 2, 2, 'User 612b3098c1fc9', 'Laki-laki', 'Jakarta', '1998-08-19', '059681562504', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(474, 498598993, '56372288', 'Umban Sari', 2, 1, 'User 612b3098c82b8', 'Perempuan', 'Pekanbaru', '1963-05-25', '030041286993', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(475, 777302891, '964938966', 'Umban Sari', 1, 2, 'User 612b3098ce2c8', 'Perempuan', 'Pekanbaru', '1953-02-09', '036236343311', 3, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(476, 416992936, '683882798', 'Umban Sari', 1, 1, 'User 612b3098d45ae', 'Laki-laki', 'Jakarta', '2000-02-03', '08785457643', 1, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(477, 1269431127, '805758780', 'Umban Sari', 1, 2, 'User 612b3098da62e', 'Perempuan', 'Bogor', '1988-09-06', '017536456707', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(478, 1624226979, '1360206364', 'Umban Sari', 2, 1, 'User 612b3098e08e4', 'Laki-laki', 'Pekanbaru', '2001-01-23', '065657761342', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(479, 1361366209, '1146189236', 'Umban Sari', 1, 2, 'User 612b3098e6975', 'Perempuan', 'Jakarta', '1948-03-12', '047858779256', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(480, 152995401, '1359660933', 'Umban Sari', 2, 1, 'User 612b3098ecc27', 'Perempuan', 'Jakarta', '1951-05-13', '081815075440', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(481, 213021582, '1541444949', 'Umban Sari', 2, 1, 'User 612b30990143b', 'Perempuan', 'Jakarta', '1950-07-11', '021963689365', 3, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(482, 639691539, '277466049', 'Umban Sari', 1, 2, 'User 612b30991189b', 'Perempuan', 'Jakarta', '1947-08-22', '039666112282', 2, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(483, 1211777657, '944261892', 'Umban Sari', 2, 2, 'User 612b30991723a', 'Perempuan', 'Jakarta', '2015-10-09', '086775027379', 1, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(484, 304342986, '800024313', 'Umban Sari', 1, 1, 'User 612b30991d2d9', 'Perempuan', 'Bogor', '1991-06-17', '033670725319', 5, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(485, 340853489, '861161848', 'Umban Sari', 1, 1, 'User 612b3099235bc', 'Laki-laki', 'Bogor', '1962-07-16', '055454585016', 6, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(486, 1031549442, '609350927', 'Umban Sari', 2, 2, 'User 612b309929659', 'Laki-laki', 'Jakarta', '1968-02-17', '026295827040', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(487, 325476133, '1072278883', 'Umban Sari', 2, 2, 'User 612b30992f8fb', 'Laki-laki', 'Bogor', '1989-09-17', '032074186102', 3, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(488, 181322714, '1520287540', 'Umban Sari', 1, 2, 'User 612b30993598d', 'Laki-laki', 'Bogor', '2008-07-09', '017344666301', 1, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(489, 810532595, '1293803307', 'Umban Sari', 2, 1, 'User 612b30993bc97', 'Perempuan', 'Jakarta', '2015-10-17', '080589520206', 2, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(490, 1425513401, '378905745', 'Umban Sari', 2, 2, 'User 612b309947fbb', 'Perempuan', 'Bogor', '1995-11-28', '043056014663', 1, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(491, 1434860987, '187329280', 'Umban Sari', 1, 2, 'User 612b30994e018', 'Laki-laki', 'Pekanbaru', '1941-09-03', '070522237548', 5, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(492, 1426154969, '521972483', 'Umban Sari', 2, 2, 'User 612b3099542e4', 'Perempuan', 'Jakarta', '2021-01-27', '052855098243', 6, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(493, 1217417891, '116390844', 'Umban Sari', 2, 2, 'User 612b30995a370', 'Laki-laki', 'Bogor', '2003-10-08', '064871462942', 2, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(494, 1047188972, '1397461442', 'Umban Sari', 2, 1, 'User 612b30996068a', 'Laki-laki', 'Bogor', '1993-02-24', '011291046955', 6, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(495, 1228694758, '1420641697', 'Umban Sari', 2, 1, 'User 612b3099666b9', 'Laki-laki', 'Jakarta', '1962-05-23', '027046986835', 4, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(496, 1130588311, '1179071459', 'Umban Sari', 1, 1, 'User 612b30996c97b', 'Laki-laki', 'Pekanbaru', '1953-04-21', '059494068648', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(497, 1362892213, '959687594', 'Umban Sari', 2, 1, 'User 612b309972a1c', 'Laki-laki', 'Bogor', '1983-03-29', '084943714394', 3, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(498, 820708553, '272399779', 'Umban Sari', 2, 2, 'User 612b309978d20', 'Laki-laki', 'Bogor', '1957-08-18', '037347207514', 2, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(499, 89487315, '1608311442', 'Umban Sari', 2, 2, 'User 612b30997ed69', 'Perempuan', 'Bogor', '1956-11-22', '070858406203', 1, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(500, 967661826, '1037281198', 'Umban Sari', 2, 1, 'User 612b30998503d', 'Perempuan', 'Jakarta', '1992-12-22', '051139771864', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(501, 158593818, '976750362', 'Umban Sari', 2, 2, 'User 612b30998b0bf', 'Perempuan', 'Bogor', '2006-02-10', '015724370368', 1, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(502, 1601125164, '349711087', 'Umban Sari', 2, 1, 'User 612b3099913b2', 'Perempuan', 'Bogor', '1975-01-26', '039492538165', 4, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(503, 567336892, '77200690', 'Umban Sari', 2, 2, 'User 612b309997441', 'Perempuan', 'Bogor', '1986-02-26', '088989590487', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(504, 1345470244, '239583800', 'Umban Sari', 1, 2, 'User 612b30999d736', 'Laki-laki', 'Pekanbaru', '1992-10-26', '019994561584', 2, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(505, 1545018631, '784667415', 'Umban Sari', 1, 1, 'User 612b3099a3789', 'Perempuan', 'Jakarta', '1948-09-08', '022045586242', 2, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(506, 1034985341, '38764910', 'Umban Sari', 1, 1, 'User 612b3099a9a2c', 'Laki-laki', 'Pekanbaru', '1968-04-04', '088894379367', 6, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(507, 873490295, '10233132', 'Umban Sari', 1, 1, 'User 612b3099afadc', 'Laki-laki', 'Pekanbaru', '2012-03-27', '038342226261', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(508, 33149190, '897153065', 'Umban Sari', 2, 1, 'User 612b3099b5d76', 'Perempuan', 'Jakarta', '1959-06-20', '075228981341', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(509, 1230116460, '87779881', 'Umban Sari', 2, 1, 'User 612b3099bbdef', 'Perempuan', 'Bogor', '1949-04-07', '054796606702', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(510, 880066306, '589522294', 'Umban Sari', 1, 1, 'User 612b3099c20d5', 'Perempuan', 'Pekanbaru', '1999-06-06', '026940978188', 1, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(511, 782002535, '1023782915', 'Umban Sari', 1, 2, 'User 612b3099c8159', 'Perempuan', 'Pekanbaru', '1942-07-05', '065312458113', 4, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(512, 440669936, '501768858', 'Umban Sari', 2, 2, 'User 612b3099ce45b', 'Perempuan', 'Jakarta', '1951-08-26', '035765322915', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(513, 970309099, '1419748112', 'Umban Sari', 2, 2, 'User 612b3099d449d', 'Laki-laki', 'Jakarta', '1996-09-15', '043755545152', 5, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(514, 703119011, '836181360', 'Umban Sari', 2, 1, 'User 612b3099da780', 'Laki-laki', 'Jakarta', '1955-03-05', '033484489948', 1, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(515, 215041344, '797635543', 'Umban Sari', 2, 1, 'User 612b3099e082c', 'Perempuan', 'Bogor', '1972-10-12', '039023976627', 5, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(516, 676467456, '660251736', 'Umban Sari', 2, 1, 'User 612b3099e6b08', 'Perempuan', 'Bogor', '1989-07-24', '028568455401', 2, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(517, 488995447, '1612259962', 'Umban Sari', 1, 1, 'User 612b3099ecb84', 'Perempuan', 'Bogor', '1984-03-09', '064507860291', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(518, 621202688, '755459702', 'Umban Sari', 2, 2, 'User 612b3099f2df4', 'Perempuan', 'Pekanbaru', '1984-12-18', '034909485244', 1, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(519, 1125562495, '831208565', 'Umban Sari', 1, 2, 'User 612b309a04c3d', 'Laki-laki', 'Jakarta', '1974-12-30', '069302579630', 2, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(520, 158134898, '1416182835', 'Umban Sari', 2, 1, 'User 612b309a0af73', 'Perempuan', 'Pekanbaru', '2012-09-22', '023069974212', 3, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(521, 416340760, '1394581012', 'Umban Sari', 1, 2, 'User 612b309a10f94', 'Perempuan', 'Jakarta', '2003-06-13', '061750132484', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(522, 1074017080, '688744418', 'Umban Sari', 2, 2, 'User 612b309a1727c', 'Laki-laki', 'Pekanbaru', '2010-11-02', '032660603024', 1, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(523, 1484101171, '84816121', 'Umban Sari', 1, 1, 'User 612b309a1d33b', 'Perempuan', 'Jakarta', '1961-01-15', '079708478864', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(524, 1190718220, '1090382644', 'Umban Sari', 1, 2, 'User 612b309a235d7', 'Laki-laki', 'Bogor', '1953-03-14', '066864078155', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(525, 909122421, '1240188233', 'Umban Sari', 1, 1, 'User 612b309a2967d', 'Perempuan', 'Bogor', '1978-11-28', '087294292189', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(526, 546295065, '1527609894', 'Umban Sari', 1, 1, 'User 612b309a3c523', 'Perempuan', 'Pekanbaru', '1966-01-04', '060969082931', 1, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(527, 1214743343, '1498736944', 'Umban Sari', 2, 2, 'User 612b309a41c12', 'Laki-laki', 'Jakarta', '1960-01-06', '087261718087', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(528, 185542941, '602667444', 'Umban Sari', 1, 2, 'User 612b309a47eb0', 'Perempuan', 'Bogor', '1997-12-13', '027991070456', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(529, 514073980, '1064035558', 'Umban Sari', 2, 1, 'User 612b309a541e8', 'Perempuan', 'Pekanbaru', '1977-07-08', '059638035476', 4, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(530, 1147258341, '37289607', 'Umban Sari', 2, 1, 'User 612b309b8faf0', 'Laki-laki', 'Jakarta', '2021-02-28', '065424752656', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(531, 918081684, '383091429', 'Umban Sari', 2, 1, 'User 612b309b9be19', 'Perempuan', 'Bogor', '1999-04-14', '016504761713', 6, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(532, 1520731502, '438653994', 'Umban Sari', 2, 1, 'User 612b309bb6561', 'Laki-laki', 'Pekanbaru', '1971-10-03', '048638118979', 4, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(533, 217238494, '900028486', 'Umban Sari', 2, 1, 'User 612b309bd0c7c', 'Laki-laki', 'Pekanbaru', '1968-05-05', '033508909903', 6, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(534, 146814670, '349447398', 'Umban Sari', 1, 1, 'User 612b309be27a6', 'Perempuan', 'Bogor', '1983-06-04', '060981545922', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(535, 15994107, '789779959', 'Umban Sari', 2, 1, 'User 612b309c02c21', 'Laki-laki', 'Jakarta', '1967-03-30', '048828097630', 1, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(536, 1447609356, '1147532275', 'Umban Sari', 1, 1, 'User 612b309c214cc', 'Perempuan', 'Pekanbaru', '1980-12-02', '046656188068', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(537, 154015733, '20710021', 'Umban Sari', 1, 1, 'User 612b309c274ba', 'Laki-laki', 'Bogor', '1953-02-11', '014762155074', 2, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(538, 309901739, '1318792646', 'Umban Sari', 2, 1, 'User 612b309c37a5a', 'Perempuan', 'Bogor', '1991-04-21', '045559850369', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(539, 1460588145, '708967205', 'Umban Sari', 2, 2, 'User 612b309c3dbca', 'Perempuan', 'Bogor', '1965-05-06', '089304080336', 6, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(540, 160499240, '249080636', 'Umban Sari', 2, 2, 'User 612b309c43e02', 'Perempuan', 'Jakarta', '1960-08-10', '069887889506', 2, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(541, 232547292, '1463930646', 'Umban Sari', 1, 1, 'User 612b309c49e41', 'Laki-laki', 'Bogor', '1999-12-13', '077755131887', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(542, 1265755247, '560693517', 'Umban Sari', 2, 2, 'User 612b309c50106', 'Laki-laki', 'Bogor', '2015-05-09', '049716233867', 3, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(543, 746138842, '1069012783', 'Umban Sari', 1, 2, 'User 612b309c5620e', 'Perempuan', 'Bogor', '2002-11-16', '045439120758', 1, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(544, 1440620038, '1501545825', 'Umban Sari', 2, 2, 'User 612b309c6a869', 'Laki-laki', 'Bogor', '1973-09-18', '080803687027', 2, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(545, 1101920239, '811311867', 'Umban Sari', 2, 2, 'User 612b309c76c27', 'Perempuan', 'Jakarta', '1971-03-02', '042646077603', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(546, 1431049028, '793187289', 'Umban Sari', 1, 2, 'User 612b309c7cc4c', 'Laki-laki', 'Bogor', '1996-08-23', '057355863433', 5, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(547, 1352170181, '989435457', 'Umban Sari', 2, 2, 'User 612b309c82f0f', 'Laki-laki', 'Pekanbaru', '1999-12-12', '036122108610', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(548, 436736568, '967707458', 'Umban Sari', 1, 2, 'User 612b309c8fba3', 'Laki-laki', 'Pekanbaru', '1961-09-05', '038402807123', 5, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(549, 366800102, '1591285592', 'Umban Sari', 2, 2, 'User 612b309ca1767', 'Perempuan', 'Bogor', '1956-02-08', '087503105811', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(550, 240254795, '124818099', 'Umban Sari', 2, 1, 'User 612b309cb245f', 'Perempuan', 'Jakarta', '1946-06-02', '029387940905', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(551, 1090290983, '994413133', 'Umban Sari', 2, 1, 'User 612b309cbdebd', 'Perempuan', 'Jakarta', '1979-02-07', '075964050506', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(552, 1397012390, '336669327', 'Umban Sari', 1, 1, 'User 612b309ccebe9', 'Perempuan', 'Bogor', '1967-02-03', '064094026955', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(553, 1320575683, '108576599', 'Umban Sari', 2, 1, 'User 612b309d13933', 'Laki-laki', 'Jakarta', '1951-04-29', '024565073972', 1, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(554, 703654296, '1416801713', 'Umban Sari', 2, 2, 'User 612b309d399f5', 'Laki-laki', 'Bogor', '1979-07-03', '019216497768', 2, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(555, 1037612659, '1395329044', 'Umban Sari', 1, 2, 'User 612b309d54af2', 'Laki-laki', 'Pekanbaru', '1973-04-12', '040704212566', 2, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(556, 1424248336, '1601316606', 'Umban Sari', 1, 2, 'User 612b309d64652', 'Perempuan', 'Bogor', '1952-03-04', '085530498031', 5, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(557, 582371035, '1209091007', 'Umban Sari', 2, 2, 'User 612b309d7b512', 'Laki-laki', 'Jakarta', '1976-04-06', '088862649825', 6, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(558, 115752665, '232256846', 'Umban Sari', 1, 2, 'User 612b309dada44', 'Laki-laki', 'Bogor', '1941-07-10', '066386805505', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(559, 207105772, '1176528465', 'Umban Sari', 2, 2, 'User 612b309dbbcca', 'Laki-laki', 'Jakarta', '1963-08-18', '039718654914', 1, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(560, 499119584, '1492392575', 'Umban Sari', 2, 2, 'User 612b309dcebe0', 'Laki-laki', 'Pekanbaru', '1973-12-28', '036646930041', 1, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(561, 582444965, '1093617945', 'Umban Sari', 1, 2, 'User 612b309ddc4a4', 'Laki-laki', 'Bogor', '1993-02-28', '08655298010', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(562, 353574011, '176126828', 'Umban Sari', 1, 1, 'User 612b309df2c4f', 'Perempuan', 'Pekanbaru', '1961-09-16', '031518783169', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(563, 1503347487, '1216106368', 'Umban Sari', 2, 2, 'User 612b309e4c84a', 'Perempuan', 'Jakarta', '2007-04-21', '035373221544', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(564, 762522070, '663085374', 'Umban Sari', 2, 1, 'User 612b309e58bbd', 'Perempuan', 'Jakarta', '1992-08-15', '026883839989', 2, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(565, 1540384241, '706541118', 'Umban Sari', 2, 1, 'User 612b309e64ee3', 'Laki-laki', 'Jakarta', '1987-04-13', '066680873885', 3, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(566, 214149978, '885179674', 'Umban Sari', 2, 2, 'User 612b309e773dd', 'Perempuan', 'Pekanbaru', '1960-09-08', '077679789439', 5, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(567, 656726127, '966888388', 'Umban Sari', 1, 2, 'User 612b309e8168b', 'Laki-laki', 'Jakarta', '2004-01-02', '085167776362', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(568, 1071133437, '1062070321', 'Umban Sari', 2, 2, 'User 612b309e928f0', 'Laki-laki', 'Jakarta', '1942-03-05', '053640157333', 2, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(569, 882770830, '1236029097', 'Umban Sari', 2, 2, 'User 612b309ea978d', 'Perempuan', 'Bogor', '1948-02-18', '012787105142', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(570, 866143308, '759716792', 'Umban Sari', 1, 1, 'User 612b309eb7b08', 'Laki-laki', 'Jakarta', '1973-04-19', '077129437842', 6, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(571, 536405358, '914522537', 'Umban Sari', 2, 2, 'User 612b309ec28a6', 'Laki-laki', 'Jakarta', '1945-06-27', '084981699897', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(572, 94119716, '1546716077', 'Umban Sari', 2, 1, 'User 612b309eccaec', 'Laki-laki', 'Jakarta', '2002-05-29', '036808184887', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(573, 413249547, '525736434', 'Umban Sari', 2, 2, 'User 612b309ed6e1a', 'Laki-laki', 'Bogor', '1982-07-16', '068978586449', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(574, 1466630741, '1428928430', 'Umban Sari', 2, 2, 'User 612b309ee119e', 'Laki-laki', 'Jakarta', '1975-09-28', '070562325040', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(575, 1356851183, '1446318785', 'Umban Sari', 1, 1, 'User 612b309ee684f', 'Perempuan', 'Jakarta', '1955-11-12', '027910541861', 2, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(576, 377148288, '1182321617', 'Umban Sari', 1, 2, 'User 612b309eec8e9', 'Laki-laki', 'Bogor', '1975-01-08', '024545279544', 6, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(577, 1334113632, '612471168', 'Umban Sari', 1, 1, 'User 612b309ef2bde', 'Laki-laki', 'Pekanbaru', '1966-04-25', '055863717699', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(578, 1487745750, '1432468670', 'Umban Sari', 1, 2, 'User 612b309f04a13', 'Perempuan', 'Jakarta', '1986-05-05', '062403919920', 3, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(579, 277827445, '908200233', 'Umban Sari', 1, 1, 'User 612b309f0acab', 'Perempuan', 'Bogor', '1955-04-30', '021382697007', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(580, 1159983875, '484580379', 'Umban Sari', 2, 1, 'User 612b309f1db78', 'Perempuan', 'Pekanbaru', '1973-06-11', '088843388079', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(581, 1159756707, '1315050412', 'Umban Sari', 1, 1, 'User 612b309f30110', 'Perempuan', 'Bogor', '1981-12-02', '069172690298', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(582, 1146069250, '982901133', 'Umban Sari', 1, 2, 'User 612b309f43b77', 'Perempuan', 'Bogor', '2016-07-15', '076990086643', 3, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(583, 867865407, '1392649628', 'Umban Sari', 1, 2, 'User 612b309f52a14', 'Laki-laki', 'Pekanbaru', '1950-04-13', '050337180645', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(584, 772616935, '429883319', 'Umban Sari', 1, 1, 'User 612b309f789ad', 'Perempuan', 'Bogor', '1962-04-12', '087937707397', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(585, 1068297494, '124030937', 'Umban Sari', 2, 1, 'User 612b309f7ec9e', 'Perempuan', 'Pekanbaru', '1986-05-29', '064223161897', 1, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(586, 863187788, '50702744', 'Umban Sari', 1, 1, 'User 612b309f84ca8', 'Perempuan', 'Bogor', '1995-09-30', '071897241487', 1, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(587, 101089171, '853959160', 'Umban Sari', 2, 1, 'User 612b309f8af74', 'Perempuan', 'Pekanbaru', '2003-09-23', '042855720341', 5, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(588, 443026919, '1578650327', 'Umban Sari', 1, 1, 'User 612b309f9100c', 'Perempuan', 'Bogor', '1991-09-03', '043677292069', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(589, 482491654, '632851481', 'Umban Sari', 2, 2, 'User 612b309f972bb', 'Perempuan', 'Jakarta', '1959-01-07', '033349999881', 3, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(590, 822853632, '766692354', 'Umban Sari', 2, 2, 'User 612b309f9d3a3', 'Laki-laki', 'Jakarta', '2004-02-11', '050429634667', 2, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(591, 950754894, '949938578', 'Umban Sari', 1, 2, 'User 612b309fa3622', 'Laki-laki', 'Pekanbaru', '1971-12-29', '068057783318', 3, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(592, 629281598, '456947929', 'Umban Sari', 2, 2, 'User 612b309fa96c0', 'Perempuan', 'Bogor', '1980-10-27', '030726444349', 4, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(593, 1145428028, '788019084', 'Umban Sari', 2, 2, 'User 612b309fafa09', 'Laki-laki', 'Jakarta', '1972-08-20', '076532615249', 2, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(594, 693401985, '114936523', 'Umban Sari', 2, 1, 'User 612b309fb5a0d', 'Perempuan', 'Bogor', '1957-08-11', '036188005216', 1, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(595, 161975096, '1190054231', 'Umban Sari', 1, 1, 'User 612b309fc1d39', 'Laki-laki', 'Bogor', '2009-03-20', '070723980776', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(596, 376332915, '744744240', 'Umban Sari', 1, 1, 'User 612b309fc8039', 'Laki-laki', 'Bogor', '1961-11-23', '040439610165', 2, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(597, 1244945086, '929938523', 'Umban Sari', 1, 2, 'User 612b309fdc46e', 'Laki-laki', 'Bogor', '1990-07-01', '09633309391', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(598, 27848671, '767485323', 'Umban Sari', 2, 2, 'User 612b309fe2722', 'Laki-laki', 'Bogor', '2001-07-21', '036401029851', 3, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(599, 1537723599, '12742845', 'Umban Sari', 2, 2, 'User 612b309fe87c8', 'Laki-laki', 'Pekanbaru', '1984-10-21', '042327286225', 1, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(600, 404537542, '1090583880', 'Umban Sari', 2, 1, 'User 612b309feeabd', 'Laki-laki', 'Pekanbaru', '2014-07-29', '064357616815', 2, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(601, 347071701, '795771682', 'Umban Sari', 1, 2, 'User 612b30a00d73e', 'Laki-laki', 'Pekanbaru', '2008-03-01', '030555050424', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(602, 844993166, '955304099', 'Umban Sari', 2, 1, 'User 612b30a012f12', 'Laki-laki', 'Pekanbaru', '2007-04-12', '011101867845', 4, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(603, 1053948219, '827013955', 'Umban Sari', 1, 1, 'User 612b30a0252de', 'Laki-laki', 'Bogor', '1965-03-31', '018789765316', 3, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(604, 1158551099, '1043815276', 'Umban Sari', 2, 1, 'User 612b30a02b5e1', 'Laki-laki', 'Pekanbaru', '2010-11-14', '09085304938', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(605, 1236968093, '1628977793', 'Umban Sari', 2, 2, 'User 612b30a031639', 'Laki-laki', 'Jakarta', '1984-02-06', '029431844050', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg');
INSERT INTO `penduduk` (`pndk_id`, `pndk_nik`, `pndk_nokk`, `pndk_alamat`, `rt_id`, `rw_id`, `pndk_fullname`, `pndk_jk`, `pndk_tmp_lahir`, `pndk_tgl_lahir`, `pndk_tlp`, `agm_id`, `goldr_id`, `pnd_id`, `pkrj_id`, `sts_hub_id`, `stspnkn_id`, `kwgn_id`, `jnsasn_id`, `pndk_foto`) VALUES
(606, 704924610, '840571594', 'Umban Sari', 2, 1, 'User 612b30a037926', 'Perempuan', 'Pekanbaru', '1997-09-15', '029903861020', 2, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(607, 279797073, '221922379', 'Umban Sari', 2, 2, 'User 612b30a03db58', 'Laki-laki', 'Jakarta', '1955-11-12', '09160904845', 2, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(608, 815098086, '898826342', 'Umban Sari', 2, 1, 'User 612b30a112e16', 'Laki-laki', 'Bogor', '1992-12-21', '060934488526', 1, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(609, 894245322, '1586023275', 'Umban Sari', 2, 1, 'User 612b30a1224b0', 'Laki-laki', 'Jakarta', '1952-04-13', '086111140578', 4, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(610, 767921655, '1156663756', 'Umban Sari', 1, 2, 'User 612b30a1362a2', 'Laki-laki', 'Bogor', '1941-08-13', '023793532154', 2, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(611, 1082842811, '671817090', 'Umban Sari', 2, 1, 'User 612b30a13ba21', 'Laki-laki', 'Bogor', '2013-03-03', '089087506889', 3, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(612, 1480004875, '1482925294', 'Umban Sari', 1, 1, 'User 612b30a14936c', 'Perempuan', 'Bogor', '1959-05-30', '030347576001', 4, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(613, 1005148332, '332648732', 'Umban Sari', 2, 1, 'User 612b30a164549', 'Perempuan', 'Jakarta', '1987-12-22', '044840847432', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(614, 998789109, '1362520574', 'Umban Sari', 2, 2, 'User 612b30a16a568', 'Laki-laki', 'Pekanbaru', '2015-03-03', '069838709598', 4, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(615, 719478329, '900349737', 'Umban Sari', 2, 2, 'User 612b30a1769d0', 'Laki-laki', 'Bogor', '1996-02-08', '079990806275', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(616, 1002576915, '1242045821', 'Umban Sari', 1, 1, 'User 612b30a182c1a', 'Perempuan', 'Jakarta', '1950-12-22', '067335553378', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(617, 1543679639, '1038232247', 'Umban Sari', 2, 1, 'User 612b30a18fbd3', 'Laki-laki', 'Bogor', '1957-01-20', '042013320725', 4, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(618, 1425894890, '578245014', 'Umban Sari', 2, 1, 'User 612b30a1aa164', 'Laki-laki', 'Bogor', '1957-07-27', '09501114754', 4, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(619, 984656458, '1443242406', 'Umban Sari', 1, 1, 'User 612b30a1bc6fd', 'Perempuan', 'Bogor', '1941-07-06', '024360358173', 6, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(620, 691870300, '707171352', 'Umban Sari', 1, 2, 'User 612b30a1d21d0', 'Perempuan', 'Jakarta', '1992-09-30', '014685983657', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(621, 1609222440, '1003933027', 'Umban Sari', 1, 1, 'User 612b30a215985', 'Perempuan', 'Pekanbaru', '1948-06-01', '011273984189', 5, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(622, 1214352234, '214530539', 'Umban Sari', 1, 1, 'User 612b30a234c89', 'Laki-laki', 'Bogor', '1969-08-15', '062015647324', 4, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(623, 87391818, '507910681', 'Umban Sari', 1, 2, 'User 612b30a24048f', 'Perempuan', 'Bogor', '2009-04-30', '066756587763', 6, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(624, 1268248641, '553537315', 'Umban Sari', 2, 1, 'User 612b30a24a782', 'Perempuan', 'Pekanbaru', '1965-10-29', '025267370514', 4, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(625, 1607673323, '232743870', 'Umban Sari', 1, 2, 'User 612b30a260d94', 'Perempuan', 'Bogor', '2013-05-16', '042575885987', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(626, 1094963621, '111507528', 'Umban Sari', 1, 1, 'User 612b30a270747', 'Perempuan', 'Bogor', '1958-12-14', '056166102080', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(627, 551065994, '1270213719', 'Umban Sari', 2, 1, 'User 612b30a27b496', 'Perempuan', 'Pekanbaru', '1955-12-12', '061695885183', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(628, 1101256380, '311318179', 'Umban Sari', 1, 2, 'User 612b30a280bc9', 'Laki-laki', 'Bogor', '2017-01-22', '057097319324', 3, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(629, 758045257, '1388129201', 'Umban Sari', 1, 1, 'User 612b30a286c2d', 'Perempuan', 'Bogor', '1971-07-05', '084139910437', 2, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(630, 221456997, '1018875715', 'Umban Sari', 2, 1, 'User 612b30a299284', 'Perempuan', 'Bogor', '1996-02-19', '011446577313', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(631, 69466189, '66426873', 'Umban Sari', 1, 1, 'User 612b30a29f33e', 'Laki-laki', 'Bogor', '1943-06-16', '033445836425', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(632, 750697130, '351959198', 'Umban Sari', 2, 1, 'User 612b30a2a56fd', 'Laki-laki', 'Bogor', '1976-02-29', '061405386241', 2, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(633, 1313239590, '1563656676', 'Umban Sari', 2, 1, 'User 612b30a2b5a7a', 'Laki-laki', 'Bogor', '2010-09-17', '049866105409', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(634, 6832192, '645894825', 'Umban Sari', 2, 1, 'User 612b30a2bba2d', 'Laki-laki', 'Bogor', '1976-02-08', '031251582228', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(635, 874258958, '1254005360', 'Umban Sari', 1, 1, 'User 612b30a2d0123', 'Laki-laki', 'Pekanbaru', '1987-01-27', '033002171801', 5, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(636, 1147399881, '1000722882', 'Umban Sari', 1, 1, 'User 612b30a2d627a', 'Laki-laki', 'Bogor', '2017-04-29', '034701373464', 2, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(637, 1440274749, '1066846724', 'Umban Sari', 2, 2, 'User 612b30a2f0a00', 'Perempuan', 'Bogor', '1955-11-17', '034769628131', 6, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(638, 1041069042, '22661535', 'Umban Sari', 1, 2, 'User 612b30a30288f', 'Perempuan', 'Jakarta', '1948-12-18', '043584851101', 2, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(639, 621722959, '585967811', 'Umban Sari', 2, 1, 'User 612b30a323f5c', 'Perempuan', 'Jakarta', '1946-08-11', '041688631121', 4, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(640, 42652574, '835882115', 'Umban Sari', 1, 1, 'User 612b30a32f6b9', 'Laki-laki', 'Jakarta', '1991-04-25', '085480148081', 1, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(641, 533902016, '298725047', 'Umban Sari', 2, 2, 'User 612b30a345a81', 'Perempuan', 'Jakarta', '1952-07-14', '045316049867', 6, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(642, 1347776655, '1081566046', 'Umban Sari', 1, 2, 'User 612b30a34bd4e', 'Laki-laki', 'Bogor', '1959-09-24', '087523606064', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(643, 663018768, '1342706427', 'Umban Sari', 2, 1, 'User 612b30a351db8', 'Perempuan', 'Bogor', '1943-03-28', '031757904083', 3, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(644, 1438648411, '7765639', 'Umban Sari', 1, 1, 'User 612b30a362df0', 'Laki-laki', 'Jakarta', '1988-06-14', '016575368046', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(645, 800265024, '202696640', 'Umban Sari', 1, 2, 'User 612b30a3683ed', 'Laki-laki', 'Bogor', '2010-11-04', '085835068412', 4, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(646, 1598868578, '861276986', 'Umban Sari', 1, 1, 'User 612b30a36e705', 'Perempuan', 'Pekanbaru', '1978-11-16', '077003881738', 3, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(647, 1611275120, '429765728', 'Umban Sari', 2, 2, 'User 612b30a380ada', 'Laki-laki', 'Pekanbaru', '2010-12-20', '044729683036', 1, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(648, 1056746159, '771908035', 'Umban Sari', 2, 1, 'User 612b30a386d75', 'Perempuan', 'Pekanbaru', '1978-07-19', '022296817770', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(649, 130207696, '1537128157', 'Umban Sari', 1, 2, 'User 612b30a38cdf2', 'Laki-laki', 'Jakarta', '2016-01-23', '086996993950', 4, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(650, 941956821, '1435543907', 'Umban Sari', 2, 1, 'User 612b30a3930a2', 'Laki-laki', 'Bogor', '1999-12-14', '072964680253', 4, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(651, 741699152, '1484081893', 'Umban Sari', 2, 2, 'User 612b30a399170', 'Laki-laki', 'Jakarta', '2008-09-13', '051038063880', 3, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(652, 204259383, '720660730', 'Umban Sari', 2, 1, 'User 612b30a39f3e7', 'Perempuan', 'Bogor', '1992-01-07', '067908056676', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(653, 1009886440, '293747325', 'Umban Sari', 1, 1, 'User 612b30a3a545a', 'Perempuan', 'Jakarta', '1959-09-07', '035358167912', 6, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(654, 1289430687, '889588283', 'Umban Sari', 1, 2, 'User 612b30a3ab7b9', 'Perempuan', 'Bogor', '2015-10-19', '058453427843', 6, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(655, 253776021, '883057188', 'Umban Sari', 1, 2, 'User 612b30a3b17bd', 'Laki-laki', 'Bogor', '1953-01-14', '086338346014', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(656, 451903864, '1374989460', 'Umban Sari', 1, 1, 'User 612b30a3b7a89', 'Laki-laki', 'Pekanbaru', '1974-09-04', '054543236657', 5, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(657, 1369359231, '1097142645', 'Umban Sari', 1, 1, 'User 612b30a3bdb09', 'Perempuan', 'Pekanbaru', '1961-02-18', '025838452877', 1, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(658, 1291177970, '847281612', 'Umban Sari', 1, 1, 'User 612b30a3c3dea', 'Perempuan', 'Jakarta', '2006-01-11', '017248934822', 6, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(659, 649400303, '399044293', 'Umban Sari', 2, 2, 'User 612b30a3c9e48', 'Perempuan', 'Pekanbaru', '2000-06-21', '085236213600', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(660, 1027936412, '524691188', 'Umban Sari', 1, 1, 'User 612b30a3d012d', 'Laki-laki', 'Pekanbaru', '1948-12-04', '09743417575', 1, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(661, 459970261, '1608123908', 'Umban Sari', 2, 2, 'User 612b30a3d61ac', 'Laki-laki', 'Bogor', '2015-07-13', '074258463745', 2, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(662, 1071013363, '842640346', 'Umban Sari', 1, 2, 'User 612b30a3dc477', 'Perempuan', 'Bogor', '1986-04-28', '058942468730', 5, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(663, 771746956, '1478987017', 'Umban Sari', 2, 1, 'User 612b30a4b9b49', 'Perempuan', 'Bogor', '1964-11-23', '075570429397', 5, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(664, 1300898606, '1617783357', 'Umban Sari', 1, 2, 'User 612b30a4c7dd8', 'Laki-laki', 'Bogor', '1943-10-16', '022670276995', 3, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(665, 1161919959, '184671522', 'Umban Sari', 2, 2, 'User 612b30a4ce06a', 'Laki-laki', 'Pekanbaru', '1982-03-27', '086880337040', 5, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(666, 827503273, '877153441', 'Umban Sari', 1, 2, 'User 612b30a4d416f', 'Perempuan', 'Jakarta', '1964-09-30', '063880146703', 2, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(667, 524478686, '1364927666', 'Umban Sari', 1, 1, 'User 612b30a4e6713', 'Laki-laki', 'Bogor', '2001-01-17', '014325243991', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(668, 1191221842, '16012174', 'Umban Sari', 2, 1, 'User 612b30a4f0a35', 'Perempuan', 'Jakarta', '2016-03-11', '026980921882', 5, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(669, 1473014560, '754529202', 'Umban Sari', 2, 1, 'User 612b30a50287b', 'Perempuan', 'Jakarta', '1943-03-04', '069853384123', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(670, 1445612007, '289584902', 'Umban Sari', 1, 1, 'User 612b30a508b65', 'Laki-laki', 'Bogor', '1979-12-09', '048545976264', 1, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(671, 324085698, '909627513', 'Umban Sari', 2, 2, 'User 612b30a50ec09', 'Perempuan', 'Pekanbaru', '1969-07-11', '037826578597', 1, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(672, 1055501243, '1484726509', 'Umban Sari', 1, 2, 'User 612b30a5211fe', 'Laki-laki', 'Bogor', '2005-05-24', '044526722615', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(673, 918271058, '363788727', 'Umban Sari', 2, 2, 'User 612b30a527244', 'Perempuan', 'Bogor', '2004-11-01', '050782383140', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(674, 83909696, '1262305103', 'Umban Sari', 2, 2, 'User 612b30a52d4f1', 'Perempuan', 'Jakarta', '1964-10-23', '038335250742', 3, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(675, 864429757, '382496215', 'Umban Sari', 2, 2, 'User 612b30a5335a1', 'Perempuan', 'Jakarta', '2009-04-04', '025552092812', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(676, 171651851, '1312148652', 'Umban Sari', 2, 1, 'User 612b30a5445a3', 'Laki-laki', 'Pekanbaru', '1985-03-07', '061462079552', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(677, 397319073, '239122426', 'Umban Sari', 1, 1, 'User 612b30a549bff', 'Laki-laki', 'Bogor', '2010-08-25', '011445338899', 3, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(678, 1053324916, '1502083411', 'Umban Sari', 1, 2, 'User 612b30a55c187', 'Laki-laki', 'Jakarta', '1942-04-12', '086309740377', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(679, 1595763966, '104897569', 'Umban Sari', 2, 2, 'User 612b30a5622b2', 'Laki-laki', 'Bogor', '2000-06-02', '065278176375', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(680, 689120717, '1375046862', 'Umban Sari', 1, 1, 'User 612b30a5684e3', 'Perempuan', 'Pekanbaru', '1970-04-15', '028014395270', 3, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(681, 689082719, '896168626', 'Umban Sari', 2, 2, 'User 612b30a56e6a4', 'Laki-laki', 'Pekanbaru', '1989-02-04', '061380110147', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(682, 612336885, '1595956796', 'Umban Sari', 2, 1, 'User 612b30a580a5b', 'Laki-laki', 'Bogor', '1966-07-07', '025071910411', 4, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(683, 607304875, '1160584412', 'Umban Sari', 1, 2, 'User 612b30a5b06b5', 'Laki-laki', 'Pekanbaru', '1966-08-27', '073495588713', 4, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(684, 808055351, '1128145613', 'Umban Sari', 2, 2, 'User 612b30a5c5bff', 'Perempuan', 'Jakarta', '2014-12-29', '040653740891', 2, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(685, 848991889, '559767881', 'Umban Sari', 2, 2, 'User 612b30a5cbef0', 'Laki-laki', 'Jakarta', '1964-08-29', '089757162867', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(686, 747505678, '61064364', 'Umban Sari', 1, 1, 'User 612b30a5d1f3e', 'Laki-laki', 'Pekanbaru', '2020-10-11', '016460072693', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(687, 818212948, '1419437322', 'Umban Sari', 2, 1, 'User 612b30a5d8248', 'Laki-laki', 'Jakarta', '1986-01-24', '018704804039', 4, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(688, 1430488645, '1053349149', 'Umban Sari', 2, 2, 'User 612b30a5de29e', 'Perempuan', 'Jakarta', '2017-03-19', '039682822927', 2, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(689, 1471828263, '468471961', 'Umban Sari', 1, 2, 'User 612b30a5e4578', 'Perempuan', 'Jakarta', '1988-07-25', '075970139510', 2, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(690, 877984456, '1020669329', 'Umban Sari', 2, 2, 'User 612b30a6047a9', 'Perempuan', 'Pekanbaru', '1959-05-24', '031492215933', 5, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(691, 316840784, '482998448', 'Umban Sari', 2, 2, 'User 612b30a60aab1', 'Perempuan', 'Bogor', '2005-02-04', '087289724701', 2, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(692, 172375165, '559687633', 'Umban Sari', 1, 2, 'User 612b30a610ae6', 'Laki-laki', 'Bogor', '1993-03-24', '066173309689', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(693, 1106901742, '1290305009', 'Umban Sari', 2, 2, 'User 612b30a616daa', 'Perempuan', 'Pekanbaru', '1974-06-09', '072560225252', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(694, 352652532, '51371093', 'Umban Sari', 2, 2, 'User 612b30a61ce61', 'Perempuan', 'Jakarta', '1945-03-11', '074036175719', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(695, 1332578440, '670668051', 'Umban Sari', 2, 2, 'User 612b30a6230f4', 'Perempuan', 'Jakarta', '2002-05-05', '022741593078', 5, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(696, 907140039, '244742954', 'Umban Sari', 2, 1, 'User 612b30a6354fc', 'Perempuan', 'Pekanbaru', '1988-07-07', '080929240388', 4, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(697, 1117891040, '620576250', 'Umban Sari', 2, 2, 'User 612b30a63b7d2', 'Perempuan', 'Bogor', '1987-08-20', '074186129962', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(698, 1590524000, '163010844', 'Umban Sari', 1, 1, 'User 612b30a64181a', 'Laki-laki', 'Jakarta', '1979-11-04', '052916572538', 1, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(699, 573073880, '1077270376', 'Umban Sari', 2, 1, 'User 612b30a647b42', 'Laki-laki', 'Pekanbaru', '1971-12-24', '057725333803', 5, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(700, 496893650, '732077469', 'Umban Sari', 1, 2, 'User 612b30a64dba7', 'Laki-laki', 'Jakarta', '2009-01-21', '065439952383', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(701, 882291784, '99283768', 'Umban Sari', 2, 1, 'User 612b30a653e75', 'Perempuan', 'Jakarta', '1953-05-20', '09221954433', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(702, 52497872, '966118033', 'Umban Sari', 1, 2, 'User 612b30a666246', 'Perempuan', 'Bogor', '1962-04-16', '075742866072', 6, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(703, 650056449, '233734785', 'Umban Sari', 2, 1, 'User 612b30a66c4e1', 'Perempuan', 'Pekanbaru', '1973-09-29', '079614901059', 2, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(704, 1403986304, '666306767', 'Umban Sari', 2, 2, 'User 612b30a6725da', 'Perempuan', 'Jakarta', '1986-08-29', '09343712231', 4, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(705, 895846568, '840374438', 'Umban Sari', 2, 2, 'User 612b30a67882d', 'Laki-laki', 'Jakarta', '1946-07-30', '078622224804', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(706, 1426982553, '868686902', 'Umban Sari', 2, 1, 'User 612b30a67e8b4', 'Laki-laki', 'Pekanbaru', '1980-11-21', '080442103022', 6, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(707, 460240451, '1032407206', 'Umban Sari', 2, 1, 'User 612b30a684b9f', 'Perempuan', 'Jakarta', '2012-09-26', '077866884634', 5, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(708, 806981327, '415821682', 'Umban Sari', 2, 2, 'User 612b30a6aaf83', 'Perempuan', 'Pekanbaru', '2013-01-21', '078515551615', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(709, 509765922, '1147565313', 'Umban Sari', 2, 2, 'User 612b30a6d81fd', 'Perempuan', 'Jakarta', '1997-03-23', '071274606212', 4, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(710, 428379707, '810432427', 'Umban Sari', 1, 1, 'User 612b30a6de29d', 'Perempuan', 'Bogor', '1947-11-12', '028558884083', 6, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(711, 1620329453, '1526666055', 'Umban Sari', 2, 1, 'User 612b30a6e456b', 'Perempuan', 'Pekanbaru', '2020-10-05', '029247622599', 2, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(712, 1628449693, '583026776', 'Umban Sari', 1, 1, 'User 612b30a70a92b', 'Perempuan', 'Jakarta', '1986-01-16', '066652304743', 6, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(713, 1513298365, '1141344374', 'Umban Sari', 2, 2, 'User 612b30a710c3a', 'Laki-laki', 'Bogor', '2001-06-18', '083491992995', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(714, 618579043, '1296243970', 'Umban Sari', 2, 2, 'User 612b30a716cab', 'Perempuan', 'Pekanbaru', '1947-03-20', '037462153920', 3, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(715, 1125189641, '382232709', 'Umban Sari', 2, 2, 'User 612b30a71cf87', 'Perempuan', 'Bogor', '2006-01-17', '024536345861', 2, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(716, 505253596, '71235454', 'Umban Sari', 1, 2, 'User 612b30a722fe1', 'Laki-laki', 'Jakarta', '1985-08-11', '074438077760', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(717, 1582189054, '1054886991', 'Umban Sari', 1, 1, 'User 612b30a7292ba', 'Perempuan', 'Jakarta', '1989-01-07', '047482670963', 1, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(718, 995984483, '458034344', 'Umban Sari', 2, 1, 'User 612b30a73b6dc', 'Laki-laki', 'Bogor', '2007-09-03', '033943883588', 4, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(719, 518254495, '211931531', 'Umban Sari', 2, 2, 'User 612b30a74197e', 'Laki-laki', 'Pekanbaru', '1979-12-29', '070623914058', 1, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(720, 1163480108, '772137764', 'Umban Sari', 2, 1, 'User 612b30a7479f6', 'Laki-laki', 'Jakarta', '2012-05-31', '073737974693', 1, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(721, 1601677398, '89003662', 'Umban Sari', 2, 2, 'User 612b30a74dc7e', 'Laki-laki', 'Jakarta', '1976-02-13', '069274395298', 2, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(722, 98167146, '1489607694', 'Umban Sari', 1, 1, 'User 612b30a753d9f', 'Laki-laki', 'Jakarta', '1957-11-28', '088130518703', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(723, 1071784972, '1124568085', 'Umban Sari', 2, 1, 'User 612b30a75a00c', 'Laki-laki', 'Jakarta', '1984-10-17', '058832557034', 4, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(724, 326646914, '885179510', 'Umban Sari', 2, 2, 'User 612b30a76c471', 'Perempuan', 'Pekanbaru', '1989-12-23', '017849194411', 6, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(725, 1479087389, '1458105239', 'Umban Sari', 2, 1, 'User 612b30a7726c0', 'Laki-laki', 'Pekanbaru', '1995-08-11', '028934327408', 4, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(726, 1029446092, '811788328', 'Umban Sari', 2, 1, 'User 612b30a77b426', 'Laki-laki', 'Jakarta', '1951-01-09', '062780099806', 6, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(727, 303386579, '1234569718', 'Umban Sari', 1, 2, 'User 612b30a780a80', 'Laki-laki', 'Bogor', '1958-06-13', '078377681057', 1, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(728, 514617085, '290554120', 'Umban Sari', 1, 2, 'User 612b30a786b35', 'Perempuan', 'Jakarta', '1994-01-29', '028009377742', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(729, 565217494, '780218828', 'Umban Sari', 1, 1, 'User 612b30a7991ff', 'Perempuan', 'Bogor', '1992-10-26', '042274388133', 5, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(730, 171700710, '1469465272', 'Umban Sari', 1, 2, 'User 612b30a818d86', 'Perempuan', 'Pekanbaru', '1994-12-05', '014723358184', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(731, 1544807146, '293096026', 'Umban Sari', 1, 1, 'User 612b30a81f018', 'Perempuan', 'Bogor', '2004-08-25', '050756954741', 6, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(732, 1484100775, '319634010', 'Umban Sari', 2, 2, 'User 612b30a825095', 'Laki-laki', 'Jakarta', '2017-09-20', '042716222548', 5, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(733, 802509299, '1564538142', 'Umban Sari', 1, 2, 'User 612b30a82b36e', 'Perempuan', 'Bogor', '1979-05-30', '010949224679', 5, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(734, 254870070, '1519371249', 'Umban Sari', 2, 1, 'User 612b30a83b683', 'Laki-laki', 'Bogor', '1986-04-07', '027589788358', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(735, 678365429, '363337353', 'Umban Sari', 2, 2, 'User 612b30a84195e', 'Perempuan', 'Pekanbaru', '2006-03-31', '031873310777', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(736, 1043530660, '559052327', 'Umban Sari', 1, 2, 'User 612b30a853d66', 'Laki-laki', 'Pekanbaru', '2017-11-28', '020304657666', 2, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(737, 1098892032, '1158743621', 'Umban Sari', 1, 1, 'User 612b30a85a047', 'Laki-laki', 'Jakarta', '1982-04-01', '077883892183', 5, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(738, 1590858073, '721564838', 'Umban Sari', 2, 1, 'User 612b30a8600b5', 'Laki-laki', 'Bogor', '1959-10-20', '070834743317', 4, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(739, 1199865093, '906768547', 'Umban Sari', 2, 2, 'User 612b30a86634d', 'Perempuan', 'Bogor', '2018-10-21', '070496634725', 4, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(740, 710965081, '1264216282', 'Umban Sari', 2, 2, 'User 612b30a86c3ea', 'Perempuan', 'Bogor', '1954-08-02', '030430069315', 5, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(741, 43625316, '1510119694', 'Umban Sari', 2, 2, 'User 612b30a87d557', 'Perempuan', 'Jakarta', '2003-04-08', '077543447878', 3, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(742, 83274926, '886028249', 'Umban Sari', 2, 2, 'User 612b30a890de0', 'Laki-laki', 'Pekanbaru', '1958-03-28', '063419520158', 4, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(743, 1484247518, '894692626', 'Umban Sari', 2, 2, 'User 612b30a897082', 'Perempuan', 'Bogor', '1960-02-08', '018290104892', 5, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(744, 670800036, '69564510', 'Umban Sari', 1, 2, 'User 612b30a89d0fa', 'Perempuan', 'Bogor', '2012-04-02', '067816697869', 2, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(745, 294924658, '1212990909', 'Umban Sari', 1, 2, 'User 612b30a8a33ca', 'Laki-laki', 'Pekanbaru', '1990-11-28', '052465097654', 1, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(746, 1478436027, '1614781077', 'Umban Sari', 2, 1, 'User 612b30a8a9498', 'Laki-laki', 'Pekanbaru', '2004-07-27', '031356521363', 6, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(747, 1390576885, '765929136', 'Umban Sari', 1, 2, 'User 612b30a8af70a', 'Laki-laki', 'Pekanbaru', '2014-03-09', '037939835808', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(748, 1480045038, '1085823988', 'Umban Sari', 2, 2, 'User 612b30a8c3ba0', 'Laki-laki', 'Jakarta', '1997-10-02', '017081218422', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(749, 1316229959, '839801517', 'Umban Sari', 2, 2, 'User 612b30a8c9e8b', 'Perempuan', 'Pekanbaru', '2003-04-23', '010646439340', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(750, 853598058, '148544940', 'Umban Sari', 2, 1, 'User 612b30a8cfedc', 'Laki-laki', 'Jakarta', '1971-02-25', '017476231056', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(751, 145161518, '588889768', 'Umban Sari', 2, 1, 'User 612b30a8d619d', 'Perempuan', 'Pekanbaru', '2000-08-09', '049822999773', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(752, 1053856560, '449004872', 'Umban Sari', 1, 1, 'User 612b30a8dc236', 'Laki-laki', 'Bogor', '1952-12-20', '013111819586', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(753, 1457826253, '1609089812', 'Umban Sari', 2, 1, 'User 612b30a96c2fa', 'Perempuan', 'Jakarta', '2000-03-30', '021168433810', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(754, 464907644, '1055625656', 'Umban Sari', 2, 1, 'User 612b30a97b3fa', 'Perempuan', 'Jakarta', '2002-10-17', '075871158845', 4, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(755, 548804522, '287823854', 'Umban Sari', 2, 2, 'User 612b30a980833', 'Perempuan', 'Jakarta', '2014-08-13', '080125000712', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(756, 1301546789, '1008772782', 'Umban Sari', 2, 1, 'User 612b30a986b17', 'Perempuan', 'Jakarta', '1997-02-27', '080377464295', 4, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(757, 915485383, '1084329032', 'Umban Sari', 1, 1, 'User 612b30a98cb59', 'Perempuan', 'Pekanbaru', '1950-01-24', '080098549458', 4, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(758, 79410795, '626051795', 'Umban Sari', 2, 2, 'User 612b30a992e9f', 'Laki-laki', 'Jakarta', '2005-06-04', '08559282662', 2, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(759, 990073311, '13836278', 'Umban Sari', 1, 1, 'User 612b30a9a5259', 'Perempuan', 'Jakarta', '1970-03-13', '023197143236', 3, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(760, 529512559, '1107777516', 'Umban Sari', 2, 1, 'User 612b30a9b377b', 'Perempuan', 'Bogor', '1973-09-30', '011841715216', 2, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(761, 836322731, '405246862', 'Umban Sari', 1, 2, 'User 612b30a9b97b9', 'Laki-laki', 'Bogor', '1999-11-23', '056392172463', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(762, 878800214, '460796711', 'Umban Sari', 1, 1, 'User 612b30a9bfa7e', 'Perempuan', 'Pekanbaru', '1944-04-27', '079064451853', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(763, 412925413, '815718708', 'Umban Sari', 1, 1, 'User 612b30a9c5ad0', 'Laki-laki', 'Jakarta', '1970-01-19', '021030246763', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(764, 347233185, '1401184479', 'Umban Sari', 2, 1, 'User 612b30a9cbe01', 'Laki-laki', 'Jakarta', '1994-08-27', '051276541625', 4, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(765, 452874916, '797836864', 'Umban Sari', 1, 2, 'User 612b30a9e023a', 'Perempuan', 'Bogor', '1985-12-17', '078451119407', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(766, 136066900, '665976804', 'Umban Sari', 2, 1, 'User 612b30a9e6543', 'Laki-laki', 'Bogor', '1960-03-02', '025346046456', 6, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(767, 488837202, '1076085715', 'Umban Sari', 1, 2, 'User 612b30aa0070b', 'Perempuan', 'Pekanbaru', '1972-12-29', '056832525868', 3, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(768, 980103450, '191157691', 'Umban Sari', 2, 2, 'User 612b30aa087ea', 'Laki-laki', 'Pekanbaru', '1946-09-04', '017149431889', 6, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(769, 1015679823, '599361679', 'Umban Sari', 2, 1, 'User 612b30aa0ea86', 'Laki-laki', 'Bogor', '2012-10-14', '058790955229', 1, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(770, 52220978, '1525529092', 'Umban Sari', 2, 1, 'User 612b30aa22eba', 'Perempuan', 'Jakarta', '1970-06-03', '028807497552', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(771, 1095165495, '646366484', 'Umban Sari', 2, 2, 'User 612b30aa29230', 'Laki-laki', 'Pekanbaru', '1951-07-30', '08676661831', 1, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(772, 794107288, '424038412', 'Umban Sari', 1, 1, 'User 612b30aa2f221', 'Laki-laki', 'Bogor', '1994-07-15', '011510396056', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(773, 1054467377, '1144141851', 'Umban Sari', 1, 1, 'User 612b30aa35562', 'Perempuan', 'Pekanbaru', '1997-11-17', '033221400815', 1, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(774, 1067548007, '1171868895', 'Umban Sari', 2, 1, 'User 612b30aacfdb1', 'Perempuan', 'Bogor', '1990-07-22', '063992281319', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(775, 471957293, '26235999', 'Umban Sari', 2, 1, 'User 612b30aade267', 'Laki-laki', 'Jakarta', '1972-07-22', '039236638550', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(776, 198631842, '1521439623', 'Umban Sari', 2, 1, 'User 612b30aae4314', 'Perempuan', 'Bogor', '2021-02-16', '079734460369', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(777, 720380802, '1406040643', 'Umban Sari', 2, 2, 'User 612b30aaf2825', 'Laki-laki', 'Pekanbaru', '1997-08-24', '047309288465', 6, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(778, 1498200108, '1312504565', 'Umban Sari', 2, 1, 'User 612b30ab16c8e', 'Perempuan', 'Pekanbaru', '1999-04-01', '087827091920', 1, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(779, 280702211, '597491769', 'Umban Sari', 2, 2, 'User 612b30ab1cccb', 'Perempuan', 'Pekanbaru', '1944-03-13', '068739075710', 5, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(780, 257524599, '459008876', 'Umban Sari', 1, 1, 'User 612b30ab3204d', 'Laki-laki', 'Jakarta', '2007-03-15', '077968536556', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(781, 183343236, '1551000609', 'Umban Sari', 2, 1, 'User 612b30ab37402', 'Laki-laki', 'Bogor', '1958-01-05', '022701797781', 4, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(782, 492568502, '393384220', 'Umban Sari', 2, 1, 'User 612b30ab3d6d8', 'Laki-laki', 'Bogor', '1995-03-08', '077026815490', 4, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(783, 1560347014, '714629417', 'Umban Sari', 1, 1, 'User 612b30ab4b9e1', 'Perempuan', 'Jakarta', '2014-08-10', '064784728511', 3, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(784, 689744834, '1316627195', 'Umban Sari', 1, 2, 'User 612b30ab5dfc8', 'Laki-laki', 'Bogor', '1993-10-09', '020767069260', 1, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(785, 448114869, '1044379037', 'Umban Sari', 1, 1, 'User 612b30ab6f067', 'Laki-laki', 'Pekanbaru', '1942-11-29', '069850784992', 6, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(786, 1074030550, '1396626201', 'Umban Sari', 2, 1, 'User 612b30ab80929', 'Laki-laki', 'Bogor', '1990-08-01', '041071305923', 6, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(787, 1238956864, '1387006875', 'Umban Sari', 1, 1, 'User 612b30ab91a15', 'Perempuan', 'Bogor', '1947-06-03', '051252274519', 3, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(788, 710226199, '39544291', 'Umban Sari', 2, 1, 'User 612b30ab96f19', 'Laki-laki', 'Pekanbaru', '1942-12-15', '046126522414', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(789, 963899152, '1204487476', 'Umban Sari', 1, 1, 'User 612b30ab9cfa1', 'Laki-laki', 'Bogor', '1966-10-26', '08217527180', 3, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(790, 1030779319, '1348565794', 'Umban Sari', 1, 2, 'User 612b30abaf604', 'Laki-laki', 'Bogor', '1953-08-15', '054996656486', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(791, 144904324, '930882341', 'Umban Sari', 1, 1, 'User 612b30abbfc76', 'Laki-laki', 'Pekanbaru', '2010-12-04', '074010134095', 5, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(792, 1311143433, '539474686', 'Umban Sari', 2, 1, 'User 612b30abe01df', 'Perempuan', 'Bogor', '1947-05-30', '045224478334', 2, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(793, 39453668, '779592729', 'Umban Sari', 1, 2, 'User 612b30abee6f3', 'Laki-laki', 'Bogor', '2018-06-27', '044605843797', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(794, 1137968825, '740248442', 'Umban Sari', 2, 1, 'User 612b30ac00684', 'Laki-laki', 'Pekanbaru', '1951-08-19', '078867423662', 6, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(795, 671094061, '499710764', 'Umban Sari', 1, 2, 'User 612b30ac067da', 'Laki-laki', 'Bogor', '1969-08-26', '068545215866', 4, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(796, 71939270, '1213810187', 'Umban Sari', 1, 1, 'User 612b30ac1ce57', 'Laki-laki', 'Pekanbaru', '1987-01-28', '055493042704', 6, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(797, 1418392837, '531656122', 'Umban Sari', 2, 1, 'User 612b30ac29186', 'Perempuan', 'Bogor', '2005-06-03', '038266725560', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(798, 1089976487, '1166360410', 'Umban Sari', 2, 2, 'User 612b30ac2f2a2', 'Laki-laki', 'Pekanbaru', '2004-08-16', '019061068609', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(799, 306199793, '1229933157', 'Umban Sari', 2, 2, 'User 612b30ac35496', 'Perempuan', 'Jakarta', '1990-07-29', '025756619556', 6, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(800, 453118220, '1408803004', 'Umban Sari', 2, 1, 'User 612b30ac3b5dc', 'Perempuan', 'Jakarta', '2020-08-29', '078908049456', 4, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(801, 1188282521, '248673479', 'Umban Sari', 2, 1, 'User 612b30ac4db2a', 'Laki-laki', 'Pekanbaru', '1992-11-05', '021754340593', 1, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(802, 855798870, '11510283', 'Umban Sari', 2, 1, 'User 612b30ac55c6b', 'Laki-laki', 'Pekanbaru', '2015-09-12', '064078645489', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(803, 1140838410, '818926442', 'Umban Sari', 1, 1, 'User 612b30ac5bf9c', 'Perempuan', 'Jakarta', '2014-01-18', '071015691864', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(804, 344797027, '1175442687', 'Umban Sari', 2, 1, 'User 612b30ac661d4', 'Laki-laki', 'Jakarta', '1945-07-18', '077561720132', 1, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(805, 742119726, '372062844', 'Umban Sari', 1, 1, 'User 612b30ac6c304', 'Laki-laki', 'Jakarta', '1974-07-10', '069487420830', 5, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(806, 114392535, '569791941', 'Umban Sari', 2, 1, 'User 612b30ac7e875', 'Perempuan', 'Jakarta', '1959-08-20', '072690478507', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(807, 1191765546, '610781835', 'Umban Sari', 1, 2, 'User 612b30ac8ab3c', 'Perempuan', 'Bogor', '2019-02-25', '068766835592', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(808, 645866269, '454060470', 'Umban Sari', 1, 2, 'User 612b30ac92c4f', 'Perempuan', 'Bogor', '1967-10-18', '021669595463', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(809, 1119080661, '312367529', 'Umban Sari', 1, 2, 'User 612b30ac98f64', 'Perempuan', 'Jakarta', '1957-04-06', '048646882169', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(810, 643709589, '144058234', 'Umban Sari', 2, 2, 'User 612b30aca0ff8', 'Perempuan', 'Bogor', '1949-02-12', '071824878608', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(811, 496663850, '1223793064', 'Umban Sari', 2, 1, 'User 612b30acbb86e', 'Laki-laki', 'Pekanbaru', '1990-05-04', '056232488472', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(812, 426146276, '1390818790', 'Umban Sari', 2, 1, 'User 612b30accbc9f', 'Perempuan', 'Pekanbaru', '1967-03-04', '034195883837', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(813, 649397931, '799228930', 'Umban Sari', 2, 2, 'User 612b30acd3ecc', 'Laki-laki', 'Pekanbaru', '1973-11-29', '074238924811', 6, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(814, 1130254543, '1338407669', 'Umban Sari', 1, 1, 'User 612b30ace8339', 'Perempuan', 'Pekanbaru', '2012-09-06', '087041814315', 2, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(815, 680917519, '768694269', 'Umban Sari', 2, 1, 'User 612b30ad08685', 'Perempuan', 'Bogor', '2007-07-04', '057159808062', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(816, 131308431, '579231511', 'Umban Sari', 2, 2, 'User 612b30ad12944', 'Laki-laki', 'Jakarta', '1976-11-14', '032642815804', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(817, 524920046, '1289999495', 'Umban Sari', 1, 2, 'User 612b30ad24f64', 'Perempuan', 'Jakarta', '1976-08-30', '087497549931', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(818, 1418681900, '1384200703', 'Umban Sari', 1, 2, 'User 612b30ad3331f', 'Perempuan', 'Bogor', '2020-11-22', '030888152314', 1, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(819, 1108333470, '1611773625', 'Umban Sari', 1, 2, 'User 612b30ad3b479', 'Laki-laki', 'Pekanbaru', '2005-04-10', '079362578846', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(820, 1506240308, '1305604804', 'Umban Sari', 1, 2, 'User 612b30ad4993a', 'Laki-laki', 'Bogor', '1999-02-16', '054400262407', 2, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(821, 1191147271, '456775655', 'Umban Sari', 2, 2, 'User 612b30ad51a4e', 'Perempuan', 'Pekanbaru', '1990-04-22', '053605921279', 1, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(822, 846779963, '1320254183', 'Umban Sari', 1, 1, 'User 612b30ad64068', 'Perempuan', 'Bogor', '2015-04-28', '018110965434', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(823, 3322278, '1331119431', 'Umban Sari', 1, 2, 'User 612b30ad6c17d', 'Perempuan', 'Bogor', '1973-02-10', '041890758115', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(824, 1576763970, '1553497287', 'Umban Sari', 1, 2, 'User 612b30ad7a677', 'Perempuan', 'Bogor', '2001-08-15', '013246817970', 2, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(825, 158632556, '143608499', 'Umban Sari', 1, 2, 'User 612b30ad82784', 'Perempuan', 'Jakarta', '2019-10-01', '057173997840', 4, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(826, 40314883, '143506327', 'Umban Sari', 1, 2, 'User 612b30ad88a8f', 'Laki-laki', 'Pekanbaru', '1992-09-24', '036917046751', 1, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(827, 946668885, '353627363', 'Umban Sari', 2, 1, 'User 612b30adb35e0', 'Perempuan', 'Pekanbaru', '1948-09-24', '037130020337', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(828, 612873007, '597998054', 'Umban Sari', 1, 2, 'User 612b30ae66052', 'Laki-laki', 'Jakarta', '1957-07-04', '010093550098', 5, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(829, 1545448314, '277097466', 'Umban Sari', 1, 1, 'User 612b30ae80842', 'Perempuan', 'Jakarta', '1963-12-27', '086826958153', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(830, 1098502877, '1154305927', 'Umban Sari', 2, 1, 'User 612b30ae8eb3f', 'Laki-laki', 'Bogor', '2013-10-27', '079800898404', 3, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(831, 491640020, '658744853', 'Umban Sari', 1, 1, 'User 612b30ae94dae', 'Perempuan', 'Bogor', '2018-09-16', '069948119341', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(832, 231557995, '128085214', 'Umban Sari', 2, 2, 'User 612b30aea50b8', 'Perempuan', 'Pekanbaru', '1949-04-18', '086748202529', 1, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(833, 996041004, '171132883', 'Umban Sari', 1, 1, 'User 612b30aeab3e2', 'Perempuan', 'Pekanbaru', '1993-10-24', '022437692778', 6, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(834, 852257140, '996943504', 'Umban Sari', 1, 2, 'User 612b30aeb34e3', 'Laki-laki', 'Pekanbaru', '2019-08-18', '064320950008', 5, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(835, 270862393, '105997703', 'Umban Sari', 2, 2, 'User 612b30aec5aee', 'Perempuan', 'Jakarta', '1949-07-17', '075683917999', 5, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(836, 904380949, '303541529', 'Umban Sari', 2, 1, 'User 612b30aecdbd0', 'Laki-laki', 'Pekanbaru', '1953-10-21', '073503463075', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(837, 1202190710, '1182187083', 'Umban Sari', 2, 2, 'User 612b30aed3f10', 'Laki-laki', 'Pekanbaru', '1970-01-28', '054198443839', 3, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(838, 1622603401, '1618572748', 'Umban Sari', 1, 1, 'User 612b30aedc060', 'Laki-laki', 'Bogor', '1976-11-28', '019014856382', 6, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(839, 538312085, '1397926350', 'Umban Sari', 2, 1, 'User 612b30aee2286', 'Perempuan', 'Pekanbaru', '1994-10-28', '074953197803', 5, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(840, 1414205772, '443369361', 'Umban Sari', 1, 1, 'User 612b30aeea38f', 'Perempuan', 'Bogor', '1998-04-01', '071266621224', 3, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(841, 904926995, '1213362962', 'Umban Sari', 2, 2, 'User 612b30af0880e', 'Laki-laki', 'Pekanbaru', '2015-07-26', '058183589227', 3, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(842, 1301786614, '146459476', 'Umban Sari', 2, 1, 'User 612b30af108d8', 'Laki-laki', 'Pekanbaru', '2017-07-18', '028702002365', 6, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(843, 1087054806, '840660039', 'Umban Sari', 2, 1, 'User 612b30af4ba12', 'Laki-laki', 'Jakarta', '1965-10-30', '014383659683', 5, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(844, 535906185, '1067010296', 'Umban Sari', 1, 2, 'User 612b30af81a21', 'Perempuan', 'Bogor', '1982-06-20', '076223788184', 6, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(845, 854493336, '1501151511', 'Umban Sari', 2, 1, 'User 612b30af9ba16', 'Laki-laki', 'Pekanbaru', '2016-08-29', '078340753999', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(846, 1299670216, '1593602827', 'Umban Sari', 1, 1, 'User 612b30afa7161', 'Laki-laki', 'Pekanbaru', '1968-08-06', '047229365084', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(847, 680048914, '1273915737', 'Umban Sari', 1, 1, 'User 612b30afbb7e8', 'Laki-laki', 'Pekanbaru', '2014-08-03', '010196553644', 4, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(848, 341046447, '1182681571', 'Umban Sari', 1, 1, 'User 612b30afc3907', 'Perempuan', 'Pekanbaru', '1942-11-06', '087636197756', 5, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(849, 191999771, '347973158', 'Umban Sari', 2, 1, 'User 612b30afc9bc7', 'Laki-laki', 'Jakarta', '1984-07-05', '056138805441', 2, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(850, 162030782, '1422383006', 'Umban Sari', 2, 2, 'User 612b30afd1cdf', 'Laki-laki', 'Jakarta', '2013-10-04', '011350525416', 2, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(851, 1402551779, '1308459539', 'Umban Sari', 2, 2, 'User 612b30afd7f96', 'Laki-laki', 'Pekanbaru', '1962-06-25', '050792034292', 1, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(852, 95493053, '1182426756', 'Umban Sari', 2, 1, 'User 612b30afe00c5', 'Laki-laki', 'Pekanbaru', '2017-08-24', '089508546818', 2, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(853, 1461889669, '1367708306', 'Umban Sari', 2, 1, 'User 612b30b00878b', 'Laki-laki', 'Bogor', '2005-05-26', '013897697662', 6, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(854, 521255363, '1330474471', 'Umban Sari', 1, 1, 'User 612b30b01085c', 'Laki-laki', 'Pekanbaru', '1941-12-23', '072428345169', 2, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(855, 1530930810, '512480537', 'Umban Sari', 2, 1, 'User 612b30b016b17', 'Perempuan', 'Jakarta', '1950-08-28', '085079571853', 2, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(856, 443119655, '1075095148', 'Umban Sari', 1, 1, 'User 612b30b01ec82', 'Perempuan', 'Pekanbaru', '2014-12-27', '049610781894', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(857, 1431023436, '853218640', 'Umban Sari', 2, 1, 'User 612b30b024ef7', 'Laki-laki', 'Bogor', '2017-01-30', '041425610133', 4, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(858, 189496003, '1292901712', 'Umban Sari', 2, 2, 'User 612b30b02d01d', 'Laki-laki', 'Pekanbaru', '2015-01-07', '025729641308', 2, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(859, 390748230, '103106865', 'Umban Sari', 1, 1, 'User 612b30b03f627', 'Laki-laki', 'Bogor', '1993-04-02', '044562020454', 3, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(860, 1334943010, '304445745', 'Umban Sari', 2, 2, 'User 612b30b047762', 'Laki-laki', 'Pekanbaru', '1958-06-05', '049087067536', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(861, 21702493, '609388390', 'Umban Sari', 1, 2, 'User 612b30b04da13', 'Laki-laki', 'Jakarta', '1941-10-06', '024116330989', 1, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(862, 944804514, '307885718', 'Umban Sari', 1, 1, 'User 612b30b055b21', 'Laki-laki', 'Jakarta', '2007-12-24', '073548916992', 1, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(863, 1466475135, '1330823392', 'Umban Sari', 1, 2, 'User 612b30b05bde6', 'Laki-laki', 'Bogor', '2000-06-08', '067949983232', 4, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(864, 354978022, '1313973975', 'Umban Sari', 2, 2, 'User 612b30b063f0f', 'Perempuan', 'Bogor', '2018-04-04', '021890167156', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(865, 183531680, '1437835715', 'Umban Sari', 2, 2, 'User 612b30b087442', 'Laki-laki', 'Jakarta', '1967-10-18', '052532673001', 3, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(866, 671916553, '1525198855', 'Umban Sari', 1, 2, 'User 612b30b092d00', 'Laki-laki', 'Bogor', '1945-11-02', '045233552140', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(867, 1557246000, '916407949', 'Umban Sari', 2, 2, 'User 612b30b0a7137', 'Perempuan', 'Jakarta', '1962-07-27', '059817957219', 5, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(868, 825497062, '1231110764', 'Umban Sari', 1, 1, 'User 612b30b0bb6c5', 'Perempuan', 'Jakarta', '1949-01-25', '082614408588', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(869, 93086318, '580498065', 'Umban Sari', 2, 1, 'User 612b30b0d1da4', 'Perempuan', 'Pekanbaru', '1988-02-13', '017000654915', 3, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(870, 1511483590, '611001380', 'Umban Sari', 1, 1, 'User 612b30b0deeee', 'Perempuan', 'Bogor', '2018-08-14', '09026816796', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(871, 1132372549, '566927208', 'Umban Sari', 1, 1, 'User 612b30b0eb1a9', 'Laki-laki', 'Bogor', '1959-12-17', '021685291884', 6, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(872, 491173491, '743067971', 'Umban Sari', 1, 1, 'User 612b30b119902', 'Laki-laki', 'Bogor', '2013-02-27', '025710857729', 6, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(873, 631665358, '1552131308', 'Umban Sari', 2, 1, 'User 612b30b120b9e', 'Laki-laki', 'Jakarta', '1952-11-16', '011897855865', 4, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(874, 724914302, '309578432', 'Umban Sari', 1, 1, 'User 612b30b128f24', 'Perempuan', 'Jakarta', '1960-10-20', '050429176748', 4, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(875, 290444168, '1507451468', 'Umban Sari', 1, 2, 'User 612b30b131039', 'Laki-laki', 'Bogor', '1950-07-06', '082546028971', 6, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(876, 483426165, '839392736', 'Umban Sari', 2, 1, 'User 612b30b13a18c', 'Laki-laki', 'Jakarta', '1972-02-01', '065252237534', 1, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(877, 552442195, '815497061', 'Umban Sari', 1, 1, 'User 612b30b14d829', 'Laki-laki', 'Pekanbaru', '2002-07-22', '082054013525', 6, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(878, 994329733, '627114323', 'Umban Sari', 1, 1, 'User 612b30b1589f6', 'Laki-laki', 'Jakarta', '1949-02-10', '049261865883', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(879, 433148132, '214899158', 'Umban Sari', 1, 2, 'User 612b30b160c35', 'Perempuan', 'Bogor', '1990-10-27', '029650242184', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(880, 691526606, '406749931', 'Umban Sari', 2, 1, 'User 612b30b1784ee', 'Laki-laki', 'Bogor', '2003-12-27', '026911854282', 2, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(881, 1621787273, '1552198380', 'Umban Sari', 1, 2, 'User 612b30b1876b1', 'Laki-laki', 'Jakarta', '2021-02-11', '064910011708', 6, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(882, 38961463, '1134069304', 'Umban Sari', 1, 1, 'User 612b30b1c881d', 'Perempuan', 'Bogor', '1969-11-07', '053056692389', 4, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(883, 1124028494, '1052696324', 'Umban Sari', 2, 1, 'User 612b30b235256', 'Laki-laki', 'Jakarta', '1998-07-01', '066004988877', 2, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(884, 1282062315, '1490112942', 'Umban Sari', 1, 2, 'User 612b30b263ddd', 'Perempuan', 'Jakarta', '1981-07-17', '046242893908', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(885, 138999277, '1146389542', 'Umban Sari', 1, 2, 'User 612b30b278458', 'Perempuan', 'Bogor', '1995-07-13', '071148959103', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(886, 1060679257, '1221327753', 'Umban Sari', 1, 2, 'User 612b30b290a0c', 'Laki-laki', 'Bogor', '1976-10-30', '052324060589', 3, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(887, 99509129, '734009569', 'Umban Sari', 2, 1, 'User 612b30b2ad1d1', 'Perempuan', 'Pekanbaru', '1994-12-09', '028377788413', 6, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(888, 78340269, '1599709003', 'Umban Sari', 2, 2, 'User 612b30b2b5523', 'Perempuan', 'Bogor', '1961-05-16', '011300500211', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(889, 989317442, '384300672', 'Umban Sari', 2, 2, 'User 612b30b2cdaa5', 'Laki-laki', 'Jakarta', '2007-09-28', '019955989264', 5, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(890, 1114591193, '819717912', 'Umban Sari', 1, 2, 'User 612b30b2d5da1', 'Laki-laki', 'Bogor', '1951-10-13', '054455488227', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(891, 823420087, '1527102158', 'Umban Sari', 1, 2, 'User 612b30b2ddeda', 'Laki-laki', 'Jakarta', '1942-05-10', '043308447970', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(892, 1197020067, '84374023', 'Umban Sari', 1, 2, 'User 612b30b2e62a4', 'Laki-laki', 'Pekanbaru', '2015-07-23', '044388190243', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(893, 158381377, '699016799', 'Umban Sari', 1, 2, 'User 612b30b2ee3b9', 'Perempuan', 'Pekanbaru', '1945-06-08', '032711405712', 1, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(894, 530348366, '610956868', 'Umban Sari', 1, 1, 'User 612b30b318a6b', 'Perempuan', 'Jakarta', '2019-09-17', '073651756621', 5, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(895, 1488150232, '705429305', 'Umban Sari', 2, 2, 'User 612b30b320bbe', 'Perempuan', 'Jakarta', '1959-06-12', '031856665098', 2, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(896, 1218929946, '1093657248', 'Umban Sari', 1, 1, 'User 612b30b328ecb', 'Laki-laki', 'Bogor', '1957-09-10', '080688650136', 2, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(897, 607221600, '1270676699', 'Umban Sari', 2, 1, 'User 612b30b331091', 'Laki-laki', 'Bogor', '1985-08-09', '077390998214', 2, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(898, 446566152, '1376640717', 'Umban Sari', 2, 1, 'User 612b30b339499', 'Perempuan', 'Jakarta', '1998-10-16', '034733873905', 2, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(899, 119021166, '147572853', 'Umban Sari', 1, 2, 'User 612b30b34d7e7', 'Perempuan', 'Pekanbaru', '1987-09-07', '050672700786', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(900, 33420222, '241716613', 'Umban Sari', 2, 1, 'User 612b30b365f70', 'Laki-laki', 'Pekanbaru', '2011-12-15', '039332245914', 4, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(901, 1202351111, '359231590', 'Umban Sari', 2, 2, 'User 612b30b37c5a7', 'Laki-laki', 'Pekanbaru', '1950-02-08', '029455718374', 3, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(902, 631188680, '869810548', 'Umban Sari', 2, 2, 'User 612b30b3896fc', 'Laki-laki', 'Bogor', '2003-11-07', '066709549121', 3, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(903, 377356588, '1015025169', 'Umban Sari', 2, 2, 'User 612b30b390b56', 'Laki-laki', 'Bogor', '2008-10-20', '062345640369', 4, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(904, 485663646, '774898328', 'Umban Sari', 2, 1, 'User 612b30b398c19', 'Laki-laki', 'Jakarta', '2009-09-06', '087556020870', 4, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(905, 1229185204, '728181771', 'Umban Sari', 2, 2, 'User 612b30b3a0f44', 'Perempuan', 'Pekanbaru', '1953-02-22', '046064738248', 2, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(906, 1424736107, '1615876963', 'Umban Sari', 1, 2, 'User 612b30b3a9079', 'Perempuan', 'Pekanbaru', '1955-08-21', '077835954598', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(907, 899963088, '1344220659', 'Umban Sari', 1, 2, 'User 612b30b3b13df', 'Perempuan', 'Jakarta', '1956-09-04', '076711961644', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg');
INSERT INTO `penduduk` (`pndk_id`, `pndk_nik`, `pndk_nokk`, `pndk_alamat`, `rt_id`, `rw_id`, `pndk_fullname`, `pndk_jk`, `pndk_tmp_lahir`, `pndk_tgl_lahir`, `pndk_tlp`, `agm_id`, `goldr_id`, `pnd_id`, `pkrj_id`, `sts_hub_id`, `stspnkn_id`, `kwgn_id`, `jnsasn_id`, `pndk_foto`) VALUES
(908, 1090637510, '1327000497', 'Umban Sari', 1, 2, 'User 612b30b3c1827', 'Perempuan', 'Bogor', '1982-10-11', '011121000891', 4, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(909, 463208200, '1003276261', 'Umban Sari', 1, 2, 'User 612b30e025873', 'Perempuan', 'Jakarta', '1986-08-08', '056912810724', 2, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(910, 291273526, '1224713683', 'Umban Sari', 2, 2, 'User 612b30e03015c', 'Perempuan', 'Bogor', '1985-07-01', '026336162422', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(911, 430894889, '375335417', 'Umban Sari', 1, 2, 'User 612b30e03f56f', 'Perempuan', 'Jakarta', '1971-10-28', '042310784504', 1, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(912, 267241104, '374773371', 'Umban Sari', 2, 2, 'User 612b30e062f1c', 'Laki-laki', 'Bogor', '2004-03-29', '036353753229', 2, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(913, 469622936, '518314094', 'Umban Sari', 1, 2, 'User 612b30e06b20a', 'Laki-laki', 'Bogor', '1953-06-02', '054834486350', 3, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(914, 1482790406, '822030778', 'Umban Sari', 1, 2, 'User 612b30e077489', 'Perempuan', 'Jakarta', '1994-05-31', '045037037163', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(915, 742722638, '1095415567', 'Umban Sari', 2, 2, 'User 612b30e085991', 'Laki-laki', 'Jakarta', '1980-10-23', '087671385965', 6, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(916, 927323922, '782866574', 'Umban Sari', 2, 1, 'User 612b30e08da9d', 'Laki-laki', 'Jakarta', '1958-04-24', '088585966333', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(917, 1528141867, '544625588', 'Umban Sari', 1, 1, 'User 612b30e095e19', 'Perempuan', 'Bogor', '2001-03-04', '027643135971', 2, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(918, 1058543600, '828448311', 'Umban Sari', 2, 2, 'User 612b30e0a610e', 'Perempuan', 'Pekanbaru', '2005-05-21', '064495167950', 5, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(919, 1437324160, '514139122', 'Umban Sari', 2, 1, 'User 612b30e0b33e5', 'Perempuan', 'Jakarta', '1958-03-27', '067712829218', 3, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(920, 1404024081, '857915080', 'Umban Sari', 2, 1, 'User 612b30e0d2dda', 'Perempuan', 'Pekanbaru', '1981-01-18', '013308234158', 5, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(921, 285133424, '1436115633', 'Umban Sari', 1, 1, 'User 612b30e0db0ce', 'Perempuan', 'Pekanbaru', '1969-07-04', '029197669716', 5, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(922, 51424749, '612418871', 'Umban Sari', 2, 2, 'User 612b30e0e31e1', 'Laki-laki', 'Pekanbaru', '1977-03-27', '047719255786', 4, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(923, 1529793495, '984339186', 'Umban Sari', 2, 2, 'User 612b30e0eb4dd', 'Laki-laki', 'Pekanbaru', '1989-11-22', '051533624677', 4, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(924, 925768844, '467614820', 'Umban Sari', 2, 1, 'User 612b30e1015bc', 'Perempuan', 'Jakarta', '1959-04-06', '023581422252', 3, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(925, 357537856, '403122173', 'Umban Sari', 1, 1, 'User 612b30e10968f', 'Laki-laki', 'Bogor', '1998-08-02', '074781447731', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(926, 332347701, '75010583', 'Umban Sari', 1, 2, 'User 612b30e1119e4', 'Perempuan', 'Jakarta', '1968-08-06', '065318969949', 1, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(927, 387698336, '1133081060', 'Umban Sari', 2, 2, 'User 612b30e119ad9', 'Perempuan', 'Jakarta', '1966-06-07', '052102690018', 3, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(928, 243278252, '871745518', 'Umban Sari', 2, 1, 'User 612b30e12cfcf', 'Laki-laki', 'Jakarta', '1998-03-10', '073438270334', 4, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(929, 577821644, '188596982', 'Umban Sari', 1, 1, 'User 612b30e13b639', 'Laki-laki', 'Jakarta', '1943-08-23', '083622435737', 2, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(930, 1554465564, '63205619', 'Umban Sari', 2, 2, 'User 612b30e14682d', 'Laki-laki', 'Jakarta', '1958-10-14', '078904515618', 4, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(931, 1368468712, '376459532', 'Umban Sari', 2, 2, 'User 612b30e164489', 'Laki-laki', 'Jakarta', '1959-05-02', '018540521091', 5, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(932, 696722153, '823956250', 'Umban Sari', 2, 1, 'User 612b30e1847c5', 'Laki-laki', 'Bogor', '1967-10-12', '062001633482', 4, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(933, 51168501, '659679854', 'Umban Sari', 1, 2, 'User 612b30e193b92', 'Laki-laki', 'Bogor', '1941-12-26', '081144272391', 1, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(934, 561616938, '526129671', 'Umban Sari', 2, 1, 'User 612b30e19bede', 'Laki-laki', 'Jakarta', '1975-09-29', '027366931733', 6, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(935, 966736395, '645009994', 'Umban Sari', 2, 2, 'User 612b30e1a4053', 'Laki-laki', 'Bogor', '2005-11-15', '016255126950', 6, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(936, 409997727, '1043378902', 'Umban Sari', 2, 1, 'User 612b30e1ac323', 'Perempuan', 'Jakarta', '1980-09-12', '039582519295', 3, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(937, 356622829, '448438085', 'Umban Sari', 2, 2, 'User 612b30e1b441d', 'Perempuan', 'Jakarta', '1988-12-11', '018610776416', 4, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(938, 568964024, '850414213', 'Umban Sari', 2, 1, 'User 612b30e1bc77a', 'Perempuan', 'Pekanbaru', '1954-09-12', '023598216539', 4, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(939, 1410182602, '215512451', 'Umban Sari', 2, 2, 'User 612b30e1c48bc', 'Perempuan', 'Jakarta', '1967-04-20', '038798810614', 2, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(940, 1012094472, '665235746', 'Umban Sari', 1, 2, 'User 612b30e1ccc28', 'Perempuan', 'Bogor', '1980-12-19', '079379310123', 4, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(941, 1242421347, '740337539', 'Umban Sari', 1, 1, 'User 612b30e1d4cde', 'Laki-laki', 'Bogor', '1949-09-02', '045666429797', 4, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(942, 927707409, '708332443', 'Umban Sari', 2, 2, 'User 612b30e1dd083', 'Laki-laki', 'Jakarta', '2014-09-02', '021709091870', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(943, 1058542936, '1081640999', 'Umban Sari', 2, 2, 'User 612b30e1e51a2', 'Perempuan', 'Pekanbaru', '1951-05-02', '061686029226', 6, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(944, 924407190, '1535180624', 'Umban Sari', 1, 2, 'User 612b30e1ed4b5', 'Laki-laki', 'Jakarta', '2004-07-13', '060147539916', 3, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(945, 1403415753, '535182762', 'Umban Sari', 1, 1, 'User 612b30e2013cb', 'Laki-laki', 'Pekanbaru', '1953-12-21', '032256960044', 5, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(946, 920017782, '1119510138', 'Umban Sari', 1, 1, 'User 612b30e20971b', 'Perempuan', 'Bogor', '2010-06-01', '024013396633', 4, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(947, 512296054, '1480819818', 'Umban Sari', 1, 1, 'User 612b30e21183a', 'Perempuan', 'Pekanbaru', '2007-12-30', '036916956816', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(948, 169700654, '464939005', 'Umban Sari', 2, 1, 'User 612b30e219ce3', 'Perempuan', 'Pekanbaru', '1985-04-03', '016877130361', 2, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(949, 188292485, '1146374592', 'Umban Sari', 1, 2, 'User 612b30e221d20', 'Laki-laki', 'Bogor', '2008-06-24', '012602046484', 3, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(950, 1480886317, '835987244', 'Umban Sari', 1, 2, 'User 612b30e229f77', 'Laki-laki', 'Pekanbaru', '1977-04-25', '039800151888', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(951, 1361917365, '785137202', 'Umban Sari', 2, 2, 'User 612b30e2320d6', 'Laki-laki', 'Jakarta', '1982-07-05', '071849662465', 5, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(952, 807309173, '302543492', 'Umban Sari', 1, 1, 'User 612b30e23a3f3', 'Perempuan', 'Jakarta', '1967-03-18', '013251793745', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(953, 477449202, '384068989', 'Umban Sari', 1, 1, 'User 612b30e24251f', 'Laki-laki', 'Bogor', '1989-02-02', '061321685995', 1, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(954, 844195984, '1204503842', 'Umban Sari', 1, 2, 'User 612b30e24a8ba', 'Perempuan', 'Pekanbaru', '2004-04-26', '032382954336', 1, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(955, 1077990434, '257787279', 'Umban Sari', 1, 1, 'User 612b30e25acb1', 'Laki-laki', 'Pekanbaru', '2014-06-21', '024690515347', 6, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(956, 541637547, '174955779', 'Umban Sari', 1, 2, 'User 612b30e26b022', 'Perempuan', 'Bogor', '1974-05-22', '051561926467', 1, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(957, 1477655611, '89390393', 'Umban Sari', 2, 2, 'User 612b30e28aac8', 'Laki-laki', 'Pekanbaru', '1994-03-07', '040254751523', 1, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(958, 134400567, '1072106483', 'Umban Sari', 2, 1, 'User 612b30e2a604c', 'Laki-laki', 'Bogor', '1960-09-09', '046239706900', 4, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(959, 142848626, '938332060', 'Umban Sari', 2, 2, 'User 612b30e2c07d2', 'Perempuan', 'Pekanbaru', '1970-11-01', '068962265192', 2, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(960, 610284993, '1320428443', 'Umban Sari', 2, 2, 'User 612b30e2c8b3c', 'Perempuan', 'Pekanbaru', '1954-06-22', '077411805364', 5, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(961, 1249846929, '724653881', 'Umban Sari', 1, 2, 'User 612b30e2d0c57', 'Perempuan', 'Jakarta', '1948-01-23', '012950181519', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(962, 249272407, '770559526', 'Umban Sari', 2, 1, 'User 612b30e2d92ed', 'Laki-laki', 'Jakarta', '1987-02-13', '017571459563', 4, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(963, 394074202, '1585212188', 'Umban Sari', 2, 1, 'User 612b30e2e1016', 'Laki-laki', 'Jakarta', '1975-04-12', '047378059929', 4, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(964, 912138470, '1140958164', 'Umban Sari', 1, 2, 'User 612b30e2e9379', 'Laki-laki', 'Bogor', '2020-08-23', '063229067922', 3, 3, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(965, 934197958, '542196681', 'Umban Sari', 2, 1, 'User 612b30e2f14b0', 'Laki-laki', 'Bogor', '1943-09-22', '066316269246', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(966, 1163903339, '188363276', 'Umban Sari', 2, 1, 'User 612b30e3055ee', 'Laki-laki', 'Jakarta', '2008-08-19', '081536829261', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(967, 756622585, '758388532', 'Umban Sari', 2, 1, 'User 612b30e30d6d9', 'Perempuan', 'Jakarta', '1949-10-23', '027484228904', 4, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(968, 1299342186, '1102311773', 'Umban Sari', 2, 1, 'User 612b30e315aad', 'Laki-laki', 'Jakarta', '1943-12-12', '055234540388', 6, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(969, 308705263, '1324440376', 'Umban Sari', 2, 1, 'User 612b30e31dba6', 'Perempuan', 'Pekanbaru', '1990-01-01', '051711956173', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(970, 1256348938, '568480359', 'Umban Sari', 1, 1, 'User 612b30e325fd9', 'Perempuan', 'Bogor', '2011-04-24', '060152993134', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(971, 1203296317, '385749077', 'Umban Sari', 2, 2, 'User 612b30e32dffd', 'Perempuan', 'Jakarta', '1982-09-15', '089819938088', 1, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(972, 669984168, '493339916', 'Umban Sari', 2, 2, 'User 612b30e336348', 'Laki-laki', 'Bogor', '1981-02-08', '010427440651', 6, 3, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(973, 825638759, '1259757274', 'Umban Sari', 2, 1, 'User 612b30e33e433', 'Laki-laki', 'Jakarta', '1995-01-13', '057699536245', 6, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(974, 1007668160, '941571934', 'Umban Sari', 2, 2, 'User 612b30e3467e2', 'Perempuan', 'Pekanbaru', '1979-02-07', '015380754424', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(975, 1155278758, '240961117', 'Umban Sari', 2, 2, 'User 612b30e356a92', 'Perempuan', 'Pekanbaru', '1983-05-20', '020046892781', 3, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(976, 1153883740, '813731300', 'Umban Sari', 1, 1, 'User 612b30e35ee8a', 'Laki-laki', 'Jakarta', '1949-07-08', '029971997436', 4, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(977, 604583526, '855351921', 'Umban Sari', 1, 2, 'User 612b30e366f67', 'Laki-laki', 'Pekanbaru', '1983-09-06', '019040925726', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(978, 705044874, '668553898', 'Umban Sari', 2, 2, 'User 612b30e38982a', 'Perempuan', 'Jakarta', '1963-03-15', '086131777815', 4, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(979, 790347176, '1260240716', 'Umban Sari', 1, 2, 'User 612b30e4509a8', 'Laki-laki', 'Jakarta', '1962-08-21', '082834510151', 2, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(980, 672514627, '1515927363', 'Umban Sari', 1, 2, 'User 612b30e458ae1', 'Laki-laki', 'Bogor', '1945-08-20', '088870996744', 5, 2, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(981, 1308555975, '1427345733', 'Umban Sari', 1, 1, 'User 612b30e463e8f', 'Perempuan', 'Pekanbaru', '2017-09-01', '080363596716', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(982, 814678099, '945362069', 'Umban Sari', 1, 2, 'User 612b30e4742e6', 'Laki-laki', 'Jakarta', '2019-09-20', '011634055674', 6, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(983, 133013632, '477450939', 'Umban Sari', 2, 1, 'User 612b30e48157a', 'Laki-laki', 'Jakarta', '2016-07-16', '066224450020', 4, 3, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(984, 234009720, '90146720', 'Umban Sari', 2, 1, 'User 612b30e490ab7', 'Laki-laki', 'Jakarta', '1974-05-08', '065943536108', 5, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(985, 890416985, '1396824523', 'Umban Sari', 1, 1, 'User 612b30e49fedf', 'Perempuan', 'Pekanbaru', '2006-07-12', '035931349684', 6, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(986, 1146804507, '198977888', 'Umban Sari', 2, 1, 'User 612b30e4b024e', 'Laki-laki', 'Bogor', '2002-02-28', '022985626934', 1, 1, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(987, 22390604, '513794697', 'Umban Sari', 1, 1, 'User 612b30e4b85b4', 'Perempuan', 'Jakarta', '2000-01-21', '048076806253', 6, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(988, 959039088, '39228265', 'Umban Sari', 2, 2, 'User 612b30e4c06ac', 'Perempuan', 'Pekanbaru', '1961-08-06', '09982541981', 6, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(989, 696019805, '354349747', 'Umban Sari', 2, 1, 'User 612b30e4c89f1', 'Laki-laki', 'Bogor', '1998-08-26', '044023865984', 1, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(990, 977244030, '730403490', 'Umban Sari', 1, 2, 'User 612b30e4d0b1a', 'Perempuan', 'Pekanbaru', '1992-03-20', '049684115372', 6, 3, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(991, 526115429, '131886564', 'Umban Sari', 2, 1, 'User 612b30e4d8e6b', 'Laki-laki', 'Jakarta', '2016-09-30', '014949598019', 5, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(992, 863881672, '1341362318', 'Umban Sari', 1, 1, 'User 612b30e4e62c6', 'Laki-laki', 'Bogor', '2008-02-03', '065637127242', 3, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(993, 1316023748, '1095664941', 'Umban Sari', 1, 1, 'User 612b30e50758f', 'Laki-laki', 'Bogor', '2012-09-30', '011863148578', 3, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(994, 921787855, '284005994', 'Umban Sari', 1, 1, 'User 612b30e50f69f', 'Perempuan', 'Pekanbaru', '1961-05-07', '029987622464', 4, 1, 2, 1, 1, 2, 1, 1, 'default.jpg'),
(995, 1454134031, '1602411002', 'Umban Sari', 2, 1, 'User 612b30e5179e8', 'Perempuan', 'Jakarta', '1960-06-13', '025003928393', 3, 1, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(996, 1329138821, '916922160', 'Umban Sari', 2, 1, 'User 612b30e51fadd', 'Laki-laki', 'Pekanbaru', '1978-04-30', '047945009132', 6, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(997, 1417853022, '502112285', 'Umban Sari', 1, 2, 'User 612b30e527e6a', 'Perempuan', 'Jakarta', '2000-06-19', '080411585219', 2, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(998, 1542450213, '478995393', 'Umban Sari', 2, 2, 'User 612b30e52ff6c', 'Laki-laki', 'Bogor', '1954-05-07', '023822584861', 2, 1, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(999, 1164168624, '447231213', 'Umban Sari', 1, 2, 'User 612b30e5382ab', 'Laki-laki', 'Bogor', '1966-08-22', '033670806290', 5, 2, 1, 1, 1, 2, 1, 1, 'default.jpg'),
(1000, 11835520, '754350261', 'Umban Sari', 2, 2, 'User 612b30e5403f3', 'Perempuan', 'Pekanbaru', '1986-04-24', '09066945583', 2, 2, 2, 1, 1, 1, 1, 1, 'default.jpg'),
(1001, 298589873, '734848452', 'Umban Sari', 2, 1, 'User 612b30e5486f9', 'Perempuan', 'Pekanbaru', '1965-07-23', '046210019949', 5, 2, 1, 1, 1, 1, 1, 1, 'default.jpg'),
(1002, 1093460844, '582868599', 'Umban Sari', 2, 2, 'User 612b30e550863', 'Laki-laki', 'Jakarta', '1974-10-06', '065002459611', 6, 3, 1, 1, 1, 1, 1, 1, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `pgdn_id` int(5) NOT NULL,
  `usr_id` int(5) NOT NULL,
  `sts_id` int(10) NOT NULL,
  `tp_id` int(10) NOT NULL,
  `pgdn_judul` varchar(255) NOT NULL,
  `pgdn_isi` text NOT NULL,
  `pgdn_gambar` varchar(100) NOT NULL,
  `pndk_nik` bigint(16) NOT NULL,
  `tanggapan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `polling`
--

CREATE TABLE `polling` (
  `pol_id` int(10) NOT NULL,
  `pol_title` varchar(100) NOT NULL,
  `pol_ket` text NOT NULL,
  `sts_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `polling_respons`
--

CREATE TABLE `polling_respons` (
  `polrs_id` int(5) NOT NULL,
  `polrs_ss` int(5) NOT NULL,
  `polrs_s` int(5) NOT NULL,
  `polrs_ts` int(5) NOT NULL,
  `polrs_sts` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `rl_id` int(5) NOT NULL,
  `rl_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`rl_id`, `rl_name`) VALUES
(1, 'lurah'),
(2, 'petugas lurah'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `rt`
--

CREATE TABLE `rt` (
  `rt_id` int(5) NOT NULL,
  `rw_id` int(5) NOT NULL,
  `rt_nama` varchar(50) NOT NULL,
  `no_rt` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `rt_foto` varchar(50) NOT NULL,
  `periode` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rt`
--

INSERT INTO `rt` (`rt_id`, `rw_id`, `rt_nama`, `no_rt`, `alamat`, `no_tlp`, `rt_foto`, `periode`, `status`) VALUES
(1, 1, 'cici', '01', 'jl. paus', '08556789', 'default.jpg', '-', '-'),
(2, 1, 'akhes', '02', 'USA', '88888', 'default.jpg', '1', 'Aktif'),
(3, 2, 'Dia', '01', 'USA', '88888', 'default.jpg', '1', 'Aktif'),
(4, 2, 'Roy', '02', 'USA', '88888', 'default.jpg', '1', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `rw`
--

CREATE TABLE `rw` (
  `rw_id` int(5) NOT NULL,
  `rw_nama` varchar(50) NOT NULL,
  `no_rw` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `rw_foto` varchar(50) NOT NULL,
  `periode` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rw`
--

INSERT INTO `rw` (`rw_id`, `rw_nama`, `no_rw`, `alamat`, `no_tlp`, `rw_foto`, `periode`, `status`) VALUES
(1, 'budi', '01', 'jl. paus', '082234567', 'default.jpg', '-', '-'),
(2, 'ani', '02', 'jl. paus', '08996548', 'default.jpg', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `saprsarana`
--

CREATE TABLE `saprsarana` (
  `spr_id` int(10) NOT NULL,
  `sprjns_id` int(10) NOT NULL,
  `spr_name` varchar(100) NOT NULL,
  `spr_kondisi` varchar(100) NOT NULL,
  `spr_kd_invetaris` varchar(100) NOT NULL,
  `spr_quantity` int(50) NOT NULL,
  `spr_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spr_jenis`
--

CREATE TABLE `spr_jenis` (
  `sprjns_id` int(10) NOT NULL,
  `sprjns_name` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `sts_id` int(10) NOT NULL,
  `sts_set` tinyint(1) NOT NULL,
  `sts_ket` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`sts_id`, `sts_set`, `sts_ket`) VALUES
(1, 1, 'True'),
(2, 0, 'False');

-- --------------------------------------------------------

--
-- Table structure for table `sts_hub_kel`
--

CREATE TABLE `sts_hub_kel` (
  `sts_hub_id` int(5) NOT NULL,
  `sts_hub_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sts_hub_kel`
--

INSERT INTO `sts_hub_kel` (`sts_hub_id`, `sts_hub_ket`) VALUES
(1, 'Anak'),
(2, 'Istri');

-- --------------------------------------------------------

--
-- Table structure for table `sts_pernikahan`
--

CREATE TABLE `sts_pernikahan` (
  `stspnkn_id` int(5) NOT NULL,
  `stspnkn_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sts_pernikahan`
--

INSERT INTO `sts_pernikahan` (`stspnkn_id`, `stspnkn_ket`) VALUES
(1, 'Menikah'),
(2, 'Belum Menikah');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `tp_id` int(10) NOT NULL,
  `tp_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `umkm`
--

CREATE TABLE `umkm` (
  `id_umkm` int(11) NOT NULL,
  `no_nib` varchar(255) NOT NULL,
  `nama_owner` varchar(255) NOT NULL,
  `nama_usaha` varchar(255) NOT NULL,
  `id_kat` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `foto_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `umkm_kat`
--

CREATE TABLE `umkm_kat` (
  `id_kat` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usr_id` int(5) NOT NULL,
  `rl_id` int(5) NOT NULL,
  `usr_name` text NOT NULL,
  `usr_pass` text NOT NULL,
  `usr_fullname` text NOT NULL,
  `usr_email` text NOT NULL,
  `sts_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usr_id`, `rl_id`, `usr_name`, `usr_pass`, `usr_fullname`, `usr_email`, `sts_id`) VALUES
(6, 1, 'lurah', '$2y$10$tub7X9mYUbekB7N2SX1jxOQ.ZrTgLJ/z09neK7Vd581h2e0.MvNhi', 'Bu Lurah', 'lurah@gmail.com', 1),
(7, 2, 'tes', '$2y$10$1isrKHhHFinXzdpBBrqocu7hSt15ucMiISksxbXWQrexZloq7qVL2', 'tes', 'tes@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`agm_id`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`ag_id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`brt_id`),
  ADD KEY `fk_st2` (`sts_id`),
  ADD KEY `fk_usr_id2` (`usr_id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`gal_id`);

--
-- Indexes for table `gol_darah`
--
ALTER TABLE `gol_darah`
  ADD PRIMARY KEY (`goldr_id`);

--
-- Indexes for table `jns_asuransi`
--
ALTER TABLE `jns_asuransi`
  ADD PRIMARY KEY (`jnsasn_id`);

--
-- Indexes for table `kewarganegaraan`
--
ALTER TABLE `kewarganegaraan`
  ADD PRIMARY KEY (`kwgn_id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`kmtr_id`),
  ADD KEY `fk_st1` (`sts_id`),
  ADD KEY `fk_brt1` (`brt_id`);

--
-- Indexes for table `ortu`
--
ALTER TABLE `ortu`
  ADD PRIMARY KEY (`ortu_id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`pkrj_id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`pnd_id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`pndk_id`),
  ADD UNIQUE KEY `pndk_nik` (`pndk_nik`),
  ADD KEY `fk_rw_id` (`rw_id`),
  ADD KEY `fk_agm_id` (`agm_id`),
  ADD KEY `fk_pnd_id` (`pnd_id`),
  ADD KEY `fk_pkrj_id` (`pkrj_id`),
  ADD KEY `fk_sts_hub_id` (`sts_hub_id`),
  ADD KEY `fk_stspnkn_id` (`stspnkn_id`),
  ADD KEY `fk_kwgn_id` (`kwgn_id`),
  ADD KEY `fk_jnsasn_id` (`jnsasn_id`),
  ADD KEY `fk_goldr_id` (`goldr_id`),
  ADD KEY `fk_rt_id` (`rt_id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`pgdn_id`),
  ADD KEY `fk_st3` (`sts_id`),
  ADD KEY `fk_tp` (`tp_id`),
  ADD KEY `fk_usr_id` (`usr_id`),
  ADD KEY `fk_pndk_nik` (`pndk_nik`);

--
-- Indexes for table `polling`
--
ALTER TABLE `polling`
  ADD PRIMARY KEY (`pol_id`),
  ADD KEY `fk_sts_id` (`sts_id`);

--
-- Indexes for table `polling_respons`
--
ALTER TABLE `polling_respons`
  ADD PRIMARY KEY (`polrs_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`rl_id`);

--
-- Indexes for table `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`rt_id`),
  ADD KEY `rw_id` (`rw_id`);

--
-- Indexes for table `rw`
--
ALTER TABLE `rw`
  ADD PRIMARY KEY (`rw_id`);

--
-- Indexes for table `saprsarana`
--
ALTER TABLE `saprsarana`
  ADD PRIMARY KEY (`spr_id`),
  ADD KEY `fk_sprjns_id` (`sprjns_id`);

--
-- Indexes for table `spr_jenis`
--
ALTER TABLE `spr_jenis`
  ADD PRIMARY KEY (`sprjns_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`sts_id`);

--
-- Indexes for table `sts_hub_kel`
--
ALTER TABLE `sts_hub_kel`
  ADD PRIMARY KEY (`sts_hub_id`);

--
-- Indexes for table `sts_pernikahan`
--
ALTER TABLE `sts_pernikahan`
  ADD PRIMARY KEY (`stspnkn_id`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`tp_id`);

--
-- Indexes for table `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`id_umkm`),
  ADD KEY `fk_kat` (`id_kat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`),
  ADD UNIQUE KEY `usr_email` (`usr_email`) USING HASH,
  ADD KEY `fk_rl_id` (`rl_id`),
  ADD KEY `fk_sts_id2` (`sts_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `agm_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `ag_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `brt_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `gal_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gol_darah`
--
ALTER TABLE `gol_darah`
  MODIFY `goldr_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `kmtr_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `pkrj_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `pndk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `pgdn_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `polling`
--
ALTER TABLE `polling`
  MODIFY `pol_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `polling_respons`
--
ALTER TABLE `polling_respons`
  MODIFY `polrs_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rt`
--
ALTER TABLE `rt`
  MODIFY `rt_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `saprsarana`
--
ALTER TABLE `saprsarana`
  MODIFY `spr_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spr_jenis`
--
ALTER TABLE `spr_jenis`
  MODIFY `sprjns_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `sts_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sts_hub_kel`
--
ALTER TABLE `sts_hub_kel`
  MODIFY `sts_hub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sts_pernikahan`
--
ALTER TABLE `sts_pernikahan`
  MODIFY `stspnkn_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `tp_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id_umkm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `fk_st2` FOREIGN KEY (`sts_id`) REFERENCES `status` (`sts_id`),
  ADD CONSTRAINT `fk_usr_id2` FOREIGN KEY (`usr_id`) REFERENCES `user` (`usr_id`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_brt1` FOREIGN KEY (`brt_id`) REFERENCES `berita` (`brt_id`),
  ADD CONSTRAINT `fk_st1` FOREIGN KEY (`sts_id`) REFERENCES `status` (`sts_id`);

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `fk_agm_id` FOREIGN KEY (`agm_id`) REFERENCES `agama` (`agm_id`),
  ADD CONSTRAINT `fk_goldr_id` FOREIGN KEY (`goldr_id`) REFERENCES `gol_darah` (`goldr_id`),
  ADD CONSTRAINT `fk_jnsasn_id` FOREIGN KEY (`jnsasn_id`) REFERENCES `jns_asuransi` (`jnsasn_id`),
  ADD CONSTRAINT `fk_kwgn_id` FOREIGN KEY (`kwgn_id`) REFERENCES `kewarganegaraan` (`kwgn_id`),
  ADD CONSTRAINT `fk_pkrj_id` FOREIGN KEY (`pkrj_id`) REFERENCES `pekerjaan` (`pkrj_id`),
  ADD CONSTRAINT `fk_pnd_id` FOREIGN KEY (`pnd_id`) REFERENCES `pendidikan` (`pnd_id`),
  ADD CONSTRAINT `fk_rt_id` FOREIGN KEY (`rt_id`) REFERENCES `rt` (`rt_id`),
  ADD CONSTRAINT `fk_rw_id` FOREIGN KEY (`rw_id`) REFERENCES `rw` (`rw_id`),
  ADD CONSTRAINT `fk_sts_hub_id` FOREIGN KEY (`sts_hub_id`) REFERENCES `sts_hub_kel` (`sts_hub_id`),
  ADD CONSTRAINT `fk_stspnkn_id` FOREIGN KEY (`stspnkn_id`) REFERENCES `sts_pernikahan` (`stspnkn_id`);

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `fk_pndk_nik` FOREIGN KEY (`pndk_nik`) REFERENCES `penduduk` (`pndk_nik`),
  ADD CONSTRAINT `fk_st3` FOREIGN KEY (`sts_id`) REFERENCES `status` (`sts_id`),
  ADD CONSTRAINT `fk_tp` FOREIGN KEY (`tp_id`) REFERENCES `tipe` (`tp_id`),
  ADD CONSTRAINT `fk_usr_id` FOREIGN KEY (`usr_id`) REFERENCES `user` (`usr_id`);

--
-- Constraints for table `polling`
--
ALTER TABLE `polling`
  ADD CONSTRAINT `fk_sts_id` FOREIGN KEY (`sts_id`) REFERENCES `status` (`sts_id`);

--
-- Constraints for table `rt`
--
ALTER TABLE `rt`
  ADD CONSTRAINT `rt_ibfk_1` FOREIGN KEY (`rw_id`) REFERENCES `rw` (`rw_id`);

--
-- Constraints for table `saprsarana`
--
ALTER TABLE `saprsarana`
  ADD CONSTRAINT `fk_sprjns_id` FOREIGN KEY (`sprjns_id`) REFERENCES `spr_jenis` (`sprjns_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_rl_id` FOREIGN KEY (`rl_id`) REFERENCES `role` (`rl_id`),
  ADD CONSTRAINT `fk_sts_id2` FOREIGN KEY (`sts_id`) REFERENCES `status` (`sts_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
