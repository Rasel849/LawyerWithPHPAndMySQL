-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 10:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legalassist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'RaselIslamBabu', 'mim@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `adminregistation`
--

CREATE TABLE `adminregistation` (
  `username` varchar(29) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminregistation`
--

INSERT INTO `adminregistation` (`username`, `email`, `password`, `category`) VALUES
('admin', '123@gmail.com', '123456', 'Securities Lawyer'),
('Daniel Lee', 'daniel.lee@email.com', 'password9', 'Bankruptcy Law'),
('David Miller', 'david.miller@email.c', 'password7', 'Intellectual Propert'),
('Emily Davis', 'emily.davis@email.co', 'password4', 'Corporate Law'),
('Grace Taylor', 'grace.taylor@email.c', 'password10', 'Employment Law'),
('Jane Smith', 'jane.smith@email.com', 'password2', 'Criminal Defense'),
('John Doe', 'john.doe@email.com', 'password1', 'Family Law'),
('Michael Brown', 'michael.brown@email.', 'password5', 'Personal Injury'),
('naruto', 'naruto@gmail.com', 'gdgbhjjhj', 'Immigration Lawyer'),
('Olivia White', 'olivia.white@email.c', 'password8', 'Environmental Law'),
('Rasel Islam Babu', 'raselahamed785@gmail', '123456', 'Contract Lawyer'),
('Robert Johnson', 'robert.johnson@email', 'password3', 'Real Estate Law'),
('Sarah Wilson', 'sarah.wilson@email.c', 'password6', 'Immigration Law'),
('et7', 'v@gmail.com', 'gggf', 'Bankruptcy Lawyer'),
('sun', 'vodro@gmail.com', 'fgdgbgh', 'Immigration Lawyer');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `useremail` varchar(25) NOT NULL,
  `layeremail` varchar(25) NOT NULL,
  `timedateid` int(11) NOT NULL,
  `massege` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `useremail`, `layeremail`, `timedateid`, `massege`) VALUES
(1, 'mim@gmail.com', '123@gmail.com', 1, ''),
(2, 'mim@gmail.com', '123@gmail.com', 1, ''),
(3, 'mim@gmail.com', '123@gmail.com', 1, 'trtgthyj'),
(4, 'mim@gmail.com', '123@gmail.com', 2, 'rfggh'),
(5, 'mim@gmail.com', '123@gmail.com', 2, 'i am rasel islam babu . who are you pleace tell me'),
(6, 'mim@gmail.com', '123@gmail.com', 1, 'trtgthyj'),
(7, 'mim@gmail.com', '123@gmail.com', 1, 'trtgthyj'),
(8, 'mim@gmail.com', '123@gmail.com', 1, 'trtgthyj'),
(9, 'mim@gmail.com', '123@gmail.com', 1, 'y y'),
(10, 'mim@gmail.com', '123@gmail.com', 2, 'ytgyuuhnb');

-- --------------------------------------------------------

--
-- Table structure for table `timeanddate`
--

CREATE TABLE `timeanddate` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timeanddate`
--

INSERT INTO `timeanddate` (`id`, `email`, `time`, `date`) VALUES
(1, '123@gmail.com', '04:10:00', '2023-11-21'),
(2, '123@gmail.com', '14:12:00', '2023-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `user_registation`
--

CREATE TABLE `user_registation` (
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registation`
--

INSERT INTO `user_registation` (`username`, `email`, `password`) VALUES
('admin', 'admin@gmail.com', 'gheiwufyhuih'),
('Nusrat jahan mim', 'mim@gmail.com', '123456'),
('RaselIslamBabu', 'raselahamed785@gmail.com', 'rggdtghfhn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminregistation`
--
ALTER TABLE `adminregistation`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeanddate`
--
ALTER TABLE `timeanddate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registation`
--
ALTER TABLE `user_registation`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `timeanddate`
--
ALTER TABLE `timeanddate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
