-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 09:22 PM
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
-- Database: `arifa_filament`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 2, 'Arusha', '2024-04-25 23:46:43', '2024-04-25 23:46:43'),
(2, 1, 'Dar es Salaam', '2024-04-25 23:46:55', '2024-04-25 23:46:55'),
(3, 5, 'Dodoma', '2024-04-25 23:47:02', '2024-04-25 23:47:02'),
(4, 3, 'Iringa', '2024-04-25 23:47:12', '2024-04-25 23:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_code` char(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'TZ', 'Tanzania', '2024-04-25 23:38:19', '2024-04-25 23:38:19'),
(2, 'KR', 'South Korea', '2024-04-25 23:42:22', '2024-04-25 23:42:22'),
(3, 'KE', 'Kenya', '2024-04-25 23:42:49', '2024-04-25 23:42:49'),
(4, 'US', 'America', '2024-04-25 23:43:13', '2024-04-25 23:43:13'),
(5, 'CA', 'Canada', '2024-04-25 23:43:21', '2024-04-25 23:43:21'),
(6, 'UG', 'Uganda', '2024-04-25 23:43:30', '2024-04-25 23:43:30');

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
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `phone` varchar(90) NOT NULL,
  `address` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `map_address` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `x` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `logo_url` varchar(255) NOT NULL,
  `mission` text NOT NULL,
  `vision` varchar(255) NOT NULL,
  `values` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `name`, `email`, `phone`, `address`, `about`, `map_address`, `facebook`, `x`, `instagram`, `linkedin`, `youtube`, `logo_url`, `mission`, `vision`, `values`, `created_at`, `updated_at`) VALUES
(1, 'ARIFA', 'info@arifa.org', '255742372702', 'Ally Sykes road, Dar es Salaam, Tanzania', 'Africa Research Institute For AI (ARIFA) has a team of over 50 members across the world and many fields and disciplines, attracting talented individuals interested in applying their skills at the forefront of IT & AI for good. ARIFA prides itself on the d', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7924.729880400827!2d39.2260491!3d-6.7252483!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c51e35ee62eab%3A0x649458e4e8b09aef!2sAlly%20Sykes%20road%2C%20Dar%20es%20Salaam%2C%20Tanzania!5e0!3m2!1sen', NULL, NULL, NULL, NULL, NULL, 'images/01HXSC1BG2BVNYVJ9G36ZZRB00.jpg', 'Mission  Our mission is to produce rigorous, interdisciplinary, and strategic research to inform the public and community on the implications of IT & AI for the society well-being.', 'Our mission is to produce rigorous, interdisciplinary, and strategic research to inform the public and community on the implications of IT & AI for the society well-being.', '“Equity and Inclusion” is the first value on our list for a reason.', '2024-05-13 07:19:41', '2024-05-13 07:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_photo_url` varchar(255) NOT NULL DEFAULT 'images/user_avatar.png',
  `titles` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `joined_since` date NOT NULL,
  `bio` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `profile_photo_url`, `titles`, `name`, `email`, `address`, `country_id`, `state_id`, `city_id`, `zip_code`, `date_of_birth`, `joined_since`, `bio`, `created_at`, `updated_at`) VALUES
(1, 'images/01HXSMATEMEDZTATA6A0V9P58K.webp', '[\"Eng.\",\"Dr.\",\"Prof.\"]', 'Zaipuna O. Yonah', 'z.yonah@arifa.org.tz', 'Kigamboni', 1, 1, 2, '5635', '1966-08-12', '2010-10-08', '<p>Dr. Zaipuna is a Researcher, Practitioner, and Registered Consulting Engineer in ICTs/Telecoms. He is currently the Principal of Tanzania Institute of Project Management (TIPM). He has over 38 years of practice and he has worked with TTCL as a Chief Technical Officer and as a National Director of ICTs (DICT) – in the Government of Tanzania. He has also Lectured at the University of Dar es Salaam (UDSM) and the Nelson Mandela African Institution of Science and Technology (NM-AIST). He has published over 30 papers on International Journals, and Supervised over 15 Postgraduate Students.&nbsp;</p><p>Dr. Zaipuna has participated fully as an expert in the design and rollout of the high-capacity broadband infrastructure network for realizing the National ICT Broadband Backbone (NICTBB) as well as connectivity to corporate customers in Tanzania; Between 2015 to 2016 he was retained by AfDB as Lead Consultant on a project for the SADC Secretariat to formulate baskets of Broadband projects (estimated to cost about USD 27 Billion) to deliver the Digital SADC 2027 agenda for the 15 SADC member states.&nbsp;</p><p>His research interests include: ICT4D, Mobile and Web Applications, Big Data, Data Mining, High Performance Computing, High-Capacity Broadband Networks, Enterprise Solutions, Intelligent Instrumentation and Control Engineering, Embedded and Mobile Systems and ICT enabled 21st Century Education delivery (ICT4E).</p><p>Eng. Zaipuna holds a BSc. in Electrical Engineering (Hons) from the University of Dar es Salaam, Tanzania (1985); and MSc. and PhD in Computer-Based Instrumentation and Control Engineering from the University of Saskatchewan, Saskatoon, Canada.&nbsp;</p>', '2024-05-13 09:44:40', '2024-05-13 09:44:40'),
(2, 'images/01HXSN0Z80WT53FDVNT3W272TX.webp', '[\"Mr.\"]', 'David Cracknell', 'd.cracknell@arifa.org.tz', 'Toronto', 1, 1, 2, '6172', '1958-07-16', '2010-05-19', '<p>Mr. David is the Managing Director of First Principles Consulting Limited, a newly established Kenyan company to assist financial institutions, regulators and policy makers to rethink financial services in the digital age. David has 25 years of experience in financial inclusion, banking, and enterprise development. David was previously a Director and later Global Technical Director of MicroSave Consulting (MSC).</p><p>Mr. David has created advisories on digital banking, and training in digital transformation. He has advised multiple banks in Uganda on agent banking. He has worked with Central Banks - including reviewing the Bangladesh Bank’s approach to digital finance as part of a capacity building initiative, and providing training in digital finance for multiple central banks. He has reviewed digital financial services in the country for multiple donors. He has experience in approximately 25 countries in Africa and Asia.&nbsp;</p><p>He has authored numerous technical papers and articles on banking and most recently digital banking contributing to multiple tools and training courses. David is fluent in English and has basic knowledge of Sinhalese and French.&nbsp;</p>', '2024-05-13 09:56:45', '2024-05-13 09:56:45'),
(3, 'images/01HXYCWC5M8W81HK98M728D54S.jpg', '[\"Eng.\",\"Dr.\",\"Prof.\",\"Hon.\"]', 'Omar F. Hamad', 'o.hamad@arifa.org', 'Toronto', 1, 2, 1, '6172', '1975-11-13', '2021-04-04', '<p>Prof. Omar is currently a Member of Parliament representing Pandani Constituency and an Associate Professor of Computer and Telecommunications Engineering at the Engineering Faculty, Zanzibar University in Tanzania. Prof. Omar has previously worked with both NM-AIST and UDSM. He has received several awards including: The 2011 Best Academic Staff Award, UDSM; 2009 TWAS-AAS Microsoft Award for Young Computer Scientists Working and Living in Africa; and 2008-2009 Brain Korea (BK21) award for Graduate Researchers.&nbsp;</p><p>In terms of international research collaborations and MoUs, Dr. Omar has been a member in a team for VLIR-UOS 12 years’ Project between the NM-AIST, Arusha and the Flemish Universities in Belgium. Together with NM-AIST’s VC, Dr. Omar has recently developed a successful USD 1.3 Million Grant Proposal for the Establishment of an ICT Resource Centre with ICT and Telecommunications Testbeds, funded by the Indian Government. Dr. Omar is a professional member of the Institute of Electrical and Electronics Engineers (IEEE); Institute of Electronics and Information Communications Engineers (IEICE); New Partnership for African Development (NEPAD) Council; Central Institute of Management; National Society for Black Engineers (NSBE). He has been a reviewer and Technical Programme Committee member in several international conferences and journals. Dr. Omar has published several refereed journals and conference papers. “Analog, Digital and Multimedia Telecommunications” is the book that Dr. Omar has recently completed to write and it has been originally and widely published in the UK, USA, and Australia.&nbsp;</p><p>Hon. Omar graduated PhD in Computer Engineering from Chonnam National University, South Korea (2008), an MEng. in Electronics and Communications from Birla Institute of Technology (2000), India, where he also graduated with his Bachelor of Electronics and Communications Engineering in July 1998. In December 1996, he received Correspondence Postgraduate Diplomas in Personnel Management and Industrial Relations (PGD-PMIR), International Relations (PGD-IR), and Investment Planning and Control (PGD-IP&amp;C) from Central Institute of Management, India</p>', '2024-05-15 06:10:38', '2024-05-15 06:10:38'),
(4, 'images/01HXYD5YTTPAMMD3G64T1RC6GS.jpg', '[\"Mr.\"]', 'Axel Angeli', 'aangeli@arifa.org', 'Kinondoni', 1, 1, 2, '4354', '1983-03-04', '2021-05-06', '<p>Mr. Axel Angeli is an enterprise board-level mentor and international conference speaker who travels the world to teach Evolution by Design and Artificial Intelligence. Known for his skills in rescuing failing IT projects and being a guru for SAP enterprise software he now engages in research, education, and implementation of the Industries 4.0 design paradigm.&nbsp;</p><p>His focus is on emerging countries to build holistic Zero Waste ecosystems for Smart Living, Wildlife, and Agriculture 4.0 employing sustainable education. With his worldwide network, he helps many organizations and enterprises in India and Africa to find the right cooperation and technology partners between India, Africa, and Europe. His current ongoing projects are GEM -German Education Media, an incubator and publishing house to provide educational media based on Artificial Intelligence for technology education, and Woven Africa – an initiative to help young people and small farmers in Africa to use technology in Agriculture 4.0 and the environment.</p><p>Mr. Axel speaks German, English, French, Italian, Dutch, Spanish, Bulgarian and Slavic. He has International Experience from USA, UK, France, Spain, Italy, Switzerland, Belgium, Netherlands, Luxembourg, Sweden, Greece, Bulgaria, Romania, Israel, Emirates, India, Singapore, China P.R., Taiwan R.O.C., Bulgaria, Mexico, Brazil and South Africa.</p>', '2024-05-15 06:15:52', '2024-05-15 06:15:52');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_24_125601_create_publications_table', 2),
(6, '2024_04_24_130152_create_authors_table', 2),
(7, '2024_04_24_130154_create_sponsors_table', 3),
(8, '2024_04_26_064209_create_projects_table', 3),
(9, '2024_04_26_064917_create_countries_table', 3),
(10, '2024_04_26_064919_create_states_table', 3),
(11, '2024_04_26_065124_create_cities_table', 3),
(12, '2024_04_26_080343_create_roles_table', 4),
(13, '2024_04_26_080400_create_permissions_table', 4),
(19, '2014_10_12_000000_create_users_table', 5),
(20, '2024_04_30_141420_create_institutes_table', 5),
(22, '2024_04_30_144811_create_objectives_table', 6),
(23, '2024_04_30_154256_create_titles_table', 6),
(25, '2024_04_30_142822_create_members_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `objectives`
--

CREATE TABLE `objectives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `objective` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `project_image` varchar(191) NOT NULL DEFAULT 'project_photos/project-default-file.jpg',
  `sponsor_id` bigint(20) UNSIGNED NOT NULL,
  `from_date` date NOT NULL DEFAULT current_timestamp(),
  `to_date` date NOT NULL,
  `description` text DEFAULT NULL,
  `recommendations` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_id`, `title`, `project_image`, `sponsor_id`, `from_date`, `to_date`, `description`, `recommendations`, `created_at`, `updated_at`) VALUES
(1, 'OODDFF', 'ARIFA participated in the preparation of the Tanzania Development Vision 2050 (TDV 2050) in the Communication Sector', 'project_photos/project-default-file.jpg', 5, '2023-02-01', '2023-03-31', '<p>On December 9th, 2023, the President of the United Republic of Tanzania officially initiated the collection of public opinions to draft the preliminary version of the National Development Vision 2050. Emphasizing the importance of the Development Vision for 2025-2050, she highlighted that it should cover crucial strategic sectors including Infrastructure, Agriculture, Education, Health, and Technology, among others.&nbsp;</p><p><br><br></p><p>In preparation for the National Development Vision 2050, the committee was provided with the following terms of reference and required to submit the report: -</p><ul><li>Identify the key milestones achieved in Tanzania\'s communication sector (Past and present), and forecast the future of the communication sector towards 2050;</li><li>Propose what should be put in place to have a successful evolved communication sector towards 2050;</li><li>Identify the key roles to be played by the communication sector for Tanzania Vision 2050; and</li><li>Prepare the views from the communication sector for submission to the committee which is drafting National Development Vision 2050.</li></ul>', '<p>None</p>', '2024-04-26 00:53:12', '2024-04-26 00:53:12'),
(3, 'POPDF', 'Corporate Factors Agent', 'project_photos/01HWD2Q23GE8AMS8BZ46R1KGCQ.jpg', 1, '2023-07-30', '2023-11-12', '<p>The description will go here...</p>', '<p>There are no recommendations...</p>', '2024-04-26 02:30:11', '2024-04-26 02:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `partner_logo_url` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `name`, `partner_logo_url`, `created_at`, `updated_at`) VALUES
(1, 'Africa Research Institute For AI – ARIFA', 'images/01HXWD1K9WBVYSX9NJSGZC2T87.jpg', '2024-04-26 00:33:27', '2024-05-14 11:35:01'),
(2, 'Ministry of Information, Communication and Information Technology (MICIT) through Digital Tanzania Project (DTP) Funded by World Bank', NULL, '2024-04-26 00:33:55', '2024-04-26 00:33:55'),
(3, 'Centre for Intellectual Property and Information Technology Law (CIPIT), Strathmore University in Nairobi, Kenya', NULL, '2024-04-26 00:34:12', '2024-04-26 00:34:12'),
(4, 'Africa Research Consortium (AReCo)', NULL, '2024-04-26 00:34:32', '2024-04-26 00:34:32'),
(5, 'Tanzania Communications Regulatory Authority (TCRA)', 'images/01HXWD6J878HZH8XRPVMKKDQRM.png', '2024-04-26 00:34:48', '2024-05-14 11:37:43'),
(6, 'University of Dodoma (UDOM)', 'images/01HXYT3CADRG0F3YMQYZ5MRYSK.png', '2024-05-15 10:01:39', '2024-05-15 10:01:39'),
(7, 'World Vision', 'images/01HXYT4NFSWFJKX4J8D5NKQAKM.png', '2024-05-15 10:02:21', '2024-05-15 10:02:21'),
(8, 'World Link Business Consult', 'images/01HXYT6P60TBB8JHC76GFNG9TC.png', '2024-05-15 10:03:28', '2024-05-15 10:03:28'),
(9, 'ICTC', 'images/01HXYT7SVM0NTT0C2VNSPZYTM8.png', '2024-05-15 10:04:04', '2024-05-15 10:04:04'),
(10, 'AGRIPOA', 'images/01HXYT8BZE1NXMDAN100QV0DZ2.png', '2024-05-15 10:04:23', '2024-05-15 10:04:23'),
(11, 'Tanzania Health Information Association', 'images/01HXYT9N24636RRSAYW2GE7MBA.png', '2024-05-15 10:05:05', '2024-05-15 10:05:05'),
(12, 'Government of Tanzania', 'images/01HXYTAFKSXGMW69Z47N7VY0F2.png', '2024-05-15 10:05:32', '2024-05-15 10:05:32'),
(13, 'SAFE', 'images/01HXYTB2BKFV4JDYJSGCBM3T39.png', '2024-05-15 10:05:51', '2024-05-15 10:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dar es Salaam', '2024-04-25 23:44:20', '2024-04-25 23:44:20'),
(2, 1, 'Arusha', '2024-04-25 23:44:26', '2024-04-25 23:44:26'),
(3, 1, 'Iringa', '2024-04-25 23:44:37', '2024-04-25 23:44:37'),
(4, 1, 'Mwanza', '2024-04-25 23:44:45', '2024-04-25 23:44:45'),
(5, 1, 'Dodoma', '2024-04-25 23:44:52', '2024-04-25 23:44:52'),
(6, 1, 'Kilimanjaro', '2024-04-25 23:45:03', '2024-04-25 23:45:03'),
(7, 1, 'Kagera', '2024-04-25 23:46:05', '2024-04-25 23:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_photo_url` varchar(191) NOT NULL DEFAULT 'images/user_avatar.png',
  `titles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`titles`)),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `joined_since` date NOT NULL,
  `bio` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile_photo_url`, `titles`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `address`, `country_id`, `state_id`, `city_id`, `zip_code`, `date_of_birth`, `joined_since`, `bio`, `created_at`, `updated_at`) VALUES
(1, 'images/user_avatar.png', '[\"Mr.\"]', 'Super Admin', 'admin@arifa.org.tz', '2024-04-18 02:03:26', '$2y$10$hp6H88DftRCh6DzskQ9tqOQmcFaSzAah6JOSD6MJIfgb3ek2RZCmm', NULL, 'Kinondani', 1, 1, 2, '54646', '1974-04-18', '2023-11-15', 'Admin have no Bio...', '2024-04-30 16:44:44', NULL),
(3, 'images/user_avatar.png', '[\"Mr.\",\"Hon.\",\"Prof.\"]', 'John Doe', 'johndoe@gmail.com', NULL, '$2y$12$oBLcoX.37ug8.s5Ivpyn0OB4sKy.vxoKydrC2A1lblPM3SX7jJsKe', NULL, 'Kigamboni, 34 HR', 1, 1, 2, '5635', '1978-11-12', '2023-11-12', '<p>Mr. Axel Angeli is an enterprise board level mentor and international conference speaker who travels the world to teach Evolution by Design and Artificial Intelligence. Known for his skills in rescuing failing IT projects and being a guru for SAP enterprise software he now engages in research, education, and implementation of the Industries 4.0 design paradigm.&nbsp;</p><p>His focus is on emerging countries with the aim to build holistic Zero Waste ecosystems for Smart Living, Wildlife and Agriculture 4.0 by means of sustainable education. With his world-wide network he helps many organizations and enterprises in India and Africa to find right cooperation and technology partners between India, Africa, and Europe. His current ongoing projects are GEM -German Education Media, an incubator and publishing house to provide education media based on Artificial Intelligence for technology</p>', '2024-04-30 09:40:44', '2024-04-30 09:49:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_state_id_foreign` (`state_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`),
  ADD KEY `members_country_id_foreign` (`country_id`),
  ADD KEY `members_state_id_foreign` (`state_id`),
  ADD KEY `members_city_id_foreign` (`city_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objectives`
--
ALTER TABLE `objectives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_sponsor_id_foreign` (`sponsor_id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titles_title_unique` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_country_id_foreign` (`country_id`),
  ADD KEY `users_state_id_foreign` (`state_id`),
  ADD KEY `users_city_id_foreign` (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `objectives`
--
ALTER TABLE `objectives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `members_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `members_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_sponsor_id_foreign` FOREIGN KEY (`sponsor_id`) REFERENCES `sponsors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
