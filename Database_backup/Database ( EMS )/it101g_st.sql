-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2023 at 05:32 PM
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
-- Database: `specification_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `it101g_st`
--

CREATE TABLE `it101g_st` (
  `id` int(6) UNSIGNED NOT NULL,
  `unit` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `mark` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `it101g_st`
--

INSERT INTO `it101g_st` (`id`, `unit`, `level`, `mark`) VALUES
(129, '1', 'R', '2'),
(130, '2', 'R', '2'),
(131, '3', 'R', '2'),
(132, '4', 'R', '2'),
(133, '5', 'R', '2'),
(134, '6', 'R', '2'),
(135, '1', 'R', '2'),
(136, '2', 'R', '2'),
(137, '4', 'U', '2'),
(139, '2', 'U', '3'),
(140, '3', 'U', '3'),
(141, '1', 'U', '3'),
(142, '2', 'U', '3'),
(143, '1', 'U', '3'),
(144, '4', 'U', '3'),
(145, '5', 'U', '3'),
(146, '4', 'U', '3'),
(147, '6', 'U', '3'),
(148, '2', 'A', '3'),
(149, '5', 'A', '3'),
(150, '6', 'A', '3'),
(151, '2', 'A', '3'),
(152, '3', 'A', '3'),
(153, '2', 'A', '3'),
(154, '5', 'A', '3'),
(155, '6', 'A', '3'),
(156, '3', 'A', '3'),
(157, '4', 'A', '3'),
(158, '3', 'A', '6'),
(159, '4', 'A', '6'),
(160, '5', 'A', '6'),
(161, '6', 'A', '6'),
(163, '4', 'A', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `it101g_st`
--
ALTER TABLE `it101g_st`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `it101g_st`
--
ALTER TABLE `it101g_st`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
