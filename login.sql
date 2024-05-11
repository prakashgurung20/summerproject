-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 06:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `user_name`, `password`) VALUES
(0, '', '', 'Prakash@123'),
(0, '', '', 'Prakash@123'),
(0, '', '', 'Prakash@123'),
(0, '', '', 'Prakash@123'),
(2147483647, '', 'Prakash', 'Prakash@123'),
(37444, '', 'Prakash', 'Prakash@123'),
(57451141, '', 'Prakash', 'Prakash@123'),
(2147483647, 'test@gmail.com', 'test', 'Test@1234'),
(2147483647, 'bikash@gmail.com', 'bikash', 'Bikash@123'),
(2147483647, 'prakash@gmail.com', 'Prakash', 'pRAKASH@123'),
(2147483647, 'prakash@gmail.com', 'Prakash', 'Prakash@123'),
(2147483647, 'prakash@gmail.com', 'Prakash', 'Prakash@123'),
(2147483647, 'ram@mail.com', 'Ram', 'Ram@1234'),
(76621007, 'prakash@gmail.com', 'Prakash', 'Prakash@123'),
(33734, 'johndoe@gmail.com', 'John', 'John@1234'),
(2147483647, 'manit@gmail.com', 'Manit', 'Manit@123'),
(2147483647, 'prakash@gmail.com', 'Prakash', 'Prakash@123'),
(2147483647, 'sita@gmail.com', 'sita', 'Sita@123'),
(634451225, 'niraj123@gmail.com', 'niraj', 'Niraj@123'),
(2147483647, 'hari1@gmail.com', 'Hari', 'Hari@123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
