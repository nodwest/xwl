-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 15 2018 г., 10:34
-- Версия сервера: 5.6.37
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nodwest_app`
--

-- --------------------------------------------------------

--
-- Структура таблицы `post_video`
--

CREATE TABLE `post_video` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `img` text NOT NULL,
  `class` text NOT NULL,
  `inframe1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post_video`
--

INSERT INTO `post_video` (`id`, `name`, `link`, `img`, `class`, `inframe1`) VALUES
(1, 'XWL INTRO', 'https://www.youtube.com/watch?v=tcaw6lzYt1Q', '../img/xwl.jpg', 'first', 'https://vk.com/video_ext.php?oid=98756565&id=456239055&hash=a05cc907540c7637'),
(2, 'Essences', 'https://vk.com/video98756565_456239064', '../img/romb.png', 'ss', 'https://vk.com/video_ext.php?oid=98756565&id=456239064&hash=f02eb4974aa40af7'),
(4, 'SPACES', '', '../img/spaces.jpg', '.spaces', 'https://vk.com/video_ext.php?oid=98756565&id=456239040&hash=c3b7667e50de4a07'),
(5, 'W I N D', '', '../img/winde.jpg', '.winde', 'https://vk.com/video_ext.php?oid=98756565&id=456239060&hash=c8670d5ce752c7c2');

-- --------------------------------------------------------

--
-- Структура таблицы `tickets_buy`
--

CREATE TABLE `tickets_buy` (
  `ID` int(11) NOT NULL,
  `day` text NOT NULL,
  `counrty` text NOT NULL,
  `place` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tickets_buy`
--

INSERT INTO `tickets_buy` (`ID`, `day`, `counrty`, `place`) VALUES
(1, '1 MAY', 'RUSSIA / ROSTOV-ON-DONE', 'CLUB ARENA'),
(2, '4 MAY', 'RUSSIA /KRASNODAR', 'CLUB BLIZ'),
(3, '6 MAY', 'RUSSIA / MOSCOW', 'CLUB MARAPUL'),
(4, '9 MAY', 'RUSSIA / SARATOV', 'CLUB JANG'),
(5, '11 MAY', 'RUSSIA / SPB', 'CLUB THUNDER'),
(6, '15 MAY', 'RUSSIA / UFA', 'CLUB NANO'),
(7, '19 MAY', 'RUSSIA / SAMARA', 'CLUB BLIZZ');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` text NOT NULL,
  `postal_code` int(11) NOT NULL,
  `country` text NOT NULL,
  `mounth` text NOT NULL,
  `date` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `name`, `postal_code`, `country`, `mounth`, `date`, `email`) VALUES
(1, 'Dmirtiy Lomanos', 34400, '2', 'February', '18', 'js@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `post_video`
--
ALTER TABLE `post_video`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tickets_buy`
--
ALTER TABLE `tickets_buy`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `post_video`
--
ALTER TABLE `post_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `tickets_buy`
--
ALTER TABLE `tickets_buy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
