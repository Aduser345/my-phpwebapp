-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 02:25 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `url`
--

-- --------------------------------------------------------

--
-- Table structure for table `urlbase`
--

CREATE TABLE `urlbase` (
  `id` int(4) NOT NULL,
  `url` text NOT NULL,
  `Title` text NOT NULL,
  `Category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `urlbase`
--

INSERT INTO `urlbase` (`id`, `url`, `Title`, `Category`) VALUES
(1, 'https://www.youtube.com/embed/KIIS-vIXvAo?controls=0', 'Fake LS', 'Timepass'),
(2, '1.mp4', 'Home', 'Timpass'),
(3, 'https://www.youtube.com/embed/b8--JS9lRnI', 'Deedar de', 'DANCE'),
(4, 'https://www.youtube.com/embed/dWHIcMeAIMw', 'Woh Anjabee', 'DANCE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `urlbase`
--
ALTER TABLE `urlbase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `urlbase`
--
ALTER TABLE `urlbase`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
