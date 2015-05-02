-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2015 at 04:23 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1-log
-- PHP Version: 5.5.9-1ubuntu4.9

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_type` varchar(45) DEFAULT NULL,
  `account_owner` varchar(45) DEFAULT NULL,
  `routing_number` varchar(45) DEFAULT NULL,
  `account_number` varchar(45) DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `bank_branch` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_profile_account_id` (`profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `account_type`, `account_owner`, `routing_number`, `account_number`, `profile_id`, `bank_branch`) VALUES
(1, 'Checking', '1212', '12123123123', NULL, 1, '1212'),
(2, 'Checking', 'Craig Robinson', '123456789', NULL, 2, 'Chase'),
(3, 'Checking', 'Craig Robinson', '123456789', NULL, 2, 'Chase Bank'),
(4, 'Checking', 'Craig Robinson', '123456789', NULL, 2, 'Chase Bank');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `catagory` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_parent_id` (`parent_id`)
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
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
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
  `comment_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `update_by` varchar(45) DEFAULT NULL,
  `deleted_by_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE IF NOT EXISTS `followers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `follower_profile_id` int(11) DEFAULT NULL,
  `following_profile_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `follow_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `freinds`
--

CREATE TABLE IF NOT EXISTS `freinds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `request_date` datetime DEFAULT NULL,
  `accept_date` datetime DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `like_profile_id` int(11) DEFAULT NULL,
  `like_product_id` int(11) DEFAULT NULL,
  `like_date` datetime DEFAULT NULL,
  `like_comment_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
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
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `madebyus4u_sessions`
--

INSERT INTO `madebyus4u_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('02b00d277f76d12f795ef06444b728e2', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.94 Safari/537.36', 1426145082, ''),
('173003981540c10094ef3d78adf28eb2', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.94 Safari/537.36', 1426148047, 'a:5:{s:9:"user_data";s:0:"";s:7:"user_id";i:1;s:15:"activation_code";s:40:"e5d894a5b9db973f718bf8230f9776fad181322e";s:5:"email";s:20:"dadenewyyt@gmail.com";s:9:"firstname";s:6:"Daniel";}');

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `full_path` varchar(255) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_profile_id` (`profile_id`),
  KEY `fk_store_id` (`store_id`),
  KEY `fk_product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `title`, `desc`, `file_name`, `full_path`, `type`, `profile_id`, `store_id`, `product_id`) VALUES
(1, NULL, NULL, 'profile_image83456.jpg', '/var/www/dev/uploads/profile/1/avatar/', 'profile_image', 1, NULL, NULL),
(8, NULL, NULL, 'profile_image28055.jpg', '/var/www/dev/uploads/profile/2/avatar/', 'profile_image', 2, NULL, NULL),
(9, NULL, NULL, 'profile_image64038.jpg', '/var/www/dev/uploads/profile/3/avatar/', 'profile_image', 3, NULL, NULL),
(16, NULL, NULL, 'store_image80050.jpg', '/var/www/dev/uploads/profile/1/store/', 'store_image', 1, 1, NULL),
(17, NULL, NULL, 'product_image20716.jpg', '/var/www/dev/uploads/profile/1/products/', 'product_image', 1, NULL, 1),
(18, NULL, NULL, 'store_image5148.jpg', '/var/www/dev/uploads/profile/2/store/', 'store_image', 2, 2, NULL),
(19, NULL, NULL, 'product_image4355.jpg', '/var/www/dev/uploads/profile/2/products/', 'product_image', 2, NULL, 2),
(20, NULL, NULL, 'product_image50813.jpg', '/var/www/dev/uploads/profile/2/products/', 'product_image', 2, NULL, 2),
(21, NULL, NULL, 'product_image71154.jpg', '/var/www/dev/uploads/profile/2/products/', 'product_image', 2, NULL, 2),
(22, NULL, NULL, 'store_image33265.jpg', '/var/www/dev/uploads/profile/2/store/', 'store_image', 2, 3, NULL),
(23, NULL, NULL, 'product_image11873.jpg', '/var/www/dev/uploads/profile/2/products/', 'product_image', 2, NULL, 3),
(24, NULL, NULL, 'product_image69978.jpg', '/var/www/dev/uploads/profile/2/products/', 'product_image', 2, NULL, 3),
(25, NULL, NULL, 'product_image48730.jpg', '/var/www/dev/uploads/profile/2/products/', 'product_image', 2, NULL, 3),
(26, NULL, NULL, 'store_image78387.jpg', '/var/www/dev/uploads/profile/2/store/', 'store_image', 2, 4, NULL),
(27, NULL, NULL, 'product_image50813.jpg', '/var/www/dev/uploads/profile/2/products/', 'product_image', 2, NULL, 4),
(28, NULL, NULL, 'product_image67739.jpg', '/var/www/dev/uploads/profile/2/products/', 'product_image', 2, NULL, 4),
(29, NULL, NULL, 'product_image50813.jpg', '/var/www/dev/uploads/profile/2/products/', 'product_image', 2, NULL, 4);

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT 'system',
  PRIMARY KEY (`id`),
  KEY `fk_profile_payment` (`profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_profile_id` (`profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rate_id`, `category`, `shipping`, `variation`, `sub_variation`, `profile_id`, `sprice`, `quantity`) VALUES
(1, 'Prosuct Live', 'Product For test only', 12, NULL, '1', NULL, '0', '0', 1, 12.00, 12),
(2, 'Tshits', 'These are the one word product', 25, NULL, '0', NULL, '14', NULL, 2, 25.00, 23),
(3, 'Las Vegas Neon Sign', 'This is a Neon Sign', 50, NULL, '9', NULL, '4', NULL, 2, 50.00, 2),
(4, 'Tshirts', 'This s aljalksdjflkas aklsdja lkadsjf lasjdfl', 25, NULL, '0', NULL, '14', NULL, 2, 25.00, 5);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `created_date` datetime DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `is_seller` bit(1) DEFAULT b'0',
  `profile_image_id` int(11) DEFAULT NULL,
  `created_by` datetime DEFAULT NULL,
  `join_date` varchar(45) DEFAULT NULL,
  `website` varchar(45) DEFAULT 'http://www.madebyus4u.com',
  `linkedin` varchar(45) DEFAULT NULL,
  `facebook` varchar(45) DEFAULT NULL,
  `twitter` varchar(45) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_memebers_user` (`user_id`),
  KEY `fk_memeber_state` (`state`),
  KEY `fk_mmeber_media` (`profile_image_id`),
  KEY `fk_account_profile_id` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `fname`, `lname`, `gender`, `zipcode`, `city`, `state`, `bioinfo`, `is_profile_verified`, `job_title`, `company_name`, `created_date`, `user_id`, `is_seller`, `profile_image_id`, `created_by`, `join_date`, `website`, `linkedin`, `facebook`, `twitter`, `account_id`) VALUES
(1, 'Daniel', 'adenew', NULL, '63011', 'Addis Ababa', 'Nevada', 'Works at YYT software .', b'1', 'Software Engineer', 'YYT Software', '2015-03-12 11:14:08', 1, b'0', 1, '2015-03-12 11:14:08', NULL, 'http://www.madebyus4u.com', NULL, NULL, NULL, NULL),
(2, 'Craig', 'Robinson', NULL, '891117', 'Las Vegas', 'Nevada', 'business owner', b'1', 'Project Manager', 'YYT Developer', NULL, 2, b'0', 8, NULL, NULL, 'www.yytdevelopment.com', NULL, NULL, NULL, NULL),
(3, 'Ice', 'cube', NULL, '63011', 'USA', 'Louisiana', 'developer', b'1', '', '', NULL, 3, b'0', 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Luciano', 'Guerin', NULL, '89121', 'Las Vegas', '', NULL, b'0', '', '', NULL, 4, b'0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Abush', 'yyt', NULL, '', 'a.a', '', NULL, b'0', '', '', NULL, 5, b'0', NULL, NULL, NULL, 'http://www.madebyus4u.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `state` (`state`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_name` varchar(45) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `owner_profile_id` int(11) DEFAULT NULL,
  `is_launched` bit(1) DEFAULT b'0',
  `is_paid` bit(1) DEFAULT b'0',
  PRIMARY KEY (`id`),
  KEY `fk_profile_store_id` (`owner_profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `store_name`, `desc`, `owner_profile_id`, `is_launched`, `is_paid`) VALUES
(1, 'asdasd', ' sdasdasd', 1, b'1', b'1'),
(2, 'LAS VEGAS SPECIALTY STORE', 'This is a specialty store ', 2, b'1', b'1'),
(3, 'Las Vegas Store', 'This is the store from Las Vegas for Las Vegas products ', 2, b'1', b'1'),
(4, 'CES STORE', ' This is the CES store this is dummy text to  text the additional information text are on the product.', 2, b'1', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
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
  `memeber_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_memeber_fk` (`memeber_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `memeber_id`) VALUES
(1, '::1', 'dadenew', '$2y$08$jvrwJTATCRD2fQVskSi8v.l4LL12IWZquW1G5LMEoUQi/dfAhdBDe', NULL, 'dadenewyy1t@gmail.com', 'e5d894a5b9db973f718bf8230f9776fad181322e', NULL, NULL, NULL, 1426148048, 1430119242, 1, NULL, NULL, NULL, NULL, NULL),
(2, '68.96.99.79', 'VegasTech', '$2y$08$ZfF9weoApGU3zTLBYRff6OdzDW8m6ziOBxYSIb2GBS5VB35RGUNJu', NULL, 'vegascraig11@gmail.com', 'dac36600c414fa29f471f8358d565b1707563314', NULL, NULL, '3T9LRrfVbKToR61OP6dKdO', 1426490668, 1430112858, 1, NULL, NULL, NULL, NULL, NULL),
(3, '213.55.105.74', 'dadenew1', '$2y$08$st5Do93eQ7R.qYKplcBO9eKUNoiDqW/.pBYKX3fuUJz6sZwTr6Bbi', NULL, 'dadenewyyt@gmail.com', '34e39d1b5678c9977e5130fbec7411fab509638f', NULL, NULL, NULL, 1426492042, 1426837834, 1, NULL, NULL, NULL, NULL, NULL),
(4, '174.71.241.75', 'lguerin01@hotmail.com', '$2y$08$xgT/LS5.uqMAdZuvIBh68.KVnjZQgPhE3vorUyEA5CgKVEGgpXcHW', NULL, 'lguerin01@hotmail.com', 'c43e8091fdb8cc4a5fad0cd3580fc55cf69734ac', NULL, NULL, NULL, 1427311846, 1430054176, 1, NULL, NULL, NULL, NULL, NULL),
(5, '213.55.105.93', '', '$2y$08$lxUM.d40otrvjvf68fa.T.1bAOQAahG3CGLSCKa.0P1Ls6pbcoNoK', NULL, 'yemwedew@gmail.com', '354587b7bfc98d672e6ec3a2f2c414cc89a1994b', NULL, NULL, NULL, 1429856948, NULL, 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2);

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
