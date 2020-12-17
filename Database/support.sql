-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 04:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `support`
--

-- --------------------------------------------------------

--
-- Table structure for table `chbah`
--

CREATE TABLE `chbah` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ward` varchar(11) NOT NULL,
  `replaced_toner` tinyint(4) NOT NULL,
  `type_of_toner` varchar(11) NOT NULL,
  `issued_paper` tinyint(4) NOT NULL,
  `quality_of_paper` int(11) NOT NULL,
  `other_issue` tinyint(4) NOT NULL,
  `specify_issue` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chbah`
--

INSERT INTO `chbah` (`id`, `username`, `ward`, `replaced_toner`, `type_of_toner`, `issued_paper`, `quality_of_paper`, `other_issue`, `specify_issue`, `comments`, `created_at`) VALUES
(16, 'Krugerson', '8', 1, 'brother', 0, 0, 0, '', '', '2020-01-13 09:47:46'),
(17, 'Krugerson', '3', 1, 'brother', 1, 1, 0, '', '', '2020-01-13 09:50:02'),
(18, 'Krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-01-23 09:52:52'),
(19, 'Krugerson', '5', 0, '', 1, 1, 0, '', '', '2020-01-23 09:53:03'),
(20, 'Krugerson', '4', 1, 'brother', 1, 1, 0, '', '', '2020-01-23 09:53:42'),
(21, 'Krugerson', '3', 0, '', 1, 1, 0, '', '', '2020-01-23 09:53:56'),
(22, 'Krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-01-23 09:54:12'),
(23, 'Krugerson', '8', 0, '', 1, 1, 0, '', '', '2020-02-12 09:57:49'),
(24, 'Krugerson', '5', 1, 'brother', 0, 0, 0, '', '', '2020-02-12 09:58:43'),
(25, 'Krugerson', '4', 0, '', 1, 1, 0, '', '', '2020-02-12 09:59:31'),
(26, 'Krugerson', '3', 1, 'brother', 1, 1, 0, '', '', '2020-02-12 10:00:15'),
(27, 'Krugerson', '2', 1, 'brother', 1, 1, 0, '', '', '2020-02-12 10:00:37'),
(28, 'Krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-02-19 10:03:01'),
(29, 'Krugerson', '6', 0, '', 1, 1, 0, '', '', '2020-02-19 10:03:21'),
(30, 'Krugerson', '5', 0, '', 1, 1, 0, '', '', '2020-02-19 10:03:32'),
(31, 'Krugerson', '4', 0, '', 1, 1, 0, '', '', '2020-02-19 10:03:52'),
(32, 'Krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-02-19 10:04:09'),
(33, 'Krugerson', '3', 0, '', 1, 1, 0, '', '', '2020-02-24 10:06:49'),
(34, 'Krugerson', '6', 0, '', 1, 1, 0, '', '', '2020-03-02 10:07:58'),
(35, 'Krugerson', '5', 0, '', 1, 1, 0, '', '', '2020-03-02 10:08:11'),
(36, 'Krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-03-02 10:08:32'),
(37, 'Krugerson', '3', 1, 'brother', 0, 0, 0, '', '', '2020-03-02 10:08:42'),
(38, 'Krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-03-09 10:10:27'),
(39, 'Krugerson', '4', 0, '', 1, 1, 0, '', '', '2020-03-09 10:10:47'),
(40, 'Krugerson', '3', 0, '', 1, 1, 0, '', '', '2020-03-09 10:10:58'),
(41, 'Krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-03-23 10:12:34'),
(42, 'Krugerson', '8', 0, '', 1, 1, 0, '', '', '2020-03-23 10:12:50'),
(43, 'Krugerson', '5', 0, '', 1, 1, 0, '', '', '2020-03-23 10:13:00'),
(44, 'Krugerson', '4', 0, '', 1, 1, 0, '', '', '2020-03-23 10:13:14'),
(45, 'Krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-03-23 10:13:26'),
(46, 'Krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-03-31 10:16:47'),
(47, 'Krugerson', '8', 0, '', 1, 1, 0, '', '', '2020-03-31 10:17:47'),
(48, 'Krugerson', '5', 0, '', 1, 1, 0, '', '', '2020-03-31 10:18:12'),
(49, 'Krugerson', '4', 0, '', 1, 1, 0, '', '', '2020-03-31 10:18:31'),
(50, 'Krugerson', '3', 1, 'brother', 0, 0, 0, '', '', '2020-03-31 10:18:51'),
(51, 'Krugerson', '2', 1, 'brother', 0, 0, 0, '', '', '2020-03-31 10:19:05'),
(52, 'Krugerson', '4', 1, 'brother', 0, 0, 0, '', '', '2020-04-06 10:21:07'),
(53, 'Krugerson', '10', 1, 'brother', 0, 0, 0, '', '', '2020-04-07 10:21:39'),
(54, 'Krugerson', '8', 1, 'brother', 0, 0, 0, '', '', '2020-04-11 10:22:01'),
(55, 'Krugerson', '8', 0, '', 1, 1, 0, '', '', '2020-04-14 10:23:39'),
(56, 'Krugerson', '6', 1, 'brother', 0, 0, 0, '', '', '2020-04-14 10:23:50'),
(57, 'Krugerson', '4', 0, '', 1, 1, 0, '', '', '2020-04-14 10:24:02'),
(58, 'Krugerson', '5', 1, 'brother', 0, 0, 0, '', '', '2020-04-20 10:26:24'),
(59, 'Krugerson', '3', 0, '', 1, 1, 0, '', '', '2020-04-20 10:26:35'),
(60, 'Krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-04-28 10:27:07'),
(61, 'Krugerson', '6', 0, '', 1, 1, 0, '', '', '2020-04-28 10:27:20'),
(62, 'Krugerson', '3', 0, '', 1, 1, 0, '', '', '2020-04-28 10:27:32'),
(63, 'Krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-04-28 10:27:44'),
(64, 'Krugerson', '6', 0, '', 1, 1, 0, '', '', '2020-05-05 10:29:50'),
(65, 'Krugerson', '4', 0, '', 1, 1, 0, '', '', '2020-05-05 10:30:07'),
(66, 'Krugerson', '6', 0, '', 1, 1, 0, '', '', '2020-05-11 10:30:22'),
(67, 'Krugerson', '4', 0, '', 1, 1, 0, '', '', '2020-05-11 10:32:00'),
(68, 'Krugerson', '3', 1, 'brother', 0, 0, 0, '', '', '2020-05-11 10:32:13'),
(69, 'Krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-05-11 10:32:35'),
(70, 'Krugerson', '2', 1, 'brother', 0, 0, 0, '', '', '2020-05-15 10:35:04'),
(71, 'Krugerson', '10', 1, 'brother', 0, 0, 0, '', '', '2020-05-22 10:36:04'),
(72, 'Krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-05-25 10:36:19'),
(73, 'Krugerson', '5', 1, 'brother', 1, 1, 0, '', '', '2020-05-25 10:36:40'),
(74, 'Krugerson', '4', 1, 'brother', 1, 1, 0, '', '', '2020-05-25 10:37:02'),
(75, 'Krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-05-25 10:37:16'),
(76, 'Krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-06-01 10:38:53'),
(77, 'Krugerson', '6', 0, '', 1, 1, 0, '', '', '2020-06-01 10:39:04'),
(78, 'Krugerson', '5', 0, '', 1, 1, 0, '', '', '2020-06-01 10:39:15'),
(79, 'Krugerson', '4', 0, '', 1, 1, 0, '', '', '2020-06-01 10:39:26'),
(80, 'Krugerson', '8', 1, 'brother', 1, 1, 0, '', '', '2020-06-09 10:40:04'),
(81, 'Krugerson', '4', 0, '', 1, 1, 0, '', '', '2020-06-09 10:40:14'),
(82, 'Krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-06-19 10:42:49'),
(83, 'Krugerson', '8', 0, '', 1, 1, 0, '', '', '2020-06-19 10:43:03'),
(84, 'Krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-06-23 10:43:29'),
(85, 'Krugerson', '2', 1, 'brother', 0, 0, 0, '', '', '2020-06-25 10:44:52'),
(86, 'Krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-06-29 10:45:33'),
(87, 'Krugerson', '8', 0, '', 1, 1, 0, '', '', '2020-06-29 10:45:45'),
(88, 'Krugerson', '6', 0, '', 1, 1, 0, '', '', '2020-06-29 10:45:56'),
(89, 'Krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-06-29 10:46:12'),
(90, 'Krugerson', '10', 1, 'brother', 0, 0, 0, '', '', '2020-07-01 10:46:33'),
(91, 'Krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-07-07 10:48:36'),
(92, 'Krugerson', '6', 0, '', 1, 1, 0, '', '', '2020-07-07 10:48:51'),
(93, 'Krugerson', '3', 0, '', 1, 1, 0, '', '', '2020-07-07 10:49:04'),
(94, 'Krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-07-07 10:49:14'),
(95, 'Krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-07-13 10:49:36'),
(96, 'Krugerson', '6', 0, '', 1, 1, 0, '', '', '2020-07-13 10:49:47'),
(97, 'Krugerson', '4', 0, '', 1, 1, 0, '', '', '2020-07-13 10:50:10'),
(98, 'Krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-07-20 10:52:41'),
(99, 'Krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-07-20 10:53:02'),
(100, 'Krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-07-27 10:53:17'),
(101, 'Krugerson', '5', 0, '', 1, 1, 0, '', '', '2020-07-27 10:53:27'),
(102, 'Krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-07-27 10:53:40'),
(103, 'Krugerson', '10', 1, 'brother', 0, 0, 0, '', '', '2020-08-08 10:57:03'),
(104, 'Krugerson', '2', 1, 'brother', 0, 0, 0, '', '', '2020-08-08 10:57:19'),
(105, 'Krugerson', '3', 1, 'brother', 0, 0, 0, '', '', '2020-08-08 10:57:30'),
(106, 'Krugerson', '6', 1, 'brother', 0, 0, 0, '', '', '2020-08-08 10:58:16'),
(107, 'Krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-08-08 10:58:27'),
(108, 'Phuti', '6', 0, '', 1, 1, 0, '', '', '2020-08-12 11:29:07'),
(109, 'Phuti', '10', 0, '', 1, 1, 0, '', '', '2020-08-17 11:33:07'),
(110, 'Phuti', '5', 0, '', 1, 1, 0, '', '', '2020-08-17 11:33:16'),
(111, 'Phuti', '8', 0, '', 1, 1, 0, '', '', '2020-08-24 11:42:14'),
(112, 'Phuti', '5', 0, '', 1, 1, 0, '', '', '2020-08-24 11:42:24'),
(113, 'Phuti', '2', 0, '', 1, 1, 0, '', '', '2020-08-24 11:42:37'),
(114, 'Phuti', '10', 1, 'brother', 0, 0, 0, '', '', '2020-08-27 11:43:41'),
(115, 'Phuti', '10', 0, '', 1, 1, 0, '', '', '2020-08-31 11:48:08'),
(116, 'Phuti', '6', 0, '', 1, 1, 0, '', '', '2020-08-31 11:48:16'),
(117, 'Phuti', '5', 0, '', 1, 1, 0, '', '', '2020-08-31 11:48:27'),
(118, 'Phuti', '2', 0, '', 1, 1, 0, '', '', '2020-08-31 11:48:37'),
(119, 'krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-09-07 11:44:15'),
(120, 'krugerson', '6', 0, '', 1, 1, 0, '', '', '2020-09-07 11:44:26'),
(121, 'krugerson', '3', 0, '', 1, 1, 0, '', '', '2020-09-07 11:44:39'),
(122, 'krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-09-07 11:44:47'),
(123, 'krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-09-14 11:45:59'),
(124, 'krugerson', '8', 1, 'brother', 1, 1, 0, '', '', '2020-09-14 11:46:23'),
(125, 'krugerson', '4', 0, '', 1, 1, 0, '', '', '2020-09-14 11:46:38'),
(126, 'krugerson', '3', 0, '', 1, 1, 0, '', '', '2020-09-14 11:46:48'),
(127, 'krugerson', '10', 1, 'brother', 0, 0, 0, '', '', '2020-09-21 11:54:05'),
(128, 'krugerson', '3', 0, '', 1, 1, 0, '', '', '2020-09-21 11:54:16'),
(129, 'krugerson', '4', 1, 'brother', 0, 0, 0, '', '', '2020-09-22 11:55:55'),
(130, 'krugerson', '3', 1, 'brother', 0, 0, 0, '', '', '2020-09-22 11:56:06'),
(131, 'krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-10-06 11:56:53'),
(132, 'krugerson', '5', 0, '', 1, 1, 0, '', '', '2020-10-06 11:57:03'),
(133, 'krugerson', '4', 0, '', 1, 1, 0, '', '', '2020-10-06 11:57:13'),
(134, 'krugerson', '3', 0, '', 1, 1, 0, '', '', '2020-10-06 11:57:20'),
(135, 'krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-10-06 11:57:27'),
(136, 'krugerson', '10', 1, 'brother', 1, 1, 0, '', '', '2020-10-16 11:58:01'),
(137, 'krugerson', '6', 1, 'brother', 0, 0, 0, '', '', '2020-10-16 11:58:33'),
(138, 'krugerson', '5', 1, 'brother', 1, 1, 0, '', '', '2020-10-16 11:58:44'),
(139, 'krugerson', '4', 1, 'brother', 1, 1, 0, '', '', '2020-10-16 11:59:00'),
(140, 'krugerson', '3', 0, '', 1, 1, 0, '', '', '2020-10-16 11:59:17'),
(141, 'krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-10-16 11:59:24'),
(142, 'krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-10-28 12:33:55'),
(143, 'krugerson', '6', 1, 'brother', 1, 1, 0, '', '', '2020-10-28 12:34:12'),
(144, 'krugerson', '5', 1, 'brother', 1, 1, 0, '', '', '2020-10-28 12:34:26'),
(145, 'krugerson', '4', 1, 'brother', 1, 1, 0, '', '', '2020-10-28 12:34:38'),
(146, 'krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-10-28 12:34:48'),
(147, 'krugerson', '10', 0, '', 1, 1, 0, '', '', '2020-11-04 12:36:16'),
(148, 'krugerson', '5', 0, '', 1, 1, 0, '', '', '2020-11-04 12:36:22'),
(149, 'krugerson', '4', 0, '', 1, 1, 0, '', '', '2020-11-04 12:36:31'),
(150, 'krugerson', '3', 0, '', 1, 1, 0, '', '', '2020-11-04 12:36:42'),
(151, 'krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-11-04 12:36:58'),
(152, 'krugerson', '10', 1, 'brother', 0, 0, 0, '', '', '2020-11-11 12:37:46'),
(153, 'krugerson', '6', 0, '', 1, 1, 0, '', '', '2020-11-11 12:37:56'),
(154, 'krugerson', '2', 0, '', 1, 1, 0, '', '', '2020-11-11 12:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `chbah_workstations`
--

CREATE TABLE `chbah_workstations` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `computer_name` varchar(255) NOT NULL,
  `windows_type` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `assets_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chbah_workstations`
--

INSERT INTO `chbah_workstations` (`id`, `username`, `hospital`, `ward`, `computer_name`, `windows_type`, `serial_number`, `assets_number`, `created_at`) VALUES
(3, 'krugerson', 'chbah', '8', 'hp', '10', 'TRF54701GF', 'B00032', '2020-11-17 09:22:00'),
(4, 'krugerson', 'chbah', '6', 'hp', '10', 'CZC62873DD', 'B00057', '2020-11-17 09:58:06'),
(5, 'krugerson', 'chbah', '5', 'hp', '10', 'CZC4394221', 'B00039', '2020-11-17 09:58:56'),
(6, 'krugerson', 'chbah', '4', 'hp', '10', 'CZC62873DD', 'B00059', '2020-11-17 10:00:13'),
(7, 'krugerson', 'chbah', '2', 'hp', '10', 'CZC6178BBT', 'B00088', '2020-11-17 10:01:15'),
(8, 'krugerson', 'chbah', '3', 'acer', '10', 'DQVPJEA00781004A033000', 'B00096', '2020-11-17 10:03:52'),
(10, 'krugerson', 'chbah', '10', 'hp', '10', 'N/A', 'N/A', '2020-11-19 11:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `chbah_workstations_monitor`
--

CREATE TABLE `chbah_workstations_monitor` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `monitor_name` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `assets_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chbah_workstations_monitor`
--

INSERT INTO `chbah_workstations_monitor` (`id`, `username`, `hospital`, `ward`, `monitor_name`, `serial_number`, `assets_number`, `created_at`) VALUES
(2, 'krugerson', 'chbah', '10', 'lg', '702NTPCAF560', 'B00065', '2020-11-17 11:28:28'),
(3, 'krugerson', 'chbah', '8', 'lg', '510NTHM0C857', 'B00047', '2020-11-17 11:29:10'),
(4, 'krugerson', 'chbah', '6', 'lg', '607NTPC9Z160', 'B00008', '2020-11-17 11:29:56'),
(5, 'krugerson', 'chbah', '5', 'lg', '702NT5UAF926', 'B00063', '2020-11-17 11:30:36'),
(6, 'krugerson', 'chbah', '4', 'lg', '607NTJJ9Z180', 'B00015', '2020-11-17 11:32:07'),
(7, 'krugerson', 'chbah', '2', 'lg', '607NTZN9Z141', 'B00018', '2020-11-17 11:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `chbah_workstations_printer`
--

CREATE TABLE `chbah_workstations_printer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `printer_name` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `assets_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chbah_workstations_printer`
--

INSERT INTO `chbah_workstations_printer` (`id`, `username`, `hospital`, `ward`, `printer_name`, `serial_number`, `assets_number`, `created_at`) VALUES
(2, 'krugerson', 'chbah', '10', 'brother', 'E73797E7N710317', 'B00067', '2020-11-17 11:34:03'),
(3, 'krugerson', 'chbah', '8', 'brother', 'E73797D7N628065', 'B00006', '2020-11-17 11:34:36'),
(4, 'krugerson', 'chbah', '6', 'brother', 'E73797D7N710269', 'B00007', '2020-11-17 11:35:33'),
(5, 'krugerson', 'chbah', '5', 'brother', 'E73797E7N710279', 'B00010', '2020-11-17 11:36:09'),
(6, 'krugerson', 'chbah', '4', 'brother', 'E73797D7N710271', 'B00014', '2020-11-17 11:36:49'),
(7, 'Phuti', 'chbah', '3', 'brother', 'E73797K9N915879', 'B00102', '2020-11-17 11:37:20'),
(8, 'krugerson', 'chbah', '2', 'brother', 'E73797D7N438736', 'B00017', '2020-11-17 11:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `cmjah`
--

CREATE TABLE `cmjah` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ward` varchar(11) NOT NULL,
  `replaced_toner` tinyint(4) NOT NULL,
  `type_of_toner` varchar(11) NOT NULL,
  `issued_paper` tinyint(4) NOT NULL,
  `quality_of_paper` int(11) NOT NULL,
  `other_issue` tinyint(4) NOT NULL,
  `specify_issue` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmjah`
--

INSERT INTO `cmjah` (`id`, `username`, `ward`, `replaced_toner`, `type_of_toner`, `issued_paper`, `quality_of_paper`, `other_issue`, `specify_issue`, `comments`, `created_at`) VALUES
(23, 'Krugerson', '396', 1, 'hp85a', 0, 0, 0, '', '', '2020-01-06 11:33:20'),
(24, 'Krugerson', '369', 1, 'hp85a', 0, 0, 0, '', '', '2020-01-06 11:33:44'),
(25, 'Krugerson', '394', 1, 'brother', 0, 0, 0, '', '', '2020-01-07 11:34:24'),
(26, 'Krugerson', '396', 1, 'brother', 1, 1, 0, '', '', '2020-01-13 11:36:33'),
(27, 'Krugerson', '369', 1, 'hp85a', 0, 0, 0, '', '', '2020-01-13 11:37:02'),
(28, 'Krugerson', '374', 1, 'hp12a', 0, 0, 0, '', '', '2020-01-13 11:37:29'),
(29, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-01-23 11:37:46'),
(30, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-01-23 11:38:02'),
(31, 'Krugerson', '275(4)', 0, '', 1, 1, 0, '', '', '2020-01-23 11:38:24'),
(32, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-01-28 11:40:57'),
(33, 'Krugerson', '394', 0, '', 1, 1, 0, '', '', '2020-01-28 11:41:38'),
(34, 'Krugerson', '275(4)', 1, 'hp85a', 0, 0, 0, '', '', '2020-01-28 11:41:59'),
(35, 'Krugerson', '394', 1, 'brother', 0, 0, 0, '', '', '2020-02-06 11:44:05'),
(36, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-02-06 11:44:29'),
(37, 'Krugerson', '374', 0, '', 1, 1, 0, '', '', '2020-02-06 11:44:47'),
(38, 'Krugerson', '394', 0, '', 1, 1, 0, '', '', '2020-02-11 11:45:20'),
(39, 'Krugerson', '375', 0, '', 1, 1, 0, '', '', '2020-02-11 11:46:03'),
(40, 'Krugerson', '369', 1, 'hp85a', 0, 0, 0, '', '', '2020-02-11 11:46:31'),
(41, 'Krugerson', '394', 0, '', 1, 1, 0, '', '', '2020-02-19 11:49:30'),
(42, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-02-19 11:49:54'),
(43, 'Krugerson', '396', 1, 'hp85a', 0, 0, 0, '', '', '2020-02-19 11:50:16'),
(44, 'Krugerson', '374', 0, '', 1, 1, 0, '', '', '2020-02-19 11:50:31'),
(45, 'Krugerson', '394', 0, '', 1, 1, 0, '', '', '2020-03-03 11:57:20'),
(46, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-03-03 11:57:32'),
(47, 'Krugerson', '375', 0, '', 1, 1, 0, '', '', '2020-03-03 11:57:49'),
(48, 'Krugerson', '377', 1, 'hp85a', 1, 1, 0, '', '', '2020-03-03 11:58:11'),
(49, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-03-09 11:58:32'),
(50, 'Krugerson', '394', 1, 'brother', 0, 0, 0, '', '', '2020-03-10 11:58:47'),
(51, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-03-26 12:02:00'),
(52, 'Krugerson', '396', 1, 'hp85a', 0, 0, 0, '', '', '2020-03-26 12:02:17'),
(53, 'Krugerson', '375(Admin)', 0, '', 1, 1, 0, '', '', '2020-03-26 12:02:35'),
(54, 'Krugerson', '374', 0, '', 1, 1, 0, '', '', '2020-03-26 12:02:45'),
(55, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-03-31 12:03:00'),
(56, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-03-31 12:03:26'),
(57, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-04-07 12:05:25'),
(58, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-04-07 12:05:43'),
(59, 'Krugerson', '394', 1, 'brother', 1, 1, 0, '', '', '2020-04-14 12:06:04'),
(60, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-04-14 12:06:16'),
(61, 'Krugerson', '374', 1, 'hp12a', 0, 0, 0, '', '', '2020-04-14 12:06:35'),
(62, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-04-20 12:06:49'),
(63, 'Krugerson', '395', 1, 'brother', 1, 1, 0, '', '', '2020-04-27 12:09:06'),
(64, 'Krugerson', '394', 0, '', 1, 1, 0, '', '', '2020-04-27 12:09:17'),
(65, 'Krugerson', '374', 0, '', 1, 1, 0, '', '', '2020-04-27 12:09:35'),
(66, 'Krugerson', '375', 0, '', 1, 1, 0, '', '', '2020-04-27 12:09:49'),
(67, 'Krugerson', '396', 1, 'hp85a', 1, 1, 0, '', '', '2020-05-05 12:10:09'),
(68, 'Krugerson', '377', 1, 'hp85a', 1, 1, 0, '', '', '2020-05-05 12:10:24'),
(69, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-05-11 12:12:23'),
(70, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-05-11 12:12:35'),
(71, 'Krugerson', '374', 0, '', 1, 1, 0, '', '', '2020-05-11 12:12:47'),
(72, 'Krugerson', '369', 1, 'hp85a', 0, 0, 0, '', '', '2020-05-11 12:13:16'),
(73, 'Krugerson', '374', 0, '', 1, 1, 0, '', '', '2020-05-11 12:13:47'),
(74, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-05-25 12:15:21'),
(75, 'Krugerson', '394', 0, '', 1, 1, 0, '', '', '2020-05-25 12:15:32'),
(76, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-05-25 12:15:41'),
(77, 'Krugerson', '369', 0, '', 1, 1, 0, '', '', '2020-05-25 12:15:53'),
(78, 'Krugerson', '275(4)', 0, '', 1, 1, 0, '', '', '2020-05-25 12:16:11'),
(79, 'Krugerson', '394', 1, 'brother', 0, 0, 0, '', '', '2020-05-29 12:16:26'),
(80, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-06-01 12:18:10'),
(81, 'Krugerson', '377', 0, '', 1, 1, 0, '', '', '2020-06-01 12:18:19'),
(82, 'Krugerson', '375', 0, '', 1, 1, 0, '', '', '2020-06-01 12:18:32'),
(83, 'Krugerson', '369', 0, '', 1, 1, 0, '', '', '2020-06-01 12:18:48'),
(84, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-06-10 12:20:12'),
(85, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-06-10 12:20:29'),
(86, 'Krugerson', '369', 1, 'brother', 0, 0, 0, '', '', '2020-06-10 12:20:50'),
(87, 'Krugerson', '554', 0, '', 1, 1, 0, '', '', '2020-06-10 12:21:02'),
(88, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-06-18 12:21:12'),
(89, 'Krugerson', '554', 0, '', 1, 1, 0, '', '', '2020-06-18 12:21:40'),
(90, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-06-18 12:23:13'),
(91, 'Krugerson', '554', 1, 'brother', 0, 0, 0, '', '', '2020-06-19 12:25:17'),
(92, 'Krugerson', '554', 0, '', 1, 1, 0, '', '', '2020-06-23 12:25:40'),
(93, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-06-23 12:25:55'),
(94, 'Krugerson', '394', 0, '', 1, 1, 0, '', '', '2020-06-23 12:26:11'),
(95, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-06-23 12:26:23'),
(96, 'Krugerson', '369', 1, 'hp85a', 0, 0, 0, '', '', '2020-06-23 12:26:36'),
(97, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-06-29 12:28:37'),
(98, 'Krugerson', '554', 0, '', 1, 1, 0, '', '', '2020-07-06 12:28:55'),
(99, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-07-06 12:29:05'),
(100, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-07-06 12:29:24'),
(101, 'Krugerson', '394', 0, '', 1, 1, 0, '', '', '2020-07-06 12:29:35'),
(102, 'Krugerson', '377', 0, '', 1, 1, 0, '', '', '2020-07-06 12:29:45'),
(103, 'Krugerson', '377', 0, '', 1, 1, 0, '', '', '2020-07-13 12:31:27'),
(104, 'Krugerson', '374', 0, '', 1, 1, 0, '', '', '2020-07-13 12:31:36'),
(105, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-07-20 12:31:50'),
(106, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-07-20 12:32:00'),
(107, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-07-27 12:33:37'),
(108, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-07-27 12:33:48'),
(109, 'Krugerson', '369', 1, 'hp85a', 1, 1, 0, '', '', '2020-08-07 12:34:11'),
(110, 'Krugerson', '394', 1, 'hp85a', 1, 1, 0, '', '', '2020-08-07 12:34:29'),
(111, 'Krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-08-07 12:34:42'),
(112, 'Krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-08-07 12:34:58'),
(113, 'Phuti', '396', 0, '', 1, 1, 0, '', '', '2020-08-12 11:01:11'),
(114, 'Phuti', '395', 0, '', 1, 1, 0, '', '', '2020-08-12 11:01:24'),
(115, 'Phuti', '375', 0, '', 1, 1, 0, '', '', '2020-08-12 11:01:39'),
(116, 'Phuti', '396', 1, 'hp85a', 0, 0, 0, '', '', '2020-08-17 11:04:17'),
(117, 'Phuti', '395', 0, '', 1, 1, 0, '', '', '2020-08-17 11:05:26'),
(118, 'Phuti', '377', 1, 'hp85a', 1, 1, 0, '', '', '2020-08-17 11:06:00'),
(119, 'Phuti', '554', 0, '', 1, 1, 0, '', '', '2020-08-24 11:12:26'),
(120, 'Phuti', '396', 0, '', 1, 1, 0, '', '', '2020-08-24 11:12:43'),
(121, 'Phuti', '374', 0, '', 1, 1, 0, '', '', '2020-08-24 11:12:56'),
(122, 'Phuti', '396', 0, '', 1, 1, 0, '', '', '2020-08-31 11:15:05'),
(123, 'Phuti', '395', 0, '', 1, 1, 0, '', '', '2020-08-31 11:15:16'),
(124, 'Phuti', '369', 1, 'hp85a', 0, 0, 0, '', '', '2020-08-31 11:15:49'),
(125, 'krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-09-07 10:27:28'),
(126, 'krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-09-07 10:27:43'),
(127, 'krugerson', '394', 0, '', 1, 1, 0, '', '', '2020-09-07 10:27:55'),
(128, 'krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-09-14 10:31:37'),
(129, 'krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-09-14 10:31:45'),
(130, 'krugerson', '394', 0, '', 1, 1, 0, '', '', '2020-09-14 10:31:55'),
(131, 'krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-09-21 10:34:11'),
(132, 'krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-09-21 10:34:21'),
(133, 'krugerson', '394', 0, '', 1, 1, 0, '', '', '2020-09-21 10:34:35'),
(134, 'krugerson', '375', 0, '', 1, 1, 0, '', '', '2020-09-21 10:34:51'),
(135, 'krugerson', '395', 1, 'hp85a', 0, 0, 0, '', '', '2020-09-30 10:37:59'),
(136, 'krugerson', '394', 1, 'brother', 0, 0, 0, '', '', '2020-09-30 10:38:39'),
(137, 'krugerson', '369', 1, 'hp85a', 0, 0, 0, '', '', '2020-09-30 10:39:12'),
(138, 'krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-10-06 10:43:01'),
(139, 'krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-10-06 10:43:15'),
(140, 'krugerson', '394', 0, '', 1, 1, 0, '', '', '2020-10-06 10:43:28'),
(141, 'krugerson', '377', 0, '', 1, 1, 0, '', '', '2020-10-06 10:43:52'),
(142, 'krugerson', '374', 0, '', 1, 1, 0, '', '', '2020-10-06 10:44:02'),
(143, 'krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-10-28 10:46:24'),
(144, 'krugerson', '394', 0, '', 1, 1, 0, '', '', '2020-10-28 10:46:35'),
(145, 'krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-11-04 10:47:02'),
(146, 'krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-11-04 10:47:38'),
(147, 'krugerson', '394', 0, '', 1, 1, 0, '', '', '2020-11-04 10:47:53'),
(148, 'krugerson', '275(4)', 0, '', 1, 1, 0, '', '', '2020-11-04 10:48:11'),
(149, 'krugerson', '396', 0, '', 1, 1, 0, '', '', '2020-11-11 10:48:56'),
(150, 'krugerson', '395', 0, '', 1, 1, 0, '', '', '2020-11-11 10:49:31'),
(151, 'krugerson', '394', 0, '', 1, 1, 0, '', '', '2020-11-11 10:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `cmjah_workstations`
--

CREATE TABLE `cmjah_workstations` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `computer_name` varchar(255) NOT NULL,
  `windows_type` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `assets_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmjah_workstations`
--

INSERT INTO `cmjah_workstations` (`id`, `username`, `hospital`, `ward`, `computer_name`, `windows_type`, `serial_number`, `assets_number`, `created_at`) VALUES
(2, 'krugerson', 'cmjah', '375(Admin)', 'hp', '7', 'TRF54701JY', 'B00030', '2020-11-17 12:10:37'),
(3, 'krugerson', 'cmjah', '396', 'acer', '10', 'DQVM8EA013643004793000', 'B00093', '2020-11-17 12:13:45'),
(4, 'krugerson', 'cmjah', '396', 'acer', '10', 'DQVM8EA013643004A43000', 'B00087', '2020-11-17 12:14:52'),
(5, 'krugerson', 'cmjah', '395', 'hp', '10', 'CZC624814K', 'B00009', '2020-11-17 12:16:04'),
(6, 'krugerson', 'cmjah', '394', 'acer', '10', 'DQVM8EA0136430046A3000', 'B00095', '2020-11-17 12:16:54'),
(7, 'krugerson', 'cmjah', '377', 'hp', '7', 'TRF2460LGT', 'B00028', '2020-11-17 12:17:47'),
(8, 'krugerson', 'cmjah', '375', 'acer', '10', 'DQB82EA0027460490E3000', 'B00094', '2020-11-17 12:18:57'),
(9, 'krugerson', 'cmjah', '374', 'hp', '7', 'TRF54701GF', 'B00032', '2020-11-17 12:20:01'),
(10, 'krugerson', 'cmjah', '369', 'hp', '7', 'TRF54701G1', 'B00025', '2020-11-17 12:21:17'),
(11, 'krugerson', 'cmjah', '275(2)', 'acer', '10', 'DQB3QEA00464201FFA3000', 'B00090', '2020-11-17 12:21:55'),
(12, 'krugerson', 'cmjah', '275(4)', 'hp', '7', 'TRF54701G4', 'B00023', '2020-11-17 12:22:38'),
(13, 'krugerson', 'cmjah', '267', 'hp', '7', 'TRF54701GN', '', '2020-11-17 12:24:28');

-- --------------------------------------------------------

--
-- Table structure for table `cmjah_workstations_monitor`
--

CREATE TABLE `cmjah_workstations_monitor` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `monitor_name` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `assets_number` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmjah_workstations_monitor`
--

INSERT INTO `cmjah_workstations_monitor` (`id`, `username`, `hospital`, `ward`, `monitor_name`, `serial_number`, `assets_number`, `created_at`) VALUES
(2, 'krugerson', 'cmjah', '395', 'lg', '705NTPCDP936', 'B00040', '2020-11-17 13:28:10'),
(3, 'krugerson', 'cmjah', '377', 'samsung', 'ZUTTHTHC600549R', 'B00027', '2020-11-17 13:30:05'),
(4, 'krugerson', 'cmjah', '374', 'lg', '510NTKFOC845', 'B00033', '2020-11-17 13:32:13'),
(5, 'krugerson', 'cmjah', '369', 'lg', '510NTSUOC886', 'B00024', '2020-11-17 13:32:58'),
(6, 'krugerson', 'cmjah', '275(4)', 'lg', '510NTXRO874', 'B00022', '2020-11-17 13:33:59'),
(7, 'krugerson', 'cmjah', '267', 'lg', '510NTWGOC873', 'N/A', '2020-11-17 13:35:10'),
(8, 'krugerson', 'cmjah', '375(Admin)', 'lg', '510NTNHOC871', 'B00031', '2020-11-17 13:35:44');

-- --------------------------------------------------------

--
-- Table structure for table `cmjah_workstations_printer`
--

CREATE TABLE `cmjah_workstations_printer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `printer_name` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `assets_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmjah_workstations_printer`
--

INSERT INTO `cmjah_workstations_printer` (`id`, `username`, `hospital`, `ward`, `printer_name`, `serial_number`, `assets_number`, `created_at`) VALUES
(3, 'krugerson', 'cmjah', '554', 'brother', 'E73797E7N710276', 'B00069', '2020-11-17 13:05:03'),
(4, 'krugerson', 'cmjah', '396', 'laser', 'VNF8G36048', 'B00044', '2020-11-17 13:06:29'),
(5, 'krugerson', 'cmjah', '395', 'laser', 'VNF8G35966', 'B00041', '2020-11-17 13:07:33'),
(6, 'krugerson', 'cmjah', '394', 'brother', 'E73797M6N317283', 'B00083', '2020-11-17 13:08:43'),
(7, 'krugerson', 'cmjah', '377', 'laser', 'VNF8H46451', 'B00029', '2020-11-17 13:12:16'),
(8, 'krugerson', 'cmjah', '374', 'laser', 'TRF54701GF', 'B00032', '2020-11-17 13:14:34'),
(9, 'krugerson', 'cmjah', '369', 'laser', 'VNC5V80405', 'B00026', '2020-11-17 13:15:52'),
(10, 'krugerson', 'cmjah', '267', 'laser', 'VNC6B24020', '', '2020-11-17 13:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `deleted_items`
--

CREATE TABLE `deleted_items` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `individual_holder_name` varchar(255) NOT NULL,
  `computer_name` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `assets_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deleted_items`
--

INSERT INTO `deleted_items` (`id`, `username`, `individual_holder_name`, `computer_name`, `serial_number`, `assets_number`, `created_at`) VALUES
(1, 'krugerson', 'Belinda Mc Bride', 'asus PC', 'J8N0CX17B764SSSSS', 'B08888', '2020-10-05 12:33:30'),
(2, 'krugerson', 'Thato Maboya', 'samsung Monitor', 'G06WHYCF802568Y', 'B00042', '2020-10-05 12:51:20'),
(3, 'krugerson', 'Thato Maboya', 'asus PC', 'J8N0CX17B764344', 'B00076', '2020-10-06 07:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `hjh`
--

CREATE TABLE `hjh` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ward` varchar(20) NOT NULL,
  `replaced_toner` tinyint(4) NOT NULL,
  `type_of_toner` varchar(11) NOT NULL,
  `issued_paper` tinyint(4) NOT NULL,
  `quality_of_paper` int(11) NOT NULL,
  `other_issue` tinyint(4) NOT NULL,
  `specify_issue` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hjh`
--

INSERT INTO `hjh` (`id`, `username`, `ward`, `replaced_toner`, `type_of_toner`, `issued_paper`, `quality_of_paper`, `other_issue`, `specify_issue`, `comments`, `created_at`) VALUES
(35, 'Krugerson', '19', 1, 'brother', 0, 0, 0, '', '', '2020-01-07 11:10:28'),
(36, 'Krugerson', '16', 1, 'brother', 0, 0, 0, '', '', '2020-01-07 11:10:44'),
(37, 'Krugerson', '2 (office 31)', 0, '', 1, 5, 0, '', '', '2020-01-23 11:11:19'),
(38, 'Krugerson', '17', 0, '', 1, 5, 0, '', '', '2020-01-23 11:11:50'),
(39, 'Krugerson', '16', 1, 'brother', 0, 0, 0, '', '', '2020-01-13 11:18:29'),
(40, 'Thato', '16', 0, '', 1, 1, 0, '', '', '2020-05-08 20:14:19'),
(41, 'Thato', '17', 1, 'brother', 1, 1, 0, '', '', '2020-05-14 20:14:47'),
(42, 'Thato', '19', 0, '', 1, 1, 0, '', '', '2020-06-05 20:16:43'),
(43, 'Thato', '18', 0, '', 1, 1, 0, '', '', '2020-06-08 20:17:12'),
(44, 'Thato', '16', 0, '', 1, 1, 0, '', '', '2020-06-09 20:19:22'),
(45, 'Thato', '17', 0, '', 1, 1, 0, '', '', '2020-06-11 20:20:00'),
(46, 'Thato', '16', 0, '', 1, 1, 0, '', '', '2020-07-13 20:21:51'),
(47, 'Thato', '17', 0, '', 1, 1, 0, '', '', '2020-07-13 20:22:03'),
(48, 'Thato', '18', 0, '', 1, 1, 0, '', '', '2020-07-13 20:22:20'),
(49, 'Thato', '19', 0, '', 1, 1, 0, '', '', '2020-07-13 20:22:37'),
(52, 'Krugerson', '17', 0, '', 1, 1, 0, '', '', '2020-07-23 10:02:16'),
(53, 'Krugerson', '19', 1, 'brother', 1, 1, 0, '', '', '2020-08-14 10:02:16'),
(54, 'Krugerson', '19', 1, 'brother', 0, 0, 0, '', 'There was problem with the new installed toner', '2020-08-14 10:02:16'),
(55, 'Krugerson', '18', 0, '', 1, 1, 0, '', '', '2020-08-26 10:03:07'),
(58, 'krugerson', '17', 0, '', 1, 1, 0, '', '', '2020-09-07 16:29:28'),
(59, 'krugerson', '19', 0, '', 1, 1, 0, '', '', '2020-09-09 16:29:49'),
(60, 'krugerson', '16', 1, 'brother', 0, 0, 0, '', '', '2020-09-18 16:31:43'),
(61, 'krugerson', '17', 1, 'brother', 0, 0, 0, '', '', '2020-09-21 16:31:53'),
(62, 'krugerson', '18', 1, 'brother', 0, 0, 0, '', '', '2020-09-23 16:32:09'),
(63, 'krugerson', '19', 0, '', 1, 1, 0, '', '', '2020-10-07 16:32:23'),
(64, 'krugerson', '18', 0, '', 1, 1, 0, '', '', '2020-10-16 16:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `hjh_workstations`
--

CREATE TABLE `hjh_workstations` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `computer_name` varchar(255) NOT NULL,
  `windows_type` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `assets_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hjh_workstations`
--

INSERT INTO `hjh_workstations` (`id`, `username`, `hospital`, `ward`, `computer_name`, `windows_type`, `serial_number`, `assets_number`, `created_at`) VALUES
(7, 'krugerson', 'hjh', '16', 'acer', '10', 'DQB3QEA00162506B993', 'B00099', '2020-11-17 11:45:05'),
(8, 'krugerson', 'hjh', '17', 'acer', '10', 'DQB3QEA00162506B9A3000', 'B00100', '2020-11-17 11:45:51'),
(9, 'krugerson', 'hjh', '18', 'acer', '10', 'DQB3QEA0046201FE63000', 'B00098', '2020-11-17 11:46:43'),
(10, 'krugerson', 'hjh', '19', 'acer', '10', 'DQB3QEA0046201FDE3000', 'B00097', '2020-11-17 11:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `hjh_workstations_monitor`
--

CREATE TABLE `hjh_workstations_monitor` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `monitor_name` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `assets_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hjh_workstations_printer`
--

CREATE TABLE `hjh_workstations_printer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `printer_name` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `assets_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hjh_workstations_printer`
--

INSERT INTO `hjh_workstations_printer` (`id`, `username`, `hospital`, `ward`, `printer_name`, `serial_number`, `assets_number`, `created_at`) VALUES
(5, 'krugerson', 'hjh', '16', 'brother', 'E73797D7N628118', 'B00003', '2020-11-17 11:51:25'),
(6, 'krugerson', 'hjh', '17', 'brother', 'E73797D7N628091', 'B00004', '2020-11-17 11:51:54'),
(7, 'krugerson', 'hjh', '18', 'brother', 'E73797D7N628122', 'B00002', '2020-11-17 11:52:24'),
(8, 'krugerson', 'hjh', '19', 'brother', 'E73797D7N628128', 'B00001', '2020-11-17 11:53:05'),
(9, 'krugerson', 'hjh', '2 (office 26)', 'brother', 'E73797E7N710312', 'B00080', '2020-11-17 12:00:47'),
(10, 'krugerson', 'hjh', '2 (office 27)', 'brother', 'E73797E7N710318', 'B00005', '2020-11-17 12:01:15'),
(11, 'krugerson', 'hjh', '2 (office 31)', 'brother', 'E73797E7N710314', 'B00050', '2020-11-17 12:01:41'),
(12, 'krugerson', 'hjh', '2 (Room 1 Interview room)', 'brother', 'E73797E7N710288', 'B00049', '2020-11-17 12:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `individual_hardware`
--

CREATE TABLE `individual_hardware` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `individual_holder_name` varchar(255) NOT NULL,
  `computer_name` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `assets_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `individual_hardware`
--

INSERT INTO `individual_hardware` (`id`, `username`, `individual_holder_name`, `computer_name`, `serial_number`, `assets_number`, `created_at`) VALUES
(5, 'krugerson', 'Thato Maboya', 'asus PC', 'J8N0CX17B764344', 'B00076', '2020-11-17 16:02:03'),
(6, 'krugerson', 'Irma Mare', 'asus PC', 'J8N0CX17A73034D', 'B00073', '2020-11-17 16:03:07'),
(7, 'krugerson', 'Mapule Nhlapho', 'asus PC', 'H5N0CX10678020A', 'B00071', '2020-11-17 16:03:46'),
(8, 'krugerson', 'Belinda Mc Bride', 'asus PC', 'H5N0CX10680920B', 'B00070', '2020-11-17 16:04:18'),
(9, 'krugerson', 'Ndzalama Shivambu', 'asus PC', 'J8N0GR052993344', 'B00072', '2020-11-17 16:06:01'),
(10, 'krugerson', 'Jolame Chirwa', 'asus PC', 'K4N0GR01T59314C', 'B00084', '2020-11-17 16:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hospital` varchar(11) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `done` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `username`, `hospital`, `ward`, `issue`, `done`, `created_at`) VALUES
(18, 'Thato', 'hjh', '16', '<p>Thato &amp; Dr Phele to install new computer</p>', 1, '2020-08-10 20:27:02'),
(19, 'Thato', 'hjh', '17', '<p>Thato &amp; Dr Phele to install new computer</p>', 1, '2020-08-10 20:27:21'),
(20, 'Thato', 'hjh', '18', '<p>Thato &amp; Dr Phele to install new computer</p>', 1, '2020-08-10 20:27:39'),
(21, 'Thato', 'hjh', '19', '<p>Thato &amp; Dr Phele to install new computer</p>', 1, '2020-08-10 20:27:58'),
(22, 'Thato', 'hjh', '17', '<p>Belinda to lock a call, since new computer has no wits-user account</p>', 1, '2020-08-10 20:29:37'),
(23, 'Thato', 'chbah', '4', '<p>Belinda to lock a call, since they switched a user account</p>', 1, '2020-08-10 20:30:49'),
(24, 'Phuti', 'chbah', '4', '<p>They need paper</p>', 1, '2020-09-13 07:34:24'),
(25, 'krugerson', 'chbah', '10', '<p>There is no internet</p>', 1, '2020-09-14 07:19:10'),
(26, 'krugerson', 'hjh', '19', '<p>Internet issues and no power for the computer</p>', 1, '2020-11-26 09:39:23'),
(27, 'krugerson', 'cmjah', '396', '<p>They stole power cable and a dongle</p>', 1, '2020-11-26 09:40:04'),
(28, 'krugerson', 'chbah', '10', '<p>The computer still runs on windows 7 hence it is slowly since it is nolonger supported</p>', 1, '2020-11-26 09:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(1, 1, 'Thato', 'solomaboya@gmail.com', '$2y$10$Wzkjg5EVNzcevEnfK2pM5uAZkurbB8DXBWzd.u4Pkn/EoSIouvuxK', '2020-05-17 16:26:13'),
(14, 1, 'krugerson', 'thato.maboya@wits.ac.za', '$2y$10$PyfMCtx3cb3GT0lkxGewfO2dhyFb9XCia3xqLHIJGBmwCyL5xABFq', '2020-09-11 12:21:55'),
(15, 0, 'Phuti', 'phutisuzanmaboya@gmail.com', '$2y$10$wfrljFzPs3JtSEjQJWN7G.TaND.Nc8mFKsbu6ylYSt3/bnaJiUPga', '2020-09-11 12:38:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chbah`
--
ALTER TABLE `chbah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chbah_workstations`
--
ALTER TABLE `chbah_workstations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chbah_workstations_monitor`
--
ALTER TABLE `chbah_workstations_monitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chbah_workstations_printer`
--
ALTER TABLE `chbah_workstations_printer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmjah`
--
ALTER TABLE `cmjah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmjah_workstations`
--
ALTER TABLE `cmjah_workstations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmjah_workstations_monitor`
--
ALTER TABLE `cmjah_workstations_monitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmjah_workstations_printer`
--
ALTER TABLE `cmjah_workstations_printer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleted_items`
--
ALTER TABLE `deleted_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hjh`
--
ALTER TABLE `hjh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hjh_workstations`
--
ALTER TABLE `hjh_workstations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hjh_workstations_monitor`
--
ALTER TABLE `hjh_workstations_monitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hjh_workstations_printer`
--
ALTER TABLE `hjh_workstations_printer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual_hardware`
--
ALTER TABLE `individual_hardware`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
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
-- AUTO_INCREMENT for table `chbah`
--
ALTER TABLE `chbah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `chbah_workstations`
--
ALTER TABLE `chbah_workstations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `chbah_workstations_monitor`
--
ALTER TABLE `chbah_workstations_monitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chbah_workstations_printer`
--
ALTER TABLE `chbah_workstations_printer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cmjah`
--
ALTER TABLE `cmjah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `cmjah_workstations`
--
ALTER TABLE `cmjah_workstations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cmjah_workstations_monitor`
--
ALTER TABLE `cmjah_workstations_monitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cmjah_workstations_printer`
--
ALTER TABLE `cmjah_workstations_printer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `deleted_items`
--
ALTER TABLE `deleted_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hjh`
--
ALTER TABLE `hjh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `hjh_workstations`
--
ALTER TABLE `hjh_workstations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hjh_workstations_monitor`
--
ALTER TABLE `hjh_workstations_monitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hjh_workstations_printer`
--
ALTER TABLE `hjh_workstations_printer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `individual_hardware`
--
ALTER TABLE `individual_hardware`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
