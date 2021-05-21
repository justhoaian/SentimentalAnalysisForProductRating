-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2021 at 03:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodratingweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `isAdmin` int(11) NOT NULL DEFAULT 0,
  `postID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `name`, `email`, `isAdmin`, `postID`) VALUES
('admin', 'admin', 'admin', 'admin@gmail.com', 1, NULL),
('anhngoc', '12345', 'Phan Anh Ngoc', 'anhngoc@gmail.com', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `word` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `point` float(3) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drink`
--

CREATE TABLE `drink` (
  `postID` int(11) NOT NULL,
  `rating` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '5',
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `workingTime` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `priceRange` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `drinkName` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drink`
--

INSERT INTO `drink` (`postID`, `rating`, `address`, `image`, `workingTime`, `priceRange`, `phoneNumber`, `drinkName`) VALUES
(4, '5', 'HCM', 'img/thom.jpg', '8am-8pm', '20.000-50.000', '0387144625', 'thom'),
(6, '5', '37 - 39 Đường D5, P. 25, Quận Bình Thạnh, TP. HCM', 'img/Song.jpg', '7:00 - 23:00', '35.000đ - 70.000đ', '0316184561', 'Sống Cà Phê');

-- --------------------------------------------------------

--
-- Table structure for table `drinkstalltype`
--

CREATE TABLE `drinkstalltype` (
  `postID` int(11) NOT NULL,
  `drinkStallType` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drinkstalltype`
--

INSERT INTO `drinkstalltype` (`postID`, `drinkStallType`) VALUES
(4, 'Takeaway'),
(6, 'Coffee&Tea');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `postID` int(11) NOT NULL,
  `rating` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '5',
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `workingTime` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `priceRange` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `foodName` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`postID`, `rating`, `address`, `image`, `workingTime`, `priceRange`, `phoneNumber`, `foodName`) VALUES
(1, '5', 'Nguyen Dinh Chieu, District 3', 'img/dmaris.jpg', '10am - 9pm', '45-90', '023145', 'DMaris'),
(2, '5', 'District 10', 'img/thom.jpg', '3pm - 10pm', '25-60', '090909', 'Thơm House'),
(3, '5', 'District 2', 'img/food2.jpg', '10am - 9pm', '200-300', '090909', 'Marcel Burger');

-- --------------------------------------------------------

--
-- Table structure for table `foodstalltype`
--

CREATE TABLE `foodstalltype` (
  `postID` int(11) NOT NULL,
  `foodStallType` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `foodstalltype`
--

INSERT INTO `foodstalltype` (`postID`, `foodStallType`) VALUES
(1, 'Buffet'),
(2, 'Street Food'),
(3, 'Restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `isadmin`
--

CREATE TABLE `isadmin` (
  `isAdmin` int(11) NOT NULL,
  `isAdmin_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `isadmin`
--

INSERT INTO `isadmin` (`isAdmin`, `isAdmin_name`) VALUES
(0, 'user'),
(1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postID` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rating` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '5',
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `workingTime` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `priceRange` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `name`, `rating`, `address`, `image`, `workingTime`, `priceRange`, `phoneNumber`) VALUES
(1, 'DMaris', '5', 'Nguyen Dinh Chieu, District 3', 'img/dmaris.jpg', '10am - 9pm', '45-90', '023145'),
(2, 'Thơm House', '5', 'District 10', 'img/thom.jpg', '3pm - 10pm', '25-60', '090909'),
(3, 'Marcel Burger', '5', 'District 2', 'img/food2.jpg', '10am - 9pm', '200-300', '090909'),
(4, 'thom', '5', 'HCM', 'img/thom.jpg', '8am-8pm', '20.000-50.000', '0387144625'),
(6, 'Sống Cà Phê', '5', '37 - 39 Đường D5, P. 25, Quận Bình Thạnh, TP. HCM', 'img/Song.jpg', '7:00 - 23:00', '35.000đ - 70.000đ', '0316184561');

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `postID` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `commentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sentimentalword`
--

CREATE TABLE `sentimentalword` (
  `word` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sentimentalword`
--

INSERT INTO `sentimentalword` (`word`, `weight`) VALUES
('acceptable', 8),
('adorable', 10),
('agreeable', 10),
('amazing', 10),
('appetizing', 10),
('attractive', 10),
('awesome', 10),
('beautiful', 10),
('charming', 10),
('clean', 10),
('considerate', 10),
('cool', 8),
('courteous', 10),
('cute', 10),
('delicious', 10),
('delightful', 10),
('diligent', 10),
('elegant', 10),
('enthusiastic', 10),
('excellent', 10),
('fabulous', 10),
('fair', 7),
('fantastic', 10),
('generous', 10),
('good', 8),
('gorgeous', 10),
('happy', 10),
('heavenly', 10),
('helpful', 10),
('incredible', 10),
('inventive', 10),
('likable', 10),
('mind-blowing', 10),
('mouthwatering', 10),
('outstanding', 10),
('passionate', 10),
('pleasant', 10),
('reliable', 10),
('resourceful', 10),
('satisfied', 10),
('sensible', 10),
('sincere', 10),
('sleek', 10),
('splendid', 10),
('tasty', 10),
('tempting', 10),
('toothsome', 10),
('trustworthy', 10),
('wonderful', 10),
('yummy', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`),
  ADD KEY `fk_account_isAdmin` (`isAdmin`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `drinkstalltype`
--
ALTER TABLE `drinkstalltype`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `foodstalltype`
--
ALTER TABLE `foodstalltype`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `isadmin`
--
ALTER TABLE `isadmin`
  ADD PRIMARY KEY (`isAdmin`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`postID`,`username`,`commentID`),
  ADD KEY `fk_preferences_account` (`username`),
  ADD KEY `fk_preferences_comment` (`commentID`);

--
-- Indexes for table `sentimentalword`
--
ALTER TABLE `sentimentalword`
  ADD PRIMARY KEY (`word`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `fk_account_isAdmin` FOREIGN KEY (`isAdmin`) REFERENCES `isadmin` (`isAdmin`) ON DELETE CASCADE;

--
-- Constraints for table `preferences`
--
ALTER TABLE `preferences`
  ADD CONSTRAINT `fk_preferences_account` FOREIGN KEY (`username`) REFERENCES `account` (`username`),
  ADD CONSTRAINT `fk_preferences_comment` FOREIGN KEY (`commentID`) REFERENCES `comment` (`commentID`),
  ADD CONSTRAINT `fk_preferences_post` FOREIGN KEY (`postID`) REFERENCES `post` (`postID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
