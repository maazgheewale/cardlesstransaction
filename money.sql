-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 07:47 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `money`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE IF NOT EXISTS `logindetails` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `browser` varchar(30) NOT NULL,
  `os` varchar(20) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `logintime`
--

CREATE TABLE IF NOT EXISTS `logintime` (
  `email` varchar(30) NOT NULL,
  `hour` varchar(20) NOT NULL,
  `minutes` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintime`
--

INSERT INTO `logintime` (`email`, `hour`, `minutes`) VALUES
('maaz@gmail.com', '14', '05');

-- --------------------------------------------------------

--
-- Table structure for table `resetopt`
--

CREATE TABLE IF NOT EXISTS `resetopt` (
  `email` varchar(30) NOT NULL,
  `otp` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resetopt`
--

INSERT INTO `resetopt` (`email`, `otp`) VALUES
('maaz@gmail.com', 4135);

-- --------------------------------------------------------

--
-- Table structure for table `tblbank`
--

CREATE TABLE IF NOT EXISTS `tblbank` (
  `bankname` varchar(50) DEFAULT NULL,
  `bcode` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `addr` varchar(50) DEFAULT NULL,
  `ifsccode` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `bpass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbank`
--

INSERT INTO `tblbank` (`bankname`, `bcode`, `branch`, `addr`, `ifsccode`, `contact`, `bpass`) VALUES
('CANARA BANK', '0002', 'BGM', 'BGM	', 'CANA0000002', '12345678902', '0002'),
('UNION BANK', '0003', 'BGM', 'BGM', 'UNIO0000003', '12345678903', '0003'),
('SYNDICATE BANK', '0004', 'BGM', 'BGM', 'SYND0000004', '12345678904', '0004'),
('HDFC BANK', '0005', 'BGM', 'BGM', 'HDFC0000005', '12345678905', '0005'),
('ICICI BANK', '0006', 'BGM', 'BGM', 'ICIC0000006', '12345678906', '0006'),
('AXIS BANK', '0007', 'BGM', 'BGM', 'AXIS0000007', '12345678907', '0007'),
('IDBI BANK', '0008', 'BGM', 'BGM', 'IDBI0000008', '12345678908', '0008'),
('PUNJAB NATIONAL BANK', '0009', 'BGM', 'BGM', 'PUNJ0000009', '12345678909', '0009'),
('BANK OF INDIA', '0010', 'BGM', 'BGM', 'INDI0000010', '12345678910', '0010'),
('STATE BANK OF INDIA', '0001', 'BGM', 'BGM	', 'SBIN0000001', '12345678901', '0001'),
('CSB', '0011', 'BGM', 'BGM	', 'CSBK0000011', '12345678911', '0011'),
('bank of baroda', '0015', 'bgm', 'bgm', 'BARO0000009', '12345678901', '0015');

-- --------------------------------------------------------

--
-- Table structure for table `tbltemppin`
--

CREATE TABLE IF NOT EXISTS `tbltemppin` (
  `accno` varchar(50) DEFAULT NULL,
  `bcode` varchar(50) DEFAULT NULL,
  `regmob` varchar(50) DEFAULT NULL,
  `tmppin` int(11) DEFAULT NULL,
  `dtdate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaction`
--

CREATE TABLE IF NOT EXISTS `tbltransaction` (
  `slno` int(11) DEFAULT NULL,
  `bcode` varchar(50) DEFAULT NULL,
  `accno` varchar(50) DEFAULT NULL,
  `dtdate` varchar(50) DEFAULT NULL,
  `discp` varchar(50) DEFAULT NULL,
  `cedit` float DEFAULT NULL,
  `debit` float DEFAULT NULL,
  `bal` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbltransfer`
--

CREATE TABLE IF NOT EXISTS `tbltransfer` (
  `accno` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bcode` varchar(50) NOT NULL,
  `regmob` varchar(20) NOT NULL,
  `replymob` varchar(20) NOT NULL,
  `atmpin` varchar(20) NOT NULL,
  `bal` int(11) NOT NULL,
  `tmppin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluserdetails`
--

CREATE TABLE IF NOT EXISTS `tbluserdetails` (
  `acctype` varchar(50) DEFAULT NULL,
  `accno` varchar(50) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `regmob` varchar(50) DEFAULT NULL,
  `atmpin` varchar(50) DEFAULT NULL,
  `atmcard` varchar(50) DEFAULT NULL,
  `bankname` varchar(50) DEFAULT NULL,
  `bcode` varchar(50) DEFAULT NULL,
  `pan` varchar(20) DEFAULT NULL,
  `accesspin` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluserdetails`
--

INSERT INTO `tbluserdetails` (`acctype`, `accno`, `name`, `address`, `email`, `regmob`, `atmpin`, `atmcard`, `bankname`, `bcode`, `pan`, `accesspin`) VALUES
('SAVING ACCOUNT', '1234567890123451', 'MAAZ', 'BGM', 'maaz@gmail.com', '9590172717', '0000', '1234567890123451', 'STATE BANK OF INDIA', '0001', '123456789011', '0000'),
('SAVING ACCOUNT', '1234567890123452', 'SUMMAIYA', 'BGM	', 'summaiya@gmail.com', '8951408360', '0000', '1234567890123452', 'STATE BANK OF INDIA', '0001', '123456789012', '0000'),
('SAVING ACCOUNT', '1234567890123453', 'VANDANA', 'BGM\n	', 'vandana@gmail.com', '7090034122', '0000', '1234567890123453', 'STATE BANK OF INDIA', '0001', '123456789013', '0000'),
('SAVING ACCOUNT', '1234567890123454', 'FAHEEM', 'BGM', 'faheem@gmail.com', '9164092068', '0000', '1234567890123454', 'STATE BANK OF INDIA', '0001', '123456789014', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `tbluserlogin`
--

CREATE TABLE IF NOT EXISTS `tbluserlogin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `disabledate` date NOT NULL,
  `disablecount` int(11) NOT NULL DEFAULT '0',
  `disable` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluserlogin`
--

INSERT INTO `tbluserlogin` (`email`, `password`, `disabledate`, `disablecount`, `disable`) VALUES
('maaz@gmail.com', '0000', '0000-00-00', 0, 0),
('summaiya@gmail.com', '0000', '2018-03-19', 0, 0),
('vandana@gmail.com', '0000', '2018-03-19', 0, 0),
('faheem@gmail.com', '0000', '2018-03-19', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
