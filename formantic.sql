-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 04:23 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formantic`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `e_id` tinyint(4) NOT NULL,
  `e_name` varchar(50) NOT NULL,
  `e_detail` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `e_name`, `e_detail`) VALUES
(1, 'ลอยกระทง', 'ลอยกระทง วันที่ ..... จัดขึ้นเพื่อ ?'),
(2, 'รับน้องสยองขวัญ', 'โอ้ย กลัว !'),
(3, 'เข้าร่วมต่อต้าน', 'สวนเพชรไง ไปวิ่งกัน 16.30-21.00');

-- --------------------------------------------------------

--
-- Table structure for table `picevent`
--

CREATE TABLE `picevent` (
  `p_id` tinyint(4) NOT NULL,
  `p_pic` varchar(100) NOT NULL,
  `e_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `picevent`
--

INSERT INTO `picevent` (`p_id`, `p_pic`, `e_id`) VALUES
(1, 'laptop_macbook_iphone_apple_journal_glasses_113949_1920x1080.jpg', 1),
(2, 'laptop_macbook_smartphone_111765_1920x1080.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `picevent`
--
ALTER TABLE `picevent`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `e_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `picevent`
--
ALTER TABLE `picevent`
  MODIFY `p_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
