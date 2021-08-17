-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 07:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiub hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor info`
--

CREATE TABLE `doctor info` (
  `ID` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Contact` varchar(13) NOT NULL,
  `Field` varchar(50) NOT NULL,
  `Schedule` text NOT NULL,
  `Display` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor info`
--

INSERT INTO `doctor info` (`ID`, `Name`, `Contact`, `Field`, `Schedule`, `Display`) VALUES
(1, 'Dr. Floki', '+77 015645 54', 'Pulmonologist', 'Sun/Mon/Tue:(11:00-14:00)', 'YES'),
(2, 'Dr. Kakashi', '+02 5641 67 6', 'Ophthalmologist', 'Sun/Fri:(19:00-23:59)', 'YES'),
(3, 'Dr. Ford', '?? ??--876t76', 'Psychologist', 'Fri:(16:00-20:00)', 'NO'),
(4, 'Dr. White	', '+651 545 5654', 'Oncologist', 'Sat-Fri:(14:00-20:00)', 'YES'),
(5, 'Dr. Escobar', '+40 4206585 6', 'Cardiologist', 'Tue/Wed:(18:00-22:00)', 'YES');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor info`
--
ALTER TABLE `doctor info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor info`
--
ALTER TABLE `doctor info`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
