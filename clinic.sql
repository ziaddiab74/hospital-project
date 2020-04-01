-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 04:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(80) NOT NULL,
  `password` varchar(8) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `fullname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `phone`, `fullname`) VALUES
('ziad', '123', '20', 'ziad diab'),
('zizo', '1234', '111', 'ziad diab'),
('aged', 'aalala', '0101', 'ziad diab'),
('aged', 'aalala', '0101', 'ziad diab'),
('salmaa', 'jjjjjjjj', '01121116081', 'salmadiab'),
('ziadd', '1234', '23878293', 'ziad diab'),
('ora', '123', '4324234', 'xsssqd'),
('hhh', '123', '98787', 'hhjbh'),
('janan', 'jantan', '01111743983', 'jana mohamed diab'),
('zoz', '12345678', '01100036614', 'ziad diabbb'),
('zoz', '12345678', '01100036614', 'moaaz mohamed'),
('zozz', '12345678', '01100036615', 'ahmad khaled'),
('', '12345678', '', ''),
('ahly', '12345678', '01116789988', 'ziad mohamed'),
('', '12345678', '', ''),
('', '123', '', ''),
('', '123', '', ''),
('hhh', '123456', '23132131232', 'jdsdsasad sd'),
('', '123456', '', ''),
('salmaa', '12345678', '01100036614', 'salmaa'),
('salmaa', '123456', '01100036614', 'salmaa'),
('salmaaa', '1234567', '0110003661', 'salmaaa'),
('', '123', '', ''),
('ziad', '12345678', '987987987', 'ziad diab'),
('usef', '123456', '02132908321', 'ucef mohamed'),
('', '123', '', ''),
('', 'kjhcsa', '', ''),
('123', '12345678', '3894287432', 'hksd'),
('', '123', '', ''),
('', '123', '', ''),
('', '123', '', ''),
('', '123', '', ''),
('khaled', '123456', '23132131232', 'ahmad mohamed'),
('', 'mdsnj', '', ''),
('', '123456', '', ''),
('', '123', '', ''),
('', '123', '', ''),
('', '123', '', ''),
('', '123', '', ''),
('', '222', '', ''),
('', '3', '', ''),
('', '2', '', ''),
('', '6', '', ''),
('', 'ffffffff', '', ''),
('', '12332113', '', ''),
('', '333', '', ''),
('', 'hb', '', ''),
('', 'dd', '', ''),
('', 'l;ms', '', ''),
('', 'akmdxk', '', ''),
('', 'kdm', '', ''),
('', 'kdm', '', ''),
('', '87987987', '', ''),
('', 'lkmlk', '', ''),
('', '123', '', ''),
('', 'kmcslk', '', ''),
('', 'k;lms', '', ''),
('', 'klm', '', ''),
('', 'nsmjnlkn', '', ''),
('', 'lknlk', '', ''),
('', 'k;lmdkmc', '', ''),
('', '123', '', ''),
('', '123', '', ''),
('', '7988', '', ''),
('', '123', '', ''),
('', '92983737', '', ''),
('haha', 'hahahaha', 'i099', 'haha'),
('', 'haha', '', ''),
('', 'hahahaha', '', ''),
('', 'kln', '', ''),
('', '123', '', ''),
('', '123', '', ''),
('', '123', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
