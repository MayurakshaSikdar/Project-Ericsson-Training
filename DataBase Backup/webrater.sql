-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 05:56 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webrater`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `aid` int(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`aid`, `name`, `username`, `password`) VALUES
(1, 'Mayuraksha Sikdar', 'mayurakshasikdar@gmail.com', 'admin001'),
(2, 'Aditi Chattopadhyay', 'aditi.chattopadhyay1997@gmail.com', 'admin002'),
(3, 'Sayak Suvra Samanta', 'sayaksuvra994@gmail.com', 'admin003'),
(4, 'Akash Kumar Gupta', 'a.k.gupta3216@gmail.com', 'admin004'),
(5, 'Sourav Bhowmick', 'bhowmick547351@gmail.com', 'admin005'),
(6, 'Ritwika Banerjee', 'ritwikabanerjee1998@gmail.com', 'admin006'),
(7, 'Ankita Kundu', 'ankitakundu1190@gmail.com', 'admin007'),
(8, 'Srimanta Roy Chowdhury', 'srimantaroychowdhury1998@gmail.com', 'admin008'),
(9, 'Arpita Bhattacharjee', 'atb1798@gmail.com', 'admin009'),
(10, 'Md Aamir Khan', 'mdaamirkhan7186@gmail.com', 'admin010'),
(11, 'Raka Mitra', 'rakamitra123@gmail.com', 'admin011'),
(12, 'Bhargav Ranjan', 'bhargavranjanpikku@gmail.com', 'admin012'),
(13, 'Suryai Majumder', 'suryaimajumdar@gmail.com', 'admin013'),
(14, 'Indrashis Chatterjee', 'ichatt8@gmail.com', 'admin014'),
(15, 'Saptarshi Ghosh', 'saptarshighosh26@gmail.com', 'admin015');

-- --------------------------------------------------------

--
-- Table structure for table `comments_table`
--

CREATE TABLE `comments_table` (
  `cid` int(10) NOT NULL,
  `rating` decimal(4,2) NOT NULL,
  `webid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `title` varchar(155) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments_table`
--

INSERT INTO `comments_table` (`cid`, `rating`, `webid`, `uid`, `title`, `comment`) VALUES
(1, '3.00', 2, 1, 'Leading Company', 'One of the leading companies in the world. Has a lot of services offered free of charge.'),
(2, '2.00', 3, 1, 'Best E-Commerce', 'Best online E-commerce. Truly a modern day online market place for almost everything.'),
(3, '2.50', 39, 1, 'Learning Platform', 'Best online learning platform for Web Developers. Interactive examples and suitable for college students.'),
(4, '1.75', 4, 2, 'Cheap CAB', 'Best CAB service in Kolkata. Cheap and affordable.'),
(5, '4.00', 2, 2, 'One of the Best', 'Surely one of the BEST company in 21st century. Continue the good work Google.'),
(6, '4.00', 3, 2, 'Shop from home', 'The best solution for working professional of 21st century. People with limited time for shopping can easily avail the services of Amazon. Also it has one of the  best customer support.'),
(7, '3.00', 3, 1, 'Demo', 'Demo Review'),
(8, '3.00', 39, 1, 'Demo', 'Demo review'),
(9, '3.00', 3, 1, 'Demo', 'abc'),
(11, '3.00', 3, 1, 'Shop from home', 'asd'),
(14, '4.00', 39, 2, 'Free Source', 'Learned Javascript, HTML, CSS, PHP fundamental and web page related all basic I have learnt and practised using w2schools. I can say it is a wonderful and amazing free source available online to boost your skills especially web-related skills.'),
(15, '3.00', 4, 1, 'Demo Title', 'Demo Comment'),
(16, '3.00', 4, 1, 'Demo Title', 'Demo Comment');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `uid` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`uid`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'Mayuraksha Sikdar', 'mayurakshasikdar@gmail.com', 2147483647, '12345'),
(2, 'Saptarshi Ghosh', 'saptarshighosh26@gmail.com', 1234567890, '12345'),
(3, 'Demo', 'demo@demo.com', 2147483647, '12345'),
(4, 'demo', 'demo@gmail.com', 9876543210, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `validate_web_table`
--

CREATE TABLE `validate_web_table` (
  `valid` int(30) NOT NULL,
  `url` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `logo` text NOT NULL,
  `contact` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `rating` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `validate_web_table`
--

INSERT INTO `validate_web_table` (`valid`, `url`, `name`, `description`, `logo`, `contact`, `email`, `address`, `rating`) VALUES
(1, 'https://www.flipkart.com/', 'Flipkart', 'Demo Flipkart Company', '12345678flipkart-plus_4ee2f9.png', 1234567891, 'flipkart_ecommerce@flipkart.com', 'India', 1),
(3, 'https://github.com/', 'GitHub Inc', 'GitHub Inc. is a web-based hosting service for version control using Git. It is mostly used for comp', '43423413Octicons-mark-github.png', 2147483647, 'git@github.com', 'US - California', 0),
(5, 'https://www.tesla.com/', 'Tesla, Inc.', 'Tesla, Inc. is an American automotive and energy company based in Palo Alto, California. The company', '4875026Tesla-logo-2003-2500x2500.png', 2147483647, 'ecars@tesla.com', 'California', 0);

-- --------------------------------------------------------

--
-- Table structure for table `website_table`
--

CREATE TABLE `website_table` (
  `webid` int(30) NOT NULL,
  `url` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `logo` text NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `rating` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `website_table`
--

INSERT INTO `website_table` (`webid`, `url`, `name`, `description`, `logo`, `contact`, `email`, `address`, `rating`) VALUES
(2, 'https://www.google.co.in/', 'Google', 'Demo Google Company', 'Company Images/45084154googlelogo_color_272x92dp.png', 123456789, 'google@gmail.com', ' US - California', 0),
(3, 'https://www.amazon.in/', 'Amazon Inc', 'Demo Amazon Company', 'Company Images/30105005download.jpg', 2147483647, 'amazon@amazon.com', 'USA', 0),
(4, 'https://www.uber.com/in/en/', 'UBER', 'Demo Uber Company', 'Company Images/56739358download.png', 2147483647, 'uber@uber.com', 'UK', 0),
(39, 'https://www.w3schools.com/', 'w3schools', 'Demo w3schools Company', 'Company Images/12345678download(1).png', 2147363147, 'w3schools@w3.com', 'US', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `comments_table`
--
ALTER TABLE `comments_table`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `webid` (`webid`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `validate_web_table`
--
ALTER TABLE `validate_web_table`
  ADD PRIMARY KEY (`valid`);

--
-- Indexes for table `website_table`
--
ALTER TABLE `website_table`
  ADD PRIMARY KEY (`webid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments_table`
--
ALTER TABLE `comments_table`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `uid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `validate_web_table`
--
ALTER TABLE `validate_web_table`
  MODIFY `valid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `website_table`
--
ALTER TABLE `website_table`
  MODIFY `webid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments_table`
--
ALTER TABLE `comments_table`
  ADD CONSTRAINT `comments_table_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_table` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_table_ibfk_2` FOREIGN KEY (`webid`) REFERENCES `website_table` (`webid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
