-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 03 2018 г., 14:06
-- Версия сервера: 5.5.25
-- Версия PHP: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `car_washing`
--

-- --------------------------------------------------------

--
-- Структура таблицы `advantage`
--

CREATE TABLE IF NOT EXISTS `advantage` (
  `image_name` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `advantage`
--

INSERT INTO `advantage` (`image_name`, `name`, `description`) VALUES
('map-marker', 'Быстро', 'Процесс мойки автматизирован, что полностю исключает очереди'),
('clock-o', 'Удобно', 'Удобное расположение автомойки, удобные заезды'),
('money', 'Экономно', 'Наши цены приятно удивляют, не отражаясь на качестве услуг');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `user` varchar(32) NOT NULL,
  `id_element` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=80 ;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `comment`, `user`, `id_element`) VALUES
(71, 'dnmv, ndsmvn a,.msnc.a nm.sda .f', 'sundet9810@gmail.com', 7),
(72, 'fbnds anfmsjk;ccsjk fjdskan ', 'sundet9810@gmail.com', 7),
(74, 'оатвфы бтавюыь тавюыьф аьвфыбю', 'kaz@gmail.com', 5),
(77, 'bnb,mb, b,m ,', 'sundet9810@gmail.com', 2),
(79, 'dsdfsdafsd fsd dfas ', 'sundet9810@gmail.com', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `tablee`
--

CREATE TABLE IF NOT EXISTS `tablee` (
  `addres` varchar(32) NOT NULL,
  `number` varchar(11) NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`) VALUES
(1, 'name', 'sundet9810@gmail.com', '123456'),
(2, 'first', 'kaz@gmail.com', '123456'),
(3, 'Name', 'sdfds@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Структура таблицы `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `header` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `work`
--

INSERT INTO `work` (`id`, `header`, `description`, `img`, `price`) VALUES
(1, 'Мойка Кузова', 'Наши квалифицированные специалисты как следует позаботятся и чистоте вашего автомобиля.', 'kuz.jpg', 123456),
(2, 'Керамомойка', 'Моика с использованием компонентов, востанавливающих покрытие и сохраняющих блеск.', 'keramoika.jpg', 50000),
(3, 'Химчистка Салона', 'Наши специалисты профессионально произведут химчистку,уборку с примерением современного оборудования.', 'salon.jpg', 10000),
(4, 'Химчистка Колясок', 'Приведем в порядок внешний вид первого транспорта вашего ребенка,', 'kol.jpg', 2500),
(5, 'Детейлинг Кузова', 'Комплексный подход к улучшению внешнего вида автомобил и его износоустойчивых свойст.\r\n\r\n', 'detail-kuz.jpg', 50000),
(6, 'Нанополировка', 'Инновационный способ полировки средствами "КОСН".', 'nanopolirovka.jpg', 30000);

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE IF NOT EXISTS `zakaz` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`id`, `img`, `name`, `description`) VALUES
(1, 'smallCar.jpg', 'Заказ мойки легковых автомобилей', 'Бронируйте время Автомобильной мойки для Легковых Автомобилей заранее. На удобный для вас день и час. И ваша очередь будет сохранена до приезда на авто мойку.'),
(2, 'crossCar.jpg', 'ЗАКАЗ МОЙКИ КРОССОВЕРОВ', 'Бронируйте время Автомобильной мойки для Кроссоверов заранее. На удобный для вас день и час. И ваша очередь будет сохранена до на авто мойку.'),
(3, 'jeap.jpg', 'ЗАКАЗ МОЙКИ ДЖИПОВ', 'Бронируйте время Автомобильной мойки для Легковых Автомобилей заранее. На удобный для вас день и час. И ваша очередь будет сохранена до приезда на авто мойку.\r\n\r\n'),
(4, 'miniven.jpg', 'ЗАКАЗ МОЙКИ МИНИВЕНОВ', 'Бронируйте время Автомобильной мойки для Легковых Автомобилей заранее. На удобный для вас день и час. И ваша очередь будет сохранена до приезда на авто мойку.\r\n\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
