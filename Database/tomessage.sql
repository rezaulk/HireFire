-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 12:49 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hirefire_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tomessage`
--

CREATE TABLE `tomessage` (
  `messageId` int(11) NOT NULL,
  `conversionNumber` int(11) NOT NULL,
  `fromUser` varchar(30) NOT NULL,
  `toUser` varchar(30) NOT NULL,
  `allmessage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tomessage`
--

INSERT INTO `tomessage` (`messageId`, `conversionNumber`, `fromUser`, `toUser`, `allmessage`) VALUES
(1, 1, 'efti', 'robi', 'Hi there'),
(2, 1, 'robi', 'efti', 'Hi'),
(3, 5, 'admin', 'dsds', 'sdfdddddddd'),
(4, 1, 'efti', 'robi', 'How are you?'),
(14, 1, 'robi', 'efti', 'sdf'),
(15, 1, 'robi', 'efti', 'qwe'),
(16, 1, 'robi', 'efti', 'asd'),
(17, 1, 'robi', 'efti', 'df'),
(18, 1, 'robi', 'efti', 'qwe r'),
(19, 6, 'rajesh', 'efti', 'asd'),
(20, 6, 'efti', 'rajesh', 'sdsd'),
(21, 6, 'rajesh', 'efti', 'sdsd'),
(22, 6, 'efti', 'rajesh', 'sdsd'),
(23, 6, 'efti', 'rajesh', 'sdsd'),
(24, 7, 'robi', 'rajesh', 'sdsd'),
(25, 8, 'robi', 'robi', 'sdfg'),
(26, 8, 'robi', 'robi', 'hjkl'),
(27, 9, 'reza', 'robi', 'dfg'),
(28, 9, 'reza', 'robi', 'sdf'),
(29, 9, 'reza', 'robi', 'sdf'),
(30, 9, 'reza', 'robi', 'zxc'),
(31, 9, 'reza', 'robi', 'xcxc'),
(32, 9, 'reza', 'robi', 'sdsd'),
(33, 9, 'reza', 'robi', 'sdsdsd'),
(34, 9, 'reza', 'robi', 'df'),
(35, 9, 'reza', 'robi', 'asd'),
(36, 9, 'reza', 'robi', 'dxf'),
(37, 9, 'reza', 'robi', 'dfsqqqqqqqqqqq'),
(38, 9, 'reza', 'robi', 'asdddd'),
(39, 9, 'reza', 'robi', 'zxxxxxxxxxx'),
(40, 9, 'reza', 'robi', 'hghg'),
(41, 9, 'reza', 'robi', 'xcvcv'),
(42, 9, 'reza', 'robi', 'xcxc'),
(43, 9, 'reza', 'robi', 'zdfd'),
(44, 9, 'reza', 'robi', 'dfdf'),
(45, 9, 'reza', 'robi', 'sdf'),
(46, 9, 'reza', 'robi', 'sdfdf'),
(47, 8, 'robi', 'robi', 'sdf'),
(48, 1, 'robi', 'efti', 'asdsd'),
(49, 1, 'robi', 'efti', 'sdf'),
(50, 10, 'efti', 'efti', 'sdf'),
(51, 10, 'efti', 'efti', 'dsfsdf'),
(52, 1, 'robi', 'efti', 'ssssssssss'),
(53, 1, 'efti', 'robi', 'sd'),
(54, 1, 'robi', 'efti', 'sdf'),
(55, 1, 'efti', 'robi', 'dsfdsf'),
(56, 1, 'efti', 'robi', 'zxczxc'),
(57, 1, 'robi', 'efti', 'sd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tomessage`
--
ALTER TABLE `tomessage`
  ADD PRIMARY KEY (`messageId`),
  ADD KEY `fromUser` (`fromUser`),
  ADD KEY `toUser` (`toUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tomessage`
--
ALTER TABLE `tomessage`
  MODIFY `messageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tomessage`
--
ALTER TABLE `tomessage`
  ADD CONSTRAINT `tomessage_ibfk_1` FOREIGN KEY (`fromUser`) REFERENCES `users` (`uName`),
  ADD CONSTRAINT `tomessage_ibfk_2` FOREIGN KEY (`toUser`) REFERENCES `users` (`uName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
