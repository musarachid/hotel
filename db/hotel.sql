-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2020 at 10:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `names` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `profile` text NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `names`, `email`, `password`, `profile`, `contact`) VALUES
(1, 'Creator', '', 'test@gmail.com', '12345', '', 788885556);

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `profile` text NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `username`, `email`, `password`, `profile`, `contact`) VALUES
(1, 'yves', 'yves@gmail.com', '1234', 'wp1922263-hacking-background.png', 788885556),
(2, 'kalon', 'kalo@gmail.com', '12', 'me.jpg', 7845454),
(3, 'gasaro', 'ralphranger47@gmail.com', '1234', '', 784545445);

-- --------------------------------------------------------

--
-- Table structure for table `agent_activity`
--

CREATE TABLE `agent_activity` (
  `act_id` int(255) NOT NULL,
  `id` int(100) NOT NULL,
  `hotel_id` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent_activity`
--

INSERT INTO `agent_activity` (`act_id`, `id`, `hotel_id`, `date`) VALUES
(1, 1, 2, '2020-01-26 07:01:39'),
(2, 2, 1, '2020-01-26 07:17:40'),
(3, 2, 3, '2020-01-26 09:07:04'),
(4, 1, 4, '2020-02-03 13:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `room_id` int(11) NOT NULL,
  `room_name` text NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_beds` text NOT NULL,
  `room_capacity` text NOT NULL,
  `room_price` text NOT NULL,
  `room_status` text NOT NULL,
  `room_service` text NOT NULL,
  `room_pic_1` text NOT NULL,
  `room_pic_2` text NOT NULL,
  `room_pic_3` text NOT NULL,
  `room_pic_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `profile` text NOT NULL,
  `contact` int(20) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `username`, `email`, `password`, `profile`, `contact`, `status`) VALUES
(1, 'simba', 'simba@gmail.com', '123', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_tour`
--

CREATE TABLE `hotel_tour` (
  `hotel_id` int(40) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `role` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` int(15) NOT NULL,
  `profile` text NOT NULL,
  `hotel_name` text NOT NULL,
  `origin` text NOT NULL,
  `location` text NOT NULL,
  `standard` text NOT NULL,
  `manager` text NOT NULL,
  `status` int(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hotel_approv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_tour`
--

INSERT INTO `hotel_tour` (`hotel_id`, `username`, `email`, `role`, `password`, `contact`, `profile`, `hotel_name`, `origin`, `location`, `standard`, `manager`, `status`, `reg_date`, `hotel_approv`) VALUES
(1, 'Serena', 'hotel.serena@gmail.com', 'hotel', '1234', 780584460, '172451.jpg', 'Serena Hotel', 'Rwanda', 'Gikondo', '3', 'Ndikubwayo James', 1, '2020-01-26 07:17:40', 1),
(2, 'Marriot', 'marriot@gmail.com', 'hotel', '12', 76789877, 'wp1922263-hacking-background.png', 'Marriot Hotel', 'Rwanda', 'kigali city', '5', 'Kallen King', 1, '2020-01-26 07:01:39', 1),
(3, 'Safari', 'safari.travel@gmail.com', 'tours', '123', 784331945, 'Grand Theft Auto V 12_25_2019 3_00_04 PM.png', 'Safari Tours', 'Rwanda', 'kigali city', '3', 'Hebwer Andrew', 1, '2020-01-26 09:09:28', 1),
(4, 'Karisimbi', 'karisimbi@gmail.com', 'hotel', '123', 784331945, '', '', '', '', '', '', 0, '2020-02-03 13:15:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `res_id` int(11) NOT NULL,
  `res_data` varchar(255) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `check_in` varchar(40) NOT NULL,
  `check_out` varchar(40) NOT NULL,
  `res_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `client_names` varchar(255) NOT NULL,
  `card_no` int(50) NOT NULL,
  `client_mail` varchar(100) NOT NULL,
  `res_stat` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`res_id`, `res_data`, `client_id`, `room_id`, `check_in`, `check_out`, `res_date`, `client_names`, `card_no`, `client_mail`, `res_stat`) VALUES
(8, 'Roo-Nig-155', 1, 1, '2020-02-13', '2020-02-15', '2020-02-06 15:28:57', 'Nigisubizo King', 12345677, 'simba@gmail.com', ''),
(9, 'Roo-Nig-822', 1, 1, '2020-02-13', '2020-02-15', '2020-02-06 15:29:01', 'Nigisubizo King', 12345677, 'simba@gmail.com', ''),
(10, 'Roo-Nig-431', 1, 1, '2020-02-13', '2020-02-15', '2020-02-06 15:29:52', 'Nigisubizo King', 12345677, 'simba@gmail.com', ''),
(13, 'Roo-Gak-339', 1, 1, '2020-02-08', '2020-02-16', '2020-02-29 04:10:50', 'Gakwandi Gisele', 121312, 'simba@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `client` varchar(200) NOT NULL,
  `room_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `rating` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `client`, `room_id`, `message`, `rating`, `date`) VALUES
(1, 'simba', 2, 'toka sha\r\n', 5, '2020-02-06 14:57:39'),
(2, 'simba', 2, 'toka sha\r\n', 5, '2020-02-06 14:57:42'),
(3, 'simba', 1, 'genda', 2, '2020-02-06 14:59:54'),
(4, 'simba', 1, 'genda', 2, '2020-02-06 15:00:28'),
(5, 'simba', 1, 'genda', 2, '2020-02-06 15:00:50'),
(6, 'simba', 1, 'genda', 2, '2020-02-06 15:00:55'),
(7, 'simba', 1, 'gf', 5, '2020-02-06 15:02:03'),
(8, 'simba', 1, 'gf', 5, '2020-02-06 15:02:53'),
(9, 'simba', 1, 'gf', 5, '2020-02-06 15:03:00'),
(10, 'simba', 1, 'gf', 5, '2020-02-06 15:03:59'),
(11, 'simba', 1, 'gf', 5, '2020-02-06 15:04:08'),
(12, 'simba', 1, 'gf', 5, '2020-02-06 15:04:30'),
(13, 'simba', 1, 'gf', 5, '2020-02-06 15:04:38'),
(14, 'simba', 1, 'gf', 5, '2020-02-06 15:05:16'),
(15, 'simba', 1, 'gf', 5, '2020-02-06 15:05:22'),
(16, 'simba', 1, 'gf', 5, '2020-02-06 15:05:39'),
(17, 'simba', 1, 'as', 4, '2020-02-06 15:06:11'),
(18, 'simba', 1, 'as', 4, '2020-02-06 15:06:23'),
(19, 'simba', 1, 'as', 4, '2020-02-06 15:06:35'),
(20, 'simba', 1, 'as', 4, '2020-02-06 15:06:42'),
(21, 'simba', 1, 'as', 4, '2020-02-06 15:06:54'),
(22, 'simba', 4, 'hey\r\n', 3, '2020-02-06 15:16:39'),
(23, 'simba', 4, 'dsfas', 2, '2020-02-06 15:17:10'),
(24, 'simba', 4, 'karabaye\r\n', 3, '2020-03-01 17:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room_name` text NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_beds` text NOT NULL,
  `room_capacity` text NOT NULL,
  `room_price` text NOT NULL,
  `room_status` text NOT NULL,
  `room_service` text NOT NULL,
  `room_pic_1` text NOT NULL,
  `room_pic_2` text NOT NULL,
  `room_pic_3` text NOT NULL,
  `room_pic_4` text NOT NULL,
  `category` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_name`, `hotel_id`, `room_beds`, `room_capacity`, `room_price`, `room_status`, `room_service`, `room_pic_1`, `room_pic_2`, `room_pic_3`, `room_pic_4`, `category`) VALUES
(1, 'Room View Sea', 1, 'King beds', '2', '180', 'occupied', 'Dinner', 'wp3087382-spider-man-into-the-spider-verse-wallpapers.jpg', 'rightwp3087390-spider-man-into-the-spider-verse-wallpapers.jpg', 'wp2536674-single-boy-wallpapers.jpg', 'wp2592457-hacking-wallpaper.png', 'room'),
(2, 'BEn', 1, 'Twin beds', '5', '180', 'available', 'Dinner', 'wp3087370-spider-man-into-the-spider-verse-wallpapers.jpg', 'rightwp3087390-spider-man-into-the-spider-verse-wallpapers.jpg', 'oov48qugpzvexjt9w00d.jpg', 'wp2592457-hacking-wallpaper.png', 'room'),
(3, 'Serena Room 01', 1, 'Queen beds', '5', '180', 'available', 'Dinner', 'wp3087342-spider-man-into-the-spider-verse-wallpapers.jpg', 'rightwp3087382-spider-man-into-the-spider-verse-wallpapers.jpg', 'wp2536674-single-boy-wallpapers.jpg', 'wp2592457-hacking-wallpaper.png', 'room'),
(4, 'Marriot Room 02', 2, 'Single bed', '5', '100', 'available', 'Dinner', 'wp2234704-coding-wallpapers.jpg', 'rightwp2592445-hacking-wallpaper.jpg', 'wp2592457-hacking-wallpaper.png', 'wp2592469-hacking-wallpaper (1).jpg', 'room');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent_activity`
--
ALTER TABLE `agent_activity`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_tour`
--
ALTER TABLE `hotel_tour`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agent_activity`
--
ALTER TABLE `agent_activity`
  MODIFY `act_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel_tour`
--
ALTER TABLE `hotel_tour`
  MODIFY `hotel_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
