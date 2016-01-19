-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 1 朁E19 日 12:06
-- サーバのバージョン： 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pazudora`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `attrs`
--

CREATE TABLE IF NOT EXISTS `attrs` (
  `id` int(11) NOT NULL,
  `attr_type` varchar(8) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `attrs`
--

INSERT INTO `attrs` (`id`, `attr_type`, `created`, `modified`) VALUES
(1, '火', '2016-01-19 12:04:48', '2016-01-19 12:04:48'),
(2, '水', '2016-01-19 12:04:55', '2016-01-19 12:04:55'),
(3, '木', '2016-01-19 12:05:02', '2016-01-19 12:05:02'),
(4, '光', '2016-01-19 12:05:09', '2016-01-19 12:05:09'),
(5, '闇', '2016-01-19 12:05:14', '2016-01-19 12:05:14');

-- --------------------------------------------------------

--
-- テーブルの構造 `kinds`
--

CREATE TABLE IF NOT EXISTS `kinds` (
  `id` int(11) NOT NULL,
  `kind_type` varchar(32) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `kinds`
--

INSERT INTO `kinds` (`id`, `kind_type`, `created`, `modified`) VALUES
(7, '神', '2016-01-19 12:03:13', '2016-01-19 12:03:13'),
(8, 'ドラゴン', '2016-01-19 12:03:33', '2016-01-19 12:03:33'),
(9, '悪魔', '2016-01-19 12:03:39', '2016-01-19 12:03:39'),
(10, 'バランス', '2016-01-19 12:03:53', '2016-01-19 12:03:53'),
(11, '攻撃', '2016-01-19 12:03:59', '2016-01-19 12:03:59'),
(12, '体力', '2016-01-19 12:04:06', '2016-01-19 12:04:06'),
(13, '回復', '2016-01-19 12:04:14', '2016-01-19 12:04:14');

-- --------------------------------------------------------

--
-- テーブルの構造 `monsters`
--

CREATE TABLE IF NOT EXISTS `monsters` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `hp` int(11) NOT NULL,
  `atatck` int(11) NOT NULL,
  `attr_id` int(11) NOT NULL,
  `kind_id` int(11) NOT NULL,
  `image_file_name` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attrs`
--
ALTER TABLE `attrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kinds`
--
ALTER TABLE `kinds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monsters`
--
ALTER TABLE `monsters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attrs`
--
ALTER TABLE `attrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kinds`
--
ALTER TABLE `kinds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `monsters`
--
ALTER TABLE `monsters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
