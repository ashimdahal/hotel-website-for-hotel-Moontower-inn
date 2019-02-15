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
(6, 'Super Deluxe Room', '3', 10, '[\"2019-02-10\",\"2019-02-28\"]', '[\"2019-02-10\",\"2019-03-21\"]', '[\"room_files/5c61213e2dd916.40516180_1.jpg\",\"room_files/5c61213e2dd916.40516180_2.wmv\"]', 300, 'Extra Bed @Rs.220', 2222, 12, 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ', '5c61213e2dd916.40516180', 'Yes', '2019-02-11 01:01:14'),
(7, 'new_room2', '2', 12, '[\"2019-02-10\",\"2019-02-28\"]', '[\"2019-02-10\",\"2019-03-21\"]', '[\"room_files/5c6215daa47928.44798312_1.jpg\"]', 300, 'No', 0, 5, 'Room with high speed internet , AC ,TVs and much more', '5c6215daa47928.44798312', 'Yes', '2019-02-12 06:24:54'),
(8, 'new_room2', '2', 12, '[\"2019-02-10\",\"2019-02-28\"]', '[\"2019-02-10\",\"2019-03-21\"]', '[\"room_files/5c6215e12b80b0.45352094_1.jpg\",\"room_files/5c6215e12b80b0.45352094_2.jpg\"]', 300, 'No', 0, 5, 'abcd', '5c6215e12b80b0.45352094', 'No', '2019-02-12 06:25:01'),
(9, 'new_room2', '2', 12, '[\"2019-02-10\",\"2019-02-28\"]', '[\"2019-02-10\",\"2019-03-21\"]', '[\"room_files/5c6215e70f0ca8.67137575_1.jpg\",\"room_files/5c6215e70f0ca8.67137575_2.jpg\",\"room_files/5c6215e70f0ca8.67137575_3.jpg\"]', 300, 'No', 0, 5, 'abcd', '5c6215e70f0ca8.67137575', 'Yes', '2019-02-12 06:25:07'),
(10, 'new_room2', '2', 12, '[\"2019-02-10\",\"2019-02-28\"]', '[\"2019-02-10\",\"2019-03-21\"]', '[\"room_files/5c6215ef0f8259.40205478_1.jpg\",\"room_files/5c6215ef0f8259.40205478_2.jpg\",\"room_files/5c6215ef0f8259.40205478_3.jpg\",\"room_files/5c6215ef0f8259.40205478_4.jpg\"]', 300, 'No', 0, 5, 'abcd', '5c6215ef0f8259.40205478', 'Yes', '2019-02-12 06:25:15'),
(11, 'new_room2', '2', 12, '[\"2019-02-10\",\"2019-02-28\"]', '[\"2019-02-10\",\"2019-03-21\"]', '[\"room_files/5c6216204c7234.43906633_1.jpg\",\"room_files/5c6216204c7234.43906633_2.jpg\",\"room_files/5c6216204c7234.43906633_3.jpg\",\"room_files/5c6216204c7234.43906633_4.jpg\",\"room_files/5c6216204c7234.43906633_5.jpg\"]', 300, 'No', 0, 0, 'abcd', '5c6216204c7234.43906633', 'Yes', '2019-02-12 06:26:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
