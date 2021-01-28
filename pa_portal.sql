-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 04:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(10, 'pandafootballacademy@gmail.com', 'holyspirit2003'),
(11, 'scarlettsney@gmail.com', 'holyspirit2003'),
(12, 'paventures01@gmail.com', 'paventures');

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
(22, 'Emeka Iloba', 'scarlettsney@gmail.com', 'Message'),
(24, 'Emeka Iloba', 'scarlettsney@gmail.com', 'I want a Player'),
(25, 'Emeka Iloba', 'scarlettsney@gmail.com', 'Good');

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
(27, 'gal7.jpg', 'Players During Gym Section', '24/01/2021'),
(28, 'gal6.jpg', 'The President Presenting a Trophy to a Player', '24/01/2021'),
(29, 'patner1.jpg', 'The President with One of Our International Patners', '24/01/2021'),
(30, 'patner3.jpg', 'One of our Patners with The Legendry Kano Nwanko', '24/01/2021'),
(31, '_DSC0065.JPG', 'The President During one of Our Matches', '24/01/2021'),
(32, '_DSC0034.JPG', 'During One of Our Matches', '24/01/2021'),
(33, '_DSC0007.JPG', 'Players During Our Warm Up Section', '24/01/2021'),
(34, 'slider-2.JPG', 'During One of Our Matches', '24/01/2021'),
(35, 'IMG-20210124-WA0026.jpg', 'One of the Best Goal Keepers in the Nigerian Premier League Side', '22/01/2021'),
(36, 'npfl.jpg', 'One of Our Players now in a Nigerian Premier League Side', '21/01/2021'),
(37, 'abj1.jpg', 'Players During Tournament in Abuja', '21/01/2021'),
(38, 'abj2.jpg', 'Tournament in Abuja', '21/01/2021');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `patners`
--
ALTER TABLE `patners`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
