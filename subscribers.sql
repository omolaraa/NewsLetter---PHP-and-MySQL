-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 10:20 PM
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
-- Database: `subscribers`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `NL_id` int(11) NOT NULL,
  `NL_bannerImg` varchar(255) NOT NULL,
  `NL_introTitle` text DEFAULT NULL,
  `NL_introDescription` text DEFAULT NULL,
  `NL_endTitle` text DEFAULT NULL,
  `NL_endDescription` text DEFAULT NULL,
  `NL_subject` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`NL_id`, `NL_bannerImg`, `NL_introTitle`, `NL_introDescription`, `NL_endTitle`, `NL_endDescription`, `NL_subject`, `date`) VALUES
(1, 'image-9.png', 'Enhance our skills with Our Professional Development Programs', 'Lorem ipsum dolor sit amet, con sectetur adip iscing elit, setting do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', 'Inspiring Message', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua suspendisse.\r\n\r\n \r\n\r\nQuis ipsum suspendisse ultrices gravida. Risus commodo viverra.', 'Enroll', '2023-05-16 16:18:28'),
(2, 'Screenshot 2021-11-21 070950.png', 'Improve your knowledge with information', 'Improve your knowledge with information&#13;&#10;&#13;&#10;Lorem ipsum dolor sit amet, con sectetur adip iscing elit, setting do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.&#13;&#10;Lorem ipsum dolor sit amet, con sectetur adip iscing elit, setting do eiusmod tempor incididunt ut.', 'New Information', 'Improve your knowledge with information&#13;&#10;&#13;&#10;Lorem ipsum dolor sit amet, con sectetur adip iscing elit, setting do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.&#13;&#10;Lorem ipsum dolor sit amet, con sectetur adip iscing elit, setting do eiusmod tempor incididunt ut.', 'Example ', '2023-05-17 16:23:25'),
(3, 'Screenshot 2021-11-21 070950.png', 'Improve your knowledge with information', 'Lorem ipsum dolor sit amet, con sectetur adip iscing elit, setting do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.&#13;&#10;Lorem ipsum dolor sit amet, con sectetur adip iscing elit, setting do eiusmod tempor incididunt ut.', 'New Information', 'Lorem ipsum dolor sit amet, con sectetur adip iscing elit, setting do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.&#13;&#10;Lorem ipsum dolor sit amet, con sectetur adip iscing elit, setting do eiusmod tempor incididunt ut.', 'Example ', '2023-05-17 16:24:02'),
(4, 'Screenshot 2021-11-21 070950.png', 'Improve your knowledge with information. Lots', 'Lorem ipsum dolor sit amet, con sectetur adip iscing elit, setting do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.&#13;&#10;Lorem ipsum dolor sit amet, con sectetur adip iscing elit, s&#13;&#10;Lorem ipsum dolor sit amet, con sectetur adip iscing elit, setting do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.&#13;&#10;Lorem ipsum dolor sit amet, con sectetur adip iscing elit, s', 'New Information from knowledge', 'Lorem ipsum dolor sit amet, con sectetur adip iscing elit, setting do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.&#13;&#10;Lorem ipsum dolor sit amet, con sectetur adip iscing elit, s', 'Example3 ', '2023-05-17 16:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscribers_id` int(11) NOT NULL,
  `subscribers_name` varchar(255) DEFAULT NULL,
  `subscribers_email` varchar(255) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscribers_id`, `subscribers_name`, `subscribers_email`, `date`) VALUES
(1, 'Tobi', 'losunleye@gmail.com', '2023-05-15'),
(8, 'John', 'johndoes@gmail.com', '2023-05-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`NL_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscribers_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `NL_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscribers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
