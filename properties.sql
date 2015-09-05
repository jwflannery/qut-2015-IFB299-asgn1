-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2015 at 01:19 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `ID` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Suburb` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Furnishings` varchar(255) DEFAULT NULL,
  `Rent` int(11) DEFAULT NULL,
  `Test` text NOT NULL,
  `Image_1` text,
  `Image_2` text,
  `Image_3` text
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`ID`, `Address`, `Suburb`, `Type`, `Description`, `Photo`, `Furnishings`, `Rent`, `Test`, `Image_1`, `Image_2`, `Image_3`) VALUES
(1, '65 Smith Avenue', 'Cleveland', 'House', 'Country mountain home set well back off the road on large 1,012 m2 block which backs on to Camp Creek. Warm and cosy in winter with a potbelly, combustion heater and airconditioning. Cool in summer with french doors that open on to three large shaded verandahs. Back verandah enclosed with beautiful rainforest outlook, ideal for entertaining. Large farmstyle timber kitchen with electric stove, dishwasher and informal dining. Three bedrooms with two bathrooms (main ensuite). Elegant formal lounge and separate lounge / dining.', 'images/property01.jpg', 'Unfurnished', 550, '', NULL, NULL, NULL),
(2, '13 John Street', 'Wellington Point', 'House', 'This amazing home lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed dapibus lectus, sed consequat lectus. Aenean bibendum turpis fringilla tincidunt tincidunt. Nam porttitor posuere pharetra. Sed ex velit, congue gravida ultrices ac, finibus ut ligula. Curabitur malesuada leo nulla, non dictum lacus tincidunt sit amet. Suspendisse faucibus ligula quis arcu consequat, pellentesque ultricies arcu auctor. Donec consectetur nulla sed mi venenatis maximus.', 'images/property02.jpg', 'Furnished', 495, '', NULL, NULL, NULL),
(3, '45 Mary Lane', 'Ormiston', 'Share house', 'Donec ultricies justo ante, ut tincidunt sem dignissim ut. Vivamus diam tellus, varius vitae augue a, pretium ullamcorper ex. Sed bibendum erat ac est placerat pharetra et sed libero. Suspendisse arcu est, pulvinar eget neque vel, congue consequat elit. Morbi lectus magna, ultricies eu mauris nec, venenatis consequat metus. Maecenas quis nisl sed nisi suscipit ultricies et ut mi. Integer condimentum ultrices felis, ac eleifend nisl blandit ut. Sed magna augue, viverra a lacus a, tristique facilisis nulla. Aenean pulvinar maximus quam, ac scelerisque metus sollicitudin porta. Proin in ornare ligula, convallis tincidunt tellus.', 'images/property03.jpg', 'Furnished', 440, '', NULL, NULL, NULL),
(4, '16 Segway Way', 'Acacia Ridge', 'Apartment', 'This is a lovely apartment.', 'http://o.homedsgn.com/wp-content/uploads/2013/02/a-house-19-800x548.jpg', 'Unfurnished', 300, '', NULL, NULL, NULL),
(5, '121 old Cleveland Rd', 'Ormiston', 'House', 'A Beautiful House - with really ugly yellow couches', 'images/property05.jpg', 'Furnished', 400, '', 'images/property05_1.jpg', 'images/property05_2.jpg', 'images/property05_3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
