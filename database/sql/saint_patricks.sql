-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2021 at 04:34 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saint_patricks`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`id`, `name`) VALUES
(1, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `church_denomination`
--

CREATE TABLE `church_denomination` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `church_denomination`
--

INSERT INTO `church_denomination` (`id`, `name`) VALUES
(1, 'Apostolic Students Association'),
(2, 'Assemblies of God Campus Ministry'),
(3, 'Campus Christian Family'),
(4, 'Catholic (IMCS Pax Romana)');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `academic_year` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `program_id`, `academic_year`, `semester`, `code`, `name`, `credits`) VALUES
(1, 1, 1, 2, 'DIT 212', 'PROGRAMMING WITH VISUAL BASIC II', 3),
(2, 1, 1, 2, 'DIT 214', 'DATABASE CONCEPTS AND TECHNOLOGY II', 3),
(3, 1, 1, 2, 'DIT 216', 'OBJECT ORIENTED SYSTEMS ANALYSIS AND DESIGN', 3),
(4, 1, 1, 2, 'DIT 218', 'ENTERPRISE INFORMATION SYSTEMS', 3),
(5, 1, 1, 2, 'DIT 220', 'PROJECT', 4),
(6, 1, 1, 2, 'DIT 222', 'COMPUTER HARDWARE AND SECURITY\r\n', 3),
(7, 1, 1, 2, 'DIT 224', 'ENTREPRENEURSHIP\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `current_semester`
--

CREATE TABLE `current_semester` (
  `id` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `current_semester`
--

INSERT INTO `current_semester` (`id`, `semester`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `name`) VALUES
(1, 'Bsc.Information Technology'),
(2, 'Bsc.Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`) VALUES
(1, 'Oti Region'),
(2, 'Bono East Region'),
(3, 'Ahafo Region'),
(4, 'Bono Region'),
(5, 'North East Region'),
(6, 'Savannah Region'),
(7, 'Western North Region'),
(8, 'Volta Region'),
(9, 'Greater Accra Region'),
(10, 'Eastern Region'),
(11, 'Ashanti Region'),
(12, 'Central Region'),
(13, 'Northern Region'),
(14, 'Upper East Region'),
(15, 'Upper West Region'),
(16, 'Western Region');

-- --------------------------------------------------------

--
-- Table structure for table `registered_courses`
--

CREATE TABLE `registered_courses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_courses`
--

INSERT INTO `registered_courses` (`id`, `user_id`, `course`, `time`) VALUES
(59, 1, 2, '2021-08-31 03:30:37'),
(61, 1, 4, '2021-08-31 03:30:37'),
(63, 1, 6, '2021-08-31 03:30:37'),
(64, 1, 7, '2021-08-31 03:30:37'),
(65, 1, 1, '2021-08-31 03:39:01'),
(66, 1, 3, '2021-08-31 03:39:01'),
(67, 1, 5, '2021-08-31 03:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`id`, `name`) VALUES
(1, 'Budhist'),
(2, 'Atheist'),
(3, 'Budhist'),
(4, 'Atheist'),
(5, 'Christian'),
(6, 'Eckist'),
(7, 'Muslim'),
(8, 'Other'),
(9, 'Pagan');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text DEFAULT NULL,
  `lastname` text NOT NULL,
  `program` text NOT NULL,
  `username` text NOT NULL,
  `dob` date NOT NULL,
  `school_email` varchar(255) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `other_phone_numbers` varchar(50) NOT NULL,
  `other_email` varchar(255) NOT NULL,
  `gender` text NOT NULL,
  `country` text NOT NULL,
  `residential_address` text NOT NULL,
  `postal_address` text NOT NULL,
  `religion` int(11) NOT NULL,
  `region` int(11) NOT NULL,
  `denomination` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `image`, `title`, `firstname`, `middlename`, `lastname`, `program`, `username`, `dob`, `school_email`, `phone_number`, `other_phone_numbers`, `other_email`, `gender`, `country`, `residential_address`, `postal_address`, `religion`, `region`, `denomination`, `password`) VALUES
(1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTM_m8x3r8CvvidSewBcONHWb8YyNQEwFu0Rw&usqp=CAU', 'Master', 'Theophilus', 'Addo', 'Lumor', '1', 'taalumor', '2020-09-16', 'knustemail@gmail.com', '0278989898', '0205455445', 'other@gmail.com', 'Male', 'Ghana', 'C2, Banhui street, Offinso-Ashanti, Ghana', 'P.O.Box 17, Offinso - Ashanti', 8, 13, 4, 't2umor'),
(2, '', 'Master', 'Jesse', 'Joe', 'Anim', '2', 'user', '2021-08-10', '', '0', '0', '', '', '', '', '', 0, 0, 0, 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `church_denomination`
--
ALTER TABLE `church_denomination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_semester`
--
ALTER TABLE `current_semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_courses`
--
ALTER TABLE `registered_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_year`
--
ALTER TABLE `academic_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `church_denomination`
--
ALTER TABLE `church_denomination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `current_semester`
--
ALTER TABLE `current_semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registered_courses`
--
ALTER TABLE `registered_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
