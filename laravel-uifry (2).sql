-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2025 at 09:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-uifry`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Current Appointment',
  `time` varchar(255) DEFAULT NULL,
  `sevrices` varchar(255) DEFAULT NULL,
  `massage` text DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `date`, `status`, `time`, `sevrices`, `massage`, `user_id`, `name`, `phone_number`, `email`, `created_at`, `updated_at`) VALUES
(4, '2025-02-14', 'Coming Appointment', '14:00', 'Root Canal Treatment', 'Hallo', '16', 'Ankit Saini', '423423423423', 'ankit@gmail.com', '2025-02-13 06:16:19', '2025-02-13 12:35:40'),
(5, '2025-02-14', 'Completed', '12:00', 'Root Canal Treatment', 'Hallo Vishal', '16', 'Vishal Saini', '1234567890', 'vishal@gmail.com', '2025-02-13 06:17:18', '2025-02-13 12:34:28'),
(7, '2025-02-14', 'Current Appointment', '12:00', 'Root Canal Treatment', 'HAllo Lalit', '16', 'Lalit Saini', '1234567890', 'sainigopal5871@gmail.com', '2025-02-13 06:24:36', '2025-02-13 12:29:19'),
(14, '2025-02-14', 'Current Appointment', '12:00', 'Prevention', 'yutuytuyt', '16', 'Vishal Saini', '423423423423', 'sainigopal5871@gmail.com', '2025-02-13 12:46:54', '2025-02-13 12:46:54'),
(16, '2025-02-21', 'Current Appointment', '12:00', 'Prevention', 'fdgsfdgfdgfdg', '16', 'Demo Demo', '1234567890', 'Demo@gmail.com', '2025-02-13 13:43:28', '2025-02-13 13:43:28'),
(17, '2025-02-21', 'Current Appointment', '12:00', 'Prevention', 'fdgsfdgfdgfdg', '16', 'Demo Demo', '1234567890', 'Demo@gmail.com', '2025-02-13 13:44:26', '2025-02-13 13:44:26'),
(18, '2025-02-20', 'Current Appointment', '12:06', 'Dental Implants', 'tyrtyrtyrt', '16', 'Vishal Saini', '423423423423', 'protocloudeprotocloude@gmail.com', '2025-02-13 13:47:45', '2025-02-13 13:47:45'),
(19, '2025-02-14', 'Current Appointment', '01:01', 'Teeth Whitening', 'fgfgfggg', '16', 'Ankita Mathur', '1234567890', 'ankita@gmail.com', '2025-02-13 14:03:34', '2025-02-14 06:27:47'),
(20, '2025-02-14', 'Current Appointment', '12:00', 'Dental Implants', 'Hello Everyone', '17', 'Vishal Kumawat', '1234567890', 'vishal@gmail.com', '2025-02-14 04:53:29', '2025-02-14 04:53:29'),
(21, '2025-02-15', 'Current Appointment', '12:00', 'Prevention', 'Prevention', '17', 'Vikas Kumawat', '0987654321', 'vikas@gmail.com', '2025-02-14 04:54:24', '2025-02-14 04:54:24'),
(22, '2025-02-15', 'Current Appointment', '12:00', 'Prevention', 'Prevention', '17', 'Vikas Kumawat', '0987654321', 'vikas@gmail.com', '2025-02-14 04:54:28', '2025-02-14 04:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `blogcoments`
--

CREATE TABLE `blogcoments` (
  `id` int(11) NOT NULL,
  `services_id` varchar(255) DEFAULT NULL,
  `type` text DEFAULT NULL,
  `blog_id` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogcoments`
--

INSERT INTO `blogcoments` (`id`, `services_id`, `type`, `blog_id`, `description`, `name`, `email`, `status`, `created_at`, `updated_at`) VALUES
(5, '5', 'Services Coment', NULL, 'There are many variations of passages the majority have suffered in some injected humour or randomis…', 'Ankit Saini', 'admins@gmail.com', 'active', '2025-02-12 12:27:33', '2025-02-12 12:27:33'),
(6, '5', 'Services Coment', NULL, 'many variations of passages the majority have suffered in some injected humour or randomis…', 'Shekhar Saini', 'ankit.saini@protocloudtechnologies.com', 'active', '2025-02-12 12:27:46', '2025-02-12 12:27:46'),
(7, NULL, 'Blogs Coment', '16', 'many variations of passages the majority have suffered in some injected humour or randomis…	', 'Ankit Saini', 'ankit@gmail.com', 'active', '2025-02-12 13:04:54', '2025-02-12 13:04:54'),
(8, NULL, 'Blogs Coment', '9', 'latest() orders the comments by the created_at column in descending order (newest first).\r\n✅ take(3) ensures only the latest 3 comments are fetched.', 'Women’s fashion', 'protocloudeprotocloude@gmail.com', 'active', '2025-02-12 13:07:03', '2025-02-14 05:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_cat` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `auther` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_cat`, `title`, `description`, `image`, `auther`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Self Care', 'Care of your Teethh', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1739343129.webp', '~Anita Jackson', 'active', '2025-02-12 06:52:09', '2025-02-14 05:15:32'),
(10, 'Self Care', 'Care of your Teeth', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1739343198.webp', '~Anita Jackson', 'active', '2025-02-12 06:53:18', '2025-02-13 08:06:02'),
(11, 'Self Care', 'Care of your Teeth', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1739343251.webp', '~Anita Jackson', 'active', '2025-02-12 06:54:11', '2025-02-13 08:06:09'),
(12, 'Self Care', 'Care of your Teeth', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1739343290.webp', '~Anita Jackson', 'active', '2025-02-12 06:54:50', '2025-02-13 08:06:16'),
(13, 'Self Care', 'Care of your Teeth', '<p>Lorem ipsum dolor sit amet consectetur.</p>', '1739343336.webp', '~Anita Jackson', 'active', '2025-02-12 06:55:36', '2025-02-13 09:03:35'),
(14, 'Self Care', 'Care of your Teeth', '<p>Lorem ipsum dolor sit amet consectetur.</p>', '1739343384.webp', '~Anita Jackson', 'active', '2025-02-12 06:56:24', '2025-02-13 09:03:40'),
(15, 'Self Care', 'Care of your Teeth', '<p>Lorem ipsum dolor sit amet consectetur.</p>', '1739343414.webp', 'Care of your Teeth', 'active', '2025-02-12 06:56:54', '2025-02-13 09:03:43'),
(16, 'Self Care', 'Care of your Teeth', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1739343444.webp', '~Anita Jackson', 'active', '2025-02-12 06:57:24', '2025-02-13 09:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `blog_cats`
--

CREATE TABLE `blog_cats` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_cats`
--

INSERT INTO `blog_cats` (`id`, `cat_name`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Self Care', 'active', '2025-02-13 10:13:38', '2025-02-13 10:13:38'),
(4, 'cat_name', 'active', '2025-02-13 10:21:34', '2025-02-13 10:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `services` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `date`, `time`, `services`, `created_at`, `updated_at`) VALUES
(7, 'Ankit', 'ankit@gmail.com', '423423423423', 'We use only the best quality materials on the market in order to provide the best products to our patients, So don’t worry about anything and book yourself.', '2025-02-12', '02:00', 'Teeth Whitening', '2025-02-11 08:15:53', '2025-02-14 06:28:59'),
(8, 'demo', 'sainigopal5871@gmail.com', '423423423423', 'We use only the best quality materials on the market in order to provide the best products to our patients, So don’t worry about anything and book yourself.', '2025-02-13', '12:02', 'Cosmetic Dentist', '2025-02-11 12:39:07', '2025-02-14 06:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `email_subscribers`
--

CREATE TABLE `email_subscribers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email_subscribers`
--

INSERT INTO `email_subscribers` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(4, 'Ankit Saini', 'sainigopal5871@gmail.com', '2025-02-11 12:27:03', '2025-02-11 12:27:03'),
(5, 'Ankit Saini', 'ankit@gmail.com', '2025-02-11 12:29:26', '2025-02-11 12:29:26'),
(6, 'Ankit Saini', 'ankit@gmail.com', '2025-02-11 12:29:28', '2025-02-11 12:29:28'),
(7, 'Ankit Saini', 'ankit@gmail.com', '2025-02-11 12:30:19', '2025-02-11 12:30:19'),
(8, 'Ankit Saini', 'Ankit@gmail.com', '2025-02-11 12:31:31', '2025-02-11 12:31:31'),
(9, 'Ankit Saini', 'ankit@gmail.com', '2025-02-11 12:32:31', '2025-02-11 12:32:31'),
(10, 'Ankit Saini', 'ankit@gmail.com', '2025-02-11 12:33:06', '2025-02-11 12:33:06'),
(11, 'Ankit Saini', 'ankit@gmail.com', '2025-02-11 12:33:07', '2025-02-11 12:33:07'),
(12, 'Ankit Saini', 'sainigopal5871@gmail.com', '2025-02-13 14:10:33', '2025-02-13 14:10:33'),
(13, 'Ankit Saini', 'sainigopal5871@gmail.com', '2025-02-13 14:17:12', '2025-02-13 14:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Can I see who reads my email campaigns?', 'Lorem ipsum dolor sit amet consectetur. Convallis cras placerat dignissim aliquam massa. Aliquet volutpat rhoncus in convallis consectetur. Cras adipiscing volutpat non hac enim odio enim.', 'active', '2025-02-07 06:35:08', '2025-02-07 06:41:04'),
(3, 'Do you offer non-profit discounts?', 'Lorem ipsum dolor sit amet consectetur. Convallis cras placerat dignissim aliquam massa.\r\n Aliquet volutpat rhoncus in convallis consectetur. Cras adipiscing volutpat non hac enim odio enim.', 'active', '2025-02-08 07:14:43', '2025-02-08 07:14:43'),
(4, 'Can I see who reads my email campaigns?', 'Lorem ipsum dolor sit amet consectetur. Convallis cras placerat dignissim aliquam massa.\r\nAliquet volutpat rhoncus in convallis consectetur. Cras adipiscing volutpat non hac enim odio enim.', 'active', '2025-02-08 07:15:18', '2025-02-08 07:15:18'),
(5, 'Can I see who reads my email campaigns?', 'Lorem ipsum dolor sit amet consectetur. Convallis cras placerat dignissim aliquam massa.\r\nAliquet volutpat rhoncus in convallis consectetur. Cras adipiscing volutpat non hac enim odio enim.', 'active', '2025-02-08 07:15:57', '2025-02-08 07:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `frontusers`
--

CREATE TABLE `frontusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT '1727852246.webp',
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT=' ';

--
-- Dumping data for table `frontusers`
--

INSERT INTO `frontusers` (`id`, `name`, `phone`, `email`, `password`, `image`, `status`, `created_at`, `updated_at`) VALUES
(16, 'Ankit Saini', '1234567890', 'ankit@gmail.com', '$2y$12$ghAqgipeVp8Z9GLKcyttQuADL.fjkyfPFP74DibHFR5AR4tBildfC', '1739516294.webp', 'active', '2025-02-10 11:57:18', '2025-02-14 06:58:14'),
(17, 'Vishal', NULL, 'lalakumawat515@gmail.com', '$2y$12$ScYMoF1ve7d8IkJcAkNrF.DUMylTXCG/XH4bDQTa67iUkKvnSA2Aq', '1727852246.webp', 'active', '2025-02-10 12:20:28', '2025-02-10 12:20:28'),
(18, 'Ankita Mathur', NULL, 'ankita@gmail.com', '$2y$12$Po2P3Pte0P/f6ePUbf1VZ.VvH/pmQeqbzim.PiQAFjzrsJ0DChZcW', '1727852246.webp', 'active', '2025-02-11 08:26:39', '2025-02-11 08:26:39'),
(19, 'Vishal', NULL, 'vishalkumawatjob640@gmail.com', '$2y$12$bM17sjs0gNRwslVghglqv.lMRVT/YCqcmOAnOKR7AF1fEq/GKNBna', '1727852246.webp', 'active', '2025-02-12 04:23:14', '2025-02-12 04:29:24'),
(21, 'sgfsdg', NULL, 'admin_hire_space@sgfd.fgd', '$2y$12$O42uYyaiSCr2.zDScxFyjOTPMPrEbIsEmTul9etM5Jb4u/ko1zdV6', '1727852246.webp', 'active', '2025-02-12 05:34:45', '2025-02-12 05:34:45'),
(22, 'vishal', '1234567890', 'vishal@gmail.com', '$2y$12$BZr03wxbnkVQdAH4VpOuyeuwJAxVBsWa9ZaKl81DsYUhnLCWdcU8q', '1727852246.webp', 'active', '2025-02-13 13:38:59', '2025-02-13 13:49:39'),
(23, 'demo', '1234567890', 'admin@gmail.com', '$2y$12$1rJrJ0K//VPaMOGe4grHj.NjhmwoaX5JkGuQA0HlVsJNME0IKHfoK', '1727852246.webp', 'active', '2025-02-13 13:49:26', '2025-02-14 05:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `manage_abouts`
--

CREATE TABLE `manage_abouts` (
  `id` int(11) NOT NULL,
  `mission_statement` text DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `latest_technology_title` varchar(255) DEFAULT NULL,
  `latest_technology_description` text DEFAULT NULL,
  `latest_technology_sub_description` text DEFAULT NULL,
  `latest_technology_image` varchar(255) DEFAULT NULL,
  `about_patients_overview_title` varchar(255) DEFAULT NULL,
  `about_patients_overview_video` varchar(255) DEFAULT NULL,
  `about_patients_overview_description` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manage_abouts`
--

INSERT INTO `manage_abouts` (`id`, `mission_statement`, `about_image`, `latest_technology_title`, `latest_technology_description`, `latest_technology_sub_description`, `latest_technology_image`, `about_patients_overview_title`, `about_patients_overview_video`, `about_patients_overview_description`, `created_at`, `updated_at`) VALUES
(1, '<p>At Northern Heights Dental, people come first. We help each of our patients to achieve optimal wellness and health by using a whole body approach to oral health. This means not just focusing on cavities, but focusing on; cranio-facial development, bite and joint balance, oral flora, proper muscle balance/function, and bio-compatibility of dental materials. Great care and planning ensure that everything we do helps promote overall health and well being.</p>\r\n\r\n<h3>More than anything else we love creating happy, healthy smiles.<br />\r\n&nbsp;</h3>\r\n\r\n<p>We work hard to stay up to date with the most advanced techniques and technologies to ensure that our patients receive the best care possible. Our office utilizes 3D CBCT radiographs to allow for guided surgical and endodontic protocols. This enables these procedures to performed digitally before they are performed surgically to ensure optimal results. 3D imaging also is utilized for the analysis of airway growth and development. We also use the best 3D optical scanner for all of our dental restoration and Invisalign impressions. Dr Williams is a strong advocate for using microsurgical techniques, this means less discomfort and faster healing times.</p>', '1739280907.webp', 'Latest Technology', '<h2>The Future of Dentistry is Digital:</h2>\r\n\r\n<p>Dentists today already utilize software to capture insights in clinical decision-making. These practices will continue to develop to integrate AI algorithms that enable clinicians to find the best modalities for their patients.<br />\r\n<br />\r\nIn the 21st century, digital radiographs and 3D imaging have become the standard of dental care. Using an intraoral scanner with digitized data for 3D dental impressions (vs. polyvinyl siloxane and rubber base impressions) for a dental crown is now commonplace.<br />\r\n<br />\r\nArtificial intelligence is laying the groundwork for the future of the dental industry. Dental robots can now perform functions such as filling cavities and cleaning or extracting teeth</p>', 'Thanks to major technological advancements, dentistry allows treating the most complex cases with less time and more efficiency.', '1739280891.webp', 'We’re welcoming new patients and can’t wait to meet you.', 'https://www.youtube.com/embed/zBjJUV-lzHo?si=KSjgUmJOJZpl6ujl', 'We use only the best quality materials on the market in order to provide the best products to our patients.', '2025-02-07 10:45:44', '2025-02-14 05:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `massage` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages_contant_manages`
--

CREATE TABLE `pages_contant_manages` (
  `id` int(11) NOT NULL,
  `home_page_content` text DEFAULT NULL,
  `services_page_content` longtext DEFAULT NULL,
  `blog_page_content` longtext DEFAULT NULL,
  `contant_page_content` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages_contant_manages`
--

INSERT INTO `pages_contant_manages` (`id`, `home_page_content`, `services_page_content`, `blog_page_content`, `contant_page_content`, `created_at`, `updated_at`) VALUES
(1, '{\r\n    \"hero_section\": {\r\n        \"banner_title\": \"Get Ready For Your Best Ever Dental Experience!\",\r\n        \"description\": \"We use only the best quality materials on the market in order to provide the best products to our patients, So don\\u2019t worry about anything and book yourself.\",\r\n        \"bannerImage\": \"1739117801_bannerimage.png\",\r\n        \"emergency_number\": \"0900-78601\",\r\n        \"linkedin\": {\r\n            \"name\": \"Thomas Daniel\",\r\n            \"description\": \"Top Quailty dental treatment done by field experts, Highly Recommended for everyone\",\r\n            \"profile_link\": \"https:\\/\\/www.linkedin.com\\/in\\/ankitsaini952005\",\r\n            \"profile_image\": \"1739118925_linkedin.svg\"\r\n        }\r\n    },\r\n    \"home_section\": {\r\n        \"email_subscribe\": {\r\n            \"title\": \"Get Updates For Our Services\",\r\n            \"description\": \"We use only the best quality materials on the market in order to provide the best products to our patients, So don\\u2019t worry about anything and book yourself.\",\r\n            \"image\": \"1739090038_email_subscribe.webp\"\r\n        },\r\n        \"dental_treatments_content\": \"<h2>Why Choose Smile For All Your Dental Treatments?<\\/h2>\\r\\n\\r\\n<p>We use only the best quality materials on the market in order to provide the best products to our patients.<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li><img alt=\\\"uifry-list-icon\\\" src=\\\"https:\\/\\/dmprojects.xyz\\/ankitsaini\\/laravel-uifry\\/public\\/front_assets\\/public\\/images\\/uifry-list-icon.svg\\\" style=\\\"height:20px; width:20px\\\" \\/> Top quality dental team<\\/li>\\r\\n\\t<li><img alt=\\\"uifry-list-icon\\\" src=\\\"https:\\/\\/dmprojects.xyz\\/ankitsaini\\/laravel-uifry\\/public\\/front_assets\\/public\\/images\\/uifry-list-icon.svg\\\" style=\\\"height:20px; width:20px\\\" \\/> State of the art dental services<\\/li>\\r\\n\\t<li><img alt=\\\"uifry-list-icon\\\" src=\\\"https:\\/\\/dmprojects.xyz\\/ankitsaini\\/laravel-uifry\\/public\\/front_assets\\/public\\/images\\/uifry-list-icon.svg\\\" style=\\\"height:20px; width:20px\\\" \\/> Discount on all dental treatment<\\/li>\\r\\n\\t<li><img alt=\\\"uifry-list-icon\\\" src=\\\"https:\\/\\/dmprojects.xyz\\/ankitsaini\\/laravel-uifry\\/public\\/front_assets\\/public\\/images\\/uifry-list-icon.svg\\\" style=\\\"height:20px; width:20px\\\" \\/> Enrollment is quick and easy<\\/li>\\r\\n<\\/ul>\",\r\n        \"dental_treatments_image\": \"1739120324_dental_treatments.webp\",\r\n        \"smile_content\": \"<h2>Leave Your Worries At The Door And Enjoy A&nbsp;Healthier&nbsp;, More&nbsp;Precise Smile<\\/h2>\\r\\n\\r\\n<p>We use only the best quality materials on the market in order to provide the best products to our patients, So don&rsquo;t worry about anything and book yourself.<\\/p>\",\r\n        \"smile_image\": \"1739120403_smile.webp\",\r\n        \"video\": {\r\n            \"title\": \"We\\u2019re Welcoming New Patients And Can\\u2019t Wait To Meet You.\",\r\n            \"description\": \"We use only the best quality materials on the market in order to provide the best products to our patients.\",\r\n            \"url\": \"https:\\/\\/www.youtube.com\\/embed\\/zBjJUV-lzHo?si=KSjgUmJOJZpl6ujl\"\r\n        },\r\n        \"footer\": {\r\n            \"title\": \"Dental Website That\'s Gonna Shake The Game Rules Up.\",\r\n            \"description\": \"We use only the best quality materials on the market in order to provide the best products to our patients.\",\r\n            \"image\": \"1739120403_footer.webp\"\r\n        }\r\n    }\r\n}', '{\n    \"banner_title\": \"Leave Your Worries At The Door And Enjoy A Healthier, More Precise Smile\",\n    \"banner_description\": \"We use only the best quality materials on the market in order to provide the best products to our patients, So don\\u2019t worry about anything and book yourself.\",\n    \"bannerImage\": \"1739514225_bannerimage.webp\"\n}', NULL, '{\r\n    \"hero_section\": {\r\n        \"hero_section_title\": \"Get in Touch\",\r\n        \"description\": \"Book an Appointment to treat your teeth right now.\"\r\n    },\r\n    \"home_section\": {\r\n        \"home_section_office_timings\": \"Monday - Saturday (9:00am to 5pm) Sunday (Closed)\",\r\n        \"emai_address\": \"Smile01@gmail.com\",\r\n        \"home_section_phone_number\": \"090078601\",\r\n        \"home_section_faq_title\": \"Frequently Ask Question\",\r\n        \"home_section_faq_description\": \"We use only the best quality materials on the market in order to provide the best products to our patients.\"\r\n    }\r\n}', '2025-02-09 00:00:00', '2025-02-14 06:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`id`, `email`, `token`, `created_at`) VALUES
(15, 'ankit@gmail.com', '$2y$12$jGFSLBg4QF3okfQ5k4Z4SuNQiTJQuImwBpGqZzGs5tB6IKgL2fe4W', '2024-11-12 11:05:38'),
(16, 'protocloudeprotocloude@gmail.com', '$2y$12$2E6fdKsyCZ3kwz6VN34bNeIhKeFdhhsFkC4d8Qg9sK2VMgeYzWeTy', '2025-02-06 12:41:12'),
(20, 'ankit.saini@protocloudtechnologies.com', '$2y$12$IIT3675mKPcE3tFIe4cUz.DGfmVgDOVkioddjMY2KWAxeFYM0T32u', '2025-02-11 10:03:21'),
(25, 'sainigopal5871@gmail.com', '$2y$12$E3v/Sr.jrXx/yeA0gHtJC.T1x1ZjIBztsa1TD0QKUkCtOx6It6/aK', '2025-02-11 13:26:21'),
(29, 'vishalkumawatjob640@gmail.com', '$2y$12$F3U5F4VMcVTDdFjr7ql1WuMsmEWw4i5B8QTY9olSkihqLPjNYGVh2', '2025-02-12 04:28:24'),
(34, 'lalakumawat515@gmail.com', '$2y$12$uO/wm1A49S68LHm8RLY6T.ZzKJhrg4lVnx4UnzACxwDTpGX8WjKRa', '2025-02-13 12:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Root Canal Treatment', '<p>A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;</p>', NULL, '1738991392.svg', 'active', '2025-02-08 05:09:52', '2025-02-12 09:43:41'),
(4, 'Cosmetic Dentist', '<p>A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;</p>', NULL, '1738991461.svg', 'active', '2025-02-08 05:10:39', '2025-02-12 09:43:49'),
(5, 'Dental Implants', '<p>A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;</p>', NULL, '1738991511.svg', 'active', '2025-02-08 05:11:51', '2025-02-12 09:44:00'),
(6, 'Teeth Whitening', '<p>A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;</p>', NULL, '1738991575.svg', 'active', '2025-02-08 05:12:55', '2025-02-12 09:44:14'),
(7, 'Emergency Dentistry', '<p>A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;</p>', NULL, '1738991621.svg', 'active', '2025-02-08 05:13:41', '2025-02-12 09:44:21'),
(8, 'Prevention', '<p>A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&nbsp;it consists of three main parts:&nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&nbsp;</p>', NULL, '1738991659.svg', 'active', '2025-02-08 05:14:19', '2025-02-12 09:44:29'),
(9, 'Teeth Whitening', '<p>A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;</p>', NULL, '1739441632.svg', 'active', '2025-02-13 10:13:52', '2025-02-13 10:13:52'),
(10, 'Root Canal Treatment', '<p>A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;</p>', NULL, '1739441855.svg', 'active', '2025-02-13 10:17:35', '2025-02-13 10:17:35'),
(11, 'Cosmetic Dentist', '<p>A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;</p>', NULL, '1739441919.svg', 'active', '2025-02-13 10:18:39', '2025-02-13 10:18:39'),
(12, 'Emergency Dentistry', '<p>A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;nbsp;it consists of three main parts:&amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;nbsp;</p>', NULL, '1739441965.svg', 'active', '2025-02-13 10:19:25', '2025-02-13 10:19:25'),
(13, 'Dental Implants', '<p>A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;amp;nbsp;it consists of three main parts:&amp;amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;amp;nbsp;it consists of three main parts:&amp;amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;amp;nbsp;it consists of three main parts:&amp;amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;amp;nbsp;it consists of three main parts:&amp;amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;amp;nbsp;</p>', NULL, '1739442013.svg', 'active', '2025-02-13 10:20:13', '2025-02-13 10:20:13'),
(14, 'Prevention', '<p>A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;amp;nbsp;it consists of three main parts:&amp;amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;amp;nbsp;it consists of three main parts:&amp;amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;amp;nbsp;it consists of three main parts:&amp;amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;amp;nbsp;it consists of three main parts:&amp;amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;amp;nbsp;</p>', NULL, '1739442086.svg', 'active', '2025-02-13 10:21:26', '2025-02-13 10:21:26'),
(15, 'Teeth Whitening', '<p>A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;amp;nbsp;it consists of three main parts:&amp;amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;amp;nbsp;it consists of three main parts:&amp;amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;amp;nbsp;it consists of three main parts:&amp;amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;amp;nbsp;A dental implant is a surgical fixture, typically made of titanium, that replaces the root of a missing tooth, allowing a dental professional to attach an artificial tooth (crown) on top, effectively mimicking the function and appearance of a natural tooth;&amp;amp;nbsp;it consists of three main parts:&amp;amp;nbsp;the implant post inserted into the jawbone, an abutment that connects the implant to the crown, and the crown itself, which is the visible part of the tooth restoration;&amp;amp;nbsp;dental implants are considered a long-term solution for replacing missing teeth and can be used to replace single teeth, multiple teeth, or support dentures.&amp;amp;nbsp;</p>', NULL, '1739442144.svg', 'active', '2025-02-13 10:22:24', '2025-02-13 10:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `admin_penal_logo` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contect_phone` varchar(255) DEFAULT NULL,
  `site_description` text DEFAULT NULL,
  `youtub_url` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `linkedIn_url` varchar(255) DEFAULT NULL,
  `site_footerlogo` varchar(255) NOT NULL,
  `site_address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_logo`, `admin_penal_logo`, `contact_email`, `contect_phone`, `site_description`, `youtub_url`, `facebook_url`, `twitter_url`, `instagram_url`, `linkedIn_url`, `site_footerlogo`, `site_address`, `created_at`, `updated_at`) VALUES
(1, 'uifry.com', '1738934176.svg', '1738846592.png', 'uifry@gmail.com', '43434343', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standa</p>', 'http://127.0.0.1:8000/settings/site-settings', 'http://127.0.0.1:8000/settings/site-settings', 'http://127.0.0.1:8000/settings/site-settings', 'http://127.0.0.1:8000/settings/site-settings', 'http://127.0.0.1:8000/settings/site-settings', '1738934176.svg', 'WashingtonDC,USA', '2024-10-24 17:17:14', '2025-02-11 05:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `specialists`
--

CREATE TABLE `specialists` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `linkdin_profile_link` text DEFAULT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specialists`
--

INSERT INTO `specialists` (`id`, `name`, `linkdin_profile_link`, `specialization`, `description`, `experience`, `contact_number`, `email`, `profile_photo`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Jim Carry', 'https://www.linkedin.com/in/ankitsaini952005', 'Orthodontist.', '<p>Dr. Brent provides general and cosmetic dentistry services at Northern Heights Dental in Flagstaff, Arizona. He has extensive experience in general and cosmetic dentistry, including full mouth restoration, dental veneers, crowns, bridges, dental implants, wisdom teeth extractions, Invisalign, and dentures. Dr. Brent and his younger sister grew up in Massachusetts with a mother who worked as a hygienist and a grandfather who was a general dentist.</p>', '5 yrars', '2323453216', 'Orthodontist.@gmail.com', '1738994698.webp', 'active', '2025-02-08 06:04:58', '2025-02-12 05:09:18'),
(4, 'Wade Warren', 'https://www.linkedin.com/in/ankitsaini952005', 'Endodontist.', '<p>Dr. Ashish J. Vashi has been practicing general, cosmetic and implant dentistry in California for over 18 years. He believes in giving the highest quality dentistry in a comfortable, caring environment. He strives to get to know his patients, not just their teeth.including full mouth restoration, dental veneers, crowns, bridges, dental implants, wisdom teeth extractions, Invisalign, and dentures.</p>', '3 years', '33223232323', 'Endodontist.@gmai.com', '1738994766.webp', 'active', '2025-02-08 06:06:06', '2025-02-12 05:09:26'),
(5, 'James Connors', 'https://www.linkedin.com/in/ankitsaini952005', 'Periodontist.', '<p>Dr. James Connors. Vashi has been practicing general, cosmetic and implant dentistry in California for over 18 years. He believes in giving the highest quality dentistry in a comfortable, caring environment. He strives to get to know his patients, not just their teeth.including full mouth restoration, dental veneers, crowns, bridges, dental implants, wisdom teeth extractions, Invisalign, and dentures.</p>', '4 years', '2323232323', 'Jame@gmail.com', '1738994873.webp', 'active', '2025-02-08 06:07:53', '2025-02-12 05:09:34'),
(6, 'Jacob Jones', 'https://www.linkedin.com/in/ankitsaini952005', 'Pediatric Dentist.', '<p>When it comes to oral surgeons, few can compare to the modern-day legend that is Dr. James Connors. As our oral and maxillofacial surgery specialist, Dr. Connors will brighten your day with his seasoned expertise, welcoming conversations, and &ndash; of course &ndash; his signature rotation of fun bowties. Dr. Connors and his younger sister grew up in Massachusetts with a mother who worked as a hygienist and a grandfather who was a general dentist.</p>', '2323238944', '3223345674', 'dm@gmail.com', '1738994953.webp', 'active', '2025-02-08 06:09:13', '2025-02-12 05:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `feedback` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `feedback`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Thomas daniel', 'Phosfluorescently synergize covalent outsourcing through functional strategic theme areas. Assertively scale strategic portals without distinctive relationships. Holisticly cultivate tactical e-services before fully researched sources.', '1738995812.webp', 'active', '2025-02-08 06:23:32', '2025-02-08 06:23:32'),
(5, 'Alena Alex', 'Phosfluorescently synergize covalent outsourcing through functional strategic theme areas. Assertively scale strategic portals without distinctive relationships. Holisticly cultivate tactical e-services before fully researched sources.', '1738995833.webp', 'active', '2025-02-08 06:23:53', '2025-02-08 06:23:53'),
(6, 'Thomas Edison', 'Phosfluorescently synergize covalent outsourcing through functional strategic theme areas. Assertively scale strategic portals without distinctive relationships. Holisticly cultivate tactical e-services before fully researched sources.', '1738995851.webp', 'active', '2025-02-08 06:24:11', '2025-02-08 06:24:11'),
(7, 'Alex', 'Phosfluorescently synergize covalent outsourcing through\r\nfunctional strategic theme areas. Assertively scale strategic portals without distinctive relationships.Holisticly cultivate tactical e-services before fully researched sources.', '1738995939.webp', 'active', '2025-02-08 06:25:39', '2025-02-08 06:25:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `profile_img` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `remember_token`, `email`, `password`, `status`, `profile_img`, `created_at`, `updated_at`) VALUES
(3, 'Admin', '2pKwlRdx2pVyvC0UnjooPMlGT2CzLsPuzobZ9Qv5enD1Xo3md1LDaYmiSuaj', 'admin@gmail.com', '$2y$12$i4IBUmlP/y4LtFdQNtWsH..SQJnB/3a4CQeKGGjf.P5OqaReT/MJG', 1, '1739516508.png', '2024-09-25 08:08:31', '2025-02-14 07:01:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogcoments`
--
ALTER TABLE `blogcoments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_cats`
--
ALTER TABLE `blog_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_subscribers`
--
ALTER TABLE `email_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontusers`
--
ALTER TABLE `frontusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_abouts`
--
ALTER TABLE `manage_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages_contant_manages`
--
ALTER TABLE `pages_contant_manages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialists`
--
ALTER TABLE `specialists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `blogcoments`
--
ALTER TABLE `blogcoments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blog_cats`
--
ALTER TABLE `blog_cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `email_subscribers`
--
ALTER TABLE `email_subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `frontusers`
--
ALTER TABLE `frontusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `manage_abouts`
--
ALTER TABLE `manage_abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages_contant_manages`
--
ALTER TABLE `pages_contant_manages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specialists`
--
ALTER TABLE `specialists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
