-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 03:07 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_d`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_divisi`
--

CREATE TABLE `detail_divisi` (
  `id` int(11) NOT NULL,
  `id_divisi` varchar(7) NOT NULL,
  `id_process` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` varchar(7) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personel`
--

CREATE TABLE `personel` (
  `id_person` int(7) NOT NULL,
  `id_process` int(7) NOT NULL,
  `name` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `id_ref` int(7) NOT NULL,
  `id_process` int(7) NOT NULL,
  `name` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `id_res` int(7) NOT NULL,
  `id_process` int(7) NOT NULL,
  `name` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `risk`
--

CREATE TABLE `risk` (
  `id_risk` int(7) NOT NULL,
  `id_process` int(7) NOT NULL,
  `name` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `turtle`
--

CREATE TABLE `turtle` (
  `id_process` int(7) NOT NULL,
  `process_name` text NOT NULL,
  `critical` text NOT NULL,
  `process_owner` text NOT NULL,
  `start_event` text NOT NULL,
  `end_event` text NOT NULL,
  `input` text NOT NULL,
  `process_input` text NOT NULL,
  `int_for_input` text NOT NULL,
  `material` text NOT NULL,
  `human` text NOT NULL,
  `process` text NOT NULL,
  `process_indicator` text NOT NULL,
  `process_obj` text NOT NULL,
  `risk` text NOT NULL,
  `process_output` text NOT NULL,
  `int_for_output` text NOT NULL,
  `process_improv` text NOT NULL,
  `output` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(8) NOT NULL,
  `nama` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_divisi`
--
ALTER TABLE `detail_divisi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_process` (`id_process`) USING BTREE;

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`id_person`),
  ADD KEY `id_process` (`id_process`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id_ref`),
  ADD KEY `id_process` (`id_process`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`id_res`),
  ADD KEY `id_process` (`id_process`);

--
-- Indexes for table `risk`
--
ALTER TABLE `risk`
  ADD PRIMARY KEY (`id_risk`),
  ADD KEY `id_process` (`id_process`);

--
-- Indexes for table `turtle`
--
ALTER TABLE `turtle`
  ADD PRIMARY KEY (`id_process`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_divisi`
--
ALTER TABLE `detail_divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personel`
--
ALTER TABLE `personel`
  MODIFY `id_person` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id_ref` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `id_res` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `risk`
--
ALTER TABLE `risk`
  MODIFY `id_risk` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `turtle`
--
ALTER TABLE `turtle`
  MODIFY `id_process` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_divisi`
--
ALTER TABLE `detail_divisi`
  ADD CONSTRAINT `detail_divisi_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_divisi_ibfk_2` FOREIGN KEY (`id_process`) REFERENCES `turtle` (`id_process`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personel`
--
ALTER TABLE `personel`
  ADD CONSTRAINT `personel_ibfk_1` FOREIGN KEY (`id_process`) REFERENCES `turtle` (`id_process`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reference`
--
ALTER TABLE `reference`
  ADD CONSTRAINT `reference_ibfk_1` FOREIGN KEY (`id_process`) REFERENCES `turtle` (`id_process`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resource`
--
ALTER TABLE `resource`
  ADD CONSTRAINT `resource_ibfk_1` FOREIGN KEY (`id_process`) REFERENCES `turtle` (`id_process`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `risk`
--
ALTER TABLE `risk`
  ADD CONSTRAINT `risk_ibfk_1` FOREIGN KEY (`id_process`) REFERENCES `turtle` (`id_process`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
