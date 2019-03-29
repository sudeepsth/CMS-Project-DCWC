-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2019 at 05:42 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcwcnepal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menus`
--

CREATE TABLE `admin_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menus`
--

INSERT INTO `admin_menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Primary Menu', '2018-09-20 07:07:07', '2018-09-20 07:07:07'),
(2, 'Quick Links', '2018-09-20 10:08:02', '2018-09-20 10:08:02'),
(3, 'Community', '2018-09-20 10:08:18', '2018-09-20 10:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu_items`
--

CREATE TABLE `admin_menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu` int(10) UNSIGNED NOT NULL,
  `depth` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menu_items`
--

INSERT INTO `admin_menu_items` (`id`, `label`, `link`, `parent`, `sort`, `class`, `menu`, `depth`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'http://dcwcnepal.org.np', 0, 0, NULL, 1, 0, '2018-09-20 07:07:31', '2018-09-20 07:07:46'),
(2, 'About Us', '#', 0, 1, NULL, 1, 0, '2018-09-20 07:08:46', '2018-09-20 07:08:46'),
(3, 'Introduction', '#', 2, 2, NULL, 1, 1, '2018-09-20 07:09:07', '2018-09-20 07:09:27'),
(4, 'Background', 'http://dcwcnepal.org.np/pages/background', 3, 3, NULL, 1, 2, '2018-09-20 07:09:36', '2018-09-24 23:17:05'),
(5, 'Mission/ Vision', 'http://dcwcnepal.org.np/pages/mission-and-vision', 3, 4, NULL, 1, 2, '2018-09-20 07:09:54', '2018-09-24 23:08:56'),
(6, 'Organizational Chart', 'http://dcwcnepal.org.np/pages/organizational-chart', 3, 5, NULL, 1, 2, '2018-09-20 07:10:09', '2018-09-24 23:09:42'),
(7, 'DCWC Staffs', 'http://dcwcnepal.org.np/pages/DCWC-staffs', 3, 6, NULL, 1, 2, '2018-09-20 07:10:16', '2018-09-29 12:54:41'),
(8, 'Steering Committee', 'http://dcwcnepal.org.np/pages/steering-committee', 2, 7, NULL, 1, 1, '2018-09-20 07:10:42', '2018-10-02 09:00:52'),
(9, 'Our Partners/Patron', '#', 2, 8, NULL, 1, 1, '2018-09-20 07:11:49', '2018-10-02 09:00:52'),
(10, 'Our Partners', 'http://dcwcnepal.org.np/pages/our-partners', 9, 9, NULL, 1, 2, '2018-09-20 07:12:03', '2018-10-02 09:00:52'),
(11, 'Our Patrons', '#', 9, 10, NULL, 1, 2, '2018-09-20 07:12:15', '2018-10-02 09:00:52'),
(12, 'Program', '#', 0, 11, NULL, 1, 0, '2018-09-20 07:12:30', '2018-10-02 09:00:52'),
(13, 'Accomplisehd', 'http://dcwcnepal.org.np/project/accomplished', 12, 12, NULL, 1, 1, '2018-09-20 09:00:32', '2018-10-02 09:00:52'),
(14, 'On Going', 'http://dcwcnepal.org.np/project/ongoing', 12, 13, NULL, 1, 1, '2018-09-20 09:01:02', '2018-10-02 09:00:52'),
(15, 'Future Plan', 'http://dcwcnepal.org.np/project/future', 12, 14, NULL, 1, 1, '2018-09-20 09:01:18', '2018-10-02 09:00:52'),
(16, 'Blogs', 'http://dcwcnepal.org.np/blogs', 0, 37, NULL, 1, 0, '2018-09-20 09:02:02', '2018-10-02 09:30:12'),
(17, 'Blogs', 'http://dcwcnepal.org.np/blogs', 0, 1, NULL, 3, 0, '2018-09-20 10:12:58', '2018-09-20 10:12:58'),
(18, 'Volunteer', '#', 0, 2, NULL, 3, 0, '2018-09-20 10:13:09', '2018-09-20 10:13:09'),
(19, 'Support Us', '#', 0, 31, NULL, 1, 0, '2018-09-22 17:20:13', '2018-10-02 09:30:12'),
(20, 'Donate', 'http://dcwcnepal.org.np/pages/donate', 19, 32, NULL, 1, 1, '2018-09-22 17:20:49', '2018-10-02 09:30:12'),
(21, 'Sponsor a Student', 'http://dcwcnepal.org.np/pages/sponsor-a-student', 19, 34, NULL, 1, 1, '2018-09-22 17:21:20', '2018-10-02 09:30:12'),
(22, 'Fundraisers', 'http://dcwcnepal.org.np/pages/fundraisers', 19, 35, NULL, 1, 1, '2018-09-22 17:21:55', '2018-10-02 09:30:12'),
(23, 'Charity Treks', 'http://dcwcnepal.org.np/charity', 19, 36, NULL, 1, 1, '2018-09-22 17:22:29', '2018-10-02 09:30:12'),
(24, 'Volunteer', 'http://dcwcnepal.org.np/pages/volunteer', 19, 33, NULL, 1, 1, '2018-09-22 17:22:47', '2018-10-02 09:30:12'),
(25, 'Contact Us', 'http://dcwcnepal.org.np/pages/contact-us', 0, 38, NULL, 1, 0, '2018-09-22 17:24:06', '2018-10-02 09:30:12'),
(26, 'School Building', 'http://dcwcnepal.org.np/project/category/school-building', 0, 22, NULL, 1, 0, '2018-09-22 17:24:39', '2018-10-02 09:00:52'),
(27, 'Nursing School', 'http://dcwcnepal.org.np/project/category/nursing-school', 0, 28, NULL, 1, 0, '2018-09-22 17:24:57', '2018-10-02 09:02:38'),
(28, 'Hospital', 'http://dcwcnepal.org.np/project/category/hospital', 0, 15, NULL, 1, 0, '2018-09-22 17:25:09', '2018-10-02 09:31:06'),
(29, 'Nepal Earthquake', 'http://dcwcnepal.org.np/project/category/nepal-earthquake', 0, 25, NULL, 1, 0, '2018-09-22 17:25:25', '2018-10-02 09:00:52'),
(30, 'History', 'http://dcwcnepal.org.np/pages/history', 28, 16, NULL, 1, 1, '2018-09-27 11:12:41', '2018-10-02 09:00:52'),
(31, 'Access to Community Hospital', 'http://dcwcnepal.org.np/pages/access-to-community-hospital', 28, 18, NULL, 1, 1, '2018-09-27 11:13:13', '2018-10-02 09:00:52'),
(32, 'Services', 'http://dcwcnepal.org.np/pages/services', 28, 20, NULL, 1, 1, '2018-09-27 11:13:36', '2018-10-02 09:00:52'),
(33, 'Staffs', 'http://dcwcnepal.org.np/pages/hospital-staffs', 28, 21, NULL, 1, 1, '2018-09-27 11:13:49', '2018-10-02 09:00:52'),
(34, 'Mission, Goals & Objectives', 'http://dcwcnepal.org.np/pages/mission-goal-objectives', 28, 17, NULL, 1, 1, '2018-09-27 11:14:21', '2018-10-02 09:00:52'),
(35, 'Beneficiaries from the Hospital', 'http://dcwcnepal.org.np/pages/beneficiaries-from-the-hospital', 28, 19, NULL, 1, 1, '2018-09-27 11:15:01', '2018-10-02 09:00:52'),
(37, 'OnGoing', 'http://dcwcnepal.org.np/project/category/school-building/ongoing', 26, 24, NULL, 1, 1, '2018-10-02 08:59:56', '2018-10-02 09:01:12'),
(38, 'Accomplished', 'http://dcwcnepal.org.np/project/category/school-building/accomplished', 26, 23, NULL, 1, 1, '2018-10-02 09:00:31', '2018-10-02 09:01:12'),
(39, 'Ongoing', 'http://dcwcnepal.org.np/project/category/nepal-earthquake/ongoing', 29, 27, NULL, 1, 1, '2018-10-02 09:01:53', '2018-10-02 09:02:38'),
(40, 'Accomplished', 'http://dcwcnepal.org.np/project/category/nepal-earthquake/accomplished', 29, 26, NULL, 1, 1, '2018-10-02 09:02:17', '2018-10-02 09:02:38'),
(41, 'Ongoing', 'http://dcwcnepal.org.np/project/category/nursing-school/ongoing', 27, 30, NULL, 1, 1, '2018-10-02 09:29:29', '2018-10-02 13:02:04'),
(42, 'Accomplished', 'http://dcwcnepal.org.np/project/category/nursing-school/accomplished', 27, 29, NULL, 1, 1, '2018-10-02 09:29:57', '2018-10-02 09:30:12'),
(43, 'Accomplished Programs', 'http://dcwcnepal.org.np/project/accomplished', 0, 0, NULL, 2, 0, '2018-10-03 12:47:56', '2018-10-03 12:48:29'),
(44, 'Ongoing Programs', 'http://dcwcnepal.org.np/project/ongoing', 0, 1, NULL, 2, 0, '2018-10-03 12:48:13', '2018-10-03 12:48:29'),
(45, 'Future Programs', 'http://dcwcnepal.org.np/project/future', 0, 2, NULL, 2, 0, '2018-10-03 12:48:26', '2018-10-03 12:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'DCWC Community Hospital', 'hospital', NULL, '1', '2018-09-20 07:16:35', '2018-10-07 08:36:45'),
(2, 'Earthquake Releif Programs by DCWC', 'nepal-earthquake', NULL, '1', '2018-09-20 07:16:44', '2018-10-07 08:36:11'),
(3, 'DCWC Support School', 'school-building', NULL, '1', '2018-09-23 16:08:12', '2018-10-07 08:35:39'),
(4, 'DCWC Nursing School', 'nursing-school', NULL, '1', '2018-09-23 16:08:24', '2018-10-07 08:36:25'),
(5, 'DCWC Sponsorship program', 'dcwc-sponsorship-program', NULL, '1', '2018-09-25 00:26:25', '2018-10-05 17:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `charity_trek`
--

CREATE TABLE `charity_trek` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `charity_trek`
--

INSERT INTO `charity_trek` (`id`, `title`, `slug`, `images`, `top_description`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Annapurna Charity Trek 2019', 'annapurna-charity-trek-2019', 'images/2018/09/1537422572.trek (1).jpg', '<h3>DCWC Nepal organizes Trekking programs to help collect fund to run different projects for development of Nepal.</h3>', '<ul>\r\n<li>Cost of Trek 15 days x $85 a day per person =$1275.00</li>\r\n<li>Kathmandu Hotel $40per night twin bed with B/B X5night=$200.00</li>\r\n<li>Kathmandu Sight Seen, Airport pick up/Drop up $60.00 per person Altogether $1535.00 per Person.</li>\r\n<li>Above cost is only for Treks, we would like to request you to donate or find out Sponsorship on top up it. The cost of the trek which is covers all accommodation in Nepal. It covers all food and hot drinks in the Annapurna but not lunch and evening meal in Kathmandu (cold, bottled, canned drinks and hot flasks are not covered). All transportation in Nepal is covered. You will be required to arrange your own travel insurance, which must cover Air ambulance/Helicopter evacuation</li>\r\n<li>We aim to raise USD 40,000 to run DWCW Community Hospital at Nagre Gagarche - Chaurideurali -2, Rajbash, Kavre, Nepal. This is urgently needed.</li>\r\n</ul>', '1', '2018-09-20 09:31:19', '2018-10-07 11:52:37'),
(2, 'Everest Charity Trek 2019', 'everest-charity-trek-2019', 'images/2018/09/1537818192.evening-view-from-everest_640_480.jpg', '<p>We aim to raise USD 40000 to run DWCW Community Hospital at Nagre Gagarch-4 Rajbash, Kavre, Nepal. This is urgently needed.</p>', '<p>Cost: $1575 per person</p>\r\n<div class=\"clear\">&nbsp;</div>\r\n<ul>\r\n<li>Cost of Trek 15 days x $85 a day per person =$1275.00</li>\r\n<li>Kathmandu Hotel $40per night twin bed with B/B X5night=$200.00</li>\r\n<li>Kathmandu Sight Seeing, Airport pick up/Drop off $60.00 per person</li>\r\n</ul>\r\n<div class=\"clear\">&nbsp;</div>\r\n<p>The cost of the trek covers all accommodations in Nepal. It covers all food and hot drinks in the Treks and tour but not lunch and evening meal in Kathmandu (cold, bottled, canned drinks and hot flasks are not covered). All transportation in Nepal is covered. You will be required to arrange your own travel insurance, which must cover Air ambulance/Helicopter evacuation</p>\r\n<div class=\"clear\">&nbsp;</div>\r\n<p>Above cost is only for Tour. We would like to request that you make a donation to DCWC or commit to a Sponsorship.</p>', '1', '2018-09-24 23:43:12', '2018-09-24 23:43:12'),
(3, 'Charity Tour 2019', 'charity-tour-2019', 'images/2018/09/1537819179.13927695835_e3faf917fa_b.jpg', '<p>We aim to raise USD 40000 to run DWCW Community Hospital at Nagre Gagarch-4 Rajbash, Kavre, Nepal. This is urgently needed.</p>', '<p><strong>Total Cost:</strong>&nbsp;USD 1760.00</p>\r\n<p>The cost of the trek which is covers all accommodation in Nepal. It covers all food and hot drinks in the Treks and tour but not lunch and evening meal in Kathmandu (cold, bottled, canned drinks and hot flasks are not covered). All transportation in Nepal is covered. You will be required to arrange your own travel insurance, which must cover Air ambulance/Helicopter evacuation</p>\r\n<p>Above cost is only for Treks, Tour we would like to request you to donate or find out Sponsorship on top up it.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>THE ABOVE TREK COST INCLUDES:</strong></p>\r\n<ul>\r\n<li>Double sharing basis hotel with breakfast in Kathmandu or stay at Tibetan Monastery Guest House at Swyambhu.</li>\r\n<li>All airport drop and pick up services</li>\r\n<li>All permit and entrance fee.</li>\r\n<li>All meals during the tour.</li>\r\n<li>Guide &amp; porter.</li>\r\n<li>Sight seen in Kathmandu</li>\r\n</ul>\r\n<p><strong>THE ABOVE TREK COST DOES NOT INCLUDE:</strong></p>\r\n<ul>\r\n<li>Meal in Kathmandu</li>\r\n<li>Medical and evacuation insurance.</li>\r\n<li>Local donations</li>\r\n<li>Tips for Nepali staff.</li>\r\n<li>Items of a personal nature such as liquor, laundry, mail, phone calls and faxes, Mineral water</li>\r\n<li>Personal beverages.</li>\r\n<li>Sleeping bag during trip.</li>\r\n</ul>\r\n<p><strong>RISK AND LIABILITIES:</strong></p>\r\n<ul>\r\n<li>We highly advised to the clients to have full insurance against trip Helicopter evacuation, cancellation, and medical and personal accident risk.</li>\r\n<li>For trekking a load of 15 kg/33pounds will be allowed to give porter each person</li>\r\n</ul>', '1', '2018-09-24 23:59:39', '2018-09-24 23:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district` varchar(50) NOT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kathmandu', '1', '2018-10-04 09:48:12', '2018-10-04 09:55:55'),
(2, 'Kavre', '1', '2018-10-04 10:10:14', '2018-10-05 10:46:37'),
(3, 'Ramechhap', '1', '2018-10-05 10:47:02', '2018-10-05 10:47:02'),
(4, 'Bhaktapur', '1', '2018-10-05 10:50:20', '2018-10-05 10:50:20'),
(5, 'Makawanpur', '1', '2018-10-05 11:00:31', '2018-10-05 11:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `email_category`
--

CREATE TABLE `email_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_category`
--

INSERT INTO `email_category` (`id`, `category_name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Doctor', 'doctor', '1', '2018-09-27 07:57:49', '2018-09-27 07:57:49'),
(3, 'Engineer', 'engineer', '1', '2018-09-27 08:10:16', '2018-09-27 08:10:16'),
(4, 'Management', 'Management', '1', '2018-09-29 10:56:09', '2018-10-01 07:43:54'),
(5, 'Volenteer', 'volenteer', '1', '2018-09-29 10:58:11', '2018-09-29 10:58:11'),
(6, 'IT', 'it', '1', '2018-09-29 10:59:16', '2018-09-29 10:59:16'),
(7, 'Consultant', 'consultant', '1', '2018-10-01 07:45:03', '2018-10-01 07:45:03'),
(8, 'Partners', 'partners', '1', '2018-10-01 07:46:28', '2018-10-01 07:46:28'),
(9, 'Patrons', 'patrons', '1', '2018-10-01 07:47:07', '2018-10-01 07:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'DCWC Sponsorship program', 'images/2018/09/1537522511.jpg', '2018-09-21 13:35:11', '2018-09-21 13:35:11'),
(2, 'Earthquake Releif Programs by DCWC', 'images/2018/09/1537522561.jpg', '2018-09-21 13:36:01', '2018-09-21 13:36:01'),
(3, 'DCWC Community Hospital', 'images/2018/09/1537522604.jpg', '2018-09-21 13:36:44', '2018-09-21 13:36:44'),
(4, 'DCWC Support School', 'images/2018/09/1537522647.jpg', '2018-09-21 13:37:27', '2018-09-21 13:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_11_073824_create_menus_wp_table', 1),
(4, '2017_08_11_074006_create_menu_items_wp_table', 1),
(5, '2018_09_03_102849_create_user_email_addition_table', 1),
(6, '2018_09_04_084545_create_news_event_table', 1),
(7, '2018_09_06_150538_create_projects', 1),
(8, '2018_09_07_015158_create_gallery_table', 1),
(9, '2018_09_07_024711_create_role_table', 1),
(10, '2018_09_07_024725_create_role_user_table', 1),
(11, '2018_09_07_100257_create_video_upload_table', 1),
(12, '2018_09_12_054249_create_category_table', 1),
(13, '2018_09_12_054336_create_project_category_relation_table', 1),
(14, '2018_09_12_101647_create_project_gallery_relation', 1),
(15, '2018_09_14_131727_create_pages', 1),
(16, '2018_09_16_091007_create_charity_trek_table', 1),
(17, '2018_09_16_091234_create_chartiy_trek_gallary_relation', 1),
(18, '2018_09_17_055055_create_charity_trek_daily_record', 1),
(19, '2018_09_19_102130_create_year_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `images` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` enum('1','2') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`id`, `slug`, `title`, `description`, `images`, `category`, `status`, `published_date`, `created_at`, `updated_at`) VALUES
(1, 'one-day-health-camp-baishak-13th-2074-27th-april-2017', 'One day Health Camp – Baishak 13th 2074 (27th April 2017)', '<p class=\"p1\">On Baishak 13th 2074 (27th April 2017) at DCWC Community Hospital is organizing a One Day Health Camp&rsquo; on eye, Gynae and General Check-Up</p>\r\n<p class=\"p1\">Organized By: DCWC Community Hospital, Kavre, Rajbash</p>', 'images/2018/09/1537859970.eye-cataract-general-check-up-768x384.jpg', '1', '1', '2018-09-25 07:19:30', '2018-09-25 11:19:30', '2018-10-01 07:31:43'),
(9, 'dental-camp', 'Dental Camp', '<p>Dental camp</p>', 'images/2018/10/1538556257.unnamed.jpg', '2', '1', '2018-10-03 08:44:04', '2018-10-03 12:44:17', '2018-10-04 08:50:12'),
(10, 'one-day-free-dental-camp-27th-october-2018-kartik-10th-2075', 'One Day Free Dental Camp - 27th October 2018 (Kartik 10th 2075)', '<p>DCWC Community Hospital is Organizing a One Day Free Dental Camp, the service will include cleaning, extracting and temporary teeth filling from 10:00 AM - 5:00 PM on Saturday 27th October 2018</p>\r\n<p>Organized By: DCWC Community Hospital, Kavre, Rajbash</p>\r\n<p>Venue: DCWC Community Hospital</p>\r\n<p>&nbsp;</p>', 'images/2018/10/1538641111.Dental Camp, Oct 27th, 2108.jpg', '2', '1', '2018-10-04 08:08:46', '2018-10-04 12:18:31', '2018-10-04 12:58:41');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta_description` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `description`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Background', 'background', '<section class=\"sec-padding about-content full-sec\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-7 col-md-12\">\r\n<div class=\"full-sec-content\">\r\n<div class=\"sec-title style-two\">\r\n<h2>DCWC Nepal</h2>\r\n</div>\r\n<h3>Akka Lama, the founder of DCWC Nepal, came from the rural village of Rajbash in 1997 for higher education in Kathmandu.</h3>\r\n<br />\r\n<p>After completing his University studies and working as a Thangka painter in the Thamel tourist district, he decided to follow his dream of supporting poor women and children in the village by bringing them educational opportunities and access to healthcare.</p>\r\n<p>Soon Akka found support for his vision from foreigners who came to his newly opened Thangka shop. In the year 2000 a Swiss couple, who had trekked in Nepal, collected 100 kilos of 2nd hand clothing and school supplies in their home country and sent these to Akka for distribution in various villages and schools. Thus Akka&acirc;&euro;&trade;s charity was born, and together with 6 friends he registered it with the Nepal Government under the name: DCWC (Development of Children and Women Center). A couple from the US provided funds for a small oce in Kathmandu. The DCWC now had a physical place from which to plan and organize their activities to support rural Nepal.</p>\r\n</div>\r\n</div>\r\n<div class=\"col-md-5 hidden-md text-right\">\r\n<div style=\"position: relative; height: 0; padding-bottom: 73.13%;\"><iframe style=\"position: absolute; width: 100%; height: 100%; left: 0;\" src=\"https://www.youtube.com/embed/xgqwNC1yE1s?ecver=2\" width=\"492\" height=\"460\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class=\"sec-padding full-sec\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-md-6 hidden-md\">\r\n<div class=\"img-masonary\">\r\n<div class=\"img-w1\"><img src=\"http://dcwcnepal.org.np/files/photos/about/abt2.jpg\" alt=\"\" width=\"280\" height=\"450\" /></div>\r\n<div class=\"img-w1 img-h1\"><img src=\"http://dcwcnepal.org.np/files/photos/about/abt3.jpg\" alt=\"\" width=\"280\" height=\"450\" /></div>\r\n<div class=\"img-w1 img-h1\"><img src=\"http://dcwcnepal.org.np/files/photos/about/abt4.jpg\" alt=\"\" width=\"280\" height=\"450\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-6\">\r\n<p>The Thangka store had become an important place of contact with subsequent supporters of Akka&acirc;&euro;&trade;s charity. Many a traveller stopped in for the beautiful Thangkas and ended up discussing the dire needs of people in the backcountry of Nepal.</p>\r\n<p>In 2004, Gary Collier, an antique dealer from the UK came to the store on his way back from Tibet. After discussing Thankgkas and then the charity, Gary decided to help. Upon his return home he registered DCWC NEPAL in the UK to support Education and Healthcare access in rural Nepal. You can nd more information at www.dcwcnepal.org.</p>\r\n<p>Tomas Beranek from the Czech Republic had been a friend of Akka&acirc;&euro;&trade;s since 1999. Tomas used to organize tours to Tibet, Nepal and India. Many of his clients were curious to learn more about the art of Thangka painting and so he brought them to Akka&acirc;&euro;&trade;s store. While it took a little while to get Tomas on board, in 2005 he decided to register the Charity in the Czech Republic under the name Namaste Nepal-DCWC-CZ .You can nd more information at www.namastenepal.cz.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class=\"sec-padding full-sec\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-7 col-md-7 \">\r\n<p>Patrick Graney and Steve Gross from the US, both acquaintances made over Thangka&acirc;&euro;&trade;s, decided to become active on behalf of DCWC in the United States and are in the process of applying for tax exempt status for the DCWCNepal-US. You can nd more information at: www.dcwcnepal-us.org.</p>\r\n<p>The goal of our charity, established in the year 2000, was to bring access to education and healthcare to the poor and marginalized of Nepal. Guided by a spirit of love and empowerment we have steadily worked to fulll this mission. As of this year (2013) we have build 30 schools; we sponsored more than 200 (?) Children to allow them to get an education; we have been holding workshops that teach women to read and write; we opened the 15 bed DCWC Community Hospital, and we held regular health camps to bring medical care into remote areas.</p>\r\n<p>All decisions regarding present and future activities are made by the 7 member central DCWC board in conjunction with the various committees representing the interests of our communities. We see our work as a service to our local communities and hope to foster a feeling of ownership for the changes we create together.</p>\r\n</div>\r\n<div class=\"col-md-5 hidden-md text-right\"><img src=\"http://dcwcnepal.org.np/files/photos/about/abt1.jpg\" alt=\"Awesome Image\" /></div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class=\"sec-padding full-sec\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-md-3 hidden-md\">\r\n<div class=\"img-masonary\">\r\n<div class=\"img-w1 img-h1\"><img src=\"http://dcwcnepal.org.np/files/photos/about/abt3.jpg\" alt=\"\" width=\"280\" height=\"450\" /></div>\r\n<div class=\"img-w1 img-h1\"><img src=\"http://dcwcnepal.org.np/files/photos/team/abt4.jpg\" alt=\"\" width=\"280\" height=\"450\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-9 col-md-12 \">\r\n<p>The DCWC Village Community Hospital was established in September 2010 with the nancial assistance from Development of Children and Women Centre (DCWC) Nepal, UK, MODUS UK, Namaste Nepal, Czech Republic. With funding from our American supporters a pharmacy and an injection clinic were added in 2011. The hospital is operated and managed by Development of Children and Women Centre, Nepal and local members of the Nagre Gagarche Village Development Committee, Kavre District of Nepal.</p>\r\n<p>Nagre Gagarche lies at the center of several districts with a combined population of approx. 120000 poor subsistence farmers. Until 2010 the area had no direct access to even basic medical care. Now the DCWC community hospital sta provides 24 hour emergency service, minor surgeries, X-rays, lab tests, immunizations and health check-ups. Our newly donated ambulance allows us to transport critical patients safely to hospitals in Kathmandu. Our birthing center provides peri-natal care and delivers critical health services to home bound expectant mothers.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-22 18:04:16', '2018-09-24 23:24:24'),
(2, 'Steering Committee', 'steering-committee', '<section class=\"sec-padding volunteer-profile\">\r\n<div class=\"container\">\r\n<div class=\"row teambm\">\r\n<div class=\"col-md-2\"><img class=\"img img-thumbnail\" src=\"http://dcwcnepal.org.np/files/photos/team/akkalama.jpg\" alt=\"\" /></div>\r\n<div class=\"col-md-10 single-team-member\">\r\n<h3>Akka Lama</h3>\r\nChairperson\r\n<p>Akka Lama, the founder of DCWC Nepal, came from the rural village of Rajbash in 1997 for higher education in Kathmandu. After completing his University studies and working as a Thangka painter in the Thamel tourist district, he decided to follow his dream of supporting poor women and children in the village by bringing them educational opportunities and access to healthcare.</p>\r\n</div>\r\n</div>\r\n<div class=\"row teambm\">\r\n<div class=\"col-md-2\"><img class=\"img img-thumbnail\" src=\"http://dcwcnepal.org.np/files/photos/team/nabindramanandhar.jpg\" alt=\"\" /></div>\r\n<div class=\"col-md-10 single-team-member\">\r\n<h3>Nabindra Manandhar</h3>\r\nVice Chairperson\r\n<p>Coming Soon !</p>\r\n</div>\r\n</div>\r\n<div class=\"row teambm\">\r\n<div class=\"col-md-2\"><img class=\"img img-thumbnail\" src=\"http://dcwcnepal.org.np/files/photos/team/gunlama.jpg\" alt=\"\" /></div>\r\n<div class=\"col-md-10 single-team-member\">\r\n<h3>Guna Bahadur Waiba Lama</h3>\r\nSecretory\r\n<p>Coming Soon!</p>\r\n</div>\r\n</div>\r\n<div class=\"row teambm\">\r\n<div class=\"col-md-2\"><img class=\"img img-thumbnail\" src=\"http://dcwcnepal.org.np/files/photos/team/yogeshkumar-shrestha.jpg\" alt=\"\" /></div>\r\n<div class=\"col-md-10 single-team-member\">\r\n<h3>Yogesh Kumar Shrestha</h3>\r\nTreasure\r\n<p>Coming Soon!</p>\r\n</div>\r\n</div>\r\n<div class=\"row teambm\">\r\n<div class=\"col-md-2\"><img class=\"img img-thumbnail\" style=\"height: 109px; width: 109px;\" src=\"http://dcwcnepal.org.np/files/photos/team/default.jpg\" alt=\"\" /></div>\r\n<div class=\"col-md-10 single-team-member\">\r\n<h3>Surendra Manandha</h3>\r\nJoint Secretory\r\n<p>Coming Soon!</p>\r\n</div>\r\n</div>\r\n<div class=\"row teambm\">\r\n<div class=\"col-md-2\"><img class=\"img img-thumbnail\" src=\"http://dcwcnepal.org.np/files/photos/team/ranjitamanandhar.jpg\" alt=\"\" /></div>\r\n<div class=\"col-md-10 single-team-member\">\r\n<h3>Ranjita Manandhar</h3>\r\nMember\r\n<p>Coming Soon!</p>\r\n</div>\r\n</div>\r\n<div class=\"row teambm\">\r\n<div class=\"col-md-2\"><img class=\"img img-thumbnail\" style=\"height: 100px; width: 100px;\" src=\"http://dcwcnepal.org.np/files/photos/team/chanda_lama.jpg\" alt=\"\" /></div>\r\n<div class=\"col-md-10 single-team-member\">\r\n<h3>Chanda Lama</h3>\r\nChanda Lama\r\n<p>Coming Soon!</p>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-22 18:04:40', '2018-10-01 19:38:19'),
(3, 'Our Partners', 'our-partners', '<section class=\"event-feature sec-padding pb_60\" data-bg-color=\"#fafafa\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div id=\"owohf\" class=\"col-sm-12 featured-causes mb_20 pr_15\">\r\n<div class=\"col-sm-4\">\r\n<div class=\"thumb\"><img class=\"full-width\" src=\"http://dcwcnepal.org.np/files/photos/clients/p7.jpg\" alt=\"\" /></div>\r\n</div>\r\n<div class=\"col-sm-6\">\r\n<div class=\"causes-details\">\r\n<h3>One World &ndash; One Heart Foundation</h3>\r\n<p>Ranchos de Taos, NM 87557,822 B Paseo del Pueblo Sur</p>\r\n<p>PO Box 1840</p>\r\n<div class=\"pull-left\"><a class=\"thm-btn btn-xs mt_30\" href=\"#\">Visit</a></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"globalgiving\" class=\"col-sm-12 featured-causes mb_20 pr_15\">\r\n<div class=\"col-sm-4\">\r\n<div class=\"thumb\"><img class=\"full-width\" src=\"http://dcwcnepal.org.np/files/photos/clients/p1.jpg\" alt=\"\" /></div>\r\n</div>\r\n<div class=\"col-sm-8\">\r\n<div class=\"causes-details\">\r\n<h3>Global Giving</h3>\r\n<p class=\"p-title\">Mr and Mrs Patrik &amp; KarinGraney</p>\r\n<p>978 Hawthorne D, Walnut Creek,A 94596 , USA</p>\r\n<p>923-938-7540</p>\r\n<p>pgraneys@yahoocom</p>\r\n<div class=\"pull-left\"><a class=\"thm-btn btn-xs mt_30\" href=\"https://www.globalgiving.org/\">Visit</a></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"dcwcusa\" class=\"col-sm-12 featured-causes mb_20 pr_15\">\r\n<div class=\"col-sm-4\">\r\n<div class=\"thumb\"><img class=\"full-width\" src=\"http://dcwcnepal.org.np/files/photos/clients/p2.jpg\" alt=\"\" /></div>\r\n</div>\r\n<div class=\"col-sm-8\">\r\n<div class=\"causes-details\">\r\n<h3>DCWC USA</h3>\r\n<p class=\"p-title\">M/S Steve&amp;Jeanette Gross</p>\r\n<p>6206 Contra Cost Road, Oakland, CA 94618</p>\r\n<p>510-409-1507</p>\r\n<p>stevegross@earthlink.net</p>\r\n<p>510-409-9774</p>\r\n<p>jeanetteg2@mac.com</p>\r\n<div class=\"pull-left\"><a class=\"thm-btn btn-xs mt_30\" href=\"https://www.dcwcnepal-us.org/\">Visit</a></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"lovenepal\" class=\"col-sm-12 featured-causes mb_20 pr_15\">\r\n<div class=\"col-sm-4\">\r\n<div class=\"thumb\"><img class=\"full-width\" src=\"http://dcwcnepal.org.np/files/photos/clients/p3.jpg\" alt=\"\" /></div>\r\n</div>\r\n<div class=\"col-sm-8\">\r\n<div class=\"causes-details\">\r\n<h3>Lovenepal UK</h3>\r\n<p class=\"p-title\">Gary Collier , Rob Brehmen ,james Wilson, Patrick Moran, Sue Hamilton</p>\r\n<p>18st Albans Road , Lytham St Annes</p>\r\n<p>01253788434</p>\r\n<p>gary@lovenepal.org.uk</p>\r\n<div class=\"pull-left\"><a class=\"thm-btn btn-xs mt_30\" href=\"https://www.lovenepal.org.uk/\">Visit</a></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"atp\" class=\"col-sm-12 featured-causes mb_20 pr_15\">\r\n<div class=\"col-sm-4\">\r\n<div class=\"thumb\"><img class=\"full-width\" src=\"http://dcwcnepal.org.np/files/photos/clients/p4.jpg\" alt=\"\" /></div>\r\n</div>\r\n<div class=\"col-sm-8\">\r\n<div class=\"causes-details\">\r\n<h3>Association Terre Pure</h3>\r\n<p>Rives 09320 SOULAN France</p>\r\n<p>05 61 96 87 09</p>\r\n<p>associationterrepure@gmail.com</p>\r\n<div class=\"pull-left\"><a class=\"thm-btn btn-xs mt_30\" href=\"https://www.terrepure.com/\">Visit</a></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"hh\" class=\"col-sm-12 featured-causes mb_20 pr_15\">\r\n<div class=\"col-sm-4\">\r\n<div class=\"thumb\"><img class=\"full-width\" src=\"http://dcwcnepal.org.np/files/photos/clients/p5.jpg\" alt=\"\" /></div>\r\n</div>\r\n<div class=\"col-sm-8\">\r\n<div class=\"causes-details\">\r\n<h3>Haphimalaya</h3>\r\n<p class=\"p-title\">Paul Mellot</p>\r\n<p><button class=\"fa fa-map-marker picon\"></button>France</p>\r\n<p>haphimalaya.evadeh@gmail.com</p>\r\n<div class=\"pull-left\"><a class=\"thm-btn btn-xs mt_30\" href=\"#\">Visit</a></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"namastenepal\" class=\"col-sm-12 featured-causes mb_20 pr_15\">\r\n<div class=\"col-sm-4\">\r\n<div class=\"thumb\"><img class=\"full-width\" src=\"http://dcwcnepal.org.np/files/photos/clients/p6.jpg\" alt=\"\" /></div>\r\n</div>\r\n<div class=\"col-sm-8\">\r\n<div class=\"causes-details\">\r\n<h3>Namaste Nepal</h3>\r\n<p class=\"p-title\">Tomas Beranek</p>\r\n<p>Jilovska 1150/41, 14200 Praha-4, Czech republic</p>\r\n<p>129929929</p>\r\n<p>info@namastenepal.cz</p>\r\n<div class=\"pull-left\"><a class=\"thm-btn btn-xs mt_30\" href=\"#\">Visit</a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-22 18:05:03', '2018-09-24 11:22:21'),
(4, 'Our Patrons', 'our-patrons', NULL, NULL, '1', '2018-09-22 18:05:17', '2018-09-22 18:05:17'),
(5, 'Donate', 'donate', '<section class=\"sec-padding full-sec\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<h3>DCWC NEPAL</h3>\r\nEverest Bank Ltd. A/C No:-00200501002813 A/C Name:-development of Children and women center Shift Code: EVBLNPKA</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-22 18:05:29', '2018-10-08 10:25:51'),
(6, 'Sponsor a Student', 'sponsor-a-student', '<section class=\"sec-padding full-sec\">\r\n<div class=\"container\">\r\n<div class=\"row\">Building schools in the remote villages is often not enough. Even though the education is virtually free, some of the children do not attend for lack of funds for uniforms, stationary supplies, backpacks, or other school supplies. Through sponsorship, those necessary expenses are met so that the children can attend school.</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-22 18:05:45', '2018-09-24 23:03:04'),
(7, 'Fundraisers', 'fundraisers', NULL, NULL, '1', '2018-09-22 18:05:58', '2018-09-22 18:05:58'),
(8, 'Volunteer', 'volunteer', '<section class=\"sec-padding full-sec\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<p>Volunteering means to support for the needy poor people who are being deprived and unapproachable for better opportunities. It can be done by various means like by providing funds or by providing time or by providing skills. We welcome anybody who are interested to contribute to the poor community as a volunteer.</p>\r\n<strong> The following are the areas of volunteering:</strong>\r\n<ul>\r\n<li>Medical personnel can carry work in community hospital</li>\r\n<li>Teachers can teach English, science, mathematics, arts or games in community school.</li>\r\n<li>To share cultures, lesson learnt and practices of life in Nepal.</li>\r\n<li>To contribute clothes and other materials to the community.Making donations for infrastructures, skill development, awareness raising activities etc.</li>\r\n<li>Sponsoring children to develop their education and more.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-22 18:06:25', '2018-09-24 23:03:47'),
(9, 'Mission and Vision', 'mission-and-vision', '<section class=\"sec-padding full-sec\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<p>Our goal is to bring medical care to all 120000 people in the Kavre/Sindhupalchok/ Dolakha/Remechhap districts. We plan to expand inpatient capacity from 15 to 51 beds. The establishment of a tele-medicine center with on-line assistance from specialists will enable us to treat even complicated medical cases in the village and facilitate training of local sta. It is our belief that health security combined with educational opportunities will provide a greatly improved quality of life for poor Nepali villagers.</p>\r\n</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-24 23:04:57', '2018-09-24 23:04:57'),
(10, 'Organizational Chart', 'organizational-chart', '<section class=\"sec-padding meet-Volunteer pb_30\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-md-6 col-sm-12 col-xs-12\"><img class=\"img img-responsive\" src=\"http://dcwcnepal.org.np/files/photos/about/Organogram-1.jpg\" /></div>\r\n<br />\r\n<div class=\"col-md-6 col-sm-12 col-xs-12\"><img class=\"img img-responsive\" src=\"http://dcwcnepal.org.np/files/photos/about/Organogram-2.jpg\" /></div>\r\n</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-24 23:06:36', '2018-09-27 11:33:31'),
(11, 'DCWC Staffs', 'dcwc-staffs', '<section class=\"sec-padding volunteer-profile\">\r\n<div class=\"container\">\r\n<div class=\"row teambm\">\r\n<div class=\"col-md-2\"><img src=\"http://www.dcwcnepal.org.np/public/files/bikesh_shrestha.jpg\" alt=\"\" /></div>\r\n<div class=\"col-md-10 single-team-member\">\r\n<h3>Bikesh Shrestha</h3>\r\nOffice Accountant\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class=\"row teambm\">\r\n<div class=\"col-md-2\"><img src=\"http://www.dcwcnepal.org.np/public/files/ganesh_man_shrestha.jpg\" alt=\"\" /></div>\r\n<div class=\"col-md-10 single-team-member\">\r\n<h3>Ganesh Man Shrestha</h3>\r\nOffice Assistance\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-24 23:24:01', '2018-09-29 12:56:25'),
(12, 'Contact Us', 'contact-us', '<section class=\"contact-content sec-padding\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<h2>Development of children &amp; Women Center</h2>\r\n<div class=\"col-md-6\"><br /><br />\r\n<ul class=\"contact-info\">\r\n<li>\r\n<div class=\"icon-box\">\r\n<div class=\"inner\">&nbsp;</div>\r\n</div>\r\n<div class=\"content-box\">\r\n<h4>Address</h4>\r\n<p>Thamel , <br />kathmandu, Nepal</p>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"icon-box\">\r\n<div class=\"inner\">&nbsp;</div>\r\n</div>\r\n<div class=\"content-box\">\r\n<h4>Phone</h4>\r\n<p>+977-1-4244819, 9851058224, 9803031026</p>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"icon-box\">\r\n<div class=\"inner\">&nbsp;</div>\r\n</div>\r\n<div class=\"content-box\">\r\n<h4>Email</h4>\r\n<p>dcwcnepal@gmail.com</p>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-6\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.1601457440106!2d85.30889421439136!3d27.712341282789804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fdcab84bcb%3A0x6077d6aa388e92b4!2sDCWC+Office!5e0!3m2!1sen!2snp!4v1538033772354\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-24 23:26:07', '2018-10-01 20:54:04'),
(13, 'Access to Community Hospital', 'access-to-community-hospital', '<section class=\"sec-padding about-content full-sec\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<p>The Community Hospital is located at Nagre Gagarche Village Development Committee (VDC) of the Kavrepalanchok district which lies in the central development region of Nepal. The Kavrepalanchok district is surrounded by Ramechhap and Dolakha to the east, Kathmandu, Bhaktapur and Lalitpur to the west, Sindhupalchok to the north and Sindhuli and Makawanpur districts to the south. The total area of 1404 square kilometre extends from the lowest altitude of 200 meters at sea level to 3018 meters. Politically, Kavre is divided into 87 VDCs and 3 municipalities. Among them, Nagre Gagarche is a remote and under-developed area of the Kavre district. Dhulikhel is the District head quarter of Kavre, and lies 30 km east of Kathmandu. The Araniko highway (way to Tibet) passes through Dhulikhel. The Community Hospital lies 62 km east from the district headquarter Dhulikhel. There are 27 kms of black topped road followed by 35 kms earthen, rough, seasonal road up to the hospital site.</p>\r\n</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-26 19:31:20', '2018-09-26 19:31:20'),
(14, 'Beneficiaries from the Hospital', 'beneficiaries-from-the-hospital', '<section class=\"sec-padding about-content full-sec\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<p>The hospital is located at the junction of the Kavre, Sindhupalchok, Dolakha and Ramechhap districts, and it serves 20 of the surrounding VDCs of that locality. On average, there are 6000 people that live in a VDC. Altogether there are 120,000 people in the service area . Initially hospital capacity will be about 50 people/day, to increase to 200/day by the time the hospital functions fully. About 30% of those patient will have gotten lab tests and 10 patients on average will remain hospitalized.</p>\r\n</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-26 19:31:59', '2018-09-26 19:31:59'),
(15, 'Mission, Goal & Objectives', 'mission-goal-objectives', '<section class=\"sec-padding about-content full-sec\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<p>&nbsp;</p>\r\n<p><strong>Mission:</strong><br />The DCWC hospital will be accessible, affordable and sustainable with high quality medical care for the villagers in this remote area.</p>\r\n<p><strong>Goal:</strong>To improve the health status of poor and marginalized people living in rural areas with special health service interventions.</p>\r\n<p><strong>Objectives:</strong>The DCWC Community Hospital aims to:</p>\r\n<ul>\r\n<ul>\r\n<li>Provide general and specialized curative health care services to poor and marginalized people through the community hospital.</li>\r\n</ul>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<ul>\r\n<li>Provide basic preventive services such as family planning, immunization and health awareness activities to patients and surrounding communities.</li>\r\n</ul>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<ul>\r\n<li>Establish general health service centre and establish a referral system to urban hospitals for further treatment.</li>\r\n</ul>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<ul>\r\n<li>Provide appropriate quality treatment services for both in- and outpatient care.</li>\r\n</ul>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<ul>\r\n<li>Coordinate and cooperate with government agencies and concerned stakeholders/donors to strengthen our unity in the fight against disease.</li>\r\n</ul>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-26 19:32:41', '2018-09-26 19:32:41'),
(16, 'Services', 'services', '<section class=\"sec-padding about-content full-sec\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<p>The community hospital is providing basic health care treatment services through its skilled medical personnel to the patients. The team is lead by a Medical Doctor followed by an HA, a Staff Nurse, a CMA, an ANM, and Lab/x-ray Assistants. A Hospital management committee is formed at the local level with local volunteers who formulate norms and management systems and are responsible to monitor hospital activities for further improvements.</p>\r\n<p><strong>The following are the specific services provided to patients:</strong></p>\r\n<ul>\r\n<li>General Health Check-up and treatment of common diseases</li>\r\n<li>Prevention and treatment of epidemic of tuberculosis, water borne diseases, faeco-oral diseases in priority</li>\r\n<li>24 hour emergency services</li>\r\n<li>Minor OT</li>\r\n<li>X-ray</li>\r\n<li>Lab test</li>\r\n<li>Pharmacy</li>\r\n<li>Health awareness activities</li>\r\n<li>Referral of cases to city hospitals</li>\r\n<li>Health camp operation</li>\r\n<li>Birthing Center operation</li>\r\n<li>Immunizations in coordination with government health centers</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-26 19:33:28', '2018-09-26 19:33:28'),
(17, 'Hospital Staffs', 'hospital-staffs', '<section class=\"sec-padding meet-Volunteer pb_30\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div class=\"col-md-3\">\r\n<div class=\"single-team-member mb_60\">\r\n<div class=\"img-box\"><img class=\"full-width-circle\" src=\"http://dcwcnepal.org.np/files/photos/team/drsameer.jpg\" alt=\"\" /></div>\r\n<h3>Dr. Sameer Dulal</h3>\r\nMedical Officer</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<div class=\"single-team-member mb_60\">\r\n<div class=\"img-box\"><img class=\"full-width-circle\" src=\"http://dcwcnepal.org.np/files/photos/team/02-Tul-Bahadu-Lama-150x150.jpg\" alt=\"\" /></div>\r\n<h3>Tul Bahadu Lama</h3>\r\nManager</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<div class=\"single-team-member mb_60\">\r\n<div class=\"img-box\"><img class=\"full-width-circle\" src=\"http://dcwcnepal.org.np/files/photos/team/sharmila.jpg\" alt=\"\" /></div>\r\n<h3>Sharmila lama</h3>\r\nOutreach Educator</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<div class=\"single-team-member mb_60\">\r\n<div class=\"img-box\"><img class=\"full-width-circle\" src=\"http://dcwcnepal.org.np/files/photos/team/gita.jpg\" alt=\"\" /></div>\r\n<h3>Gita Kadariya</h3>\r\nHealth Assistant</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<div class=\"single-team-member mb_60\">\r\n<div class=\"img-box\"><img class=\"full-width-circle\" src=\"http://dcwcnepal.org.np/files/photos/team/05-Alina-Lama-150x150.jpg\" alt=\"\" /></div>\r\n<h3>Alina Lama</h3>\r\nStaff Nurse(With SBA)</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<div class=\"single-team-member mb_60\">\r\n<div class=\"img-box\"><img class=\"full-width-circle\" src=\"http://dcwcnepal.org.np/files/photos/team/Sarmila_Kumal-1.jpg\" alt=\"\" /></div>\r\n<h3>Sarmila Kumal</h3>\r\nANM(with SBA)</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<div class=\"single-team-member mb_60\">\r\n<div class=\"img-box\"><img class=\"full-width-circle\" src=\"http://dcwcnepal.org.np/files/photos/team/pasang.jpg\" alt=\"\" /></div>\r\n<h3>Pasang Syangtan</h3>\r\nPharmacist</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<div class=\"single-team-member mb_60\">\r\n<div class=\"img-box\"><img class=\"full-width-circle\" src=\"http://dcwcnepal.org.np/files/photos/team/default.jpg\" alt=\"\" /></div>\r\n<h3>Tanka Thapa</h3>\r\nSecurity Guard</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<div class=\"single-team-member mb_60\">\r\n<div class=\"img-box\"><img class=\"full-width-circle\" src=\"http://dcwcnepal.org.np/files/photos/team/09-Parbati-Chaulagain-150x150.jpg\" alt=\"\" /></div>\r\n<h3>Parbati Chaulagain</h3>\r\nLab Assistant</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<div class=\"single-team-member mb_60\">\r\n<div class=\"img-box\"><img class=\"full-width-circle\" src=\"http://dcwcnepal.org.np/files/photos/team/10-Lalkaji-Tamang-150x150.jpg\" alt=\"\" /></div>\r\n<h3>Lalkaji Tamang</h3>\r\nCMA/X-Ray Operator</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<div class=\"single-team-member mb_60\">\r\n<div class=\"img-box\"><img class=\"full-width-circle\" src=\"http://dcwcnepal.org.np/files/photos/team/11-Tek-Bahadu-Thapa-150x150.jpg\" alt=\"\" /></div>\r\n<h3>Tek Bahadu Thapa Magar</h3>\r\nAmbulance Driver</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<div class=\"single-team-member mb_60\">\r\n<div class=\"img-box\"><img class=\"full-width-circle\" src=\"http://dcwcnepal.org.np/files/photos/team/12-Lal-Maya-Tamang-150x150.jpg\" alt=\"\" /></div>\r\n<h3>Lal Maya Tamang</h3>\r\nOffice Assistant</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<div class=\"single-team-member mb_60\">\r\n<div class=\"img-box\"><img class=\"full-width-circle\" src=\"http://dcwcnepal.org.np/files/photos/team/default.jpg\" alt=\"\" /></div>\r\n<h3>Srijana Karki</h3>\r\nPharmacist</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<div class=\"single-team-member mb_60\">\r\n<div class=\"img-box\"><img class=\"full-width-circle\" src=\"http://dcwcnepal.org.np/files/photos/team/13-Urmo-Lama-150x150.jpg\" alt=\"\" /></div>\r\n<h3>Urmo Lama</h3>\r\nOffice Assistant</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-26 19:37:39', '2018-10-01 19:33:39'),
(18, 'History', 'history', '<section class=\"sec-padding about-content full-sec\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-12 col-md-12\">\r\n<div class=\"full-sec-content\" align=\"center\">\r\n<h3>DCWC Community Hospital lies at Nagre Gagarche Village Development Committee (VDC) &ndash; 4, Rajbas in the Kavre district of Nepal.</h3>\r\n<br />\r\n<p>Among many VDCs of the Kavre district, the Nagre Gagarche VDC is one of the most remote of the district and is a junction of Sindhupalchok, Dolakha and Ramechhap districts. DCWC has launched some projects to support the community through school building, scholarship distribution to poor children to help their education, clothes distribution, toilet construction, game completion, mobile health camps for medical treatment, etc since 2003. During our presence at the area, we were able to make some crucial observations regarding health services. Government health and sub-health posts are located at rural places but are unable to provide even basic health services to the rural people due to limited resources for medicines, for trained and qualied medical personnel, for necessary basic equipment and physical infrastructure. Due to the lack of good hospital facilities in rural villages, many people used to die at an early age from common diseases. Pregnant women on the verge of delivery died on the way to the hospital.</p>\r\n<p>Children died from diarrhea. Sick people were unable to aord treatment or could not reach a hospital in time due to unavailability of transport (ambulance). Hospitals are centered in the Capital and are beyond access for poor people. Therefore, few people went to a hospital in the city and most of the people used Dhami Jhankri, traditional healers to cure illness. So, trustees of DCWC Nepal and DCWC UK discussed these issue and then carried out a ve day health camp, staed by specialist medical doctors, which served about 1200 patients as per registration book. Having observed the great need for medical care they decided to establish a 15 bed community hospital in the area to deal with the health related problems of village people at the local level and with very nominal cost. The community hospital is in operation since September 2010. Mainly the DCWC Nepal-UK and associated organizations and corporations have supported and funded us to established the DCWC Community Hospital. Likewise the Pharmacy Building was funded by the DCWC Nepal-US and Volunteer Medical Personnel from Namaste Nepal (DCWC Nepal-Czech).</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class=\"gallery-section pb_2\">\r\n<div class=\"auto-container\">\r\n<div class=\"sec-title text-center\">\r\n<h2>2008 &ndash; Construction Begins</h2>\r\n</div>\r\n</div>\r\n<div class=\"container\">\r\n<div class=\"clearfix\"><!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/1.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/1.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/2.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/2.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/3.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/3.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/4.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/4.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class=\"gallery-section pb_2\">\r\n<div class=\"auto-container\">\r\n<div class=\"sec-title text-center\">\r\n<h2>2009 &ndash; Work In Progress</h2>\r\n</div>\r\n</div>\r\n<div class=\"container\">\r\n<div class=\"clearfix\"><!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/5.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/5.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/6.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/6.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/7.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/7.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/8.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/8.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class=\"gallery-section pb_2\">\r\n<div class=\"auto-container\">\r\n<div class=\"sec-title text-center\">\r\n<h2>2010 &ndash; Inauguration Ceremony</h2>\r\n</div>\r\n</div>\r\n<div class=\"container\">\r\n<div class=\"clearfix\"><!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/9.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/9.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/10.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/10.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/11.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/11.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/12.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/12.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/13.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/13.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/14.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/14.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/15.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/15.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/16.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/16.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class=\"gallery-section pb_2\">\r\n<div class=\"auto-container\">\r\n<div class=\"sec-title text-center\">\r\n<h2>2015</h2>\r\n</div>\r\n</div>\r\n<div class=\"container\">\r\n<div class=\"clearfix\"><!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/17.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/17.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/18.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/18.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/19.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/19.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n<!--Image Box-->\r\n<div class=\"image-box\">\r\n<div class=\"inner-box\">\r\n<figure class=\"image\"><a class=\"lightbox-image\" href=\"http://dcwcnepal.org.np/files/photos/hospital/20.jpg\"><img src=\"http://dcwcnepal.org.np/files/photos/hospital/20.jpg\" alt=\"\" /></a></figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', NULL, '1', '2018-09-27 11:22:03', '2018-09-27 11:22:03'),
(19, 'testing', 'testing', '<p><img class=\"lightbox\" src=\"http://localhost:8000/files/photos/client/iphonexsmaxgold.jpg\" alt=\"\" width=\"250\" height=\"190\" />&nbsp;&nbsp;<img class=\"lightbox\" src=\"http://localhost:8000/files/photos/client/iphonexsmaxgold.jpg\" alt=\"\" width=\"195\" height=\"195\" /></p>', NULL, '1', '2018-11-02 23:23:42', '2018-11-02 23:28:28');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `ordering` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `ordering`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Namaste Nepal', 'images/2018/09/1537547757.logo-3.png', '2018-09-21 20:35:57', '2018-09-21 20:35:57'),
(2, 2, 'Love Nepal', 'images/2018/09/1537623732.logo-1.png', '2018-09-22 17:42:12', '2018-09-22 17:42:12'),
(3, 3, 'DCWC USA', 'images/2018/09/1537624229.logo-2.png', '2018-09-22 17:50:29', '2018-09-22 17:50:29'),
(4, 4, 'Global Giving', 'images/2018/09/1537624535.logo-4.png', '2018-09-22 17:55:35', '2018-09-22 17:55:35'),
(5, NULL, 'Association Terre Pure', 'images/2018/09/1537624742.logo-5.png', '2018-09-22 17:59:02', '2018-09-22 17:59:02'),
(6, 5, 'Haphimalaya', 'images/2018/09/1537624852.logo-6.png', '2018-09-22 18:00:52', '2018-09-22 18:00:52'),
(7, 6, 'One World – One Heart Foundation', 'images/2018/09/1537624873.logo-7.png', '2018-09-22 18:01:13', '2018-09-22 18:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sudeepsth@outlook.com', '$2y$10$wLMVBOmSABP44nnIbQ0byOvn9cBf1BNDKGR/wIKMuCQb3dP8EgIcK', '2018-09-29 18:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `popup`
--

CREATE TABLE `popup` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `image` varchar(512) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `popup`
--

INSERT INTO `popup` (`id`, `title`, `image`, `ordering`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Happy Dashain', 'images/2018/10/1538933056.dashain.jpg', NULL, '1', '2018-10-04 11:09:08', '2018-10-07 21:24:16');

-- --------------------------------------------------------

--
-- Table structure for table `program_description`
--

CREATE TABLE `program_description` (
  `id` int(11) NOT NULL,
  `program_name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_description`
--

INSERT INTO `program_description` (`id`, `program_name`, `slug`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Accomplished', 'accomplished', '1', '<p>test test test</p>', '2018-10-29 20:29:43', '2018-10-29 20:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `requirement` text COLLATE utf8mb4_unicode_ci,
  `timeline` text COLLATE utf8mb4_unicode_ci,
  `project` enum('1','2','3') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_1` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_id` int(10) UNSIGNED NOT NULL,
  `project_number` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `homepage` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `published_date` datetime DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `slug`, `title`, `description`, `requirement`, `timeline`, `project`, `images`, `images_1`, `year_id`, `project_number`, `ordering`, `homepage`, `district_id`, `state_id`, `published_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dcwc-community-hospital', 'DCWC Community Hospital', '<p>DCWC Community Hospital lies in Nagre Gagarche Chaurideurali Rural Municipality, Ward No: 2, Rajabash in Kavre District of Nepal.</p>', '<p>DCWC Community Hospital lies in Nagre Gagarche Chaurideurali Rural Municipality, Ward No: 2, Rajabash in Kavre District of Nepal.</p>', NULL, '2', 'images/2018/09/1537418949.1.jpg', 'images/2018/09/1537418949.1.jpg2018/09/1537418949.1 (1).jpg', 3, NULL, NULL, '1', 2, 1, '2018-09-16 11:31:25', '1', '2018-09-20 07:21:33', '2018-10-05 11:15:50'),
(2, 'chetana-primary-school', 'Chetana Primary School', '<p><strong>Location:</strong>&nbsp;Nagarkot VDC in Bhaktapur district.<br /><strong>Donated by:</strong>&nbsp;DCWC in Switzerland and Coordinated by Stephan &amp; Isabel<br />The first school to be completed by DCWC was funded by Stephan and Isabel who helped Akka to establish DCWC back in 2000. The school was completed and opened in June 2004</p>', NULL, NULL, '1', NULL, NULL, 4, NULL, NULL, '0', 4, 1, '2004-06-24 14:23:19', '1', '2018-09-25 00:12:10', '2018-10-05 10:50:42'),
(3, 'tashi-bal-bikas-primary-school', 'Tashi Bal Bikas Primary School', '<p><strong>Location:</strong>&nbsp;Nagre Gagarche VDC ward no. 4, Kavre district.<br /><strong>Donated by:</strong>&nbsp;DCWC in Scotland and Eddie Moore<br />Only the second school to be completed by DCWC Scotland was Bal Bikas which was funded by the wonderful Eddie Moore. Eddie felt strongly this was something he needed to do and funded the entire project himself. The school was completed and opened in December 2004.</p>', NULL, NULL, '1', NULL, NULL, 4, NULL, NULL, '0', 2, 1, '2018-09-24 20:14:08', '1', '2018-09-25 00:14:08', '2018-10-05 10:50:59'),
(4, 'kalika-malika-primary-school', 'Kalika Malika Primary School', '<p><strong>Location:</strong>&nbsp;Nagre Gagarche VDC ward no. 9, Kavre district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (UK) with cash assistance from Phillipa Dalglish-Reid<br />Kalika Malika School was opened on 30th April 2006 and was the first school completed solely with funds raised in the UK. A sizable donation was made by Phillipa Dalglish-Reid and we though it appropriate that this should be recognized on the plaque of our first school opening. The school was opened by a group who had done our Everest base camp trek in 2006. Once they had returned from the mountains they made the 9 hour journey, 5 hours by 4-wheel drive and 4 hours walking to reach the village.</p>', NULL, NULL, '1', 'images/2018/09/1538158756.kalikamalika.jpg', 'images/2018/09/1538158756.kalikamalika.jpg2018/09/1538158756.kalikamalika.jpg', 3, NULL, NULL, '0', 2, 1, '2018-09-24 20:15:27', '1', '2018-09-25 00:15:27', '2018-10-05 10:51:19'),
(5, 'tama-khani-primary-school', 'Tama Khani Primary School', '<p><strong>Location:</strong>&nbsp;Nagre Gagarche VDC ward no. 4, Kavre district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (UK) with cash assistance from Phil Hanson<br />Tama Khani School was opened on 13th April 2007. Trustee Phil Hanson had decided after a visit the previous year to Nepal that he would like to raise some funds himself to build a school. Phil contributed around half the funding of this school and was recognized with the naming on the plaque. The school was opened by a group had come to Nepal to do a charity Tibet trip and short trek in the Everest region. This trip was a particularly long one, having set out from Kathmandu at 6.00am the group only arrived at the village at 5.00pm. This was the first project being filmed by documentary maker Jason Graham from Cozmic TV.</p>', NULL, NULL, '1', 'images/2018/09/1538159402.tamakhani.jpg', 'images/2018/09/1538159402.tamakhani.jpg2018/09/1538159402.tamakhani.jpg', 6, NULL, NULL, '0', 2, 1, '2018-09-24 20:17:29', '1', '2018-09-25 00:17:29', '2018-10-05 11:01:16'),
(6, 'batuk-bhairab-primary-school', 'Batuk Bhairab Primary School', '<p><strong>Location:</strong>&nbsp;Bhimphedi VDC ward no. 4, Makawanpur district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (UK) with cash assistance Dave Jennings &amp; UAP<br />Batuk Bhairab School was opened on 7th May 2007. This was the first school built by Bury based door hardware company UAP. Company owner Dave Jennings had attended one of our auctions the previous November and liked what he saw. After being impressed with our presentation Dave made an incredible offer to build a series of 5 UAP schools over the next few years. The school was opened by the DCWC Nepal Everest base camp trek 2007 group and in particular Sean Wilson (Martin Platt of Coronation street fame). Sean had joined the trip as part of the documentary being filmed by Jason Graham, which was also receiving considerable funding from Dave Jennings and UAP.</p>', NULL, NULL, '1', 'images/2018/09/1538158876.batuk.jpg', 'images/2018/09/1538158876.batuk.jpg2018/09/1538158876.batuk.jpg', 6, NULL, NULL, '0', 5, 1, '2018-09-24 20:18:02', '1', '2018-09-25 00:18:02', '2018-10-05 11:01:54'),
(7, 'chaurikhola-primary-school', 'Chaurikhola Primary School', '<p><strong>Location:</strong>&nbsp;Nagre Gagarche VDC ward no. 7, Kavre district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (UK) with cash assistance from Dave Jennings &amp; UAP<br />Chaurikhola School was opened on 30th August 2007. This was the second school built by Bury based door hardware company UAP. After completing the first UAP school they were keen to get the next one underway as soon as possible. The site for our fourth school had the rare opportunity in Nepal of having enough space for a football pitch. With Dave being a keen football fan we hatched the plan to have as part of the school opening, a football competition and a health camp. we were very fortunate to secure the services of Brian Kilcline as part of the DCWC football team and Brian made a fine contribution to the documentary which continued to be filmed there. The school was opened by Ben Jennings, son of company owner Dave Jennings.</p>', NULL, NULL, '1', 'images/2018/09/1538158969.chaukhola.jpg', 'images/2018/09/1538158969.chaukhola.jpg2018/09/1538158969.chaukhola.jpg', 6, NULL, NULL, '0', 2, 1, '2018-09-24 20:18:38', '1', '2018-09-25 00:18:38', '2018-10-05 11:12:41'),
(8, 'khanda-devi-secondary-school', 'Khanda Devi Secondary School', '<p><strong>Location:</strong>&nbsp;Nagre Gagarche VDC ward no. 5, Kavre district.<br /><strong>Donated by:</strong>&nbsp;Namaste Nepal (DCWC Nepal), Czech Republic<br />In Czech Republic we have a sister organization called &ldquo;Namaste Nepal&rdquo;, run by the very selfless and wonderful Tomas Baranek and friends. Tomas is a topographer and travel book writer and his many travels to the Himalayan region brought him to Nepal where he met Akka and set up the charity back in Czech Republic. Tomas holds all kinds of exhibitions and fund raising projects in and around Prague and also in Slovakia. The school was completed and opened in April 2008.</p>', NULL, NULL, '1', 'images/2018/09/1538159123.khandevi.jpg', 'images/2018/09/1538159123.khandevi.jpg2018/09/1538159123.khandevi.jpg', 7, NULL, NULL, '0', 2, 1, '2018-09-24 20:19:08', '1', '2018-09-25 00:19:08', '2018-10-05 11:12:23'),
(9, 'darga-primary-school', 'Darga Primary School', '<p><strong>Location:</strong>&nbsp;Gaushwara VDC ward no. 2, Ramechhap district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (UK) with cash assistance from Cleveleys Park Methodist Church<br />Shree Darga primary School was opened on 14th April 2008. Funding for the school was donated by the kind people of Cleveleys park Methodist church and was co-ordinated by DCWC Nepal trustee James Wilson. The school was opened James and several volunteers from the church who had gone out to Nepal to help the charity and to open the school. Despite a gruelling ascent to reach the school the party eventually made it up there successfully.</p>', NULL, NULL, '1', 'images/2018/09/1538159082.darga.jpg', 'images/2018/09/1538159082.darga.jpg2018/09/1538159082.darga.jpg', 7, NULL, NULL, '0', 3, 1, '2018-09-24 20:19:44', '1', '2018-09-25 00:19:44', '2018-10-05 11:12:07'),
(10, 'sunkoshi-primary-school', 'Sunkoshi Primary School', '<p><strong>Location:</strong>&nbsp;Madan Kundari VDC ward no. 8, Kavre district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (UK) with cash assistance from HSBC Bank<br />Shree Sunkoshi Primary School was opened on 8th May 2008. Funding for the school was donated by HSBC bank and in particular Andy Collins, regional manager of HSBC based in Preston. The amount raised to build the school was raised at a charity ball held in Manchester in which DCWC Nepal was fortunate enough to be one of the recipients. The school was opened by the members of the Everest base camp trek 2008.</p>', NULL, NULL, '1', 'images/2018/09/1538159328.sunkoshi.jpg', 'images/2018/09/1538159328.sunkoshi.jpg2018/09/1538159328.sunkoshi.jpg', 7, NULL, NULL, '0', 2, 1, '2018-09-24 20:20:25', '1', '2018-09-25 00:20:25', '2018-10-05 11:06:12'),
(11, 'antarastriya-yuba-barsa-lower-secondary-school', 'Antarastriya Yuba Barsa Lower Secondary School', '<p><strong>Location:</strong>&nbsp;Lakhanpur VDC ward no. 1, Ramechhap district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (UK) with cash assistance from Dave Jennings &amp; UAP<br />Antarastriya Yuba Barsa Lower Secondary School was opened on 26th August 2008. This was the third school built by Bury based door hardware company UAP. For this school opening UAP employee Chris Pankhurst and his daughter Emma made the journey to Nepal. Despite not finding the terrain and the ascent to the school easy going, they stuck at it and reached it OK. Emma enjoyed the experience so much she is now planning to return to the village to do some teaching.</p>', NULL, NULL, '1', NULL, NULL, 7, NULL, NULL, '0', 3, 1, '2018-09-24 20:20:59', '1', '2018-09-25 00:20:59', '2018-10-05 17:13:13'),
(12, 'seti-devi-primary-school', 'Seti Devi Primary School', '<p><strong>Location:</strong>&nbsp;Sanu Bangthali VDC ward no. 2, Kavre district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (UK) with cash assistance from Tim Kane memorial fund<br />Seti Devi Primary School was opened on 3rd October 2008. Whilst travelling in Tibet in 2007. It was told of the tragic news of the death of Tim Kane. I&rsquo;d come to know Tim well over the previous year and he&rsquo;d shown a keen interest in helping the charity with 2 trips planned to Nepal. Tim was killed whilst out cycling by a passing motorist. The funding for the school was raised from the funeral fund. We were very fortunate to have a Simon Booth, a cousin of Tims, go out to Nepal to open the school.</p>', NULL, NULL, '1', 'images/2018/09/1538159313.setidevi.jpg', 'images/2018/09/1538159313.setidevi.jpg2018/09/1538159313.setidevi.jpg', 7, NULL, NULL, '0', 2, 1, '2018-09-24 20:21:56', '1', '2018-09-25 00:21:56', '2018-10-05 17:13:37'),
(13, 'bokse-primary-school', 'Bokse Primary School', '<p><strong>Location:</strong>&nbsp;Kattike Deurali VDC ward no. 9, Kavre district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (UK) with cash assistance from Steve Lowe &amp; Fans of Accrington Stanley FC<br />Shree Bokshe Primary School was opened on 20th April 2009. The funding for the school was raised by fans of Accrington Stanley walking the 16 mile journey from Accrington to an away game at Rochdale. The project was co-ordinated by life long Accys fan Steve Lowe who is also a Radio DJ at BBC Radio Lancashire. Members of DCWC Nepal joined them for the walk to Rochdale. The school was opened by Jason Graham and Sean Wilson of DCWC Nepal.</p>', NULL, NULL, '1', 'images/2018/09/1538158921.bokse.jpg', 'images/2018/09/1538158921.bokse.jpg2018/09/1538158921.bokse.jpg', 8, NULL, NULL, '0', 2, 1, '2018-09-24 20:22:40', '1', '2018-09-25 00:22:40', '2018-10-05 17:14:01'),
(14, 'kharpani-lower-secondary-school', 'Kharpani Lower Secondary School', '<p><strong>Location:</strong> Gaushwara VDC ward no. 3, Ramechhap district.<br /><strong>Donated by:</strong> DCWC in USA and Coordinated by Ron Silberman<br />DCWC is also very active in USA with two different areas working quite prominently to raise funds. In California Ron Silberman was responsible for obtaining funding for the school, which was opened on 22 April 2009 by UK trustee Jason Graham. Ron lives in Paradise (sounds very nice). Good work is also being done by Patrick and Karin Graney who live near Oakland. Also DCWC has good work being done down in Taos, New Mexico.</p>', NULL, NULL, '1', 'images/2018/09/1538159167.kharepani.jpg', 'images/2018/09/1538159167.kharepani.jpg2018/09/1538159167.kharepani.jpg', 8, NULL, NULL, '0', 3, 1, '2018-09-24 20:23:25', '1', '2018-09-25 00:23:25', '2018-10-05 17:14:22'),
(15, 'seti-devi-primary-school-1', 'Seti Devi Primary School', '<p><strong>Location:</strong>&nbsp;Gaushwara VDC ward no. 4, Ramechhap district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (UK) with cash assistance from UAP / Sean Wilson<br />Seti Devi Primary School was opened on 23rd April 2009. This was the fourth school built by Bury based door hardware company UAP and in recognition of Seans input to the charity and to UAP, Dave gave the school over to Sean for him to dedicate it to. Sean dedicated the school to his children, Maisie and Callum. The School was opened by Sean himself as part of a week long visit with Gary Collier and Jason Graham to oversee DCWC Nepal projects in rural areas. Jason was again armed with the HD camera selflessly recording more footage of the charities work.</p>', NULL, NULL, '1', NULL, NULL, 8, NULL, NULL, '0', 3, 1, '2018-09-24 20:24:04', '1', '2018-09-25 00:24:04', '2018-10-05 17:14:47'),
(16, 'pratibha-primary-school', 'Pratibha Primary School', '<p><strong>Location:</strong>&nbsp;Makwanpur Gadhi VDC ward no. 9, Makawanpur district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (UK) with cash Congleton High School</p>\r\n<p><br />Shree Pratibha Primary School was opened on 7th May 2009. The funding for this school was raised by the very kind children of Congleton High School and was co-ordinated by teacher Caroline Eckersley. The children raised the money required by doing many different fund raising activities giving up much of their own personal time do this. The school was opened on behalf of DCWC Nepal by Peter and Luke Jones. Both had been with us last year to open HSBCs school and had returned this year to do an ascent of Island Peak and to further involve themselves in DCWC Projects.</p>', NULL, NULL, '1', 'images/2018/09/1538159223.pratibha.jpg', 'images/2018/09/1538159223.pratibha.jpg2018/09/1538159223.pratibha.jpg', 8, NULL, NULL, '0', 5, 1, '2018-09-24 20:24:38', '1', '2018-09-25 00:24:38', '2018-10-05 17:15:22'),
(17, 'baikalpik-primary-school', 'Baikalpik Primary School', '<p><strong>Location:</strong>&nbsp;Nagre Gagarche VDC ward no. 2, Kavre district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (UK) with cash assistance from The Arnewood School &amp; Carisbrooke High School<br />Baikalpik Primary School was opened on 3rd August 2010. The funding for this school was raised by the very kind children of The Arnewood School and Carisbrooke High School and was coordinated by teacher Mike Gough. The children raised the money required by doing many different fund raising activities giving up much of their own personal time do this. The school was opened by a selection of the students themselves.</p>', NULL, NULL, '1', NULL, NULL, 9, NULL, NULL, '0', 2, 1, '2018-09-24 20:25:10', '1', '2018-09-25 00:25:10', '2018-10-05 17:17:35'),
(18, 'children-sponsorship-program', 'Children Sponsorship Program', '<p>This program is running since 2007 with the kind support from the citizens of Czech Republic. More than 200 children are directly benefiting from this education project. In this project, children are being helped by providing full stationeries, school uniforms, shoes and others cschool fees and primary medications. This project is ongoing till now.</p>', NULL, NULL, '1', NULL, NULL, 6, NULL, NULL, '0', 2, 1, '2018-09-24 20:26:51', '1', '2018-09-25 00:26:51', '2018-10-05 17:18:04'),
(19, 'dcwc-community-hospital-1', 'DCWC Community Hospital', '<p>15 bed DCWC Community Hospital is build and in operation having medical staffs lead by Medical Doctor and equipped with X-ray, Lab Facilities, Pharmacy, 24 hour Emergency, OPD and In Patient services. The extension and improvement plans are still in progress. DCWC, UK managed the funds to build the hospital; Rotary Club, Black pool supported the medical equipments for the hospital and MODUS is providing the operations costs for the hospital since 2010.</p>', NULL, NULL, '1', NULL, NULL, 9, NULL, NULL, '0', 2, 1, '2018-09-24 20:27:29', '1', '2018-09-25 00:27:29', '2018-10-05 17:18:30'),
(20, 'seti-devi-lower-secondary-school', 'Seti Devi Lower Secondary School', '<p><strong>Name of School:</strong>&nbsp;Seti Devi Lower Secondary School<br /><strong>Location:</strong>&nbsp;Lakhanpur VDC ward no. 2, Dobla, Ramechhap district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (Norway)</p>', NULL, NULL, '1', NULL, NULL, 3, NULL, NULL, '0', 3, 1, '2018-09-25 07:10:23', '1', '2018-09-25 11:10:23', '2018-10-05 17:18:52'),
(21, 'siddhartha-primary-schools', 'Siddhartha Primary Schools', '<p><strong>Name of School:</strong>&nbsp;Siddhartha Primary Schools<br /><strong>Location:</strong>&nbsp;Gaushwara VDC ward no. 3, Chharpa, Ramechhap district.<br /><strong>Donated by:</strong>&nbsp;Namaste Nepal (DCWC Nepal), Czech Republic</p>', NULL, NULL, '1', NULL, NULL, 3, NULL, NULL, '0', 3, 1, '2018-09-25 07:10:58', '1', '2018-09-25 11:10:58', '2018-10-05 17:19:13'),
(22, 'bramha-bishnu-mahadev-primary-school', 'Bramha Bishnu Mahadev Primary School', '<p><strong>Name of School:</strong>&nbsp;Bramha Bishnu Mahadev Primary School<br /><strong>Location:</strong>&nbsp;Lakhanpur VDC ward no. 6, Dorkhani, Ramechhap district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (UK) with cash assistance from UAP</p>', NULL, NULL, '1', NULL, NULL, 3, NULL, NULL, '0', 3, 1, '2018-09-25 07:11:34', '1', '2018-09-25 11:11:34', '2018-10-05 11:13:28'),
(23, 'kusheshor-primary-school', 'Kusheshor Primary School', '<p><strong>Name of School:</strong>&nbsp;Kusheshor Primary School<br /><strong>Location:</strong>&nbsp;Gaushwara VDC ward no. 7, Ramechhap district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (UK) with financial assistance from The ZEN Restaurant, Lytham St. Ann&rsquo;s UK.</p>', NULL, NULL, '1', NULL, NULL, 3, NULL, NULL, '0', 3, 1, '2018-09-25 07:12:01', '1', '2018-09-25 11:12:01', '2018-10-05 17:19:35'),
(24, 'nabin-bal-primary-school', 'Nabin Bal Primary School', '<p><strong>Name of School:</strong>&nbsp;Nabin Bal Primary School<br /><strong>Location:</strong>&nbsp;Gunsi Bhadaure VDC ward no. 9, Ramechhap district.<br /><strong>Donated by:</strong>&nbsp;DCWC Nepal (UK) with financial assistance from Sooth Lee, Bury St. Edmunds, UK.</p>', NULL, NULL, '1', NULL, NULL, 3, NULL, NULL, '0', 3, 1, '2018-09-25 07:12:24', '1', '2018-09-25 11:12:24', '2018-10-05 10:48:39'),
(25, 'surya-jyoti-primary-school', 'Surya Jyoti Primary School', '<p><strong>Name of School:</strong>&nbsp;Surya Jyoti Primary School<br /><strong>Location:</strong>&nbsp;Lakhanpur VDC ward no. 5, Ramechhap district.<br /><strong>Donated by:</strong>Most Ke Vzdelani-Bridge to Education, o.s.<br /><strong>Inaugurated by:</strong>Tomas Hajek/Emil Jerahe( Czech Republic)</p>', NULL, NULL, '1', 'images/2018/09/1538159365.suryajyoti.jpg', 'images/2018/09/1538159365.suryajyoti.jpg2018/09/1538159365.suryajyoti.jpg', 3, NULL, NULL, '0', 3, 1, '2018-09-25 07:12:51', '1', '2018-09-25 11:12:51', '2018-10-05 17:20:45'),
(26, 'shree-bal-prativa-lower-secondary-school', 'Shree Bal Prativa Lower Secondary School', '<p><strong>Name of School:</strong>&nbsp;Shree Bal Prativa Lower Secondary School<br /><strong>Location:</strong>&nbsp;Anaikot VDC ward no. 8, Kavre district.<br /><strong>Donated by:</strong>&nbsp;Czech Development Agency and Namaste Nepal (DCWC-CZ)<br /><strong>Inaugurated by:</strong>&nbsp;His Excellency Ing.Miloslav Stasek (Ambassador of the Czech republic for Nepal)</p>', NULL, NULL, '1', NULL, NULL, 3, NULL, NULL, '0', 2, 1, '2018-09-25 07:13:21', '1', '2018-09-25 11:13:21', '2018-10-05 17:21:02'),
(27, 'shree-rangeen-nepal-primary-school', 'Shree Rangeen Nepal Primary School', '<p><strong>Name of School:</strong>&nbsp;Shree Rangeen Nepal Primary School<br /><strong>Location:</strong>&nbsp;Mahadevtar VDC-2-KavreL-Nepal<br /><strong>Donated By:&Acirc;&nbsp;</strong>Namaste Nepal (DCWC-CZ)<br /><strong>Inaugurated by:&Acirc;&nbsp;</strong>Vishnu Kumar Agrawal</p>', NULL, NULL, '1', 'images/2018/09/1538159264.rangeen.jpg', 'images/2018/09/1538159264.rangeen.jpg2018/09/1538159264.rangeen.jpg', 3, NULL, NULL, '0', 2, 1, '2018-09-25 07:13:51', '1', '2018-09-25 11:13:51', '2018-10-05 17:21:16'),
(28, 'shree-ganesh-lower-secondary-school', 'Shree Ganesh Lower Secondary School', '<p><strong>Name of School:&nbsp;</strong>Shree Ganesh Lower Secondary School<br /><strong>Location:&nbsp;</strong>Nagre Gagarche -7, Duti-Kavre<br /><strong>Donated By:&nbsp;</strong>Bridge to Education (Czech Republic)&nbsp;<br /><strong>Inaugurated by:&nbsp;</strong>Akka Lama (President of DCWC Nepal)</p>', NULL, NULL, '1', 'images/2018/09/1538159536.ganesh.jpg', 'images/2018/09/1538159536.ganesh.jpg2018/09/1538159536.ganesh.jpg', 3, '25th School Project', 25, '0', 2, 1, '2018-09-25 07:14:23', '1', '2018-09-25 11:14:23', '2018-10-09 09:13:08'),
(29, 'sponsorship-distribution-program', 'Sponsorship Distribution Program', '<p>DCWC has been supporting children from rural part of Nepal to continue their education through its Sponsorship distribution Program.</p>\r\n<div align=\"center\">&nbsp;</div>', NULL, NULL, '2', 'images/2018/09/1537904078.2.jpg', '2018/09/1538160383.sponsor.jpg', 3, NULL, NULL, '1', 2, 1, '2018-09-25 19:33:54', '1', '2018-09-25 23:34:38', '2018-10-05 17:22:24'),
(30, 'earthquake-house-rebuilding', 'Earthquake house Rebuilding', '<p>DCWC is supporting numbers of Household to build their houses by providing them Raw Materials.</p>', NULL, NULL, '2', 'images/2018/09/1537904108.3.jpg', '2018/09/1538160843.earth.jpg', 3, NULL, NULL, '1', 2, 1, '2018-09-25 19:34:41', '1', '2018-09-25 23:35:08', '2018-10-05 17:22:37'),
(31, 'supporting-school', 'Supporting School', NULL, NULL, NULL, '2', NULL, NULL, 3, NULL, NULL, '0', 2, 1, '2018-09-25 19:36:02', '1', '2018-09-25 23:36:21', '2018-10-05 17:23:07'),
(32, 'nursing-school', 'Nursing School', NULL, NULL, NULL, '3', NULL, NULL, 3, NULL, NULL, '0', 4, 1, '2018-09-25 19:37:29', '1', '2018-09-25 23:37:57', '2018-10-05 17:26:24'),
(33, 'tele-medicane', 'Tele Medicane', NULL, NULL, NULL, '3', NULL, NULL, 3, NULL, NULL, '0', 2, 1, '2018-09-25 19:38:28', '1', '2018-09-25 23:38:43', '2018-10-05 17:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `rel_charity_gallery`
--

CREATE TABLE `rel_charity_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `charity_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rel_charity_gallery`
--

INSERT INTO `rel_charity_gallery` (`id`, `charity_id`, `image`) VALUES
(1, 1, 'images/2018/09/1537421726.trek (1).jpg'),
(2, 1, 'images/2018/09/1537421726.trek (2).jpg'),
(3, 1, 'images/2018/09/1537421726.trek (3).jpg'),
(4, 1, 'images/2018/09/1537421726.trek (4).jpg'),
(5, 1, 'images/2018/09/1537421726.trek (5).jpg'),
(6, 1, 'images/2018/09/1537421726.trek (6).jpg'),
(7, 1, 'images/2018/09/1537421726.trek (7).jpg'),
(8, 1, 'images/2018/09/1537421726.trek (8).jpg'),
(9, 1, 'images/2018/09/1537421726.trek (9).jpg'),
(10, 2, 'images/2018/09/1537861396.4180567369_f9a327cfe7_b.jpg'),
(11, 2, 'images/2018/09/1537861423.Everest-trek.jpg'),
(12, 2, 'images/2018/09/1537861514.trekking-1768091_960_720.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rel_charity_record`
--

CREATE TABLE `rel_charity_record` (
  `id` int(10) UNSIGNED NOT NULL,
  `charity_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rel_charity_record`
--

INSERT INTO `rel_charity_record` (`id`, `charity_id`, `title`, `description`, `status`) VALUES
(1, 1, 'Day 1 : Reach Nepal', '<div class=\"accrodion active\">\r\n<div class=\"accrodion-content\">\r\n<p>You will be meet at the airport (Buddha Eye treks Pvt ltd) and taken to your hotel in the Thamel district of Kathmandu.</p>\r\n</div>\r\n</div>', '1'),
(2, 1, 'Day 2 : Kathmandu Tour', '<div class=\"accrodion active\">\r\n<div class=\"accrodion-content\">\r\n<p>Our first full day in Kathmandu is a relaxed affair. You can spend the morning relaxing at leisure visiting the local surroundings of Thamel. After Lunch we will take a walk up to the impressive surroundings of Swayambhunath (Monkey temple) where we will explore the extensive grounds of this world heritage site.</p>\r\n</div>\r\n</div>\r\n<div class=\"accrodion\">\r\n<div class=\"accrodion-title\">\r\n<h4>&nbsp;</h4>\r\n</div>\r\n</div>', '1'),
(3, 1, 'Day 3 : Cultural Tour', '<div class=\"accrodion active\">\r\n<div class=\"accrodion-content\">\r\n<p>We will spend the day visiting three of Kathmandus many places of interest. We will start the day with a visit to the beautifully serene monastery of Kopan. We will then make our way down to Bouddhanath site of the great stupa where we will take lunch. In the afternoon we will then visit the great Hindu temple of Pashupatinath before returning to our Monastery Guest House at Swyambhu.</p>\r\n</div>\r\n</div>\r\n<div class=\"accrodion\">\r\n<div class=\"accrodion-title\">\r\n<h4>&nbsp;</h4>\r\n</div>\r\n</div>', '1'),
(4, 1, 'Day 4  : Drive to Nayapul', '<p>Pokhara Drive to nayapul trek to Tirkhedhunga (1577m)</p>', '1'),
(5, 1, 'Day 5 : Trek to Ghorepani', '<p>&nbsp;Tirkhedhunga Trek to Ghorepani (2855m)</p>', '1'),
(6, 1, 'Day 6 : Trek to Tadapani', '<p>Ghorepani Trek to Poon Hill then to Tadapani (2595m)</p>', '1'),
(7, 1, 'Day 7 : Trek to Chumrung', '<p>Tadapani Trek to Chumrung (1950m)</p>', '1'),
(8, 1, 'Day 8 : Trek to Dovan', '<p>Chomrung Trek to Dovan (2720m)</p>', '1'),
(9, 1, 'Day 9 : Walk to Himalayan Hotel', '<p>Doban to Himalayan Hotel (3000m) 2 hour walk</p>', '1'),
(10, 1, 'Day 10 : Trek to Machapuchre Base Camp', '<p>Doban Trek to Machapuchre Base Camp (3700m) 3 hours walks</p>', '1'),
(11, 1, 'Day  11 :  Rest Day', '<p>Acclimatization Day.</p>', '1'),
(12, 1, 'Day 12 : Trek to Dovan', '<p>A.B.C. Trek to Dovan (2720m)</p>', '1'),
(13, 1, 'Day 13 : Trek to Jhino', '<p>Dovan Trek to Jhino (1780m)</p>', '1'),
(14, 1, 'Day 14 :  Trek to Tolka', '<p><strong>J</strong>hino Trek to Tolka (1700m)</p>', '1'),
(15, 1, 'Day 15 : Drive to Pokhara', '<p>Tolkha Trek to Surkhet Phedi drive to Pokhara (820m)</p>', '1'),
(16, 1, 'Day 16 : Back to Kathmandu', '<p>Pokhara Drive to Kathmandu</p>', '1'),
(17, 1, 'Day 17, 18  :  Involve in Charity Projects', '<p>we will head out into a rural area of Nepal where we will be guests of honor at one of our charity projects. We will take the journey by four wheel drive and due to the remoteness of our projects will spend the one night in the village. During our days; during our days; we will visit Hospital and School.</p>', '1'),
(18, 1, 'Day 19 : Back to Kathmandu', '<p>Return to Kathmandu by evening.</p>', '1'),
(19, 1, 'Day 20 : Departure', '<p>Departure to Home.</p>', '1'),
(20, 2, 'Day 1 : Welcome to Nepal', '<p>Arrive at Tribhuwan International Airport, Kathmandu and transfer to Hotel.</p>\r\n<div class=\"clear\">&nbsp;</div>\r\n<p>&nbsp;</p>', '1'),
(21, 2, 'Day 2 : Cultural Tour in the city', '<p>Visit to the beautifully serene monastery of Kopan. We will then make our way down to Bouddhanath site of the great stupa where you will take lunch. In the afternoon You will then visit the great Hindu temple of Pashupatinath before returning to Monastery</p>', '1'),
(22, 2, 'Day 3 : Visit Swyambhu', '<p>Visit Monkey Temple(Swyambhu) and prepare for Trekking gear and baggage</p>', '1'),
(25, 2, 'Day 4 :', NULL, '1'),
(26, 2, 'Day 5 : Trek to Sagarmatha National Park', '<p>After a short trek you enter the Sagamartha national park. You continue up the Dudh Koshi River until reaching the 120m long Swiss built suspension bridge. Once over this you then make the hard ascent to Namche Bazaar (3440m) where You will take the first of your acclimatization days spending two nights there in total.</p>', '1'),
(27, 2, 'Day 6 : Acclimatization Day', '<p>This is the first of your acclimatization day. This day can be taken as a rest day or you can take your optional walk up past the landing strip at Shyangboche and on towards the Everest view hotel were you get our first glorious views of the peaks of Ama Dablam, Lhotse, Nuptse and Everest. You also visit Khumjung to visit the school built by Sir Edmond Hilary before returning to Namche Bazaar.</p>', '1'),
(28, 2, 'Day 7 : Trek to Tengboche', '<p>Starts walk from Namche Bazaar, which eventually runs down to the Imja Khola River before steeply ascending up to the village of Tengboche (3860m) with its picturesque monastery. You will arrive early afternoon and after taking time out to rest you can visit the monastery to sit in on the four o clock puja ceremony</p>', '1'),
(29, 2, 'Day 8 : Trek to Dingboche', '<p>From Tengboche You head on up the trail along the Imja Khola River gradually making Your way above the tree line following Ama Dablam to your right. Your next destination is the village of Dingboche (4410m).</p>', '1'),
(30, 2, 'Day 9 : Trek to Lobuche', '<p>You leave Dingboche trekking with the stunning peaks of Taboche and Cholatse to your left. We head through Dughla and up over the demanding Thokla pass. Here we get your first views of Pumo Ri, Lingtren and Khumbutse with Kala Pataar below and stay at Lobuche (4910m) for the night.</p>', '1'),
(31, 2, 'Day 10 : Trek to Gorak Shep', '<p>You leave Lobuche and follow the glacier up to Gorak Shep. After ascending the Lobuche pass we start to see Everest again and the tents at base camp. After a break at Gorak Shep we head on up to Base camp where you will see all the expeditions. You will spend the evening at Gorak Shep (5140m)</p>', '1'),
(32, 2, 'Day 11 , 12,13 : Back to Lukla', '<p>Early at six o\' clock start as you set out to ascend Kala Pataar to see the sun rise over Everest. At the summit (5545m) you will see a stunning 360-degree panorama of some of the highest peaks on the planet. After taking in the breathtaking scenery you will head back to Gorak Shep for breakfast before starting your steady descent back to Lukla to make the return journey to Kathmandu.</p>', '1'),
(33, 2, 'Day 14 : Fly  back to Kathmandu', '<p>Fly Lukla to Kathmandu and transfer to hotel. Explore Thamel and Kathmandu Durbar Square Area.</p>', '1'),
(34, 2, 'Day 15:  Visit Durbar Squares', '<p>Visit ancient city Bhaktapur Durbar Square and Patan Durbar square.</p>', '1'),
(35, 2, 'Day 16 : Visit Kritipur Area', '<p>Visit Pharping Buddhist Monastery and old city Kirtipur.</p>', '1'),
(36, 2, 'Day 17 , 18 : Shopping Day', '<p>Shopping Day</p>', '1'),
(37, 2, 'Day 19 : Visit Community Hospital', '<p>6 hour drive by 4&times;4 Jeep; Visit community hospital at rural village.</p>', '1'),
(38, 2, 'Day 20 : Visit Community School', '<p>Visit DCWC supported community school in the village and back to Kathmandu</p>\r\n<div class=\"clear\">&nbsp;</div>\r\n<p>&nbsp;</p>', '1'),
(39, 2, 'Day 21 : Departure', '<p>Departure to Home</p>', '1'),
(40, 3, 'Day 1 : Arrive to Kathmandu', '<p>You will be meet at the airport (Buddha Eye treks Pvt ltd) and taken to your hotel in the Thamel district of Kathmandu.</p>', '1'),
(41, 3, 'Day 2 : Visit Swyambhu', '<p>Our first full day in Kathmandu is a relaxed affair. You can spend the morning relaxing at leisure visiting the local surroundings of Thamel. After Lunch we will take a walk up to the impressive surroundings of Swayambhunath (Monkey temple) where we will explore the extensive grounds of this world heritage site. Stay at Monastery Guest House.</p>', '1'),
(42, 3, 'Day 3 : Around Kathmandu', '<p>We will spend the day visiting three of Kathmandu\'s many places of interest. We will start the day with a visit to the beautifully serene monastery of Kopan. We will then make our way down to Bouddhanath site of the great stupa where we will take lunch. In the afternoon we will then visit the great Hindu temple of Pashupatinath before returning to our Monastery Guest House at Swyambhu.</p>', '1'),
(43, 3, 'Day 4 : Drive to Nagarkot', '<p>Mountain Flight in Morning and Drive to Nagarkot</p>', '1'),
(44, 3, 'Day 5 : Drive to Dhulikhel', '<p>Nagerkot to Dhulikhel</p>', '1'),
(45, 3, 'Day 6 :  Trek to Namobuddha', '<p>&nbsp;Trek to Namobuddha</p>', '1'),
(46, 3, 'Day 7 : back to Kathmandu.', '<p>back to Kathmandu.</p>', '1'),
(47, 3, 'Day 8 ; Travel to Chitwan National Park', '<p>Kathmandu to Chitwan National Part by Tourist Bus.</p>', '1'),
(48, 3, 'Day 9 : visit NationalPark', '<p>Visiting National Part.</p>', '1'),
(49, 3, 'Day 10 : Visit Local Community', '<p>Visiting Local Community House (Tharu Village and their Culture Show)</p>', '1'),
(50, 3, 'Day 11 : Travel to Lumbini', '<p>Chitwan to Lumbini by Tourist Bus.</p>', '1'),
(51, 3, 'Day 12 ,13 :  Visit Lumbini', '<p>Visiting Lumbini (Buddha Birth Place)</p>', '1'),
(52, 3, 'Day  14  : Travel to Pokhara', '<p>Lumbini to Pokhara by Tourist Bus.</p>', '1'),
(53, 3, 'Day 15 : Explore Pokhara', '<p>Visiting Pokhara.</p>', '1'),
(54, 3, 'Day 16 : Hiking Around', '<p>Hiking day Trip.</p>', '1'),
(55, 3, 'Day 17 :Back to Kathmandu', '<p>Return to Kathmandu.</p>', '1'),
(56, 3, 'Day 18 : Rest Day', '<p>Rest Day in Kathmandu.</p>', '1'),
(57, 3, 'Day 19 , 20 :  Visit Charity Projects', '<p>we will head out into a rural area of Nepal where we will be guests of honor at one of our charity projects. We will take the journey by four wheel drive and due to the remoteness of our projects will spend the one night in the village. During our days we will visit Hospital and School.<br />24t Return to Kathmandu by evening.</p>', '1'),
(58, 3, 'Day 21 : Departure', '<p>Departure to Home.</p>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `rel_project_category`
--

CREATE TABLE `rel_project_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_project_id` int(10) UNSIGNED NOT NULL,
  `admin_category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rel_project_category`
--

INSERT INTO `rel_project_category` (`id`, `admin_project_id`, `admin_category_id`) VALUES
(2, 2, 3),
(3, 3, 3),
(4, 4, 3),
(5, 5, 3),
(6, 6, 3),
(7, 7, 3),
(8, 8, 3),
(9, 9, 3),
(10, 10, 3),
(11, 11, 3),
(12, 12, 3),
(13, 13, 3),
(14, 14, 3),
(15, 15, 3),
(16, 16, 3),
(17, 17, 3),
(18, 18, 5),
(19, 19, 1),
(20, 20, 3),
(21, 21, 3),
(22, 22, 3),
(23, 23, 3),
(24, 24, 3),
(25, 25, 3),
(26, 26, 3),
(27, 27, 3),
(28, 28, 3),
(29, 29, 5),
(30, 30, 2),
(31, 31, 3),
(33, 1, 1),
(34, 33, 1),
(35, 32, 4);

-- --------------------------------------------------------

--
-- Table structure for table `rel_project_gallery`
--

CREATE TABLE `rel_project_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rel_project_gallery`
--

INSERT INTO `rel_project_gallery` (`id`, `project_id`, `image`) VALUES
(1, 1, 'images/2018/09/1537413693.16.jpg'),
(2, 1, 'images/2018/09/1537413693.15.jpg'),
(3, 1, 'images/2018/09/1537413693.14.jpg'),
(4, 1, 'images/2018/09/1537413693.13.jpg'),
(5, 1, 'images/2018/09/1537413718.12.jpg'),
(6, 1, 'images/2018/09/1537413718.11.jpg'),
(7, 1, 'images/2018/09/1537413718.10.jpg'),
(8, 1, 'images/2018/09/1537413718.9.jpg'),
(9, 25, 'images/2018/09/1538117852.F.JPG'),
(10, 25, 'images/2018/09/1538117852.F1.JPG'),
(11, 25, 'images/2018/09/1538117852.F2.JPG'),
(12, 25, 'images/2018/09/1538117852.F3.JPG'),
(13, 25, 'images/2018/09/1538117852.F4.JPG'),
(14, 25, 'images/2018/09/1538117852.F5.JPG'),
(15, 25, 'images/2018/09/1538117852.F6.JPG'),
(16, 25, 'images/2018/09/1538117852.F7.JPG'),
(17, 25, 'images/2018/09/1538117852.F8.JPG'),
(18, 8, 'images/2018/09/1538117996.Shree-Khanda-Devi-School.-001.jpg'),
(19, 8, 'images/2018/09/1538117996.Shree-Khanda-Devi-School.-002.jpg'),
(20, 8, 'images/2018/09/1538117996.Shree-Khanda-Devi-School.-004.jpg'),
(21, 8, 'images/2018/09/1538117996.Shree-Khanda-Devi-School.-005.jpg'),
(22, 8, 'images/2018/09/1538117996.Shree-Khanda-Devi-School.-006.jpg'),
(23, 8, 'images/2018/09/1538117996.Shree-Khanda-Devi-School.-008.jpg'),
(24, 8, 'images/2018/09/1538117996.Shree-Khanda-Devi-School.-009.jpg'),
(25, 8, 'images/2018/09/1538117996.Shree-Khanda-Devi-School.-010.jpg'),
(26, 8, 'images/2018/09/1538118029.Shree-Khanda-Devi-School.-011.jpg'),
(27, 8, 'images/2018/09/1538118029.Shree-Khanda-Devi-School.-012.jpg'),
(28, 8, 'images/2018/09/1538118029.Shree-Khanda-Devi-School.-013.jpg'),
(29, 8, 'images/2018/09/1538118029.Shree-Khanda-Devi-School.-014.jpg'),
(30, 8, 'images/2018/09/1538118029.Shree-Khanda-Devi-School.-015.jpg'),
(31, 8, 'images/2018/09/1538118029.Shree-Khanda-Devi-School.-016.jpg'),
(32, 8, 'images/2018/09/1538118029.Shree-Khanda-Devi-School.-017.jpg'),
(33, 8, 'images/2018/09/1538118029.Shree-Khanda-Devi-School.-019.jpg'),
(34, 8, 'images/2018/09/1538118075.Shree-Khanda-Devi-School.-020.jpg'),
(35, 8, 'images/2018/09/1538118075.Shree-Khanda-Devi-School.-021.jpg'),
(36, 8, 'images/2018/09/1538118075.Shree-Khanda-Devi-School.-022.jpg'),
(37, 8, 'images/2018/09/1538118075.Shree-Khanda-Devi-School.-024.jpg'),
(38, 8, 'images/2018/09/1538118075.Shree-Khanda-Devi-School.-025.jpg'),
(39, 8, 'images/2018/09/1538118075.Shree-Khanda-Devi-School.-027.jpg'),
(40, 8, 'images/2018/09/1538118075.Shree-Khanda-Devi-School.-028.jpg'),
(41, 8, 'images/2018/09/1538118075.Shree-Khanda-Devi-School.-029.jpg'),
(42, 8, 'images/2018/09/1538118109.Shree-Khanda-Devi-School.-030.jpg'),
(43, 8, 'images/2018/09/1538118109.Shree-Khanda-Devi-School.-031.jpg'),
(44, 8, 'images/2018/09/1538118109.Shree-Khanda-Devi-School.-032.jpg'),
(45, 8, 'images/2018/09/1538118109.Shree-Khanda-Devi-School.-033.jpg'),
(46, 8, 'images/2018/09/1538118109.Shree-Khanda-Devi-School.-034.jpg'),
(47, 8, 'images/2018/09/1538118109.Shree-Khanda-Devi-School.-035.jpg'),
(48, 8, 'images/2018/09/1538118109.Shree-Khanda-Devi-School.-036.jpg'),
(49, 8, 'images/2018/09/1538118109.Shree-Khanda-Devi-School.-037.jpg'),
(50, 8, 'images/2018/09/1538118195.Shree-Khanda-Devi-School.-039.jpg'),
(51, 8, 'images/2018/09/1538118195.Shree-Khanda-Devi-School.-040.jpg'),
(52, 8, 'images/2018/09/1538118195.Shree-Khanda-Devi-School.-041.jpg'),
(53, 8, 'images/2018/09/1538118195.Shree-Khanda-Devi-School.-042.jpg'),
(54, 8, 'images/2018/09/1538118195.Shree-Khanda-Devi-School.-043.jpg'),
(55, 8, 'images/2018/09/1538118195.Shree-Khanda-Devi-School.-044.jpg'),
(56, 8, 'images/2018/09/1538118195.Shree-Khanda-Devi-School.-045.jpg'),
(57, 8, 'images/2018/09/1538118195.Shree-Khanda-Devi-School.-046.jpg'),
(58, 8, 'images/2018/09/1538118195.Shree-Khanda-Devi-School.-047.jpg'),
(59, 8, 'images/2018/09/1538118195.Shree-Khanda-Devi-School.-048.jpg'),
(60, 8, 'images/2018/09/1538118195.Shree-Khanda-Devi-School.-049.jpg'),
(61, 8, 'images/2018/09/1538118195.Shree-Khanda-Devi-School.-050.jpg'),
(62, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-051.jpg'),
(63, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-052.jpg'),
(64, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-053.jpg'),
(65, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-054.jpg'),
(66, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-057.jpg'),
(67, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-058.jpg'),
(68, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-060.jpg'),
(69, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-061.jpg'),
(70, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-062.jpg'),
(71, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-063.jpg'),
(72, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-064.jpg'),
(73, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-065.jpg'),
(74, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-066.jpg'),
(75, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-069.jpg'),
(76, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-070.jpg'),
(77, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-071.jpg'),
(78, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-072.jpg'),
(79, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-073.jpg'),
(80, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-074.jpg'),
(81, 8, 'images/2018/09/1538118248.Shree-Khanda-Devi-School.-075.jpg'),
(82, 16, 'images/2018/09/1538127720.Makwanpur-School.-009.jpg'),
(83, 16, 'images/2018/09/1538127720.Makwanpur-School.-010.jpg'),
(84, 16, 'images/2018/09/1538127720.Makwanpur-School.-015.jpg'),
(85, 16, 'images/2018/09/1538127720.Makwanpur-School.-016.jpg'),
(86, 16, 'images/2018/09/1538127720.Makwanpur-School.-017.jpg'),
(87, 16, 'images/2018/09/1538127720.Makwanpur-School.-018.jpg'),
(88, 16, 'images/2018/09/1538127720.Makwanpur-School.-019.jpg'),
(89, 16, 'images/2018/09/1538127720.Makwanpur-School.-020.jpg'),
(90, 16, 'images/2018/09/1538127720.Makwanpur-School.-021.jpg'),
(91, 16, 'images/2018/09/1538127720.Makwanpur-School.-023.jpg'),
(92, 16, 'images/2018/09/1538127720.Makwanpur-School.-024.jpg'),
(93, 16, 'images/2018/09/1538127720.Makwanpur-School.-025.jpg'),
(94, 16, 'images/2018/09/1538127720.Makwanpur-School.-026.jpg'),
(95, 16, 'images/2018/09/1538127720.Makwanpur-School.-027.jpg'),
(96, 16, 'images/2018/09/1538127720.Makwanpur-School.-028.jpg'),
(97, 16, 'images/2018/09/1538127720.Makwanpur-School.-029.jpg'),
(98, 16, 'images/2018/09/1538127720.Makwanpur-School.-030.jpg'),
(99, 16, 'images/2018/09/1538127720.Makwanpur-School.-031.jpg'),
(100, 16, 'images/2018/09/1538127720.Makwanpur-School.-032.jpg'),
(101, 16, 'images/2018/09/1538127720.Makwanpur-School.-033.jpg'),
(102, 28, 'images/2018/09/1538155797.Shree-Ganesh-Lower-Secondary-School-1-1024x768.jpg'),
(103, 28, 'images/2018/09/1538155797.Shree-Ganesh-Lower-Secondary-School-2-1024x768.jpg'),
(104, 28, 'images/2018/09/1538155797.Shree-Ganesh-Lower-Secondary-School-3-1024x768.jpg'),
(105, 28, 'images/2018/09/1538155797.Shree-Ganesh-Lower-Secondary-School-4-1024x768.jpg'),
(106, 28, 'images/2018/09/1538155797.Shree-Ganesh-Lower-Secondary-School-5-1024x651.jpg'),
(107, 28, 'images/2018/09/1538155797.Shree-Ganesh-Lower-Secondary-School-6-1024x768.jpg'),
(108, 28, 'images/2018/09/1538155797.Shree-Ganesh-Lower-Secondary-School-7-1024x768.jpg'),
(109, 28, 'images/2018/09/1538155797.Shree-Ganesh-Lower-Secondary-School-8-1024x768.jpg'),
(110, 28, 'images/2018/09/1538155797.Shree-Ganesh-Lower-Secondary-School-9-1024x768.jpg'),
(111, 28, 'images/2018/09/1538155797.Shree-Ganesh-Lower-Secondary-School-10-1024x768.jpg'),
(112, 28, 'images/2018/09/1538155797.Shree-Ganesh-Lower-Secondary-School-11-1024x768.jpg'),
(113, 28, 'images/2018/09/1538155797.Shree-Ganesh-Lower-Secondary-School-12-1024x768.jpg'),
(114, 28, 'images/2018/09/1538155797.Shree-Ganesh-Lower-Secondary-School-13-1024x672.jpg'),
(115, 27, 'images/2018/09/1538155852.M5526936a60fe3-1024x768.jpg'),
(116, 27, 'images/2018/09/1538155852.M45526936b7bf3a-1024x768.jpg'),
(117, 27, 'images/2018/09/1538155852.M55526936cb1ee8-1024x768.jpg'),
(118, 27, 'images/2018/09/1538155852.M65526936df0b6e-1024x768.jpg'),
(119, 27, 'images/2018/09/1538155852.M75526936f2e4c8-1024x768.jpg'),
(120, 27, 'images/2018/09/1538155852.M145526937a64c61-1024x768.jpg'),
(121, 27, 'images/2018/09/1538155852.M155269369ec4be.JPG'),
(122, 27, 'images/2018/09/1538155852.M255269369aba8e.JPG'),
(123, 27, 'images/2018/09/1538155852.M955269371b74c9-1024x768.jpg'),
(124, 27, 'images/2018/09/1538155852.M1255269376a43c0-1024x768.jpg'),
(125, 27, 'images/2018/09/1538155852.M1355269377c6241-1024x768.jpg'),
(126, 27, 'images/2018/09/1538155852.M3552693731d72d-1024x768.jpg'),
(127, 27, 'images/2018/09/1538155852.M11552693744b57a-1024x768.jpg'),
(128, 27, 'images/2018/09/1538155852.M155526937918fcc-1024x768.jpg'),
(129, 27, 'images/2018/09/1538155852.M8552693707589d-1024x768.jpg'),
(130, 27, 'images/2018/09/1538155852.M105526937569015-1024x768.jpg'),
(131, 10, 'images/2018/09/1538156018.Dharma-Table-020.jpg'),
(132, 10, 'images/2018/09/1538156018.Dharma-Table-024.jpg'),
(133, 10, 'images/2018/09/1538156018.Dharma-Table-029.jpg'),
(134, 10, 'images/2018/09/1538156018.Dharma-Table-030.jpg'),
(135, 10, 'images/2018/09/1538156018.Dharma-Table-031.jpg'),
(136, 10, 'images/2018/09/1538156018.Dharma-Table-032.jpg'),
(137, 10, 'images/2018/09/1538156018.Dharma-Table-034.jpg'),
(138, 10, 'images/2018/09/1538156018.Dharma-Table-035.jpg'),
(139, 10, 'images/2018/09/1538156018.Dharma-Table-036.jpg'),
(140, 10, 'images/2018/09/1538156018.Dharma-Table-037.jpg'),
(141, 10, 'images/2018/09/1538156018.Dharma-Table-038.jpg'),
(142, 10, 'images/2018/09/1538156018.Dharma-Table-039-1024x768.jpg'),
(143, 10, 'images/2018/09/1538156018.Dharma-Table-040-1024x768.jpg'),
(144, 10, 'images/2018/09/1538156018.Dharma-Table-042.jpg'),
(145, 10, 'images/2018/09/1538156018.Dharma-Table-043.jpg'),
(146, 10, 'images/2018/09/1538156018.Dharma-Table-044.jpg'),
(147, 10, 'images/2018/09/1538156018.Dharma-Table-053.jpg'),
(148, 10, 'images/2018/09/1538156018.Dharma-Table-054.jpg'),
(149, 10, 'images/2018/09/1538156018.Dharma-Table-055.jpg'),
(150, 10, 'images/2018/09/1538156018.Dharma-Table-056.jpg'),
(151, 10, 'images/2018/09/1538156058.Dharma-Table-057.jpg'),
(152, 10, 'images/2018/09/1538156058.Dharma-Table-058.jpg'),
(153, 10, 'images/2018/09/1538156058.Dharma-Table-062.jpg'),
(154, 10, 'images/2018/09/1538156058.Dharma-Table-063.jpg'),
(155, 10, 'images/2018/09/1538156058.Dharma-Table-064.jpg'),
(156, 10, 'images/2018/09/1538156058.Dharma-Table-067.jpg'),
(157, 10, 'images/2018/09/1538156058.Dharma-Table-068.jpg'),
(158, 10, 'images/2018/09/1538156058.Dharma-Table-069.jpg'),
(159, 10, 'images/2018/09/1538156058.Dharma-Table-070.jpg'),
(160, 10, 'images/2018/09/1538156058.Dharma-Table-071.jpg'),
(161, 10, 'images/2018/09/1538156058.Dharma-Table-072.jpg'),
(162, 10, 'images/2018/09/1538156058.Dharma-Table-074.jpg'),
(163, 10, 'images/2018/09/1538156058.Dharma-Table-076.jpg'),
(164, 10, 'images/2018/09/1538156058.Dharma-Table-077.jpg'),
(165, 10, 'images/2018/09/1538156058.Dharma-Table-078.jpg'),
(166, 10, 'images/2018/09/1538156058.Dharma-Table-079.jpg'),
(167, 10, 'images/2018/09/1538156058.Dharma-Table-080.jpg'),
(168, 10, 'images/2018/09/1538156058.Dharma-Table-081.jpg'),
(169, 10, 'images/2018/09/1538156058.Dharma-Table-083.jpg'),
(170, 10, 'images/2018/09/1538156058.Dharma-Table-084.jpg'),
(171, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-001-1024x768.jpg'),
(172, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-002-1024x768.jpg'),
(173, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-003-1024x768.jpg'),
(174, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-005-1024x768.jpg'),
(175, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-006-768x1024.jpg'),
(176, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-007-768x1024.jpg'),
(177, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-008-768x1024.jpg'),
(178, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-009-768x1024.jpg'),
(179, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-010-768x1024.jpg'),
(180, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-013-1024x768.jpg'),
(181, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-014-1024x768.jpg'),
(182, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-015-1024x768.jpg'),
(183, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-017-1024x768.jpg'),
(184, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-018-1024x768.jpg'),
(185, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-019-1024x768.jpg'),
(186, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-020-1024x768.jpg'),
(187, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-021-1024x768.jpg'),
(188, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-024-1024x768.jpg'),
(189, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-027-1024x768.jpg'),
(190, 12, 'images/2018/09/1538156122.Setidevi-Primery-School-Thulo-Bangthali.-028-1024x768.jpg'),
(191, 14, 'images/2018/09/1538156166.Kharpani-School-006-1024x680.jpg'),
(192, 14, 'images/2018/09/1538156166.Kharpani-School-007-1024x680.jpg'),
(193, 14, 'images/2018/09/1538156166.Kharpani-School-008-1024x680.jpg'),
(194, 14, 'images/2018/09/1538156166.Kharpani-School-078-1024x680.jpg'),
(195, 14, 'images/2018/09/1538156166.Kharpani-School-129-1024x680.jpg'),
(196, 14, 'images/2018/09/1538156166.Kharpani-School-130-1024x680.jpg'),
(197, 14, 'images/2018/09/1538156166.Kharpani-School-141-1024x680.jpg'),
(198, 14, 'images/2018/09/1538156166.Kharpani-School-142-1024x680.jpg'),
(199, 5, 'images/2018/09/1538157012.Shree Tama Khani Primary School.jpg'),
(200, 5, 'images/2018/09/1538157012.Tamakhani School.jpg'),
(201, 5, 'images/2018/09/1538157012.Tibet+Everest+Village 067.jpg'),
(202, 4, 'images/2018/09/1538157559.DSC05811.jpg'),
(203, 4, 'images/2018/09/1538157559.DSC05812.jpg'),
(204, 4, 'images/2018/09/1538157559.DSC05814.jpg'),
(205, 4, 'images/2018/09/1538157559.DSC05815.jpg'),
(206, 4, 'images/2018/09/1538157559.DSC05817.jpg'),
(207, 4, 'images/2018/09/1538157559.DSC05819.jpg'),
(208, 4, 'images/2018/09/1538157559.DSC05820.jpg'),
(209, 4, 'images/2018/09/1538157559.DSC05824.jpg'),
(210, 4, 'images/2018/09/1538157559.DSC05832.jpg'),
(211, 4, 'images/2018/09/1538157559.DSC05833.jpg'),
(212, 4, 'images/2018/09/1538157559.DSC05835.jpg'),
(213, 4, 'images/2018/09/1538157559.DSC05840.jpg'),
(214, 4, 'images/2018/09/1538157559.DSC05841.jpg'),
(215, 4, 'images/2018/09/1538157559.DSC05842.jpg'),
(216, 4, 'images/2018/09/1538157559.DSC05843.jpg'),
(217, 4, 'images/2018/09/1538157559.DSC05844.jpg'),
(218, 4, 'images/2018/09/1538157713.DSC05861.jpg'),
(219, 4, 'images/2018/09/1538157713.DSC05869.jpg'),
(220, 4, 'images/2018/09/1538157713.DSC05871.jpg'),
(221, 4, 'images/2018/09/1538157713.DSC05877.jpg'),
(222, 4, 'images/2018/09/1538157713.DSC05885.jpg'),
(223, 4, 'images/2018/09/1538157713.DSC05888.jpg'),
(224, 4, 'images/2018/09/1538157713.DSC05898.jpg'),
(225, 4, 'images/2018/09/1538157713.DSC05900.jpg'),
(226, 4, 'images/2018/09/1538157713.DSC05902.jpg'),
(227, 4, 'images/2018/09/1538157713.DSC05903.jpg'),
(228, 4, 'images/2018/09/1538157713.DSC05904.jpg'),
(229, 4, 'images/2018/09/1538157713.Kalika Malika.jpg'),
(230, 9, 'images/2018/09/1538157836.Dharka Primery School. 003.jpg'),
(231, 9, 'images/2018/09/1538157836.Dharka Primery School. 034.jpg'),
(232, 9, 'images/2018/09/1538157836.Dharka Primery School. 063.jpg'),
(233, 9, 'images/2018/09/1538157836.Dharka Primery School. 069.jpg'),
(234, 9, 'images/2018/09/1538157836.Dharka Primery School. 072.jpg'),
(235, 9, 'images/2018/09/1538157836.Dharka Primery School. 079.jpg'),
(236, 9, 'images/2018/09/1538157836.Dharka Primery School. 081.jpg'),
(237, 9, 'images/2018/09/1538157836.Dharka Primery School. 090.jpg'),
(238, 9, 'images/2018/09/1538157836.Dharka Primery School. 094.jpg'),
(239, 7, 'images/2018/09/1538157952.cha -1.jpg'),
(240, 7, 'images/2018/09/1538157952.cha -2.jpg'),
(241, 7, 'images/2018/09/1538157952.Chori khola School.jpg'),
(242, 7, 'images/2018/09/1538157952.Ground For New School. 002.jpg'),
(243, 7, 'images/2018/09/1538157952.New School 1.JPG'),
(244, 7, 'images/2018/09/1538157952.New School..JPG'),
(245, 7, 'images/2018/09/1538157952.Picture284a.jpg'),
(246, 7, 'images/2018/09/1538157952.UNDP-Unicef 338.jpg'),
(247, 13, 'images/2018/09/1538158153.Bokshe Primary.jpg'),
(248, 13, 'images/2018/09/1538158153.Picture 007.jpg'),
(249, 13, 'images/2018/09/1538158153.Picture 013.jpg'),
(250, 13, 'images/2018/09/1538158153.Picture 014.jpg'),
(251, 13, 'images/2018/09/1538158153.Picture 016.jpg'),
(252, 13, 'images/2018/09/1538158153.Picture 018.jpg'),
(253, 6, 'images/2018/09/1538158381.DCWC Picture 037.jpg'),
(254, 6, 'images/2018/09/1538158381.DCWC Picture 058.jpg'),
(255, 6, 'images/2018/09/1538158381.DCWC Picture 059.jpg'),
(256, 6, 'images/2018/09/1538158381.DCWC Picture 116.jpg'),
(257, 6, 'images/2018/09/1538158381.DCWC Picture 150.jpg'),
(258, 6, 'images/2018/09/1538158381.Joey and Karla 008.jpg'),
(259, 6, 'images/2018/09/1538158381.Joey and Karla 010.jpg'),
(260, 6, 'images/2018/09/1538158381.Kharpani School 402.jpg'),
(261, 6, 'images/2018/09/1538158381.Vhimphedi Primery School. 045.jpg'),
(262, 6, 'images/2018/09/1538158381.Vhimphedi School Visit 007.jpg'),
(263, 6, 'images/2018/09/1538158381.Vhimphedi School Visit 013.jpg'),
(264, 6, 'images/2018/09/1538158381.Vhimphedi School Visit 020.jpg'),
(265, 6, 'images/2018/09/1538158381.Vhimphedi School Visit 021.jpg'),
(266, 6, 'images/2018/09/1538158381.Vhimphedi School Visit 029.jpg'),
(267, 6, 'images/2018/09/1538158381.Vhimphedi School Visit 035.jpg'),
(268, 6, 'images/2018/09/1538158381.Vhimphedi School Visit 039.jpg'),
(269, 6, 'images/2018/09/1538158381.Vhimphedi School Visit 042.jpg'),
(270, 6, 'images/2018/09/1538158381.Vhimphedi School. 001.jpg'),
(271, 6, 'images/2018/09/1538158381.Vhimphedi School. 003.jpg'),
(272, 6, 'images/2018/09/1538158381.Vhimphedi School. 010.jpg'),
(273, 29, 'images/2018/09/1538160282.DSC_0020.jpg'),
(274, 29, 'images/2018/09/1538160282.DSC_0021.jpg'),
(275, 29, 'images/2018/09/1538160282.DSC_0022.jpg'),
(276, 29, 'images/2018/09/1538160282.DSC_0024.jpg'),
(277, 29, 'images/2018/09/1538160282.DSC_0025.jpg'),
(278, 29, 'images/2018/09/1538160282.DSC_0029.jpg'),
(279, 29, 'images/2018/09/1538160282.DSC_0030.jpg'),
(280, 29, 'images/2018/09/1538160282.DSC_0035.jpg'),
(281, 29, 'images/2018/09/1538160383.DSC_0041.jpg'),
(282, 29, 'images/2018/09/1538160383.DSC_0042.jpg'),
(283, 29, 'images/2018/09/1538160383.DSC_0044.jpg'),
(284, 29, 'images/2018/09/1538160383.DSC_0045.jpg'),
(285, 29, 'images/2018/09/1538160383.DSC_0047.jpg'),
(286, 29, 'images/2018/09/1538160383.DSC_0051.jpg'),
(287, 29, 'images/2018/09/1538160383.DSC_0057.jpg'),
(288, 29, 'images/2018/09/1538160383.DSC_0084.jpg'),
(289, 30, 'images/2018/09/1538160843.DSCN7019.jpg'),
(290, 30, 'images/2018/09/1538160843.DSCN7023.jpg'),
(291, 30, 'images/2018/09/1538160843.DSCN7025.jpg'),
(292, 30, 'images/2018/09/1538160843.DSCN7029.jpg'),
(293, 30, 'images/2018/09/1538160843.DSCN7058.jpg'),
(294, 30, 'images/2018/09/1538160843.DSCN7062.jpg'),
(295, 30, 'images/2018/09/1538160843.DSCN7065.jpg'),
(296, 30, 'images/2018/09/1538160843.DSCN7069.jpg'),
(297, 30, 'images/2018/09/1538160843.DSCN7073.jpg'),
(298, 30, 'images/2018/09/1538160843.DSCN7118.jpg'),
(299, 30, 'images/2018/09/1538160843.DSCN7120.jpg'),
(300, 30, 'images/2018/09/1538160843.DSCN7129.jpg'),
(301, 30, 'images/2018/09/1538160939.DSCN7136.jpg'),
(302, 30, 'images/2018/09/1538160939.DSCN7137.jpg'),
(303, 30, 'images/2018/09/1538160939.DSCN7139.jpg'),
(304, 30, 'images/2018/09/1538160939.DSCN7144.jpg'),
(305, 30, 'images/2018/09/1538160939.DSCN7145.jpg'),
(306, 30, 'images/2018/09/1538160939.DSCN7146.jpg'),
(307, 30, 'images/2018/09/1538160939.f.jpg'),
(308, 30, 'images/2018/09/1538160939.f1.jpg'),
(309, 30, 'images/2018/09/1538160939.f4.jpg'),
(310, 30, 'images/2018/09/1538160939.f5.jpg'),
(311, 30, 'images/2018/09/1538160939.f6.jpg'),
(312, 30, 'images/2018/09/1538160939.f7.jpg'),
(313, 1, 'images/2018/11/1541223380.apple-iphone-xr-a2108.jpg'),
(314, 1, 'images/2018/11/1541223380.iphone-xr-white-select-201809_AV2.png'),
(315, 1, 'images/2018/11/1541223380.download.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sent_email`
--

CREATE TABLE `sent_email` (
  `id` int(11) NOT NULL,
  `subject` varchar(512) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state` varchar(100) DEFAULT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kathmandu Municipality', '1', '2018-10-04 10:29:27', '2018-10-04 10:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Chanda Lama', 'dcwcnepal@gmail.com', '$2y$10$THl3ZdaUs1e7bAZ7/Q2uFODBwTFsJ/q.lHN.VFkHguaucia1OEBlS', 'KRk8OUJkvSbvojbcqxNhnCiBKClVLzVZ4tZ3E2PgxO4c2yXTxCsZ8Z4D5s7s', '2018-09-06 07:34:11', '2018-10-02 07:06:26'),
(3, 'Admin', 'admin@gmail.com', '$2y$10$hDVZpMq6GlLCennhCn8kmebn1F9nDvLSHHpb89O.2DIG1j34YtxUu', 'zOZ7orTWGaivLb6YN3lV5HwkmZD1sB7o8vd6tNAjOG2D7Sai39BYM77x6Plz', '2018-09-09 13:17:56', '2018-09-09 13:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_mail`
--

CREATE TABLE `user_mail` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` int(11) DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_mail`
--

INSERT INTO `user_mail` (`id`, `name`, `email`, `title`, `country`, `phone`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Phurpa Namgel Lama', 'phurpa.milestone@yahoo.com', 6, NULL, NULL, NULL, '1', '2018-09-29 10:53:19', '2018-10-03 09:09:19'),
(3, 'Chanda', 'dcwcnepal@gmail.com', 4, 'Nepal', '-', '-', '1', '2018-10-01 07:51:05', '2018-10-01 07:51:05'),
(4, 'Akka Lama', 'akkalama@hotmail.com', 4, 'Nepal', '-', '-', '1', '2018-10-01 08:13:32', '2018-10-01 08:13:32'),
(5, 'Guna Bahadur Lama', 'gblwaiba@yahoo.com', 4, 'Nepal', NULL, NULL, '1', '2018-10-03 09:08:10', '2018-10-05 12:31:14'),
(7, 'Gary Collier', 'gary@lovenepal.org.np', 8, 'UK', NULL, NULL, '1', '2018-10-05 11:30:31', '2018-10-05 11:30:31'),
(8, 'Colleen Hogan', 'cmehogan@gmail.com', 9, 'USA', NULL, NULL, '1', '2018-10-05 11:31:25', '2018-10-05 11:31:25'),
(9, 'Mihika Chanchani', 'mchanchani@globalgiving.org', 8, 'USA', NULL, NULL, '1', '2018-10-05 11:32:32', '2018-10-05 11:32:32'),
(10, 'Hap Himalaya Evadeh', 'haphimalaya.evadeh@gmail.com', 8, 'France', NULL, NULL, '1', '2018-10-05 11:36:53', '2018-10-05 11:36:53'),
(11, 'Del Endres', 'delendres@gmail.com', 9, 'USA', NULL, NULL, '1', '2018-10-05 11:38:04', '2018-10-05 11:38:04'),
(12, 'Emma Bate', 'emma.b@hands.org', 9, 'USA', NULL, NULL, '1', '2018-10-05 11:39:56', '2018-10-05 11:39:56'),
(13, 'Erik Dyson', 'erik@hands.org', 9, 'USA', NULL, NULL, '1', '2018-10-05 11:42:48', '2018-10-05 11:42:48'),
(14, 'Jackie Osborne', 'kiwijackie@gmail.com', 8, 'USA', NULL, NULL, '1', '2018-10-05 11:43:39', '2018-10-05 11:43:39'),
(15, 'Simone Esquibel', 'Simoneesq@gmail.com', 8, 'USA', NULL, NULL, '1', '2018-10-05 11:44:39', '2018-10-05 11:44:39'),
(16, 'Luanna Zapuca', 'lzapula@globalgiving.co.uk', 8, 'UK', NULL, NULL, '1', '2018-10-05 11:46:05', '2018-10-05 11:46:05'),
(17, 'Association Terre Pure', 'associationterrepure@gmail.com', 8, 'France', NULL, NULL, '1', '2018-10-05 11:48:14', '2018-10-05 11:48:14'),
(18, 'Pierre Torres', 'pierre.torres38@gmail.com', 9, 'USA', NULL, NULL, '1', '2018-10-05 12:32:52', '2018-10-05 12:32:52'),
(19, 'Akka Lama', 'akka@dcwcnepal.org.np', 4, 'Nepal', NULL, NULL, '1', '2018-10-05 12:34:11', '2018-10-05 12:34:11'),
(20, 'Tula Waiba', 'tulwaiba2055@gmail.com', 4, 'Nepal', NULL, NULL, '1', '2018-10-05 12:58:47', '2018-10-05 12:58:47'),
(21, 'Patrick & Karen Graney', 'pgraney1@yahoo.com', 8, 'USA', NULL, NULL, '1', '2018-10-05 13:02:34', '2018-10-05 13:02:34'),
(22, 'Gina Inez', 'Ginainez@gmail.com', 9, 'USA', NULL, NULL, '1', '2018-10-05 13:59:54', '2018-10-05 13:59:54'),
(23, 'Susan Hamilton', 'susan.hamilton911@gmail.com', 9, 'UK', NULL, NULL, '1', '2018-10-05 14:02:01', '2018-10-05 14:02:01'),
(26, 'Stephen Gross', 'stevegross@earthlink.net', 9, 'USA', NULL, NULL, '1', '2018-10-05 14:05:22', '2018-10-05 14:05:22'),
(27, 'Joey Blue', 'joeybluetaos@gmail.com', 8, 'USA', NULL, NULL, '1', '2018-10-05 14:06:10', '2018-10-05 14:06:10'),
(28, 'Baptiste Arnaudo', 'baptiste.arnaudo@gmail.com', 9, 'USA', NULL, NULL, '1', '2018-10-05 14:07:10', '2018-10-05 14:07:10'),
(29, 'Dil BahadurThokar', 'dil.heartbrave@gmail.com', 1, 'Nepal', NULL, NULL, '1', '2018-10-05 14:08:03', '2018-10-05 14:08:03'),
(30, 'Tomas Beranek', 'tgb@gmail.cz', 8, 'Chezh  republic', NULL, NULL, '1', '2018-10-05 14:10:23', '2018-10-05 14:10:23'),
(31, 'Barbora Cuhelova', 'cuhelova.b@gmail.com', 8, 'Chezh Republic', NULL, NULL, '1', '2018-10-05 14:11:44', '2018-10-05 14:11:44'),
(32, 'Jeanette Gross', 'jeanetteg2@gmail.com', 9, 'USA', NULL, NULL, '1', '2018-10-05 14:12:37', '2018-10-05 14:12:37'),
(34, 'Clara MacNamee', 'cmacmarin@gmail.com', 9, 'USA', NULL, NULL, '1', '2018-10-05 14:13:57', '2018-10-05 14:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `year`, `created_at`, `updated_at`) VALUES
(1, 2016, '2018-09-20 07:15:15', '2018-09-20 07:15:15'),
(2, 2017, '2018-09-20 07:15:22', '2018-09-20 07:15:22'),
(3, 2018, '2018-09-20 07:15:27', '2018-09-20 07:15:27'),
(4, 2004, '2018-09-25 00:14:18', '2018-09-25 00:14:18'),
(5, 2006, '2018-09-25 00:15:52', '2018-09-25 00:15:52'),
(6, 2007, '2018-09-25 00:16:01', '2018-09-25 00:16:01'),
(7, 2008, '2018-09-25 00:16:10', '2018-09-25 00:16:10'),
(8, 2009, '2018-09-25 00:16:34', '2018-09-25 00:16:34'),
(9, 2010, '2018-09-25 00:16:44', '2018-09-25 00:16:44'),
(10, 2011, '2018-10-03 12:49:14', '2018-10-03 12:49:14'),
(11, 2012, '2018-10-03 12:49:24', '2018-10-03 12:49:24'),
(12, 2005, '2018-10-03 12:49:32', '2018-10-03 12:49:32'),
(13, 2013, '2018-10-03 12:49:46', '2018-10-03 12:49:46'),
(14, 2014, '2018-10-03 12:49:55', '2018-10-03 12:49:55'),
(15, 2015, '2018-10-03 12:50:02', '2018-10-03 12:50:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menus`
--
ALTER TABLE `admin_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_menu_items_menu_foreign` (`menu`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charity_trek`
--
ALTER TABLE `charity_trek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_category`
--
ALTER TABLE `email_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_description`
--
ALTER TABLE `program_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rel_charity_gallery`
--
ALTER TABLE `rel_charity_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rel_charity_gallery_charity_id_foreign` (`charity_id`);

--
-- Indexes for table `rel_charity_record`
--
ALTER TABLE `rel_charity_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rel_charity_record_charity_id_foreign` (`charity_id`);

--
-- Indexes for table `rel_project_category`
--
ALTER TABLE `rel_project_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rel_project_category_admin_project_id_foreign` (`admin_project_id`);

--
-- Indexes for table `rel_project_gallery`
--
ALTER TABLE `rel_project_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rel_project_gallery_project_id_foreign` (`project_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sent_email`
--
ALTER TABLE `sent_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_mail`
--
ALTER TABLE `user_mail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_mail_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_menus`
--
ALTER TABLE `admin_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `charity_trek`
--
ALTER TABLE `charity_trek`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `email_category`
--
ALTER TABLE `email_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `popup`
--
ALTER TABLE `popup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `program_description`
--
ALTER TABLE `program_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `rel_charity_gallery`
--
ALTER TABLE `rel_charity_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rel_charity_record`
--
ALTER TABLE `rel_charity_record`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `rel_project_category`
--
ALTER TABLE `rel_project_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `rel_project_gallery`
--
ALTER TABLE `rel_project_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sent_email`
--
ALTER TABLE `sent_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_mail`
--
ALTER TABLE `user_mail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  ADD CONSTRAINT `admin_menu_items_menu_foreign` FOREIGN KEY (`menu`) REFERENCES `admin_menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rel_charity_gallery`
--
ALTER TABLE `rel_charity_gallery`
  ADD CONSTRAINT `rel_charity_gallery_charity_id_foreign` FOREIGN KEY (`charity_id`) REFERENCES `charity_trek` (`id`);

--
-- Constraints for table `rel_charity_record`
--
ALTER TABLE `rel_charity_record`
  ADD CONSTRAINT `rel_charity_record_charity_id_foreign` FOREIGN KEY (`charity_id`) REFERENCES `charity_trek` (`id`);

--
-- Constraints for table `rel_project_category`
--
ALTER TABLE `rel_project_category`
  ADD CONSTRAINT `rel_project_category_admin_project_id_foreign` FOREIGN KEY (`admin_project_id`) REFERENCES `project` (`id`);

--
-- Constraints for table `rel_project_gallery`
--
ALTER TABLE `rel_project_gallery`
  ADD CONSTRAINT `rel_project_gallery_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
