-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2025 at 02:20 PM
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

INSERT INTO `appointments` (`id`, `user_id`, `name`, `phone_number`, `email`, `created_at`, `updated_at`) VALUES
(1, '2', 'Ankit Saini', '2423232323', 'ankit@gmail.com', '2025-02-07 16:45:03', '2025-02-07 11:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `blogcoments`
--

CREATE TABLE `blogcoments` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `blog_id` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogcoments`
--

INSERT INTO `blogcoments` (`id`, `user_id`, `blog_id`, `description`, `name`, `email`, `website`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Ankit', 'yuiyuiyui', 'This is My blog', 'Name', 'email@gmail.com', 'email@gmail.com', 'inactive', '2024-10-25 09:22:10', '2024-10-25 09:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
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

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `auther`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Care of your Teeth', '<p>Lorem ipsum dolor sit amet consectetur.</p>', '1739005075.webp', '~Anita Jackson', 'active', '2025-02-08 08:57:55', '2025-02-08 10:12:55'),
(4, 'Care of your Teeth', '<p>Lorem ipsum dolor sit amet consectetur.</p>', '1739005098.webp', '~Anita Jackson', 'active', '2025-02-08 08:58:18', '2025-02-08 10:13:01'),
(5, 'Care of your Teeth', '<p>Lorem ipsum dolor sit amet consectetur.</p>', '1739005120.webp', '~Anita Jackson', 'active', '2025-02-08 08:58:40', '2025-02-08 10:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`, `phone`, `message`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Ankit', 'Saini', 'ankit@gmail.com', '2343213456', 'We use only the best quality materials on the market in order to provide the best products to our patients, So don’t worry about anything and book yourself.', '2025-02-20', '2025-02-07 16:34:40', '2025-02-07 11:05:03');

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
(6, 'USER TEST', '1234567890', 'TEST@GMAIL.COM', '$2y$12$dKgSwPR6cul42E.FM.6IyOMkDXypvRmS8zSDO/kLxfphvjQA8rkYa', '1731403517.webp', 'inactive', '2024-10-02 00:00:00', '2024-11-12 09:25:17'),
(12, 'Ankit Saini', '123456789', 'protocloudeprotocloude@gmail.com', '$2y$12$Acf.xyuM2zqjXmqZC/eUSO.dHOb2Pr110Pxgd/LjcybDyhvB4MqU2', '1727852246.webp	', 'active', '2024-11-11 09:35:26', '2024-11-12 08:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_manage`
--

CREATE TABLE `home_page_manage` (
  `id` int(11) NOT NULL,
  `hero_section_banner_title` text DEFAULT NULL,
  `hero_section_description` text DEFAULT NULL,
  `hero_section_emergency_number` text DEFAULT NULL,
  `hero_section_linkedin_name` int(11) DEFAULT NULL,
  `hero_section_linkedin_description` text DEFAULT NULL,
  `hero_section_linkedin_profilr_link` text DEFAULT NULL,
  `home_section_email_subscribe_title` text DEFAULT NULL,
  `home_section_email_subscribe_description` text DEFAULT NULL,
  `home_section_email_subscribe_image` text DEFAULT NULL,
  `home_section_dental_treatments_contant` text DEFAULT NULL,
  `home_section_dental_treatments_image` text DEFAULT NULL,
  `home_section_smile_title` text DEFAULT NULL,
  `home_section_smile_description` text DEFAULT NULL,
  `home_section_video_title` text NOT NULL,
  `home_section_video_description` text DEFAULT NULL,
  `home_section_video_url` text DEFAULT NULL,
  `home_section_footer_title` text DEFAULT NULL,
  `home_section_footer_description` text DEFAULT NULL,
  `home_section_footer_image` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, '<p>At Northern Heights Dental, people come first. We help each of our patients to achieve optimal wellness and health by using a whole body approach to oral health. This means not just focusing on cavities, but focusing on; cranio-facial development, bite and joint balance, oral flora, proper muscle balance/function, and bio-compatibility of dental materials. Great care and planning ensure that everything we do helps promote overall health and well being.</p>\r\n\r\n<h2>More than anything else we love creating happy, healthy smiles.<br />\r\n&nbsp;</h2>\r\n\r\n<p>We work hard to stay up to date with the most advanced techniques and technologies to ensure that our patients receive the best care possible. Our office utilizes 3D CBCT radiographs to allow for guided surgical and endodontic protocols. This enables these procedures to performed digitally before they are performed surgically to ensure optimal results. 3D imaging also is utilized for the analysis of airway growth and development. We also use the best 3D optical scanner for all of our dental restoration and Invisalign impressions. Dr Williams is a strong advocate for using microsurgical techniques, this means less discomfort and faster healing times.</p>', '1738907844.jpg', 'Latest Technology', '<h2>The Future of Dentistry is Digital:</h2>\r\n\r\n<p>Dentists today already utilize software to capture insights in clinical decision-making. These practices will continue to develop to integrate AI algorithms that enable clinicians to find the best modalities for their patients.<br />\r\n<br />\r\nIn the 21st century, digital radiographs and 3D imaging have become the standard of dental care. Using an intraoral scanner with digitized data for 3D dental impressions (vs. polyvinyl siloxane and rubber base impressions) for a dental crown is now commonplace.<br />\r\n<br />\r\nArtificial intelligence is laying the groundwork for the future of the dental industry. Dental robots can now perform functions such as filling cavities and cleaning or extracting teeth</p>', 'Thanks to major technological advancements, dentistry allows treating the most complex cases with less time and more efficiency.', '1738907825.jpg', 'We’re welcoming new patients and can’t wait to meet you.', 'https://www.youtube.com/embed/zBjJUV-lzHo?si=KSjgUmJOJZpl6ujl', 'We use only the best quality materials on the market in order to provide the best products to our patients.', '2025-02-07 10:45:44', '2025-02-07 06:02:31');

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
(16, 'protocloudeprotocloude@gmail.com', '$2y$12$2E6fdKsyCZ3kwz6VN34bNeIhKeFdhhsFkC4d8Qg9sK2VMgeYzWeTy', '2025-02-06 12:41:12');

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
(3, 'Root Canal Treatment', '<p>Root canal treatment (endodontics) is a dental procedure used to treat infection at the centre of a tooth.</p>', '23', '1738991392.svg', 'active', '2025-02-08 05:09:52', '2025-02-08 05:09:52'),
(4, 'Cosmetic Dentist', '<p>Cosmetic dentistry is the branch of dentistry that focuses on improving the appearance of your smile.</p>', '34', '1738991461.svg', 'active', '2025-02-08 05:10:39', '2025-02-08 05:11:01'),
(5, 'Dental Implants', '<p>A dental implant is an artificial tooth root that&rsquo;s placed into your jaw to hold a prosthetic tooth or bridge.</p>', '11', '1738991511.svg', 'active', '2025-02-08 05:11:51', '2025-02-08 05:11:51'),
(6, 'Teeth Whitening', '<p>It&#39;s never been easier to brighten your smile at home. There are all kinds of products you can try.</p>', '23', '1738991575.svg', 'active', '2025-02-08 05:12:55', '2025-02-08 05:12:55'),
(7, 'Emergency Dentistry', '<p>Cosmetic dentistry is the branch of dentistry that focuses on improving the appearance of your smile.</p>', '23', '1738991621.svg', 'active', '2025-02-08 05:13:41', '2025-02-08 05:13:41'),
(8, 'Prevention', '<p>Preventive dentistry is dental care that helps maintain good oral health. a combination of regular dental.</p>', '66', '1738991659.svg', 'active', '2025-02-08 05:14:19', '2025-02-08 05:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `site_favicon` varchar(255) DEFAULT NULL,
  `admin_penal_logo` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contect_phone` varchar(255) DEFAULT NULL,
  `site_description` text DEFAULT NULL,
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

INSERT INTO `settings` (`id`, `site_name`, `site_logo`, `site_favicon`, `admin_penal_logo`, `contact_email`, `contect_phone`, `site_description`, `facebook_url`, `twitter_url`, `instagram_url`, `linkedIn_url`, `site_footerlogo`, `site_address`, `created_at`, `updated_at`) VALUES
(1, 'My Site', '1738934176.svg', '1731406778.svg', '1738846592.png', 'Site@gmail.com', '43434343', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standa</p>', 'http://127.0.0.1:8000/settings/site-settings', 'http://127.0.0.1:8000/settings/site-settings', 'http://127.0.0.1:8000/settings/site-settings', 'http://127.0.0.1:8000/settings/site-settings', '1738934176.svg', 'WashingtonDC,USA', '2024-10-24 17:17:14', '2025-02-07 13:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `specialists`
--

CREATE TABLE `specialists` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
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

INSERT INTO `specialists` (`id`, `name`, `specialization`, `description`, `experience`, `contact_number`, `email`, `profile_photo`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Jim Carry', 'Orthodontist.', '<p>Dr. Brent provides general and cosmetic dentistry services at Northern Heights Dental in Flagstaff, Arizona. He has extensive experience in general and cosmetic dentistry, including full mouth restoration, dental veneers, crowns, bridges, dental implants, wisdom teeth extractions, Invisalign, and dentures. Dr. Brent and his younger sister grew up in Massachusetts with a mother who worked as a hygienist and a grandfather who was a general dentist.</p>', '5 yrars', '2323453216', 'Orthodontist.@gmail.com', '1738994698.webp', 'active', '2025-02-08 06:04:58', '2025-02-08 06:04:58'),
(4, 'Wade Warren', 'Endodontist.', '<p>Dr. Ashish J. Vashi has been practicing general, cosmetic and implant dentistry in California for over 18 years. He believes in giving the highest quality dentistry in a comfortable, caring environment. He strives to get to know his patients, not just their teeth.including full mouth restoration, dental veneers, crowns, bridges, dental implants, wisdom teeth extractions, Invisalign, and dentures.</p>', '3 years', '33223232323', 'Endodontist.@gmai.com', '1738994766.webp', 'active', '2025-02-08 06:06:06', '2025-02-08 06:06:06'),
(5, 'James Connors', 'Periodontist.', '<p>Dr. James Connors. Vashi has been practicing general, cosmetic and implant dentistry in California for over 18 years. He believes in giving the highest quality dentistry in a comfortable, caring environment. He strives to get to know his patients, not just their teeth.including full mouth restoration, dental veneers, crowns, bridges, dental implants, wisdom teeth extractions, Invisalign, and dentures.</p>', '4 years', '2323232323', 'Jame@gmail.com', '1738994873.webp', 'active', '2025-02-08 06:07:53', '2025-02-08 06:07:53'),
(6, 'Jacob Jones', 'Pediatric Dentist.', '<p>When it comes to oral surgeons, few can compare to the modern-day legend that is Dr. James Connors. As our oral and maxillofacial surgery specialist, Dr. Connors will brighten your day with his seasoned expertise, welcoming conversations, and &ndash; of course &ndash; his signature rotation of fun bowties. Dr. Connors and his younger sister grew up in Massachusetts with a mother who worked as a hygienist and a grandfather who was a general dentist.</p>', '2323238944', '3223345674', 'dm@gmail.com', '1738994953.webp', 'active', '2025-02-08 06:09:13', '2025-02-08 06:09:13');

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

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `profile_img`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin@gmail.com', '$2y$12$e.ARvf40/9gF1v7ZB3kNGOzp9Yqg43g9mTpWAGnSce.qWkRVyU//O', 1, '1729857167.webp', '2024-09-25 08:08:31', '2024-10-25 11:52:47');

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `home_page_manage`
--
ALTER TABLE `home_page_manage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_abouts`
--
ALTER TABLE `manage_abouts`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogcoments`
--
ALTER TABLE `blogcoments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `frontusers`
--
ALTER TABLE `frontusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home_page_manage`
--
ALTER TABLE `home_page_manage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_abouts`
--
ALTER TABLE `manage_abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
