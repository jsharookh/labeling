-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2019 at 03:14 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfakhama`
--

-- --------------------------------------------------------

--
-- Table structure for table `a`
--

CREATE TABLE `a` (
  `id` int(11) NOT NULL,
  `e_name` varchar(11) NOT NULL,
  `a_name` varchar(11) CHARACTER SET utf8 NOT NULL,
  `e_price` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `a_price` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `e_country` varchar(11) NOT NULL,
  `a_country` varchar(11) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a`
--

INSERT INTO `a` (`id`, `e_name`, `a_name`, `e_price`, `a_price`, `e_country`, `a_country`) VALUES
(1, 'apple', 'قثصقصث', '7867', '453', 'india', 'بصثبص'),
(2, 'apple', 'قبسب', '', '', 'america', 'بقبقسب'),
(3, '', 'يسبسي', '', '', '', 'بيسب'),
(4, 'dsfsd', 'يسبي', '', '', 'rwerwe', 'بسيب'),
(5, 'dssf', 'يبليب', '', '', 'dsffds', 'يبليسل'),
(6, '', '', '', '', '', ''),
(7, 'orange', 'يسبسبب', '', '', 'india', 'يسبسي'),
(8, 'grape', 'بيسب', '', '', 'india', 'هثعق'),
(9, 'water melon', 'ديبديبديبد', '', '', 'aus', 'يسبسب'),
(10, 'hgdhjfg', 'تايسلذب', '', '', 'us', 'ثصبيس'),
(11, 'hdjh', 'ذالشسي', '', '', 'vjhewv', 'اديساتبديس'),
(12, 'f7d630f38e4', 'بسيسي', '', '', '44', '٤٣٥'),
(13, 'd41d8cd98f0', '', '', '', '', ''),
(14, 'd41d8cd98f0', '', '', '', '', ''),
(15, 'd41d8cd98f0', '', '', '', '', ''),
(16, 'd41d8cd98f0', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a`
--
ALTER TABLE `a`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a`
--
ALTER TABLE `a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
