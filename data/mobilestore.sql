-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 05:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
drop SCHEMA if EXISTS bookstore;
create SCHEMA bookstore;
use bookstore;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `registered_at` datetime DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `first_name`, `last_name`, `user_name`, `phone`, `birthdate`, `registered_at`, `password`) VALUES
(1, 'nvchung00@gmail.com', 'Chung', 'Nguyen Van', 'chung10012000', '091-135-7191', '2000-03-08', '2021-06-06 11:47:03', 'a8726357'),
(2, 'admin@gmail.com', 'Admin', 'Name', 'admin', '123456', '2021-06-08', '2021-06-08 21:44:57', 'admin');

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `registered_at` datetime DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT 0,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `birthdate`, `registered_at`, `active`, `password`) VALUES
(1, 'Chung', 'chung123@gmail.com', '123456', '2000-10-12', '2021-06-08 00:00:00', 1, '123');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `full_name` varchar(40) DEFAULT NULL,
  `work_as` varchar(20) DEFAULT NULL,
  `link_image` varchar(100) DEFAULT NULL,
  `link_facebook` varchar(100) DEFAULT NULL,
  `link_twitter` varchar(100) DEFAULT NULL,
  `link_instagram` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `full_name`, `work_as`, `link_image`, `link_facebook`, `link_twitter`, `link_instagram`) VALUES
(1, 'Lê Bá Thông', 'Co-founder', '/assets/images/about_page/avatar1.gif', 'https://www.facebook.com/thong.leba.3', 'https://twitter.com/thong94584917', 'https://www.instagram.com/thongleb/'),
(2, 'Nguyễn Phi Thông', 'Co-founder', '/assets/images/about_page/avatar2.gif', 'https://www.facebook.com/profile.php?id=100008734362594', 'https://twitter.com/thong94584917', 'https://www.instagram.com/thongleb/'),
(3, 'Đặng Ngọc Tâm', 'Manager', '/assets/images/about_page/avatar3.gif', 'https://www.facebook.com/scotlandyard00', 'https://twitter.com/thong94584917', 'https://www.instagram.com/dntt_00/'),
(4, 'Nguyễn Ngọc Thuấn', 'Marketer', '/assets/images/about_page/avatar4.gif', 'https://www.facebook.com/ngocthuan1210', 'https://twitter.com/thong94584917', 'https://www.instagram.com/dntt_00/');

-- --------------------------------------------------------