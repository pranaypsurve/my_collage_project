-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 11:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `localtrainticketbookingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `No.` int(15) NOT NULL,
  `source` varchar(50) NOT NULL,
  `dest` varchar(50) NOT NULL,
  `class` int(5) NOT NULL,
  `type` int(5) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`No.`, `source`, `dest`, `class`, `type`, `Price`) VALUES
(1, 'Thane', 'Nerul', 2, 0, 15),
(3, 'Thane', 'Rabale', 2, 1, 5),
(4, 'Thane', 'Ghansoli', 2, 1, 10),
(5, 'Thane', 'Kopar Khairane', 2, 1, 10),
(6, 'Thane', 'Turbhe', 2, 1, 15),
(7, 'Thane', 'Jui nagar', 2, 1, 15),
(8, 'Thane', 'Rabale', 1, 1, 55),
(9, 'Thane', 'Ghansoli', 1, 1, 75),
(10, 'Thane', 'Kopar Khairane', 1, 1, 90),
(11, 'Thane', 'Turbhe', 1, 1, 110),
(12, 'Thane', 'Jui nagar', 1, 1, 125),
(13, 'Thane', 'Nerul', 1, 1, 150),
(14, 'Thane', 'Airoli', 1, 1, 55),
(15, 'Airoli', 'Thane', 2, 1, 5),
(16, 'Airoli', 'Rabale', 2, 1, 5),
(17, 'Airoli', 'Ghansoli', 2, 1, 5),
(18, 'Airoli', 'Koparkhairne', 2, 1, 5),
(19, 'Airoli', 'Turbhe', 2, 1, 5),
(20, 'Airoli', 'Juinagar', 2, 1, 10),
(21, 'Airoli', 'Nerul', 2, 1, 10),
(22, 'Airoli', 'Thane', 1, 1, 55),
(23, 'Airoli', 'Rabale', 1, 1, 50),
(24, 'Airoli', 'Ghansoli', 1, 1, 50),
(25, 'Airoli', 'Kopar Khairane', 1, 1, 50),
(26, 'Airoli', 'Turbhe', 1, 1, 50),
(27, 'Airoli', 'Juinagar', 1, 1, 75),
(28, 'Airoli', 'Nerul', 1, 1, 75),
(29, 'Rabale', 'Thane', 2, 1, 5),
(30, 'Rabale', 'Airoli', 2, 1, 5),
(31, 'Rabale', 'Ghansoli', 2, 1, 5),
(32, 'Rabale', 'Koparkhairne', 2, 1, 5),
(33, 'Rabale', 'Turbhe', 2, 1, 5),
(34, 'Rabale', 'Juinagar', 2, 1, 10),
(35, 'Rabale', 'Nerul', 2, 1, 10),
(36, 'Rabale', 'Thane', 1, 1, 55),
(37, 'Rabale', 'Airoli', 1, 1, 50),
(38, 'Rabale', 'Ghansoli', 1, 1, 50),
(39, 'Rabale', 'Koparkhairne', 1, 1, 50),
(40, 'Rabale', 'Turbhe', 1, 1, 50),
(41, 'Rabale', 'Juinagar', 1, 1, 50),
(42, 'Rabale', 'Nerul', 1, 1, 75),
(43, 'Ghansoli', 'Thane', 2, 1, 10),
(44, 'Ghansoli', 'Airoli', 2, 1, 5),
(45, 'Ghansoli', 'Rabale', 2, 1, 5),
(46, 'Ghansoli', 'Koparkhairne', 2, 1, 5),
(47, 'Ghansoli', 'Turbhe', 2, 1, 5),
(48, 'Ghansoli', 'Juinagar', 2, 1, 10),
(49, 'Ghansoli', 'Nerul', 2, 1, 10),
(50, 'Ghansoli', 'Thane', 1, 1, 75),
(51, 'Ghansoli', 'Airoli', 1, 1, 50),
(52, 'Ghansoli', 'Rabale', 1, 1, 50),
(53, 'Ghansoli', 'Koparkhairne', 1, 1, 50),
(54, 'Ghansoli', 'Turbhe', 1, 1, 50),
(55, 'Ghansoli', 'Juinagar', 1, 1, 50),
(57, 'Thane', 'Airoli', 2, 1, 5),
(60, 'Jui Nagar', 'Nerul', 1, 1, 50),
(61, 'Jui Nagar', 'Nerul', 2, 1, 5),
(62, 'Nerul', 'Jui nagar', 1, 1, 50),
(63, 'Nerul', 'Jui nagar', 2, 1, 5),
(64, 'Nerul', 'Turbhe', 1, 1, 50),
(65, 'Nerul', 'Turbhe', 2, 1, 5),
(66, 'Nerul', 'Kopar Khairane', 1, 1, 50),
(67, 'Nerul', 'Kopar Khairane', 2, 1, 5),
(68, 'Nerul', 'Ghansoli', 1, 1, 50),
(69, 'Nerul', 'Ghansoli', 2, 1, 5),
(70, 'Nerul', 'Rabale', 1, 1, 75),
(71, 'Nerul', 'Rabale', 2, 1, 10),
(72, 'Nerul', 'Airoli', 1, 1, 75),
(73, 'Nerul', 'Airoli', 2, 1, 10),
(74, 'Nerul', 'Thane', 1, 1, 110),
(75, 'Nerul', 'Thane', 2, 1, 15),
(76, 'Jui Nagar', 'Thane', 1, 1, 110),
(77, 'Jui Nagar', 'Thane', 2, 1, 15),
(78, 'Jui Nagar', 'Airoli', 1, 1, 75),
(79, 'Jui Nagar', 'Airoli', 2, 1, 10),
(80, 'Jui Nagar', 'Rabale', 1, 1, 50),
(81, 'Jui Nagar', 'Rabale', 2, 1, 5),
(82, 'Jui Nagar', 'Ghansoli', 1, 1, 50),
(83, 'Jui Nagar', 'Ghansoli', 2, 1, 5),
(84, 'Jui Nagar', 'Kopar Khairane', 1, 1, 50),
(85, 'Jui Nagar', 'Kopar Khairane', 2, 1, 5),
(86, 'Jui Nagar', 'Turbhe', 1, 1, 50),
(87, 'Jui Nagar', 'Turbhe', 2, 1, 5),
(88, 'Turbhe', 'Kopar Khairane', 1, 1, 50),
(89, 'Turbhe', 'Kopar Khairane', 2, 1, 5),
(90, 'Turbhe', 'Ghansoli', 1, 1, 50),
(91, 'Turbhe', 'Ghansoli', 2, 1, 5),
(92, 'Turbhe', 'Rabale', 1, 1, 50),
(93, 'Turbhe', 'Rabale', 2, 1, 5),
(94, 'Turbhe', 'Airoli', 1, 1, 50),
(95, 'Turbhe', 'Airoli', 2, 1, 5),
(96, 'Turbhe', 'Thane', 1, 1, 110),
(97, 'Turbhe', 'Thane', 2, 1, 10),
(98, 'Kopar Khairane', 'Ghansoli', 1, 1, 50),
(99, 'Kopar Khairane', 'Ghansoli', 2, 1, 5),
(100, 'Kopar Khairane', 'Rabale', 1, 1, 50),
(101, 'Kopar Khairane', 'Rabale', 2, 1, 5),
(102, 'Kopar Khairane', 'Airoli', 1, 1, 50),
(103, 'Kopar Khairane', 'Airoli', 2, 1, 5),
(104, 'Kopar Khairane', 'Thane', 1, 1, 75),
(105, 'Kopar Khairane', 'Thane', 2, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `T_No.` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL,
  `dest` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Class` int(2) NOT NULL,
  `NoOfpass` int(11) NOT NULL,
  `card_no` int(25) NOT NULL,
  `expmonth` int(2) NOT NULL,
  `expyear` int(2) NOT NULL,
  `cvv` int(3) NOT NULL,
  `pin` int(4) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`T_No.`, `email`, `source`, `dest`, `Name`, `Class`, `NoOfpass`, `card_no`, `expmonth`, `expyear`, `cvv`, `pin`, `Timestamp`, `Amt`) VALUES
(12, 'pranay@gmail.com', 'Airoli', 'Ghansoli', 'PRANAY', 1, 2, 2147483647, 1, 2019, 333, 1420, '2019-06-22 06:53:00', 100),
(13, 'pranay@gmail.com', 'Airoli', 'Ghansoli', 'PRANAY', 1, 2, 2147483647, 1, 2019, 456, 4566, '2019-06-22 06:53:41', 100);

-- --------------------------------------------------------

--
-- Table structure for table `userdatabase`
--

CREATE TABLE `userdatabase` (
  `UserID` int(4) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DoB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdatabase`
--

INSERT INTO `userdatabase` (`UserID`, `Name`, `Email`, `Gender`, `password`, `DoB`) VALUES
(6, 'pranay', 'pranay@gmail.com', 'M', '123456', '1997-10-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`No.`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`T_No.`);

--
-- Indexes for table `userdatabase`
--
ALTER TABLE `userdatabase`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `No.` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `T_No.` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `userdatabase`
--
ALTER TABLE `userdatabase`
  MODIFY `UserID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
