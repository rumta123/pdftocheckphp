-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.0.234:3311
-- Время создания: Июл 13 2022 г., 10:03
-- Версия сервера: 10.5.11-MariaDB-log
-- Версия PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rum44_jstopdf`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `E-mail` varchar(100) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Fecha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clientes`
--

INSERT INTO `clientes` (`id`, `Nombre`, `E-mail`, `Telefono`, `Fecha`) VALUES
(10, 'cliente2', '2222222222', '11111111@ya.ru', '06/07/2022'),
(11, 'cliente2', '2222222222', '11111111@ya.ru', '06/07/2022'),
(12, '111', '89159164476', 'rumta@yandex.ru', '06/07/2022'),
(13, 'Jey Study', '9202104631', 'kirill@jeystudy.ru', '06/07/2022'),
(14, 'zapis2', '', 'rumta@yandex.ru', '06/07/2022'),
(15, '222', '', 'rumta@yandex.ru', '06/07/2022'),
(16, '1111111', '', 'whiterym44@gmail.com', '06/07/2022'),
(17, '1111111', '', 'whiterym44@gmail.com', '06/07/2022'),
(18, '1111111', '', 'whiterym44@gmail.com', '06/07/2022'),
(19, '1111111', '', 'whiterym44@gmail.com', '06/07/2022'),
(20, '1111111', '', 'whiterym44@gmail.com', '06/07/2022'),
(21, '1111111', '', 'whiterym44@gmail.com', '06/07/2022'),
(22, '1111111', '', 'whiterym44@gmail.com', '06/07/2022'),
(23, '1111111', '', 'whiterym44@gmail.com', '06/07/2022'),
(24, '11111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(25, '11111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(26, '11111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(27, '11111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(28, '22222222', '89159164476', 'whiterym44@gmail.com', '06/07/2022'),
(29, '22222222', '89159164476', 'whiterym44@gmail.com', '06/07/2022'),
(30, '22222', '', 'rumta@yandex.ru', '06/07/2022'),
(31, 'cliente', '+79206403828', 'whiterym44@gmail.com', '06/07/2022'),
(32, 'cliente', '+79206403828', 'whiterym44@gmail.com', '06/07/2022'),
(33, 'cliente', '+79206403828', 'whiterym44@gmail.com', '06/07/2022'),
(34, 'cliente', '+79206403828', 'whiterym44@gmail.com', '06/07/2022'),
(35, '1111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(36, '1111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(37, '1111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(38, '1111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(39, '1111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(40, '1111', '', 'whiterym44@gmail.com', '06/07/2022'),
(41, '1111', '', 'whiterym44@gmail.com', '06/07/2022'),
(42, '111111111', '', 'rumta@yandex.ru', '07/07/2022'),
(43, '111111111', '', 'rumta@yandex.ru', '07/07/2022'),
(44, '111111111', '', 'rumta@yandex.ru', '07/07/2022'),
(45, '22222222222', '', 'rumta@yandex.ru', '07/07/2022'),
(46, '22222222222', '', 'rumta@yandex.ru', '07/07/2022'),
(47, '22222222222', '', 'rumta@yandex.ru', '07/07/2022'),
(48, '22222222222', '', 'rumta@yandex.ru', '07/07/2022'),
(49, '22222222222', '', 'rumta@yandex.ru', '07/07/2022'),
(50, '22222222222', '', 'rumta@yandex.ru', '07/07/2022'),
(51, 'zapis2', '1111', 'rumta@yandex.ru', '07/07/2022'),
(52, 'zapis2', '1111', 'rumta@yandex.ru', '07/07/2022'),
(53, 'zapis2', '1111', 'rumta@yandex.ru', '07/07/2022'),
(54, 'zapis2', '1111', 'rumta@yandex.ru', '07/07/2022'),
(55, 'zapis2', '1111', 'rumta@yandex.ru', '07/07/2022'),
(56, 'zapis2', '1111', 'rumta@yandex.ru', '07/07/2022'),
(57, 'Jey Study', '98789798', 'kirill@jeystudy.ru', '07/07/2022'),
(58, '2222222222222', '', 'whiterym44@gmail.com', '07/07/2022'),
(59, '2222222222', '+79206403828', 'whiterym44@gmail.com', '07/07/2022'),
(60, '2222222222', '+79206403828', 'whiterym44@gmail.com', '07/07/2022'),
(61, '444', '555', 'rumta@yandex.ru', '07/07/2022'),
(62, '444', '555', 'rumta@yandex.ru', '07/07/2022'),
(63, '444', '555', 'rumta@yandex.ru', '07/07/2022'),
(64, '333', '', 'rumta@yandex.ru', '07/07/2022'),
(65, 'Jey Study', '987987987', 'kirill@jeystudy.ru', '07/07/2022'),
(66, '2222222222', '+79206403828', 'whiterym44@gmail.com', '07/07/2022'),
(67, '2222222222', '+79206403828', 'whiterym44@gmail.com', '07/07/2022'),
(68, '2222222222', '+79206403828', 'whiterym44@gmail.com', '07/07/2022'),
(69, '333', '', 'rumta@yandex.ru', '07/07/2022'),
(70, '333', '', 'rumta@yandex.ru', '07/07/2022'),
(71, '333', '', 'rumta@yandex.ru', '07/07/2022'),
(72, '333', '', 'rumta@yandex.ru', '07/07/2022'),
(73, '333', '', 'rumta@yandex.ru', '07/07/2022'),
(74, '333', '', 'rumta@yandex.ru', '07/07/2022'),
(75, '333', '', 'rumta@yandex.ru', '07/07/2022'),
(76, 'Rrr', '', 'rumta@ya.ru', '08/07/2022');

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `E-mail` varchar(30) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Fecha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`id`, `Nombre`, `E-mail`, `Telefono`, `Fecha`) VALUES
(1, '111111', '222222', '33333', '444444'),
(2, 'таблица2', '2222222', '33333', '44444444'),
(3, '111111', '222222', '33333', '444444'),
(4, 'таблица2', '2222222', '33333', '44444444'),
(46, 'sus', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(47, 'sus', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(48, 'sus', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(49, 'sus', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(50, 'sus2', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(51, 'sus2', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(52, '111111111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(53, 'Travel Class', '645878765', 'kirill@travelclass.o', '06/07/2022'),
(54, 'zapis1', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(55, '111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(56, '111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(57, '111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(58, '111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(59, '111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(60, '111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(61, '111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(62, '111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(63, '111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(64, '222222222', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(65, '222222222', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(66, '222222222', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(67, '222222222', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(68, '1111111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(69, '1111111111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(70, '11', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(71, 'zapis', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(72, 'zapis', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(73, 'zapis', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(74, 'zapis', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(75, 'zapis', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(76, 'zapis', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(77, 'zapis', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(78, 'zapis', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(79, 'zapis', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(80, '11111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(81, '11111', '+79206403828', 'rumta@yandex.ru', '06/07/2022'),
(82, '1111111', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(83, '1111111', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(84, '1111111', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(85, '11111111111', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(86, '11111111111', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(87, '11111111111', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(88, '11111111111', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(89, '11111111111', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(90, '11111111111', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(91, 'zapis', '111', 'rumta@yandex.ru', '07/07/2022'),
(92, 'zapis', '111', 'rumta@yandex.ru', '07/07/2022'),
(93, 'zapis', '111', 'rumta@yandex.ru', '07/07/2022'),
(94, 'zapis', '111', 'rumta@yandex.ru', '07/07/2022'),
(95, 'zapis', '111', 'rumta@yandex.ru', '07/07/2022'),
(96, 'zapis', '111', 'rumta@yandex.ru', '07/07/2022'),
(97, 'Travel Class', '76799', 'kirill@travelclass.o', '07/07/2022'),
(98, '11111111', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(99, '2222222222', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(100, '2222222222', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(101, '333', '55', 'rumta@yandex.ru', '07/07/2022'),
(102, '333', '55', 'rumta@yandex.ru', '07/07/2022'),
(103, '333', '55', 'rumta@yandex.ru', '07/07/2022'),
(104, '333', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(105, 'Travel Class', '234234234', 'kirill@travelclass.o', '07/07/2022'),
(106, '2222222222', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(107, '2222222222', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(108, '2222222222', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(109, '333', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(110, '333', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(111, '333', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(112, '333', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(113, '333', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(114, '333', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(115, '333', '+79206403828', 'rumta@yandex.ru', '07/07/2022'),
(116, 'Ww', '', 'rumta@ya.ru', '08/07/2022');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
