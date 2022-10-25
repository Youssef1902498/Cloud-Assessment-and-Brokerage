-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 09:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `stations` varchar(200) NOT NULL,
  `station_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`stations`, `station_id`) VALUES
('Bab-El-She3reya', 14),
('Maadi', 15),
('Agouza', 16),
('Abbasya', 17),
('Zamalek', 18),
('October', 19),
('Oraby', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticketID` int(200) NOT NULL,
  `source` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `return_date` varchar(255) DEFAULT NULL,
  `time` varchar(200) NOT NULL,
  `trip_type` varchar(200) NOT NULL,
  `trip_class` varchar(200) NOT NULL,
  `ticketCount` int(200) NOT NULL,
  `by_user_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticketID`, `source`, `destination`, `date`, `return_date`, `time`, `trip_type`, `trip_class`, `ticketCount`, `by_user_id`) VALUES
(29, 'Bab-El-She3reya', 'Agouza', '2022-08-18', '', '20:33', 'One way trip', '2nd - Class Carriage', 1, 41),
(30, 'Bab-El-She3reya', 'Maadi', '2022-08-25', '', '20:44', 'One way trip', '1st - Class Carriage', 1, 39);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_phone` int(12) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `profile_picture` varchar(255) NOT NULL DEFAULT 'default-pp.jpg',
  `hasTicket` int(1) NOT NULL,
  `user_balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_password`, `user_phone`, `user_type`, `profile_picture`, `hasTicket`, `user_balance`) VALUES
(2, 'Magdy', 'admin@admin.com', 'admin', 1140523092, 'Admin', 'asd62fa7cd25cf5c4.95205777.png', 0, 52),
(39, 'youssef', 'asd@asd.ai', 'qweasd123', 1140523092, 'User', 'default-pp.jpg', 1, 57),
(40, 'qwe', 'test@test.com', 'qweasd123', 1140523092, 'User', 'default-pp.jpg', 0, 10),
(41, 'magz', 'youssef@y.com', 'qweasd123', 1140523092, 'User', 'default-pp.jpg', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`station_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticketID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `station_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticketID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
