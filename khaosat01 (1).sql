-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 03:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khaosat01`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE `alumnis` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CCCD` int(11) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `zalo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_01` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_02` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_03` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_04` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_05` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_06` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_07` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_08` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_09` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_16` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_17` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_18` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_19` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`id`, `name`, `date`, `gender`, `address`, `CCCD`, `phone`, `zalo`, `email`, `facebook`, `question_01`, `question_02`, `question_03`, `question_04`, `question_05`, `question_06`, `question_07`, `question_08`, `question_09`, `question_10`, `question_11`, `question_12`, `question_13`, `question_14`, `question_15`, `question_16`, `question_17`, `question_18`, `question_19`, `created_at`, `updated_at`, `event_id`) VALUES
(2, 'Hai', '17/10/2001', NULL, 'bg', 12345, 2342545, '??dad', 'superadmin@admin.com', '??dasd', '3', 'sd', '4', '3', '2', '3', '2', '4', '2', '2', '3', '4', '2', '4', '4', '4', '4', '4', '4', '2023-01-05 00:56:31', '2023-01-05 00:56:31', NULL),
(3, 'Hai', '2023-01-04', 'nam', 'a', 12345, 359808267, 'a', 'admin1@admin.com', 'a', '4', NULL, '4', '3', '3', '4', '3', '3', '3', '3', '3', '3', '2', '4', 'L???p tr??nh', 'To??n', 'Thuy???t tr??nh', 'Gi???i tr??', 'l???p tr??nh', '2023-01-05 01:15:00', '2023-01-05 01:15:00', NULL),
(4, 'Nguy???n Quang H???i', '2001-10-17', 'nam', 'B???c Giang', 12345, 359808267, 'Nguy???n Quang H???i', 'admin2@admin.com', 'Nguy???n Quang H???i', '4', NULL, '4', '2', '3', '4', '4', '4', '3', '3', '2', '3', '3', '2', 'L???p tr??nh', 'To??n', 'Thuy???t tr??nh', 'Gi???i tr??', 'l???p tr??nh', '2023-01-05 03:18:00', '2023-01-06 21:15:50', 2022),
(5, 'Mr Minh Tung', '2023-01-04', 'nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-06 21:17:16', '2023-01-06 21:17:16', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(2, NULL, 1, 'Category 2', 'category-2', '2023-01-04 00:21:52', '2023-01-04 00:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 8, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(58, 8, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 3),
(59, 8, 'question_01', 'text', 'Question 01', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\"}}', 4),
(60, 8, 'question_02', 'text', 'Question 02', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\"}}', 5),
(61, 8, 'question_03', 'text', 'Question 03', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\"}}', 6),
(62, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(63, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(64, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(65, 9, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(66, 9, 'date', 'text', 'Date', 0, 1, 1, 1, 1, 1, '{}', 3),
(67, 9, 'course', 'text', 'Course', 0, 1, 1, 1, 1, 1, '{}', 4),
(68, 9, 'class', 'text', 'Class', 0, 1, 1, 1, 1, 1, '{}', 5),
(69, 9, 'majors', 'text', 'Majors', 0, 1, 1, 1, 1, 1, '{}', 6),
(70, 9, 'phone', 'text', 'Phone', 0, 1, 1, 1, 1, 1, '{}', 7),
(71, 9, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 8),
(72, 9, 'question_01', 'select_dropdown', 'M???c ????? ph?? h???p c???a n???i dung ch????ng tr??nh ????o t???o v???i c??c chu???n ?????u ra', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 9),
(73, 9, 'question_02', 'select_dropdown', 'M???c ti??u c???a ch????ng tr??nh ????o t???o ????p ???ng ??? m???c n??o v???i n??ng l???c sinh vi??n khi t???t nghi???pstion 02', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 10),
(74, 9, 'question_03', 'select_dropdown', 'T??? l??? ph??n b??? h???p l?? gi???a l?? thuy???t v?? th???c h??nhn 03', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 11),
(75, 9, 'question_04', 'select_dropdown', 'Ch????ng tr??nh ????o t???o ???????c thi???t k???, t???o ??i???u ki???n thu???n l???i cho SV l???a ch???n theo nhu c???u, nguy??n v???ng h???c t???p04', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 12),
(76, 9, 'question_05', 'select_dropdown', 'C??c m??n h???c trong ch????ng tr??nh ????o t???o t??ch h???p ???????c c??c ki???n th???c v?? k??? n??ng theo chu???n ?????u ra c???a ng??nh ???? c??ng b???', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 13),
(77, 9, 'question_06', 'select_dropdown', 'M???c ????? g???n k???t gi???a c??c kh???i ki???n th???c (c?? b???n, c?? s??? ng??nh, chuy??n ng??nh) v?? ki???n th???c th???c t??? trong n???i dung ch????ng tr??nh ????o t???o', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 14),
(78, 9, 'question_07', 'select_dropdown', 'Sinh vi??n hi???u r?? ???????c chu???n ?????u ra c???a ng??nh ????o t???o v??? ki???n th???c, k??? n??ng v?? th??i ????? ng?????i h???c c???n ?????t ???????c', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 15),
(79, 9, 'question_08', 'select_dropdown', 'Tr??nh ????? chuy??n m??n c???a gi???ng vi??n ????p ???ng y??u c???u ????o t???o', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 16),
(80, 9, 'question_09', 'select_dropdown', 'Ph????ng ph??p gi???ng d???y c???a gi???ng vi??n d??? hi???u, ph?? h???p v???i sinh vi??n', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 17),
(81, 9, 'question_10', 'select_dropdown', 'Gi???ng vi??n c?? h?????ng d???n sinh vi??n t??? h???c, s???n s??ng trao ?????i v??? n???i dung m??n h???c v???i sinh vi??n', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 18),
(82, 9, 'question_11', 'select_dropdown', 'Vi???c th???c hi???n gi??? l??n l???p, k??? ho???ch gi???ng d???y v?? kh??? n??ng s??? d???ng c??c thi???t b??? h??? tr??? d???y h???c c???a gi???ng vi??n', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 19),
(83, 9, 'question_12', 'select_dropdown', 'Nh?? tr?????ng cung c???p ?????y ????? th??ng tin v??? quy ch??? ????o t???o, ch????ng tr??nh ????o t???o, quy ch??? h???c sinh sinh vi??n v?? ph????ng ph??p ki???m tra ????nh gi?? t??? ?????u kh??a t???i sinh vi??n.', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 20),
(84, 9, 'question_13', 'select_dropdown', 'Vi???c tri???n khai cho sinh vi??n ??i th???c t???p g???n li???n v???i th???c ti???n t???i c??c c?? quan, doanh nghi???p ngo??i tr?????ng h???p l?? khoa h???c ?????t hi???u qu???', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 21),
(85, 9, 'question_14', 'select_dropdown', 'C??n b???, nh??n vi??n c??c ph??ng/trung t??m c?? th??i ????? ph???c v??? sinh vi??n t???n t??nh, th??n thi???n.', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 22),
(86, 9, 'question_15', 'select_dropdown', 'C??c ph??ng ch???c n??ng gi???i quy???t c??c th???c m???c ki???n ngh??? c???a sinh vi??n,nhanh ch??ng, thu???n l???i, th???a m??n c??c y??u c???u', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 23),
(87, 9, 'question_16', 'select_dropdown', 'C??c ch??? ????? ch??nh s??ch x?? h???i, h???c b???ng khuy???n kh??ch h???c t???p c???a nh?? tr?????ng ???????c tri???n khai t???i sinh vi??n theo ????ng quy ?????nh.', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 24),
(88, 9, 'question_17', 'select_dropdown', 'C??c ch??? ????? ch??m s??c s???c kh???e, y t??? h???c ???????ng v?? c???i thi???n s???c kh???e c???a nh?? tr?????ng ?????i v???i sinh vi??n.', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 25),
(89, 9, 'question_18', 'select_dropdown', 'C??c ho???t ?????ng t?? v???n, h??? tr??? sinh vi??n ???????c th???c hi???n ?????y ????? v?? c?? hi???u qu???', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 26),
(90, 9, 'question_19', 'select_dropdown', 'Ho???t ?????ng c???a c??c t??? ch???c ?????ng/??o??n/H???i c?? hi???u qu???, t??c d???ng t???t trong h???c t???p v?? r??n luy???n ch??nh tr???, t?? t?????ng, ?????o ?????c l???i s???ng c???a sinh vi??n', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 27),
(91, 9, 'question_20', 'select_dropdown', 'C??c th??ng tin v??? ho???t ?????ng ????o t???o ??a d???ng, phong ph?? v?? c???p nh???t th?????ng xuy??n tr??n website nh?? tr?????ng.', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 28),
(92, 9, 'question_21', 'select_dropdown', 'H??ng n??m, nh?? tr?????ng t??? ch???c c?? hi???u qu??? c??c bu???i ?????i tho???i tr???c ti???p gi???a sinh vi??n v???i l??nh ?????o nh?? tr?????ng/ c??c t??? ch???c ??o??n/H???i sinh vi??n.', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 29),
(93, 9, 'question_22', 'select_dropdown', 'M???c ????? ??a d???ng h??a c??c h??nh th???c thi, ki???m tra ????nh gi?? ph?? h???p v???i n???i dung m??n h???c', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 30),
(94, 9, 'question_23', 'select_dropdown', 'T??? ch???c thi, ki???m tra, ch???m b??i t???p, th???c t???p, ti???u lu???n ????nh gi?? ?????m b???o nghi??m t??c, kh??ch quan, ch??nh x??c v?? c??ng b???ng', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 31),
(95, 9, 'question_24', 'select_dropdown', 'C??c k??? ho???ch thi, ki???m tra ???????c th??ng b??o r?? r??ng, k???p th???icho sinh vi??n', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 32),
(96, 9, 'question_25', 'select_dropdown', 'K???t qu??? h???c t???p c???a sinh vi??n ???????c th??ng b??o k???p th???i t???i sinh vi??n', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 33),
(97, 9, 'question_26', 'select_dropdown', 'Th?? vi???nTr?????ng c?? ????? c??c gi??o tr??nh v?? t??i li???u tham kh???o cho to??n  kh??a h???c', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 34),
(98, 9, 'question_27', 'select_dropdown', 'C?? s??? v???t ch???t nh?? tr?????ng (gi???ng ???????ng, b??n gh???, ph????ng ti???n nghe nh??n d??ng cho vi???c h???c, s??n v???n ?????ng, ch??? g???i xe,???)', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 35),
(99, 9, 'question_28', 'select_dropdown', 'Trang thi???t b??? ph??ng th???c h??nh th?? nghi???m c?? ?????m b???o ch???t l?????ng ph???c v??? c??ng t??c h???c t???p v?? nghi??n c???u khoa h???c', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 36),
(100, 9, 'question_29', 'select_dropdown', 'C?? s??? v???t ch???t k?? t??c x?? ????p ???ng t???t cho sinh vi??n n???i tr??', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 37),
(101, 9, 'question_30', 'select_dropdown', 'C???nh quan v??? sinh m??i tr?????ng s???ch ?????p', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 38),
(102, 9, 'question_31', 'select_dropdown', 'C??ng tin trong tr?????ng ph???c v??? t???t nhu c???u ??n u???ng c???a sinh vi??n', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 39),
(103, 9, 'question_32', 'select_dropdown', 'C??ng t??c thu - chi t??i ch??nh li??n quan ?????n sinh vi??n c???a nh?? tr?????ng ???????c th???c hi???n c??ng khai, r?? r??ng, ch??nh x??c v?? thu???n l???i cho sinh vi??n', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 40),
(104, 9, 'question_33', 'select_dropdown', 'C??n b???, nh??n vi??n trong ph??ng K??? ho???ch ??? T??i ch??nh c??  tinh th???n v?? th??i ????? ????ng m???c, th??n thi???n trong gi???i quy???t c??ng vi???c ph???c v??? sinh vi??n.', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 41),
(105, 9, 'question_34', 'select_dropdown', 'Th??i ????? nghi??m t??c, nhi???t t??nh v?? c?? tr??ch nhi???m khi ???????c y??u c???u gi???i quy???t c??ng vi???c thu???c ph???m vi ?????m nh???n', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 42),
(106, 9, 'question_35', 'select_dropdown', 'Th??i ????? ph???c v??? khi ???????c y??u c???u gi???i quy???t c??ng vi???c thu???c ph???m vi tr??ch nhi???m (vui v???, th??n thi???n, nhi???t t??nh)', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 43),
(107, 9, 'question_36', 'select_dropdown', 'Quy tr??nh gi???i quy???t c??ng vi???c ?????m b???o t??nh khoa h???c, r?? r??ng v?? ????ng quy ?????nh', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 44),
(108, 9, 'question_37', 'select_dropdown', 'Gi???i quy???t c??ng vi???c nhanh ch??ng, kip th???i ?????m b???o t???t y??u c???u nghi???p v???', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 45),
(109, 9, 'question_38', 'select_dropdown', 'Lu??n t???o ??i???u ki???n thu???n l???i khi ?????n l??m vi???c t???i Ph??ng', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 46),
(110, 9, 'question_39', 'select_dropdown', 'M???c ????? h??i l??ng c???a Sinh vi??n v??? ?????i ng?? c??n b??? qu???n l??, nh??n vi??n v?? k??? thu???t vi??n c???a Tr?????ng', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 47),
(111, 9, 'question_40', 'select_dropdown', 'Sinh vi??n ???????c cung c???p ????? nh???ng ki???n th???c v?? c??c k??? n??ng c???n thi???t cho c??ng vi???c theo ng??nh t???t nghi???p', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 48),
(112, 9, 'question_41', 'select_dropdown', 'M???c ????? t??? tin v??? ki???n th???c, k??? n??ng c???a sinh vi??n khi t???t nghi???p', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 49),
(113, 9, 'question_42', 'select_dropdown', 'M???c ????? h??i l??ng v??? ch???t l?????ng ????o t???o c???a nh?? tr?????ng', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 50),
(114, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 51),
(115, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 52),
(116, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(117, 10, 'name', 'text', 'H??? v?? T??n', 0, 1, 1, 1, 1, 1, '{}', 2),
(118, 10, 'date', 'text', 'Ng??y sinh', 0, 1, 1, 1, 1, 1, '{}', 3),
(119, 10, 'gender', 'text', 'Gi???i t??nh', 0, 0, 1, 1, 1, 1, '{}', 4),
(120, 10, 'address', 'text', '?????a ch??? li??n h???', 0, 0, 1, 1, 1, 1, '{}', 5),
(121, 10, 'CCCD', 'text', 'C??n c?????c c??ng d??n', 0, 0, 1, 1, 1, 1, '{}', 6),
(122, 10, 'phone', 'text', '??i???n tho???i', 0, 1, 1, 1, 1, 1, '{}', 7),
(123, 10, 'zalo', 'text', 'Zalo', 0, 0, 1, 1, 1, 1, '{}', 8),
(124, 10, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 9),
(125, 10, 'facebook', 'text', 'Facebook', 0, 0, 1, 1, 1, 1, '{}', 10),
(126, 10, 'question_01', 'select_dropdown', 'T??nh tr???ng vi???c l??m', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"2\":\"Ch\\u01b0a c\\u00f3 vi\\u1ec7c l\\u00e0m\",\"3\":\"Ch\\u01b0a c\\u00f3 vi\\u1ec7c l\\u00e0m nh\\u01b0ng \\u0111ang h\\u1ecdc n\\u00e2ng cao\",\"4\":\"C\\u00f3 vi\\u1ec7c l\\u00e0m\"}}', 11),
(127, 10, 'question_02', 'text', '????n v??? c??ng t??c', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 12),
(128, 10, 'question_03', 'select_dropdown', 'L??nh v???c c??ng t??c c?? ????ng chuy??n ng??nh kh??ng', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"3\":\"Kh\\u00f4ng\",\"4\":\"C\\u00f3 \"}}', 13),
(129, 10, 'question_04', 'select_dropdown', 'Thu nh???p b??nh qu??n h??ng th??ng', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"\",\"options\":{\"2\":\"> 10 tri\\u1ec7uVN\\u0110\",\"3\":\"5 -10 tri\\u1ec7uVN\\u0110\",\"4\":\"<5 tri\\u1ec7uVN\\u0110\"}}', 14),
(130, 10, 'question_05', 'select_dropdown', 'Khu v???c l??m vi???c', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ef1 t\\u1ea1o vi\\u1ec7c l\\u00e0m\",\"options\":{\"1\":\"T\\u1ef1 t\\u1ea1o vi\\u1ec7c l\\u00e0m\",\"2\":\"Li\\u00ean doanh n\\u01b0\\u1edbc ngo\\u00e0i\",\"3\":\"Khu v\\u1ef1c t\\u01b0 nh\\u00e2n\",\"4\":\"Khu v\\u1ef1c nh\\u00e0 n\\u01b0\\u1edbc\"}}', 15),
(131, 10, 'question_06', 'select_dropdown', 'Th???i gian t??m ???????cvi???cl??m sau khi t???t nghi???p?', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"\",\"options\":{\"2\":\">12 th\\u00e1ng\",\"3\":\"7\\u201312 th\\u00e1ng\",\"4\":\"<6 th\\u00e1ng\"}}', 16),
(132, 10, 'question_07', 'select_dropdown', 'S??? ????p ???ng c???a ki???n th???c chuy??n m??n ???????c ????o t???o trong tr?????ng cho c??ng vi???c hi???n nay c???a Anh/Ch???', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 17),
(133, 10, 'question_08', 'select_dropdown', 'S??? ????p ???ng c???a c??c k??? n??ng ???????c ????o t???o trong tr?????ng cho c??ng vi???c hi???n nay c???a Anh/Ch???', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 18),
(134, 10, 'question_09', 'select_dropdown', 'M???c ????? t????ng th??ch c???a chu???n ?????u ra v???i y??u c???u c???a th??? tr?????ng lao ?????ng', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 19),
(135, 10, 'question_10', 'select_dropdown', 'Th???i l?????ng c??c h???c ph???n th???c h??nh ????? h??nh th??nh c??c k??? n??ng ngh??? nghi???p chuy??n m??n.', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 20),
(136, 10, 'question_11', 'select_dropdown', 'M???c ????? h??i l??ng v??? trang thi???t b??? ph???c v??? th???c h??nh, th?? nghi???m trong qu?? tr??nh h???c t???p t???i tr?????ng.', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 21),
(137, 10, 'question_12', 'select_dropdown', 'M???c ????? h??i l??ng v??? ph????ng ph??p gi???ng d???y c???a c??c gi???ng vi??n', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 22),
(138, 10, 'question_13', 'select_dropdown', 'M???c ????? ????p ???ng c???a n???i dung ch????ng tr??nh ????o t???o v???i y??u c???u c???a th??? tr?????ng lao ?????ng', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 23),
(139, 10, 'question_14', 'select_dropdown', '????nh gi?? s??? h??i l??ng c???a ho???t ?????ng k???t n???i v?? ph???c v??? c???ng ?????ng c???a nh?? tr?????ng', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 24),
(140, 10, 'question_15', 'text', '1. Theo Anh/Ch??? nh???ng h???c ph???n n??o trong ch????ng tr??nh ????o t???o m?? Anh/Ch??? ???? h???c ????ng vai tr?? quan tr???ng trong vi???c h??nh th??nh ki???n th???c, k??? n??ng ngh??? nghi???p', 0, 0, 1, 1, 1, 1, '{}', 25),
(141, 10, 'question_16', 'text', '2. Theo Anh/Ch??? c??c m??n h???c n??o c???n ???????c b??? sung th??m v??o ch????ng tr??nh ????o t???o.', 0, 0, 1, 1, 1, 1, '{}', 26),
(142, 10, 'question_17', 'text', '3. K??? n??ng n??o c???n ph???i b??? sung v??o chu???n ?????u ra ????? ????p ???ng y??u c???u c??ng vi???c.', 0, 0, 1, 1, 1, 1, '{}', 27),
(143, 10, 'question_18', 'text', '4. Theo Anh/Ch??? Nh?? tr?????ng c???n t??ng c?????ng c??c ho???t ?????ng n??o ????? gi??p sinh vi??n t???t nghi???p ra tr?????ng t??m ki???m ???????c vi???c l??m.', 0, 0, 1, 1, 1, 1, '{}', 28),
(144, 10, 'question_19', 'text', '5. Nh???ng h???c ph???n n??o trong ch????ng tr??nh ????o t???o c???n thi???t ph???i t??ng th??m th???i l?????ng.', 0, 0, 1, 1, 1, 1, '{}', 29),
(146, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 31),
(147, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 32),
(148, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(149, 11, 'name', 'text', 'T??n ????n v???', 0, 1, 1, 1, 1, 1, '{}', 2),
(150, 11, 'address', 'text', '?????a ch???', 0, 1, 1, 1, 1, 1, '{}', 3),
(151, 11, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 4),
(152, 11, 'phone', 'text', 'Phone', 0, 1, 1, 1, 1, 1, '{}', 5),
(153, 11, 'field', 'text', 'L??nh v???c ho???t ?????ng', 0, 0, 1, 1, 1, 1, '{}', 6),
(154, 11, 'ingredient', 'select_dropdown', 'Th??nh ph???n ????n v??? t??? ch???c', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"Kh\\u00e1c\",\"options\":{\"1\":\"Kh\\u00e1c\",\"2\":\"Li\\u00ean doanh n\\u01b0\\u1edbc ngo\\u00e0i\",\"3\":\"T\\u01b0 nh\\u00e2n\",\"4\":\"Nh\\u00e0 n\\u01b0\\u1edbc\"}}', 7),
(155, 11, 'question_01', 'text', 'S??? l?????ng c??n b??? c??ng nh??n vi??n hi???n ??ang l??m vi???c t???i Qu?? c?? quan/ Doanh nghi???p c?? ng?????i t???t nghi???p ?????i h???c t???i ?????i h???c C??ng ngh??? th??ng tin v?? Truy???n th??ng l??:', 0, 0, 1, 1, 1, 1, '{}', 8),
(156, 11, 'question_02', 'select_dropdown', 'V?? thu???c c??c nh??m ng??nh sau:', 0, 0, 1, 1, 1, 1, '{\"default\":\"Kh\\u00e1c\",\"options\":{\"1\":\"Truy\\u1ec1n th\\u00f4ng \\u0111a ph\\u01b0\\u01a1ng ti\\u1ec7n\",\"2\":\"H\\u1ec7 th\\u1ed1ng th\\u00f4ng tin qu\\u1ea3n l\\u00fd\",\"3\":\"H\\u1ec7 th\\u1ed1ng th\\u00f4ng tin qu\\u1ea3n l\\u00fd, Qu\\u1ea3n tr\\u1ecb v\\u0103n ph\\u00f2ng, th\\u01b0\\u01a1ng m\\u1ea1i \\u0111i\\u1ec7n t\\u1eed\",\"4\":\"C\\u00f4ng ngh\\u1ec7 k\\u1ef9 thu\\u1eadt \\u0111i\\u1ec7n t\\u1eed \\u2013 vi\\u1ec5n th\\u00f4ng\",\"5\":\"C\\u00f4ng ngh\\u1ec7 th\\u00f4ng tin\"}}', 9),
(157, 11, 'question_03', 'text', 'Nhu c???u tuy???n d???ng k??? s??, c??? nh??n Tr?????ng ?????i h???c C??ng ngh??? th??ng tin v?? truy???n th??ng c???a doanh nghi???p:', 0, 0, 1, 1, 1, 1, '{}', 10),
(158, 11, 'question_04', 'select_dropdown', 'Nh??m l??nh v???c:', 0, 0, 1, 1, 1, 1, '{\"default\":\"Kh\\u00e1c\",\"options\":{\"1\":\"Truy\\u1ec1n th\\u00f4ng \\u0111a ph\\u01b0\\u01a1ng ti\\u1ec7n\",\"2\":\"H\\u1ec7 th\\u1ed1ng th\\u00f4ng tin qu\\u1ea3n l\\u00fd\",\"3\":\"H\\u1ec7 th\\u1ed1ng th\\u00f4ng tin qu\\u1ea3n l\\u00fd, Qu\\u1ea3n tr\\u1ecb v\\u0103n ph\\u00f2ng, th\\u01b0\\u01a1ng m\\u1ea1i \\u0111i\\u1ec7n t\\u1eed\",\"4\":\"C\\u00f4ng ngh\\u1ec7 k\\u1ef9 thu\\u1eadt \\u0111i\\u1ec7n t\\u1eed \\u2013 vi\\u1ec5n th\\u00f4ng\",\"5\":\"C\\u00f4ng ngh\\u1ec7 th\\u00f4ng tin\"}}', 11),
(159, 11, 'question_05', 'select_dropdown', 'Ki???n th???c chuy??n ng??nh ????o t???o', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 12),
(160, 11, 'question_06', 'select_dropdown', 'K??? n??ng chuy??n m??n ngh??? nghi???p', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 13),
(161, 11, 'question_07', 'select_dropdown', 'K??? n??ng s??? d???ng ngo???i ng??? trong c??ng vi???c', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 14),
(162, 11, 'question_08', 'select_dropdown', 'K??? n??ng tin h???c v?? s??? d???ng m??y vi t??nh', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 15),
(163, 11, 'question_09', 'select_dropdown', '?? th???c ch???p h??nh n???i quy, quy ?????nh, k??? lu???t lao ?????ng', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 16),
(164, 11, 'question_10', 'select_dropdown', 'K??? n??ng v???n d???ng ki???n th???c ????? gi???i quy???t c??ng vi???c v???i hi???u qu??? cao v?? ti???n ????? cao.', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 17),
(165, 11, 'question_11', 'select_dropdown', 'Ph???m ch???t c?? nh??n (ch??m ch???, ki??n tr??, t??? tin, linh ho???t, nhi???t t??nh, tr??ch nhi???m, tinh th???n h???c h???i...)', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 18),
(166, 11, 'question_12', 'select_dropdown', 'K??? n??ng l??m vi???c, qu???n l?? nh??m (l???p k??? ho???ch, t??? ch???c c??ng vi???c, l??m vi???c nh??m, kh??? n??ng l??m vi???c ?????c l???p....)', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\"}}', 19),
(167, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 30),
(168, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 31),
(169, 11, 'question_13', 'select_dropdown', 'K??? n??ng chuy??n m??n ngh??? nghi???p', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"\",\"options\":{\"2\":\"Doanh nghi\\u1ec7p\\/ T\\u1ed5 ch\\u1ee9c\",\"3\":\"Nh\\u00e0 tr\\u01b0\\u1eddng\",\"4\":\"Kh\\u00f4ng c\\u1ea7n \\u0111\\u00e0o t\\u1ea1o\"}}', 20),
(170, 11, 'question_14', 'select_dropdown', 'K??? n??ng m???m', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"\",\"options\":{\"2\":\"Doanh nghi\\u1ec7p\\/ T\\u1ed5 ch\\u1ee9c\",\"3\":\"Nh\\u00e0 tr\\u01b0\\u1eddng\",\"4\":\"Kh\\u00f4ng c\\u1ea7n \\u0111\\u00e0o t\\u1ea1o\"}}', 21),
(171, 11, 'question_15', 'select_dropdown', 'Kh??? n??ng ngo???i ng???', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"\",\"options\":{\"2\":\"Doanh nghi\\u1ec7p\\/ T\\u1ed5 ch\\u1ee9c\",\"3\":\"Nh\\u00e0 tr\\u01b0\\u1eddng\",\"4\":\"Kh\\u00f4ng c\\u1ea7n \\u0111\\u00e0o t\\u1ea1o\"}}', 22),
(172, 11, 'question_16', 'select_dropdown', 'K??? n??ng tin h???c v?? s??? d???ng m??y vi t??nh', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"\",\"options\":{\"2\":\"Doanh nghi\\u1ec7p\\/ T\\u1ed5 ch\\u1ee9c\",\"3\":\"Nh\\u00e0 tr\\u01b0\\u1eddng\",\"4\":\"Kh\\u00f4ng c\\u1ea7n \\u0111\\u00e0o t\\u1ea1o\"}}', 23),
(173, 11, 'question_17', 'select_dropdown', '?? th???c, th??i ????? v?? nh???n th???c v??? b???n th??n v?? x?? h???i', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"\",\"options\":{\"2\":\"Doanh nghi\\u1ec7p\\/ T\\u1ed5 ch\\u1ee9c\",\"3\":\"Nh\\u00e0 tr\\u01b0\\u1eddng\",\"4\":\"Kh\\u00f4ng c\\u1ea7n \\u0111\\u00e0o t\\u1ea1o\"}}', 24),
(174, 11, 'question_18', 'select_dropdown', '?????i v???i K??? s??/ C??? nh??n Tr?????ng ?????i h???c C??ng ngh??? th??ng tin v?? Truy???n th??ng m???i t???t nghi???p:', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"\",\"options\":{\"2\":\"Sinh vi\\u00ean ph\\u1ea3i \\u0111\\u01b0\\u1ee3c \\u0111\\u00e0o t\\u1ea1o l\\u1ea1i ho\\u1eb7c \\u0111\\u00e0o t\\u1ea1o b\\u1ed5 sung \\u00edt nh\\u1ea5t 6 th\\u00e1ng\",\"3\":\"Sinh vi\\u00ean c\\u01a1 b\\u1ea3n \\u0111\\u00e1p \\u1ee9ng y\\u00eau c\\u1ea7u c\\u1ee7a c\\u00f4ng vi\\u1ec7c, nh\\u01b0ng ph\\u1ea3i \\u0111\\u00e0o t\\u1ea1o th\\u00eam\",\"4\":\"Sinh vi\\u00ean \\u0111\\u00e1p \\u1ee9ng y\\u00eau c\\u1ea7u c\\u1ee7a c\\u00f4ng vi\\u1ec7c, c\\u00f3 th\\u1ec3 s\\u1eed d\\u1ee5ng \\u0111\\u01b0\\u1ee3c ngay\"}}', 25),
(175, 11, 'question_19', 'select_dropdown', 'Ch???t l?????ng chung c???a K??? s??/ C??? nh??n Tr?????ng ?????i h???c C??ng ngh??? th??ng tin v?? Truy???n th??ng l??:', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"K\\u00e9m\",\"2\":\"Trung B\\u00ecnh\",\"3\":\"Kh\\u00e1\",\"4\":\"T\\u1ed1t\",\"5\":\"Xu\\u1ea5t s\\u1eafc\"}}', 26),
(176, 11, 'question_20', 'select_dropdown', 'Qu?? v??? c?? mu???n ti???p t???c tuy???n d???ng Ng?????i h???c c???a Nh?? tr?????ng khi c?? nhu c???u?', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"\",\"options\":{\"2\":\"Kh\\u00f4ng\",\"3\":\"C\\u00f2n ph\\u1ea3i c\\u00e2n nh\\u1eafc\",\"4\":\"Kh\\u00f4ng\"}}', 27),
(177, 11, 'question_21', 'select_dropdown', 'Qu?? v??? c?? th??? ????ng g??p g?? ????? Tr?????ng ?????i h???c C??ng ngh??? th??ng tin v?? Truy???n th??ng x??y d???ng v?? th???c hi???n ch????ng tr??nh ????o t???o ch???t l?????ng v?? hi???u qu??? h??n?', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"},\"default\":\"T\\u1ed1t\",\"options\":{\"1\":\"\\u0110\\u00f3ng g\\u00f3p \\u00fd ki\\u1ebfn ph\\u1ea3n h\\u1ed3i v\\u1ec1 ch\\u1ea5t l\\u01b0\\u1ee3ng sinh vi\\u00ean v\\u00e0 ng\\u01b0\\u1eddi h\\u1ecdc Tr\\u01b0\\u1eddng \\u0110\\u1ea1i h\\u1ecdc C\\u00f4ng ngh\\u1ec7 th\\u00f4ng tin v\\u00e0 Truy\\u1ec1n th\\u00f4ng.\",\"2\":\"Nh\\u1eadn sinh vi\\u00ean th\\u1ef1c t\\u1eadp. \",\"3\":\"Tham gia c\\u00e1c bu\\u1ed5i n\\u00f3i chuy\\u1ec7n v\\u1ec1 h\\u01b0\\u1edbng nghi\\u1ec7p, gi\\u1edbi thi\\u1ec7u c\\u01a1 h\\u1ed9i vi\\u1ec7c l\\u00e0m.\",\"4\":\"Tham gia th\\u1ef1c hi\\u1ec7n \\u0111\\u00e0o t\\u1ea1o nh\\u01b0 gi\\u1ea3ng d\\u1ea1y, ph\\u1ed1i h\\u1ee3p t\\u1ed5 ch\\u1ee9c h\\u1ed9i th\\u1ea3o, seminar, n\\u00f3i chuy\\u1ec7n chuy\\u00ean \\u0111\\u1ec1...\",\"5\":\"Tham gia v\\u00e0o qu\\u00e1 tr\\u00ecnh x\\u00e2y d\\u1ef1ng n\\u1ed9i dung ch\\u01b0\\u01a1ng tr\\u00ecnh\"}}', 28),
(178, 11, 'question_22', 'text_area', 'C??c ?? ki???n kh??c', 0, 0, 1, 1, 1, 1, '{}', 29),
(179, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(180, 12, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(182, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(183, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(184, 9, 'student_belongsto_event_relationship', 'relationship', 'events', 0, 1, 1, 1, 1, 1, '{\"default\":\"\\u0110\\u1ee3t kh\\u1ea3o s\\u00e1t n\\u0103m 2022\",\"options\":{\"2021\":\"\\u0110\\u1ee3t kh\\u1ea3o s\\u00e1t n\\u0103m 2021\",\"2022\":\"\\u0110\\u1ee3t kh\\u1ea3o s\\u00e1t n\\u0103m 2022\"},\"model\":\"App\\\\Event\",\"table\":\"events\",\"type\":\"belongsTo\",\"column\":\"event_id\",\"key\":\"year\",\"label\":\"name\",\"pivot_table\":\"alumnis\",\"pivot\":\"0\",\"taggable\":\"0\"}', 53),
(185, 9, 'event_id', 'text', 'Event Id', 0, 1, 1, 1, 1, 1, '{}', 53),
(186, 12, 'year', 'text', 'Year', 0, 1, 1, 1, 1, 1, '{}', 3),
(187, 10, 'alumni_belongsto_event_relationship', 'relationship', '?????t kh???o s??t', 0, 1, 1, 1, 1, 1, '{\"default\":\"\\u0110\\u1ee3t kh\\u1ea3o s\\u00e1t n\\u0103m 2022\",\"options\":{\"2021\":\"\\u0110\\u1ee3t kh\\u1ea3o s\\u00e1t n\\u0103m 2021\",\"2022\":\"\\u0110\\u1ee3t kh\\u1ea3o s\\u00e1t n\\u0103m 2022\"},\"model\":\"App\\\\Event\",\"table\":\"events\",\"type\":\"belongsTo\",\"column\":\"event_id\",\"key\":\"year\",\"label\":\"name\",\"pivot_table\":\"alumnis\",\"pivot\":\"0\",\"taggable\":\"0\"}', 33),
(188, 10, 'event_id', 'text', 'Event Id', 0, 1, 1, 1, 1, 1, '{}', 32),
(189, 11, 'enterprise_belongsto_event_relationship', 'relationship', '?????t kh???o s??t', 0, 1, 1, 1, 1, 1, '{\"default\":\"\\u0110\\u1ee3t kh\\u1ea3o s\\u00e1t n\\u0103m 2022\",\"options\":{\"2021\":\"\\u0110\\u1ee3t kh\\u1ea3o s\\u00e1t n\\u0103m 2021\",\"2022\":\"\\u0110\\u1ee3t kh\\u1ea3o s\\u00e1t n\\u0103m 2022\"},\"model\":\"App\\\\Event\",\"table\":\"events\",\"type\":\"belongsTo\",\"column\":\"event_id\",\"key\":\"year\",\"label\":\"name\",\"pivot_table\":\"alumnis\",\"pivot\":\"0\",\"taggable\":\"0\"}', 32),
(190, 11, 'event_id', 'text', 'Event Id', 0, 1, 1, 1, 1, 1, '{}', 32),
(191, 12, 'status', 'select_dropdown', 'Tr???ng th??i', 0, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"\\u0110\\u00e3 \\u0111\\u00f3ng\",\"ACTIVE\":\"\\u0110ang m\\u1edf\"}}', 4);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(8, 'questions', 'questions', 'Question', 'Questions', 'voyager-photos', 'App\\Question', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-01-04 00:33:35', '2023-01-04 01:50:30'),
(9, 'students', 'students', 'Sinh Vi??n', 'Sinh Vi??n', 'voyager-people', 'App\\Student', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-01-04 02:06:31', '2023-01-06 20:16:00'),
(10, 'alumnis', 'alumnis', 'C???u Sinh Vi??n', 'C???u Sinh Vi??n', NULL, 'App\\Alumni', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-01-05 00:21:58', '2023-01-06 21:15:41'),
(11, 'enterprises', 'enterprises', 'Doanh Nghi???p', 'Doanh Nghi???p', 'voyager-diamond', 'App\\Enterprise', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-01-05 01:35:31', '2023-01-06 21:18:50'),
(12, 'events', 'events', 'Event', 'Events', NULL, 'App\\Event', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-01-06 20:02:46', '2023-02-15 17:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `enterprises`
--

CREATE TABLE `enterprises` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ingredient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_01` int(11) DEFAULT NULL,
  `question_02` int(11) DEFAULT NULL,
  `question_03` int(11) DEFAULT NULL,
  `question_04` int(11) DEFAULT NULL,
  `question_05` int(11) DEFAULT NULL,
  `question_06` int(11) DEFAULT NULL,
  `question_07` int(11) DEFAULT NULL,
  `question_08` int(11) DEFAULT NULL,
  `question_09` int(11) DEFAULT NULL,
  `question_10` int(11) DEFAULT NULL,
  `question_11` int(11) DEFAULT NULL,
  `question_12` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question_13` int(11) DEFAULT NULL,
  `question_14` int(11) DEFAULT NULL,
  `question_15` int(11) DEFAULT NULL,
  `question_16` int(11) DEFAULT NULL,
  `question_17` int(11) DEFAULT NULL,
  `question_18` int(11) DEFAULT NULL,
  `question_19` int(11) DEFAULT NULL,
  `question_20` int(11) DEFAULT NULL,
  `question_21` int(11) DEFAULT NULL,
  `question_22` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enterprises`
--

INSERT INTO `enterprises` (`id`, `name`, `address`, `email`, `phone`, `field`, `ingredient`, `question_01`, `question_02`, `question_03`, `question_04`, `question_05`, `question_06`, `question_07`, `question_08`, `question_09`, `question_10`, `question_11`, `question_12`, `created_at`, `updated_at`, `question_13`, `question_14`, `question_15`, `question_16`, `question_17`, `question_18`, `question_19`, `question_20`, `question_21`, `question_22`, `event_id`) VALUES
(1, 'JSC', 'Th??i Nguy??n', 'superadmin@admin.com', 359808267, 'IT', '3', 4, 5, 2, 5, 4, 4, 4, 4, 4, 4, 1, 4, '2023-01-05 01:51:02', '2023-01-05 01:51:02', 3, 4, 3, 3, 3, 3, 3, 3, 3, 'a', NULL),
(2, 'Minh Minh', 'TN', 'admin2@admin.com', 359808267, 'IT', '4', 10, 4, 2, 4, 4, 3, 3, 4, 3, 3, 4, 4, '2023-01-05 03:10:49', '2023-01-05 03:10:49', 3, 3, 3, 3, 2, 4, 5, 3, 4, 'Kh??ng', NULL),
(3, 'Kennatech', 'Th??i Nguy??n', 'superadmin@admin.com', 359808267, 'IT', '3', 10, 4, 2, 1, 4, 4, 3, 2, 4, 2, 3, 3, '2023-01-05 03:19:00', '2023-01-06 21:18:58', 3, 3, 2, 2, 2, 4, 5, 4, 2, 'Kh??ng', 2021),
(4, 'Nguy???n Quang H???i', 'Cao Bang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-06 21:20:16', '2023-01-06 21:20:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2021),
(5, 'Nguy???n Quang H???i', 'Th??i Nguy??n', 'admin2@admin.com', 123456745, 'IT', '4', 4, 4, 2, 4, 3, 3, 4, 4, 3, 4, 1, 1, '2023-02-15 18:58:17', '2023-02-15 18:58:17', 3, 3, 3, 4, 4, 4, 5, 4, 5, 'Kh??ng', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `year`, `created_at`, `updated_at`, `status`) VALUES
(1, '?????t kh???o s??t n??m 2022', 2022, '2023-01-06 20:02:00', '2023-02-15 17:58:17', 'INACTIVE'),
(3, '?????t kh???o s??t n??m 2023', 2023, '2023-02-15 17:54:00', '2023-02-15 17:58:22', 'ACTIVE');

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(2, 'Home menu', '2023-02-15 18:49:23', '2023-02-15 18:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2023-01-04 00:21:51', '2023-01-04 00:21:51', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 9, '2023-01-04 00:21:51', '2023-02-15 17:55:53', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 8, '2023-01-04 00:21:51', '2023-02-15 17:55:53', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 7, '2023-01-04 00:21:51', '2023-02-15 17:55:53', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 13, '2023-01-04 00:21:51', '2023-02-15 17:55:53', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2023-01-04 00:21:51', '2023-01-04 00:34:48', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2023-01-04 00:21:51', '2023-01-04 00:34:48', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2023-01-04 00:21:51', '2023-01-04 00:34:48', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2023-01-04 00:21:51', '2023-01-04 00:34:48', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2023-01-04 00:21:51', '2023-02-15 17:55:54', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 12, '2023-01-04 00:21:52', '2023-02-15 17:55:53', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 10, '2023-01-04 00:21:52', '2023-02-15 17:55:53', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 11, '2023-01-04 00:21:52', '2023-02-15 17:55:53', 'voyager.pages.index', NULL),
(16, 1, 'Ph???n H???i C???a Sinh Vi??n', '', '_self', 'voyager-people', '#000000', NULL, 3, '2023-01-04 02:06:31', '2023-02-15 17:55:53', 'voyager.students.index', 'null'),
(17, 1, 'Ph???n H???i C???a C???u Sinh Vi??n', '', '_self', 'voyager-backpack', '#000000', NULL, 4, '2023-01-05 00:21:58', '2023-02-15 17:55:53', 'voyager.alumnis.index', 'null'),
(18, 1, 'Ph???n H???i C???a Doanh Nghi???p', '', '_self', 'voyager-diamond', '#000000', NULL, 5, '2023-01-05 01:35:31', '2023-02-15 17:55:53', 'voyager.enterprises.index', 'null'),
(19, 1, '?????t kh???o s??t', '', '_self', 'voyager-receipt', '#000000', NULL, 2, '2023-01-06 20:02:46', '2023-02-15 18:02:26', 'voyager.events.index', 'null'),
(20, 1, 'Xu???t Excel Ph???n H???i Sinh Vi??n', '/student/export', '_self', 'voyager-book', '#000000', NULL, 6, '2023-01-09 02:06:08', '2023-02-15 17:55:53', NULL, ''),
(21, 2, 'Trang ch???', '/', '_self', NULL, '#000000', NULL, 1, '2023-02-15 18:49:43', '2023-02-15 18:50:41', NULL, ''),
(22, 2, 'Gi???i thi???u', '/page', '_self', NULL, '#000000', NULL, 2, '2023-02-15 18:49:53', '2023-02-15 18:50:41', NULL, ''),
(23, 2, 'Tham gia kh???o s??t', '', '_self', NULL, '#000000', NULL, 3, '2023-02-15 18:50:20', '2023-02-15 18:50:41', NULL, ''),
(24, 2, 'Kh???o s??t c???a sinh vi??n', '/feedback', '_self', NULL, '#000000', 23, 1, '2023-02-15 18:50:39', '2023-02-15 18:56:22', NULL, ''),
(25, 2, 'Kh???o s??t c???a c???u sinh vi??n', '/alumni', '_self', NULL, '#000000', 23, 2, '2023-02-15 18:50:58', '2023-02-15 18:56:11', NULL, ''),
(26, 2, 'Kh???o s??t c???a doanh nghi???p', '/enterprise', '_self', NULL, '#000000', 23, 3, '2023-02-15 18:51:17', '2023-02-15 18:56:34', NULL, ''),
(27, 2, 'B??i vi???t', '/blogs', '_self', NULL, '#000000', NULL, 15, '2023-02-15 18:51:27', '2023-02-15 18:51:45', NULL, ''),
(28, 2, 'Li??n h???', '/contact', '_self', NULL, '#000000', NULL, 16, '2023-02-15 18:51:55', '2023-02-15 18:51:55', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2016_01_01_000000_create_pages_table', 2),
(26, '2016_01_01_000000_create_posts_table', 2),
(27, '2016_02_15_204651_create_categories_table', 2),
(28, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2023-01-04 00:21:52', '2023-01-04 00:21:52');

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
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(2, 'browse_bread', NULL, '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(3, 'browse_database', NULL, '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(4, 'browse_media', NULL, '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(5, 'browse_compass', NULL, '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(6, 'browse_menus', 'menus', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(7, 'read_menus', 'menus', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(8, 'edit_menus', 'menus', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(9, 'add_menus', 'menus', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(10, 'delete_menus', 'menus', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(11, 'browse_roles', 'roles', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(12, 'read_roles', 'roles', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(13, 'edit_roles', 'roles', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(14, 'add_roles', 'roles', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(15, 'delete_roles', 'roles', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(16, 'browse_users', 'users', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(17, 'read_users', 'users', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(18, 'edit_users', 'users', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(19, 'add_users', 'users', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(20, 'delete_users', 'users', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(21, 'browse_settings', 'settings', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(22, 'read_settings', 'settings', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(23, 'edit_settings', 'settings', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(24, 'add_settings', 'settings', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(25, 'delete_settings', 'settings', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(26, 'browse_categories', 'categories', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(27, 'read_categories', 'categories', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(28, 'edit_categories', 'categories', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(29, 'add_categories', 'categories', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(30, 'delete_categories', 'categories', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(31, 'browse_posts', 'posts', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(32, 'read_posts', 'posts', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(33, 'edit_posts', 'posts', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(34, 'add_posts', 'posts', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(35, 'delete_posts', 'posts', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(36, 'browse_pages', 'pages', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(37, 'read_pages', 'pages', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(38, 'edit_pages', 'pages', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(39, 'add_pages', 'pages', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(40, 'delete_pages', 'pages', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(46, 'browse_questions', 'questions', '2023-01-04 00:33:35', '2023-01-04 00:33:35'),
(47, 'read_questions', 'questions', '2023-01-04 00:33:35', '2023-01-04 00:33:35'),
(48, 'edit_questions', 'questions', '2023-01-04 00:33:35', '2023-01-04 00:33:35'),
(49, 'add_questions', 'questions', '2023-01-04 00:33:35', '2023-01-04 00:33:35'),
(50, 'delete_questions', 'questions', '2023-01-04 00:33:35', '2023-01-04 00:33:35'),
(51, 'browse_students', 'students', '2023-01-04 02:06:31', '2023-01-04 02:06:31'),
(52, 'read_students', 'students', '2023-01-04 02:06:31', '2023-01-04 02:06:31'),
(53, 'edit_students', 'students', '2023-01-04 02:06:31', '2023-01-04 02:06:31'),
(54, 'add_students', 'students', '2023-01-04 02:06:31', '2023-01-04 02:06:31'),
(55, 'delete_students', 'students', '2023-01-04 02:06:31', '2023-01-04 02:06:31'),
(56, 'browse_alumnis', 'alumnis', '2023-01-05 00:21:58', '2023-01-05 00:21:58'),
(57, 'read_alumnis', 'alumnis', '2023-01-05 00:21:58', '2023-01-05 00:21:58'),
(58, 'edit_alumnis', 'alumnis', '2023-01-05 00:21:58', '2023-01-05 00:21:58'),
(59, 'add_alumnis', 'alumnis', '2023-01-05 00:21:58', '2023-01-05 00:21:58'),
(60, 'delete_alumnis', 'alumnis', '2023-01-05 00:21:58', '2023-01-05 00:21:58'),
(61, 'browse_enterprises', 'enterprises', '2023-01-05 01:35:31', '2023-01-05 01:35:31'),
(62, 'read_enterprises', 'enterprises', '2023-01-05 01:35:31', '2023-01-05 01:35:31'),
(63, 'edit_enterprises', 'enterprises', '2023-01-05 01:35:31', '2023-01-05 01:35:31'),
(64, 'add_enterprises', 'enterprises', '2023-01-05 01:35:31', '2023-01-05 01:35:31'),
(65, 'delete_enterprises', 'enterprises', '2023-01-05 01:35:31', '2023-01-05 01:35:31'),
(66, 'browse_events', 'events', '2023-01-06 20:02:46', '2023-01-06 20:02:46'),
(67, 'read_events', 'events', '2023-01-06 20:02:46', '2023-01-06 20:02:46'),
(68, 'edit_events', 'events', '2023-01-06 20:02:46', '2023-01-06 20:02:46'),
(69, 'add_events', 'events', '2023-01-06 20:02:46', '2023-01-06 20:02:46'),
(70, 'delete_events', 'events', '2023-01-06 20:02:46', '2023-01-06 20:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2023-01-04 00:21:52', '2023-01-04 00:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_01` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_02` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_03` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `name`, `email`, `question_01`, `question_02`, `question_03`, `created_at`, `updated_at`) VALUES
(1, 'Hai', 'admin2@admin.com', '4', '3', '2', '2023-01-04 00:33:55', '2023-01-04 00:33:55'),
(5, 'Hai', 'admin1@admin.com', '4', '3', '1', '2023-01-04 00:52:07', '2023-01-04 00:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2023-01-04 00:21:51', '2023-01-04 00:21:51'),
(2, 'user', 'Normal User', '2023-01-04 00:21:51', '2023-01-04 00:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(11, 'site.2022', '?????t kh???o s??t n??m 2022', '2021', NULL, 'text', 6, 'Site');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `majors` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_01` int(11) DEFAULT NULL,
  `question_02` int(11) DEFAULT NULL,
  `question_03` int(11) DEFAULT NULL,
  `question_04` int(11) DEFAULT NULL,
  `question_05` int(11) DEFAULT NULL,
  `question_06` int(11) DEFAULT NULL,
  `question_07` int(11) DEFAULT NULL,
  `question_08` int(11) DEFAULT NULL,
  `question_09` int(11) DEFAULT NULL,
  `question_10` int(11) DEFAULT NULL,
  `question_11` int(11) DEFAULT NULL,
  `question_12` int(11) DEFAULT NULL,
  `question_13` int(11) DEFAULT NULL,
  `question_14` int(11) DEFAULT NULL,
  `question_15` int(11) DEFAULT NULL,
  `question_16` int(11) DEFAULT NULL,
  `question_17` int(11) DEFAULT NULL,
  `question_18` int(11) DEFAULT NULL,
  `question_19` int(11) DEFAULT NULL,
  `question_20` int(11) DEFAULT NULL,
  `question_21` int(11) DEFAULT NULL,
  `question_22` int(11) DEFAULT NULL,
  `question_23` int(11) DEFAULT NULL,
  `question_24` int(11) DEFAULT NULL,
  `question_25` int(11) DEFAULT NULL,
  `question_26` int(11) DEFAULT NULL,
  `question_27` int(11) DEFAULT NULL,
  `question_28` int(11) DEFAULT NULL,
  `question_29` int(11) DEFAULT NULL,
  `question_30` int(11) DEFAULT NULL,
  `question_31` int(11) DEFAULT NULL,
  `question_32` int(11) DEFAULT NULL,
  `question_33` int(11) DEFAULT NULL,
  `question_34` int(11) DEFAULT NULL,
  `question_35` int(11) DEFAULT NULL,
  `question_36` int(11) DEFAULT NULL,
  `question_37` int(11) DEFAULT NULL,
  `question_38` int(11) DEFAULT NULL,
  `question_39` int(11) DEFAULT NULL,
  `question_40` int(11) DEFAULT NULL,
  `question_41` int(11) DEFAULT NULL,
  `question_42` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `date`, `course`, `class`, `majors`, `phone`, `email`, `question_01`, `question_02`, `question_03`, `question_04`, `question_05`, `question_06`, `question_07`, `question_08`, `question_09`, `question_10`, `question_11`, `question_12`, `question_13`, `question_14`, `question_15`, `question_16`, `question_17`, `question_18`, `question_19`, `question_20`, `question_21`, `question_22`, `question_23`, `question_24`, `question_25`, `question_26`, `question_27`, `question_28`, `question_29`, `question_30`, `question_31`, `question_32`, `question_33`, `question_34`, `question_35`, `question_36`, `question_37`, `question_38`, `question_39`, `question_40`, `question_41`, `question_42`, `created_at`, `updated_at`, `event_id`) VALUES
(1, 'Nguy???n Quang H???i', '17/10/2001', 'K18', 'KTPM', 'CNTT', 359808267, 'haitrang1303@gmail.com', 4, 3, 2, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 3, 3, '2023-01-04 02:14:02', '2023-01-04 02:14:02', NULL),
(10, 'Nguyen H??ng Anh', '17/10/2001', 'K18', 'KTPM', 'CNTT', 359808267, 'admin2@admin.com', 4, 4, 3, 1, 2, 3, 3, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 4, 4, 4, 4, 4, 4, 3, 3, 4, 4, 3, 2, 2, 1, 4, 4, 4, '2023-01-04 03:23:51', '2023-01-04 03:23:51', NULL),
(11, 'v??n Huy', '17/10/2001', 'K18', 'KTPM', 'CNTT', 359808267, 'superadmin@admin.com', 2, 4, 3, 2, 1, 4, 4, 4, 3, 3, 3, 4, 3, 2, 2, 2, 1, 4, 4, 3, 2, 2, 1, 2, 2, 3, 1, 3, 4, 2, 1, 3, 1, 3, 2, 1, 4, 2, 3, 4, 4, 4, '2023-01-04 03:26:00', '2023-01-04 03:33:59', NULL),
(12, 'Nguy???n Quang H???i', '17/10/2001', 'K18', 'KTPM', 'CNTT', 359808267, 'admin1@admin.com', 4, 4, 4, 3, 3, 3, 3, 4, 4, 4, 4, 2, 3, 2, 4, 4, 4, 4, 3, 3, 3, 2, 3, 2, 4, 3, 2, 1, 4, 4, 4, 4, 4, 4, 2, 1, 3, 3, 2, 2, 1, 4, '2023-01-05 03:16:00', '2023-01-06 20:16:46', 2021),
(13, 'Mr Minh Tung', '17/10/2001', 'K18', 'KTPM', 'CNTT', 23526, 'admin@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-06 20:25:49', '2023-01-06 20:25:49', 2022),
(14, 'Nguy???n Quang H???i', '17/10/2001', 'K18', 'KTPM', 'CNTT', 359808267, 'dtc1954802010095@ictu.edu.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-06 20:26:57', '2023-01-06 20:26:57', 2021),
(15, 'Nguy???n Quang H???i', '17/10/2001', 'K18', 'KTPM', 'CNTT', 359808267, 'superadmin@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-06 21:02:41', '2023-01-06 21:02:41', 2021),
(17, 'Nguy???n Quang H???i', '17/10/2001', 'K18', 'KTPM', 'CNTT', 359808267, 'superadmin@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-07 02:36:12', '2023-01-07 02:36:12', 2022),
(19, 'Nguy???n Quang H???i', '17/10/2001', 'K15', 'KTPM', 'CNTT', 359808267, 'admin@admin.com', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-09 01:43:44', '2023-01-09 01:43:44', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'P??gina', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Fun????o', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'P??ginas', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Fun????es', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(17, 'pages', 'title', 1, 'pt', 'Ol?? Mundo', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(19, 'pages', 'body', 1, 'pt', '<p>Ol?? Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(22, 'menu_items', 'title', 12, 'pt', 'Publica????es', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(25, 'menu_items', 'title', 13, 'pt', 'P??ginas', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(26, 'menu_items', 'title', 4, 'pt', 'Fun????es', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2023-01-04 00:21:52', '2023-01-04 00:21:52'),
(30, 'menu_items', 'title', 10, 'pt', 'Configura????es', '2023-01-04 00:21:52', '2023-01-04 00:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$b1vTNN1RoH5hZX12/kxjROfNaa/zuDLZpi5IBYV/BsnPgeeJuUJUG', 'eYJ1OxomFz2tzIj0ZeE0Oc5IP6cSoFACkkRtoGFwkEeAifo3Iic7ulbhLRcQ', '{\"locale\":\"vi\"}', '2023-01-04 00:21:52', '2023-01-04 03:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `enterprises`
--
ALTER TABLE `enterprises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

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
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnis`
--
ALTER TABLE `alumnis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `enterprises`
--
ALTER TABLE `enterprises`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
