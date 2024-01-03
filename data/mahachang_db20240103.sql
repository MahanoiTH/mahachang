-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 01:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahachang_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `bid_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `bidder_id` int(11) NOT NULL,
  `bid_amount` decimal(10,2) NOT NULL,
  `bid_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `business_jobs`
--

CREATE TABLE `business_jobs` (
  `id` int(11) NOT NULL,
  `job_id` int(10) NOT NULL,
  `business_jobs_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `province_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_jobs`
--

INSERT INTO `business_jobs` (`id`, `job_id`, `business_jobs_title`, `description`, `img_url`, `province_id`, `user_id`, `active`) VALUES
(1, 2, '', 'เชียงใหม่ - บริษัท สามสิบหกโฮมบิ้วด์เดอร์ จำกัด ให้บริการงานรีโนเวทปรับปรุงบ้านพักอาศัย,อาคารพานิชย์,รับเหมาก่อสร้างทุกประเภท, งานต่อเติมบ้านพักอาศัย,โรงจอดรถ', 'img-jobs/2/20231027174627-hv2S6bOzHnVuAqEq4nmF.jpg', 1, 2, 1),
(3, 7, '', 'จำหน่ายเสาเข็มเสริมเหล็กอัดแรงคอนกรีตหน้าตัดรูปตัว I แผ่นพื้นสำเร็จรูปท้องเรียบ และเสาคอนกรีตสี่เหลี่ยมตันขนาดต่างๆ', 'img-jobs/3/show_1.jpg', 1, 3, 0),
(4, 7, 'ทดสอบเพิ่ม title', 'ทดสอบเพิ่ม desc', 'img-jobs/2/helpdesk-chat-user-วิธีสอบถามการใช้งานระบบ.pdf', 0, 2, 1),
(5, 13, 'ทดสอบเพิ่ม titleasd', 'ทดสอบเพิ่ม descasd', 'img-jobs/2/WORKLOADแผนงานและผลงาน.pdf', 0, 2, 1),
(6, 16, 'ทดสอบเพิ่ม titleaSDF', 'saSAD', 'img-jobs/2/helpdesk-chat-admin(ระบบแชท)-วิธีตอบคำถามผู้ใช้งาน.pdf', 6, 2, 0),
(7, 3, 'adf', 'asdf', 'img-jobs/2/20231020160907704_20231009144531444_plan 1 (5) (2).xlsx', 0, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`) VALUES
(1, 'บริษัท 304วิศวกรรมความปลอดภัย จำกัด'),
(2, 'บริษัท 67 อินเวนชั่น โฮม เดคโคแอนด์คอน จำกัด'),
(3, 'ห้างหุ้นส่วนจำกัด เจ็ท วิศวกรรม');

-- --------------------------------------------------------

--
-- Table structure for table `cs_advertising_attachment`
--

CREATE TABLE `cs_advertising_attachment` (
  `id` int(11) NOT NULL,
  `advertising_id` int(11) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cs_advertising_attachment`
--

INSERT INTO `cs_advertising_attachment` (`id`, `advertising_id`, `file_url`, `active`) VALUES
(1, 29, 'test01.png', 0),
(2, 29, 'test02.png', 1),
(3, 29, 'test03.png', 1),
(4, 1, 'product1.jpg', 1),
(5, 2, 'product2.jpg', 1),
(6, 3, 'product3.jpg', 1),
(7, 4, 'product4.jpg', 1),
(8, 5, 'product5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_advertising`
--

CREATE TABLE `customer_advertising` (
  `id` int(11) NOT NULL,
  `advertising_order` int(30) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `create_by` varchar(255) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_advertising`
--

INSERT INTO `customer_advertising` (`id`, `advertising_order`, `active`, `create_by`, `create_date`, `start_date`, `end_date`, `phone_number`, `customer_name`, `description`, `email`) VALUES
(1, 1, 1, NULL, '2023-12-31 14:51:12', '2023-12-13', '2023-12-24', NULL, 'บริษัทรับเหมาก่อสร้าง จำกัด', 'รายละเอียด: บริษัทสร้างทวีปเป็นผู้เชี่ยวชาญในการรับเหมาก่อสร้างโครงการทั้งใหญ่และเล็กทั่วทั้งทวีป ด้วยทีมงานที่มีประสบการณ์และความเชี่ยวชาญ.', NULL),
(2, 2, 1, NULL, '2023-12-31 12:28:09', '2023-12-14', '2023-12-24', NULL, 'บริษัทก่อสร้างประสิทธิภาพ จำกัด', 'รายละเอียด: บริษัทสร้างทวีปเป็นผู้เชี่ยวชาญในการรับเหมาก่อสร้างโครงการทั้งใหญ่และเล็กทั่วทั้งทวีป ด้วยทีมงานที่มีประสบการณ์และความเชี่ยวชาญ.', NULL),
(3, 3, 1, NULL, '2023-12-31 12:28:17', '2023-12-05', '2023-12-25', NULL, 'บริษัทสร้างสรรค์ออกแบบ จำกัด', 'รายละเอียด: เจริญก่อสร้างมุ่งมั่นในการสร้างคุณภาพที่ยอดเยี่ยมและตอบสนองต่อความต้องการของลูกค้าทุกท่าน.', NULL),
(4, 4, 1, NULL, '2023-12-31 12:28:26', '2023-12-21', '2023-12-25', NULL, 'บริษัทขุนทองก่อสร้าง จำกัด', 'รายละเอียด: สร้างศิลาเป็นบริษัทที่มุ่งมั่นที่จะสร้างผลงานที่เป็นศิลปะและดูประณีตในทุกรายละเอียด.', NULL),
(5, 5, 1, NULL, '2023-12-31 12:28:34', '2023-12-19', '2023-12-25', NULL, 'บริษัททัพหลวงก่อสร้าง จำกัด', 'รายละเอียด: ก้าวทันสถาปัตยกรรมมุ่งหวังที่จะสร้างสรรค์โครงการที่ทันสมัยและตอบสนองต่อแนวโน้มของอนาคต.', NULL),
(6, 6, 1, NULL, '2023-12-31 12:28:39', '2023-12-28', '2023-12-25', NULL, 'บริษัทบ้านเพื่อความยั่งยืน จำกัด', 'รายละเอียด: มุ่งสู่การสร้างโครงการที่ยั่งยืนและเป็นมิตรต่อสิ่งแวดล้อม.', NULL),
(7, 8, 1, NULL, '2023-12-31 12:28:45', '2023-12-27', '2023-12-25', NULL, 'บริษัทนวัตกรรมสร้างบ้าน จำกัด', 'รายละเอียด: นวัตกรรมบ้านมีความเชื่อในการนำเสนอและสร้างโครงการที่ใช้เทคโนโลยีและนวัตกรรมทันสมัย.', NULL),
(8, 9, 1, NULL, '2023-12-31 12:28:51', '2023-12-20', '2023-12-25', NULL, 'บริษัทสร้างศิลา จำกัด', 'รายละเอียด: ภูมิใจก่อสร้างมุ่งหวังที่จะสร้างผลงานที่ทุ่มเทในคุณภาพและความพึงพอใจของลูกค้า.', NULL),
(9, 69, 1, NULL, '2023-12-24 17:42:52', '2023-12-10', '2023-12-25', NULL, 'fsf', 'sfg', NULL),
(10, 75, 1, NULL, '2023-12-24 17:44:51', '2023-12-25', '2023-12-25', NULL, 'asd', 'adf', NULL),
(11, 85, 1, NULL, '2023-12-24 17:47:42', '2023-12-25', '2023-12-25', NULL, 'vd', 'dsf', NULL),
(12, 854, 1, NULL, '2023-12-24 17:48:44', '2023-12-14', '2023-12-25', NULL, 'ew', 'ew', NULL),
(13, 7, 1, NULL, '2023-12-31 12:37:38', '2023-12-27', '2023-12-25', NULL, 'บริษัททวีปสร้างสรรค์ จำกัด', 'รายละเอียด: เน้นการสร้างบ้านที่ไม่เพียงเป็นที่อยู่อาศัยเท่านั้น แต่ยังเป็นสถานที่ที่สร้างสรรค์และน่าอยู่.', NULL),
(14, 56, 1, NULL, '2023-12-25 15:09:28', '2023-12-26', '2023-12-25', NULL, 'dasf', 'sadf', NULL),
(15, 77, 1, NULL, '2023-12-25 15:13:32', '2023-12-28', '2023-12-25', NULL, 'eqe', 'qwer', NULL),
(16, 777, 1, NULL, '2023-12-25 15:16:35', '2023-12-26', '2023-12-25', NULL, 'rwq', 'qw', NULL),
(17, 777, 1, NULL, '2023-12-25 15:17:32', '2023-12-26', '2023-12-25', NULL, 'rwq', 'qw', NULL),
(18, 74, 1, NULL, '2023-12-25 15:30:08', '2023-12-18', '2023-12-25', NULL, 'dsf', 'adf', NULL),
(19, 54, 1, NULL, '2023-12-31 12:29:12', '2023-12-14', '2023-12-25', NULL, 'บริษัทสร้างอาคารโดดเด่น จำกัด', 'ายละเอียด: บริษัทสร้างฝันมุ่งหวังที่จะทำให้ความฝันของลูกค้ากลายเป็นจริง.', NULL),
(20, 75, 1, NULL, '2023-12-30 12:55:44', '2023-12-20', '2023-12-25', NULL, 'แก้ไข', 'faf', NULL),
(21, 775, 1, NULL, '2023-12-25 15:58:52', '2023-12-11', '2023-12-25', NULL, 'ew', 'tw', NULL),
(22, 75, 1, NULL, '2023-12-30 12:54:45', '2023-12-28', '2023-12-25', NULL, 'แก้ไข', '97', NULL),
(23, 785, 1, NULL, '2023-12-25 16:02:32', '2023-12-20', '2023-12-25', NULL, 'rt', 'ertwt', NULL),
(24, 472, 1, NULL, '2023-12-25 16:06:16', '2023-12-28', '2023-12-25', NULL, 'as', 'asd', NULL),
(25, 445, 1, NULL, '2023-12-25 16:13:41', '2023-12-20', '2023-12-25', NULL, 'asd', 'asd', NULL),
(26, 75412, 1, NULL, '2023-12-25 16:16:24', '2023-12-27', '2023-12-25', NULL, 'ไำพ', 'ไำพ', NULL),
(27, 4545, 1, NULL, '2023-12-25 16:45:29', '2023-12-20', '2023-12-25', NULL, 'rtre', 'ert', NULL),
(28, 712, 1, NULL, '2023-12-25 16:46:32', '2023-12-19', '2023-12-25', NULL, 'df', 'sdf', NULL),
(29, 10, 1, NULL, '2023-12-31 12:38:01', '2023-12-13', '2023-12-25', NULL, 'บริษัททันสถาปัตยกรรม จำกัด', 'รายละเอียด: สร้างอาคารที่โดดเด่นและทันสมัย, พร้อมให้บริการทั้งในภาครัฐและเอกชน.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homeowner`
--

CREATE TABLE `homeowner` (
  `homeowner_id` int(11) NOT NULL,
  `homeowner_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_description` text DEFAULT NULL,
  `job_type` varchar(50) DEFAULT NULL,
  `job_location` varchar(100) DEFAULT NULL,
  `job_owner_id` int(11) NOT NULL,
  `job_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_air_conditioning`
--

CREATE TABLE `jobs_air_conditioning` (
  `id` int(11) NOT NULL,
  `job_order` int(30) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `job_description` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_air_conditioning_attachment`
--

CREATE TABLE `jobs_air_conditioning_attachment` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_construction`
--

CREATE TABLE `jobs_construction` (
  `id` int(11) NOT NULL,
  `job_order` int(30) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `job_description` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_construction_attachment`
--

CREATE TABLE `jobs_construction_attachment` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_design`
--

CREATE TABLE `jobs_design` (
  `id` int(11) NOT NULL,
  `job_order` int(30) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `job_description` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_design_attachment`
--

CREATE TABLE `jobs_design_attachment` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_electrical`
--

CREATE TABLE `jobs_electrical` (
  `id` int(11) NOT NULL,
  `job_order` int(30) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `job_description` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_electrical_attachment`
--

CREATE TABLE `jobs_electrical_attachment` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_flooring`
--

CREATE TABLE `jobs_flooring` (
  `id` int(11) NOT NULL,
  `job_order` int(30) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `job_description` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_flooring_attachment`
--

CREATE TABLE `jobs_flooring_attachment` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_interior_design`
--

CREATE TABLE `jobs_interior_design` (
  `id` int(11) NOT NULL,
  `advertising_order` int(30) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `create_by` varchar(255) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs_interior_design`
--

INSERT INTO `jobs_interior_design` (`id`, `advertising_order`, `active`, `create_by`, `create_date`, `start_date`, `end_date`, `phone_number`, `customer_name`, `description`, `email`) VALUES
(1, 1, 1, NULL, '2023-12-24 09:10:33', '2023-12-13', '2023-12-24', NULL, 'ทดสอบ', 'รายละเอียด', NULL),
(2, 2, 1, NULL, '2023-12-24 09:17:00', '2023-12-14', '2023-12-24', NULL, 'ทดสอบ2', 'หฟก', NULL),
(3, 3, 1, NULL, '2023-12-24 10:21:40', '2023-12-05', '2023-12-25', NULL, 'ทดสอบ3', 'รายการ3', NULL),
(29, 45, 1, NULL, '2023-12-25 09:49:14', '2023-12-13', '2023-12-25', NULL, 'กหด', 'หกด', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs_interior_design_attachment`
--

CREATE TABLE `jobs_interior_design_attachment` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_plumbing`
--

CREATE TABLE `jobs_plumbing` (
  `id` int(11) NOT NULL,
  `job_order` int(30) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `job_description` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_plumbing_attachment`
--

CREATE TABLE `jobs_plumbing_attachment` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_steel`
--

CREATE TABLE `jobs_steel` (
  `id` int(11) NOT NULL,
  `job_order` int(30) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `job_description` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_steel_attachment`
--

CREATE TABLE `jobs_steel_attachment` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_type`
--

CREATE TABLE `jobs_type` (
  `id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs_type`
--

INSERT INTO `jobs_type` (`id`, `job_name`) VALUES
(1, 'ออกแบบ-ตกแต่งภายใน'),
(2, 'สร้างบ้าน-สร้างอาคาร'),
(3, 'ต่อเติมบ้าน-ซ่อมบ้าน'),
(4, 'ออกแบบ-ติดตั้งระบบไฟฟ้า'),
(5, 'ออกแบบ-ติดตั้งระบบประปา'),
(6, 'ติดตั้งแอร์-ซ่อมล้างแอร์'),
(7, 'โครงสร้างอาคาร'),
(8, 'โครงสร้างเหล็ก'),
(9, 'รื้อถอน-รื้ออาคาร-ทุบตึก'),
(10, 'ทาสี-ห้อง-บ้าน-อาคาร'),
(11, 'เฟอร์นิเจอร์-Built-in'),
(12, 'เขียนแบบ-ออกแบบ-3D'),
(13, 'งานกระเบื้อง-ปูกระเบื้อง'),
(14, 'ผ้าม่าน-พรม-มู่ลี่'),
(15, 'เหล็ก-สแตนเลส-อลูมิเนียม'),
(16, 'พลาสติก-โพลีคาร์บอเนต');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`) VALUES
(1, 'กรุงเทพมหานคร'),
(2, 'กระบี่'),
(3, 'กาญจนบุรี'),
(4, 'กาฬสินธุ์'),
(5, 'กำแพงเพชร'),
(6, 'ขอนแก่น'),
(7, 'จันทบุรี'),
(8, 'ฉะเชิงเทรา'),
(9, 'ชลบุรี'),
(10, 'ชัยนาท'),
(11, 'ชัยภูมิ'),
(12, 'ชุมพร'),
(13, 'เชียงราย'),
(14, 'เชียงใหม่'),
(15, 'ตรัง'),
(16, 'ตราด'),
(17, 'ตาก'),
(18, 'นครนายก'),
(19, 'นครปฐม'),
(20, 'นครพนม'),
(21, 'นครราชสีมา'),
(22, 'นครศรีธรรมราช'),
(23, 'นครสวรรค์'),
(24, 'นนทบุรี'),
(25, 'นราธิวาส'),
(26, 'น่าน'),
(27, 'บึงกาฬ'),
(28, 'บุรีรัมย์'),
(29, 'ปทุมธานี'),
(30, 'ประจวบคีรีขันธ์'),
(31, 'ปราจีนบุรี'),
(32, 'ปัตตานี'),
(33, 'พระนครศรีอยุธยา'),
(34, 'พะเยา'),
(35, 'พังงา'),
(36, 'พัทลุง'),
(37, 'พิจิตร'),
(38, 'พิษณุโลก'),
(39, 'เพชรบุรี'),
(40, 'เพชรบูรณ์'),
(41, 'แพร่'),
(42, 'ภูเก็ต'),
(43, 'มหาสารคาม'),
(44, 'มุกดาหาร'),
(45, 'แม่ฮ่องสอน'),
(46, 'ยโสธร'),
(47, 'ยะลา'),
(48, 'ร้อยเอ็ด'),
(49, 'ระนอง'),
(50, 'ระยอง'),
(51, 'ราชบุรี'),
(52, 'ลพบุรี'),
(53, 'ลำปาง'),
(54, 'ลำพูน'),
(55, 'เลย'),
(56, 'ศรีสะเกษ'),
(57, 'สกลนคร'),
(58, 'สงขลา'),
(59, 'สตูล'),
(60, 'สมุทรปราการ'),
(61, 'สมุทรสงคราม'),
(62, 'สมุทรสาคร'),
(63, 'สระแก้ว'),
(64, 'สระบุรี'),
(65, 'สิงห์บุรี'),
(66, 'สุโขทัย'),
(67, 'สุพรรณบุรี'),
(68, 'สุราษฎร์ธานี'),
(69, 'สุรินทร์'),
(70, 'หนองคาย'),
(71, 'หนองบัวลำภู'),
(72, 'อ่างทอง'),
(73, 'อำนาจเจริญ'),
(74, 'อุดรธานี'),
(75, 'อุตรดิตถ์'),
(76, 'อุทัยธานี'),
(77, 'อุบลราชธานี');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_09_17_153712_create_posts_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `url_image` varchar(50) DEFAULT NULL,
  `created_by_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `location`, `url_image`, `created_by_id`, `created_at`, `updated_at`) VALUES
(1, 'ทดสอบ', 'เนื้อหา', '', NULL, 2, '2023-09-25 12:00:35', '2023-09-25 12:00:35'),
(2, 'หัวข้อทดสอบ', 'ก้าวไกล ชงทบทวนกฎหมายสถานบันเทิง แนะแก้ใบอนุญาตซ้ำซ้อน-กำหนดโซนนิ่งใหม่', '', NULL, 2, '2023-09-27 09:55:29', '2023-09-27 09:55:29'),
(3, 'หัวข้อทดสอบ', 'ก้าวไกล ชงทบทวนกฎหมายสถานบันเทิง แนะแก้ใบอนุญาตซ้ำซ้อน-กำหนดโซนนิ่งใหม่', '', NULL, 2, '2023-09-27 09:56:07', '2023-09-27 09:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`province_id`, `province_name`) VALUES
(0, 'ทั้้งหมด'),
(1, 'กรุงเทพมหานคร'),
(2, 'สมุทรปราการ'),
(3, 'นนทบุรี'),
(4, 'ปทุมธานี'),
(5, 'พระนครศรีอยุธยา'),
(6, 'อ่างทอง'),
(7, 'ลพบุรี'),
(8, 'สิงห์บุรี'),
(9, 'ชัยนาท'),
(10, 'สระบุรี'),
(11, 'ชลบุรี'),
(12, 'ระยอง'),
(13, 'จันทบุรี'),
(14, 'ตราด'),
(15, 'ฉะเชิงเทรา'),
(16, 'ปราจีนบุรี'),
(17, 'นครนายก'),
(18, 'สระแก้ว'),
(19, 'นครราชสีมา'),
(20, 'บุรีรัมย์'),
(21, 'สุรินทร์'),
(22, 'ศรีสะเกษ'),
(23, 'อุบลราชธานี'),
(24, 'ยโสธร'),
(25, 'ชัยภูมิ'),
(26, 'อำนาจเจริญ'),
(27, 'บึงกาฬ'),
(28, 'หนองบัวลำภู'),
(29, 'ขอนแก่น'),
(30, 'อุดรธานี'),
(31, 'เลย'),
(32, 'หนองคาย'),
(33, 'มหาสารคาม'),
(34, 'ร้อยเอ็ด'),
(35, 'กาฬสินธุ์'),
(36, 'สกลนคร'),
(37, 'นครพนม'),
(38, 'มุกดาหาร'),
(39, 'เชียงใหม่'),
(40, 'ลำพูน'),
(41, 'ลำปาง'),
(42, 'อุตรดิตถ์'),
(43, 'แพร่'),
(44, 'น่าน'),
(45, 'พะเยา'),
(46, 'เชียงราย'),
(47, 'แม่ฮ่องสอน'),
(48, 'นครสวรรค์'),
(49, 'อุทัยธานี'),
(50, 'กำแพงเพชร'),
(51, 'ตาก'),
(52, 'สุโขทัย'),
(53, 'พิษณุโลก'),
(54, 'พิจิตร'),
(55, 'เพชรบูรณ์'),
(56, 'ราชบุรี'),
(57, 'กาญจนบุรี'),
(58, 'สุพรรณบุรี'),
(59, 'นครปฐม'),
(60, 'สมุทรสาคร'),
(61, 'สมุทรสงคราม'),
(62, 'เพชรบุรี'),
(63, 'ประจวบคีรีขันธ์'),
(64, 'นครศรีธรรมราช'),
(65, 'กระบี่'),
(66, 'พังงา'),
(67, 'ภูเก็ต'),
(68, 'สุราษฎร์ธานี'),
(69, 'ระนอง'),
(70, 'ชุมพร'),
(71, 'สงขลา'),
(72, 'สตูล'),
(73, 'ตรัง'),
(74, 'พัทลุง'),
(75, 'ปัตตานี'),
(76, 'ยะลา'),
(77, 'นราธิวาส');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `reviewed_user_id` int(11) NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `review_text` text DEFAULT NULL,
  `review_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userjobs`
--

CREATE TABLE `userjobs` (
  `user_id` int(11) NOT NULL,
  `job_id` int(11) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type_id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `homeowner_id` int(11) DEFAULT NULL,
  `img_profile_url` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `phone`, `password`, `type_id`, `company_name`, `homeowner_id`, `img_profile_url`, `active`, `created_at`, `updated_at`) VALUES
(1, 'admin', '65108120039@rpu.ac.th', '', '$2y$10$B6AB5XnF55pQG3VhGZiHUOMuSraYIqDw5kFW1qZL72Isc3mR0e0gC', 1, NULL, NULL, '', 1, '2023-09-25 14:51:39', '2023-09-25 17:10:35'),
(2, 'บริษัท สามสิบหกโฮมบิ้วด์เดอร์ จำกัด', 'kukungngjung@gmail.com', '0646723333', '$2y$10$rV29WYB9868FjIM5zWvtOe3d1wvMRg4INwBJNsH4LBj.7JVndMhbe', 2, 'บริษัท สามสิบหกโฮมบิ้วด์เดอร์ จำกัด', NULL, '', 1, '2023-09-25 17:05:02', '2023-11-25 15:26:45'),
(3, 'บริษัท สาธินี ค้าวัสดุ จํากัด', 'bs@gmail.com', '0634567777', '$2y$10$rV29WYB9868FjIM5zWvtOe3d1wvMRg4INwBJNsH4LBj.7JVndMhbe', 2, 'บริษัท สาธินี ค้าวัสดุ จํากัด', NULL, '', 1, '2023-10-14 15:10:58', '2023-11-04 07:18:16'),
(10, 'เจ้าของบ้าน2', '65108120034@rpu.ac.th', '0634567778', '1234', 3, NULL, NULL, '', 1, '2023-10-14 15:21:06', '2023-10-14 15:21:06'),
(11, 'เจ้าของบ้าน3', '65108120030@rpu.ac.th', '0634568888', '$2y$10$rV29WYB9868FjIM5zWvtOe3d1wvMRg4INwBJNsH4LBj.7JVndMhbe', 3, NULL, NULL, '', 1, '2023-10-14 15:51:34', '2023-10-14 15:51:34'),
(18, 'company07', 'company07@gmail.com', '0634567471', '$2y$10$qlM6Q5bZpA1AofEQs9IDP.iPjNYx9WSwaPZKeCRTTvmFqA95aeSUu', 2, 'บริษัท 67 อินเวนชั่น โฮม เดคโคแอนด์คอน จำกัด', NULL, '', 1, '2023-11-04 07:11:49', '2023-11-04 07:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`type_id`, `type_name`) VALUES
(2, 'บริษัทรับเหมา'),
(1, 'ผู้ดูแลระบบ'),
(3, 'เจ้าของบ้าน');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `bidder_id` (`bidder_id`);

--
-- Indexes for table `business_jobs`
--
ALTER TABLE `business_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `province_id` (`province_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`),
  ADD UNIQUE KEY `company_name` (`company_name`);

--
-- Indexes for table `cs_advertising_attachment`
--
ALTER TABLE `cs_advertising_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advertising_id` (`advertising_id`);

--
-- Indexes for table `customer_advertising`
--
ALTER TABLE `customer_advertising`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homeowner`
--
ALTER TABLE `homeowner`
  ADD PRIMARY KEY (`homeowner_id`),
  ADD UNIQUE KEY `homeowner_name` (`homeowner_name`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `job_owner_id` (`job_owner_id`);

--
-- Indexes for table `jobs_air_conditioning`
--
ALTER TABLE `jobs_air_conditioning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_air_conditioning_attachment`
--
ALTER TABLE `jobs_air_conditioning_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `jobs_construction`
--
ALTER TABLE `jobs_construction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_construction_attachment`
--
ALTER TABLE `jobs_construction_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `jobs_design`
--
ALTER TABLE `jobs_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_design_attachment`
--
ALTER TABLE `jobs_design_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `jobs_electrical`
--
ALTER TABLE `jobs_electrical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_electrical_attachment`
--
ALTER TABLE `jobs_electrical_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `jobs_flooring`
--
ALTER TABLE `jobs_flooring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_flooring_attachment`
--
ALTER TABLE `jobs_flooring_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `jobs_interior_design`
--
ALTER TABLE `jobs_interior_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_interior_design_attachment`
--
ALTER TABLE `jobs_interior_design_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `jobs_plumbing`
--
ALTER TABLE `jobs_plumbing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_plumbing_attachment`
--
ALTER TABLE `jobs_plumbing_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `jobs_steel`
--
ALTER TABLE `jobs_steel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_steel_attachment`
--
ALTER TABLE `jobs_steel_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `jobs_type`
--
ALTER TABLE `jobs_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `create_by_id` (`created_by_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `reviewer_id` (`reviewer_id`),
  ADD KEY `reviewed_user_id` (`reviewed_user_id`);

--
-- Indexes for table `userjobs`
--
ALTER TABLE `userjobs`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `homeowner_id` (`homeowner_id`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`type_id`),
  ADD UNIQUE KEY `type_name` (`type_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_jobs`
--
ALTER TABLE `business_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cs_advertising_attachment`
--
ALTER TABLE `cs_advertising_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_advertising`
--
ALTER TABLE `customer_advertising`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homeowner`
--
ALTER TABLE `homeowner`
  MODIFY `homeowner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs_air_conditioning_attachment`
--
ALTER TABLE `jobs_air_conditioning_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs_construction_attachment`
--
ALTER TABLE `jobs_construction_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs_design_attachment`
--
ALTER TABLE `jobs_design_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs_electrical_attachment`
--
ALTER TABLE `jobs_electrical_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs_flooring_attachment`
--
ALTER TABLE `jobs_flooring_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs_interior_design`
--
ALTER TABLE `jobs_interior_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `jobs_interior_design_attachment`
--
ALTER TABLE `jobs_interior_design_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs_plumbing_attachment`
--
ALTER TABLE `jobs_plumbing_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs_steel_attachment`
--
ALTER TABLE `jobs_steel_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs_type`
--
ALTER TABLE `jobs_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `bids_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`),
  ADD CONSTRAINT `bids_ibfk_2` FOREIGN KEY (`bidder_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `business_jobs`
--
ALTER TABLE `business_jobs`
  ADD CONSTRAINT `business_jobs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `business_jobs_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs_type` (`id`),
  ADD CONSTRAINT `business_jobs_ibfk_3` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`province_id`);

--
-- Constraints for table `cs_advertising_attachment`
--
ALTER TABLE `cs_advertising_attachment`
  ADD CONSTRAINT `cs_advertising_attachment_ibfk_1` FOREIGN KEY (`advertising_id`) REFERENCES `customer_advertising` (`id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`job_owner_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `jobs_air_conditioning_attachment`
--
ALTER TABLE `jobs_air_conditioning_attachment`
  ADD CONSTRAINT `jobs_air_conditioning_attachment_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs_air_conditioning` (`id`);

--
-- Constraints for table `jobs_construction_attachment`
--
ALTER TABLE `jobs_construction_attachment`
  ADD CONSTRAINT `jobs_construction_attachment_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs_construction` (`id`);

--
-- Constraints for table `jobs_design_attachment`
--
ALTER TABLE `jobs_design_attachment`
  ADD CONSTRAINT `jobs_design_attachment_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs_design` (`id`);

--
-- Constraints for table `jobs_electrical_attachment`
--
ALTER TABLE `jobs_electrical_attachment`
  ADD CONSTRAINT `jobs_electrical_attachment_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs_electrical` (`id`);

--
-- Constraints for table `jobs_flooring_attachment`
--
ALTER TABLE `jobs_flooring_attachment`
  ADD CONSTRAINT `jobs_flooring_attachment_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs_flooring` (`id`);

--
-- Constraints for table `jobs_interior_design_attachment`
--
ALTER TABLE `jobs_interior_design_attachment`
  ADD CONSTRAINT `jobs_interior_design_attachment_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs_interior_design` (`id`);

--
-- Constraints for table `jobs_plumbing_attachment`
--
ALTER TABLE `jobs_plumbing_attachment`
  ADD CONSTRAINT `jobs_plumbing_attachment_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs_plumbing` (`id`);

--
-- Constraints for table `jobs_steel_attachment`
--
ALTER TABLE `jobs_steel_attachment`
  ADD CONSTRAINT `jobs_steel_attachment_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs_steel` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`reviewer_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`reviewed_user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `userjobs`
--
ALTER TABLE `userjobs`
  ADD CONSTRAINT `userjobs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `userjobs_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `usertype` (`type_id`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`homeowner_id`) REFERENCES `homeowner` (`homeowner_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
