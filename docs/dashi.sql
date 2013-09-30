-- phpMyAdmin SQL Dump
-- version 3.4.8
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 09 月 30 日 18:03
-- 服务器版本: 5.5.28
-- PHP 版本: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `dashi`
--

-- --------------------------------------------------------

--
-- 表的结构 `3d`
--

CREATE TABLE IF NOT EXISTS `3d` (
  `number` int(10) NOT NULL,
  `hundred` tinyint(4) NOT NULL,
  `ten` tinyint(4) NOT NULL,
  `one` tinyint(4) NOT NULL,
  UNIQUE KEY `number` (`number`),
  KEY `hundred` (`hundred`),
  KEY `ten` (`ten`),
  KEY `one` (`one`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `3d`
--

INSERT INTO `3d` (`number`, `hundred`, `ten`, `one`) VALUES
(2012315, 3, 7, 1),
(2012316, 7, 0, 9),
(2012317, 3, 1, 5),
(2012318, 1, 1, 0),
(2012319, 2, 8, 6),
(2012320, 4, 2, 8),
(2012321, 9, 3, 6),
(2012322, 5, 2, 4),
(2012323, 8, 8, 9),
(2012324, 1, 1, 4),
(2012325, 6, 5, 6),
(2012326, 8, 1, 4),
(2012327, 3, 1, 0),
(2012328, 6, 4, 4),
(2012329, 5, 9, 5),
(2012330, 5, 3, 4),
(2012331, 3, 8, 2),
(2012332, 5, 2, 3),
(2012333, 7, 4, 4),
(2012334, 0, 0, 6),
(2012335, 4, 9, 3),
(2012336, 2, 5, 0),
(2012337, 5, 7, 6),
(2012338, 0, 9, 7),
(2012339, 2, 9, 4),
(2012340, 0, 4, 6),
(2012341, 2, 0, 4),
(2012342, 3, 7, 3),
(2012343, 2, 9, 6),
(2012344, 2, 9, 3),
(2012345, 8, 9, 6),
(2012346, 9, 9, 2),
(2012347, 5, 7, 6),
(2012348, 8, 5, 1),
(2012349, 2, 6, 6),
(2012350, 6, 7, 6),
(2012351, 0, 3, 5),
(2012352, 1, 2, 3),
(2012353, 8, 2, 3),
(2012354, 7, 7, 9),
(2012355, 6, 3, 6),
(2012356, 5, 4, 6),
(2012357, 1, 9, 4),
(2012358, 5, 5, 4),
(2012359, 3, 0, 9),
(2013001, 2, 0, 3),
(2013002, 6, 7, 0),
(2013003, 1, 6, 6),
(2013004, 7, 6, 0),
(2013005, 6, 2, 2),
(2013006, 4, 5, 7),
(2013007, 1, 4, 7),
(2013008, 5, 5, 6),
(2013009, 9, 2, 1),
(2013010, 6, 3, 2),
(2013011, 2, 0, 9),
(2013012, 6, 8, 8),
(2013013, 9, 2, 2),
(2013014, 4, 1, 7),
(2013015, 2, 2, 8),
(2013016, 0, 3, 8),
(2013017, 3, 8, 0),
(2013018, 3, 4, 7),
(2013019, 8, 6, 6),
(2013020, 9, 2, 9),
(2013021, 9, 1, 8),
(2013022, 2, 5, 0),
(2013023, 8, 0, 7),
(2013024, 2, 6, 8),
(2013025, 5, 4, 0),
(2013026, 8, 5, 7),
(2013027, 3, 0, 8),
(2013028, 1, 1, 3),
(2013029, 1, 4, 9),
(2013030, 7, 3, 2),
(2013031, 7, 6, 2),
(2013032, 8, 4, 9),
(2013033, 2, 7, 7),
(2013034, 3, 3, 0),
(2013035, 6, 3, 2),
(2013036, 6, 5, 8),
(2013037, 3, 6, 4),
(2013038, 6, 4, 0),
(2013039, 6, 3, 9),
(2013040, 5, 4, 9),
(2013041, 8, 5, 1),
(2013042, 4, 9, 6),
(2013043, 5, 3, 6),
(2013044, 3, 1, 8),
(2013045, 0, 3, 9),
(2013046, 9, 6, 6),
(2013047, 7, 8, 4),
(2013048, 2, 9, 0),
(2013049, 6, 3, 6),
(2013050, 5, 5, 6),
(2013051, 6, 7, 6),
(2013052, 5, 5, 6),
(2013053, 5, 6, 4),
(2013054, 4, 9, 7),
(2013055, 4, 5, 6),
(2013056, 1, 3, 9),
(2013057, 2, 4, 3),
(2013058, 0, 8, 2),
(2013059, 2, 5, 1),
(2013060, 5, 4, 9),
(2013061, 6, 7, 5),
(2013062, 6, 6, 9),
(2013063, 6, 4, 1),
(2013064, 1, 7, 6),
(2013065, 3, 2, 8),
(2013066, 0, 4, 1),
(2013067, 8, 3, 2),
(2013068, 7, 7, 0),
(2013069, 1, 1, 5),
(2013070, 2, 3, 5),
(2013071, 3, 6, 0),
(2013072, 8, 3, 1),
(2013073, 2, 2, 2),
(2013074, 2, 8, 8),
(2013075, 6, 1, 7),
(2013076, 1, 7, 4),
(2013077, 1, 8, 4),
(2013078, 0, 3, 2),
(2013079, 7, 8, 0),
(2013080, 4, 6, 6),
(2013081, 8, 5, 7),
(2013082, 2, 4, 9),
(2013083, 6, 0, 2),
(2013084, 7, 2, 1),
(2013085, 6, 9, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;