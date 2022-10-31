-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 03:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsa2`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_users`
--

CREATE TABLE `info_users` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(256) NOT NULL,
  `user_mname` varchar(256) NOT NULL,
  `user_lname` varchar(256) NOT NULL,
  `user_uname` varchar(256) NOT NULL,
  `user_bday` date NOT NULL,
  `user_contact` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_pass` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_users`
--

INSERT INTO `info_users` (`user_id`, `user_fname`, `user_mname`, `user_lname`, `user_uname`, `user_bday`, `user_contact`, `user_email`, `user_pass`) VALUES
(8, 'Justine', 'Mirano', 'Guillermo', 'justineguillermo', '2022-10-31', '09157769045', 'justineguillermo00@gmail.com', '12345678'),
(9, 'Justine', 'Mirano', 'Guillermo', 'justineguillermo', '2022-10-31', '09157769045', 'justineguillermo00@gmail.com', '12345678'),
(10, 'Justine', 'Mirano', 'Guillermo', 'justineguillermo1', '1999-12-09', '09157769045', 'justineguillermo00@gmail.com', '09157769045'),
(11, 'Justine', 'Mirano', 'Guillermo', 'romejgdddddd', '1999-12-09', '09157769045', 'justineguillermo00@gmail.com', '09157769045'),
(12, 'Justine', 'Mirano', 'Guillermo', 'romejgddddddd', '1999-12-09', '09157769045', 'justineguillermo00@gmail.com', '09157769045');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_users`
--
ALTER TABLE `info_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_users`
--
ALTER TABLE `info_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
