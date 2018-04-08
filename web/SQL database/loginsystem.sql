-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 04:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `chronicdisease`
--

CREATE TABLE `chronicdisease` (
  `user_id` int(11) NOT NULL,
  `asthma` tinyint(1) NOT NULL,
  `asthmaType` int(11) NOT NULL,
  `diabetes` tinyint(1) NOT NULL,
  `diabetesType` int(11) NOT NULL,
  `seizures` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `currentmed`
--

CREATE TABLE `currentmed` (
  `user_id` int(11) NOT NULL,
  `currentMeds` varchar(255) NOT NULL,
  `CurrentMedDose` varchar(255) NOT NULL,
  `healthConcerns` varchar(255) NOT NULL,
  `allergies` varchar(255) NOT NULL,
  `medAllergies` varchar(255) NOT NULL,
  `vision` tinyint(1) NOT NULL,
  `glasses` tinyint(1) NOT NULL,
  `hearing` tinyint(1) NOT NULL,
  `speech` tinyint(1) NOT NULL,
  `bloodPress` tinyint(1) NOT NULL,
  `heartProbs` varchar(255) NOT NULL,
  `neckbackInj` varchar(255) NOT NULL,
  `breathProblems` tinyint(1) NOT NULL,
  `adhd` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `docinfo`
--

CREATE TABLE `docinfo` (
  `user_id` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emergcontact`
--

CREATE TABLE `emergcontact` (
  `user_id` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `famhistory`
--

CREATE TABLE `famhistory` (
  `user_id` int(11) NOT NULL,
  `heartAttack` tinyint(1) NOT NULL,
  `stroke` tinyint(1) NOT NULL,
  `highBlood` tinyint(1) NOT NULL,
  `cholesterol` tinyint(1) NOT NULL,
  `diabetes` tinyint(1) NOT NULL,
  `asthma` tinyint(1) NOT NULL,
  `heartDisease` tinyint(1) NOT NULL,
  `heartOps` tinyint(1) NOT NULL,
  `glaucoma` tinyint(1) NOT NULL,
  `obesity` tinyint(1) NOT NULL,
  `cancer` tinyint(1) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `heartriskfacts`
--

CREATE TABLE `heartriskfacts` (
  `user_id` int(11) NOT NULL,
  `smoking` tinyint(1) NOT NULL,
  `perDay` varchar(255) NOT NULL,
  `sinceQuit` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pastmedhistory`
--

CREATE TABLE `pastmedhistory` (
  `user_id` int(11) NOT NULL,
  `heartAttack` tinyint(1) NOT NULL,
  `rheumatic` tinyint(1) NOT NULL,
  `murmer` tinyint(1) NOT NULL,
  `arteries` tinyint(1) NOT NULL,
  `veins` tinyint(1) NOT NULL,
  `arthritis` tinyint(1) NOT NULL,
  `dizziness` tinyint(1) NOT NULL,
  `epilepsy` tinyint(1) NOT NULL,
  `pastStroke` tinyint(1) NOT NULL,
  `diphtheria` tinyint(1) NOT NULL,
  `scarletfever` tinyint(1) NOT NULL,
  `mononucleosis` tinyint(1) NOT NULL,
  `anemia` tinyint(1) NOT NULL,
  `thyroid` tinyint(1) NOT NULL,
  `pneumonia` tinyint(1) NOT NULL,
  `injuries` tinyint(1) NOT NULL,
  `brokenBones` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `ShareID` int(11) NOT NULL,
  `Sender` int(11) NOT NULL,
  `Receiver` int(11) NOT NULL,
  `ShareAll` tinyint(1) NOT NULL,
  `PersonalInfo` tinyint(1) NOT NULL,
  `EmergContact` tinyint(1) NOT NULL,
  `DocInfo` tinyint(1) NOT NULL,
  `CurrentMed` tinyint(1) NOT NULL,
  `PresMedHist` tinyint(1) NOT NULL,
  `ChronicDisease` tinyint(1) NOT NULL,
  `FamDisease` tinyint(1) NOT NULL,
  `PastMedHist` tinyint(1) NOT NULL,
  `HeartDiseaseRisk` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Stores the shares and share info of users';

-- --------------------------------------------------------

--
-- Table structure for table `userpersonalinfo`
--

CREATE TABLE `userpersonalinfo` (
  `user_id` int(11) NOT NULL,
  `fName` varchar(100) NOT NULL,
  `lName` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `contactNum` varchar(50) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `insurance` varchar(100) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `blood` varchar(50) NOT NULL,
  `consent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(255) NOT NULL,
  `user_last` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chronicdisease`
--
ALTER TABLE `chronicdisease`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `currentmed`
--
ALTER TABLE `currentmed`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `docinfo`
--
ALTER TABLE `docinfo`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `emergcontact`
--
ALTER TABLE `emergcontact`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `famhistory`
--
ALTER TABLE `famhistory`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `heartriskfacts`
--
ALTER TABLE `heartriskfacts`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `pastmedhistory`
--
ALTER TABLE `pastmedhistory`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`ShareID`),
  ADD KEY `Sender` (`Sender`),
  ADD KEY `Receiver` (`Receiver`);

--
-- Indexes for table `userpersonalinfo`
--
ALTER TABLE `userpersonalinfo`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chronicdisease`
--
ALTER TABLE `chronicdisease`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currentmed`
--
ALTER TABLE `currentmed`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `docinfo`
--
ALTER TABLE `docinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emergcontact`
--
ALTER TABLE `emergcontact`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `famhistory`
--
ALTER TABLE `famhistory`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heartriskfacts`
--
ALTER TABLE `heartriskfacts`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pastmedhistory`
--
ALTER TABLE `pastmedhistory`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `ShareID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userpersonalinfo`
--
ALTER TABLE `userpersonalinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chronicdisease`
--
ALTER TABLE `chronicdisease`
  ADD CONSTRAINT `chronicdisease_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `currentmed`
--
ALTER TABLE `currentmed`
  ADD CONSTRAINT `currentmed_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `docinfo`
--
ALTER TABLE `docinfo`
  ADD CONSTRAINT `docinfo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emergcontact`
--
ALTER TABLE `emergcontact`
  ADD CONSTRAINT `emergcontact_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `famhistory`
--
ALTER TABLE `famhistory`
  ADD CONSTRAINT `famhistory_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `heartriskfacts`
--
ALTER TABLE `heartriskfacts`
  ADD CONSTRAINT `heartriskfacts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pastmedhistory`
--
ALTER TABLE `pastmedhistory`
  ADD CONSTRAINT `pastmedhistory_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `shares`
--
ALTER TABLE `shares`
  ADD CONSTRAINT `shares_ibfk_1` FOREIGN KEY (`Sender`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shares_ibfk_2` FOREIGN KEY (`Receiver`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userpersonalinfo`
--
ALTER TABLE `userpersonalinfo`
  ADD CONSTRAINT `userpersonalinfo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
