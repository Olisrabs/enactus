-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2026 at 12:26 PM
-- Server version: 8.4.7
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enactus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `timestamp`, `username`, `email`, `password`, `status`) VALUES
(1, '2025-09-14 17:16:14', 'Enactus', 'olisrab@gmail.com', '*8D6CEFAEB9BEE4D64B44A35514E499CD013068FF', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `meeting_id` varchar(500) DEFAULT NULL,
  `member_name` varchar(500) DEFAULT NULL,
  `member_matric` varchar(100) NOT NULL,
  `status` enum('Present','Absent') NOT NULL DEFAULT 'Absent',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `timestamp`, `meeting_id`, `member_name`, `member_matric`, `status`) VALUES
(1, '2025-09-15 09:59:52', 'MI1409254329', 'Abimbola Olajidee', '4895', 'Absent');

-- --------------------------------------------------------

--
-- Table structure for table `executives`
--

DROP TABLE IF EXISTS `executives`;
CREATE TABLE IF NOT EXISTS `executives` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fullname` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `executives`
--

INSERT INTO `executives` (`id`, `timestamp`, `fullname`, `email`) VALUES
(1, '2025-09-16 21:18:21', 'Abimbola Olajide', 'olisrab@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

DROP TABLE IF EXISTS `meetings`;
CREATE TABLE IF NOT EXISTS `meetings` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uin` varchar(500) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `location` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `timestamp`, `uin`, `title`, `location`) VALUES
(1, '2025-09-14 18:47:48', 'MI1409254329', 'Weekly Meeting', 'Accounting');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `dob` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `state_of_origin` varchar(500) DEFAULT NULL,
  `lga` varchar(500) DEFAULT NULL,
  `department` varchar(500) DEFAULT NULL,
  `level` varchar(500) DEFAULT NULL,
  `matric` varchar(500) DEFAULT NULL,
  `passport` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `timestamp`, `uin`, `fullname`, `email`, `phone`, `dob`, `gender`, `state_of_origin`, `lga`, `department`, `level`, `matric`, `passport`, `status`) VALUES
(1, '2025-09-15 09:11:31', 'ENACTUS-BOUESTI1409254089', 'Abimbola Olajidee', 'olisrab@gmail.com', '09069230487', '2025-09-14', 'Male', 'Ogun', 'Ijebu North', 'Computer Science', '300 Level', '4895', '48952149843817.jpg', 'Graduated'),
(2, '2025-09-14 19:04:01', 'ENACTUS-BOUESTI1409252404', 'Olajide', 'we@e', '092390123', '2025-09-16', 'Male', 'Akwa Ibom', 'Eket', '2312', '1232 Level', '3412', '34122149194834.jpg', 'Active'),
(3, '2025-09-15 09:58:23', 'ENACTUS-BOUESTI1409251240', 'New', 'member@g', '2309412', '2025-09-09', 'Male', 'Anambra', 'Anaocha', 'wojef', '234d Level', '132213', '68c7118c88a40.png', 'Graduated');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'olisrab@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
