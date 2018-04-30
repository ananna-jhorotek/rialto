-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2017 at 09:56 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

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
-- Table structure for table `tbl_authorizedofficers`
--

CREATE TABLE `tbl_authorizedofficers` (
  `id` int(12) NOT NULL,
  `userhash` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `accesslevel` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `wing` varchar(50) NOT NULL,
  `apt_name` varchar(50) NOT NULL,
  `rt_officer` varchar(50) NOT NULL,
  `battalion` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createby` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_authorizedofficers`
--

INSERT INTO `tbl_authorizedofficers` (`id`, `userhash`, `password`, `accesslevel`, `name`, `rank`, `wing`, `apt_name`, `rt_officer`, `battalion`, `contact_no`, `email`, `status`, `createat`, `createby`) VALUES
(1, '', 'e10adc3949ba59abbe56e057f20f883e', '', 'MD KAMRUL HASAN, PSC', 'LIEUTENANT COLONEL', 'RAB-11', 'CO', 'ADG, OPERATIONS', 'BATTALION HQ', '1777711100', 'co11@rab.gov.bd', 'ACTIVE', '0000-00-00 00:00:00', 1),
(2, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'ASHIQUE BILLAH', 'MAJOR', 'RAB-11', '2IC', 'CO', 'BATTALION HQ', '1777711101', '2ic11@rab.gov.bd', 'ACTIVE', '0000-00-00 00:00:00', 1),
(3, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'AALEP UDDIN', 'SR. ASP', 'RAB-11', 'ADJUTANT', 'CO', 'BATTALION HQ', '1777711102', 'adjutant11@rab.gov.bd', 'ACTIVE', '0000-00-00 00:00:00', 1),
(4, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'AALEP UDDIN', 'SR. ASP', 'RAB-11', 'INTELLIGENCE OFFICER', 'CO', 'BATTALION HQ', '1777711104', 'intelligence officer11@rab.gov.bd', 'SUSPENDED', '0000-00-00 00:00:00', 1),
(5, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'MD SHAKIL AHMED', 'ADD. ASP', 'RAB-11', 'OPERATION OFFICER /MTO', 'CO', 'BATTALION HQ', '1777711103', 'mto11@rab.gov.bd', 'ACTIVE', '0000-00-00 00:00:00', 1),
(6, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'MD NAHID HASAN JONI', 'ADD. ASP', 'RAB-11', 'COMPANY COMMANDER CPC-1', 'CO', 'CPC-1', '1777711111', 'company commander cpc-111@rab.gov.bd', 'ACTIVE', '0000-00-00 00:00:00', 1),
(7, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'SYED ARIFUR RAHMAN', 'MAJOR', 'RAB-11', 'COMPANY COMMANDER CPC-2', 'CO', 'CPC-2', '1777711122', 'company commander cpc-211@rab.gov.bd', 'ACTIVE', '0000-00-00 00:00:00', 1),
(8, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'NARESH CHAKMA', 'ADD. ASP', 'RAB-11', 'COMPANY COMMANDER CPC-3', 'CO', 'CPC-3', '1777711133', 'company commander cpc-311@rab.gov.bd', 'SUSPENDED', '0000-00-00 00:00:00', 1),
(9, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'SHAH MD MOSHIUR RAHMAN', 'ASP', 'RAB-11', 'LAW OFFICER', 'CO', 'BATTALION HQ', '1777711107', 'law officer11@rab.gov.bd', 'ACTIVE', '0000-00-00 00:00:00', 1),
(10, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'SARWAR BIN KASHEM, PSC, AC', 'LIEUTENANT COLONEL', 'RAB-1', 'CO', 'ADG, OPERATIONS', 'BATTALION HQ', '1777710100', 'co1@rab.gov.bd', 'ACTIVE', '0000-00-00 00:00:00', 1),
(11, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'ISTIAQUE AHMED, AC', 'MAJOR', 'RAB-1', '2IC', 'CO', 'BATTALION HQ', '1777710101', '2ic1@rab.gov.bd', 'ACTIVE', '0000-00-00 00:00:00', 1),
(12, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'MD MUHIT KABIR SERNIABAT', 'SR. ASP', 'RAB-1', 'ADJUTANT', 'CO', 'BATTALION HQ', '1777710102', 'adjutant1@rab.gov.bd', 'SUSPENDED', '0000-00-00 00:00:00', 1),
(13, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'MD MOHIUL ISLAM', 'ADD. SP', 'RAB-1', 'INTELLIGENCE OFFICER', 'CO', 'BATTALION HQ', '1777710144', 'intelligence officer1@rab.gov.bd', 'ACTIVE', '0000-00-00 00:00:00', 1),
(14, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'SAMIA SULTANA', 'SR. ASP', 'RAB-1', 'OPERATION OFFICER /MTO', 'CO', 'BATTALION HQ', '1777710103', 'mto1@rab.gov.bd', 'ACTIVE', '0000-00-00 00:00:00', 1),
(15, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'ISTIAQUE AHMED, AC', 'MAJOR', 'RAB-1', 'COMPANY COMMANDER CPC-1', 'CO', 'CPC-1', '1777710111', 'company commander cpc-11@rab.gov.bd', 'ACTIVE', '0000-00-00 00:00:00', 1),
(16, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'MONZUR MEHDI ISLAM', 'MAJOR', 'RAB-1', 'COMPANY COMMANDER CPC-2', 'CO', 'CPC-2', '1777710155', 'company commander cpc-21@rab.gov.bd', 'SUSPENDED', '0000-00-00 00:00:00', 1),
(17, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'MD ABDUL HNIF', 'ADD. SP', 'RAB-1', 'COMPANY COMMANDER CPC-3', 'CO', 'CPC-3', '1777710133', 'company commander cpc-31@rab.gov.bd', 'ACTIVE', '0000-00-00 00:00:00', 1),
(18, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'KAMAL UDDIN', 'ADD. SP', 'RAB-1', 'LAW OFFICER', 'CO', 'BATTALION HQ', '1777710122', 'law officer1@rab.gov.bd', 'SUSPENDED', '0000-00-00 00:00:00', 1),
(19, '', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 'DEMO User', 'ADD. SP', 'RAB-1', 'LAW OFFICER', 'CO', 'BATTALION HQ', '1777710122', 'demo@jhorotek.com', 'ACTIVE', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cellsite`
--

CREATE TABLE `tbl_cellsite` (
  `id` int(12) NOT NULL,
  `site_name` varchar(50) NOT NULL,
  `lac_id` varchar(12) NOT NULL,
  `cell_name` int(50) NOT NULL,
  `cell_id` varchar(20) NOT NULL,
  `laccellid` varchar(50) NOT NULL,
  `antenna_direction` float NOT NULL,
  `cell_beamspan` varchar(12) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cellsite`
--

INSERT INTO `tbl_cellsite` (`id`, `site_name`, `lac_id`, `cell_name`, `cell_id`, `laccellid`, `antenna_direction`, `cell_beamspan`, `cell_beamrange`, `latitude`, `longitude`, `site_address`, `union_ward`, `thana`, `district`, `division`, `bts_type`, `operator`, `cell_type_2g_3g`, `createat`, `updateat`) VALUES
(1, 'BAR_B0214', '607', 0, '62134', '60762134', 0, '', '500', '22.70536', '90.37125', 'Hotel Athena, katpatti Road, barisal', 'Galua bazar', 'Test', 'Barguna', 'Barisal', 'Mini', 'GRAMEENPHONE', '2G', '2017-12-11 07:14:19', '2017-12-12 07:14:45'),
(2, 'BAR_B0467', '606', 0, '64664', '60664664', 0, '', '500', '22.15183', '90.13099', 'RDF Tower, Police line, Barguna Sadar, Barguna', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Mini', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(3, 'BAR_G0057', '607', 0, '60561', '60760561', 0, '', '500', '23.7526', '90.3792', 'Shathi Neer, Opposite of Textile College, C&B road, Barisal Sadar, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-13 08:30:50'),
(4, 'BAR_G0057', '607', 0, '60562', '60760562', 200, '', '500', '22.70655', '90.35217', 'Shathi Neer, Opposite of Textile College, C&B road, Barisal Sadar, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(5, 'BAR_G0057', '607', 0, '60563', '60760563', 340, '', '500', '22.70655', '90.35217', 'Shathi Neer, Opposite of Textile College, C&B road, Barisal Sadar, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(6, 'BAR_G0113', '607', 0, '61121', '60761121', 10, '', '500', '22.71322', '90.35689', 'Mosjid gate, BM college,  Barisal sadar, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(7, 'BAR_G0113', '607', 0, '61122', '60761122', 120, '', '500', '22.71322', '90.35689', 'Mosjid gate, BM college,  Barisal sadar, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(8, 'BAR_G0113', '607', 0, '61123', '60761123', 220, '', '500', '22.71322', '90.35689', 'Mosjid gate, BM college,  Barisal sadar, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(9, 'BAR_G0259', '605', 0, '62581', '60562581', 0, '', '500', '22.486389', '90.198194', 'Bakerganj,Barishal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(10, 'BAR_G0259', '605', 0, '62582', '60562582', 120, '', '500', '22.486389', '90.198194', 'Bakerganj,Barishal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(11, 'BAR_G0259', '605', 0, '62583', '60562583', 210, '', '500', '22.486389', '90.198194', 'Bakerganj,Barishal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(12, 'BAR_G0259', '605', 0, '62584', '60562584', 0, '', '500', '22.486389', '90.198194', 'Bakerganj,Barishal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(13, 'BAR_G0259', '605', 0, '62586', '60562586', 210, '', '500', '22.486389', '90.198194', 'Bakerganj,Barishal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(14, 'BAR_G0260', '606', 0, '62591', '60662591', 20, '', '500', '21.985861', '90.084972', 'Taltoli, Amtali, Barguna', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(15, 'BAR_G0260', '606', 0, '62592', '60662592', 110, '', '500', '21.985861', '90.084972', 'Taltoli, Amtali, Barguna', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(16, 'BAR_G0260', '606', 0, '62593', '60662593', 210, '', '500', '23.7626', '90.3892', 'Taltoli, Amtali, Barguna', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(17, 'BAR_G0260', '606', 0, '62594', '60662594', 20, '', '500', '21.985861', '90.084972', 'Taltoli, Amtali, Barguna', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(18, 'BAR_G0260', '606', 0, '62595', '60662595', 110, '', '500', '21.985861', '90.084972', 'Taltoli, Amtali, Barguna', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(19, 'BAR_G0260', '606', 0, '62596', '60662596', 210, '', '500', '21.985861', '90.084972', 'Taltoli, Amtali, Barguna', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(20, 'BAR_G0261', '601', 0, '62601', '60162601', 10, '', '500', '22.698864', '89.993446', 'Sreeramkati Bazar,Nazirpur,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(21, 'BAR_G0261', '601', 0, '62602', '60162602', 140, '', '500', '22.698864', '89.993446', 'Sreeramkati Bazar,Nazirpur,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(22, 'BAR_G0261', '601', 0, '62603', '60162603', 240, '', '500', '22.698864', '89.993446', 'Sreeramkati Bazar,Nazirpur,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(23, 'BAR_G0261', '601', 0, '62605', '60162605', 140, '', '500', '22.698864', '89.993446', 'Sreeramkati Bazar,Nazirpur,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(24, 'BAR_G0263', '613', 0, '62621', '61362621', 340, '', '500', '22.85689', '90.60793', 'Ulania Bazar, Mehendiganj, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(25, 'BAR_G0263', '613', 0, '62622', '61362622', 130, '', '500', '22.85689', '90.60793', 'Ulania Bazar, Mehendiganj, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(26, 'BAR_G0263', '613', 0, '62623', '61362623', 230, '', '500', '22.85689', '90.60793', 'Ulania Bazar, Mehendiganj, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(27, 'BAR_G0263', '613', 0, '62624', '61362624', 340, '', '500', '22.85689', '90.60793', 'Ulania Bazar, Mehendiganj, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(28, 'BAR_G0263', '613', 0, '62625', '61362625', 130, '', '500', '22.85689', '90.60793', 'Ulania Bazar, Mehendiganj, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(29, 'BAR_G0265', '606', 0, '62641', '60662641', 0, '', '500', '22.15456', '90.11183', 'Dr. Alauddin Ahmed, K P Road,Barguna Sadar, Barguna', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(30, 'BAR_G0265', '606', 0, '62642', '60662642', 120, '', '500', '22.15456', '90.11183', 'Dr. Alauddin Ahmed, K P Road,Barguna Sadar, Barguna', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(31, 'BAR_G0265', '606', 0, '62643', '60662643', 250, '', '500', '22.15456', '90.11183', 'Dr. Alauddin Ahmed, K P Road,Barguna Sadar, Barguna', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(32, 'BAR_G0265', '606', 0, '62644', '60662644', 0, '', '500', '22.15456', '90.11183', 'Dr. Alauddin Ahmed, K P Road,Barguna Sadar, Barguna', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(33, 'BAR_G0265', '606', 0, '62645', '60662645', 120, '', '500', '22.15456', '90.11183', 'Dr. Alauddin Ahmed, K P Road,Barguna Sadar, Barguna', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(34, 'BAR_G0265', '606', 0, '62646', '60662646', 250, '', '500', '22.15456', '90.11183', 'Dr. Alauddin Ahmed, K P Road,Barguna Sadar, Barguna', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(35, 'BAR_G0266', '609', 0, '62651', '60962651', 10, '', '500', '22.33466', '90.73387', 'Syed Howlader Bari", Ward No. 5, Langolkhati Sorok, P.S: Lalmohon, Bhola. ', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(36, 'BAR_G0266', '609', 0, '62652', '60962652', 130, '', '500', '22.33466', '90.73387', 'Syed Howlader Bari", Ward No. 5, Langolkhati Sorok, P.S: Lalmohon, Bhola. ', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(37, 'BAR_G0266', '609', 0, '62653', '60962653', 230, '', '500', '22.33466', '90.73387', 'Syed Howlader Bari", Ward No. 5, Langolkhati Sorok, P.S: Lalmohon, Bhola. ', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(38, 'BAR_G0266', '609', 0, '62654', '60962654', 10, '', '500', '22.33466', '90.73387', 'Syed Howlader Bari", Ward No. 5, Langolkhati Sorok, P.S: Lalmohon, Bhola. ', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(39, 'BAR_G0266', '609', 0, '62655', '60962655', 130, '', '500', '22.33466', '90.73387', 'Syed Howlader Bari", Ward No. 5, Langolkhati Sorok, P.S: Lalmohon, Bhola. ', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(40, 'BAR_G0266', '609', 0, '62656', '60962656', 230, '', '500', '22.33466', '90.73387', 'Syed Howlader Bari", Ward No. 5, Langolkhati Sorok, P.S: Lalmohon, Bhola. ', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(41, 'BAR_G0269', '612', 0, '60881', '61260881', 10, '', '500', '22.43551', '89.89752', 'pather hat,balipara,gianagar,patuakhali', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(42, 'BAR_G0269', '612', 0, '60882', '61260882', 100, '', '500', '22.43551', '89.89752', 'pather hat,balipara,gianagar,patuakhali', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(43, 'BAR_G0269', '612', 0, '60883', '61260883', 240, '', '500', '22.43551', '89.89752', 'pather hat,balipara,gianagar,patuakhali', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(44, 'BAR_G0269', '612', 0, '60884', '61260884', 10, '', '500', '22.43551', '89.89752', 'pather hat,balipara,gianagar,patuakhali', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(45, 'BAR_G0269', '612', 0, '60885', '61260885', 100, '', '500', '22.43551', '89.89752', 'pather hat,balipara,gianagar,patuakhali', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(46, 'BAR_G0269', '612', 0, '60886', '61260886', 240, '', '500', '22.43551', '89.89752', 'pather hat,balipara,gianagar,patuakhali', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(47, 'BAR_G0272', '607', 0, '62711', '60762711', 90, '', '500', '22.7127', '90.34794', 'Sherebangla chatok,choitpur,Borisal sadar,Borisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(48, 'BAR_G0272', '607', 0, '62712', '60762712', 210, '', '500', '22.7127', '90.34794', 'Sherebangla chatok,choitpur,Borisal sadar,Borisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(49, 'BAR_G0272', '607', 0, '62713', '60762713', 330, '', '500', '22.7127', '90.34794', 'Sherebangla chatok,choitpur,Borisal sadar,Borisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(50, 'BAR_G0273', '605', 0, '62721', '60562721', 350, '', '500', '22.57449', '90.33897', 'Boalia hat,boalia,Bakerganj,Barishal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(51, 'BAR_G0273', '605', 0, '62722', '60562722', 100, '', '500', '22.57449', '90.33897', 'Boalia hat,boalia,Bakerganj,Barishal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(52, 'BAR_G0273', '605', 0, '62723', '60562723', 230, '', '500', '22.57449', '90.33897', 'Boalia hat,boalia,Bakerganj,Barishal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(53, 'BAR_G0274', '603', 0, '62731', '60362731', 0, '', '500', '22.97041', '90.0855', 'Paisa,Agailjara,Borisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(54, 'BAR_G0274', '603', 0, '62732', '60362732', 130, '', '500', '22.97041', '90.0855', 'Paisa,Agailjara,Borisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(55, 'BAR_G0274', '603', 0, '62733', '60362733', 250, '', '500', '22.97041', '90.0855', 'Paisa,Agailjara,Borisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(56, 'BAR_G0274', '603', 0, '62734', '60362734', 0, '', '500', '22.97041', '90.0855', 'Paisa,Agailjara,Borisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(57, 'BAR_G0274', '603', 0, '62735', '60362735', 130, '', '500', '22.97041', '90.0855', 'Paisa,Agailjara,Borisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(58, 'BAR_G0274', '603', 0, '62736', '60362736', 250, '', '500', '22.97041', '90.0855', 'Paisa,Agailjara,Borisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(59, 'BAR_G0275', '613', 0, '62741', '61362741', 0, '', '500', '22.96613889', '90.46105556', 'Hori Narayanpur Bazar, Hijla, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(60, 'BAR_G0275', '613', 0, '62742', '61362742', 0, '', '500', '22.96613889', '90.46105556', 'Hori Narayanpur Bazar, Hijla, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(61, 'BAR_G0275', '613', 0, '62743', '61362743', 0, '', '500', '22.96613889', '90.46105556', 'Hori Narayanpur Bazar, Hijla, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(62, 'BAR_G0275', '613', 0, '62744', '61362744', 0, '', '500', '22.96613889', '90.46105556', 'Hori Narayanpur Bazar, Hijla, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(63, 'BAR_G0275', '613', 0, '62745', '61362745', 0, '', '500', '22.96613889', '90.46105556', 'Hori Narayanpur Bazar, Hijla, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(64, 'BAR_G0275', '613', 0, '62746', '61362746', 0, '', '500', '22.96613889', '90.46105556', 'Hori Narayanpur Bazar, Hijla, Barisal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(65, 'BAR_G0276', '606', 0, '62751', '60662751', 20, '', '500', '21.86119', '90.12556', 'kalapara,patuakhali', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(66, 'BAR_G0276', '606', 0, '62752', '60662752', 130, '', '500', '21.86119', '90.12556', 'kalapara,patuakhali', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(67, 'BAR_G0276', '606', 0, '62753', '60662753', 250, '', '500', '21.86119', '90.12556', 'kalapara,patuakhali', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(68, 'BAR_G0276', '606', 0, '62754', '60662754', 20, '', '500', '21.86119', '90.12556', 'kalapara,patuakhali', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(69, 'BAR_G0276', '606', 0, '62755', '60662755', 130, '', '500', '21.86119', '90.12556', 'kalapara,patuakhali', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(70, 'BAR_G0276', '606', 0, '62756', '60662756', 250, '', '500', '21.86119', '90.12556', 'kalapara,patuakhali', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(71, 'BAR_G0277', '612', 0, '62761', '61262761', 0, '', '500', '22.29135', '89.95878', 'Mathbaria,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(72, 'BAR_G0277', '612', 0, '62762', '61262762', 120, '', '500', '22.29135', '89.95878', 'Mathbaria,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(73, 'BAR_G0277', '612', 0, '62763', '61262763', 240, '', '500', '22.29135', '89.95878', 'Mathbaria,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(74, 'BAR_G0277', '612', 0, '62764', '61262764', 0, '', '500', '22.29135', '89.95878', 'Mathbaria,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(75, 'BAR_G0277', '612', 0, '62765', '61262765', 120, '', '500', '22.29135', '89.95878', 'Mathbaria,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(76, 'BAR_G0277', '612', 0, '62766', '61262766', 240, '', '500', '22.29135', '89.95878', 'Mathbaria,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(77, 'BAR_G0281', '605', 0, '62801', '60562801', 10, '', '500', '22.560944', '90.479', 'Kakorda Bazar, Thana: Bakergonj, District: Barisal. ', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(78, 'BAR_G0281', '605', 0, '62802', '60562802', 130, '', '500', '22.560944', '90.479', 'Kakorda Bazar, Thana: Bakergonj, District: Barisal. ', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(79, 'BAR_G0281', '605', 0, '62803', '60562803', 260, '', '500', '22.560944', '90.479', 'Kakorda Bazar, Thana: Bakergonj, District: Barisal. ', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(80, 'BAR_G0281', '605', 0, '62804', '60562804', 10, '', '500', '22.560944', '90.479', 'Kakorda Bazar, Thana: Bakergonj, District: Barisal. ', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(81, 'BAR_G0281', '605', 0, '62806', '60562806', 260, '', '500', '22.560944', '90.479', 'Kakorda Bazar, Thana: Bakergonj, District: Barisal. ', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(82, 'BAR_G0282', '601', 0, '62811', '60162811', 350, '', '500', '22.766972', '89.953222', 'Purbo Baniari, Najirpur,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(83, 'BAR_G0282', '601', 0, '62812', '60162812', 100, '', '500', '22.766972', '89.953222', 'Purbo Baniari, Najirpur,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(84, 'BAR_G0282', '601', 0, '62813', '60162813', 260, '', '500', '22.766972', '89.953222', 'Purbo Baniari, Najirpur,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(85, 'BAR_G0282', '601', 0, '62814', '60162814', 350, '', '500', '22.766972', '89.953222', 'Purbo Baniari, Najirpur,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(86, 'BAR_G0282', '601', 0, '62815', '60162815', 100, '', '500', '22.766972', '89.953222', 'Purbo Baniari, Najirpur,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(87, 'BAR_G0282', '601', 0, '62816', '60162816', 260, '', '500', '22.766972', '89.953222', 'Purbo Baniari, Najirpur,Pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(88, 'BAR_G0283', '603', 0, '62821', '60362821', 0, '', '500', '23.01258', '90.16136', 'BHSAIL BAZAR ,RAJIHER,AGAILJHARA,barishal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(89, 'BAR_G0283', '603', 0, '62822', '60362822', 130, '', '500', '23.01258', '90.16136', 'BHSAIL BAZAR ,RAJIHER,AGAILJHARA,barishal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(90, 'BAR_G0283', '603', 0, '62823', '60362823', 240, '', '500', '23.01258', '90.16136', 'BHSAIL BAZAR ,RAJIHER,AGAILJHARA,barishal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(91, 'BAR_G0283', '603', 0, '62824', '60362824', 0, '', '500', '23.01258', '90.16136', 'BHSAIL BAZAR ,RAJIHER,AGAILJHARA,barishal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(92, 'BAR_G0283', '603', 0, '62825', '60362825', 130, '', '500', '23.01258', '90.16136', 'BHSAIL BAZAR ,RAJIHER,AGAILJHARA,barishal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(93, 'BAR_G0283', '603', 0, '62826', '60362826', 240, '', '500', '23.01258', '90.16136', 'BHSAIL BAZAR ,RAJIHER,AGAILJHARA,barishal', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(94, 'BAR_G0284', '612', 0, '62831', '61262831', 0, '', '500', '22.53925', '89.987861', 'molla bari,shankar pasha,pirojpur sadar,pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(95, 'BAR_G0284', '612', 0, '62832', '61262832', 110, '', '500', '22.53925', '89.987861', 'molla bari,shankar pasha,pirojpur sadar,pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(96, 'BAR_G0284', '612', 0, '62833', '61262833', 260, '', '500', '22.53925', '89.987861', 'molla bari,shankar pasha,pirojpur sadar,pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(97, 'BAR_G0284', '612', 0, '62834', '61262834', 0, '', '500', '22.53925', '89.987861', 'molla bari,shankar pasha,pirojpur sadar,pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(98, 'BAR_G0284', '612', 0, '62835', '61262835', 110, '', '500', '22.53925', '89.987861', 'molla bari,shankar pasha,pirojpur sadar,pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(99, 'BAR_G0284', '612', 0, '62836', '61262836', 260, '', '500', '22.53925', '89.987861', 'molla bari,shankar pasha,pirojpur sadar,pirojpur', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58'),
(100, 'BAR_G0285', '612', 0, '62841', '61262841', 340, '', '500', '22.51902', '90.10921', 'Galua bazar, Rajapur, Jhalakati', 'Galua bazar', 'Bakerganj', 'Barguna', 'Barisal', 'Regular', 'BANGLALINK', '2G', '2017-12-11 07:14:19', '2017-12-11 11:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_groupinfo`
--

CREATE TABLE `tbl_groupinfo` (
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

CREATE TABLE `tbl_groupmember` (
  `id` int(12) NOT NULL,
  `groupid` int(12) NOT NULL,
  `userid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotlist`
--

CREATE TABLE `tbl_hotlist` (
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
-- Table structure for table `tbl_internal_hotlist`
--

CREATE TABLE `tbl_internal_hotlist` (
  `id` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `wing` varchar(50) NOT NULL,
  `apt_name` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `seviarity` int(3) NOT NULL,
  `email_alert` varchar(50) NOT NULL,
  `sms_alert` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `ref_createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ref_createby` int(12) NOT NULL,
  `ref_modifiedby` int(12) NOT NULL,
  `ref_modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_internal_hotlist`
--

INSERT INTO `tbl_internal_hotlist` (`id`, `name`, `rank`, `wing`, `apt_name`, `contact_no`, `seviarity`, `email_alert`, `sms_alert`, `status`, `ref_createat`, `ref_createby`, `ref_modifiedby`, `ref_modifieddate`) VALUES
(1, 'Shamim Ahammed', 'rank', 'wing', 'apt', 'cont', 5, 'email', 'sms', '0', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(2, 'MD KAMRUL HASAN, PSC', 'LIEUTENANT COLONEL', 'RAB-11', 'CO', '8801914175176', 4, 'opshq@rab.gov.bd', '1777710000', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(3, 'MD KAMRUL HASAN, PSC', 'LIEUTENANT COLONEL', 'RAB-11', 'CO', '8801914175177', 3, 'opshq@rab.gov.bd', '1777710000', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(4, 'MD KAMRUL HASAN, PSC', 'LIEUTENANT COLONEL', 'RAB-11', 'CO', '8801914175178', 2, 'opshq@rab.gov.bd', '1777710000', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(5, 'MD KAMRUL HASAN, PSC', 'LIEUTENANT COLONEL', 'RAB-11', 'CO', '8801914175179', 1, 'opshq@rab.gov.bd', '1777710000', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(6, 'SAMIA SULTANA', 'SR. ASP', 'RAB-1', 'OPERATION OFFICER /MTO', '8801914175180', 5, 'co1@rab.gov.bd', '1777710100', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(7, 'SAMIA SULTANA', 'SR. ASP', 'RAB-1', 'OPERATION OFFICER /MTO', '8801914175181', 4, 'co1@rab.gov.bd', '1777710100', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(8, 'SAMIA SULTANA', 'SR. ASP', 'RAB-1', 'OPERATION OFFICER /MTO', '8801914175182', 3, 'co1@rab.gov.bd', '1777710100', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(9, 'SAMIA SULTANA', 'SR. ASP', 'RAB-1', 'OPERATION OFFICER /MTO', '8801914175183', 2, 'co1@rab.gov.bd', '1777710100', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(10, 'SAMIA SULTANA', 'SR. ASP', 'RAB-1', 'OPERATION OFFICER /MTO', '8801914175184', 1, 'co1@rab.gov.bd', '1777710100', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(11, '', '', '', '', '8801914175185', 0, '', '', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reportchain`
--

CREATE TABLE `tbl_reportchain` (
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

CREATE TABLE `tbl_requestdetails` (
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

CREATE TABLE `tbl_requestinfo` (
  `id` int(12) NOT NULL,
  `reqid` int(12) NOT NULL,
  `owner` int(12) NOT NULL,
  `details` varchar(512) NOT NULL,
  `options` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_requestlogs`
--

CREATE TABLE `tbl_requestlogs` (
  `id` int(11) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `source_url` varchar(512) DEFAULT NULL,
  `laccellid` varchar(20) DEFAULT NULL,
  `bts` varchar(20) DEFAULT NULL,
  `lac` varchar(20) DEFAULT NULL,
  `thana` varchar(50) DEFAULT NULL,
  `operator` varchar(20) DEFAULT NULL,
  `request_for` varchar(50) DEFAULT NULL,
  `cellid` varchar(50) DEFAULT NULL,
  `latitude` varchar(30) DEFAULT NULL,
  `longitude` varchar(30) DEFAULT NULL,
  `area_range` varchar(12) DEFAULT NULL,
  `createat` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_requestlogs`
--

INSERT INTO `tbl_requestlogs` (`id`, `user_id`, `source_url`, `laccellid`, `bts`, `lac`, `thana`, `operator`, `request_for`, `cellid`, `latitude`, `longitude`, `area_range`, `createat`) VALUES
(1, '19', 'http://utility.jhorotek.com/rialto/RequestLogs/storeLogs', '', 'BAR_B0214', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, NULL, '2017-12-13 20:06:25'),
(2, '19', 'http://utility.jhorotek.com/rialto/RequestLogs/storeLogs', '', 'BAR_G0057', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, NULL, '2017-12-13 23:59:11'),
(3, '19', 'http://utility.jhorotek.com/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'Badda', 'BANGLALINK', NULL, NULL, '', '', '', '2017-12-18 19:01:46'),
(4, '19', 'http://utility.jhorotek.com/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'Bakerganj,', 'BANGLALINK', NULL, NULL, '', '', '', '2017-12-18 19:02:04'),
(5, '19', 'http://utility.jhorotek.com/rialto/RequestLogs/storeLogs', '60664664', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, NULL, '2017-12-30 16:50:36'),
(6, '19', 'http://utility.jhorotek.com/rialto/RequestLogs/storeLogs', '', 'DHK_U1992', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, NULL, '2017-12-30 16:55:00'),
(7, '19', 'http://utility.jhorotek.com/rialto/RequestLogs/storeLogs', '', '', '', 'Bakerganj', 'BANGLALINK', NULL, NULL, NULL, NULL, NULL, '2017-12-30 16:55:54'),
(8, '19', 'http://utility.jhorotek.com/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, 'ROBI', NULL, '61121,61121,', NULL, NULL, NULL, '2017-12-30 17:03:25'),
(9, '19', 'http://utility.jhorotek.com/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, 'ROBI', NULL, '61121,61121,', NULL, NULL, NULL, '2017-12-30 17:04:00'),
(10, '19', 'http://utility.jhorotek.com/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, 'ROBI', NULL, '61121,61121,', NULL, NULL, NULL, '2017-12-30 17:04:58'),
(11, '19', 'http://utility.jhorotek.com/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'ROBI', NULL, NULL, '', '', '3000', '2017-12-30 17:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_req_mno_msisdn`
--

CREATE TABLE `tbl_req_mno_msisdn` (
  `id` int(20) NOT NULL,
  `transacttion_id` varchar(50) NOT NULL,
  `request_id` varchar(50) NOT NULL,
  `user_generated_by` int(12) NOT NULL,
  `user_designation` varchar(50) NOT NULL,
  `user_appointment` varchar(50) NOT NULL,
  `user_placement` varchar(50) NOT NULL,
  `date_requested` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `request_status` varchar(50) NOT NULL,
  `target_device` varchar(50) NOT NULL,
  `msisdn` varchar(30) NOT NULL,
  `mno_operator` varchar(50) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `self_user` varchar(5) NOT NULL,
  `requested_by` varchar(12) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `info_demographic` varchar(50) NOT NULL,
  `appointment` varchar(50) NOT NULL,
  `placement` varchar(50) NOT NULL,
  `reason_crime_type` varchar(50) NOT NULL,
  `reason_crime_subtype` varchar(50) NOT NULL,
  `remarks_reference` varchar(500) NOT NULL,
  `cdr_voice_sms` varchar(5) NOT NULL,
  `gprs_data` varchar(5) NOT NULL,
  `info_fnf` int(50) NOT NULL,
  `info_subs` int(50) NOT NULL,
  `info_mfs` varchar(50) NOT NULL,
  `info_scaned_pp` varchar(50) NOT NULL,
  `recharge` varchar(5) NOT NULL,
  `used_imei` varchar(5) NOT NULL,
  `ipdr` varchar(5) NOT NULL,
  `info_ussd` varchar(5) NOT NULL,
  `registration` varchar(5) NOT NULL,
  `nid_pp` varchar(5) NOT NULL,
  `last_status` varchar(20) DEFAULT NULL,
  `last_updated_by` varchar(20) DEFAULT NULL,
  `last_updated_date` datetime DEFAULT NULL,
  `internal_control_status` varchar(20) DEFAULT '0',
  `external_control_status` varchar(20) DEFAULT '0',
  `hot_list_msisdn_status` varchar(20) DEFAULT '0',
  `rerequest_msisdn_status` varchar(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_req_mno_msisdn`
--

INSERT INTO `tbl_req_mno_msisdn` (`id`, `transacttion_id`, `request_id`, `user_generated_by`, `user_designation`, `user_appointment`, `user_placement`, `date_requested`, `request_status`, `target_device`, `msisdn`, `mno_operator`, `date_start`, `date_end`, `self_user`, `requested_by`, `designation`, `info_demographic`, `appointment`, `placement`, `reason_crime_type`, `reason_crime_subtype`, `remarks_reference`, `cdr_voice_sms`, `gprs_data`, `info_fnf`, `info_subs`, `info_mfs`, `info_scaned_pp`, `recharge`, `used_imei`, `ipdr`, `info_ussd`, `registration`, `nid_pp`, `last_status`, `last_updated_by`, `last_updated_date`, `internal_control_status`, `external_control_status`, `hot_list_msisdn_status`, `rerequest_msisdn_status`) VALUES
(1, '20171230121913751', '20171230121913751', 19, 'ADD. SP', 'LAW OFFICER', 'BATTALION HQ', '2017-12-30 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'on', '', '', 'on', '', '', '', '', '', 'on', 'on', 0, 0, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '', '19', NULL, '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statuses`
--

CREATE TABLE `tbl_statuses` (
  `id` int(2) NOT NULL,
  `status` int(12) NOT NULL,
  `statusdetails` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userinfo`
--

CREATE TABLE `tbl_userinfo` (
  `userhash` varchar(32) NOT NULL,
  `userid` int(12) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `accesslevel` int(12) NOT NULL,
  `createat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`userhash`, `userid`, `username`, `password`, `email`, `accesslevel`, `createat`, `updateat`) VALUES
('1234', 1, 'Rialto', '202cb962ac59075b964b07152d234b70', 'demo@jhorotek.com', 1, '2017-11-18 16:20:03', '2017-12-28 12:51:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_authorizedofficers`
--
ALTER TABLE `tbl_authorizedofficers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_internal_hotlist`
--
ALTER TABLE `tbl_internal_hotlist`
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
-- Indexes for table `tbl_requestlogs`
--
ALTER TABLE `tbl_requestlogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_req_mno_msisdn`
--
ALTER TABLE `tbl_req_mno_msisdn`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tbl_authorizedofficers`
--
ALTER TABLE `tbl_authorizedofficers`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_cellsite`
--
ALTER TABLE `tbl_cellsite`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `tbl_internal_hotlist`
--
ALTER TABLE `tbl_internal_hotlist`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_requestlogs`
--
ALTER TABLE `tbl_requestlogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_req_mno_msisdn`
--
ALTER TABLE `tbl_req_mno_msisdn`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  MODIFY `userid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
