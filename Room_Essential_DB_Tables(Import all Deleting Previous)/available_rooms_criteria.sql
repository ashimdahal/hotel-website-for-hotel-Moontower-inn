-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 01:56 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moontower_admins`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_rooms_criteria`
--

CREATE TABLE `available_rooms_criteria` (
  `id` int(11) NOT NULL,
  `checkin_date` text NOT NULL,
  `checkout_date` text NOT NULL,
  `total_people` int(11) NOT NULL,
  `added_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_rooms_criteria`
--

INSERT INTO `available_rooms_criteria` (`id`, `checkin_date`, `checkout_date`, `total_people`, `added_date`) VALUES
(1, '[\"2019-02-10\",\"2019-02-28\"]', '[\"2019-02-10\",\"2019-03-21\"]', 100, '2019-02-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_rooms_criteria`
--
ALTER TABLE `available_rooms_criteria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_rooms_criteria`
--
ALTER TABLE `available_rooms_criteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
