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
-- Table structure for table `reservations_req`
--

CREATE TABLE `reservations_req` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `rage` int(11) NOT NULL,
  `cno` text NOT NULL,
  `room_code` text NOT NULL,
  `checkin` text NOT NULL,
  `checkout` text NOT NULL,
  `pphoto` text NOT NULL,
  `total_people` text NOT NULL,
  `no_rooms` text NOT NULL,
  `user_code` text NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations_req`
--

INSERT INTO `reservations_req` (`id`, `fname`, `lname`, `rage`, `cno`, `room_code`, `checkin`, `checkout`, `pphoto`, `total_people`, `no_rooms`, `user_code`, `added_date`) VALUES
(12, 'aa', 'aa', 1, '1234512345', '5c61213e2dd916.40516180', '2019-02-14', '2019-02-15', 'user_ajaxs/bookers_pp/5c65e4a960ba70.81527214.PNG', '1', '1', '5c65e4a960ba70.81527214', '2019-02-14 10:59:05'),
(13, 'aa', 'aa', 1, '1234512345', '5c6215e70f0ca8.67137575', '2019-02-14', '2019-02-15', 'user_ajaxs/bookers_pp/5c65e4b59fcf27.69803769.PNG', '1', '1', '5c65e4b59fcf27.69803769', '2019-02-14 10:59:17'),
(16, 'jpt', 'ljpt', 11, '1234512345', 'Random', '2019-02-14', '2019-02-15', 'user_ajaxs/bookers_pp/5c669f79293508.41096114.png', '7', '4', '5c669f79293508.41096114', '2019-02-15 12:16:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations_req`
--
ALTER TABLE `reservations_req`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations_req`
--
ALTER TABLE `reservations_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
