-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 12:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_tbl`
--

CREATE TABLE `food_tbl` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_tbl`
--

INSERT INTO `food_tbl` (`firstname`, `lastname`, `contact`, `address`, `location`) VALUES
('John Dino', 'Canete', 2147483647, '113 Quezon blvd cebu city', 'Cebu');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_tbl`
--

CREATE TABLE `hotel_tbl` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_tbl`
--

INSERT INTO `hotel_tbl` (`firstname`, `lastname`, `email`, `age`, `location`) VALUES
('John Dino', 'Canete', 'jcanete.shs@gmail.com', 100, 'Cebu'),
('Dino', 'canete', 'jcanete.shs@gmail.com', 11, 'Cebu'),
('Dino', 'canete', 'jcanete.shs@gmail.com', 11, 'Cebu'),
('John Dino', 'Canete', 'jcanete.shs@gmail.com', 100, 'Cebu'),
('John Dino', 'Canete', 'jcanete.shs@gmail.com', 100, 'Cebu');

-- --------------------------------------------------------

--
-- Table structure for table `tusers`
--

CREATE TABLE `tusers` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tusers`
--

INSERT INTO `tusers` (`username`, `password`, `email`) VALUES
('dino', '202cb962ac59075b964b07152d234b70', 'jcanete.shs@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
