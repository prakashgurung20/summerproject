-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 06:00 PM
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
-- Database: `feedback_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `u_name` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_phone` int(11) NOT NULL,
  `u_message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`u_name`, `u_email`, `u_phone`, `u_message`) VALUES
('John Doe', 'johndoe@gmail.com', 2147483647, 'how big the gym?'),
('John Doe', 'johndoe@gmail.com', 2147483647, 'how big the gym?'),
('Abhishek', 'abhishek@gmail.com', 2147483647, 'Testing testing'),
('Narayan Sharma', 'narayan@gmail.com', 2147483647, 'What are the prices plans for the gym memberships?'),
('Florence Krief', 'florence@gmail.com', 2147483647, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis reiciendis iusto dolor doloremque porro minus itaque corrupti harum corporis voluptatum dolore nostrum possimus, facere iure. Cumque commodi odit eligendi, consequatur minus voluptatibus, incidunt deleniti sed quisquam eius perferendis natus totam praesentium doloremque modi reprehenderit alias dolor? Vel voluptates magnam architecto nisi voluptate vero earum aperiam corporis quam at quasi non, voluptatem consequuntur fugiat maxime asperiores temporibus sint commodi est! Odio modi beatae velit ducimus nisi mollitia, saepe ab excepturi soluta reiciendis rem sunt assumenda quisquam, veritatis nihil provident? Voluptate, harum minus eligendi veritatis assumenda excepturi error mollitia vel blanditiis voluptates.'),
('niraj karki', 'niraj123@gmail.com', 2147483647, 'i want to join your gym how much is per month'),
('Hari ', 'hari@gmail.com', 2147483647, 'how big the gym?'),
('laxman bhandari', 'laxman@gmail.com', 2147483647, 'how big the gym?');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
