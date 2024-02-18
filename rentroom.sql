-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 29, 2024 at 03:03 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `guidelinesadmits`
--

CREATE TABLE `guidelinesadmits` (
  `id` bigint UNSIGNED NOT NULL,
  `job_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bypass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guide_no1` int NOT NULL,
  `guide_no2` int NOT NULL,
  `guide_no3` int NOT NULL,
  `guide_no4` int NOT NULL,
  `guide_no5` int NOT NULL,
  `guide_no6` int NOT NULL,
  `guide_no7` int NOT NULL,
  `guide_no8` int NOT NULL,
  `guide_no9` int NOT NULL,
  `guide_no10` int NOT NULL,
  `guide_no11` int NOT NULL,
  `guide_no12` int NOT NULL,
  `guide_no13` int NOT NULL,
  `guide_no14` int NOT NULL,
  `guide_no15` int NOT NULL,
  `guide_no16` int NOT NULL,
  `guide_no17` int NOT NULL,
  `guide_no18` int NOT NULL,
  `guide_no19` int NOT NULL,
  `guide_no20` int NOT NULL,
  `guide_no21` int NOT NULL,
  `guide_no22` int NOT NULL,
  `guide_no23` int NOT NULL,
  `guide_no24` int NOT NULL,
  `guide_no25` int NOT NULL,
  `guide_no26` int NOT NULL,
  `guide_no27` int NOT NULL,
  `guide_no28` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guidelinesadmits`
--

INSERT INTO `guidelinesadmits` (`id`, `job_id`, `bypass`, `guide_no1`, `guide_no2`, `guide_no3`, `guide_no4`, `guide_no5`, `guide_no6`, `guide_no7`, `guide_no8`, `guide_no9`, `guide_no10`, `guide_no11`, `guide_no12`, `guide_no13`, `guide_no14`, `guide_no15`, `guide_no16`, `guide_no17`, `guide_no18`, `guide_no19`, `guide_no20`, `guide_no21`, `guide_no22`, `guide_no23`, `guide_no24`, `guide_no25`, `guide_no26`, `guide_no27`, `guide_no28`, `created_at`, `updated_at`) VALUES
(5, '52', '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2024-01-28 22:08:36', '2024-01-28 22:08:36'),
(6, '53', '1', 1, 1, 1, 0, 0, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2024-01-29 08:58:20', '2024-01-29 09:59:12'),
(7, '55', '3', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2024-01-29 09:59:33', '2024-01-29 09:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `jobrents`
--

CREATE TABLE `jobrents` (
  `id` bigint UNSIGNED NOT NULL,
  `job_date_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_id` int DEFAULT NULL,
  `ward_id` int DEFAULT NULL,
  `status_id` int DEFAULT NULL,
  `room_id` int DEFAULT NULL,
  `accept_id` int DEFAULT NULL,
  `patient_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_register` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_pa_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_re_tel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_re_date_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_discharge` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_rent_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_rent_tell` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_rent_relation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobrents`
--

INSERT INTO `jobrents` (`id`, `job_date_time`, `doctor_id`, `ward_id`, `status_id`, `room_id`, `accept_id`, `patient_name`, `is_register`, `cid`, `job_pa_status`, `job_re_tel`, `job_re_date_time`, `job_discharge`, `job_rent_name`, `job_rent_tell`, `job_rent_relation`, `created_at`, `updated_at`) VALUES
(52, '2024-01-28 22:08:08', 11, 161, 2, 43, 1, 'ขวัญวัฒน์ อาวุธทอง', '1', '1361000247312', '1', '86400', '2024-01-28 21:00', NULL, NULL, NULL, NULL, '2024-01-28 22:08:36', '2024-01-28 22:09:15'),
(53, '2024-01-29 08:57:44', 11, 161, 1, 109, 1, 'ขวัญวัฒน์ อาวุธทอง', '1', '1361000247312', '2', '82468', '2024-01-29 22:00', NULL, NULL, NULL, NULL, '2024-01-29 08:58:20', '2024-01-29 09:59:12'),
(54, '2024-01-29 09:19:33', 11, 1, 2, 44, 3, 'พงษ์พิสุทธิ์ อาวุธทอง', '0', '1361000247312', '2', NULL, '2024-01-29 22:00', NULL, 'ขวัญวัฒน์ อาวุธทอง', '0648064625', '2', '2024-01-29 09:19:54', '2024-01-29 09:45:59'),
(55, '2024-01-29 09:59:17', 11, 161, 3, 109, 2, 'พงษ์พิสุทธิ์ อาวุธทอง', NULL, '1361000247312', '1', '82468', '2024-01-29 22:00', NULL, '', '', '', '2024-01-29 09:59:33', '2024-01-29 09:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2024_01_01_085624_create_jobrents_table', 1),
(4, '2024_01_01_091900_create_roomtypes_table', 1),
(5, '2024_01_01_163515_create_roomtypesubs_table', 1),
(6, '2024_01_02_022041_create_statusrents_table', 1),
(7, '2024_01_09_034336_create_users_table', 2),
(8, '2024_01_14_183936_users', 3),
(9, '2024_01_14_201844_users', 4),
(10, '2024_01_14_205338_wards', 5),
(11, '2024_01_14_210310_socketrooms', 6),
(12, '2024_01_14_211417_socketrooms', 7),
(13, '2024_01_14_211509_sessionrooms', 8),
(14, '2024_01_14_212841_roomtypesubs', 9),
(15, '2024_01_15_144142_users', 10),
(16, '2024_01_16_090453_jobrents', 11),
(17, '2024_01_16_092127_jobrents', 12),
(18, '2024_01_16_092406_jobrents', 13),
(19, '2024_01_16_092501_jobrents', 14),
(20, '2024_01_16_092656_jobrents', 15),
(21, '2024_01_16_092930_jobrents', 16),
(22, '2024_01_16_095243_jobrents', 17),
(23, '2024_01_17_095603_statuspatients', 18),
(24, '2024_01_17_223309_roomtypesubs', 19),
(25, '2024_01_17_233550_roomtypesubs', 20),
(26, '2024_01_22_084948_roomtypesubs', 21),
(27, '2024_01_23_093707_guidelinesadmits', 22),
(28, '2024_01_28_210041_guidelinesadmits', 23);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roomtypes`
--

CREATE TABLE `roomtypes` (
  `id` bigint UNSIGNED NOT NULL,
  `room_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roomtypes`
--

INSERT INTO `roomtypes` (`id`, `room_name`, `room_image`, `created_at`, `updated_at`) VALUES
(1, 'ห้องพิเศษ ตึกแม่และเด็ก 10 ชั้น', 'img/rent/room/mother.png', '2024-01-10 04:03:07', '2024-01-10 04:03:07'),
(2, 'ห้องพิเศษ ตึกเฉลิมพระเกียรติ 10 ชั้น', 'img/rent/room/med.png', '2024-01-10 04:03:07', '2024-01-10 04:03:07'),
(3, 'ห้องพิเศษ ตึกศัลยกรรม 8 ชั้น', 'img/rent/room/surgery.png', '2024-01-10 04:03:07', '2024-01-10 04:03:07'),
(4, 'อยู่ในขั้นตอนพิจารณา', 'img/rent/room/cph.png', '2024-01-10 04:03:07', '2024-01-10 04:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `roomtypesubs`
--

CREATE TABLE `roomtypesubs` (
  `id` bigint UNSIGNED NOT NULL,
  `roomtype_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socket_id` int NOT NULL,
  `type_id` int NOT NULL DEFAULT '0',
  `room_status` int NOT NULL,
  `room_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_subtype_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_subtype_price` int NOT NULL,
  `room_subtype_nurse_price` int NOT NULL,
  `room_subtype_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roomtypesubs`
--

INSERT INTO `roomtypesubs` (`id`, `roomtype_id`, `socket_id`, `type_id`, `room_status`, `room_number`, `room_subtype_name`, `room_subtype_price`, `room_subtype_nurse_price`, `room_subtype_img`, `created_at`, `updated_at`) VALUES
(1, '3', 11, 0, 0, 'พิเศษ1', 'ห้องพิเศษเดี่ยว (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษศัลยกรรมชาย 2)', 1000, 300, 'VIP8(8)NEW/VIP8(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(2, '3', 11, 0, 0, 'พิเศษ2', 'ห้องพิเศษเดี่ยว (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษศัลยกรรมชาย 2)', 1000, 300, 'VIP8(8)NEW/VIP8(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(3, '3', 1, 0, 0, '1502', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 5)', 1400, 300, 'VIP5(8)OLD/VIP5(8)OLD-1.png', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(4, '3', 1, 0, 0, '1504', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 5)', 1400, 300, 'VIP5(8)OLD/VIP5(8)OLD-1.png', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(5, '3', 1, 0, 0, '1505', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 5)', 1400, 300, 'VIP5(8)OLD/VIP5(8)OLD-1.png', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(6, '3', 1, 0, 0, '1506', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 5)', 1400, 300, 'VIP5(8)OLD/VIP5(8)OLD-1.png', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(7, '3', 1, 0, 0, '1507', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 5)', 1400, 300, 'VIP5(8)OLD/VIP5(8)OLD-1.png', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(8, '3', 1, 0, 0, '1508', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 5)', 1400, 300, 'VIP5(8)OLD/VIP5(8)OLD-1.png', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(9, '3', 1, 0, 0, '1509', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 5)', 1400, 300, 'VIP5(8)OLD/VIP5(8)OLD-1.png', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(10, '3', 1, 0, 0, '1510', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 5)', 1400, 300, 'VIP5(8)OLD/VIP5(8)OLD-1.png', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(11, '3', 1, 0, 0, '1511', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 5)', 1400, 300, 'VIP5(8)OLD/VIP5(8)OLD-1.png', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(12, '3', 1, 0, 0, '1512', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 5)', 1400, 300, 'VIP5(8)OLD/VIP5(8)OLD-1.png', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(13, '2', 3, 0, 0, '701', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 7)', 1600, 300, 'VIP7(10)NEW/VIP7(10)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(14, '2', 3, 0, 0, '702', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 7)', 1600, 300, 'VIP7(10)NEW/VIP7(10)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(15, '2', 3, 0, 0, '703', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 7)', 1600, 300, 'VIP7(10)NEW/VIP7(10)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(16, '2', 3, 0, 0, '704', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 7)', 1600, 300, 'VIP7(10)NEW/VIP7(10)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(17, '2', 3, 0, 0, '705', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 7)', 1600, 300, 'VIP7(10)NEW/VIP7(10)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(18, '2', 3, 0, 0, '706', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 7)', 1600, 300, 'VIP7(10)NEW/VIP7(10)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(19, '2', 3, 0, 0, '707', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 7)', 1600, 300, 'VIP7(10)NEW/VIP7(10)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(20, '2', 3, 0, 0, '708', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 7)', 1600, 300, 'VIP7(10)NEW/VIP7(10)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(21, '2', 3, 0, 0, '709', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 7)', 1600, 300, 'VIP7(10)NEW/VIP7(10)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(22, '2', 3, 0, 0, '710', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 7)', 1600, 300, 'VIP7(10)NEW/VIP7(10)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(23, '2', 3, 0, 0, '711', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 7)', 1600, 300, 'VIP7(10)NEW/VIP7(10)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(24, '2', 3, 0, 0, '712', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 7)', 1600, 300, 'VIP7(10)NEW/VIP7(10)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(25, '1', 8, 0, 0, '901', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 9)', 1600, 300, 'VIP9(SU)OLD/VIP9(SU)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(26, '1', 8, 0, 0, '902', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 9)', 1600, 300, 'VIP9(SU)OLD/VIP9(SU)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(27, '1', 8, 0, 0, '903', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 9)', 1600, 300, 'VIP9(SU)OLD/VIP9(SU)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(28, '1', 8, 0, 0, '904', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 9)', 1600, 300, 'VIP9(SU)OLD/VIP9(SU)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(29, '1', 8, 0, 0, '905', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 9)', 1600, 300, 'VIP9(SU)OLD/VIP9(SU)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(30, '1', 8, 0, 0, '906', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 9)', 1600, 300, 'VIP9(SU)OLD/VIP9(SU)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(31, '1', 8, 0, 0, '907', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 9)', 1600, 300, 'VIP9(SU)OLD/VIP9(SU)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(32, '1', 8, 0, 0, '908', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 9)', 1600, 300, 'VIP9(SU)OLD/VIP9(SU)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(33, '1', 8, 0, 0, '909', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 9)', 1600, 300, 'VIP9(SU)OLD/VIP9(SU)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(34, '1', 8, 0, 0, '910', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 9)', 1600, 300, 'VIP9(SU)OLD/VIP9(SU)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(35, '1', 8, 0, 0, '911', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 9)', 1600, 300, 'VIP9(SU)OLD/VIP9(SU)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(36, '1', 8, 0, 0, '912', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 9)', 1600, 300, 'VIP9(SU)OLD/VIP9(SU)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(37, '1', 9, 0, 0, 'VIP01', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 10)', 1600, 300, 'VIP10(SU)NEW/VIP10(SU)NEW.jpg', '2024-01-22 08:55:35', '2024-01-23 09:21:16'),
(38, '1', 9, 0, 0, 'VIP02', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 10)', 1600, 300, 'VIP10(SU)NEW/VIP10(SU)NEW.jpg', '2024-01-22 08:55:35', '2024-01-28 11:30:33'),
(39, '1', 9, 0, 0, 'VIP03', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 10)', 1600, 300, 'VIP10(SU)NEW/VIP10(SU)NEW.jpg', '2024-01-22 08:55:35', '2024-01-24 12:02:26'),
(40, '1', 9, 0, 0, 'VIP04', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 10)', 1600, 300, 'VIP10(SU)NEW/VIP10(SU)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(41, '1', 9, 0, 0, 'VIP05', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 10)', 1600, 300, 'VIP10(SU)NEW/VIP10(SU)NEW.jpg', '2024-01-22 08:55:35', '2024-01-28 11:28:04'),
(42, '1', 9, 0, 0, 'VIP06', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 10)', 1600, 300, 'VIP10(SU)NEW/VIP10(SU)NEW.jpg', '2024-01-22 08:55:35', '2024-01-28 11:30:58'),
(43, '1', 9, 0, 1, 'VIP07', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 10)', 1600, 300, 'VIP10(SU)NEW/VIP10(SU)NEW.jpg', '2024-01-22 08:55:35', '2024-01-28 22:09:15'),
(44, '1', 9, 0, 1, 'VIP08', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 10)', 1600, 300, 'VIP10(SU)NEW/VIP10(SU)NEW.jpg', '2024-01-22 08:55:35', '2024-01-29 09:45:59'),
(45, '1', 9, 0, 0, 'VIP09', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 10)', 1600, 300, 'VIP10(SU)NEW/VIP10(SU)NEW.jpg', '2024-01-22 08:55:35', '2024-01-26 09:08:48'),
(46, '1', 9, 0, 0, 'VIP10', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 10)', 1600, 300, 'VIP10(SU)NEW/VIP10(SU)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(47, '1', 9, 0, 0, 'VIP11', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 10)', 1600, 300, 'VIP10(SU)NEW/VIP10(SU)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(48, '1', 9, 0, 0, 'VIP12', 'ห้องพิเศษดีลักซ์ (อาคารแม่และเด็ก พิเศษสูติกรรม 10)', 1600, 300, 'VIP10(SU)NEW/VIP10(SU)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(49, '2', 4, 0, 0, '801', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 8)', 1600, 300, 'VIP8(10)OLD/VIP8(10)OLD2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(50, '2', 4, 0, 0, '802', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 8)', 1600, 300, 'VIP8(10)OLD/VIP8(10)OLD2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(51, '2', 4, 0, 0, '803', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 8)', 1600, 300, 'VIP8(10)OLD/VIP8(10)OLD2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(52, '2', 4, 0, 0, '804', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 8)', 1600, 300, 'VIP8(10)OLD/VIP8(10)OLD2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(53, '2', 4, 0, 0, '805', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 8)', 1600, 300, 'VIP8(10)OLD/VIP8(10)OLD2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(54, '2', 4, 0, 0, '806', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 8)', 1600, 300, 'VIP8(10)OLD/VIP8(10)OLD2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(55, '2', 4, 0, 0, '807', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 8)', 1600, 300, 'VIP8(10)OLD/VIP8(10)OLD2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(56, '2', 4, 0, 0, '808', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 8)', 1600, 300, 'VIP8(10)OLD/VIP8(10)OLD2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(57, '2', 4, 0, 0, '809', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 8)', 1600, 300, 'VIP8(10)OLD/VIP8(10)OLD2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(58, '2', 4, 0, 0, '810', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 8)', 1600, 300, 'VIP8(10)OLD/VIP8(10)OLD2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(59, '2', 4, 0, 0, '811', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 8)', 1600, 300, 'VIP8(10)OLD/VIP8(10)OLD2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(60, '2', 4, 0, 0, '812', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 8)', 1600, 300, 'VIP8(10)OLD/VIP8(10)OLD2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(61, '2', 5, 0, 0, '901', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 9)', 1600, 300, 'VIP9(10)OLD/VIP9(10)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(62, '2', 5, 0, 0, '902', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 9)', 1600, 300, 'VIP9(10)OLD/VIP9(10)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(63, '2', 5, 0, 0, '903', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 9)', 1600, 300, 'VIP9(10)OLD/VIP9(10)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(64, '2', 5, 0, 0, '904', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 9)', 1600, 300, 'VIP9(10)OLD/VIP9(10)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(65, '2', 5, 0, 0, '905', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 9)', 1600, 300, 'VIP9(10)OLD/VIP9(10)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(66, '2', 5, 0, 0, '906', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 9)', 1600, 300, 'VIP9(10)OLD/VIP9(10)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(67, '2', 5, 0, 0, '907', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 9)', 1600, 300, 'VIP9(10)OLD/VIP9(10)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(68, '2', 5, 0, 0, '908', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 9)', 1600, 300, 'VIP9(10)OLD/VIP9(10)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(69, '2', 5, 0, 0, '909', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 9)', 1600, 300, 'VIP9(10)OLD/VIP9(10)OLD.jpg', '2024-01-22 08:55:35', '2024-01-28 11:51:02'),
(70, '2', 5, 0, 0, '810', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 9)', 1600, 300, 'VIP9(10)OLD/VIP9(10)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(71, '2', 5, 0, 0, '811', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 9)', 1600, 300, 'VIP9(10)OLD/VIP9(10)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(72, '2', 5, 0, 0, '812', 'ห้องพิเศษดีลักซ์ (อาคารเฉลิมพระเกียรติ พิเศษเฉลิมพระเกียรติ 9)', 1600, 300, 'VIP9(10)OLD/VIP9(10)OLD.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(73, '3', 7, 1, 0, '1601', 'ห้องพิเศษ VIP (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 6 (VIP))', 2000, 300, 'VVIP6(8)OLD/VVIP6(8)OLD2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(74, '3', 2, 1, 0, '701', 'ห้องพิเศษ VIP (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 7 (VIP))', 2000, 300, 'VVIP7(8)NEW/VVIP7(8)NEW2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(75, '3', 6, 1, 0, '801', 'ห้องพิเศษ VIP (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 8 (VIP))', 2000, 300, 'VVIP8(8)NEW/VVIP8(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(76, '3', 7, 0, 0, '1602', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 6)', 1400, 300, 'VIP6(8)OLD/VIP6(8)OLD-2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(77, '3', 7, 0, 0, '1603', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 6)', 1400, 300, 'VIP6(8)OLD/VIP6(8)OLD-2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(78, '3', 7, 0, 0, '1604', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 6)', 1400, 300, 'VIP6(8)OLD/VIP6(8)OLD-2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(79, '3', 7, 0, 0, '1605', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 6)', 1400, 300, 'VIP6(8)OLD/VIP6(8)OLD-2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(80, '3', 7, 0, 0, '1606', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 6)', 1400, 300, 'VIP6(8)OLD/VIP6(8)OLD-2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(81, '3', 7, 0, 0, '1607', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 6)', 1400, 300, 'VIP6(8)OLD/VIP6(8)OLD-2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(82, '3', 7, 0, 0, '1608', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 6)', 1400, 300, 'VIP6(8)OLD/VIP6(8)OLD-2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(83, '3', 7, 0, 0, '1609', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 6)', 1400, 300, 'VIP6(8)OLD/VIP6(8)OLD-2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(84, '3', 7, 0, 0, '1610', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 6)', 1400, 300, 'VIP6(8)OLD/VIP6(8)OLD-2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(85, '3', 7, 0, 0, '1611', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 6)', 1400, 300, 'VIP6(8)OLD/VIP6(8)OLD-2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(86, '3', 7, 0, 0, '1612', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 6)', 1400, 300, 'VIP6(8)OLD/VIP6(8)OLD-2.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(87, '3', 2, 0, 0, '702', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 7)', 1400, 300, 'VIP7(8)NEW/VIP7(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(88, '3', 2, 0, 0, '703', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 7)', 1400, 300, 'VIP7(8)NEW/VIP7(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(89, '3', 2, 0, 0, '704', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 7)', 1400, 300, 'VIP7(8)NEW/VIP7(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(90, '3', 2, 0, 0, '705', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 7)', 1400, 300, 'VIP7(8)NEW/VIP7(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(91, '3', 2, 0, 0, '706', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 7)', 1400, 300, 'VIP7(8)NEW/VIP7(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(92, '3', 2, 0, 0, '707', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 7)', 1400, 300, 'VIP7(8)NEW/VIP7(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(93, '3', 2, 0, 0, '708', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 7)', 1400, 300, 'VIP7(8)NEW/VIP7(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(94, '3', 2, 0, 0, '709', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 7)', 1400, 300, 'VIP7(8)NEW/VIP7(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(95, '3', 2, 0, 0, '710', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 7)', 1400, 300, 'VIP7(8)NEW/VIP7(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(96, '3', 2, 0, 0, '711', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 7)', 1400, 300, 'VIP7(8)NEW/VIP7(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(97, '3', 2, 0, 0, '712', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 7)', 1400, 300, 'VIP7(8)NEW/VIP7(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(98, '3', 6, 0, 0, '802', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 8)', 1400, 300, 'VIP8(8)NEW/VIP8(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(99, '3', 6, 0, 0, '803', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 8)', 1400, 300, 'VIP8(8)NEW/VIP8(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(100, '3', 6, 0, 0, '804', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 8)', 1400, 300, 'VIP8(8)NEW/VIP8(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(101, '3', 6, 0, 0, '805', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 8)', 1400, 300, 'VIP8(8)NEW/VIP8(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(102, '3', 6, 0, 0, '806', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 8)', 1400, 300, 'VIP8(8)NEW/VIP8(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(103, '3', 6, 0, 0, '807', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 8)', 1400, 300, 'VIP8(8)NEW/VIP8(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(104, '3', 6, 0, 0, '808', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 8)', 1400, 300, 'VIP8(8)NEW/VIP8(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(105, '3', 6, 0, 0, '809', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 8)', 1400, 300, 'VIP8(8)NEW/VIP8(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(106, '3', 6, 0, 0, '810', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 8)', 1400, 300, 'VIP8(8)NEW/VIP8(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(107, '3', 6, 0, 0, '811', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 8)', 1400, 300, 'VIP8(8)NEW/VIP8(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(108, '3', 6, 0, 0, '812', 'ห้องพิเศษ (อาคารศัลยกรรม (ตึก 8 ชั้น) พิเศษ 8)', 1400, 300, 'VIP8(8)NEW/VIP8(8)NEW.jpg', '2024-01-22 08:55:35', '2024-01-22 08:55:35'),
(109, '4', 0, 0, 0, '0', 'อยู่ขั้นตอนการพิจารณา', 0, 0, 'cph.png', '2024-01-22 08:55:35', '2024-01-22 08:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `sessionrooms`
--

CREATE TABLE `sessionrooms` (
  `id` bigint UNSIGNED NOT NULL,
  `socket_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socketrooms`
--

CREATE TABLE `socketrooms` (
  `id` bigint UNSIGNED NOT NULL,
  `loginname` int NOT NULL,
  `ward` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `socket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socketrooms`
--

INSERT INTO `socketrooms` (`id`, `loginname`, `ward`, `socket`, `created_at`, `updated_at`) VALUES
(1, 7, '20', '10', NULL, NULL),
(2, 9, '21', '12', NULL, NULL),
(3, 4, '22', '12', NULL, NULL),
(4, 5, '23', '12', NULL, NULL),
(5, 6, '26', '12', NULL, NULL),
(6, 10, '29', '12', NULL, NULL),
(7, 8, '30', '12', NULL, NULL),
(8, 3, '33', '12', NULL, NULL),
(9, 2, '34', '12', NULL, NULL),
(11, 167, '07', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statuspatients`
--

CREATE TABLE `statuspatients` (
  `id` bigint UNSIGNED NOT NULL,
  `statuspatients_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuspatients`
--

INSERT INTO `statuspatients` (`id`, `statuspatients_name`, `created_at`, `updated_at`) VALUES
(1, 'ผู้ป่วยแจ้ง', '2024-01-17 10:01:08', '2024-01-17 10:01:08'),
(2, 'ญาติผู้ป่วยแจ้ง', '2024-01-17 10:01:08', '2024-01-17 10:01:08'),
(3, 'หมอแจ้ง', '2024-01-17 10:01:08', '2024-01-17 10:01:08'),
(4, 'พยาบาลแจ้ง', '2024-01-17 10:01:08', '2024-01-17 10:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `statusrents`
--

CREATE TABLE `statusrents` (
  `id` bigint UNSIGNED NOT NULL,
  `status_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statusrents`
--

INSERT INTO `statusrents` (`id`, `status_name`, `status_color`, `created_at`, `updated_at`) VALUES
(1, 'กำลังดำเนินการ', 'text-info', NULL, NULL),
(2, 'ดำเนินการเรียบร้อย', 'text-success', NULL, NULL),
(3, 'ยกเลิก', 'text-danger', NULL, NULL),
(4, 'ผู้ป่วย Discharge แล้ว', 'text-info', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `is_admin`, `password`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'เจ้าหน้าที่ Admit', 1, '$2y$12$oPP/4HToe.zUGPwe3dmcFuyFpi.inkw3DE0YQiSiGRYi/0zyIcLl2', 'admin@admin.com', NULL, NULL, NULL, NULL),
(2, 'spward01', 'พิเศษสูติกรรมชั้น 10', 2, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'spward01@spward01.com', NULL, NULL, NULL, NULL),
(3, 'spward02', 'พิเศษสูติกรรมชั้น 9', 2, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'spward02@spward02.com', NULL, NULL, NULL, NULL),
(4, 'spward03', 'พิเศษฉก.7 ชั้น 7', 2, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'spward03@spward03.com', NULL, NULL, NULL, NULL),
(5, 'spward04', 'พิเศษฉก.8 ชั้น 8', 2, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'spward04@spward04.com', NULL, NULL, NULL, NULL),
(6, 'spward05', 'พิเศษฉก.9 ชั้น 9', 2, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'spward05@spward05.com', NULL, NULL, NULL, NULL),
(7, 'spward06', 'พิเศษ 5 พิเศษศัลยกรรม 8 ชั้น', 2, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'spward06@spward06.com', NULL, NULL, NULL, NULL),
(8, 'spward07', 'พิเศษ 6 พิเศษศัลยกรรม 8 ชั้น', 2, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'spward07@spward07.com', NULL, NULL, NULL, NULL),
(9, 'spward08', 'พิเศษ 7 พิเศษศัลยกรรม 8 ชั้น', 2, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'spward08@spward08.com', NULL, NULL, NULL, NULL),
(10, 'spward09', 'พิเศษ 8 พิเศษศัลยกรรม 8 ชั้น', 2, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'spward09@spward09.com', NULL, NULL, NULL, NULL),
(11, 'doctor01', 'นพ.กิตติเวทย์ ลิมปวิทยากุล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor01@doctor01.com', NULL, NULL, NULL, NULL),
(12, 'doctor02', 'นพ.กิตติศักดิ์ ชัยชูบุตร', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor02@doctor02.com', NULL, NULL, NULL, NULL),
(13, 'doctor03', 'นพ.กิติกร สมฤาแสน', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor03@doctor03.com', NULL, NULL, NULL, NULL),
(14, 'doctor04', 'นพ.เกียรติศักดิ์ ปลัดกอง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor04@doctor04.com', NULL, NULL, NULL, NULL),
(15, 'doctor05', 'นพ.เจษฎากร พรนภา', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor05@doctor05.com', NULL, NULL, NULL, NULL),
(16, 'doctor06', 'นพ.ฉัตรบดี รัตนเสริมพงศ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor06@doctor06.com', NULL, NULL, NULL, NULL),
(17, 'doctor07', 'นพ.ชนัฐพงษ์ อิ่มดี', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor07@doctor07.com', NULL, NULL, NULL, NULL),
(18, 'doctor08', 'นพ.ชนินทร์ ชำนาญวงษ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor08@doctor08.com', NULL, NULL, NULL, NULL),
(19, 'doctor09', 'นพ.ชลพรรษ ตั้งบุตราวงศ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor09@doctor09.com', NULL, NULL, NULL, NULL),
(20, 'doctor10', 'นพ.ชัยวัฒน์ เพ็ชรแสง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor10@doctor10.com', NULL, NULL, NULL, NULL),
(21, 'doctor11', 'นพ.ชาญ กุศลเลิศจริยา', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor11@doctor11.com', NULL, NULL, NULL, NULL),
(22, 'doctor12', 'นพ.ชุมพร ปานเปีย', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor12@doctor12.com', NULL, NULL, NULL, NULL),
(23, 'doctor13', 'นพ.เชฏฐา ฐานคร', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor13@doctor13.com', NULL, NULL, NULL, NULL),
(24, 'doctor14', 'นพ.ฐานันดร์ ฐานวิเศษ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor14@doctor14.com', NULL, NULL, NULL, NULL),
(25, 'doctor15', 'นพ.ณรงค์ศักดิ์ บำรุงถิ่น', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor15@doctor15.com', NULL, NULL, NULL, NULL),
(26, 'doctor16', 'นพ.ณัฐ ตั้งพร้อมพันธ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor16@doctor16.com', NULL, NULL, NULL, NULL),
(27, 'doctor17', 'นพ.ณัฐพงษ์ ก้านคูณ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor17@doctor17.com', NULL, NULL, NULL, NULL),
(28, 'doctor18', 'นพ.ณัฐพงษ์ ฐานวิเศษ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor18@doctor18.com', NULL, NULL, NULL, NULL),
(29, 'doctor19', 'นพ.ณัฐพงษ์ นันกลาง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor19@doctor19.com', NULL, NULL, NULL, NULL),
(30, 'doctor20', 'นพ.โตณณาการ ขุนโหร', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor20@doctor20.com', NULL, NULL, NULL, NULL),
(31, 'doctor21', 'นพ.ธนโชติ กิจมีรัศมีโยธิน', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor21@doctor21.com', NULL, NULL, NULL, NULL),
(32, 'doctor22', 'นพ.ธนพงษ์ สื่อสัตรัตน์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor22@doctor22.com', NULL, NULL, NULL, NULL),
(33, 'doctor23', 'นพ.ธนะพล จีระวัฒนสุข', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor23@doctor23.com', NULL, NULL, NULL, NULL),
(34, 'doctor24', 'นพ.ธนิศศักดิ์ ทวีโคตร', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor24@doctor24.com', NULL, NULL, NULL, NULL),
(35, 'doctor25', 'นพ.ธิติ พิริยาพิทักษ์ภรณ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor25@doctor25.com', NULL, NULL, NULL, NULL),
(36, 'doctor26', 'นพ.ธิปก เวียงพล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor26@doctor26.com', NULL, NULL, NULL, NULL),
(37, 'doctor27', 'นพ.ธีรภัทร ชาติละออง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor27@doctor27.com', NULL, NULL, NULL, NULL),
(38, 'doctor28', 'นพ.ปกครอง ลิมป์วรรณธะ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor28@doctor28.com', NULL, NULL, NULL, NULL),
(39, 'doctor29', 'นพ.ปฎิพัทธ์ ศิริอุดมสิน', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor29@doctor29.com', NULL, NULL, NULL, NULL),
(40, 'doctor30', 'นพ.ประมุข ผลสมบูรณ์สุข', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor30@doctor30.com', NULL, NULL, NULL, NULL),
(41, 'doctor31', 'นพ.ปิ่นพงศ์ เลยยุทธ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor31@doctor31.com', NULL, NULL, NULL, NULL),
(42, 'doctor32', 'นพ.พยุงศักดิ์ สุจิตวัฒนศักดิ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor32@doctor32.com', NULL, NULL, NULL, NULL),
(43, 'doctor33', 'นพ.พัษดี น่าชม', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor33@doctor33.com', NULL, NULL, NULL, NULL),
(44, 'doctor34', 'นพ.พิสุทธิ์ นิพนธ์รัตนา', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor34@doctor34.com', NULL, NULL, NULL, NULL),
(45, 'doctor35', 'นพ.พีรพัฒน์ แมนเมือง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor35@doctor35.com', NULL, NULL, NULL, NULL),
(46, 'doctor36', 'นพ.ภควัต ชีวกมล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor36@doctor36.com', NULL, NULL, NULL, NULL),
(47, 'doctor37', 'นพ.ภัทรภูมิ ประจงสุข', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor37@doctor37.com', NULL, NULL, NULL, NULL),
(48, 'doctor38', 'นพ.ภาณุกร แพถนอม', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor38@doctor38.com', NULL, NULL, NULL, NULL),
(49, 'doctor39', 'นพ.ภูมิ ธำรงค์เทพพิทักษ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor39@doctor39.com', NULL, NULL, NULL, NULL),
(50, 'doctor40', 'นพ.เมธี บุญพิมพ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor40@doctor40.com', NULL, NULL, NULL, NULL),
(51, 'doctor41', 'นพ.เมธี บุญพิมพ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor41@doctor41.com', NULL, NULL, NULL, NULL),
(52, 'doctor42', 'นพ.ยุทธชัย ผันแกน', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor42@doctor42.com', NULL, NULL, NULL, NULL),
(53, 'doctor43', 'นพ.ระพีพัฒน์ คำมนตรี', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor43@doctor43.com', NULL, NULL, NULL, NULL),
(54, 'doctor44', 'นพ.โรจกร ลือมงคล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor44@doctor44.com', NULL, NULL, NULL, NULL),
(55, 'doctor45', 'นพ.โรจนกาล พานดวงแก้ว', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor45@doctor45.com', NULL, NULL, NULL, NULL),
(56, 'doctor46', 'นพ.วัชร สุฐิติวนิช', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor46@doctor46.com', NULL, NULL, NULL, NULL),
(57, 'doctor47', 'นพ.วัชรากร เลิศด้วยลาภ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor47@doctor47.com', NULL, NULL, NULL, NULL),
(58, 'doctor48', 'นพ.วิชยุตม์ วิศรุตเวศม์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor48@doctor48.com', NULL, NULL, NULL, NULL),
(59, 'doctor49', 'นพ.วิชัย ศิริปัญญาชัยพาณิช', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor49@doctor49.com', NULL, NULL, NULL, NULL),
(60, 'doctor50', 'นพ.วิสาร ศศิวิบูลย์วงศ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor50@doctor50.com', NULL, NULL, NULL, NULL),
(61, 'doctor51', 'นพ.ศรัณยู เทพจั้ง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor51@doctor51.com', NULL, NULL, NULL, NULL),
(62, 'doctor52', 'นพ.ศรีปกรณ์ อ่อนละม้าย', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor52@doctor52.com', NULL, NULL, NULL, NULL),
(63, 'doctor53', 'นพ.ศุภชัย ชัยบุตร', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor53@doctor53.com', NULL, NULL, NULL, NULL),
(64, 'doctor54', 'นพ.สกล ด่านภักดี', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor54@doctor54.com', NULL, NULL, NULL, NULL),
(65, 'doctor55', 'นพ.สรศักดิ์ ดอนเตาเหล็ก', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor55@doctor55.com', NULL, NULL, NULL, NULL),
(66, 'doctor56', 'นพ.สัจจะ ตติยานุพันธ์วงศ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor56@doctor56.com', NULL, NULL, NULL, NULL),
(67, 'doctor57', 'นพ.สาธิต ก้านทอง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor57@doctor57.com', NULL, NULL, NULL, NULL),
(68, 'doctor58', 'นพ.สิทธิ ชัยบุตร', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor58@doctor58.com', NULL, NULL, NULL, NULL),
(69, 'doctor59', 'นพ.สิวะยศ ดีเทศน์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor59@doctor59.com', NULL, NULL, NULL, NULL),
(70, 'doctor60', 'นพ.สุกิจ พรหมรับ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor60@doctor60.com', NULL, NULL, NULL, NULL),
(71, 'doctor61', 'นพ.สุรชัย อาชีวกุลมาศ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor61@doctor61.com', NULL, NULL, NULL, NULL),
(72, 'doctor62', 'นพ.สุวิทย์ ใหมเจริญ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor62@doctor62.com', NULL, NULL, NULL, NULL),
(73, 'doctor63', 'นพ.อนวัช วรรธนะมณีกุล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor63@doctor63.com', NULL, NULL, NULL, NULL),
(74, 'doctor64', 'นพ.อภิรักษ์ ปุสวิโร', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor64@doctor64.com', NULL, NULL, NULL, NULL),
(75, 'doctor65', 'นพ.อภิสิทธิ์ ทองงาม', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor65@doctor65.com', NULL, NULL, NULL, NULL),
(76, 'doctor66', 'นพ.อรรถวุฒิ เพชรสุริยวงศ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor66@doctor66.com', NULL, NULL, NULL, NULL),
(77, 'doctor67', 'นพ.อังกูร บุญโนนแต้', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor67@doctor67.com', NULL, NULL, NULL, NULL),
(78, 'doctor68', 'นพ.อาชัญ เจษฎัพัฒนานนท์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor68@doctor68.com', NULL, NULL, NULL, NULL),
(79, 'doctor69', 'นพ.อาทิตย์ ประทุมถิ่น', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor69@doctor69.com', NULL, NULL, NULL, NULL),
(80, 'doctor70', 'นพ.อำนาจ สุขทั่วญาติ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor70@doctor70.com', NULL, NULL, NULL, NULL),
(81, 'doctor71', 'นพ.อำพน พรงาม', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor71@doctor71.com', NULL, NULL, NULL, NULL),
(82, 'doctor72', 'นพ.อิสระ นราภิรมย์สุข', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor72@doctor72.com', NULL, NULL, NULL, NULL),
(83, 'doctor73', 'นพ.อุดมโชค อินทรโชติ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor73@doctor73.com', NULL, NULL, NULL, NULL),
(84, 'doctor74', 'นพ.เอกภพ นันทวงศ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor74@doctor74.com', NULL, NULL, NULL, NULL),
(85, 'doctor75', 'นพ.บุญญฤทธิ์ ภิรมย์กิจ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor75@doctor75.com', NULL, NULL, NULL, NULL),
(86, 'doctor76', 'นพ.ตุลภัทร บุบผัน', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor76@doctor76.com', NULL, NULL, NULL, NULL),
(87, 'doctor77', 'พญ.เบญจา อุดมลาภสกุล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor77@doctor77.com', NULL, NULL, NULL, NULL),
(88, 'doctor78', 'พญ.กาญจนา โม้ทอง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor78@doctor78.com', NULL, NULL, NULL, NULL),
(89, 'doctor79', 'พญ.กนกกร นวมะชิติ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor79@doctor79.com', NULL, NULL, NULL, NULL),
(90, 'doctor80', 'พญ.กนกกร ลาภไพศาล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor80@doctor80.com', NULL, NULL, NULL, NULL),
(91, 'doctor81', 'พญ.กนกทิพย์ อัครชัยยันต์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor81@doctor81.com', NULL, NULL, NULL, NULL),
(92, 'doctor82', 'พญ.กิตติมา คนชาญ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor82@doctor82.com', NULL, NULL, NULL, NULL),
(93, 'doctor83', 'พญ.จงกล คลังสมบัติ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor83@doctor83.com', NULL, NULL, NULL, NULL),
(94, 'doctor84', 'พญ.จิตติมา ปูชิตเสถียร', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor84@doctor84.com', NULL, NULL, NULL, NULL),
(95, 'doctor85', 'พญ.จิตมณี ปะตังถาโต', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor85@doctor85.com', NULL, NULL, NULL, NULL),
(96, 'doctor86', 'พญ.จิราภา อรุณปรีย์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor86@doctor86.com', NULL, NULL, NULL, NULL),
(97, 'doctor87', 'พญ.จุฑาทิพย์ พฤฒิจิระวงศ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor87@doctor87.com', NULL, NULL, NULL, NULL),
(98, 'doctor88', 'พญ.จุฑาทิพย์ อุดมทรัพย์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor88@doctor88.com', NULL, NULL, NULL, NULL),
(99, 'doctor89', 'พญ.ชมนาด ศิริรัตน์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor89@doctor89.com', NULL, NULL, NULL, NULL),
(100, 'doctor90', 'พญ.ชลธิชา จิตเอื้อโอภาส', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor90@doctor90.com', NULL, NULL, NULL, NULL),
(101, 'doctor91', 'พญ.ณปภัช ไชยมงคล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor91@doctor91.com', NULL, NULL, NULL, NULL),
(102, 'doctor92', 'พญ.ณัฐวรรณ สวงโท', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor92@doctor92.com', NULL, NULL, NULL, NULL),
(103, 'doctor93', 'พญ.ดิษยา คูณสิริไพบูลย์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor93@doctor93.com', NULL, NULL, NULL, NULL),
(104, 'doctor94', 'พญ.ทิตยา วิชัยแสง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor94@doctor94.com', NULL, NULL, NULL, NULL),
(105, 'doctor95', 'พญ.ธัชทร ทองเจริญ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor95@doctor95.com', NULL, NULL, NULL, NULL),
(106, 'doctor96', 'พญ.ธัญชนก เอื้อจิรกาล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor96@doctor96.com', NULL, NULL, NULL, NULL),
(107, 'doctor97', 'พญ.ธาริณี ศิริธนาศาสตร์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor97@doctor97.com', NULL, NULL, NULL, NULL),
(108, 'doctor98', 'พญ.ธาริณี ศิริธนาศาสตร์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor98@doctor98.com', NULL, NULL, NULL, NULL),
(109, 'doctor99', 'พญ.นลินพร ใต้ชัยภูมิ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor99@doctor99.com', NULL, NULL, NULL, NULL),
(110, 'doctor100', 'พญ.นันท์ชนก คุ้มหมู่', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor100@doctor100.com', NULL, NULL, NULL, NULL),
(111, 'doctor101', 'พญ.นันทวรรณ ดวงภมร', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor101@doctor101.com', NULL, NULL, NULL, NULL),
(112, 'doctor102', 'พญ.น้ำผึ้ง นันทวงศ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor102@doctor102.com', NULL, NULL, NULL, NULL),
(113, 'doctor103', 'พญ.บรรจง ครอบบัวบาน', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor103@doctor103.com', NULL, NULL, NULL, NULL),
(114, 'doctor104', 'พญ.บุณฑริกา อาจนาเสียว', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor104@doctor104.com', NULL, NULL, NULL, NULL),
(115, 'doctor105', 'พญ.บุปผารัตน์ อ่อนชมจันทร์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor105@doctor105.com', NULL, NULL, NULL, NULL),
(116, 'doctor106', 'พญ.ปภาวี กุลพรหม', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor106@doctor106.com', NULL, NULL, NULL, NULL),
(117, 'doctor107', 'พญ.ปรางทิพย์ คงสตรี', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor107@doctor107.com', NULL, NULL, NULL, NULL),
(118, 'doctor108', 'พญ.ปวีณา กาละดี', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor108@doctor108.com', NULL, NULL, NULL, NULL),
(119, 'doctor109', 'พญ.ปิยาภรณ์ อ่อนละม้าย', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor109@doctor109.com', NULL, NULL, NULL, NULL),
(120, 'doctor110', 'พญ.พนารัตน์ เพียงปราชญ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor110@doctor110.com', NULL, NULL, NULL, NULL),
(121, 'doctor111', 'พญ.พรประภา เชี่ยวขจร', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor111@doctor111.com', NULL, NULL, NULL, NULL),
(122, 'doctor112', 'พญ.พลอยไพลิน ลิ้มสุวัฒน์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor112@doctor112.com', NULL, NULL, NULL, NULL),
(123, 'doctor113', 'พญ.พิมพ์นรา ชนูดหอม', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor113@doctor113.com', NULL, NULL, NULL, NULL),
(124, 'doctor114', 'พญ.เพ็ญนภา วงษ์สีชา', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor114@doctor114.com', NULL, NULL, NULL, NULL),
(125, 'doctor115', 'พญ.ฟาริดา เจียรชัยกุล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor115@doctor115.com', NULL, NULL, NULL, NULL),
(126, 'doctor116', 'พญ.ภคอร ศุภมงคล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor116@doctor116.com', NULL, NULL, NULL, NULL),
(127, 'doctor117', 'พญ.ภริตา ศิริอนันต์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor117@doctor117.com', NULL, NULL, NULL, NULL),
(128, 'doctor118', 'พญ.ภัคพิชา ควรคำนวน', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor118@doctor118.com', NULL, NULL, NULL, NULL),
(129, 'doctor119', 'พญ.ภิญญดา วงศ์ใหญ่', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor119@doctor119.com', NULL, NULL, NULL, NULL),
(130, 'doctor120', 'พญ.มณีรัตณ์ ทิวทอง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor120@doctor120.com', NULL, NULL, NULL, NULL),
(131, 'doctor121', 'พญ.มรกต ภัทรพงศ์สินธุ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor121@doctor121.com', NULL, NULL, NULL, NULL),
(132, 'doctor122', 'พญ.รติกร สิทธิวงศ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor122@doctor122.com', NULL, NULL, NULL, NULL),
(133, 'doctor123', 'พญ.เรืองศรี ชัยวิรัตนะ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor123@doctor123.com', NULL, NULL, NULL, NULL),
(134, 'doctor124', 'พญ.วชิรญาณ์ พลแก้ง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor124@doctor124.com', NULL, NULL, NULL, NULL),
(135, 'doctor125', 'พญ.วรรณวิไล เลิศไพศาลกุล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor125@doctor125.com', NULL, NULL, NULL, NULL),
(136, 'doctor126', 'พญ.วริษา เจริญวัฒน์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor126@doctor126.com', NULL, NULL, NULL, NULL),
(137, 'doctor127', 'พญ.วัลยาณี เนื่องโพธิ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor127@doctor127.com', NULL, NULL, NULL, NULL),
(138, 'doctor128', 'พญ.วาทินี วิภูภิญโญ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor128@doctor128.com', NULL, NULL, NULL, NULL),
(139, 'doctor129', 'พญ.วารุณี สินธุพันธุ์ประทุม', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor129@doctor129.com', NULL, NULL, NULL, NULL),
(140, 'doctor130', 'พญ.วิชุนันท์ กันชัย', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor130@doctor130.com', NULL, NULL, NULL, NULL),
(141, 'doctor131', 'พญ.วินิธา ลักษณากร', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor131@doctor131.com', NULL, NULL, NULL, NULL),
(142, 'doctor132', 'พญ.วิริญญา ลิมป์สดใส', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor132@doctor132.com', NULL, NULL, NULL, NULL),
(143, 'doctor133', 'พญ.ศศินิภา ปิ่นทอง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor133@doctor133.com', NULL, NULL, NULL, NULL),
(144, 'doctor134', 'พญ.ศศินิภา จันทร์แสง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor134@doctor134.com', NULL, NULL, NULL, NULL),
(145, 'doctor135', 'พญ.ศิดาพร ศรีโรจนกุล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor135@doctor135.com', NULL, NULL, NULL, NULL),
(146, 'doctor136', 'พญ.ศิโรรัตน์ วราอัศวปติ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor136@doctor136.com', NULL, NULL, NULL, NULL),
(147, 'doctor137', 'พญ.ศุภาพิชญ์ ลิ้มชูพรวิกุล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor137@doctor137.com', NULL, NULL, NULL, NULL),
(148, 'doctor138', 'พญ.สมฤดี ผดุงพล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor138@doctor138.com', NULL, NULL, NULL, NULL),
(149, 'doctor139', 'พญ.สวรส แสงชโยสวัสดิ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor139@doctor139.com', NULL, NULL, NULL, NULL),
(150, 'doctor140', 'พญ.สุธาทิพย์ วัฒนะพนาลัย', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor140@doctor140.com', NULL, NULL, NULL, NULL),
(151, 'doctor141', 'พญ.สุพรรณิการ์ ยานกาย', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor141@doctor141.com', NULL, NULL, NULL, NULL),
(152, 'doctor142', 'พญ.สุภานัน สื่อสัมฤทธิ์', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor142@doctor142.com', NULL, NULL, NULL, NULL),
(153, 'doctor143', 'พญ.สุภาวดี ภัทรสัจจธรรม', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor143@doctor143.com', NULL, NULL, NULL, NULL),
(154, 'doctor144', 'พญ.สุมนมาลย์ ต่อสกุล', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor144@doctor144.com', NULL, NULL, NULL, NULL),
(155, 'doctor145', 'พญ.สุมิตรา จันทร์เพ็ง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor145@doctor145.com', NULL, NULL, NULL, NULL),
(156, 'doctor146', 'พญ.สุวนันท์ มีศรี', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor146@doctor146.com', NULL, NULL, NULL, NULL),
(157, 'doctor147', 'พญ.อรอนงค์ คิดบรรจง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor147@doctor147.com', NULL, NULL, NULL, NULL),
(158, 'doctor148', 'พญ.อัจฉราชนก พันธ์ทอง', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor148@doctor148.com', NULL, NULL, NULL, NULL),
(159, 'doctor149', 'พญ.อารียา ศรีไตรภพ', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor149@doctor149.com', NULL, NULL, NULL, NULL),
(160, 'doctor150', 'พญ.อุษณีย์  เกียรติก้องชูชัย', 3, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'doctor150@doctor150.com', NULL, NULL, NULL, NULL),
(161, 'ward01', 'ตึกสงฆ์อาพาธ', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward01@ward01.com', NULL, NULL, NULL, NULL),
(162, 'ward02', 'หอผู้ป่วยเด็กเล็ก', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward02@ward02.com', NULL, NULL, NULL, NULL),
(163, 'ward03', 'หอผู้ป่วยเด็กโต', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward03@ward03.com', NULL, NULL, NULL, NULL),
(164, 'ward04', 'หอผู้ป่วยทากรกแรกเกิด', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward04@ward04.com', NULL, NULL, NULL, NULL),
(165, 'ward05', 'ศัลยกรรมหญิง', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward05@ward05.com', NULL, NULL, NULL, NULL),
(166, 'ward06', 'ศัลยกรรมชาย 1', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward06@ward06.com', NULL, NULL, NULL, NULL),
(167, 'spward10', 'ศัลยกรรมชาย 2', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'spward10@spward10.com', NULL, NULL, NULL, NULL),
(168, 'ward08', 'ศัลยกรรมกระดูก ชาย', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward08@ward08.com', NULL, NULL, NULL, NULL),
(169, 'ward09', 'อายุรกรรมหญิง 1', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward09@ward09.com', NULL, NULL, NULL, NULL),
(170, 'ward10', 'อายุรกรรมหญิง 2', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward10@ward10.com', NULL, NULL, NULL, NULL),
(171, 'ward11', 'อายุรกรรมชาย 1', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward11@ward11.com', NULL, NULL, NULL, NULL),
(172, 'ward12', 'กึ่งวิกฤติอายุรกรรม', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward12@ward12.com', NULL, NULL, NULL, NULL),
(173, 'ward13', 'อายุรกรรมชาย 2', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward13@ward13.com', NULL, NULL, NULL, NULL),
(174, 'ward14', 'ห้องคลอด', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward14@ward14.com', NULL, NULL, NULL, NULL),
(175, 'ward15', 'หลังคลอด', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward15@ward15.com', NULL, NULL, NULL, NULL),
(176, 'ward16', 'นรีเวช', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward16@ward16.com', NULL, NULL, NULL, NULL),
(177, 'ward17', 'จักษุ', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward17@ward17.com', NULL, NULL, NULL, NULL),
(178, 'ward18', 'โสต ศอ นาสิก', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward18@ward18.com', NULL, NULL, NULL, NULL),
(179, 'ward19', 'MICU', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward19@ward19.com', NULL, NULL, NULL, NULL),
(180, 'ward20', 'พิเศษศัลยกรรม 5', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward20@ward20.com', NULL, NULL, NULL, NULL),
(181, 'ward21', 'พิเศษศัลยกรรม 7', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward21@ward21.com', NULL, NULL, NULL, NULL),
(182, 'ward22', 'พิเศษฉก. 7', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward22@ward22.com', NULL, NULL, NULL, NULL),
(183, 'ward23', 'พิเศษฉก. 8', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward23@ward23.com', NULL, NULL, NULL, NULL),
(184, 'ward24', 'ER', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward24@ward24.com', NULL, NULL, NULL, NULL),
(185, 'ward25', 'NICU', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward25@ward25.com', NULL, NULL, NULL, NULL),
(186, 'ward26', 'พิเศษฉก. 9', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward26@ward26.com', NULL, NULL, NULL, NULL),
(187, 'ward27', 'SICU', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward27@ward27.com', NULL, NULL, NULL, NULL),
(188, 'ward28', 'เคมีบำบัด', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward28@ward28.com', NULL, NULL, NULL, NULL),
(189, 'ward29', 'พิเศษศัลยกรรม 8', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward29@ward29.com', NULL, NULL, NULL, NULL),
(190, 'ward30', 'พิเศษศัลยกรรม 6', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward30@ward30.com', NULL, NULL, NULL, NULL),
(191, 'ward31', 'Stoke Unit', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward31@ward31.com', NULL, NULL, NULL, NULL),
(192, 'ward32', 'PICU', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward32@ward32.com', NULL, NULL, NULL, NULL),
(193, 'ward33', 'พิเศษสูติกรรมชั้น 9', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward33@ward33.com', NULL, NULL, NULL, NULL),
(194, 'ward34', 'พิเศษสูติกรรมชั้น 10', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward34@ward34.com', NULL, NULL, NULL, NULL),
(195, 'ward35', 'MICU2', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward35@ward35.com', NULL, NULL, NULL, NULL),
(196, 'ward36', 'ศัลยกรรมกระดูกหญิง', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward36@ward36.com', NULL, NULL, NULL, NULL),
(197, 'ward40', 'TICU', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward40@ward40.com', NULL, NULL, NULL, NULL),
(198, 'ward67', 'จิตเวชชาย', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward67@ward67.com', NULL, NULL, NULL, NULL),
(199, 'ward68', 'จิตเวชหญิง', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward68@ward68.com', NULL, NULL, NULL, NULL),
(200, 'ward80', 'Neurosugery ICU', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward80@ward80.com', NULL, NULL, NULL, NULL),
(201, 'ward81', 'MICU3', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward81@ward81.com', NULL, NULL, NULL, NULL),
(202, 'ward82', 'CCU WARD', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward82@ward82.com', NULL, NULL, NULL, NULL),
(203, 'ward83', 'Cath Lab', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward83@ward83.com', NULL, NULL, NULL, NULL),
(204, 'ward84', 'CCU & Cardio ward', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward84@ward84.com', NULL, NULL, NULL, NULL),
(205, 'ward85', 'INR', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward85@ward85.com', NULL, NULL, NULL, NULL),
(206, 'ward86', 'Home ward', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward86@ward86.com', NULL, NULL, NULL, NULL),
(207, 'ward87', 'Cardio Ward', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward87@ward87.com', NULL, NULL, NULL, NULL),
(208, 'ward66', 'อายุรกรรมรวม', 4, '$2y$12$6FXw3BxgfIwKfuBYEoSDLu8.vTK2i9jqWsgCoFIZAQmgLuz4rU7gy', 'ward66@ward66.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` bigint UNSIGNED NOT NULL,
  `ward` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `ward`, `name`, `created_at`, `updated_at`) VALUES
(1, '01', 'ตึกสงฆ์อาพาธ', NULL, NULL),
(2, '02', 'หอผู้ป่วยเด็กเล็ก', NULL, NULL),
(3, '03', 'หอผู้ป่วยเด็กโต', NULL, NULL),
(4, '04', 'หอผู้ป่วยทารกแรกเกิด', NULL, NULL),
(5, '05', 'ตึกศัลยกรรมหญิง', NULL, NULL),
(6, '06', 'ตึกศัลยกรรมชาย1', NULL, NULL),
(7, '07', 'ตึกศัลยกรรมชาย2', NULL, NULL),
(8, '08', 'ตึกศัลยกรรมกระดูก(ชาย)', NULL, NULL),
(9, '09', 'ตึกอายุรกรรมหญิง1', NULL, NULL),
(10, '10', 'ตึกอายุรกรรมหญิง2', NULL, NULL),
(11, '11', 'ตึกอายุรกรรมชาย1', NULL, NULL),
(12, '12', 'ตึกกึ่งวิกฤติอายุรกรรม', NULL, NULL),
(13, '13', 'ตึกอายุรกรรมชาย2', NULL, NULL),
(14, '14', 'ตึกห้องคลอด', NULL, NULL),
(15, '15', 'ตึกหลังคลอด', NULL, NULL),
(16, '16', 'ตึกนรีเวช', NULL, NULL),
(17, '17', 'ตึกจักษุ', NULL, NULL),
(18, '18', 'ตึกโสต ศอ นาสิก', NULL, NULL),
(19, '19', 'ICU(อายุรกรรม)', NULL, NULL),
(20, '20', 'ตึกพิเศษชั้น5', NULL, NULL),
(21, '21', 'ตึกพิเศษชั้น7', NULL, NULL),
(22, '22', 'ตึกฉก.7(พิเศษ)', NULL, NULL),
(23, '23', 'ตึกฉก.8(พิเศษ)', NULL, NULL),
(24, '24', 'ตึกER', NULL, NULL),
(25, '25', 'NICU', NULL, NULL),
(26, '26', 'ตึกฉก.9(พิเศษ)', NULL, NULL),
(27, '27', 'ICU(ศัลยกรรม)', NULL, NULL),
(28, '28', 'ตึกเคมีบำบัด', NULL, NULL),
(29, '29', 'พิเศษ 8 อาคารผู้ป่วย 8 ชั้น', NULL, NULL),
(30, '30', 'พิเศษ 6 อาคารผู้ป่วย 8 ชั้น', NULL, NULL),
(31, '31', 'Stroke Unit', NULL, NULL),
(32, '32', 'PICU', NULL, NULL),
(33, '33', 'พิเศษสูติกรรมชั้น9', NULL, NULL),
(34, '34', 'พิเศษสูติกรรมชั้น10', NULL, NULL),
(35, '35', 'ICUอายุรกรรม2', NULL, NULL),
(36, '36', 'ตึกศัลยกรรมกระดูก(หญิง)', NULL, NULL),
(37, '37', 'หอผู้ป่วยจิตเวช', NULL, NULL),
(38, '38', 'หอผู้ป่วยราชทัณฑ์', NULL, NULL),
(39, '39', 'หอผู้ป่วยAIIR', NULL, NULL),
(40, '40', 'ห้องผู้ป่วยหนักอุบัติเหตุ', NULL, NULL),
(41, '41', 'หอผู้ป่วยชั้น 3 อาคารภูมิสวัสดิ์รักษ์', NULL, NULL),
(42, '42', 'PUI-ER', NULL, NULL),
(43, '43', 'Cohort ศัลยกรรมชาย2', NULL, NULL),
(44, '44', 'โรงพยาบาลสนาม1', NULL, NULL),
(45, '45', 'โรงพยาบาลสนาม2', NULL, NULL),
(46, '46', 'CI วิทยาลัยสงฆ์', NULL, NULL),
(47, '47', 'CI บ้านค่าย', NULL, NULL),
(48, '48', 'CI ห้วยบง', NULL, NULL),
(49, '49', 'Cohort พ.5 ตึก8ชั้น', NULL, NULL),
(50, '50', 'Cohort พ.7 ตึก8ชั้น', NULL, NULL),
(51, '51', 'Cohort พ.8 ตึก8ชั้น', NULL, NULL),
(52, '52', 'Cohort พ.6 ตึก8ชั้น', NULL, NULL),
(53, '53', 'Cohort พิเศษสูติกรรมชั้น10', NULL, NULL),
(54, '55', 'Cohort ภูมิ 2 ', NULL, NULL),
(55, '56', 'Cohort ภูมิ 3 ', NULL, NULL),
(56, '57', 'Cohort พิเศษสูติกรรมชั้น9', NULL, NULL),
(57, '58', 'CI ซีลอง', NULL, NULL),
(58, '59', 'CI นาเสียว', NULL, NULL),
(59, '60', 'โรงพยาบาลสนาม3', NULL, NULL),
(60, '61', 'Cohort PICU', NULL, NULL),
(61, '62', 'CI เรือนจำ', NULL, NULL),
(62, '63', 'HI รพ.ชัยภูมิ', NULL, NULL),
(63, '64', 'ODS Ward', NULL, NULL),
(64, '65', 'Cataract', NULL, NULL),
(65, '66', 'ตึกอายุรกรรมรวม', NULL, NULL),
(66, '67', 'ตึกจิตเวชชาย', NULL, NULL),
(67, '68', 'ตึกจิตเวชหญิง', NULL, NULL),
(68, '69', 'CI รพ.ชัยภูมิ(เอราวัณ)', NULL, NULL),
(69, '70', 'ตึกHigh Risk', NULL, NULL),
(70, '71', 'CI เวชกรรมสังคม', NULL, NULL),
(71, '72', 'CI รพ.ชัยภูมิ(สิริวัณวรี)', NULL, NULL),
(72, '73', 'CI โพนทอง', NULL, NULL),
(73, '74', 'CI บุ่งคล้า', NULL, NULL),
(74, '75', 'CI ลาดใหญ่', NULL, NULL),
(75, '76', 'AE Ward', NULL, NULL),
(76, '77', 'CI เทศบาล(เอราวัณ)', NULL, NULL),
(77, '78', 'พิเศษ5(CI)', NULL, NULL),
(78, '79', 'ICUCovidสนาม', NULL, NULL),
(79, '80', 'Neurosurgery ICU', NULL, NULL),
(80, '81', 'MICU3', NULL, NULL),
(81, '82', 'CCU', NULL, NULL),
(82, '83', 'Cath Lab', NULL, NULL),
(83, '84', 'CCUและCardio Ward', NULL, NULL),
(84, '85', 'INR', NULL, NULL),
(85, '86', 'Home  Ward', NULL, NULL),
(86, '87', 'Cardio Ward', NULL, NULL),
(87, '88', 'Sleep Lab Ward', NULL, NULL),
(88, '89', 'RICU WARD', NULL, NULL),
(89, '90', 'Stroke ICU', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guidelinesadmits`
--
ALTER TABLE `guidelinesadmits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobrents`
--
ALTER TABLE `jobrents`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roomtypes`
--
ALTER TABLE `roomtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomtypesubs`
--
ALTER TABLE `roomtypesubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessionrooms`
--
ALTER TABLE `sessionrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socketrooms`
--
ALTER TABLE `socketrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuspatients`
--
ALTER TABLE `statuspatients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statusrents`
--
ALTER TABLE `statusrents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guidelinesadmits`
--
ALTER TABLE `guidelinesadmits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobrents`
--
ALTER TABLE `jobrents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roomtypes`
--
ALTER TABLE `roomtypes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roomtypesubs`
--
ALTER TABLE `roomtypesubs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `sessionrooms`
--
ALTER TABLE `sessionrooms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socketrooms`
--
ALTER TABLE `socketrooms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `statuspatients`
--
ALTER TABLE `statuspatients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statusrents`
--
ALTER TABLE `statusrents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
