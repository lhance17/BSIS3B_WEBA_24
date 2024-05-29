-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 05:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Author` varchar(255) NOT NULL,
  `Year_Publish` varchar(20) NOT NULL,
  `Picture` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `Title`, `Author`, `Year_Publish`, `Picture`) VALUES
(1, 'Divine Comedy', 'si ano', '18something', NULL),
(2, 'test', 'test', 'test', 'Grilled Chicken Salad.jpg'),
(3, 'ghost', 'ghost', '1702', 'ghosts2.jpg'),
(4, 'test2', 'test2', '0000', '5eaad82850a4e884736421dda5fa429b.jpg');

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
(80, 'LHANCE NICOLE', 'DE LEON', 'email@gmail.com', '$2y$10$fyJgSdwcDfu41QQE4hOnu.cwKAfRif9Xw5rclca/W9lApBkSjGAYK', 'assets/images/bsis3B FRAME (1).png', 'Admin', 'FRsCiiJcMmauSOHYC5x6pWvud3nLbH8PumIhbc9rgoFgZtiVbwfmfG5yVwUD'),
(81, 'new2', 'new2', 'email1@gmail.com', '$2y$10$DJ6UwoDmZiGqDpwZS4neoOj.IDGvfM97dPfPXlCXmhy3ody4upQqq', NULL, 'User', 'HwXzFGuZ5eMctumMKcij0n7dq3WQestMt0lAAEJ5UB0gXAX38JORkFqD2cdF'),
(82, 'LHANCE NICOLE', 'DE LEON', 'querubinlhance301@gmail.com', '$2y$10$liNza8v5iYPhXg3SycaLZeW6DY7HJZA1RLP/cIhuDDGy.kiZV40Py', NULL, 'Admin', '8dXDeJQSU1AZczHcQOiJ4Da7nCMZpgG7GXDAdST6wi2PT7zvyZNvEalIybC3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
