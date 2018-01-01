-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2018 at 07:27 AM
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
('rakib', 'bangla', '', 11),
('rakib', 'spanish', '', 12),
('raj', 'bangla', '', 13),
('faysal', 'bangla', '', 16),
('faysal', 'english', '', 17),
('tamim', 'bangla', '', 18);

-- --------------------------------------------------------

--
-- Table structure for table `companyprofit`
--

CREATE TABLE `companyprofit` (
  `pId` int(11) NOT NULL,
  `gId` int(11) NOT NULL,
  `profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyprofit`
--

INSERT INTO `companyprofit` (`pId`, `gId`, `profit`) VALUES
(1, 2, 12),
(2, 13, 24),
(3, 1, 2500);

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
('rakib', '2017-12-27', '2017-12-30', 'BSC', '', 7),
('raj', '2017-12-19', '2017-12-29', 'MS', '', 8);

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
  `gigTitle` varchar(100) NOT NULL,
  `gigId` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
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
('reza', 'I will do C# ', 6, 'Graphics & Design', 5000, 'I will do C# i am good at java', '6.jpg', '2017-12-27', 0),
('reza', 'I Will Design Awesome Logo', 7, 'Graphics & Design', 3000, 'I’ll create distinctive designs with timeless character and minimalistic feeling that are always connected to your brand and your audience.\r\n\r\nIf quality is what you are looking for, quality is what you pay for-- this gives your brand credibility. I will spend as much time as needed to create the perfect logo for your brand. This is a Superior Quality / Time-Intensive Gig.\r\nWhat you will get from my Service:', '7.jpg', '2017-12-27', 0),
('rakib', 'I will do graphics & design', 8, 'Graphics & Design', 2000, 'I very good at  graphics & design.', '8.jpg', '2017-12-28', 0),
('rakib', 'I will do word press.', 9, 'Programming & Tech', 1000, 'I am good at word press.', '9.jpg', '2017-12-28', 0),
('rakib', 'I will do c#', 10, 'Programming & Tech', 1000, 'I am very good at cshar.', '10.jpg', '2017-12-28', 0),
('raj', 'I will do C++', 11, 'Programming & Tech', 2000, 'I am good at cplus plus.', '11.jpg', '2017-12-28', 0),
('reza', 'I Will Rank  First In Google', 33, 'Digital Marketing', 1000, '#We simply help your business, make more money.\r\n\r\n-If you spend $1 on internet marketing and get $2 back, why not invest $1 000 000 and get ', '12.jpg', '2017-12-29', 0),
('reza', 'I Will Edit And Design A Resume', 34, 'Writing & Translation', 500, 'You get interviews, while other applicants get put in the â€˜Noâ€™ pile. You provide your resume ', '34.jpg', '2017-12-29', 0),
('reza', 'I Will Create  Whiteboard Animation ', 35, 'Video & Animation', 2000, 'PLEASE READ EVERYTHING BEFORE ORDERING :\r\n- Whiteboard Animation + Voice Over', '35.jpg', '2017-12-29', 0),
('reza', 'I Will Record Male Voice Over', 36, 'Music & Audio', 1000, 'Need a pro voice-over for a project? I have the talent, equipment, and A HOME STU', '36.jpg', '2017-12-29', 0),
('robi', 'I Will Design A Logo', 37, 'Graphics & Design', 1500, 'Before getting started on this Gig. I research, mood board and pull design inspiration before even', '37.jpg', '2017-12-29', 0),
('robi', 'I Will Viral Facebook Page Promotion', 38, 'Digital Marketing', 100, 'I am Sukhveer here to provide you best service. \r\nAre you looking for Facebook page promoter?', '38.jpg', '2017-12-29', 0),
('robi', 'I Will Edit And Design A Resume', 39, 'Writing & Translation', 1500, 'You get interviews, while other applicants get put in the â€˜Noâ€™ pile. You provide your resume and i ', '39.jpg', '2017-12-29', 0),
('robi', 'I Will Create An Animated Explainer Video', 40, 'Video & Animation', 1500, 'People like visual content; its bite-size delivery simply enhances communication and trust between you a', '40.jpg', '2017-12-29', 0),
('robi', 'I Will Do Web Programming', 41, 'Programming & Tech', 1500, 'I am professional web developer working form 7 years I develop many websites for different companies', '41.jpg', '2017-12-29', 0),
('robi', 'I Will Record A 16 Bar Verse Rap Song', 42, 'Music & Audio', 1500, 'The process is FAST & EASY. Simply share with me what you would like your song to be about,', '42.jpg', '2017-12-29', 0),
('rakib', 'I Will Design Responsive  Email Template', 43, 'Digital Marketing', 1000, 'Iâ€™m expert in designing responsive mailchimp email template.\r\nDo you need a professional eye catching e', '43.jpg', '2017-12-29', 0),
('rakib', 'I Will Write Articles', 44, 'Writing & Translation', 2000, 'Companies mean well when they launch their blog. But usually, they wind up taking a seat on the back burner in the name of more pressing matters.', '44.jpg', '2017-12-29', 0),
('rakib', 'I Will Make A Rap Song', 45, 'Music & Audio', 1000, 'Do you have a website, business or brand that needs something to bring in attention. Hip hop/Rap is currently one of the most popular music genr', '45.jpg', '2017-12-29', 0),
('raj', ' Will Design Business Card With', 46, 'Graphics & Design', 1200, 'I will create professional, unique, modern two-sided business card design within 24 hours for your busi', '46.jpg', '2017-12-29', 0),
('raj', 'I Will Skyrocket Your Google Rankings', 47, 'Digital Marketing', 1500, '\r\nThese days Google doesnâ€™t mess around and you shouldnâ€™t either.\r\nIf you want a real boost in your rankings, you abs', '47.jpg', '2017-12-29', 0),
('raj', 'I Will Write A Catchy Biography Or Bio', 48, 'Writing & Translation', 1500, 'Oftentimes, it can be challenging and even awkward to write about yourself in third person. (Don', '48.jpg', '2017-12-29', 0),
('raj', 'I Will Record Any Voice Over, Today', 49, 'Music & Audio', 2000, 'I can clean it up, color and add realistic landscaping that is relevant for the area the property is in. ', '49.jpg', '2017-12-29', 0);

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
(8, 'reza', '2017-12-29'),
(9, 'robi', '2017-12-29'),
(12, 'rakib', '2017-12-29'),
(13, 'raj', '2017-12-29'),
(14, 'admin', '2017-12-29'),
(15, 'ehsan', '2017-12-29'),
(16, 'tamim', '2017-12-29');

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
  `status` varchar(10) NOT NULL,
  `fileExt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `bName`, `sName`, `gId`, `date`, `accountNumber`, `deadline`, `status`, `fileExt`) VALUES
(1, 'robi', 'robi', 2, '2017-12-05', 0, '2017-12-05', 'complete', '2.txt'),
(2, 'reza', 'robi', 1, '2017-12-12', 1675428256, '0000-00-00', 'active', ''),
(3, 'ik tanim', 'robi', 1, '2017-12-05', 0, '2017-12-13', 'active', ''),
(4, 'efti', 'reza', 1, '2017-12-04', 0, '0000-00-00', 'complete', '1.jpg'),
(5, 'rajesh', 'reza', 2, '2017-12-13', 2222, '0000-00-00', 'complete', '2.txt'),
(6, 'rajesh', 'reza', 4, '2017-12-13', 33333, '0000-00-00', 'complete', '4.docx'),
(7, 'rajesh', 'reza', 5, '2017-12-12', 2232323, '2017-12-11', 'complete', '5.JPG'),
(8, 'robi', 'robi', 2, '2017-12-27', 534, '2018-01-02', 'complete', '2.txt'),
(9, 'robi', 'robi', 3, '2017-12-27', 2147483647, '2018-01-03', 'active', ''),
(10, 'robi', 'tamin', 4, '2017-12-27', 3443, '2018-01-04', 'active', ''),
(11, 'robi', 'dsds', 5, '2017-12-27', 4, '2018-01-04', 'active', ''),
(12, 'robi', 'tamin', 4, '2017-12-27', 353534, '2018-01-03', 'active', ''),
(13, 'robi', 'reza', 1, '2017-12-27', 2435, '2018-01-05', 'complete', '1.jpg'),
(14, 'robi', 'robi', 2, '2017-12-27', 3534, '2018-01-03', 'complete', '2.txt'),
(15, 'robi', 'robi', 2, '2017-12-27', 35, '2018-01-03', 'complete', '2.txt'),
(16, 'robi', 'reza', 1, '2017-12-27', 43, '2018-01-02', 'complete', '1.jpg'),
(17, 'robi', 'robi', 2, '2017-12-27', 232, '2018-01-03', 'complete', '2.txt'),
(18, 'ehsan', 'rakib', 9, '2017-12-29', 121321, '2017-12-30', 'pending', 'null'),
(19, 'ehsan', 'reza', 13, '2017-12-29', 2147483647, '2017-12-30', 'complete', '13.jpg');

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
('rakib', 2147483647, '2017-12-28', '', 0, 'DHAKA', 5, 'bangladesh', 'bkash', 1234, 1681828399, 0),
('raj', 111111111, '2017-12-28', '', 0, 'Comilla', 6, 'bangladesh', 'bkash', 1234, 1822992221, 0),
('robi', 1255455668, '2017-12-30', 'i am a good developer', 1, 'kuril', 7, 'Bangladesh', 'Bkash', 0, 0, 0);

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
('rakib', 'Desktop Softwere Dev', 18),
('rakib', 'Product Management', 19),
('raj', 'Desktop Softwere Dev', 20),
('raj', 'Mobile Development', 21),
('raj', 'Script and Utilities', 22);

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
(60, 1, 'rakib', 'robi', 'Hi '),
(61, 1, 'robi', 'rakib', 'Hello'),
(62, 1, 'rakib', 'robi', 'what up'),
(63, 1, 'robi', 'rakib', 'Hhoiljljk'),
(64, 1, 'rakib', 'robi', 'sdfsdf'),
(65, 1, 'rakib', 'robi', 'sdfsdf\r\n'),
(66, 1, 'rakib', 'robi', 'sdfsd'),
(67, 1, 'robi', 'rakib', 'dfgdfg'),
(68, 2, 'raj', 'raj', 'Hello'),
(69, 3, 'raj', 'robi', 'Hello robi\r\n'),
(70, 3, 'robi', 'raj', 'How are you raj?'),
(71, 3, 'raj', 'robi', 'I want do something.'),
(72, 3, 'robi', 'raj', 'Yes I am free');

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
('admin', 'Mrshal Bob', '1', 'admin@gmail.com', 1, '2017-12-24', 'admin.jpg'),
('efti', 'Mashiul azam efti', 'efti@', 'wwee@gmail.com', 2, '2017-12-05', ''),
('ehsan', 'Ehsan Ahmed', 'ehsan@', 'ehsan@gmail.com', 2, '0000-00-00', ''),
('faysal', 'Faysal Ahmed', 'faysal@', 'faysal@gmail.com', 2, '2017-12-28', 'faysal.jpg'),
('raj', 'Raj Simran', 'raj@', 'raj@gmail.com', 3, '2017-12-28', 'raj.jpg'),
('rajesh', 'rajesh saha', 'rajesh@', 'wwee@gmail.com', 2, '2017-12-06', 'rajesh.jpg'),
('rakib', 'Rakibul Hossain', 'rakib@', 'rakib@gmail.com', 3, '2017-12-28', 'rakib.jpg'),
('reza', 'Reza UL karim', 'reza@', 'reza@gmail.com', 3, '2017-12-05', 'reza.jpg'),
('robi', 'robi ullah', 'robi@', 'robi@gmail.com', 3, '2017-12-05', 'robi.jpg'),
('tamim', 'Tamim Ahmed', 'tamin2@', 'tamim21@gmail.com', 2, '2017-12-29', 'tamim.jpg'),
('tamin', 'ik tanim ', 'tamin@', 'tanim@gmail.com', 3, '2017-12-04', 'tanim.jpg');

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
-- Indexes for table `companyprofit`
--
ALTER TABLE `companyprofit`
  ADD PRIMARY KEY (`pId`),
  ADD KEY `gId` (`gId`);

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
  MODIFY `buyerId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `companyprofit`
--
ALTER TABLE `companyprofit`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `earning`
--
ALTER TABLE `earning`
  MODIFY `eId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `educationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gigrequirements`
--
ALTER TABLE `gigrequirements`
  MODIFY `requirementId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gigs`
--
ALTER TABLE `gigs`
  MODIFY `gigId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `lastactivetime`
--
ALTER TABLE `lastactivetime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ordercomment`
--
ALTER TABLE `ordercomment`
  MODIFY `orderCommentId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `sellerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skillId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `spending`
--
ALTER TABLE `spending`
  MODIFY `spendingId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tomessage`
--
ALTER TABLE `tomessage`
  MODIFY `messageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buyers`
--
ALTER TABLE `buyers`
  ADD CONSTRAINT `buyers_ibfk_1` FOREIGN KEY (`uName`) REFERENCES `users` (`uName`);

--
-- Constraints for table `companyprofit`
--
ALTER TABLE `companyprofit`
  ADD CONSTRAINT `companyprofit_ibfk_1` FOREIGN KEY (`gId`) REFERENCES `orders` (`gId`);

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
