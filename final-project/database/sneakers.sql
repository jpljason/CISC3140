-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 14, 2023 at 07:21 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `sneakers`
--

CREATE TABLE `sneakers` (
  `sneakersId` int(10) NOT NULL,
  `sneakersName` varchar(128) NOT NULL,
  `sneakersBrand` varchar(128) NOT NULL,
  `sneakersPrice` varchar(128) NOT NULL,
  `sneakersRating` varchar(999) DEFAULT NULL,
  `sneakersLink` varchar(128) NOT NULL,
  `sneakersImg` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sneakers`
--

INSERT INTO `sneakers` (`sneakersId`, `sneakersName`, `sneakersBrand`, `sneakersPrice`, `sneakersRating`, `sneakersLink`, `sneakersImg`) VALUES
(1, 'AIR JORDAN 1 RETRO HIGH OG \'UNC TOE\'', 'Air Jordan', '$199.99', '<span class=\"fa fa-star checked\"></span>\r\n                <span class=\"fa fa-star checked\"></span>\r\n                <span class=\"fa fa-star checked\"></span>\r\n                <span class=\"fa fa-star checked\"></span>\r\n                <span class=\"fa fa-star-half-o\"></span>\r\n                126', '../product detail pages/airjordan1.php', '../images/item imgs/air jordan/airjordan1.jpg'),
(2, 'AIR JORDAN 4 RETRO \'MILITARY BLACK\'', 'Air Jordan', '$269.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star-half-o\"></span>\r\n          92', '../product detail pages/airjordan2.php', '../images/item imgs/air jordan/airjordan2.jpg'),
(3, 'AIR JORDAN 4 RETRO \'THUNDER\' 2023', 'Air Jordan', '$249.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star-half-o\"></span>\r\n          89', '../product detail pages/airjordan3.php', '../images/item imgs/air jordan/airjordan3.jpg'),
(4, 'AIR JORDAN 3 RETRO \'WASHINGTON WIZARDS\'', 'Air Jordan', '$249.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          79', '../product detail pages/airjordan4.php', '../images/item imgs/air jordan/airjordan4.jpg'),
(5, 'DUNK LOW \'BLACK WHITE\'', 'Nike', '$159.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          257', '../product detail pages/nike1.php', '../images/item imgs/nike/nike1.jpg'),
(6, 'TRAVIS SCOTT X DUNK LOW PREMIUM QS SB \'CACTUS JACK\'', 'Nike', '$1349.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star-half-o\"></span>\r\n          36', '../product detail pages/nike2.php', '../images/item imgs/nike/nike2.jpg'),
(7, 'AIR FORCE 1 \'07 \'TRIPLE WHITE\'', 'Nike', '$99.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          123', '../product detail pages/nike3.php', '../images/item imgs/nike/nike3.jpg'),
(8, 'OFF-WHITE X DUNK LOW \'LOT 45 OF 50\'', 'Nike', '$419.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star-half-o\"></span>\r\n          45', '../product detail pages/nike4.php', '../images/item imgs/nike/nike4.jpg'),
(9, 'YEEZY SLIDES \'BONE\' 2022', 'Adidas', '$149.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          42', '../product detail pages/adidas1.php', '../images/item imgs/adidas/adidas1.jpg'),
(10, 'YEEZY BOOST 350 V2 \'ZEBRA\' 2022/2023', 'Adidas', '$299.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          84', '../product detail pages/adidas2.php', '../images/item imgs/adidas/adidas2.jpg'),
(11, 'SUPERSTAR \'CORE BLACK WHITE\'', 'Adidas', '$75.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star-half-o\"></span>\r\n          54', '../product detail pages/adidas3.php', '../images/item imgs/adidas/adidas3.jpg'),
(12, 'ULTRABOOST 4.0 DNA \'CLOUD WHITE\'', 'Adidas', '$149.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          187', '../product detail pages/adidas4.php', '../images/item imgs/adidas/adidas4.jpg'),
(13, 'COMME DES GARCONS X CHUCK TAYLOR ALL STAR HIGH \'PLAY\'', 'Converse', '$129.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star-half-o\"></span>\r\n          68', '../product detail pages/converse1.php', '../images/item imgs/converse/converse1.jpg'),
(14, 'WMNS CHUCK TAYLOR ALL STAR HIGH \'VALENTINE\'S DAY 2023 - VINTAGE WHITE\'', 'Converse', '$109.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          32', '../product detail pages/converse2.php', '../images/item imgs/converse/converse2.jpg'),
(15, 'OLD SKOOL \'BLACK WHITE\'', 'Vans', '$39.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star-half-o\"></span>\r\n          25', '../product detail pages/vans1.php', '../images/item imgs/vans/vans1.jpg'),
(16, 'CLASSIC SLIP-ON \'CHECKERBOARD\'', 'Vans', '$49.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star-half-o\"></span>\r\n          34', '../product detail pages/vans2.php', '../images/item imgs/vans/vans2.jpg'),
(17, 'SNEEZE X CLASSIC LEATHER \'WHITE\'', 'Reebok', '$229.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          7', '../product detail pages/reebok1.php', '../images/item imgs/reebok/reebok1.jpg'),
(18, 'CLUB C 85 VINTAGE \'CHALK BRUSH BROWN\'', 'Reebok', '$99.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star-half-o\"></span>\r\n          87', '../product detail pages/reebok2.php', '../images/item imgs/reebok/reebok2.jpg'),
(19, 'KITH X MARVEL X GEL LYTE 3 \'07 REMASTERED \'X-MEN 60TH ANNIV ...', 'ASICS', '$489.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          17', '../product detail pages/ASICS1.php', '../images/item imgs/ASICS/asics1.jpg'),
(20, 'CONCEPTS X GEL LYTE 5 \'LIBERTEA\'', 'ASICS', '$169.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star-half-o\"></span>\r\n          13', '../product detail pages/ASICS2.php', '../images/item imgs/asics/asics2.jpg'),
(21, 'EX89 \'CREAM WHITE\'', 'ASICS', '$99.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          42', '../product detail pages/ASICS3.php', '../images/item imgs/asics/asics3.jpg'),
(22, 'RICK AND MORTY X MB.01', 'Puma', '$399.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star\"></span>\r\n          57', '../product detail pages/puma1.php', '../images/item imgs/puma/puma1.jpg'),
(23, 'MB.02 \'PHENOM\'', 'Puma', '$119.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star\"></span>\r\n          <span class=\"fa fa-star\"></span>\r\n          12', '../product detail pages/puma2.php', '../images/item imgs/puma/puma2.jpg'),
(24, 'TRC BLAZE COURT \'VENICE BEACH LEAGUE\'', 'Puma', '$199.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          64', '../product detail pages/puma3.php', '../images/item imgs/puma/puma3.jpg'),
(25, 'KEITH HARING X CHUCK 70 HIGH', 'Converse', '$89.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          23', '../product detail pages/converse3.php', '../images/item imgs/converse/converse3.jpg'),
(26, 'A$AP ROCKY X OLD SKOOL \'WORLDWIDE PACK - BLACK FLAMES\'', 'Vans', '$307.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          35', '../product detail pages/vans3.php', '../images/item imgs/vans/vans3.jpg'),
(27, 'PUMP TZ \'SOLAR YELLOW\'', 'Reebok', '$149.99', '<span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star checked\"></span>\r\n          <span class=\"fa fa-star\"></span>\r\n          23', '../product detail pages/reebok3.php', '../images/item imgs/reebok/reebok3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sneakers`
--
ALTER TABLE `sneakers`
  ADD PRIMARY KEY (`sneakersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sneakers`
--
ALTER TABLE `sneakers`
  MODIFY `sneakersId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
