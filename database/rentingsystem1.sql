-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 02:59 PM
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
-- Database: `rentingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '$2y$10$P17qIIW/TrkIJl.cYb4B3eigKNaRnxH2rRGo1ZLAmXSUXEeGuTKdW');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `owner_id` int(100) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `owner_email` varchar(30) NOT NULL,
  `owner_phone` varchar(12) NOT NULL,
  `owner_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`owner_id`, `owner_name`, `owner_email`, `owner_phone`, `owner_password`) VALUES
(5, 'owner1', 'owner1@gmail.com', '7896541230', '$2y$10$jaGCm7UBJwJOrCa8qFil9u1TQDoZtPFuaTpTxBZjxVS60otQqrtPC'),
(6, 'owner6', 'owner6@mail.com', '7896541230', '$2y$10$txTDQ.Zqz0cXZdUiJLNR2.9LXlFCTWvNNg2a08zOdHZ9WbbeOn3iG'),
(7, 'owner10', 'owner10@mail.com', '8521479632', '$2y$10$ox7ORXj7T3GOuciEhvVfgudwWZkdx52.kZJZuU4pPoKlazrARrnYe'),
(8, 'owner12', 'owner12@gmail.com', '7412589635', '$2y$10$aaqzKsMUQtkZq1PPk3lTVe.5.SOxZu.oXHv9bRe0mK/VBHY9GDahC'),
(9, 'Mayank Kumar Prasad', 'mayank@mk.com', '9508247636', '$2y$10$7ep/UkNTQih2P6TrAGPOjO7J0iOZrWaqFeXo1k4Tg0b6oY13w8C46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`owner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `owner_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
