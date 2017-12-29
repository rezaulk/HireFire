-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2017 at 09:25 AM
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
('dsds', 'szcsdd csdc s', '123@', 'rezaaaaaa@gmail.com', 3, '2017-12-25', 'dsds.jpg'),
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
