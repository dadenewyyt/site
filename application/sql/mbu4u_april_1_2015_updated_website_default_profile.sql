-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2015 at 01:49 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mbu4u`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
`id` int(11) NOT NULL,
  `account_type` varchar(45) DEFAULT NULL,
  `account_owner` varchar(45) DEFAULT NULL,
  `routing_number` varchar(45) DEFAULT NULL,
  `account_number` varchar(45) DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `bank_branch` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `account_type`, `account_owner`, `routing_number`, `account_number`, `profile_id`, `bank_branch`) VALUES
(1, 'Checking', 'Dannyman', '12123123123', NULL, 1, 'DanTheMan'),
(2, 'Checking', 'Dannyman', '12123123123', NULL, 1, 'DanTheMan'),
(3, 'Checking', 'Dannyman', '12123123123', NULL, 1, 'DanTheMan'),
(4, 'Checking', 'Dannyman', '12123123123', NULL, 1, 'DanTheMan'),
(5, 'Checking', 'Dannyman', '12123123123', NULL, 1, 'DanTheMan'),
(6, 'Checking', 'Dannyman', '12123123123', NULL, 1, 'DanTheMan'),
(7, 'Checking', 'Dannyman', '12123123123', NULL, 1, 'DanTheMan'),
(8, 'Checking', 'Dannyman', '12123123123', NULL, 1, 'DanTheMan'),
(9, 'Checking', 'Dannyman', '12123123123', NULL, 1, 'DanTheMan'),
(10, 'Checking', 'asasd', '12123123123', NULL, 1, 'asdasdas'),
(11, 'Checking', 'asasd', '12123123123', NULL, 1, 'asdasdas'),
(12, 'Checking', 'asasd', '12123123123', NULL, 1, 'asdasdas'),
(13, 'Checking', 'asasd', '12123123123', NULL, 1, 'asdasdas'),
(14, 'Checking', 'asasd', '12123123123', NULL, 1, 'asdasdas'),
(15, 'Checking', 'Dannyman', '12123123123', NULL, 1, 'DanTheMan');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `catagory` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(45) DEFAULT NULL,
  `commeted_to_id` int(11) DEFAULT NULL,
  `commeted_by_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `comment_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(45) DEFAULT NULL,
  `deleted_by_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE IF NOT EXISTS `followers` (
`id` int(11) NOT NULL,
  `follower_profile_id` int(11) DEFAULT NULL,
  `following_profile_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `follow_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `freinds`
--

CREATE TABLE IF NOT EXISTS `freinds` (
`id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `request_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `accept_date` datetime DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
`id` int(11) NOT NULL,
  `like_profile_id` int(11) DEFAULT NULL,
  `like_product_id` int(11) DEFAULT NULL,
  `like_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `like_comment_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `madebyus4u_sessions`
--

CREATE TABLE IF NOT EXISTS `madebyus4u_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `madebyus4u_sessions`
--

INSERT INTO `madebyus4u_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('1c86916e53b7e2f8bf6785f3642485e0', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.94 Safari/537.36', 1427965100, 'a:9:{s:8:"identity";s:20:"dadenewyyt@gmail.com";s:8:"username";s:7:"dadenew";s:5:"email";s:20:"dadenewyyt@gmail.com";s:7:"user_id";s:1:"1";s:14:"old_last_login";s:10:"1427718355";s:9:"logged_in";b:1;s:10:"profile_id";s:1:"1";s:13:"profile_fname";s:6:"Daniel";s:17:"flash:new:message";s:47:"<p>The QWebsite address field is required.</p>\n";}'),
('710b199abf6c34a7984d126db7e15c51', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.94 Safari/537.36', 1427975158, 'a:9:{s:9:"user_data";s:0:"";s:8:"identity";s:20:"dadenewyyt@gmail.com";s:8:"username";s:7:"dadenew";s:5:"email";s:20:"dadenewyyt@gmail.com";s:7:"user_id";s:1:"1";s:14:"old_last_login";s:10:"1427962431";s:9:"logged_in";b:1;s:10:"profile_id";s:1:"1";s:13:"profile_fname";s:6:"Daniel";}'),
('f678b63638c80c373ec926629b76fb48', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.94 Safari/537.36', 1427957290, '');

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
`id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `full_path` varchar(255) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `title`, `desc`, `file_name`, `full_path`, `type`, `profile_id`, `store_id`, `product_id`) VALUES
(1, NULL, NULL, 'profile_image87439.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/avatar/', 'profile_image', 1, NULL, NULL),
(2, NULL, NULL, 'store_image24564.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/store/', 'store_image', 1, 1, NULL),
(3, NULL, NULL, 'product_image1044.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/products/', 'product_image', 1, NULL, 1),
(4, NULL, NULL, 'product_image92062.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/products/', 'product_image', 1, NULL, 1),
(5, NULL, NULL, 'product_image74035.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/products/', 'product_image', 1, NULL, 1),
(6, NULL, NULL, 'product_image51309.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/products/', 'product_image', 1, NULL, 1),
(7, NULL, NULL, 'product_image72564.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/products/', 'product_image', 1, NULL, 1),
(8, NULL, NULL, 'store_image60647.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/store/', 'store_image', 1, 9, NULL),
(9, NULL, NULL, 'store_image38764.png', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/store/', 'store_image', 1, 10, NULL),
(10, NULL, NULL, 'store_image8512.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/store/', 'store_image', 1, 11, NULL),
(11, NULL, NULL, 'store_image90918.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/store/', 'store_image', 1, 12, NULL),
(12, NULL, NULL, 'store_image58896.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/store/', 'store_image', 1, 13, NULL),
(13, NULL, NULL, 'product_image90136.png', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/products/', 'product_image', 1, NULL, 13),
(14, NULL, NULL, 'store_image69659.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/store/', 'store_image', 1, 14, NULL),
(15, NULL, NULL, 'product_image89926.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/products/', 'product_image', 1, NULL, 14),
(16, NULL, NULL, 'store_image36261.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/store/', 'store_image', 1, 15, NULL),
(17, NULL, NULL, 'product_image49496.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/products/', 'product_image', 1, NULL, 15),
(18, NULL, NULL, 'product_image78100.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/products/', 'product_image', 1, NULL, 15),
(19, NULL, NULL, 'product_image63138.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/products/', 'product_image', 1, NULL, 15),
(20, NULL, NULL, 'product_image55633.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/products/', 'product_image', 1, NULL, 15),
(21, NULL, NULL, 'product_image92355.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/1/products/', 'product_image', 1, NULL, 15);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`type`, `name`, `migration`) VALUES
('app', 'default', '001_create_users'),
('app', 'default', '001_create_messages'),
('app', 'default', '002_create_comments'),
('app', 'default', '003_create_users'),
('app', 'default', '002_create_profiles');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
`id` int(11) NOT NULL,
  `payment_type` varchar(45) NOT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `address1` varchar(45) DEFAULT NULL,
  `address2` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `pamount` decimal(18,2) NOT NULL,
  `is_success` int(11) DEFAULT NULL,
  `payment_gatway` varchar(45) DEFAULT 'authorize.net',
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(45) DEFAULT 'system'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `price` decimal(18,0) DEFAULT '0',
  `rate_id` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `shipping` varchar(45) DEFAULT NULL,
  `variation` varchar(45) DEFAULT NULL,
  `sub_variation` varchar(45) DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `sprice` decimal(18,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rate_id`, `category`, `shipping`, `variation`, `sub_variation`, `profile_id`, `sprice`, `quantity`) VALUES
(1, 'Prodcut', 'Product 1', '12', NULL, '1', NULL, '0', '0', 1, '12.00', 12),
(2, 'Prodcut', 'Product 1', '12', NULL, '1', NULL, NULL, NULL, 1, '12.00', 12),
(3, 'Product', 'Product 1', '12', NULL, '1', NULL, '0', '0', 1, '12.00', 12),
(4, 'Product Name', 'product Description', '12', NULL, '0', NULL, '#', '#', 1, '12.00', 12),
(5, 'Product Name', 'product Description', '12', NULL, '0', NULL, '#', '#', 1, '12.00', 12),
(6, 'Product Name', 'product Description', '12', NULL, '0', NULL, '#', '#', 1, '12.00', 12),
(7, 'Product Name', 'product Description', '12', NULL, '0', NULL, '#', '#', 1, '12.00', 12),
(8, 'Product Name', 'product Description', '12', NULL, '1', NULL, '0', '0', 1, '12.00', 12),
(9, 'Product Name', 'product Description', '12', NULL, '2', NULL, '0', NULL, 1, '12.00', 12),
(10, 'asdasdsd', 'utyuty', '12', NULL, '0', NULL, '1', NULL, 1, '12.00', 12),
(11, 'asdasdsd', 'utyuty', '12', NULL, '0', NULL, NULL, NULL, 1, '12.00', 12),
(12, 'asdasdsd', 'utyuty', '12', NULL, '0', NULL, '#', '#', 1, '12.00', 12),
(13, 'asdasdsd', 'utyuty', '12', NULL, '0', NULL, '#', '#', 1, '12.00', 12),
(14, 'asdasdsd', 'utyuty', '12', NULL, '0', NULL, '#', '#', 1, '12.00', 12),
(15, 'asdasdasd', 'Product Descriptiona Product Descriptiona Pro', '12', NULL, '0', NULL, '1', '0', 1, '12.00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
`id` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `zipcode` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `bioinfo` varchar(255) DEFAULT NULL,
  `is_profile_verified` bit(1) DEFAULT b'0',
  `job_title` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) unsigned DEFAULT NULL,
  `is_seller` bit(1) DEFAULT b'0',
  `profile_image_id` int(11) DEFAULT NULL,
  `created_by` datetime DEFAULT CURRENT_TIMESTAMP,
  `join_date` varchar(45) DEFAULT NULL,
  `website` varchar(45) DEFAULT 'http://www.madebyus4u.com/',
  `linkedin` varchar(45) DEFAULT NULL,
  `facebook` varchar(45) DEFAULT NULL,
  `twitter` varchar(45) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `fname`, `lname`, `gender`, `zipcode`, `city`, `state`, `bioinfo`, `is_profile_verified`, `job_title`, `company_name`, `created_date`, `user_id`, `is_seller`, `profile_image_id`, `created_by`, `join_date`, `website`, `linkedin`, `facebook`, `twitter`, `account_id`) VALUES
(1, 'Daniel', 'adenew', NULL, '63011', 'Addis Ababa', 'Nevada', 'I work as a Developer for YYT software and OneWorldSolution LLC, USA.', b'1', 'Software Engineering', 'Addis ABS', '2015-03-12 11:14:08', 1, b'1', 1, '2015-03-12 11:14:08', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
`id` int(11) NOT NULL,
  `state` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state`) VALUES
(2, 'Alabama'),
(3, 'Alaska'),
(4, 'Arizona'),
(5, 'Arkansas'),
(6, 'California'),
(7, 'Colorado'),
(8, 'Connecticut'),
(9, 'Delaware'),
(10, 'District Of Columbia'),
(11, 'Florida'),
(12, 'Georgia'),
(13, 'HI'),
(14, 'Idaho'),
(15, 'Illinois'),
(16, 'Indiana'),
(17, 'Iowa'),
(18, 'Kansas'),
(19, 'Kentucky'),
(20, 'Louisiana'),
(21, 'Maine'),
(22, 'Maryland'),
(23, 'Massachusetts'),
(24, 'Michigan'),
(25, 'Minnesota'),
(26, 'Mississippi'),
(27, 'Missouri'),
(28, 'Montana'),
(29, 'Nebraska'),
(30, 'Nevada'),
(31, 'New Hampshire'),
(32, 'New Jersey'),
(33, 'New Mexico'),
(34, 'North Carolina'),
(35, 'North Dakota'),
(36, 'Ohio'),
(37, 'Oklahoma'),
(38, 'Oregon'),
(39, 'Pennsylvania'),
(40, 'Rhode Island'),
(41, 'South Carolina'),
(42, 'South Dakota'),
(43, 'Tennessee'),
(44, 'Texas'),
(45, 'Utah'),
(46, 'Vermont'),
(47, 'Virginia'),
(48, 'Washington'),
(49, 'West Virginia'),
(50, 'Wisconsin'),
(51, 'Wyoming');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
`id` int(11) NOT NULL,
  `store_name` varchar(45) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `owner_profile_id` int(11) DEFAULT NULL,
  `is_launched` bit(1) DEFAULT b'0',
  `is_paid` bit(1) DEFAULT b'0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `store_name`, `desc`, `owner_profile_id`, `is_launched`, `is_paid`) VALUES
(1, 'Store 1', ' Store 2', 1, b'1', b'1'),
(2, 'Store 1', ' Store 2', 1, b'1', b'1'),
(3, 'Store 1', 'Store 2 ', 1, b'1', b'1'),
(4, 'Store name 1', 'Store Description 1', 1, b'1', b'1'),
(5, 'Store name 1', 'Store Description 1', 1, b'1', b'1'),
(6, 'Store name 1', 'Store Description 1', 1, b'1', b'1'),
(7, 'Store name 1', 'Store Description 1', 1, b'1', b'1'),
(8, 'Store name 1', 'Store Description 1 ', 1, b'1', b'1'),
(9, 'Store name 1', 'Store Description 1 ', 1, b'1', b'1'),
(10, 'wsdwfds', ' sdfsdfsdf', 1, b'1', b'1'),
(11, 'wsdwfds', ' sdfsdfsdf', 1, b'1', b'1'),
(12, 'wsdwfds', ' sdfsdfsdf', 1, b'1', b'1'),
(13, 'wsdwfds', ' sdfsdfsdf', 1, b'1', b'1'),
(14, 'wsdwfds', ' sdfsdfsdf', 1, b'1', b'1'),
(15, 'asdasd', ' asdasd', 1, b'1', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `memeber_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `memeber_id`) VALUES
(1, '::1', 'dadenew', '$2y$08$ykpy45sZisUIsKjFSBTltOPOXrekDZhp8lFSfFkhcfrKRfl1HDVRW', NULL, 'dadenewyyt@gmail.com', 'e5d894a5b9db973f718bf8230f9776fad181322e', NULL, NULL, NULL, 1426148048, 1427975249, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_profile_account_id` (`profile_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_parent_id` (`parent_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `unique_email` (`email`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freinds`
--
ALTER TABLE `freinds`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `madebyus4u_sessions`
--
ALTER TABLE `madebyus4u_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_profile_id` (`profile_id`), ADD KEY `fk_store_id` (`store_id`), ADD KEY `fk_product_id` (`product_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_profile_payment` (`profile_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_product_profile_id` (`profile_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_memebers_user` (`user_id`), ADD KEY `fk_memeber_state` (`state`), ADD KEY `fk_mmeber_media` (`profile_image_id`), ADD KEY `fk_account_profile_id` (`account_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
 ADD PRIMARY KEY (`id`), ADD KEY `state` (`state`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_profile_store_id` (`owner_profile_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `user_memeber_fk` (`memeber_id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `freinds`
--
ALTER TABLE `freinds`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
ADD CONSTRAINT `fk_profile_account_id` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
ADD CONSTRAINT `fk_parent_id` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `medias`
--
ALTER TABLE `medias`
ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_id` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
ADD CONSTRAINT `fk_store_id` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
ADD CONSTRAINT `fk_profile_payment` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
ADD CONSTRAINT `fk_product_profile_id` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
ADD CONSTRAINT `fk_account_profile_id` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_member_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_mmeber_media` FOREIGN KEY (`profile_image_id`) REFERENCES `medias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
ADD CONSTRAINT `fk_profile_store_id` FOREIGN KEY (`owner_profile_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `user_memeber_fk` FOREIGN KEY (`memeber_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
