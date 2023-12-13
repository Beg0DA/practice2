-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 30 2023 г., 16:17
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `igralov`
--

-- --------------------------------------------------------

--
-- Структура таблицы `production`
--

CREATE TABLE `production` (
  `name` varchar(30) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quanity` varchar(500) NOT NULL DEFAULT '0',
  `description` varchar(1000) DEFAULT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `production`
--

INSERT INTO `production` (`name`, `photo`, `price`, `quanity`, `description`, `id`) VALUES
('С иностранного на русский', 'img/rusTrans.png', '1000.00', 'Перевод может быть готов в течении 1-2 дней.', 'Перевод текстов с любого языка на наш русский в течении небольшого времени.', 1),
('С русского на иностранный', 'img/TransRus.png', '1000.00', 'Перевод будет готов в течении 1-2 дней.', 'Перевод с русского языка на любой другой иностранный язык.', 2),
('С иностранного на иностранный', 'img/FullTrans.jpg', '2000.00', 'Перевод может быть готов в течении 1-2 дней.', 'Перевод с любого иностранного языка на другой иностранный язык', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `login` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `email`, `password`) VALUES
(1, 'BEGO', 'David', 'example@mail.ru', '123123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
