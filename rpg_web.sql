-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Jul-2018 às 12:35
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpg_web`
--
CREATE DATABASE IF NOT EXISTS `rpg_web` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rpg_web`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `characters`
--

DROP TABLE IF EXISTS `characters`;
CREATE TABLE `characters` (
  `c_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `c_name` varchar(25) NOT NULL,
  `c_level` int(2) UNSIGNED DEFAULT '1',
  `c_exp` int(5) DEFAULT '0',
  `c_class` int(1) NOT NULL,
  `c_rdate` datetime NOT NULL,
  `c_inventory` int(11) NOT NULL,
  `c_gold` int(3) NOT NULL,
  `c_silver` int(3) NOT NULL,
  `c_bronze` int(3) NOT NULL,
  `c_str` int(2) NOT NULL,
  `c_agi` int(2) NOT NULL,
  `c_def` int(2) NOT NULL,
  `c_spr` int(2) NOT NULL,
  `c_hp` int(4) NOT NULL,
  `c_mana` int(4) NOT NULL,
  `c_energy` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `characters`
--

INSERT INTO `characters` (`c_id`, `user_id`, `c_name`, `c_level`, `c_exp`, `c_class`, `c_rdate`, `c_inventory`, `c_gold`, `c_silver`, `c_bronze`, `c_str`, `c_agi`, `c_def`, `c_spr`, `c_hp`, `c_mana`, `c_energy`) VALUES
(2, 22, 'Admin', 1, 0, 1, '2018-06-24 20:06:47', 0, 0, 0, 0, 10, 10, 10, 10, 500, 200, 100),
(3, 22, 'Test', 1, 0, 1, '2018-06-30 15:06:05', 0, 0, 0, 0, 10, 10, 10, 10, 500, 200, 100);

-- --------------------------------------------------------

--
-- Estrutura da tabela `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE `inventory` (
  `i_id` int(11) NOT NULL,
  `char_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `inventory`
--

INSERT INTO `inventory` (`i_id`, `char_id`) VALUES
(1, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rdate` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notices`
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
-- Extraindo dados da tabela `notices`
--

INSERT INTO `notices` (`nid`, `ntitle`, `ncontent`, `ndate`, `nauthor`, `ncategory`, `nimg_url`) VALUES
(0, 'Build 1.0.1 Release', 'Download is now available for windows', '2018-07-01', 1, 3, 'https://i.imgur.com/DQUXI0n.jpg'),
(1, 'PAP 2018 #FS', '<b> Glad to present <i>Foreign Sword </i> </b> ', '0000-00-00', 1, 4, 'https://i.imgur.com/JaKvTmF.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
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
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `usr`, `pwd`, `email`, `rdate`, `admin`, `banned`, `hash`, `validated`) VALUES
(22, 'jaskile12', 'aef5f3feac11406cd18f1884f4772179e0ada9aa9bbbec5ae485776c44b6fc8207b63e6333886aff86d82d394fddf8e1ba3edcd0c9e0de31fd3dbf83f8e0333cDhH+KyuulKzYtSFpv3OqpVb2m9Q=', 'monstawoodwow@gmail.com', '2018-03-02', 0, 0, '96ea8d2753ce0ed2e314aa324a0f417b3f628a61', 1),
(23, 'jaskile13', 'c9a1fb96bb019270439d0491c14ee04ef992e10f141c3c36f9b77c3162c9fedfba599ad60e2d834c42000fd677dfecf2a556a99187a7a21fdeea947d5629a8d0HTgFNFpPxr1iIV26VoCiqbZBBNU=', 'monstawoodwow@gmail.com2', '2018-07-01', 0, 0, 'fb63f90d182af810cdedf6832c932c812adf93fd', 0),
(24, 'jaskile14', '63d5ce26779c4082bc4d6f16f283944ec7e544124f6b36f170d4bb5a81c8704cd9494dcfecf794498f7d19a738be93a0b9a574cc8dde6095ecdc1ac363008a60tZkL4zcbqBMHvkqQuZOfW59lAnM=', 'monstawoodwow2@gmail.com', '2018-07-01', 0, 0, 'b07821aeee4fe18d8a62c49b20f9394b408effae', 0),
(25, 'jaskile15', '7ea8bfdb89624caf8b5a0e665c95b37a4d1405b77cbec3614de7e311e6d90f51cdeadd273d4634a08fc283329ee6d0c36d5501bf713e12145416117a6513f662ovsKfOGPlpIgAvO1tvywNnODCQE=', 'underfiskv2@gmail.com', '2018-07-01', 0, 0, '3c6216b017a8ab0f367b4f6bcca5b4fa7db896ea', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`i_id`),
  ADD KEY `char_inv` (`char_id`);

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
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `char_inv` FOREIGN KEY (`char_id`) REFERENCES `characters` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
