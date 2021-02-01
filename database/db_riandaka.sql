-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 03:27 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_riandaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_eppm`
--

CREATE TABLE `tb_eppm` (
  `employee_id` int(11) NOT NULL,
  `NIP` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `start_time` varchar(225) NOT NULL,
  `score` double NOT NULL,
  `status` varchar(225) NOT NULL,
  `deadline_course` datetime NOT NULL,
  `clear_time` varchar(225) NOT NULL,
  `directorate` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_eppm`
--

INSERT INTO `tb_eppm` (`employee_id`, `NIP`, `username`, `email`, `start_time`, `score`, `status`, `deadline_course`, `clear_time`, `directorate`) VALUES
(123459, 755361, 'Riandaka', 'riandaka@pertamina.com', '2019-06-13 2:21:30', 100, 'Cleared', '2019-08-31 16:59:59', '2019-07-29 10:24:28', 'Megaproyek Pengolahan dan Petrokimia'),
(123460, 755326, 'Muhammad Amran', 'muhammad.amran@pertamina.com', 'None', 0, 'Not Started', '2019-12-31 16:59:59', 'None', 'Megaproyek Pengolahan dan Petrokimia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `log_id` int(11) NOT NULL,
  `log_user` varchar(225) NOT NULL,
  `log_type` varchar(225) NOT NULL,
  `log_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_pen` int(11) NOT NULL,
  `NIP` int(11) NOT NULL,
  `defenisi` varchar(225) NOT NULL,
  `tujuan` varchar(225) NOT NULL,
  `proses` varchar(225) NOT NULL,
  `contoh` varchar(225) NOT NULL,
  `analisis` varchar(225) NOT NULL,
  `solusi` varchar(225) NOT NULL,
  `bobot_teori` varchar(225) DEFAULT NULL,
  `bobot_praktik` varchar(225) DEFAULT NULL,
  `periode` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penilaian`
--

INSERT INTO `tb_penilaian` (`id_pen`, `NIP`, `defenisi`, `tujuan`, `proses`, `contoh`, `analisis`, `solusi`, `bobot_teori`, `bobot_praktik`, `periode`) VALUES
(10, 755361, '10', '10', '10', '10', '20', '20', NULL, NULL, '2019-12-08'),
(11, 755326, '10', '20', '10', '20', '20', '20', NULL, NULL, '2019-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_create` date NOT NULL,
  `user_role` enum('Administrator','Assessment','Employee','') NOT NULL,
  `full_name` varchar(225) NOT NULL,
  `NIP` varchar(255) NOT NULL,
  `foto` varchar(500) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `user_create`, `user_role`, `full_name`, `NIP`, `foto`) VALUES
(22, 'admin', 'admin', '2019-12-07', 'Administrator', 'Muhammad', '115106', 'test.jpg'),
(23, 'NIP', '1234', '2019-12-08', 'Employee', 'Nama', 'NIP', 'default.png'),
(24, '755361', '1234', '2019-12-08', 'Employee', 'Riandaka', '755361', 'default.png'),
(25, '755326', '1234', '2019-12-08', 'Employee', 'Muhammad Amran', '755326', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_workbook`
--

CREATE TABLE `tb_workbook` (
  `workbook_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  `employee_id` int(11) NOT NULL,
  `name_employee` varchar(225) NOT NULL,
  `module_1_1` varchar(225) NOT NULL,
  `module_1_2` varchar(225) NOT NULL,
  `module_2_1` varchar(225) NOT NULL,
  `module_2_2` varchar(225) NOT NULL,
  `module_3_1` varchar(225) NOT NULL,
  `module_3_2` varchar(225) NOT NULL,
  `module_3_3` varchar(225) NOT NULL,
  `module_4_1` varchar(225) NOT NULL,
  `module_4_2` varchar(225) NOT NULL,
  `module_4_3` varchar(225) NOT NULL,
  `module_5_1` varchar(225) NOT NULL,
  `module_6_1` varchar(225) NOT NULL,
  `module_6_2` varchar(225) NOT NULL,
  `module_6_3` varchar(225) NOT NULL,
  `scan_lp` varchar(225) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL,
  `status_upload` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_workbook`
--

INSERT INTO `tb_workbook` (`workbook_id`, `timestamp`, `employee_id`, `name_employee`, `module_1_1`, `module_1_2`, `module_2_1`, `module_2_2`, `module_3_1`, `module_3_2`, `module_3_3`, `module_4_1`, `module_4_2`, `module_4_3`, `module_5_1`, `module_6_1`, `module_6_2`, `module_6_3`, `scan_lp`, `tgl_upload`, `status_upload`) VALUES
(17, '2019-11-24 22:56:00', 755361, 'Riandaka', 'Done. Acc.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'No Action', '2019-12-08', 'Muhammad'),
(18, '2019-01-01 01:00:00', 755326, 'Muhammad Amran', 'Done. Acc.', 'Done. Acc.', 'On Progress.', 'On Progress.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', 'Not Yet Started.', '0d96c16bdb399d548bce6bc831939fff.jpg', '2019-12-08', 'Muhammad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_eppm`
--
ALTER TABLE `tb_eppm`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`id_pen`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_workbook`
--
ALTER TABLE `tb_workbook`
  ADD PRIMARY KEY (`workbook_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_eppm`
--
ALTER TABLE `tb_eppm`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123461;
--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  MODIFY `id_pen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_workbook`
--
ALTER TABLE `tb_workbook`
  MODIFY `workbook_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
