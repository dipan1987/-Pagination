-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2013 at 04:09 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(40) NOT NULL,
  UNIQUE KEY `bank_id` (`bank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_name`) VALUES
(1, 'HDFC Bank'),
(2, 'AXIS Bank'),
(3, 'ICICI Bank'),
(4, 'CITI Bank'),
(5, 'American Express'),
(6, 'Bank Of Maharashtra'),
(7, 'Central Bank Of India'),
(8, 'IDBI Bank'),
(9, 'SBI'),
(10, 'Punjab National Bank'),
(11, 'Federal Bank'),
(12, 'Syndicate Bank'),
(13, 'Indusind Bank'),
(14, 'Karnataka Bank'),
(15, 'Andhra Bank'),
(16, 'Oriental Bank Of Commerce'),
(17, 'Corporation Bank'),
(18, 'Bank Of India'),
(19, 'Indian Bank'),
(20, 'Union Bank Of India'),
(21, 'Bank Of Baroda'),
(22, 'Canara Bank');
