-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 03:16 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent_activity`
--

INSERT INTO `agent_activity` (`act_id`, `id`, `hotel_id`, `date`) VALUES
(1, 1, 2, '2020-01-26 07:01:39'),
(2, 2, 1, '2020-01-26 07:17:40'),
(3, 2, 3, '2020-01-26 09:07:04');

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
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hotel_approv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_tour`
--

INSERT INTO `hotel_tour` (`hotel_id`, `username`, `email`, `role`, `password`, `contact`, `profile`, `hotel_name`, `origin`, `location`, `standard`, `manager`, `status`, `reg_date`, `hotel_approv`) VALUES
(1, 'Serena', 'hotel.serena@gmail.com', 'hotel', '1234', 780584460, '172451.jpg', 'Serena Hotel', 'Rwanda', 'Gikondo', '3', 'Ndikubwayo James', 1, '2020-01-26 07:17:40', 1),
(2, 'Marriot', 'marriot@gmail.com', 'hotel', '12', 76789877, 'wp1922263-hacking-background.png', 'Marriot Hotel', 'Rwanda', 'kigali city', '5', 'Kallen King', 1, '2020-01-26 07:01:39', 1),
(3, 'Safari', 'safari.travel@gmail.com', 'tours', '123', 784331945, 'Grand Theft Auto V 12_25_2019 3_00_04 PM.png', 'Safari Tours', 'Rwanda', 'kigali city', '3', 'Hebwer Andrew', 1, '2020-01-26 09:09:28', 1);

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
  `room_pic_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_name`, `hotel_id`, `room_beds`, `room_capacity`, `room_price`, `room_status`, `room_service`, `room_pic_1`, `room_pic_2`, `room_pic_3`, `room_pic_4`) VALUES
(1, 'Room View Sea', 1, 'King beds', '5', '180', 'occupied', 'Dinner', 'wp3087382-spider-man-into-the-spider-verse-wallpapers.jpg', 'rightwp3087390-spider-man-into-the-spider-verse-wallpapers.jpg', 'wp2536674-single-boy-wallpapers.jpg', 'wp2592457-hacking-wallpaper.png'),
(2, 'BEn', 1, 'King beds', '5', '180', 'occupied', 'Dinner', 'wp3087370-spider-man-into-the-spider-verse-wallpapers.jpg', 'rightwp3087390-spider-man-into-the-spider-verse-wallpapers.jpg', 'oov48qugpzvexjt9w00d.jpg', 'wp2592457-hacking-wallpaper.png'),
(3, 'Serena Room 01', 1, 'King beds', '5', '180', 'available', 'Dinner', 'wp3087342-spider-man-into-the-spider-verse-wallpapers.jpg', 'rightwp3087382-spider-man-into-the-spider-verse-wallpapers.jpg', 'wp2536674-single-boy-wallpapers.jpg', 'wp2592457-hacking-wallpaper.png'),
(4, 'Marriot Room 02', 2, 'King beds', '5', '100', 'available', 'Dinner', 'wp2234704-coding-wallpapers.jpg', 'rightwp2592445-hacking-wallpaper.jpg', 'wp2592457-hacking-wallpaper.png', 'wp2592469-hacking-wallpaper (1).jpg');

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
  MODIFY `act_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel_tour`
--
ALTER TABLE `hotel_tour`
  MODIFY `hotel_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
