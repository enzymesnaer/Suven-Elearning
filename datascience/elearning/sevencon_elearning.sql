-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 10:01 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `courseid` int(100) NOT NULL,
  `coursename` varchar(1000) NOT NULL,
  `coursedescr` varchar(10000) NOT NULL,
  `courseimg` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`courseid`, `coursename`, `coursedescr`, `courseimg`) VALUES
(1, 'Machine Learning Beginner', 'About Machine Learning Beginner Course', '/image/path/');

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
(8, 'SneharABC', 'abc@sctpl', 1231231231, 'abc@gmail.com', 'qwerty123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `enquiry_table`
--
ALTER TABLE `enquiry_table`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `courseid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
