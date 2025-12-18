-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2025 at 05:45 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `cid` int(11) NOT NULL,
  `cnama` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cpesan` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cemail`, `cpesan`, `created_at`) VALUES
(1, 'mHrNI', 'MHRANI@gmail.com', 'pesan dari rani ', '2025-12-18 12:32:45'),
(2, 'ika', 'ika@wih.com', 'lebih enak ikan goreng daripada ikan kuah', '2025-12-18 12:32:45'),
(3, 'mei', 'mei@gmail.com', 'mei lahir di bulan mei juga', '2025-12-18 12:32:45'),
(4, 'Redia Yuana Dinandika Tjandring', 'redia0807@gmail.com', 'rediajtvetoeit0eimr0er0ewrtmw0vm9t', '2025-12-18 12:32:45'),
(5, 'Redia Yuana Dinandika Tjandring', 'redia0807@gmail.com', 'rerioereroeroeor', '2025-12-18 12:32:45'),
(6, 'Redia Yuana Dinandika Tjandring', 'redia0807@gmail.com', 'lfeiereime ,ete ee -', '2025-12-18 12:32:45'),
(7, 'oi', 'redia0807@gmail.com', 'apaaaaaaaa', '2025-12-18 12:32:45'),
(8, 'o', 'redia0807@gmail.com', 'ggekei', '2025-12-18 12:32:45'),
(9, 'o', 'redia0807@gmail.com', 'ika', '2025-12-18 12:32:45'),
(10, 'iqra', 'redia0807@gmail.com', 'kiru99t49t49t49t', '2025-12-18 12:32:45'),
(11, 'Redia Yuana Dinandika Tjandring', 'redia0807@gmail.com', 'reduaaaaaaaaaa', '2025-12-18 12:36:41'),
(12, 'Redia Yuana Dinandika Tjandring', 'redia0807@gmail.com', 'rejdjcjcjh', '2025-12-18 12:42:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
