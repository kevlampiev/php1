-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 16 2019 г., 18:40
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `currencies`
--

CREATE TABLE `currencies` (
  `currency` char(3) NOT NULL,
  `full_name` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `currencies`
--

INSERT INTO `currencies` (`currency`, `full_name`) VALUES
('EUR', 'Euro'),
('RUR', 'RUSSIAN RUBLE'),
('USD', 'US Dollar');

-- --------------------------------------------------------

--
-- Структура таблицы `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_open` timestamp NOT NULL DEFAULT current_timestamp(),
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `user_name`, `email`, `date_open`, `message`) VALUES
(1, 'Art', 'kevlampiev@gmail.com', '2019-12-14 19:22:13', 'Something for you :)'),
(2, 'Subzero', 'kevlampiev@gmail.com', '2019-12-14 19:22:35', 'Something for you again'),
(3, 'Subzero', 'kevlampiev@gmail.com', '2019-12-14 19:26:24', 'Something for you again'),
(4, 'Subzero1112', 'kevlampiev@gmail.com', '2019-12-14 19:28:40', 'Something for you again'),
(5, 'Subzero1112', 'kevlampiev@gmail.com', '2019-12-14 19:35:43', 'Something for you again'),
(6, 'Rjycnfynby', 'kevlampiev@hotmail.com', '2019-12-14 19:39:21', 'Lolllllll age'),
(7, 'Артемка', 'art@mail.ru', '2019-12-14 20:10:53', 'MessageВсе что тут написано-редкостная фигня'),
(48, 'Rita', '', '2019-12-14 21:21:56', '');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date_open` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL,
  `img` varchar(1024) NOT NULL,
  `date_close` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `category_id`, `date_open`, `description`, `img`, `date_close`) VALUES
(1, 'leak detector', 1, '2019-12-15 16:33:19', 'leak detector description ', '1.jpg', NULL),
(2, 'motion sencor', 1, '2019-12-15 16:33:19', 'Датчик Движения (Motion Sensor) - электроустановка, служит источником сигнала. Можно скрафтить на верстаке после изучения навыка Наука (Science) > Переключатели и пусковые схемы (Switches and Triggers) до 3 уровня или купить у торговца. Для использования, необходимо подключить датчик к источнику питания Инструментом Электропроводки и настроить. При срабатывании пропускает сигнал на выход', '2.jpg', NULL),
(3, 'gas detector', 1, '2019-12-15 16:33:19', 'A gas detector is a device that detects the presence of gases in an area, often as part of a safety system. This type of equipment is used to detect a gas leak or other emissions and can interface with a control system so a process can be automatically shut down. A gas detector can sound an alarm to operators in the area where the leak is occurring, giving them the opportunity to leave.', '3.jpg', NULL),
(4, 'Smart house kit', 1, '2019-12-16 01:20:33', 'Xiaomi, или Сяоми (в русском произношении) - китайская компания образованная в 2010 году, ставшая известна благодаря своей прошивке MIUI, на базе Android и фирменным смартфонам. Ассортимент продукции стремительно рос, начиная от полотенец и ортопедических подушек, заканчивая бытовой техникой и электро-велосипедами. И вот в конце 2014 года Xiaomi представила систему домашней автоматизации, состоящую из умной розетки (Mi Smart Power Plug), камеры наблюдения (Yi Camera), умной лампочки (Yeelight LED) и инфракрасного блока управления бытовой техникой (IR Remote Controller).', '9.jpg', NULL);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `goods_in_store`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `goods_in_store` (
`id` int(11)
,`name` varchar(150)
,`category` varchar(150)
,`description` text
,`price` float
,`currency` char(3)
,`img` varchar(1024)
);

-- --------------------------------------------------------

--
-- Структура таблицы `good_categories`
--

CREATE TABLE `good_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `good_categories`
--

INSERT INTO `good_categories` (`id`, `name`) VALUES
(2, 'power supply'),
(3, 'security'),
(1, 'smart house');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `descript` varchar(150) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT current_timestamp(),
  `number_of_views` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `title`, `descript`, `date_created`, `number_of_views`) VALUES
(230, '001.jpg', 'Файл №№1', '2019-12-12 20:33:12', 6),
(231, '002.jpg', 'Что-то полезное', '2019-12-12 20:33:13', 7),
(232, '003.jpg', 'Картинка №13', '2019-12-12 20:33:13', 6),
(233, '004.jpg', 'Big in JApan', '2019-12-12 20:33:13', 10),
(234, '005.jpg', 'Korea', '2019-12-12 20:33:13', 7),
(235, '006.jpg', 'Это еще одна картинка', '2019-12-12 20:33:13', 5),
(236, '007.jpg', NULL, '2019-12-12 20:33:13', 5),
(237, '008.jpg', 'Depeche mode', '2019-12-12 20:33:13', 6),
(238, '009.jpg', 'Obituary', '2019-12-12 20:33:13', 6),
(239, '010.jpg', NULL, '2019-12-12 20:33:13', 5),
(240, '011.jpg', NULL, '2019-12-12 20:33:13', 9),
(241, '012.jpg', 'I don\'t know', '2019-12-12 20:33:13', 10),
(242, 'motto.net.ua-87225.jpg', 'uploaded by users', '2019-12-16 15:38:31', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `currency` char(3) NOT NULL,
  `date_open` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_close` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`id`, `good_id`, `price`, `currency`, `date_open`, `date_close`) VALUES
(1, 3, 167, 'EUR', '2019-12-15 16:35:55', NULL),
(2, 1, 19, 'EUR', '2019-12-15 16:35:55', NULL),
(3, 2, 73, 'EUR', '2019-12-15 16:35:55', NULL),
(4, 4, 250, 'EUR', '2019-12-15 16:35:55', NULL);

-- --------------------------------------------------------

--
-- Структура для представления `goods_in_store`
--
DROP TABLE IF EXISTS `goods_in_store`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `goods_in_store`  AS  select `g`.`id` AS `id`,`g`.`name` AS `name`,`gc`.`name` AS `category`,`g`.`description` AS `description`,`p`.`price` AS `price`,`p`.`currency` AS `currency`,`g`.`img` AS `img` from ((`goods` `g` join `prices` `p` on(`g`.`id` = `p`.`good_id`)) join `good_categories` `gc` on(`g`.`category_id` = `gc`.`id`)) where `p`.`date_close` > current_timestamp() or `p`.`date_close` is null order by `gc`.`name`,`g`.`name` ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`currency`);

--
-- Индексы таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `good_categories`
--
ALTER TABLE `good_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`title`);

--
-- Индексы таблицы `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `good_categories`
--
ALTER TABLE `good_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT для таблицы `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
