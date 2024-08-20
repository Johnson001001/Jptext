-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-06-18 23:58:19
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `school`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `no` int(11) NOT NULL,
  `a_username` varchar(20) NOT NULL,
  `a_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`no`, `a_username`, `a_password`) VALUES
(1, 'johnson', 1234),
(2, 'Johnson@mail.com', 1234);

-- --------------------------------------------------------

--
-- 資料表結構 `scorelist`
--

CREATE TABLE `scorelist` (
  `id` tinyint(4) UNSIGNED NOT NULL,
  `cID` tinyint(2) UNSIGNED ZEROFILL NOT NULL,
  `course` enum('國文','英文','數學') NOT NULL DEFAULT '國文',
  `score` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `scorelist`
--

INSERT INTO `scorelist` (`id`, `cID`, `course`, `score`) VALUES
(1, 01, '國文', 82),
(2, 02, '國文', 68),
(3, 03, '國文', 78),
(4, 04, '國文', 85),
(5, 05, '國文', 80),
(6, 06, '國文', 76),
(7, 07, '國文', 90),
(8, 08, '國文', 87),
(9, 09, '國文', 78),
(10, 10, '國文', 65),
(11, 01, '英文', 67),
(12, 02, '英文', 87),
(13, 03, '英文', 88),
(14, 04, '英文', 92),
(15, 05, '英文', 55),
(16, 06, '英文', 62),
(17, 07, '英文', 65),
(18, 08, '英文', 40),
(19, 09, '英文', 89),
(20, 10, '英文', 64),
(21, 01, '數學', 87),
(22, 02, '數學', 52),
(23, 03, '數學', 76),
(24, 04, '數學', 56),
(25, 05, '數學', 72),
(26, 06, '數學', 80),
(27, 07, '數學', 38),
(28, 08, '數學', 68),
(29, 09, '數學', 90),
(30, 10, '數學', 61);

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `cID` tinyint(2) UNSIGNED ZEROFILL NOT NULL,
  `cName` varchar(20) NOT NULL,
  `cSex` enum('F','M') NOT NULL DEFAULT 'F',
  `cBirthday` date NOT NULL,
  `cEmail` varchar(100) DEFAULT NULL,
  `cPhone` varchar(50) DEFAULT NULL,
  `cAddr` varchar(255) DEFAULT NULL,
  `cHeight` tinyint(3) UNSIGNED DEFAULT NULL,
  `cWeight` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`cID`, `cName`, `cSex`, `cBirthday`, `cEmail`, `cPhone`, `cAddr`, `cHeight`, `cWeight`) VALUES
(04, '賴小恩', 'M', '1984-06-20', 'Lai@superstar.com', '0946820000', '台北市建國路177號3F', 176, 60),
(05, '黎楚寧', 'F', '1988-02-15', 'ivy@superstar.com', '0920981230', '台北市忠孝東路520號6樓', 164, 45),
(06, '蔡中穎', 'F', '1987-05-05', 'zhong@superstar.com', '0951983111', '台北市三民路1巷10號15樓', 158, 50),
(07, '徐佳螢', 'F', '1985-08-30', 'lala@superstar.com', '0918123456', '台北市仁愛路100號', 158, 56),
(08, '林雨媗', 'F', '1986-12-10', 'crystal@superstar.com', '0907408965', '台北市民族路204號', 166, 48),
(09, '林心心', 'F', '1981-12-01', 'peggy@super.com', '092345789', '台北市建國北路10號1樓', 190, 55),
(10, '王燕博', 'M', '1993-08-10', 'albert@superstar.com', '0918976588', '台北市北環路2巷80號', 169, 68),
(12, 'Johnson', 'M', '2024-06-13', '', '0912345678', '台北市松仁路100號', 198, 90),
(16, '張三', 'M', '2024-06-20', 'chang@mail.com', '0968789456', '台北市松仁路101號', 185, 76),
(17, '李四', 'M', '2024-06-30', '789@mail.com', '0956789000', '台北市松仁路101號10F', 160, 50);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no`);

--
-- 資料表索引 `scorelist`
--
ALTER TABLE `scorelist`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`cID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `scorelist`
--
ALTER TABLE `scorelist`
  MODIFY `id` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `students`
--
ALTER TABLE `students`
  MODIFY `cID` tinyint(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
