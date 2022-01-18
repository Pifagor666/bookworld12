-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 17 2022 г., 12:41
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `book`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `email` text,
  `prods` text,
  `prods_amount` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `email`, `prods`, `prods_amount`) VALUES
(2, 'nam@.ru', '20', '5');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `title`, `description`) VALUES
(1, 'Воровка для незримого диктатора', ''),
(2, 'Пламя ночи', ' '),
(3, 'Удачная одиссея', ''),
(4, 'Помощница лютого босса', ''),
(5, 'Отражение догоревшей боли', ''),
(6, 'Страницы счастливой ночи', ''),
(7, 'Моя секретная игра', ''),
(8, 'Моя громадная борьба', ''),
(9, 'Слёзы истлевшей печали', ''),
(10, 'Кафедра мертвых магов', ''),
(11, 'Секретарь загадочного императора', ''),
(12, 'Помощница жесткого хранителя', ''),
(13, 'Жан де Лафонтен', 'Жан де Лафонтен. Басни / Jean de La Fontaine: Fables | де Лафонтен Жан'),
(14, 'Басни', 'Басни. Крылов И. | Крылов Иван'),
(15, 'Филипок', 'Филипок. Рассказы, проверенные временем / Сборник рассказов для детей / Л. Толстой, В. Катаев, В. Даль, Е. Шварц, М. Зощенко, Л. Пантелеев | Толстой Лев Николаевич, Катаев Валентин'),
(16, '1793', '1793. История одного убийства | Натт-о-Даг Никлас'),
(17, 'Последняя охота', 'Последняя охота | Гранже Жан-Кристоф'),
(18, 'Дом голосов', 'Дом голосов | Карризи Донато'),
(19, 'Божественная Комедия', 'Божественная Комедия | Данте Алигьери'),
(20, 'Горе от ума', 'Горе от ума | Грибоедов Александр'),
(21, 'Илиада', 'Илиада | Гомер'),
(22, 'Таинственный остров', 'Таинственный остров | Верн Жюль'),
(23, 'Остров Сокровищ', 'Остров Сокровищ | Стивенсон Роберт Льюис'),
(24, 'Дети капитана Гранта', 'Дети капитана Гранта | Верн Жюль'),
(25, 'Отбор', 'Отбор | Касс Кира'),
(26, 'Мара и Морок. 500 лет назад', 'Мара и Морок. 500 лет назад | Арден Лия'),
(27, 'День триффидов', 'День триффидов | Уиндем Джон'),
(28, 'Караваль', 'Караваль | Гарбер Стефани'),
(29, 'Вкус памяти', 'Вкус памяти | Свон Таня'),
(30, 'Я - легенда', 'Я - легенда | Матесон Ричард'),
(31, 'Портрет Дориана Грея', 'Портрет Дориана Грея | Уайльд Оскар'),
(32, 'Мастер и Маргарита', 'Мастер и Маргарита | Булгаков Михаил Афанасьевич'),
(33, 'Доверься мне', 'Доверься мне | Кастен Мона');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'name', '123'),
(2, '_name', '123'),
(3, '111', '111'),
(9, 'nam@.ru', 'nam');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
