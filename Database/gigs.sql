-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2017 at 10:03 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gigs`
--
ALTER TABLE `gigs`
  ADD PRIMARY KEY (`gigId`),
  ADD KEY `uName` (`uName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gigs`
--
ALTER TABLE `gigs`
  MODIFY `gigId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gigs`
--
ALTER TABLE `gigs`
  ADD CONSTRAINT `gigs_ibfk_1` FOREIGN KEY (`uName`) REFERENCES `users` (`uName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
