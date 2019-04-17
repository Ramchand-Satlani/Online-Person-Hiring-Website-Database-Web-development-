-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 11:31 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminName` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminName`, `Password`) VALUES
('Ramchand', 'Satlani'),
('RamSatlani', 'Satlani');

-- --------------------------------------------------------

--
-- Table structure for table `job_domain`
--

CREATE TABLE `job_domain` (
  `job_id` int(10) NOT NULL,
  `Job_name` varchar(30) NOT NULL,
  `Company_charges` int(10) NOT NULL,
  `hourly_rate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_domain`
--

INSERT INTO `job_domain` (`job_id`, `Job_name`, `Company_charges`, `hourly_rate`) VALUES
(1, 'Plumbing', 50, 100),
(3, 'Electronics', 50, 100),
(4, 'Gold Smith', 50, 100),
(5, 'LaptopRepair', 100, 200);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Request_id` int(10) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `workerid` varchar(30) NOT NULL,
  `request_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_history`
--

CREATE TABLE `request_history` (
  `rid` int(10) NOT NULL,
  `UserId` varchar(30) NOT NULL,
  `WorkerId` varchar(30) NOT NULL,
  `Rating` int(11) NOT NULL,
  `hour_worked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_history`
--

INSERT INTO `request_history` (`rid`, `UserId`, `WorkerId`, `Rating`, `hour_worked`) VALUES
(3, 'ram123', 'farhan123', 5, 5),
(4, 'taha1', 'farhan123', 2, 3),
(5, 'ram123', '', 2, 4),
(6, 'ram123', '', 2, 4),
(7, 'ram123', '', 2, 4),
(8, 'ram123', '', 2, 4),
(9, 'ram123', '', 2, 4),
(10, 'ram123', '', 4, 4),
(11, 'ram123', '', 5, 4),
(12, 'taha1', 'farhan123', 2, 4),
(13, 'ammara1', 'farhan123', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `FName` varchar(15) NOT NULL,
  `MName` varchar(15) NOT NULL,
  `LName` varchar(15) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Phone` int(11) NOT NULL,
  `CNIC` int(13) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FName`, `MName`, `LName`, `UserName`, `Email`, `DOB`, `Phone`, `CNIC`, `Address`, `Password`) VALUES
('Ammara', '', '', 'ammara1', 'ammara@gmail.com', '2018-07-11', 2147483647, 2147483647, 'St-4 Sector 17-D  On National Highway  Karachi , Pakistan', '1234'),
('Ramchand', '', '', 'ram123', 'rssatlani@gmail.com', '2018-12-18', 2147483647, 2147483647, 'Gulshan-e-Hadeed Phase-I, Block-A316,Karachi,Pakistan', '1234'),
('Taha', '', '', 'taha1', 'rdsssatlani@gmail.com', '2018-12-18', 2147483647, 741852963, 'Gulshan-e-Hadeed Phase-I, Block-A316,Karachi,Pakistan', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `f_name` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `worker_name` varchar(100) NOT NULL,
  `Job_name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cnic` int(13) NOT NULL,
  `address` varchar(100) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `hours_worked` int(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `salery` int(20) NOT NULL,
  `start_date` date NOT NULL,
  `entr_users` int(10) NOT NULL,
  `avg_rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`f_name`, `m_name`, `l_name`, `worker_name`, `Job_name`, `email`, `password`, `cnic`, `address`, `PhoneNo`, `hours_worked`, `status`, `salery`, `start_date`, `entr_users`, `avg_rating`) VALUES
('Farhan', '', '', 'farhan123', 'Electronics', 'rssatasni@gmail.com', '1234', 2147483647, 'Gulshan-e-Hadeed Phase-I, Block-A316,Karachi,Pakistan', 2147483647, 14, 'free', 1400, '2018-12-07', 4, 4),
('Ramchand', '', '', 'ram1234', 'Electronics', 'rssatlani@gmail.com', '12345', 2147483647, 'Gulshan-e-Hadeed Phase-I, Block-A316,Karachi,Pakistan', 2147483647, 0, 'free', 0, '2018-12-07', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminName`);

--
-- Indexes for table `job_domain`
--
ALTER TABLE `job_domain`
  ADD PRIMARY KEY (`job_id`),
  ADD UNIQUE KEY `Job_name` (`Job_name`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Request_id`);

--
-- Indexes for table `request_history`
--
ALTER TABLE `request_history`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`worker_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_domain`
--
ALTER TABLE `job_domain`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `Request_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_history`
--
ALTER TABLE `request_history`
  MODIFY `rid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
