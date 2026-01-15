-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 04:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `email`, `username`, `name`, `gender`, `password`, `avatar`) VALUES
(1, 'admin@nuv.ac.in', '0000-000-0', 'Admin', 'Male', '123456', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `clubinfo`
--

CREATE TABLE `clubinfo` (
  `club_ID` int(11) NOT NULL,
  `club_Name` varchar(100) NOT NULL,
  `moderator` varchar(100) NOT NULL DEFAULT 'None',
  `moderator_ID` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clubinfo`
--

INSERT INTO `clubinfo` (`club_ID`, `club_Name`, `moderator`, `moderator_ID`) VALUES
(1, 'FinFun', 'Moderator1', '1111-111-1'),
(2, 'GDSC', 'Moderator2', '1111-111-2'),
(3, 'Neofolks', 'Moderator3', '1111-111-3');

-- --------------------------------------------------------

--
-- Table structure for table `club_relation`
--

CREATE TABLE `club_relation` (
  `id` int(11) NOT NULL,
  `club_ID` varchar(20) NOT NULL,
  `club_Name` varchar(100) NOT NULL,
  `user_ID` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `club_relation`
--

INSERT INTO `club_relation` (`id`, `club_ID`, `club_Name`, `user_ID`, `status`) VALUES
(117, '1', 'FinFun', '20-12403-7', 'Y'),
(118, '3', 'Neofolks', '20-12407-3', 'Y'),
(120, '2', 'GDSC', '20-12407-3', 'Y'),
(121, '2', 'GDSC', '20-12406-8', 'Y'),
(122, '1', 'FinFun', '20-12407-3', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `event_join`
--

CREATE TABLE `event_join` (
  `id` int(11) NOT NULL,
  `event_ID` int(11) NOT NULL,
  `club_ID` int(11) NOT NULL,
  `joined_Member_ID` varchar(50) NOT NULL,
  `show_Event` varchar(5) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_join`
--

INSERT INTO `event_join` (`id`, `event_ID`, `club_ID`, `joined_Member_ID`, `show_Event`) VALUES
(8, 15, 2, '20-12406-8', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `event_table`
--

CREATE TABLE `event_table` (
  `id` int(11) NOT NULL,
  `event_head` varchar(200) NOT NULL,
  `event_detail` varchar(500) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `event_img` varchar(1000) NOT NULL,
  `club_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_table`
--

INSERT INTO `event_table` (`id`, `event_head`, `event_detail`, `venue`, `capacity`, `date`, `time`, `event_img`, `club_ID`) VALUES
(15, 'Hackathon', 'Join Now Using the Link -', 'Auditorium', '120', '19-08-2023', '01:00', '1684926935GDSC.jpg', '2'),
(16, 'Innaugration', 'Do join us on thsi auspicious occasion!!', 'Amphitheatre', '150', '16-07-2023', '12:00', '1684927060FinFun.jpg', '1'),
(18, 'Innaugration', 'Do join us on thsi auspicious occasion!!', 'Amphitheatre', '150', '16-07-2023', '12:00', '1684927060FinFun.jpg', '3'),
(20, 'Tinkerthon, Derby Race and Tech Talks', 'To Register fill out the form - https://forms.gle/ngYGW2xfBj124BUh8', 'Auditorium', '150', '30-05-2023', '01:00', '1684960808Frame 2.jpg', '3');

-- --------------------------------------------------------

--
-- Table structure for table `group_chat`
--

CREATE TABLE `group_chat` (
  `id` int(11) NOT NULL,
  `groupName` varchar(20) NOT NULL,
  `receiverID` varchar(20) NOT NULL,
  `senderID` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `time` varchar(10) NOT NULL,
  `senderName` varchar(20) NOT NULL,
  `showMessage` varchar(10) NOT NULL DEFAULT 'Y',
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `recieverID` varchar(20) NOT NULL,
  `senderID` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `time` varchar(10) NOT NULL,
  `senderName` varchar(50) DEFAULT NULL,
  `senderType` varchar(20) NOT NULL,
  `showMessage` varchar(5) NOT NULL DEFAULT 'Y',
  `seen_unseen` varchar(10) NOT NULL DEFAULT 'unseen',
  `deleted_by_member` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `moderatorinfo`
--

CREATE TABLE `moderatorinfo` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL DEFAULT 'none',
  `Club_ID` varchar(20) NOT NULL,
  `Club_Name` varchar(100) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Date_Time` varchar(50) NOT NULL,
  `Avatar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `moderatorinfo`
--

INSERT INTO `moderatorinfo` (`id`, `email`, `user_ID`, `Name`, `Club_ID`, `Club_Name`, `Gender`, `Password`, `Date_Time`, `Avatar`) VALUES
(8, 'moderator3@nuv.ac.in', '1111-111-3', 'Moderator3', '3', 'Neofolks', 'male', '123456', '2023-05-24 15:48:36', 'moderator.png'),
(9, 'moderator1@nuv.ac.in', '1111-111-1', 'Moderator1', '1', 'FinFun', 'male', '123456', '2023-05-24 15:52:38', 'moderator.png'),
(10, 'moderator2@nuv.ac.in', '1111-111-2', 'Moderator2', '2', 'GDSC', 'male', '123456', '2023-05-24 16:33:09', 'moderator.png');

-- --------------------------------------------------------

--
-- Table structure for table `notice_table`
--

CREATE TABLE `notice_table` (
  `id` int(11) NOT NULL,
  `notice` varchar(10000) DEFAULT NULL,
  `time_date` varchar(100) NOT NULL,
  `posted_by` varchar(100) NOT NULL,
  `club_ID` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notice_table`
--

INSERT INTO `notice_table` (`id`, `notice`, `time_date`, `posted_by`, `club_ID`) VALUES
(1, 'Hi Welcome to the Club', '2023-05-26 14:12:11', 'Admin', '3'),
(2, 'Get to know your Friends Guys', '2023-05-26 14:12:32', 'Admin', '1'),
(3, 'Get to know your Friends Guys', '2023-05-26 14:12:32', 'Admin', '2'),
(4, 'Get to know your Friends Guys', '2023-05-26 14:12:32', 'Admin', '3');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `eventID` varchar(20) NOT NULL,
  `club_ID` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notif_seen`
--

CREATE TABLE `notif_seen` (
  `id` int(11) NOT NULL,
  `notifID` varchar(20) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `seen_unseen` varchar(10) NOT NULL DEFAULT 'unseen'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `clubname` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `admissionyear` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(10000) NOT NULL,
  `is_active` varchar(1) DEFAULT 'N',
  `dateTime` varchar(100) DEFAULT NULL,
  `clubID` varchar(20) DEFAULT NULL,
  `show_Event` varchar(10) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `email`, `username`, `clubname`, `name`, `dept`, `semester`, `gender`, `dob`, `admissionyear`, `phone`, `password`, `avatar`, `is_active`, `dateTime`, `clubID`, `show_Event`) VALUES
(1, '20124073@nuv.ac.in', '20-12407-3', 'Neofolks', 'Killol Rajgor', 'Engineering', 'Spring', 'male', '3/Sep/2002', '2020', '9328369974', '123456', '1518101539FB_IMG_1487270137432.jpg', 'Y', '2022-02-08 21:52:20', '3', 'Y'),
(2, '20124068@nuv.ac.in', '20-12406-8', 'GDSC', 'Vidhi Babariya', 'Engineering', 'Fall', 'female', '24/Jan/2002', '2020', '9428302002', '123456', '1518104191FB_IMG_1487270044522.jpg', 'Y', '2022-02-08 21:55:23', '2', 'Y'),
(3, '20124037@nuv.ac.in', '20-12403-7', 'FinFun', 'Priyanshi Shah', 'Engineering', 'Fall', 'female', '30/Nov/2002', '2020', '8849145895', '123456', '1518104191FB_IMG_1487270044522.jpg', 'Y', '2022-02-08 22:00:01', '1', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`id`,`email`) USING BTREE;

--
-- Indexes for table `clubinfo`
--
ALTER TABLE `clubinfo`
  ADD UNIQUE KEY `UNIQUE` (`club_ID`);

--
-- Indexes for table `club_relation`
--
ALTER TABLE `club_relation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_join`
--
ALTER TABLE `event_join`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_table`
--
ALTER TABLE `event_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_chat`
--
ALTER TABLE `group_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moderatorinfo`
--
ALTER TABLE `moderatorinfo`
  ADD PRIMARY KEY (`id`,`user_ID`);

--
-- Indexes for table `notice_table`
--
ALTER TABLE `notice_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notif_seen`
--
ALTER TABLE `notif_seen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`,`username`,`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `club_relation`
--
ALTER TABLE `club_relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `event_join`
--
ALTER TABLE `event_join`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event_table`
--
ALTER TABLE `event_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `group_chat`
--
ALTER TABLE `group_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT for table `moderatorinfo`
--
ALTER TABLE `moderatorinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notice_table`
--
ALTER TABLE `notice_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notif_seen`
--
ALTER TABLE `notif_seen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
