-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 01:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campusvisit`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `fName` varchar(40) NOT NULL,
  `lName` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `add1` varchar(40) NOT NULL,
  `add2` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `stat` varchar(40) NOT NULL,
  `zip` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `inter` varchar(40) NOT NULL,
  `hsName` varchar(40) NOT NULL,
  `grad` varchar(40) NOT NULL,
  `hsadd` varchar(40) NOT NULL,
  `hscity` varchar(40) NOT NULL,
  `hsstate` varchar(40) NOT NULL,
  `hszip` varchar(40) NOT NULL,
  `count2` varchar(40) NOT NULL,
  `semes` varchar(40) NOT NULL,
  `visit` varchar(40) NOT NULL,
  `tim` varchar(40) NOT NULL,
  `clubs` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`fName`, `lName`, `email`, `phone`, `add1`, `add2`, `city`, `stat`, `zip`, `country`, `inter`, `hsName`, `grad`, `hsadd`, `hscity`, `hsstate`, `hszip`, `count2`, `semes`, `visit`, `tim`, `clubs`) VALUES
('Sam', 'Luke', 'samlukeiscool@gmail.com', '9131123344', '20000000 lane', 'red tree drive', 'Warrensburg', 'Maine', '65074', 'usa', 'compsci', '', '', '', '', '', '', 'usa', 'spring1', '2021-11-30', '12AM', 'Abroad'),
('This person', 'is', 'roooood@yahoo.com', '8902343454', '23423242', '', 'Overland Park', 'KS', '66214', 'usa', 'compsci', '', '', '', '', '', '', 'usa', 'spring1', '2021-12-15', '2PM', 'Abroad'),
('example', 'example', 'example@example.com', '222-222-2222', '3456789', '', 'Juneo', 'Alaska', '70002', 'usa', 'compsci', '', '', '', '', '', '', 'usa', 'spring1', '', '12AM', 'Sports');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
