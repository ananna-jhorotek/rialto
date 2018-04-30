-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 06:20 AM
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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointments_id` int(11) NOT NULL,
  `battalions_id` int(11) NOT NULL,
  `appointment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointments_id`, `battalions_id`, `appointment`) VALUES
(1, 1, 'CPC-1'),
(2, 1, 'CPC-2'),
(3, 15, 'Others'),
(4, 1, 'CPC-3'),
(5, 2, 'CPC-1'),
(6, 2, 'CPC-2'),
(7, 2, 'CPC-3'),
(8, 1, 'BATTALION HQ'),
(9, 16, 'IMMC CELL'),
(10, 16, 'ANTI-TERRORISM'),
(11, 16, 'ANTI-EXTREMIST'),
(12, 16, 'INT WING HQ');

-- --------------------------------------------------------

--
-- Table structure for table `battalions`
--

CREATE TABLE `battalions` (
  `battalions_id` int(11) NOT NULL,
  `wings_id` int(11) NOT NULL,
  `battalion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `battalions`
--

INSERT INTO `battalions` (`battalions_id`, `wings_id`, `battalion`) VALUES
(1, 13, 'RAB-1'),
(2, 13, 'RAB-2'),
(3, 13, 'RAB-3'),
(4, 13, 'RAB-4'),
(5, 13, 'RAB-5'),
(6, 13, 'RAB-6'),
(7, 13, 'RAB-7'),
(8, 13, 'RAB-8'),
(9, 13, 'RAB-9'),
(10, 13, 'RAB-10'),
(11, 13, 'RAB-11'),
(12, 13, 'RAB-12'),
(13, 13, 'RAB-13'),
(14, 13, 'RAB-14'),
(15, 14, 'Others'),
(16, 10, 'INT WING HQ');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `configid` int(11) NOT NULL,
  `project_id` varchar(255) NOT NULL,
  `title_of_org_eng` varchar(255) NOT NULL,
  `title_of_org_bng` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name_of_system` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `fav_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`configid`, `project_id`, `title_of_org_eng`, `title_of_org_bng`, `name_of_system`, `logo`, `fav_icon`) VALUES
(1, '', 'IMMC Monitoring and Management System', 'JhoroTek', 'IMMC Monitoring and Management System', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `dashboard_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`dashboard_id`, `title`) VALUES
(1, 'New'),
(2, 'Pending'),
(3, 'Completed'),
(4, 'Document'),
(6, 'Verified'),
(7, 'Summery');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_access`
--

CREATE TABLE `dashboard_access` (
  `dashboard_access_id` int(11) NOT NULL,
  `dashboard_id` int(11) NOT NULL,
  `roleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard_access`
--

INSERT INTO `dashboard_access` (`dashboard_access_id`, `dashboard_id`, `roleid`) VALUES
(13, 6, 6),
(32, 1, 7),
(33, 2, 7),
(34, 3, 7),
(35, 4, 7),
(43, 1, 3),
(44, 2, 3),
(45, 3, 3),
(46, 4, 3),
(47, 1, 4),
(48, 2, 4),
(49, 3, 4),
(50, 4, 4),
(51, 1, 2),
(52, 2, 2),
(53, 3, 2),
(54, 4, 2),
(55, 6, 2),
(56, 7, 2),
(57, 1, 1),
(58, 2, 1),
(59, 3, 1),
(60, 4, 1),
(61, 6, 1),
(62, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `designations_id` int(11) NOT NULL,
  `appointments_id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`designations_id`, `appointments_id`, `designation`) VALUES
(1, 2, 'Tests'),
(2, 1, 'Commanding Officers'),
(3, 3, 'Others'),
(4, 1, 'Second in Command '),
(5, 1, 'Adjutant '),
(6, 1, 'Operations Officer'),
(7, 1, 'Intelligence Officer'),
(8, 1, 'Ration & Logistic Officer'),
(9, 1, 'Medical Officer'),
(10, 1, 'Company Commander Headquarters '),
(11, 1, 'Company Commander Special '),
(12, 1, 'Duty Officer'),
(13, 2, 'Duty Officer'),
(14, 2, 'Commanding Officer'),
(15, 2, 'Second in Command'),
(16, 2, 'Intelligence Officer'),
(17, 1, 'Intelligence Officer'),
(18, 2, 'Medical Officer'),
(19, 2, 'Company Commander'),
(20, 5, 'Commanding Officers'),
(21, 5, 'Second in Command'),
(22, 5, 'Operations Officer'),
(23, 5, 'Adjutant'),
(24, 5, 'Operations Officer'),
(25, 5, 'Intelligence Officer'),
(26, 5, 'Company Commander Headquarters'),
(27, 8, 'Commanding Officers'),
(28, 9, 'PEON'),
(29, 9, 'DAD'),
(30, 9, 'Commanding Officer'),
(31, 12, 'Director - INT'),
(32, 9, 'PION');

-- --------------------------------------------------------

--
-- Table structure for table `function`
--

CREATE TABLE `function` (
  `function_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `function` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function`
--

INSERT INTO `function` (`function_id`, `title`, `controller`, `function`) VALUES
(1, 'admin dashboard', 'dashboards', 'admin_dashboard'),
(2, 'Create user', 'settings', 'create_user'),
(3, 'User list', 'settings', 'user_list'),
(4, 'create_menu', 'settings', 'create_menu'),
(5, 'Menu List', 'settings', 'menu_list'),
(6, 'Create Function', 'settings', 'create_function'),
(7, 'Function List', 'settings', 'function_list'),
(8, 'Menu Priority', 'settings', 'menu_priority'),
(9, 'Role List', 'settings', 'role_list'),
(10, 'Change Password', 'settings', 'change_password'),
(11, 'Save User', 'settings', 'save_user'),
(12, 'Edit User page', 'settings', 'edit_user_page'),
(13, 'Update User', 'settings', 'update_user'),
(14, 'User List', 'settings', 'user_list'),
(16, 'Submit Change Passowrd', 'settings', 'submit_change_password'),
(17, 'User Delete', 'settings', 'user_delete'),
(18, 'Menu Create', 'settings', 'create_menu'),
(19, 'Save Menu', 'settings', 'save_menu'),
(20, 'Menu List', 'settings', 'menu_list'),
(21, 'Menu Delete', 'settings', 'menu_delete'),
(22, 'Ajax Edit Form', 'settings', 'ajax_edit_form'),
(24, 'Create Function', 'settings', 'create_function'),
(25, 'Save Function', 'settings', 'save_function'),
(26, 'Function List', 'settings', 'function_list'),
(27, 'Ajax Function Edit Form', 'settings', 'ajax_function_edit_form'),
(28, 'Update Function', 'settings', 'update_function'),
(29, 'Function Delete', 'settings', 'function_delete'),
(31, 'Save menu Role', 'settings', 'save_menu_role'),
(32, 'Role List', 'settings', 'role_list'),
(33, 'Ajax Menu Role Edit', 'settings', 'ajax_menu_role_edit'),
(34, 'Update Role', 'settings', 'update_role'),
(188, 'Test Functions', 'settings', 'Function'),
(189, 'index', 'CellTriangulation', 'index'),
(190, 'PlottedCellsite', 'PlottedCellsite', 'index'),
(191, 'Info Request', 'infoRequest', 'index'),
(192, 'RequestLogs', 'Reports', 'requestLogs'),
(193, 'MyRequest', 'Reports', 'myRequest'),
(194, 'Request Logs', 'Request', 'requestLogs'),
(195, 'My Request', 'Reports', 'myRequest'),
(197, 'Crime Type', 'admin', 'crime'),
(198, 'Designation', 'settings', 'designation'),
(199, 'Designation Save', 'settings', 'save_designation'),
(200, 'Designation List', 'settings', 'designation_list'),
(201, 'Edit Designation', 'settings', 'edit_designation'),
(202, 'Designation Delete', 'settings', 'designation_delete'),
(203, 'Rank', 'settings', 'rank'),
(204, 'Save Rank', 'settings', 'save_rank'),
(205, 'Rank List', 'settings', 'rank_list'),
(206, 'Edit Rank', 'settings', 'edit_rank'),
(207, 'Rank Delete', 'settings', 'rank_delete'),
(208, 'Wing Create', 'settings', 'wing'),
(209, 'Save Wing', 'settings', 'save_wing'),
(210, 'Wing List', 'settings', 'wing_list'),
(211, 'Edit Wing', 'settings', 'edit_wing'),
(212, 'Wing Delete', 'settings', 'wing_delete'),
(213, 'Battalion', 'settings', 'battalion'),
(214, 'Save Battalion', 'settings', 'save_battalion'),
(215, 'Battalion List', 'settings', 'battalion_list'),
(216, 'Edit Battalion', 'settings', 'edit_battalion'),
(217, 'Battalion Delete', 'settings', 'battalion_delete'),
(218, 'Relational officer Create', 'settings', 'rt_officer'),
(219, 'save Relation Officer', 'settings', 'save_rt_officer'),
(220, 'Rt Officer List', 'settings', 'rt_officer_list'),
(221, 'edit Relation Officer', 'settings', 'edit_rt_officer'),
(222, 'Rt Officer Delete', 'settings', 'rt_officer_delete'),
(223, 'Appointment', 'settings', 'appointment'),
(224, 'Save Appointment', 'settings', 'save_appointment'),
(225, 'Appointment List', 'settings', 'appointment_list'),
(226, 'Edit Appointment', 'settings', 'edit_appointment'),
(227, 'Appointment Delete', 'settings', 'appointment_delete'),
(228, 'User Type Create', 'settings', 'user_type'),
(229, 'Save User Type', 'settings', 'save_user_type'),
(230, 'User Type List', 'settings', 'user_type_list'),
(231, 'Edit User Type', 'settings', 'edit_user_type'),
(232, 'User Type Delete', 'settings', 'user_type_delete'),
(233, 'Reference Details List', 'settings', 'reference_details_list'),
(234, 'Reference Details', 'settings', 'reference_details'),
(235, 'Save Reference Details', 'settings', 'save_reference_details'),
(236, 'Ajax Edit Reference Details Page', 'settings', 'ajax_edit_reference_details_page'),
(237, 'Update Reference Details', 'settings', 'update_reference_details'),
(238, 'Reference Details Delete', 'settings', 'reference_details_delete'),
(239, 'Ajax Edit User Page', 'settings', 'ajax_edit_user_page'),
(240, 'Admin Index Page', 'Admin', 'index'),
(241, 'Crime', 'Admin', 'crime'),
(242, 'Crimedata', 'Admin', 'crimedata'),
(243, 'Crime Upload', 'Admin', 'crimeupload'),
(244, 'Admin Upload', 'settings', 'upload'),
(245, 'Admin Confirmation', 'settings', 'confirmation'),
(246, 'Analysis Index', 'analysis', 'index'),
(247, 'Cell Triangulation Udate', 'cellTriangulation', 'udate'),
(248, 'Cell Triangulation Operator', 'cellTriangulation', 'operator'),
(249, 'Cell Triangulation Crimescene', 'cellTriangulation', 'crimescene'),
(250, 'Cell Triangulation Search Thana', 'cellTriangulation', 'searchThana'),
(251, 'Cell Triangulation Post Login', 'cellTriangulation', 'post_login'),
(252, 'Email Invoice Index', 'emailInvoice', 'index'),
(253, 'Email Invoice sendMail', 'emailInvoice', 'sendMail'),
(254, 'Email Invoice Send Mail', 'emailInvoice', 'send_mail'),
(255, 'Email Controller Index', 'email_controller', 'index'),
(256, 'Email Controller Send Mail', 'email_controller', 'send_mail'),
(257, 'Info Request Index', 'InfoRequest', 'index'),
(258, 'Info Request Udate', 'InfoRequest', 'udate'),
(259, 'Info Request Request', 'InfoRequest', 'request'),
(260, 'Info Request Operator', 'InfoRequest', 'operator'),
(261, 'Info Request MFS', 'InfoRequest', 'mfs'),
(262, 'Info Request My Request', 'InfoRequest', 'myrequest'),
(263, 'Make Payment Index', 'makePayment', 'index'),
(264, 'Make Payment Invoice', 'makePayment', 'invoice'),
(265, 'Make Payment Confirm', 'makePayment', 'confirm'),
(266, 'Make Payment Posttest', 'makePayment', 'posttest'),
(267, 'Make Payment Success Live', 'makePayment', 'success_live'),
(268, 'Make Payment Success', 'makePayment', 'success'),
(269, 'Make Payment Failed', 'makePayment', 'failed'),
(270, 'Make Payment Cancel', 'makePayment', 'cancel'),
(271, 'Make Payment Udate', 'makePayment', 'udate'),
(272, 'MFS Index', 'mfs', 'index'),
(273, 'MFS Dashboard', 'mfs', 'dashboard'),
(274, 'MFS Udate', 'mfs', 'udate'),
(275, 'MFS Request', 'mfs', 'request'),
(276, 'MFS Operator', 'mfs', 'operator'),
(277, 'MFS MFS ', 'mfs', 'mfs'),
(278, 'MFS My Request', 'mfs', 'myrequest'),
(279, 'Plotted Cellsite Index', 'plottedCellsite', 'index'),
(280, 'Plotted Cellsite Udate', 'plottedCellsite', 'udate'),
(281, 'Plotted Cellsite Ajax Get Laccell Id', 'plottedCellsite', 'ajaxGetLaccellid'),
(282, 'Plotted Cellsite PlotCellsite', 'plottedCellsite', 'plotCellsite'),
(283, 'Reports Index Page', 'reports', 'index'),
(284, 'Reports Get User Ajax', 'reports', 'getUserAjax'),
(285, 'Reports Get User Info Ajax', 'reports', 'getUserInfoAjax'),
(286, 'Reports Get User Info', 'reports', 'getUserInfo'),
(287, 'Reports Request Logs', 'reports', 'requestLogs'),
(288, 'My Request', 'reports', 'myRequest'),
(289, 'Reports Udate', 'reports', 'udate'),
(290, 'Request Logs Index', 'requestLogs', 'index'),
(291, 'Request Logs Store Logs', 'requestLogs', 'storeLogs'),
(292, 'Request Logs Udate', 'requestLogs', 'udate'),
(293, 'Request Provider Index', 'requestProvider', 'index'),
(294, 'Request Provider Dashboard', 'requestProvider', 'requestProviderDashboard'),
(295, 'Request Provider New Request Details', 'requestProvider', 'new_request_details'),
(296, 'Request Provider view request details', 'requestProvider', 'view_request_details'),
(297, 'Request Provider Ajax New Request Data', 'requestProvider', 'ajax_new_request_data'),
(298, 'Request Provider Ajax New Request Transaction Details', 'requestProvider', 'ajax_new_request_transaction_details'),
(299, 'Request Provider Pending Request Details', 'requestProvider', 'pending_request_details'),
(300, 'Request Provider Update Req', 'requestProvider', 'updateReq'),
(301, 'Request Provider Upload', 'requestProvider', 'upload'),
(302, 'Request Provider Ajax Pending Request Data', 'requestProvider', 'ajax_pending_request_data'),
(303, 'Request Provider Ajax Pending Transaction Details', 'requestProvider', 'ajax_pending_transaction_details'),
(304, 'Request Provider Completed Request Details', 'RequestProvider', 'completed_request_details'),
(305, 'Request Provider Ajax Completed Request Data', 'requestProvider', 'ajax_completed_request_data'),
(306, 'Request Provider Ajax Completed Transaction Details', 'requestProvider', 'ajax_completed_transaction_details'),
(307, 'Request Provider Udate', 'requestProvider', 'udate'),
(308, 'Request Index', 'request', 'index'),
(309, 'Request New Request Details', 'request', 'new_request_details'),
(310, 'Request  Ajax New Request Data', 'request', 'ajax_new_request_data'),
(311, 'Request  Ajax New Request Transaction Details', 'request', 'ajax_new_request_transaction_details'),
(312, 'Request Pending Request Details', 'request', 'pending_request_details'),
(313, 'Request Ajax Pending Request Data', 'request', 'ajax_pending_request_data'),
(314, 'Request Ajax Pending Transaction Details', 'request', 'ajax_pending_transaction_details'),
(315, 'Request Ajax Completed Request Details', 'request', 'completed_request_details'),
(316, 'Request Ajax Completed Request Data', 'request', 'ajax_completed_request_data'),
(317, 'Request Ajax Completed Transaction Details', 'request', 'ajax_completed_transaction_details'),
(318, 'Logout', 'auth', 'logout'),
(319, 'Add  Cellsite Data', 'Admin/upload', 'upload'),
(320, 'Dashboard Access', 'settings', 'dashboard_access'),
(321, 'admin dash completed request details', 'admin', 'completed_request_details');

-- --------------------------------------------------------

--
-- Table structure for table `function_access`
--

CREATE TABLE `function_access` (
  `function_access` int(11) NOT NULL,
  `function_id` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function_access`
--

INSERT INTO `function_access` (`function_access`, `function_id`, `roleid`, `priority`) VALUES
(6137, 15, 0, 0),
(6138, 190, 0, 0),
(6139, 191, 0, 0),
(6140, 193, 0, 0),
(6141, 197, 0, 0),
(6142, 1, 5, 0),
(6143, 10, 5, 0),
(6144, 189, 5, 0),
(6145, 195, 5, 0),
(6146, 197, 5, 0),
(8956, 1, 7, 0),
(8957, 2, 7, 0),
(8958, 3, 7, 0),
(8959, 4, 7, 0),
(8960, 5, 7, 0),
(8961, 6, 7, 0),
(8962, 7, 7, 0),
(8963, 8, 7, 0),
(8964, 9, 7, 0),
(8965, 10, 7, 0),
(8966, 11, 7, 0),
(8967, 12, 7, 0),
(8968, 13, 7, 0),
(8969, 14, 7, 0),
(8970, 16, 7, 0),
(8971, 17, 7, 0),
(8972, 18, 7, 0),
(8973, 19, 7, 0),
(8974, 20, 7, 0),
(8975, 21, 7, 0),
(8976, 22, 7, 0),
(8977, 24, 7, 0),
(8978, 25, 7, 0),
(8979, 26, 7, 0),
(8980, 27, 7, 0),
(8981, 28, 7, 0),
(8982, 29, 7, 0),
(8983, 31, 7, 0),
(8984, 32, 7, 0),
(8985, 33, 7, 0),
(8986, 34, 7, 0),
(8987, 188, 7, 0),
(8988, 189, 7, 0),
(8989, 190, 7, 0),
(8990, 191, 7, 0),
(8991, 192, 7, 0),
(8992, 193, 7, 0),
(8993, 194, 7, 0),
(8994, 195, 7, 0),
(8995, 197, 7, 0),
(8996, 198, 7, 0),
(8997, 199, 7, 0),
(8998, 200, 7, 0),
(8999, 201, 7, 0),
(9000, 202, 7, 0),
(9001, 203, 7, 0),
(9002, 204, 7, 0),
(9003, 205, 7, 0),
(9004, 206, 7, 0),
(9005, 207, 7, 0),
(9006, 208, 7, 0),
(9007, 209, 7, 0),
(9008, 210, 7, 0),
(9009, 211, 7, 0),
(9010, 212, 7, 0),
(9011, 213, 7, 0),
(9012, 214, 7, 0),
(9013, 215, 7, 0),
(9014, 216, 7, 0),
(9015, 217, 7, 0),
(9016, 218, 7, 0),
(9017, 219, 7, 0),
(9018, 220, 7, 0),
(9019, 221, 7, 0),
(9020, 222, 7, 0),
(9021, 223, 7, 0),
(9022, 224, 7, 0),
(9023, 225, 7, 0),
(9024, 226, 7, 0),
(9025, 227, 7, 0),
(9026, 228, 7, 0),
(9027, 229, 7, 0),
(9028, 230, 7, 0),
(9029, 231, 7, 0),
(9030, 232, 7, 0),
(9031, 233, 7, 0),
(9032, 234, 7, 0),
(9033, 235, 7, 0),
(9034, 236, 7, 0),
(9035, 237, 7, 0),
(9036, 238, 7, 0),
(9037, 239, 7, 0),
(9038, 240, 7, 0),
(9039, 241, 7, 0),
(9040, 242, 7, 0),
(9041, 243, 7, 0),
(9042, 244, 7, 0),
(9043, 245, 7, 0),
(9044, 246, 7, 0),
(9045, 247, 7, 0),
(9046, 248, 7, 0),
(9047, 249, 7, 0),
(9048, 250, 7, 0),
(9049, 251, 7, 0),
(9050, 252, 7, 0),
(9051, 253, 7, 0),
(9052, 254, 7, 0),
(9053, 255, 7, 0),
(9054, 256, 7, 0),
(9055, 257, 7, 0),
(9056, 258, 7, 0),
(9057, 259, 7, 0),
(9058, 260, 7, 0),
(9059, 261, 7, 0),
(9060, 262, 7, 0),
(9061, 263, 7, 0),
(9062, 264, 7, 0),
(9063, 265, 7, 0),
(9064, 266, 7, 0),
(9065, 267, 7, 0),
(9066, 268, 7, 0),
(9067, 269, 7, 0),
(9068, 270, 7, 0),
(9069, 271, 7, 0),
(9070, 272, 7, 0),
(9071, 273, 7, 0),
(9072, 274, 7, 0),
(9073, 275, 7, 0),
(9074, 276, 7, 0),
(9075, 277, 7, 0),
(9076, 278, 7, 0),
(9077, 279, 7, 0),
(9078, 280, 7, 0),
(9079, 281, 7, 0),
(9080, 282, 7, 0),
(9081, 283, 7, 0),
(9082, 284, 7, 0),
(9083, 285, 7, 0),
(9084, 286, 7, 0),
(9085, 287, 7, 0),
(9086, 288, 7, 0),
(9087, 289, 7, 0),
(9088, 290, 7, 0),
(9089, 291, 7, 0),
(9090, 292, 7, 0),
(9091, 293, 7, 0),
(9092, 294, 7, 0),
(9093, 295, 7, 0),
(9094, 296, 7, 0),
(9095, 297, 7, 0),
(9096, 298, 7, 0),
(9097, 299, 7, 0),
(9098, 300, 7, 0),
(9099, 301, 7, 0),
(9100, 302, 7, 0),
(9101, 303, 7, 0),
(9102, 304, 7, 0),
(9103, 305, 7, 0),
(9104, 306, 7, 0),
(9105, 307, 7, 0),
(9106, 308, 7, 0),
(9107, 309, 7, 0),
(9108, 310, 7, 0),
(9109, 311, 7, 0),
(9110, 312, 7, 0),
(9111, 313, 7, 0),
(9112, 314, 7, 0),
(9113, 315, 7, 0),
(9114, 316, 7, 0),
(9115, 317, 7, 0),
(9116, 318, 7, 0),
(9117, 319, 7, 0),
(9118, 320, 7, 0),
(9282, 1, 2, 0),
(9283, 2, 2, 0),
(9284, 3, 2, 0),
(9285, 4, 2, 0),
(9286, 5, 2, 0),
(9287, 6, 2, 0),
(9288, 7, 2, 0),
(9289, 8, 2, 0),
(9290, 9, 2, 0),
(9291, 10, 2, 0),
(9292, 11, 2, 0),
(9293, 12, 2, 0),
(9294, 13, 2, 0),
(9295, 14, 2, 0),
(9296, 16, 2, 0),
(9297, 17, 2, 0),
(9298, 18, 2, 0),
(9299, 19, 2, 0),
(9300, 20, 2, 0),
(9301, 21, 2, 0),
(9302, 22, 2, 0),
(9303, 24, 2, 0),
(9304, 25, 2, 0),
(9305, 26, 2, 0),
(9306, 27, 2, 0),
(9307, 28, 2, 0),
(9308, 29, 2, 0),
(9309, 31, 2, 0),
(9310, 32, 2, 0),
(9311, 33, 2, 0),
(9312, 34, 2, 0),
(9313, 188, 2, 0),
(9314, 189, 2, 0),
(9315, 190, 2, 0),
(9316, 191, 2, 0),
(9317, 192, 2, 0),
(9318, 193, 2, 0),
(9319, 194, 2, 0),
(9320, 195, 2, 0),
(9321, 197, 2, 0),
(9322, 198, 2, 0),
(9323, 199, 2, 0),
(9324, 200, 2, 0),
(9325, 201, 2, 0),
(9326, 202, 2, 0),
(9327, 203, 2, 0),
(9328, 204, 2, 0),
(9329, 205, 2, 0),
(9330, 206, 2, 0),
(9331, 207, 2, 0),
(9332, 208, 2, 0),
(9333, 209, 2, 0),
(9334, 210, 2, 0),
(9335, 211, 2, 0),
(9336, 212, 2, 0),
(9337, 213, 2, 0),
(9338, 214, 2, 0),
(9339, 215, 2, 0),
(9340, 216, 2, 0),
(9341, 217, 2, 0),
(9342, 218, 2, 0),
(9343, 219, 2, 0),
(9344, 220, 2, 0),
(9345, 221, 2, 0),
(9346, 222, 2, 0),
(9347, 223, 2, 0),
(9348, 224, 2, 0),
(9349, 225, 2, 0),
(9350, 226, 2, 0),
(9351, 227, 2, 0),
(9352, 228, 2, 0),
(9353, 229, 2, 0),
(9354, 230, 2, 0),
(9355, 231, 2, 0),
(9356, 232, 2, 0),
(9357, 233, 2, 0),
(9358, 234, 2, 0),
(9359, 235, 2, 0),
(9360, 236, 2, 0),
(9361, 237, 2, 0),
(9362, 238, 2, 0),
(9363, 239, 2, 0),
(9364, 240, 2, 0),
(9365, 241, 2, 0),
(9366, 242, 2, 0),
(9367, 243, 2, 0),
(9368, 244, 2, 0),
(9369, 245, 2, 0),
(9370, 246, 2, 0),
(9371, 247, 2, 0),
(9372, 248, 2, 0),
(9373, 249, 2, 0),
(9374, 250, 2, 0),
(9375, 251, 2, 0),
(9376, 252, 2, 0),
(9377, 253, 2, 0),
(9378, 254, 2, 0),
(9379, 255, 2, 0),
(9380, 256, 2, 0),
(9381, 257, 2, 0),
(9382, 258, 2, 0),
(9383, 259, 2, 0),
(9384, 260, 2, 0),
(9385, 261, 2, 0),
(9386, 262, 2, 0),
(9387, 263, 2, 0),
(9388, 264, 2, 0),
(9389, 265, 2, 0),
(9390, 266, 2, 0),
(9391, 267, 2, 0),
(9392, 268, 2, 0),
(9393, 269, 2, 0),
(9394, 270, 2, 0),
(9395, 271, 2, 0),
(9396, 272, 2, 0),
(9397, 273, 2, 0),
(9398, 274, 2, 0),
(9399, 275, 2, 0),
(9400, 276, 2, 0),
(9401, 277, 2, 0),
(9402, 278, 2, 0),
(9403, 279, 2, 0),
(9404, 280, 2, 0),
(9405, 281, 2, 0),
(9406, 282, 2, 0),
(9407, 283, 2, 0),
(9408, 284, 2, 0),
(9409, 285, 2, 0),
(9410, 286, 2, 0),
(9411, 287, 2, 0),
(9412, 288, 2, 0),
(9413, 289, 2, 0),
(9414, 290, 2, 0),
(9415, 291, 2, 0),
(9416, 292, 2, 0),
(9417, 293, 2, 0),
(9418, 294, 2, 0),
(9419, 295, 2, 0),
(9420, 296, 2, 0),
(9421, 297, 2, 0),
(9422, 298, 2, 0),
(9423, 299, 2, 0),
(9424, 300, 2, 0),
(9425, 301, 2, 0),
(9426, 302, 2, 0),
(9427, 303, 2, 0),
(9428, 304, 2, 0),
(9429, 305, 2, 0),
(9430, 306, 2, 0),
(9431, 307, 2, 0),
(9432, 308, 2, 0),
(9433, 309, 2, 0),
(9434, 310, 2, 0),
(9435, 311, 2, 0),
(9436, 312, 2, 0),
(9437, 313, 2, 0),
(9438, 314, 2, 0),
(9439, 315, 2, 0),
(9440, 316, 2, 0),
(9441, 317, 2, 0),
(9442, 318, 2, 0),
(9443, 319, 2, 0),
(9444, 320, 2, 0),
(9445, 321, 2, 0),
(9446, 1, 1, 0),
(9447, 2, 1, 0),
(9448, 3, 1, 0),
(9449, 4, 1, 0),
(9450, 5, 1, 0),
(9451, 6, 1, 0),
(9452, 7, 1, 0),
(9453, 8, 1, 0),
(9454, 9, 1, 0),
(9455, 10, 1, 0),
(9456, 11, 1, 0),
(9457, 12, 1, 0),
(9458, 13, 1, 0),
(9459, 14, 1, 0),
(9460, 16, 1, 0),
(9461, 17, 1, 0),
(9462, 18, 1, 0),
(9463, 19, 1, 0),
(9464, 20, 1, 0),
(9465, 21, 1, 0),
(9466, 22, 1, 0),
(9467, 24, 1, 0),
(9468, 25, 1, 0),
(9469, 26, 1, 0),
(9470, 27, 1, 0),
(9471, 28, 1, 0),
(9472, 29, 1, 0),
(9473, 31, 1, 0),
(9474, 32, 1, 0),
(9475, 33, 1, 0),
(9476, 34, 1, 0),
(9477, 188, 1, 0),
(9478, 189, 1, 0),
(9479, 190, 1, 0),
(9480, 191, 1, 0),
(9481, 192, 1, 0),
(9482, 193, 1, 0),
(9483, 194, 1, 0),
(9484, 195, 1, 0),
(9485, 197, 1, 0),
(9486, 198, 1, 0),
(9487, 199, 1, 0),
(9488, 200, 1, 0),
(9489, 201, 1, 0),
(9490, 202, 1, 0),
(9491, 203, 1, 0),
(9492, 204, 1, 0),
(9493, 205, 1, 0),
(9494, 206, 1, 0),
(9495, 207, 1, 0),
(9496, 208, 1, 0),
(9497, 209, 1, 0),
(9498, 210, 1, 0),
(9499, 211, 1, 0),
(9500, 212, 1, 0),
(9501, 213, 1, 0),
(9502, 214, 1, 0),
(9503, 215, 1, 0),
(9504, 216, 1, 0),
(9505, 217, 1, 0),
(9506, 218, 1, 0),
(9507, 219, 1, 0),
(9508, 220, 1, 0),
(9509, 221, 1, 0),
(9510, 222, 1, 0),
(9511, 223, 1, 0),
(9512, 224, 1, 0),
(9513, 225, 1, 0),
(9514, 226, 1, 0),
(9515, 227, 1, 0),
(9516, 228, 1, 0),
(9517, 229, 1, 0),
(9518, 230, 1, 0),
(9519, 231, 1, 0),
(9520, 232, 1, 0),
(9521, 233, 1, 0),
(9522, 234, 1, 0),
(9523, 235, 1, 0),
(9524, 236, 1, 0),
(9525, 237, 1, 0),
(9526, 238, 1, 0),
(9527, 239, 1, 0),
(9528, 240, 1, 0),
(9529, 241, 1, 0),
(9530, 242, 1, 0),
(9531, 243, 1, 0),
(9532, 244, 1, 0),
(9533, 245, 1, 0),
(9534, 246, 1, 0),
(9535, 247, 1, 0),
(9536, 248, 1, 0),
(9537, 249, 1, 0),
(9538, 250, 1, 0),
(9539, 251, 1, 0),
(9540, 252, 1, 0),
(9541, 253, 1, 0),
(9542, 254, 1, 0),
(9543, 255, 1, 0),
(9544, 256, 1, 0),
(9545, 257, 1, 0),
(9546, 258, 1, 0),
(9547, 259, 1, 0),
(9548, 260, 1, 0),
(9549, 261, 1, 0),
(9550, 262, 1, 0),
(9551, 263, 1, 0),
(9552, 264, 1, 0),
(9553, 265, 1, 0),
(9554, 266, 1, 0),
(9555, 267, 1, 0),
(9556, 268, 1, 0),
(9557, 269, 1, 0),
(9558, 270, 1, 0),
(9559, 271, 1, 0),
(9560, 272, 1, 0),
(9561, 273, 1, 0),
(9562, 274, 1, 0),
(9563, 275, 1, 0),
(9564, 276, 1, 0),
(9565, 277, 1, 0),
(9566, 278, 1, 0),
(9567, 279, 1, 0),
(9568, 280, 1, 0),
(9569, 281, 1, 0),
(9570, 282, 1, 0),
(9571, 283, 1, 0),
(9572, 284, 1, 0),
(9573, 285, 1, 0),
(9574, 286, 1, 0),
(9575, 287, 1, 0),
(9576, 288, 1, 0),
(9577, 289, 1, 0),
(9578, 290, 1, 0),
(9579, 291, 1, 0),
(9580, 292, 1, 0),
(9581, 293, 1, 0),
(9582, 294, 1, 0),
(9583, 295, 1, 0),
(9584, 296, 1, 0),
(9585, 297, 1, 0),
(9586, 298, 1, 0),
(9587, 299, 1, 0),
(9588, 300, 1, 0),
(9589, 301, 1, 0),
(9590, 302, 1, 0),
(9591, 303, 1, 0),
(9592, 304, 1, 0),
(9593, 305, 1, 0),
(9594, 306, 1, 0),
(9595, 307, 1, 0),
(9596, 308, 1, 0),
(9597, 309, 1, 0),
(9598, 310, 1, 0),
(9599, 311, 1, 0),
(9600, 312, 1, 0),
(9601, 313, 1, 0),
(9602, 314, 1, 0),
(9603, 315, 1, 0),
(9604, 316, 1, 0),
(9605, 317, 1, 0),
(9606, 318, 1, 0),
(9607, 319, 1, 0),
(9608, 320, 1, 0),
(12880, 1, 3, 0),
(12881, 2, 3, 0),
(12882, 3, 3, 0),
(12883, 4, 3, 0),
(12884, 5, 3, 0),
(12885, 6, 3, 0),
(12886, 7, 3, 0),
(12887, 8, 3, 0),
(12888, 9, 3, 0),
(12889, 10, 3, 0),
(12890, 11, 3, 0),
(12891, 12, 3, 0),
(12892, 13, 3, 0),
(12893, 14, 3, 0),
(12894, 16, 3, 0),
(12895, 17, 3, 0),
(12896, 18, 3, 0),
(12897, 19, 3, 0),
(12898, 20, 3, 0),
(12899, 21, 3, 0),
(12900, 22, 3, 0),
(12901, 24, 3, 0),
(12902, 25, 3, 0),
(12903, 26, 3, 0),
(12904, 27, 3, 0),
(12905, 28, 3, 0),
(12906, 29, 3, 0),
(12907, 31, 3, 0),
(12908, 32, 3, 0),
(12909, 33, 3, 0),
(12910, 34, 3, 0),
(12911, 188, 3, 0),
(12912, 189, 3, 0),
(12913, 190, 3, 0),
(12914, 191, 3, 0),
(12915, 192, 3, 0),
(12916, 193, 3, 0),
(12917, 194, 3, 0),
(12918, 195, 3, 0),
(12919, 197, 3, 0),
(12920, 198, 3, 0),
(12921, 199, 3, 0),
(12922, 200, 3, 0),
(12923, 201, 3, 0),
(12924, 202, 3, 0),
(12925, 203, 3, 0),
(12926, 204, 3, 0),
(12927, 205, 3, 0),
(12928, 206, 3, 0),
(12929, 207, 3, 0),
(12930, 208, 3, 0),
(12931, 209, 3, 0),
(12932, 210, 3, 0),
(12933, 211, 3, 0),
(12934, 212, 3, 0),
(12935, 213, 3, 0),
(12936, 214, 3, 0),
(12937, 215, 3, 0),
(12938, 216, 3, 0),
(12939, 217, 3, 0),
(12940, 218, 3, 0),
(12941, 219, 3, 0),
(12942, 220, 3, 0),
(12943, 221, 3, 0),
(12944, 222, 3, 0),
(12945, 223, 3, 0),
(12946, 224, 3, 0),
(12947, 225, 3, 0),
(12948, 226, 3, 0),
(12949, 227, 3, 0),
(12950, 228, 3, 0),
(12951, 229, 3, 0),
(12952, 230, 3, 0),
(12953, 231, 3, 0),
(12954, 232, 3, 0),
(12955, 233, 3, 0),
(12956, 234, 3, 0),
(12957, 235, 3, 0),
(12958, 236, 3, 0),
(12959, 237, 3, 0),
(12960, 238, 3, 0),
(12961, 239, 3, 0),
(12962, 240, 3, 0),
(12963, 241, 3, 0),
(12964, 242, 3, 0),
(12965, 243, 3, 0),
(12966, 244, 3, 0),
(12967, 245, 3, 0),
(12968, 246, 3, 0),
(12969, 247, 3, 0),
(12970, 248, 3, 0),
(12971, 249, 3, 0),
(12972, 250, 3, 0),
(12973, 251, 3, 0),
(12974, 252, 3, 0),
(12975, 253, 3, 0),
(12976, 254, 3, 0),
(12977, 255, 3, 0),
(12978, 256, 3, 0),
(12979, 257, 3, 0),
(12980, 258, 3, 0),
(12981, 259, 3, 0),
(12982, 260, 3, 0),
(12983, 261, 3, 0),
(12984, 262, 3, 0),
(12985, 263, 3, 0),
(12986, 264, 3, 0),
(12987, 265, 3, 0),
(12988, 266, 3, 0),
(12989, 267, 3, 0),
(12990, 268, 3, 0),
(12991, 269, 3, 0),
(12992, 270, 3, 0),
(12993, 271, 3, 0),
(12994, 272, 3, 0),
(12995, 273, 3, 0),
(12996, 274, 3, 0),
(12997, 275, 3, 0),
(12998, 276, 3, 0),
(12999, 277, 3, 0),
(13000, 278, 3, 0),
(13001, 279, 3, 0),
(13002, 280, 3, 0),
(13003, 281, 3, 0),
(13004, 282, 3, 0),
(13005, 283, 3, 0),
(13006, 284, 3, 0),
(13007, 285, 3, 0),
(13008, 286, 3, 0),
(13009, 287, 3, 0),
(13010, 288, 3, 0),
(13011, 289, 3, 0),
(13012, 290, 3, 0),
(13013, 291, 3, 0),
(13014, 292, 3, 0),
(13015, 293, 3, 0),
(13016, 294, 3, 0),
(13017, 295, 3, 0),
(13018, 296, 3, 0),
(13019, 297, 3, 0),
(13020, 298, 3, 0),
(13021, 299, 3, 0),
(13022, 300, 3, 0),
(13023, 301, 3, 0),
(13024, 302, 3, 0),
(13025, 303, 3, 0),
(13026, 304, 3, 0),
(13027, 305, 3, 0),
(13028, 306, 3, 0),
(13029, 307, 3, 0),
(13030, 308, 3, 0),
(13031, 309, 3, 0),
(13032, 310, 3, 0),
(13033, 311, 3, 0),
(13034, 312, 3, 0),
(13035, 313, 3, 0),
(13036, 314, 3, 0),
(13037, 315, 3, 0),
(13038, 316, 3, 0),
(13039, 317, 3, 0),
(13040, 318, 3, 0),
(13041, 319, 3, 0),
(13042, 320, 3, 0),
(13043, 321, 3, 0),
(14356, 1, 4, 0),
(14357, 2, 4, 0),
(14358, 3, 4, 0),
(14359, 4, 4, 0),
(14360, 5, 4, 0),
(14361, 6, 4, 0),
(14362, 7, 4, 0),
(14363, 8, 4, 0),
(14364, 9, 4, 0),
(14365, 10, 4, 0),
(14366, 11, 4, 0),
(14367, 12, 4, 0),
(14368, 13, 4, 0),
(14369, 14, 4, 0),
(14370, 16, 4, 0),
(14371, 17, 4, 0),
(14372, 18, 4, 0),
(14373, 19, 4, 0),
(14374, 20, 4, 0),
(14375, 21, 4, 0),
(14376, 22, 4, 0),
(14377, 24, 4, 0),
(14378, 25, 4, 0),
(14379, 26, 4, 0),
(14380, 27, 4, 0),
(14381, 28, 4, 0),
(14382, 29, 4, 0),
(14383, 31, 4, 0),
(14384, 32, 4, 0),
(14385, 33, 4, 0),
(14386, 34, 4, 0),
(14387, 188, 4, 0),
(14388, 189, 4, 0),
(14389, 190, 4, 0),
(14390, 191, 4, 0),
(14391, 192, 4, 0),
(14392, 193, 4, 0),
(14393, 194, 4, 0),
(14394, 195, 4, 0),
(14395, 197, 4, 0),
(14396, 198, 4, 0),
(14397, 199, 4, 0),
(14398, 200, 4, 0),
(14399, 201, 4, 0),
(14400, 202, 4, 0),
(14401, 203, 4, 0),
(14402, 204, 4, 0),
(14403, 205, 4, 0),
(14404, 206, 4, 0),
(14405, 207, 4, 0),
(14406, 208, 4, 0),
(14407, 209, 4, 0),
(14408, 210, 4, 0),
(14409, 211, 4, 0),
(14410, 212, 4, 0),
(14411, 213, 4, 0),
(14412, 214, 4, 0),
(14413, 215, 4, 0),
(14414, 216, 4, 0),
(14415, 217, 4, 0),
(14416, 218, 4, 0),
(14417, 219, 4, 0),
(14418, 220, 4, 0),
(14419, 221, 4, 0),
(14420, 222, 4, 0),
(14421, 223, 4, 0),
(14422, 224, 4, 0),
(14423, 225, 4, 0),
(14424, 226, 4, 0),
(14425, 227, 4, 0),
(14426, 228, 4, 0),
(14427, 229, 4, 0),
(14428, 230, 4, 0),
(14429, 231, 4, 0),
(14430, 232, 4, 0),
(14431, 233, 4, 0),
(14432, 234, 4, 0),
(14433, 235, 4, 0),
(14434, 236, 4, 0),
(14435, 237, 4, 0),
(14436, 238, 4, 0),
(14437, 239, 4, 0),
(14438, 240, 4, 0),
(14439, 241, 4, 0),
(14440, 242, 4, 0),
(14441, 243, 4, 0),
(14442, 244, 4, 0),
(14443, 245, 4, 0),
(14444, 246, 4, 0),
(14445, 247, 4, 0),
(14446, 248, 4, 0),
(14447, 249, 4, 0),
(14448, 250, 4, 0),
(14449, 251, 4, 0),
(14450, 252, 4, 0),
(14451, 253, 4, 0),
(14452, 254, 4, 0),
(14453, 255, 4, 0),
(14454, 256, 4, 0),
(14455, 257, 4, 0),
(14456, 258, 4, 0),
(14457, 259, 4, 0),
(14458, 260, 4, 0),
(14459, 261, 4, 0),
(14460, 262, 4, 0),
(14461, 263, 4, 0),
(14462, 264, 4, 0),
(14463, 265, 4, 0),
(14464, 266, 4, 0),
(14465, 267, 4, 0),
(14466, 268, 4, 0),
(14467, 269, 4, 0),
(14468, 270, 4, 0),
(14469, 271, 4, 0),
(14470, 272, 4, 0),
(14471, 273, 4, 0),
(14472, 274, 4, 0),
(14473, 275, 4, 0),
(14474, 276, 4, 0),
(14475, 277, 4, 0),
(14476, 278, 4, 0),
(14477, 279, 4, 0),
(14478, 280, 4, 0),
(14479, 281, 4, 0),
(14480, 282, 4, 0),
(14481, 283, 4, 0),
(14482, 284, 4, 0),
(14483, 285, 4, 0),
(14484, 286, 4, 0),
(14485, 287, 4, 0),
(14486, 288, 4, 0),
(14487, 289, 4, 0),
(14488, 290, 4, 0),
(14489, 291, 4, 0),
(14490, 292, 4, 0),
(14491, 293, 4, 0),
(14492, 294, 4, 0),
(14493, 295, 4, 0),
(14494, 296, 4, 0),
(14495, 297, 4, 0),
(14496, 298, 4, 0),
(14497, 299, 4, 0),
(14498, 300, 4, 0),
(14499, 301, 4, 0),
(14500, 302, 4, 0),
(14501, 303, 4, 0),
(14502, 304, 4, 0),
(14503, 305, 4, 0),
(14504, 306, 4, 0),
(14505, 307, 4, 0),
(14506, 308, 4, 0),
(14507, 309, 4, 0),
(14508, 310, 4, 0),
(14509, 311, 4, 0),
(14510, 312, 4, 0),
(14511, 313, 4, 0),
(14512, 314, 4, 0),
(14513, 315, 4, 0),
(14514, 316, 4, 0),
(14515, 317, 4, 0),
(14516, 318, 4, 0),
(14517, 319, 4, 0),
(14518, 320, 4, 0),
(14519, 321, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `log_details`
--

CREATE TABLE `log_details` (
  `log_details_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `activity_url` varchar(255) NOT NULL,
  `action_type` varchar(255) NOT NULL,
  `action_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activity_details` varchar(255) NOT NULL,
  `prev_log` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_details`
--

INSERT INTO `log_details` (`log_details_id`, `user_name`, `activity_url`, `action_type`, `action_time`, `activity_details`, `prev_log`, `user_id`, `user_type`) VALUES
(1, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-27 09:43:40', 'Created  Users Name: Info Provider-Email:  infoprovider@immc.com-Password:  123-Phone:  01712547896-Image:  avatar-5.jpg-Role Type:  Request Provider Designation:  ADJUTANT-Rank:  WING COMMANDER-Wing:  AIR WING Department/Battalion:  IMMC UNIT-Unit:  RAB ', '', 1, 'Super Admin'),
(2, 'sa.soibal@gmail.com', 'http://localhost/rialto/settings/user_delete/2', 'Delete', '2018-01-27 10:11:15', 'Delete User-', '', 2, 'Admin'),
(3, 'sa.soibal@gmail.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-27 10:12:54', 'Created  Users Name: Info Request-Email:  inforequest@immc.com-Password:  123-Phone:  01869748224-Image:  avatar-3.jpg-Role Type:  END USER - INFO REQUEST Designation:  COMPANY COMMANDER CPC-1-Rank:  MAJOR-Wing:  TRAINING & ORIENTATION WING Department/Bat', '', 2, 'Admin'),
(4, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-01-27 10:17:33', 'Updated Users Name: ISTU01 - IMMC SUPPORT TEAM User-Email:  strothin@gmail.com-Phone:  8801711000001-Image:  -Role Type:  Admin Designation:  ADJUTANT-Rank:  WING COMMANDER-Wing:  AIR WING Department/Battalion:  CPC-1-Unit:  RAB 1-Reporting Officer:  DIRE', 'Previous Data Users Name: ISTU01 - IMMC SUPPORT TEAM User-Email:  strothin@gmail.com-Phone:  8801711000001-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  -Rank:  OTHER - PION-Wing:  INTELLIGENCE WING Department/Battalion:  RAB FORCES HEADQUARTERS-Un', 1, 'Super Admin'),
(5, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-01-27 10:18:03', 'Updated Users Name: Muktadir Rahman-Email:  strothin@gmail.com-Phone:  8801711000001-Image:  -Role Type:  Admin Designation:  ADJUTANT-Rank:  WING COMMANDER-Wing:  AIR WING Department/Battalion:  CPC-1-Unit:  RAB 1-Reporting Officer:  DIRECTOR', 'Previous Data Users Name: ISTU01 - IMMC SUPPORT TEAM User-Email:  strothin@gmail.com-Phone:  8801711000001-Image:  avatar-4.jpg-Role Type:  Admin Designation:  -Rank:  WING COMMANDER-Wing:  AIR WING Department/Battalion:  RAB 1-Unit:  CPC-1-Reporting Offi', 1, 'Super Admin'),
(6, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-01-27 10:18:29', 'Updated Users Name: Muktadir Rahman-Email:  muktadir@gmail.com-Phone:  8801711000001-Image:  -Role Type:  Admin Designation:  ADJUTANT-Rank:  WING COMMANDER-Wing:  AIR WING Department/Battalion:  CPC-1-Unit:  RAB 1-Reporting Officer:  DIRECTOR', 'Previous Data Users Name: Muktadir Rahman-Email:  strothin@gmail.com-Phone:  8801711000001-Image:  avatar-4.jpg-Role Type:  Admin Designation:  -Rank:  WING COMMANDER-Wing:  AIR WING Department/Battalion:  RAB 1-Unit:  CPC-1-Reporting Officer:  DIRECTOR', 1, 'Super Admin'),
(7, 'muktadir@gmail.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-27 11:57:04', 'Created  Users Name: habib-Email:  habib@jhoro.com-Password:  123-Phone:  45678-Image:  animate.jpg-Role Type:  END USER - INFO REQUEST Designation:  COMMANDING OFFICER-Rank:  COLONEL-Wing:  LEGAL & MEDIA WING Department/Battalion:  CPC-1-Unit:  RAB 1-Rep', '', 5, 'Admin'),
(8, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-27 13:04:03', 'Created  Users Name: Shakil Mia-Email:  shakil@jhoro.com-Password:  123-Phone:  546545454-Image:  avatar-21.jpg-Role Type:  Admin Designation:  COMPANY COMMANDER CPC-3-Rank:  ASP-Wing:  INVESTIGATION & FORENSIC WING Department/Battalion:  CPC-1-Unit:  RAB', '', 1, 'Super Admin'),
(9, 'muktadir@gmail.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-27 13:26:19', 'Created  Users Name: ahshan-Email:  ahshan@jhoro.com-Password:  123-Phone:  012457855-Image:  avatar-1.jpg-Role Type:  END USER - INFO REQUEST Designation:  DIRECTOR GENERAL-Rank:  COMMANDER-Wing:  INTELLIGENCE WING Department/Battalion:  CPC-1-Unit:  RAB', '', 5, 'Admin'),
(10, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-28 05:56:19', 'Created  Users Name: user01-Email:  user01@gmail.com-Password:  123-Phone:  017150000000-Image:  -Role Type:  END USER - INFO REQUEST Designation:  OTHERS - PION-Rank:  OTHER - PION-Wing:  BATTALION Department/Battalion:  BATTALION HQ-Unit:  RAB 1-Reporti', '', 1, 'Super Admin'),
(11, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-28 05:59:40', 'Created  Users Name: user2-Email:  user02@gmail.com-Password:  123-Phone:  017150000002-Image:  -Role Type:  END USER - INFO REQUEST Designation:  OTHERS - PION-Rank:  OTHER - PION-Wing:  BATTALION Department/Battalion:  BATTALION HQ-Unit:  RAB 2-Reportin', '', 1, 'Super Admin'),
(12, 'demo@jhorotek.com', 'http://localhost/rialto/settings/wing_delete', 'Wing Delete', '2018-01-28 08:53:54', 'Deleted Wing Name: BATTALION', '', 1, 'Super Admin'),
(13, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_wing', ' Wing Create', '2018-01-28 09:11:55', 'Created  Wing Name: RAB BATTALION', '', 1, 'Super Admin'),
(14, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 09:38:54', 'Created  Battalion Name: Rab 1', '', 1, 'Super Admin'),
(15, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 09:49:08', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(16, 'demo@jhorotek.com', 'http://localhost/rialto/settings/battalion_delete', 'Battalion Delete', '2018-01-28 09:50:52', 'Delete Battalion Name: Rab 2', '', 1, 'Super Admin'),
(17, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 09:51:32', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(18, 'demo@jhorotek.com', 'http://localhost/rialto/settings/battalion_delete', 'Battalion Delete', '2018-01-28 09:52:13', 'Delete Battalion Name: utkuku', '', 1, 'Super Admin'),
(19, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 09:52:23', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(20, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_battalion', 'Update', '2018-01-28 10:31:21', 'Updated Battalion Name: ', 'Previous Battalion Name: RAB 2', 1, 'Super Admin'),
(21, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_battalion', 'Update', '2018-01-28 10:32:00', 'Updated Battalion Name: ', 'Previous Battalion Name: RAB 3', 1, 'Super Admin'),
(22, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_battalion', 'Update', '2018-01-28 10:32:48', 'Updated Battalion Name: ', 'Previous Battalion Name: Rab 1', 1, 'Super Admin'),
(23, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_battalion', 'Update', '2018-01-28 10:38:34', 'Updated Battalion Name: ', 'Previous Battalion Name: RAB 3', 1, 'Super Admin'),
(24, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_battalion', 'Update', '2018-01-28 10:38:40', 'Updated Battalion Name: ', 'Previous Battalion Name: RAB 4', 1, 'Super Admin'),
(25, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_battalion', 'Update', '2018-01-28 10:38:47', 'Updated Battalion Name: ', 'Previous Battalion Name: Rab 2', 1, 'Super Admin'),
(26, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_appointment', ' Appointment Create', '2018-01-28 11:03:24', 'Created  Appointment Name: ', '', 1, 'Super Admin'),
(27, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_appointment', 'Update', '2018-01-28 11:21:25', 'Updated Appointment Name: ', 'Previous Appointment Name: unit 1', 1, 'Super Admin'),
(28, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_appointment', 'Update', '2018-01-28 11:22:33', 'Updated Appointment Name: ', 'Previous Appointment Name: unit 1', 1, 'Super Admin'),
(29, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_appointment', 'Update', '2018-01-28 11:22:40', 'Updated Appointment Name: ', 'Previous Appointment Name: unit 2', 1, 'Super Admin'),
(30, 'demo@jhorotek.com', 'http://localhost/rialto/settings/appointment_delete', 'Delete', '2018-01-28 11:24:42', 'Deleted Appointment Name: unit 3', '', 1, 'Super Admin'),
(31, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_appointment', ' Appointment Create', '2018-01-28 11:24:50', 'Created  Appointment Name: dbdbdb', '', 1, 'Super Admin'),
(32, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_appointment', ' Appointment Create', '2018-01-28 11:24:55', 'Created  Appointment Name: bgbgbgg', '', 1, 'Super Admin'),
(33, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_appointment', ' Appointment Create', '2018-01-28 11:25:00', 'Created  Appointment Name: gbgbgbb', '', 1, 'Super Admin'),
(34, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_appointment', 'Update', '2018-01-28 11:29:11', 'Updated Appointment Name: ', 'Previous Appointment Name: gbgbgbb', 1, 'Super Admin'),
(35, 'demo@jhorotek.com', 'http://localhost/rialto/settings/appointment_delete', 'Delete', '2018-01-28 11:29:16', 'Deleted Appointment Name: uni1', '', 1, 'Super Admin'),
(36, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 11:34:06', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(37, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 11:34:22', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(38, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 11:34:40', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(39, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 11:34:48', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(40, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 11:34:55', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(41, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 11:35:08', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(42, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 11:35:22', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(43, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 11:35:28', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(44, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 11:35:34', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(45, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 11:36:03', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(46, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 11:36:33', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(47, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 11:36:43', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(48, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 11:36:56', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(49, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_battalion', ' Battalion Create', '2018-01-28 11:37:05', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(50, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_appointment', ' Appointment Create', '2018-01-28 11:39:16', 'Created  Appointment Name: CPC1', '', 1, 'Super Admin'),
(51, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_appointment', ' Appointment Create', '2018-01-28 11:40:13', 'Created  Appointment Name: CPC2', '', 1, 'Super Admin'),
(52, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-28 12:30:05', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(53, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-28 12:30:56', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(54, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-28 12:31:46', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(55, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_designation', 'Designation Update', '2018-01-29 06:24:51', 'Updated Designation Name: Company Commanders', 'Previous Designation Name: Company Commander', 1, 'Super Admin'),
(56, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_designation', 'Designation Update', '2018-01-29 06:25:35', 'Updated Designation Name: Company Commanders', 'Previous Designation Name: Company Commanders', 1, 'Super Admin'),
(57, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_designation', 'Designation Update', '2018-01-29 06:25:48', 'Updated Designation Name: Commanding Officers', 'Previous Designation Name: Commanding Officer', 1, 'Super Admin'),
(58, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_designation', 'Designation Update', '2018-01-29 06:25:56', 'Updated Designation Name: Tests', 'Previous Designation Name: Test', 1, 'Super Admin'),
(59, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_designation', 'Designation Update', '2018-01-29 06:27:21', 'Updated Designation Name: Company Commanders', 'Previous Designation Name: Company Commanders', 1, 'Super Admin'),
(60, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_designation', 'Designation Update', '2018-01-29 06:27:27', 'Updated Designation Name: Company Commanders', 'Previous Designation Name: Company Commanders', 1, 'Super Admin'),
(61, 'demo@jhorotek.com', 'http://localhost/rialto/settings/designation_delete', 'Designation Delete', '2018-01-29 06:32:29', 'Deleted Designation Name: Company Commanders', '', 1, 'Super Admin'),
(62, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_rt_officer', ' Reporting Officer Create', '2018-01-29 07:00:07', 'Created  Reporting Officer Name: Commanding Officer', '', 1, 'Super Admin'),
(63, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_rt_officer', ' Reporting Officer Create', '2018-01-29 07:36:51', 'Created  Reporting Officer Name: sfvvvdvev', '', 1, 'Super Admin'),
(64, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_appointment', 'Update', '2018-01-29 07:50:55', 'Updated Appointment Name: ', 'Previous Appointment Name: ', 1, 'Super Admin'),
(65, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_rt_officer', 'Reporting Officer Update', '2018-01-29 07:52:13', 'Updated Reporting Officer Name: Ahshan', 'Previous Reporting Officer Name: efcsdvfdvdfvdfvdv', 1, 'Super Admin'),
(66, 'demo@jhorotek.com', 'http://localhost/rialto/settings/rt_officer_delete', 'Reporting Officer Delete', '2018-01-29 08:01:44', 'Deleted Reporting Officer Name: Ahshan', '', 1, 'Super Admin'),
(67, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-29 11:29:11', 'Created  Users Name: fbfdbdfb-Email:  sggdg@rgd.com-Password:  124343-Phone:  2144325-Image:  -Role Type:  Admin Designation:  Commanding Officers-Rank:  Sr ASP-Wing:  RAB BATTALION Department/Battalion:  CPC1-Unit:  RAB-1-Reporting Officer:  Commanding O', '', 1, 'Super Admin'),
(68, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-01-29 12:09:27', 'Updated Users Name: fbfdbdfb-Email:  sggdg@rgd.com-Phone:  2144325-Image:  -Role Type:  Admin Designation:  Commanding Officers-Rank:  Sr ASP-Wing:  RAB BATTALION Department/Battalion:  CPC1-Unit:  RAB-1-Reporting Officer:  Commanding Officer', 'Previous Data Users Name: fbfdbdfb-Email:  sggdg@rgd.com-Phone:  2144325-Image:  -Role Type:  Admin Designation:  -Rank:  Sr ASP-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  CPC1-Reporting Officer:  Commanding Officer', 1, 'Super Admin'),
(69, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-01-29 12:09:36', 'Updated Users Name: fbfdbdfb-Email:  sggdg@rgd.com-Phone:  2144325-Image:  -Role Type:  Admin Designation:  Commanding Officers-Rank:  Sr ASP-Wing:  RAB BATTALION Department/Battalion:  CPC1-Unit:  RAB-1-Reporting Officer:  Commanding Officer', 'Previous Data Users Name: fbfdbdfb-Email:  sggdg@rgd.com-Phone:  2144325-Image:  -Role Type:  Admin Designation:  -Rank:  Sr ASP-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  CPC1-Reporting Officer:  Commanding Officer', 1, 'Super Admin'),
(70, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-01-29 12:10:19', 'Updated Users Name: Muktadir-Email:  muktdir@jhorotek.cm-Phone:  4235235-Image:  -Role Type:  Super Admin Designation:  Tests-Rank:  CAPTAIN-Wing:  OPERATIONS WING Department/Battalion:  CPC1-Unit:  RAB-1-Reporting Officer:  Commanding Officer', 'Previous Data Users Name: -Email:  -Phone:  -Image:  -Role Type:   Designation:  -Rank:  -Wing:   Department/Battalion:  -Unit:  -Reporting Officer:  ', 1, 'Super Admin'),
(71, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-01-30 07:30:21', 'Updated Users Name: JhoroTEK-Email:  demo@jhorotek.com-Phone:  01972837866-Image:  -Role Type:  Super Admin Designation:  Others-Rank:  Others-Wing:  Others Department/Battalion:  Others-Unit:  Others-Reporting Officer:  Others', 'Previous Data Users Name: JhoroTEK-Email:  demo@jhorotek.com-Phone:  01972837866-Image:  -Role Type:  Super Admin Designation:  -Rank:  Others-Wing:  Others Department/Battalion:  Others-Unit:  Others-Reporting Officer:  Others', 1, 'Super Admin'),
(72, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-30 07:31:52', 'Created  Users Name: Sharif Muktadir-Email:  muktadir@jhorotek.com-Password:  123-Phone:  01714257896-Image:  f-2.jpg-Role Type:  Admin Designation:  Others-Rank:  Others-Wing:  Others Department/Battalion:  Others-Unit:  Others-Reporting Officer:  Others', '', 1, 'Super Admin'),
(73, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-30 07:32:59', 'Created  Users Name: Mamun Ahammed-Email:  mamun@jhorotek.com-Password:  123-Phone:  01724579654-Image:  f-3.jpg-Role Type:  Admin Designation:  Commanding Officers-Rank:  BRIGADIER GENERAL-Wing:  RAB BATTALION Department/Battalion:  CPC1-Unit:  RAB-1-Rep', '', 1, 'Super Admin'),
(74, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-30 07:34:07', 'Created  Users Name: Najmul Islam-Email:  najmul@jhorotek.com-Password:  123-Phone:  018697426589-Image:  f-4.jpg-Role Type:  Admin Designation:  Commanding Officers-Rank:  LIEUTENANT COLONEL-Wing:  RAB BATTALION Department/Battalion:  CPC1-Unit:  RAB-1-R', '', 1, 'Super Admin'),
(75, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-30 07:45:51', 'Created  Users Name: Shamim Ahammed-Email:  shamim@jhorotek.com-Password:  123-Phone:  01747956555-Image:  f-5.jpg-Role Type:  Admin Designation:  Commanding Officers-Rank:  COMMANDER-Wing:  RAB BATTALION Department/Battalion:  CPC1-Unit:  RAB-1-Reporting', '', 1, 'Super Admin'),
(76, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_appointment', ' Appointment Create', '2018-01-30 08:50:11', 'Created  Appointment Name: CPC-3', '', 1, 'Super Admin'),
(77, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_appointment', 'Update', '2018-01-30 08:50:29', 'Updated Appointment Name: ', 'Previous Appointment Name: CPC2', 1, 'Super Admin'),
(78, 'demo@jhorotek.com', 'http://localhost/rialto/settings/edit_appointment', 'Update', '2018-01-30 08:50:35', 'Updated Appointment Name: ', 'Previous Appointment Name: CPC1', 1, 'Super Admin'),
(79, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:52:49', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(80, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:53:06', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(81, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:53:18', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(82, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:53:26', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(83, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:53:42', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(84, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:53:55', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(85, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:54:09', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(86, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:54:27', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(87, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:54:42', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(88, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:54:53', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(89, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:55:11', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(90, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:55:24', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(91, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:55:42', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(92, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:55:48', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(93, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:56:09', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(94, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 08:56:47', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(95, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_rt_officer', ' Reporting Officer Create', '2018-01-30 08:58:29', 'Created  Reporting Officer Name: Company Commander', '', 1, 'Super Admin'),
(96, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_rt_officer', ' Reporting Officer Create', '2018-01-30 08:59:07', 'Created  Reporting Officer Name: Duty Officer', '', 1, 'Super Admin'),
(97, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_rt_officer', ' Reporting Officer Create', '2018-01-30 08:59:29', 'Created  Reporting Officer Name: Intelligence Officer', '', 1, 'Super Admin'),
(98, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_rt_officer', ' Reporting Officer Create', '2018-01-30 08:59:43', 'Created  Reporting Officer Name: Operations Officer', '', 1, 'Super Admin'),
(99, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_rt_officer', ' Reporting Officer Create', '2018-01-30 09:01:16', 'Created  Reporting Officer Name: Company Commander', '', 1, 'Super Admin'),
(100, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_rt_officer', ' Reporting Officer Create', '2018-01-30 09:02:04', 'Created  Reporting Officer Name: Intelligence Officer', '', 1, 'Super Admin'),
(101, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_rt_officer', ' Reporting Officer Create', '2018-01-30 09:02:16', 'Created  Reporting Officer Name: Commanding Officer', '', 1, 'Super Admin'),
(102, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_rt_officer', ' Reporting Officer Create', '2018-01-30 09:02:35', 'Created  Reporting Officer Name: Second in Command', '', 1, 'Super Admin'),
(103, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_rt_officer', ' Reporting Officer Create', '2018-01-30 09:02:39', 'Created  Reporting Officer Name: Second in Command', '', 1, 'Super Admin'),
(104, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-30 09:05:06', 'Created  Users Name: Shakil  Ahmed-Email:  shakil@jhorotek.com-Password:  123-Phone:  0171254896-Image:  avatar-11.jpg-Role Type:  END USER - INFO REQUEST Designation:  Operations Officer-Rank:  COLONEL-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Un', '', 1, 'Super Admin'),
(105, 'mamun@jhorotek.com', 'http://localhost/rialto/settings/save_appointment', ' Appointment Create', '2018-01-30 09:06:54', 'Created  Appointment Name: CPC-1', '', 3, 'Admin'),
(106, 'mamun@jhorotek.com', 'http://localhost/rialto/settings/save_appointment', ' Appointment Create', '2018-01-30 09:07:02', 'Created  Appointment Name: CPC-2', '', 3, 'Admin'),
(107, 'mamun@jhorotek.com', 'http://localhost/rialto/settings/save_appointment', ' Appointment Create', '2018-01-30 09:07:08', 'Created  Appointment Name: CPC-3', '', 3, 'Admin'),
(108, 'mamun@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 09:07:57', 'Created  Designation Name: ', '', 3, 'Admin'),
(109, 'mamun@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 09:08:07', 'Created  Designation Name: ', '', 3, 'Admin'),
(110, 'mamun@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 09:08:19', 'Created  Designation Name: ', '', 3, 'Admin'),
(111, 'mamun@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 09:08:31', 'Created  Designation Name: ', '', 3, 'Admin'),
(112, 'mamun@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 09:08:42', 'Created  Designation Name: ', '', 3, 'Admin'),
(113, 'mamun@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 09:08:55', 'Created  Designation Name: ', '', 3, 'Admin'),
(114, 'mamun@jhorotek.com', 'http://localhost/rialto/settings/save_designation', ' Designation Create', '2018-01-30 09:09:05', 'Created  Designation Name: ', '', 3, 'Admin'),
(115, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-30 09:09:37', 'Created  Users Name: Tanvir Ahmed-Email:  tanvir@jhorotek.com-Password:  123-Phone:  01758796625-Image:  avatar-31.jpg-Role Type:  END USER - INFO REQUEST Designation:  Commanding Officers-Rank:  BRIGADIER GENERAL-Wing:  RAB BATTALION Department/Battalion', '', 1, 'Super Admin'),
(116, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-30 09:11:12', 'Created  Users Name: Ahshan habib-Email:  habib@jhorotek.com-Password:  123-Phone:  01714257896-Image:  avatar-22.jpg-Role Type:  IMMC SUPPORT TEAM Designation:  Company Commander Special -Rank:  MAJOR-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Uni', '', 1, 'Super Admin'),
(117, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-30 09:14:07', 'Created  Users Name: Habib Ahshan-Email:  ahshan@jhorotek.com-Password:  123-Phone:  01621457896-Image:  avatar-32.jpg-Role Type:  IMMC SUPPORT TEAM Designation:  Second in Command-Rank:  COMMANDER-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  ', '', 1, 'Super Admin'),
(118, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-01-30 09:15:16', 'Updated Users Name: Sharif Muktadir-Email:  muktadir@jhorotek.com-Phone:  01714257896-Image:  -Role Type:  Admin Designation:  Others-Rank:  MAJOR-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  RAB-1-Reporting Officer:  Others', 'Previous Data Users Name: Sharif Muktadir-Email:  muktadir@jhorotek.com-Phone:  01714257896-Image:  f-2.jpg-Role Type:  Admin Designation:  -Rank:  Others-Wing:  Others Department/Battalion:  Others-Unit:  Others-Reporting Officer:  Others', 1, 'Super Admin'),
(119, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-01-30 09:15:48', 'Updated Users Name: Mamun Ahammed-Email:  mamun@jhorotek.com-Phone:  01724579654-Image:  -Role Type:  Admin Designation:  Commanding Officers-Rank:  BRIGADIER GENERAL-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  RAB-2-Reporting Officer:  Comma', 'Previous Data Users Name: Mamun Ahammed-Email:  mamun@jhorotek.com-Phone:  01724579654-Image:  f-3.jpg-Role Type:  Admin Designation:  -Rank:  BRIGADIER GENERAL-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  CPC-1-Reporting Officer:  Commanding ', 1, 'Super Admin'),
(120, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-30 09:17:37', 'Created  Users Name: Sharmin Prachi-Email:  sharmin@jhorotek.com-Password:  123-Phone:  01712489635-Image:  masonry-12.jpg-Role Type:  Admin Designation:  Operations Officer-Rank:  COMMANDER-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  RAB-2-R', '', 1, 'Super Admin'),
(121, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-01-30 09:36:06', 'Updated Users Name: Sharif Muktadir-Email:  muktadir@jhorotek.com-Phone:  01714257896-Image:  -Role Type:  Admin Designation:  Others-Rank:  MAJOR-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  RAB-2-Reporting Officer:  Others', 'Previous Data Users Name: Sharif Muktadir-Email:  muktadir@jhorotek.com-Phone:  01714257896-Image:  f-2.jpg-Role Type:  Admin Designation:  -Rank:  MAJOR-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  CPC-1-Reporting Officer:  Others', 1, 'Super Admin'),
(122, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-01-30 09:37:41', 'Created  Users Name: Mourin-Email:  mourin@jhorotek.com-Password:  123-Phone:  01755985565-Image:  masonry-71.jpg-Role Type:  Admin Designation:  Operations Officer-Rank:  WING COMMANDER-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  RAB-2-Repor', '', 1, 'Super Admin'),
(123, 'demo@jhorotek.com', 'http://localhost/rialto/admin/crimedata', ' Crime & Sub Crime Create', '2018-01-30 09:50:33', 'Created  Crime Name: Murder  Crime Details: Family Murder  Sub Crime Name: Single Murder,Multiple Murder,', '', 1, 'Super Admin'),
(124, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-01-31 04:57:44', 'Updated Users Name: Sharif Muktadir-Email:  muktadir@jhorotek.com-Phone:  01714257896-Image:  -Role Type:  Admin Designation:  Others-Rank:  MAJOR-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  Others-Reporting Officer:  Others', 'Previous Data Users Name: Sharif Muktadir-Email:  muktadir@jhorotek.com-Phone:  01714257896-Image:  f-2.jpg-Role Type:  Admin Designation:  -Rank:  MAJOR-Wing:  RAB BATTALION Department/Battalion:  RAB-2-Unit:  CPC-1-Reporting Officer:  Others', 1, 'Super Admin'),
(125, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-01-31 05:03:22', 'Updated Users Name: Sharif Muktadir-Email:  muktadir@jhorotek.com-Phone:  01714257896-Image:  -Role Type:  Admin Designation:  Others-Rank:  LIEUTENANT COLONEL-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  RAB-2-Reporting Officer:  Others', 'Previous Data Users Name: Sharif Muktadir-Email:  muktadir@jhorotek.com-Phone:  01714257896-Image:  f-2.jpg-Role Type:  Admin Designation:  -Rank:  MAJOR-Wing:  RAB BATTALION Department/Battalion:  Others-Unit:  CPC-1-Reporting Officer:  Others', 1, 'Super Admin'),
(126, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-01-31 11:05:52', 'Updated Users Name: JhoroTEK-Email:  demo@jhorotek.com-Phone:  01972837866-Image:  -Role Type:  Super Admin Designation:  Others-Rank:  Others-Wing:  Others Department/Battalion:  Others-Unit:  Others-Reporting Officer:  Others', 'Previous Data Users Name: JhoroTEK-Email:  demo@jhorotek.com-Phone:  01972837866-Image:  -Role Type:  Super Admin Designation:  -Rank:  Others-Wing:  Others Department/Battalion:  Others-Unit:  Others-Reporting Officer:  Others', 1, 'Super Admin'),
(127, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-02-07 09:39:19', 'Updated Users Name: muktadir-Email:  mk@jhortk.om-Phone:  01778413435-Image:  -Role Type:  Super Admin Designation:  Tests-Rank:  CAPTAIN-Wing:  OPERATIONS WING Department/Battalion:  CPC-1-Unit:  RAB-1-Reporting Officer:  Commanding Officer', 'Previous Data Users Name: -Email:  -Phone:  -Image:  -Role Type:   Designation:  -Rank:  -Wing:   Department/Battalion:  -Unit:  -Reporting Officer:  ', 1, 'Super Admin'),
(128, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-02-07 09:43:15', 'Updated Users Name: muktadir-Email:  muktdi@jhorotek.com-Phone:  01778413435-Image:  -Role Type:  Admin Designation:  Tests-Rank:  CAPTAIN-Wing:  OPERATIONS WING Department/Battalion:  CPC-1-Unit:  RAB-1-Reporting Officer:  Commanding Officer', 'Previous Data Users Name: -Email:  -Phone:  -Image:  -Role Type:   Designation:  -Rank:  -Wing:   Department/Battalion:  -Unit:  -Reporting Officer:  ', 1, 'Super Admin'),
(129, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-02-10 11:44:49', 'Created  Users Name: rothin -Email:  rothin@jhoro.com-Password:  123-Phone:  0121432535-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  Duty Officer-Rank:  BRIGADIER GENERAL-Wing:  RAB BATTALION Department/Battalion:  CPC-2-Unit:  RAB-1-Reporting Off', '', 1, 'Super Admin'),
(130, 'demo@jhorotek.com', 'http://localhost/rialto/settings/update_user', 'Update', '2018-02-10 11:45:19', 'Updated Users Name: rothin  dsgfg-Email:  rothin@jhoro.com-Phone:  0121432535-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  Duty Officer-Rank:  BRIGADIER GENERAL-Wing:  RAB BATTALION Department/Battalion:  CPC-2-Unit:  RAB-1-Reporting Officer:  Dut', 'Previous Data Users Name: rothin -Email:  rothin@jhoro.com-Phone:  0121432535-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  -Rank:  BRIGADIER GENERAL-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  CPC-2-Reporting Officer:  Duty Officer', 1, 'Super Admin'),
(131, 'demo@jhorotek.com', 'http://localhost/rialto/settings/save_user', 'Create', '2018-02-10 12:30:10', 'Created  Users Name: Liton Mia-Email:  liton@jhorotek.com-Password:  123-Phone:  01674859987-Image:  -Role Type:  END USER - INFO REQUEST Designation:  Ration & Logistic Officer-Rank:  SQUADRON LEADER-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit', '', 1, 'Super Admin'),
(132, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/update_user', 'Update', '2018-02-13 05:17:06', 'Updated Users Name: Shamim Ahammed-Email:  shamim@jhorotek.com-Phone:  01747956555-Image:  -Role Type:  Admin Designation:  Commanding Officers-Rank:  COMMANDER-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  RAB-1-Reporting Officer:  Commanding ', 'Previous Data Users Name: Shamim Ahammed-Email:  shamim@jhorotek.com-Phone:  01747956555-Image:  f-5.jpg-Role Type:  Admin Designation:  -Rank:  COMMANDER-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  CPC-1-Reporting Officer:  Commanding Office', 1, 'Super Admin'),
(133, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/update_user', 'Update', '2018-02-13 05:17:29', 'Updated Users Name: Shamim Ahammed-Email:  shamim@jhorotek.com-Phone:  01747956555-Image:  -Role Type:  END USER - INFO REQUEST Designation:  Commanding Officers-Rank:  COMMANDER-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  RAB-1-Reporting Off', 'Previous Data Users Name: Shamim Ahammed-Email:  shamim@jhorotek.com-Phone:  01747956555-Image:  10299-200.png-Role Type:  Admin Designation:  -Rank:  COMMANDER-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  CPC-1-Reporting Officer:  Commanding ', 1, 'Super Admin'),
(134, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/reset_user_password', 'Change Password By Admin', '2018-02-13 05:18:09', 'Password Change For-rothin@jhoro.com', '', 1, 'Super Admin'),
(135, 'shamim@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/submit_change_password', 'Change Password By User', '2018-02-13 05:24:43', 'Password Change By-1234', 'Previous password-123', 5, 'END USER - INFO REQUEST'),
(136, 'shamim@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/submit_change_password', 'Change Password By User', '2018-02-13 05:25:10', 'Password Change By-123', 'Previous password-1234', 5, 'END USER - INFO REQUEST'),
(137, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/update_user', 'Update', '2018-02-13 06:48:04', 'Updated Users Name: Shakil  Ahmed-Email:  shakil@jhorotek.com-Phone:  0171254896-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  Operations Officer-Rank:  COLONEL-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  RAB-1-Reporting Officer:  Duty', 'Previous Data Users Name: Shakil  Ahmed-Email:  shakil@jhorotek.com-Phone:  0171254896-Image:  avatar-11.jpg-Role Type:  END USER - INFO REQUEST Designation:  -Rank:  COLONEL-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  CPC-1-Reporting Officer', 1, 'Super Admin'),
(138, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_rank', ' Rank Create', '2018-04-24 06:02:55', 'Created  Rank Name: TEST', '', 1, 'Super Admin'),
(139, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/reset_user_password', 'Change Password By Admin', '2018-04-24 07:28:41', 'Password Change For-rothin@jhoro.com', '', 1, 'Super Admin'),
(140, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_user', 'Create', '2018-04-24 07:30:28', 'Created  Users Name: Saifullah-Email:  str@gmail.com-Password:  123456-Phone:  01711500800-Image:  -Role Type:  END USER - INFO REQUEST Designation:  Others-Rank:  OTHER - PION-Wing:  Others Department/Battalion:  Others-Unit:  Others-Reporting Officer:  ', '', 1, 'Super Admin'),
(141, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/update_user', 'Update', '2018-04-24 20:10:35', 'Updated Users Name: Saifullah-Email:  str@gmail.com-Phone:  01711500800-Image:  -Role Type:  END USER - INFO REQUEST Designation:  Others-Rank:  MAJOR-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  RAB-1-Reporting Officer:  Others', 'Previous Data Users Name: Saifullah-Email:  str@gmail.com-Phone:  01711500800-Image:  -Role Type:  END USER - INFO REQUEST Designation:  -Rank:  OTHER - PION-Wing:  Others Department/Battalion:  Others-Unit:  Others-Reporting Officer:  Others', 1, 'Super Admin'),
(142, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_user', 'Create', '2018-04-24 20:12:29', 'Created  Users Name: Mr Top-Email:  top@gmail.com-Password:  123456-Phone:  01711223344-Image:  -Role Type:  Admin Designation:  Commanding Officers-Rank:  LIEUTENANT COLONEL-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  RAB-1-Reporting Officer', '', 1, 'Super Admin'),
(143, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_appointment', ' Appointment Create', '2018-04-24 20:15:39', 'Created  Appointment Name: BATTALION HQ', '', 1, 'Super Admin'),
(144, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_rt_officer', ' Reporting Officer Create', '2018-04-24 20:16:48', 'Created  Reporting Officer Name: ADG OPERATIONS', '', 1, 'Super Admin'),
(145, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/update_user', 'Update', '2018-04-24 20:17:39', 'Updated Users Name: Mr Top-Email:  top@gmail.com-Phone:  01711223344-Image:  -Role Type:  Admin Designation:  Commanding Officers-Rank:  LIEUTENANT COLONEL-Wing:  RAB BATTALION Department/Battalion:  BATTALION HQ-Unit:  RAB-1-Reporting Officer:  ADG OPERA', 'Previous Data Users Name: Mr Top-Email:  top@gmail.com-Phone:  01711223344-Image:  -Role Type:  Admin Designation:  -Rank:  LIEUTENANT COLONEL-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  CPC-1-Reporting Officer:  Commanding Officer', 1, 'Super Admin'),
(146, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_designation', ' Designation Create', '2018-04-24 20:18:46', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(147, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/update_user', 'Update', '2018-04-24 20:19:38', 'Updated Users Name: Mr Top-Email:  top@gmail.com-Phone:  01711223344-Image:  -Role Type:  END USER - INFO REQUEST Designation:  Commanding Officers-Rank:  LIEUTENANT COLONEL-Wing:  RAB BATTALION Department/Battalion:  BATTALION HQ-Unit:  RAB-1-Reporting O', 'Previous Data Users Name: Mr Top-Email:  top@gmail.com-Phone:  01711223344-Image:  -Role Type:  Admin Designation:  -Rank:  LIEUTENANT COLONEL-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  BATTALION HQ-Reporting Officer:  ADG OPERATIONS', 1, 'Super Admin'),
(148, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/update_user', 'Update', '2018-04-24 20:21:39', 'Updated Users Name: Shamim Ahammed-Email:  shamim@jhorotek.com-Phone:  01747956555-Image:  -Role Type:  END USER - INFO REQUEST Designation:  Company Commander-Rank:  MAJOR-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  RAB-1-Reporting Officer: ', 'Previous Data Users Name: Shamim Ahammed-Email:  shamim@jhorotek.com-Phone:  01747956555-Image:  10299-200.png-Role Type:  END USER - INFO REQUEST Designation:  -Rank:  COMMANDER-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  CPC-1-Reporting Off', 1, 'Super Admin'),
(149, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/reset_user_password', 'Change Password By Admin', '2018-04-24 20:22:16', 'Password Change For-rothin@jhoro.com', '', 1, 'Super Admin'),
(150, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/update_user', 'Update', '2018-04-24 20:23:58', 'Updated Users Name: Shamim Ahammed-Email:  shamim@jhorotek.com-Phone:  01747956555-Image:  -Role Type:  END USER - INFO REQUEST Designation:  Company Commander-Rank:  MAJOR-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  RAB-1-Reporting Officer: ', 'Previous Data Users Name: Shamim Ahammed-Email:  shamim@jhorotek.com-Phone:  01747956555-Image:  10299-200.png-Role Type:  END USER - INFO REQUEST Designation:  -Rank:  MAJOR-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  CPC-1-Reporting Officer', 1, 'Super Admin'),
(151, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/reset_user_password', 'Change Password By Admin', '2018-04-24 20:24:14', 'Password Change For-rothin@jhoro.com', '', 1, 'Super Admin'),
(152, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/update_user', 'Update', '2018-04-24 20:26:09', 'Updated Users Name: Mamun Ahammed-Email:  mamun@jhorotek.com-Phone:  01724579654-Image:  -Role Type:  Admin Designation:  Commanding Officers-Rank:  Sr ASP-Wing:  RAB BATTALION Department/Battalion:  BATTALION HQ-Unit:  RAB-1-Reporting Officer:  Commandin', 'Previous Data Users Name: Mamun Ahammed-Email:  mamun@jhorotek.com-Phone:  01724579654-Image:  f-3.jpg-Role Type:  Admin Designation:  -Rank:  BRIGADIER GENERAL-Wing:  RAB BATTALION Department/Battalion:  RAB-2-Unit:  CPC-1-Reporting Officer:  Commanding ', 1, 'Super Admin'),
(153, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/reset_user_password', 'Change Password By Admin', '2018-04-24 20:26:27', 'Password Change For-rothin@jhoro.com', '', 1, 'Super Admin'),
(154, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/user_delete/15', 'Delete', '2018-04-24 20:26:40', 'Delete User-top@gmail.com', '', 1, 'Super Admin'),
(155, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/user_delete/3', 'Delete', '2018-04-24 20:26:52', 'Delete User-mamun@jhorotek.com', '', 1, 'Super Admin'),
(156, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/user_delete/4', 'Delete', '2018-04-24 20:26:59', 'Delete User-najmul@jhorotek.com', '', 1, 'Super Admin'),
(157, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/user_delete/10', 'Delete', '2018-04-24 20:27:02', 'Delete User-sharmin@jhorotek.com', '', 1, 'Super Admin'),
(158, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/user_delete/11', 'Delete', '2018-04-24 20:27:07', 'Delete User-mourin@jhorotek.com', '', 1, 'Super Admin'),
(159, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/user_delete/5', 'Delete', '2018-04-24 20:27:12', 'Delete User-shamim@jhorotek.com', '', 1, 'Super Admin'),
(160, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/user_delete/2', 'Delete', '2018-04-24 20:27:16', 'Delete User-', '', 1, 'Super Admin'),
(161, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/user_delete/14', 'Delete', '2018-04-24 20:27:19', 'Delete User-str@gmail.com', '', 1, 'Super Admin'),
(162, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/user_delete/8', 'Delete', '2018-04-24 20:27:23', 'Delete User-habib@jhorotek.com', '', 1, 'Super Admin'),
(163, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/user_delete/13', 'Delete', '2018-04-24 20:27:27', 'Delete User-liton@jhorotek.com', '', 1, 'Super Admin'),
(164, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/user_delete/12', 'Delete', '2018-04-24 20:27:30', 'Delete User-', '', 1, 'Super Admin'),
(165, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/user_delete/9', 'Delete', '2018-04-24 20:27:32', 'Delete User-ahshan@jhorotek.com', '', 1, 'Super Admin'),
(166, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/user_delete/7', 'Delete', '2018-04-24 20:27:35', 'Delete User-tanvir@jhorotek.com', '', 1, 'Super Admin'),
(167, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/user_delete/6', 'Delete', '2018-04-24 20:27:39', 'Delete User-shakil@jhorotek.com', '', 1, 'Super Admin'),
(168, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_user', 'Create', '2018-04-24 20:31:28', 'Created  Users Name: RAB-1 CO-Email:  rab1co@gmail.com-Password:  123456-Phone:  01710000000-Image:  -Role Type:  END USER - INFO REQUEST Designation:  Commanding Officers-Rank:  LIEUTENANT COLONEL-Wing:  RAB BATTALION Department/Battalion:  BATTALION HQ-', '', 1, 'Super Admin'),
(169, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_user', 'Create', '2018-04-24 20:33:37', 'Created  Users Name: RAB-1 USER-1-Email:  rab1user1@gmail.com-Password:  123456-Phone:  01720000000-Image:  -Role Type:  END USER - INFO REQUEST Designation:  Duty Officer-Rank:  Others-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  RAB-1-Report', '', 1, 'Super Admin'),
(170, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/update_user', 'Update', '2018-04-24 20:34:29', 'Updated Users Name: RAB-1 USER-1-Email:  rab1user1@gmail.com-Phone:  01720000000-Image:  -Role Type:  END USER - INFO REQUEST Designation:  Duty Officer-Rank:  Others-Wing:  RAB BATTALION Department/Battalion:  CPC-1-Unit:  RAB-1-Reporting Officer:  Compa', 'Previous Data Users Name: RAB-1 USER-1-Email:  rab1user1@gmail.com-Phone:  01720000000-Image:  -Role Type:  END USER - INFO REQUEST Designation:  -Rank:  Others-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  CPC-1-Reporting Officer:  Company Com', 1, 'Super Admin'),
(171, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_battalion', ' Battalion Create', '2018-04-24 20:40:40', 'Created  Battalion Name: ', '', 1, 'Super Admin'),
(172, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_rt_officer', ' Reporting Officer Create', '2018-04-24 20:41:28', 'Created  Reporting Officer Name: Deputy Director', '', 1, 'Super Admin'),
(173, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/edit_battalion', 'Update', '2018-04-24 20:43:03', 'Updated Battalion Name: ', 'Previous Battalion Name: IMMC CELL', 1, 'Super Admin'),
(174, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_appointment', ' Appointment Create', '2018-04-24 20:43:50', 'Created  Appointment Name: REQUEST PROVIDER', '', 1, 'Super Admin'),
(175, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/edit_appointment', 'Update', '2018-04-24 20:49:07', 'Updated Appointment Name: ', 'Previous Appointment Name: REQUEST PROVIDER', 1, 'Super Admin'),
(176, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/edit_appointment', 'Update', '2018-04-24 20:49:28', 'Updated Appointment Name: ', 'Previous Appointment Name: RAB FORCES HQ', 1, 'Super Admin'),
(177, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/edit_battalion', 'Update', '2018-04-24 20:49:50', 'Updated Battalion Name: ', 'Previous Battalion Name: IMMC CELL', 1, 'Super Admin'),
(178, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/edit_battalion', 'Update', '2018-04-24 20:58:55', 'Updated Battalion Name: ', 'Previous Battalion Name: RAB FORCES HQ', 1, 'Super Admin'),
(179, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/edit_battalion', 'Update', '2018-04-24 20:59:09', 'Updated Battalion Name: ', 'Previous Battalion Name: INT WING', 1, 'Super Admin');
INSERT INTO `log_details` (`log_details_id`, `user_name`, `activity_url`, `action_type`, `action_time`, `activity_details`, `prev_log`, `user_id`, `user_type`) VALUES
(180, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_appointment', ' Appointment Create', '2018-04-24 20:59:54', 'Created  Appointment Name: ANTI-TERRORISM', '', 1, 'Super Admin'),
(181, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_appointment', ' Appointment Create', '2018-04-24 21:00:05', 'Created  Appointment Name: ANTI-EXTREMIST', '', 1, 'Super Admin'),
(182, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/edit_rt_officer', 'Reporting Officer Update', '2018-04-24 21:00:58', 'Updated Reporting Officer Name: Director - INT', 'Previous Reporting Officer Name: Deputy Director', 1, 'Super Admin'),
(183, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_rt_officer', ' Reporting Officer Create', '2018-04-24 21:01:24', 'Created  Reporting Officer Name: Deputy Director - INT', '', 1, 'Super Admin'),
(184, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_designation', ' Designation Create', '2018-04-24 21:03:23', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(185, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_designation', ' Designation Create', '2018-04-24 21:03:46', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(186, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_designation', ' Designation Create', '2018-04-24 21:04:21', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(187, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_appointment', ' Appointment Create', '2018-04-24 21:06:49', 'Created  Appointment Name: INT WING HQ', '', 1, 'Super Admin'),
(188, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_designation', ' Designation Create', '2018-04-24 21:07:45', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(189, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_designation', ' Designation Create', '2018-04-24 21:08:01', 'Created  Designation Name: ', '', 1, 'Super Admin'),
(190, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_user', 'Create', '2018-04-24 21:09:17', 'Created  Users Name: INT DIRECTOR-Email:  intdirector@gmail.com-Password:  123456-Phone:  01715000000-Image:  -Role Type:  Admin Designation:  Director - INT-Rank:  LIEUTENANT COLONEL-Wing:  INTELLIGENCE WING Department/Battalion:  INT WING HQ-Unit:  INT ', '', 1, 'Super Admin'),
(191, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_user', 'Create', '2018-04-24 21:10:42', 'Created  Users Name: IMMC SUPPORT-1-Email:  immcsupport1@gmail.com-Password:  123456-Phone:  01713000000-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  PEON-Rank:  OTHER - PION-Wing:  INTELLIGENCE WING Department/Battalion:  IMMC CELL-Unit:  INT WIN', '', 1, 'Super Admin'),
(192, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/update_user', 'Update', '2018-04-24 22:46:43', 'Updated Users Name: IMMC SUPPORT-1-Email:  immcsupport1@gmail.com-Phone:  01713000000-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  PEON-Rank:  OTHER - PION-Wing:  RAB BATTALION Department/Battalion:  BATTALION HQ-Unit:  RAB-1-Reporting Officer:  D', 'Previous Data Users Name: IMMC SUPPORT-1-Email:  immcsupport1@gmail.com-Phone:  01713000000-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  -Rank:  OTHER - PION-Wing:  INTELLIGENCE WING Department/Battalion:  INT WING HQ-Unit:  IMMC CELL-Reporting Of', 1, 'Super Admin'),
(193, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/update_user', 'Update', '2018-04-24 22:47:40', 'Updated Users Name: IMMC SUPPORT-1-Email:  immcsupport1@gmail.com-Phone:  01713000000-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  PEON-Rank:  OTHER - PION-Wing:  INTELLIGENCE WING Department/Battalion:  IMMC CELL-Unit:  INT WING HQ-Reporting Offi', 'Previous Data Users Name: IMMC SUPPORT-1-Email:  immcsupport1@gmail.com-Phone:  01713000000-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  -Rank:  OTHER - PION-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  BATTALION HQ-Reporting Officer: ', 1, 'Super Admin'),
(194, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/update_user', 'Update', '2018-04-24 23:21:44', 'Updated Users Name: IMMC SUPPORT-1-Email:  immcsupport1@gmail.com-Phone:  01713000000-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  PEON-Rank:  OTHER - PION-Wing:  RAB BATTALION Department/Battalion:  BATTALION HQ-Unit:  RAB-1-Reporting Officer:  D', 'Previous Data Users Name: IMMC SUPPORT-1-Email:  immcsupport1@gmail.com-Phone:  01713000000-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  -Rank:  OTHER - PION-Wing:  INTELLIGENCE WING Department/Battalion:  INT WING HQ-Unit:  IMMC CELL-Reporting Of', 1, 'Super Admin'),
(195, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/update_user', 'Update', '2018-04-24 23:22:42', 'Updated Users Name: IMMC SUPPORT-1-Email:  immcsupport1@gmail.com-Phone:  01713000000-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  PEON-Rank:  OTHER - PION-Wing:  RAB BATTALION Department/Battalion:  BATTALION HQ-Unit:  RAB-1-Reporting Officer:  D', 'Previous Data Users Name: IMMC SUPPORT-1-Email:  immcsupport1@gmail.com-Phone:  01713000000-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  -Rank:  OTHER - PION-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  BATTALION HQ-Reporting Officer: ', 1, 'Super Admin'),
(196, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/update_user', 'Update', '2018-04-24 23:23:34', 'Updated Users Name: IMMC SUPPORT-1-Email:  immcsupport1@gmail.com-Phone:  01713000000-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  PEON-Rank:  OTHER - PION-Wing:  RAB BATTALION Department/Battalion:  BATTALION HQ-Unit:  RAB-1-Reporting Officer:  D', 'Previous Data Users Name: IMMC SUPPORT-1-Email:  immcsupport1@gmail.com-Phone:  01713000000-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  -Rank:  OTHER - PION-Wing:  RAB BATTALION Department/Battalion:  RAB-1-Unit:  BATTALION HQ-Reporting Officer: ', 1, 'Super Admin'),
(197, 'demo@jhorotek.com', 'http://utility.jhorotek.com/rialtonew/settings/save_user', 'Create', '2018-04-24 23:25:36', 'Created  Users Name: immcsupport-2-Email:  immcsupport2@gmail.com-Password:  123456-Phone:  01715000000-Image:  -Role Type:  IMMC SUPPORT TEAM Designation:  Commanding Officers-Rank:  OTHER - PION-Wing:  RAB BATTALION Department/Battalion:  BATTALION HQ-U', '', 1, 'Super Admin');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menuid` int(11) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `menu_url` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL,
  `icon_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menuid`, `menu_title`, `menu_url`, `parent`, `icon_class`) VALUES
(8, 'Settings', '', 0, ''),
(10, 'User', 'settings/user_list', 8, ''),
(12, 'Menu', 'settings/menu_list', 8, ''),
(14, 'Function', 'settings/function_list', 8, ''),
(16, 'Access', 'settings/access_list', 8, ''),
(17, 'Change Password', 'settings/change_password', 8, ''),
(48, 'Dashboard', 'dashboards/admin_dashboard', 0, ''),
(52, 'Cell Triangulation', 'CellTriangulation/index', 0, ''),
(54, 'Plotted Cellsite', 'PlottedCellsite/index', 0, ''),
(55, 'Info Request', 'infoRequest/index', 0, ''),
(56, 'Request', '#', 0, ''),
(57, 'My Request', 'Reports/myRequest', 56, ''),
(58, 'Request Logs', 'Reports/requestLogs', 56, ''),
(59, 'Role', 'settings/user_type', 8, ''),
(60, 'Designation', 'settings/designation', 8, ''),
(61, 'Rank', 'settings/rank', 8, ''),
(62, 'Wing', 'settings/wing', 8, ''),
(63, 'Unit/Job Location', 'settings/appointment', 8, ''),
(64, 'Deployment', 'settings/battalion', 8, ''),
(65, 'RT Officer', 'settings/rt_officer', 8, ''),
(66, 'Reference Details', 'settings/reference_details_list', 8, ''),
(75, 'Crime Info', 'admin/crime', 8, ''),
(76, 'Upload', 'Admin/index', 8, ''),
(79, 'Dashboard Access', 'settings/dashboard_access', 8, ''),
(80, 'Audit', 'reports/check_activitis', 0, ''),
(81, 'Dashboard', 'dashboards/common_dashboard', 0, ''),
(82, 'Dashboard', 'dashboards/super_admin_dashboard', 0, ''),
(84, 'Device', 'reports/check_activitis', 0, ''),
(86, 'Dashboard', 'dashboards/info_request_dashboard', 0, ''),
(87, 'Dashboard', 'dashboards/request_provider_dashboard', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `menu_role`
--

CREATE TABLE `menu_role` (
  `menu_role_id` int(11) NOT NULL,
  `menuid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_role`
--

INSERT INTO `menu_role` (`menu_role_id`, `menuid`, `roleid`, `priority`) VALUES
(1566, 8, 0, 0),
(1567, 17, 0, 0),
(1568, 52, 0, 0),
(1569, 54, 0, 0),
(1570, 55, 0, 0),
(1571, 56, 0, 0),
(1572, 57, 0, 0),
(1573, 74, 0, 0),
(1574, 75, 0, 0),
(1575, 8, 5, 0),
(1576, 17, 5, 0),
(1577, 52, 5, 0),
(1578, 54, 5, 0),
(1579, 55, 5, 0),
(1580, 56, 5, 0),
(1581, 57, 5, 0),
(2284, 8, 7, 2),
(2285, 17, 7, 0),
(2286, 81, 7, 0),
(2290, 8, 2, 0),
(2291, 10, 2, 0),
(2292, 12, 2, 0),
(2293, 14, 2, 0),
(2294, 16, 2, 0),
(2295, 17, 2, 0),
(2296, 48, 2, 0),
(2297, 52, 2, 0),
(2298, 54, 2, 0),
(2299, 55, 2, 0),
(2300, 56, 2, 0),
(2301, 57, 2, 0),
(2302, 58, 2, 0),
(2303, 59, 2, 0),
(2304, 60, 2, 0),
(2305, 61, 2, 0),
(2306, 62, 2, 0),
(2307, 63, 2, 0),
(2308, 64, 2, 0),
(2309, 65, 2, 0),
(2310, 66, 2, 0),
(2311, 75, 2, 0),
(2312, 76, 2, 0),
(2313, 79, 2, 0),
(2314, 8, 1, 0),
(2315, 10, 1, 0),
(2316, 12, 1, 0),
(2317, 14, 1, 0),
(2318, 16, 1, 0),
(2319, 17, 1, 0),
(2320, 52, 1, 0),
(2321, 54, 1, 0),
(2322, 55, 1, 0),
(2323, 56, 1, 0),
(2324, 57, 1, 0),
(2325, 58, 1, 0),
(2326, 59, 1, 0),
(2327, 60, 1, 0),
(2328, 61, 1, 0),
(2329, 62, 1, 0),
(2330, 63, 1, 0),
(2331, 64, 1, 0),
(2332, 65, 1, 0),
(2333, 66, 1, 0),
(2334, 75, 1, 0),
(2335, 76, 1, 0),
(2336, 79, 1, 0),
(2337, 80, 1, 0),
(2338, 82, 1, 0),
(2339, 84, 1, 0),
(2460, 8, 3, 0),
(2461, 17, 3, 0),
(2462, 55, 3, 0),
(2463, 56, 3, 0),
(2464, 57, 3, 0),
(2465, 86, 3, 0),
(2493, 8, 4, 0),
(2494, 17, 4, 0),
(2495, 87, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE `ranks` (
  `ranks_id` int(11) NOT NULL,
  `rank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`ranks_id`, `rank`) VALUES
(4, 'CAPTAIN'),
(5, 'MAJOR'),
(6, 'LIEUTENANT COLONEL'),
(7, 'COLONEL'),
(8, 'BRIGADIER GENERAL'),
(9, 'LIEUTENANT COMMANDER'),
(10, 'COMMANDER'),
(11, 'SQUADRON LEADER'),
(12, 'WING COMMANDER'),
(13, 'ASP'),
(14, 'Sr ASP'),
(15, 'Addl ASP'),
(16, 'OTHER - PION'),
(17, 'Others'),
(18, 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `reference_details`
--

CREATE TABLE `reference_details` (
  `reference_details_id` int(11) NOT NULL,
  `reference_type` varchar(255) NOT NULL,
  `owner_of_reference` varchar(255) NOT NULL,
  `designation` text NOT NULL,
  `organization` text NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `reference_number` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reference_details`
--

INSERT INTO `reference_details` (`reference_details_id`, `reference_type`, `owner_of_reference`, `designation`, `organization`, `contact_no`, `contact_email`, `reference_number`, `relation`, `priority`, `created_by`, `created_date`) VALUES
(1, 'VVIP', 'President', 'President', 'Govt', '01711500888', 'st@xe.com', '01711500888', 'self', 'high', 1, '2018-04-25'),
(2, 'VIP', 'President', 'President', 'Govt', '8801711500888', 'st@xe.com', '+8801711500888', 'self', 'high', 1, '2018-04-25'),
(3, 'reference type', 'owner reference', 'Owner''s Designation / rank', 'owner''s organization', '8801711500800', 'test@gmail.com', '8801715000800', 'Owner Relation ', 'high', 1, '2018-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roleid` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleid`, `role_name`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'END USER - INFO REQUEST'),
(4, 'IMMC SUPPORT TEAM'),
(5, 'Operator'),
(6, 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `rt_officers`
--

CREATE TABLE `rt_officers` (
  `rt_officers_id` int(11) NOT NULL,
  `battalions_id` int(11) NOT NULL,
  `rt_officer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rt_officers`
--

INSERT INTO `rt_officers` (`rt_officers_id`, `battalions_id`, `rt_officer`) VALUES
(1, 1, 'Commanding Officer'),
(2, 15, 'Others'),
(3, 1, 'Company Commander'),
(4, 1, 'Duty Officer'),
(5, 1, 'Intelligence Officer'),
(6, 1, 'Operations Officer'),
(7, 2, 'Company Commander'),
(8, 2, 'Intelligence Officer'),
(9, 2, 'Commanding Officer'),
(10, 2, 'Second in Command'),
(11, 1, 'Second in Command'),
(12, 1, 'ADG OPERATIONS'),
(13, 16, 'Director - INT'),
(14, 16, 'Deputy Director - INT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities`
--

CREATE TABLE `tbl_activities` (
  `id` int(11) NOT NULL,
  `request_url` varchar(500) NOT NULL,
  `data` text NOT NULL,
  `date` datetime NOT NULL,
  `request_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_activities`
--

INSERT INTO `tbl_activities` (`id`, `request_url`, `data`, `date`, `request_by`) VALUES
(1, 'http://utility.jhorotek.com/rialtonew/settings/wing', '{"user_type":"testagain","user_type_id":"12","request_type":"update","request_url":"http:\\/\\/utility.jhorotek.com\\/rialtonew\\/settings\\/wing"}', '2018-01-22 14:49:10', 2),
(2, 'http://utility.jhorotek.com/rialtonew/settings/wing', '{"request_type":"delete","request_url":"http:\\/\\/utility.jhorotek.com\\/rialtonew\\/settings\\/wing","user_type_id":"12"}', '2018-01-22 14:50:55', 2),
(3, 'http://utility.jhorotek.com/rialtonew/settings/appointment', '{"request_type":"update","request_url":"http:\\/\\/utility.jhorotek.com\\/rialtonew\\/settings\\/appointment","user_type":"Test","user_type_id":""}', '2018-01-22 14:51:35', 2),
(4, 'http://utility.jhorotek.com/rialtonew/settings/appointment', '{"request_type":"delete","request_url":"http:\\/\\/utility.jhorotek.com\\/rialtonew\\/settings\\/appointment","user_type_id":"27"}', '2018-01-22 14:51:38', 2),
(5, 'http://utility.jhorotek.com/rialtonew/settings/battalion', '{"request_type":"update","request_url":"http:\\/\\/utility.jhorotek.com\\/rialtonew\\/settings\\/battalion","user_type":"Test","user_type_id":""}', '2018-01-22 14:51:51', 2),
(6, 'http://utility.jhorotek.com/rialtonew/settings/battalion', '{"request_type":"delete","request_url":"http:\\/\\/utility.jhorotek.com\\/rialtonew\\/settings\\/battalion","user_type_id":"25"}', '2018-01-22 14:51:57', 2),
(7, 'http://utility.jhorotek.com/rialtonew/settings/rank', '{"request_type":"update","request_url":"http:\\/\\/utility.jhorotek.com\\/rialtonew\\/settings\\/rank","user_type":"test","user_type_id":""}', '2018-01-22 14:52:27', 2),
(8, 'http://utility.jhorotek.com/rialtonew/settings/rank', '{"request_type":"delete","request_url":"http:\\/\\/utility.jhorotek.com\\/rialtonew\\/settings\\/rank","user_type_id":"17"}', '2018-01-22 14:52:33', 2),
(9, '', '{"request_type":"delete","request_url":"http:\\/\\/localhost\\/rialto\\/settings\\/wing","wing":"Wing"}', '2018-01-28 09:53:54', 1),
(10, '', '{"wing":"Wing","user_type_id":"","request_type":"update","request_url":"http:\\/\\/localhost\\/rialto\\/settings\\/wing"}', '2018-01-28 10:11:55', 1),
(11, '', '{"request_type":"update","request_url":"http:\\/\\/utility.jhorotek.com\\/rialtonew\\/settings\\/rank","user_type":"TEST","user_type_id":""}', '2018-04-24 08:02:55', 1),
(12, '', '{"request_type":"delete","request_url":"http:\\/\\/utility.jhorotek.com\\/rialtonew\\/settings\\/reference_details_list","function_id":"1"}', '2018-04-25 01:32:09', 1);

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
  `cell_beamspan` varchar(12) DEFAULT NULL,
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
(1, 'DHDHN92', '108', 0, 'DFQ4L', '108DFQ4L', 0, NULL, '1000', '23.75400000', '90.37500000', 'IBS_Roxy Paints', 'Ward No-49', 'Dhanmondi', 'Dhaka', 'Dhaka', 'DualBand', 'AIRTEL', '2G', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(2, 'GGKOT18', '79', 0, 'KGI2A', '79KGI2A', 0, NULL, '1000', '22.99180000', '90.37500000', 'Purbopara_Gacha', 'Amtali', 'Kotalipara', 'Gopalganj', 'Dhaka', 'DualBand', 'AIRTEL', '2G', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(3, 'GGKOT18', '79', 0, 'KGI2B', '79KGI2B', 115, NULL, '1000', '22.99180000', '90.37500000', 'Purbopara_Gacha', 'Amtali', 'Kotalipara', 'Gopalganj', 'Dhaka', 'DualBand', 'AIRTEL', '2G', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(4, 'GGKOT18', '79', 0, 'KGI2C', '79KGI2C', 270, NULL, '1000', '22.99180000', '90.37500000', 'Purbopara_Gacha', 'Amtali', 'Kotalipara', 'Gopalganj', 'Dhaka', 'DualBand', 'AIRTEL', '2G', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(5, 'DHBDD79', '221', 0, 'DFR1L', '221DFR1L', 0, NULL, '1000', '23.81014900', '90.37500000', 'Apollo Hospital_IBS_U', 'Bhatara', 'Badda', 'Dhaka', 'Dhaka', 'DualBand', 'ROBI', '2G', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(6, 'DHBDD79', '221', 0, 'DFR1U', '221DFR1U', 0, NULL, '1000', '23.81014900', '90.37500000', 'Apollo Hospital_IBS_U', 'Bhatara', 'Badda', 'Dhaka', 'Dhaka', 'DualBand', 'ROBI', '2G', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(7, 'GGKOT19', '79', 0, 'KGI3A', '79KGI3A', 90, NULL, '1000', '23.11220000', '90.37500000', 'Ramnagar_Kalabari', 'Kalabari', 'Kotalipara', 'Gopalganj', 'Dhaka', 'DualBand', 'ROBI', '2G', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(8, 'GGKOT19', '79', 0, 'KGI3B', '79KGI3B', 215, NULL, '1000', '23.11220000', '90.37500000', 'Ramnagar_Kalabari', 'Kalabari', 'Kotalipara', 'Gopalganj', 'Dhaka', 'DualBand', 'ROBI', '2G', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(9, 'DHK_U0347', '758', 0, '13467', '75813467', 0, NULL, '1000', '23.77212', '90.39034', 'Falcon Tower, Bijoy Shoroni, Tejgaon, Dhaka', 'Not Available', 'Tejgaon', 'Dhaka', 'Dhaka', 'Regular', 'BVANGLALINK', 'Not A', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(10, 'DHK_U0347', '758', 0, '13468', '75813468', 120, NULL, '1000', '23.77212', '90.39034', 'Falcon Tower, Bijoy Shoroni, Tejgaon, Dhaka', 'Not Available', 'Tejgaon', 'Dhaka', 'Dhaka', 'Regular', 'BVANGLALINK', 'Not A', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(11, 'DHK_U0347', '758', 0, '13469', '75813469', 210, NULL, '1000', '23.77212', '90.39034', 'Falcon Tower, Bijoy Shoroni, Tejgaon, Dhaka', 'Not Available', 'Tejgaon', 'Dhaka', 'Dhaka', 'Regular', 'BVANGLALINK', 'Not A', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(12, 'DHK_U0200', '750', 0, '11997', '75011997', 350, NULL, '1000', '23.7813', '90.42598', 'GHA-103/1, Middle Badda,Dhaka-1212', 'Bhatara', 'Badda', 'Dhaka', 'Dhaka', 'Regular', 'BVANGLALINK', 'Not A', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(13, 'DHK_U0200', '750', 0, '11998', '75011998', 120, NULL, '1000', '23.7813', '90.42598', 'GHA-103/1, Middle Badda,Dhaka-1212', 'Bhatara', 'Badda', 'Dhaka', 'Dhaka', 'Regular', 'BVANGLALINK', 'Not A', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(14, 'DHK_U0200', '750', 0, '11999', '75011999', 220, NULL, '1000', '23.7813', '90.42598', 'GHA-103/1, Middle Badda,Dhaka-1212', 'Bhatara', 'Badda', 'Dhaka', 'Dhaka', 'Regular', 'BVANGLALINK', 'Not A', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(15, 'DHK_U4040', '750', 0, '50397', '75050397', 120, NULL, '1000', '23.77887', '90.42437', 'H # Ga-18/3, Middle Badda, Dhaka', 'Bhatara', 'Badda', 'Dhaka', 'Dhaka', 'Regular', 'BVANGLALINK', 'Not A', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(16, 'DHK_U4040', '750', 0, '50398', '75050398', 220, NULL, '1000', '23.77887', '90.42437', 'H # Ga-18/3, Middle Badda, Dhaka', 'Bhatara', 'Badda', 'Dhaka', 'Dhaka', 'Regular', 'BVANGLALINK', 'Not A', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(17, 'DHK_U4040', '750', 0, '50399', '75050399', 350, NULL, '1000', '23.77887', '90.42437', 'H # Ga-18/3, Middle Badda, Dhaka', 'Bhatara', 'Badda', 'Dhaka', 'Dhaka', 'Regular', 'BVANGLALINK', 'Not A', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(18, 'DHBAD1W', '1034', 0, '32251', '103432251', 40, NULL, '1000', '23.7844', '90.4225', 'House # Cha 22/1, North Badda, P.S.- Gulshan, Dhaka-1212,Gulshan,Dhaka', 'Satarkul', 'Gulshan', 'Dhaka', 'Dhaka', 'Not Available', 'GRAMEENPHONE', '3G', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(19, 'DHBAD1W', '1034', 0, '32252', '103432252', 120, NULL, '1000', '23.7844', '90.4225', 'House # Cha 22/1, North Badda, P.S.- Gulshan, Dhaka-1212,Gulshan,Dhaka', 'Satarkul', '', '', '', 'Not Available', 'GRAMEENPHONE', '3G', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(20, 'DHBAD1W', '1034', 0, '32253', '103432253', 210, NULL, '1000', '23.7844', '90.4225', 'House # Cha 22/1, North Badda, P.S.- Gulshan, Dhaka-1212,Gulshan,Dhaka', 'Satarkul', '', '', '', 'Not Available', 'GRAMEENPHONE', '3G', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(21, 'DHAKJIW', '1112', 0, '27735', '111227735', 0, NULL, '1000', '23.7262', '90.4186', 'Akij Chamber, Dilkusha, Motijheel C/A, Dhaka,,Dhaka', 'Not Available', 'Motijheel', 'Dhaka', 'Dhaka', 'Not Available', 'GRAMEENPHONE', '3G', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(22, 'DHAKJIW', '1112', 0, '27736', '111227736', 0, NULL, '1000', '23.7262', '90.4186', 'Akij Chamber, Dilkusha, Motijheel C/A, Dhaka,,Dhaka', 'Not Available', 'Motijheel', 'Dhaka', 'Dhaka', 'Not Available', 'GRAMEENPHONE', '3G', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(23, 'DHTJGAW', '1033', 0, '19292', '103319292', 0, NULL, '1000', '23.7715', '90.4115', '205/1, Tejgaon Iindustrial Area, Gulshan Link Road,Gulshan,Gulshan,Dhaka', 'Not Available', 'Tejgaon', 'Dhaka', 'Dhaka', 'Not Available', 'GRAMEENPHONE', '3G', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(24, 'DHTJGAW', '1033', 0, '19293', '103319293', 170, NULL, '1000', '23.7715', '90.4115', '205/1, Tejgaon Iindustrial Area, Gulshan Link Road,Gulshan,Gulshan,Dhaka', 'Not Available', 'Tejgaon', 'Dhaka', 'Dhaka', 'Not Available', 'GRAMEENPHONE', '3G', '2018-04-29 17:07:45', '2018-04-29 17:07:45'),
(25, 'DHTJGAW', '1033', 0, '19294', '103319294', 250, NULL, '1000', '23.7715', '90.4115', '205/1, Tejgaon Iindustrial Area, Gulshan Link Road,Gulshan,Gulshan,Dhaka', 'Not Available', 'Tejgaon', 'Dhaka', 'Dhaka', 'Not Available', 'GRAMEENPHONE', '3G', '2018-04-29 17:07:45', '2018-04-29 17:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_crimeinfo`
--

CREATE TABLE `tbl_crimeinfo` (
  `id` int(11) NOT NULL,
  `crime_name` varchar(100) NOT NULL,
  `crime_details` varchar(500) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isactive` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_crimeinfo`
--

INSERT INTO `tbl_crimeinfo` (`id`, `crime_name`, `crime_details`, `createat`, `isactive`) VALUES
(1, 'Murder', 'Family Murder', '2018-01-30 09:50:32', 1);

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
  `reference_type` varchar(255) NOT NULL,
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

INSERT INTO `tbl_internal_hotlist` (`id`, `reference_type`, `name`, `rank`, `wing`, `apt_name`, `contact_no`, `seviarity`, `email_alert`, `sms_alert`, `status`, `ref_createat`, `ref_createby`, `ref_modifiedby`, `ref_modifieddate`) VALUES
(1, '', 'Shamim Ahammed', 'rank', 'wing', 'apt', 'cont', 5, 'email', 'sms', '0', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(2, '', 'MD KAMRUL HASAN, PSC', 'LIEUTENANT COLONEL', 'RAB-11', 'CO', '01972837866', 4, 'opshq@rab.gov.bd', '1777710000', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(3, '', 'MD KAMRUL HASAN, PSC', 'LIEUTENANT COLONEL', 'RAB-11', 'CO', '8801914175177', 3, 'opshq@rab.gov.bd', '1777710000', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(4, '', 'MD KAMRUL HASAN, PSC', 'LIEUTENANT COLONEL', 'RAB-11', 'CO', '8801914175178', 2, 'opshq@rab.gov.bd', '1777710000', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(5, '', 'MD KAMRUL HASAN, PSC', 'LIEUTENANT COLONEL', 'RAB-11', 'CO', '8801914175179', 1, 'opshq@rab.gov.bd', '1777710000', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(6, '', 'SAMIA SULTANA', 'SR. ASP', 'RAB-1', 'OPERATION OFFICER /MTO', '8801914175180', 5, 'co1@rab.gov.bd', '1777710100', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(7, '', 'SAMIA SULTANA', 'SR. ASP', 'RAB-1', 'OPERATION OFFICER /MTO', '8801914175181', 4, 'co1@rab.gov.bd', '1777710100', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(8, '', 'SAMIA SULTANA', 'SR. ASP', 'RAB-1', 'OPERATION OFFICER /MTO', '8801914175182', 3, 'co1@rab.gov.bd', '1777710100', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(9, '', 'SAMIA SULTANA', 'SR. ASP', 'RAB-1', 'OPERATION OFFICER /MTO', '8801914175183', 2, 'co1@rab.gov.bd', '1777710100', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(10, '', 'SAMIA SULTANA', 'SR. ASP', 'RAB-1', 'OPERATION OFFICER /MTO', '8801914175184', 1, 'co1@rab.gov.bd', '1777710100', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(11, '', '', '', '', '', '8801914175185', 0, '', '', '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00');

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
  `info_mfs` varchar(20) NOT NULL,
  `info_scaned_pp` varchar(20) NOT NULL,
  `info_subs` varchar(20) NOT NULL,
  `registration` varchar(20) NOT NULL,
  `nid_pp` varchar(20) NOT NULL,
  `info_demographic` varchar(20) NOT NULL,
  `info_fnf` varchar(20) NOT NULL,
  `used_imei` varchar(20) NOT NULL,
  `recharge` varchar(20) NOT NULL,
  `info_ussd` varchar(20) NOT NULL,
  `ipdr` varchar(20) NOT NULL,
  `gprs_data` varchar(20) NOT NULL,
  `cdr_voice_sms` varchar(20) NOT NULL,
  `remarks_reference` varchar(20) NOT NULL,
  `reason_crime_subtype` varchar(20) NOT NULL,
  `reason_crime_type` varchar(20) NOT NULL,
  `placement` varchar(20) NOT NULL,
  `appointment` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `requested_by` varchar(20) NOT NULL,
  `self_user` varchar(20) NOT NULL,
  `date_end` varchar(20) NOT NULL,
  `date_start` varchar(20) NOT NULL,
  `mno_operator` varchar(20) NOT NULL,
  `msisdn` varchar(20) NOT NULL,
  `area_range` varchar(12) DEFAULT NULL,
  `createat` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_requestlogs`
--

INSERT INTO `tbl_requestlogs` (`id`, `user_id`, `source_url`, `laccellid`, `bts`, `lac`, `thana`, `operator`, `request_for`, `cellid`, `latitude`, `longitude`, `info_mfs`, `info_scaned_pp`, `info_subs`, `registration`, `nid_pp`, `info_demographic`, `info_fnf`, `used_imei`, `recharge`, `info_ussd`, `ipdr`, `gprs_data`, `cdr_voice_sms`, `remarks_reference`, `reason_crime_subtype`, `reason_crime_type`, `placement`, `appointment`, `designation`, `requested_by`, `self_user`, `date_end`, `date_start`, `mno_operator`, `msisdn`, `area_range`, `createat`) VALUES
(1, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', NULL, NULL, NULL, '', '', NULL, NULL, '23.11220000', '90.01850000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-02-13 11:08:17'),
(2, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', NULL, NULL, NULL, '', '', NULL, NULL, '23.11220000', '90.01850000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5000', '2018-02-13 11:09:07'),
(3, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', 'Badda', 'GRAMEENPHONE', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-02-26 18:46:19'),
(4, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', 'Badda', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-02-26 18:49:22'),
(5, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', 'Gulshan', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:42:36'),
(6, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', 'Gulshan', 'ROBI', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:42:57'),
(7, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:43:02'),
(8, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', 'Gulshan', 'ROBI', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:43:16'),
(9, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', 'Gulshan', 'GRAMEENPHONE', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:43:55'),
(10, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'BAR_B0214', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:44:55'),
(11, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'BAR_B0214', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:45:03'),
(12, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '607', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:45:32'),
(13, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '607', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:45:39'),
(14, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '607', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:45:40'),
(15, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '607', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:45:44'),
(16, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '665', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:45:54'),
(17, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:45:58'),
(18, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'DHBDD79', '', '', 'ROBI', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:46:39'),
(19, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'GGKOT18', '', '', 'ROBI', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:47:19'),
(20, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '605', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:48:12'),
(21, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', 'Gulshan', 'GRAMEENPHONE', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:48:43'),
(22, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'BAR_G0113', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:49:32'),
(23, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'DHDHN92', '', '', 'ROBI', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:50:14'),
(24, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', 'Gulshan', 'ROBI', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-24 12:50:49'),
(25, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'DHTJGAW', '', '', 'GRAMEENPHONE', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-25 01:40:43'),
(26, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '103319293', '', '', '', 'GRAMEENPHONE', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-25 01:42:00'),
(27, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-25 01:42:04'),
(28, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', 'Tejgaon', 'GRAMEENPHONE', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-25 01:43:22'),
(29, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'DHTJGAW', '', '', 'GRAMEENPHONE', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-25 01:48:42'),
(30, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', NULL, NULL, NULL, '', '', NULL, NULL, '23.7715', '90.4115', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-04-25 01:49:34'),
(31, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', NULL, NULL, NULL, '', '', NULL, NULL, '23.7715', '90.4115', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5000', '2018-04-25 01:51:42'),
(32, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', NULL, NULL, NULL, '', '', NULL, NULL, '23.7715', '90.4115', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3000', '2018-04-25 01:52:29'),
(33, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'BANGLALINK', NULL, NULL, '23.7715', '90.4115', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5000', '2018-04-25 01:53:38'),
(34, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'DHDHN92', '', '', 'AIRTEL', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-25 01:55:29'),
(35, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-25 01:55:33'),
(36, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'GGKOT18', '', '', 'AIRTEL', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-25 01:56:21'),
(37, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, 'BANGLALINK', NULL, '13467', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-25 01:57:45'),
(38, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, 'ROBI', NULL, 'KGI3B', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-25 01:58:51'),
(39, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, '', NULL, 'KGI3B', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-25 01:59:07'),
(40, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-25 01:59:10'),
(41, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'GBGBD02', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-26 08:36:07'),
(42, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', 'Tangail Sadar', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-28 16:14:27'),
(43, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', 'Tangail Sadar', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-28 16:19:43'),
(44, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'GRAMEENPHONE', NULL, NULL, '20.44', '90.05', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3000', '2018-04-28 16:27:02'),
(45, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', NULL, NULL, NULL, '', '', NULL, NULL, '23.754000', '90.3750000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5000', '2018-04-28 16:28:28'),
(46, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '221DFR1U', '', '', '', 'AIRTEL', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-29 01:18:09'),
(47, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '79KGI3B', '', '', '', 'ROBI', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-29 01:20:03'),
(48, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'GGKOT19', '', '', 'ROBI', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-29 23:06:25'),
(49, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'GGKOT19', '', '', 'ROBI', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-29 23:08:18'),
(50, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'DHBAD1W', '', '', 'GRAMEENPHONE', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-29 23:10:03'),
(51, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'DHTJGAW', '', '', 'GRAMEENPHONE', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-29 23:12:55'),
(52, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'DHTJGAW', '', '', 'GRAMEENPHONE', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-29 23:13:23'),
(53, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', 'DHK_U0347', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-29 23:16:52'),
(54, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-29 23:17:24'),
(55, '1', 'http://utility.jhorotek.com/rialtonew/RequestLogs/storeLogs', '103319294', '', '', '', 'GRAMEENPHONE', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-04-29 23:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_req_mno_msisdn`
--

CREATE TABLE `tbl_req_mno_msisdn` (
  `request_id` int(11) NOT NULL,
  `requested_for` int(11) DEFAULT NULL,
  `battalions_id` int(11) NOT NULL,
  `user_designation` varchar(50) DEFAULT NULL,
  `user_appointment` varchar(50) DEFAULT NULL,
  `user_placement` varchar(50) DEFAULT NULL,
  `date_requested` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `request_status` varchar(50) NOT NULL DEFAULT 'New',
  `completed_by` int(11) NOT NULL,
  `completed_date` datetime NOT NULL,
  `target_device` varchar(50) NOT NULL,
  `msisdn` varchar(30) DEFAULT NULL,
  `mno_operator` varchar(50) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `self_user` varchar(5) NOT NULL,
  `requested_by` varchar(12) NOT NULL,
  `info_demographic` varchar(50) NOT NULL,
  `reason_crime_type` varchar(50) NOT NULL,
  `reason_crime_subtype` varchar(50) NOT NULL,
  `remarks_reference` varchar(500) NOT NULL,
  `cdr_voice_sms` varchar(5) NOT NULL,
  `gprs_data` varchar(5) NOT NULL,
  `info_fnf` varchar(5) NOT NULL,
  `info_subs` varchar(5) NOT NULL,
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
  `document_name` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `pdf_name` varchar(255) NOT NULL,
  `audio_name` varchar(255) NOT NULL,
  `general_type` int(11) NOT NULL,
  `special` int(11) NOT NULL,
  `is_approved` int(11) NOT NULL,
  `approved_by` int(11) NOT NULL,
  `approved_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_req_mno_msisdn`
--

INSERT INTO `tbl_req_mno_msisdn` (`request_id`, `requested_for`, `battalions_id`, `user_designation`, `user_appointment`, `user_placement`, `date_requested`, `request_status`, `completed_by`, `completed_date`, `target_device`, `msisdn`, `mno_operator`, `date_start`, `date_end`, `self_user`, `requested_by`, `info_demographic`, `reason_crime_type`, `reason_crime_subtype`, `remarks_reference`, `cdr_voice_sms`, `gprs_data`, `info_fnf`, `info_subs`, `info_mfs`, `info_scaned_pp`, `recharge`, `used_imei`, `ipdr`, `info_ussd`, `registration`, `nid_pp`, `last_status`, `last_updated_by`, `last_updated_date`, `internal_control_status`, `external_control_status`, `hot_list_msisdn_status`, `document_name`, `image_name`, `pdf_name`, `audio_name`, `general_type`, `special`, `is_approved`, `approved_by`, `approved_date`) VALUES
(4, 16, 1, 'LIEUTENANT COLONEL', 'BATTALION HQ', 'RAB-1', '2018-04-24 00:00:00', 'Completed', 20, '2018-04-25 00:00:00', '', '01711500800', 'GRAMEENPHONE', '2018-04-01 00:00:00', '2018-04-25 00:00:00', '', '17', 'N', '1', '2', 'First IMMC Request only for CDR', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', NULL, NULL, NULL, '0', '0', '0', '', '04_CellSite_Plotting_from_CDR.JPG', '', '', 1, 0, 0, 0, '0000-00-00 00:00:00'),
(5, 16, 1, 'LIEUTENANT COLONEL', 'BATTALION HQ', 'RAB-1', '2018-04-25 00:00:00', 'New', 0, '0000-00-00 00:00:00', '', '0171500800', 'GRAMEENPHONE', '2018-04-03 00:00:00', '2018-04-25 00:00:00', '', '17', 'N', '1', '2', '2nd Info Request for IPDR', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'N', 'N', 'N', NULL, NULL, NULL, '0', '0', '0', '', '', '', '', 1, 0, 0, 0, '0000-00-00 00:00:00'),
(6, 16, 1, 'LIEUTENANT COLONEL', 'BATTALION HQ', 'RAB-1', '2018-04-25 00:00:00', 'New', 0, '0000-00-00 00:00:00', '', '01914175177', 'BANGLALINK', '2018-04-03 00:00:00', '2018-04-30 00:00:00', '', '17', 'N', '1', '2', '3rd Request for F&F but for Special Number', 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', NULL, NULL, NULL, '0', '0', '0', '', '', '', '', 1, 0, 0, 0, '0000-00-00 00:00:00'),
(7, 16, 1, 'LIEUTENANT COLONEL', 'BATTALION HQ', 'RAB-1', '2018-04-25 00:00:00', 'New', 0, '0000-00-00 00:00:00', '', '01711500888', 'GRAMEENPHONE', '2018-04-05 00:00:00', '2018-04-19 00:00:00', '', '17', 'N', '1', '1', 'special number for president', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'N', NULL, NULL, NULL, '0', '0', '0', '', '', '', '', 1, 0, 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_req_mno_msisdn_provider`
--

CREATE TABLE `tbl_req_mno_msisdn_provider` (
  `id` int(20) NOT NULL,
  `transacttion_id` varchar(50) NOT NULL,
  `request_id` varchar(50) NOT NULL,
  `user_generated_by` int(12) DEFAULT NULL,
  `user_designation` varchar(50) DEFAULT NULL,
  `user_appointment` varchar(50) DEFAULT NULL,
  `user_placement` varchar(50) DEFAULT NULL,
  `date_requested` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `request_status` varchar(50) NOT NULL DEFAULT 'New',
  `target_device` varchar(50) NOT NULL,
  `msisdn` varchar(30) DEFAULT NULL,
  `mno_operator` varchar(50) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `self_user` varchar(5) NOT NULL,
  `requested_by` varchar(12) NOT NULL,
  `designations_id` int(11) NOT NULL,
  `info_demographic` varchar(50) NOT NULL,
  `appointments_id` int(11) NOT NULL,
  `placement` varchar(50) NOT NULL,
  `reason_crime_type` varchar(50) NOT NULL,
  `reason_crime_subtype` varchar(50) NOT NULL,
  `remarks_reference` varchar(500) NOT NULL,
  `cdr_voice_sms` varchar(5) NOT NULL,
  `gprs_data` varchar(5) NOT NULL,
  `info_fnf` varchar(5) NOT NULL,
  `info_subs` varchar(5) NOT NULL,
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
  `rerequest_msisdn_status` varchar(20) DEFAULT 'New',
  `document_name` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `pdf_name` varchar(255) NOT NULL,
  `audio_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `tbl_subcrimeinfo`
--

CREATE TABLE `tbl_subcrimeinfo` (
  `id` int(11) NOT NULL,
  `crimeid` int(11) NOT NULL,
  `subcrime_name` varchar(100) NOT NULL,
  `subcrime_details` varchar(500) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isactive` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subcrimeinfo`
--

INSERT INTO `tbl_subcrimeinfo` (`id`, `crimeid`, `subcrime_name`, `subcrime_details`, `createat`, `isactive`) VALUES
(1, 1, 'Single Murder', '', '2018-01-30 09:50:33', 1),
(2, 1, 'Multiple Murder', '', '2018-01-30 09:50:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `user_type` varchar(20) NOT NULL,
  `battalions_id` int(11) NOT NULL,
  `parent` int(1) NOT NULL DEFAULT '0',
  `designations_id` int(11) NOT NULL,
  `branchid` int(11) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `userhash` varchar(50) NOT NULL,
  `accesslevel` varchar(50) NOT NULL,
  `ranks_id` int(11) NOT NULL,
  `wings_id` int(11) NOT NULL,
  `appointments_id` int(11) NOT NULL,
  `rt_officers_id` int(11) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createby` int(12) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `is_authorized` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `password`, `email`, `created_on`, `last_login`, `active`, `name`, `user_type`, `battalions_id`, `parent`, `designations_id`, `branchid`, `phone`, `userhash`, `accesslevel`, `ranks_id`, `wings_id`, `appointments_id`, `rt_officers_id`, `contact_no`, `status`, `createat`, `createby`, `user_image`, `is_authorized`) VALUES
(1, '', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@jhorotek.com', '2018-01-31 00:00:00', NULL, 1, 'JhoroTEK', '1', 0, 0, 0, NULL, '01972837866', '', '', 17, 14, 0, 0, '', '', '2018-01-30 07:29:45', 0, '', 0),
(16, '', 'e10adc3949ba59abbe56e057f20f883e', 'rab1co@gmail.com', '2018-04-24 00:00:00', NULL, 1, 'RAB-1 CO', '3', 1, 1, 27, NULL, '01710000000', '', '', 6, 13, 8, 12, '', '', '2018-04-24 20:31:28', 0, '', 1),
(17, '', 'e10adc3949ba59abbe56e057f20f883e', 'rab1user1@gmail.com', '2018-04-24 00:00:00', NULL, 1, 'RAB-1 USER-1', '3', 1, 1, 12, NULL, '01720000000', '', '', 17, 13, 1, 3, '', '', '2018-04-24 20:33:37', 0, '04_CellSite_Plotting_from_CDR_(1).JPG', 0),
(18, '', 'e10adc3949ba59abbe56e057f20f883e', 'intdirector@gmail.com', '2018-04-24 00:00:00', NULL, 1, 'INT DIRECTOR', '2', 16, 1, 31, NULL, '01715000000', '', '', 6, 10, 12, 13, '', '', '2018-04-24 21:09:17', 0, '', 1),
(19, '', 'e10adc3949ba59abbe56e057f20f883e', 'immcsupport1@gmail.com', '2018-04-25 00:00:00', NULL, 1, 'IMMC SUPPORT-1', '4', 1, 1, 28, NULL, '01713000000', '', '', 16, 13, 8, 14, '', '', '2018-04-24 21:10:42', 0, '', 0),
(20, '', 'e10adc3949ba59abbe56e057f20f883e', 'immcsupport2@gmail.com', '2018-04-25 00:00:00', NULL, 1, 'immcsupport-2', '4', 1, 1, 27, NULL, '01715000000', '', '', 16, 13, 8, 1, '', '', '2018-04-24 23:25:36', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wings`
--

CREATE TABLE `wings` (
  `wings_id` int(11) NOT NULL,
  `wing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wings`
--

INSERT INTO `wings` (`wings_id`, `wing`) VALUES
(3, 'OPERATIONS WING'),
(4, 'ADMIN & FINANCE WING'),
(5, 'LEGAL & MEDIA WING'),
(6, 'INVESTIGATION & FORENSIC WING'),
(7, 'AIR WING'),
(8, 'TRAINING & ORIENTATION WING'),
(9, 'COMMUNICATION AND MIS WING'),
(10, 'INTELLIGENCE WING'),
(13, 'RAB BATTALION'),
(14, 'Others');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointments_id`);

--
-- Indexes for table `battalions`
--
ALTER TABLE `battalions`
  ADD PRIMARY KEY (`battalions_id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`configid`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`dashboard_id`);

--
-- Indexes for table `dashboard_access`
--
ALTER TABLE `dashboard_access`
  ADD PRIMARY KEY (`dashboard_access_id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`designations_id`);

--
-- Indexes for table `function`
--
ALTER TABLE `function`
  ADD PRIMARY KEY (`function_id`);

--
-- Indexes for table `function_access`
--
ALTER TABLE `function_access`
  ADD PRIMARY KEY (`function_access`);

--
-- Indexes for table `log_details`
--
ALTER TABLE `log_details`
  ADD PRIMARY KEY (`log_details_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menuid`);

--
-- Indexes for table `menu_role`
--
ALTER TABLE `menu_role`
  ADD PRIMARY KEY (`menu_role_id`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`ranks_id`);

--
-- Indexes for table `reference_details`
--
ALTER TABLE `reference_details`
  ADD PRIMARY KEY (`reference_details_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `rt_officers`
--
ALTER TABLE `rt_officers`
  ADD PRIMARY KEY (`rt_officers_id`);

--
-- Indexes for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_cellsite`
--
ALTER TABLE `tbl_cellsite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_crimeinfo`
--
ALTER TABLE `tbl_crimeinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crimeid` (`id`);

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
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `tbl_req_mno_msisdn_provider`
--
ALTER TABLE `tbl_req_mno_msisdn_provider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_statuses`
--
ALTER TABLE `tbl_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `tbl_subcrimeinfo`
--
ALTER TABLE `tbl_subcrimeinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wings`
--
ALTER TABLE `wings`
  ADD PRIMARY KEY (`wings_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `battalions`
--
ALTER TABLE `battalions`
  MODIFY `battalions_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `configid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `dashboard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dashboard_access`
--
ALTER TABLE `dashboard_access`
  MODIFY `dashboard_access_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `designations_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `function`
--
ALTER TABLE `function`
  MODIFY `function_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;
--
-- AUTO_INCREMENT for table `function_access`
--
ALTER TABLE `function_access`
  MODIFY `function_access` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14520;
--
-- AUTO_INCREMENT for table `log_details`
--
ALTER TABLE `log_details`
  MODIFY `log_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `menu_role`
--
ALTER TABLE `menu_role`
  MODIFY `menu_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2496;
--
-- AUTO_INCREMENT for table `ranks`
--
ALTER TABLE `ranks`
  MODIFY `ranks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `reference_details`
--
ALTER TABLE `reference_details`
  MODIFY `reference_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rt_officers`
--
ALTER TABLE `rt_officers`
  MODIFY `rt_officers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_cellsite`
--
ALTER TABLE `tbl_cellsite`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_crimeinfo`
--
ALTER TABLE `tbl_crimeinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_internal_hotlist`
--
ALTER TABLE `tbl_internal_hotlist`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_requestlogs`
--
ALTER TABLE `tbl_requestlogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tbl_req_mno_msisdn`
--
ALTER TABLE `tbl_req_mno_msisdn`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_req_mno_msisdn_provider`
--
ALTER TABLE `tbl_req_mno_msisdn_provider`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_subcrimeinfo`
--
ALTER TABLE `tbl_subcrimeinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `wings`
--
ALTER TABLE `wings`
  MODIFY `wings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
