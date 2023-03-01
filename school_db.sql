-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 08:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `slocation` varchar(255) NOT NULL,
  `simage` varchar(255) NOT NULL,
  `feestructure` varchar(255) NOT NULL,
  `performance` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `diet` text NOT NULL,
  `coCurricularActivities` text NOT NULL,
  `boardingFacilities` text NOT NULL,
  `sports` text NOT NULL,
  `infrastracture` text NOT NULL,
  `rules` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `sname`, `slocation`, `simage`, `feestructure`, `performance`, `about`, `diet`, `coCurricularActivities`, `boardingFacilities`, `sports`, `infrastracture`, `rules`) VALUES
(1, 'dsfdsdsfdsdsfdsds', 'eeeeeeeeeeeeeeeeeeeeee\r\neeeeeeeeeeeegyytgyytgyytgyytgyy\r\ntgyytgyytgyytgyytgyytgyytgyytgyyt\r\ngyytgyytgyytgyyt', '../uploaded_img/food-1.png', '../uploaded_img/food-6.png', '../uploaded_img/food-5.png', 'eeeeeeeeeeeeeeeeeeeeee\r\neeeeeeeeeeeeeeeeeeeeeee\r\neeeeeeeeeeeeeeeeeeeeeeee\r\neeeeeeeeeeeeeeeeeeeeeeee\r\n', 'ttttttttttttttttttt\r\nttttttttttttttttttt\r\nttttttttttttttttttt\r\ntttttttttttttttttttt\r\n\r\n', 'tgvgtgvgtgvgtgvgtgvgtgv\r\ngtgvgtgvgtgvgtgvgtgvgtg\r\nvgtgvgtgvgtgvgtgvgtgvg\r\ntgvgtgvgtgvgtgvgtgvgtg\r\n', 'fffffffffffffffff\r\nfffffffffffffffffff\r\nfffffffffffffffffff\r\nfffffffffffffffffff\r\n', 'rfdrfdrfdrfdr\r\nfdrfdrfdrfdrfdrfd\r\nrfdrfdrfdrfdrfdrfdr\r\nfdrfdrfdrfdrfdrfdr\r\n', 'eeerfdrfdrfdrfdrfdrfd\r\nrfdrfdrfdrfdrfdrfdrfdrf\r\ndrfdrfdrfdrfdrfdrfdrfdr\r\n', 'gyytgyytgyytgyytgyyt\r\ngyytgyytgyytgyytgyyt\r\ngyytgyytgyytgyytgyytg\r\nyytgyytgyytgyytgyytgyy\r\n'),
(2, 'sefefessefe', 'gffddgffddgffddgffddgf\r\nddgffddgffddgffddgffdd\r\ngffddgffddgffddgffddgf\r\n', '../uploaded_img/food-1.png', '../uploaded_img/food-3.png', '../uploaded_img/food-4.png', 'ggffgffddgffddgffddgf\r\nfddgffddgffddgffddgff\r\nddgffddgffddgffddgffd\r\n', 'ffffffffffffffffffff\r\nfffffffffffffffffffff\r\nfffffffffffffffffffff\r\nfffffffffffffffffffff\r\n', 'ghhhhghhhhghhhhg\r\nhhhhghhhhghhhhghh\r\nhhghhhhghhhhghhhh\r\n', 'jjjjjjjjjjjjjjjj\r\njjjjjjjjjjjjjjjjjjjjjj\r\njjjjjjjjjjjjjjjj\r\n', 'fffffffffffffffffffffff\r\nfffffffffffffffffff\r\nffffffffffffffffffffff\r\nfffffffffffffffffff\r\n', 'gffddgffddgffddgffdd\r\ngffddgffddgffddgffddg\r\nffddgffddgffddgffddgf\r\n\r\n', 'ffffffffffffffffffffff\r\nfffffffffffffffffffffff\r\nffffffffffffffffffff\r\nfffffffffffffffffffff\r\n'),
(3, 'dfsdfddfsdfdd', 'vvbbgvvbbgvvbbgvvbbgvv\r\nbbgvvbbgvvbbgvvbbgvvbbg\r\nvvbbgvvbbgvvbbgvvbbgvv\r\n', '../uploaded_img/food-2.png', '../uploaded_img/food-1.png', '../uploaded_img/food-5.png', 'ffgfgffgfgffgfgffgfgf\r\nfgfgffgfgffgfgffgfgf\r\n', 'fffffffffffffffffff\r\nffffffffffffffffffff\r\nfffffffffffffffffff\r\n', 'hjhhhjhhhjhhhjhhhjh\r\nhhjhhhjhhhjhhhjhhhjhhhj\r\nhhjhhhjhhhjhhhjhh\r\n\r\n', 'ddggddggddggddggd\r\nggddggddggddggddgg\r\nddggddggddggddggdd\r\nggddggddggddggddggdd\r\n', 'gffffgffffgffffgf\r\nfffgffffgffffgffff\r\ngffffgffffgffffgf\r\nfffgffffgffffgffffgfff\r\n', 'vvbbgvvbbgvvbbgvvbbgvvb\r\nbgvvbbgvvbbgvvbbgvvbbgvv\r\nbbgvvbbgvvbbgvvbbgvvbbgv\r\nvbbgvvbbgvvbbgvvbbg\r\n', 'fffgfghhfffgfghhfffgfg\r\nhhfffgfghhfffgfghhff\r\nfgfghhfffgfghhfffgfgh\r\nhfffgfghhfffgfghhfffg\r\nfghhfffgfghhfffgfghhf\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(2, 'rite', 'rite@gmail.com', 'a4b73b82ab70f30b4d247516a0f4dd49', 'school'),
(3, 'ivin', 'tkiti@kabarak.ac.ke', '29c3eea3f305d6b823f562ac4be35217', 'student'),
(4, 'tabitha', 'dorcusstaby@gmail.com', '934b535800b1cba8f96a5d72f72f1611', 'user'),
(5, 'princess', 'princess@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'admin'),
(6, 'princess', 'princess@gmail.com', '22a4d9b04fe95c9893b41e2fde83a427', 'user'),
(7, 'rite', 'rite@gmail.com', 'c5fe25896e49ddfe996db7508cf00534', 'admin'),
(8, 'mulamu', 'mulamu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
