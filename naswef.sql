-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 01:41 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naswef`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(20) NOT NULL,
  `army_id` varchar(20) NOT NULL,
  `year` year(4) NOT NULL,
  `fquarter` int(20) NOT NULL,
  `squarter` int(20) NOT NULL,
  `tquarter` int(20) NOT NULL,
  `ftquarter` int(20) NOT NULL,
  `total` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `army_id`, `year`, `fquarter`, `squarter`, `tquarter`, `ftquarter`, `total`) VALUES
(2, '1212', 2015, 5000, 5000, 5000, 5000, 20000),
(3, '123', 2014, 5000, 5000, 5000, 4000, 19000),
(4, '14NA/345625', 2013, 800, 500, 500, 800, 2600),
(5, '12NA/345656', 2015, 5000, 5000, 3000, 5000, 18000),
(6, '12NA/345656', 2012, 600, 600, 600, 600, 2400),
(7, '05NA572142', 2010, 1000, 1000, 1000, 1000, 4000),
(11, '123', 2011, 500, 500, 500, 0, 1500),
(12, '14NA/345625', 2011, 100, 100, 100, 100, 400),
(25, '1212', 2014, 5000, 1000, 5000, 4000, 15000),
(26, '1212', 2013, 3000, 2000, 4000, 2000, 11000),
(27, '14NA/72/14556', 2017, 1500, 1500, 0, 0, 3000),
(28, '1212', 2016, 4000, 4000, 0, 0, 8000),
(29, '79NA/19270', 2010, 1000, 1000, 1000, 1000, 4000),
(30, '79NA/19270', 2011, 1000, 1000, 1000, 1000, 4000),
(31, '79NA/19270', 2012, 1000, 1000, 1000, 1000, 4000),
(32, '79NA/19270', 2013, 1000, 1000, 1000, 1000, 4000),
(33, '79NA/19270', 2014, 3200, 3200, 3200, 3200, 12800),
(34, '79NA/18035', 2011, 1000, 1000, 1000, 0, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `rank_details`
--

CREATE TABLE `rank_details` (
  `rank_id` int(20) NOT NULL,
  `rank` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank_details`
--

INSERT INTO `rank_details` (`rank_id`, `rank`) VALUES
(1, 'Gen'),
(2, 'Lt Gen'),
(3, 'Maj Gen'),
(4, 'Brig Gen'),
(5, 'Col'),
(6, 'Lt Col'),
(7, 'Maj'),
(8, 'Capt'),
(9, '2Lt/Lt'),
(10, 'AWO'),
(11, 'MWO'),
(12, 'WO'),
(13, 'SSgt'),
(14, 'Sgt'),
(15, 'Cpl'),
(16, 'Sigm/LCpl');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `user_id`, `firstname`, `lastname`) VALUES
(1, 1, 'Adamu', 'Mohammed'),
(2, 2, 'Ayuba ', 'Musa'),
(3, 3, 'David ', 'Innocent'),
(4, 4, 'Gambo ', 'Titus'),
(5, 5, 'Attahiru', 'Abdullahi'),
(6, 6, 'Idowu', 'Babajide'),
(7, 1, 'Olu', 'Amadi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `army_id` varchar(50) NOT NULL,
  `username` varchar(26) NOT NULL,
  `password` varchar(15) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`army_id`, `username`, `password`, `role`) VALUES
('11114', 'dfgh', 'nmhj', 'administrator'),
('123aa', 'adxs', 'ascvb', 'user'),
('12NA/345656', 'adamu', 'u', 'user'),
('14NA/72/14556', 'austine', 'but123456 ', 'administrator'),
('15NA/13999', 'admin', 'a', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `users-detail`
--

CREATE TABLE `users-detail` (
  `army_id` varchar(25) NOT NULL,
  `firstname` char(50) NOT NULL,
  `middlename` char(50) NOT NULL,
  `lastname` char(50) NOT NULL,
  `rank` varchar(25) NOT NULL,
  `rank_year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users-detail`
--

INSERT INTO `users-detail` (`army_id`, `firstname`, `middlename`, `lastname`, `rank`, `rank_year`) VALUES
('05NA572142', 'Ayuba', 'Balare', 'Musa', 'LCPL', 2009),
('1212', 'titi', 'bayo', 'jide', 'maja', 2018),
('123', 'SA', 'mm', 'AS', 'gen', 2012),
('12NA/345656', 'Adamu', 'ahmed', 'Mohammed', 'LCPL', 2010),
('14NA/345625', 'bola', 'bee', 'ahmed', 'maj', 2013),
('14NA/345656', 'Ojo', 'biyi', 'Ladi', 'LCPL', 2010),
('14NA/72/14556', 'Austine', 'Fe', 'Felix', 'Sigm/LCpl', 2014),
('1984', 'saheed', 'ayo', 'ismaila', 'Lt Col', 2017),
('79NA/18035', 'Godwin', 'C', 'Oguayo', 'WO', 2010),
('79NA/19270', 'Ajibolu', 'Olusola', 'Fatai', 'AWO', 2010),
('N/13999', 'Godwin', '', 'Aluku', 'Capt', 2012);

-- --------------------------------------------------------

--
-- Table structure for table `year_lists`
--

CREATE TABLE `year_lists` (
  `year_id` int(20) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_lists`
--

INSERT INTO `year_lists` (`year_id`, `year`) VALUES
(1, 2007),
(2, 2008),
(3, 2009),
(4, 2010),
(5, 2011),
(6, 2012),
(7, 2013),
(8, 2014),
(9, 2015),
(10, 2016),
(11, 2017),
(12, 2018),
(13, 2019);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank_details`
--
ALTER TABLE `rank_details`
  ADD PRIMARY KEY (`rank_id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`army_id`);

--
-- Indexes for table `users-detail`
--
ALTER TABLE `users-detail`
  ADD PRIMARY KEY (`army_id`);

--
-- Indexes for table `year_lists`
--
ALTER TABLE `year_lists`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `rank_details`
--
ALTER TABLE `rank_details`
  MODIFY `rank_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `year_lists`
--
ALTER TABLE `year_lists`
  MODIFY `year_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
