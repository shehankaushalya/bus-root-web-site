-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 07:34 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus_root`
--
CREATE DATABASE IF NOT EXISTS `bus_root` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bus_root`;

-- --------------------------------------------------------

--
-- Table structure for table `root`
--

CREATE TABLE IF NOT EXISTS `root` (
  `from_place` varchar(100) NOT NULL,
  `to_place` varchar(100) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `root`
--

INSERT INTO `root` (`from_place`, `to_place`, `start_time`, `end_time`) VALUES
('colombo', 'badulla', '00:00:00', '08:00:00'),
('colombo', 'badulla', '00:30:00', '08:30:00'),
('colombo', 'badulla', '01:30:00', '10:00:00'),
('colombo', 'badulla', '03:00:00', '12:00:00'),
('colombo', 'badulla', '04:30:00', '14:00:00'),
('awissawella', 'rathnapura', '05:00:00', '07:00:00'),
('awissawella', 'rathnapura', '05:00:00', '07:00:00'),
('awissawella', 'rathnapura', '07:00:00', '10:00:00'),
('awissawella', 'rathnapura', '10:00:00', '14:00:00'),
('awissawella', 'rathnapura', '12:00:00', '15:30:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
