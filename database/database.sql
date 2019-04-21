-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 09:29 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes-webpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `title` varchar(500) NOT NULL,
  `artist` varchar(500) NOT NULL,
  `album` varchar(500) NOT NULL,
  `lyrics` text NOT NULL,
  `id_song` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id_song`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `id_song` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `song` (`title`, `artist`, `album`, `lyrics`, `id_song`) VALUES ('State I\'m In', 'Aaron Lewis', 'State I\'m In', 'I lost my faith a long time ago\r\nPuttin\' miles on this old road\r\nI lost my family and I lost my soul\r\n800 miles and one more show\r\n\r\nStill workin\' these fingers to the bone\r\nWhen the show is over I sit alone\r\nWhere the angels and devils are my only friends\r\nI wake up in the morning and I do it again\r\n\r\nI don\'t know what you\'ve been told\r\nAll the whiskey in the world won\'t save my soul\r\nI\'ve done it all so where do I begin\r\nTo fix all the messes in the state I\'m in\r\n\r\nIt\'s hard\r\nYeah it\'s hard\r\n\r\nI feel like there\'s a better way\r\nTo make it through another day\r\nSo sad that life turned out like this\r\n\'Cause I still taste you on my lips\r\n\r\nWell I don\'t know what you\'ve been told\r\nAll the whiskey in the world won\'t save my soul\r\nI\'ve done it all so where do I begin\r\nTo fix all the messes in the state I\'m in\r\n\r\nIt\'s hard\r\nMmh it\'s hard\r\nYeah it\'s hard\r\nMmh it\'s hard', NULL)