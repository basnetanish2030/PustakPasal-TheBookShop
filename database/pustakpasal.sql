-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 12:38 PM
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
-- Database: `pustakpasal`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_entry`
--

CREATE TABLE `book_entry` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `publication` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `con_dition` varchar(255) NOT NULL,
  `contact_way` varchar(255) NOT NULL,
  `mess_age` text NOT NULL,
  `grade` varchar(255) NOT NULL,
  `addr1` varchar(255) NOT NULL,
  `addr2` varchar(255) NOT NULL,
  `img0` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_entry`
--

INSERT INTO `book_entry` (`id`, `username`, `bookname`, `publication`, `category`, `price`, `con_dition`, `contact_way`, `mess_age`, `grade`, `addr1`, `addr2`, `img0`, `img1`, `img2`, `img3`) VALUES
(1, 'basnet.anish2030', 'निभेको दियो', 'Sanjha Prakasan', 'Poetry', '300', 'New', 'Both', 'This book is a poetry book by sangha prakash.\r\nThe condition is new.', 'None', 'Achham', 'Itahari-8 sunsari', '6154f2cc7f3d59.56100167.png', '6154f2cc82a888.24716463.png', '6154f2cc82ead9.37423595.png', '6154f2cc831538.75066160.png');

-- --------------------------------------------------------

--
-- Table structure for table `rental_entry`
--

CREATE TABLE `rental_entry` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `publication` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `con_dition` varchar(255) NOT NULL,
  `contact_way` varchar(255) NOT NULL,
  `mess_age` text NOT NULL,
  `grade` varchar(255) NOT NULL,
  `addr1` varchar(255) NOT NULL,
  `addr2` varchar(255) NOT NULL,
  `img0` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rental_entry`
--

INSERT INTO `rental_entry` (`id`, `username`, `bookname`, `publication`, `category`, `price`, `con_dition`, `contact_way`, `mess_age`, `grade`, `addr1`, `addr2`, `img0`, `img1`, `img2`, `img3`) VALUES
(1, 'basnet.anish2030', 'निभेको दियो', 'Sanjha Prakasan', 'Poetry', '300', 'New', 'Both', 'This book is a poetry book by sangha prakash.\r\nThe condition is new.', 'None', 'Achham', 'Itahari-8 sunsari', '6154f2cc7f3d59.56100167.png', '6154f2cc82a888.24716463.png', '6154f2cc82ead9.37423595.png', '6154f2cc831538.75066160.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `addr1` varchar(255) NOT NULL,
  `addr2` varchar(255) NOT NULL,
  `pass_word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `fullname`, `email`, `phone`, `addr1`, `addr2`, `pass_word`) VALUES
(1, 'basnet.anish2030', 'Anish Basnet', 'alphainternationaltechnology@gmail.com', '+9779852073800', 'Achham', 'Itahari-8 sunsari', '0dde3edcddcab6823c62c5a428d1b32e'),
(2, 'tested', 'TestName', 'test@gmail.com', '+9779812345678', 'Sunsari', 'Itahari', 'cc03e747a6afbbcbf8be7668acfebee5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_entry`
--
ALTER TABLE `book_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental_entry`
--
ALTER TABLE `rental_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_entry`
--
ALTER TABLE `book_entry`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rental_entry`
--
ALTER TABLE `rental_entry`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
