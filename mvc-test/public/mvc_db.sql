-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 03:48 AM
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
-- Database: `mvc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `image` varchar(60) DEFAULT NULL,
  `role` varchar(60) DEFAULT NULL,
  `token` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `image`, `role`, `token`) VALUES
(12, 'Sarina', 'Palero', 'sarina.palero@gmail.com', '$2y$10$VveZfvGxkc5i60aGvWkmueR2x.d4aHBMNg2ydbWN3j2518E0VfCKW', NULL, 'User', NULL),
(51, 'Abel', 'Palero', 'abel.palero@gmail.com', '$2y$10$5f3fuqTbJQjaozTV.wgaVewj9zVgl8CbiyKAdlJXPQfSx.RdtgPi.', NULL, 'Admin', NULL),
(79, 'John', 'Doe', 'jd@gmail.com', '$2y$10$MxqmQG6OnlruYFJPVNGh/ejiTaEJUNF/ICCaegOcAp1hXe8aww/A.', 'assets/images/2.png', 'User', 'l6dVkeN6zAlz2LMdcOzAcdHogZNLuMFvbfKxqoE6fhq40H0Dj5orHBx9xfiu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
