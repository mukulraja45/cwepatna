-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 12:54 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cwepatna`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_details`
--

CREATE TABLE `about_details` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `Description` longtext NOT NULL,
  `mision` varchar(100) NOT NULL,
  `vision` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_details`
--

INSERT INTO `about_details` (`id`, `title`, `Description`, `mision`, `vision`, `image`, `status`, `created_at`) VALUES
(3, 'About Us', 'Computer Warrior Education is a leading training and placement network of Bihar and Jharkhand in the field of IT/Computer Software Application. Computer Warrior Education is offering numerous career/job oriented software training in varied fields.', 'Computer Warrior Education is a leading training and placement network of Bihar and Jharkhand in the', 'Computer Warrior Education is a leading training and placement network of Bihar and Jharkhand in the', 'bg.png', 'Enable', '2021-04-29 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `add_newcourse`
--

CREATE TABLE `add_newcourse` (
  `id` int(100) NOT NULL,
  `cat_course` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `total_fee` varchar(100) NOT NULL,
  `course_duration` varchar(100) NOT NULL,
  `short_des` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_newcourse`
--

INSERT INTO `add_newcourse` (`id`, `cat_course`, `course_name`, `total_fee`, `course_duration`, `short_des`, `image`, `status`, `created_at`) VALUES
(9, 'Ethical Hacking', 'Ethical Hacking (Short Term)', '45000/...', '', 'A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-', 'wallpapertip_anonymous-wallpaper_42719.jpg', 'Enable', '2021-04-30 18:30:00'),
(10, 'Diploma', ' (Advance Diploma in Computer Application)', '40000', '', 'A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-', 'un.jpg', 'Enable', '2021-04-30 18:30:00'),
(11, 'Ethical Hacking', 'Cyber Security', '6000', '6 mounth', 'web security,email security,mobile security', 'about1.jpg', 'Enable', '2021-05-01 18:30:00'),
(12, 'Programing Language', 'Html', '8000', '2 Mounth', 'Hyper Text Markup Language', 'cehv11.jpg', 'Enable', '2021-05-02 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `certificate_details`
--

CREATE TABLE `certificate_details` (
  `id` int(100) NOT NULL,
  `sl_no` varchar(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `duaration` varchar(100) NOT NULL,
  `c_mounth` varchar(100) NOT NULL,
  `c_year` varchar(100) NOT NULL,
  `doa` varchar(100) NOT NULL,
  `written_mark` varchar(4) NOT NULL,
  `practice_mark` int(100) NOT NULL,
  `assign_mark` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `viva` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate_details`
--

INSERT INTO `certificate_details` (`id`, `sl_no`, `reg_no`, `place`, `duaration`, `c_mounth`, `c_year`, `doa`, `written_mark`, `practice_mark`, `assign_mark`, `grade`, `viva`, `status`, `created_at`) VALUES
(2, 'cwe/212', 'cwe/3025/211', 'patna', '', 'March', '2019', '2021-05-21', '100', 91, '45', 'A+ (Outstanding)', '100', 'Enable', '2021-05-01 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `cat_course` varchar(100) NOT NULL,
  `short_des` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`id`, `image`, `cat_course`, `short_des`, `status`, `created_at`, `updated_at`) VALUES
(8, 'ethical.gif', 'Ethical Hacking', 'Ethical hacking can be defined as the hacking of computers done with permission', 'Enable', '2021-05-25 18:30:00', '2021-05-26 07:36:12');

-- --------------------------------------------------------

--
-- Table structure for table `notice_details`
--

CREATE TABLE `notice_details` (
  `id` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descripsion` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice_details`
--

INSERT INTO `notice_details` (`id`, `type`, `title`, `descripsion`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Upcoming Batch', 'Basic & Advance Course of DCA, ADCA, Tally, DTP, ADTP, ADCA-Plus', 'Ethical Hacking-- 14/4/21/8:00 AM)(MWF)', 'cwepatna (1).jpg', 'Enable', '2021-04-29 18:30:00', '2021-04-30 14:25:22'),
(3, 'News And Offers', 'Language Course of C, C++, DS, Java, Python, .NET, DBMS, Q basic, visual Basic', 'cyber secyrity-05/10/21/9( MWF)', '20210423_133829.png', 'Enable', '2021-04-29 18:30:00', '2021-04-30 14:33:34'),
(4, 'Upcoming Batch', 'Basic & Advance Course of DCA, ADCA, Tally, DTP, ADTP, ADCA-Plus', 'cyber secyrity-05/10/21/9( MWF)', 'MicrosoftTeams-image-04.jpg', 'Enable', '2021-05-03 18:30:00', '2021-05-04 02:11:35');

-- --------------------------------------------------------

--
-- Table structure for table `slider_details`
--

CREATE TABLE `slider_details` (
  `id` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `sbi` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_details`
--

INSERT INTO `slider_details` (`id`, `type`, `sbi`, `status`, `created_at`, `updated_at`) VALUES
(6, 'bg image', 'slider2.jpg', 'Enable', '2021-04-29 18:30:00', '2021-04-30 11:25:01'),
(7, 'bg image', 'slider1.jpg', 'Enable', '2021-04-29 18:30:00', '2021-04-30 11:25:20'),
(10, 'slider', 'WhatsApp Image 2021-01-24 at 21.28.04.jpeg', 'Enable', '2021-05-03 18:30:00', '2021-05-04 02:09:56');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `reg_no` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `course_nm` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `date_birth` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `f_mobile_no` varchar(100) NOT NULL,
  `course_fee` varchar(100) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `p_address` varchar(100) NOT NULL,
  `edu_quali` varchar(100) NOT NULL,
  `Duration` varchar(100) NOT NULL,
  `upload_photo` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `doa` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`reg_no`, `course`, `course_nm`, `s_name`, `f_name`, `m_name`, `date_birth`, `mobile_no`, `email`, `f_mobile_no`, `course_fee`, `c_address`, `p_address`, `edu_quali`, `Duration`, `upload_photo`, `status`, `doa`, `created_at`, `updated_at`, `id`) VALUES
('cwe/3025/211', 'Ethical Hacking', '', 'raju ', 'rahul singh', 'komal', '2021-05-12', '6202627875', 'mukulsingh97087@gmail.com', '6202627875', '45000/...', '', '', 'ba part 2', '6 mounth', '', '', '2021-05-20', '2021-05-03 18:30:00', '2021-05-01 09:42:30', 1),
('cwe/3025/212', 'Ethical Hacking', 'Cyber Security', 'Rohit Kumar', 'Sankar singh', 'Sita Devi', '2000-03-02', '14545454', 'admin@gmail.com', '545454', '6000', 'kati fatory road , patna', 'kati fatory road , patna', '10th', '6 mounth', 'cehv11.jpg', '', '', '2021-05-02 18:30:00', '2021-05-03 10:03:10', 5);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_details`
--

CREATE TABLE `teacher_details` (
  `id` int(100) NOT NULL,
  `teacher_nam` varchar(100) NOT NULL,
  `teacher_post` varchar(100) NOT NULL,
  `descripsion` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_details`
--

INSERT INTO `teacher_details` (`id`, `teacher_nam`, `teacher_post`, `descripsion`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mukul Kumar', 'Developer', 'All our courses are self-paced and have been designed by subject matter experts, to give you an inte', 'IMG_20200810_193804_472.jpg', 'Enable', '2021-04-29 18:30:00', '2021-04-30 16:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Mob_No` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `Type`, `Name`, `Mob_No`, `Email`, `Username`, `Password`, `Status`, `Created_at`, `Updated_at`) VALUES
(0, '', 'mukul', '44633641661', 'admin123@', 'mukul0', '123', 'Active', '2021-04-15 00:43:26', '2021-04-15 00:43:26'),
(0, 'admin', 'mukul', '45464634', 'admin123@gmail.com', 'mukul0', 'admin123@', 'Active', '2021-04-15 14:41:24', '2021-04-15 14:41:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_details`
--
ALTER TABLE `about_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_newcourse`
--
ALTER TABLE `add_newcourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate_details`
--
ALTER TABLE `certificate_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_details`
--
ALTER TABLE `notice_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_details`
--
ALTER TABLE `slider_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_details`
--
ALTER TABLE `teacher_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_details`
--
ALTER TABLE `about_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_newcourse`
--
ALTER TABLE `add_newcourse`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `certificate_details`
--
ALTER TABLE `certificate_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notice_details`
--
ALTER TABLE `notice_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider_details`
--
ALTER TABLE `slider_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher_details`
--
ALTER TABLE `teacher_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
