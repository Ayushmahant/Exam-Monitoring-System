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
-- Database: `question_paper`
--

-- --------------------------------------------------------

--
-- Table structure for table `sets`
--

CREATE TABLE `sets` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `set1` varchar(255) NOT NULL,
  `set2` varchar(255) NOT NULL,
  `set3` varchar(255) NOT NULL,
  `set4` varchar(255) NOT NULL,
  `set5` varchar(255) NOT NULL,
  `set6` varchar(255) NOT NULL,
  `set7` varchar(255) NOT NULL,
  `set8` varchar(255) NOT NULL,
  `set9` varchar(255) NOT NULL,
  `set10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sets`
--

INSERT INTO `sets` (`id`, `code`, `set1`, `set2`, `set3`, `set4`, `set5`, `set6`, `set7`, `set8`, `set9`, `set10`) VALUES
(21, 'it101g', '109,8,16,22,28,36,5,9,107,51,64,38,54,37,76,88,79,96,56,90,99,57,69,55,91,100,68,82,73,87,94,106,86', '6,10,16,24,26,31,2,11,107,50,66,52,49,41,78,89,77,97,55,91,101,56,75,57,90,99,69,82,71,85,95,106,86', '109,8,17,19,25,33,5,10,107,51,66,42,54,41,79,89,76,96,55,90,99,57,68,56,91,100,74,81,72,87,93,105,85', '5,11,18,23,27,31,2,9,107,49,63,37,53,40,79,88,77,97,55,90,101,56,68,57,91,99,75,83,71,86,95,106,87', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sets`
--
ALTER TABLE `sets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sets`
--
ALTER TABLE `sets`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
