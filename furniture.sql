-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 10:16 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'regular'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `role`) VALUES
(1, 'mainadmin', '$2y$10$zNaohhO177sSTKH1HJ0f0.id97aUuuDFHTkdytY9xKPI01s4d7S6q', 'super'),
(5, 'admin2', '$2y$10$fv5kKJam4vn5M1S4NP6ff./f.vgjRkILi4p3uwU/6ATKFG/3qvABy', 'regular'),
(6, 'admin3', '$2y$10$ROwaKseAEIPJffDmtWmI6.bWi1o1D376k9HK8uwbwOTYnfiCn/Sam', 'regular');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(4, 'Sofas'),
(5, 'Wardrobes'),
(28, '   Beds');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `enquiry` text NOT NULL,
  `admin` varchar(255) DEFAULT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `telephone`, `enquiry`, `admin`, `completed`) VALUES
(5, 'test', 'dragonfiregal.22@gm.com', '0909009', 'helo', 'mainadmin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `display` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'first hand'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`id`, `name`, `description`, `price`, `cat_id`, `display`, `type`) VALUES
(1, 'Four Poster', 'A beautiful four poster double bed.', 999, 2, 1, 'second hand'),
(10, ' King', ' A king sized bed with a modern style', 659, 4, 0, 'first hand'),
(11, ' Corner Sofa', ' A modern styled corner sofa', 699, 4, 1, 'second hand'),
(12, ' Black Leather Sofa', ' A stylish classic. A black leather sofa, not out of place in any home!', 499, 4, 1, 'first hand'),
(13, ' Oak Wardrobe', ' An Oak Wardrobe, two drawers and space to hang all your clothes', 399, 4, 1, 'first hand'),
(18, '  test', '  test', 123, 4, 0, 'first hand'),
(19, '    Beds12312323', ' fasdf', 0, 28, 1, 'first hand'),
(20, ' test', 'test furniture ', 989, 4, 1, 'second hand');

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_file` text NOT NULL,
  `offer_starting` date NOT NULL,
  `offer_ending` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`id`, `name`, `image_file`, `offer_starting`, `offer_ending`, `description`) VALUES
(2, '10% Discount On Furniture', '', '2019-04-03', '2019-05-01', '10% Discount on this new sofa'),
(10, 'tet', '', '2019-05-16', '2019-05-01', 'tets'),
(11, 'test', '', '2019-05-01', '2019-05-30', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `special`
--
ALTER TABLE `special`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
