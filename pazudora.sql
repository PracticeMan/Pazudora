-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 1 朁E20 日 12:02
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `monsters`
--

INSERT INTO `monsters` (`id`, `name`, `hp`, `atatck`, `attr_id`, `kind_id`, `image_file_name`, `created`, `modified`) VALUES
(1, 'ティラ', 52, 57, 1, 8, '', '2016-01-20 11:28:35', '2016-01-20 11:28:35'),
(2, 'ティラン', 115, 64, 1, 8, '', '2016-01-20 11:31:08', '2016-01-20 11:31:08'),
(3, 'アワりん', 43, 37, 2, 10, '', '2016-01-20 11:35:26', '2016-01-20 11:35:26'),
(4, 'デカアワりん', 172, 84, 2, 10, '', '2016-01-20 11:36:00', '2016-01-20 11:36:00'),
(5, 'グリーンカーバンクル', 35, 22, 3, 13, '', '2016-01-20 11:37:14', '2016-01-20 11:37:14'),
(6, 'エメラルドカーバンクル', 140, 50, 3, 13, '', '2016-01-20 11:38:02', '2016-01-20 11:38:02'),
(7, 'ハーピィデビル', 31, 100, 4, 11, '', '2016-01-20 11:41:43', '2016-01-20 11:41:43'),
(8, 'ハーピィデーモン', 186, 338, 4, 11, '', '2016-01-20 11:42:25', '2016-01-20 11:42:25'),
(9, 'ヨミ', 324, 238, 5, 7, '', '2016-01-20 11:45:14', '2016-01-20 11:45:14'),
(10, 'ツクヨミ', 1080, 725, 5, 7, '', '2016-01-20 11:45:41', '2016-01-20 11:45:41'),
(11, '覚醒ヘラ', 1430, 889, 5, 9, '', '2016-01-20 11:47:20', '2016-01-20 11:47:20'),
(12, '常夜の魔女・リリス', 672, 473, 5, 9, '', '2016-01-20 11:48:01', '2016-01-20 11:48:01'),
(13, 'レッドオーガ', 84, 84, 1, 12, '', '2016-01-20 11:49:51', '2016-01-20 11:49:51'),
(14, 'サムライオーガ', 504, 284, 1, 12, '', '2016-01-20 11:50:31', '2016-01-20 11:50:31'),
(15, 'フレイムゴーレム', 131, 101, 1, 14, '', '2016-01-20 11:55:17', '2016-01-20 11:55:17'),
(16, 'フレイムガーディアン', 655, 284, 1, 14, '', '2016-01-20 11:56:14', '2016-01-20 11:56:14'),
(17, '炎の番人', 1031, 331, 1, 15, '', '2016-01-20 11:57:11', '2016-01-20 11:57:11'),
(18, '水の番人', 1056, 321, 2, 15, '', '2016-01-20 11:57:46', '2016-01-20 11:57:46'),
(19, 'たまドラ', 100, 100, 4, 16, '', '2016-01-20 11:58:44', '2016-01-20 11:58:44'),
(20, 'たまドラベビー', 50, 50, 4, 16, '', '2016-01-20 11:59:16', '2016-01-20 11:59:16'),
(21, 'ぷれドラ', 50, 50, 4, 18, '', '2016-01-20 12:00:01', '2016-01-20 12:00:01'),
(22, 'ホノぷれドラ', 10, 10, 1, 18, '', '2016-01-20 12:00:37', '2016-01-20 12:00:37'),
(23, 'メタルドラゴン', 100, 20, 5, 17, '', '2016-01-20 12:01:38', '2016-01-20 12:01:38'),
(24, 'ゴールドドラゴン', 100, 20, 4, 17, '', '2016-01-20 12:02:09', '2016-01-20 12:02:09');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
