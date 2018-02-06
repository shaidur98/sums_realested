-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2018 at 12:54 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sums_realested`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date DEFAULT NULL,
  `modified_at` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `created_at`, `modified_at`, `status`) VALUES
('1', 'ergf', 'sdggsdg', 'sgsdgsgsgs', '2018-01-02', '2018-01-10 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_details` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_name`, `image_title`, `image_details`, `created_at`, `modified_at`, `status`) VALUES
('20170815073342-127001', '1.jpg', '1st gallery Item', '<p>Nullam id dolor id nibh ultricies vehicula.</p>', '2017-08-15 23:33:42', '2018-01-30 00:00:00', 0),
('20180130070029-1', '2.jpg', '2nd gallery Item', '<p>Nullam id dolor id nibh ultricies vehicula.</p>', '0000-00-00 00:00:00', '2018-01-30 00:00:00', 0),
('20180130071042-1', '3.jpg', '3rd gallery Item', '<p>Nullam id dolor id nibh ultricies vehicula.</p>', '0000-00-00 00:00:00', '2018-01-30 00:00:00', 0),
('20180130120741-1', '4.jpg', '4th gallery Item', '<p>Nullam id dolor id nibh ultricies vehicula.</p>', '2018-01-30 00:00:00', '0000-00-00 00:00:00', 1),
('20180130120903-1', '5.jpg', '5th gallery Item', '<p>Nullam id dolor id nibh ultricies vehicula.</p>', '2018-01-30 00:00:00', '0000-00-00 00:00:00', 1),
('20180130120954-1', '6.jpg', '6th gallery Item', '<p>Nullam id dolor id nibh ultricies vehicula.</p>', '2018-01-30 00:00:00', '0000-00-00 00:00:00', 1),
('20180130121045-1', '7.jpg', '6th gallery Item', '<p>Nullam id dolor id nibh ultricies vehicula</p>', '2018-01-30 00:00:00', '0000-00-00 00:00:00', 1),
('20180130121139-1', '8.jpg', '5th gallery Item', '<p>Nullam id dolor id nibh ultricies vehicula.</p>', '2018-01-30 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_image_category`
--

CREATE TABLE `gallery_image_category` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery_image_category`
--

INSERT INTO `gallery_image_category` (`id`, `name`, `icon`, `status`, `created_at`, `modified_at`) VALUES
('20170921061609-127001', 'Art Work', 'cellphone-hoarding2.jpg', 1, '2017-09-21 16:16:09', NULL),
('20170921061627-127001', 'Creative', 'laptop.jpg', 1, '2017-09-21 16:16:27', NULL),
('20170921061655-127001', 'Nature', 'brand_desktop.jpg', 1, '2017-09-21 16:16:55', NULL),
('20170921061724-127001', 'Out Side', 'clone_desktops.jpg', 1, '2017-09-21 16:17:24', NULL),
('20170921061805-127001', 'Photography', 'category_df84e43e2375fd2b52ea2305db55b88d.jpg', 1, '2017-09-21 16:18:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `post_position_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `post_details` text COLLATE utf8_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_position_id`, `post_details`, `featured_image`, `status`, `created_at`, `modified_at`) VALUES
('20170922084528-127001', 'Our Company', '1', '<p>Sums Real Estate of Companies Limited is incorporated with the Registrar of Joint Stock Companies and Established in 1988,Sums Real Estate Ensure superior products and services quality at a competitive cost and establish long-term relationship with our stakeholders.</p>\r\n<p>Founded More Than 25 years ago.We received &ldquo;Best Distributor Award-2012&Prime; from airtel</p>', 'dev1.png', 1, '0000-00-00 00:00:00', NULL),
('20180129055537-1', 'Why Choose Us?', '2', '<p>Apartment layout All apartments in the complex are well planned to meet the needs of the residents and will provide them with the convenience desired in high quality apartments. The homogeneous tiled floor, with high quality tiles and sanitary wares, impressive light fixtures will sliding aluminum windows, carefully fitted wooden door frames and smooth finished plastic walls with differentiated these apartments form all others in locality. List and ventilation is emphasized throughout the design with carefully arranged planters, verandahs and windows. General Amenities of Apartments &bull; Heave scoured entrance gate with decorative lamps and logos of the complex &bull; Spacious ground floor car park and drive way &bull; Drivers waiting rooms and toilet &bull; Impressive lobby, receton area and staircase with concierge desk &bull; <br /><br />All structural materials including steel, cement, bricks, Dimar sand and other aggregates etc. of highest standard and screened for quality including laboratory testing. &bull; Direct supervision of every stage of construction by a team of experienced and qualified civil engineers to ensure highest quality of workmanship.</p>', 'default.jpg', 1, '0000-00-00 00:00:00', NULL),
('20180129055629-1', 'Accordion Heading Text Item # 1 ', '3', '<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>', 'default.jpg', 1, '0000-00-00 00:00:00', NULL),
('20180129060230-1', ' Accordion Heading Text Item # 2 ', '3', '<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>', 'Shaidur_photo_(Smat_Boy).jpg', 1, '0000-00-00 00:00:00', NULL),
('20180129061124-1', ' Accordion Heading Text Item # 3 ', '3', '<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>', 'Ashish.png', 0, '0000-00-00 00:00:00', NULL),
('20180129075013-1', 'Accordion Heading Text Item # 4 ', '3', '<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>', 'default.jpg', 1, '0000-00-00 00:00:00', NULL),
('20180130122932-1', 'Why Choose Us?', '4', '<p>Apartment layout All apartments in the complex are well planned to meet the needs of the residents and will provide them with the convenience desired in high quality apartments. The homogeneous tiled floor, with high quality tiles and sanitary wares, impressive light fixtures will sliding aluminum windows, carefully fitted wooden door frames and smooth finished plastic walls with differentiated these apartments form all others in locality. List and ventilation is emphasized throughout the design with carefully arranged planters, verandahs and windows. General Amenities of Apartments &bull; Heave scoured entrance gate with decorative lamps and logos of the complex &bull; Spacious ground floor car park and drive way &bull; Drivers waiting rooms and toilet &bull; Impressive lobby, receton area and staircase with concierge desk &bull; <br /><br />All structural materials including steel, cement, bricks, Dimar sand and other aggregates etc. of highest standard and screened for quality including laboratory testing. &bull; Direct supervision of every stage of construction by a team of experienced and qualified civil engineers to ensure highest quality of workmanship.</p>', 'default.jpg', 1, '2018-01-30 12:29:32', NULL),
('20180130123240-1', 'Amenities', '5', '<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>', 'default.jpg', 1, '2018-01-30 12:32:40', NULL),
('20180130123440-1', 'Awesome Design', '6', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>', 'default.jpg', 1, '0000-00-00 00:00:00', NULL),
('20180130123614-1', 'FontAwesome', '6', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>', 'default.jpg', 1, '2018-01-30 12:36:14', NULL),
('20180130123715-1', 'Bootstrap', '6', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>', 'default.jpg', 1, '2018-01-30 12:37:15', NULL),
('20180130123840-1', 'SEO Ready', '6', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>', 'default.jpg', 1, '2018-01-30 12:38:40', NULL),
('20180130124118-1', 'Fully Responsive', '6', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>', 'default.jpg', 1, '2018-01-30 12:41:18', NULL),
('20180130124208-1', 'CSS3 + HTML5', '6', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>', 'default.jpg', 1, '2018-01-30 12:42:08', NULL),
('20180130124308-1', 'Our Gallery', '7', '<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>\r\n<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>', 'default.jpg', 1, '2018-01-30 12:43:08', NULL),
('20180130124433-1', 'Get in Touch', '8', '<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>\r\n<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>', 'default.jpg', 1, '2018-01-30 12:44:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_positions`
--

CREATE TABLE `post_positions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_positions`
--

INSERT INTO `post_positions` (`id`, `position_name`, `icon`, `status`, `created_at`, `modified_at`) VALUES
('1', 'Company page-Top post', '', 1, '2018-01-28 07:41:15', NULL),
('2', 'company page-left post', '', 1, '2018-01-28 07:42:06', NULL),
('3', 'Company Page-Accordion', '', 1, '2018-01-28 07:57:28', NULL),
('4', 'company page-right post', '', 1, '2018-01-28 07:42:34', NULL),
('5', 'Project Page-Top post', '', 1, '2018-01-28 07:45:50', NULL),
('6', 'project page-bullet post', '', 1, '2018-01-28 07:47:29', NULL),
('7', 'Gallery Page-Top post', '', 1, '2018-01-28 07:49:28', NULL),
('8', 'Contact Page-Top Post', '', 1, '2018-01-28 07:52:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `project_overview` text COLLATE utf8_unicode_ci NOT NULL,
  `project_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type_of_project` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `build_up_area` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_of_floors` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apartment_floor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bed_room` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bath_room` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `collection` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `launch_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completion_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `floor_plan_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `location_details` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_title`, `project_description`, `project_overview`, `project_image`, `location`, `type_of_project`, `build_up_area`, `number_of_floors`, `apartment_floor`, `size`, `bed_room`, `bath_room`, `collection`, `launch_date`, `completion_date`, `project_status`, `floor_plan_image`, `location_details`, `created_at`, `modified_at`, `status`) VALUES
('20180129112932-1', 'Beauty Mansion', '', '', 'beautymansion2.jpg', 'Residential Area Nearest Of Mohananda,Rajshahi', 'A-B', '10.25 Katha', 'G+7', '1-2', '1300/1280 sft.', '3', '4', 'Classic Collection', 'December 1, 2017 ', 'March 31, 2020', 'On Going Project', 'Aynal.png', '<p>&nbsp;xgxgdxbxbx</p>', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
('20180130114237-1', 'Prio Sums Tower', '<p>Residential Area Nearest Of Padma Abashik</p>', '<p>Residential Area Nearest Of Padma Abashik</p>', 'img6.jpg', 'Residential Area Nearest Of Padma Abashik', 'A', '10.25 Katha', 'G+7', '1-2', '1313 sft.', '3', '4', 'Classic Collection', 'December 1, 2017 ', 'March 31, 2020', 'On Going Project', 'PreoSUMS_Tower1.png', '<p>kls sfsf lksfsk fslfks fslfksd fsdlkfd sflkjsf sflks flskf sfl</p>', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
('20180130115511-1', 'Sums Amena Tower', '<p>jkshf kakjfa fkjahf akjfhaskfj jksfhksdjfhskhgkshgskhskj skjs gskjg sk</p>', '', 'sums-amena3.jpg', 'Housing Estate,Uposhor,Rajshahi', 'A-B', '10.25 Katha', 'G+6', '1st-6th', '1200/1215 sft.', '3', '3', 'Classic Collection', 'December 1, 2017 ', 'March 31, 2020', 'On Going Project', 'default.jpg', '<p>rgds gag ag a gag a gaga gag ag a</p>', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
('20180130115956-1', 'Sums Munira Tower', '<p>dfhshshs&nbsp; hsehsjvkvkvkjs fsajkf&nbsp; afafaf hkfakj jafk afkja ajkf akf akfj ahfkjahfka hfka akj fak faha</p>', '<p>lksdjslk fsklfj flksjflskjflsfj sf l fsdlf slf sfljflkjflsfjlsfj slkfsj flks</p>', 'sums-monira41.jpg', 'Housing Estate,Uposhor,Rajshahi', 'A-B', '10.25 Katha', 'G+6', '1st-6th', '1200/1215 sft.', '3', '3', 'Classic Collection', 'December 1, 2017 ', 'March 31, 2020', 'On Going Project', 'amena1.png', '<p>sdgsgsgs g ssg sg s sg sgs gsgs sgs gs s g</p>', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_status_category`
--

CREATE TABLE `project_status_category` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_status_category`
--

INSERT INTO `project_status_category` (`id`, `name`, `icon`, `status`, `created_at`, `modified_at`) VALUES
('20170921061609-127001', 'Cell Phones', 'cellphone-hoarding2.jpg', 1, '2017-09-21 16:16:09', NULL),
('20170921061627-127001', 'Laptops', 'laptop.jpg', 1, '2017-09-21 16:16:27', NULL),
('20170921061655-127001', 'Brand Desktops', 'brand_desktop.jpg', 1, '2017-09-21 16:16:55', NULL),
('20170921061724-127001', 'Clone Desktops', 'clone_desktops.jpg', 1, '2017-09-21 16:17:24', NULL),
('20170921061805-127001', 'Computer Accesories', 'category_df84e43e2375fd2b52ea2305db55b88d.jpg', 1, '2017-09-21 16:18:05', NULL),
('20170921061818-127001', 'Peripheral Devices', 'tmp781061955837231106.jpg', 1, '2017-09-21 16:18:18', NULL),
('20170921061925-127001', 'I-Pads', 'ipad-mini-ipad-air-ipad-pro-stack-angle-hero_1.jpg', 1, '2017-09-21 16:19:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_setup`
--

CREATE TABLE `site_setup` (
  `id` int(10) NOT NULL,
  `shop_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_setup`
--

INSERT INTO `site_setup` (`id`, `shop_name`, `email`, `mobile_no`, `address`, `owner`, `logo`, `status`) VALUES
(2, 'Sums Realestate', 'srcl2013@gmail.com', '01718878797', 'Corporate office<br>\r\nHouse # 562/563,Road No.#1/A<br>\r\nPadma Residential Area,Rajshahi-6207. <br>', 'Sums Realestate', 'logo.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE `slider_image` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`id`, `img_name`, `img_title`, `created_at`, `modified_at`, `status`) VALUES
('20170815064624-127001', 'default.jpg', 'New Slider Image', '2017-08-15 22:46:24', '0000-00-00 00:00:00', 1),
('20170815065017-127001', 'default.jpg', 'fgffjf', '2017-08-15 22:50:17', '0000-00-00 00:00:00', 1),
('20170815065043-127001', '33.jpg', 'dfgdgdg', '2017-08-15 22:50:43', '0000-00-00 00:00:00', 1),
('20170815073342-127001', 'default.jpg', 'dfgdgdg', '2017-08-15 23:33:42', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `email`, `phone`, `designation`, `photo`, `created_at`, `modified_at`, `status`) VALUES
('2', 'Engr. Selim Reza', 'newuser@gmail.com', '456456464', 'Managing Director', 'Shaidur_photo_(Smat_Boy).jpg', '2017-09-16 12:08:14', '2018-01-30 09:03:03', 0),
('20170711072506-2', 'S.M. Shaidur Rahman', 'raton98083@gmail.com', '+880 1716787416', 'Web Developer', 'team2.png', '2017-07-06 04:11:40', '2018-01-30 12:15:55', 0),
('20180130083604-1', 'New Member One', 'one@gmail.com', '456636363', 'Chairman', 'default.jpg', '2018-01-29 18:00:00', NULL, 1),
('20180130083814-1', 'New Member Two', 'two@gmail.com', '50000456636363', 'Vice Chairman', 'Shaidur_photo.jpg', '2018-01-29 18:00:00', '2018-01-30 09:02:49', 0),
('3', 'Shohid Hasan Shuvo', 'shuvo2014ovi@gmail.com', '01732827536', 'Web Desinger', 'team3.png', '2018-01-13 12:24:58', '2018-01-30 12:15:39', 0),
('4', 'Md.Samrat Hossain', 'samratlits@gmail.com', '01731942143', 'Hardware Engineer', 'team1.png', '2018-01-13 12:24:58', '2018-01-30 12:15:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `designation`, `work_place`, `password`, `role`, `photo`, `created_at`, `modified_at`) VALUES
('2', 'new user', 'newuser@gmail.com', 'user', '', '827ccb0eea8a706c4c34a16891f84e7b', '', NULL, '2017-09-16 12:08:14', NULL),
('20170711072506-2', 'Mr. Admin', 'admin@gmail.com', 'Supper Admin', 'Rajshahi', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'default.png', '2017-07-06 04:11:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `gallery_image_category`
--
ALTER TABLE `gallery_image_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_positions`
--
ALTER TABLE `post_positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_status_category`
--
ALTER TABLE `project_status_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_setup`
--
ALTER TABLE `site_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `site_setup`
--
ALTER TABLE `site_setup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
