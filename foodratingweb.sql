-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 13, 2021 lúc 12:37 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `foodratingweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `isAdmin` int(11) NOT NULL,
  `postID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `word` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`commentID`, `username`, `content`, `time`, `word`) VALUES
(25, 'hehe', 'lưu đc ròi dzui ỉa cả nhà oy', '2021-05-13 10:34:26', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `drink`
--

CREATE TABLE `drink` (
  `postID` int(11) NOT NULL,
  `rating` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `workingTime` time NOT NULL,
  `priceRange` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `drinkName` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `drinkstalltype`
--

CREATE TABLE `drinkstalltype` (
  `drinkStallType` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `postID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `food`
--

CREATE TABLE `food` (
  `postID` int(11) NOT NULL,
  `rating` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `workingTime` time NOT NULL,
  `priceRange` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `foodName` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `foodstalltype`
--

CREATE TABLE `foodstalltype` (
  `foodStallType` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `postID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `isadmin`
--

CREATE TABLE `isadmin` (
  `isAdmin` int(11) NOT NULL,
  `isAdmin_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `isadmin`
--

INSERT INTO `isadmin` (`isAdmin`, `isAdmin_name`) VALUES
(0, 'admin'),
(1, 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `postID` int(11) NOT NULL,
  `nameofbeverage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rating` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `workingTime` time NOT NULL,
  `priceRange` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `preferences`
--

CREATE TABLE `preferences` (
  `postID` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `commentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sentimentalword`
--

CREATE TABLE `sentimentalword` (
  `word` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`),
  ADD KEY `fk_account_isAdmin` (`isAdmin`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`);

--
-- Chỉ mục cho bảng `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`postID`);

--
-- Chỉ mục cho bảng `drinkstalltype`
--
ALTER TABLE `drinkstalltype`
  ADD PRIMARY KEY (`drinkStallType`);

--
-- Chỉ mục cho bảng `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`postID`);

--
-- Chỉ mục cho bảng `foodstalltype`
--
ALTER TABLE `foodstalltype`
  ADD PRIMARY KEY (`foodStallType`);

--
-- Chỉ mục cho bảng `isadmin`
--
ALTER TABLE `isadmin`
  ADD PRIMARY KEY (`isAdmin`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`);

--
-- Chỉ mục cho bảng `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`postID`,`username`,`commentID`);

--
-- Chỉ mục cho bảng `sentimentalword`
--
ALTER TABLE `sentimentalword`
  ADD PRIMARY KEY (`word`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `fk_account_isAdmin` FOREIGN KEY (`isAdmin`) REFERENCES `isadmin` (`isAdmin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
