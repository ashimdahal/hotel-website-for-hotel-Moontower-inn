-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2019 at 01:19 PM
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
-- Table structure for table `admins_users`
--

CREATE TABLE `admins_users` (
  `id` int(11) NOT NULL,
  `uname` text NOT NULL,
  `password` text NOT NULL,
  `company_post` text NOT NULL,
  `added_date` date NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins_users`
--

INSERT INTO `admins_users` (`id`, `uname`, `password`, `company_post`, `added_date`, `last_login`) VALUES
(1, 'Chandra', 'moontowerinn_22', 'Owner', '2019-02-09', '2019-02-09 05:11:13'),
(3, 'a', 'a', 'a', '2019-02-09', '0000-00-00 00:00:00'),
(4, 'a', 'aa', 'a', '2019-02-09', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins_users`
--
ALTER TABLE `admins_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins_users`
--
ALTER TABLE `admins_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
