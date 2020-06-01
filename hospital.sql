-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 09:23 AM
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
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(3000) NOT NULL,
  `Full name` text NOT NULL,
  `Email` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(50) NOT NULL,
  `doctor_id` int(50) NOT NULL,
  `patient_id` int(50) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `serial_no` int(50) NOT NULL,
  `details` text NOT NULL,
  `prescription` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `doctor_id`, `patient_id`, `schedule_id`, `date`, `created_date`, `serial_no`, `details`, `prescription`, `status`) VALUES
(1, 5, 6, 6, '28/01/2018', '01/02/18', 1, '', '', 'pending'),
(2, 5, 16, 6, '28/01/2018', '01/02/18', 2, '', '', 'pending'),
(3, 4, 16, 9, '02/02/2018', '01/02/18', 1, '', '', 'pending'),
(4, 4, 5, 9, '16/02/2018', '16/02/18', 1, '', '', 'pending'),
(5, 5, 5, 6, '25/02/2018', '16/02/18', 1, '', '', 'pending'),
(6, 5, 6, 6, '18/02/2018', '19/02/18', 1, '', '', 'pending'),
(7, 4, 6, 10, '21/02/2018', '19/02/18', 1, '', 'Prescription Details here', 'pending'),
(8, 4, 13, 9, '23/03/2018', '16/03/18', 1, '', '', 'pending'),
(9, 2, 13, 11, '25/03/2018', '16/03/18', 1, '', '', 'pending'),
(10, 4, 6, 10, '28/03/2018', '16/03/18', 1, '', 'Hello I am', 'pending'),
(11, 2, 6, 11, '11/03/2018', '16/03/18', 1, '', '', 'pending'),
(12, 5, 6, 6, '04/03/2018', '16/03/18', 1, '', '', 'pending'),
(13, 4, 6, 9, '09/03/2018', '16/03/18', 1, '', 'sdfdsfdsafds', 'pending'),
(14, 2, 6, 11, '18/03/2018', '16/03/18', 1, '', '', 'pending'),
(15, 5, 6, 7, '05/03/2018', '16/03/18', 1, '', '', 'pending'),
(16, 5, 6, 6, '25/02/2018', '16/03/18', 2, '', '', 'pending'),
(19, 4, 5, 9, '09/03/2018', '29/03/18', 2, '', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Full name` text NOT NULL,
  `Password` varchar(2000) NOT NULL,
  `Email` varchar(2000) NOT NULL,
  `Phone number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `description`) VALUES
(3, 'Orthopedic  ', 'Orthopedic   Descriptions'),
(4, 'Neuro Surgery   ', 'Neuro Surgery   department');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Full name` text NOT NULL,
  `Age` int(200) NOT NULL,
  `Description` text NOT NULL,
  `Specialty` text NOT NULL,
  `Email` varchar(2000) NOT NULL,
  `Password` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor diagnose`
--

CREATE TABLE `doctor diagnose` (
  `diagnose` varchar(250) NOT NULL,
  `patient username` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `Name` text NOT NULL,
  `Address` varchar(2000) NOT NULL,
  `Phone number` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inpatients`
--

CREATE TABLE `inpatients` (
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `TIme of reservation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `fullname` varchar(250) NOT NULL,
  `phone` int(250) NOT NULL,
  `age` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`fullname`, `phone`, `age`) VALUES
('salmadiab', 1116789988, 55);

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `comment` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `phone` int(250) NOT NULL,
  `age` int(250) NOT NULL,
  `Username` varchar(120) DEFAULT NULL,
  `UserEmail` varchar(200) DEFAULT NULL,
  `Password` varchar(250) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `phone`, `age`, `Username`, `UserEmail`, `Password`, `RegDate`) VALUES
(2, 'ziad diab', 0, 0, 'zizo', 'ziaddiab74@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-27 07:09:13'),
(3, 'youssef mohamed', 0, 0, 'youssef', 'ziaddiab74@g', 'e78582c7fa761cb9358009503f2810a9', '2020-05-27 07:27:11'),
(4, 'omar badry', 0, 0, 'omar', 'ziaddiab9@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-27 07:29:12'),
(5, 'bxshjshx', 0, 0, 'ziad', 'hh@g.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-27 07:51:36'),
(7, 'ziad diab', 1100036614, 0, 'zizooo', 'moaaz_diab@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-27 08:23:34'),
(8, 'hhjbh', 1116789988, 0, 'ziadd', 'ziad1708501@miuegypt.edu.eg', '8115242f9d9268a71be54e95b30fd467', '2020-05-27 08:35:12'),
(9, 'hhh', 1100036615, 0, 'ahmad', 'moaaz_diab@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-27 08:36:34'),
(10, 'ziad diab', 1100036614, 0, 'zizo0', 'ziad1708501@miuegypt.edu.eg', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-28 21:34:10'),
(11, 'user', 1100036611, 55, 'user', 'user@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-28 21:55:45'),
(12, 'ziad diab', 1100036614, 99, 'zizoooooo', 'user@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-29 00:36:52'),
(13, 'ziad diabb', 1100036614, 2, 'vv', 'user@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-29 00:45:55'),
(14, 'bxshjshx', 1100036614, 22, 'vvvv', 'ziaddiab74@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-29 06:58:26'),
(15, 'ziad diab', 1100036614, 99, 'z', 'user@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-29 06:59:47'),
(16, 'salmadiab', 1116789988, 55, 'omarr', 'user@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-29 07:01:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
