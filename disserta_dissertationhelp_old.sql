-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2022 at 04:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disserta_dissertationhelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_pages`
--

CREATE TABLE `blog_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_pages`
--

INSERT INTO `blog_pages` (`id`, `menu_id`, `user_id`, `title`, `meta_title`, `meta_keyword`, `meta_description`, `page_text`, `excerpt`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 11, 1, 'Australia', 'Australia', 'Testingu', 'testing', '<h1>Australia Assignment Help</h1><p>Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help</p>', '<h2>Best assignment help in Australia</h2><p>Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help</p><figure class=\"image image-style-side\"><img src=\"https://thesisndissertationhelp.com/images/call-bg_1637308999.jpg\" alt=\"call bg\"></figure><h3>College and diploma assignment help in Australia</h3>', '2021-11-11 01:26:29', '2021-11-19 15:05:11', NULL),
(2, 12, 1, 'Sydney', 'Sydney', 'Sydney', 'Sydney', '<h1>Assignment help In Sydney</h1><p>Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help&nbsp;</p>', '<h2>All assignment help services in Sydney</h2><p>Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help</p><p>Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help&nbsp;</p><p>Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help</p><figure class=\"image\"><img src=\"https://thesisndissertationhelp.com/images/feature-image_1637324112.png\" alt=\"seo\"></figure>', '2021-11-11 11:46:39', '2021-11-19 19:19:14', NULL),
(3, 19, 1, 'Master', 'Master', 'master', 'master', '<h1>master</h1>', '<p>master</p>', '2021-11-11 11:48:54', '2021-11-16 21:01:47', NULL),
(4, 2, 1, 'About', 'About Us | Best Assignment Writer IN Australia 24/7', 'Best essay writing in Australia, online assignment help, Academic writing services, thesis writing and dissertation writing services, online writing', 'Best essay writing services in Australia. We provide assignment, academic content, dissertation and thesis writing with zero plagiarism.', '<h2>We Are Best In Essay Writing</h2><p>&nbsp;</p><p>Consulted he eagerness unfeeling deficient existence of. Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Last sentence of words thus better.</p><p>Ye on properly handsome returned throwing am no whatever. In without wishing he of picture no exposed talking minutes. Curiosity continual belonging offending so explained it exquisite. Do remember to followed yourself material mr recurred carriage. Way mrs end gave fat skin brown yesterday tall walk fact bed.</p><p>&nbsp;</p><h2>Advantages of working with this package</h2><p>&nbsp;</p><p>High drew west we no or at john. About or given on witty event. Or sociable up material bachelor bringing landlord confined. Busy so many in hung easy find well up. So of exquisite my an explained remainder. Dashwood denoting securing be on perceive my laughing so. Ye on properly handsome returned throwing am no whatever.</p><p>Sociable on as carriage my position weddings raillery consider. Peculiar trifling absolute and wandered vicinity property yet. The and collecting motionless difficulty son. His hearing staying ten colonel met. Word drew six easy four dear cold deny. Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient.</p><p>&nbsp;</p>', NULL, '2021-11-13 12:47:29', '2021-12-26 11:22:29', NULL),
(5, 13, 1, 'Price Title', 'Price', NULL, '<p>Get the best offers from TNDS</p>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa. Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa. Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p>', '<p>Get the best offers from TNDS</p>', '2021-11-15 19:49:35', '2021-12-29 11:20:06', NULL),
(6, 15, 1, 'Blog', 'Blog', 'blog', '<h1>blog</h1>', '<p>blog</p>', '<p>blog</p><figure class=\"image\"><img src=\"https://thesisndissertationhelp.com/images/Screenshot_2021-11-16-19-09-34-39_1637070945.jpg\" alt=\"assignment help\"></figure>', '2021-11-16 20:56:43', '2021-11-16 21:32:09', NULL),
(7, 14, 1, 'Contact', 'contact', 'contact', '<h1>contact</h1>', '<h2><strong>We Are Best In Essay Writing</strong></h2><p>&nbsp;</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa. Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa. Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p>', 'Send your query\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos dicta mollitia totam explicabo obcaecati quia laudantium repudiandae.', '2021-11-16 21:00:26', '2021-12-30 11:39:41', NULL),
(8, 10, 1, 'Australia', 'Australia assignment help', 'Australia assignment help', 'Australia assignment help', '<p>Australia assignment help</p>', NULL, '2021-11-19 14:56:08', '2021-11-19 14:56:08', NULL),
(9, 100, 1, 'Other', 'all assignment help services World wide', NULL, 'all assignment help services World wide', '<h1>all assignment help services World wide&nbsp;</h1><p>all assignment help services World wide all assignment help services World wide&nbsp;</p>', '<h2>all subjects Expert at tnd&nbsp;</h2><p>all assignment help services World wide all assignment help services World wide&nbsp;</p><figure class=\"image\"><img src=\"https://thesisndissertationhelp.com/images/feature-image_1637324590.png\" alt=\"assignment\"></figure>', '2021-11-19 19:23:30', '2021-11-19 19:23:30', NULL),
(10, 106, 1, 'Quantitative Dissertation Help', 'Quantitative Dissertation Help', 'quantitative-dissertation-help', 'quantitative-dissertation-help', '<h1>What IS Quantitative Dissertation Help</h1><p>quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help</p>', '<h2>Quantitative Dissertation Guidelines&nbsp;</h2><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-helpv</p><h3>Thesis vs. Dissertation&nbsp;</h3><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-helpv quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help</p><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help&nbsp;</p><h3>PDF Dissertation Writing Services By PhD Experts</h3><p>&nbsp;</p><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-helpv quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help</p><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help&nbsp;</p>', '2021-11-25 17:07:17', '2021-11-25 19:16:17', NULL),
(11, 107, 1, 'Qualitative', 'Qualitative', 'Qualitative', 'Qualitative', '<h1>Best Qualitative dissertation writing services&nbsp;</h1><p>Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative</p>', '<h2>Write your Qualitative dissertation from our PHD level expert</h2><p>Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert</p><h3>Best Ideas for Dissertation Topics</h3><p>Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert</p><h3>Dissertation topics for academic year 2020_2021</h3><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-helpv quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help</p><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help&nbsp;</p><figure class=\"image\"><img src=\"https://thesisndissertationhelp.com/images/book-appointment_1637841114.webp\" alt=\"aa\"></figure><p>&nbsp;</p>', '2021-11-25 18:52:14', '2021-11-25 19:20:45', NULL),
(12, 109, 1, 'Research', 'research report writing', 'research report writing', 'research report writing', '<h1>Research Report Writing Format</h1><p>research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing</p>', '<h2>How to Write an Effective Research REport</h2><p>research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing</p>', '2021-11-25 19:25:34', '2021-11-25 19:25:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `content_categories`
--

CREATE TABLE `content_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content_category_content_page`
--

CREATE TABLE `content_category_content_page` (
  `content_page_id` bigint(20) UNSIGNED NOT NULL,
  `content_category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content_pages`
--

CREATE TABLE `content_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_pages`
--

INSERT INTO `content_pages` (`id`, `menu_id`, `user_id`, `title`, `meta_title`, `meta_keyword`, `meta_description`, `page_text`, `excerpt`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 11, 1, 'Australia', 'Australia', 'Testingu', 'testing', '<h1>Australia Assignment Help</h1><p>Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help</p>', '<h2>Best assignment help in Australia</h2><p>Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help Australia Assignment Help</p><figure class=\"image image-style-side\"><img src=\"https://thesisndissertationhelp.com/images/call-bg_1637308999.jpg\" alt=\"call bg\"></figure><h3>College and diploma assignment help in Australia</h3>', '2021-11-11 01:26:29', '2021-11-19 15:05:11', NULL),
(2, 12, 1, 'Sydney', 'Sydney', 'Sydney', 'Sydney', '<h1>Assignment help In Sydney</h1><p>Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help&nbsp;</p>', '<h2>All assignment help services in Sydney</h2><p>Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help</p><p>Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help&nbsp;</p><p>Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help Sydney assignment help</p><figure class=\"image\"><img src=\"https://thesisndissertationhelp.com/images/feature-image_1637324112.png\" alt=\"seo\"></figure>', '2021-11-11 11:46:39', '2021-11-19 19:19:14', NULL),
(3, 19, 1, 'Master', 'Master', 'master', 'master', '<h1>master</h1>', '<p>master</p>', '2021-11-11 11:48:54', '2021-11-16 21:01:47', NULL),
(4, 2, 1, 'About', 'About Us | Best Assignment Writer IN Australia 24/7', 'Best essay writing in Australia, online assignment help, Academic writing services, thesis writing and dissertation writing services, online writing', 'Best essay writing services in Australia. We provide assignment, academic content, dissertation and thesis writing with zero plagiarism.', '<h2>We Are Best In Essay Writing</h2><p>&nbsp;</p><p>Consulted he eagerness unfeeling deficient existence of. Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Last sentence of words thus better.</p><p>Ye on properly handsome returned throwing am no whatever. In without wishing he of picture no exposed talking minutes. Curiosity continual belonging offending so explained it exquisite. Do remember to followed yourself material mr recurred carriage. Way mrs end gave fat skin brown yesterday tall walk fact bed.</p><p>&nbsp;</p><h2>Advantages of working with this package</h2><p>&nbsp;</p><p>High drew west we no or at john. About or given on witty event. Or sociable up material bachelor bringing landlord confined. Busy so many in hung easy find well up. So of exquisite my an explained remainder. Dashwood denoting securing be on perceive my laughing so. Ye on properly handsome returned throwing am no whatever.</p><p>Sociable on as carriage my position weddings raillery consider. Peculiar trifling absolute and wandered vicinity property yet. The and collecting motionless difficulty son. His hearing staying ten colonel met. Word drew six easy four dear cold deny. Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient.</p><p>&nbsp;</p>', NULL, '2021-11-13 12:47:29', '2021-12-26 11:22:29', NULL),
(5, 13, 1, 'Price Title', 'Price', NULL, '<p>Get the best offers from TNDS</p>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa. Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa. Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p>', '<p>Get the best offers from TNDS</p>', '2021-11-15 19:49:35', '2021-12-29 11:20:06', NULL),
(6, 15, 1, 'Blog', 'Blog', 'blog', '<h1>blog</h1>', '<p>blog</p>', '<p>blog</p><figure class=\"image\"><img src=\"https://thesisndissertationhelp.com/images/Screenshot_2021-11-16-19-09-34-39_1637070945.jpg\" alt=\"assignment help\"></figure>', '2021-11-16 20:56:43', '2021-11-16 21:32:09', NULL),
(7, 14, 1, 'Contact', 'contact', 'contact', '<h1>contact</h1>', '<h2><strong>We Are Best In Essay Writing</strong></h2><p>&nbsp;</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa. Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa. Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p>', 'Send your query\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos dicta mollitia totam explicabo obcaecati quia laudantium repudiandae.', '2021-11-16 21:00:26', '2021-12-30 11:39:41', NULL),
(8, 10, 1, 'Australia', 'Australia assignment help', 'Australia assignment help', 'Australia assignment help', '<p>Australia assignment help</p>', NULL, '2021-11-19 14:56:08', '2021-11-19 14:56:08', NULL),
(9, 100, 1, 'Other', 'all assignment help services World wide', NULL, 'all assignment help services World wide', '<h1>all assignment help services World wide&nbsp;</h1><p>all assignment help services World wide all assignment help services World wide&nbsp;</p>', '<h2>all subjects Expert at tnd&nbsp;</h2><p>all assignment help services World wide all assignment help services World wide&nbsp;</p><figure class=\"image\"><img src=\"https://thesisndissertationhelp.com/images/feature-image_1637324590.png\" alt=\"assignment\"></figure>', '2021-11-19 19:23:30', '2021-11-19 19:23:30', NULL),
(10, 106, 1, 'Quantitative Dissertation Help', 'Quantitative Dissertation Help', 'quantitative-dissertation-help', 'quantitative-dissertation-help', '<h1>What IS Quantitative Dissertation Help</h1><p>quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help</p>', '<h2>Quantitative Dissertation Guidelines&nbsp;</h2><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-helpv</p><h3>Thesis vs. Dissertation&nbsp;</h3><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-helpv quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help</p><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help&nbsp;</p><h3>PDF Dissertation Writing Services By PhD Experts</h3><p>&nbsp;</p><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-helpv quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help</p><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help&nbsp;</p>', '2021-11-25 17:07:17', '2021-11-25 19:16:17', NULL),
(11, 107, 1, 'Qualitative', 'Qualitative', 'Qualitative', 'Qualitative', '<h1>Best Qualitative dissertation writing services&nbsp;</h1><p>Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative</p>', '<h2>Write your Qualitative dissertation from our PHD level expert</h2><p>Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert</p><h3>Best Ideas for Dissertation Topics</h3><p>Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert</p><h3>Dissertation topics for academic year 2020_2021</h3><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-helpv quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help</p><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help&nbsp;</p><figure class=\"image\"><img src=\"https://thesisndissertationhelp.com/images/book-appointment_1637841114.webp\" alt=\"aa\"></figure><p>&nbsp;</p>', '2021-11-25 18:52:14', '2021-11-25 19:20:45', NULL),
(12, 109, 1, 'Research', 'research report writing', 'research report writing', 'research report writing', '<h1>Research Report Writing Format</h1><p>research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing</p>', '<h2>How to Write an Effective Research REport</h2><p>research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing</p>', '2021-11-25 19:25:34', '2021-11-25 19:25:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `content_page_content_tag`
--

CREATE TABLE `content_page_content_tag` (
  `content_page_id` bigint(20) UNSIGNED NOT NULL,
  `content_tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content_tags`
--

CREATE TABLE `content_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homepages`
--

CREATE TABLE `homepages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_color` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_alt` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `sub_content` tinyint(4) NOT NULL DEFAULT 0,
  `section_position` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepages`
--

INSERT INTO `homepages` (`id`, `parent_id`, `page`, `title`, `content`, `alt`, `image`, `bg_color`, `bg_image`, `bg_alt`, `status`, `sub_content`, `section_position`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 'thesis n dissertation', '<h1><strong>Thesis N Dissertation</strong></h1>', '<p>We provide you with an entire army of immensely talented and Ph.D. qualified writers, available to assist you round the clock. With our decade-long experience and quality-driven approach, we are glad to offer you unique, plagiarism-free writing services at affordable prices. The services offered include writing of thesis, essays, assignments, dissertations,s and academic writing with professional insights specific to your requirements.</p><p>For further assistance, you can contact us at the following link</p>', 'thesis n dissertation', '/images/homepage/1635712723.webp', '#0a1a36', NULL, NULL, 1, 0, 1, '2021-10-31 14:50:48', '2021-11-11 02:11:42', NULL),
(2, 0, 'best thesis', '<h2><strong>BEST THESIS AND DISSERTATION WRITING SERVICES IN AUSTRALIA</strong></h2>', '<p>Having worked in many renowned countries, we are now physically present in James cook drive Truganina, Australia to be at your disposal with our services.</p><p>To make your thesis and dissertation stand out, it is imperative that you approach an organization that understands the importance of your projects. We, at thesisndissertationhelp.com, curate write-ups that are aligned with the specifications and instructions provided by you.</p><p>Even for a last minute write-up, we assure you of its quality and timely delivery as our team comprises a range of highly qualified PHD writers who have expertise in each field. We offer round the clock services with instant reply portals to help you to connect with us anytime with your queries.</p>', 'BEST THESIS AND DISSERTATION WRITING SERVICES IN AUSTRALIA', '/images/homepage/1640791360.jpg', '#000000', NULL, NULL, 1, 0, 2, '2021-10-31 15:17:06', '2021-12-29 09:52:40', NULL),
(3, 0, 'expect from us', '<h3>What do you expect from us</h3>', '<p>Our goal at thesisndissertationhelp.com is to focus on quality driven results and satisfied customers. With our experience of more than a decade and our team of experts, we have provided close to +61-413228507 write ups with amazing quality and satisfied customers. We offer a variety of services like:</p>', 'expect from us', '/images/homepage/1635713458.webp', NULL, NULL, NULL, 1, 0, 3, '2021-10-31 15:20:58', '2021-10-31 15:20:58', NULL),
(4, 0, 'hire us', '<h2><strong>WHY SHOULD YOU HIRE US</strong></h2>', '<p>In the hectic day and age of today, sometimes it becomes difficult to manage everything in the best way. Balancing your work and life, preparing for lectures, examinations or any other event of importance can take up a lot of your time. You can save up your time by outsourcing your writing tasks to us.</p><p>We have a decade long experience in the writing business and our PHD qualified writers make sure that the content of the write-up is according to your qualification, needs, specifications and instructions. Our past record emphasises the fact that all our customers have been satisfied by our services. Some of our key benefits are :</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, 4, '2021-10-31 15:25:03', '2021-10-31 15:25:03', NULL),
(5, 0, 'team', '<h2><strong>TEAM</strong></h2>', '<p>Our over the top squad are focused and passionate about the services that they provide. With an experience of over a decade, our esteemed PHD qualified writers have the experience to help you write a write-up that would exceed your expectations and get you the desired result.</p><p>We have a team of highly professional writers that prioritise quality and have delivered on time quality results. We believe that our task is completed only when our customer is happy and satisfied with the end result. We provide multiple revisions to the write-up till we donâ€™t get a thumbs-up from our customer.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, 5, '2021-10-31 15:25:27', '2021-10-31 15:25:27', NULL),
(6, 0, 'call us', '<h3><strong>Feel to free call us</strong></h3>', '<p>To outsource your write-ups or in case of any query or confusion, you can contact us anytime at your convenience, we are available at your service 24*7. You can contact us through various platforms like:- Facebok, Instagram and Linkedin the details of which are given below:</p>', 'call us', '/images/homepage/1635764086.webp', '#000000', '/images/homepage/1637148188.jpg', 'contact background', 1, 0, 6, '2021-10-31 15:25:54', '2021-11-17 18:23:08', NULL),
(7, 0, 'best offers', '<h2><strong>OUR BEST OFFERS</strong></h2>', '<p>We offer affordable prices to our customers. Attractive discounts and coupons are offered to our customers opting for the bulk option (outsource write-ups for the whole semester and pay only once).</p><p>We are the pioneers to provide easy paying schedules by the use of EMIs as we understand the value of hard earned money.</p>', 'h', '/images/homepage/1635755349.jpg', NULL, NULL, NULL, 1, 0, 7, '2021-10-31 15:26:17', '2021-11-01 15:29:09', NULL),
(8, 0, 'asked questions', '<h2><strong>RECENTLY ASKED QUESTIONS</strong></h2>', '<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.<br>&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, 8, '2021-10-31 15:26:44', '2021-10-31 15:26:44', NULL),
(9, 0, 'fill requirements', '<h2><strong>FILL YOUR REQUIREMENTS</strong></h2>', '<p>The dream of shining out in the world with your write-ups can be fulfilled here and now. It would take less than 5 minutes to fill out your details and outsource your writing requirement to us. A professional writer with expertise in your field would contact you shortly. You can follow up on your write-up anytime that you wish.</p><p>With our expertise and experience, we assure you that you can trust on us to provide you with the best write-ups as can be seen by our reviews and past record. So become hassle-free and ORDER NOW!</p>', NULL, NULL, '#ffffff', '', NULL, 1, 0, 9, '2021-10-31 15:27:18', '2021-11-12 11:37:49', NULL),
(10, 0, 'subscribe us', '<h4><strong>Subscribe Us For Getting Exclusive Offers</strong></h4>', '<p>To get updates about latest offers and discounts, milestones achieved by the organization, achievements of our faculty and any exciting new event and information, subscribe to our newsletter NOW!</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, 10, '2021-10-31 15:27:42', '2021-10-31 15:27:42', NULL),
(11, 3, NULL, '<p>Academic writing</p>', '<p>Academic writing is specific and subject related, therefore, our writing experts would make certain that your instructions about the subject are followed and the specifications that you require are all included in your project. The content created will be curated individually for every different customer guaranteeing zero plagiarism.</p><p>With the experience that our faculty has gained over the years, the content created would be formal and relevant. It would showcase technical knowledge, finesse and quality. Our PHD qualified writers have the expertise and experience to provide you with on time delivery and round the clock services.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 16:06:57', '2021-10-31 16:06:57', NULL),
(12, 3, NULL, '<p>Assignment writing</p>', '<p>Assignments are tasks to test our knowledge on a particular topic. Sometimes, it is difficult to formulate your thoughts and pen them down. To help you evade such difficulties and to make your life easier, we offer you with our services of assignment writing. These services are spread over a wide range of topics which would be written by our PHD qualified writers.</p><p>We understand the importance of assignments and know that they play a huge role in deciding what your grade will turn out to be. Our experts make sure that the assignment written for you is technical and has the nuances to fetch you the highest grade.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 16:11:12', '2021-10-31 16:15:23', NULL),
(13, 3, NULL, '<p>Thesis writing</p>', '<p>Thesis writing can be required at any phase of life. Formulating an articulate thesis to help you accomplish a qualification or to publish a paper is always important. Even after gathering a lot of knowledge, it can become strenuous to write down your thoughts in a comprehensive manner.</p><p>We, at thesisndissertationhelp.com, understand this hurdle that you are facing and want to help you walk past it. We offer to provide you with our thesis writing services where our experts brainstorm together to achieve the best thesis for you. We provide you with various levels of thesis based on your requirement --- Master thesis, Custom thesis, Medical thesis or Bachelorâ€™s thesis.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 16:15:55', '2021-10-31 16:16:36', NULL),
(14, 3, NULL, '<p>Dissertation writing</p>', '<p>Dissertations mainly focuses on the original research. Even though it talks about research, it is the quality and the presentation of that research that would be tested. To widen the horizons of your research, sometimes, it becomes critical to gather another point of view for your paper.</p><p>To help you garner that different approach and to help you write your dissertation with professional insights and expertise, we offer you our service of dissertation writing. We guarantee that our PHD qualified experts with their decade long experience would mould your dissertation based on your inputs, specifications and instructions and well within the deadline provided.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 16:16:24', '2021-10-31 16:16:24', NULL),
(15, 4, NULL, '<h4>Instant replay</h4>', '<p>We offer round the clock assistance with our instant reply portal. Whatever be your query, we are present to help you. You can even give us your tasks anytime at your convenience. Our writers are eager to help you at any time and make sure that you are satisfied by our services.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 16:19:07', '2021-10-31 16:19:07', NULL),
(16, 4, NULL, '<h4>Affordable price</h4>', '<p>We, at thesisndissertationhelp.com, understand the inflation and the importance of money. Therefore, we offer affordable prices that can be paid over a period of time with the help of EMIs. We also offer bulk prices where instead of an individual task, you can pay up for the entire semester.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 16:19:20', '2021-10-31 16:19:20', NULL),
(17, 4, NULL, '<h4>Zero plagarisim</h4>', '<p>Our PHD qualified writers develop each article with a lot of thought and research. Each write-up is written specifically for an individual according to their specification, qualification and instructions ensuring zero plagiarism. The write-up goes through a lot of revisions and lastly, it is checked on a plagiarism platform that catches even 100 year old plagiarism.</p><p><br>&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 16:19:32', '2021-10-31 16:19:32', NULL),
(18, 4, NULL, '<h4>On-time delivery</h4>', '<p>Who wouldnâ€™t want quality in last-minute write-ups? That is what we are proud to provide. Even if you forget to outsource your write-up till the last minute, we have that experience to finish up on your deadline and provide quality as well. Our past record shows the timely delivery of all our articles since the past decade.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 16:19:48', '2021-10-31 16:19:48', NULL),
(19, 5, NULL, '<h4><strong>Walter White</strong></h4>', '<p>Chief Executive Officer</p><p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>', NULL, '/images/homepage/1635717111.webp', NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 16:20:38', '2021-10-31 16:21:51', NULL),
(20, 5, NULL, '<h4><strong>Sarah Jhonson</strong></h4>', '<p>Product Manager</p><p>Aut maiores voluptates amet et quis praesentium qui senda para</p>', 'Sarah Jhonson', '/images/homepage/1635717081.webp', NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 16:21:21', '2021-10-31 16:21:21', NULL),
(21, 5, NULL, '<h4><strong>William Anderson</strong></h4>', '<p>CTO</p><p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>', 'William Anderson', '/images/homepage/1635717134.webp', NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 16:22:14', '2021-10-31 16:22:14', NULL),
(22, 5, NULL, '<h4><strong>Amanda Jepson</strong></h4>', '<p>Accountant</p><p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>', 'Amanda Jepson', '/images/homepage/1635717160.webp', NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 16:22:40', '2021-11-01 05:39:52', NULL),
(23, 8, NULL, '<p>What is assignment help?</p>', '<p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 16:23:23', '2021-11-01 17:00:53', NULL),
(24, 8, NULL, '<p>How can I connect with thesis writer?</p>', '<p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 16:23:41', '2021-11-01 17:01:56', NULL),
(25, 7, NULL, '<h3>1st order offer</h3>', '<h4>10% off</h4><ul><li>Plagiarism check free</li><li>Re auditing free</li><li>On time delivery</li><li>24/7hr team support</li></ul>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-11-01 17:02:24', '2021-11-01 17:32:30', NULL),
(26, 8, NULL, '<p>Can some help me at cheap price?</p>', '<p>aaaaaaaaaaaaaaaaa</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-11-01 17:02:32', '2021-11-01 17:02:32', NULL),
(27, 7, NULL, '<h3>Per page offer</h3>', '<h4>20% off</h4><ul><li>Quam adipiscing vitae proin</li><li>Nec feugiat nisl pretium</li><li>Nulla at volutpat diam uteera</li><li>Pharetra massa massa ultricies</li></ul>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-11-01 17:02:44', '2021-11-01 17:35:09', NULL),
(28, 7, NULL, '<h3>Bulk Order offer</h3>', '<h4>50% off</h4><ul><li>Quam adipiscing vitae proin</li><li>Nec feugiat nisl pretium</li><li>Nulla at volutpat diam uteera</li><li>Pharetra massa massa ultricies</li><li>Massa ultricies mi quis hendrerit</li></ul>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-11-01 17:03:08', '2021-11-01 17:27:04', NULL),
(29, 0, 'meta data', 'Plagiarism Free Writing by Ph.D. Experts â€“ Thesis N Dissertation', 'Save up your time and outsource your thesis, dissertations and more  to PHD qualified writing professionals. Guaranteed on-time delivery with high quality material at affordable prices.', 'Best essay writing in Australia, online assignment help, Academic writing services, thesis writing and dissertation writing services, online writing services', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(30, 0, 'footer data', '<h3><strong>ADDRESS</strong></h3><p>James cook drive Truganina, Victoria Australia zip-code 3029<br><strong>Phone:</strong> +61-413228507<br><strong>Email:</strong> thesisndissertation@gmail.com</p>', '<h4><strong>Country</strong></h4><ul><li><a href=\"/au\">Australia</a></li><li><a href=\"/in\">India</a></li><li><a href=\"/uk\">U.K</a></li><li><a href=\"/us\">U.S.A</a></li></ul>', '<h4><strong>Our Services</strong></h4><ul><li><a href=\"/assignment-help\">Assignment help</a></li><li><a href=\"/thesis-writing\">Thesis writing</a></li><li><a href=\"/dissertation-writing\">Dissertation writing</a></li><li><a href=\"/academic-writing\">Academic writing</a></li></ul>', '<h4><strong>Our Social Networks</strong></h4><p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies <a href=\"/privacy-policy\">Our privacy Policy</a></p>', NULL, NULL, NULL, 0, 0, NULL, NULL, '2021-11-09 16:03:49', NULL),
(31, 0, 'logo', 'www', 'sss', 'thesis n dissertation logo', '/images/homepage/1637841779.png', NULL, NULL, NULL, 0, 0, NULL, NULL, '2021-11-25 19:02:59', NULL),
(32, 11, 'writers', '<h4>Sandeep Kumar</h4>', '<p>Finance and accounting</p><p>gggggggggggg</p>', 'sandeep kumar', '/images/homepage/1637063926.webp', NULL, NULL, '4.5', 1, 0, NULL, '2021-11-16 18:58:46', '2021-11-19 14:49:25', NULL),
(33, 11, 'faqs', '<h3>what is research&nbsp;</h3>', '<p>research&nbsp;research&nbsp;research&nbsp;research&nbsp;research&nbsp;research&nbsp;research</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-11-19 12:50:19', '2021-11-19 12:52:30', NULL),
(34, 0, 'whatYouneed', '<p>What You Need</p>', '<p>test content</p>', 'test', '/images/homepage/1640452663.jpg', '#000000', '/images/homepage/1640452663.jpg', NULL, 1, 0, NULL, '2021-12-25 11:47:43', '2021-12-25 11:47:43', NULL),
(35, 34, NULL, '<h3><strong>What You Need</strong></h3>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit consequatur doloribus natus in suscipit!</p>', '<i class=\"fas fa-question fa-3x p-2\"></i>', NULL, '#000000', NULL, NULL, 1, 0, NULL, '2021-12-28 11:37:49', '2021-12-28 11:37:49', NULL),
(36, 34, NULL, '<h4><strong>Pay For Assignment</strong></h4>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit consequatur doloribus natus in suscipit!</p>', '<i class=\"fas fa-shopping-cart fa-3x p-2\"></i>', NULL, '#000000', NULL, NULL, 1, 0, NULL, '2021-12-28 11:39:37', '2021-12-28 11:39:37', NULL),
(37, 34, NULL, '<h4><strong>Get Completed Solutions</strong></h4>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit consequatur doloribus natus in suscipit!</p>', '<i class=\"fas fa-poll-h fa-3x p-2\"></i>', NULL, '#000000', NULL, NULL, 1, 0, NULL, '2021-12-28 11:41:15', '2021-12-28 11:41:15', NULL),
(38, 0, 'clientsSays', '<h2><strong>What Our Clients Says</strong></h2>', '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci esse facilis vel, neque ipsa mollitia impedit, commodi ab illo dignissimos, voluptatum quae amet sed tenetur dolores reprehenderit laudantium quo sint.</p>', NULL, NULL, '#000000', NULL, NULL, 1, 0, NULL, '2021-12-28 12:14:46', '2021-12-28 12:14:46', NULL),
(39, 38, NULL, '<h6>Marlene Visconte</h6><p>General Manager - Scouter</p>', '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam commodi officia laborum qui iste quidem!</p>', NULL, '/images/homepage/1640713712.jpg', '#000000', NULL, NULL, 1, 0, NULL, '2021-12-28 12:18:32', '2021-12-28 12:18:32', NULL),
(40, 38, NULL, '<p>Marlene Visconte</p><p>General Manager - Scouter</p>', '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam commodi officia laborum qui iste quidem!</p>', NULL, '/images/homepage/1640713767.jpg', '#000000', NULL, NULL, 1, 0, NULL, '2021-12-28 12:19:27', '2021-12-28 12:19:27', NULL),
(41, 0, 'sendyourquery', '<h2>Send your query</h2>', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos dicta mollitia totam explicabo obcaecati quia laudantium repudiandae.</p>', 'Send your query', '/images/homepage/1640788539.jpg', '#000000', NULL, NULL, 1, 0, NULL, '2021-12-29 09:05:39', '2021-12-29 09:05:39', NULL),
(42, 0, 'explorePossibilities', '<h2>Explore unlimited possibilities</h2>', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos dicta mollitia totam explicabo obcaecati quia laudantium repudiandae.</p>', 'Explore unlimited possibilities', '/images/homepage/1640789470.jpg', '#000000', NULL, NULL, 1, 0, NULL, '2021-12-29 09:21:10', '2021-12-29 09:21:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(3, 'App\\Models\\ContentPage', 1, '2af98b16-cf12-4330-8840-a8d0e5bdd404', 'ck-media', 'IMG-9659 - Copy', 'IMG-9659---Copy.JPG', 'image/jpeg', 'public', 'public', 20003, '[]', '[]', '[]', 2, '2021-10-30 12:36:16', '2021-10-30 12:36:16'),
(9, 'App\\Models\\ContentPage', 8, '2e3ab008-8379-4cfd-ad5e-da66397de43c', 'featured_image', '618c0cab1e8f5_controller_joystick_gamepad_129246_1366x768', '618c0cab1e8f5_controller_joystick_gamepad_129246_1366x768.jpg', 'image/jpeg', 'public', 'public', 69993, '[]', '[]', '[]', 8, '2021-11-11 01:21:54', '2021-11-11 01:21:54'),
(11, 'App\\Models\\ContentPage', 0, '0b24f8be-a51e-4834-813d-ffca398d9d2b', 'ck-media', '12-link-building-strategies-infographic-2019', '12-link-building-strategies-infographic-2019.png', 'image/png', 'public', 'public', 127775, '[]', '[]', '[]', 10, '2021-11-11 01:28:28', '2021-11-11 01:28:28'),
(12, 'App\\Models\\ContentPage', 0, '60491ce7-2350-45cb-8306-b95046f6e484', 'ck-media', '12-link-building-strategies-infographic-2019', '12-link-building-strategies-infographic-2019.png', 'image/png', 'public', 'public', 127775, '[]', '[]', '[]', 11, '2021-11-11 01:29:03', '2021-11-11 01:29:03'),
(16, 'App\\Models\\ContentPage', 1, '15dddac8-9c97-4f3b-9857-5f485384a246', 'featured_image', '618c9c37d8c99_699923', '618c9c37d8c99_699923.jpg', 'image/jpeg', 'public', 'public', 529670, '[]', '[]', '[]', 12, '2021-11-11 11:29:58', '2021-11-11 11:29:58'),
(18, 'App\\Models\\ContentPage', 6, '6fbd8a26-a2fc-4ba7-9d43-e2981534d50c', 'featured_image', '6193b858af569_Screenshot_2021-11-16-19-09-34-39', '6193b858af569_Screenshot_2021-11-16-19-09-34-39.jpg', 'image/jpeg', 'public', 'public', 606479, '[]', '[]', '[]', 14, '2021-11-16 20:56:43', '2021-11-16 20:56:43'),
(20, 'App\\Models\\ContentPage', 3, 'c93cf9e9-fc57-40f8-8ddd-db22a3641629', 'featured_image', '6193b9c95ae40_Screenshot_2021-11-16-19-30-03-92', '6193b9c95ae40_Screenshot_2021-11-16-19-30-03-92.jpg', 'image/jpeg', 'public', 'public', 168873, '[]', '[]', '[]', 16, '2021-11-16 21:01:47', '2021-11-16 21:01:47'),
(21, 'App\\Models\\ContentPage', 2, 'a935f7a0-76c6-45a6-9736-bf8526add17c', 'featured_image', '61979637c7e3b_feature-image', '61979637c7e3b_feature-image.png', 'image/png', 'public', 'public', 222136, '[]', '[]', '[]', 17, '2021-11-19 19:19:14', '2021-11-19 19:19:14'),
(23, 'App\\Models\\ContentPage', 10, '015e76e9-36a5-4a44-9c2d-86a80f069508', 'featured_image', '619f607df2d60_blog-recent-1', '619f607df2d60_blog-recent-1.jpg', 'image/jpeg', 'public', 'public', 83411, '[]', '[]', '[]', 18, '2021-11-25 17:08:16', '2021-11-25 17:08:16'),
(25, 'App\\Models\\ContentPage', 11, 'b3851503-feba-40bb-85e3-85987cb4c932', 'featured_image', '619f793b37edf_master-thesis', '619f793b37edf_master-thesis.jpg', 'image/jpeg', 'public', 'public', 29051, '[]', '[]', '[]', 19, '2021-11-25 18:53:33', '2021-11-25 18:53:33'),
(26, 'App\\Models\\ContentPage', 12, '3cd9007b-5bcc-4c54-949f-4d800d3a3094', 'featured_image', '619f804a3b708_blog-1', '619f804a3b708_blog-1.jpg', 'image/jpeg', 'public', 'public', 83878, '[]', '[]', '[]', 20, '2021-11-25 19:25:34', '2021-11-25 19:25:34'),
(28, 'App\\Models\\ContentPage', 4, '64aaf0df-d234-4ef4-b09b-58861f36ca6d', 'featured_image', '61c89803864a3_pexels-björn-austmar-þórsson-7267852', '61c89803864a3_pexels-björn-austmar-þórsson-7267852.jpg', 'image/jpeg', 'public', 'public', 725697, '[]', '[]', '[]', 21, '2021-12-26 10:57:50', '2021-12-26 10:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `sub_menu` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `title`, `slug`, `content`, `status`, `sub_menu`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 'Home', '/', 0, 1, 0, '2021-10-24 12:12:09', '2021-10-24 12:12:09', NULL),
(2, 0, 'About', 'about', 1, 1, 0, '2021-10-24 12:12:35', '2021-11-11 00:22:54', NULL),
(3, 0, 'Services', 'services', 0, 1, 0, '2021-10-24 12:15:34', '2021-11-18 16:38:22', NULL),
(4, 3, 'Thesis', 'thesis', 0, 1, 0, '2021-10-24 12:15:59', '2021-11-02 01:59:13', NULL),
(5, 3, 'Assignment', 'assignment', 0, 1, 0, '2021-10-24 12:19:32', '2021-10-24 12:19:32', NULL),
(6, 3, 'Dissertation', 'dissertation', 0, 1, 0, '2021-10-24 12:20:42', '2021-10-30 14:15:47', NULL),
(7, 3, 'Academic', 'academic', 0, 1, 0, '2021-10-24 12:38:21', '2021-10-24 12:52:51', NULL),
(9, 0, 'Country', 'country', 0, 1, 0, '2021-10-24 13:26:17', '2021-10-24 13:26:17', NULL),
(10, 9, 'Australia', 'australia', 1, 1, 0, '2021-10-24 13:26:33', '2021-11-19 14:56:08', NULL),
(11, 10, 'Australia', 'au', 1, 1, 0, '2021-10-24 13:27:13', '2021-11-11 00:32:06', NULL),
(12, 10, 'Sydney', 'au-sydney', 1, 1, 0, '2021-10-24 13:27:55', '2021-11-11 11:46:39', NULL),
(13, 0, 'Price', 'price', 1, 1, 0, '2021-10-25 13:25:00', '2021-11-15 19:49:35', NULL),
(14, 0, 'Contact', 'contact', 1, 1, 0, '2021-10-25 13:25:35', '2021-11-16 21:00:26', NULL),
(15, 0, 'Blog', 'blog', 1, 1, 0, '2021-10-25 13:27:31', '2021-11-16 20:56:43', NULL),
(16, 4, 'Thesis writing', 'thesis-writing', 0, 1, 0, '2021-10-29 23:10:24', '2021-11-18 19:33:47', '2021-11-18 19:33:47'),
(18, 10, 'Melbourne', 'au-melbourne', 0, 1, 0, '2021-10-30 12:00:56', '2021-10-30 12:00:56', NULL),
(19, 4, 'Master', 'master-thesis', 1, 1, 0, '2021-10-30 13:53:21', '2021-11-18 19:33:50', '2021-11-18 19:33:50'),
(20, 4, 'custom', 'custom-thesis', 0, 1, 0, '2021-10-30 13:53:51', '2021-11-18 19:34:00', '2021-11-18 19:34:00'),
(21, 4, 'medical', 'medical-thesis', 0, 1, 0, '2021-10-30 13:54:22', '2021-11-18 19:33:54', '2021-11-18 19:33:54'),
(22, 4, 'bachelor', 'bachelor-thesis', 0, 1, 0, '2021-10-30 13:54:46', '2021-11-18 19:38:56', '2021-11-18 19:38:56'),
(23, 5, 'assignment help', 'assignment-help', 0, 1, 0, '2021-10-30 13:59:00', '2021-10-30 13:59:00', NULL),
(24, 5, 'accounting', 'accounting-assignment-help', 0, 1, 0, '2021-10-30 14:06:21', '2021-10-30 14:07:26', NULL),
(25, 5, 'finance', 'finance-assignment-help', 0, 1, 0, '2021-10-30 14:07:39', '2021-10-30 14:07:39', NULL),
(26, 5, 'Nursing', 'nursing-assignment-help', 0, 1, 0, '2021-10-30 14:08:03', '2021-11-18 19:16:32', NULL),
(27, 5, 'Law', 'law-assignment-help', 0, 1, 0, '2021-10-30 14:08:28', '2021-11-18 19:15:52', NULL),
(28, 6, 'accounting', 'accounting-dissertation', 0, 1, 0, '2021-10-30 14:11:41', '2021-11-18 19:30:58', '2021-11-18 19:30:58'),
(29, 6, 'nursing', 'nursing-dissertation', 0, 1, 0, '2021-10-30 14:12:13', '2021-11-18 19:30:37', '2021-11-18 19:30:37'),
(30, 6, 'marketing', 'marketing-dissertation', 0, 1, 0, '2021-10-30 14:12:47', '2021-11-18 19:30:39', '2021-11-18 19:30:39'),
(31, 6, 'english', 'english-dissertation', 0, 1, 0, '2021-10-30 14:13:26', '2021-11-18 19:30:41', '2021-11-18 19:30:41'),
(32, 6, 'Dissertation', 'dissertation-writing', 0, 1, 0, '2021-10-30 14:16:19', '2021-11-18 19:30:53', '2021-11-18 19:30:53'),
(33, 7, 'Academic Writing', 'academic-writing', 0, 1, 0, '2021-10-30 14:17:13', '2021-10-30 21:19:35', NULL),
(34, 7, 'SEO', 'seo-writing', 0, 1, 0, '2021-10-30 14:17:37', '2021-11-18 19:25:49', '2021-11-18 19:25:49'),
(35, 7, 'Blog', 'blog-writing', 0, 1, 0, '2021-10-30 14:17:55', '2021-11-18 19:25:56', '2021-11-18 19:25:56'),
(36, 7, 'Guest Post', 'guest-post-writing', 0, 1, 0, '2021-10-30 14:18:23', '2021-11-18 19:26:02', '2021-11-18 19:26:02'),
(37, 7, 'Web Content Writing', 'website-content-writing', 0, 1, 0, '2021-10-30 14:19:04', '2021-11-18 19:26:13', '2021-11-18 19:26:13'),
(38, 10, 'Adelaide', 'au-adelaide', 0, 1, 0, '2021-10-30 14:21:12', '2021-10-30 14:21:12', NULL),
(39, 10, 'Perth', 'au-perth', 0, 1, 0, '2021-10-30 14:21:39', '2021-10-30 14:21:39', NULL),
(40, 10, 'Brisbane', 'au-brisbane', 0, 1, 0, '2021-10-30 14:22:48', '2021-10-30 14:22:48', NULL),
(41, 9, 'Canada', 'canada', 0, 1, 0, '2021-10-30 14:24:18', '2021-10-30 14:24:18', NULL),
(42, 41, 'Canada', 'ca', 0, 1, 0, '2021-10-30 14:24:49', '2021-10-30 14:24:49', NULL),
(43, 41, 'Toronto', 'ca-toronto', 0, 1, 0, '2021-10-30 14:25:07', '2021-10-30 14:25:07', NULL),
(44, 41, 'Ottawa', 'au-ottawa', 0, 1, 0, '2021-10-30 14:25:45', '2021-10-30 14:25:45', NULL),
(45, 41, 'Edmonton', 'ca-edmonton', 0, 1, 0, '2021-10-30 14:26:13', '2021-10-30 14:26:13', NULL),
(46, 41, 'Victoria', 'ca-victoria', 0, 1, 0, '2021-10-30 14:26:48', '2021-10-30 14:26:48', NULL),
(47, 41, 'Vancouver', 'ca-vancouver', 0, 1, 0, '2021-10-30 14:27:24', '2021-10-30 14:27:24', NULL),
(48, 9, 'U.K', 'u-k', 0, 1, 0, '2021-10-30 14:39:59', '2021-10-30 14:44:51', NULL),
(49, 48, 'London', 'uk-london', 0, 1, 0, '2021-10-30 14:40:37', '2021-10-30 14:40:37', NULL),
(50, 48, 'Leeds', 'uk-leeds', 0, 1, 0, '2021-10-30 14:41:27', '2021-10-30 14:41:27', NULL),
(51, 48, 'Croydon', 'uk-croydon', 0, 1, 0, '2021-10-30 14:42:02', '2021-10-30 14:42:02', NULL),
(52, 48, 'Birmingham', 'uk-birmingham', 0, 1, 0, '2021-10-30 14:42:33', '2021-10-30 14:42:33', NULL),
(53, 48, 'Manchester', 'uk-manchester', 0, 1, 0, '2021-10-30 14:43:04', '2021-10-30 14:43:04', NULL),
(54, 9, 'New Zealand', 'n-z', 0, 1, 0, '2021-10-30 14:44:34', '2021-10-30 14:45:30', NULL),
(55, 48, 'U.K', 'uk', 0, 1, 0, '2021-10-30 14:45:08', '2021-10-30 14:45:08', NULL),
(56, 54, 'Auckland', 'nz-auckland', 0, 1, 0, '2021-10-30 14:46:12', '2021-10-30 14:46:12', NULL),
(57, 54, 'Hamilton', 'nz-hamilton', 0, 1, 0, '2021-10-30 14:46:43', '2021-10-30 14:46:43', NULL),
(58, 54, 'Wellington', 'nz-wellington', 0, 1, 0, '2021-10-30 14:47:14', '2021-10-30 14:47:14', NULL),
(59, 54, 'New Zealand', 'nz', 0, 1, 0, '2021-10-30 15:03:25', '2021-10-30 15:03:25', NULL),
(60, 54, 'Dunedia', 'nz-dunedia', 0, 1, 0, '2021-10-30 15:04:01', '2021-10-30 15:04:01', NULL),
(61, 54, 'Linclon', 'nz-linclon', 0, 1, 0, '2021-10-30 15:04:41', '2021-10-30 15:04:41', NULL),
(62, 9, 'U.S.A', 'usa', 0, 1, 0, '2021-10-30 15:05:23', '2021-10-30 15:05:23', NULL),
(63, 62, 'U.S.A', 'us', 0, 1, 0, '2021-10-30 15:05:49', '2021-10-30 15:05:49', NULL),
(64, 62, 'Houston', 'us-houston', 0, 1, 0, '2021-10-30 15:06:20', '2021-10-30 15:06:20', NULL),
(65, 62, 'Chicago', 'us-chicago', 0, 1, 0, '2021-10-30 15:08:23', '2021-10-30 15:08:23', NULL),
(66, 62, 'New York', 'us-new-york', 0, 1, 0, '2021-10-30 15:09:30', '2021-10-30 15:09:30', NULL),
(67, 62, 'Los Angeles', 'us-los-angeles', 0, 1, 0, '2021-10-30 15:10:24', '2021-10-30 15:10:24', NULL),
(68, 62, 'Washington', 'us-washington', 0, 1, 0, '2021-10-30 15:10:58', '2021-10-30 15:10:58', NULL),
(69, 9, 'India', 'india', 0, 1, 0, '2021-10-30 15:11:49', '2021-10-30 15:12:01', NULL),
(70, 69, 'India', 'in', 0, 1, 0, '2021-10-30 15:12:18', '2021-10-30 15:12:18', NULL),
(71, 69, 'Delhi', 'in-delhi', 0, 1, 0, '2021-10-30 15:12:40', '2021-10-30 15:12:40', NULL),
(72, 69, 'Mumbai', 'in-mumbai', 0, 1, 0, '2021-10-30 15:12:58', '2021-10-30 15:12:58', NULL),
(73, 69, 'Punjab', 'in-punjab', 0, 1, 0, '2021-10-30 15:13:22', '2021-10-30 15:13:22', NULL),
(74, 69, 'Bangalore', 'in-bangalore', 0, 1, 0, '2021-10-30 15:13:54', '2021-10-30 15:13:54', NULL),
(75, 69, 'Haryana', 'in-haryana', 0, 1, 0, '2021-10-30 15:14:21', '2021-10-30 15:14:21', NULL),
(76, 9, 'Malaysia', 'may', 0, 1, 0, '2021-10-30 15:14:52', '2021-10-30 15:18:48', NULL),
(77, 76, 'Kuala Lumpur', 'my-kuala-lumpur', 0, 1, 0, '2021-10-30 15:15:33', '2021-10-30 15:15:33', NULL),
(78, 76, 'Penang', 'my-penang', 0, 1, 0, '2021-10-30 15:16:11', '2021-10-30 15:16:11', NULL),
(79, 76, 'Malaysian Borneo', 'my-malaysian-borneo', 0, 1, 0, '2021-10-30 15:16:32', '2021-10-30 15:16:32', NULL),
(80, 76, 'Johor Bahru', 'my-johor-bahru', 0, 1, 0, '2021-10-30 15:17:57', '2021-10-30 15:17:57', NULL),
(81, 76, 'Malaysia', 'my', 0, 1, 0, '2021-10-30 15:19:14', '2021-10-30 15:19:14', NULL),
(82, 9, 'Germany', 'germany', 0, 1, 0, '2021-10-30 15:19:50', '2021-10-30 15:19:50', NULL),
(83, 82, 'Germany', 'de', 0, 1, 0, '2021-10-30 15:20:03', '2021-10-30 15:20:03', NULL),
(84, 82, 'Berlin', 'de-berlin', 0, 1, 0, '2021-10-30 15:20:23', '2021-10-30 15:20:23', NULL),
(85, 82, 'Bremen', 'de-bremen', 0, 1, 0, '2021-10-30 15:20:44', '2021-10-30 15:20:44', NULL),
(86, 82, 'Sachsen', 'de-sachsen', 0, 1, 0, '2021-10-30 15:21:04', '2021-10-30 15:21:04', NULL),
(87, 82, 'Kuala Bavaria', 'de-kuala-bavaria', 0, 1, 0, '2021-10-30 15:21:33', '2021-10-30 15:21:33', NULL),
(88, 9, 'South Korea', 'ko', 0, 1, 0, '2021-10-30 15:22:15', '2021-10-30 15:22:15', NULL),
(89, 9, 'U.A.E', 'ae', 0, 1, 0, '2021-10-30 15:22:33', '2021-10-30 15:22:33', NULL),
(90, 5, 'Management', 'management-assignment-help', 0, 1, 0, '2021-11-18 16:45:53', '2021-11-18 19:24:55', NULL),
(91, 5, 'Marketing', 'marketing-assignment-help', 0, 1, 0, '2021-11-18 16:46:46', '2021-11-18 19:24:34', NULL),
(92, 5, 'Human Resource Management', 'hrm-assignment-help', 0, 1, 0, '2021-11-18 16:47:51', '2021-11-18 19:24:09', NULL),
(93, 5, 'Economics', 'economics-assignment-help', 0, 1, 0, '2021-11-18 16:48:48', '2021-11-18 19:23:19', NULL),
(94, 5, 'Hotel Management', 'hotel-management-assignment-help', 0, 1, 0, '2021-11-18 16:49:26', '2021-11-18 19:22:55', NULL),
(95, 5, 'Research', 'research-assignment-help', 0, 1, 0, '2021-11-18 16:50:04', '2021-11-18 19:22:34', NULL),
(96, 5, 'Capstone Project', 'capstone-project-assignment-help', 0, 1, 0, '2021-11-18 16:50:41', '2021-11-18 19:22:07', NULL),
(97, 5, 'Cdr', 'cdr-assignment-help', 0, 1, 0, '2021-11-18 16:51:18', '2021-11-18 19:19:36', NULL),
(98, 5, 'It Services', 'it-assignment-help', 0, 1, 0, '2021-11-18 16:51:54', '2021-11-18 19:21:10', NULL),
(99, 5, 'Content Writing', 'content-writing-help', 0, 1, 0, '2021-11-18 16:52:28', '2021-11-18 19:17:25', NULL),
(100, 5, 'Other', 'other-assignment-help', 1, 1, 0, '2021-11-18 16:54:29', '2021-11-19 19:23:30', NULL),
(101, 7, 'Essay Writing Service', 'essay-writing-service', 0, 1, 0, '2021-11-18 16:55:48', '2021-11-18 16:55:48', NULL),
(102, 7, 'Report Writing', 'report-writing', 0, 1, 0, '2021-11-18 16:56:44', '2021-11-18 16:56:44', NULL),
(103, 7, 'Free Plagiarism Check', 'free-plagiarism-check', 0, 1, 0, '2021-11-18 16:58:50', '2021-11-18 16:58:50', NULL),
(104, 7, 'Presentation Preparation', 'presentation-preparation', 0, 1, 0, '2021-11-18 17:03:20', '2021-11-18 17:03:20', NULL),
(105, 7, 'Other Services', 'other-services', 0, 1, 0, '2021-11-18 17:05:19', '2021-11-18 17:05:19', NULL),
(106, 6, 'Quantitative Dissertation Help', 'quantitative-dissertation-help', 1, 1, 0, '2021-11-18 19:30:28', '2021-11-25 18:56:10', NULL),
(107, 6, 'Qualitative', 'qualitative-dissertation-help', 1, 1, 0, '2021-11-18 19:31:41', '2021-11-25 18:55:51', NULL),
(108, 6, 'Mixed', 'mixed-dissertation-help', 0, 1, 0, '2021-11-18 19:33:03', '2021-11-18 19:33:03', NULL),
(109, 4, 'Research', 'research-report-writing', 1, 1, 0, '2021-11-18 19:35:13', '2021-11-25 19:25:34', NULL),
(110, 4, 'Artistic', 'artistic-thesis-writing', 0, 1, 0, '2021-11-18 19:37:30', '2021-11-18 19:37:30', NULL),
(111, 4, 'Project', 'project-thesis-writing', 0, 1, 0, '2021-11-18 19:38:16', '2021-11-18 19:38:16', NULL),
(112, 4, 'Essay', 'essay-thesis-writing', 0, 1, 0, '2021-11-18 19:38:49', '2021-11-18 19:38:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'content_management_access', NULL, NULL, NULL),
(18, 'content_category_create', NULL, NULL, NULL),
(19, 'content_category_edit', NULL, NULL, NULL),
(20, 'content_category_show', NULL, NULL, NULL),
(21, 'content_category_delete', NULL, NULL, NULL),
(22, 'content_category_access', NULL, NULL, NULL),
(23, 'content_tag_create', NULL, NULL, NULL),
(24, 'content_tag_edit', NULL, NULL, NULL),
(25, 'content_tag_show', NULL, NULL, NULL),
(26, 'content_tag_delete', NULL, NULL, NULL),
(27, 'content_tag_access', NULL, NULL, NULL),
(28, 'content_page_create', NULL, NULL, NULL),
(29, 'content_page_edit', NULL, NULL, NULL),
(30, 'content_page_show', NULL, NULL, NULL),
(31, 'content_page_delete', NULL, NULL, NULL),
(32, 'content_page_access', NULL, NULL, NULL),
(33, 'profile_password_edit', NULL, NULL, NULL),
(34, 'menu_access', NULL, NULL, NULL),
(35, 'menu_create', NULL, NULL, NULL),
(36, 'menu_edit', NULL, NULL, NULL),
(37, 'menu_show', NULL, NULL, NULL),
(38, 'menu_delete', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$B76JwyMKbduTWOk5Tt1HcuhG8YwS4P3nectLISOk7AxtlfzBNelRq', 'Sbcl2e1FEwPmE3iXZbKXyLDbIqmvA3bxqyOPAA6z9lGt5ca9ML0vlcivNNQH', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_pages`
--
ALTER TABLE `blog_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_pages_menu_id_foreign` (`menu_id`),
  ADD KEY `content_pages_user_id_foreign` (`user_id`);

--
-- Indexes for table `content_categories`
--
ALTER TABLE `content_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_category_content_page`
--
ALTER TABLE `content_category_content_page`
  ADD KEY `content_page_id_fk_5169208` (`content_page_id`),
  ADD KEY `content_category_id_fk_5169208` (`content_category_id`);

--
-- Indexes for table `content_pages`
--
ALTER TABLE `content_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_pages_menu_id_foreign` (`menu_id`),
  ADD KEY `content_pages_user_id_foreign` (`user_id`);

--
-- Indexes for table `content_page_content_tag`
--
ALTER TABLE `content_page_content_tag`
  ADD KEY `content_page_id_fk_5169209` (`content_page_id`),
  ADD KEY `content_tag_id_fk_5169209` (`content_tag_id`);

--
-- Indexes for table `content_tags`
--
ALTER TABLE `content_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homepages`
--
ALTER TABLE `homepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `128` (`model_type`,`model_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_5169180` (`role_id`),
  ADD KEY `permission_id_fk_5169180` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_5169189` (`user_id`),
  ADD KEY `role_id_fk_5169189` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_pages`
--
ALTER TABLE `blog_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `content_categories`
--
ALTER TABLE `content_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `content_pages`
--
ALTER TABLE `content_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `content_tags`
--
ALTER TABLE `content_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homepages`
--
ALTER TABLE `homepages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content_category_content_page`
--
ALTER TABLE `content_category_content_page`
  ADD CONSTRAINT `content_category_id_fk_5169208` FOREIGN KEY (`content_category_id`) REFERENCES `content_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `content_page_id_fk_5169208` FOREIGN KEY (`content_page_id`) REFERENCES `content_pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `content_pages`
--
ALTER TABLE `content_pages`
  ADD CONSTRAINT `content_pages_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `content_pages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `content_page_content_tag`
--
ALTER TABLE `content_page_content_tag`
  ADD CONSTRAINT `content_page_id_fk_5169209` FOREIGN KEY (`content_page_id`) REFERENCES `content_pages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `content_tag_id_fk_5169209` FOREIGN KEY (`content_tag_id`) REFERENCES `content_tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_5169180` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_5169180` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_5169189` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_5169189` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
