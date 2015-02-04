-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2015 at 10:14 AM
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
('1e66ed74826b6de519f82cfe77926d84', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.94 Safari/537.36', 1423041123, ''),
('45fa21e9b61d1409555500845b108015', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.94 Safari/537.36', 1422971622, 'a:10:{s:8:"identity";s:17:"ttracex@gmail.com";s:8:"username";s:7:"dadenew";s:5:"email";s:17:"ttracex@gmail.com";s:7:"user_id";s:2:"55";s:14:"old_last_login";s:10:"1422955793";s:9:"logged_in";b:1;s:10:"profile_id";s:2:"34";s:13:"profile_fname";s:6:"DANIEL";s:17:"flash:old:message";s:261:"<p>The This field can''t be empty field is required.</p>\n<p>The Please upload your profile image field is required.</p>\n<p>The email field is required.</p>\n<p>The required field is required.</p>\n<p>The password field must be at least 8 characters in length.</p>\n";s:17:"flash:new:message";s:261:"<p>The This field can''t be empty field is required.</p>\n<p>The Please upload your profile image field is required.</p>\n<p>The email field is required.</p>\n<p>The required field is required.</p>\n<p>The password field must be at least 8 characters in length.</p>\n";}');

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
  `product_id` int(11) DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `title`, `desc`, `file_name`, `full_path`, `type`, `product_id`, `profile_id`, `store_id`) VALUES
(1, NULL, NULL, '68u8w3.gif', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/31/avatar/', 'profile_image', NULL, NULL, NULL),
(2, NULL, NULL, '1234427013023_423ce3abe5_.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/32/avatar/', 'profile_image', NULL, NULL, NULL),
(3, NULL, NULL, '1393593_387044561431383_21479631_n.jpg', 'C:/webserver_xamp/htdocs/madebyus4u/uploads/profile/34/avatar/', 'profile_image', NULL, 34, NULL),
(4, NULL, NULL, NULL, NULL, 'profile_image', NULL, 35, NULL);

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
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `price` decimal(18,0) DEFAULT '0',
  `rate_id` int(11) DEFAULT NULL,
  `prdocut_image_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `job_title` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `aboutMe` varchar(45) DEFAULT NULL,
  `userName` varchar(45) DEFAULT NULL,
  `businessname` varchar(45) DEFAULT NULL,
  `website` varchar(45) DEFAULT NULL,
  `linkedin` varchar(45) DEFAULT NULL,
  `facebook` varchar(45) DEFAULT NULL,
  `twitter` varchar(45) DEFAULT NULL,
  `join_date` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` datetime DEFAULT CURRENT_TIMESTAMP,
  `is_profile_verfied` bit(1) DEFAULT b'0',
  `is_seller` bit(1) DEFAULT b'0',
  `user_id` int(11) unsigned DEFAULT NULL,
  `profile_image_id` int(11) DEFAULT NULL,
  `bioinfo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `fname`, `lname`, `gender`, `zipcode`, `city`, `state`, `job_title`, `company_name`, `aboutMe`, `userName`, `businessname`, `website`, `linkedin`, `facebook`, `twitter`, `join_date`, `created_date`, `created_by`, `is_profile_verfied`, `is_seller`, `user_id`, `profile_image_id`, `bioinfo`) VALUES
(1, 'fdgfd', 'gfdgfd', 'g', 'sdf', 'sdf', 'Las Vegas', '', '', 'sdfsd', 'fsdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdsd', '2015-10-10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', b'1', b'1', 1, 1, NULL),
(34, 'DANIEL', 'ADENEW', NULL, '63011', 'USA', 'Las Vegas', 'Software Engineering', 'Addis TEST', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-01-30 16:46:34', '2015-01-30 16:46:34', b'0', b'0', 55, 3, 'My name is Daniel Adenew. Am I work for YYT software and we build a great software products for your business.'),
(35, 'Dan', 'ADENEW', NULL, '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-02-03 12:58:28', '2015-02-03 12:58:28', b'0', b'0', 56, 4, NULL);

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
  `store_image_id` int(11) DEFAULT NULL,
  `owner_profile_id` int(11) DEFAULT NULL,
  `is_launched` bit(1) DEFAULT b'0',
  `is_payed` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `memeber_id`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1422348106, 1, 'Admin', 'istrator', 'ADMIN', '0', 1),
(55, '::1', 'dadenew', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', NULL, 'mr.prog60@gmail.com', '3bd2826d0332df184678cd31049f1a354e6323f8', NULL, NULL, NULL, 1422625594, 1423041104, 1, NULL, NULL, NULL, NULL, NULL),
(56, '::1', 'dadenew1', '$2y$08$s0t3Fbpmd9tgxXFslN1jWOS5Kqn3aemPuxJ1h3xtwNCrsoZ7o81hy', NULL, 'danieladenew@gmail.com', '78fe2ea42b826b8c0a6bb78145c5c1558c100b26', NULL, NULL, NULL, 1422957508, 1422957699, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(56, 55, 2),
(57, 56, 2);

--
-- Indexes for dumped tables
--

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
 ADD PRIMARY KEY (`id`), ADD KEY `fk_product_id` (`product_id`), ADD KEY `fk_profile_id` (`profile_id`), ADD KEY `fk_store_id` (`store_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`), ADD KEY `FK_products_categories_id` (`category_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_memebers_user` (`user_id`), ADD KEY `fk_memeber_state` (`state`), ADD KEY `fk_mmeber_media` (`profile_image_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
 ADD PRIMARY KEY (`id`), ADD KEY `state` (`state`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
 ADD PRIMARY KEY (`id`);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- Constraints for dumped tables
--

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
-- Constraints for table `products`
--
ALTER TABLE `products`
ADD CONSTRAINT `FK_products_categories_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
ADD CONSTRAINT `fk_member_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_mmeber_media` FOREIGN KEY (`profile_image_id`) REFERENCES `medias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
