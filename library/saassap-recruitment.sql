-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 12:28 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saassap-recruitment`
--
CREATE DATABASE IF NOT EXISTS `saassap-recruitment` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `saassap-recruitment`;

-- --------------------------------------------------------

--
-- Table structure for table `applicant references`
--

DROP TABLE IF EXISTS `applicant references`;
CREATE TABLE `applicant references` (
  `Title` text NOT NULL,
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `1)Reference Name & Surname` text NOT NULL,
  `1)Reference Position` text NOT NULL,
  `1)Reference Organisation` text NOT NULL,
  `1)Reference Phone` text NOT NULL,
  `1)Reference Email` text NOT NULL,
  `2)Reference Name & Surname` text NOT NULL,
  `2)Reference Position` text NOT NULL,
  `2)Reference Organisation` text NOT NULL,
  `2)Reference Phone` text NOT NULL,
  `2)Reference Email` text NOT NULL,
  `3)Reference Name & Surname` text NOT NULL,
  `3)Reference Position` text NOT NULL,
  `3)Reference Organisation` text NOT NULL,
  `3)Reference Phone` text NOT NULL,
  `3)Reference Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `educational details`
--

DROP TABLE IF EXISTS `educational details`;
CREATE TABLE `educational details` (
  `Title` text NOT NULL,
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `1)Tertiary Institution / School` text NOT NULL,
  `1)Location` text NOT NULL,
  `1)Qualification` text NOT NULL,
  `1)Year Completed` date NOT NULL,
  `2)Tertiary Institution / School` text NOT NULL,
  `2)Location` text NOT NULL,
  `2)Qualification` text NOT NULL,
  `2)Year Completed` date NOT NULL,
  `3)Tertiary Institution / School` text NOT NULL,
  `3)Location` text NOT NULL,
  `3)Qualification` text NOT NULL,
  `3)Year Completed` date NOT NULL,
  `4)Tertiary Institution / School` text NOT NULL,
  `4)Location` text NOT NULL,
  `4)Qualification` text NOT NULL,
  `4)Year Completed` date NOT NULL,
  `5)Tertiary Institution / School` text NOT NULL,
  `5)Location` text NOT NULL,
  `5)Qualification` text NOT NULL,
  `5)Year Completed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employment history`
--

DROP TABLE IF EXISTS `employment history`;
CREATE TABLE `employment history` (
  `Title` text NOT NULL,
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `1)Employer` text NOT NULL,
  `1)Position Held` text NOT NULL,
  `1)Appointment Date` date NOT NULL,
  `1)Termination Date` date NOT NULL,
  `1)Duties & Responsibilities` text NOT NULL,
  `2)Employer` text NOT NULL,
  `2)Position Held` text NOT NULL,
  `2)Appointment Date` date NOT NULL,
  `2)Termination Date` date NOT NULL,
  `2)Duties & Responsibilities` text NOT NULL,
  `3)Employer` text NOT NULL,
  `3)Position Held` text NOT NULL,
  `3)Appointment Date` date NOT NULL,
  `3)Termination Date` date NOT NULL,
  `3)Duties & Responsibilities` text NOT NULL,
  `4)Employer` text NOT NULL,
  `4)Position Held` text NOT NULL,
  `4)Appointment Date` date NOT NULL,
  `4)Termination Date` date NOT NULL,
  `4)Duties & Responsibilities` text NOT NULL,
  `5)Employer` text NOT NULL,
  `5)Position Held` text NOT NULL,
  `5)Appointment Date` date NOT NULL,
  `5)Termination Date` date NOT NULL,
  `5)Duties & Responsibilities` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal details`
--

DROP TABLE IF EXISTS `personal details`;
CREATE TABLE `personal details` (
  `Title` text NOT NULL,
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `Cellphone` text NOT NULL,
  `Telephone` text NOT NULL,
  `Email` text NOT NULL,
  `Citizenship` text NOT NULL,
  `Criminal Record` text NOT NULL,
  `Drug Test` text NOT NULL,
  `Residential Address - Number/Unit` text NOT NULL,
  `Residential Address - Street` text NOT NULL,
  `Residential Address - City` text NOT NULL,
  `Residential Address - Suburb` text NOT NULL,
  `Residential Address - Province` text NOT NULL,
  `Residential Address - Postal Code` int(11) NOT NULL,
  `Postal Address - Number/Unitber/` text NOT NULL,
  `Postal Address - Street` text NOT NULL,
  `Postal Address - City` text NOT NULL,
  `Postal Address - Suburb` text NOT NULL,
  `Postal Address - Province` text NOT NULL,
  `Postal Address - Postal Code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `professional body affiliation/membership`
--

DROP TABLE IF EXISTS `professional body affiliation/membership`;
CREATE TABLE `professional body affiliation/membership` (
  `Title` text NOT NULL,
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `1)Organisation` text NOT NULL,
  `1)Affiliation Date` date NOT NULL,
  `2)Organisation` text NOT NULL,
  `2)Affiliation Date` date NOT NULL,
  `3)Organisation` text NOT NULL,
  `3)Affiliation Date` date NOT NULL,
  `4)Organisation` text NOT NULL,
  `4)Affiliation Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vacancy applications`
--

DROP TABLE IF EXISTS `vacancy applications`;
CREATE TABLE `vacancy applications` (
  `Desired Position` text NOT NULL,
  `Title` text NOT NULL,
  `Name` text NOT NULL,
  `Surname` text NOT NULL,
  `Date Available To Commence` date NOT NULL,
  `Notice Period` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vacancy applications`
--
ALTER TABLE `vacancy applications`
  ADD KEY `Desired Position` (`Desired Position`(768));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
