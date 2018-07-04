-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 01:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `allproducts`
--

CREATE TABLE `allproducts` (
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `subcatagory` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `material` varchar(500) NOT NULL,
  `size` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `bprice` double NOT NULL,
  `sprice` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `offer` double NOT NULL,
  `pdpic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allproducts`
--

INSERT INTO `allproducts` (`code`, `name`, `catagory`, `subcatagory`, `color`, `material`, `size`, `description`, `bprice`, `sprice`, `quantity`, `offer`, `pdpic`) VALUES
('10', 'Kids Dress', 'Kids', 'Dress', 'Red', 'Cotton', 'M', '100% cotton', 350, 500, 30, 0, 'kids7.PNG'),
('111', 'Kids Toy', 'Kids', 'Toys', 'Red', 'Plastic', 'S', 'Plastic made', 50, 200, 100, 0, 'kids4.PNG'),
('13', 'Small Purse ', 'Women', 'Bags', 'Blue', 'Canvas', 'S', 'Women Small Purse', 50, 150, 25, 100, 'bag.jpg'),
('14', 'Boot', 'Women', 'Shoe', 'Gray', 'rubber', 'M', 'New Fashionable Women\'s Boot', 1200, 2800, 25, 0, 'wshoe1.jpg'),
('15', 'High hill', 'Women', 'Shoe', 'Red', 'synthetic', 'S', 'New High hill.very Fashionable', 1000, 3000, 15, 0, 'wshoe.jpg'),
('16', 'Pants', 'Women', 'Pant', 'Black', 'Jeans', 'S', 'New jeans Pant', 1500, 2500, 20, 0, 'wpant.jpg'),
('17', 'Casual Shoe', 'Men', 'Shoe', 'black', 'Leather', 'M', 'Pure Leather Shoe', 800, 2500, 20, 0, 'leather.jpg'),
('18', 'Samsung-w83', 'Electronic', 'Mobile', 'Black', '', '', 'Samsung-w83.top rated mobile phone with 8gb memory', 19000, 20000, 1000, 0, 'backcover.png'),
('19', 'Pants', 'Men', 'Pant', 'Blue', '100%cotton', 'L', '100%cotton,Pants', 700, 800, 21, 0, 'wprog2.png'),
('2', 'Wallet', 'Accessories', 'Wallet', 'Brown', 'Lather', 'M', 'Pure Lather', 100, 200, 100, 0, 'walate.PNG'),
('20', 'Formal Belt', 'Men', 'Belt', 'Blue', 'Leather', 'M', 'Leather belt', 200, 600, 25, 0, 'belt1.jpg'),
('23', 'Tops', 'Women', 'Dress', 'Blue', '100% Cotton', 'M', 'Women tops 10% cotton limited edition', 500, 1500, 25, 0, 'pic.jpg'),
('24', 'Formal Shoe', 'Men', 'Shoe', 'Red', 'Lofar', 'M', 'New Lofar shoe.very Fashionable', 1500, 2500, 15, 200, 'shoe.jpg'),
('25', 'Kids shoe', 'Kids', 'Shoe', 'White', '100%leather', 'S', '100%leather,Kids Shoe', 250, 300, 50, 0, 'kids3.png'),
('26', 'Trendy T-Shirt ', 'Men', 'Shirt', 'Red', 'Silk', 'M', 'Silk full sleeve t-shirt', 300, 600, 50, 0, 'mshirt2.PNG'),
('27', 'Pants', 'Men', 'Pant', 'White', '100%cotton', 'XL', '100%cotton,Pants', 100, 200, 120, 0, 'pros2.png'),
('28', 'Pants', 'Women', 'Pant', 'Black', '100%cotton', 'XL', '100%cotton,Womens Pant.limited editon', 600, 800, 20, 0, 'wprog5.png'),
('29', 'Smart Watch', 'Electronic', 'Smart Watch', 'Black', '', '', 'Smart Watch', 190, 390, 100, 290, 'watch.jpg'),
('30', 'Casual Belt', 'Men', 'Belt', 'Black', 'Leather', 'S', 'Leather belt', 2000, 6000, 25, 0, 'belt2.jpg'),
('33', 'HeadPhone', 'Electronic', 'HeadPhone', 'Black', 'Plastic', 'L', 'For Samsung-w83.top rated mobile phone ', 90, 200, 1000, 0, 'headphone.PNG'),
('34', 'HandBand', 'Accessories', 'HandBand', 'Black', 'Steel', 'M', 'hard and light', 150, 250, 200, 0, 'handband.PNG'),
('35', 'Bags', 'Accessories', 'Bag', 'Brown', 'plastic', 'M', 'hard and light', 1500, 2500, 200, 0, 'bags.PNG'),
('36', 'BackCover', 'Accessories', 'BackCover', 'Brown', 'plastic', 'S', 'For iphone X', 500, 1500, 100, 0, 'backcover.PNG'),
('37', 'TableFan', 'Electronic', 'TableFan', 'Black', 'Steel', 'M', 'Very fast', 2000, 3000, 1000, 0, 'tablefan.PNG'),
('38', 'Shoulder Bag', 'Women', 'Bags', 'Purple', 'Silicon', 'M', 'Women Shoulder Bag', 250, 500, 50, 0, 'accessories.png'),
('39', 'women dress', 'Women', 'Dress', 'Green', '50%Cotton', 'XXL', 'women dress 50% cotton.limited edition', 500, 1000, 22, 20, 'wprog1.png'),
('6', 'T-Shirt', 'Men', 'Shirt', 'Red', '100%cotton', 'XXL', '100% Cotton.full sleeve t-shirt', 500, 1000, 10, 80, 'mshirt1.png'),
('7', 'Kids Shoe', 'Kids', 'Shoe', 'White', 'Lather', '28', '100% Lather', 550, 900, 30, 0, 'kids3.PNG'),
('8', 'Kids Diapers', 'Kids', 'Diapers', 'White', 'Paper', '25', '100% Soft material', 150, 200, 100, 0, 'kids2.PNG'),
('9', 'Torn Shirt', 'men', 'shirt', 'Grey', '', '', 'Normal', 50, 100, 1000, 0, 'torn_tshirt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `badproducts`
--

CREATE TABLE `badproducts` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `prate` varchar(20) NOT NULL,
  `pdname` varchar(50) NOT NULL,
  `catagory` varchar(30) NOT NULL,
  `subcatagory` varchar(50) NOT NULL,
  `pdpic` varchar(50) NOT NULL,
  `code` int(50) NOT NULL,
  `bprice` double NOT NULL,
  `sprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `badproducts`
--

INSERT INTO `badproducts` (`name`, `email`, `comment`, `prate`, `pdname`, `catagory`, `subcatagory`, `pdpic`, `code`, `bprice`, `sprice`) VALUES
('Araf', 'araf@gmail.com', 'Poor Quality', 'worse', 'kids Toy', 'kids', 'Toys', 'kids4.PNG', 1, 50, 200),
('Nabil', 'nabil@gmail.com', 'Not Lasted For too Long.', 'bad', 'Small Purse', 'Women', 'Bags', 'bag.jpg', 14, 50, 150),
('saha', 'saha@gmail.com', 'Too much pricy', 'worse', 'Kids Shoe', 'Kids', 'Shoe', 'kids3.PNG', 7, 550, 900),
('Efty', 'efty@gmail.com', 'I found it a low cost but a good product. Thanks.', 'good', 'Kids Toy', 'Kids', 'Toys', 'kids4.PNG', 1, 50, 200);

-- --------------------------------------------------------

--
-- Table structure for table `dailyvisitor`
--

CREATE TABLE `dailyvisitor` (
  `count` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailyvisitor`
--

INSERT INTO `dailyvisitor` (`count`, `time`, `ip`) VALUES
(18, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `username` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `cost` double NOT NULL,
  `size` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `quantity` double NOT NULL,
  `customersts` varchar(255) NOT NULL,
  `adminsts` varchar(255) NOT NULL,
  `sendshipping` varchar(255) NOT NULL,
  `shippingsts` varchar(255) NOT NULL,
  `tracknumber` int(255) NOT NULL,
  `ppic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`username`, `code`, `pname`, `cost`, `size`, `colour`, `quantity`, `customersts`, `adminsts`, `sendshipping`, `shippingsts`, `tracknumber`, `ppic`) VALUES
('halim', '13', 'Small Purse', 500, 'M', 'Blue', 1, 'Received', 'Confirm', 'Sent', 'Received', 1, 'bag.jpg'),
('halim', '6', 'T-Shirt', 1000, '0', 'Red', 1, 'Not Received', 'Confirm', 'Sent', 'Received', 2, 'mshirt1.png'),
('adi', '20', 'Formal Belt', 600, 'M', 'Blue', 1, 'Received', 'Confirm', 'Sent', 'Received', 3, 'belt1.jpg'),
('adi', '8', 'Kids Diapers', 200, '25', 'White', 1, 'Not Received', 'Cancel', 'Not Sent', 'Not Received', 6, 'kids2.PNG'),
('hanif', '8', 'Kids Diapers', 200, '25', 'White', 1, 'Received', 'Confirm', 'Sent', 'Received', 7, 'kids2.PNG'),
('hanif', '15', 'High hill', 3000, 'S', 'Red', 1, 'Not Received', 'Not Seen', 'Not Sent', 'Not Received', 8, 'wshoe.jpg'),
('lirab', '15', 'High hill', 3000, 'S', 'Red', 1, 'Received', 'Confirm', 'Sent', 'Received', 9, 'wshoe.jpg'),
('lirab', '38', 'Shoulder Bag', 500, 'M', 'Purple', 1, 'Not Received', 'Confirm', 'Not Sent', 'Not Received', 10, 'accessories.png'),
('minhaz', '24', 'Formal Shoe', 2500, 'M', 'Red', 1, 'Received', 'Not Seen', 'Not Sent', 'Received', 11, 'shoe.jpg'),
('minhaz', '33', 'HeadPhone', 200, 'L', 'Black', 1, 'Not Received', 'Not Seen', 'Not Sent', 'Not Received', 12, 'headphone.PNG'),
('panda', '17', 'Casual Shoe', 2500, 'M', 'black', 1, 'Received', 'Confirm', 'Sent', 'Received', 13, 'leather.jpg'),
('panda', '34', 'HandBand', 250, 'M', 'Black', 1, 'Not Received', 'Not Seen', 'Not Sent', 'Not Received', 14, 'handband.PNG'),
('piash', '27', 'Pants', 200, 'XL', 'White', 1, 'Not Received', 'Not Seen', 'Not Sent', 'Not Received', 15, 'pros2.png'),
('piash', '16', 'Pants', 2500, 'S', 'Black', 1, 'Received', 'Confirm', 'Sent', 'Received', 16, 'wpant.jpg'),
('rafat', '18', 'Samsung-w83', 20000, '', 'Black', 1, 'Not Received', 'Not Seen', 'Not Sent', 'Not Received', 17, 'backcover.png'),
('rafat', '2', 'Wallet', 200, 'M', 'Brown', 1, 'Received', 'Confirm', 'Sent', 'Received', 18, 'walate.PNG'),
('tamim', '14', 'Boot', 2800, 'M', 'Gray', 1, 'Not Received', 'Not Seen', 'Not Sent', 'Not Received', 19, 'wshoe1.jpg'),
('tamim', '25', 'Kids shoe', 300, 'S', 'White', 1, 'Received', 'Not Seen', 'Not Sent', 'Received', 20, 'kids3.png');

-- --------------------------------------------------------

--
-- Table structure for table `todaysoffers`
--

CREATE TABLE `todaysoffers` (
  `code` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `catagory` varchar(500) NOT NULL,
  `subcatagory` varchar(500) NOT NULL,
  `color` varchar(500) NOT NULL,
  `material` varchar(500) NOT NULL,
  `size` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `cost` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `offer` double NOT NULL,
  `pdpic` varchar(255) NOT NULL,
  `bprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todaysoffers`
--

INSERT INTO `todaysoffers` (`code`, `name`, `catagory`, `subcatagory`, `color`, `material`, `size`, `description`, `cost`, `quantity`, `offer`, `pdpic`, `bprice`) VALUES
('23', 'Tops', 'Women', 'Dress', 'Blue', '100% Cotton', 'M', 'Women tops 10% cotton limited edition', 1500, 25, 1000, 'pic.jpg', '500'),
('15', 'High hill', 'Women', 'Shoe', 'Red', 'synthetic', 'S', 'New High hill.very Fashionable', 3000, 15, 2000, 'wshoe.jpg', '1000'),
('33', 'HeadPhone', 'Electronic', 'HeadPhone', 'Black', 'Plastic', 'L', 'For Samsung-w83.top rated mobile phone ', 200, 1000, 150, 'headphone.PNG', '90'),
('16', 'Pants', 'Women', 'Pant', 'Black', 'Jeans', 'S', 'New jeans Pant', 2500, 20, 2000, 'wpant.jpg', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `userorders`
--

CREATE TABLE `userorders` (
  `username` varchar(500) NOT NULL,
  `code` varchar(500) NOT NULL,
  `color` varchar(500) NOT NULL,
  `size` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userorders`
--

INSERT INTO `userorders` (`username`, `code`, `color`, `size`, `quantity`, `price`, `status`) VALUES
('minhaz', '0001', 'Red', 'XXL', 3, 1000, 'recived'),
('anik', '0002', 'Green', 'XL', 5, 5000, 'recived'),
('minhaz', '0003', 'Blue', 'S', 2, 4000, ''),
('piash', '0005', 'Black', 'M', 10, 10000, 'recived'),
('rafat', '0002', 'Red', 'XXL', 9, 4500, ''),
('rafat', '0004', 'Green', 'S', 3, 1200, 'recived'),
('anik', '0009', 'White', 'L', 4, 4000, 'recived'),
('adi', '0012', 'Blue', 'L', 7, 5600, ''),
('adi', '0003', 'Black', 'XXL', 3, 3000, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `pp` varchar(500) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `regdate` varchar(255) NOT NULL,
  `lastlogin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `usertype`, `password`, `name`, `email`, `gender`, `dob`, `pp`, `address`, `status`, `regdate`, `lastlogin`) VALUES
('adi', 'user', '12312312', 'Arafat ', 'adi@gmail.com', 'female', '4/4/1991', 'anik.jpg', 'uttara', 'active', '2017', '5/5/17'),
('anik', 'admin', '12312312', 'faysal anik', 'faysal@gmail.com', 'male', '6/2/1998', 'anik.jpg', '12/C,khigao.road no-2', 'pending', '2016', '4/2/16'),
('halim', 'user', '12312312', 'halim adi', 'halim@gmail.com', 'female', '2/9/1994', 'minhaz.jpg', 'zigatola,41/1 road#2', 'active', '2017', '1/1/16'),
('hanif', 'user', '12312312', 'Hanif faysal', 'hanif@gmail.com', 'male', '6/8/1994', 'anik.jpg', 'panthopath,kolabagan,Dhaka-1209', 'active', '2017', '1/2/16'),
('imo', 'admin', '12312312', 'imran ', 'imran@gmail.com', 'male', '2/2/1991', 'imo.jpg', '41/A,Zigatola,Dhanmondi', 'active', '2015', '28/12/17'),
('lirab', 'user', '12312312', 'Tasnim Lirab', 'lirab@gmail.com', 'male', '1/1/1999', 'imo.jpg', 'pranthopath', 'active', '2015', '2/2/17'),
('minhaz', 'admin', '12312312', 'Minhaz uddin', 'uddinminhaz09@gmail.com', 'male', '6/8/1996', 'minhaz.jpg', '41/A,Zigatola,Dhanmondi', 'active', '2016', '3/2/16'),
('neshi', 'admin', '12312312', 'neshi islam', 'neshi@gmail.com', 'female', '1/1/1990', 'nishat.jpg', '22/B,Kakoli,Dhaka 1209.Road-02', 'blocked', '2017', '3/5/17'),
('panda', 'user', '12312312', 'adi faysal', 'adi111@gmail.com', 'other', '6/8/1994', 'imo.jpg', 'zigatola,dhanmondi', 'pending', '2015', '1/2/17'),
('piash', 'user', '12312312', 'Ibrahim piash', 'piash@gmail.com', 'male', '19/7/1992', 'minhaz.jpg', 'A/2,Dhanmondi,Road-4,Dhaka-1204', 'pending', '2016', '15/8/17'),
('rafat', 'user', '12312312', 'Rafat us Islam', 'rafat@gmail.com', 'male', '3/3/2001', 'anik.jpg', '3/C,Kolbagan,Road-1,Dhaka-1207', 'blocked', '2017', '2/7/17'),
('shovra', 'admin', '12312312', 'Shovra Das', 'shovra@aiub.edu', 'male', '4/5/1980', 'imo.jpg', 'Aiub', 'active', '2017', '2/3/17'),
('tamim', 'user', '12312312', 'Tamim', 'tamim@gmail.com', 'male', '6/7/1994', 'nishat.jpg', 'zigatola,41/1 road#2', 'pending', '2016', '2/4/17');

-- --------------------------------------------------------

--
-- Table structure for table `wish`
--

CREATE TABLE `wish` (
  `username` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `subcatagory` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `bpprice` double NOT NULL,
  `sprice` double NOT NULL,
  `quantity` double NOT NULL,
  `offer` double NOT NULL,
  `pdpic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wish`
--

INSERT INTO `wish` (`username`, `code`, `name`, `catagory`, `subcatagory`, `color`, `material`, `size`, `description`, `bpprice`, `sprice`, `quantity`, `offer`, `pdpic`) VALUES
('halim', '0001', 'T-Shirt', 'Men', 'Shirt', 'Blue', '100%Cotton', 'M', '100% Cotton.full sleeve t-shirt', 50, 1000, 10, 800, 'mshirt3.PNG'),
('tamim', '0019', 'BackCover', 'Electronic', 'BackCover', 'Black', '', '', 'Samsung-w83', 0, 200, 2, 150, 'backcover.PNG'),
('adi', '10', 'Kids Dress', 'Kids', 'Dress', 'Red', 'Cotton', 'M', '100% cotton', 350, 500, 30, 0, 'kids7.PNG'),
('halim', '111', 'T-Shirt', 'Men', 'Shirt', 'Red', '100% cotton', 'XXL', '100% Cotton.full sleeve t-shirt', 500, 1000, 10, 10, 'mshirt1.PNG'),
('halim', '112', 'Casual Belt', 'Men', 'Belt', 'Black', 'Leather', '25', 'Leather belt', 2000, 2500, 25, 0, 'belt2.jpg'),
('adi', '13', 'Small Purse ', 'Women', 'Bags', 'Blue', 'Canvas', 'S', 'Women Small Purse', 50, 150, 25, 100, 'bag.jpg'),
('tamim', '16', 'Pants', 'Women', 'Pant', 'Black', 'Jeans', 'S', 'New jeans Pant', 1500, 2500, 20, 0, 'wpant.jpg'),
('panda', '17', 'Casual Shoe', 'Men', 'Shoe', 'black', 'Leather', 'M', 'Pure Leather Shoe', 800, 2500, 20, 0, 'leather.jpg'),
('piash', '2', 'Wallet', 'Accessories', 'Wallet', 'Brown', 'Lather', 'M', 'Pure Lather', 100, 200, 100, 0, 'walate.PNG'),
('hanif', '20', 'Formal Belt', 'Men', 'Belt', 'Blue', 'Leather', 'M', 'Leather belt', 200, 600, 25, 0, 'belt1.jpg'),
('adi', '23', 'Tops', 'Women', 'Dress', 'Blue', '100% Cotton', 'M', 'Women tops 10% cotton limited edition', 500, 1500, 25, 0, 'pic.jpg'),
('minhaz', '26', 'Trendy T-Shirt ', 'Men', 'Shirt', 'Red', 'Silk', 'M', 'Silk full sleeve t-shirt', 300, 600, 50, 0, 'mshirt2.PNG'),
('rafat', '29', 'Smart Watch', 'Electronic', 'Smart Watch', 'Black', '', '', 'Smart Watch', 190, 390, 100, 0, 'watch.jpg'),
('piash', '33', 'HeadPhone', 'Electronic', 'HeadPhone', 'Black', 'Plastic', 'L', 'For Samsung-w83.top rated mobile phone ', 90, 200, 1000, 0, 'headphone.PNG'),
('tamim', '37', 'TableFan', 'Electronic', 'TableFan', 'Black', 'Steel', 'M', 'Very fast', 2000, 3000, 1000, 0, 'tablefan.PNG'),
('halim', '6', 'T-Shirt', 'Men', 'Shirt', 'Red', '100%cotton', 'XXL', '100% Cotton.full sleeve t-shirt', 500, 1000, 10, 80, 'mshirt1.png'),
('lirab', '8', 'Kids Diapers', 'Kids', 'Diapers', 'White', 'Paper', '25', '100% Soft material', 150, 200, 100, 0, 'kids2.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allproducts`
--
ALTER TABLE `allproducts`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`tracknumber`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `wish`
--
ALTER TABLE `wish`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `tracknumber` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
