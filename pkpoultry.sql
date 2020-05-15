-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 02:00 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkpoultry`
--

-- --------------------------------------------------------

--
-- Table structure for table `culls`
--

CREATE TABLE `culls` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `note` text NOT NULL,
  `date_reg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `lname`, `email`, `phone`, `note`, `date_reg`) VALUES
(6, 'Emmanuel', 'TT', 'ladamob47@gmail.com', '741258856', 'ytrewq', '2019-05-25 11:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `dead_chicken`
--

CREATE TABLE `dead_chicken` (
  `dead_id` int(11) NOT NULL,
  `dead_batch_id` varchar(25) NOT NULL,
  `dead_updated_by` varchar(20) NOT NULL,
  `dead_quantity` int(10) NOT NULL DEFAULT '0',
  `dead_remark` text NOT NULL,
  `dead_datereg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dead_chicken`
--

INSERT INTO `dead_chicken` (`dead_id`, `dead_batch_id`, `dead_updated_by`, `dead_quantity`, `dead_remark`, `dead_datereg`) VALUES
(13, 'DO-12', 'Paa Kwesi', 45, '', '2019-06-01 14:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `dead_pullet`
--

CREATE TABLE `dead_pullet` (
  `id` int(11) NOT NULL,
  `batch_id` varchar(25) NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `remark` text NOT NULL,
  `datereg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eggs`
--

CREATE TABLE `eggs` (
  `egg_id` int(11) NOT NULL,
  `egg_batch_id` varchar(20) NOT NULL,
  `egg_quantity` int(10) NOT NULL DEFAULT '0',
  `egg_updated_by` varchar(21) NOT NULL,
  `egg_datereg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eggs`
--

INSERT INTO `eggs` (`egg_id`, `egg_batch_id`, `egg_quantity`, `egg_updated_by`, `egg_datereg`) VALUES
(1, '0', 41, 'Paa  Kwesi', '2019-05-18 09:23:13'),
(2, 'DO-12', 21, 'Paa  Kwesi', '2019-05-25 11:03:54'),
(3, 'DO-13', 200, 'Pamfo Kwesi', '2019-05-25 15:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `itemDesc` varchar(25) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `note` text NOT NULL,
  `dateinserted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `itemDesc`, `price`, `quantity`, `note`, `dateinserted`) VALUES
(1, 'Abete3', 12, 200, 'odan b', '2019-05-17 23:04:17'),
(2, 'Feed', 21, 2, 'Monday Feed', '2019-05-22 14:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `id` int(11) NOT NULL,
  `itemDesc` varchar(25) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `dateinserted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`id`, `itemDesc`, `price`, `quantity`, `dateinserted`) VALUES
(1, 'Onua', 24, 12, '2019-05-17 23:00:20'),
(2, 'Coco', 45, 14, '2019-05-21 19:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `day` int(10) NOT NULL,
  `medication` varchar(100) NOT NULL,
  `dateinserted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `day`, `medication`, `dateinserted`) VALUES
(1, 1, 'Antibiotics/Vitamins', '2019-06-01 00:00:00'),
(2, 2, 'Antibiotics/Vitamins', '2019-06-01 10:42:22'),
(3, 3, 'Antibiotics/Vitamins', '2019-06-01 10:44:08'),
(4, 4, 'Antibiotics/Vitamins', '2019-06-01 10:44:08'),
(5, 5, 'Antibiotics/Vitamins', '2019-06-01 10:44:08'),
(6, 6, 'Plain Water', '2019-06-01 10:44:08'),
(7, 7, 'Vacination', '2019-06-01 10:44:08'),
(8, 8, 'Paracetamol', '2019-06-01 11:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `itemDesc` varchar(20) NOT NULL,
  `retailprice` int(11) NOT NULL,
  `wholesaleprice` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `dateinserted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `itemDesc`, `retailprice`, `wholesaleprice`, `stock`, `dateinserted`) VALUES
(1, 'Cock', 123, 98, 451, '2019-05-17 23:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `sales_batch_id` varchar(25) NOT NULL DEFAULT '0',
  `Product` varchar(23) NOT NULL DEFAULT '0',
  `sold_to` varchar(60) NOT NULL,
  `price` int(10) NOT NULL DEFAULT '0',
  `num_product` int(10) NOT NULL,
  `date_reg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sales_batch_id`, `Product`, `sold_to`, `price`, `num_product`, `date_reg`, `note`) VALUES
(5, 'DO-12', 'Egg', 'ladamob47@gmail.com', 58, 10, '2019-06-02 00:51:29', 'Egg'),
(6, 'DO-12', 'Pullet', 'ladamob47@gmail.com', 231, 12, '2019-06-02 01:12:44', 'Pullet');

-- --------------------------------------------------------

--
-- Table structure for table `total_chicken`
--

CREATE TABLE `total_chicken` (
  `id` int(11) NOT NULL,
  `batch_id` varchar(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `updated_by` varchar(21) NOT NULL,
  `dateinserted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_chicken`
--

INSERT INTO `total_chicken` (`id`, `batch_id`, `quantity`, `updated_by`, `dateinserted`) VALUES
(10, 'DO-12', 78, 'Paa Kwesi', '2019-06-01 14:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `total_pullet`
--

CREATE TABLE `total_pullet` (
  `id` int(11) NOT NULL,
  `batch_id` varchar(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `updated_by` varchar(21) NOT NULL,
  `dateinserted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_pullet`
--

INSERT INTO `total_pullet` (`id`, `batch_id`, `quantity`, `updated_by`, `dateinserted`) VALUES
(3, 'DO-13', 78, 'Paa  Kwesi', '2019-05-21 09:40:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `datereg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `mname`, `email`, `pwd`, `gender`, `phone`, `datereg`, `role`) VALUES
(3, 'Paa', 'Kwesi', 'Ocran', 'pk@gmail.com', 'admin', 'Male', '0245985745', '2019-05-25 15:18:01', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `culls`
--
ALTER TABLE `culls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dead_chicken`
--
ALTER TABLE `dead_chicken`
  ADD PRIMARY KEY (`dead_id`);

--
-- Indexes for table `dead_pullet`
--
ALTER TABLE `dead_pullet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eggs`
--
ALTER TABLE `eggs`
  ADD PRIMARY KEY (`egg_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_chicken`
--
ALTER TABLE `total_chicken`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_pullet`
--
ALTER TABLE `total_pullet`
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
-- AUTO_INCREMENT for table `culls`
--
ALTER TABLE `culls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dead_chicken`
--
ALTER TABLE `dead_chicken`
  MODIFY `dead_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dead_pullet`
--
ALTER TABLE `dead_pullet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eggs`
--
ALTER TABLE `eggs`
  MODIFY `egg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `total_chicken`
--
ALTER TABLE `total_chicken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `total_pullet`
--
ALTER TABLE `total_pullet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
