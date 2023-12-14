-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 14 2023 г., 21:19
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `charcode` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `vunitrate` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Дамп данных таблицы `rate`
--

INSERT INTO `rate` (`id`, `name`, `charcode`, `vunitrate`) VALUES
(1, 'Австралийский доллар', 'AUD', '60,1893'),
(2, 'Азербайджанский манат', 'AZN', '52,7495'),
(3, 'Фунт стерлингов Соединенного королевства', 'GBP', '112,3258'),
(4, 'Армянских драмов', 'AMD', '0,221647'),
(5, 'Белорусский рубль', 'BYN', '28,4229'),
(6, 'Болгарский лев', 'BGN', '49,459'),
(7, 'Бразильский реал', 'BRL', '18,0878'),
(8, 'Венгерских форинтов', 'HUF', '0,257388'),
(9, 'Вьетнамских донгов', 'VND', '0,003745'),
(10, 'Гонконгский доллар', 'HKD', '11,5055'),
(11, 'Грузинский лари', 'GEL', '33,5293'),
(12, 'Датская крона', 'DKK', '12,9726'),
(13, 'Дирхам ОАЭ', 'AED', '24,4177'),
(14, 'Доллар США', 'USD', '89,6741'),
(15, 'Евро', 'EUR', '97,7377'),
(16, 'Египетских фунтов', 'EGP', '2,90258'),
(17, 'Индийских рупий', 'INR', '1,07568'),
(18, 'Индонезийских рупий', 'IDR', '0,00573767'),
(19, 'Казахстанских тенге', 'KZT', '0,196788'),
(20, 'Канадский доллар', 'CAD', '66,1265'),
(21, 'Катарский риал', 'QAR', '24,6357'),
(22, 'Киргизских сомов', 'KGS', '1,00668'),
(23, 'Китайский юань', 'CNY', '12,5457'),
(24, 'Молдавских леев', 'MDL', '4,99338'),
(25, 'Новозеландский доллар', 'NZD', '55,7325'),
(26, 'Норвежских крон', 'NOK', '8,18023'),
(27, 'Польский злотый', 'PLN', '22,7115'),
(28, 'Румынский лей', 'RON', '19,671'),
(29, 'СДР (специальные права заимствования)', 'XDR', '119,0657'),
(30, 'Сингапурский доллар', 'SGD', '67,4444'),
(31, 'Таджикских сомони', 'TJS', '8,17941'),
(32, 'Таиландских батов', 'THB', '2,55142'),
(33, 'Турецких лир', 'TRY', '3,08882'),
(34, 'Новый туркменский манат', 'TMT', '25,6212'),
(35, 'Узбекских сумов', 'UZS', '0,00725108'),
(36, 'Украинских гривен', 'UAH', '2,42202'),
(37, 'Чешских крон', 'CZK', '3,95075'),
(38, 'Шведских крон', 'SEK', '8,57781'),
(39, 'Швейцарский франк', 'CHF', '102,9317'),
(40, 'Сербских динаров', 'RSD', '0,833862'),
(41, 'Южноафриканских рэндов', 'ZAR', '4,81826'),
(42, 'Вон Республики Корея', 'KRW', '0,069225'),
(43, 'Японских иен', 'JPY', '0,629601');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
