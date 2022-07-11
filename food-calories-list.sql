-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 08:32 PM
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
-- Database: `food-calories-list`
--

-- --------------------------------------------------------

--
-- Table structure for table `foods_list`
--

CREATE TABLE `foods_list` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Food_name` varchar(100) NOT NULL,
  `Food_brand` varchar(100) NOT NULL,
  `Calories` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foods_list`
--

INSERT INTO `foods_list` (`ID`, `Food_name`, `Food_brand`, `Calories`) VALUES
(45, 'Peanut Butter', 'Jobbie', '454'),
(47, 'Jam', 'Ric\'s', '455');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods_list`
--
ALTER TABLE `foods_list`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods_list`
--
ALTER TABLE `foods_list`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
