-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 09:04 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ncccadet`
--

-- --------------------------------------------------------

--
-- Table structure for table `activites`
--

CREATE TABLE IF NOT EXISTS `activites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nid` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `description` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `activites`
--

INSERT INTO `activites` (`id`, `nid`, `subject`, `description`) VALUES
(1, '', 'hdgshj', 'jhdgcsjh'),
(2, '', 'jcgjsd', 'jcbjs'),
(3, '', 'feedback', 'fsdfs'),
(4, '2', 'sbgf', 'xfgffffh');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `stud_id`, `status`, `date`) VALUES
(1, '1', 'Present', '2022-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE IF NOT EXISTS `camp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nid` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`id`, `nid`, `date`, `title`, `description`, `image`) VALUES
(1, '2', '2022-08-08', 'dbvj', 'hhjuh', '2022-08-08-12-49-06about-img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`) VALUES
(1, 'bca');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `sid`, `title`, `description`, `date`) VALUES
(1, '1', 'gdhsd', 'jhdsfj', '2022-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nid` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `amount` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `nid`, `title`, `description`, `amount`) VALUES
(1, '2', 'gfyh', 'juyiu', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studid` varchar(200) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `feedback` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `studid`, `subject`, `feedback`) VALUES
(1, 'achu@gmail.com', 'ajhfa', 'jkxcfkdhxfkljf'),
(2, 'achu@gmail.com', 'ajhfa', 'jkxcfkdhxfkljf'),
(3, '1', 'jhfsuz', 'hkushdckd');

-- --------------------------------------------------------

--
-- Table structure for table `ncchead`
--

CREATE TABLE IF NOT EXISTS `ncchead` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` tinytext NOT NULL,
  `department` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ncchead`
--

INSERT INTO `ncchead` (`id`, `name`, `email`, `address`, `phone`, `password`, `image`, `department`) VALUES
(1, 'amal bs6', 'achu@gmail.com', 'kollam', '9655456786', '111', '2022-08-05-02-39-272022-05-10-02-10-56Webp.net-gifmaker.gif', '1'),
(2, 'amal bs6', 'achu@gmail.com', 'dfes', '8234567890', '123', '2022-08-05-02-39-181.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `othernotify`
--

CREATE TABLE IF NOT EXISTS `othernotify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `othernotify`
--

INSERT INTO `othernotify` (`id`, `sid`, `title`, `description`, `date`) VALUES
(1, '1', 'jsgd', 'hiuhkuhuk', '2022-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `parentregister`
--

CREATE TABLE IF NOT EXISTS `parentregister` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirm_password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `parentregister`
--

INSERT INTO `parentregister` (`id`, `name`, `email`, `password`, `confirm_password`) VALUES
(1, '', 'adithya@gmail.com', 'abcd1234', 'abcd1234'),
(2, 'Adithya', 'adithya@gmail.com', 'adcd123', 'abcd123'),
(3, 'arun', 'arun@gmail.com', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `address`, `phone`, `password`, `image`) VALUES
(1, 'arun', 'arun@gmail.com', 'kollam', '7689776622', '111', '2022-08-05-02-01-06WhatsApp Image 2022-02-10 at 7.42.15 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` tinytext NOT NULL,
  `department` varchar(200) NOT NULL,
  `semester` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `address`, `phone`, `password`, `image`, `department`, `semester`) VALUES
(1, 'test', 'test@gmail.com', 'Kottayam', '8234567890', '111', '2022-08-05-02-46-231.jpg', 'bca', '1');

-- --------------------------------------------------------

--
-- Table structure for table `yearplan`
--

CREATE TABLE IF NOT EXISTS `yearplan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nid` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `image` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `yearplan`
--

INSERT INTO `yearplan` (`id`, `nid`, `date`, `title`, `description`, `image`) VALUES
(1, '2', '2022-08-04', 'asdfg', 'sdfghj', '2022-08-05-03-28-241.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
