-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 03:47 PM
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
(8, 'dewanik', 'dewanik8', 'Developer', '2019-02-10', '2019-02-10 08:17:31');

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
(1, '\r\n[\"2019-02-10\",\"2019-02-28\"]', '[\"2019-02-10\",\"2019-03-21\"]', 100, '2019-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_cat` text NOT NULL,
  `room_capacity` text NOT NULL,
  `available_such_rooms` int(11) NOT NULL,
  `room_checkin` text NOT NULL,
  `room_checkout` text NOT NULL,
  `room_images` text NOT NULL,
  `room_price` int(11) NOT NULL,
  `extra_offer` text NOT NULL,
  `promo_code` int(11) NOT NULL,
  `discount_available` int(11) NOT NULL,
  `short_description` text NOT NULL,
  `room_code` text NOT NULL,
  `best_peice` text NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_cat`, `room_capacity`, `available_such_rooms`, `room_checkin`, `room_checkout`, `room_images`, `room_price`, `extra_offer`, `promo_code`, `discount_available`, `short_description`, `room_code`, `best_peice`, `added_date`) VALUES
(6, 'Super Deluxe Room', '3', 10, '[\"2019-02-10\",\"2019-02-28\"]', '[\"2019-02-10\",\"2019-03-21\"]', '[\"room_files/5c61213e2dd916.40516180_1.jpg\",\"room_files/5c61213e2dd916.40516180_2.wmv\"]', 300, 'Extra Bed @Rs.220', 2222, 12, 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', '5c61213e2dd916.40516180', 'Yes', '2019-02-11 01:01:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins_users`
--
ALTER TABLE `admins_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `available_rooms_criteria`
--
ALTER TABLE `available_rooms_criteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins_users`
--
ALTER TABLE `admins_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `available_rooms_criteria`
--
ALTER TABLE `available_rooms_criteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
