-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 06:47 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `job` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `repeat_password` varchar(40) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `phone`, `job`, `password`, `repeat_password`, `id`) VALUES
('Sasini Wanigasinghe', 'bgsssandamali@gmail.com', '+94715871007', 'Senior Software Engineer', '111111111', '111111111', 4),
('Binul Ranaweera', 'binul5@gmail.com', '+94715871908', 'Student', '22222221', '22222221', 5),
('Harshika Gayodya', 'harshika@gmail.com', '+94767788108', 'Bank manager', '333333333', '333333333', 6),
('Harshana Modudeepa', 'harshana@gmail.com', '+94717766118', 'Sub inspector', '44444444', '44444444', 7),
('Chameesha Bometh', 'chameesha@gmail.com', '+94718899116', 'Electrical engineer', '3333', '3333', 10),
('Hasindu Vidarshana', 'hasindu@gmail.com', '+94712288110', 'Police man', '99999999', '99999999', 11),
('Jayatissa B.G.', 'jayastissa@gmail.com', '+94715871991', 'Retired', '333333', '333333', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
