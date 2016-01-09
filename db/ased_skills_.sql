-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: dedi498.jnb1.host-h.net
-- Generation Time: Jan 09, 2016 at 08:01 AM
-- Server version: 5.5.46-0+deb7u1
-- PHP Version: 5.3.3-7+squeeze28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ased_skills_`
--

-- --------------------------------------------------------

--
-- Table structure for table `provincialstructures`
--

CREATE TABLE IF NOT EXISTS `provincialstructures` (
`provinceID` int(11) NOT NULL,
  `provinceName` varchar(45) NOT NULL,
  `Leadership` varchar(45) DEFAULT NULL,
  `contactDetails` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provincialstructures`
--

INSERT INTO `provincialstructures` (`provinceID`, `provinceName`, `Leadership`, `contactDetails`) VALUES
(1, 'Eastern Cape', 'a', '0'),
(2, 'Gauteng', NULL, ''),
(3, 'KwaZulu Natal', NULL, ''),
(4, 'Limpopo', NULL, ''),
(5, 'Mpumalanga', NULL, ''),
(6, 'North West', NULL, ''),
(7, 'Northern Cape', NULL, ''),
(8, 'Orange Free State', NULL, ''),
(9, 'Western Cape', NULL, ''),
(10, 'provinceName', 'Leadership', 'contactDetails');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`userID` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `skills` varchar(45) DEFAULT NULL,
  `profession` varchar(45) DEFAULT NULL,
  `qualifications` varchar(100) DEFAULT NULL,
  `provinceID` int(11) NOT NULL,
  `city` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `contactDetails` varchar(45) DEFAULT NULL,
  `pictureURL` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstname`, `lastname`, `skills`, `profession`, `qualifications`, `provinceID`, `city`, `email`, `password`, `contactDetails`, `pictureURL`) VALUES
(1, 'Dumisani', 'Kunene', 'Programming', 'CSIR', NULL, 2, 'Johannesburg', NULL, NULL, NULL, '../ased-includes/img/userPic.jpg'),
(2, 'Joe Zavha', 'Hlungwani', 'Data Analyst', 'Vodacom', NULL, 2, 'Midrand', NULL, NULL, NULL, '../ased-includes/img/blackSilhouette4.jpg'),
(3, 'Thabani "Boss Zonke"', 'Joyisa', 'Business Analyst', 'Standard Bank', NULL, 3, 'Durban', NULL, NULL, NULL, '../ased-includes/img/blackSilhouette2.jpg'),
(4, 'Zinhle', 'Masombuka', 'Accountant', 'Abbeydale', NULL, 5, 'East Rand', NULL, NULL, NULL, '../ased-includes/img/blackSilhouette.jpg'),
(5, 'Mkhuseli', 'Ngxande', 'Researcher', 'CSIR', NULL, 1, 'Quens Town', NULL, NULL, NULL, '../ased-includes/img/blackSilhouette3.jpg'),
(6, 'Livhuwane', 'Mashudu', 'Carpenter', 'Builders Consultant', NULL, 4, 'Thoyandou', NULL, NULL, NULL, '../ased-includes/img/blackSilhouette4.jpg'),
(7, 'Asanda', 'Mbathane', 'Boiler Technitian', 'Eskom', NULL, 1, 'Mthata', NULL, NULL, NULL, '../ased-includes/img/blackSilhouette2.jpg'),
(9, 'khaya', 'kunene', 'freelencer', 'animator', 'Degree in ....', 2, 'soweto', 'khayakunene@live.com', 'windows', '', '../ased-includes/img/blackSilhouette.jpg'),
(11, 'Sharlton', 'Fani', 'Locum', 'Pharmasist', 'diploma', 4, 'Thoyando', 'sharliefani@myuwc.ac.za', 'fani31', '', '../ased-includes/img/blackSilhouette.jpg'),
(17, 'Sello', 'Ramolelle', 'accounting', 'Accountant', 'bcom sccounting', 2, 'Johannesburg', 'selloram@gmail.com', '4512', '', '../ased-includes/img/blackSilhouette.jpg'),
(18, 'thazololo', 'Zolo', 'computer', 'programmer', 'sassa', 2, 'Johannesburg', 'thabzo@ymailcom', '123', '', '../ased-includes/img/blackSilhouette.jpg'),
(19, 'nadia', 'naidoo', 'skill', 'profession', 'qualification', 0, 'Johannesburg', 'nadian@rocketmail.com', '1020', '', '../ased-includes/img/blackSilhouette.jpg'),
(20, 'manho', 'malili', 'Artisan', 'Gov Dept', 'steel mani', 4, 'Venda', 'manho@malilo.co.za', '123', '', '../ased-includes/img/blackSilhouette.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `provincialstructures`
--
ALTER TABLE `provincialstructures`
 ADD PRIMARY KEY (`provinceID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userID`), ADD UNIQUE KEY `userId_UNIQUE` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provincialstructures`
--
ALTER TABLE `provincialstructures`
MODIFY `provinceID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
