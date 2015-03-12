-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2015 at 08:25 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `madebyus4u`
--

-- --------------------------------------------------------

--
-- Table structure for table `carddetail`
--

CREATE TABLE IF NOT EXISTS `carddetail` (
`cardId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `cardType` varchar(50) NOT NULL,
  `cardNumber` int(11) NOT NULL,
  `cvcNumber` int(11) NOT NULL,
  `validMonth` int(11) NOT NULL,
  `validYear` int(11) NOT NULL,
  `firstNameOnCard` varchar(50) NOT NULL,
  `lastNameOnCard` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`commentId` int(10) unsigned NOT NULL,
  `commentForId` int(11) NOT NULL,
  `commentById` int(11) NOT NULL,
  `comment` text NOT NULL,
  `commentDate` datetime NOT NULL,
  `isDeletedByuser` tinyint(4) NOT NULL DEFAULT '0',
  `isDeletedByCommentator` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`messageId` int(10) unsigned NOT NULL,
  `senderId` int(10) unsigned NOT NULL,
  `receiverId` int(10) unsigned NOT NULL,
  `message` text NOT NULL,
  `messageDate` datetime NOT NULL,
  `isRead` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL,
  `isSpammed` tinyint(4) NOT NULL,
  `isTrashed` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
`detaialId` int(11) NOT NULL,
  `detailOrderId` int(11) NOT NULL,
  `detailProductId` int(11) NOT NULL,
  `detailName` varchar(255) NOT NULL,
  `detailPrice` float NOT NULL,
  `detailQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderID` int(11) unsigned NOT NULL,
  `orderUserId` int(11) NOT NULL,
  `orderAmount` int(11) NOT NULL,
  `orderShipName` varchar(100) NOT NULL,
  `orderCity` varchar(100) NOT NULL,
  `orderState` varchar(100) NOT NULL,
  `orderZip` varchar(10) NOT NULL,
  `orderCountry` varchar(100) NOT NULL,
  `orderPhone` varchar(20) NOT NULL,
  `orderFax` varchar(20) NOT NULL,
  `orderShippingPrice` float NOT NULL,
  `orderTax` float NOT NULL,
  `orderEmail` varchar(255) NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `orderShipped` tinyint(11) NOT NULL,
  `orderTrackingNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`ProductId` int(10) unsigned NOT NULL,
  `ProductName` varchar(250) NOT NULL,
  `ProductCategoryId` int(11) unsigned NOT NULL,
  `ProdctShortDesc` varchar(1000) NOT NULL,
  `ProductLongDesc` text NOT NULL,
  `ProductWeight` float NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductStok` int(11) NOT NULL,
  `ProductThumb` varchar(100) NOT NULL,
  `ProductImage` varchar(100) NOT NULL,
  `ProductUpdateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE IF NOT EXISTS `productcategory` (
`productCategoryId` int(11) NOT NULL,
  `productCategoryName` int(11) NOT NULL,
  `productCategoryDescription` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `storeId` int(11) NOT NULL,
  `storeOwnerId` int(11) NOT NULL,
  `storeTypeId` int(11) NOT NULL,
  `storeDescription` varchar(255) NOT NULL,
  `storeCreatedDate` datetime NOT NULL,
  `storeActive` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `storetype`
--

CREATE TABLE IF NOT EXISTS `storetype` (
`storeTypeId` int(11) NOT NULL,
  `storeDescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`userId` int(11) NOT NULL,
  `userEmail` int(100) NOT NULL,
  `userName` int(255) NOT NULL,
  `userPassword` int(255) NOT NULL,
  `userFirstName` int(80) NOT NULL,
  `userLastName` int(80) NOT NULL,
  `userCity` int(100) NOT NULL,
  `userState` int(100) NOT NULL,
  `userCountry` int(100) NOT NULL,
  `userPhone` varchar(20) NOT NULL,
  `userFax` varchar(20) NOT NULL,
  `userZip` int(10) NOT NULL,
  `userRegistrationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userEmailVeriified` tinyint(4) NOT NULL,
  `userCreditVerified` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carddetail`
--
ALTER TABLE `carddetail`
 ADD PRIMARY KEY (`cardId`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`commentId`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`messageId`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
 ADD PRIMARY KEY (`detaialId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
 ADD PRIMARY KEY (`productCategoryId`);

--
-- Indexes for table `storetype`
--
ALTER TABLE `storetype`
 ADD PRIMARY KEY (`storeTypeId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carddetail`
--
ALTER TABLE `carddetail`
MODIFY `cardId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `commentId` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `messageId` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
MODIFY `detaialId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `ProductId` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
MODIFY `productCategoryId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `storetype`
--
ALTER TABLE `storetype`
MODIFY `storeTypeId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
