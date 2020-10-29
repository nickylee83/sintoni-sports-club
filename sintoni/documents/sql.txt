-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 02:45 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sintoniclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `acitvity_ID` int(11) NOT NULL,
  `activity_type` enum('tennis','table tennis','squash','soccer','Bowls','Restaurant','Summer school') NOT NULL,
  `activity_ID_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`acitvity_ID`, `activity_type`, `activity_ID_value`) VALUES
(1, 'tennis', 1),
(2, 'table tennis', 2),
(3, 'squash', 4),
(4, 'soccer', 8),
(5, 'Bowls', 16),
(6, 'Restaurant', 32),
(7, 'Summer school', 64);

-- --------------------------------------------------------

--
-- Table structure for table `administrative`
--

CREATE TABLE `administrative` (
  `adminID` int(6) NOT NULL,
  `firstName` varchar(180) NOT NULL,
  `lastName` varchar(180) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `function` int(3) NOT NULL,
  `dateHire` date NOT NULL,
  `dateOfBirth` date NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_ID` int(6) NOT NULL,
  `event_title` varchar(280) NOT NULL,
  `description` text NOT NULL,
  `date_time` datetime NOT NULL,
  `events_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `externalusers`
--

CREATE TABLE `externalusers` (
  `external_ID` int(11) NOT NULL,
  `external_user_type` enum('single member','family member','guest','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `externalusers`
--

INSERT INTO `externalusers` (`external_ID`, `external_user_type`) VALUES
(1, 'single member'),
(2, 'family member'),
(3, 'guest');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `images_ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `path` varchar(400) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internalusers`
--

CREATE TABLE `internalusers` (
  `internal_user_ID` int(3) NOT NULL COMMENT 'userType used in the other tables to identify all users type & associate privileges',
  `internal_user_Type` enum('manager','staff') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internalusers`
--

INSERT INTO `internalusers` (`internal_user_ID`, `internal_user_Type`) VALUES
(1, 'manager'),
(2, 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_ID` int(6) NOT NULL,
  `membership_type` enum('single','family','guest') NOT NULL,
  `member_type` int(6) NOT NULL,
  `member_first_name` varchar(180) NOT NULL,
  `member_last_name` varchar(180) NOT NULL,
  `gender` enum('female','male') DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `mobile_phone` varchar(20) DEFAULT NULL,
  `email` varchar(120) NOT NULL,
  `member_address` varchar(180) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monthly_fees`
--

CREATE TABLE `monthly_fees` (
  `fee_ID` int(3) NOT NULL,
  `fee_type` enum('single plan','family plan','event to guests') NOT NULL,
  `amounte` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthly_fees`
--

INSERT INTO `monthly_fees` (`fee_ID`, `fee_type`, `amounte`) VALUES
(1, 'single plan', '40'),
(2, 'family plan', '120'),
(5, 'event to guests', '15');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_ID` int(11) NOT NULL,
  `news_title` varchar(280) NOT NULL,
  `news_content` text NOT NULL,
  `news_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `news_image` int(11) NOT NULL,
  `tags_value` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments_2018`
--

CREATE TABLE `payments_2018` (
  `external_ID` int(11) NOT NULL,
  `monthly_fee` int(11) NOT NULL,
  `paid` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`acitvity_ID`),
  ADD UNIQUE KEY `club_activities` (`activity_type`);

--
-- Indexes for table `administrative`
--
ALTER TABLE `administrative`
  ADD PRIMARY KEY (`adminID`),
  ADD KEY `userID` (`function`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_ID`),
  ADD KEY `events_image` (`events_image`) USING BTREE;

--
-- Indexes for table `externalusers`
--
ALTER TABLE `externalusers`
  ADD PRIMARY KEY (`external_ID`),
  ADD UNIQUE KEY `external_user_type` (`external_user_type`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`images_ID`);

--
-- Indexes for table `internalusers`
--
ALTER TABLE `internalusers`
  ADD PRIMARY KEY (`internal_user_ID`),
  ADD UNIQUE KEY `internal_user_Type` (`internal_user_Type`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_ID`),
  ADD KEY `member_type` (`member_type`);

--
-- Indexes for table `monthly_fees`
--
ALTER TABLE `monthly_fees`
  ADD PRIMARY KEY (`fee_ID`),
  ADD UNIQUE KEY `unique plans` (`fee_type`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_ID`),
  ADD KEY `image_path_ID` (`news_image`);

--
-- Indexes for table `payments_2018`
--
ALTER TABLE `payments_2018`
  ADD KEY `external_member_ID` (`external_ID`),
  ADD KEY `monthly_fee` (`monthly_fee`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `acitvity_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `administrative`
--
ALTER TABLE `administrative`
  MODIFY `adminID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_ID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `externalusers`
--
ALTER TABLE `externalusers`
  MODIFY `external_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `images_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `internalusers`
--
ALTER TABLE `internalusers`
  MODIFY `internal_user_ID` int(3) NOT NULL AUTO_INCREMENT COMMENT 'userType used in the other tables to identify all users type & associate privileges', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `monthly_fees`
--
ALTER TABLE `monthly_fees`
  MODIFY `fee_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrative`
--
ALTER TABLE `administrative`
  ADD CONSTRAINT `admin_userID` FOREIGN KEY (`function`) REFERENCES `internalusers` (`internal_user_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_image_ID` FOREIGN KEY (`events_image`) REFERENCES `images` (`images_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `external_member_type` FOREIGN KEY (`member_type`) REFERENCES `externalusers` (`external_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_image_ID` FOREIGN KEY (`news_image`) REFERENCES `images` (`images_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `payments_2018`
--
ALTER TABLE `payments_2018`
  ADD CONSTRAINT `monthly_fees` FOREIGN KEY (`monthly_fee`) REFERENCES `monthly_fees` (`fee_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
