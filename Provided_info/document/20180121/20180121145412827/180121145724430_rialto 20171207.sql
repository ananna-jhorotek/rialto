-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 02:05 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rialto`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cellsite`
--

CREATE TABLE IF NOT EXISTS `tbl_cellsite` (
  `id` int(12) NOT NULL,
  `sr_n` int(12) NOT NULL,
  `site_name` varchar(50) NOT NULL,
  `lac_id` varchar(12) NOT NULL,
  `cell_name` int(50) NOT NULL,
  `cell_id` varchar(20) NOT NULL,
  `laccellid` varchar(50) NOT NULL,
  `antenna_direction` float NOT NULL,
  `cell_beamrange` varchar(50) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `site_address` varchar(200) NOT NULL,
  `union_ward` varchar(50) NOT NULL,
  `thana` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `bts_type` varchar(20) NOT NULL,
  `operator` varchar(50) NOT NULL,
  `cell_type_2g_3g` varchar(5) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cellsite`
--

INSERT INTO `tbl_cellsite` (`id`, `sr_n`, `site_name`, `lac_id`, `cell_name`, `cell_id`, `laccellid`, `antenna_direction`, `cell_beamrange`, `latitude`, `longitude`, `site_address`, `union_ward`, `thana`, `district`, `division`, `bts_type`, `operator`, `cell_type_2g_3g`, `createat`, `updateat`) VALUES
(1, 18834, 'DHK_U1992', '750', 0, '9919', '7509919', 350, '1000', '23.78665', '90.41448', 'House:14, Road:33, Gulshan-1, Dhaka', 'Bhatara', 'Badda', 'Dhaka', 'Dhaka', 'Regular', 'bl', '3G', '2017-12-04 12:25:14', '2017-12-04 12:25:14'),
(2, 18833, 'DHK_U1992', '750', 0, '9918', '7509918', 270, '1000', '23.78665', '90.41448', 'House:14, Road:33, Gulshan-1, Dhaka', 'Bhatara', 'Baddaaa', 'Dhaka', 'Dhaka', 'Regular', 'bl', '3G', '2017-12-04 12:25:14', '2017-12-07 07:22:18'),
(3, 18832, 'DHK_U1992', '750', 0, '9917', '7509917', 150, '1000', '23.78665', '90.41448', 'House:14, Road:33, Gulshan-1, Dhaka', 'Ward No-49', 'Dhanmondi', 'Dhaka', 'Dhaka', 'Regular', 'bl', '3G', '2017-12-04 12:25:14', '2017-12-04 12:25:14'),
(4, 18835, 'DHK_U1992', '750', 0, '9915', '7509915', 270, '1000', '23.78665', '90.41448', 'House:14, Road:33, Gulshan-1, Dhaka', 'Ward No-57', 'Shahbagh', 'Dhaka', 'Dhaka', 'Regular', 'bl', '3G', '2017-12-04 12:25:14', '2017-12-04 12:25:14'),
(5, 30850, 'DHK_X1992', '830', 0, '9913', '8309913', 350, '1000', '23.78665', '90.41448', 'House:14, Road:33, Gulshan-1, Dhaka', 'Ward No-57', 'Shahbagh', 'Dhaka', 'Dhaka', 'Regular', 'bl', '2G', '2017-12-04 12:25:14', '2017-12-04 12:25:14'),
(6, 30849, 'DHK_X1992', '830', 0, '9912', '8309912', 270, '1000', '23.78665', '90.41448', 'House:14, Road:33, Gulshan-1, Dhaka', 'Ward No-57', 'Shahbagh', 'Dhaka', 'Dhaka', 'Regular', 'bl', '2G', '2017-12-04 12:25:14', '2017-12-04 12:25:14'),
(7, 30848, 'DHK_X1992', '830', 0, '9911', '8309911', 150, '1000', '23.78665', '90.41448', 'House:14, Road:33, Gulshan-1, Dhaka', 'Ward No-57', 'Shahbagh', 'Dhaka', 'Dhaka', 'Regular', 'bl', '2G', '2017-12-04 12:25:14', '2017-12-04 12:25:14'),
(8, 18831, 'DHK_U1991', '758', 0, '9909', '7589909', 240, '1000', '23.77452', '90.39644', '112/2, Arjatpara, Tejgaon, Dhaka', 'Ward No-57', 'Shahbagh', 'Dhaka', 'Dhaka', 'Regular', 'bl', '3G', '2017-12-04 12:25:14', '2017-12-04 12:25:14'),
(9, 18830, 'DHK_U1991', '758', 0, '9908', '7589908', 120, '1000', '23.77452', '90.39644', '112/2, Arjatpara, Tejgaon, Dhaka', 'Ward No-57', 'Shahbagh', 'Dhaka', 'Dhaka', 'Regular', 'bl', '3G', '2017-12-04 12:25:14', '2017-12-04 12:25:14'),
(10, 2053, 'NSPAC1W', '1116', 0, '11129', '111611129', 0, '1000', '23.8538', '90.6903', 'A. R. Khan Sizing & Fabrics Limited,  South Silmandi,  Dhaka-Sylhet Highway,  Narshingdi Sadar,  Narshingdi', 'Bhatara', 'Badda', 'Dhaka', 'Dhaka', 'Regular', 'gp', '3G', '2017-12-04 12:25:14', '2017-12-06 10:28:34'),
(11, 2064, 'NSPAC1W', '1116', 0, '11126', '111611126', 0, '1000', '23.8938', '90.6703', 'A. R. Khan Sizing & Fabrics Limited,  South Silmandi,  Dhaka-Sylhet Highway,  Narshingdi Sadar,  Narshingdi', 'Bhatara', 'Badda', 'Dhaka', 'Dhaka', 'Regular', 'gp', '3G', '2017-12-04 12:25:14', '2017-12-04 12:25:14'),
(12, 2066, 'NSPAC1W', '1116', 0, '11128', '111611128', 0, '1000', '23.9138', '90.7003', 'A. R. Khan Sizing & Fabrics Limited,  South Silmandi,  Dhaka-Sylhet Highway,  Narshingdi Sadar,  Narshingdi', 'Ward No-49', 'Dhanmondi', 'Dhaka', 'Dhaka', 'Regular', 'gp', '3G', '2017-12-04 12:25:14', '2017-12-07 10:39:03'),
(13, 2068, 'NSPAC1W', '1116', 0, '11127', '111611127', 0, '1000', '23.8638', '90.6403', 'A. R. Khan Sizing & Fabrics Limited,  South Silmandi,  Dhaka-Sylhet Highway,  Narshingdi Sadar,  Narshingdi', 'Ward No-57', 'Shahbagh', 'Dhaka', 'Dhaka', 'Regular', 'gp', '3G', '2017-12-04 12:25:14', '2017-12-07 10:38:46'),
(14, 2071, 'NSPAC1W', '1116', 0, '11131', '111611131', 0, '1000', '23.8938', '90.6703', 'A. R. Khan Sizing & Fabrics Limited,  South Silmandi,  Dhaka-Sylhet Highway,  Narshingdi Sadar,  Narshingdi', 'Ward No-57', 'Shahbagh', 'Dhaka', 'Dhaka', 'Regular', 'gp', '3G', '2017-12-04 12:25:14', '2017-12-04 12:25:14'),
(15, 2073, 'NSPAC1W', '1116', 0, '11130', '111611130', 0, '1000', '23.8938', '90.6703', 'A. R. Khan Sizing & Fabrics Limited,  South Silmandi,  Dhaka-Sylhet Highway,  Narshingdi Sadar,  Narshingdi', 'Ward No-57', 'Shahbagh', 'Dhaka', 'Dhaka', 'Regular', 'gp', '3G', '2017-12-04 12:25:14', '2017-12-04 12:25:14'),
(16, 2175, 'NSPAC1W', '1116', 0, '51834', '111651834', 0, '1000', '23.8938', '90.6703', 'A. R. Khan Sizing & Fabrics Limited,  South Silmandi,  Dhaka-Sylhet Highway,  Narshingdi Sadar,  Narshingdi', 'Ward No-57', 'Shahbagh', 'Dhaka', 'Dhaka', 'Regular', 'gp', '3G', '2017-12-04 12:25:14', '2017-12-04 12:25:14'),
(17, 2177, 'NSPAC1W', '1116', 0, '51833', '111651833', 0, '1000', '23.8938', '90.6703', 'A. R. Khan Sizing & Fabrics Limited,  South Silmandi,  Dhaka-Sylhet Highway,  Narshingdi Sadar,  Narshingdi', 'Ward No-57', 'Shahbagh', 'Dhaka', 'Dhaka', 'Regular', 'gp', '3G', '2017-12-04 12:25:14', '2017-12-04 12:25:14'),
(18, 2859, 'MYDRD3W', '1177', 0, '48455', '117748455', 0, '1000', '24.5628', '90.316', 'Raghunathpur, Radhakanai, Fulbaria, Mymensingh', 'Ward No-57', 'Shahbagh', 'Dhaka', 'Dhaka', 'Regular', 'gp', '3G', '2017-12-04 12:25:14', '2017-12-04 12:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_groupinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_groupinfo` (
  `groupid` int(12) NOT NULL,
  `goupname` varchar(32) NOT NULL,
  `owner` int(12) NOT NULL,
  `accesslevel` int(12) NOT NULL,
  `creareat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateat` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_groupmember`
--

CREATE TABLE IF NOT EXISTS `tbl_groupmember` (
  `id` int(12) NOT NULL,
  `groupid` int(12) NOT NULL,
  `userid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotlist`
--

CREATE TABLE IF NOT EXISTS `tbl_hotlist` (
  `id` int(12) NOT NULL,
  `slno` int(12) NOT NULL,
  `msisdn` int(16) NOT NULL,
  `type` int(2) NOT NULL,
  `comment` varchar(512) NOT NULL,
  `createat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateat` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reportchain`
--

CREATE TABLE IF NOT EXISTS `tbl_reportchain` (
  `id` int(12) NOT NULL,
  `userid` int(12) NOT NULL,
  `superid` int(12) NOT NULL,
  `createat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateat` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_requestdetails`
--

CREATE TABLE IF NOT EXISTS `tbl_requestdetails` (
  `id` int(12) NOT NULL,
  `reqid` int(12) NOT NULL,
  `seqno` int(2) NOT NULL,
  `stepowner` int(12) NOT NULL,
  `status` int(2) NOT NULL,
  `comments` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_requestinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_requestinfo` (
  `id` int(12) NOT NULL,
  `reqid` int(12) NOT NULL,
  `owner` int(12) NOT NULL,
  `details` varchar(512) NOT NULL,
  `options` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statuses`
--

CREATE TABLE IF NOT EXISTS `tbl_statuses` (
  `id` int(2) NOT NULL,
  `status` int(12) NOT NULL,
  `statusdetails` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_userinfo` (
  `userhash` varchar(32) NOT NULL,
  `userid` int(12) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `accesslevel` int(12) NOT NULL,
  `createat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`userhash`, `userid`, `username`, `password`, `email`, `accesslevel`, `createat`, `updateat`) VALUES
('1234', 1, 'Rialto', '81dc9bdb52d04dc20036dbd8313ed055', 'demu@jhorotek.com', 1, '2017-11-18 16:20:03', '2017-12-04 12:18:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cellsite`
--
ALTER TABLE `tbl_cellsite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_groupinfo`
--
ALTER TABLE `tbl_groupinfo`
  ADD KEY `NewIndex1` (`groupid`),
  ADD KEY `FK_tbl_groupinfo_user` (`owner`);

--
-- Indexes for table `tbl_groupmember`
--
ALTER TABLE `tbl_groupmember`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tbl_groupmember_group` (`groupid`),
  ADD KEY `FK_tbl_groupmember_user` (`userid`);

--
-- Indexes for table `tbl_hotlist`
--
ALTER TABLE `tbl_hotlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reportchain`
--
ALTER TABLE `tbl_reportchain`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tbl_reportchain_superid` (`superid`),
  ADD KEY `FK_tbl_reportchain_user` (`userid`);

--
-- Indexes for table `tbl_requestdetails`
--
ALTER TABLE `tbl_requestdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tbl_requestdetails` (`status`),
  ADD KEY `FK_tbl_requestdetails_reqinfo` (`reqid`),
  ADD KEY `FK_tbl_requestdetails_user` (`stepowner`);

--
-- Indexes for table `tbl_requestinfo`
--
ALTER TABLE `tbl_requestinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reqid` (`reqid`),
  ADD KEY `FK_tbl_requestinfo_user` (`owner`);

--
-- Indexes for table `tbl_statuses`
--
ALTER TABLE `tbl_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cellsite`
--
ALTER TABLE `tbl_cellsite`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  MODIFY `userid` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_groupinfo`
--
ALTER TABLE `tbl_groupinfo`
  ADD CONSTRAINT `FK_tbl_groupinfo_user` FOREIGN KEY (`owner`) REFERENCES `tbl_userinfo` (`userid`);

--
-- Constraints for table `tbl_groupmember`
--
ALTER TABLE `tbl_groupmember`
  ADD CONSTRAINT `FK_tbl_groupmember_group` FOREIGN KEY (`groupid`) REFERENCES `tbl_groupinfo` (`groupid`),
  ADD CONSTRAINT `FK_tbl_groupmember_user` FOREIGN KEY (`userid`) REFERENCES `tbl_userinfo` (`userid`);

--
-- Constraints for table `tbl_reportchain`
--
ALTER TABLE `tbl_reportchain`
  ADD CONSTRAINT `FK_tbl_reportchain_superid` FOREIGN KEY (`superid`) REFERENCES `tbl_groupinfo` (`groupid`),
  ADD CONSTRAINT `FK_tbl_reportchain_user` FOREIGN KEY (`userid`) REFERENCES `tbl_userinfo` (`userid`);

--
-- Constraints for table `tbl_requestdetails`
--
ALTER TABLE `tbl_requestdetails`
  ADD CONSTRAINT `FK_tbl_requestdetails` FOREIGN KEY (`status`) REFERENCES `tbl_statuses` (`id`),
  ADD CONSTRAINT `FK_tbl_requestdetails_reqinfo` FOREIGN KEY (`reqid`) REFERENCES `tbl_requestinfo` (`reqid`),
  ADD CONSTRAINT `FK_tbl_requestdetails_user` FOREIGN KEY (`stepowner`) REFERENCES `tbl_userinfo` (`userid`);

--
-- Constraints for table `tbl_requestinfo`
--
ALTER TABLE `tbl_requestinfo`
  ADD CONSTRAINT `FK_tbl_requestinfo_user` FOREIGN KEY (`owner`) REFERENCES `tbl_userinfo` (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
