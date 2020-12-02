-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 07:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujps`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`id`, `email`, `token`) VALUES
(1, 'test@gmail.com', '37c6da5b96c1a467911c376fd17defbb5fc6b34065252'),
(2, 'test@gmail.com', 'eac7c7c58c2cb7f89fa0bf07a77c3c975fc6b3422f414'),
(3, 'test@gmail.com', 'cc996e37c99b39a9202459a0403290725fc6b623467f4'),
(4, 'test@gmail.com', '5fdfcbe9c9673468cd7ebaa4ec6105025fc6b6567ca16'),
(5, 'test@gmail.com', '76d72859ac04895ee657f860a87c0cd35fc6b66d30e75'),
(6, 'test@gmail.com', '5a033e91d07350f8102cdbdb9b423d395fc6b6d0ad32e'),
(7, 'test@gmail.com', 'be195533eb3e0c955556392636dbeb265fc6b72b3f7b2'),
(8, 'test@gmail.com', '738668f020c6626975c4c126d6091f7d5fc6b8ded46d1'),
(9, 'test@gmail.com', '328461bc90893fef2bacbdc9fe9f1f7a5fc6b8f99239b'),
(10, 'test@gmail.com', 'ebbd7efaf79e8c50e8f4e57df6845d975fc6b92686f54'),
(11, 'test@gmail.com', 'd7d0d48ab541dbf2a940b28f18bee69a5fc7bb960ff9f'),
(22, 'lakshaniliyanage1996@gmail.com', '1a6ed33b3faa42e77a191aa65c3efba95fc7d3dc06055'),
(23, 'lakshaniliyanage1996@gmail.com', 'a98369d200848e8550b7d7a674eacb3a5fc7d4834e1e7');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'test@gmail.com', 'lakshani123'),
(2, 'lakshaniliyanage1996@gmail.com', 'lakshani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
