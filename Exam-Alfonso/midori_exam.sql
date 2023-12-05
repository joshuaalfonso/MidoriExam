-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 10:55 PM
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
-- Database: `midori_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `locker_a`
--

CREATE TABLE `locker_a` (
  `id` int(20) NOT NULL,
  `locker_num` varchar(20) NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  `employee_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locker_a`
--

INSERT INTO `locker_a` (`id`, `locker_num`, `employee_id`, `employee_name`) VALUES
(1, '1', '', 'Joshua'),
(2, '2', '856', 'Amelia'),
(3, '3', '1231', 'Lily'),
(4, '4', '1212', 'Benjamin'),
(5, '5', '', 'Harper'),
(6, '6', '', ''),
(7, '7', '', ''),
(8, '8', '214', 'Charlotte'),
(9, '9', '', ''),
(10, '10', '', ''),
(11, '11', '1212312', 'Oliver'),
(12, '12', '', 'Mathew'),
(13, '13', '', ''),
(14, '14', '112312123', 'Mason'),
(15, '15', '', ''),
(16, '16', '', ''),
(17, '17', '12121', 'Emma'),
(18, '18', '', ''),
(19, '19', '', ''),
(20, '20', '', ''),
(21, '21', '1212', 'Evelyn'),
(22, '22', '12314', 'Isabella'),
(23, '23', '', 'zxc'),
(24, '24', '', ''),
(25, '25', '112312', 'Lucas'),
(26, '26', '', ''),
(27, '27', '1123123', 'Harper'),
(28, '28', '', ''),
(29, '29', '', ''),
(30, '30', '121', 'Elijah'),
(31, '31', '1231', 'Abigail'),
(32, '32', '123123', 'Aiden'),
(33, '33', '', ''),
(34, '34', '', ''),
(35, '35', '6456', 'Amelia'),
(36, '36', '', ''),
(37, '37', '123123123', 'Sofia'),
(38, '38', '123123', 'Elizabeth'),
(39, '39', '', ''),
(40, '40', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `locker_b`
--

CREATE TABLE `locker_b` (
  `id` int(30) NOT NULL,
  `locker_num` varchar(30) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `employee_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locker_b`
--

INSERT INTO `locker_b` (`id`, `locker_num`, `employee_id`, `employee_name`) VALUES
(1, '1', '123', 'Olivia'),
(2, '2', '5123', 'Ethan'),
(3, '3', '756', 'Ava'),
(4, '4', '123', 'Liam'),
(5, '5', '12', 'Noah'),
(6, '6', '', ''),
(7, '7', '', ''),
(8, '8', '', ''),
(9, '9', '', ''),
(10, '10', '', ''),
(11, '11', '1231', 'Grace'),
(12, '12', '', 'zxc'),
(13, '13', '', ''),
(14, '14', '512', 'Sophia'),
(15, '15', '', ''),
(16, '16', '1412', 'Jackson'),
(17, '17', '1234', 'Mia'),
(18, '18', '', 'zxc'),
(19, '19', '', ''),
(20, '20', '', ''),
(21, '21', '123123', 'Olivia'),
(22, '22', '', ''),
(23, '23', '12312', 'Lily'),
(24, '24', '', 'kate'),
(25, '25', '', ''),
(26, '26', '', ''),
(27, '27', 'test', 'Benjamin'),
(28, '28', '', ''),
(29, '29', '', ''),
(30, '30', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `locker_c`
--

CREATE TABLE `locker_c` (
  `id` int(30) NOT NULL,
  `locker_num` varchar(30) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `employee_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locker_c`
--

INSERT INTO `locker_c` (`id`, `locker_num`, `employee_id`, `employee_name`) VALUES
(1, '1', '', 'test'),
(2, '2', '', 'test'),
(3, '3', '', ''),
(4, '4', '', 'test'),
(5, '5', '', ''),
(6, '6', '', 'test'),
(7, '7', '', ''),
(8, '8', '', ''),
(9, '9', '', ''),
(10, '10', '', ''),
(11, '11', '', 'test'),
(12, '12', '', ''),
(13, '13', '', 'test'),
(14, '14', '', 'test'),
(15, '15', '', ''),
(16, '16', '', 'test'),
(17, '17', '', ''),
(18, '18', '', 'test'),
(19, '19', '', ''),
(20, '20', '', ''),
(21, '21', '', 'test'),
(22, '22', '', ''),
(23, '23', '', 'test'),
(24, '24', 'test', 'test'),
(25, '25', '', 'test'),
(26, '26', '', ''),
(27, '27', '', 'test'),
(28, '28', '', ''),
(29, '29', '', 'test'),
(30, '30', '', ''),
(31, '31', '', 'test'),
(32, '32', '', 'test'),
(33, '33', '', ''),
(34, '34', '', 'test'),
(35, '35', '', ''),
(36, '36', 'test', 'test'),
(37, '37', '', ''),
(38, '38', '', ''),
(39, '39', '', ''),
(40, '40', '', ''),
(41, '41', '', ''),
(42, '42', '', ''),
(43, '43', '', ''),
(44, '44', '', ''),
(45, '45', '', ''),
(46, '46', '', ''),
(47, '47', '', ''),
(48, '48', '', ''),
(49, '49', '', ''),
(50, '50', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `date` date DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `image`, `username`, `password`, `firstname`, `lastname`, `date`, `status`, `email`) VALUES
(55, '', 'asdasd', 'da39a3ee5e6b4b0d3255', 'john', 'asd', '0000-00-00', 'Active', 'asdasd'),
(56, '', 'qwe', '056eafe7cf52220de2df', 'kim', 'qwe', '2023-10-06', 'Inactive', 'qwe'),
(57, '', 'ns', 'd1854cae891ec7b29161', 'elmer', 'nw', '2023-10-11', 'Active', 'nasd'),
(59, 'C:fakepath\nb4.png', 's', 's', 's', 's', '2023-10-06', 'Inactive', 's'),
(60, '', 'sasd', 'c1f97c5e194a6f0ecd07', 'sasda', 'sasda', '2023-10-06', 'Pending', 'ss'),
(61, 'C:fakepath10.png', 'sasdasd', 'c1f97c5e194a6f0ecd07', 'sasdasd', 's', '2023-10-06', 'Pending', 's'),
(62, '', 's', 's', 's', 's', '2023-10-06', 'Active', 's'),
(63, 'C:fakepath\nb4.png', 's', 's', 's', 's', '2023-10-06', 'Inactive', 's');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locker_a`
--
ALTER TABLE `locker_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locker_b`
--
ALTER TABLE `locker_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locker_c`
--
ALTER TABLE `locker_c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locker_a`
--
ALTER TABLE `locker_a`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `locker_b`
--
ALTER TABLE `locker_b`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `locker_c`
--
ALTER TABLE `locker_c`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
