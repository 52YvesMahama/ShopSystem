-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 04:52 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `pass` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `postcode` int(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`, `address`, `postcode`, `email`) VALUES
(1, 'yvonne', '1234', 'Congo_Kinshasa', 0, 'yvonne@gmail.com'),
(2, 'yvette', '1234', 'Congo_Kinshasa', 0, 'yvette@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Name` varchar(12) NOT NULL,
  `Email` varchar(17) NOT NULL,
  `Subject` varchar(16) NOT NULL,
  `Description` text NOT NULL,
  `ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `Usename` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `NAME` text NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `USER ID` int(11) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `BIRTHDAY` date NOT NULL,
  `GENDER` varchar(11) NOT NULL,
  `yes` varchar(11) NOT NULL,
  `no thanks!` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Password`) VALUES
(3, 'mahama', 'mahama@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Benoit', 'user@gmail', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Bonheur', 'user@gmail', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Yvan', 'user@gmail', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'Yvette', 'mahama@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(10, 'Josaphat', 'mahama@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'Josee', 'yvesmahama@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(13, 'yves', 'yvesmahama@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`USER ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
