-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 03:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avrdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_ID` varchar(50) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_desc` varchar(500) DEFAULT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `category_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `property_title` varchar(500) NOT NULL,
  `property_area` int(11) DEFAULT NULL,
  `property_address` varchar(1000) DEFAULT NULL,
  `property_city` varchar(50) DEFAULT NULL,
  `property_state` varchar(50) DEFAULT NULL,
  `property_country` varchar(50) DEFAULT NULL,
  `property_contact_phone_number` bigint(20) DEFAULT NULL,
  `property_plot_area` int(11) DEFAULT NULL,
  `property_measurements` varchar(1000) DEFAULT NULL,
  `property_approval` int(11) DEFAULT NULL,
  `property_approval_details` tinyint(1) DEFAULT NULL,
  `property_approval_authority` varchar(500) DEFAULT NULL,
  `property_width_road` varchar(1000) DEFAULT NULL,
  `property_owner_type` varchar(500) DEFAULT NULL,
  `property_price_per_sqft` decimal(10,0) DEFAULT NULL,
  `property_total_price` decimal(10,0) DEFAULT NULL,
  `property_is_negotiable` tinyint(1) DEFAULT NULL,
  `property_is_building_available` tinyint(1) DEFAULT NULL,
  `property_builtup_sqft` int(11) DEFAULT NULL,
  `property_no_bedroom` int(11) DEFAULT NULL,
  `property_no_kitchen` int(11) DEFAULT NULL,
  `property_no_floor` int(11) DEFAULT NULL,
  `property_no_bathrooms` int(11) DEFAULT NULL,
  `property_no_balcony` int(11) DEFAULT NULL,
  `property_water` varchar(1000) DEFAULT NULL,
  `property_house_desc` varchar(5000) DEFAULT NULL,
  `property_no_plots` int(11) DEFAULT NULL,
  `property_authorized_by_org` varchar(1000) DEFAULT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `property_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_is_admin` int(11) NOT NULL,
  `user_mobile` bigint(20) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `user_address` varchar(500) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `user_state` varchar(50) NOT NULL,
  `user_pin` bigint(20) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_ID`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
