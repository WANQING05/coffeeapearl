-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 31, 2023 at 08:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Mobile`, `Subject`, `Message`) VALUES
('CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'sa', ''),
('CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'sa', ''),
('BIRJU KUMAR', 'ckj40856@gmail.com', '8903079750', 'asd', 'asdasdasd'),
('CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'asd', 'hfgdsfsx');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('Fadhilah', 'Fadhilah Athhar Fauzi Avicenna', 'ai200331@siswa.uthm.edu.my', '0174652837', 'FSKTM, Jalan Delta 1/6, 86400 Parit Raja, Johor', 'Fadhilah1234'),
('Min', 'Lai Hui Min', 'ai210309@siswa.uthm.edu.my', '0174528746', 'FSKTM, Jalan Delta 1/6, 86400 Parit Raja, Johor', 'Min1234'),
('Qian', 'Lee Shuan Qian', 'ai210322@siswa.uthm.edu.my', '0137652837', 'FSKTM, Jalan Delta 1/6, 86400 Parit Raja, Johor', 'Qian1234'),
('Qing', 'Liaw Wan Qing', 'ai210403@siswa.uthm.edu.my', '0173652843', 'FSKTM, Jalan Delta 1/6, 86400 Parit Raja, Johor', 'Qing1234'),
('user1', 'tester', 'testeruser@gmail.com', '9876545680', 'BP', 'testeruser123'),
('Xin', 'Huang Shi Xin', 'ai210414@siswa.uthm.edu.my', '0126836729', 'FSKTM, Jalan Delta 1/6, 86400 Parit Raja, Johor', 'Xin1234');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `R_ID` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`F_ID`, `name`, `price`, `description`, `R_ID`, `images_path`, `options`) VALUES
(58, 'Bang Bang Chocolate with Brown', 8, 'Rich coco served with soft & chewy brown sugar warm pearls.', 1, 'images\\tea\\Tealive\\Bang Bang Chocolate with Brown Sugar Warm Pearls.jpg', 'ENABLE'),
(59, 'Bang Bang Fresh Milk with Brow', 8, 'Creamy fresh milk served with soft & chewy brown sugar warm pearls.', 1, 'images\\tea\\Tealive\\Bang Bang Fresh Milk with Brown Sugar Warm Pearls.jpg', 'ENABLE'),
(60, 'Chocolate Hazelnut Truffle', 8, 'Everyone\'s favourite milk tea served with soft & chewy brown sugar warm pearls.', 1, 'images\\tea\\Tealive\\Bang Bang Milk Tea with Brown Sugar Warm Pearls.jpg', 'ENABLE'),
(61, 'Bang Bang Nishio Matcha with B', 9, 'Authentic Japanese green tea imported from Nishio, served with soft & chewy brown sugar warm pearls.', 1, 'images\\tea\\Tealive\\Bang Bang Nishio Matcha with Brown Sugar Warm Pearls.jpg', 'ENABLE'),
(62, 'Nishio Fine Matcha Latte', 9, 'Authentic Nishio Japanese green tea with frothy milk.', 1, 'images\\tea\\Tealive\\Nishio Fine Matcha Latte.jpg', 'ENABLE'),
(63, 'Cream Cloud Nishio Fine Matcha', 10, 'Cream Cloud Nishio Fine Matcha Smoothie', 1, 'images\\tea\\Tealive\\Cream Cloud Nishio Fine Matcha Smoothie.jpg', 'ENABLE'),
(65, 'Chatime Pearl Milk Tea', 7, 'Tapioca pearls add a pleasant texture to our signature milk tea, a best-selling fan favourite. Have this drink made in your choice of Signature Milk Tea, Fresh Milk or Oat Milk.', 2, 'images\\tea\\Chatime\\Chatime-Pearl-Milk-Tea.png', 'ENABLE'),
(66, 'Chatime Roasted Milk Tea', 7, 'One of our most popular milk teas, Japanese Roasted Tea! Have this drink made in your choice of Signature Milk Tea, Fresh Milk or Oat Milk.', 2, 'images\\tea\\Chatime\\Roasted-Milk-Tea.png', 'ENABLE'),
(68, 'Earl Grey Milk Tea', 6, 'One of the most recognized flavoured teas in the world: bold and rich with a subtle hint of citrus and bergamot. Have this drink made in your choice of Signature Milk Tea, Fresh Milk or Oat Milk.', 2, 'images\\tea\\Chatime\\Earl-Grey-Milk-Tea.png', 'ENABLE'),
(69, 'Chatime Signature Milk Tea', 7, 'Our world famous milk tea, brewed from premium loose leaf black tea. Delicious and classic. For the tea lovers! Select any of our tea bases and have it made in your choice of Signature Milk Tea, Fresh', 2, 'images\\tea\\Chatime\\Chatime-Milk-Tea.png', 'ENABLE'),
(70, 'CEO Latté', 9, 'CEOs need their coffee stronger, more aromatic and overall fit for a boss. Hence, the CEO Latté was born, now everyone can drink coffee like a CEO. If you like lesser milk in your coffee, this is for ', 3, 'images\\tea\\Zus\\ceo_latte.png', 'ENABLE'),
(71, 'Vietnamese Spanish Latté', 10, 'We’re getting coco-loco with our Spanish Latté.\r\n\r\nThis bestseller has gotten a makeover with creamy coconut and rich Vietnamese coffee!', 3, 'images\\tea\\Zus\\Vietnamese-Spanish-Latte.png', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('huiMin01', 'Hui Min', 'huimin@gmail.com', '601127151119', 'Johor', 'huimin123'),
('shiXin02', 'Shi Xin', 'shixin@gmail.com', '601135342834', 'Johor', 'shiXin123'),
('wanQing03', 'Wan Qing', 'wanqing@gmail.com', '+60167670644', 'Johor', 'wanqing123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(30) NOT NULL,
  `F_ID` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `R_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `F_ID`, `foodname`, `price`, `quantity`, `order_date`, `username`, `R_ID`) VALUES
(75, 69, 'Chatime Signature Milk Tea', 7, 2, '2023-12-31', 'user1', 2),
(76, 60, 'Chocolate Hazelnut Truffle', 8, 1, '2023-12-31', 'user1', 1),
(77, 69, 'Chatime Signature Milk Tea', 7, 2, '2023-12-31', 'user1', 2),
(78, 60, 'Chocolate Hazelnut Truffle', 8, 1, '2023-12-31', 'user1', 1),
(79, 69, 'Chatime Signature Milk Tea', 7, 2, '2023-12-31', 'user1', 2),
(80, 60, 'Chocolate Hazelnut Truffle', 8, 1, '2023-12-31', 'user1', 1),
(81, 69, 'Chatime Signature Milk Tea', 7, 2, '2023-12-31', 'user1', 2),
(82, 60, 'Chocolate Hazelnut Truffle', 8, 1, '2023-12-31', 'user1', 1),
(83, 63, 'Cream Cloud Nishio Fine Matcha', 10, 1, '2023-12-31', 'user1', 1),
(84, 59, 'Bang Bang Fresh Milk with Brow', 8, 1, '2023-12-31', 'Xin', 1),
(85, 65, 'Chatime Pearl Milk Tea', 7, 2, '2023-12-31', 'Xin', 2),
(86, 59, 'Bang Bang Fresh Milk with Brow', 8, 1, '2023-12-31', 'Xin', 1),
(87, 65, 'Chatime Pearl Milk Tea', 7, 2, '2023-12-31', 'Xin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `R_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `M_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`R_ID`, `name`, `email`, `contact`, `address`, `M_ID`) VALUES
(1, 'Tealive', 'tealive@gmail.com', '601127151119', 'Tealive, Jalan Delta 1/6, 86400 Parit Raja, Johor', 'huiMin01'),
(2, 'Chatime', 'chatime@gmail.com', '601135342834', 'Chatime, Jalan Delta 1/6, 86400 Parit Raja, Johor', 'shiXin02'),
(3, 'Zus Coffee', 'zus@gmail.com', '60167670644', 'Zus, Jalan Delta 1/6, 86400 Parit Raja, Johor', 'wanQing03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`F_ID`,`R_ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `F_ID` (`F_ID`),
  ADD KEY `username` (`username`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`R_ID`),
  ADD UNIQUE KEY `M_ID_2` (`M_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `R_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`F_ID`) REFERENCES `food` (`F_ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
