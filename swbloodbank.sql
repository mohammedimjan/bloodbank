-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 09:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swbloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `id` int(11) NOT NULL,
  `blood_group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`id`, `blood_group`) VALUES
(1, 'A+'),
(2, 'B+'),
(3, 'A-'),
(4, 'O-'),
(5, 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE `camps` (
  `id` int(11) NOT NULL,
  `camptitle` varchar(255) NOT NULL,
  `organizedby` varchar(200) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`id`, `camptitle`, `organizedby`, `photo`, `note`) VALUES
(1, 'Camp1', 'og', 'ACCOUNTING FINANCE AUDIT REPORTS.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, similique?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, quasi!'),
(2, 'Camp 2', 'Lions Club', 'Blood.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, similique?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, quasi!'),
(3, 'Camp 3', 'Youth Club', 'Screenshot_20221109_024011.png', 'orem, ipsum dolor sit amet consectetur adipisicing elit. Harum, similique?Lorem ipsum dolor sit amet');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `email_add` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `conf_password` varchar(255) NOT NULL,
  `donor_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `age`, `gender`, `mobile_no`, `blood_group`, `email_add`, `password`, `conf_password`, `donor_image`) VALUES
(18, 'mohammed', '21', 'male', '+94727955221', 'B+', 'mohammedimjan9@gmail.com', '$2y$10$VLeV.5DKrjL9urznBYW/LOX18.tZ/dveOkAVMGiPF3mABsenrIo/O', '$2y$10$OTXC9qckLpza5AWYAq162.ATzsUfFDweMwXEQ1DEiO9WAcUl9eYJm', 'IMG_0582.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `province_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `province_name`) VALUES
(1, 'Sabaragamuwa Province'),
(2, 'Western Province');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `datetime` datetime(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `hospital_report` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `datetime`, `name`, `age`, `gender`, `blood_group`, `email`, `phone_number`, `hospital_report`) VALUES
(3, '0000-00-00 00:00:00.000000', 'Mohammed IMJAN Mohammed', '21', 'male', 'B+', 'mohammedimjan9@gmail.com', '0757530049', 'c bp 2-2.pdf'),
(4, '0000-00-00 00:00:00.000000', 'Alex', '26', 'male', 'A-', 'fkgeo@gmail.com', '07272555555', 'templatepdf.pdf'),
(5, '2023-04-06 18:08:28.000000', 'Mohammed IMJAN Mohammed', '21', 'male', 'A-', 'mohammedimjancyb7@gmail.com', '0757530049', 'login details.pdf'),
(6, '2023-04-06 21:30:26.000000', 'Mohammed IMJAN Mohammed', '21', 'male', 'B+', 'mohammedimjan9@gmail.com', '0727250032', 'login details.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camps`
--
ALTER TABLE `camps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `camps`
--
ALTER TABLE `camps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
