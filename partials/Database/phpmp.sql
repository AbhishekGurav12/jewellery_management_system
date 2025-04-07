-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 03:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthstone`
--

CREATE TABLE `birthstone` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `city` varchar(50) NOT NULL,
  `zodiac` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `birthstone`
--

INSERT INTO `birthstone` (`id`, `firstname`, `lastname`, `dob`, `email`, `gender`, `city`, `zodiac`) VALUES
(1, '', '', '0000-00-00', '', '', '', 'ras3'),
(2, 'Tejas', 'karekar', '2003-11-22', 'tkar@gmail.com', '', 'ratnagiri', 'ras6'),
(3, 'Tejas', 'karekar', '2003-11-22', 'tkar@gmail.com', 'male', 'ratnagiri', 'ras6'),
(4, 'tanvi', 'karekar', '1999-11-22', 'tkar@gmail.com', 'female', 'guhagar', 'Libra');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `User_Name` varchar(100) NOT NULL,
  `User_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`User_Name`, `User_Password`) VALUES
('user', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birthstone`
--
ALTER TABLE `birthstone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthstone`
--
ALTER TABLE `birthstone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
