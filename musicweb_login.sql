-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 05:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicweb_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ph_num` int(10) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`username`, `email`, `ph_num`, `msg`) VALUES
('Ayush', 'ayush@gmail.com', 1234567890, 'This is beautiful website'),
('Ayush', 'ayush@gmail.com', 987654321, 'Meow Meow'),
('Kedar', 'kedar@gmail.com', 2147483647, 'This is good website');

-- --------------------------------------------------------

--
-- Table structure for table `logindb`
--

CREATE TABLE `logindb` (
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logindb`
--

INSERT INTO `logindb` (`username`, `email`, `password`) VALUES
('Ayush', 'ayush@gmail.com', 'e51b8ec1840a48c9e0e5f90c3e2eda8d'),
('Testing', 'test123@gmail.com', 'ac1c8d64fd23ae5a7eac5b7f7ffee1fa'),
('Isha', 'isha@gmail.com', '751affcfcae53c3c0ff80220e1687ffd'),
('Kedar', 'kedar@gmail.com', '0298d5a1cebc98a50b54d0df4c135fe3'),
('Aayushi', 'aayushi@gmail.com', '70b76d3944ac5147d620b9bd6dcee148');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
