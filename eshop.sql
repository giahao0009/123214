-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 03:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Id` int(11) NOT NULL,
  `Username` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `Phone` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Id`, `Username`, `Password`, `Email`, `Phone`) VALUES
(1, 'giahao0009', 'giahao098', 'giahao0009@gmail.com', '0946005077'),
(2, 'giahao009', 'giahao098', 'giahao0009@gmail.com', '0946005077'),
(3, 'giahao1234', 'giahao098', 'giahao0009@gmail.com', '0946005077'),
(5, 'giahao123214', 'giahao098', 'haodeptrai55@gmail.com', '0946005077'),
(6, 'giahao67325481', 'giahao098', 'haodeptrai55@gmail.com', '0946005077');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `AccountId` int(11) DEFAULT NULL,
  `ProductId` int(11) DEFAULT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `AccountId`, `ProductId`, `Quantity`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1),
(3, 3, 2, 1),
(4, 3, 6, 1),
(5, 3, 9, 1),
(6, 3, 12, 1),
(7, 2, 5, 1),
(8, 2, 10, 1),
(9, 2, 11, 1),
(10, 1, 2, 1),
(11, 1, 3, 1),
(12, 2, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Id` int(11) NOT NULL,
  `AccountId` int(11) NOT NULL,
  `ShippingAddress` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ShippingPhone` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Total` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Id`, `AccountId`, `ShippingAddress`, `ShippingPhone`, `Total`) VALUES
(1, 1, 'Quận 3, Tp.HCM', '0987654321', 618000),
(2, 2, 'Quận 1, Tp.HCM', '0983564782', 167000),
(3, 2, 'Quận 5, Tp.HCM', '0983564782', 570000),
(4, 2, 'Quận 1, Tp.HCM', '0983564782', 480000),
(5, 3, 'Quận 7, Tp.HCM', '0905785346', 829000),
(6, 1, 'Nha Trang', '0459123845', 478000),
(7, 3, 'Quận 7, Tp.HCM', '0905785346', 642000),
(8, 1, 'Nha Trang', '0459123845', 327000);

-- --------------------------------------------------------

--
-- Table structure for table `invoicedetail`
--

CREATE TABLE `invoicedetail` (
  `Id` int(11) NOT NULL,
  `InvoiceId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `UnitPrice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `Description` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `ProductTypeId` int(11) DEFAULT NULL,
  `Image` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Name`, `Description`, `Price`, `ProductTypeId`, `Image`) VALUES
(1, 'INVASION TEE', NULL, 350000, 1, 'san-pham-7.webp'),
(2, 'MELTING GUM TEE', NULL, 350000, 1, 'san-pham-8.webp'),
(3, 'FLAMBOYANT SWEATER', NULL, 460000, 1, 'san-pham-15.webp'),
(4, 'APOCALYPSE TEE', NULL, 460000, 1, 'san-pham-21.webp'),
(5, 'HATRED BLACK TEE', NULL, 460000, 1, 'san-pham-22.webp'),
(6, 'BLING BLING TEE', NULL, 460000, 1, 'san-pham-25.webp'),
(7, 'HADES PLAY CARDIGAN', NULL, 460000, 1, 'san-pham-27.webp'),
(8, 'RACING CAR TEE', NULL, 460000, 1, 'san-pham-31.webp'),
(9, 'HADES PLAY PINK TEE', NULL, 460000, 1, 'san-pham-32.webp'),
(10, 'TORNADO TIEDYE TEE', NULL, 460000, 1, 'san-pham-33.webp'),
(11, 'WOLF SYMBOL TEE', NULL, 460000, 1, 'san-pham-35.webp'),
(12, 'MASCOT DIAMOND TEE', NULL, 460000, 1, 'san-pham-36.webp'),
(13, 'FUTURE BRIGHT Shirt', NULL, 460000, 1, 'san-pham-38.webp'),
(14, 'HADES CITY TEE', NULL, 460000, 1, 'san-pham-39.webp'),
(15, 'OUT DA HERE SWEATER', NULL, 460000, 1, 'san-pham-42.webp'),
(16, 'SKETCH BIG LOGO TEE', NULL, 460000, 1, 'san-pham-44.webp'),
(17, 'LONE WOLF TEE', NULL, 460000, 1, 'san-pham-46.webp'),
(18, 'VISUAL ACID TEE', NULL, 460000, 1, 'san-pham-48.webp'),
(19, 'RAINBOW TEE', NULL, 460000, 1, 'san-pham-49.webp'),
(20, 'APOCALYPSE TEE', NULL, 460000, 1, 'san-pham-52.webp'),
(21, 'FLAMBOYANT SWEATER', NULL, 460000, 1, 'san-pham-57.webp'),
(22, 'FLAMBOYANT SWEATER', NULL, 460000, 1, 'san-pham-59.jpg'),
(23, 'FLAMBOYANT SWEATER', NULL, 460000, 1, 'san-pham-60.jpg'),
(24, 'FLAMBOYANT SWEATER', NULL, 460000, 1, 'san-pham-62.webp'),
(25, 'FLAMBOYANT SWEATER', NULL, 460000, 1, 'san-pham-64.webp'),
(26, 'FLAMBOYANT SWEATER', NULL, 460000, 1, 'san-pham-65.webp'),
(27, 'FLAMBOYANT SWEATER', NULL, 460000, 1, 'san-pham-67.webp'),
(28, 'FLAMBOYANT SWEATER', NULL, 460000, 1, 'san-pham-69.webp'),
(29, 'BLING BLING JACKET', NULL, 45000, 2, 'san-pham-ao-khoac-01.webp'),
(30, 'MAGMA HOODIE ZIP', NULL, 550000, 2, 'san-pham-ao-khoac-02.webp'),
(31, 'SKELETON HOODIE', NULL, 600000, 2, 'san-pham-16.webp'),
(32, 'SKELETON HOODIE', NULL, 600000, 2, 'san-pham-24.webp'),
(33, 'SKELETON HOODIE', NULL, 600000, 2, 'san-pham-26.webp'),
(34, 'SKELETON HOODIE', NULL, 600000, 2, 'san-pham-28.webp'),
(35, 'SKELETON HOODIE', NULL, 600000, 2, 'san-pham-29.webp'),
(36, 'SKELETON HOODIE', NULL, 600000, 2, 'san-pham-30.webp'),
(37, 'SKELETON HOODIE', NULL, 600000, 2, 'san-pham-34.webp'),
(38, 'SKELETON HOODIE', NULL, 600000, 2, 'san-pham-47.webp'),
(39, 'SKELETON HOODIE', NULL, 600000, 2, 'san-pham-50.jpg'),
(40, 'SKELETON HOODIE', NULL, 600000, 2, 'san-pham-54.jpg'),
(41, 'SKELETON HOODIE', NULL, 600000, 2, 'san-pham-55.webp'),
(42, 'SKELETON HOODIE', NULL, 600000, 2, 'san-pham-58.jpg'),
(43, 'FLAMBOYANT SWEATER', NULL, 460000, 2, 'san-pham-61.jpg'),
(44, 'FLAMBOYANT SWEATER', NULL, 460000, 2, 'san-pham-68.webp'),
(45, 'TIEDYE SHORTS GREY', NULL, 380000, 3, 'san-pham-9.webp'),
(46, 'TIEDYE SHORTS GREY', NULL, 380000, 3, 'san-pham-17.webp'),
(47, 'TIEDYE SHORTS GREY', NULL, 380000, 3, 'san-pham-18.webp'),
(48, 'TIEDYE SHORTS GREY', NULL, 380000, 3, 'san-pham-23.webp'),
(49, 'TIEDYE SHORTS GREY', NULL, 380000, 3, 'san-pham-41.webp'),
(50, 'TIEDYE SHORTS GREY', NULL, 380000, 3, 'san-pham-51.webp'),
(51, 'TIEDYE SHORTS GREY', NULL, 380000, 3, 'san-pham-63.webp'),
(52, 'SS2 SHOULDER BAG', NULL, 380000, 4, 'san-pham-10.webp'),
(53, 'HADES THUNDER BACKPACK', NULL, 550000, 4, 'san-pham-13.webp'),
(54, 'SS2 BACKPACK', NULL, 600000, 4, 'san-pham-19.webp'),
(55, 'SS2 BACKPACK', NULL, 600000, 4, 'san-pham-37.webp'),
(56, 'SS2 BACKPACK', NULL, 600000, 4, 'san-pham-40.webp'),
(57, 'SS2 BACKPACK', NULL, 600000, 4, 'san-pham-45.webp'),
(58, 'SS2 BACKPACK', NULL, 600000, 4, 'san-pham-66.webp'),
(59, 'SS2 BACKPACK', NULL, 600000, 5, 'giay-1.jpg'),
(60, 'SS2 BACKPACK', NULL, 600000, 5, 'giay-3.jpg'),
(61, 'SS2 BACKPACK', NULL, 600000, 5, 'giay-4.jpg'),
(62, 'SS2 BACKPACK', NULL, 600000, 5, 'giay-5.jpg'),
(63, 'TIEDYE CAP', NULL, 200000, 6, 'san-pham-11.webp'),
(64, 'STUFFED WOLF', NULL, 300000, 6, 'san-pham-12.webp'),
(65, 'STUFFED WOLF', NULL, 300000, 6, 'san-pham-43.webp'),
(66, 'STUFFED WOLF', NULL, 300000, 6, 'san-pham-53.webp');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`Id`, `Name`) VALUES
(1, 'Áo'),
(2, 'Áo khoác'),
(3, 'Quần'),
(4, 'Balo'),
(5, 'Giày'),
(6, 'Khác');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UC_Cart` (`AccountId`,`ProductId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `AccountId` (`AccountId`);

--
-- Indexes for table `invoicedetail`
--
ALTER TABLE `invoicedetail`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UC_InvoiceDetail` (`InvoiceId`,`ProductId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProductTypeId` (`ProductTypeId`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `invoicedetail`
--
ALTER TABLE `invoicedetail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`AccountId`) REFERENCES `account` (`Id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`AccountId`) REFERENCES `account` (`Id`);

--
-- Constraints for table `invoicedetail`
--
ALTER TABLE `invoicedetail`
  ADD CONSTRAINT `invoicedetail_ibfk_1` FOREIGN KEY (`InvoiceId`) REFERENCES `invoice` (`Id`),
  ADD CONSTRAINT `invoicedetail_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `product` (`Id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ProductTypeId`) REFERENCES `producttype` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
