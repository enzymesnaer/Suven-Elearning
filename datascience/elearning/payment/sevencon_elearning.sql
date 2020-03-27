-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 09:16 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sevencon_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_packages`
--

CREATE TABLE `all_packages` (
  `id` varchar(10) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_packages`
--

INSERT INTO `all_packages` (`id`, `description`, `price`, `discount`) VALUES
('0002', 'Data Science', 23790, 23);

-- --------------------------------------------------------

--
-- Table structure for table `all_payment_transactions`
--

CREATE TABLE `all_payment_transactions` (
  `txnid` varchar(50) NOT NULL,
  `orderid` varchar(10) NOT NULL,
  `txn_amount` float NOT NULL,
  `payment_mode` varchar(10) NOT NULL,
  `currency` varchar(5) NOT NULL,
  `txn_date` datetime NOT NULL,
  `status_code` varchar(20) NOT NULL,
  `response_code` varchar(5) NOT NULL,
  `response_msg` varchar(100) NOT NULL,
  `gateway_name` varchar(200) NOT NULL,
  `bank_txnid` varchar(50) NOT NULL,
  `bank_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `courseid` int(100) NOT NULL,
  `code` varchar(10) NOT NULL,
  `coursename` varchar(1000) NOT NULL,
  `price` float DEFAULT NULL,
  `coursedescr` varchar(10000) NOT NULL,
  `courseimg` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`courseid`, `code`, `coursename`, `price`, `coursedescr`, `courseimg`) VALUES
(1001, 'MLB', 'Machine Learning Beginner', 3400, 'About Machine Learning Beginner Course', '/image/path/'),
(1002, 'MLI', 'Machine Learning Intermediate', 3100, 'About Machine Learning Intermediate Course', '/image/path/'),
(2001, 'MLB', 'Machine Learning Beginner', NULL, 'About Machine Learning Beginner Course (Part of Track)', '/image/path/'),
(2002, 'MLI', 'Machine Learning Intermediate', NULL, 'About Machine Learning Intermediate Course (Part of track)', '/image/path/');

-- --------------------------------------------------------

--
-- Table structure for table `discount_coupons`
--

CREATE TABLE `discount_coupons` (
  `code` varchar(10) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `percent` int(11) NOT NULL DEFAULT 0,
  `valid_from` date NOT NULL,
  `valid_to` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount_coupons`
--

INSERT INTO `discount_coupons` (`code`, `description`, `percent`, `valid_from`, `valid_to`) VALUES
('efrte3434s', 'First  timer Bonus ', 23, '2019-01-01', '2020-12-31'),
('we34t56sas', 'bumper voucher', 37, '2019-01-01', '2020-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_table`
--

CREATE TABLE `enquiry_table` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry_table`
--

INSERT INTO `enquiry_table` (`id`, `name`, `email`, `contact`) VALUES
(4, 'hjh', '', 0),
(5, 'sneharqwer', 'snehar@qwer', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `package_courses`
--

CREATE TABLE `package_courses` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `courseid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_courses`
--

INSERT INTO `package_courses` (`id`, `name`, `courseid`) VALUES
('0002', 'Data Science', 2001),
('0002', 'Data Science', 2002);

-- --------------------------------------------------------

--
-- Table structure for table `questions_table`
--

CREATE TABLE `questions_table` (
  `questionid` int(20) NOT NULL,
  `questiondefn` varchar(2000) NOT NULL,
  `option1` varchar(2000) NOT NULL,
  `option2` varchar(2000) NOT NULL,
  `option3` varchar(2000) NOT NULL,
  `answer` int(20) NOT NULL,
  `topicid` int(20) NOT NULL,
  `courseid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions_table`
--

INSERT INTO `questions_table` (`questionid`, `questiondefn`, `option1`, `option2`, `option3`, `answer`, `topicid`, `courseid`) VALUES
(1, 'question 1.1 defn', 'ans1', 'ans2', 'ans3', 2, 1, 1),
(2, 'question 1.2 defn', 'ans1', 'ans2', 'ans3', 2, 1, 1),
(3, 'question 2.1 defn', 'ans1', 'ans2', 'ans3', 2, 2, 1),
(4, 'question 2.2 defn', 'ans1', 'ans2', 'ans3', 2, 2, 1),
(5, 'question 3.1 defn', 'ans1', 'ans2', 'ans3', 2, 3, 1),
(6, 'question 3.2 defn', 'ans1', 'ans2', 'ans3', 2, 3, 1),
(7, 'question 4.1 defn', 'ans1', 'ans2', 'ans3', 2, 4, 1),
(8, 'question 4.2 defn', 'ans1', 'ans2', 'ans3', 2, 4, 1),
(9, 'question 5.1 defn', 'ans1', 'ans2', 'ans3', 2, 5, 1),
(10, 'question 5.2 defn', 'ans1', 'ans2', 'ans3', 2, 5, 1),
(11, 'question 6.1 defn', 'ans1', 'ans2', 'ans3', 2, 6, 1),
(12, 'question 6.2 defn', 'ans1', 'ans2', 'ans3', 2, 6, 1),
(13, 'question 7.1 defn', 'ans1', 'ans2', 'ans3', 2, 7, 1),
(14, 'question 7.2 defn', 'ans1', 'ans2', 'ans3', 2, 7, 1),
(15, 'question 8.1 defn', 'ans1', 'ans2', 'ans3', 2, 8, 1),
(16, 'question 8.2 defn', 'ans1', 'ans2', 'ans3', 2, 8, 1),
(17, 'question 9.1 defn', 'ans1', 'ans2', 'ans3', 2, 9, 1),
(18, 'question 9.2 defn', 'ans1', 'ans2', 'ans3', 2, 9, 1),
(19, 'question 10.1 defn', 'ans1', 'ans2', 'ans3', 2, 10, 1),
(20, 'question 10.2 defn', 'ans1', 'ans2', 'ans3', 2, 10, 1),
(21, 'question 11.1 defn', 'ans1', 'ans2', 'ans3', 2, 11, 1),
(22, 'question 11.2 defn', 'ans1', 'ans2', 'ans3', 2, 11, 1),
(23, 'question 12.1 defn', 'ans1', 'ans2', 'ans3', 2, 12, 1),
(24, 'question 12.2 defn', 'ans1', 'ans2', 'ans3', 2, 12, 1),
(25, 'question 13.1 defn', 'ans1', 'ans2', 'ans2', 2, 13, 1),
(26, 'question 13.2 defn', 'ans1', 'ans2', 'aws3', 2, 13, 1),
(28, 'question 1.1 defn', 'ans1', 'ans2', 'ans3', 2, 1, 1),
(29, 'question 1.2 defn', 'ans1', 'ans2', 'ans3', 2, 1, 1),
(30, 'question 2.1 defn', 'ans1', 'ans2', 'ans3', 2, 2, 1),
(31, 'question 2.2 defn', 'ans1', 'ans2', 'ans3', 2, 2, 1),
(32, 'question 3.1 defn', 'ans1', 'ans2', 'ans3', 2, 3, 1),
(33, 'question 3.2 defn', 'ans1', 'ans2', 'ans3', 2, 3, 1),
(34, 'question 4.1 defn', 'ans1', 'ans2', 'ans3', 2, 4, 1),
(35, 'question 4.2 defn', 'ans1', 'ans2', 'ans3', 2, 4, 1),
(36, 'question 5.1 defn', 'ans1', 'ans2', 'ans3', 2, 5, 1),
(37, 'question 5.2 defn', 'ans1', 'ans2', 'ans3', 2, 5, 1),
(38, 'question 6.1 defn', 'ans1', 'ans2', 'ans3', 2, 6, 1),
(39, 'question 6.2 defn', 'ans1', 'ans2', 'ans3', 2, 6, 1),
(40, 'question 7.1 defn', 'ans1', 'ans2', 'ans3', 2, 7, 1),
(41, 'question 7.2 defn', 'ans1', 'ans2', 'ans3', 2, 7, 1),
(42, 'question 8.1 defn', 'ans1', 'ans2', 'ans3', 2, 8, 1),
(43, 'question 8.2 defn', 'ans1', 'ans2', 'ans3', 2, 8, 1),
(44, 'question 9.1 defn', 'ans1', 'ans2', 'ans3', 2, 9, 1),
(45, 'question 9.2 defn', 'ans1', 'ans2', 'ans3', 2, 9, 1),
(46, 'question 10.1 defn', 'ans1', 'ans2', 'ans3', 2, 10, 1),
(47, 'question 10.2 defn', 'ans1', 'ans2', 'ans3', 2, 10, 1),
(48, 'question 11.1 defn', 'ans1', 'ans2', 'ans3', 2, 11, 1),
(49, 'question 11.2 defn', 'ans1', 'ans2', 'ans3', 2, 11, 1),
(50, 'question 12.1 defn', 'ans1', 'ans2', 'ans3', 2, 12, 1),
(51, 'question 12.2 defn', 'ans1', 'ans2', 'ans3', 2, 12, 1),
(52, 'question 13.1 defn', 'ans1', 'ans2', 'ans2', 2, 13, 1),
(53, 'question 13.2 defn', 'ans1', 'ans2', 'aws3', 2, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quizusers_table`
--

CREATE TABLE `quizusers_table` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `topicid` int(11) NOT NULL,
  `chapterid` int(11) NOT NULL,
  `date_submit` varchar(100) NOT NULL,
  `performance` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`id`, `duration`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `topics_table`
--

CREATE TABLE `topics_table` (
  `topicid` int(20) NOT NULL,
  `courseid` int(20) NOT NULL,
  `coursename` varchar(6000) NOT NULL,
  `topicname` varchar(3000) NOT NULL,
  `topicdescr` varchar(3000) NOT NULL,
  `notebookurl` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics_table`
--

INSERT INTO `topics_table` (`topicid`, `courseid`, `coursename`, `topicname`, `topicdescr`, `notebookurl`) VALUES
(1, 1, 'Machine Learning Beginner', 'Supervised & Unsupervised ML', '', 'http://qwerty'),
(2, 1, 'Machine Learning Beginner', 'ML Pipeline', '', 'http://qwerty'),
(3, 1, 'Machine Learning Beginner', 'Basic Data Exploration', '', 'http://qwerty'),
(4, 1, 'Machine Learning Beginner', 'Train Test Split', '', 'http://qwerty'),
(5, 1, 'Machine Learning Beginner', 'Encoding Categorical Data', '', 'http://qwerty'),
(6, 1, 'Machine Learning Beginner', 'Feature Scaling', '', 'http://qwerty'),
(7, 1, 'Machine Learning Beginner', 'Decision (CART) Trees', '', 'http://qwerty'),
(8, 1, 'Machine Learning Beginner', 'Random Forest', '', 'http://qwerty'),
(9, 1, 'Machine Learning Beginner', 'Naive Bayes Classification', '', 'http://qwerty'),
(10, 1, 'Machine Learning Beginner', 'Principal Component Analysis', '', 'http://qwerty'),
(11, 1, 'Machine Learning Beginner', 'k-Means Clustering', '', 'http://qwerty'),
(12, 1, 'Machine Learning Beginner', 'K Nearest Neighbors (KNN) Supervised Classification Algo', '', 'http://qwerty'),
(13, 1, 'Machine Learning Beginner', 'Deploying ML models on FLASK', '', 'http://qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `contact` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`uid`, `name`, `username`, `contact`, `email`, `password`) VALUES
(7, 'Snehar Manoj Koli', 'snehar16395@sctpl', 2147483647, 'snehar16395@gmail.com', '963.963.963.963.'),
(8, 'SneharABC', 'abc@sctpl', 1231231231, 'abc@gmail.com', 'qwerty123'),
(9, 'Pankaj Sharma', 'pankajs579@sctpl', 2147483647, 'pankajs579@gmail.com', 'qwertyuiop');

-- --------------------------------------------------------

--
-- Table structure for table `user_course_orders`
--

CREATE TABLE `user_course_orders` (
  `userid` int(100) NOT NULL,
  `courseid` int(100) NOT NULL,
  `orderid` varchar(10) NOT NULL,
  `pct_discount` int(11) DEFAULT 0,
  `status` varchar(10) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_course_orders`
--

INSERT INTO `user_course_orders` (`userid`, `courseid`, `orderid`, `pct_discount`, `status`) VALUES
(9, 1001, 'ORD9059776', 0, 'PENDING'),
(9, 1001, 'ORD940235', 0, 'PENDING'),
(9, 1001, 'ORD437856', 0, 'PENDING'),
(9, 1002, 'ORD115415', 0, 'PENDING'),
(9, 2002, 'ORD530311', 0, 'PENDING'),
(9, 2001, 'ORD99999', 0, 'PENDING'),
(9, 2002, 'ORD99999', 0, 'PENDING'),
(9, 1002, 'ORD441558', 0, 'PENDING'),
(9, 2001, 'ORD181080', 0, 'PENDING'),
(9, 2002, 'ORD181080', 0, 'PENDING'),
(9, 1002, 'ORD85911', 37, 'PENDING'),
(9, 1002, 'ORD926653', 0, 'PENDING'),
(9, 2001, 'ORD962402', 23, 'PENDING'),
(9, 2002, 'ORD962402', 23, 'PENDING');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_packages`
--
ALTER TABLE `all_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `discount_coupons`
--
ALTER TABLE `discount_coupons`
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `enquiry_table`
--
ALTER TABLE `enquiry_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_courses`
--
ALTER TABLE `package_courses`
  ADD UNIQUE KEY `id` (`id`,`courseid`);

--
-- Indexes for table `questions_table`
--
ALTER TABLE `questions_table`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics_table`
--
ALTER TABLE `topics_table`
  ADD PRIMARY KEY (`topicid`),
  ADD KEY `courseid` (`courseid`),
  ADD KEY `coursename` (`coursename`(768));

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_table`
--
ALTER TABLE `course_table`
  MODIFY `courseid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2003;

--
-- AUTO_INCREMENT for table `enquiry_table`
--
ALTER TABLE `enquiry_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions_table`
--
ALTER TABLE `questions_table`
  MODIFY `questionid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `topics_table`
--
ALTER TABLE `topics_table`
  MODIFY `topicid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
