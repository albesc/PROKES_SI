-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 06:03 AM
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
(1, 'islam');

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
(1, 'A');

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
(1, 'Wiraswasta');

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
(1, 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `pndk_id` int(10) NOT NULL,
  `pndk_nik` bigint(16) NOT NULL,
  `rt_id` int(5) NOT NULL,
  `rw_id` int(5) NOT NULL,
  `pndk_fullname` varchar(100) NOT NULL,
  `pndk_jk` varchar(100) NOT NULL,
  `pndk_tmp_lahir` varchar(100) NOT NULL,
  `pndk_tgl_lahir` date NOT NULL,
  `agm_id` int(5) NOT NULL,
  `goldr_id` int(5) NOT NULL,
  `pnd_id` int(5) NOT NULL,
  `pkrj_id` int(5) NOT NULL,
  `sts_hub_id` int(5) NOT NULL,
  `stspnkn_id` int(5) NOT NULL,
  `kwgn_id` int(5) NOT NULL,
  `jnsasn_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`pndk_id`, `pndk_nik`, `rt_id`, `rw_id`, `pndk_fullname`, `pndk_jk`, `pndk_tmp_lahir`, `pndk_tgl_lahir`, `agm_id`, `goldr_id`, `pnd_id`, `pkrj_id`, `sts_hub_id`, `stspnkn_id`, `kwgn_id`, `jnsasn_id`) VALUES
(1, 123, 1, 1, 'Akhes Stauper', 'Laki-laki', 'Pekanbaru', '2001-11-24', 1, 1, 1, 1, 1, 1, 1, 1);

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
  `pgdn_gambar` varchar(100) NOT NULL
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
(2, 'petugas_lurah'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `rt`
--

CREATE TABLE `rt` (
  `rt_id` int(5) NOT NULL,
  `rt_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rt`
--

INSERT INTO `rt` (`rt_id`, `rt_ket`) VALUES
(1, '01');

-- --------------------------------------------------------

--
-- Table structure for table `rw`
--

CREATE TABLE `rw` (
  `rw_id` int(5) NOT NULL,
  `rw_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rw`
--

INSERT INTO `rw` (`rw_id`, `rw_ket`) VALUES
(1, '01');

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
(1, 0, 'Lurah'),
(2, 0, 'Petugas Lurah');

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
(1, 'Anak');

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
(1, 'Kawin');

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
(1, 2, 'tes', '$2y$10$6q2xwl.u/b/mJYRXSN0xGeBSeLtkhC8RKLeAUisdHzp7u2ULT1Ilm', 'testes', 'tes@gmail.com', 2);

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
  ADD KEY `fk_kwgn_id` (`kwgn_id`),
  ADD KEY `fk_jnsasn_id` (`jnsasn_id`),
  ADD KEY `fk_goldr_id` (`goldr_id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`pgdn_id`),
  ADD KEY `fk_st3` (`sts_id`),
  ADD KEY `fk_tp` (`tp_id`),
  ADD KEY `fk_usr_id` (`usr_id`);

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
  ADD PRIMARY KEY (`rt_id`);

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
  MODIFY `agm_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `goldr_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `kmtr_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `pkrj_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `pndk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `sts_hub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sts_pernikahan`
--
ALTER TABLE `sts_pernikahan`
  MODIFY `stspnkn_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `tp_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `fk_st3` FOREIGN KEY (`sts_id`) REFERENCES `status` (`sts_id`),
  ADD CONSTRAINT `fk_tp` FOREIGN KEY (`tp_id`) REFERENCES `tipe` (`tp_id`),
  ADD CONSTRAINT `fk_usr_id` FOREIGN KEY (`usr_id`) REFERENCES `user` (`usr_id`);

--
-- Constraints for table `polling`
--
ALTER TABLE `polling`
  ADD CONSTRAINT `fk_sts_id` FOREIGN KEY (`sts_id`) REFERENCES `status` (`sts_id`);

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
