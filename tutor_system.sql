-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3300
-- Generation Time: May 20, 2024 at 05:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutor_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_1year`
--

CREATE TABLE `faculty_1year` (
  `emp_code` int(255) NOT NULL,
  `emp_name` varchar(256) NOT NULL,
  `emp_dep` varchar(256) NOT NULL,
  `tutor_group` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_1year`
--

INSERT INTO `faculty_1year` (`emp_code`, `emp_name`, `emp_dep`, `tutor_group`) VALUES
(25020, 'RAJNISH AVASTHI', '1 year', '2A3'),
(29203, 'ZAKIR HUSSIAN', '1 year', '2O1, 2O2'),
(29402, 'JUGMOHAN SINGH NAMDHARI', '1 year', '4G1, 4G2');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_chemistry`
--

CREATE TABLE `faculty_chemistry` (
  `emp_code` int(255) NOT NULL,
  `emp_name` varchar(256) NOT NULL,
  `emp_dep` varchar(256) NOT NULL,
  `tutor_group` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_chemistry`
--

INSERT INTO `faculty_chemistry` (`emp_code`, `emp_name`, `emp_dep`, `tutor_group`) VALUES
(19414, 'SUSHMA DAVE', 'Chemistry', '2A2');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_civil`
--

CREATE TABLE `faculty_civil` (
  `emp_code` int(255) NOT NULL,
  `emp_name` varchar(256) NOT NULL,
  `emp_dep` varchar(256) NOT NULL,
  `tutor_group` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_civil`
--

INSERT INTO `faculty_civil` (`emp_code`, `emp_name`, `emp_dep`, `tutor_group`) VALUES
(18008, 'KAMLESH PARIHAR', 'CIVIL', '8I2'),
(18029, 'KIRAN BHOOT', 'CIVIL', '2M1'),
(18053, 'ABHISHEK ARYA', 'CIVIL', '8I1'),
(18067, 'SOURABH SONI', 'CIVIL', '4M2'),
(18076, 'RAHUL BHATI', 'CIVIL', '4M1'),
(18084, 'RAJAT MANGAL', 'CIVIL', '8I3'),
(18089, 'SUMIT GAHLOT', 'CIVIL', '6I1'),
(18093, 'ANIRUDH SHARMA', 'CIVIL', '2M2'),
(18099, 'TARUN PUROHIT', 'CIVIL', '6I2');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_cse`
--

CREATE TABLE `faculty_cse` (
  `emp_code` int(255) NOT NULL,
  `emp_name` varchar(256) NOT NULL,
  `emp_dep` varchar(256) NOT NULL,
  `tutor_group` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_cse`
--

INSERT INTO `faculty_cse` (`emp_code`, `emp_name`, `emp_dep`, `tutor_group`) VALUES
(22001, 'MAMTA GARG', 'CSE', '6A3'),
(24009, 'RAJENDRA PUROHIT', 'CSE', '6C3'),
(14049, 'ANAMIKA CHOUDHARY', 'CSE', '6C2'),
(12055, 'JYOTI VYAS', 'CSE', '8B2'),
(22018, 'SUNITA GODARA', 'CSE', '8A3,4A1'),
(12098, 'SANTOSH GUPTA', 'CSE', '6B2'),
(12115, 'HARSHITA KHANGAROT', 'CSE', '4C2'),
(12120, 'ANJU JANGID', 'CSE', '6B1'),
(12128, 'ANAND HARSHA', 'CSE', '6C1, 2C3'),
(12131, 'PRANITA', 'CSE', '6A2'),
(12136, 'NARESH PUROHIT', 'CSE', '8C2'),
(12138, 'SHALOO DAHEECH', 'CSE', '8C1, 4A2'),
(12139, 'DIMPLE BHATI', 'CSE', '4C3, 2C2'),
(12141, 'RAKESH SAXENA', 'CSE', '4D3'),
(12148, 'UMESH AGARWAL', 'CSE', '6B3'),
(12154, 'ANKITA SHARMA', 'CSE', '6A1'),
(12157, 'SHIVANI SAXENA', 'CSE', '2B3'),
(12159, 'VIKASH SINGH', 'CSE', '2B2, 8A2'),
(12116, 'SURBHI VYAS', 'CSE', '4C1, 8B3');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_ece`
--

CREATE TABLE `faculty_ece` (
  `emp_code` int(255) NOT NULL,
  `emp_name` varchar(256) NOT NULL,
  `emp_dep` varchar(256) NOT NULL,
  `tutor_group` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_ece`
--

INSERT INTO `faculty_ece` (`emp_code`, `emp_name`, `emp_dep`, `tutor_group`) VALUES
(13041, 'LAXMI CHAUDHARY', 'ECE', '2H2'),
(13060, 'MANISH PUROHIT', 'ECE', '8D'),
(13085, 'KOUSH RASTOGI', 'ECE', '4H'),
(13088, 'RENU PUROHIT', 'ECE', '6D'),
(13090, 'PRADEEP KUMAR SHARMA', 'ECE', '2H1');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_ee`
--

CREATE TABLE `faculty_ee` (
  `emp_code` int(255) NOT NULL,
  `emp_name` varchar(256) NOT NULL,
  `emp_dep` varchar(256) NOT NULL,
  `tutor_group` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_ee`
--

INSERT INTO `faculty_ee` (`emp_code`, `emp_name`, `emp_dep`, `tutor_group`) VALUES
(14048, 'CHANDERSHEKHAR SINGH ', 'ELECTRICAL', '4I1'),
(14057, 'RAVI SONI', 'ELECTRICAL', '4I2'),
(14044, 'VINEET GEHLOT', 'ELECTRICAL', '6E1'),
(14073, 'ANKITA PUROHIT', 'ELECTRICAL', '6E2'),
(14077, 'AMIT SINGHAL', 'ELECTRICAL', '8E2'),
(26003, 'RAJIV VYAS', 'ELECTRICAL', '2H3'),
(14081, 'ASHOK', 'ELECTRICAL', '8E1');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_human`
--

CREATE TABLE `faculty_human` (
  `emp_code` int(255) NOT NULL,
  `emp_name` varchar(256) NOT NULL,
  `emp_dep` varchar(256) NOT NULL,
  `tutor_group` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_human`
--

INSERT INTO `faculty_human` (`emp_code`, `emp_name`, `emp_dep`, `tutor_group`) VALUES
(30017, 'ANSHU MATHUR', 'Humanities', '4B1'),
(26013, 'RAJANI BORA', 'Humanities', '4A3');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_math`
--

CREATE TABLE `faculty_math` (
  `emp_code` int(255) NOT NULL,
  `emp_name` varchar(256) NOT NULL,
  `emp_dep` varchar(256) NOT NULL,
  `tutor_group` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_math`
--

INSERT INTO `faculty_math` (`emp_code`, `emp_name`, `emp_dep`, `tutor_group`) VALUES
(19014, 'ANJALI MATHUR', 'Mathematics', '4B2'),
(19012, 'LALITA MISTRY', 'Mathematics', '4B3'),
(19814, 'HARISH KUMAR SONI', 'Mathematics', '2E2, 2E3'),
(19816, 'NITISHA PANDEY', 'Mathematics', '2B1');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_me`
--

CREATE TABLE `faculty_me` (
  `emp_code` int(10) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_dep` varchar(255) NOT NULL,
  `tutor_group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_me`
--

INSERT INTO `faculty_me` (`emp_code`, `emp_name`, `emp_dep`, `tutor_group`) VALUES
(16141, 'VIKAS DAVE', 'ME', '4K'),
(16144, 'NAVEEN GUPTA', 'ME', '6G'),
(16145, 'MOHIT OSTWAL', 'ME', '8G2'),
(16147, 'CHETAN JALENDRA', 'ME', '8G1'),
(16136, 'MITHUN SILORIYA', 'ME', '2M3');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_physics`
--

CREATE TABLE `faculty_physics` (
  `emp_code` int(255) NOT NULL,
  `emp_name` varchar(256) NOT NULL,
  `emp_dep` varchar(256) NOT NULL,
  `tutor_group` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_physics`
--

INSERT INTO `faculty_physics` (`emp_code`, `emp_name`, `emp_dep`, `tutor_group`) VALUES
(19220, ' NIDHI VARSHNEY/GUPTA', 'Physics', '2A1');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_tech`
--

CREATE TABLE `faculty_tech` (
  `emp_code` int(255) NOT NULL,
  `emp_name` varchar(256) NOT NULL,
  `emp_dep` varchar(256) NOT NULL,
  `tutor_group` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_tech`
--

INSERT INTO `faculty_tech` (`emp_code`, `emp_name`, `emp_dep`, `tutor_group`) VALUES
(25011, 'KAMLESH BHANDARI', 'TECHNOLOGY', '2D1, 2D2'),
(19804, 'VIDUSHI GUPTA', 'TECHNOLOGY', '2D3, 2E1'),
(19216, 'SUSHAMANA SHARMA', 'TECHNOLOGY', '2F1, 2F2'),
(16138, 'PAWAN KUMAR GUPTA', 'TECHNOLOGY', '2G1, 2G2'),
(23003, 'PRASHANT THANVI', 'TECHNOLOGY', '8A1, 8A3'),
(23029, 'ANIL KUMAR SINGH', 'TECHNOLOGY', '4E1, 4E2(HALF)'),
(39468, 'PURVA SHARMA', 'TECHNOLOGY', '8A2, 8B1'),
(12143, 'ASHISH SHARMA', 'TECHNOLOGY', '4F2'),
(12147, 'KRISHAN PAL SINGH', 'TECHNOLOGY', '6E3'),
(12150, 'NAUSHEEN KHILJI', 'TECHNOLOGY', '6A1'),
(12152, 'SAROJ BALA', 'TECHNOLOGY', '4D1'),
(12158, 'SHWETA SOLANKI', 'TECHNOLOGY', '6A2'),
(23004, 'HEMANT JAIN', 'TECHNOLOGY', '4E3, 4E2(HALF)'),
(14080, 'BHUVNESH RATHORE', 'TECHNOLOGY', '6B'),
(12054, 'ARSHI RIYAZ', 'TECHNOLOGY', '4F1');

-- --------------------------------------------------------

--
-- Table structure for table `parent_tutor_meet`
--

CREATE TABLE `parent_tutor_meet` (
  `meeting_id` int(255) NOT NULL,
  `student_name` varchar(256) NOT NULL,
  `parent_name` varchar(256) NOT NULL,
  `date_time` datetime NOT NULL,
  `remarks` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent_tutor_meet`
--

INSERT INTO `parent_tutor_meet` (`meeting_id`, `student_name`, `parent_name`, `date_time`, `remarks`) VALUES
(1, 'anirudh henry lal', 'rajveer', '2024-04-27 07:02:27', 'papa ache h, bacha nalayak h');

-- --------------------------------------------------------

--
-- Table structure for table `skill_enhancement`
--

CREATE TABLE `skill_enhancement` (
  `skill_id` int(255) NOT NULL,
  `student_name` varchar(256) NOT NULL,
  `achievement_title` varchar(256) NOT NULL,
  `document` varchar(256) NOT NULL,
  `remarks` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill_enhancement`
--

INSERT INTO `skill_enhancement` (`skill_id`, `student_name`, `achievement_title`, `document`, `remarks`) VALUES
(1, 'rajveer', 'Council member', '\"D:\\Test cases-.txt\"', 'remarks ajayega ');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_tutee_meet`
--

CREATE TABLE `tutor_tutee_meet` (
  `tutor_meet_id` int(255) NOT NULL,
  `student_name` varchar(256) NOT NULL,
  `date and time` datetime NOT NULL,
  `remarks` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutor_tutee_meet`
--

INSERT INTO `tutor_tutee_meet` (`tutor_meet_id`, `student_name`, `date and time`, `remarks`) VALUES
(1, 'siddharth', '2024-04-26 10:30:14', 'very good student. '),
(2, 'kritika', '2024-04-27 07:00:14', 'very bad girl.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_role` varchar(256) NOT NULL,
  `department` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_role`, `department`) VALUES
(1, 'rajveer09', '2010', 'Admin', ''),
(2, 'yogita20', '1009', 'Admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parent_tutor_meet`
--
ALTER TABLE `parent_tutor_meet`
  ADD PRIMARY KEY (`meeting_id`);

--
-- Indexes for table `skill_enhancement`
--
ALTER TABLE `skill_enhancement`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `tutor_tutee_meet`
--
ALTER TABLE `tutor_tutee_meet`
  ADD PRIMARY KEY (`tutor_meet_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parent_tutor_meet`
--
ALTER TABLE `parent_tutor_meet`
  MODIFY `meeting_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skill_enhancement`
--
ALTER TABLE `skill_enhancement`
  MODIFY `skill_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tutor_tutee_meet`
--
ALTER TABLE `tutor_tutee_meet`
  MODIFY `tutor_meet_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
