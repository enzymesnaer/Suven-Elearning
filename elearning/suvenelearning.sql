-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 07:23 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `suvenelearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_auth_tokens`
--

CREATE TABLE `user_auth_tokens` (
  `userid` varchar(100) NOT NULL,
  `secret_key` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_auth_tokens`
--

INSERT INTO `user_auth_tokens` (`userid`, `secret_key`) VALUES
('pankaj.jd.sharma@gmail.com', 995217091),
('pankajs579@gmail.com', 190108132);

-- --------------------------------------------------------

--
-- Table structure for table `websiteusers`
--

CREATE TABLE `websiteusers` (
  `fullname` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websiteusers`
--

INSERT INTO `websiteusers` (`fullname`, `userName`, `email`, `pass`) VALUES
('Pankaj Sharma', 'pankaj.jd.sharma@gmail.com', 'pankaj.jd.sharma@gmail.com', '$2y$10$b7kXljUPMq0YAAw2nsxUYukR5cz89OBhNEMOiXKvcwK0b/NXPlWJK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_auth_tokens`
--
ALTER TABLE `user_auth_tokens`
  ADD PRIMARY KEY (`userid`);
COMMIT;
