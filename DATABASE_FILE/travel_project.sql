-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2024 at 04:52 PM
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
-- Database: `travel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '4ff398ecdaff7e1d8e526ed9faedda54', '2024-06-24 09:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `comment` text NOT NULL,
  `registration_date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Pending; 1=Confirmed; 2=Cancelled',
  `cancelled_by` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=User; 2=Admin',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`id`, `user_id`, `package_id`, `from_date`, `to_date`, `comment`, `registration_date`, `status`, `cancelled_by`, `created_at`) VALUES
(2, 2, 7, '2024-08-15', '2024-08-16', 'Hi can you book me please? thank you!', '2024-08-15', 2, 2, '2024-08-15 14:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packagetype`
--

CREATE TABLE `tbl_packagetype` (
  `id` int(11) NOT NULL,
  `package_type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_packagetype`
--

INSERT INTO `tbl_packagetype` (`id`, `package_type`, `created_at`) VALUES
(1, 'Corporates', '2024-06-22 03:30:13'),
(2, 'Family', '2024-06-22 03:30:32'),
(3, 'School/Colleges', '2024-06-22 03:30:43'),
(4, 'Couple', '2024-06-22 03:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE `tbl_subscribe` (
  `id` int(11) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_subscribe`
--

INSERT INTO `tbl_subscribe` (`id`, `emailid`, `created_at`) VALUES
(2, 'kobe24@gmail.com', '2024-08-15 14:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tourpackage`
--

CREATE TABLE `tbl_tourpackage` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_type` smallint(6) NOT NULL,
  `package_location` varchar(255) NOT NULL,
  `package_price` int(11) NOT NULL,
  `package_details` text NOT NULL,
  `package_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_tourpackage`
--

INSERT INTO `tbl_tourpackage` (`id`, `package_name`, `package_type`, `package_location`, `package_price`, `package_details`, `package_image`, `created_at`) VALUES
(5, 'Grand Canyon Adventure', 1, 'Grand Canyon, Sedona', 95000, 'Enjoy breathtaking views of the Grand Canyon with guided tours, helicopter rides, and sunset views. Includes luxury lodge accommodations, gourmet dining, and optional adventure activities.', 'arizona.jpg', '2024-08-15 13:47:05'),
(6, 'Great Barrier Reef Extravaganza', 1, 'Cairns, Whitsunday Islands', 120000, 'Experience the wonders of the Great Barrier Reef with snorkeling, diving, and luxury resort stays. Includes reef excursions, private beach access, and gourmet meals.', 'australia.jpg', '2024-08-15 13:49:41'),
(7, 'Rocky Mountain Exploration', 1, 'Aspen, Boulder', 110000, 'Explore the majestic Rocky Mountains with guided hikes, white-water rafting, and cozy lodge accommodations. Includes adventure packages and wellness treatments.', 'colorado.jpg', '2024-08-15 13:50:11'),
(8, 'Desert Oasis Experience', 1, 'Dubai Desert, Downtown Dubai', 130000, 'Enjoy the ultimate desert experience with luxury safari camps, city tours, and gourmet dining. Includes camel rides, dune adventures, and spa treatments.', 'dubai.jpg', '2024-08-15 13:50:52'),
(9, 'Northern Lights Spectacle', 4, 'Reykjavik, Golden Circle', 120000, 'Witness the breathtaking Northern Lights, explore geothermal wonders, and enjoy luxury stays. Includes guided tours, hot springs access, and local cuisine.', 'iceland.jpg', '2024-08-15 13:51:25'),
(10, 'Tuscan Romance & History', 4, 'Rome, Tuscany', 150000, 'Discover the rich history of Rome and enjoy wine tasting in Tuscany. Includes guided historical tours, vineyard visits, and luxury accommodations.', 'italy.jpg', '2024-08-15 13:52:05'),
(11, 'Cherry Blossom Bliss', 4, ' Tokyo, Kyoto', 115000, 'Experience Japan’s cultural treasures and cherry blossoms. Includes city tours, traditional tea ceremonies, and luxury accommodations.', 'japan.jpg', '2024-08-15 13:52:40'),
(12, 'Royal British Experience', 4, 'Central London, Royal Palaces', 120000, 'Explore London’s royal landmarks and enjoy luxury accommodations. Includes guided tours of historic sites, West End shows, and gourmet dining.', 'london.jpg', '2024-08-15 13:53:38'),
(13, 'Overwater Paradise', 2, 'Malé, Private Atolls', 110000, ' Enjoy a luxurious stay in overwater bungalows, with private beach access, snorkeling, and diving. Includes all-inclusive meals and spa services.', 'maldives.jpg', '2024-08-15 13:54:16'),
(14, 'Kiwi Adventure & Culture', 2, 'Auckland, Queenstown', 85000, 'Explore New Zealand’s stunning landscapes with guided tours, adventure activities, and luxury lodges. Includes Maori cultural experiences and scenic tours', 'newzealand.jpg', '2024-08-15 13:54:43'),
(15, 'Fjord Serenity', 2, 'Bergen, Tromsø', 100000, 'Cruise through Norway’s stunning fjords, witness the Northern Lights, and enjoy cozy lodges. Includes guided nature tours and luxury experiences.', 'Norway.jpg', '2024-08-15 13:55:13'),
(16, 'Theme Park Extravaganza', 2, 'Walt Disney World, Universal Studios', 80000, 'Enjoy access to top theme parks with VIP passes, accommodation, and exclusive experiences. Includes park tickets, dining options, and fun activities.', 'orlando.jpg', '2024-08-15 13:56:04'),
(17, 'Parisian Elegance', 3, 'Central Paris, Versailles', 37000, 'Discover Paris’s iconic landmarks, enjoy luxury accommodations, and experience gourmet dining. Includes guided tours, Seine River cruises, and art experiences.', 'paris.jpg', '2024-08-15 13:56:44'),
(18, 'Modern Marvels & Heritage', 3, 'Marina Bay, Sentosa', 33000, 'Experience Singapore’s modern attractions and cultural heritage with guided tours, luxury stays, and local cuisine. Includes visits to gardens, tech hubs, and cultural sites.', 'sg.jpg', '2024-08-15 13:57:16'),
(19, 'Spanish Fiesta', 3, 'Barcelona, Madrid', 36000, 'Discover Spain’s vibrant culture, history, and cuisine with guided tours, flamenco shows, and luxury accommodations. Includes city tours, local experiences, and gourmet dining.', 'spain.jpg', '2024-08-15 13:57:55'),
(20, 'Serengeti Safari & Zanzibar Retreat', 2, 'Serengeti, Zanzibar', 45000, 'Experience the thrill of a Serengeti safari and unwind on Zanzibar’s beaches. Includes game drives, luxury lodges, and beach resort stays.', 'tanzania.jpg', '2024-08-15 13:58:28'),
(21, 'Tokyo Dreams', 3, 'Tokyo, Kyoto', 32000, 'Discover Tokyo’s blend of tradition and modernity with guided city tours, cultural experiences, and luxury accommodations. Includes visits to historic sites and modern attractions.', 'tokyo.jpg', '2024-08-15 13:59:20'),
(22, 'Capital Insights', 2, 'National Mall, Smithsonian Museums', 30000, 'Explore the historic landmarks and museums of Washington DC. Includes guided tours of the National Mall, Smithsonian museums, and premium accommodations.', 'washington.jpg', '2024-08-15 13:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userquery`
--

CREATE TABLE `tbl_userquery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userregistration`
--

CREATE TABLE `tbl_userregistration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userregistration`
--

INSERT INTO `tbl_userregistration` (`id`, `name`, `emailid`, `mobile`, `password`, `registration_date`, `created_at`) VALUES
(2, 'Kobe Dime', 'kobedime@gmail.com', '0967821515', 'eed8929d47d3d5e24382dc45f462cf58', '2024-08-15', '2024-08-15 14:44:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_packagetype`
--
ALTER TABLE `tbl_packagetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tourpackage`
--
ALTER TABLE `tbl_tourpackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_userquery`
--
ALTER TABLE `tbl_userquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_userregistration`
--
ALTER TABLE `tbl_userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_packagetype`
--
ALTER TABLE `tbl_packagetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tourpackage`
--
ALTER TABLE `tbl_tourpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_userquery`
--
ALTER TABLE `tbl_userquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_userregistration`
--
ALTER TABLE `tbl_userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
