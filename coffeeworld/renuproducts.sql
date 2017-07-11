-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipg64.eigbox.net
-- Generation Time: May 13, 2017 at 06:12 PM
-- Server version: 5.6.32
-- PHP Version: 4.4.9
-- 
-- Database: `marketplace`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `Product`
-- 

CREATE TABLE `Product` (
  `ProductId` int(11) NOT NULL,
  `ProductTag` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductDesc` text,
  PRIMARY KEY (`ProductId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Mashup Product';

-- 
-- Dumping data for table `Product`
-- 


INSERT INTO `Product` VALUES (4001, 'coffee', 'Caramel Machiato', 11, 'Lightly roasted coffee that is soft, mellow and flavourful.');
INSERT INTO `Product` VALUES (4002, 'coffee', 'Cafe Misto', 12, 'A one-to-one mix of fresh brewed coffee and steamed milk add up to one distinctly deliciou coffee drink.');
INSERT INTO `Product` VALUES (4003, 'cold coffee', 'Vanilla Sweet Cream Cold Brew', 20.67, 'Just before serving , our slow-stteped custom blend Narino 70 Cold Brew is topped with a delicate float of house-made vanilla sweet craem that cascades throughout the cup.');
INSERT INTO `Product` VALUES (4004, 'Nitro Cold', 'Nitro Cold Brew', 34.89, 'Our small-batch cold brew-slow-steeped for a super smooth taste gets even better.');
INSERT INTO `Product` VALUES (4005, 'Coffe shake', 'Iced Coffee', 24.56, 'Freshly brewed Starbucks served chilled and lightly sweetened.');
INSERT INTO `Product` VALUES (4006, 'coffe mocha', 'Cocunutmilk Mocha Machiato', 23.67, 'Sumatran cocunutmilk, and Espresso roast.');
INSERT INTO `Product` VALUES (4007, 'ice shake', 'Iced Cinnamon Almondmilk Machiato', 34, 'Our Horchata inspired macchiato is made with our bold Espresso Roast');
INSERT INTO `Product` VALUES (4008, 'shake', 'Vanilla sweet cream cold Brew', 16, 'Just before serving, our slow-stepped, vanilla sweet cream cold brew blend is great');
INSERT INTO `Product` VALUES (4009, 'smoothie', 'Chocolate Smoothie', 30, 'A nourishing blend of mocha flavored sauce');
INSERT INTO `Product` VALUES (4010, 'iced coffee', 'Java Chip Frappuccino', 18.98, 'We blend mocha sauce and Frappuccino with coffee and milk.');
INSERT INTO `Product` VALUES (4011, 'icecream coffee', 'Cafe bean creme Mocha', 34, 'Rich, full-bodied espresso blended with bean creme and milk and syrup');
INSERT INTO `Product` VALUES (4012, 'machiato', 'Latte Machiatto', 19.99, 'This espresso classic has espresso shots slowly poured over lightly aerated milk milk for a bold and roasty new way to sip.');
