-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 02:40 PM
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
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `configid` int(11) NOT NULL,
  `project_id` varchar(255) NOT NULL,
  `title_of_org_eng` varchar(255) NOT NULL,
  `title_of_org_bng` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name_of_system` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `fav_icon` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`configid`, `project_id`, `title_of_org_eng`, `title_of_org_bng`, `name_of_system`, `logo`, `fav_icon`) VALUES
(1, '', 'IMMC Monitoring and Management System', 'JhoroTek', 'IMMC Monitoring and Management System', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE IF NOT EXISTS `dashboard` (
  `dashboardid` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`dashboardid`, `url`, `icon`, `title`) VALUES
(2, 'hr/foreign_employee', 'fa fa-users fa-4x', 'Foreign Employee'),
(3, 'reports/documentsearch', 'fa fa-align-justify fa-4x', 'Document Search');

-- --------------------------------------------------------

--
-- Table structure for table `function`
--

CREATE TABLE IF NOT EXISTS `function` (
  `function_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `function` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=194 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function`
--

INSERT INTO `function` (`function_id`, `title`, `controller`, `function`) VALUES
(1, 'admin dashboard', 'dashboards', 'admin_dashboard'),
(2, 'create_user', 'settings', 'create_user'),
(3, 'user_list', 'settings', 'user_list'),
(4, 'create_menu', 'settings', 'create_menu'),
(5, 'menu_list', 'settings', 'menu_list'),
(6, 'create_function', 'settings', 'create_function'),
(7, 'function_list', 'settings', 'function_list'),
(8, 'menu priority', 'settings', 'menu_priority'),
(9, 'role_list', 'settings', 'role_list'),
(10, 'change_password', 'settings', 'change_password'),
(11, 'save_user', 'settings', 'save_user'),
(12, 'edit_user_page', 'settings', 'edit_user_page'),
(13, 'update_user', 'settings', 'update_user'),
(14, 'user_list', 'settings', 'user_list'),
(15, 'change_password', 'settings', 'change_password'),
(16, 'submit_change_password', 'settings', 'submit_change_password'),
(17, 'user_delete', 'settings', 'user_delete'),
(18, 'create_menu', 'settings', 'create_menu'),
(19, 'save_menu', 'settings', 'save_menu'),
(20, 'menu_list', 'settings', 'menu_list'),
(21, 'menu_delete', 'settings', 'menu_delete'),
(22, 'ajax_edit_form', 'settings', 'ajax_edit_form'),
(24, 'create_function', 'settings', 'create_function'),
(25, 'save_function', 'settings', 'save_function'),
(26, 'function_list', 'settings', 'function_list'),
(27, 'ajax_function_edit_form', 'settings', 'ajax_function_edit_form'),
(28, 'update_function', 'settings', 'update_function'),
(29, 'function_delete', 'settings', 'function_delete'),
(31, 'save_menu_role', 'settings', 'save_menu_role'),
(32, 'role_list', 'settings', 'role_list'),
(33, 'ajax_menu_role_edit', 'settings', 'ajax_menu_role_edit'),
(34, 'update_role', 'settings', 'update_role'),
(188, 'Test Functions', 'settings', 'Function'),
(189, 'index', 'CellTriangulation', 'index'),
(190, 'PlottedCellsite', 'PlottedCellsite', 'index'),
(191, 'Info Request', 'infoRequest', 'index'),
(192, 'RequestLogs', 'Reports', 'requestLogs'),
(193, 'MyRequest', 'Reports', 'myRequest');

-- --------------------------------------------------------

--
-- Table structure for table `function_access`
--

CREATE TABLE IF NOT EXISTS `function_access` (
  `function_access` int(11) NOT NULL,
  `function_id` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5672 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function_access`
--

INSERT INTO `function_access` (`function_access`, `function_id`, `roleid`, `priority`) VALUES
(4281, 1, 3, 0),
(4282, 2, 3, 0),
(4283, 3, 3, 0),
(4284, 4, 3, 0),
(4285, 5, 3, 0),
(4286, 6, 3, 0),
(4287, 7, 3, 0),
(4288, 8, 3, 0),
(4289, 9, 3, 0),
(4290, 10, 3, 0),
(4291, 11, 3, 0),
(4292, 12, 3, 0),
(4293, 13, 3, 0),
(4294, 14, 3, 0),
(4295, 15, 3, 0),
(4296, 16, 3, 0),
(4297, 17, 3, 0),
(4298, 18, 3, 0),
(4299, 19, 3, 0),
(4300, 20, 3, 0),
(4301, 21, 3, 0),
(4302, 22, 3, 0),
(4303, 23, 3, 0),
(4304, 24, 3, 0),
(4305, 25, 3, 0),
(4306, 26, 3, 0),
(4307, 27, 3, 0),
(4308, 28, 3, 0),
(4309, 29, 3, 0),
(4310, 31, 3, 0),
(4311, 32, 3, 0),
(4312, 33, 3, 0),
(4313, 34, 3, 0),
(4314, 36, 3, 0),
(4315, 37, 3, 0),
(4316, 38, 3, 0),
(4317, 39, 3, 0),
(4318, 40, 3, 0),
(4319, 41, 3, 0),
(4320, 42, 3, 0),
(4321, 43, 3, 0),
(4322, 44, 3, 0),
(4323, 45, 3, 0),
(4324, 46, 3, 0),
(4325, 47, 3, 0),
(4326, 48, 3, 0),
(4327, 49, 3, 0),
(4328, 50, 3, 0),
(4329, 51, 3, 0),
(4330, 52, 3, 0),
(4331, 53, 3, 0),
(4332, 54, 3, 0),
(4333, 55, 3, 0),
(4334, 56, 3, 0),
(4335, 57, 3, 0),
(4336, 58, 3, 0),
(4337, 59, 3, 0),
(4338, 60, 3, 0),
(4339, 61, 3, 0),
(4340, 62, 3, 0),
(4341, 63, 3, 0),
(4342, 64, 3, 0),
(4343, 65, 3, 0),
(4344, 66, 3, 0),
(4345, 67, 3, 0),
(4346, 68, 3, 0),
(4347, 69, 3, 0),
(4348, 70, 3, 0),
(4349, 71, 3, 0),
(4350, 72, 3, 0),
(4351, 73, 3, 0),
(4352, 74, 3, 0),
(4353, 75, 3, 0),
(4354, 76, 3, 0),
(4355, 77, 3, 0),
(4356, 78, 3, 0),
(4357, 79, 3, 0),
(4358, 80, 3, 0),
(4359, 81, 3, 0),
(4360, 82, 3, 0),
(4361, 83, 3, 0),
(4362, 84, 3, 0),
(4363, 85, 3, 0),
(4364, 86, 3, 0),
(4365, 87, 3, 0),
(4366, 88, 3, 0),
(4367, 89, 3, 0),
(4368, 90, 3, 0),
(4369, 91, 3, 0),
(4370, 92, 3, 0),
(4371, 93, 3, 0),
(4372, 94, 3, 0),
(4373, 95, 3, 0),
(4374, 96, 3, 0),
(4375, 97, 3, 0),
(4376, 98, 3, 0),
(4377, 99, 3, 0),
(4378, 100, 3, 0),
(4379, 101, 3, 0),
(4380, 102, 3, 0),
(4381, 103, 3, 0),
(4382, 104, 3, 0),
(4383, 105, 3, 0),
(4384, 106, 3, 0),
(4385, 107, 3, 0),
(4386, 108, 3, 0),
(4387, 109, 3, 0),
(4388, 110, 3, 0),
(4389, 111, 3, 0),
(4390, 112, 3, 0),
(4391, 113, 3, 0),
(4392, 114, 3, 0),
(4393, 115, 3, 0),
(4394, 116, 3, 0),
(4395, 117, 3, 0),
(4396, 118, 3, 0),
(4397, 119, 3, 0),
(4398, 120, 3, 0),
(4399, 121, 3, 0),
(4400, 122, 3, 0),
(4401, 123, 3, 0),
(4402, 124, 3, 0),
(4403, 125, 3, 0),
(4404, 126, 3, 0),
(4405, 127, 3, 0),
(4406, 128, 3, 0),
(4407, 129, 3, 0),
(4408, 130, 3, 0),
(4409, 131, 3, 0),
(4410, 132, 3, 0),
(4411, 133, 3, 0),
(4412, 134, 3, 0),
(4413, 135, 3, 0),
(4414, 136, 3, 0),
(4415, 137, 3, 0),
(4416, 138, 3, 0),
(4417, 139, 3, 0),
(4418, 140, 3, 0),
(4419, 141, 3, 0),
(4420, 142, 3, 0),
(4421, 143, 3, 0),
(4422, 144, 3, 0),
(4423, 145, 3, 0),
(4424, 146, 3, 0),
(4425, 147, 3, 0),
(4426, 148, 3, 0),
(4427, 149, 3, 0),
(4428, 150, 3, 0),
(4429, 151, 3, 0),
(4430, 152, 3, 0),
(4431, 153, 3, 0),
(4432, 154, 3, 0),
(4433, 155, 3, 0),
(4434, 156, 3, 0),
(4435, 157, 3, 0),
(4436, 158, 3, 0),
(4437, 159, 3, 0),
(4438, 160, 3, 0),
(4439, 161, 3, 0),
(4440, 162, 3, 0),
(4441, 163, 3, 0),
(4442, 164, 3, 0),
(4443, 165, 3, 0),
(4444, 166, 3, 0),
(4445, 167, 3, 0),
(4446, 168, 3, 0),
(4447, 169, 3, 0),
(4448, 170, 3, 0),
(4449, 171, 3, 0),
(4450, 172, 3, 0),
(4451, 173, 3, 0),
(4452, 174, 3, 0),
(4453, 175, 3, 0),
(4454, 176, 3, 0),
(4455, 177, 3, 0),
(4456, 178, 3, 0),
(4457, 179, 3, 0),
(4458, 180, 3, 0),
(4459, 181, 3, 0),
(4460, 182, 3, 0),
(5188, 1, 2, 0),
(5189, 36, 2, 0),
(5190, 37, 2, 0),
(5191, 38, 2, 0),
(5192, 39, 2, 0),
(5193, 40, 2, 0),
(5194, 41, 2, 0),
(5195, 42, 2, 0),
(5196, 43, 2, 0),
(5197, 44, 2, 0),
(5198, 45, 2, 0),
(5199, 46, 2, 0),
(5200, 47, 2, 0),
(5201, 48, 2, 0),
(5202, 49, 2, 0),
(5203, 50, 2, 0),
(5204, 51, 2, 0),
(5205, 52, 2, 0),
(5206, 53, 2, 0),
(5207, 54, 2, 0),
(5208, 55, 2, 0),
(5209, 56, 2, 0),
(5210, 57, 2, 0),
(5211, 58, 2, 0),
(5212, 59, 2, 0),
(5213, 60, 2, 0),
(5214, 61, 2, 0),
(5215, 62, 2, 0),
(5216, 63, 2, 0),
(5217, 64, 2, 0),
(5218, 65, 2, 0),
(5219, 66, 2, 0),
(5220, 67, 2, 0),
(5221, 68, 2, 0),
(5222, 69, 2, 0),
(5223, 70, 2, 0),
(5224, 71, 2, 0),
(5225, 72, 2, 0),
(5226, 73, 2, 0),
(5227, 74, 2, 0),
(5228, 75, 2, 0),
(5229, 76, 2, 0),
(5230, 77, 2, 0),
(5231, 78, 2, 0),
(5232, 79, 2, 0),
(5233, 80, 2, 0),
(5234, 81, 2, 0),
(5235, 82, 2, 0),
(5236, 83, 2, 0),
(5237, 84, 2, 0),
(5238, 85, 2, 0),
(5239, 86, 2, 0),
(5240, 87, 2, 0),
(5241, 88, 2, 0),
(5242, 89, 2, 0),
(5243, 90, 2, 0),
(5244, 91, 2, 0),
(5245, 92, 2, 0),
(5246, 93, 2, 0),
(5247, 94, 2, 0),
(5248, 95, 2, 0),
(5249, 96, 2, 0),
(5250, 97, 2, 0),
(5251, 98, 2, 0),
(5252, 99, 2, 0),
(5253, 100, 2, 0),
(5254, 101, 2, 0),
(5255, 102, 2, 0),
(5256, 103, 2, 0),
(5257, 104, 2, 0),
(5258, 105, 2, 0),
(5259, 106, 2, 0),
(5260, 107, 2, 0),
(5261, 108, 2, 0),
(5262, 109, 2, 0),
(5263, 110, 2, 0),
(5264, 111, 2, 0),
(5265, 112, 2, 0),
(5266, 113, 2, 0),
(5267, 114, 2, 0),
(5268, 115, 2, 0),
(5269, 116, 2, 0),
(5270, 117, 2, 0),
(5271, 118, 2, 0),
(5272, 119, 2, 0),
(5273, 120, 2, 0),
(5274, 121, 2, 0),
(5275, 122, 2, 0),
(5276, 123, 2, 0),
(5277, 124, 2, 0),
(5278, 125, 2, 0),
(5279, 126, 2, 0),
(5280, 127, 2, 0),
(5281, 128, 2, 0),
(5282, 129, 2, 0),
(5283, 130, 2, 0),
(5284, 131, 2, 0),
(5285, 132, 2, 0),
(5286, 133, 2, 0),
(5287, 134, 2, 0),
(5288, 135, 2, 0),
(5289, 136, 2, 0),
(5290, 137, 2, 0),
(5291, 138, 2, 0),
(5292, 139, 2, 0),
(5293, 140, 2, 0),
(5294, 141, 2, 0),
(5295, 142, 2, 0),
(5296, 143, 2, 0),
(5297, 144, 2, 0),
(5298, 145, 2, 0),
(5299, 146, 2, 0),
(5300, 147, 2, 0),
(5301, 148, 2, 0),
(5302, 149, 2, 0),
(5303, 150, 2, 0),
(5304, 151, 2, 0),
(5305, 152, 2, 0),
(5306, 153, 2, 0),
(5307, 154, 2, 0),
(5308, 155, 2, 0),
(5309, 156, 2, 0),
(5310, 157, 2, 0),
(5311, 158, 2, 0),
(5312, 159, 2, 0),
(5313, 160, 2, 0),
(5314, 161, 2, 0),
(5315, 162, 2, 0),
(5316, 163, 2, 0),
(5317, 164, 2, 0),
(5318, 175, 2, 0),
(5319, 176, 2, 0),
(5320, 177, 2, 0),
(5321, 178, 2, 0),
(5322, 179, 2, 0),
(5323, 180, 2, 0),
(5324, 181, 2, 0),
(5325, 182, 2, 0),
(5635, 1, 1, 0),
(5636, 2, 1, 0),
(5637, 3, 1, 0),
(5638, 4, 1, 0),
(5639, 5, 1, 0),
(5640, 6, 1, 0),
(5641, 7, 1, 0),
(5642, 8, 1, 0),
(5643, 9, 1, 0),
(5644, 10, 1, 0),
(5645, 11, 1, 0),
(5646, 12, 1, 0),
(5647, 13, 1, 0),
(5648, 14, 1, 0),
(5649, 15, 1, 0),
(5650, 16, 1, 0),
(5651, 17, 1, 0),
(5652, 18, 1, 0),
(5653, 19, 1, 0),
(5654, 20, 1, 0),
(5655, 21, 1, 0),
(5656, 22, 1, 0),
(5657, 24, 1, 0),
(5658, 25, 1, 0),
(5659, 26, 1, 0),
(5660, 27, 1, 0),
(5661, 28, 1, 0),
(5662, 29, 1, 0),
(5663, 31, 1, 0),
(5664, 32, 1, 0),
(5665, 33, 1, 0),
(5666, 34, 1, 0),
(5667, 189, 1, 0),
(5668, 190, 1, 0),
(5669, 191, 1, 0),
(5670, 192, 1, 0),
(5671, 193, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `menuid` int(11) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `menu_url` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL,
  `icon_class` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

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
(59, 'Role', 'settings/user_type', 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `menu_role`
--

CREATE TABLE IF NOT EXISTS `menu_role` (
  `menu_role_id` int(11) NOT NULL,
  `menuid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1300 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_role`
--

INSERT INTO `menu_role` (`menu_role_id`, `menuid`, `roleid`, `priority`) VALUES
(983, 1, 3, 0),
(984, 2, 3, 0),
(985, 3, 3, 0),
(986, 4, 3, 0),
(987, 5, 3, 0),
(988, 6, 3, 0),
(989, 8, 3, 0),
(990, 10, 3, 0),
(991, 12, 3, 0),
(992, 14, 3, 0),
(993, 16, 3, 0),
(994, 17, 3, 0),
(995, 20, 3, 0),
(996, 21, 3, 0),
(997, 22, 3, 0),
(998, 24, 3, 0),
(999, 25, 3, 0),
(1000, 26, 3, 0),
(1001, 27, 3, 0),
(1002, 28, 3, 0),
(1003, 29, 3, 0),
(1004, 30, 3, 0),
(1005, 31, 3, 0),
(1006, 32, 3, 0),
(1007, 33, 3, 0),
(1008, 34, 3, 0),
(1009, 35, 3, 0),
(1010, 36, 3, 0),
(1011, 37, 3, 0),
(1012, 38, 3, 0),
(1013, 39, 3, 0),
(1014, 40, 3, 0),
(1015, 41, 3, 0),
(1016, 42, 3, 0),
(1017, 43, 3, 0),
(1018, 44, 3, 0),
(1019, 45, 3, 0),
(1020, 46, 3, 0),
(1170, 1, 2, 0),
(1171, 2, 2, 0),
(1172, 3, 2, 0),
(1173, 4, 2, 0),
(1174, 5, 2, 0),
(1175, 6, 2, 0),
(1176, 20, 2, 0),
(1177, 21, 2, 0),
(1178, 22, 2, 0),
(1179, 24, 2, 0),
(1180, 25, 2, 0),
(1181, 26, 2, 0),
(1182, 27, 2, 0),
(1183, 28, 2, 0),
(1184, 29, 2, 0),
(1185, 30, 2, 0),
(1186, 31, 2, 0),
(1187, 32, 2, 0),
(1188, 33, 2, 0),
(1189, 34, 2, 0),
(1190, 36, 2, 0),
(1191, 37, 2, 0),
(1192, 38, 2, 0),
(1193, 39, 2, 0),
(1194, 40, 2, 0),
(1195, 41, 2, 0),
(1196, 42, 2, 0),
(1197, 43, 2, 0),
(1198, 44, 2, 0),
(1199, 45, 2, 0),
(1200, 46, 2, 0),
(1289, 8, 1, 0),
(1290, 10, 1, 0),
(1291, 12, 1, 0),
(1292, 14, 1, 0),
(1293, 16, 1, 0),
(1294, 17, 1, 0),
(1295, 48, 1, 0),
(1296, 52, 1, 0),
(1297, 54, 1, 0),
(1298, 55, 1, 0),
(1299, 59, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `roleid` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleid`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Operator'),
(3, 'Super Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cellsite`
--

CREATE TABLE IF NOT EXISTS `tbl_cellsite` (
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cellsite`
--

INSERT INTO `tbl_cellsite` (`id`, `site_name`, `lac_id`, `cell_name`, `cell_id`, `laccellid`, `antenna_direction`, `cell_beamspan`, `cell_beamrange`, `latitude`, `longitude`, `site_address`, `union_ward`, `thana`, `district`, `division`, `bts_type`, `operator`, `cell_type_2g_3g`, `createat`, `updateat`) VALUES
(1, 'Test', '23.81014900', 24, '23.81014900', '81014900', 23.8101, '23', '500', '23.81014900', '90.43114600', '23.81014900', '23.81014900', 'test', '23.81014900', '23.81014900', '23.81014900', '23.81014900', '23.81', '2018-01-03 13:57:52', '2018-01-13 10:58:49'),
(2, 'DHBDD79', '221', 0, 'DFR1U', '221DFR1U', 0, NULL, '500', '23.81014900', '90.43114600', 'Apollo Hospital_IBS_U', 'Bhatara', 'Badda', 'Dhaka', 'Dhaka', 'DualBand', 'ROBIAIRTEL', '2G', '2017-12-31 03:17:34', '2018-01-10 06:19:33'),
(3, 'DHDHN92', '108', 0, 'DFQ4L', '108DFQ4L', 0, NULL, '500', '23.75400000', '90.37500000', 'IBS_Roxy Paints', 'Ward No-49', 'Dhanmondis', 'Dhaka', 'Dhaka', 'DualBand', 'ROBIAIRTEL', '2G', '2017-12-31 03:17:34', '2018-01-10 06:19:33'),
(4, 'GGKOT18', '79', 0, 'KGI2A', '79KGI2A', 0, NULL, '500', '22.99180000', '90.04320000', 'Purbopara_Gacha', 'Amtali', 'Kotalipara', 'Gopalganj', 'Dhaka', 'DualBand', 'ROBIAIRTEL', '2G', '2017-12-31 03:17:34', '2018-01-10 06:19:33'),
(5, 'GGKOT18', '79', 0, 'KGI2B', '79KGI2B', 115, NULL, '500', '22.99180000', '90.04320000', 'Purbopara_Gacha', 'Amtali', 'Kotalipara', 'Gopalganj', 'Dhaka', 'DualBand', 'ROBIAIRTEL', '2G', '2017-12-31 03:17:34', '2018-01-10 06:19:33'),
(6, 'GGKOT18', '79', 0, 'KGI2C', '79KGI2C', 270, NULL, '500', '22.99180000', '90.04320000', 'Purbopara_Gacha', 'Amtali', 'Kotalipara', 'Gopalganj', 'Dhaka', 'DualBand', 'ROBIAIRTEL', '2G', '2017-12-31 03:17:34', '2018-01-10 06:19:33'),
(7, 'GGKOT19', '79', 0, 'KGI3A', '79KGI3A', 90, NULL, '500', '23.11220000', '90.01850000', 'Ramnagar_Kalabari', 'Kalabari', 'Kotalipara', 'Gopalganj', 'Dhaka', 'DualBand', 'ROBIAIRTEL', '2G', '2017-12-31 03:17:34', '2018-01-10 06:19:33'),
(8, 'GGKOT19', '79', 0, 'KGI3B', '79KGI3B', 215, NULL, '500', '23.11220000', '90.01850000', 'Ramnagar_Kalabari', 'Kalabari', 'Kotalipara', 'Gopalganj', 'Dhaka', 'DualBand', 'ROBIAIRTEL', '2G', '2017-12-31 03:17:34', '2018-01-10 06:19:33'),
(9, 'GGKOT19', '79', 0, 'KGI3C', '79KGI3C', 345, NULL, '500', '23.11220000', '90.01850000', 'Ramnagar_Kalabari', 'Kalabari', 'Kotalipara', 'Gopalganj', 'Dhaka', 'DualBand', 'ROBIAIRTEL', '2G', '2017-12-31 03:17:34', '2018-01-10 06:19:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_crimeinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_crimeinfo` (
  `id` int(11) NOT NULL,
  `crime_name` varchar(100) NOT NULL,
  `crime_details` varchar(500) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isactive` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_crimeinfo`
--

INSERT INTO `tbl_crimeinfo` (`id`, `crime_name`, `crime_details`, `createat`, `isactive`) VALUES
(1, 'Kidnap', 'Kidnap details', '2018-01-08 06:41:18', 1),
(2, 'Murder', 'Murder crime', '2018-01-08 07:11:20', 1),
(3, 'aaasdf', 'asdf', '2018-01-08 12:31:23', 1),
(4, 'aaasdfs', 'adsf', '2018-01-08 12:49:33', 1),
(5, 'Shamim', 'Details', '2018-01-08 12:59:46', 1);

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
-- Table structure for table `tbl_internal_hotlist`
--

CREATE TABLE IF NOT EXISTS `tbl_internal_hotlist` (
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

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
-- Table structure for table `tbl_requestlogs`
--

CREATE TABLE IF NOT EXISTS `tbl_requestlogs` (
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
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_requestlogs`
--

INSERT INTO `tbl_requestlogs` (`id`, `user_id`, `source_url`, `laccellid`, `bts`, `lac`, `thana`, `operator`, `request_for`, `cellid`, `latitude`, `longitude`, `info_mfs`, `info_scaned_pp`, `info_subs`, `registration`, `nid_pp`, `info_demographic`, `info_fnf`, `used_imei`, `recharge`, `info_ussd`, `ipdr`, `gprs_data`, `cdr_voice_sms`, `remarks_reference`, `reason_crime_subtype`, `reason_crime_type`, `placement`, `appointment`, `designation`, `requested_by`, `self_user`, `date_end`, `date_start`, `mno_operator`, `msisdn`, `area_range`, `createat`) VALUES
(1, '19', 'http://utility.jhorotek.com/rialto/RequestLogs/storeLogs', '', 'BAR_B0214', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2017-12-13 20:06:25'),
(2, '19', 'http://utility.jhorotek.com/rialto/RequestLogs/storeLogs', '', 'BAR_G0057', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2017-12-13 23:59:11'),
(3, '19', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, 'ROBI', NULL, '60561,', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2017-12-14 17:16:54'),
(4, '19', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, 'ROBI', NULL, '60561,60561,', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2017-12-14 17:17:58'),
(5, '19', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, 'ROBI', NULL, '60561,60561,', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2017-12-14 17:17:59'),
(6, '19', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, '', NULL, '60561,', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2017-12-14 17:19:26'),
(7, '19', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, '', NULL, '60561,', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2017-12-14 17:19:58'),
(8, '19', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'BANGLALINK', NULL, NULL, '23.2323', '90.2323', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3000', '2017-12-14 17:20:20'),
(9, '19', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'BANGLALINK', NULL, NULL, '23.2323', '90.2323', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3000', '2017-12-14 17:20:28'),
(10, '19', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'BANGLALINK', NULL, NULL, '23.2323', '90.2323', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3000', '2017-12-14 17:20:29'),
(11, '19', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'ROBI', NULL, NULL, '23.2323', '23.2323', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3000', '2017-12-14 17:21:17'),
(12, '19', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'BANGLALINK', NULL, NULL, '23.81014900', '90.43114600', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5000', '2018-01-03 19:56:46'),
(13, '19', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'BANGLALINK', NULL, NULL, '23.81014900', '90.43114600', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5000', '2018-01-03 19:58:16'),
(14, '19', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'GRAMEENPHONE', NULL, NULL, '23.81014900', '90.43114600', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5000', '2018-01-03 20:01:46'),
(15, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-11 18:54:57'),
(16, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-11 19:09:58'),
(17, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 12:02:06'),
(18, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 12:49:41'),
(19, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, '', NULL, '23.81014900,', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 12:50:28'),
(20, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'ROBI', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 12:56:39'),
(21, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 13:01:30'),
(22, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 13:08:30'),
(23, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 13:34:12'),
(24, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 13:43:04'),
(25, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 13:43:49'),
(26, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 13:54:19'),
(27, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 13:57:46'),
(28, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 13:58:16'),
(29, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 13:58:50'),
(30, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 13:59:39'),
(31, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:00:54'),
(32, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:02:15'),
(33, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:02:55'),
(34, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'ROBI', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:04:06'),
(35, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:04:58'),
(36, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:05:56'),
(37, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:06:17'),
(38, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:06:33'),
(39, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:07:28'),
(40, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:08:51'),
(41, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:11:00'),
(42, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:12:11'),
(43, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:12:42'),
(44, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:14:54'),
(45, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:15:28'),
(46, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:16:14'),
(47, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:16:33'),
(48, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 14:17:10'),
(49, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, '', NULL, '23.81014900,', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 15:29:13'),
(50, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 15:31:00'),
(51, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 15:35:33'),
(52, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, '', NULL, '23.81014900,', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 15:35:46'),
(53, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 15:51:17'),
(54, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'test,', 'BANGLALINK', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:17:24'),
(55, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'test,', 'BANGLALINK', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:17:33'),
(56, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'test,', 'BANGLALINK', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:18:11'),
(57, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'test,', 'ROBI', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:19:57'),
(58, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'test,', 'BANGLALINK', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:20:28'),
(59, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'test,', 'BANGLALINK', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:21:08'),
(60, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'Kotalipara,', 'BANGLALINK', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:24:31'),
(61, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'Kotalipara,', 'ROBI', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:25:06'),
(62, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'Kotalipara,', 'BANGLALINK', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:25:57'),
(63, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'Kotalipara,', 'BANGLALINK', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:26:28'),
(64, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'Kotalipara,', 'AIRTEL', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:27:54'),
(65, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'test,', 'ROBI', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:28:07'),
(66, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'test,', 'BANGLALINK', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:28:34'),
(67, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'BANGLALINK', NULL, NULL, '23.75400000', '90.37500000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5000', '2018-01-13 16:29:34'),
(68, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'test,', 'BANGLALINK', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:34:16'),
(69, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'test,', 'BANGLALINK', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:35:08'),
(70, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'test,', 'BANGLALINK', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:35:31'),
(71, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '', 'DHBDD79', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 16:43:20'),
(72, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '', '', '108', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 16:43:39'),
(73, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '', '', '', 'test', 'ROBI', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-13 16:43:53'),
(74, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'test,', 'BANGLALINK', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 16:48:30'),
(75, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'BANGLALINK', NULL, NULL, '23.81014900', '90.43114600', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3000', '2018-01-13 16:49:13'),
(76, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'BANGLALINK', NULL, NULL, '23.81014900', '90.43114600', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3000', '2018-01-13 16:52:01'),
(77, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'BANGLALINK', NULL, NULL, '23.81014900', '90.43114600', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5000', '2018-01-13 17:02:57'),
(78, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'BANGLALINK', NULL, NULL, '23.81014900', '90.43114600', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5000', '2018-01-13 17:04:25'),
(79, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, 'test', 'BANGLALINK', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-01-13 17:04:49'),
(80, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'BANGLALINK', NULL, NULL, '23.81014900', '90.43114600', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5000', '2018-01-13 17:05:44'),
(81, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-15 14:45:51'),
(82, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'asdf', 'Murder (Multiple)', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-16 16:55:22', '2018-01-16 16:55:22', 'BANGLALINK', '1914175176', NULL, '2018-01-16 16:55:22'),
(83, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'asdf', 'Murder (Multiple)', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-16 16:55:29', '2018-01-16 16:55:29', 'BANGLALINK', '1914175176', NULL, '2018-01-16 16:55:29'),
(84, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'asdf', 'Murder (Multiple)', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-16 16:55:40', '2018-01-16 16:55:40', 'BANGLALINK', '1914175176', NULL, '2018-01-16 16:55:40'),
(85, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'asdf', 'Murder (Multiple)', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-16 16:56:14', '2018-01-16 16:56:14', 'BANGLALINK', '1914175176', NULL, '2018-01-16 16:56:14'),
(86, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'asdf', 'Murder (Multiple)', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-16 16:57:30', '2018-01-16 16:57:30', 'BANGLALINK', '1914175176', NULL, '2018-01-16 16:57:30'),
(87, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', 'Murder ', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-25 17:11:36', '2018-01-09 17:11:36', 'BANGLALINK', '1914175176', NULL, '2018-01-16 17:11:36'),
(88, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'fdh', 'Murder (Multiple)', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-16 17:16:0', '2018-01-16 17:16:0', 'BANGLALINK', '1914175176', NULL, '2018-01-16 17:16:00'),
(89, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'sfd', 'Murder ', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-17 17:29:51', '2018-01-16 17:29:51', 'BANGLALINK', '1914175176', NULL, '2018-01-16 17:29:51'),
(90, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', 'Murder ', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-16 17:32:56', '2018-01-16 17:32:56', 'BANGLALINK', '1914175176', NULL, '2018-01-16 17:32:56'),
(91, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'sgh', 'Murder (Multiple)', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-16 17:36:34', '2018-01-16 17:36:34', 'ROBI', '1914175176', NULL, '2018-01-16 17:36:34'),
(92, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'tr', 'mhg', 'Shamim', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-16 17:39:13', '2018-01-17 17:39:13', 'BANGLALINK', '1914175176', NULL, '2018-01-16 17:39:13'),
(93, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'fghj', 'Murder (Multiple)', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-17 17:41:58', '2018-01-16 17:41:58', 'BANGLALINK', '1914175176', NULL, '2018-01-16 17:41:58'),
(94, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'asdf', 'aasdf', 'aaasdf', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-17 17:42:57', '2018-01-16 17:42:57', 'BANGLALINK', '1914175176', NULL, '2018-01-16 17:42:57'),
(95, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'art', 'Murder ', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-17 17:44:9', '2018-01-16 17:44:9', 'BANGLALINK', '19141751765', NULL, '2018-01-16 17:44:09'),
(96, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'asdf', 'Murder (Multiple)', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-17 17:47:22', '2018-01-16 17:47:22', 'BANGLALINK', '19141751761', NULL, '2018-01-16 17:47:22'),
(97, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'asdf', 'test2', 'Shamim', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-16 17:49:43', '2018-01-16 17:49:43', 'BANGLALINK', '1914175176', NULL, '2018-01-16 17:49:43'),
(98, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'ery', 'm', 'Shamim', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-17 17:50:57', '2018-01-16 17:50:57', 'BANGLALINK', '1914175176', NULL, '2018-01-16 17:50:57'),
(99, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'AD', 'Murder ', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-17 18:10:35', '2018-01-16 18:10:35', 'BANGLALINK', '8801914175176', NULL, '2018-01-16 18:10:35'),
(100, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'asdf', 'Murder (Multiple)', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-16 18:14:5', '2018-01-16 18:14:5', 'BANGLALINK', '1914175176', NULL, '2018-01-16 18:14:05'),
(101, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'asdf', 'Murder ', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-17 18:14:40', '2018-01-15 18:14:40', 'TELETALK', '8801914175176', NULL, '2018-01-16 18:14:40'),
(102, '1', 'http://localhost/rialto/RequestLogs/storeLogs', '108DFQ4L', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-16 18:15:19'),
(103, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, '', NULL, 'DFR1U,', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-16 18:15:31'),
(104, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, '', 'BANGLALINK', NULL, NULL, '23.81014900', '90.43114600', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3000', '2018-01-16 18:16:16'),
(105, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', 'N', 'Y', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'sad', 'Murder (Multiple)', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-16 18:30:17', '2018-01-16 18:30:17', 'BANGLALINK', '1914175176', NULL, '2018-01-16 18:30:17'),
(106, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'aert', 'Murder ', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-16 18:31:14', '2018-01-16 18:31:14', 'BANGLALINK', '1914175176', NULL, '2018-01-16 18:31:14'),
(107, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'sdfg', 'Murder (Multiple)', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr Test', '', '2018-01-16 18:32:33', '2018-01-16 18:32:33', 'ROBI', '1914175176', NULL, '2018-01-16 18:32:33'),
(108, '1', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'asdf', 'Murder ', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr', '', '2018-01-17 18:37:54', '2018-01-23 18:37:54', 'BANGLALINK', '1914175176', NULL, '2018-01-16 18:37:54'),
(109, '2', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, '', NULL, '23.81014900,', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-16 19:11:25'),
(110, '2', 'http://localhost/rialto/RequestLogs/storeLogs', '108DFQ4L', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-16 19:14:38'),
(111, '2', 'http://localhost/rialto/RequestLogs/storeLogs', '108DFQ4L', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-16 19:15:52'),
(112, '2', 'http://localhost/rialto/RequestLogs/storeLogs', '108DFQ4L', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-16 19:16:00'),
(113, '2', 'http://localhost/rialto/RequestLogs/storeLogs', '81014900', '', '', '', 'BANGLALINK', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-16 19:26:03'),
(114, '2', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, '', NULL, 'DFR1U,', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-01-16 19:26:17'),
(115, '2', 'http://localhost/rialto/RequestLogs/storeLogs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'dasf', 'Murder (Multiple)', 'Murder', '123', 'LAW OFFICER', 'ADD. SP', 'Mr', '', '2018-01-16 19:34:13', '2018-01-16 19:34:13', 'BANGLALINK', '1914175176', NULL, '2018-01-16 19:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_req_mno_msisdn`
--

CREATE TABLE IF NOT EXISTS `tbl_req_mno_msisdn` (
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
  `designation` varchar(50) NOT NULL,
  `info_demographic` varchar(50) NOT NULL,
  `appointment` varchar(50) NOT NULL,
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
  `rerequest_msisdn_status` varchar(20) DEFAULT 'New'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_req_mno_msisdn`
--

INSERT INTO `tbl_req_mno_msisdn` (`id`, `transacttion_id`, `request_id`, `user_generated_by`, `user_designation`, `user_appointment`, `user_placement`, `date_requested`, `request_status`, `target_device`, `msisdn`, `mno_operator`, `date_start`, `date_end`, `self_user`, `requested_by`, `designation`, `info_demographic`, `appointment`, `placement`, `reason_crime_type`, `reason_crime_subtype`, `remarks_reference`, `cdr_voice_sms`, `gprs_data`, `info_fnf`, `info_subs`, `info_mfs`, `info_scaned_pp`, `recharge`, `used_imei`, `ipdr`, `info_ussd`, `registration`, `nid_pp`, `last_status`, `last_updated_by`, `last_updated_date`, `internal_control_status`, `external_control_status`, `hot_list_msisdn_status`, `rerequest_msisdn_status`) VALUES
(1, '20180116131405743', '20180116131405743', 1, 'ADD. SP', 'LAW OFFICER', '123', '2018-01-16 00:00:00', '', '', '1914175176', 'BANGLALINK', '2018-01-16 18:14:05', '2018-01-16 18:14:05', '', 'Mr Test', 'ADD. SP', 'N', 'LAW OFFICER', '123', 'Murder', 'Murder (Multiple)', 'asdf', 'N', 'N', 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '1', NULL, '0', '0', '0', 'New'),
(2, '20180116131440835', '20180116131440835', 1, 'ADD. SP', 'LAW OFFICER', '123', '2018-01-16 00:00:00', '', '', '8801914175176', 'TELETALK', '2018-01-15 18:14:40', '2018-01-17 18:14:40', '', 'Mr Test', 'ADD. SP', 'N', 'LAW OFFICER', '123', 'Murder', 'Murder ', 'asdf', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '1', NULL, '0', '0', '0', 'confidential'),
(3, '20180116133017634', '20180116133017634', 1, 'ADD. SP', 'LAW OFFICER', '123', '2018-01-16 00:00:00', '', '', '1914175176', 'BANGLALINK', '2018-01-16 18:30:17', '2018-01-16 18:30:17', '', 'Mr Test', 'ADD. SP', 'N', 'LAW OFFICER', '123', 'Murder', 'Murder (Multiple)', 'sad', 'N', 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', '', '1', NULL, '0', '0', '0', 'New'),
(4, '20180116133114525', '20180116133114525', 1, 'ADD. SP', 'LAW OFFICER', '123', '2018-01-16 00:00:00', '', '', '1914175176', 'BANGLALINK', '2018-01-16 18:31:14', '2018-01-16 18:31:14', '', 'Mr Test', 'ADD. SP', 'N', 'LAW OFFICER', '123', 'Murder', 'Murder ', 'aert', 'N', 'N', 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '1', NULL, '0', '0', '0', 'New'),
(5, '20180116133233785', '20180116133233785', 1, 'ADD. SP', 'LAW OFFICER', '123', '2018-01-16 00:00:00', 'New', '', '8775654355467', 'ROBI', '2018-01-16 18:32:33', '2018-01-16 18:32:33', '', 'Mr Test', 'ADD. SP', 'N', 'LAW OFFICER', '123', 'Murder', 'Murder (Multiple)', 'sdfg', 'N', 'N', 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '1', NULL, '0', '0', '0', 'New'),
(6, '20180116133754164', '20180116133754164', 1, 'ADD. SP', 'LAW OFFICER', '123', '2018-01-16 00:00:00', 'New', '', '1914175176', 'BANGLALINK', '2018-01-23 18:37:54', '2018-01-17 18:37:54', '', 'Mr', 'ADD. SP', 'N', 'LAW OFFICER', '123', 'Murder', 'Murder ', 'asdf', 'N', 'N', 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '1', NULL, '0', '0', '0', 'New'),
(7, '20180116143414046', '20180116143414046', 2, 'ADD. SP', 'LAW OFFICER', '123', '2018-01-16 00:00:00', 'New', '', '1914175176', 'BANGLALINK', '2018-01-16 19:34:13', '2018-01-16 19:34:13', '', 'Mr', 'ADD. SP', 'N', 'LAW OFFICER', '123', 'Murder', 'Murder (Multiple)', 'dasf', 'N', 'N', 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '2', NULL, '0', '0', '0', 'New');

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
-- Table structure for table `tbl_subcrimeinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_subcrimeinfo` (
  `id` int(11) NOT NULL,
  `crimeid` int(11) NOT NULL,
  `subcrime_name` varchar(100) NOT NULL,
  `subcrime_details` varchar(500) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isactive` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subcrimeinfo`
--

INSERT INTO `tbl_subcrimeinfo` (`id`, `crimeid`, `subcrime_name`, `subcrime_details`, `createat`, `isactive`) VALUES
(1, 1, 'Single', 'Single person kidnapped', '2018-01-08 06:51:05', 1),
(2, 1, 'Multiple', 'More than one person kidnapped', '2018-01-08 06:51:32', 1),
(3, 2, 'Murder ', 'Murder details', '2018-01-08 08:54:25', 1),
(4, 2, 'Murder (Multiple)', 'Murder (Multiple) details', '2018-01-08 08:54:25', 1),
(5, 4, 'asdf', '', '2018-01-08 12:59:21', 1),
(6, 5, 'test2', '', '2018-01-08 12:59:46', 1),
(7, 5, 'test', '', '2018-01-08 13:01:40', 1),
(8, 5, 'test2', '', '2018-01-08 13:01:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(8) unsigned NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `designation` varchar(50) NOT NULL,
  `branchid` int(11) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `user_type` varchar(20) NOT NULL,
  `parent` int(1) NOT NULL DEFAULT '0',
  `userhash` varchar(50) NOT NULL,
  `accesslevel` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `wing` varchar(50) NOT NULL,
  `apt_name` varchar(50) NOT NULL,
  `rt_officer` varchar(50) NOT NULL,
  `battalion` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createby` int(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `password`, `email`, `created_on`, `last_login`, `active`, `name`, `designation`, `branchid`, `phone`, `user_type`, `parent`, `userhash`, `accesslevel`, `rank`, `wing`, `apt_name`, `rt_officer`, `battalion`, `contact_no`, `status`, `createat`, `createby`) VALUES
(1, '', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@jhorotek.com', '2018-01-10 00:00:00', 2015, 1, 'Mr', 'test', 1, NULL, '3', 0, '1234', '1', 'ADD. SP', 'RAB-1', 'LAW OFFICER', 'CO', '123', '8801777710122', 'active', '2018-01-10 06:30:49', 1),
(2, '', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@jhorotek.com', '2018-01-10 00:00:00', 2015, 1, 'Mr', 'test', 1, NULL, '1', 0, '1234', '1', 'ADD. SP', 'RAB-1', 'LAW OFFICER', 'CO', '123', '1914175176', 'active', '2018-01-10 06:30:49', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`configid`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`dashboardid`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleid`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `configid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `dashboardid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `function`
--
ALTER TABLE `function`
  MODIFY `function_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=194;
--
-- AUTO_INCREMENT for table `function_access`
--
ALTER TABLE `function_access`
  MODIFY `function_access` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5672;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menuid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `menu_role`
--
ALTER TABLE `menu_role`
  MODIFY `menu_role_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1300;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_cellsite`
--
ALTER TABLE `tbl_cellsite`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_crimeinfo`
--
ALTER TABLE `tbl_crimeinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_internal_hotlist`
--
ALTER TABLE `tbl_internal_hotlist`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_requestlogs`
--
ALTER TABLE `tbl_requestlogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `tbl_req_mno_msisdn`
--
ALTER TABLE `tbl_req_mno_msisdn`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_subcrimeinfo`
--
ALTER TABLE `tbl_subcrimeinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
