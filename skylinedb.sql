-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 06:49 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skylinedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aeroplanes`
--

CREATE TABLE `aeroplanes` (
  `model` varchar(64) DEFAULT NULL,
  `reg_number` int(11) NOT NULL,
  `airline_id` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aeroplanes`
--

INSERT INTO `aeroplanes` (`model`, `reg_number`, `airline_id`) VALUES
('Boeing 777', 111111, 'EK'),
('Boeing 787', 222222, 'EY');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agent_name` varchar(64) DEFAULT NULL,
  `l_number` int(11) NOT NULL,
  `m_number` int(11) DEFAULT NULL,
  `country_id` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agent_name`, `l_number`, `m_number`, `country_id`) VALUES
('Agent A', 111111, 101010, 'BD'),
('Agent B', 222222, 303030, 'UAE');

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE `airlines` (
  `airline_id` varchar(6) NOT NULL,
  `airline_name` varchar(64) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `country_id` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`airline_id`, `airline_name`, `type`, `country_id`) VALUES
('EK', 'Emirates Airline', 'International', 'UAE'),
('EY', 'Etihad Airways', 'International', 'UAE');

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `airport_id` varchar(6) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `type` varchar(16) DEFAULT NULL,
  `runways` int(2) DEFAULT NULL,
  `country_id` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`airport_id`, `name`, `type`, `runways`, `country_id`) VALUES
('DAC', 'Hazrat Shahjalal International Airport', 'International', 2, 'BD'),
('DXB', 'Dubai International Airport', 'International', 6, 'UAE');

-- --------------------------------------------------------

--
-- Table structure for table `boarding_passes`
--

CREATE TABLE `boarding_passes` (
  `flight_id` varchar(6) DEFAULT NULL,
  `d_date` date DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `e_seat_num` int(30) DEFAULT NULL,
  `b_seat_num` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boarding_passes`
--

INSERT INTO `boarding_passes` (`flight_id`, `d_date`, `email`, `e_seat_num`, `b_seat_num`) VALUES
('EK-100', '2019-04-28', 'gabe@yahoo.com', 5, NULL),
('EK-100', '2019-04-28', 'gabe@yahoo.com', 6, NULL),
('EK-100', '2019-04-28', 'chuk@yahoo.com', 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` varchar(6) NOT NULL,
  `country_name` varchar(64) DEFAULT NULL,
  `population` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `population`) VALUES
('BD', 'Bangladesh', 164700000),
('UAE', 'United Arab Emirates', 9400000),
('US', 'United States', 327200000);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `flight_id` varchar(6) NOT NULL,
  `d_date` date NOT NULL,
  `d_time` time DEFAULT NULL,
  `gate_num` int(2) DEFAULT NULL,
  `a_date` date DEFAULT NULL,
  `a_time` time DEFAULT NULL,
  `source_id` varchar(6) DEFAULT NULL,
  `dest_id` varchar(6) DEFAULT NULL,
  `e_seats` int(3) DEFAULT NULL,
  `e_price` int(9) NOT NULL,
  `b_seats` int(2) DEFAULT NULL,
  `b_price` int(9) NOT NULL,
  `distance` int(9) NOT NULL,
  `airline_id` varchar(6) DEFAULT NULL,
  `aeroplane_reg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flight_id`, `d_date`, `d_time`, `gate_num`, `a_date`, `a_time`, `source_id`, `dest_id`, `e_seats`, `e_price`, `b_seats`, `b_price`, `distance`, `airline_id`, `aeroplane_reg`) VALUES
('EK-100', '2019-04-28', '09:00:00', 1, '2019-04-29', '14:00:00', 'DAC', 'DXB', 90, 50000, 30, 75000, 3100, 'EK', 222222),
('EY-300', '2019-04-30', '14:15:00', 2, '2019-05-01', '06:00:00', 'DXB', 'DAC', 90, 65000, 30, 80000, 3547, 'EY', 111111);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(6) NOT NULL,
  `flight_id` varchar(6) DEFAULT NULL,
  `d_date` date DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `flight_id`, `d_date`, `type`, `email`) VALUES
(33, 'EK-100', '2019-04-28', 'Economy', 'gabe@yahoo.com'),
(34, 'EK-100', '2019-04-28', 'Economy', 'gabe@yahoo.com'),
(35, 'EK-100', '2019-04-28', 'Economy', 'chuk@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(64) DEFAULT NULL,
  `last_name` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `pwd` varchar(64) DEFAULT NULL,
  `passport_number` int(20) NOT NULL,
  `expiration_date` date DEFAULT NULL,
  `country_id` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `email`, `pwd`, `passport_number`, `expiration_date`, `country_id`) VALUES
('Chuk', 'Spadina', 'chuk@yahoo.com', '123456', 61615, '2023-06-27', 'US'),
('Gabe', 'Newell', 'gabe@yahoo.com', '123456', 123456789, '2023-06-25', 'US');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aeroplanes`
--
ALTER TABLE `aeroplanes`
  ADD PRIMARY KEY (`reg_number`),
  ADD KEY `airline_id` (`airline_id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`l_number`),
  ADD UNIQUE KEY `m_number` (`m_number`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`airline_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`airport_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `boarding_passes`
--
ALTER TABLE `boarding_passes`
  ADD KEY `flight_id` (`flight_id`,`d_date`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`flight_id`,`d_date`),
  ADD KEY `source_id` (`source_id`),
  ADD KEY `dest_id` (`dest_id`),
  ADD KEY `airline_id` (`airline_id`),
  ADD KEY `aeroplane_reg` (`aeroplane_reg`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `flight_id` (`flight_id`,`d_date`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`passport_number`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `country_id` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aeroplanes`
--
ALTER TABLE `aeroplanes`
  MODIFY `reg_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222223;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aeroplanes`
--
ALTER TABLE `aeroplanes`
  ADD CONSTRAINT `aeroplanes_ibfk_1` FOREIGN KEY (`airline_id`) REFERENCES `airlines` (`airline_id`);

--
-- Constraints for table `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `agents_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`);

--
-- Constraints for table `airlines`
--
ALTER TABLE `airlines`
  ADD CONSTRAINT `airlines_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`);

--
-- Constraints for table `airports`
--
ALTER TABLE `airports`
  ADD CONSTRAINT `airports_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`);

--
-- Constraints for table `boarding_passes`
--
ALTER TABLE `boarding_passes`
  ADD CONSTRAINT `boarding_passes_ibfk_1` FOREIGN KEY (`flight_id`,`d_date`) REFERENCES `flights` (`flight_id`, `d_date`),
  ADD CONSTRAINT `boarding_passes_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `flights`
--
ALTER TABLE `flights`
  ADD CONSTRAINT `flights_ibfk_1` FOREIGN KEY (`source_id`) REFERENCES `airports` (`airport_id`),
  ADD CONSTRAINT `flights_ibfk_2` FOREIGN KEY (`dest_id`) REFERENCES `airports` (`airport_id`),
  ADD CONSTRAINT `flights_ibfk_3` FOREIGN KEY (`airline_id`) REFERENCES `airlines` (`airline_id`),
  ADD CONSTRAINT `flights_ibfk_4` FOREIGN KEY (`aeroplane_reg`) REFERENCES `aeroplanes` (`reg_number`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`flight_id`,`d_date`) REFERENCES `flights` (`flight_id`, `d_date`),
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
