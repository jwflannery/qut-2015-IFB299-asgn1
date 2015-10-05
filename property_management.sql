-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2015 at 05:55 AM
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
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(4) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `level` int(11) NOT NULL,
  `verified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `level`, `verified`) VALUES
(1, 'David', 'admin', 4, 1),
(2, 'Staff', 'staff', 2, 1),
(3, 'Owner', 'owner', 3, 1),
(4, 'Tenant', 'tenant', 1, 1),
(5, 'Owner2', 'owner', 0, 0),
(6, 'Owner3', 'owner', 3, 0),
(7, 'Tenant2', 'tenant', 1, 0),
(8, 'StaffUnv', 'staff', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `username` varchar(65) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`username`, `ID`, `Address`, `Suburb`, `Type`, `Description`, `Photo`, `Furnishings`, `Rent`, `Test`, `Image_1`, `Image_2`, `Image_3`) VALUES
('', 1, '65 Smith Avenue', 'Cleveland', 'House', 'Country mountain home set well back off the road on large 1,012 m2 block which backs on to Camp Creek. Warm and cosy in winter with a potbelly, combustion heater and airconditioning. Cool in summer with french doors that open on to three large shaded verandahs. Back verandah enclosed with beautiful rainforest outlook, ideal for entertaining. Large farmstyle timber kitchen with electric stove, dishwasher and informal dining. Three bedrooms with two bathrooms (main ensuite). Elegant formal lounge and separate lounge / dining.', 'images/property01.jpg', 'Unfurnished', 550, '', NULL, NULL, NULL),
('', 2, '', '', '', '', 'images/', '', 0, '', NULL, NULL, NULL),
('', 3, '45 Mary Lane', 'Ormiston', 'Share house', 'Donec ultricies justo ante, ut tincidunt sem dignissim ut. Vivamus diam tellus, varius vitae augue a, pretium ullamcorper ex. Sed bibendum erat ac est placerat pharetra et sed libero. Suspendisse arcu est, pulvinar eget neque vel, congue consequat elit. Morbi lectus magna, ultricies eu mauris nec, venenatis consequat metus. Maecenas quis nisl sed nisi suscipit ultricies et ut mi. Integer condimentum ultrices felis, ac eleifend nisl blandit ut. Sed magna augue, viverra a lacus a, tristique facilisis nulla. Aenean pulvinar maximus quam, ac scelerisque metus sollicitudin porta. Proin in ornare ligula, convallis tincidunt tellus.', 'images/property03.jpg', 'Furnished', 440, '', NULL, NULL, NULL),
('', 4, '16 Segway Way', 'Acacia Ridge', 'Apartment', 'This is a lovely apartment.', 'http://o.homedsgn.com/wp-content/uploads/2013/02/a-house-19-800x548.jpg', 'Unfurnished', 300, '', NULL, NULL, NULL),
('', 5, '123 fake avenue', 'Fakestone', 'House', 'A Beautiful House - with really ugly yellow couches', 'images/property05.jpg', 'Furnished', 400, '', 'images/property05_1.jpg', 'images/property05_2.jpg', 'images/property05_3.jpg'),
('', 6, '2333', '333', '333', '33', 'images/B28L88xCUAAJ376.jpg', '33', 33, '', NULL, NULL, NULL),
('', 10, 'uidhoeiuh', 'oiuheuih', 'eiuheiuh', 'euiheuhi', 'tumblr_lyiz6coyvR1qmpg90o1_500.png', 'euihuh', 1444, '', NULL, NULL, NULL),
('', 11, '121212', '12121', '333', '1233', 'images/tumblr_lyiz6coyvR1qmpg90o1_500.png', '333', 444, '', NULL, NULL, NULL),
('', 15, '255 Test Case', 'Test', 'House', 'A test house', 'images/', 'furnished', 255, '', NULL, NULL, NULL),
('', 20, '202', '0202', '22', '222', 'images/Nausicaa.full.425914.jpg', '111', 33, '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `username` (`username`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
