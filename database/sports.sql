-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2025 at 01:14 PM
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
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'soum@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `club_member`
--

CREATE TABLE `club_member` (
  `id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sic` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club_member`
--

INSERT INTO `club_member` (`id`, `club_id`, `club_name`, `name`, `email`, `password`, `sic`, `dept`, `year`) VALUES
(7, 1, 'Football', 'Jenny', 'jenny@gmail.com', '2025-04-03', '23mmci88', 'ECE', '1st year'),
(8, 4, 'Vollyball', 'Kenny', 'kenny@gmail.com', '2025-04-03', '23mmvi78', 'EEE', '4th year'),
(9, 2, 'Basketball', 'Jay', 'jay@gmail.com', '2025-04-03', '23mmci67', 'MCA', '1st year'),
(10, 3, 'Cricket', 'Kebin', 'kebin@gmail.com', '2025-04-03', '23bcci23', 'CSE', '2nd year'),
(11, 1, 'Football', 'mouse', 'mouse@gmail.com', '2025-04-03', '34mmci89', 'EEE', '1st year'),
(12, 2, 'Basketball', 'Asis', 'asis@gmail.com', '2025-04-03', '23mnb67', 'MCA', '1st year'),
(14, 3, 'Cricket', 'mousey', 'panisubhamita@gmail.com', '2025-04-22', '23bvc56', 'MSC', '3rd year'),
(15, 4, 'Vollyball', 'jet', 'jet@gmail.com', '2025-04-04', '34mmbi78', 'EEE', '3rd year');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `name`, `role`, `club`, `password`, `email`) VALUES
(4, 'sona', 'Coach', 'Kabadi', 'sona@123', 'sona@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `detail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `date`, `image`, `topic`, `detail`) VALUES
(1, '2025-03-03', '1740994247-bgm10copy.jpg', 'xyz', 'n,xmns,m'),
(2, '2025-03-20', '1742410655-bgm1.jpg', 'vvmb', 'bmnb'),
(3, '2025-03-20', '1742410897-tiger1.jpg', 'gfhg', 'nmmb');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `is_read`, `created_at`) VALUES
(1, 'New student registered in Kabadi', 1, '2025-04-02 18:32:35'),
(2, 'New student registered in Vollyball', 1, '2025-04-02 18:33:29'),
(3, 'New student registered in Football', 1, '2025-04-02 18:57:01'),
(4, 'New student registered in Vollyball', 1, '2025-04-02 18:57:38'),
(5, 'New student registered in Basketball', 1, '2025-04-02 19:09:29'),
(6, 'New student registered in Cricket', 1, '2025-04-02 19:10:23'),
(7, 'New student registered in Football', 1, '2025-04-02 19:11:24'),
(8, 'New student registered in Basketball', 1, '2025-04-03 09:06:46'),
(9, 'New student registered in Tennis', 1, '2025-04-04 10:38:19'),
(10, 'New student registered in Basketball', 1, '2025-04-04 10:51:01'),
(11, 'New student registered in Cricket', 1, '2025-04-04 10:56:41'),
(12, 'New student registered in Vollyball', 1, '2025-04-04 11:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `registered_student`
--

CREATE TABLE `registered_student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sic` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sports_club`
--

CREATE TABLE `sports_club` (
  `id` int(11) NOT NULL,
  `clubId` int(11) NOT NULL,
  `clubName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports_club`
--

INSERT INTO `sports_club` (`id`, `clubId`, `clubName`) VALUES
(1, 1, 'Football'),
(2, 2, 'Basketball'),
(3, 3, 'Cricket'),
(4, 4, 'Vollyball'),
(5, 5, 'Kabadi'),
(6, 6, 'Badminton'),
(7, 7, 'Tenis'),
(9, 8, 'Hockey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club_member`
--
ALTER TABLE `club_member`
  ADD PRIMARY KEY (`id`,`club_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_student`
--
ALTER TABLE `registered_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `sic` (`sic`);

--
-- Indexes for table `sports_club`
--
ALTER TABLE `sports_club`
  ADD PRIMARY KEY (`id`,`clubId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `club_member`
--
ALTER TABLE `club_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registered_student`
--
ALTER TABLE `registered_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sports_club`
--
ALTER TABLE `sports_club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
