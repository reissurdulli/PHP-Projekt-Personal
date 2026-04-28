-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2026 at 06:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamburgershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(6) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_desc`, `product_category`, `product_price`, `product_image`) VALUES
(1, 'Chicken Burger', 'Crispy chicken fillet burger', 'burger', 2.70, 'images/ChickenBurger2.jpg'),
(2, 'Cheese Burger', 'Classic cheese burger', 'burger', 3.00, 'images/cheese-burger.png'),
(3, 'Beef Burger', 'Juicy beef patty burger', 'burger', 2.70, 'images/BeefBurger.jpg'),
(4, 'Margherita Pizza', 'Classic tomato and mozzarella', 'pizza', 4.00, 'images/PicaMargarita.png'),
(5, 'Pepperoni Pizza', 'Loaded with pepperoni', 'pizza', 4.70, 'images/peperoni.png'),
(6, 'Sausage Pizza', 'Sausage and cheese pizza', 'pizza', 4.30, 'images/Sausage.png'),
(7, 'Cocacola', 'Cold Coca-Cola 330ml', 'drink', 0.70, 'images/coke.png'),
(8, 'Cocacola Zero', 'Sugar free Coca-Cola 330ml', 'drink', 0.70, 'images/colazero.png'),
(9, 'Pepsi', 'Cold Pepsi 330ml', 'drink', 0.70, 'images/pepsi.jpg'),
(10, 'Fanta', 'Cold Fanta 330ml', 'drink', 0.70, 'images/Fanta.png'),
(11, 'Uje', 'Still water 500ml', 'drink', 0.70, 'images/Uje.png'),
(13, 'Uje i Gazuar', 'Sparkling water 500ml', 'drink', 0.70, 'images/uje-gazuar.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` varchar(10) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emri`, `username`, `email`, `password`, `is_admin`) VALUES
(1, 'Reis', 'ReisAdmin', 'reis@gmail.com', '1234', 'true'),
(2, 'Test User', 'testuser', 'test@gmail.com', '1234', 'false'),
(3, 'testreis', 'testsurdulli', 'rs@gmail.com', '12345678', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
