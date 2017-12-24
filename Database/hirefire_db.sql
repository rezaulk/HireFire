-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 09:38 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `uName` varchar(20) NOT NULL,
  `language` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`uName`, `language`) VALUES
('admin', 'English'),
('robi', 'english'),
('reza', 'english');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `uName` varchar(20) NOT NULL,
  `attendFrom` date NOT NULL,
  `attendTo` date NOT NULL,
  `degree` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`uName`, `attendFrom`, `attendTo`, `degree`, `area`) VALUES
('reza', '2017-12-03', '2017-12-12', 'Bsc', 'Cse');

-- --------------------------------------------------------

--
-- Table structure for table `gigrequirements`
--

CREATE TABLE `gigrequirements` (
  `gigId` int(11) NOT NULL,
  `requirement` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gigrequirements`
--

INSERT INTO `gigrequirements` (`gigId`, `requirement`) VALUES
(2, 'i want to take your master card :P ');

-- --------------------------------------------------------

--
-- Table structure for table `gigs`
--

CREATE TABLE `gigs` (
  `uName` varchar(20) NOT NULL,
  `gigTitle` varchar(50) NOT NULL,
  `gigId` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `gDescription` varchar(500) NOT NULL,
  `imgExt` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `orderCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gigs`
--

INSERT INTO `gigs` (`uName`, `gigTitle`, `gigId`, `category`, `price`, `gDescription`, `imgExt`, `date`, `orderCount`) VALUES
('reza', 'wordpress', 1, 'wordpress', 250, 'i want to create wordpress', 'reza.jpg', '2017-12-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `last active time`
--

CREATE TABLE `last active time` (
  `uName` varchar(20) NOT NULL,
  `activeDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `last active time`
--

INSERT INTO `last active time` (`uName`, `activeDate`) VALUES
('reza', '2017-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `ordercomment`
--

CREATE TABLE `ordercomment` (
  `orderId` int(11) NOT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `reply` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordercomment`
--

INSERT INTO `ordercomment` (`orderId`, `comment`, `reply`) VALUES
(1, 'hi', NULL),
(1, NULL, 'kitare ki hoise bol');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `bId` int(11) NOT NULL,
  `sId` int(11) NOT NULL,
  `gId` int(11) NOT NULL,
  `date` date NOT NULL,
  `accountNumber` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `bId`, `sId`, `gId`, `date`, `accountNumber`) VALUES
(1, 2, 2, 1, '2017-12-11', 1675428256);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `uName` varchar(20) NOT NULL,
  `accountNo` int(15) NOT NULL,
  `joiningDate` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `expertLevel` int(2) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`uName`, `accountNo`, `joiningDate`, `description`, `expertLevel`, `address`) VALUES
('reza', 1674086295, '2017-12-08', 'hi i am reza ul karim .', 0, 'khilgaon');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `uName` varchar(20) NOT NULL,
  `skill` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`uName`, `skill`) VALUES
('reza', 'wordpress');

-- --------------------------------------------------------

--
-- Table structure for table `spending`
--

CREATE TABLE `spending` (
  `uName` varchar(20) NOT NULL,
  `totalSpend` int(11) NOT NULL,
  `lastmonthSpend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spending`
--

INSERT INTO `spending` (`uName`, `totalSpend`, `lastmonthSpend`) VALUES
('reza', 1200, 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `type` int(11) NOT NULL,
  `joiningDate` date NOT NULL,
  `imageExt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uName`, `password`, `email`, `type`, `joiningDate`, `imageExt`) VALUES
('admin', '1', 'admin@gmail.com', 1, '2017-12-24', 'admin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gigs`
--
ALTER TABLE `gigs`
  ADD PRIMARY KEY (`gigId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;