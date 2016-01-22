-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 1 朁E22 日 11:59
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

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
(13, '回復', '2016-01-19 12:04:14', '2016-01-19 12:04:14'),
(14, 'マシン', '2016-01-20 11:52:27', '2016-01-20 11:52:27'),
(15, '進化用', '2016-01-20 11:52:27', '2016-01-20 11:53:30'),
(16, '能力覚醒', '2016-01-20 11:53:52', '2016-01-20 11:53:52'),
(17, '強化合成', '2016-01-20 11:54:09', '2016-01-20 11:54:09'),
(18, '換金用', '2016-01-20 11:54:30', '2016-01-20 11:54:30');

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
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `monsters`
--

INSERT INTO `monsters` (`id`, `name`, `hp`, `atatck`, `attr_id`, `kind_id`, `image_file_name`, `created`, `modified`) VALUES
(30, 'ティラ', 52, 57, 1, 8, 'ip1_001.jpg', '2016-01-22 10:33:43', '2016-01-22 10:33:43'),
(31, '大花龍ブラキオス', 812, 418, 3, 8, 'ip1_012.jpg', '2016-01-22 10:38:18', '2016-01-22 10:38:18'),
(32, 'セイレーン', 250, 180, 2, 13, 'ip1_091.jpg', '2016-01-22 10:39:02', '2016-01-22 10:39:02'),
(33, '光の番人', 1106, 311, 4, 15, 'ip1_150.jpg', '2016-01-22 10:39:57', '2016-01-22 10:39:57'),
(34, 'ヴァンパイアロード', 610, 343, 5, 10, 'ip1_111.jpg', '2016-01-22 10:40:53', '2016-01-22 10:40:53'),
(35, '破壊神・シヴァ', 1586, 968, 1, 7, 'ip1_237.jpg', '2016-01-22 10:41:54', '2016-01-22 10:41:54'),
(36, 'ギニュー特戦隊・ギニュー', 1044, 494, 5, 8, '1391.jpg', '2016-01-22 10:43:54', '2016-01-22 10:43:54'),
(37, '慈愛神・カオスヴィーナス', 1050, 692, 4, 9, 'ip1_395.jpg', '2016-01-22 10:44:45', '2016-01-22 10:44:45'),
(38, '紅焔の巫女・望月千代女', 1055, 536, 1, 10, 'ip1_556.jpg', '2016-01-22 10:45:30', '2016-01-22 10:45:30'),
(39, '超・だるま', 240, 450, 1, 11, 'm438.jpg', '2016-01-22 10:46:14', '2016-01-22 10:46:14'),
(40, '義篤の美髯神・ミニ関羽', 1263, 590, 3, 12, '1717.jpg', '2016-01-22 10:47:11', '2016-01-22 10:47:11'),
(41, '黄金聖闘士・牡羊座のムウ', 814, 834, 4, 13, '1721.jpg', '2016-01-22 10:48:07', '2016-01-22 10:48:07'),
(42, 'ダークギア', 258, 468, 5, 14, '2199.jpg', '2016-01-22 10:48:59', '2016-01-22 10:48:59'),
(43, 'ブルードラゴンフルーツ', 500, 400, 2, 15, '1086.jpg', '2016-01-22 10:49:38', '2016-01-22 10:49:38'),
(44, '潜在たまドラ☆水ダメージ軽減', 100, 100, 4, 16, '2213.jpg', '2016-01-22 10:50:34', '2016-01-22 10:50:34'),
(45, 'キングサファイアドラゴン', 500, 40, 2, 17, 'ip1_257.jpg', '2016-01-22 10:51:18', '2016-01-22 10:51:18'),
(46, 'モクぷれドラ', 10, 10, 3, 18, '2301.png', '2016-01-22 10:51:49', '2016-01-22 10:51:49');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `monsters`
--
ALTER TABLE `monsters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
