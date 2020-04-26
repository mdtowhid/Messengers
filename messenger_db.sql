-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 10:51 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `messenger_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Id` int(11) NOT NULL,
  `SendBy` varchar(100) NOT NULL,
  `RecievedBy` varchar(100) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `SendTime` time NOT NULL,
  `RecievedTime` time NOT NULL,
  `SeenStatus` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Id`, `SendBy`, `RecievedBy`, `Message`, `SendTime`, `RecievedTime`, `SeenStatus`) VALUES
(45, '1', '5', 'Hello', '10:24:00', '10:24:00', 'delivered'),
(46, '5', '1', 'Hello', '10:25:00', '10:25:00', 'delivered'),
(47, '1', '5', 'Test', '10:25:00', '10:25:00', 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `UserRole` varchar(50) DEFAULT NULL,
  `PhotoPath` varchar(1000) DEFAULT NULL,
  `IsLoggedIn` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `FullName`, `Email`, `Password`, `UserRole`, `PhotoPath`, `IsLoggedIn`) VALUES
(1, 'Jane Doe', 'jane123@gmail.com', '123', 'user', 'none', 1),
(2, 'Alfred Frank', 'alfred@gmail.com', '123', 'user', 'none', 1),
(3, 'Smith Joe', 'smith@gmail.com', '123', 'user', 'none', 1),
(4, 'Root', 'root@gmail.com', '123', 'admin', 'none', 0),
(5, 'Jameela', 'jameela@gmail.com', '123', 'admin', 'none', 1),
(6, 'Will Smith', 'ws@gmail.com', '123', 'user', 'none', 0),
(7, 'Annex', 'annex@gmail.com', '123', 'user', 'none', 0),
(8, 'Jack', 'jack@gmail.com', '123', 'user', 'none', 0),
(9, 'Anna', 'anna@gmail.com', '123', 'admin', 'none', 0),
(10, 'Blossom', 'blossom@gmail.com', '123', 'user', 'none', 0),
(11, 'Bubbles', 'bubbles@gmail.com', '123', 'user', 'none', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
