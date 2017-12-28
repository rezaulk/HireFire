-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 06:06 AM
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
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `uName` varchar(20) NOT NULL,
  `language` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `buyerId` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`uName`, `language`, `Name`, `buyerId`) VALUES
('admin', 'English', '', 1),
('reza', 'english', 'reza ul', 2),
('robi', 'english', 'robi ullah', 3),
('tamin', 'english', 'tanim ullah', 6),
('admin', 'Bangla', '', 7),
('reza', 'Urdu', '', 8),
('robi', 'French', '', 9),
('dsds', 'bangla', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `earning`
--

CREATE TABLE `earning` (
  `uName` varchar(30) NOT NULL,
  `totalEarning` int(11) NOT NULL,
  `eId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earning`
--

INSERT INTO `earning` (`uName`, `totalEarning`, `eId`) VALUES
('reza', 1111, 1);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `uName` varchar(20) NOT NULL,
  `attendFrom` date NOT NULL,
  `attendTo` date NOT NULL,
  `degree` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `educationId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`uName`, `attendFrom`, `attendTo`, `degree`, `area`, `educationId`) VALUES
('reza', '2017-12-03', '2017-12-12', 'Bsc', 'Cse', 1),
('dsds', '2017-12-13', '2017-12-06', 'ghnfds', 'nhbfgvdx', 2),
('dsds', '2017-12-13', '2017-12-06', 'ghnfds', 'nhbfgvdx', 3),
('dsds', '2017-12-13', '2017-12-06', 'ghnfds', 'nhbfgvdx', 4),
('dsds', '2017-12-13', '2017-12-06', 'ghnfds', 'nhbfgvdx', 5),
('dsds', '2017-12-13', '2017-12-06', 'ghnfds', 'nhbfgvdx', 6);

-- --------------------------------------------------------

--
-- Table structure for table `gigrequirements`
--

CREATE TABLE `gigrequirements` (
  `gigId` int(11) NOT NULL,
  `requirement` varchar(200) NOT NULL,
  `requirementId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gigrequirements`
--

INSERT INTO `gigrequirements` (`gigId`, `requirement`, `requirementId`) VALUES
(1, 'i want to take your master card :P ', 1);

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
('reza', 'I will do c#', 1, 'wordpress', 2147483647, ' i want to create wordpress', '1.jpg', '2017-12-12', 1),
('robi', 'i can do c++ project', 2, 'Programming & Tech', 12000, 'hjxbjhcbmcbc c', '2.jpg', '2017-12-13', 2),
('robi', 'i can do c++ project', 3, 'Programming & Tech', 12000, 'hjxbjhcbmcbc c', '3.jpg', '2017-12-13', 2),
('robi', 'Tanim', 4, 'Programming & Tech', 3000, 'sdfsdv', '4.jpg', '2017-12-07', 5),
('robi', 'asxacds csdv ', 5, 'Programming & Tech', 343535, 'sfcvxscdscsdcdcd', '5.jpg', '2017-12-20', 5),
('reza', 'I will do C# ', 6, 'Graphics & Design', 12, 'I will do C# i am good at java', '6.jpg', '2017-12-27', 0),
('reza', 'I am sddddddddddddzzzzzzzzzzzzzz', 7, 'Graphics & Design', 12, 'qwwe wwwwwwsddddddddddddddddd', '7.jpg', '2017-12-27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lastactivetime`
--

CREATE TABLE `lastactivetime` (
  `id` int(11) NOT NULL,
  `uName` varchar(30) NOT NULL,
  `activeDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lastactivetime`
--

INSERT INTO `lastactivetime` (`id`, `uName`, `activeDate`) VALUES
(8, 'reza', '2017-12-28'),
(9, 'robi', '2017-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `ordercomment`
--

CREATE TABLE `ordercomment` (
  `orderCommentId` int(30) NOT NULL,
  `orderId` int(11) NOT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `reply` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordercomment`
--

INSERT INTO `ordercomment` (`orderCommentId`, `orderId`, `comment`, `reply`) VALUES
(1, 1, 'hi', NULL),
(2, 1, NULL, 'kitare ki hoise bol');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `bName` varchar(11) NOT NULL,
  `sName` varchar(11) NOT NULL,
  `gId` int(11) NOT NULL,
  `date` date NOT NULL,
  `accountNumber` int(15) NOT NULL,
  `deadline` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `bName`, `sName`, `gId`, `date`, `accountNumber`, `deadline`, `status`) VALUES
(1, 'robi', 'robi', 2, '2017-12-05', 0, '2017-12-05', ''),
(2, 'reza', 'robi', 1, '2017-12-12', 1675428256, '0000-00-00', ''),
(3, 'ik tanim', 'robi', 1, '2017-12-05', 0, '2017-12-13', ''),
(4, 'efti', 'reza', 1, '2017-12-04', 0, '0000-00-00', 'active'),
(5, 'rajesh', 'reza', 2, '2017-12-13', 2222, '0000-00-00', 'active'),
(6, 'rajesh', 'reza', 4, '2017-12-13', 33333, '0000-00-00', 'pending'),
(7, 'rajesh', 'reza', 5, '2017-12-12', 2232323, '2017-12-11', 'pending'),
(8, 'robi', 'robi', 2, '2017-12-27', 534, '2018-01-02', 'pending'),
(9, 'robi', 'robi', 3, '2017-12-27', 2147483647, '2018-01-03', 'pending'),
(10, 'robi', 'tamin', 4, '2017-12-27', 3443, '2018-01-04', 'pending'),
(11, 'robi', 'dsds', 5, '2017-12-27', 4, '2018-01-04', 'pending'),
(12, 'robi', 'tamin', 4, '2017-12-27', 353534, '2018-01-03', 'pending'),
(13, 'robi', 'reza', 1, '2017-12-27', 2435, '2018-01-05', 'pending'),
(14, 'robi', 'robi', 2, '2017-12-27', 3534, '2018-01-03', 'pending'),
(15, 'robi', 'robi', 2, '2017-12-27', 35, '2018-01-03', 'pending'),
(16, 'robi', 'reza', 1, '2017-12-27', 43, '2018-01-02', 'pending'),
(17, 'robi', 'robi', 2, '2017-12-27', 232, '2018-01-03', 'pending');

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
  `address` varchar(20) NOT NULL,
  `sellerId` int(11) NOT NULL,
  `country` varchar(40) NOT NULL,
  `bankName` varchar(30) NOT NULL,
  `postalCode` int(20) NOT NULL,
  `number` int(30) NOT NULL,
  `workingHour` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`uName`, `accountNo`, `joiningDate`, `description`, `expertLevel`, `address`, `sellerId`, `country`, `bankName`, `postalCode`, `number`, `workingHour`) VALUES
('reza', 1674086295, '2017-12-08', 'hi i am reza ul karim .', 0, 'khilgaon', 1, '', 'bkash', 0, 0, 0),
('robi', 43242344, '2017-12-05', 'sfrseewrrwe', 2, 'safdf', 2, '', 'sdfsd', 0, 0, 0),
('dsds', 654321, '2017-12-26', '4321', 0, 'dcsc', 3, 'bangladesh', 'rocket', 2323, 2147483647, 0),
('dsds', 654321, '2017-12-26', '4321', 0, 'dcsc', 4, 'bangladesh', 'rocket', 2323, 2147483647, 0);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `uName` varchar(20) NOT NULL,
  `skill` varchar(20) NOT NULL,
  `skillId` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`uName`, `skill`, `skillId`) VALUES
('reza', 'wordpress', 1),
('robi', 'wordpress', 2),
('dsds', 'Desktop Softwere Dev', 3),
('dsds', 'Mobile Development', 4),
('dsds', 'Script and Utilities', 5),
('dsds', 'Desktop Softwere Dev', 6),
('dsds', 'Mobile Development', 7),
('dsds', 'Script and Utilities', 8),
('dsds', 'Desktop Softwere Dev', 9),
('dsds', 'Mobile Development', 10),
('dsds', 'Script and Utilities', 11),
('dsds', 'Desktop Softwere Dev', 12),
('dsds', 'Mobile Development', 13),
('dsds', 'Script and Utilities', 14),
('dsds', 'Desktop Softwere Dev', 15),
('dsds', 'Mobile Development', 16),
('dsds', 'Script and Utilities', 17);

-- --------------------------------------------------------

--
-- Table structure for table `spending`
--

CREATE TABLE `spending` (
  `spendingId` int(30) NOT NULL,
  `uName` varchar(20) NOT NULL,
  `totalSpend` int(11) NOT NULL,
  `lastmonthSpend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spending`
--

INSERT INTO `spending` (`spendingId`, `uName`, `totalSpend`, `lastmonthSpend`) VALUES
(1, 'reza', 1200, 100);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uName` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `type` int(11) NOT NULL,
  `joiningDate` date NOT NULL,
  `imageExt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uName`, `name`, `password`, `email`, `type`, `joiningDate`, `imageExt`) VALUES
('admin', 'Robi', '1', 'admin@gmail.com', 1, '2017-12-24', 'admin.jpg'),
('dsds', 'szcsdd csdc s', '123@', 'rezaaaaaa@gmail.com', 3, '2017-12-25', 'dsds.jpg'),
('efti', 'efti', 'efti@', 'wwee@gmail.com', 2, '2017-12-05', ''),
('rajesh', 'rajesh', 'rajesh@', 'wwee@gmail.com', 2, '2017-12-06', 'rajesh.jpg'),
('reza', 'zc sd ', 'reza@', 'reza@gmail.com', 3, '2017-12-05', 'reza.jpg'),
('robi', 'robi ullah', 'robi@', 'robi@gmail.com', 3, '2017-12-05', 'robi.jpg'),
('tamin', 'ik tanim ', '2', 'tanim@gmail.com', 1, '2017-12-04', 'tanim.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`buyerId`),
  ADD KEY `uName` (`uName`);

--
-- Indexes for table `earning`
--
ALTER TABLE `earning`
  ADD PRIMARY KEY (`eId`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`educationId`),
  ADD KEY `uName` (`uName`);

--
-- Indexes for table `gigrequirements`
--
ALTER TABLE `gigrequirements`
  ADD PRIMARY KEY (`requirementId`),
  ADD KEY `gigId` (`gigId`);

--
-- Indexes for table `gigs`
--
ALTER TABLE `gigs`
  ADD PRIMARY KEY (`gigId`),
  ADD KEY `uName` (`uName`);

--
-- Indexes for table `lastactivetime`
--
ALTER TABLE `lastactivetime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordercomment`
--
ALTER TABLE `ordercomment`
  ADD PRIMARY KEY (`orderCommentId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `orders_ibfk_2` (`sName`),
  ADD KEY `gId` (`gId`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`sellerId`),
  ADD KEY `uName` (`uName`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skillId`),
  ADD KEY `uName` (`uName`);

--
-- Indexes for table `spending`
--
ALTER TABLE `spending`
  ADD PRIMARY KEY (`spendingId`);

--
-- Indexes for table `tomessage`
--
ALTER TABLE `tomessage`
  ADD PRIMARY KEY (`messageId`),
  ADD KEY `fromUser` (`fromUser`),
  ADD KEY `toUser` (`toUser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `buyerId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `earning`
--
ALTER TABLE `earning`
  MODIFY `eId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `educationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gigrequirements`
--
ALTER TABLE `gigrequirements`
  MODIFY `requirementId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gigs`
--
ALTER TABLE `gigs`
  MODIFY `gigId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lastactivetime`
--
ALTER TABLE `lastactivetime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ordercomment`
--
ALTER TABLE `ordercomment`
  MODIFY `orderCommentId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `sellerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skillId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `spending`
--
ALTER TABLE `spending`
  MODIFY `spendingId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tomessage`
--
ALTER TABLE `tomessage`
  MODIFY `messageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buyers`
--
ALTER TABLE `buyers`
  ADD CONSTRAINT `buyers_ibfk_1` FOREIGN KEY (`uName`) REFERENCES `users` (`uName`);

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`uName`) REFERENCES `users` (`uName`);

--
-- Constraints for table `gigs`
--
ALTER TABLE `gigs`
  ADD CONSTRAINT `gigs_ibfk_1` FOREIGN KEY (`uName`) REFERENCES `users` (`uName`);

--
-- Constraints for table `sellers`
--
ALTER TABLE `sellers`
  ADD CONSTRAINT `sellers_ibfk_1` FOREIGN KEY (`uName`) REFERENCES `users` (`uName`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`uName`) REFERENCES `users` (`uName`);

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
