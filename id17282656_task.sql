-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2021 at 02:16 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17282656_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `balance` decimal(6,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `account_no`, `email`, `mobile`, `balance`) VALUES
(1, 'Yashwin Katyal', 'XXXXXXXXXXXXX5393', 'yashwinkatyal@gmail.com', '7976555983', 81219),
(2, 'Saksham Goyal', 'XXXXXXXXXXXXX3973', 'sakshamgoyal@gmail.com', '7727048315', 56442),
(3, 'Rupali Sinha', 'XXXXXXXXXXXXX9854', 'rupalisinha23@gmail.com', '9385828648', 100800),
(4, 'Rahul Arora', 'XXXXXXXXXXXXX7982', 'rahularora@gmail.com', ' 9649799939', 20000),
(5, 'Anuradha Rani', 'XXXXXXXXXXXXX2358', 'anuqueenradha@gmail.com', '7424836993', 199000),
(6, 'Sidhant Shrimal', 'XXXXXXXXXXXXX8721', 'sidshri@gmail.com', '7014886657', 74999),
(7, 'Samarth Gupta', 'XXXXXXXXXXXXX3953', 'sammygupta99@gmail.com', '9158791687', 49042),
(8, 'Kavya Pandey', 'XXXXXXXXXXXXX2482', 'kavyapandey@gmail.com', '7014544493', 149000),
(9, 'Ayush Gupta', 'XXXXXXXXXXXXX6236', 'ayushgupta69@gmail.com', '8093080930', 15000),
(10, 'Rajiv Ohlan', 'XXXXXXXXXXXXX7538', 'rajivohlan@gmail.com', '7027250227', 79500);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `amount` decimal(65,0) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
