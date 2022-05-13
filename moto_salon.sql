-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 10 2022 г., 21:27
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
-- База данных: `moto_salon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `characteristic`
--

CREATE TABLE `characteristic` (
  `id_charact` int UNSIGNED NOT NULL,
  `name` int UNSIGNED DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `type` varchar(40) DEFAULT NULL,
  `motor` int UNSIGNED DEFAULT NULL,
  `size` int UNSIGNED DEFAULT NULL,
  `transm` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `characteristic`
--

INSERT INTO `characteristic` (`id_charact`, `name`, `color`, `type`, `motor`, `size`, `transm`) VALUES
(1, 1, 'Синій', 'спорт байк ', 1, 1, 1),
(2, 2, 'Чорний', 'спорт байк ', 2, 2, 2),
(3, 3, 'Червоний', 'спорт байк ', 3, 3, 3),
(4, 4, 'Білий', 'спорт байк ', 4, 4, 4),
(5, 5, 'Чорний', 'спорт байк ', 5, 5, 5),
(6, 6, 'Коричневий', 'дорожній', 6, 6, 6),
(7, 7, 'Чорний', 'супер спорт', 7, 7, 7),
(8, 8, 'Чорний', 'круїзер', 8, 8, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `motor`
--

CREATE TABLE `motor` (
  `id_motor` int UNSIGNED NOT NULL,
  `cylinder` int DEFAULT NULL,
  `power` varchar(50) DEFAULT NULL,
  `fuel` varchar(70) DEFAULT NULL,
  `obiem` varchar(30) DEFAULT NULL,
  `max_torque` varchar(40) DEFAULT NULL,
  `max_speed` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `motor`
--

INSERT INTO `motor` (`id_motor`, `cylinder`, `power`, `fuel`, `obiem`, `max_torque`, `max_speed`) VALUES
(1, 4, '183', 'Бензин', '998 ', '104.9', '299 '),
(2, 2, '45', 'Бензин', '399', '38', '188'),
(3, 2, '195', 'Бензин', '1 198', '133', '296'),
(4, 4, '193', 'Бензин', '999', '112', '305'),
(5, 4, '123.7', 'Бензин', '599', '65.7', '265'),
(6, 4, '138', 'Бензин', '1043', '110', '239'),
(7, 4, '310', 'Бензин', '998', '165', '380'),
(8, 4, '152', 'Бензин', '1262', '129', '270');

-- --------------------------------------------------------

--
-- Структура таблицы `name`
--

CREATE TABLE `name` (
  `id_name` int UNSIGNED NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `model` varchar(80) DEFAULT NULL,
  `ric` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `name`
--

INSERT INTO `name` (`id_name`, `brand`, `model`, `ric`) VALUES
(1, 'Yamaha', 'R1', 2003),
(2, 'Kawasaki', 'Ninja 400', 2019),
(3, 'Ducati', '1199 Panigale S', 2014),
(4, 'BMW', 'S 1000 RR', 2009),
(5, 'Yamaha', 'R6', 2014),
(6, 'Kawasaki', 'Z 1000', 2012),
(7, 'Kawasaki', 'Ninja H2R', 2018),
(8, 'Ducati', 'Diavel', 2016);

-- --------------------------------------------------------

--
-- Структура таблицы `size`
--

CREATE TABLE `size` (
  `id_size` int UNSIGNED NOT NULL,
  `height` varchar(30) DEFAULT NULL,
  `width` varchar(30) DEFAULT NULL,
  `length` varchar(40) DEFAULT NULL,
  `F_t_v` varchar(20) DEFAULT NULL,
  `weight` int DEFAULT NULL,
  `іeat_h` varchar(20) DEFAULT NULL,
  `perm_mass` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `size`
--

INSERT INTO `size` (`id_size`, `height`, `width`, `length`, `F_t_v`, `weight`, `іeat_h`, `perm_mass`) VALUES
(1, '1 095', '695', ' 2 035', '17 ', 200, '800', 80),
(2, '1120', '710', '1990', '14', 168, '785', 78),
(3, '1100', '810', ' 2075', '17 ', 188, '820', 85),
(4, '1138', '826', '2056', '17.5', 202, '820', 80),
(5, '1095', '705', '2040', '17 ', 189, '850', 85),
(6, '1085', '805', '2095', '15', 218, '815', 78),
(7, '1160', '850', '2070', '17', 216, '830', 90),
(8, '1133', '1010', '2310', '18', 247, '755', 90);

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `id_tovar` int UNSIGNED NOT NULL,
  `name` int UNSIGNED DEFAULT NULL,
  `photo` text,
  `price` varchar(10) DEFAULT NULL,
  `characteristic` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id_tovar`, `name`, `photo`, `price`, `characteristic`) VALUES
(1, 1, NULL, '5 700', 1),
(2, 2, NULL, '5 800', 2),
(3, 3, NULL, '21 000', 3),
(4, 4, NULL, '13 800', 4),
(5, 5, NULL, '11 190', 5),
(6, 6, NULL, '10 799', 6),
(7, 7, NULL, '55 500', 7),
(8, 8, NULL, '22 995', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `trasm`
--

CREATE TABLE `trasm` (
  `id_trasm` int UNSIGNED NOT NULL,
  `gearbox` varchar(20) DEFAULT NULL,
  `drive_type` varchar(50) DEFAULT NULL,
  `n_gears` int NOT NULL,
  `brakes_p` varchar(60) NOT NULL,
  `brakes_z` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `trasm`
--

INSERT INTO `trasm` (`id_trasm`, `gearbox`, `drive_type`, `n_gears`, `brakes_p`, `brakes_z`) VALUES
(1, 'меганічна', 'цепь', 6, 'гидравлический двухдисковый, 300 мм, ABS', 'гидравлический однодисковый, 220 мм, ABS'),
(2, 'меганічна', 'цепь', 6, 'гидравлический однодисковый, 310 мм, ABS', 'гидравлический однодисковый, 220 мм, ABS'),
(3, 'меганічна', 'цепь', 6, 'гидравлический двухдисковый, 330 мм, ABS', 'гидравлический однодисковый, 245 мм, ABS'),
(4, 'меганічна', 'цепь', 6, 'гидравлический однодисковый, 320 мм, ABS', 'гидравлический однодисковый, 220 мм, ABS'),
(5, 'меганічна', 'цепь', 6, 'гидравлический однодисковый, 310 мм', 'гидравлический однодисковый, 220 мм'),
(6, 'меганічна', 'цепь', 6, 'гидравлический однодисковый, 300 мм, ABS', 'гидравлический однодисковый, 250 мм, ABS'),
(7, 'меганічна', 'цепь', 6, 'гидравлический двухдисковый, 330 мм, ABS', 'гидравлический однодисковый, 250 мм, ABS'),
(8, 'меганічна', 'ремінь', 6, 'гидравлический однодисковый, 320 мм, ABS', 'гидравлический однодисковый, 265 мм, ABS');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int UNSIGNED NOT NULL,
  `full_name` varchar(355) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `login` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(355) DEFAULT NULL,
  `password` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `rol` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `full_name`, `login`, `email`, `password`, `avatar`, `rol`) VALUES
(1, 'Костик Марін Миколайович', 'ataman', 'ataman.bloger.3@gmail.com', '202cb962ac59075b964b07152d234b70', 'uploads/165194470815698232564.png', NULL),
(2, 'Ваня', 'Ваня', 'adsd@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 'uploads/165217918615698232564.png', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `characteristic`
--
ALTER TABLE `characteristic`
  ADD PRIMARY KEY (`id_charact`),
  ADD KEY `motor_haract` (`motor`),
  ADD KEY `name_charact` (`name`),
  ADD KEY `size_charact` (`size`),
  ADD KEY `tras_haract` (`transm`);

--
-- Индексы таблицы `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Индексы таблицы `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`id_name`);

--
-- Индексы таблицы `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id_tovar`),
  ADD UNIQUE KEY `characteristic` (`characteristic`),
  ADD KEY `name_tovar` (`name`);

--
-- Индексы таблицы `trasm`
--
ALTER TABLE `trasm`
  ADD PRIMARY KEY (`id_trasm`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `characteristic`
--
ALTER TABLE `characteristic`
  MODIFY `id_charact` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `motor`
--
ALTER TABLE `motor`
  MODIFY `id_motor` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `name`
--
ALTER TABLE `name`
  MODIFY `id_name` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id_tovar` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `trasm`
--
ALTER TABLE `trasm`
  MODIFY `id_trasm` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `characteristic`
--
ALTER TABLE `characteristic`
  ADD CONSTRAINT `motor_haract` FOREIGN KEY (`motor`) REFERENCES `motor` (`id_motor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `name_charact` FOREIGN KEY (`name`) REFERENCES `name` (`id_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `size_charact` FOREIGN KEY (`size`) REFERENCES `size` (`id_size`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tras_haract` FOREIGN KEY (`transm`) REFERENCES `trasm` (`id_trasm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD CONSTRAINT `name_tovar` FOREIGN KEY (`name`) REFERENCES `name` (`id_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tovar_charact` FOREIGN KEY (`characteristic`) REFERENCES `characteristic` (`id_charact`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
