-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 24, 2023 at 03:45 PM
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
-- Database: `fsd10_victor`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `dish_id` int(100) NOT NULL,
  `dish_name` varchar(100) NOT NULL,
  `dish_description` text NOT NULL,
  `dish_price` decimal(10,2) NOT NULL,
  `category` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`dish_id`, `dish_name`, `dish_description`, `dish_price`, `category`, `images`) VALUES
(1, 'Steak', 'Delicious steak with a side of vegetables', '30.00', 'Main Course', 'steak.jpg'),
(2, 'Paella', 'Traditional Spanish paella with seafood', '50.00', 'Main Course', 'paella.jpg'),
(3, 'SurfnTurf', 'A combination of seafood and meat', '30.00', 'Main Course', 'seafood.jpg'),
(4, 'Ramen', 'Japanese ramen noodles with toppings', '15.00', 'Main Course', 'ramen.jpg'),
(5, 'Sarmale', 'Cabbage rolls stuffed with meat', '25.00', 'Main Course', 'sarmale.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblgallery`
--

CREATE TABLE `tblgallery` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblgallery`
--

INSERT INTO `tblgallery` (`id`, `title`, `file_path`) VALUES
(1, 'Pizza', 'image/pizza.jpg'),
(2, 'Spaghetti', 'image/spaghetti.jpg'),
(3, 'Sarmale', 'image/Sarmale.jpg'),
(4, 'Surf and Turf', 'image/seafood.jpg'),
(5, 'Chicken Soup', 'image/Chicken soup.jpg'),
(6, 'Steak', 'image/Steak.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(20, 'yuka@yuka.com', '$2y$10$ZBbci0l/Tg9C1Sp7wsxP.Oi.gt5HPmF83OEcuRC/Qg0M7DrBjKtPe'),
(21, 'mjs@mjs.com', '$2y$10$Kvmd7W3wQCeEZ7/70T/ztuQISnt/SDq3flLlHaQT.X/sb1YHsHOVq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `tblgallery`
--
ALTER TABLE `tblgallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `dish_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblgallery`
--
ALTER TABLE `tblgallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
