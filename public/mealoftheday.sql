-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 04:44 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mealoftheday`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Name` varchar(150) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Name`, `Email`, `Phone`, `Message`) VALUES
('', '', '', ''),
('Spirafv', 'spifds@gmail.com', '4379925106', 'fdsfd'),
('Spirafv', 'souravsachdeva13@gmail.com', '4379925106', 'fsdfdfds'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fullmenu`
--

CREATE TABLE `fullmenu` (
  `Id` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Price` int(11) NOT NULL,
  `Category` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fullmenu`
--

INSERT INTO `fullmenu` (`Id`, `Name`, `Price`, `Category`) VALUES
(1, 'Shahi Paneer', 8, 'Veg'),
(2, 'Mutter Paneer', 8, 'Veg'),
(3, 'Paneer Bhurji', 9, 'Veg'),
(4, 'Chilli Paneer', 9, 'Veg'),
(5, 'Malai Kofta', 8, 'Veg'),
(6, ' Aloo Gobhi', 8, 'Veg'),
(7, ' Aloo Jeera', 8, 'Veg'),
(8, ' Aloo Methi', 9, 'Veg'),
(9, ' Palak Paneer', 10, 'Veg'),
(10, 'Chicken Tikka', 15, 'Non-Veg'),
(11, 'Chicken Kabab', 15, 'Non-Veg'),
(12, 'Fish Bhara Kabab', 18, 'Non-Veg'),
(13, 'Rice And Curry', 6, 'Rice'),
(14, 'Lemon Rice', 5, 'Rice'),
(15, 'Kashmiri Rice', 8, 'Rice'),
(16, 'Veg Biryani', 7, 'Rice'),
(17, 'Rice Pilaf', 6, 'Rice'),
(18, 'Plain Rice', 5, 'Rice'),
(19, 'dffs', 0, 'Veg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` float NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Id`, `Name`, `Price`, `Category`) VALUES
(1, 'Shahi Paneer', 8, 'Veg'),
(2, 'Mutter Paneer', 8, 'Veg'),
(3, 'Paneer Bhurji', 9, 'Veg'),
(4, 'Chilli Paneer', 9, 'Veg'),
(5, 'Malai Kofta', 8, 'Veg'),
(6, ' Aloo Gobhi', 8, 'Veg'),
(7, ' Aloo Jeera', 8, 'Veg'),
(8, ' Aloo Methi', 9, 'Veg'),
(9, ' Palak Paneer', 10, 'Veg'),
(10, 'Chikken Tikka', 15, 'Non-Veg'),
(11, 'Chicken Kabab', 15, 'Non-Veg'),
(12, 'Fish Bhara Kabab', 18, 'Non-Veg'),
(13, 'Rice And Curry', 6, 'Rice'),
(14, 'Lemon Rice', 5, 'Rice'),
(15, 'Kashmiri Rice', 8, 'Rice'),
(16, 'Veg Biryani', 7, 'Rice'),
(17, 'Rice Pilaf', 6, 'Rice'),
(18, 'Plain Rice', 5, 'Rice');

-- --------------------------------------------------------

--
-- Table structure for table `orderz`
--

CREATE TABLE `orderz` (
  `CustomerId` int(10) NOT NULL,
  `OrderId` int(11) NOT NULL,
  `Dish` varchar(150) NOT NULL,
  `Dish1` varchar(150) NOT NULL,
  `Dish2` varchar(150) NOT NULL,
  `Dish3` varchar(150) NOT NULL,
  `Dish4` varchar(150) NOT NULL,
  `Dish5` varchar(150) NOT NULL,
  `Dish6` varchar(150) NOT NULL,
  `Dish7` varchar(150) NOT NULL,
  `Dish8` varchar(150) NOT NULL,
  `Dish9` varchar(150) NOT NULL,
  `Dish10` varchar(150) NOT NULL,
  `Dish11` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderz`
--

INSERT INTO `orderz` (`CustomerId`, `OrderId`, `Dish`, `Dish1`, `Dish2`, `Dish3`, `Dish4`, `Dish5`, `Dish6`, `Dish7`, `Dish8`, `Dish9`, `Dish10`, `Dish11`) VALUES
(46, 24, 'Goat Curry', 'Kadai Chicken', 'Goat Curry', 'Kadai Chicken', 'Goat Curry', 'Goat Curry', 'Kadai Chicken', 'Butter Chicken', 'Goat Curry', 'Butter Chicken', 'Goat Curry', 'Chicken Curry'),
(43, 26, ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi'),
(43, 27, ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi', ' Aloo Gobhi', ' Palak Paneer', 'Lemon Rice', ' Aloo Gobhi', ' Aloo Gobhi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(400) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Username`, `Email`, `Address`, `Phone`, `Password`) VALUES
(1, 'Sourav Sachdeva', '', 'souravsachdeva13@gmail.com', '84 Hood Cres', 2147483647, 'Navalsweet'),
(2, 'fsds', 'dfdf', 'dssd@fg.com', 'sderdf', 342324, 'dsfsdf'),
(7, '', '', '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fullmenu`
--
ALTER TABLE `fullmenu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UniName` (`Name`);

--
-- Indexes for table `orderz`
--
ALTER TABLE `orderz`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fullmenu`
--
ALTER TABLE `fullmenu`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orderz`
--
ALTER TABLE `orderz`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
