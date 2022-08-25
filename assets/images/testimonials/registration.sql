-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 12:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admintrial`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `User_id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(18) NOT NULL,
  `Confirm_Password` varchar(18) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Pincode` varchar(6) NOT NULL,
  `State` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Dob` date NOT NULL,
  `Mobile_no` varchar(10) NOT NULL,
  `Upload_file` varchar(255) NOT NULL,
  `Create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `Modify_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`User_id`, `Name`, `Email`, `Password`, `Confirm_Password`, `Address`, `Pincode`, `State`, `City`, `Dob`, `Mobile_no`, `Upload_file`, `Create_date`, `Modify_date`) VALUES
(20, 'Prajay Chavan', 'prajaypc16@gmail.com', '123456', '123456', 'nsk rd', '422101', 'Maharashtra', '', '2022-01-17', '9021079423', '', '2022-01-27 12:37:42', '2022-01-27 13:03:09'),
(22, 'Rushikesh', 'rushi@1244', '6666666', '666666', 'sdzfxcg', 'dfgc', 'Karnataka', 'pune', '2022-01-29', '9021079423', '', '2022-01-27 14:26:11', '2022-01-27 14:26:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
