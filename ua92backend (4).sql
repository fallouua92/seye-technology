-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2021 at 09:31 AM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ua92backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `astronaut`
--

CREATE TABLE IF NOT EXISTS `astronaut` (
  `astronaut_id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `no_missions` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astronaut`
--

INSERT INTO `astronaut` (`astronaut_id`, `Name`, `no_missions`) VALUES
(1, 'Mollie', 11),
(2, 'Dillan', 8),
(3, 'Thema', 52),
(4, 'Amber', 4),
(5, 'Fernando', 10);

-- --------------------------------------------------------

--
-- Table structure for table `attends`
--

CREATE TABLE IF NOT EXISTS `attends` (
  `mission_id` int(11) NOT NULL,
  `astronaut_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attends`
--

INSERT INTO `attends` (`mission_id`, `astronaut_id`) VALUES
(1, 1),
(1, 5),
(2, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE IF NOT EXISTS `mission` (
  `mission_id` int(11) NOT NULL,
  `name` text,
  `destination` text,
  `launch_data` date DEFAULT NULL,
  `type` text,
  `crew_size` text,
  `target_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`mission_id`, `name`, `destination`, `launch_data`, `type`, `crew_size`, `target_id`) VALUES
(1, 'G-8', 'Pluto', '1996-08-21', 'Group', '16', 3),
(2, 'G-6', 'Mars', '1983-04-05', 'Satellite', '1', 1),
(3, 'G-2', 'Moon', '1999-01-01', 'Group', '52', 4),
(4, 'G-23', 'Jupiter', '0000-00-00', 'Group', '49', 2);

-- --------------------------------------------------------

--
-- Table structure for table `targets`
--

CREATE TABLE IF NOT EXISTS `targets` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `first_mission` date DEFAULT NULL,
  `type` text,
  `no_missions` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `targets`
--

INSERT INTO `targets` (`id`, `Name`, `first_mission`, `type`, `no_missions`) VALUES
(1, 'RedPlanet', '1996-01-02', 'Space', 2),
(2, 'Alack', '1992-06-13', 'Space', 3),
(3, 'TimyTarget', '1984-02-02', 'Space', 1),
(4, 'Luna', '1965-02-04', 'Space', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `astronaut`
--
ALTER TABLE `astronaut`
  ADD PRIMARY KEY (`astronaut_id`) USING BTREE;

--
-- Indexes for table `attends`
--
ALTER TABLE `attends`
  ADD PRIMARY KEY (`mission_id`,`astronaut_id`),
  ADD KEY `attends_ibfk_2` (`astronaut_id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`mission_id`),
  ADD KEY `mission_ibfk_1` (`target_id`);

--
-- Indexes for table `targets`
--
ALTER TABLE `targets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `astronaut`
--
ALTER TABLE `astronaut`
  MODIFY `astronaut_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `mission_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `targets`
--
ALTER TABLE `targets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attends`
--
ALTER TABLE `attends`
  ADD CONSTRAINT `attends_ibfk_1` FOREIGN KEY (`mission_id`) REFERENCES `mission` (`mission_id`),
  ADD CONSTRAINT `attends_ibfk_2` FOREIGN KEY (`astronaut_id`) REFERENCES `astronaut` (`astronaut_id`);

--
-- Constraints for table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `mission_ibfk_1` FOREIGN KEY (`target_id`) REFERENCES `targets` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
