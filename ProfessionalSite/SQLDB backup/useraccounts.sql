-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 24, 2020 at 05:24 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prologin`
--

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

DROP TABLE IF EXISTS `useraccounts`;
CREATE TABLE IF NOT EXISTS `useraccounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'none',
  `level` tinyint(4) NOT NULL DEFAULT '3' COMMENT '1 - Admin, 2 - Privileged, 3 - Standard, 4<= - Other  ',
  `registrationdate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `subject`, `level`, `registrationdate`) VALUES
(1, 'admin', 'Ray', 'Buckingham', '$2y$10$9hQSfyiWpyl4O9XhjX3m5uvZ/CMo8UjBFiROb1iwnEObDVI1taJFy', 'test@test.com', 'All', 1, '0000-00-00 00:00:00'),
(2, 'Ray', 'Ray', 'Man', '$2y$10$UZPIWoXKxFyWhco0PlAtnO60OG3K6C9xN26TI06z5tX9nZb5b3y1u', 'ReignBuckingham@gmail.com', 'All', 1, '2020-02-16 15:21:26'),
(3, 'peanuts', 'Peanuts', 'Butter-Cat', '$2y$10$teX6sgxFWE9VLzVFA0YSEuQkZ5Qhqyu0al/ttUbmuCvBdbVq6ab12', 'peanuts@gmail.com', 'none', 2, '2020-02-16 16:44:59'),
(4, 'ShadowCat', 'Shadow', 'Buckingham', '$2y$10$LAJMEG8cXni91Yz6OamKvOZMfkFPLf92WNBQ/FCxW9YswO1qHdBeW', 'ShadowCat@gmail.com', 'none', 3, '2020-02-18 14:17:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
