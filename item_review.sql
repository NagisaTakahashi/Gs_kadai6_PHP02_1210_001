-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022 年 12 月 13 日 11:10
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `item_review`
--

CREATE TABLE `item_review` (
  `id` int(12) NOT NULL,
  `review_comment` text COLLATE utf8_unicode_ci NOT NULL,
  `review_rate` int(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `item_review`
--

INSERT INTO `item_review` (`id`, `review_comment`, `review_rate`, `date`) VALUES
(1, 'テスト', 5, '2022-12-10 19:53:43'),
(2, 'test', 1, '2022-12-10 20:27:02'),
(3, '襟が可愛かったです！！！さすがIENA！この冬めちゃめちゃリピートしています！！！愛用する！', 5, '2022-12-10 20:29:05'),
(4, 'レビューコメント追記', 3, '2022-12-13 18:25:51'),
(5, '', 0, '2022-12-13 18:55:16'),
(6, 'レビューだよ', 3, '2022-12-13 18:55:45');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `item_review`
--
ALTER TABLE `item_review`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `item_review`
--
ALTER TABLE `item_review`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
