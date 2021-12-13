-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 04:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitedb`
--
CREATE DATABASE IF NOT EXISTS `websitedb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `websitedb`;

-- --------------------------------------------------------

--
-- Table structure for table `acountinformation`
--

CREATE TABLE `acountinformation` (
  `userid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acountinformation`
--

INSERT INTO `acountinformation` (`userid`, `username`, `password`, `date`) VALUES
(1, '1234', '1234', '0000-00-00'),
(36, 'ukotism', '123456', '2021-12-01'),
(60, 'paul', 'paul', '2021-12-01'),
(61, 'otis', 'otis', '0000-00-00'),
(74, 'ukotism122', '123456111', '2021-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `dogbreedtable`
--

CREATE TABLE `dogbreedtable` (
  `entryid` int(255) NOT NULL,
  `dogbreed` varchar(255) NOT NULL,
  `dogweight` varchar(255) NOT NULL,
  `dogheight` varchar(255) NOT NULL,
  `coattype` varchar(255) NOT NULL,
  `coatlength` varchar(255) NOT NULL,
  `averageage` varchar(255) NOT NULL,
  `entrydate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dogbreedtable`
--

INSERT INTO `dogbreedtable` (`entryid`, `dogbreed`, `dogweight`, `dogheight`, `coattype`, `coatlength`, `averageage`, `entrydate`) VALUES
(1, 'Chihuahua', '2 - 5', '18', 'Smooth', 'Short', '12 - 20', '2021-12-04'),
(2, 'Bulldog', '18 - 22', '38', 'Smooth', 'Short', '8 - 10', '2021-12-04'),
(3, 'Shiba Inu', '6 - 12', '35 - 45', 'Double', 'Short', '13 - 16', '2021-12-04'),
(4, 'Terrier', '10 - 15', '5 - 10', 'Rough', 'Medium', '15 - 18', '2021-12-04'),
(5, 'Poodle', '2 - 5', '15 - 20', 'Curly', 'Long', '8 - 17', '2021-12-04'),
(21, 'Dog', '2', '2', '2', '2', '2', '2021-12-04'),
(22, 'Dog2', 'Dog2', 'Dog2', 'Dog2', 'Dog2', 'Dog2', '2021-12-04'),
(23, 'Dog3', '1', '1', '1', '1', '1', '2021-12-04'),
(25, 'dogdog', '2', '2', '2', '2', '2', '2021-12-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acountinformation`
--
ALTER TABLE `acountinformation`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`,`password`),
  ADD UNIQUE KEY `password` (`password`),
  ADD KEY `password_2` (`password`);

--
-- Indexes for table `dogbreedtable`
--
ALTER TABLE `dogbreedtable`
  ADD PRIMARY KEY (`entryid`),
  ADD UNIQUE KEY `dogbreed` (`dogbreed`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acountinformation`
--
ALTER TABLE `acountinformation`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `dogbreedtable`
--
ALTER TABLE `dogbreedtable`
  MODIFY `entryid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
