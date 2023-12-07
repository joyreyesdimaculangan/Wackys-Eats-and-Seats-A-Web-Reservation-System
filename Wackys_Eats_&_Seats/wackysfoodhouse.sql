-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 06:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wackysfoodhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `userID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`userID`, `username`, `password`, `name`, `email`, `phone_number`, `usertype`) VALUES
(1, 'ADMIN ACCOUNT', 'admin@01', 'ADMINISTRATOR', 'admin@gmail.com', '09105540861', 'admin'),
(3, 'William Dionisio', 'aaaa', 'Yam', 'qwertywilliam370@gmail.com', '09105540861', 'user'),
(4, 'Juan Dela Cruz', 'awaw', 'Juan', 'juan@gmail.com', '09105540861', 'user'),
(5, 'Marie Antoniette', 'france', 'Marie', 'marie@gmail.com', '09105540862', 'user'),
(6, 'Leonardo DaVinci', 'itsme', 'DuhBinchi', 'leodeez@gmail.com', '09105540865', 'user'),
(7, 'Marie Antoniette', 'aaa', 'johnsicked', 'qwertywilliam370@gmail.com', '09105540861', 'user'),
(8, 'Marie Antoniette', 'awaw', 'YamiYam', 'qwertywilliam370@gmail.com', '09105540862', 'user'),
(9, 'Yam', 'aaaa', 'juan dela cruz', 'qwertywilliam370@gmail.com', '09105540861', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `events_reservation`
--

CREATE TABLE `events_reservation` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `number_of_pax` int(30) NOT NULL,
  `time_and_date` datetime DEFAULT curtime(),
  `packages` varchar(30) NOT NULL,
  `theme_event` text NOT NULL,
  `theme_cake` varchar(100) NOT NULL,
  `dedication_message` varchar(255) NOT NULL,
  `requests` text NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events_reservation`
--

INSERT INTO `events_reservation` (`id`, `name`, `email`, `contact_number`, `number_of_pax`, `time_and_date`, `packages`, `theme_event`, `theme_cake`, `dedication_message`, `requests`, `user_id`) VALUES
(1, 'john', 'johndoe@gmail.com', '2147483647', 9, '2023-12-07 05:24:00', '', '', '', '', '', NULL),
(2, 'john', 'johndoe@gmail.com', '2147483647', 9, '2023-12-07 05:24:00', '', '', '', '', '', NULL),
(11, 'juan', 'qwertywilliam370@gmail.com', '09105540861', 15, '2023-11-07 13:23:00', 'Package 4', 'BEN 10', 'BEN 10', 'I love superman', 'have dancing jollibee', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `foodhouse_reservation`
--

CREATE TABLE `foodhouse_reservation` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `number_of_pax` int(30) NOT NULL,
  `time_and_date` datetime DEFAULT curtime(),
  `table_loc` varchar(20) NOT NULL,
  `table_no` int(100) NOT NULL,
  `notes` text NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foodhouse_reservation`
--

INSERT INTO `foodhouse_reservation` (`id`, `name`, `email`, `contact_number`, `number_of_pax`, `time_and_date`, `table_loc`, `table_no`, `notes`, `user_id`) VALUES
(21, 'john', 'johndoe@gmail.com', '09256775432', 9, '2023-12-07 05:24:00', '', 0, '', NULL),
(22, 'john', 'johndoe@gmail.com', '09256775432', 9, '2023-12-07 05:24:00', '', 0, '', NULL),
(29, 'juan', 'qwertywilliam370@gmail.com', '09105540861', 1, '2023-11-15 00:58:00', '', 0, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `events_reservation`
--
ALTER TABLE `events_reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `foodhouse_reservation`
--
ALTER TABLE `foodhouse_reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `events_reservation`
--
ALTER TABLE `events_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `foodhouse_reservation`
--
ALTER TABLE `foodhouse_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events_reservation`
--
ALTER TABLE `events_reservation`
  ADD CONSTRAINT `events_reservation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `customers` (`userID`) ON DELETE SET NULL;

--
-- Constraints for table `foodhouse_reservation`
--
ALTER TABLE `foodhouse_reservation`
  ADD CONSTRAINT `foodhouse_reservation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `customers` (`userID`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
