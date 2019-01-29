-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2018 at 10:06 AM
-- Server version: 5.6.42
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Interns`
--

-- --------------------------------------------------------

--
-- Table structure for table `central`
--

CREATE TABLE IF NOT EXISTS `central` (
  `name` varchar(20) NOT NULL,
  `class` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `central`
--

INSERT INTO `central` (`name`, `class`) VALUES
('Airoli', 2),
('Ambernath', 2),
('Ambivli', 3),
('Asangaon', 2),
('Atagaon', 3),
('Badlapur', 2),
('Belapur CBD', 2),
('Bhandup', 3),
('Bhivpuri Rd', 3),
('Byculla', 2),
('Chinchpokli', 3),
('CSMT', 1),
('Currey Road', 3),
('Dadar', 1),
('Diva Jn.', 2),
('Dolavli', 3),
('Dombivli', 2),
('Ghansoli', 2),
('Ghatkopar', 1),
('Juinagar', 3),
('Kalva', 2),
('Kalyan ', 1),
('Kanjurmarg', 2),
('Karjat', 1),
('Kasara', 2),
('Kelavli', 3),
('Khadavli', 3),
('Khandeshwar', 3),
('Khardi', 3),
('Kharghar', 2),
('Khopoli', 3),
('Kopar', 3),
('Koparkhairne', 2),
('Kurla', 2),
('Lowjee', 3),
('Manasarovar', 3),
('Masjid', 3),
('Matunga', 2),
('Mulund', 1),
('Mumbra', 3),
('Nahur', 3),
('Neral', 3),
('Nerul', 1),
('Palasdhari', 3),
('Panvel', 1),
('Parel', 2),
('Rabale', 2),
('Sandhurst Road', 3),
('Sanpada', 2),
('Seawood Darave', 3),
('Shahad', 3),
('Shelu', 3),
('Sion', 2),
('Thakurli', 2),
('Thane', 1),
('Titwala', 2),
('Turbhe', 2),
('Ulhas Nagar', 2),
('Vangani', 3),
('Vashi', 1),
('Vasind', 3),
('Vidyavihar', 2),
('Vikhroli', 2),
('Vithalwadi', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `central`
--
ALTER TABLE `central`
  ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
