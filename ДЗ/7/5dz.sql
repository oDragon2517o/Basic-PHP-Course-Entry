-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 22 2022 г., 01:16
-- Версия сервера: 8.0.26
-- Версия PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `5dz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `added`
--

CREATE TABLE `added` (
  `id` int NOT NULL,
  `id_users` int NOT NULL,
  `id_images` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `added`
--

INSERT INTO `added` (`id`, `id_users`, `id_images`) VALUES
(1, 2, 20),
(2, 1, 21),
(3, 1, 19),
(4, 1, 20);

-- --------------------------------------------------------

--
-- Структура таблицы `foto`
--

CREATE TABLE `foto` (
  `Id` int NOT NULL,
  `AddressServerBig` text,
  `AddressServerSmall` text,
  `SizeFoto` int DEFAULT NULL,
  `NameFoto` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `foto`
--

INSERT INTO `foto` (`Id`, `AddressServerBig`, `AddressServerSmall`, `SizeFoto`, `NameFoto`) VALUES
(1, './public_html/images/big/001.jpg', './public_html/images/small/001.jpg', 700, '001'),
(2, './public_html/images/big/002.jpg', './public_html/images/small/002.jpg', 700, '002'),
(3, './public_html/images/big/003.jpg', './public_html/images/small/003.jpg', 700, '003'),
(4, './public_html/images/big/004.jpg', './public_html/images/small/004.jpg', 700, '004'),
(5, './public_html/images/big/005.jpg', './public_html/images/small/005.jpg', 700, '005'),
(6, './public_html/images/big/006.jpg', './public_html/images/small/006.jpg', 700, '006');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `AddressImages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `AddressImages`) VALUES
(19, 'images/images/OlFp_lE6nLY.jpg'),
(20, 'images/images/6FkfHExsv63sbsECBczRiNMGaUweTvF508aFRnVzVDg76wnbTgBsnCiebHSnQkQnzHRQy975NaEcKS9qBc96LAg8.jpg'),
(21, 'images/images/600.jpg'),
(22, 'images/images/o2XcH_JcVzI.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` text,
  `pass` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`) VALUES
(1, '123', '123'),
(2, 'User1', 'User1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `added`
--
ALTER TABLE `added`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `added`
--
ALTER TABLE `added`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `foto`
--
ALTER TABLE `foto`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
