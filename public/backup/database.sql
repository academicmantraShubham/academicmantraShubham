-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2022 at 09:19 AM
-- Server version: 5.7.37
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bestessa_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'blog-test', 'testblog', '2022-01-05 09:06:18', '2022-01-05 09:06:18', NULL);

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
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `page_text` longtext COLLATE utf8mb4_unicode_ci,
  `excerpt` longtext COLLATE utf8mb4_unicode_ci,
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
(7, 14, 1, 'Contact', 'contact', 'contact', '<h1>contact</h1>', '<h2><strong>We Are Best In Essay Writing</strong></h2><p>&nbsp;</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa. Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa. Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p>', 'Send your query\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos dicta mollitia totam explicabo obcaecati quia laudantium repudiandae.', '2021-11-16 21:00:26', '2021-12-30 11:39:41', NULL),
(8, 10, 1, 'Australia', 'Australia assignment help', 'Australia assignment help', 'Australia assignment help', '<p>Australia assignment help</p>', NULL, '2021-11-19 14:56:08', '2021-11-19 14:56:08', NULL),
(9, 100, 1, 'Other', 'all assignment help services World wide', NULL, 'all assignment help services World wide', '<h1>all assignment help services World wide&nbsp;</h1><p>all assignment help services World wide all assignment help services World wide&nbsp;</p>', '<h2>all subjects Expert at tnd&nbsp;</h2><p>all assignment help services World wide all assignment help services World wide&nbsp;</p><figure class=\"image\"><img src=\"https://thesisndissertationhelp.com/images/feature-image_1637324590.png\" alt=\"assignment\"></figure>', '2021-11-19 19:23:30', '2021-11-19 19:23:30', NULL),
(10, 106, 1, 'Quantitative Dissertation Help', 'Quantitative Dissertation Help', 'quantitative-dissertation-help', 'quantitative-dissertation-help', '<h1>What IS Quantitative Dissertation Help</h1><p>quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help quantitative-dissertation-help</p>', '<h2>Quantitative Dissertation Guidelines&nbsp;</h2><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-helpv</p><h3>Thesis vs. Dissertation&nbsp;</h3><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-helpv quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help</p><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help&nbsp;</p><h3>PDF Dissertation Writing Services By PhD Experts</h3><p>&nbsp;</p><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-helpv quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help</p><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help&nbsp;</p>', '2021-11-25 17:07:17', '2021-11-25 19:16:17', NULL),
(11, 107, 1, 'Qualitative', 'Qualitative', 'Qualitative', 'Qualitative', '<h1>Best Qualitative dissertation writing services&nbsp;</h1><p>Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative Qualitative</p>', '<h2>Write your Qualitative dissertation from our PHD level expert</h2><p>Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert</p><h3>Best Ideas for Dissertation Topics</h3><p>Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert Write your Qualitative dissertation from our PHD level expert</p><h3>Dissertation topics for academic year 2020_2021</h3><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-helpv quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help</p><p>quantitative-dissertation-helpquantitative-dissertation-helpquantitative-dissertation-help&nbsp;</p><figure class=\"image\"><img src=\"https://thesisndissertationhelp.com/images/book-appointment_1637841114.webp\" alt=\"aa\"></figure><p>&nbsp;</p>', '2021-11-25 18:52:14', '2021-11-25 19:20:45', NULL),
(12, 109, 1, 'Research', 'research report writing', 'research report writing', 'research report writing', '<h1>Research Report Writing Format</h1><p>research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing</p>', '<h2>How to Write an Effective Research REport</h2><p>research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing research report writing</p>', '2021-11-25 19:25:34', '2021-11-25 19:25:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'blogtag-test', 'tagofblog', '2022-01-05 09:06:48', '2022-01-05 09:06:48', NULL),
(2, 'blogtag-test', 'tagofblog', '2022-01-05 09:14:16', '2022-01-05 09:14:31', '2022-01-05 09:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `calculators`
--

CREATE TABLE `calculators` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `place` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calculators`
--

INSERT INTO `calculators` (`id`, `category`, `price`, `place`, `created_at`, `updated_at`) VALUES
(1, 'Writing', 10, 1, '2022-01-22 15:50:57', '0000-00-00 00:00:00'),
(2, 'Essay', 11, 2, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(4, 'Rewriting', 12, 1, '2022-01-22 15:50:57', '0000-00-00 00:00:00'),
(5, 'Editing', 14, 1, '2022-01-22 15:50:57', '0000-00-00 00:00:00'),
(6, 'Admission Essay', 12, 2, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(7, 'PowerPoint Presentation with speaker notes', 12, 2, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(8, 'Annotated Bibliography', 15, 2, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(9, 'College', 5, 3, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(10, 'University', 7, 3, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(11, 'Master\'s', 8, 3, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(12, 'Doctorate', 9, 3, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(13, '6 Hours', 2, 4, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(14, '12 Hours', 3, 4, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(15, '1 Day', 4, 4, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(16, '2 Days', 5, 4, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(17, '3 Days', 6, 4, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(18, '5 Days', 7, 4, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(19, '1 Page/ 275 words', 7, 5, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(20, '2 Page/ 500 words', 7, 5, '2022-01-22 16:10:44', '0000-00-00 00:00:00'),
(21, '3 Page/ 825 words', 7, 5, '2022-01-22 16:10:44', '0000-00-00 00:00:00');

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

--
-- Dumping data for table `content_categories`
--

INSERT INTO `content_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'blog-test', 'testblog', '2022-01-05 09:06:18', '2022-01-05 09:06:18', NULL),
(2, 'Shubham Parashar', 'tagofblog', '2022-01-06 10:54:50', '2022-01-06 10:54:50', NULL);

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
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `page_text` longtext COLLATE utf8mb4_unicode_ci,
  `excerpt` longtext COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_pages`
--

INSERT INTO `content_pages` (`id`, `menu_id`, `user_id`, `title`, `meta_title`, `meta_keyword`, `meta_description`, `page_text`, `excerpt`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(23, 114, 1, 'Blog', 'Blog', 'Blog', 'Blog Des', '<p>Blog text</p>', NULL, 'blog', '2022-01-13 11:34:26', '2022-02-06 01:23:40', NULL);

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

--
-- Dumping data for table `content_tags`
--

INSERT INTO `content_tags` (`id`, `name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'blogtag-test', 'tagofblog', '2022-01-05 09:06:48', '2022-01-05 09:06:48', NULL),
(2, 'blogtag-test', 'tagofblog', '2022-01-05 09:14:16', '2022-01-05 09:14:31', '2022-01-05 09:14:31');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homepages`
--

CREATE TABLE `homepages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `alt` text COLLATE utf8mb4_unicode_ci,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `bg_color` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` text COLLATE utf8mb4_unicode_ci,
  `bg_alt` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `sub_content` tinyint(4) NOT NULL DEFAULT '0',
  `section_position` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepages`
--

INSERT INTO `homepages` (`id`, `parent_id`, `page`, `title`, `content`, `alt`, `image`, `bg_color`, `bg_image`, `bg_alt`, `status`, `sub_content`, `section_position`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 'thesisNdissertation', '<h1>Best Essay Writing Services</h1>', '<p>BEWS is a legitimate source of high-quality essays. Writing papers is part of the graduation requirements for college and university. Every student is required to complete the pending tasks within the deadline. With limited time and complex instructions, many students turn to online essay services that can assist in writing a term paper, thesis or dissertation. We have everything you need to get good grades on your papers and coursework. Our qualified writers can handle the most complex tasks fast and get them done when needed. Our skilled and proficient essay writing company lets students order various school, college or university papers on any topic and at varying levels of complexity.</p><p>&nbsp;</p><p>&nbsp;</p><p>Best essay writing services with 10000+ subject tutors cover different essay topics stretching to all academic streams - Maths, Science, English, accounts and others. Students can count on our online Services to provide you with the best thesis and dissertation writings for you. Our writers understand the best fonts for essays and all the subtleties that go into drafting the perfect Homework. So, if you\'re having trouble with thesis and dissertations and want some help with it, look no further than Best Essay Writing Services.</p>', 'thesis n dissertation', '/images/homepage/1635712723.webp', '#0a1a36', NULL, NULL, 1, 0, 1, '2021-10-31 09:20:48', '2022-02-28 23:08:22', NULL),
(2, 0, 'best thesis', '<h2>Cheapest Essay Writing Services</h2>', '<p>Have you ever had sleepless nights to come up with an engaging essay? If so, you are not alone. The students are master laggards. Although slowing down can create a lot of stress, many students fall behind. It could be because of their busy schedule, work overload, or lack of confidence.</p><p>Our&nbsp;<strong>Cheapest Essay Writing Services</strong>&nbsp;can assist you in planning your time efficiently and feel more assured when managing your essay. The best part of choosing an&nbsp;<strong>affordable essay writing service</strong>&nbsp;is that it frees you from stress. In addition, you get the benefit of having a time limit when you want to receive the paper.</p><p>So, say goodbye to the laggards and end-of-the-moment terror now! Instead, ask us, \"Write my paper,\" and we\'ll hire a suitable author who will work on your order details. However, we suggest that you schedule the delivery date before your college deadline. This will give you adequate time to analyze the content and request changes if necessary.</p><p>If you\'re worried about cracking a specific paper, our&nbsp;<strong>cheap essay writing services</strong>&nbsp;can help. For example, you got bad marks in your essay, and you need to enhance your grade. In such a case, asking us to \"write my essay\" can give you peace.</p>', 'BEST THESIS AND DISSERTATION WRITING SERVICES IN AUSTRALIA', '/images/homepage/1644950990.svg', '#000000', NULL, NULL, 1, 0, 4, '2021-10-31 09:47:06', '2022-02-28 23:08:22', NULL),
(3, 0, 'expect from us', '<p><strong>What do we provide?</strong></p>', '<p>We provide papers of any type and at all levels of complexity. From corporate papers to case studies and research papers, we have professional writers who produce the work you need on the date you can need it. In addition, 100% of our experts go through regular quality checks to ensure that they meet your highest demands.</p>', 'expect from us', '/images/homepage/1635713458.webp', '#000000', NULL, NULL, 1, 0, 5, '2021-10-31 09:50:58', '2022-02-28 23:08:22', NULL),
(6, 0, 'call us', '<h3><strong>Feel to free call us</strong></h3>', '<p>We\'ll be available around the clock to help you out. If you have any queries, don\'t hesitate! Feel free to call us. We\'re always happy when we can make your day a little bit easier with our expertise and knowledge.</p>', 'call us', '/images/homepage/1635764086.webp', '#000000', '/images/homepage/1637148188.jpg', 'contact background', 1, 0, 6, '2021-10-31 09:55:54', '2022-02-28 23:08:22', NULL),
(7, 0, 'best offers', '<p><strong>Our Best Offers</strong></p>', '<p>The objective of our service is to provide you with top-class essay support when you ask us to write my essay; we do not collect or share any of your data. In addition, we provide affordable prices to our customers. Attractive discounts and coupons are offered to our customers for the bulk option.</p>', 'h', '/images/homepage/1635755349.jpg', '#000000', NULL, NULL, 1, 0, 7, '2021-10-31 09:56:17', '2022-02-28 23:08:22', NULL),
(8, 0, 'asked questions', '<h2><strong>Recently Asked Question</strong></h2>', '<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.<br>&nbsp;</p>', NULL, NULL, '#000000', NULL, NULL, 1, 0, 8, '2021-10-31 09:56:44', '2022-02-28 23:08:22', NULL),
(10, 0, 'subscribe us', '<h4><strong>Subscribe Us For Getting Exclusive Offers</strong></h4>', '<p>To get updates about latest offers and discounts, milestones achieved by the organization, achievements of our faculty and any exciting new event and information, subscribe to our newsletter NOW!</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, 9, '2021-10-31 09:57:42', '2022-02-28 23:08:22', NULL),
(11, 3, NULL, '<h5>College Application Essay</h5>', '<p>Read more.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 10:36:57', '2022-02-25 19:22:18', NULL),
(12, 3, NULL, '<h5>Descriptive essay</h5>', '<p>Read more.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 10:41:12', '2022-02-25 19:22:28', NULL),
(13, 3, NULL, '<h5>Argumentative essay</h5>', '<p>Read more.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 10:45:55', '2022-02-25 19:22:59', NULL),
(14, 3, NULL, '<h5>Research Essay Outline</h5>', '<p>Read more.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 10:46:24', '2022-02-25 19:23:15', NULL),
(15, 4, NULL, '<h4>Instant replay</h4>', '<p>We offer round the clock assistance with our instant reply portal. Whatever be your query, we are present to help you. You can even give us your tasks anytime at your convenience. Our writers are eager to help you at any time and make sure that you are satisfied by our services.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 10:49:07', '2021-10-31 10:49:07', NULL),
(16, 4, NULL, '<h4>Affordable price</h4>', '<p>We, at thesisndissertationhelp.com, understand the inflation and the importance of money. Therefore, we offer affordable prices that can be paid over a period of time with the help of EMIs. We also offer bulk prices where instead of an individual task, you can pay up for the entire semester.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 10:49:20', '2021-10-31 10:49:20', NULL),
(17, 4, NULL, '<h4>Zero plagarisim</h4>', '<p>Our PHD qualified writers develop each article with a lot of thought and research. Each write-up is written specifically for an individual according to their specification, qualification and instructions ensuring zero plagiarism. The write-up goes through a lot of revisions and lastly, it is checked on a plagiarism platform that catches even 100 year old plagiarism.</p><p><br>&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 10:49:32', '2021-10-31 10:49:32', NULL),
(18, 4, NULL, '<h4>On-time delivery</h4>', '<p>Who wouldnâ€™t want quality in last-minute write-ups? That is what we are proud to provide. Even if you forget to outsource your write-up till the last minute, we have that experience to finish up on your deadline and provide quality as well. Our past record shows the timely delivery of all our articles since the past decade.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 10:49:48', '2021-10-31 10:49:48', NULL),
(19, 5, NULL, '<h4>Anu Sharma</h4>', '<p>Chief Executive Officer</p><p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>', NULL, '/images/homepage/1635717111.webp', NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 10:50:38', '2022-02-25 18:32:40', NULL),
(20, 5, NULL, '<h4><strong>Sarah Jhonson</strong></h4>', '<p>Product Manager</p><p>Aut maiores voluptates amet et quis praesentium qui senda para</p>', 'Sarah Jhonson', '/images/homepage/1635717081.webp', NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 10:51:21', '2021-10-31 10:51:21', NULL),
(21, 5, NULL, '<h4><strong>William Anderson</strong></h4>', '<p>CTO</p><p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>', 'William Anderson', '/images/homepage/1635717134.webp', NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 10:52:14', '2021-10-31 10:52:14', NULL),
(22, 5, NULL, '<h4><strong>Amanda Jepson</strong></h4>', '<p>Accountant</p><p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>', 'Amanda Jepson', '/images/homepage/1635717160.webp', NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 10:52:40', '2021-11-01 00:09:52', NULL),
(23, 8, NULL, '<p><strong>What is a good essay writing service?</strong></p>', '<p>A good essay writing service fulfils your expectations and provides your essay within the given period and budget. These essay service providers engage highly skilled writers who can work on any paper in any subject.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 10:53:23', '2022-02-25 14:18:57', NULL),
(24, 8, NULL, '<p><strong>Is there any guarantee of originality of paper writing?</strong></p><p>&nbsp;</p>', '<p>Before submitting their work, each author must run several originality checks using the most common plagiarism detector apps. This guarantees that your text will not be flagged for plagiarism. If you want to be extra sure - you can request a plagiarism report on your text. We would be more than pleased to provide it.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-10-31 10:53:41', '2022-02-25 14:19:41', NULL),
(25, 7, NULL, '<h3>1st order offer</h3>', '<h4>30% off</h4><ul><li>Plagiarism check free</li><li>Revisions free</li><li>On time delivery</li><li>24/7hr team support</li></ul>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-11-01 11:32:24', '2022-02-16 23:29:40', NULL),
(26, 8, NULL, '<p><strong>What do you understand by custom essay?</strong></p><p>&nbsp;</p>', '<p>Our custom essays are written entirely to your specific instructions and rubrics. We do not pull from databases or collections of pre-written essays like other essay writing companies. Instead, we carefully craft a high-quality essay tailored to your individual needs and requirements, written by one of our top essay writers with expertise in that area. Your essay is yours only and written just for you.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-11-01 11:32:32', '2022-02-25 14:20:13', NULL),
(27, 7, NULL, '<h3>Per page offer</h3>', '<h4>20% off</h4><ul><li>Plagiarism check free</li><li>Revisions free</li><li>On time delivery</li><li>24/7hr team support</li></ul>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-11-01 11:32:44', '2022-02-16 23:31:54', NULL),
(28, 7, NULL, '<h3>Bulk Order offer</h3>', '<h4>50% off</h4><ul><li>Plagiarism check free</li><li>Revisions free</li><li>On-time delivery</li><li>24/7hr team support</li></ul>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-11-01 11:33:08', '2022-02-16 23:31:21', NULL),
(29, 0, 'meta data', 'Plagiarism Free Writing by Ph.D. Experts â€“ Thesis N Dissertation', 'Save up your time and outsource your thesis, dissertations and more  to PHD qualified writing professionals. Guaranteed on-time delivery with high quality material at affordable prices.', 'Best essay writing in Australia, online assignment help, Academic writing services, thesis writing and dissertation writing services, online writing services', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(30, 0, 'footer data', '<h3><strong>ADDRESS</strong></h3><p>James cook drive Truganina, Victoria Australia zip-code 3029</p><p><strong>Phone:</strong> <a href=\"tel:+61-413228507\">+61-413228507</a></p><p><strong>Working Hours: 24/7</strong></p><p><strong>Email:</strong> <a href=\"mail:help@bestessaywritingservices.com.au\">help@bestessaywritingservices.com.au</a></p>', '<h4><strong>Country </strong><a href=\"/au\"><strong>Australia</strong></a></h4><ul><li>Sydney</li><li>Melbourne</li><li>Adelaide</li><li>Perth</li><li>Brisbane</li><li>Canbera</li></ul>', '<h4><strong>Our Services</strong></h4><ul><li>College Application Essay</li><li>Descriptive essay</li><li>Argumentative essay</li><li>Research Essay Outline</li><li>Personal Narrative Essay</li><li>Analytical Essay</li><li>Explanatory essay</li><li>Reflective Essay</li><li>MBA Essay</li></ul>', '<h4><strong>Our Social Networks</strong></h4><p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies <a href=\"/privacy-policy\">Our privacy Policy</a></p>', NULL, NULL, NULL, 0, 0, NULL, NULL, '2022-02-28 18:14:45', NULL),
(31, 0, 'logo', 'www', 'sss', 'Best Essay Writing Services', '/images/homepage/1645545652.png', NULL, NULL, NULL, 0, 0, NULL, NULL, '2022-02-22 23:00:52', NULL),
(32, 11, 'writers', '<h4>Sandeep Kumar</h4>', '<p>Finance and accounting</p><p>gggggggggggg</p>', 'sandeep kumar', '/images/homepage/1637063926.webp', NULL, NULL, '4.5', 1, 0, NULL, '2021-11-16 13:28:46', '2021-11-19 09:19:25', NULL),
(33, 11, 'faqs', '<p>what is research</p>', '<p>research&nbsp;research&nbsp;research&nbsp;research&nbsp;research&nbsp;research&nbsp;research</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2021-11-19 07:20:19', '2022-02-05 23:11:00', NULL),
(35, 64, NULL, '<h3><strong>Share Your Query</strong></h3>', '<p>You will not face any difficulty if you need our services. But, first, you need to go online and order the essays by sharing your queries, and you\'re done.</p>', '<i class=\"fas fa-question fa-3x p-2\"></i>', NULL, '#000000', NULL, NULL, 1, 0, NULL, '2021-12-28 06:07:49', '2022-02-25 14:45:49', NULL),
(36, 64, NULL, '<p><strong>Pay For Essay</strong></p><p>&nbsp;</p>', '<p>Approve the order by completing the payment and get access to your control panel through which you can speak directly to your author anytime.</p>', '<i class=\"fas fa-shopping-cart fa-3x p-2\"></i>', NULL, '#000000', NULL, NULL, 1, 0, NULL, '2021-12-28 06:09:37', '2022-02-25 14:46:09', NULL),
(37, 64, NULL, '<p><strong>Get Original Solution 24*7</strong></p><p>&nbsp;</p>', '<p>We have a team of friendly, helpful customer support staff who will provide you with the original solutions and are available to answer your questions 24/7, day or night.</p>', '<i class=\"fas fa-poll-h fa-3x p-2\"></i>', NULL, '#000000', NULL, NULL, 1, 0, NULL, '2021-12-28 06:11:15', '2022-02-25 14:46:49', NULL),
(38, 0, 'clientsSays', '<h1><strong>What do Our Clients Say?</strong></h1>', '<p>We are always meticulous when it comes to paper writing and our feedback. We always try to do the best for our customers. We are looking forward to establishing a long term relationship with them! Read feedback from our clients to see how we guarantee quality!</p>', NULL, NULL, '#000000', NULL, NULL, 1, 0, 10, '2021-12-28 06:44:46', '2022-02-28 23:08:22', NULL),
(39, 38, NULL, '<h6>Marlene Visconte</h6><p>General Manager - Scouter</p>', '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam commodi officia laborum qui iste quidem!</p>', NULL, '/images/homepage/1640713712.jpg', '#000000', NULL, NULL, 1, 0, NULL, '2021-12-28 06:48:32', '2021-12-28 06:48:32', NULL),
(40, 38, NULL, '<p>Marlene Visconte</p><p>General Manager - Scouter</p>', '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam commodi officia laborum qui iste quidem!</p>', NULL, '/images/homepage/1640713767.jpg', '#000000', NULL, NULL, 1, 0, NULL, '2021-12-28 06:49:27', '2021-12-28 06:49:27', NULL),
(42, 0, 'explorePossibilities', '<h2>Our Accolades</h2>', '<p>Our best essay writing services have been our \"Grateful Achievement\", which provides 100% guarantee towards a better human race by providing quality project development and research work for scholars. The pioneering idea of our world-class expert is the key to achieving success. To achieve our broad objectives, we have maintained various collaborative PhD services.</p>', 'Explore unlimited possibilities', '/images/homepage/1644950929.svg', '#000000', NULL, NULL, 1, 0, 12, '2021-12-29 03:51:10', '2022-02-28 23:08:22', NULL),
(50, 109, 'faqs', '<p>FAQ</p>', '<p>FAQ Des</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-01-25 09:00:03', '2022-02-05 23:11:37', NULL),
(51, 8, NULL, '<p><strong>Is Using an Essay Writing Service Cheating?</strong></p><p>&nbsp;</p>', '<p>It is not considered fraud because the work you are presenting is free from plagiarism. However, copying and pasting from any other source without giving credit can be a fraud. When you enlist the help of an essay writing service, you get some help for some complex tasks. When you read what they did, you will know a little more about proper ways to write an essay. This will take effect when you get the paperback and know whether the essay was correct or not. This will not take you much time to learn.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-15 00:19:35', '2022-02-25 14:20:51', NULL),
(52, 8, NULL, '<p><strong>How do I know if I will receive a high-quality essay?</strong></p><p>&nbsp;</p>', '<p>We offer each custom essay through a highly specialized quality check process before it reaches you. This process includes a plagiarism scan to make sure you get the best final piece possible. In addition, we hold our entire academic essay writers to extremely high standards, so you can rest guaranteed that you are obtaining a quality custom essay to succeed in your classes.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-15 00:21:02', '2022-02-25 14:21:20', NULL),
(53, 0, 'usp', '<h1><strong>The Perks of choosing our Best Essay Writing Services</strong></h1>', '<p>Students rely on our affordable essay writing services for many reasons. Many like the point that they can track progress 24X7, while many value the quality of the content they receive. In addition, whenever you select our&nbsp;<strong>Best Essay Writing Services</strong>, you gain access to:</p>', 'Best essay writing in Australia, online assignment help, Academic writing services, thesis writing and dissertation writing services, online writing services', '/images/homepage/1644950825.svg', '#000000', NULL, NULL, 1, 0, 13, '2022-02-16 00:56:32', '2022-02-28 23:08:22', NULL),
(54, 53, NULL, '<h4><strong>Supreme paper quality</strong></h4>', '<p>If you are seeking winning papers, you are in the right place. Our professional writers will create an impeccable paper for you. We only hire professional native English writers with years of relevant writing experience.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-16 00:59:36', '2022-02-25 22:51:17', NULL),
(55, 53, NULL, '<h3><strong>Paper of any difficulty</strong></h3>', '<p>Want to get papers for Thesis, dissertation or coursework etc.? We can make them all. Our writers can handle any topic for your essay, lab report, research paper, or graduate thesis. So don\'t hesitate anymore and buy a paper from us.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-16 00:59:57', '2022-02-25 22:49:41', NULL),
(56, 42, NULL, '<p>PROJECTS COMPLETED</p>', '<p>1200</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-16 23:36:40', '2022-02-16 23:39:12', NULL),
(57, 42, NULL, '<p>AWARDS</p>', '<p>20</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-16 23:37:11', '2022-02-16 23:38:22', NULL),
(58, 42, NULL, '<p>CUSTOMER ACTIVE</p>', '<p>1256</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-16 23:37:36', '2022-02-16 23:37:36', NULL),
(59, 42, NULL, '<p>GOOD REVIEWS</p>', '<p>1299</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-16 23:38:09', '2022-02-16 23:38:09', NULL),
(60, 53, NULL, '<h4><strong>Round the clock support</strong></h4>', '<p>We appreciate your time and adhere to the deadline. For this, we work 24/7 to assist the student at any time. So if you need an essay writing service for tomorrow, you can get the job done before the deadline!</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-25 15:08:01', '2022-02-25 22:51:05', NULL),
(61, 53, NULL, '<h4><strong>Best price-quality ratio</strong></h4>', '<p>We understand that students cannot withdraw a lot of money. Thus, we have organized and optimized our services to provide excellent papers for low prices. So you can always order an economical paper from our service at any time.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-25 15:08:18', '2022-02-25 22:50:19', NULL),
(62, 3, NULL, '<p>Personal Narrative Essay</p>', '<p>REad More</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-25 22:44:24', '2022-02-25 22:44:24', NULL),
(63, 0, 'blog', '<h2>Our latest blogs</h2>', '<p>Are you struggling with writing your essay? Let our essay writing service help you! Read tons of guides and tips for essay writing from experienced writers. We know how to make the grade, and we\'re more than willing to help!</p>', NULL, NULL, '#000000', NULL, NULL, 1, 0, 11, NULL, '2022-02-28 23:08:22', NULL),
(64, 0, 'whatYouneed', 'Top 3 usp', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 3, NULL, '2022-02-28 23:08:22', NULL),
(65, 0, 'customessay', '<h2><strong>Custom Essay Writing Services</strong></h2>', '<p>At&nbsp;<strong>Best Essay Writing Services</strong>, helping customers is our strength and passion. We take pleasure in helping our clients while giving them the free time they need for family, work or social commitments.</p><p>Regardless of the complexness of your order, your custom writing will be met by our service to the highest quality standards, thanks to the strength of our experts and proficiency in proper formatting and quotation.&nbsp;</p><p>Each of our essay writing experts has a high standard of education, and many have studied at educational institutions worldwide. Our professional writers will write a custom paper for you. They are all written with thorough research using the highest quality academic sources, so all information is entirely reliable, reliable and acceptable to your professor\'s standards. In addition, we use trustworthy plagiarism detection software for each paper before receiving it to ensure your trust.</p><p>Academic writing is our craft. Use our paper writing service, and you\'ll get much more than just a good essay. You\'ll get a piece of original, academically sound material that perfectly follows the format, uses the correct writing style, and is completed at the right time by someone who cares about your academic success.</p><p>So sleep easy knowing that your work is in the hands of true writing professionals. Contact our friendly and knowledgeable customer support team if you want to know more!</p>', 'custom essay writing', '/images/homepage/1646057635.svg', '#000000', '/images/homepage/1646057367.svg', NULL, 1, 0, 2, NULL, '2022-02-28 23:08:22', NULL),
(66, 3, NULL, '<h5>Analytical Essay</h5>', '<p>read more..</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-28 12:53:42', '2022-02-28 12:54:13', NULL),
(67, 3, NULL, '<h5>Explanatory essay</h5>', '<p>read more.........</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-28 12:54:56', '2022-02-28 12:55:13', NULL),
(68, 3, NULL, '<h5>Reflective Essay</h5>', '<p>read more.</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-28 12:56:03', '2022-02-28 12:56:03', NULL),
(69, 3, NULL, '<h5>MBA Essay</h5>', '<p>read more.&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, '2022-02-28 13:01:10', '2022-02-28 13:01:10', NULL);

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
(29, 'App\\Models\\ContentPage', 13, '3ee55ca6-49fb-4b34-8b13-3708933a01ec', 'featured_image', '61d6fcaa0f8cb_counts-bg', '61d6fcaa0f8cb_counts-bg.jpg', 'image/jpeg', 'public', 'public', 202117, '[]', '[]', '[]', 22, '2022-01-06 09:02:41', '2022-01-06 09:02:41'),
(30, 'App\\Models\\ContentPage', 14, '1f36c023-29d7-47a3-9312-01f5ad768f66', 'featured_image', '61d6fd954f6e3_team-1', '61d6fd954f6e3_team-1.jpg', 'image/jpeg', 'public', 'public', 40201, '[]', '[]', '[]', 23, '2022-01-06 09:02:56', '2022-01-06 09:02:56'),
(31, 'App\\Models\\ContentPage', 15, '3e399823-5c3a-4a8c-9efe-eaa5e4e79454', 'featured_image', '61d6fd954f6e3_team-1', '61d6fd954f6e3_team-1.jpg', 'image/jpeg', 'public', 'public', 40201, '[]', '[]', '[]', 24, '2022-01-06 09:25:34', '2022-01-06 09:25:34'),
(32, 'App\\Models\\ContentPage', 16, 'b380bac4-21a2-4518-b775-dd016e4e0270', 'featured_image', '61d714f9604f6_team-4', '61d714f9604f6_team-4.jpg', 'image/jpeg', 'public', 'public', 27423, '[]', '[]', '[]', 25, '2022-01-06 10:42:43', '2022-01-06 10:42:43'),
(33, 'App\\Models\\ContentPage', 17, 'ab8a4535-0049-4a0d-a65f-2d2abe88054d', 'featured_image', '61d71a1c3c735_team-1', '61d71a1c3c735_team-1.jpg', 'image/jpeg', 'public', 'public', 40201, '[]', '[]', '[]', 26, '2022-01-06 11:04:40', '2022-01-06 11:04:40'),
(34, 'App\\Models\\ContentPage', 18, 'e8620acd-316c-46b8-a9d5-96fd3b09f18d', 'featured_image', '61d71ad0542ab_team-1', '61d71ad0542ab_team-1.jpg', 'image/jpeg', 'public', 'public', 40201, '[]', '[]', '[]', 27, '2022-01-06 11:07:38', '2022-01-06 11:07:38'),
(35, 'App\\Models\\ContentPage', 20, 'ce4023ea-82cd-459a-aed9-df22389e6418', 'featured_image', '61d71b59293ee_team-3', '61d71b59293ee_team-3.jpg', 'image/jpeg', 'public', 'public', 36680, '[]', '[]', '[]', 28, '2022-01-06 11:09:55', '2022-01-06 11:09:55'),
(39, 'App\\Models\\ContentPage', 4, 'c0d5ba79-8c17-489e-aeb1-3e257557e8ed', 'featured_image', '61d86fdf3ee6b_hero-imgg', '61d86fdf3ee6b_hero-imgg.png', 'image/png', 'public', 'public', 34759, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 30, '2022-01-07 11:22:48', '2022-01-07 11:22:48'),
(40, 'App\\Models\\ContentPage', 7, '5be28acf-5ce1-4bfa-a5e1-ab7c824b2767', 'featured_image', '61dc42db27296_hero-img (1)', '61dc42db27296_hero-img-(1).png', 'image/png', 'public', 'public', 34759, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 31, '2022-01-10 09:00:14', '2022-01-10 09:00:16'),
(45, 'App\\Models\\ContentPage', 23, '03a0e1d8-60a3-4aa2-a8d2-2abb3e1adb44', 'featured_image', '61fec6dd94473_Screenshot (38)', '61fec6dd94473_Screenshot-(38).png', 'image/png', 'public', 'public', 281188, '[]', '[]', '[]', 32, '2022-02-06 01:50:13', '2022-02-06 01:50:13'),
(46, 'App\\Models\\ContentPage', 22, '10ed09a9-cea3-4f23-a171-fd1fc658dd05', 'featured_image', '61fec88e3b257_Screenshot (34)', '61fec88e3b257_Screenshot-(34).png', 'image/png', 'public', 'public', 573948, '[]', '[]', '[]', 33, '2022-02-06 01:57:22', '2022-02-06 01:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `sub_menu` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `title`, `slug`, `content`, `status`, `sub_menu`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 'Home', '/', 0, 1, 0, '2021-10-24 12:12:09', '2021-10-24 12:12:09', NULL),
(3, 0, 'Services', 'services', 0, 1, 0, '2021-10-24 12:15:34', '2021-11-18 16:38:22', NULL),
(4, 3, 'Best Essay Writing Services', 'best-essay-writing-services', 0, 1, 0, '2021-10-24 12:15:59', '2022-02-25 15:25:05', NULL),
(5, 3, 'Essay Plan Writing Services', 'essay-plan-writing-services', 0, 1, 0, '2021-10-24 12:19:32', '2022-02-25 15:25:39', NULL),
(6, 3, 'Course Work', 'course-work', 0, 1, 0, '2021-10-24 12:20:42', '2022-02-25 15:26:09', NULL),
(7, 3, 'Report Writing', 'report-writing-', 0, 1, 0, '2021-10-24 12:38:21', '2022-02-25 15:26:29', NULL),
(9, 0, 'Where We Serve', 'where-we-serve', 0, 1, 0, '2021-10-24 13:26:17', '2022-02-14 23:51:02', NULL),
(10, 9, 'Australia', 'australia', 1, 1, 0, '2021-10-24 13:26:33', '2021-11-19 14:56:08', NULL),
(13, 0, 'Experts', 'experts', 1, 1, 0, '2021-10-25 13:25:00', '2022-02-16 23:06:50', NULL),
(14, 0, 'Samples', 'samples', 1, 1, 0, '2021-10-25 13:25:35', '2022-02-14 23:55:06', NULL),
(114, 0, 'Blogs', 'blogs', 0, 1, 0, '2022-01-13 11:34:26', '2022-02-06 01:22:25', NULL),
(115, 3, 'Cheapest Essay Writing Services', 'cheapest-essay-writing-services', 0, 1, 0, '2022-02-25 15:26:43', '2022-02-25 15:26:43', NULL),
(116, 3, 'Custom Essay Writing Services', 'custom-essay-writing-services', 0, 1, 0, '2022-02-25 15:26:58', '2022-02-25 15:26:58', NULL),
(117, 116, 'Custom Essay Writing', 'custom-essay-writing', 0, 1, 0, '2022-02-25 15:31:37', '2022-02-25 15:31:37', NULL),
(118, 116, 'Write My Essay', 'write-my-essay', 0, 1, 0, '2022-02-25 16:20:04', '2022-02-25 16:20:04', NULL),
(119, 116, 'Free Essay Writer', 'free-essay-writer', 0, 1, 0, '2022-02-25 16:20:56', '2022-02-25 16:20:56', NULL),
(120, 116, 'Buy Essay Online', 'buy-essay-online', 0, 1, 0, '2022-02-25 16:23:04', '2022-02-25 16:23:04', NULL),
(121, 116, 'Essay Writing Help', 'essay-writing-help', 0, 1, 0, '2022-02-25 16:24:42', '2022-02-25 16:24:42', NULL),
(122, 116, 'Scholarship Essay Examples', 'scholarship-essay-examples', 0, 1, 0, '2022-02-25 16:25:33', '2022-02-25 16:25:33', NULL),
(123, 116, 'College Admission Essay', 'college-admission-essay', 0, 1, 0, '2022-02-25 16:26:20', '2022-02-25 16:26:20', NULL),
(124, 116, 'Classification Essay', 'classification-essay', 0, 1, 0, '2022-02-25 16:30:29', '2022-02-25 16:30:29', NULL),
(125, 116, 'Comparison And Contrast Essay', 'comparison-and-contrast-essay', 0, 1, 0, '2022-02-25 16:31:15', '2022-02-25 16:31:15', NULL),
(126, 116, 'Definition Essay', 'definition-essay', 0, 1, 0, '2022-02-25 16:32:19', '2022-02-25 16:33:05', NULL),
(127, 116, 'Descriptive Essay', 'descriptive-essay', 0, 1, 0, '2022-02-25 16:36:05', '2022-02-25 16:36:05', NULL),
(128, 116, 'Expository Essay', 'expository-essay', 0, 1, 0, '2022-02-25 16:37:49', '2022-02-25 16:37:49', NULL),
(129, 116, 'Informal Essay', 'informal-essay', 0, 1, 0, '2022-02-25 16:40:05', '2022-02-25 16:40:05', NULL),
(130, 116, 'Literary Essay', 'literary-essay', 0, 1, 0, '2022-02-25 16:42:19', '2022-02-25 16:42:19', NULL),
(131, 116, 'Mba Essay', 'mba-essay', 0, 1, 0, '2022-02-25 16:45:30', '2022-02-25 16:45:30', NULL),
(132, 116, 'Personal Narrative Essay', 'personal-narrative-essay', 0, 1, 0, '2022-02-25 16:57:11', '2022-02-25 16:57:11', NULL),
(133, 116, 'Persuasive Essay Topics', 'persuasive-essay-topics', 0, 1, 0, '2022-02-25 16:58:15', '2022-02-25 16:58:15', NULL),
(134, 116, 'Process Essay Writing', 'process-essay-writing', 0, 1, 0, '2022-02-25 16:59:17', '2022-02-25 16:59:17', NULL),
(135, 116, 'Research Essay Outline', 'research-essay-outline', 0, 1, 0, '2022-02-25 17:02:12', '2022-02-25 17:02:12', NULL),
(136, 116, 'Review Essay Example', 'review-essay-example', 0, 1, 0, '2022-02-25 17:21:27', '2022-02-25 17:21:27', NULL),
(137, 116, 'Personal Experience Essay', 'personal-experience-essay', 0, 1, 0, '2022-02-25 17:22:33', '2022-02-25 17:22:33', NULL),
(138, 116, 'Reflective Essay', 'reflective-essay', 0, 1, 0, '2022-02-25 17:23:29', '2022-02-25 17:23:29', NULL),
(139, 116, 'Observation Essay', 'observation-essay', 0, 1, 0, '2022-02-25 17:24:13', '2022-02-25 17:24:13', NULL),
(140, 116, 'College Application Essay', 'college-application-essay', 0, 1, 0, '2022-02-25 17:25:09', '2022-02-25 17:25:09', NULL),
(141, 116, 'Argumentative Essay', 'argumentative-essay', 0, 1, 0, '2022-02-25 17:26:39', '2022-02-25 17:26:39', NULL),
(142, 116, 'Critical Essay', 'critical-essay', 0, 1, 0, '2022-02-25 17:32:14', '2022-02-25 17:32:14', NULL),
(143, 116, 'Creative Essay', 'creative-essay', 0, 1, 0, '2022-02-25 17:32:30', '2022-02-25 17:32:30', NULL),
(144, 116, 'Entrance Essay', 'entrance-essay', 0, 1, 0, '2022-02-25 17:32:52', '2022-02-25 17:32:52', NULL),
(145, 116, 'Motivational Essay', 'motivational-essay', 0, 1, 0, '2022-02-25 17:33:45', '2022-02-25 17:33:45', NULL),
(146, 116, 'Order Essay Service', 'order-essay-service', 0, 1, 0, '2022-02-25 17:34:50', '2022-02-25 17:34:50', NULL),
(147, 116, 'English Essay Writing', 'english-essay-writing', 0, 1, 0, '2022-02-25 17:35:10', '2022-02-25 17:35:10', NULL),
(149, 116, 'Diploma Essay Writing Service', 'diploma-essay-writing-service', 0, 1, 0, '2022-02-25 17:52:44', '2022-02-25 17:52:44', NULL),
(150, 116, 'Master’S Essay', 'master-s-essay', 0, 1, 0, '2022-02-25 17:53:26', '2022-02-25 17:53:26', NULL),
(151, 116, 'Undergraduate Essay', 'undergraduate-essay', 0, 1, 0, '2022-02-25 17:53:40', '2022-02-25 17:53:40', NULL),
(152, 116, 'Postgraduate Essay', 'postgraduate-essay', 0, 1, 0, '2022-02-25 17:53:56', '2022-02-25 17:53:56', NULL),
(153, 116, 'Phd Essay', 'phd-essay', 0, 1, 0, '2022-02-25 17:54:11', '2022-02-25 17:54:11', NULL),
(154, 116, 'Thesis Essay', 'thesis-essay', 0, 1, 0, '2022-02-25 17:54:33', '2022-02-25 17:54:33', NULL),
(155, 116, 'Dissertation Essay', 'dissertation-essay', 0, 1, 0, '2022-02-25 17:54:45', '2022-02-25 17:54:45', NULL),
(156, 116, 'College Essay', 'college-essay', 0, 1, 0, '2022-02-25 17:55:02', '2022-02-25 17:55:02', NULL),
(157, 116, 'Degree Essay', 'degree-essay', 0, 1, 0, '2022-02-25 17:55:16', '2022-02-25 17:55:16', NULL),
(158, 116, 'Political Essay', 'political-essay', 0, 1, 0, '2022-02-25 17:55:30', '2022-02-25 17:55:30', NULL),
(159, 116, 'Analytical Essay', 'analytical-essay', 0, 1, 0, '2022-02-25 17:55:45', '2022-02-25 17:55:45', NULL),
(160, 116, 'Cause And Effect Essay', 'cause-and-effect-essay', 0, 1, 0, '2022-02-25 17:56:02', '2022-02-25 17:56:02', NULL),
(161, 116, 'Illustrative Essay', 'illustrative-essay', 0, 1, 0, '2022-02-25 17:56:20', '2022-02-25 17:56:20', NULL),
(162, 116, 'Explanatory Essay', 'explanatory-essay', 0, 1, 0, '2022-02-25 17:56:30', '2022-02-25 17:56:30', NULL),
(164, 10, 'Australia', 'au-australia', 0, 1, 0, '2022-02-28 15:10:47', '2022-02-28 15:10:47', NULL),
(165, 10, 'Sydney', 'au-sydney', 0, 1, 0, '2022-02-28 17:57:39', '2022-02-28 17:57:39', NULL),
(166, 10, 'Melbourne', 'au-melbourne', 0, 1, 0, '2022-02-28 17:59:43', '2022-02-28 18:00:02', NULL),
(167, 10, 'Adelaide', 'au-adelaide', 0, 1, 0, '2022-02-28 18:00:47', '2022-02-28 18:00:47', NULL),
(168, 10, 'Perth', 'au-perth', 0, 1, 0, '2022-02-28 18:01:21', '2022-02-28 18:01:21', NULL),
(169, 10, 'Brisbane', 'au-brisbane', 0, 1, 0, '2022-02-28 18:02:15', '2022-02-28 18:02:15', NULL),
(170, 10, 'Canberra', 'au-canberra', 0, 1, 0, '2022-02-28 18:02:52', '2022-02-28 18:02:52', NULL);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$B76JwyMKbduTWOk5Tt1HcuhG8YwS4P3nectLISOk7AxtlfzBNelRq', 'BINGeshC3wdDR7xAMaVbA640SksgH5gqdxVpD13QqyrrljaHzcy8ntUkgrh0', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_pages`
--
ALTER TABLE `blog_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_pages_menu_id_foreign` (`menu_id`),
  ADD KEY `content_pages_user_id_foreign` (`user_id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calculators`
--
ALTER TABLE `calculators`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_pages`
--
ALTER TABLE `blog_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `calculators`
--
ALTER TABLE `calculators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `content_categories`
--
ALTER TABLE `content_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `content_pages`
--
ALTER TABLE `content_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `content_tags`
--
ALTER TABLE `content_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homepages`
--
ALTER TABLE `homepages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
