-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2017 at 05:33 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `no` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no`, `email`, `pass`) VALUES
(1, 'allen@gmail.com', 'allen');

-- --------------------------------------------------------

--
-- Table structure for table `pgsu`
--

CREATE TABLE IF NOT EXISTS `pgsu` (
  `no` int(20) NOT NULL,
  `fn` varchar(20) NOT NULL,
  `ln` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `pass1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE IF NOT EXISTS `share` (
  `no` int(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `sp` varchar(20) NOT NULL,
  `ep` varchar(20) NOT NULL,
  `cno` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `share`
--

INSERT INTO `share` (`no`, `cname`, `sp`, `ep`, `cno`) VALUES
(1, 'Afjv', 'vjhgv', 'gcjhgc', 353),
(2, 'Allen', 'Aluva', 'Edappally', 2345678),
(3, 'Aaron Joseph', 'Aluva', 'Edappally', 2147483647),
(4, 'Angela Joseph', 'Edappally', 'Infopark, Kakkanad', 46747474),
(5, 'Edwin Sonu', 'Edappally', 'Infopark, Kakkanad', 4654645),
(6, 'Matthew George', 'Aluva', 'MG Road', 4465465),
(7, 'Aamir Khan', 'Edappally', 'Vytilla', 654654567),
(8, 'Shah Rukh Khan', 'Aluva', 'MG Road', 2147483647),
(9, 'Salman Khan', 'Edappally', 'MG Road', 63565365),
(10, 'Krishna Anand', 'Aluva', 'Vytilla', 54646),
(11, 'Shefin Shaji', 'Aluva', 'Vytilla', 5676),
(12, 'Allen Lal', 'Aluva', 'Vytilla', 65675),
(13, 'Abhijith Raj', 'Vytilla', 'MG Road', 475476),
(14, 'Abhinav S', 'Vytilla', 'MG Road', 58587),
(15, 'Abhiram KS', 'MG Road', 'Infopark, Kakkanad', 654654674),
(16, 'Akhil Kumar', 'MG Road', 'Infopark, Kakkanad', 56576),
(17, 'VT Joseph', 'Vytilla', 'MG Road', 64565465),
(18, 'Arun Krishnan', 'Infopark, Edachira', 'Wellington Island', 5675675),
(19, 'Allen', 'Edappally', 'MG Road', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `no` int(20) NOT NULL,
  `fn` text NOT NULL,
  `ln` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `pass1` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`no`, `fn`, `ln`, `email`, `pass`, `pass1`) VALUES
(1, 'abkjb', 'kjbkj', 'kjbkjb@bk', '123', '123'),
(2, 'Allen ', 'Joseph', 'a@a', '123', '123'),
(3, 'Aaron', 'Joseph', 'a@gfg', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `signup1`
--

CREATE TABLE IF NOT EXISTS `signup1` (
  `no` int(20) NOT NULL,
  `src` text NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup1`
--

INSERT INTO `signup1` (`no`, `src`, `des`) VALUES
(1, '', ''),
(2, 'Mumbai', 'Nagpur'),
(3, 'Nagpur', 'Mumbai'),
(4, 'Mumbai', 'Nagpur'),
(5, 'Kochi', 'Kozhikode');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pgsu`
--
ALTER TABLE `pgsu`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `signup1`
--
ALTER TABLE `signup1`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pgsu`
--
ALTER TABLE `pgsu`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `signup1`
--
ALTER TABLE `signup1`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
