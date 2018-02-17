-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2018 at 11:24 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpg_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rdate` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `name`, `description`, `rdate`, `user_id`) VALUES
(1, 'XD PT HD', 'EASY PZ', '2015-10-12 10:20:10', 18);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
CREATE TABLE `notices` (
  `nid` int(11) UNSIGNED NOT NULL,
  `ntitle` varchar(100) NOT NULL,
  `ncontent` text NOT NULL,
  `ndate` date NOT NULL,
  `nauthor` int(11) UNSIGNED NOT NULL,
  `ncategory` int(11) NOT NULL,
  `nimg_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`nid`, `ntitle`, `ncontent`, `ndate`, `nauthor`, `ncategory`, `nimg_url`) VALUES
(1, 'Test server', '<b>We are still testing the game </b>', '0000-00-00', 1, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usr` varchar(50) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rdate` date NOT NULL,
  `admin` tinyint(1) DEFAULT '0',
  `banned` tinyint(1) DEFAULT '0',
  `hash` varchar(255) DEFAULT NULL,
  `validated` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usr`, `pwd`, `email`, `rdate`, `admin`, `banned`, `hash`, `validated`) VALUES
(18, 'jaskile12', '80ab0868034b6888135546113f1ab450cc2902def4c64a5394ca5ae2605e0a248760fcd0110406f5dfa28eaf8344ecdcfd5879645be3241ccae74ec312f4b03bfqQNVxUQIh1mX6/lz0ydSlUKcKw=', 'monstawoodwow@gmail.com', '2018-02-14', 0, 0, 'ace5a31c09ccfb831d3e1e79d882f1285e754263', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usr` (`usr`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
