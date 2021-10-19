-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 02:04 PM
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
(2, 'Kristen'),
(3, 'Katholik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Khong Hucu'),
(7, 'Penghayat Kepercayaan'),
(8, 'Lainnya');

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
  `status` varchar(255) NOT NULL DEFAULT '1',
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
(3, 'AB'),
(4, 'O'),
(5, 'A+'),
(6, 'A-'),
(7, 'B+'),
(8, 'B-'),
(9, 'AB+'),
(10, 'AB-'),
(11, 'O+'),
(12, 'O-'),
(13, 'Tidak Tahu');

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
(1, 'Jiwasraya');

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran`
--

CREATE TABLE `kelahiran` (
  `klhrn_id` int(11) NOT NULL,
  `klhrn_kepala_keluarga` varchar(255) NOT NULL,
  `klhrn_nokk` varchar(50) NOT NULL,
  `klhrn_nama` varchar(255) NOT NULL,
  `klhrn_jk` varchar(255) NOT NULL,
  `klhrn_tmpt_dilahirkan` int(11) NOT NULL,
  `klhrn_tmpt_kelahiran` varchar(255) NOT NULL,
  `klhrn_tgl_lahir` date NOT NULL,
  `klhrn_pkl_lahir` time NOT NULL,
  `klhrn_jns_klmn_detail` int(11) NOT NULL,
  `klhrn_ke` int(11) NOT NULL,
  `klhrn_penolong` int(11) NOT NULL,
  `klhrn_berat` int(11) NOT NULL,
  `klhrn_panjang` int(11) NOT NULL,
  `klhrn_ibu_nik` int(100) NOT NULL,
  `klhrn_ibu_nama` varchar(255) NOT NULL,
  `klhrn_ayah_nik` int(100) NOT NULL,
  `klhrn_ayah_nama` varchar(255) NOT NULL,
  `plpr_nik` bigint(16) NOT NULL,
  `plpr_fullname` varchar(255) NOT NULL,
  `plpr_umur` int(10) NOT NULL,
  `plpr_jk` varchar(255) NOT NULL,
  `plpr_pekerjaan` int(5) NOT NULL,
  `plpr_alamat` varchar(255) NOT NULL,
  `sks_nik` bigint(16) NOT NULL,
  `sks_fullname` varchar(255) NOT NULL,
  `sks_umur` int(10) NOT NULL,
  `sks_pekerjaan` int(5) NOT NULL,
  `sks_alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE `kematian` (
  `kmtn_id` int(11) NOT NULL,
  `kmtn_kepala_keluarga` varchar(255) NOT NULL,
  `kmtn_nokk` varchar(50) NOT NULL,
  `kmtn_nik` int(16) NOT NULL,
  `kmtn_nama` varchar(255) NOT NULL,
  `kmtn_jk` varchar(255) NOT NULL,
  `kmtn_agama` int(5) NOT NULL,
  `kmtn_pekerjaan` int(5) NOT NULL,
  `kmtn_alamat` varchar(255) NOT NULL,
  `kmtn_anak_ke` int(5) NOT NULL,
  `kmtn_tgl_mati` date NOT NULL,
  `kmtn_pkl_mati` time NOT NULL,
  `kmtn_sebab_mati` varchar(255) NOT NULL,
  `kmtn_tempat_mati` varchar(255) NOT NULL,
  `kmtn_yg_menerangkan` int(5) NOT NULL,
  `kmtn_ayah_nik` int(100) NOT NULL,
  `kmtn_ayah_nama` varchar(255) NOT NULL,
  `kmtn_ibu_nik` int(100) NOT NULL,
  `kmtn_ibu_nama` varchar(255) NOT NULL,
  `plpr_nik` int(100) NOT NULL,
  `plpr_fullname` varchar(255) NOT NULL,
  `plpr_umur` int(10) NOT NULL,
  `plpr_tgl_lahir` date NOT NULL,
  `plpr_pekerjaan` int(5) NOT NULL,
  `plpr_alamat` varchar(255) NOT NULL,
  `sks_nik` int(100) NOT NULL,
  `sks_fullname` varchar(255) NOT NULL,
  `sks_tgl_lahir` date NOT NULL,
  `sks_pekerjaan` int(5) NOT NULL,
  `sks_alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `kmtr_id` int(10) NOT NULL,
  `brt_id` int(5) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
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
(1, 'Belum / Tidak Bekerja'),
(2, 'Mengurus Rumah Tangga'),
(3, 'Pelajar / Mahasiswa'),
(4, 'Pensiunan'),
(5, 'Pegawai Negeri Sipil'),
(6, 'Tentara Nasional Indonesia'),
(7, 'Kepolisian RI'),
(8, 'Perdagangan'),
(9, 'Petani / Pekebun'),
(10, 'Peternak'),
(11, 'Nelayan / Perikanan'),
(12, 'Industri'),
(13, 'Konstruksi'),
(14, 'Transportasi'),
(15, 'Karyawan Swasta'),
(16, 'Karyawan BUMN'),
(17, 'Karyawan BUMD'),
(18, 'Karyawan Honorer'),
(19, 'Buruh Harian Lepas'),
(20, 'Buruh Tani / Perkebunan'),
(21, 'Buruh Nelayan / Perikanan'),
(22, 'Buruh Peternakan'),
(23, 'Pembantu Rumah Tangga'),
(24, 'Tukang Cukur'),
(25, 'Tukang Listrik'),
(26, 'Tukang Batu'),
(27, 'Tukang Kayu'),
(28, 'Tukang Sol Sepatu'),
(29, 'Tukang Las / Pandai Besi'),
(30, 'Tukang Jahit'),
(31, 'Penata Rambut'),
(32, 'Penata Rias'),
(33, 'Penata Busana'),
(34, 'Mekanik'),
(35, 'Tukang Gigi'),
(36, 'Seniman'),
(37, 'Tabib'),
(38, 'Paraji'),
(39, 'Perancang Busana'),
(40, 'Penterjemah'),
(41, 'Imam Masjid'),
(42, 'Pendeta'),
(43, 'Pastur'),
(44, 'Wartawan'),
(45, 'Ustadz / Mubaligh'),
(46, 'Juru Masak'),
(47, 'Promotor Acara'),
(48, 'Anggota DPR-RI'),
(49, 'Anggota DPD'),
(50, 'Anggota BPK'),
(51, 'Presiden'),
(52, 'Wakil Presiden'),
(53, 'Anggota Mahkamah'),
(54, 'Konstitusi'),
(55, 'Anggota Kabinet / Kementrian'),
(56, 'Duta Besar'),
(57, 'Gubernur'),
(58, 'Wakil Gubernur'),
(59, 'Bupati'),
(60, 'Wakil Bupati'),
(61, 'Walikota'),
(62, 'Wakil Walikota'),
(63, 'Anggota DPRD Propinsi'),
(64, 'Anggota DPRD Kabupaten / Kota'),
(65, 'Dosen'),
(66, 'Guru'),
(67, 'Pilot'),
(68, 'Pengacara'),
(69, 'Notaris'),
(70, 'Arsitek'),
(71, 'Akuntan'),
(72, 'Konsultan'),
(73, 'Dokter'),
(74, 'Bidan'),
(75, 'Perawat'),
(76, 'Apoteker'),
(77, 'Psikiater / Psikolog'),
(78, 'Penyiar Televisi'),
(79, 'Penyiar Radio'),
(80, 'Pelaut'),
(81, 'Peneliti'),
(82, 'Sopir'),
(83, 'Pialang'),
(84, 'Paranormal'),
(85, 'Pedagang'),
(86, 'Perangkat Desa'),
(87, 'Kepala Desa'),
(88, 'Biarawati'),
(89, 'Wiraswasta'),
(90, 'Lainnya');

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
(1, 'Tidak / Belum Sekolah'),
(2, 'Tidak Tamat SD / Sederajat'),
(3, 'Tamat SD / Sederajat'),
(4, 'SLTP / Sederajat'),
(5, 'SLTA / Sederajat'),
(6, 'Diploma I / II'),
(7, 'Akademi / Diploma III / S. Muda'),
(8, 'Diploma IV / Strata I'),
(9, 'Strata II'),
(10, 'Strata III');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `pndk_id` int(10) NOT NULL,
  `pndk_nik` bigint(16) NOT NULL,
  `pndk_nokk` varchar(50) DEFAULT NULL,
  `pndk_alamat` varchar(50) DEFAULT NULL,
  `rt_id` int(5) NOT NULL,
  `rw_id` int(5) NOT NULL,
  `pndk_fullname` varchar(100) DEFAULT NULL,
  `pndk_jk` varchar(100) DEFAULT NULL,
  `pndk_tmp_lahir` varchar(100) DEFAULT NULL,
  `pndk_tgl_lahir` date DEFAULT NULL,
  `pndk_tlp` varchar(50) DEFAULT NULL,
  `agm_id` int(5) NOT NULL,
  `goldr_id` int(5) NOT NULL,
  `pnd_id` int(5) NOT NULL,
  `pkrj_id` int(5) NOT NULL,
  `sts_hub_id` int(5) NOT NULL,
  `stspnkn_id` int(5) NOT NULL,
  `pndk_akta_kawin` varchar(255) DEFAULT NULL,
  `pndk_akta_cerai` varchar(255) DEFAULT NULL,
  `pndk_kelainan` varchar(255) DEFAULT NULL,
  `pndk_desalurah` varchar(255) DEFAULT NULL,
  `pndk_kecamatan` varchar(255) DEFAULT NULL,
  `pndk_kabupatenkota` varchar(255) DEFAULT NULL,
  `pndk_provinsi` varchar(255) DEFAULT NULL,
  `pndk_kodepos` int(10) DEFAULT NULL,
  `pndk_tgl_kawin` date DEFAULT NULL,
  `pndk_nopaspor` varchar(255) DEFAULT NULL,
  `pndk_nama_ayah` varchar(255) DEFAULT NULL,
  `pndk_nama_ibu` varchar(255) DEFAULT NULL,
  `pndk_foto` varchar(255) NOT NULL DEFAULT 'default.png',
  `pndk_tgl_tambah` datetime NOT NULL DEFAULT current_timestamp(),
  `pndk_tlpkeluarga` varchar(255) DEFAULT NULL,
  `pndk_tgl_berakhir_paspor` date DEFAULT NULL,
  `pndk_akta_lahir` varchar(255) DEFAULT NULL,
  `pndk_noakta_lahir` varchar(255) DEFAULT NULL,
  `pndk_noakta_kawin` varchar(255) DEFAULT NULL,
  `pndk_noakta_cerai` varchar(255) DEFAULT NULL,
  `pndk_tgl_cerai` date DEFAULT NULL,
  `pndk_cacat` varchar(255) DEFAULT NULL,
  `pndk_nik_ayah` varchar(255) DEFAULT NULL,
  `pndk_nik_ibu` varchar(255) DEFAULT NULL,
  `pndk_umur` int(11) DEFAULT NULL,
  `pndk_namakk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`pndk_id`, `pndk_nik`, `pndk_nokk`, `pndk_alamat`, `rt_id`, `rw_id`, `pndk_fullname`, `pndk_jk`, `pndk_tmp_lahir`, `pndk_tgl_lahir`, `pndk_tlp`, `agm_id`, `goldr_id`, `pnd_id`, `pkrj_id`, `sts_hub_id`, `stspnkn_id`, `pndk_akta_kawin`, `pndk_akta_cerai`, `pndk_kelainan`, `pndk_desalurah`, `pndk_kecamatan`, `pndk_kabupatenkota`, `pndk_provinsi`, `pndk_kodepos`, `pndk_tgl_kawin`, `pndk_nopaspor`, `pndk_nama_ayah`, `pndk_nama_ibu`, `pndk_foto`, `pndk_tgl_tambah`, `pndk_tlpkeluarga`, `pndk_tgl_berakhir_paspor`, `pndk_akta_lahir`, `pndk_noakta_lahir`, `pndk_noakta_kawin`, `pndk_noakta_cerai`, `pndk_tgl_cerai`, `pndk_cacat`, `pndk_nik_ayah`, `pndk_nik_ibu`, `pndk_umur`, `pndk_namakk`) VALUES
(1, 1111111111, '101010101010', 'Jln. Umban Sari', 6, 1, 'siapa', 'Laki-Laki', 'Pekanbaru', '2021-09-01', '1010101010', 1, 1, 1, 1, 1, 1, 'Ada', 'Tidak Ada', 'Ada', 'Umban Sari', 'rmb', 'Pekanbaru', 'Riau', 11111, '2021-09-02', '123123123', 'ayah', 'ibu', 'default.png', '2021-09-30 07:04:26', NULL, '2021-10-31', 'Ada', '32123', '1231212', '212121', '2021-10-03', 'Cacat Fisik', '159159159', '357357375', 1, 'Budi'),
(2, 1, '1', '1', 1, 1, '1', 'Laki-Laki', '1', '2021-10-06', '1', 2, 3, 3, 15, 2, 2, 'Ada', 'Ada', 'Ada', '1', '1', '1', '1', 1, '2021-10-13', '1', '1', '1', 'default.png', '2021-10-19 15:43:13', '1', '2021-10-07', 'Ada', '1', '1', '1', '2021-10-05', 'Cacat Netra/Buta', '1', '1', NULL, '1'),
(3, 2, '2', '2', 1, 1, '2', 'Laki-Laki', 'pku', '2021-10-01', '2', 1, 2, 1, 1, 1, 1, 'Ada', 'Ada', 'Ada', '2', '2', '2', '2', 2, '2021-10-15', '2', '2', '2', 'hutao.jpeg', '2021-10-19 15:54:17', '2', '2021-09-29', 'Ada', '2', '2', '2', '2021-10-07', 'Cacat Fisik', '2', '2', NULL, '2'),
(4, 3, '3', '3', 1, 1, '3', 'Laki-Laki', '3', '2021-10-13', '3', 1, 1, 1, 1, 1, 1, 'Ada', 'Ada', 'Ada', '3', '3', '3', '3', 3, '2021-09-29', '3', '3', '3', '', '2021-10-19 15:57:59', '3', '2021-10-05', 'Ada', '3', '3', '3', '2021-10-06', 'Cacat Fisik', '3', '3', NULL, '3'),
(5, 4, '4', '4', 1, 1, '4', 'Laki-Laki', '4', '2021-10-07', '4', 1, 1, 1, 1, 1, 1, 'Ada', 'Ada', 'Ada', '4', '4', '4', '4', 4, '0000-00-00', '4', '4', '4', 'hutao.jpeg', '2021-10-19 16:59:55', '4', '2021-10-13', 'Ada', '4', '', '4', '2021-10-06', 'Cacat Fisik', '4', '4', NULL, '4');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `pgdn_id` int(5) NOT NULL,
  `usr_id` int(5) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `tp_id` int(10) NOT NULL,
  `pgdn_judul` varchar(255) NOT NULL,
  `pgdn_isi` text NOT NULL,
  `pgdn_gambar` varchar(100) NOT NULL,
  `pndk_nik` bigint(16) NOT NULL,
  `tanggapan` varchar(100) NOT NULL,
  `pgdn_tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `polling`
--

CREATE TABLE `polling` (
  `pol_id` int(10) NOT NULL,
  `pol_title` varchar(100) NOT NULL,
  `pol_ket` text NOT NULL,
  `status` varchar(255) NOT NULL
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
(1, 'Kepala Lurah'),
(2, 'Petugas Lurah');

-- --------------------------------------------------------

--
-- Table structure for table `rt`
--

CREATE TABLE `rt` (
  `rt_id` int(5) NOT NULL,
  `rw_id` int(5) NOT NULL,
  `rt_nama` varchar(50) DEFAULT NULL,
  `no_rt` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_tlp` varchar(50) DEFAULT NULL,
  `rt_foto` varchar(50) DEFAULT NULL,
  `periode` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rt`
--

INSERT INTO `rt` (`rt_id`, `rw_id`, `rt_nama`, `no_rt`, `alamat`, `no_tlp`, `rt_foto`, `periode`, `status`) VALUES
(1, 1, 'SAFRUDIN', '01', 'Jl. Utama No.01', '082172697643', NULL, NULL, NULL),
(2, 1, 'SANDRA EVA KISMAYA', '02', 'Jl. Utama Gg. Anugerah', '082274261284', NULL, NULL, NULL),
(3, 1, 'SUMADI, SH', '03', 'Jl. Mangkubumi Gg. Amal', '082288367595', NULL, NULL, NULL),
(4, 1, 'ABDUL HALIM', '04', 'Jl. Yossudarso Gg. Amal', '082284844101', NULL, NULL, NULL),
(5, 1, 'ROBERT HARAHAP, SH', '05', 'Jl. Utama Ujung', '085355235596', NULL, NULL, NULL),
(6, 1, 'SUDIONO', '06', 'Jl. Mangkubumi Gg. Pelita Taqwa', '081365771274', NULL, NULL, NULL),
(7, 2, 'SULARDI', '01', 'Jl. Berdikari', '082174261284', NULL, NULL, NULL),
(8, 2, 'AGUS TRIONO', '02', 'Jl. Mangkubumi', '085213733741', NULL, NULL, NULL),
(9, 2, 'AMIRUDDIN', '03', 'Jl. Berdikari Ujung  Gg. Pelita', '08126823970', NULL, NULL, NULL),
(10, 3, 'ZULFAHMI', '01', 'Jl Tegal Sari I', '085278133030', NULL, NULL, NULL),
(11, 3, 'SUYETNO', '02', 'Jl Tegal Sari II', '081261725692', NULL, NULL, NULL),
(12, 3, 'ARIEF YUDI PURNOMO', '03', 'Jl Tegal Sari III', '082172546212', NULL, NULL, NULL),
(13, 3, 'ASRIL TANJUNG', '04', 'Jl. Yossudarso', '085278930462', NULL, NULL, NULL),
(14, 3, 'IRSAL', '05', 'Jl. Tegal Sari', '', NULL, NULL, NULL),
(15, 3, 'PRAYITNO', '06', 'Jl. Berdikari Gg. Sersasi', '08127621769', NULL, NULL, NULL),
(16, 4, 'YONKE, S.HUT', '01', 'Jl. Budi Sari', '085265242411', NULL, NULL, NULL),
(17, 4, 'FREDY NASWANDI', '02', 'Jl. Budi Sari', '082169822475', NULL, NULL, NULL),
(18, 4, 'MOCHAMAD SJAID', '03', 'Jl. Rowo Sari Gg. Rambutan', '081371583221', NULL, NULL, NULL),
(19, 5, 'KARMAWADI SINAGA', '01', 'Jl. Tegal Sari Ujung Gg. Mekar Sari', '085265409323', NULL, NULL, NULL),
(20, 5, 'KHARIMULLAH TAMBUNAN', '02', 'Jl. Berdikari Gg. Memori', '08127620839', NULL, NULL, NULL),
(21, 5, 'MULIADI', '03', 'Jl. Berdikari Gg. Lestari', '081365736347', NULL, NULL, NULL),
(22, 5, 'SURYA NIRWANA', '04', 'Jl. Tegal Sari Ujung Gg. Mekar Sari', '081371252540', NULL, NULL, NULL),
(23, 5, 'PARWOTO', '05', 'Jl. Asparagas', '085271805418', NULL, NULL, NULL),
(24, 6, 'JOKO WARGONO', '01', 'Jl. Taman Sari', '085364247734', NULL, NULL, NULL),
(25, 6, 'INDRAHAYU, S.Sos', '02', 'Jl. Putih Sari', '', NULL, NULL, NULL),
(26, 6, 'FULIDODO ZENDRATO, S.Ap', '03', 'Jl. Kencana Sari', '', NULL, NULL, NULL),
(27, 7, 'ABI HURAIRA', '01', 'Jl.Pasir Sari', '085274520574', NULL, NULL, NULL),
(28, 7, '', '02', 'Jl.Bukit Sari', '081276337155', NULL, NULL, NULL),
(29, 7, '', '03', 'Jl.Bukit Sari', '082172250833', NULL, NULL, NULL),
(30, 8, 'SUPARMAN', '01', 'Jl.Geso IV', '082384399555', NULL, NULL, NULL),
(31, 8, 'NURMALA,S.pd', '02', 'Jl.Umban Sari Atas I', '082391381638', NULL, NULL, NULL),
(32, 8, 'A.KHAIRI', '03', 'Jl.Geso V Gg.Toyosari', '081275354100', NULL, NULL, NULL),
(33, 9, 'HAMDAN', '02', 'Jl.Datuk Panglima', '081371422026', NULL, NULL, NULL),
(34, 9, 'SAHAT SAGALA', '03', 'Jl.Putih Pungguk', '082173071183', NULL, NULL, NULL),
(35, 9, 'SYAFRIJON', '04', 'Jl.Gurindam XII', '081268121020', NULL, NULL, NULL),
(36, 9, 'Drs.ISKANDAR', '05', 'Jl.Siak II Perum Guru Cendana', '081276079822', NULL, NULL, NULL),
(37, 9, 'ZULHAM HARAHAP', '06', 'Jl.Padat Karya Perum. Griya Padat Karya', '081276139347', NULL, NULL, NULL),
(38, 10, 'SUTRISNO', '01', 'Jl. Geso X', '085363555353', NULL, NULL, NULL),
(39, 10, 'ROPAI', '02', 'Jl. Barito Sari', '08127616500', NULL, NULL, NULL),
(40, 10, 'RIO HARDI', '03', 'Jl. Geso X', '087770195444', NULL, NULL, NULL),
(41, 11, 'NINA NELMA YENTI, S.Pd', '01', 'Perum Aliyah Syifa', '', NULL, NULL, NULL),
(42, 11, 'AL AS\'ARI', '02', 'Perum Aliyah Syifa', '081374761179', NULL, NULL, NULL),
(43, 11, 'YUSNU WANDI', '03', 'Jl. Umban Sari Atas', '081365704402', NULL, NULL, NULL),
(44, 11, 'RIANTO SITUMORANG', '04', 'Jl. Toba Sari', '082173110311', NULL, NULL, NULL),
(45, 12, 'AGUS SAFAR, S.Pd', '01', 'Jl. Geso II', '08126827061', NULL, NULL, NULL),
(46, 12, 'PUTRA ADIN MARDEKA', '02', 'Jl. Pasir Perum. Sidimaco', '08127647686', NULL, NULL, NULL),
(47, 12, 'JUSWANDI', '03', 'Jl. Geso VI', '', NULL, NULL, NULL),
(48, 12, 'ISKANDAR, S.Sos', '04', 'Jl. Patria Sari V', '081268107888', NULL, NULL, NULL),
(49, 13, 'NISOM BUDIN', '01', 'Jl. Teratai Indah', '08127642723', NULL, NULL, NULL),
(50, 13, 'NUR KHAMDI', '02', 'Jl. Umban Sari Atas Perum. PCR', '082387743715', NULL, NULL, NULL),
(51, 13, 'MARTUJI', '03', 'Jl. Pintas Sari', '081378445164', NULL, NULL, NULL),
(52, 13, 'SAUT HUTAGAOL', '04', 'Jl. Teratai Indah', '081283356484', NULL, NULL, NULL),
(53, 13, 'ZULKIFLI. S', '05', 'Perum. Lancang Kuning Sejahtera', '08127630146', NULL, NULL, NULL),
(54, 9, '', '01', '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rw`
--

CREATE TABLE `rw` (
  `rw_id` int(5) NOT NULL,
  `no_rw` varchar(50) NOT NULL,
  `rw_nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_tlp` varchar(50) DEFAULT NULL,
  `rw_foto` varchar(50) DEFAULT NULL,
  `periode` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rw`
--

INSERT INTO `rw` (`rw_id`, `no_rw`, `rw_nama`, `alamat`, `no_tlp`, `rw_foto`, `periode`, `status`) VALUES
(1, '01', 'M. ALPARADI, M.Pd', 'Jl. Mangkubumi Gg. Pelita Taqwa', '085278685650', NULL, NULL, NULL),
(2, '02', 'RIMANTO', 'Jl. Mangkubumi', '081267059976', NULL, NULL, NULL),
(3, '03', 'AFRIZAL,M.SH', 'Jl. Tegal Sari III No.7', '082386917956', NULL, NULL, NULL),
(4, '04', 'SURIADIATMO', 'Jl. Umban Sari', '081365056588', NULL, NULL, NULL),
(5, '05', 'SYOPIAR, M.BSc', 'Jl. Tegal Sari Ujung Komp. BTN', '081371047762', NULL, NULL, NULL),
(6, '06', 'M. ZAM', 'Jl. Purnama Sari', '081268433699', NULL, NULL, NULL),
(7, '07', 'FULIDO ZENDRATO,S.Ap', 'Jl.Pasir Sari', '081275425259', NULL, NULL, NULL),
(8, '08', 'SUTARTO', 'Jl.Toyo Sari', '081266184640', NULL, NULL, NULL),
(9, '09', 'YULISMANAR', 'Jl.Padat Karya', '08127514456', NULL, NULL, NULL),
(10, '10', 'MARYULIS', 'Jl.Geso X', '085271712414', NULL, NULL, NULL),
(11, '11', 'RIO MASROHANI', 'Perum Aliyah Syifa', '085355241999', NULL, NULL, NULL),
(12, '12', 'FULIDODO ZENDRATO, S.Ap', 'Jl. Flamboyan', '', NULL, NULL, NULL),
(13, '13', 'SARIDI', 'Jl. Teratai Indah', '085365843382', NULL, NULL, NULL);

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
(1, 'Kepala Keluarga'),
(2, 'Suami'),
(3, 'Isteri'),
(4, 'Anak'),
(5, 'Menantu'),
(6, 'Cucu'),
(7, 'Orang Tua'),
(8, 'Mertua'),
(9, 'Famili Lain'),
(10, 'Pembantu'),
(11, 'Lainnya');

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
(1, 'Belum Kawin'),
(2, 'Kawin'),
(3, 'Cerai Hidup'),
(4, 'Cerai Mati');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `tp_id` int(10) NOT NULL,
  `tp_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`tp_id`, `tp_ket`) VALUES
(1, 'a'),
(2, 'b');

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
  `status` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usr_id`, `rl_id`, `usr_name`, `usr_pass`, `usr_fullname`, `usr_email`, `status`) VALUES
(5, 2, 'tes', '$2y$10$7cSP/kbxPUe2o4/cCIqKzeNIgldWzK0N4INJAbB7Rtccz7pVEcfoO', 'tes', 'tes@gmail.com', '1');

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
  ADD KEY `fk_st2` (`status`),
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
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`klhrn_id`),
  ADD KEY `klhrn_plpr_pkrj` (`plpr_pekerjaan`),
  ADD KEY `klhrn_sks_pkrj` (`sks_pekerjaan`);

--
-- Indexes for table `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`kmtn_id`),
  ADD KEY `kmtn_pkrj` (`kmtn_pekerjaan`),
  ADD KEY `kmtn_plpr_pkrj` (`plpr_pekerjaan`),
  ADD KEY `kmtn_sks_pkrj` (`sks_pekerjaan`),
  ADD KEY `kmtn_agm` (`kmtn_agama`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`kmtr_id`),
  ADD KEY `fk_st1` (`status`),
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
  ADD KEY `fk_rt_id` (`rt_id`),
  ADD KEY `fk_rw_id` (`rw_id`),
  ADD KEY `fk_agm_id` (`agm_id`),
  ADD KEY `fk_pnd_id` (`pnd_id`),
  ADD KEY `fk_pkrj_id` (`pkrj_id`),
  ADD KEY `fk_sts_hub_id` (`sts_hub_id`),
  ADD KEY `fk_stspnkn_id` (`stspnkn_id`),
  ADD KEY `fk_goldr_id` (`goldr_id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`pgdn_id`),
  ADD KEY `fk_st3` (`status`),
  ADD KEY `fk_tp` (`tp_id`),
  ADD KEY `fk_usr_id` (`usr_id`),
  ADD KEY `fk_pndk_nik` (`pndk_nik`);

--
-- Indexes for table `polling`
--
ALTER TABLE `polling`
  ADD PRIMARY KEY (`pol_id`),
  ADD KEY `fk_sts_id` (`status`);

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
-- Indexes for table `umkm_kat`
--
ALTER TABLE `umkm_kat`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`),
  ADD UNIQUE KEY `usr_email` (`usr_email`) USING HASH,
  ADD KEY `fk_rl_id` (`rl_id`),
  ADD KEY `fk_sts_id2` (`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `agm_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `goldr_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `klhrn_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kematian`
--
ALTER TABLE `kematian`
  MODIFY `kmtn_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `kmtr_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ortu`
--
ALTER TABLE `ortu`
  MODIFY `ortu_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `pkrj_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `pndk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `rt_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
-- AUTO_INCREMENT for table `sts_hub_kel`
--
ALTER TABLE `sts_hub_kel`
  MODIFY `sts_hub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sts_pernikahan`
--
ALTER TABLE `sts_pernikahan`
  MODIFY `stspnkn_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `tp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id_umkm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `umkm_kat`
--
ALTER TABLE `umkm_kat`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `fk_usr_id2` FOREIGN KEY (`usr_id`) REFERENCES `user` (`usr_id`);

--
-- Constraints for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD CONSTRAINT `klhrn_plpr_pkrj` FOREIGN KEY (`plpr_pekerjaan`) REFERENCES `pekerjaan` (`pkrj_id`),
  ADD CONSTRAINT `klhrn_sks_pkrj` FOREIGN KEY (`sks_pekerjaan`) REFERENCES `pekerjaan` (`pkrj_id`);

--
-- Constraints for table `kematian`
--
ALTER TABLE `kematian`
  ADD CONSTRAINT `kmtn_agm` FOREIGN KEY (`kmtn_agama`) REFERENCES `agama` (`agm_id`),
  ADD CONSTRAINT `kmtn_pkrj` FOREIGN KEY (`kmtn_pekerjaan`) REFERENCES `pekerjaan` (`pkrj_id`),
  ADD CONSTRAINT `kmtn_plpr_pkrj` FOREIGN KEY (`plpr_pekerjaan`) REFERENCES `pekerjaan` (`pkrj_id`),
  ADD CONSTRAINT `kmtn_sks_pkrj` FOREIGN KEY (`sks_pekerjaan`) REFERENCES `pekerjaan` (`pkrj_id`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_brt1` FOREIGN KEY (`brt_id`) REFERENCES `berita` (`brt_id`);

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `fk_agm_id` FOREIGN KEY (`agm_id`) REFERENCES `agama` (`agm_id`),
  ADD CONSTRAINT `fk_goldr_id` FOREIGN KEY (`goldr_id`) REFERENCES `gol_darah` (`goldr_id`),
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
  ADD CONSTRAINT `fk_tp` FOREIGN KEY (`tp_id`) REFERENCES `tipe` (`tp_id`),
  ADD CONSTRAINT `fk_usr_id` FOREIGN KEY (`usr_id`) REFERENCES `user` (`usr_id`);

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
-- Constraints for table `umkm`
--
ALTER TABLE `umkm`
  ADD CONSTRAINT `umkm_id_kat` FOREIGN KEY (`id_kat`) REFERENCES `umkm_kat` (`id_kat`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_rl_id` FOREIGN KEY (`rl_id`) REFERENCES `role` (`rl_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
