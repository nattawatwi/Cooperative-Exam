-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 06:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `analysis`
--

CREATE TABLE `analysis` (
  `id` int(255) NOT NULL,
  `area` varchar(255) NOT NULL COMMENT 'พื้นที่เป้าหมาย',
  `strength` varchar(255) NOT NULL COMMENT 'จุดแข็ง',
  `weakness` varchar(255) NOT NULL COMMENT 'จุดอ่อน',
  `opportunity` varchar(255) NOT NULL COMMENT 'โอกาศ',
  `threats` varchar(255) NOT NULL COMMENT 'อุปสรรค',
  `landmarks` varchar(255) NOT NULL COMMENT 'สถานที่ท่องเที่ยวหรือสถานที่สําคัญในพื้นที่',
  `plant` varchar(255) NOT NULL COMMENT 'พืชเศรษฐกิจในพื้นที่',
  `thing` varchar(255) NOT NULL COMMENT 'สิ่งที่มีมากในพื้นที่',
  `community` varchar(255) NOT NULL COMMENT 'กลุ่มชุมชน/วิสาหกิจชุมชน',
  `name` varchar(255) NOT NULL COMMENT 'ชื่อผู้รายงาน',
  `date` varchar(255) NOT NULL COMMENT 'วันที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `analysis`
--

INSERT INTO `analysis` (`id`, `area`, `strength`, `weakness`, `opportunity`, `threats`, `landmarks`, `plant`, `thing`, `community`, `name`, `date`) VALUES
(9, 'หนองกอมเกาะ', 'ใกล้มหาวิทยาลัย', 'ห่างไกลจากตัวเมือง', 'เยอะมากก', 'พอๆกัน', 'ไม่น่ามี', 'ไม่แน่ใจ', 'วัวมั้ง', 'ไม่รู้', 'ณัฐวัตร', '23/6/2566'),
(10, 'สังคม', 'ที่ท่องเที่ยวเยอะ', 'ห่างไกลจากตัวเมือง', 'นักท่องเที่ยวมีเยอะ', 'การบริหารจัดการ', 'เยอะ', 'เยอะ', 'เยอะ', 'เยอะ', 'อับดุล', '23/6/2566');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analysis`
--
ALTER TABLE `analysis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analysis`
--
ALTER TABLE `analysis`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
