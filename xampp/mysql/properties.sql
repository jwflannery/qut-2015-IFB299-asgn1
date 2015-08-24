/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : property_management

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-08-03 16:29:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for properties
-- ----------------------------
DROP TABLE IF EXISTS `properties`;
CREATE TABLE `properties` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Address` varchar(255) NOT NULL,
  `Suburb` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Furnishings` varchar(255) DEFAULT NULL,
  `Rent` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of properties
-- ----------------------------
INSERT INTO `properties` VALUES ('1', '65 Smith Avenue', 'Cleveland', 'House', 'Country mountain home set well back off the road on large 1,012 m2 block which backs on to Camp Creek. Warm and cosy in winter with a potbelly, combustion heater and airconditioning. Cool in summer with french doors that open on to three large shaded verandahs. Back verandah enclosed with beautiful rainforest outlook, ideal for entertaining. Large farmstyle timber kitchen with electric stove, dishwasher and informal dining. Three bedrooms with two bathrooms (main ensuite). Elegant formal lounge and separate lounge / dining.', 'images/property01.jpg', 'Unfurnished', '550');
INSERT INTO `properties` VALUES ('2', '13 John Street', 'Wellington Point', 'House', 'This amazing home lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed dapibus lectus, sed consequat lectus. Aenean bibendum turpis fringilla tincidunt tincidunt. Nam porttitor posuere pharetra. Sed ex velit, congue gravida ultrices ac, finibus ut ligula. Curabitur malesuada leo nulla, non dictum lacus tincidunt sit amet. Suspendisse faucibus ligula quis arcu consequat, pellentesque ultricies arcu auctor. Donec consectetur nulla sed mi venenatis maximus.', 'images/property02.jpg', 'Furnished', '495');
INSERT INTO `properties` VALUES ('3', '45 Mary Lane', 'Ormiston', 'Share house', 'Donec ultricies justo ante, ut tincidunt sem dignissim ut. Vivamus diam tellus, varius vitae augue a, pretium ullamcorper ex. Sed bibendum erat ac est placerat pharetra et sed libero. Suspendisse arcu est, pulvinar eget neque vel, congue consequat elit. Morbi lectus magna, ultricies eu mauris nec, venenatis consequat metus. Maecenas quis nisl sed nisi suscipit ultricies et ut mi. Integer condimentum ultrices felis, ac eleifend nisl blandit ut. Sed magna augue, viverra a lacus a, tristique facilisis nulla. Aenean pulvinar maximus quam, ac scelerisque metus sollicitudin porta. Proin in ornare ligula, convallis tincidunt tellus.', 'images/property03.jpg', 'Furnished', '440');
INSERT INTO `properties` VALUES ('4', '16 Segway Way', 'Acacia Ridge', 'Apartment', 'This is a lovely apartment.', 'http://o.homedsgn.com/wp-content/uploads/2013/02/a-house-19-800x548.jpg', 'Unfurnished', '300');
