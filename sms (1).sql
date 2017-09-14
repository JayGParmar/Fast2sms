-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2015 at 10:37 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept_friend`
--

CREATE TABLE `accept_friend` (
  `f_of` int(11) NOT NULL,
  `m_of` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accept_friend`
--

INSERT INTO `accept_friend` (`f_of`, `m_of`) VALUES
(3, 1),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(4) NOT NULL auto_increment,
  `a_unm` varchar(30) NOT NULL,
  `a_pwd` varchar(30) NOT NULL,
  PRIMARY KEY  (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_unm`, `a_pwd`) VALUES
(1, 'Jay', 'Jay Parmar');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(4) NOT NULL auto_increment,
  `cat_nm` varchar(50) NOT NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_nm`) VALUES
(3, 'Birthday'),
(5, 'Sad'),
(6, 'Funny'),
(8, 'Good Morning'),
(9, 'Good Night');

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE `friend` (
  `f_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`f_id`, `m_id`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(11) NOT NULL auto_increment,
  `m_from` varchar(255) NOT NULL,
  `m_to` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `m_sent` datetime NOT NULL,
  PRIMARY KEY  (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `m_from`, `m_to`, `message`, `m_sent`) VALUES
(1, '2', '1', 'sdcsdkj', '2015-09-26 08:49:57'),
(2, '1', '2', 'sjsdjh', '2015-09-26 08:52:04'),
(3, '2', '', 'sdsdh', '2015-09-26 10:34:45'),
(4, '2', '', 'dsddkjs', '2015-09-26 10:36:39'),
(5, '2', '1', 'jfjdfj', '2015-09-26 10:38:26'),
(6, '2', '1', 'Hi', '2015-09-29 07:19:44'),
(7, '2', '1', 'Hi Friend', '2015-09-29 07:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(4) NOT NULL auto_increment,
  `r_fnm` varchar(55) NOT NULL,
  `r_unm` varchar(30) NOT NULL,
  `r_pwd` varchar(25) NOT NULL,
  `r_email` varchar(55) NOT NULL,
  `r_cno` varchar(10) NOT NULL,
  `profile_pic` varchar(100) default 'jay.jpg',
  `status` varchar(100) default 'Hi There i am using F2S',
  PRIMARY KEY  (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_fnm`, `r_unm`, `r_pwd`, `r_email`, `r_cno`, `profile_pic`, `status`) VALUES
(1, 'Parmar', 'Jay', '123456', 'jay@gmail.com', '1234567890', 'jay.jpg', 'Hi'),
(2, 'Dobariya', 'Dixit', '654321', 'dixit@gmail.com', '7894561230', 'jay.jpg', 'Hi There i am using F2S'),
(3, 'Jayesh', 'Jalodara', '789456', 'jayesh@gmail.com', '1111111111', 'jay.jpg', 'Hi There i am using F2S');

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `s_id` int(4) NOT NULL auto_increment,
  `s_nm` varchar(100) NOT NULL,
  `scat_id` int(4) NOT NULL,
  PRIMARY KEY  (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`s_id`, `s_nm`, `scat_id`) VALUES
(1, 'Many Many Happy Returns Of the Day.', 3),
(2, 'My Project Is Incompleted.', 5);
