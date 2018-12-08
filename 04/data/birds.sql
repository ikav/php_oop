-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 07 2018 г., 20:24
-- Версия сервера: 5.6.38
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `galary`
--

-- --------------------------------------------------------

--
-- Структура таблицы `birds`
--

CREATE TABLE `birds` (
  `id` int(11) NOT NULL COMMENT 'первичный ключ',
  `name` varchar(255) COLLATE utf8_croatian_ci NOT NULL COMMENT 'Наименование птицы',
  `url_small` varchar(255) COLLATE utf8_croatian_ci NOT NULL COMMENT 'Путь до маленькой картинки',
  `url` varchar(255) COLLATE utf8_croatian_ci NOT NULL COMMENT 'Адрес картинки на сервере',
  `size` float DEFAULT NULL COMMENT 'Размер файла',
  `numViews` int(11) DEFAULT NULL COMMENT 'Количество просмотров',
  `description` text COLLATE utf8_croatian_ci COMMENT 'Описание'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Дамп данных таблицы `birds`
--

INSERT INTO `birds` (`id`, `name`, `url_small`, `url`, `size`, `numViews`, `description`) VALUES
(1, 'Гордый орел', 'public/img/eagle-bald-small.jpg', 'public/img/eagle-bald.jpg', 253, 3, 'Орел целеустремленный. Видит добычу'),
(2, 'Глазастый орел', 'public/img/eagle-eyes-small.jpg', 'public/img/eagle-eyes.jpg', 132, 1, 'Орел с выразительными глазами'),
(3, 'Сокол', 'public/img/falcon-small.jpg', 'public/img/falcon.jpg', 239, 25, 'Гордая птица перед соколиной охотой'),
(4, 'Болотный лунь', 'public/img/marsh-harrier-small.jpg', 'public/img/marsh-harrier.jpg', 214, 4, 'На бреющем полете болотный лунь'),
(5, 'Совушка', 'public/img/owl-small.jpg', 'public/img/owl.jpg', 203, 7, 'Умная сова в задумчивости');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `birds`
--
ALTER TABLE `birds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `birds`
--
ALTER TABLE `birds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'первичный ключ', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
