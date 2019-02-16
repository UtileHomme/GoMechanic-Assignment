-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2019 at 12:33 AM
-- Server version: 5.7.25
-- PHP Version: 7.1.26-1+ubuntu14.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `moviedetails`
--

CREATE TABLE IF NOT EXISTS `moviedetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(400) DEFAULT NULL,
  `Type` varchar(45) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `imdbID` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `moviedetails`
--

INSERT INTO `moviedetails` (`id`, `Title`, `Type`, `Year`, `imdbID`, `created_at`, `updated_at`) VALUES
(1, 'spiderman', 'movie', 2007, '234tgfb', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(2, 'All Spiderman', 'movie', 2008, '234tgdd', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(3, 'Every Spiderman', 'movie', 2005, '234tgsa', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(4, 'Spiderman the Great', 'movie', 2004, '234tgdfb', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(5, 'Amazing Spiderman', 'movie', 2002, '234tgfbsd', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(6, 'Spiderman 3', 'movie', 2001, '234tgfdsab', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(7, 'spiderman 11', 'movie', 2003, '234tgfbdssad', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(8, 'Spiderman 32', 'movie', 2006, '234tgfbasw', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(9, 'SpiderWoman', 'movie', 2007, '234tgffda', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(10, 'Spiderman 54', 'movie', 2002, '23df4tgfb', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(11, 'Spiderman 23', 'movie', 2001, '234tgfsfb', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(12, 'Spiderman22', 'movie', 2004, '234tgfdsfb', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(13, 'Spiderman34', 'movie', 2017, '234tgfbdsf', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(14, 'Spiderman6', 'movie', 20047, '234tgfbsdsf', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(15, 'Spiderman675', 'movie', 2027, '234tgfbfd', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(16, 'Spiderman3', 'movie', 2037, '234tgfbdf', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(17, 'Spiderman2', 'movie', 2047, '234tgfbs', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(18, 'Spiderman55', 'movie', 2057, '234tgfbdf', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(19, 'Spiderman66', 'movie', 2067, '234tgfbbd', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(20, 'Spiderman88', 'movie', 2077, '234tgfbws', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(21, 'Spiderman99', 'movie', 2087, '234tgfbbd', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(22, 'Spiderman92', 'movie', 2097, '234tgfbed', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(23, 'Spiderman44', 'movie', 2017, '234tgfyb', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(24, 'Spiderman123', 'movie', 2027, '234tgfyhb', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(25, 'Spiderman76', 'movie', 2097, '234tgfbw', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(26, 'Spiderman56', 'movie', 2017, '234tgfdb', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(27, 'Spiderman98', 'movie', 2017, '234tgfbgb', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(28, 'Spiderman986', 'movie', 2047, '234tgfbhf', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(29, 'Spiderman999', 'movie', 2075, '234tgfbhe', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(30, 'Spiderman098', 'movie', 2071, '234tgfbew', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(31, 'Spiderman123', 'movie', 2070, '234tgfbthy', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(32, 'Spiderddman65', 'movie', 2071, '234tgfbuh', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(33, 'Spiderdman54', 'movie', 2071, '234tgfbol', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(34, 'Spidehrman67', 'movie', 2074, '234tgfbyu', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(35, 'Spidedrman66', 'movie', 2078, '234tgfbil', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(36, 'Spiderdman87', 'movie', 2072, '234tgfbyhg', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(37, 'Spidermgan99d', 'movie', 2045, '234tgfbtrg', '2019-02-16 17:14:06', '2019-02-16 17:14:06'),
(38, 'Spiderman77', 'movie', 2065, '234tgfbyh', '2019-02-16 17:14:06', '2019-02-16 17:14:06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
