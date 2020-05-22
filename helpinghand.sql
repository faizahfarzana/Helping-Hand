-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2018 at 07:59 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpinghand`
--

-- --------------------------------------------------------

--
-- Table structure for table `affected_zone`
--

CREATE TABLE `affected_zone` (
  `ZONEID` int(11) DEFAULT NULL,
  `DISASTERID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `affected_zone`
--

INSERT INTO `affected_zone` (`ZONEID`, `DISASTERID`) VALUES
(8, 1),
(3, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(1, 2),
(15, 3),
(16, 3),
(27, 3),
(19, 3),
(7, 4),
(19, 5),
(17, 5),
(25, 6),
(3, 6),
(26, 6),
(25, 7),
(25, 8);

-- --------------------------------------------------------

--
-- Table structure for table `clothing`
--

CREATE TABLE `clothing` (
  `CLOTHINGRELEIFID` int(11) NOT NULL,
  `COST` float DEFAULT NULL,
  `RELIEFID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothing`
--

INSERT INTO `clothing` (`CLOTHINGRELEIFID`, `COST`, `RELIEFID`) VALUES
(1, 1000, 1),
(2, 2000, 2),
(3, 3000, 3),
(4, 4000, 4),
(5, 5000, 5),
(6, 6000, 6),
(7, 7000, 7),
(8, 8000, 8);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `COMPANYID` int(11) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `ADDRESS` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`COMPANYID`, `NAME`, `ADDRESS`, `EMAIL`) VALUES
(1, 'Nirbhik19', 'Hajaribag', 'nirbhik19@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `disaster`
--

CREATE TABLE `disaster` (
  `DISASTERID` int(11) NOT NULL,
  `CATEGORY` varchar(50) DEFAULT NULL,
  `DISASTER_DATE` date DEFAULT NULL,
  `LONGITUDE` int(11) DEFAULT NULL,
  `LATITUDE` int(11) DEFAULT NULL,
  `KILLED_PEOPLE` int(11) DEFAULT NULL,
  `AFFECTED_PEOPLE` int(11) DEFAULT NULL,
  `companyid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disaster`
--

INSERT INTO `disaster` (`DISASTERID`, `CATEGORY`, `DISASTER_DATE`, `LONGITUDE`, `LATITUDE`, `KILLED_PEOPLE`, `AFFECTED_PEOPLE`, `companyid`) VALUES
(1, ' cyclone-MAHASEN', '2013-05-13', NULL, NULL, 17, 386, 1),
(2, 'Earthquake', '2013-01-09', NULL, NULL, 0, 0, 1),
(3, 'Rainfall', '2014-08-13', NULL, NULL, 0, 0, 1),
(4, 'Rainfall', '2014-09-01', NULL, NULL, 0, 500000, 1),
(5, 'Rainfall', '2014-09-19', NULL, NULL, 0, 400000, 1),
(6, 'Mudslides', '2017-01-14', NULL, NULL, 9, 135, 1),
(7, 'Landslides', '2017-07-22', NULL, NULL, 6, 7000, 1),
(8, 'Landslides', '2017-07-23', NULL, NULL, 4, 8000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `FOODRELEIFID` int(11) NOT NULL,
  `COST` float DEFAULT NULL,
  `RELIEFID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`FOODRELEIFID`, `COST`, `RELIEFID`) VALUES
(1, 1000, 2),
(2, 2000, 3),
(3, 3000, 3),
(4, 4000, 6),
(5, 5000, 7),
(6, 6000, 8),
(7, 7000, 7),
(8, 8000, 6);

-- --------------------------------------------------------

--
-- Table structure for table `information_form`
--

CREATE TABLE `information_form` (
  `FORMID` int(11) NOT NULL,
  `FORMDATE` date DEFAULT NULL,
  `DISASTER_CATEGORY` varchar(50) DEFAULT NULL,
  `ZONE` varchar(50) DEFAULT NULL,
  `ADDITIONAL_INFO` varchar(50) DEFAULT NULL,
  `USERID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information_form`
--

INSERT INTO `information_form` (`FORMID`, `FORMDATE`, `DISASTER_CATEGORY`, `ZONE`, `ADDITIONAL_INFO`, `USERID`) VALUES
(1, '2013-05-14', 'Cyclone', 'Chittagong, Bhola,Barguna,Pirojpur,Noakhali', NULL, 2),
(2, '2013-01-11', 'Earthquake', 'Dhaka', NULL, 3),
(3, '2014-08-13', 'Rainfall', 'Rangpur,Gaibandha,Jamalpur', NULL, 4),
(4, '2014-09-05', 'Rainfall', ' Bogra,Kurigram', NULL, 5),
(5, '2017-01-16', 'Mudslides', 'Bandarban,Chittagong,Rangamati ', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `ORGANIZERID` int(11) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `ADDRESS` varchar(50) DEFAULT NULL,
  `JOIN_DATE` date DEFAULT NULL,
  `DESIGNATION` varchar(50) DEFAULT NULL,
  `COMPANYID` int(11) NOT NULL,
  `department` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`ORGANIZERID`, `NAME`, `EMAIL`, `ADDRESS`, `JOIN_DATE`, `DESIGNATION`, `COMPANYID`, `department`) VALUES
(1, 'Saeem Arafat Hossain', 'saeemhossain@gmail.com', 'Lalmatia', '2008-11-12', 'President', 1, NULL),
(2, 'Naima Afroz', 'naimaafroz@gmail.com', 'Lalmatia', '2010-11-25', 'Vice President', 1, NULL),
(3, 'Sumit Biswas', 'sumitbiswas@gmail.com', 'Mirpur', '2011-02-05', 'Disaster Head', 1, NULL),
(4, 'Shahriar Ucchash', 'shahriarucchash@gmail.com', 'China', '2015-09-04', 'Relief Management', 1, NULL),
(6, 'Muneem', 'muneem@gmail.com', 'Dhanmondi', '2015-08-06', 'Health Management', 1, NULL),
(7, 'Y', 'y@gmail.com', 'yy', '2000-01-01', 'Head', 1, 'Clothing'),
(8, 'Z', 'z@gmail.com', 'zz', '2000-01-01', 'Head', 1, 'Health');

-- --------------------------------------------------------

--
-- Table structure for table `relief`
--

CREATE TABLE `relief` (
  `RELIEFID` int(11) NOT NULL,
  `TOTALCOST` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `disasterid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relief`
--

INSERT INTO `relief` (`RELIEFID`, `TOTALCOST`, `date`, `disasterid`) VALUES
(1, 20000, '2013-05-15', 1),
(2, 14000, '2013-01-09', 2),
(3, 50000, '2014-08-14', 3),
(4, 10000, '2014-08-15', 4),
(5, 90000, '2014-09-22', 5),
(6, 50126, '2017-01-14', 6),
(7, 60142, '2017-07-24', 7),
(8, 102366, '2017-07-26', 8);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `TREATMENTRELEIFID` int(11) NOT NULL,
  `COST` float DEFAULT NULL,
  `RELIEFID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`TREATMENTRELEIFID`, `COST`, `RELIEFID`) VALUES
(1, 1000, 5),
(2, 2000, 6),
(3, 3000, 4),
(4, 4000, 3),
(5, 5000, 2),
(6, 6000, 1),
(7, 7000, 8),
(8, 8000, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERID` int(50) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `COMPANYID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERID`, `NAME`, `EMAIL`, `COMPANYID`) VALUES
(1, 'Raisul', 'raisul@gmail.com', 1),
(2, 'Maha', 'maha@gmail.com', 1),
(3, 'Radia', 'radia@gmail.com', 1),
(4, 'Muneem', 'muneem@gmail.com', 1),
(5, 'Shahab', 'shahab@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`) VALUES
(1, 'faiz', 'aaaa', 'f', 'fa', 'f@gmail.com'),
(2, 'admin', '1234', 'dg', 'dh', 'dgfsdgfd'),
(3, 'maha', '456', 'kjdajk', 'jkahs', 'ajkhjk@gmail.com'),
(4, 'gfd', '1234', 'sdgs', 'gd', 'fdg'),
(5, 'xz', '111', 'sa', 'sas', 'das');

-- --------------------------------------------------------

--
-- Table structure for table `victim`
--

CREATE TABLE `victim` (
  `VICTIMID` int(50) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `FAMILY_NUMBER` int(11) DEFAULT NULL,
  `BIRTH_DATE` date DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL,
  `GENDER` varchar(20) DEFAULT NULL,
  `BLOODGROUP` varchar(20) DEFAULT NULL,
  `VSTATUS` varchar(10) DEFAULT NULL,
  `RELIEFID` int(11) DEFAULT NULL,
  `DISASTERID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `victim`
--

INSERT INTO `victim` (`VICTIMID`, `NAME`, `FAMILY_NUMBER`, `BIRTH_DATE`, `AGE`, `GENDER`, `BLOODGROUP`, `VSTATUS`, `RELIEFID`, `DISASTERID`) VALUES
(1, 'Alam', 1, '1995-12-12', 22, 'Male', 'o+', 'Injured', 1, 1),
(2, 'Jamila', 2, '2017-03-09', 1, 'Female', 'A+', 'Unharmed', 1, 1),
(3, 'Moin', 4, '1989-06-02', 44, 'Male', 'B-', 'Dead', 1, 1),
(4, 'Moin', 4, '1989-06-02', 44, 'Male', 'B-', 'Dead', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `volunteeer`
--

CREATE TABLE `volunteeer` (
  `VOLUNTEERID` varchar(50) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `ADDRESS` varchar(50) DEFAULT NULL,
  `LONGITUDE` int(11) DEFAULT NULL,
  `LATITUDE` int(11) DEFAULT NULL,
  `JOIN_DATE` date DEFAULT NULL,
  `ORGANIZERID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteeer`
--

INSERT INTO `volunteeer` (`VOLUNTEERID`, `NAME`, `EMAIL`, `ADDRESS`, `LONGITUDE`, `LATITUDE`, `JOIN_DATE`, `ORGANIZERID`) VALUES
('1', 'Manal', 'manalmosharraf@gmail.com', 'Mohammadia Housing Ltd.', NULL, NULL, '2016-12-11', 6),
('2', 'Maha', 'mosharafmaha@gmail.com', 'Mohammadia Housing Ltd.', NULL, NULL, '2018-01-05', 6),
('3', 'fahad', 'f@gmail.com', 'ff', NULL, NULL, '2000-10-10', 7),
('4', 'mash', 'm@gmail.com', 'mm', NULL, NULL, '2005-10-23', 7),
('5', 'naruto', 'n@gmail.com', 'nn', NULL, NULL, '2009-03-24', 8),
('6', 'luffy', 'l@gmail.com', 'll', NULL, NULL, '2008-12-12', 8);

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `ZONEID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`ZONEID`, `NAME`) VALUES
(1, 'Dhaka'),
(2, 'Barishal'),
(3, 'Chattagram'),
(4, 'Khulna'),
(5, 'Mymensingh'),
(6, 'Rajshahi'),
(7, 'Sylhet'),
(8, 'Bhola'),
(9, 'Barguna'),
(10, 'Pirojpur'),
(11, 'Noakhali'),
(12, 'Patuakhali'),
(13, 'Satkhira '),
(14, 'Laxmipur'),
(15, 'Nilphamari'),
(16, 'Lalmonirhat'),
(17, 'Kurigram'),
(18, 'Gaibandha'),
(19, 'Jamalpur'),
(20, 'Sirajganj'),
(21, 'Netrokona'),
(22, 'Mymensing'),
(23, 'Cox\'s Bazar'),
(24, 'Dinajpur'),
(25, 'Bandarban'),
(26, 'Rangamati'),
(27, 'Rangpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affected_zone`
--
ALTER TABLE `affected_zone`
  ADD KEY `ZONEID` (`ZONEID`),
  ADD KEY `DISASTERID` (`DISASTERID`);

--
-- Indexes for table `clothing`
--
ALTER TABLE `clothing`
  ADD PRIMARY KEY (`CLOTHINGRELEIFID`),
  ADD KEY `RELIEFID` (`RELIEFID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`COMPANYID`);

--
-- Indexes for table `disaster`
--
ALTER TABLE `disaster`
  ADD PRIMARY KEY (`DISASTERID`),
  ADD KEY `companyid` (`companyid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`FOODRELEIFID`),
  ADD KEY `RELIEFID` (`RELIEFID`);

--
-- Indexes for table `information_form`
--
ALTER TABLE `information_form`
  ADD PRIMARY KEY (`FORMID`),
  ADD KEY `USERID` (`USERID`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`ORGANIZERID`),
  ADD KEY `COMPANYID` (`COMPANYID`);

--
-- Indexes for table `relief`
--
ALTER TABLE `relief`
  ADD PRIMARY KEY (`RELIEFID`),
  ADD KEY `disasterid` (`disasterid`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`TREATMENTRELEIFID`),
  ADD KEY `RELIEFID` (`RELIEFID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERID`),
  ADD KEY `COMPANYID` (`COMPANYID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `victim`
--
ALTER TABLE `victim`
  ADD PRIMARY KEY (`VICTIMID`),
  ADD KEY `RELIEFID` (`RELIEFID`),
  ADD KEY `DISASTERID` (`DISASTERID`);

--
-- Indexes for table `volunteeer`
--
ALTER TABLE `volunteeer`
  ADD PRIMARY KEY (`VOLUNTEERID`),
  ADD KEY `ORGANIZERID` (`ORGANIZERID`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`ZONEID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `affected_zone`
--
ALTER TABLE `affected_zone`
  ADD CONSTRAINT `affected_zone_ibfk_1` FOREIGN KEY (`ZONEID`) REFERENCES `zone` (`ZONEID`),
  ADD CONSTRAINT `affected_zone_ibfk_2` FOREIGN KEY (`DISASTERID`) REFERENCES `disaster` (`DISASTERID`);

--
-- Constraints for table `disaster`
--
ALTER TABLE `disaster`
  ADD CONSTRAINT `disaster_ibfk_1` FOREIGN KEY (`companyid`) REFERENCES `company` (`COMPANYID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
