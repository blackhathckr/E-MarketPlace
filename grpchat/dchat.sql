-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 12:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `message`, `created_at`) VALUES
(1, 22, 'this is a test message', '2021-07-09 03:24:23'),
(2, 21, 'this is another test message', '2021-07-09 03:24:23'),
(3, 22, 'this is new message', '2021-07-09 04:01:59'),
(4, 22, 'this also new message', '2021-07-09 04:01:59'),
(5, 21, 'ok now i am sending new message', '2021-07-09 04:01:59'),
(6, 21, 'nice so what now', '2021-07-09 04:01:59'),
(7, 22, 'we still sending new message', '2021-07-09 04:01:59'),
(8, 22, 'this is ajax test', '2021-07-09 04:17:32'),
(9, 21, 'THIS IS ANOTHER TEST MESSAGE', '2021-07-09 04:25:28'),
(10, 22, 'this is scroll test', '2021-07-09 04:33:19'),
(11, 21, 'new scroll', '2021-07-09 04:35:25'),
(12, 22, 'adssdasd', '2021-07-09 09:42:35'),
(13, 22, 'ok then nice to send the message', '2021-07-09 09:42:45'),
(14, 22, 'again testing', '2021-07-09 09:42:57'),
(15, 22, 'this is a test', '2021-07-09 09:43:46'),
(16, 22, 'and this is again a atest', '2021-07-09 09:44:11'),
(17, 22, 'ok then', '2021-07-09 09:52:47'),
(18, 23, 'hii everyone', '2021-07-09 10:42:08'),
(19, 23, 'hello every one msg', '2021-07-09 10:42:22'),
(20, 24, 'hello everyone and i know that is there anything you can do', '2021-07-09 10:43:48'),
(21, 23, 'ok riya', '2021-07-09 10:44:32'),
(22, 23, 'my self devninja and i ama youtuber', '2021-07-09 10:44:48'),
(23, 24, 'ok devninja nice to talk to you', '2021-07-09 10:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `typing_status`
--

CREATE TABLE `typing_status` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `typing_status`
--

INSERT INTO `typing_status` (`id`, `user_id`, `status`) VALUES
(1, 22, 0),
(2, 19, 0),
(3, 23, 0),
(4, 24, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(225) NOT NULL,
  `email_id` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email_id`, `password`) VALUES
(19, 'Monu Giri', 'whomonugiri@gmail.com', '123456'),
(20, 'Monu Giri', 'workwithmohan@gmail.com', '123456'),
(21, 'Monu Giri', 'whomonugiri1427@gmail.com', '123456'),
(22, 'Admin', 'admin@gmail.com', '123456'),
(23, 'Dev Ninja', 'devninja@gmail.com', '123456'),
(24, 'Riya Singh', 'riya@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typing_status`
--
ALTER TABLE `typing_status`
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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `typing_status`
--
ALTER TABLE `typing_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
