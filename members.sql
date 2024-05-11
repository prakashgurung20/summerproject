-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 07:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `members`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `u_name` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_phone` varchar(50) NOT NULL,
  `u_address` varchar(50) NOT NULL,
  `u_join_date` date DEFAULT NULL,
  `u_expire_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`u_name`, `u_email`, `u_phone`, `u_address`, `u_join_date`, `u_expire_date`) VALUES
('Nabin Giri', 'nabin@gmail.com', '0676903050', '109 BOULEVARD JEAN JAURÈS', NULL, NULL),
('Abhishek Dahal', 'david.aubin@atlantistar.fr', '012345678', 'Basundhara', NULL, NULL),
('Rolak Thapa', 'rthapa@gmail.com', '34432525435', 'Basundhara', '2024-05-11', '2024-08-11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
