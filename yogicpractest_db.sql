-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 09:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yogicpractest_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `keymap_tb`
--

CREATE TABLE `keymap_tb` (
  `keynum` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keymap_tb`
--

INSERT INTO `keymap_tb` (`keynum`, `userid`, `updated_at`) VALUES
(8, 1, '2023-08-17 07:06:49'),
(9, 1, '2023-08-17 07:05:00'),
(3, 1, '2023-08-17 07:02:52'),
(4, 1, '2023-08-17 07:02:39'),
(5, 2, '2023-08-17 07:08:40'),
(6, 2, '2023-08-17 07:08:42'),
(10, 1, '2023-08-17 07:05:48'),
(7, 2, '2023-08-17 07:08:41');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
