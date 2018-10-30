-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 07:06 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

-- users Password : all share the same passwords that is "12345"

INSERT INTO `users` (`Id`, `Username`, `Email`, `Password`) VALUES
(1, 'Yves ', 'mahamaYves@gmail', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Bemoit', 'mahamaYves@gmail', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'mahama', 'mahama@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'yves', 'user@gmail', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Benoit', 'user@gmail', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Bonheur', 'user@gmail', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Yvan', 'user@gmail', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'Yvonne', 'mahama@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'Yvette', 'mahama@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(10, 'Josaphat', 'mahama@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
