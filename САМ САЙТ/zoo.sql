-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 12 2022 г., 16:07
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zoo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_product` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `title` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(5000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` int NOT NULL,
  `category` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `category`, `img`) VALUES
(1, 'Корм Hill\'s Science Plan сухой корм для кастрированных котов и кошек 1-6 лет с курицей', 'Стерилизованные кошки и кастрированные коты склонны к набору избыточного веса, поскольку у них увеличивается аппетит и снижается активность. Также у них увеличивается вероятность возникновения проблем с функциями почек и мочевого пузыря.\r\n\r\nСухой корм для молодых стерилизованных кошек и кастрированных котов, с курицей Hill\'s Science Plan Sterilised Cat содержит уникальную формулу контроля веса, поддерживающую идеальный вес, а также сбалансированный набор минералов для поддержания здоровья функций почек и мочевого пузыря. ', 8179, 'Корм', 'korm1.jpg'),
(2, 'Корм Purina Pro Plan для взрослых кошек с избыточным весом и склонных к полноте, с высоким содержанием индейки', 'С возрастом кошка становится более спокойной, тратит меньше энергии, но при этом может сохранять аппетит на прежнем уровне.  Сухой корм для кошек должен не только обеспечивать питомца необходимыми питательными веществами, но и корректировать дисбаланс между поступлением калорий и их расходом.\r\nЭксперты PRO PLAN создали сухой корм для кошек Light Adult с формулой, которая способствует снижению веса без вреда для здоровья.', 1142, 'Корм', 'korm2.jpg'),
(3, 'Корм Royal Canin для взрослого мопса с 10 месяцев', 'Брахицефальное строение челюстей Оптимальная форма и текстура крокет: крокеты имеют форму трилистника, вследствие чего собаке становится гораздо удобнее их захватывать. Их плотность, текстура и состав в сочетании с этой уникальной формой обеспечивают оптимальную гигиену зубов и полости рта и отвечают всем потребностям организма собаки.\r\nЗдоровая кожа Продукт помогает снизить риск возникновения раздражений и усиливает защитные свойства кожи мопсов. Мышечный тонус и идеальный вес Продукт поддерживает мышечный тонус мопса и помогает ему сохранять оптимальный вес.', 3968, 'Корм', 'korm3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `login`, `password`) VALUES
(1, 'Света', '89238476464', 'sveta', 'sveta'),
(2, 'Егор', '98763786423', 'egor', 'egor'),
(3, 'Лера', '89516154569', 'lera', 'lera');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `basket_ibfk_1` (`id_product`),
  ADD KEY `basket_ibfk_2` (`id_user`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `basket_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
