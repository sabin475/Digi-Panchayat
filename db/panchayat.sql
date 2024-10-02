-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2022 at 10:23 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `panchayat`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `application_id` int(5) NOT NULL,
  `scheme_id` int(5) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `reply` text NOT NULL,
  `status` int(3) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`application_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`application_id`, `scheme_id`, `user_id`, `reply`, `status`, `date`) VALUES
(1, 1, 'sabin@gmail.com', '', 0, '2022-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(5) NOT NULL,
  `uid` varchar(30) NOT NULL COMMENT 'foreignkey',
  `feedback` text NOT NULL,
  `fdate` date NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uid`, `feedback`, `fdate`) VALUES
(1, 'sabin@gmail.com', 'hello', '2022-08-13'),
(2, 'sabin@gmail.com', 'hi hello', '2022-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `img_id` int(5) NOT NULL,
  `img_file` text NOT NULL,
  `img_title` varchar(30) NOT NULL,
  `img_date` date NOT NULL,
  `img_status` int(4) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `img_file`, `img_title`, `img_date`, `img_status`) VALUES
(2, 'gallery/2.jpg', 'MyImageA', '2022-08-21', 0),
(3, 'gallery/3.jpg', 'MyImageB', '2022-08-21', 0),
(4, 'gallery/4.jpg', 'MyImageC', '2022-08-21', 0),
(5, 'gallery/5.jpg', 'MyImageD', '2022-08-21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `info_id` int(5) NOT NULL,
  `s_id` varchar(30) NOT NULL,
  `info_title` varchar(50) NOT NULL,
  `info_desc` varchar(100) NOT NULL,
  `info_date` date NOT NULL,
  `info_status` int(3) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`info_id`, `s_id`, `info_title`, `info_desc`, `info_date`, `info_status`) VALUES
(1, 'sunil@gmail.com', 'infoA', 'reduytiu', '2022-08-18', 0),
(2, 'sunil@gmail.com', 'infoB', 'mhhhh', '2022-08-21', 0),
(3, 'sunil@gmail.com', 'infoC', 'jhj', '2022-08-21', 0),
(4, 'sunil@gmail.com', 'infoD', 'jjgj', '2022-08-21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(30) NOT NULL COMMENT 'foriegnkey',
  `password` varchar(25) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`, `status`) VALUES
('admin@gmail.com', 'admin@123', 'admin', 1),
('sabin@gmail.com', 'Sabin@123', 'public', 1),
('sunil@gmail.com', 'Sunil@123', 'staff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE IF NOT EXISTS `scheme` (
  `scheme_id` int(5) NOT NULL,
  `sid` varchar(30) NOT NULL,
  `scheme_title` varchar(50) NOT NULL,
  `scheme_desc` varchar(100) NOT NULL,
  `scheme_file` text NOT NULL,
  `scheme_date` date NOT NULL,
  `scheme_status` int(3) NOT NULL,
  PRIMARY KEY (`scheme_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`scheme_id`, `sid`, `scheme_title`, `scheme_desc`, `scheme_file`, `scheme_date`, `scheme_status`) VALUES
(1, 'sunil@gmail.com', 'SchemeA', 'SchemeA', 'uploads/1.pdf', '2022-08-18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sreg`
--

CREATE TABLE IF NOT EXISTS `sreg` (
  `sid` int(11) NOT NULL,
  `surname` text NOT NULL,
  `sname` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `sphno` text NOT NULL,
  `smailid` varchar(30) NOT NULL,
  `post` varchar(30) NOT NULL,
  PRIMARY KEY (`smailid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sreg`
--

INSERT INTO `sreg` (`sid`, `surname`, `sname`, `gender`, `sphno`, `smailid`, `post`) VALUES
(1, 'Mr.', 'Sunil kumar', 'Male', '8547764105', 'sunil@gmail.com', 'officestaff');

-- --------------------------------------------------------

--
-- Table structure for table `ureg`
--

CREATE TABLE IF NOT EXISTS `ureg` (
  `uid` int(5) NOT NULL,
  `surname` varchar(5) NOT NULL,
  `name` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `house_name` varchar(15) NOT NULL,
  `house_no` varchar(15) NOT NULL,
  `street_name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `mailid` varchar(30) NOT NULL,
  PRIMARY KEY (`mailid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ureg`
--

INSERT INTO `ureg` (`uid`, `surname`, `name`, `gender`, `house_name`, `house_no`, `street_name`, `city`, `district`, `pincode`, `aadhar`, `phno`, `mailid`) VALUES
(1, 'Mr.', 'Sabin', 'Male', 'Althara', 'A123', 'Thoppinkara', 'Ayathil', 'Kollam', '691030', '675678654543', '9897654312', 'sabin@gmail.com');
