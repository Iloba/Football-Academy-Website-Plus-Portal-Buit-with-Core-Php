-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 02:39 PM
-- Server version: 10.3.15-MariaDB
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
-- Database: `pa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `uname` varchar(200) DEFAULT NULL,
  `upass` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `upass`) VALUES
(6, 'p&aacademy', 'p12345678'),
(7, 'Emmanuel', '12345678'),
(8, 'Mosessimon', '12345678'),
(9, 'p&aacademy', 'holyspirit2003');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `msg` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `msg`) VALUES
(21, 'Emeka Iloba', '08054421788', 'Emeka Iloba'),
(22, 'Emeka Iloba', 'scarlettsney@gmail.com', 'Message');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(255) NOT NULL,
  `image` varchar(190) DEFAULT NULL,
  `text` varchar(200) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `image`, `text`, `date`) VALUES
(20, 'p3.jpg', 'Our training section', '06/08/2019'),
(21, 'p2.jpg', 'Our training section', '06/17/2019'),
(22, 'p4.jpg', 'Our training section', '06/17/2019'),
(23, 'p1.jpg', 'Our training section', '06/17/2019');

-- --------------------------------------------------------

--
-- Table structure for table `patners`
--

CREATE TABLE `patners` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Msg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patners`
--

INSERT INTO `patners` (`id`, `name`, `email`, `Address`, `Msg`) VALUES
(1, 'Emeka Iloba', '08054421788', 'No  3 Malali', 'kj,glukyfgydfkjg,jhgtdhm'),
(3, 'Emeka Iloba Timothy', '08185375580', 'No 2 Malali Road', 'hgfhg,kbjgvkhghvj,hf'),
(4, 'Rex Muhammed', '08054421788', 'No 2 Malali Road', 'vhmgh');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(255) NOT NULL,
  `playername` varchar(100) DEFAULT NULL,
  `playerage` varchar(100) DEFAULT NULL,
  `playerpos` varchar(100) DEFAULT NULL,
  `playerbf` varchar(100) DEFAULT NULL,
  `playerh` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `playername`, `playerage`, `playerpos`, `playerbf`, `playerh`) VALUES
(3, 'Emeka Iloba Timothy', '15', 'Defender', 'Right', '12'),
(4, 'Emeka Iloba Timothy', '15', 'Defender', 'Right', '12');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `id` int(255) NOT NULL,
  `tpimg` varchar(200) DEFAULT NULL,
  `tpname` varchar(200) DEFAULT NULL,
  `tpage` varchar(100) DEFAULT NULL,
  `tphgt` varchar(100) DEFAULT NULL,
  `tppos` varchar(100) DEFAULT NULL,
  `tpbfoot` varchar(155) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id`, `tpimg`, `tpname`, `tpage`, `tphgt`, `tppos`, `tpbfoot`) VALUES
(9, 'players.jpg', 'Chisom Ugochukwu', '18', '1.79', 'Defender', 'Left'),
(10, 'players.jpg', 'Rex Muhammed', '15', '1.79', 'Defender', 'Both'),
(11, 'players.jpg', 'Chisom Ugochukwu', '17', '1.79', 'Defender', 'Right'),
(12, 'players.jpg', 'Rex Muhammed', '15', '1.79', 'Defender', 'Right');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patners`
--
ALTER TABLE `patners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `patners`
--
ALTER TABLE `patners`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
