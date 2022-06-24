-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3309
-- Generation Time: Jun 24, 2022 at 05:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ll`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
CREATE DATABASE ll ;
USE ll;


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL,
  `ext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `room`, `ext`) VALUES
(1, 'maged', '2315655', 'maged@mailinator.com', 'cloud', 'mmkkmmkkm'),
(2, 'Sawyer West', '5555', 'wesy@mailinator.com', 'Application1', '5850'),
(3, 'amr', '123456', 'bevazuxy@mailinator.com', 'Application1', 'Dolore occaecat null'),
(4, 'besiced', '558599', 'kyryvuv@mailinator.com', 'Application1', 'Officiis sapiente as'),
(5, 'pyfysidahe', '14125256', 'cofapu@mailinator.com', 'Application1', 'Earum qui molestiae '),
(6, 'rolegysipu', '0', 'tyqimiqaju@mailinator.com', 'Application1', 'Temporibus esse ips'),
(7, 'zycop', 'Pa$$w0rd!', 'cemijihy@mailinator.com', 'cloud', 'Quas ut aut rerum pa');

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
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
