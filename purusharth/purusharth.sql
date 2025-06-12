-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2024 at 04:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purusharth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Purusharth', 'Purusharth@123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `department` varchar(20) NOT NULL,
  `doctor` varchar(25) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `mono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `username`, `department`, `doctor`, `date`, `time`, `mono`) VALUES
(1, 'vivek', 'Dentist', 'shayam patel', '0000-00-00', '00:00:02', '8799130494'),
(2, 'vivek', 'Surgery', 'rina patel', '14 Sep', '02 PM', '2222222222'),
(3, 'vivek', 'Surgery', 'rina patel', '14 Sep', '02 PM', ''),
(4, 'vivek', 'Surgery', 'rina patel', '14 Sep', '02 PM', '7801960357'),
(5, 'vivek', 'Surgery', 'rina patel', '14 Sep', '02 PM', '8799130494'),
(6, 'vivek', 'Surgery', 'rina patel', '14 Sep', '02 PM', ''),
(7, 'vivek', 'Surgery', 'rina patel', '14 Sep', '02 PM', ''),
(8, 'vivek', 'Dentist', 'shayam patel', '14 Sep', '02 PM', '7801960357'),
(9, 'vivek', 'Urology', 'pooja shah', '14 Sep', '02 PM', '1122445577');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mono` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mono`, `email`, `date`, `query`) VALUES
(1, 'ronit prajapati', '9104760344', 'ronit178@gmail.com', '2024-09-04', 'I would like to take dental treatement for me.');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `did` int(3) NOT NULL,
  `dname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`did`, `dname`) VALUES
(101, 'Cardiology'),
(102, 'Dentist'),
(103, 'Neurology'),
(104, 'Oncology'),
(105, 'Physiology'),
(106, 'Surgery'),
(107, 'Urology'),
(108, 'Yoga Therapy');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_reg`
--

CREATE TABLE `doctor_reg` (
  `id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(8) NOT NULL,
  `department` varchar(15) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `mono` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `cpass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_reg`
--

INSERT INTO `doctor_reg` (`id`, `name`, `dob`, `gender`, `department`, `qualification`, `mono`, `email`, `uname`, `pass`, `cpass`) VALUES
(41, 'harsh kalasariya', '1996-01-14', 'Male', 'Cardiology', 'Biology', '8799130494', 'harshkalasariya@gmail.com', 'Harsh', 'Harsh@123', 'Harsh@123'),
(42, 'abhishek unagar', '2000-06-05', 'Male', 'Cardiology', 'Chemistry', '7801960951', 'abhiunagar@gmail.com', 'Abhishek', 'Abhishek@123', 'Abhishek@123'),
(43, 'yagnik sarvaiya', '1995-02-10', 'Male', 'Cardiology', 'GCSE', '8866558650', 'yagniksarvaiya@gmail.com', 'Yagnik', 'Yagnik@123', 'Yagnik@123'),
(44, 'riddhi mehta', '1989-07-08', 'Female', 'Dentist', 'Honours', '9879818098', 'riddhimehta@gmail.com', 'Riddhi', 'Riddhi@123', 'Riddhi@123'),
(45, 'shayam patel', '1980-09-09', 'Male', 'Dentist', 'GCSE', '9898513409', 'shayampatel@gmail.com', 'Shayam', 'Shayam@123', 'Shayam@123'),
(46, 'riddham vyas', '1999-12-16', 'Male', 'Dentist', 'Biology', '8140706087', 'riddhamvyas@gmail.com', 'Riddham', 'Riddham@123', 'Riddham@123'),
(47, 'sonu chavda', '1989-08-01', 'Female', 'Neurology', 'Chemistry', '9825245261', 'sonuchavda@gmail.com', 'Sonu', 'Sonu@123', 'Sonu@123'),
(48, 'kishan patel', '1979-02-02', 'Male', 'Neurology', 'Honours', '8955031099', 'kishanpatel@gmail.com', 'Kishan', 'Kishan@123', 'Kishan@123'),
(49, 'hardik ramani', '1988-06-04', 'Male', 'Neurology', 'GCSE', '9913788688', 'hardikramani@gmail.com', 'Hardik', 'Hardik@123', 'Hardik@123'),
(50, 'ram mehta', '2000-05-05', 'Male', 'Oncology', 'Biology', '9898882022', 'rammehta@gmail.com', 'Ram', 'Ram@1234', 'Ram@1234'),
(51, 'krishna variya', '1999-07-05', 'Female', 'Oncology', 'Chemistry', '9755702186', 'krishnavariya@gmail.com', 'Krishna', 'Krishna@123', 'Krishna@123'),
(52, 'shyam gohil', '1979-11-21', 'Male', 'Oncology', 'GCSE', '8788889089', 'shyamgohil@gmail.com', 'Shyam', 'Shyam@123', 'Shyam@123'),
(53, 'jeel gohil', '1984-07-05', 'Male', 'Physiology', 'Honours', '9879005066', 'jeelgohil@gmail.com', 'Jeel', 'Jeel@123', 'Jeel@123'),
(54, 'rahul kanani', '2001-10-29', 'Male', 'Physiology', 'Biology', '7887078990', 'rahulkanani@gmail.com', 'Rahul', 'Rahul@123', 'Rahul@123'),
(55, 'khushi kalathiya', '1987-09-17', 'Female', 'Physiology', 'Honours', '9805105189', 'khushikalathiya@gmail.com', 'Khushi', 'Khushi@123', 'Khushi@123'),
(56, 'rohan prajapati', '1987-10-06', 'Male', 'Surgery', 'Biology', '9779005164', 'rohanprajapati@gmail.com', 'Rohan', 'Rohan@123', 'Rohan@123'),
(57, 'rina patel', '1978-09-09', 'Female', 'Surgery', 'Honours', '7807851098', 'rinapatel@gmail.com', 'Rina', 'Rina@123', 'Rina@123'),
(58, 'disha shah', '1977-06-08', 'Female', 'Surgery', 'GCSE', '9879098095', 'dishashah@gmail.com', 'Disha', 'Disha@123', 'Disha@123'),
(59, 'ronak patel', '1984-12-22', 'Male', 'Urology', 'Chemistry', '7807890595', 'ronakpatel@gmail.com', 'Ronak', 'Ronak@123', 'Ronak@123'),
(60, 'pooja shah', '1983-07-07', 'Female', 'Urology', 'Biology', '7707780595', 'poojashah@gmail.com', 'Pooja', 'Pooja@123', 'Pooja@123'),
(61, 'ravi gohil', '1979-09-28', 'Male', 'Urology', 'Chemistry', '7907519009', 'ravigohil@gmail.com', 'Ravi', 'Ravi@123', 'Ravi@123'),
(62, 'soham prajapati', '1976-02-19', 'Male', 'Yoga Therapy', 'Honours', '9809899152', 'sohamprajapati@gmail.com', 'Soham', 'Soham@123', 'Soham@123'),
(63, 'rita mehta', '1999-05-05', 'Female', 'Yoga Therapy', 'Chemistry', '9509875022', 'ritamehta@gmail.com', 'Rita', 'Rita@123', 'Rita@123'),
(64, 'aisha jadav', '1978-05-17', 'Female', 'Yoga Therapy', 'Biology', '9409578078', 'aishajadav@gmail.com', 'Aisha', 'Aisha@123', 'Aisha@123');

-- --------------------------------------------------------

--
-- Table structure for table `patient_reg`
--

CREATE TABLE `patient_reg` (
  `id` int(5) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `mono` bigint(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `hous` varchar(5) NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `zip` int(6) NOT NULL,
  `country` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `conformpassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_reg`
--

INSERT INTO `patient_reg` (`id`, `fullname`, `dob`, `gender`, `mono`, `email`, `hous`, `city`, `state`, `zip`, `country`, `username`, `password`, `conformpassword`) VALUES
(5, 'sahil ghoghari', '2005-09-16', 'Male', 9104760399, 'thesahilonline@gmail.com', '158', 'surat', 'gujarat', 395004, 'India', 'sahil', 'Sahil@123', 'Sahil@123'),
(6, 'vivek sarvaiya', '2005-02-17', 'Male', 8488023923, 'viveksarvaiya05@gmail.com', '82', 'surat', 'gujarat', 395004, 'India', 'vivek', 'Vivek@123', 'Vivek@123'),
(7, 'dhruvi unagar', '2005-05-07', 'Female', 7863086592, 'dhruviunagar@gmail.com', '35', 'surat', 'gujarat', 395004, 'India', 'dhruvi', 'Dhruvi@123', 'Dhruvi@123'),
(8, 'hensi kalathiya', '2004-11-06', 'Female', 9173157013, 'hensikalathiya@gmail.com', '31', 'surat', 'gujarat', 395004, 'India', 'hensi', 'Hensi@123', 'Hensi@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`did`),
  ADD UNIQUE KEY `dname` (`dname`);

--
-- Indexes for table `doctor_reg`
--
ALTER TABLE `doctor_reg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `patient_reg`
--
ALTER TABLE `patient_reg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `did` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `doctor_reg`
--
ALTER TABLE `doctor_reg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `patient_reg`
--
ALTER TABLE `patient_reg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
