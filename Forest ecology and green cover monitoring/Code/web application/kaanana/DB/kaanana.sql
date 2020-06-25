-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 04:03 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaanana`
--

-- --------------------------------------------------------

--
-- Table structure for table `fofficer`
--

CREATE TABLE `fofficer` (
  `fid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fofficer`
--

INSERT INTO `fofficer` (`fid`, `name`, `password`) VALUES
(1, 'Ashwin', 'ashwinash');

-- --------------------------------------------------------

--
-- Table structure for table `gpinfo`
--

CREATE TABLE `gpinfo` (
  `ttype` varchar(20) NOT NULL,
  `fhealth` varchar(20) NOT NULL,
  `tcount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gpinfo`
--

INSERT INTO `gpinfo` (`ttype`, `fhealth`, `tcount`) VALUES
('Sandlewood', '80', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fofficer`
--
ALTER TABLE `fofficer`
  ADD PRIMARY KEY (`fid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
