-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 07:20 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_pg_dekho`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `price_per_month` decimal(10,2) NOT NULL,
  `months_booked` int(11) NOT NULL,
  `total_payable` decimal(10,2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `user_id`, `property_id`, `price_per_month`, `months_booked`, `total_payable`, `start_date`, `end_date`, `booking_date`) VALUES
(7, 11, 9, '8000.00', 4, '32000.00', '2024-04-02', '2024-08-02', '2024-03-30 15:26:48'),
(8, 12, 11, '9000.00', 4, '36000.00', '2024-05-06', '2024-09-06', '2024-05-05 04:48:47'),
(9, 13, 11, '9000.00', 1, '9000.00', '2024-05-06', '2024-06-06', '2024-05-05 05:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`) VALUES
(1, 'Bhopal'),
(3, 'Sihore'),
(4, 'Mumbai'),
(6, 'Bangalore'),
(8, 'Pune'),
(9, 'Chennai'),
(10, 'Nagpur'),
(11, 'Gaziabaad'),
(12, 'Simla');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `detail_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `detail_id`, `name`, `email`, `message`, `created_at`) VALUES
(15, 8, 'navinpawar', 'navinpawar@yahoo.com', 'Best', '2024-03-30 14:45:07'),
(16, 11, 'kartik', 'kartik@gmail.com', 'nice', '2024-05-05 04:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `property` varchar(1500) NOT NULL,
  `about` varchar(1500) NOT NULL,
  `room_detail` varchar(1500) NOT NULL,
  `food_detail` varchar(1500) NOT NULL,
  `food_timing` varchar(1500) NOT NULL,
  `parking` int(11) NOT NULL,
  `wifi` int(11) NOT NULL,
  `almirah` int(11) NOT NULL,
  `bedsheet` int(11) NOT NULL,
  `cctv` int(11) NOT NULL,
  `ac` int(11) NOT NULL,
  `drinking_water` int(11) NOT NULL,
  `washroom` int(11) NOT NULL,
  `housekeeping` int(11) NOT NULL,
  `price` varchar(1500) NOT NULL,
  `ownerid` int(11) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `title`, `city`, `address`, `property`, `about`, `room_detail`, `food_detail`, `food_timing`, `parking`, `wifi`, `almirah`, `bedsheet`, `cctv`, `ac`, `drinking_water`, `washroom`, `housekeeping`, `price`, `ownerid`, `add_date`) VALUES
(8, 'Sai Kiran Comforts', 'Bangalore', '#45, 3rd Cross, Indiranagar', 'PG', 'Comfortable and affordable stay with all amenities', '20 rooms, shared and single options', 'Vegetarian and Non-vegetarian meals provided', 'Breakfast: 8 AM - 10 AM, Lunch: 12 PM - 2 PM, Dinner: 7 PM - 9 PM', 1, 1, 1, 1, 1, 1, 1, 1, 1, '7500', 1, '2024-03-17 18:30:00'),
(9, 'Maya\'s Nest', 'New Delhi', 'A-34, Block A, Green Park', 'PG', 'A cozy nest in the heart of the city with all modern amenities', '15 rooms with air conditioning and daily housekeeping', 'Home-cooked meals with a variety of cuisines', 'Breakfast: 7:30 AM - 9:30 AM, Lunch: 1 PM - 3 PM, Dinner: 8 PM - 10 PM', 1, 1, 1, 1, 1, 1, 1, 1, 1, '8000', 2, '2024-03-17 18:30:00'),
(10, 'Harmony Stay', 'Pune', '301, Pearl Residency, Baner', 'PG', 'A peaceful and harmonious living space with amenities that cater to your every need', '25 rooms offering both AC and Non-AC options', 'Pure vegetarian meals served with love', 'Breakfast: 8 AM - 10 AM, Lunch: 12:30 PM - 2:30 PM, Dinner: 7:30 PM - 9:30 PM', 1, 1, 1, 1, 1, 1, 1, 1, 1, '6500', 3, '2024-03-17 18:30:00'),
(11, 'Coastal Comfort', 'Chennai', '17/4, Second Street, Thiruvanmiyur', 'PG', 'Experience the serene beauty of the coast with top-notch amenities at your doorstep', '18 rooms with breathtaking sea views and gym access', 'Delicious South Indian cuisine, a feast for your taste buds', 'Breakfast: 7 AM - 9 AM, Lunch: 12 PM - 2 PM, Dinner: 8 PM - 10 PM', 1, 1, 1, 1, 1, 1, 1, 1, 1, '9000', 4, '2024-03-17 18:30:00'),
(15, 'Example', 'Gaziabaad', 'Example', 'PG', 'Example', 'Example', 'Example', 'Example', 1, 1, 1, 0, 1, 1, 1, 0, 1, '9999', 0, '2024-03-30 14:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `detailid` int(11) NOT NULL,
  `image` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `detailid`, `image`) VALUES
(1, 9, 'pro-2-1.jpg'),
(2, 9, 'pro-2-2.jpg'),
(3, 9, 'pro-2-3.jpg'),
(4, 9, 'pro-2-4.jpg'),
(5, 10, 'pro-3-1.jpg'),
(6, 10, 'pro-3-2.jpg'),
(7, 10, 'pro-3-3.jpg'),
(8, 10, 'pro-3-4.jpg'),
(9, 11, 'pro-4-1.jpg'),
(10, 11, 'pro-4-2.jpg'),
(11, 11, 'pro-4-3.jpg'),
(12, 11, 'pro-4-4.jpg'),
(13, 5, 'p3.jpg'),
(14, 5, 'p4.jpg'),
(15, 6, 'p5.jpg'),
(16, 7, 'p6.jpg'),
(17, 5, 'OIP.7qFMP2rFHm7uaHDKV2qj0AHaE9.jpg'),
(18, 5, '64044058.jpg'),
(19, 5, 'R.15fb63dbd5f2cd571d1d84cb24bb704c.jpg'),
(20, 5, 'pg-rooms-500x500.jpg'),
(21, 6, '2_bhk_apartment-for-sale-noida_extension-Greater+Noida-bedroom.jpg'),
(22, 6, '2_bhk_apartment-for-sale-noida_extension-Greater+Noida-bedroom.jpg'),
(23, 6, '637713114368283312-3110210910361036.jpg'),
(24, 6, '637667219091236028-0809210618291829.jpg'),
(25, 8, 'pro-1-1.jpg'),
(26, 8, 'pro-1-3.jpg'),
(27, 8, 'pro-1-2.jpg'),
(28, 8, 'pro-1-4.jpg'),
(29, 11, 'e1.jpg'),
(30, 11, 'e2.jpg'),
(31, 11, 'e3.jpg'),
(32, 11, 'e4.jpg'),
(33, 12, '61oAPL1lzML.jpg'),
(34, 12, 'IMG_0157.png'),
(35, 12, '7.4v-2.6ah-lithium-ion-battery-pack-inbuilt-bms-protection-800x800.jpeg'),
(36, 13, 'Untitled_design__2_-removebg-preview.png'),
(37, 13, 'Untitled design (2).jpg'),
(38, 13, 'Untitled_design__1_-removebg-preview.png'),
(39, 14, 'Untitled_design__2_-removebg-preview (1).png'),
(40, 14, 'Untitled design (2).png'),
(41, 15, 'Untitled_design__2_-removebg-preview (1).png'),
(42, 15, 'Untitled design (2).png');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `detail_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `detail_id`, `rating`, `created_at`) VALUES
(8, 8, 5, '2024-03-30 14:45:07'),
(9, 11, 5, '2024-05-05 04:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(8, 'demo', 'demo@gmail.com', '9753531615', '111111'),
(10, 'navin', 'navin@gmail.com', '9753531615', '111111'),
(11, 'navinpawar', 'navinpawar@yahoo.com', '9753531615', '111111'),
(12, 'pradeep', 'pradeep@gmail.com', '9753531615', '111111'),
(13, 'kartik', 'kartik@gmail.com', '9753531615', '111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`property_id`) REFERENCES `detail` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
