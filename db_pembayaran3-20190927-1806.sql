-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 27, 2019 at 01:05 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pembayaran3`
--

-- --------------------------------------------------------

--
-- Table structure for table `t001_tahun_ajaran`
--

CREATE TABLE `t001_tahun_ajaran` (
  `id` int(11) NOT NULL,
  `Mulai` varchar(4) NOT NULL,
  `Selesai` varchar(4) NOT NULL,
  `Aktif` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t001_tahun_ajaran`
--

INSERT INTO `t001_tahun_ajaran` (`id`, `Mulai`, `Selesai`, `Aktif`) VALUES
(1, '2019', '2020', '1'),
(2, '2018', '2019', '0');

-- --------------------------------------------------------

--
-- Table structure for table `t002_sekolah`
--

CREATE TABLE `t002_sekolah` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` text NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t002_sekolah`
--

INSERT INTO `t002_sekolah` (`id`, `Nama`, `Alamat`) VALUES
(1, 'MINU KARAKTER', '-'),
(2, 'MINU UNGGULAN', '-');

-- --------------------------------------------------------

--
-- Table structure for table `t003_kelas`
--

CREATE TABLE `t003_kelas` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t003_kelas`
--

INSERT INTO `t003_kelas` (`id`, `Nama`) VALUES
(1, 'I - KH. BISRI SYANSURI'),
(2, 'I - KH. WACHID HASYIM'),
(3, 'II - KH. ILYAS RUCHIYAT'),
(4, 'II - KH. R. ASNAWI'),
(5, 'III - KH. IDHAM CHOLID'),
(6, 'III - KH. ZAENAL ARIFIN'),
(7, 'IV - KH. ZAENUL MUSTHOFA'),
(8, 'IV - KH.HASYIM ASYARI');

-- --------------------------------------------------------

--
-- Table structure for table `t004_siswa`
--

CREATE TABLE `t004_siswa` (
  `id` int(11) NOT NULL,
  `NomorInduk` varchar(25) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t004_siswa`
--

INSERT INTO `t004_siswa` (`id`, `NomorInduk`, `Nama`) VALUES
(1, '0001', 'Ahmad Ziyad Alfahri'),
(2, '0015', 'Filzah Zalfa Azzahra'),
(3, '0016', 'Herdhianti Ainun Rakhima');

-- --------------------------------------------------------

--
-- Table structure for table `t005_iuran`
--

CREATE TABLE `t005_iuran` (
  `id` int(11) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Jenis` enum('Rutin','Non-Rutin') NOT NULL DEFAULT 'Rutin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t005_iuran`
--

INSERT INTO `t005_iuran` (`id`, `Nama`, `Jenis`) VALUES
(1, 'SPP', 'Rutin'),
(2, 'Catering', 'Rutin'),
(3, 'Worksheet', 'Rutin'),
(4, 'Beasiswa', 'Rutin'),
(5, 'Dana SPM BP3MNU', 'Non-Rutin'),
(6, 'Daftar Ulang', 'Non-Rutin');

-- --------------------------------------------------------

--
-- Table structure for table `t101_daf_kelas`
--

CREATE TABLE `t101_daf_kelas` (
  `id` int(11) NOT NULL,
  `tahun_ajaran_id` int(11) NOT NULL,
  `sekolah_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t101_daf_kelas`
--

INSERT INTO `t101_daf_kelas` (`id`, `tahun_ajaran_id`, `sekolah_id`, `kelas_id`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `t102_daf_kelas_siswa`
--

CREATE TABLE `t102_daf_kelas_siswa` (
  `id` int(11) NOT NULL,
  `daf_kelas_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t102_daf_kelas_siswa`
--

INSERT INTO `t102_daf_kelas_siswa` (`id`, `daf_kelas_id`, `siswa_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `t103_daf_kelas_siswa_iuran`
--

CREATE TABLE `t103_daf_kelas_siswa_iuran` (
  `id` int(11) NOT NULL,
  `daf_kelas_siswa_id` int(11) NOT NULL,
  `iuran_id` int(11) NOT NULL,
  `Jumlah` float(14,2) NOT NULL,
  `byr01` enum('0','1') NOT NULL DEFAULT '0',
  `jml01` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl01` date DEFAULT NULL,
  `byr02` enum('0','1') NOT NULL DEFAULT '0',
  `jml02` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl02` date DEFAULT NULL,
  `byr03` enum('0','1') NOT NULL DEFAULT '0',
  `jml03` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl03` date DEFAULT NULL,
  `byr04` enum('0','1') NOT NULL DEFAULT '0',
  `jml04` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl04` date DEFAULT NULL,
  `byr05` enum('0','1') NOT NULL DEFAULT '0',
  `jml05` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl05` date DEFAULT NULL,
  `byr06` enum('0','1') NOT NULL DEFAULT '0',
  `jml06` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl06` date DEFAULT NULL,
  `byr07` enum('0','1') NOT NULL DEFAULT '0',
  `jml07` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl07` date DEFAULT NULL,
  `byr08` enum('0','1') NOT NULL DEFAULT '0',
  `jml08` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl08` date DEFAULT NULL,
  `byr09` enum('0','1') NOT NULL DEFAULT '0',
  `jml09` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl09` date DEFAULT NULL,
  `byr10` enum('0','1') NOT NULL DEFAULT '0',
  `jml10` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl10` date DEFAULT NULL,
  `byr11` enum('0','1') NOT NULL DEFAULT '0',
  `jml11` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl11` date DEFAULT NULL,
  `byr12` enum('0','1') NOT NULL DEFAULT '0',
  `jml12` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl12` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t103_daf_kelas_siswa_iuran`
--

INSERT INTO `t103_daf_kelas_siswa_iuran` (`id`, `daf_kelas_siswa_id`, `iuran_id`, `Jumlah`, `byr01`, `jml01`, `tgl01`, `byr02`, `jml02`, `tgl02`, `byr03`, `jml03`, `tgl03`, `byr04`, `jml04`, `tgl04`, `byr05`, `jml05`, `tgl05`, `byr06`, `jml06`, `tgl06`, `byr07`, `jml07`, `tgl07`, `byr08`, `jml08`, `tgl08`, `byr09`, `jml09`, `tgl09`, `byr10`, `jml10`, `tgl10`, `byr11`, `jml11`, `tgl11`, `byr12`, `jml12`, `tgl12`) VALUES
(1, 1, 1, 170000.00, '1', 170000.00, '2019-09-10', '1', 170000.00, '2019-09-10', '1', 170000.00, '2019-09-11', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(2, 1, 2, 145000.00, '1', 145000.00, '2019-09-10', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(3, 1, 3, 45000.00, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(4, 2, 1, 170000.00, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(5, 3, 1, 170000.00, '1', 170000.00, '2019-09-26', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(6, 3, 2, 145000.00, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t301_employees`
--

CREATE TABLE `t301_employees` (
  `EmployeeID` int(11) NOT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `FirstName` varchar(10) DEFAULT NULL,
  `Title` varchar(30) DEFAULT NULL,
  `TitleOfCourtesy` varchar(25) DEFAULT NULL,
  `BirthDate` datetime DEFAULT NULL,
  `HireDate` datetime DEFAULT NULL,
  `Address` varchar(60) DEFAULT NULL,
  `City` varchar(15) DEFAULT NULL,
  `Region` varchar(15) DEFAULT NULL,
  `PostalCode` varchar(10) DEFAULT NULL,
  `Country` varchar(15) DEFAULT NULL,
  `HomePhone` varchar(24) DEFAULT NULL,
  `Extension` varchar(4) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Notes` longtext DEFAULT NULL,
  `ReportsTo` int(11) DEFAULT NULL,
  `Password` varchar(50) NOT NULL DEFAULT '',
  `UserLevel` int(11) DEFAULT NULL,
  `Username` varchar(20) NOT NULL DEFAULT '',
  `Activated` enum('Y','N') NOT NULL DEFAULT 'N',
  `Profile` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t301_employees`
--

INSERT INTO `t301_employees` (`EmployeeID`, `LastName`, `FirstName`, `Title`, `TitleOfCourtesy`, `BirthDate`, `HireDate`, `Address`, `City`, `Region`, `PostalCode`, `Country`, `HomePhone`, `Extension`, `Email`, `Photo`, `Notes`, `ReportsTo`, `Password`, `UserLevel`, `Username`, `Activated`, `Profile`) VALUES
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', -1, 'admin', 'Y', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t302_userlevels`
--

CREATE TABLE `t302_userlevels` (
  `userlevelid` int(11) NOT NULL,
  `userlevelname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t302_userlevels`
--

INSERT INTO `t302_userlevels` (`userlevelid`, `userlevelname`) VALUES
(-2, 'Anonymous'),
(-1, 'Administrator'),
(0, 'Default');

-- --------------------------------------------------------

--
-- Table structure for table `t303_userlevelpermissions`
--

CREATE TABLE `t303_userlevelpermissions` (
  `userlevelid` int(11) NOT NULL,
  `tablename` varchar(255) NOT NULL,
  `permission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t303_userlevelpermissions`
--

INSERT INTO `t303_userlevelpermissions` (`userlevelid`, `tablename`, `permission`) VALUES
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}c301_home.php', 72),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t001_tahun_ajaran', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t002_sekolah', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t003_kelas', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t004_siswa', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t005_iuran', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t101_daf_kelas', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t102_daf_kelas_siswa', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t103_daf_kelas_siswa_iuran', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t104_daf_kelas_siswa_bayar', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t301_employees', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t302_userlevels', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t303_userlevelpermissions', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t304_audittrail', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}c301_home.php', 72),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t001_tahun_ajaran', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t002_sekolah', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t003_kelas', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t004_siswa', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t005_iuran', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t101_daf_kelas', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t102_daf_kelas_siswa', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t103_daf_kelas_siswa_iuran', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t104_daf_kelas_siswa_bayar', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t301_employees', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t302_userlevels', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t303_userlevelpermissions', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t304_audittrail', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}c301_home.php', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t001_tahun_ajaran', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t002_sekolah', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t003_kelas', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t004_siswa', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t005_iuran', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t101_daftar_absen', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t102_daftar_iuran', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t103_daftar_pembayaran', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t301_employees', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t302_userlevels', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t303_userlevelpermissions', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t304_audittrail', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}c301_home.php', 111),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t001_tahun_ajaran', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t002_sekolah', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t003_kelas', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t004_siswa', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t005_iuran', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t101_daf_kelas', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t102_daf_kelas_siswa', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t103_daf_kelas_siswa_iuran', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t301_employees', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t302_userlevels', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t303_userlevelpermissions', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t304_audit_trail', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v101_daf_kelas', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v102_daf_kelas_siswa', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v103_daf_kelas_siswa_iuran', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v104_pembayaran', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v105_lap_bayar', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}c301_home.php', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t001_tahun_ajaran', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t002_sekolah', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t003_kelas', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t004_siswa', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t005_iuran', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t101_daf_kelas', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t102_daf_kelas_siswa', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t103_daf_kelas_siswa_iuran', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t104_daf_kelas_siswa_bayar', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t301_employees', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t302_userlevels', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t303_userlevelpermissions', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t304_audittrail', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}c301_home.php', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t001_tahun_ajaran', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t002_sekolah', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t003_kelas', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t004_siswa', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t005_iuran', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t101_daf_kelas', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t102_daf_kelas_siswa', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t103_daf_kelas_siswa_iuran', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t104_daf_kelas_siswa_bayar', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t301_employees', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t302_userlevels', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t303_userlevelpermissions', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t304_audittrail', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}c301_home.php', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t001_tahun_ajaran', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t002_sekolah', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t003_kelas', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t004_siswa', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t005_iuran', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t101_daftar_absen', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t102_daftar_iuran', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t103_daftar_pembayaran', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t301_employees', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t302_userlevels', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t303_userlevelpermissions', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t304_audittrail', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}c301_home.php', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t001_tahun_ajaran', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t002_sekolah', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t003_kelas', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t004_siswa', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t005_iuran', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t101_daf_kelas', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t102_daf_kelas_siswa', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t103_daf_kelas_siswa_iuran', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t301_employees', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t302_userlevels', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t303_userlevelpermissions', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t304_audit_trail', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v101_daf_kelas', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v102_daf_kelas_siswa', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v103_daf_kelas_siswa_iuran', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v104_pembayaran', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v105_lap_bayar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t304_audit_trail`
--

CREATE TABLE `t304_audit_trail` (
  `id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `script` varchar(80) DEFAULT NULL,
  `user` varchar(80) DEFAULT NULL,
  `action` varchar(80) DEFAULT NULL,
  `table` varchar(80) DEFAULT NULL,
  `field` varchar(80) DEFAULT NULL,
  `keyvalue` longtext DEFAULT NULL,
  `oldvalue` longtext DEFAULT NULL,
  `newvalue` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t304_audit_trail`
--

INSERT INTO `t304_audit_trail` (`id`, `datetime`, `script`, `user`, `action`, `table`, `field`, `keyvalue`, `oldvalue`, `newvalue`) VALUES
(1, '2019-09-25 13:50:02', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(2, '2019-09-25 16:21:47', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(3, '2019-09-26 10:38:51', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(4, '2019-09-26 10:39:50', '/pembayaran3.1/logout.php', 'admin', 'logout', '::1', '', '', '', ''),
(5, '2019-09-26 11:13:20', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(6, '2019-09-26 11:14:06', '/pembayaran3.1/logout.php', 'admin', 'logout', '::1', '', '', '', ''),
(7, '2019-09-26 11:19:46', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(8, '2019-09-26 11:19:58', '/pembayaran3.1/logout.php', 'admin', 'logout', '::1', '', '', '', ''),
(9, '2019-09-26 11:25:40', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(10, '2019-09-26 11:26:28', '/pembayaran3.1/logout.php', 'admin', 'logout', '::1', '', '', '', ''),
(11, '2019-09-26 11:26:43', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(12, '2019-09-26 11:26:52', '/pembayaran3.1/logout.php', 'admin', 'logout', '::1', '', '', '', ''),
(13, '2019-09-26 11:30:42', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(14, '2019-09-26 11:30:52', '/pembayaran3.1/logout.php', 'admin', 'logout', '::1', '', '', '', ''),
(15, '2019-09-26 11:32:18', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(16, '2019-09-26 11:56:05', '/pembayaran3.1/logout.php', 'admin', 'logout', '::1', '', '', '', ''),
(17, '2019-09-26 12:00:14', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(18, '2019-09-26 12:00:19', '/pembayaran3.1/logout.php', 'admin', 'logout', '::1', '', '', '', ''),
(19, '2019-09-26 12:01:18', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(20, '2019-09-26 12:07:14', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(21, '2019-09-26 12:39:49', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(22, '2019-09-26 13:21:09', '/pembayaran3.1/t004_siswaadd.php', '11', 'A', 't004_siswa', 'NomorInduk', '3', '', '0016'),
(23, '2019-09-26 13:21:09', '/pembayaran3.1/t004_siswaadd.php', '11', 'A', 't004_siswa', 'Nama', '3', '', 'Herdhianti Ainun Rakhima'),
(24, '2019-09-26 13:21:09', '/pembayaran3.1/t004_siswaadd.php', '11', 'A', 't004_siswa', 'id', '3', '', '3'),
(25, '2019-09-26 13:21:29', '/pembayaran3.1/t102_daf_kelas_siswalist.php', '11', '*** Batch insert begin ***', 't102_daf_kelas_siswa', '', '', '', ''),
(26, '2019-09-26 13:21:29', '/pembayaran3.1/t102_daf_kelas_siswalist.php', '11', 'A', 't102_daf_kelas_siswa', 'siswa_id', '3', '', '3'),
(27, '2019-09-26 13:21:29', '/pembayaran3.1/t102_daf_kelas_siswalist.php', '11', 'A', 't102_daf_kelas_siswa', 'daf_kelas_id', '3', '', '1'),
(28, '2019-09-26 13:21:29', '/pembayaran3.1/t102_daf_kelas_siswalist.php', '11', 'A', 't102_daf_kelas_siswa', 'id', '3', '', '3'),
(29, '2019-09-26 13:21:29', '/pembayaran3.1/t102_daf_kelas_siswalist.php', '11', '*** Batch insert successful ***', 't102_daf_kelas_siswa', '', '', '', ''),
(30, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'iuran_id', '5', '', '1'),
(31, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'Jumlah', '5', '', '170000'),
(32, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml01', '5', '', '0'),
(33, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl01', '5', '', NULL),
(34, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml02', '5', '', '0'),
(35, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl02', '5', '', NULL),
(36, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml03', '5', '', '0'),
(37, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl03', '5', '', NULL),
(38, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml04', '5', '', '0'),
(39, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl04', '5', '', NULL),
(40, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml05', '5', '', '0'),
(41, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl05', '5', '', NULL),
(42, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml06', '5', '', '0'),
(43, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl06', '5', '', NULL),
(44, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml07', '5', '', '0'),
(45, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl07', '5', '', NULL),
(46, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml08', '5', '', '0'),
(47, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl08', '5', '', NULL),
(48, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml09', '5', '', '0'),
(49, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl09', '5', '', NULL),
(50, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml10', '5', '', '0'),
(51, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl10', '5', '', NULL),
(52, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml11', '5', '', '0'),
(53, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl11', '5', '', NULL),
(54, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml12', '5', '', '0'),
(55, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl12', '5', '', NULL),
(56, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'daf_kelas_siswa_id', '5', '', '3'),
(57, '2019-09-26 15:30:26', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'id', '5', '', '5'),
(58, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', '*** Batch insert begin ***', 't103_daf_kelas_siswa_iuran', '', '', '', ''),
(59, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'iuran_id', '6', '', '2'),
(60, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'Jumlah', '6', '', '145000'),
(61, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml01', '6', '', '145000'),
(62, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl01', '6', '', NULL),
(63, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml02', '6', '', '145000'),
(64, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl02', '6', '', NULL),
(65, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml03', '6', '', '145000'),
(66, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl03', '6', '', NULL),
(67, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml04', '6', '', '145000'),
(68, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl04', '6', '', NULL),
(69, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml05', '6', '', '145000'),
(70, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl05', '6', '', NULL),
(71, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml06', '6', '', '145000'),
(72, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl06', '6', '', NULL),
(73, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml07', '6', '', '145000'),
(74, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl07', '6', '', NULL),
(75, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml08', '6', '', '145000'),
(76, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl08', '6', '', NULL),
(77, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml09', '6', '', '145000'),
(78, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl09', '6', '', NULL),
(79, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml10', '6', '', '145000'),
(80, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl10', '6', '', NULL),
(81, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml11', '6', '', '145000'),
(82, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl11', '6', '', NULL),
(83, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml12', '6', '', '145000'),
(84, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl12', '6', '', NULL),
(85, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'daf_kelas_siswa_id', '6', '', '3'),
(86, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'id', '6', '', '6'),
(87, '2019-09-26 15:33:38', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', '*** Batch insert successful ***', 't103_daf_kelas_siswa_iuran', '', '', '', ''),
(88, '2019-09-26 15:35:16', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'jml01', '5', '0.00', '170000'),
(89, '2019-09-26 15:35:16', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'jml02', '5', '0.00', '170000'),
(90, '2019-09-26 15:35:16', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'jml03', '5', '0.00', '170000'),
(91, '2019-09-26 15:35:16', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'jml04', '5', '0.00', '170000'),
(92, '2019-09-26 15:35:16', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'jml05', '5', '0.00', '170000'),
(93, '2019-09-26 15:35:16', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'jml06', '5', '0.00', '170000'),
(94, '2019-09-26 15:35:16', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'jml07', '5', '0.00', '170000'),
(95, '2019-09-26 15:35:16', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'jml08', '5', '0.00', '170000'),
(96, '2019-09-26 15:35:16', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'jml09', '5', '0.00', '170000'),
(97, '2019-09-26 15:35:16', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'jml10', '5', '0.00', '170000'),
(98, '2019-09-26 15:35:16', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'jml11', '5', '0.00', '170000'),
(99, '2019-09-26 15:35:16', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'jml12', '5', '0.00', '170000'),
(100, '2019-09-26 16:19:11', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', '*** Batch update begin ***', 't103_daf_kelas_siswa_iuran', '', '', '', ''),
(101, '2019-09-26 16:19:11', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'byr01', '5', '0', '1'),
(102, '2019-09-26 16:19:11', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'tgl01', '5', NULL, '2019-09-26'),
(103, '2019-09-26 16:19:11', '/pembayaran3.1/t103_daf_kelas_siswa_iuranlist.php', '11', '*** Batch update successful ***', 't103_daf_kelas_siswa_iuran', '', '', '', ''),
(104, '2019-09-27 09:35:03', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(105, '2019-09-27 10:22:09', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(106, '2019-09-27 10:33:59', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(107, '2019-09-27 10:36:35', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', ''),
(108, '2019-09-27 13:57:48', '/pembayaran3.1/login.php', 'admin', 'login', '::1', '', '', '', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v101_daf_kelas`
-- (See below for the actual view)
--
CREATE TABLE `v101_daf_kelas` (
`id` int(11)
,`tahun_ajaran_id` int(11)
,`sekolah_id` int(11)
,`kelas_id` int(11)
,`tsk` varchar(113)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v102_daf_kelas_siswa`
-- (See below for the actual view)
--
CREATE TABLE `v102_daf_kelas_siswa` (
`id` int(11)
,`daf_kelas_id` int(11)
,`siswa_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v103_daf_kelas_siswa_iuran`
-- (See below for the actual view)
--
CREATE TABLE `v103_daf_kelas_siswa_iuran` (
`siswa_id` int(11)
,`NomorInduk` varchar(25)
,`Nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v104_pembayaran`
-- (See below for the actual view)
--
CREATE TABLE `v104_pembayaran` (
`id` int(11)
,`daf_kelas_siswa_id` int(11)
,`iuran_id` int(11)
,`Jumlah` float(14,2)
,`Periode` int(2)
,`PeriodeBulan` varchar(9)
,`StatusBayar` varchar(1)
,`JumlahBayar` float(14,2)
,`TglBayar` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v105_lap_bayar`
-- (See below for the actual view)
--
CREATE TABLE `v105_lap_bayar` (
`daf_kelas_siswa_id` int(11)
,`iuran_id` int(11)
,`Jumlah` float(14,2)
,`Periode` int(2)
,`PeriodeBulan` varchar(9)
,`StatusBayar` varchar(1)
,`JumlahBayar` float(14,2)
,`TglBayar` date
,`siswa_id` int(11)
,`NomorInduk` varchar(25)
,`SiswaNama` varchar(50)
,`dk_id` int(11)
,`kelas_id` int(11)
,`KelasNama` varchar(50)
,`sekolah_id` int(11)
,`SekolahNama` varchar(50)
,`tahun_ajaran_id` int(11)
,`TahunAjaran` varchar(9)
,`IuranNama` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v106_tunggakan`
-- (See below for the actual view)
--
CREATE TABLE `v106_tunggakan` (
`id` int(11)
,`daf_kelas_siswa_id` int(11)
,`iuran_id` int(11)
,`Jumlah` float(14,2)
,`Periode` int(2)
,`PeriodeBulan` varchar(9)
,`StatusBayar` varchar(1)
,`JumlahBayar` float(14,2)
,`TglBayar` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v107_lap_tunggak`
-- (See below for the actual view)
--
CREATE TABLE `v107_lap_tunggak` (
`daf_kelas_siswa_id` int(11)
,`iuran_id` int(11)
,`Jumlah` float(14,2)
,`Periode` int(2)
,`PeriodeBulan` varchar(9)
,`StatusBayar` varchar(1)
,`JumlahBayar` float(14,2)
,`TglBayar` date
,`siswa_id` int(11)
,`NomorInduk` varchar(25)
,`SiswaNama` varchar(50)
,`dk_id` int(11)
,`kelas_id` int(11)
,`KelasNama` varchar(50)
,`sekolah_id` int(11)
,`SekolahNama` varchar(50)
,`tahun_ajaran_id` int(11)
,`TahunAjaran` varchar(9)
,`IuranNama` varchar(25)
,`PeriodeNow` int(2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v108_lap_um`
-- (See below for the actual view)
--
CREATE TABLE `v108_lap_um` (
`tahunajaran` varchar(9)
,`sekolahnama` varchar(50)
,`kelasnama` varchar(50)
,`iurannama` varchar(25)
,`iuran_id` int(11)
,`jumlah_total` double(19,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v109_lap_pum`
-- (See below for the actual view)
--
CREATE TABLE `v109_lap_pum` (
`tahunajaran` varchar(9)
,`sekolahnama` varchar(50)
,`kelasnama` varchar(50)
,`iuran_id` int(11)
,`iurannama` varchar(25)
,`jumlah_total` double(19,2)
);

-- --------------------------------------------------------

--
-- Structure for view `v101_daf_kelas`
--
DROP TABLE IF EXISTS `v101_daf_kelas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v101_daf_kelas`  AS  select `dk`.`id` AS `id`,`dk`.`tahun_ajaran_id` AS `tahun_ajaran_id`,`dk`.`sekolah_id` AS `sekolah_id`,`dk`.`kelas_id` AS `kelas_id`,concat(`kls`.`Nama`,', ',`sklh`.`Nama`,', ',`ta`.`Mulai`,'/',`ta`.`Selesai`) AS `tsk` from (((`t101_daf_kelas` `dk` left join `t001_tahun_ajaran` `ta` on(`dk`.`tahun_ajaran_id` = `ta`.`id`)) left join `t002_sekolah` `sklh` on(`dk`.`sekolah_id` = `sklh`.`id`)) left join `t003_kelas` `kls` on(`dk`.`kelas_id` = `kls`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v102_daf_kelas_siswa`
--
DROP TABLE IF EXISTS `v102_daf_kelas_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v102_daf_kelas_siswa`  AS  select `t102_daf_kelas_siswa`.`id` AS `id`,`t102_daf_kelas_siswa`.`daf_kelas_id` AS `daf_kelas_id`,`t102_daf_kelas_siswa`.`siswa_id` AS `siswa_id` from `t102_daf_kelas_siswa` ;

-- --------------------------------------------------------

--
-- Structure for view `v103_daf_kelas_siswa_iuran`
--
DROP TABLE IF EXISTS `v103_daf_kelas_siswa_iuran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v103_daf_kelas_siswa_iuran`  AS  select `dks`.`siswa_id` AS `siswa_id`,`siswa`.`NomorInduk` AS `NomorInduk`,`siswa`.`Nama` AS `Nama` from (`t102_daf_kelas_siswa` `dks` left join `t004_siswa` `siswa` on(`dks`.`siswa_id` = `siswa`.`id`)) where `dks`.`id` in (select `t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` from `t103_daf_kelas_siswa_iuran`) ;

-- --------------------------------------------------------

--
-- Structure for view `v104_pembayaran`
--
DROP TABLE IF EXISTS `v104_pembayaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v104_pembayaran`  AS  select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,1 AS `Periode`,'Juli     ' AS `PeriodeBulan`,`t103_daf_kelas_siswa_iuran`.`byr01` AS `StatusBayar`,`t103_daf_kelas_siswa_iuran`.`jml01` AS `JumlahBayar`,`t103_daf_kelas_siswa_iuran`.`tgl01` AS `TglBayar` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr01` = '1' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,2 AS `2`,'Agustus  ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr02` AS `byr02`,`t103_daf_kelas_siswa_iuran`.`jml02` AS `jml02`,`t103_daf_kelas_siswa_iuran`.`tgl02` AS `tgl02` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr02` = '1' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,3 AS `3`,'September' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr03` AS `byr03`,`t103_daf_kelas_siswa_iuran`.`jml03` AS `jml03`,`t103_daf_kelas_siswa_iuran`.`tgl03` AS `tgl03` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr03` = '1' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,4 AS `4`,'Oktober  ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr04` AS `byr04`,`t103_daf_kelas_siswa_iuran`.`jml04` AS `jml04`,`t103_daf_kelas_siswa_iuran`.`tgl04` AS `tgl04` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr04` = '1' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,5 AS `5`,'November ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr05` AS `byr05`,`t103_daf_kelas_siswa_iuran`.`jml05` AS `jml05`,`t103_daf_kelas_siswa_iuran`.`tgl05` AS `tgl05` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr05` = '1' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,6 AS `6`,'Desember ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr06` AS `byr06`,`t103_daf_kelas_siswa_iuran`.`jml06` AS `jml06`,`t103_daf_kelas_siswa_iuran`.`tgl06` AS `tgl06` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr06` = '1' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,7 AS `7`,'Januari  ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr07` AS `byr06`,`t103_daf_kelas_siswa_iuran`.`jml07` AS `jml06`,`t103_daf_kelas_siswa_iuran`.`tgl07` AS `tgl06` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr07` = '1' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,8 AS `8`,'Februari ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr08` AS `byr06`,`t103_daf_kelas_siswa_iuran`.`jml08` AS `jml06`,`t103_daf_kelas_siswa_iuran`.`tgl08` AS `tgl06` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr08` = '1' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,9 AS `9`,'Maret    ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr09` AS `byr06`,`t103_daf_kelas_siswa_iuran`.`jml09` AS `jml06`,`t103_daf_kelas_siswa_iuran`.`tgl09` AS `tgl06` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr09` = '1' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,10 AS `10`,'April    ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr10` AS `byr06`,`t103_daf_kelas_siswa_iuran`.`jml10` AS `jml06`,`t103_daf_kelas_siswa_iuran`.`tgl10` AS `tgl06` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr10` = '1' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,11 AS `11`,'Mei      ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr11` AS `byr06`,`t103_daf_kelas_siswa_iuran`.`jml11` AS `jml06`,`t103_daf_kelas_siswa_iuran`.`tgl11` AS `tgl06` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr11` = '1' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,12 AS `12`,'Juni     ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr12` AS `byr06`,`t103_daf_kelas_siswa_iuran`.`jml12` AS `jml06`,`t103_daf_kelas_siswa_iuran`.`tgl12` AS `tgl06` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr12` = '1' order by `id`,`daf_kelas_siswa_id`,`iuran_id`,`Periode` ;

-- --------------------------------------------------------

--
-- Structure for view `v105_lap_bayar`
--
DROP TABLE IF EXISTS `v105_lap_bayar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v105_lap_bayar`  AS  select `byr`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`byr`.`iuran_id` AS `iuran_id`,`byr`.`Jumlah` AS `Jumlah`,`byr`.`Periode` AS `Periode`,`byr`.`PeriodeBulan` AS `PeriodeBulan`,`byr`.`StatusBayar` AS `StatusBayar`,`byr`.`JumlahBayar` AS `JumlahBayar`,`byr`.`TglBayar` AS `TglBayar`,`dks`.`siswa_id` AS `siswa_id`,`sis`.`NomorInduk` AS `NomorInduk`,`sis`.`Nama` AS `SiswaNama`,`dk`.`id` AS `dk_id`,`dk`.`kelas_id` AS `kelas_id`,`kls`.`Nama` AS `KelasNama`,`dk`.`sekolah_id` AS `sekolah_id`,`sklh`.`Nama` AS `SekolahNama`,`dk`.`tahun_ajaran_id` AS `tahun_ajaran_id`,concat(`ta`.`Mulai`,'/',`ta`.`Selesai`) AS `TahunAjaran`,`iu`.`Nama` AS `IuranNama` from (((((((`v104_pembayaran` `byr` left join `t102_daf_kelas_siswa` `dks` on(`byr`.`daf_kelas_siswa_id` = `dks`.`id`)) left join `t101_daf_kelas` `dk` on(`dks`.`daf_kelas_id` = `dk`.`id`)) left join `t004_siswa` `sis` on(`dks`.`siswa_id` = `sis`.`id`)) left join `t003_kelas` `kls` on(`dk`.`kelas_id` = `kls`.`id`)) left join `t002_sekolah` `sklh` on(`dk`.`sekolah_id` = `sklh`.`id`)) left join `t001_tahun_ajaran` `ta` on(`dk`.`tahun_ajaran_id` = `ta`.`id`)) left join `t005_iuran` `iu` on(`byr`.`iuran_id` = `iu`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v106_tunggakan`
--
DROP TABLE IF EXISTS `v106_tunggakan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v106_tunggakan`  AS  select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,1 AS `Periode`,'Juli     ' AS `PeriodeBulan`,`t103_daf_kelas_siswa_iuran`.`byr01` AS `StatusBayar`,`t103_daf_kelas_siswa_iuran`.`jml01` AS `JumlahBayar`,`t103_daf_kelas_siswa_iuran`.`tgl01` AS `TglBayar` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr01` = '0' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,2 AS `2`,'Agustus  ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr02` AS `byr02`,`t103_daf_kelas_siswa_iuran`.`jml02` AS `jml02`,`t103_daf_kelas_siswa_iuran`.`tgl02` AS `tgl02` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr02` = '0' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,3 AS `3`,'September' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr03` AS `byr03`,`t103_daf_kelas_siswa_iuran`.`jml03` AS `jml03`,`t103_daf_kelas_siswa_iuran`.`tgl03` AS `tgl03` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr03` = '0' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,4 AS `4`,'Oktober  ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr04` AS `byr04`,`t103_daf_kelas_siswa_iuran`.`jml04` AS `jml04`,`t103_daf_kelas_siswa_iuran`.`tgl04` AS `tgl04` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr04` = '0' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,5 AS `5`,'November ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr05` AS `byr05`,`t103_daf_kelas_siswa_iuran`.`jml05` AS `jml05`,`t103_daf_kelas_siswa_iuran`.`tgl05` AS `tgl05` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr05` = '0' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,6 AS `6`,'Desember ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr06` AS `byr06`,`t103_daf_kelas_siswa_iuran`.`jml06` AS `jml06`,`t103_daf_kelas_siswa_iuran`.`tgl06` AS `tgl06` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr06` = '0' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,7 AS `7`,'Januari  ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr07` AS `byr06`,`t103_daf_kelas_siswa_iuran`.`jml07` AS `jml06`,`t103_daf_kelas_siswa_iuran`.`tgl07` AS `tgl06` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr07` = '0' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,8 AS `8`,'Februari ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr08` AS `byr06`,`t103_daf_kelas_siswa_iuran`.`jml08` AS `jml06`,`t103_daf_kelas_siswa_iuran`.`tgl08` AS `tgl06` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr08` = '0' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,9 AS `9`,'Maret    ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr09` AS `byr06`,`t103_daf_kelas_siswa_iuran`.`jml09` AS `jml06`,`t103_daf_kelas_siswa_iuran`.`tgl09` AS `tgl06` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr09` = '0' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,10 AS `10`,'April    ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr10` AS `byr06`,`t103_daf_kelas_siswa_iuran`.`jml10` AS `jml06`,`t103_daf_kelas_siswa_iuran`.`tgl10` AS `tgl06` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr10` = '0' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,11 AS `11`,'Mei      ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr11` AS `byr06`,`t103_daf_kelas_siswa_iuran`.`jml11` AS `jml06`,`t103_daf_kelas_siswa_iuran`.`tgl11` AS `tgl06` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr11` = '0' union select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,12 AS `12`,'Juni     ' AS `Name_exp_6`,`t103_daf_kelas_siswa_iuran`.`byr12` AS `byr06`,`t103_daf_kelas_siswa_iuran`.`jml12` AS `jml06`,`t103_daf_kelas_siswa_iuran`.`tgl12` AS `tgl06` from `t103_daf_kelas_siswa_iuran` where `t103_daf_kelas_siswa_iuran`.`byr12` = '0' order by `id`,`daf_kelas_siswa_id`,`iuran_id`,`Periode` ;

-- --------------------------------------------------------

--
-- Structure for view `v107_lap_tunggak`
--
DROP TABLE IF EXISTS `v107_lap_tunggak`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v107_lap_tunggak`  AS  select `byr`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`byr`.`iuran_id` AS `iuran_id`,`byr`.`Jumlah` AS `Jumlah`,`byr`.`Periode` AS `Periode`,`byr`.`PeriodeBulan` AS `PeriodeBulan`,`byr`.`StatusBayar` AS `StatusBayar`,`byr`.`JumlahBayar` AS `JumlahBayar`,`byr`.`TglBayar` AS `TglBayar`,`dks`.`siswa_id` AS `siswa_id`,`sis`.`NomorInduk` AS `NomorInduk`,`sis`.`Nama` AS `SiswaNama`,`dk`.`id` AS `dk_id`,`dk`.`kelas_id` AS `kelas_id`,`kls`.`Nama` AS `KelasNama`,`dk`.`sekolah_id` AS `sekolah_id`,`sklh`.`Nama` AS `SekolahNama`,`dk`.`tahun_ajaran_id` AS `tahun_ajaran_id`,concat(`ta`.`Mulai`,'/',`ta`.`Selesai`) AS `TahunAjaran`,`iu`.`Nama` AS `IuranNama`,case when month(current_timestamp()) = 7 then 1 when month(current_timestamp()) = 8 then 2 when month(current_timestamp()) = 9 then 3 when month(current_timestamp()) = 10 then 4 when month(current_timestamp()) = 11 then 5 when month(current_timestamp()) = 12 then 6 when month(current_timestamp()) = 1 then 7 when month(current_timestamp()) = 2 then 8 when month(current_timestamp()) = 3 then 9 when month(current_timestamp()) = 4 then 10 when month(current_timestamp()) = 5 then 11 when month(current_timestamp()) = 6 then 12 end AS `PeriodeNow` from (((((((`v106_tunggakan` `byr` left join `t102_daf_kelas_siswa` `dks` on(`byr`.`daf_kelas_siswa_id` = `dks`.`id`)) left join `t101_daf_kelas` `dk` on(`dks`.`daf_kelas_id` = `dk`.`id`)) left join `t004_siswa` `sis` on(`dks`.`siswa_id` = `sis`.`id`)) left join `t003_kelas` `kls` on(`dk`.`kelas_id` = `kls`.`id`)) left join `t002_sekolah` `sklh` on(`dk`.`sekolah_id` = `sklh`.`id`)) left join `t001_tahun_ajaran` `ta` on(`dk`.`tahun_ajaran_id` = `ta`.`id`)) left join `t005_iuran` `iu` on(`byr`.`iuran_id` = `iu`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v108_lap_um`
--
DROP TABLE IF EXISTS `v108_lap_um`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v108_lap_um`  AS  select `v105_lap_bayar`.`TahunAjaran` AS `tahunajaran`,`v105_lap_bayar`.`SekolahNama` AS `sekolahnama`,`v105_lap_bayar`.`KelasNama` AS `kelasnama`,`v105_lap_bayar`.`IuranNama` AS `iurannama`,`v105_lap_bayar`.`iuran_id` AS `iuran_id`,sum(`v105_lap_bayar`.`Jumlah`) AS `jumlah_total` from `v105_lap_bayar` group by `v105_lap_bayar`.`TahunAjaran`,`v105_lap_bayar`.`SekolahNama`,`v105_lap_bayar`.`KelasNama`,`v105_lap_bayar`.`iuran_id`,`v105_lap_bayar`.`IuranNama` ;

-- --------------------------------------------------------

--
-- Structure for view `v109_lap_pum`
--
DROP TABLE IF EXISTS `v109_lap_pum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v109_lap_pum`  AS  select `v107_lap_tunggak`.`TahunAjaran` AS `tahunajaran`,`v107_lap_tunggak`.`SekolahNama` AS `sekolahnama`,`v107_lap_tunggak`.`KelasNama` AS `kelasnama`,`v107_lap_tunggak`.`iuran_id` AS `iuran_id`,`v107_lap_tunggak`.`IuranNama` AS `iurannama`,sum(`v107_lap_tunggak`.`Jumlah`) AS `jumlah_total` from `v107_lap_tunggak` group by `v107_lap_tunggak`.`TahunAjaran`,`v107_lap_tunggak`.`SekolahNama`,`v107_lap_tunggak`.`KelasNama`,`v107_lap_tunggak`.`iuran_id`,`v107_lap_tunggak`.`IuranNama` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t001_tahun_ajaran`
--
ALTER TABLE `t001_tahun_ajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t002_sekolah`
--
ALTER TABLE `t002_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t003_kelas`
--
ALTER TABLE `t003_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t004_siswa`
--
ALTER TABLE `t004_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t005_iuran`
--
ALTER TABLE `t005_iuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t101_daf_kelas`
--
ALTER TABLE `t101_daf_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t102_daf_kelas_siswa`
--
ALTER TABLE `t102_daf_kelas_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dafkel_sis` (`daf_kelas_id`,`siswa_id`);

--
-- Indexes for table `t103_daf_kelas_siswa_iuran`
--
ALTER TABLE `t103_daf_kelas_siswa_iuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t301_employees`
--
ALTER TABLE `t301_employees`
  ADD PRIMARY KEY (`EmployeeID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `t302_userlevels`
--
ALTER TABLE `t302_userlevels`
  ADD PRIMARY KEY (`userlevelid`);

--
-- Indexes for table `t303_userlevelpermissions`
--
ALTER TABLE `t303_userlevelpermissions`
  ADD PRIMARY KEY (`userlevelid`,`tablename`);

--
-- Indexes for table `t304_audit_trail`
--
ALTER TABLE `t304_audit_trail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t001_tahun_ajaran`
--
ALTER TABLE `t001_tahun_ajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t002_sekolah`
--
ALTER TABLE `t002_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t003_kelas`
--
ALTER TABLE `t003_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t004_siswa`
--
ALTER TABLE `t004_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t005_iuran`
--
ALTER TABLE `t005_iuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t101_daf_kelas`
--
ALTER TABLE `t101_daf_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t102_daf_kelas_siswa`
--
ALTER TABLE `t102_daf_kelas_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t103_daf_kelas_siswa_iuran`
--
ALTER TABLE `t103_daf_kelas_siswa_iuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t301_employees`
--
ALTER TABLE `t301_employees`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `t304_audit_trail`
--
ALTER TABLE `t304_audit_trail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
