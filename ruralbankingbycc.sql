-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2024 at 08:52 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruralbankingbycc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `trsnsaction`
--

CREATE TABLE `trsnsaction` (
  `id` int(200) NOT NULL,
  `accountno` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `particulars` varchar(200) NOT NULL,
  `withdra` varchar(200) NOT NULL,
  `deposit` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trsnsaction`
--

INSERT INTO `trsnsaction` (`id`, `accountno`, `date`, `particulars`, `withdra`, `deposit`, `balance`) VALUES
(1, '1', '29-05-2023', 'Account opening balance amount', '', '250', '250'),
(2, '2', '29-05-2023', 'Account opening balance amount', '', '250', '250'),
(3, '3', '29-05-2023', 'Account opening balance amount', '', '250', '250'),
(4, '4', '29-05-2023', 'Account opening balance amount', '', '250', '250'),
(5, '3462002', '29-05-2023', 'Account opening balance amount', '', '250', '250'),
(6, '3462003', '29-05-2023', 'Account opening balance amount', '', '250', '250'),
(7, '3462004', '09-06-2023', 'Account opening balance amount', '', '250', '250'),
(8, '3462005', '16-06-2023', 'Account opening balance amount', '', '250', '250'),
(9, '3462005', '16-06-2023', 'Amount Transfered to account Mohammed Nizamuddin ( 3462002 ) ', '1', '', '249'),
(10, '3462002', '16-06-2023', 'Amount Transfered from account  mn ( 3462005 )  ', '', '1', '251'),
(11, '3462006', '21-06-2023', 'Account opening balance amount', '', '250', '250'),
(12, '3462006', '21-06-2023', 'Amount deposited At bank', '', '102000', '102250'),
(13, '3462002', '21-06-2023', 'Amount deposited At bank', '', '50060', '50311'),
(14, '3462003', '21-06-2023', 'Amount deposited At bank', '', '70052', '70302'),
(15, '3462006', '21-06-2023', 'Amount withdraw in bank', '4000', '', '98250'),
(16, '3462002', '21-06-2023', 'Amount Transfered to account Mohammed shahid ( 3462003 ) through wire_transfer ', '2000', '', '48311'),
(17, '3462003', '21-06-2023', 'Amount Transfered from account  Mohammed Nizamuddin ( 3462002 ) through wire_transfer  ', '', '2000', '72302'),
(18, '3462002', '12-07-2024', 'Amount deposited At bank', '', '1000', '49311'),
(19, '3462002', '12-07-2024', 'Amount Transfered to account Mohammed shahid ( 3462003 ) through peer_to_peer ', '100', '', '49211'),
(20, '3462003', '12-07-2024', 'Amount Transfered from account  Mohammed Nizamuddin ( 3462002 ) through peer_to_peer  ', '', '100', '72402'),
(21, '3462004', '12-07-2024', 'Amount deposited At bank', '', '2000', '2250'),
(22, '3462005', '12-07-2024', 'Amount withdraw in bank', '1000', '', '-751'),
(23, '3462004', '27-07-2024', 'Amount Transfered to account Mohammed Nizamuddin ( 3462002 ) ', '1000', '', '1250'),
(24, '3462002', '27-07-2024', 'Amount Transfered from account  MMNM ( 3462004 )  ', '', '1000', '50211');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `accountno` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `phonenumber` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `adharnumber` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`accountno`, `name`, `photo`, `phonenumber`, `email`, `address`, `adharnumber`, `password`, `date`, `status`) VALUES
(3462000, 'sasdfa', 'fasd', '1232', 'fasdf', 'asdf', 'asdfasd', 'asdfas', 'asdfasd', 'adsfasdf'),
(3462001, 'werq', 'qwerq', '123', 'sdgs', 'asdg', 'ads', 'asd', 'ad', 'asd'),
(3462002, 'Mohammed Nizamuddin', 'photos/pho2106202308.58.079876543211.jpg', '1234567890', 'nizamuddin@gmail.com', 'rml nagar shivamoga', '123456789012', '123', '29-05-2023', 'D'),
(3462003, 'Mohammed shahid', 'photos/pho2106202308.57.109876543211.jpg', '1234567452', 'shahid@gmail.com', 'bhadravati', '123456786543', '123', '29-05-2023', 'D'),
(3462004, 'MMNM', 'photos/pho0906202307.30.101234567453.jpg', '8520369450', 'mmnm@gmail.com', 'dvs,shimoga', '552058961234', '123456789', '09-06-2023', 'A'),
(3462005, 'mn', 'photos/pho1606202308.30.158520369451.jpg', '9876543210', 'mn@gmail.com', 'smg', '234512345678', 'mnn', '16-06-2023', 'A'),
(3462006, 'Abdul Razak', 'photos/pho2106202308.59.499876543211.jpg', '6363480944', 'razak@gmail.com', 'RML Nagar Shivamogga', '668801239980', 'razak123', '21-06-2023', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trsnsaction`
--
ALTER TABLE `trsnsaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`accountno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trsnsaction`
--
ALTER TABLE `trsnsaction`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `accountno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3462007;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
