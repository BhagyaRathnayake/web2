-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2024 at 05:17 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cineplex1`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `name`, `date`, `time`, `price`, `image`) VALUES
(8, 'batman', 'Monday', '10.00-1.00', '600', '../image/p2.jpg'),
(10, 'batman', 'Monday', '10.00-1.00', '600', '../image/p2.jpg'),
(11, 'batman', 'Monday', '10.00-1.00', '600', '../image/p2.jpg'),
(12, 'batman', 'Monday', '10.00-1.00', '600', '../image/p2.jpg'),
(13, 'batman', 'Monday', '10.00-1.00', '600', '../image/p2.jpg'),
(14, 'batman', 'Monday', '10.00-1.00', '600', '../image/p2.jpg'),
(15, 'batman', 'Monday', '10.00-1.00', '600', '../image/p2.jpg'),
(19, 'batman', 'Monday', '10.00-1.00', '600', '../image/p2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ticketbooking`
--

DROP TABLE IF EXISTS `ticketbooking`;
CREATE TABLE IF NOT EXISTS `ticketbooking` (
  `bookingid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `filmname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `seats` varchar(200) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticketbooking`
--

INSERT INTO `ticketbooking` (`bookingid`, `name`, `time`, `date`, `filmname`, `email`, `seats`) VALUES
(1, 'dileeka supun', 'Monday', '', 'batman', 'user@gmail.com', '4,5'),
(2, 'Pasan Bimsara', 'Monday', '', 'batman', 'user@mail.com', '29,30'),
(3, 'Pasan Bimsara', 'Monday', '10.00-1.00', 'batman', 'user23@gmail.com', '42,43'),
(4, '', '', '', '', '', '63,64'),
(5, '', '', '', '', '', '56,57'),
(6, '', '', '', '', '', '56,57'),
(7, 'Pasan Bimsara', 'Monday', '', 'batman', 'user23@gmail.com', '52,53'),
(8, 'Pasan Bimsara', 'Monday', '10.00-1.00', 'batman', 'user23@gmail.com', '65,66'),
(9, '', '', '', '', '', '68,69'),
(10, '', '', '', '', '', '68,69'),
(11, 'Pasan Bimsara', 'Monday', '10.00-1.00', 'batman', 'user23@gmail.com', '56,57'),
(12, 'Pasan Bimsara', 'Monday', '10.00-1.00', 'batman', 'user23@gmail.com', '56,57'),
(13, 'Pasan Bimsara', 'Monday', '10.00-1.00', 'batman', 'user23@gmail.com', '32,33');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `number` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `number`, `email`, `password`, `usertype`) VALUES
(1, 'DInuja Nimansith', '0776457323', 'assistant@gmail.com', '12345', 'co-admin'),
(3, 'dileeka supun', '0779473037', 'user@gmail.com', '123456', 'user'),
(4, 'Pasan Bimsara', '0789139761', 'user@mail.com', '111111', 'Admin'),
(5, 'Pasan Bimsara', '0789139761', 'user23@gmail.com', '111111', 'user'),
(6, 'Pasan Bimsara', '0789139761', 'ass@mail.com', '111111', 'co-admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
