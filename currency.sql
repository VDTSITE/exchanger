-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Хост: vdtvdt.mysql.ukraine.com.ua
-- Время создания: Май 24 2016 г., 05:42
-- Версия сервера: 5.6.27-75.0-log
-- Версия PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `vdtvdt_exchanger`
--

-- --------------------------------------------------------

--
-- Структура таблицы `currency_wm`
--

CREATE TABLE IF NOT EXISTS `currency_wm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `buy` decimal(10,2) NOT NULL,
  `sell` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `currency_wm`
--

INSERT INTO `currency_wm` (`id`, `name`, `buy`, `sell`) VALUES
(1, 'WMZ', '25.14', '25.22'),
(2, 'WME', '28.21', '28.42'),
(3, 'WMR', '0.37', '0.38'),
(4, 'WMU', '1.00', '1.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
