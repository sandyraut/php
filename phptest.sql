-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 04:54 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phptest`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `distID` int(11) NOT NULL,
  `distName` varchar(55) NOT NULL,
  `stateID` int(11) NOT NULL,
  `distStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`distID`, `distName`, `stateID`, `distStatus`) VALUES
(1, 'AHMEDNAGAR', 15, 1),
(2, 'AKOLA', 15, 1),
(3, 'AMRAVATI', 15, 1),
(4, 'AURANGABAD', 15, 1),
(5, 'BEED', 15, 1),
(6, 'BHANDARA', 15, 1),
(7, 'BULDHANA', 15, 1),
(8, 'CHANDRAPUR', 15, 1),
(9, 'DHULE', 15, 1),
(10, 'GADCHIROLI', 15, 1),
(11, 'GONDIA', 15, 1),
(12, 'HINGOLI', 15, 1),
(13, 'JALGAON', 15, 1),
(14, 'JALNA', 15, 1),
(15, 'KOLHAPUR', 15, 1),
(16, 'LATUR', 15, 1),
(17, 'MUMBAI', 15, 1),
(18, 'NAGPUR', 15, 1),
(19, 'NANDED', 15, 1),
(20, 'NANDURBAR', 15, 1),
(21, 'NASHIK', 15, 1),
(22, 'OSMANABAD', 15, 1),
(23, 'PALGHAR', 15, 1),
(24, 'PARBHANI', 15, 1),
(25, 'PUNE', 15, 1),
(26, 'RAIGAD', 15, 1),
(27, 'RATNAGIRI', 15, 1),
(28, 'SANGLI', 15, 1),
(29, 'SATARA', 15, 1),
(30, 'SINDHUDURG', 15, 1),
(31, 'SOLAPUR', 15, 1),
(32, 'THANE', 15, 1),
(33, 'WARDHA', 15, 1),
(34, 'WASHIM', 15, 1),
(35, 'YAVATMAL', 15, 1),
(37, 'Agarmalwa', 14, 1),
(38, 'Alirajpur', 14, 1),
(39, 'Anuppur', 14, 1),
(40, 'Ashoknagar', 14, 1),
(41, 'Balaghat', 14, 1),
(42, 'Barwani', 14, 1),
(43, 'Betul', 14, 1),
(44, 'Chhindwara', 14, 1),
(45, 'Damoh', 14, 1),
(46, 'Datia', 14, 1),
(47, 'Dewas', 14, 1),
(48, 'Dhar', 14, 1),
(49, 'Dindori', 14, 1),
(50, 'Guna', 14, 1),
(51, 'Gwalior', 14, 1),
(52, 'Harda', 14, 1),
(53, 'Hoshangabad', 14, 1),
(54, 'Indore', 14, 1),
(55, 'Jabalpur', 14, 1),
(56, 'Jhabua', 14, 1),
(57, 'Katni', 14, 1),
(58, 'Khandwa', 14, 1),
(59, 'Khargone', 14, 1),
(60, 'Mandla', 14, 1),
(61, 'Mandsaur', 14, 1),
(62, 'Morena', 14, 1),
(63, 'Narsinghpur', 14, 1),
(64, 'Neemuch', 14, 1),
(65, 'Panna', 14, 1),
(66, 'Raisen', 14, 1),
(67, 'Rajgarh', 14, 1),
(68, 'Ratlam', 14, 1),
(69, 'Rewa', 14, 1),
(70, 'Sagar', 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cfpassword` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `mobile_no`, `state`, `district`, `password`, `cfpassword`, `created_at`) VALUES
(1, 'sandip', 'raut', 'sandy@gmail.com', '9975401619', '15', '13', 'qwe', 'qwe', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `stateID` int(11) NOT NULL,
  `stateName` varchar(55) NOT NULL,
  `stateStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`stateID`, `stateName`, `stateStatus`) VALUES
(1, 'Andhra Pradesh', 1),
(2, 'Arunachal Pradesh', 1),
(3, 'Assam', 1),
(4, 'Bihar', 1),
(5, 'Chhattisgarh', 1),
(6, 'Goa', 1),
(7, 'Gujarat', 1),
(8, 'Haryana', 1),
(9, 'Himachal Pradesh', 1),
(10, 'Jammu and Kashmir', 1),
(11, 'Jharkhand', 1),
(12, 'Karnataka', 1),
(13, 'Kerala', 1),
(14, 'Madhya Pradesh', 1),
(15, 'Maharashtra', 1),
(16, 'Manipur', 1),
(17, 'Meghalaya', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`distID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`stateID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `distID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `stateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
