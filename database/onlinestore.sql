-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2021 at 04:02 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cartID` int(11) NOT NULL AUTO_INCREMENT,
  `orderID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `price` varchar(255) NOT NULL,
  PRIMARY KEY (`cartID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `orderID`, `username`, `image`, `productName`, `price`) VALUES
(1, 3, 'simran', 'MensShoe.png', 'Men leather shoe', '45'),
(12, 3, 'test', 'MensShoe.png', 'Men leather shoe', '45');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(200) NOT NULL,
  `product` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(255) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Sno`, `category`, `product`, `description`, `image`, `price`) VALUES
(3, 'shoes', 'Men leather shoe', 'Rubber sole\r\nmens running walking tennis gym athletic shoes black fashion sneakers,they are lightweight enough for working,jogging,hiking and other sports', 'MensShoe.png', '45'),
(4, 'clothing', 'MISSY_CAT top', '100% Acrylic\r\nPull On closure\r\nMachine Wash\r\nClassic fit\r\nSlightly cropped length\r\n', 'MISSY_CAT.jpg', '56.78'),
(6, 'electronics', 'Juicer', 'AICOOK Centrifugal Juicer with Double Speed, Quiet 400W Motor, Food Grade Juice Machine Stainless Steel (#304) Cutter and BPA Free Juice Jag with 3'' Wide Mouth Juice Extractor', 'mixer.jpg', '78.99'),
(7, 'electronics', 'LED Cup Holder', '2 cup holder, Lights, LED Car Coasters with 7 Colors Luminescent Cup Pad, USB Charging Cup Mat for Drink Coaster Accessories Interior Decoration Atmosphere Light.', 'lights.jpg', '18.99'),
(8, 'electronics', 'Car Vacuum', 'Tsumbay 5000PA Strong Suction Vacuum DC 12V 120W Wet/Dry Portable Handheld Vacuum Cleaner Auto Dust Buster with 14.8 Feet Power Cord, Black', 'car vaccum.jpg', '45.80'),
(9, 'electronics', 'Pen Drive', 'Samsung BAR Plus 64GB - 200MB/s USB 3.1 Flash Drive Champagne Silver (MUF-64BE3/AM)', 'pendrive.jpg', '14.20'),
(10, 'electronics', 'Pen Drive', 'RAOYI 64GB Heart Shape USB2.0 Flash Drive Crystal Pendant Thumb Drive Jewelry Memory Stick Necklace Pen Drive Jump Drive, Pink', 'pen.jpg', '16.40'),
(11, 'grocery', 'Sweetener', 'PURE VIA Stevia Sweetener Packets, Sugar Substitute, Natural Sweetener, Zero Calorie Natural Sweetener Packets, 1000 Count', 'puch.jpg', '24.50'),
(12, 'grocery', 'Coffee Sweetener', 'EQUAL 0 Calorie Sweetener, Sugar Substitute, Zero Calorie Sugar Free Sweetener Packets, Sugar Alternative, 100 Count', 'coffe.jpg', '8.40'),
(13, 'grocery', 'Syrup', 'Nesquik Less Sugar Chocolate Syrup, 510ml Bottle', 'chocolate_srip.jpg', '3.50'),
(14, 'grocery', 'Chips', 'LAYS Stax Original Flavour Potato Chips, 163 g (Pack of 17)', 'chips.jpg', '33.80'),
(15, 'grocery', 'Chips', 'PepsiCo Frito-Lay Sports Night Package (9 Count), 1935g', 'snacks.jpg', '28.92'),
(16, 'shoes', 'Running Shoes', 'OUSIMEN Running Shoes Womens Mens Lightweight Comfortable Mesh Sports Shoes Casual Walking Athletic Sneakers', 'shoess.jpg', '21.99'),
(17, 'shoes', 'Cloud''s Shoe', 'Waterproof, wet weather, urban exploration and element-proof', 'cloud_2-fw19-black_white-m-g1.jpg', '175.99'),
(18, 'shoes', 'DimaiGlobal Shoe', 'DimaiGlobal Water Shoes Men Women Quick Drying Sports Shoes Summer Outdoor Beach Shoes Swim Surf Pool Boating Fishing Hiking', 'shoess.png', '32.99'),
(19, 'shoes', 'Hiking Shoe', 'TFO Waterproof Hiking Shoes Men Non-Slip Lightweight Sneakers for Outdoor Trekking Walking', 'shoess.png', '92.98'),
(20, 'clothing', 'Women''s Short', 'Short-Sleeve V-Neck Tunic 95% Rayon, 5% Elastane\r\nMachine Wash', 'tshit.png', '15.99'),
(21, 'clothing', 'Jacket', 'Izas Crumbria Women''s Mount-Loft Padded Vest\r\nBluemoon/ Coral', 'jacket.png', '99'),
(22, 'clothing', 'coat', 'Alpine North Women''s Vegan Down Mid-Length Parka Coat', '11.png', '210'),
(23, 'clothing', 'Jeans', 'Women''s Curvy Skinny Jean\r\n79% Cotton, 18% Polyester, 3% Elastane', '11.png', '42.33'),
(24, 'toys', ' Excavator Truck', 'Lena Eco Active Toy Excavator Truck is a Eco Friendly BPA and Phthalates Free Biodegradable Green Toy Manufactured from Food Grade Resin and Wood, Yellow, 11x8x6"', '71K+WZ7g9bL._AC_SL1500_.jpg', '26'),
(26, 'toys', 'Robot toy', 'Gorilla Alloy Toy for Kids Fun Robot Toy with Sounds and Lights Toy Interactive Function Touch Control & LED Eyes Toy for 3 4 5 6 Year Old Boys Girls Children Best Gift Present', '61a7sFmEhML._AC_SL1000_.jpg', '15.99'),
(27, 'toys', 'Pizza Game', 'Osmo - Pizza Co. - Ages 5-12 - Communication Skills & Math - Learning Game - for iPad or Fire Tablet (Osmo Base Required)', 'pizzaa.jpg', '9.99'),
(28, 'toys', 'Kids Bicycle', 'BMX Toys Alloy Finger BMX Functional Kids Bicycle Finger Bike Mini-Finger-BMX Set(in random color)', 'cycle.jpg', '16.99'),
(29, 'sports', 'SpikeBall', 'Spikeball 1 Ball Sports Game Set - Outdoor Indoor Game for Teens, Family - Yard, Lawn, Beach, Tailgate - Includes Playing Net, 1 Ball, Drawstring Bag, Rule Book - Seen on Shark Tank (1 Ball Set)', '41p015WdbZL._AC_.jpg', '68'),
(30, 'sports', 'Baseball', 'Franklin Sports MLB Electronic Baseball Pitching Machine – Height Adjustable – Ball Pitches Every 7 Seconds – Includes 6 Plastic Baseballs', '71-aS4uhvkL._AC_SL1500_.jpg', '69.22'),
(31, 'sports', 'Baseball T-Ball', 'NextX Kids Baseball T-Ball Set - Baseball Pitching Machine - Outdoor Sports Games', '61z-yBPu-XS._AC_SL1500_.jpg', '37.99'),
(32, 'sports', 'Baseball T-Ball', 'NextX Kids Baseball T-Ball Set - Baseball Pitching Machine - Outdoor Sports Games', '61z-yBPu-XS._AC_SL1500_.jpg', '37.99');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `customerName` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `paymentMode` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderid`, `customerName`, `address`, `email`, `productName`, `price`, `paymentMode`, `status`) VALUES
(10, 'test ', 'testing', 'abc@gmail.com', 'Men leather shoe', '45', 'cash', '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `orderID` int(11) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`userID`, `username`, `emailid`, `password`, `phone`, `address`, `orderID`) VALUES
(1, 'simran', 'abc@gmail.com', 'abc1234', 987654321, 'canada', 0),
(2, 'test', 'abc@gmail.com', 'test123', 1234567895, 'testing', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
