-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2023-07-15 19:04:55
-- 伺服器版本： 8.0.31
-- PHP 版本： 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `dimctravel_db`
--

-- --------------------------------------------------------

--
-- 資料表結構 `attractions`
--

DROP TABLE IF EXISTS `attractions`;
CREATE TABLE IF NOT EXISTS `attractions` (
  `att_id` int NOT NULL AUTO_INCREMENT,
  `att_name` varchar(50) NOT NULL,
  `att_City` char(10) DEFAULT NULL,
  `att_CityNum` int NOT NULL,
  `att_Address` varchar(500) NOT NULL,
  `att_lat` decimal(18,14) NOT NULL,
  `att_lng` decimal(18,14) NOT NULL,
  `att_type` char(10) NOT NULL,
  `att_StartTime` time NOT NULL,
  `att_EndTime` time NOT NULL,
  `att__Week` char(10) NOT NULL,
  `att_content` varchar(300) DEFAULT NULL,
  `att_picture` varchar(300) DEFAULT NULL,
  `att_Fraction` int DEFAULT NULL,
  `ATT_AREANAME` varchar(20) DEFAULT NULL,
  `ATT_AREAID` char(8) DEFAULT NULL,
  `att_views` int NOT NULL DEFAULT '0' COMMENT '點閱數',
  PRIMARY KEY (`att_id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `attractions`
--

INSERT INTO `attractions` (`att_id`, `att_name`, `att_City`, `att_CityNum`, `att_Address`, `att_lat`, `att_lng`, `att_type`, `att_StartTime`, `att_EndTime`, `att__Week`, `att_content`, `att_picture`, `att_Fraction`, `ATT_AREANAME`, `ATT_AREAID`, `att_views`) VALUES
(26, '何家三星蔥餡餅', '宜蘭縣', 19, '266宜蘭縣三星鄉三星路八段2號', '24.66154860000000', '121.62151330000000', '食', '11:00:00', '17:00:00', '每天', '好好吃', NULL, 3, '三星', '266', 27),
(25, '張美阿嬤農場', '宜蘭縣', 19, '266宜蘭縣三星鄉行健溪一路二段161號', '24.67486710000000', '121.67560800000000', '遊', '09:00:00', '17:30:00', '1234567', '很好玩', NULL, 3, '三星', '266', 7),
(24, '廟口紅茶', '花蓮縣', 18, '970花蓮縣花蓮市成功街216號', '23.97335870000000', '121.60613370000000', '食', '06:00:00', '22:00:00', '1234567', '好喝紅茶冰', NULL, 3, '花蓮市', '970', 7),
(23, '太魯閣國家公園', '花蓮縣', 18, ' 972花蓮縣秀林鄉富世291號', '24.19382590000000', '121.49131820000000', '遊', '00:00:00', '24:00:00', '1234567', '好山好水好風景', NULL, 3, '秀林', '972', 5),
(22, '梧饕池上飯包', '台東縣', 17, ' 958台東縣池上鄉忠孝路259號', '23.12425630000000', '121.22090410000000', '食', '10:30:00', '19:00:00', '1234567', NULL, NULL, 3, '池上', '958', 7),
(21, '伯朗大道', '台東縣', 17, '958台東縣池上鄉錦新三號道路', '23.12073300000000', '121.21617840000000', '遊', '00:00:00', '24:00:00', '1234567', NULL, NULL, 3, '池上', '958', 2),
(20, '侯記鴨肉飯', '高雄市', 15, '807高雄市三民區自強一路201號', '22.63477400000000', '120.29143500000000', '食', '10:00:00', '08:00:00', '1234567', NULL, NULL, 3, '三民區', '807', 0),
(19, '文章牛肉湯', '台南市', 14, '708台南市安平區安平路300號', '22.99847890000000', '120.17808730000000', '食', '10:30:00', '02:00:00', '234567', NULL, NULL, 4, '安平區', '708', 5),
(18, '北港朝天宮', '雲林縣', 11, ' 651雲林縣北港鎮中山路178號', '23.56780560000000', '120.30464460000000', '遊', '04:00:00', '24:00:00', '1234567', NULL, NULL, 5, '北港鎮', '651', 0),
(17, '林聰明砂鍋魚頭', '嘉義市', 12, '600嘉義市東區中正路361號', '23.47878630000000', '120.45024520000000', '食', '12:00:00', '21:00:00', '134567', NULL, NULL, 3, '東區', '600', 0),
(16, '鹿港老街', '彰化縣', 9, '505彰化縣鹿港鎮埔頭街3號', '24.05630100000000', '120.43258170000000', '遊', '00:00:00', '24:00:00', '1234567', NULL, NULL, 3, '鹿港鎮', '505', 0),
(15, '邱家生魚片', '屏東縣', 16, '946屏東縣恆春鎮大光路79-51號', '21.94588920000000', '120.74251450000000', '食', '11:00:00', '23:30:00', '1234567', NULL, NULL, 4, '恆春鎮', '946', 0),
(27, '劉山東牛肉麵', '台北市', 2, '100台北市中正區開封街一段14巷2號', '25.04571490000000', '121.51376020000000', '食', '08:00:00', '20:00:00', '123456', NULL, NULL, 4, '中正區', '100', 0),
(28, '台南美術館二館', '台南市', 14, '台南市中西區忠義路二段1號', '22.99051070000000', '120.20141230000000', '遊', '10:00:00', '18:00:00', '234567', NULL, NULL, 4, '西區', '703', 0),
(29, '德陽艦園區', '台南市', 14, '臺南市安平區安億路115號', '22.98918420000000', '120.15617890000000', '遊', '09:00:00', '19:00:00', '1234567', NULL, NULL, 5, '安平區', '708', 0),
(30, '奇美博物館', '台南市', 14, '台南市仁德區文華路二段66號', '22.93452470000000', '120.22639000000000', '遊', '09:30:00', '17:30:00', '234567', NULL, NULL, 5, NULL, NULL, 0),
(31, '四草綠色隧道', '台南市', 14, '台南市安南區四草里海佃路167號', '23.02363260000000', '120.19151720000000', '遊', '00:00:00', '24:00:00', '1234567', NULL, NULL, 5, NULL, NULL, 0),
(32, '赤崁樓', '台南市', 14, '台南市中西區民族路二段212號', '22.99748310000000', '120.20259280000000', '遊', '08:30:00', '21:00:00', '234567', NULL, NULL, 1, NULL, NULL, 0),
(33, '十鼓仁糖文創園區', '台南市', 14, '台南市仁德區中正路二段326號', '22.95107180000000', '120.25169230000000', '遊', '09:00:00', '18:00:00', '1234567', NULL, NULL, 1, NULL, NULL, 0),
(34, '廚房有雞花雕雞-北安旗艦店', '台南市', 14, '台南市北區北安路一段161號', '23.01742020000000', '120.20868550000000', '食', '11:00:00', '21:00:00', '1234567', NULL, NULL, 1, NULL, NULL, 0),
(35, '夏慕尼 - 台南永華店', '台南市', 14, '台南市安平區永華路二段269號', '22.98941840000000', '120.18200430000000', '食', '11:30:00', '21:30:00', '1234567', NULL, NULL, 1, NULL, NULL, 0),
(36, '藝奇 - 仁德中山店', '台南市', 14, '台南市仁德區中山路100號', '22.97015980000000', '120.26566160000000', '食', '11:00:00', '21:30:00', '1234567', NULL, NULL, 1, NULL, NULL, 0),
(37, 'ORO 咖啡 凱旋店', '台南市', 14, '台南市東區凱旋路229號', '22.99335110000000', '120.22703430000000', '食', '10:00:00', '22:00:00', '1234567', NULL, NULL, 1, NULL, NULL, 0),
(38, '漢來海港餐廳', '台南市', 14, '台南市東區中華東路一段336號', '22.99278280000000', '120.23397540000000', '食', '06:00:00', '21:30:00', '1234567', NULL, NULL, 1, NULL, NULL, 0),
(39, '原燒 - 台南永華店', '台南市', 14, '台南市安平區永華路二段269號', '22.98941840000000', '120.18200430000000', '食', '11:30:00', '21:30:00', '1234567', NULL, NULL, 1, '安平區', '708', 0),
(40, 'X Dining 艾克斯義式餐酒館', '台南市', 14, '台南市東區裕農路1號', '22.98513380000000', '120.22538370000000', '食', '11:00:00', '21:00:00', '1234567', NULL, NULL, 1, '東區', '701', 0),
(41, '富盛號餐廳', '台南市', 14, '台南市中西區民族路二段160號', '22.99647730000000', '120.20402440000000', '食', '10:00:00', '22:00:00', '1234567', NULL, NULL, 1, '西區', '703', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `attractions_tags`
--

DROP TABLE IF EXISTS `attractions_tags`;
CREATE TABLE IF NOT EXISTS `attractions_tags` (
  `att_id` int NOT NULL,
  `tag_id` int NOT NULL,
  PRIMARY KEY (`att_id`,`tag_id`),
  KEY `tag_id` (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `attractions_tags`
--

INSERT INTO `attractions_tags` (`att_id`, `tag_id`) VALUES
(18, 2),
(18, 10),
(18, 13),
(18, 23),
(19, 14),
(19, 17),
(19, 50),
(20, 15),
(20, 24),
(20, 38),
(21, 8),
(21, 25),
(21, 44),
(22, 15),
(22, 16),
(22, 19),
(23, 35),
(23, 37),
(23, 48),
(24, 7),
(24, 35),
(24, 50),
(25, 5),
(25, 37),
(25, 48),
(26, 10),
(26, 25),
(26, 40),
(27, 12),
(27, 39),
(27, 41),
(28, 25),
(28, 34),
(28, 48),
(29, 2),
(29, 6),
(29, 33),
(30, 3),
(30, 34),
(30, 38),
(31, 4),
(31, 10),
(31, 36),
(32, 3),
(32, 18),
(32, 47),
(33, 12),
(33, 19),
(33, 32),
(34, 1),
(34, 11),
(34, 34),
(35, 26),
(35, 29),
(35, 45),
(36, 23),
(36, 25),
(36, 36),
(37, 10),
(37, 18),
(37, 32),
(38, 13),
(38, 48),
(38, 50),
(39, 5),
(39, 17),
(39, 32),
(40, 7),
(40, 40),
(40, 45),
(41, 26),
(52, 1),
(53, 4),
(67, 3),
(67, 6),
(67, 8),
(68, 3),
(68, 6),
(68, 8),
(69, 3),
(69, 6),
(69, 8),
(70, 3),
(70, 6),
(70, 8),
(71, 3),
(71, 6),
(71, 8),
(99, 12),
(100, 12),
(111, 12);

-- --------------------------------------------------------

--
-- 資料表結構 `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int NOT NULL,
  `city_name` varchar(50) DEFAULT NULL,
  `region` int NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `city_route`
--

DROP TABLE IF EXISTS `city_route`;
CREATE TABLE IF NOT EXISTS `city_route` (
  `city_id` int NOT NULL,
  `RouteID` int NOT NULL,
  PRIMARY KEY (`city_id`,`RouteID`),
  KEY `RouteID` (`RouteID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int NOT NULL AUTO_INCREMENT,
  `member_id` int DEFAULT NULL,
  `attraction_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `member_id` (`member_id`),
  KEY `attraction_id` (`attraction_id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `favorites`
--

INSERT INTO `favorites` (`id`, `member_id`, `attraction_id`, `created_at`) VALUES
(70, 2, 26, '2023-07-14 21:19:47'),
(71, 2, 22, '2023-07-14 21:19:52'),
(88, 4, 22, '2023-07-15 18:53:26'),
(89, 4, 21, '2023-07-15 18:53:30');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `mem_id` int NOT NULL AUTO_INCREMENT,
  `mem_pwd` varchar(250) NOT NULL,
  `mem_email` varchar(250) NOT NULL,
  PRIMARY KEY (`mem_id`),
  UNIQUE KEY `mem_id` (`mem_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`mem_id`, `mem_pwd`, `mem_email`) VALUES
(1, 'dsfgadg', '111'),
(2, '08f8e0260c64418510cefb2b06eee5cd', 'bbb@gmail.com'),
(3, '63a9f0ea7bb98050796b649e85481845', 'root@gmail.com'),
(4, '47bce5c74f589f4867dbd57e9ca9f808', 'aaa@gmail.com');

-- --------------------------------------------------------

--
-- 資料表結構 `member_routes`
--

DROP TABLE IF EXISTS `member_routes`;
CREATE TABLE IF NOT EXISTS `member_routes` (
  `mem_id` int NOT NULL,
  `RouteID` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`mem_id`,`RouteID`),
  KEY `RouteID` (`RouteID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `member_tags`
--

DROP TABLE IF EXISTS `member_tags`;
CREATE TABLE IF NOT EXISTS `member_tags` (
  `mem_id` int NOT NULL,
  `tag_id` int NOT NULL,
  PRIMARY KEY (`mem_id`,`tag_id`),
  KEY `tag_id` (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `memdata`
--

DROP TABLE IF EXISTS `memdata`;
CREATE TABLE IF NOT EXISTS `memdata` (
  `mem_email` varchar(250) NOT NULL,
  `mem_name` varchar(150) NOT NULL,
  `mem_phone` char(20) DEFAULT NULL,
  `mem_Birthday` date NOT NULL,
  PRIMARY KEY (`mem_email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `memdata`
--

INSERT INTO `memdata` (`mem_email`, `mem_name`, `mem_phone`, `mem_Birthday`) VALUES
('bbb@gmail.com', 'chen', NULL, '0000-00-00'),
('root@gmail.com', 'root', NULL, '0000-00-00'),
('aaa@gmail.com', 'qaq', '0977654330', '2023-07-15');

-- --------------------------------------------------------

--
-- 資料表結構 `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `rev_id` int NOT NULL AUTO_INCREMENT,
  `mem_id` int NOT NULL,
  `mem_name` varchar(150) NOT NULL,
  `rev_title` varchar(255) DEFAULT NULL,
  `rev_content` mediumtext,
  `rev_picture` varchar(250) DEFAULT NULL,
  `rev_star` char(3) DEFAULT NULL,
  `rev_city` char(3) DEFAULT NULL,
  PRIMARY KEY (`rev_id`),
  UNIQUE KEY `rev_id` (`rev_id`,`mem_id`),
  KEY `rev_mem_id_fk` (`mem_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `reviews`
--

INSERT INTO `reviews` (`rev_id`, `mem_id`, `mem_name`, `rev_title`, `rev_content`, `rev_picture`, `rev_star`, `rev_city`) VALUES
(1, 1, '', '475', '42442', '33', '555', '45'),
(2, 2, 'chen', '台中的部分', '好玩的地方', 'anping.jpg', '4', '臺中市'),
(3, 2, 'chen', '台北的景點', '好玩的地方', 'brown.jpg', '4', '臺北市');

-- --------------------------------------------------------

--
-- 資料表結構 `route`
--

DROP TABLE IF EXISTS `route`;
CREATE TABLE IF NOT EXISTS `route` (
  `RouteID` int NOT NULL AUTO_INCREMENT,
  `RouteName` varchar(50) DEFAULT NULL,
  `V_C` varchar(100) NOT NULL,
  `route_recommend` int NOT NULL,
  `route_update` date NOT NULL,
  PRIMARY KEY (`RouteID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `route`
--

INSERT INTO `route` (`RouteID`, `RouteName`, `V_C`, `route_recommend`, `route_update`) VALUES
(1, '悠遊台南行', '130239332433531638', 0, '0000-00-00'),
(2, '文藝復興台南路線', '', 0, '0000-00-00'),
(3, '復古綠油油台南路線', '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- 資料表結構 `route_review`
--

DROP TABLE IF EXISTS `route_review`;
CREATE TABLE IF NOT EXISTS `route_review` (
  `route_review_id` int NOT NULL,
  `RouteID` int DEFAULT NULL,
  `mem_id` int DEFAULT NULL,
  `review_text` varchar(255) DEFAULT NULL,
  `review_date` date DEFAULT NULL,
  PRIMARY KEY (`route_review_id`),
  KEY `RouteID` (`RouteID`),
  KEY `mem_id` (`mem_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `route_sightseeing`
--

DROP TABLE IF EXISTS `route_sightseeing`;
CREATE TABLE IF NOT EXISTS `route_sightseeing` (
  `RouteID` int NOT NULL,
  `Att_ID` int NOT NULL,
  `SortOrder` int DEFAULT NULL,
  PRIMARY KEY (`RouteID`,`Att_ID`),
  KEY `Att_ID` (`Att_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `route_sightseeing`
--

INSERT INTO `route_sightseeing` (`RouteID`, `Att_ID`, `SortOrder`) VALUES
(1, 30, 1),
(1, 39, 2),
(1, 32, 3),
(1, 33, 4),
(1, 31, 5),
(1, 38, 6),
(2, 32, 1),
(2, 29, 2),
(2, 35, 3),
(2, 28, 4),
(2, 37, 5),
(2, 34, 6),
(3, 32, 1),
(3, 30, 2),
(3, 36, 3),
(3, 31, 4),
(3, 38, 5);

-- --------------------------------------------------------

--
-- 資料表結構 `route_tag`
--

DROP TABLE IF EXISTS `route_tag`;
CREATE TABLE IF NOT EXISTS `route_tag` (
  `RouteID` int NOT NULL,
  `R_Tag` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `route_tag`
--

INSERT INTO `route_tag` (`RouteID`, `R_Tag`) VALUES
(1, '親子同樂\r\n'),
(1, '悠閒行程'),
(1, '遊樂行程');

-- --------------------------------------------------------

--
-- 資料表結構 `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `tag_id` int NOT NULL,
  `tag_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `tags`
--

INSERT INTO `tags` (`tag_id`, `tag_name`) VALUES
(1, '自然景觀'),
(2, '歷史遺跡'),
(3, '美食'),
(4, '文化活動'),
(5, '購物'),
(6, '休閒娛樂'),
(7, '藝術展覽'),
(8, '戶外探險'),
(9, '海灘'),
(10, '公園'),
(11, '博物館'),
(12, '古蹟'),
(13, '音樂節'),
(14, '遊樂園'),
(15, '夜市'),
(16, '登山'),
(17, '湖泊'),
(18, '觀景台'),
(19, '動物園'),
(20, '傳統工藝'),
(21, '賞花'),
(22, '咖啡店'),
(23, '夜景'),
(24, '溫泉'),
(25, '廟宇'),
(26, '夜間市集'),
(27, '攀岩'),
(28, '水上活動'),
(29, '電影院'),
(30, '藍洞潛水'),
(31, '運動場'),
(32, '遠足'),
(33, '賽車場'),
(34, '植物園'),
(35, '文學活動'),
(36, '嘉年華會'),
(37, '教堂'),
(38, '街頭藝人'),
(39, '釣魚'),
(40, '觀鳥'),
(41, '遺址'),
(42, '藝術品展覽'),
(43, '賽馬場'),
(44, '水上樂園'),
(45, '夜間遊船'),
(46, '夜市美食'),
(47, '滑雪場'),
(48, '攝影景點'),
(49, '足球場'),
(50, '綠意盎然'),
(51, '刺激的');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
