-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 07:47 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `user_ID` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Product_id` bigint(15) NOT NULL,
  `Supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`user_ID`, `Status`, `Product_id`, `Supplier_id`) VALUES
(1, 'Active', 12649785, 462),
(2, 'Active', 115484877, 139),
(2, 'Active', 164988532, 142),
(2, 'Active', 1164848442, 139),
(2, 'Active', 271104058, 462),
(2, 'Active', 12649785, 462),
(2, 'Active', 1849451326, 462),
(2, 'Active', 1144848442, 462),
(2, 'Active', 271104058, 462),
(1, 'Active', 12649785, 462);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` bigint(15) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `P_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Name`, `P_img`) VALUES
(12649785, 'Rice', 'images\\rice.jpg'),
(115484877, 'Rifai Nuts', 'images/Nuts.jpg'),
(164988532, 'KitKat', 'images\\kitkat.png'),
(271104058, 'Snickers', 'images\\snickers.png'),
(1144848442, 'جبنة دومتي', 'images\\Domty.jpeg'),
(1164848442, 'Twix', 'images\\twix.jpg'),
(1164848784, 'Cheddar Cheese', 'images\\cheddar.jpg'),
(1849451326, 'Japanese Rice', 'images\\japanrice.jpg'),
(6223001360339, 'ميرندا تفاح اخضر', 'images/Mirenda.jpg'),
(6223003803759, 'Ulker Tamr Biscuits', 'images\\Ulker.jpeg'),
(6224008495079, 'Maxi', 'images\\Maxi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_supplier`
--

CREATE TABLE `product_supplier` (
  `P_ID` bigint(15) NOT NULL,
  `Sup_ID` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_supplier`
--

INSERT INTO `product_supplier` (`P_ID`, `Sup_ID`, `Price`, `Availability`) VALUES
(12649785, 139, 25, 1),
(12649785, 142, 12, 1),
(12649785, 462, 23, 1),
(115484877, 139, 20, 1),
(164988532, 142, 10, 1),
(271104058, 462, 15, 1),
(1144848442, 462, 60, 1),
(1164848442, 139, 12, 1),
(1849451326, 462, 34, 1),
(6223001360339, 139, 5, 1),
(6223001360339, 142, 4, 1),
(6223003803759, 139, 4, 1),
(6223003803759, 142, 5, 1),
(6223003803759, 462, 6, 1),
(6224008495079, 139, 2, 1),
(6224008495079, 142, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`ID`, `Name`, `Location`, `Logo`) VALUES
(139, 'Panda', 'Saudi Arabia, Jeddah', 'images\\Panda.png'),
(142, 'Carrefour', 'France, Paris', 'images\\carrefour.png'),
(462, 'Souq', 'Egypt, Cairo', 'images\\souq.com.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Email`, `Name`, `Password`) VALUES
(1, 'kmba501@buee.edu.eg', 'Karim', '333'),
(2, 'Amr@gmail.com', 'Amr Morsy', '222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `User_FK` (`user_ID`),
  ADD KEY `Supplier_id` (`Supplier_id`),
  ADD KEY `Product_id` (`Product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product_supplier`
--
ALTER TABLE `product_supplier`
  ADD PRIMARY KEY (`P_ID`,`Sup_ID`),
  ADD KEY `Ps_fk_sup` (`Sup_ID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `SUP_UN` (`Name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `User_FK` FOREIGN KEY (`user_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`Supplier_id`) REFERENCES `product_supplier` (`Sup_ID`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`Product_id`) REFERENCES `product_supplier` (`P_ID`);

--
-- Constraints for table `product_supplier`
--
ALTER TABLE `product_supplier`
  ADD CONSTRAINT `Ps_fk_sup` FOREIGN KEY (`Sup_ID`) REFERENCES `supplier` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_supplier_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `product` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
