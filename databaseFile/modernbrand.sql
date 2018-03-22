-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2018 at 06:44 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modernbrand`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'Tech Guy', '93f725a07423fe1c889f448b33d21f46');

-- --------------------------------------------------------

--
-- Table structure for table `customercart`
--

CREATE TABLE `customercart` (
  `ID` int(11) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `Product` varchar(100) NOT NULL,
  `Cost` double NOT NULL,
  `Quantity` double NOT NULL,
  `Total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customercart`
--

INSERT INTO `customercart` (`ID`, `customer`, `Product`, `Cost`, `Quantity`, `Total`) VALUES
(1, 'Vinny', 'Drone', 20000, 8, 160000),
(2, 'Vinny', 'Man', 4000, 1, 4000),
(3, 'Vinny', 'Audi', 4500000, 1, 4500000),
(4, 'Vinny', 'Drone', 20000, 1, 20000),
(5, 'Vinny', 'Honda', 200000, 1, 200000),
(6, 'Vinny', 'HTC Desire', 16000, 1, 16000),
(7, 'Vinny', 'Printer', 25000, 1, 25000),
(8, 'Vinny', 'CPU', 16000, 1, 16000),
(9, 'Vinny', 'Shirt', 1000, 1, 1000),
(10, 'Vinny', 'HTC Desire', 16000, 1, 16000),
(11, 'Vinny', 'Shoes', 7000, 1, 7000),
(12, 'Vinny', 'CPU', 16000, 1, 16000),
(13, 'Vinny', 'Audi', 4500000, 1, 4500000),
(14, 'Vinny', 'Lykan', 5000000, 1, 5000000),
(15, 'Vinny', 'Printer', 25000, 1, 25000),
(16, 'Vinny', 'Lykan', 5000000, 1, 5000000),
(17, 'Vinny', 'Honda', 200000, 1, 200000),
(18, 'Vinny', 'HTC Desire', 16000, 1, 16000),
(19, 'Vinny', 'Printer', 25000, 1, 25000),
(20, 'Vinny', 'Lykan', 5000000, 1, 5000000),
(21, 'Vinny', 'Audi', 4500000, 1, 4500000),
(22, 'Vinny', 'Honda', 200000, 1, 200000),
(23, 'Vinny', 'Honda', 200000, 1, 200000),
(24, 'Vinny', 'Audi', 4500000, 1, 4500000),
(25, 'TechGuy', 'Audi', 4500000, 1, 4500000),
(26, 'TechGuy', 'Nissan', 6000000, 1, 6000000),
(27, 'TechGuy', 'Lykan', 5000000, 1, 5000000),
(28, 'TechGuy', 'Audi', 4500000, 1, 4500000),
(29, 'Vinny', 'Mistubishi', 5000000, 1, 5000000),
(30, 'Vinny', 'System Unit', 12000, 1, 12000),
(31, 'Vinny', 'Hand bag', 6000, 1, 6000),
(32, 'Vinny', 'CPU', 16000, 1, 16000),
(33, 'Vinny', 'Honda', 200000, 1, 200000),
(34, 'Vinny', 'Drone', 20000, 1, 20000),
(35, 'Vinny', 'Lykan', 5000000, 1, 5000000),
(36, 'Vinny', 'Drone', 20000, 1, 20000),
(37, 'Vinny', 'Drone', 20000, 1, 20000),
(38, 'Vinny', 'Audi', 4500000, 1, 4500000),
(39, 'Vinny', 'Nissan', 6000000, 1, 6000000),
(40, 'Vinny', 'Lykan', 5000000, 1, 5000000),
(41, 'Vinny', 'Honda', 200000, 1, 200000),
(42, 'Vinny', 'Mistubishi', 5000000, 1, 5000000),
(43, 'Vinny', 'Nissan', 6000000, 1, 6000000),
(44, 'Vinny', 'Audi', 4500000, 1, 4500000),
(45, 'Vinny', 'Lykan', 5000000, 4, 20000000),
(46, 'Vinny', 'Shirt', 1000, 1, 1000),
(47, 'Vinny', 'Drone', 20000, 1, 20000),
(48, 'Vinny', 'Mistubishi', 5000000, 1, 5000000),
(49, 'Vinny', 'Shoes', 7000, 1, 7000),
(50, 'Vinny', 'HTC Desire', 16000, 1, 16000),
(51, 'Test123', 'Hand bag', 6000, 1, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--

CREATE TABLE `fashion` (
  `serial` int(11) NOT NULL,
  `Product` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Cost` double NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `serial` int(11) NOT NULL,
  `Product` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Cost` double NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `image` varchar(255) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`image`, `Fname`, `Lname`, `username`, `email`, `password`) VALUES
('profile/AlphaGNissanGTRbyAMS17.jpg', 'Test123', '0713255791', 'Test123', 'Test123@gmail.com', '68eacb97d86f0c4621fa2b0e17cabd8c');

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `serial` int(11) NOT NULL,
  `Product` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Cost` double NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `serial` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `Product` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Cost` double NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`serial`, `category`, `Product`, `Model`, `Cost`, `image`) VALUES
(1, 'Sport Wear', 'Lykan', 'Hypersport', 5000000, 'documents/Screenshot9.png'),
(2, 'Motors', 'Nissan', 'GTR', 6000000, 'documents/Screenshot21.png'),
(3, 'Motors', 'Audi', 'R8', 4500000, 'documents/Screenshot25.png'),
(4, 'Electronic', 'Drone', 'Quad', 20000, 'documents/drone.jpg'),
(5, 'Electronic', 'System Unit', 'HP', 12000, 'documents/e2.png'),
(6, 'Electronic', 'Gaming Tower', 'Dell', 10000, 'documents/e.png'),
(7, 'Fashion', 'Hand bag', 'Leather', 6000, 'documents/fashion1.jpg'),
(8, 'Fashion', 'Shoes', 'High', 7000, 'documents/fashiontech1.jpeg'),
(9, 'Electronic', 'CPU', 'Intel', 16000, 'documents/e2.jpg'),
(10, 'Fashion', 'lopha', 'grid', 1200, 'documents/fashiontech7.jpg'),
(11, 'Fashion', 'Shirt', 'material', 1000, 'documents/fashiontech8.jpg'),
(12, 'Electronic', 'Digital Camera', 'sony', 30000, 'documents/fashiontech16.jpg'),
(13, 'Electronic', 'Printer', 'HP Inket ', 25000, 'documents/fashiontech18.jpg'),
(14, 'Electronic', 'HTC Desire', '626g+', 16000, 'documents/fashiontech20.jpg'),
(15, 'Fashion', 'Man', 'black and white', 4000, 'documents/fashiontech15.jpg'),
(16, 'Sport Wear', 'Honda', 'Honda', 200000, 'documents/sport3.jpg'),
(17, 'Motors', 'Bugatti', 'Veyron', 7000000, 'documents/motor8.jpg'),
(18, 'Motors', 'Mistubishi', 'focin', 5000000, 'documents/Screenshot40.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `customercart`
--
ALTER TABLE `customercart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customercart`
--
ALTER TABLE `customercart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `fashion`
--
ALTER TABLE `fashion`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
