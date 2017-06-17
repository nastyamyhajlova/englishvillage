-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 17 2017 г., 14:07
-- Версия сервера: 10.1.16-MariaDB
-- Версия PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `englishvillage`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `menu_name`, `position`, `content`) VALUES
(18, 'Фотогалерея', 'Фотогалерея', 0, '<img src="Village.jpg" alt="фото английской деревушки" height="350" width="400">\r\n<p> Что мы делаем </p>\r\n<p> Вот мы и продолжаем знакомство с нашим замечательным лагерем! В нём мы конечно кушаем, играем, гуляем, но это ещё и не главное. Мы ходим в музеи, на мастер классы, вот сайт сделаем, английским занимаемся,ну это же английский лагерь куда тут без английского, а если у кого-то день рождения то мы его празднуем.\r\nИ этот список можно продолжать очень и очень много. А про всё остальное я расскажу потом.\r\n\r\n<ul>\r\n<li> ходим в кино </li>\r\n<li> занимаемся английским </li>\r\n<li> делаем сайт </li>\r\n<li> ходим в музеи </li>\r\n<li> ходим на мастер-классы </li>\r\n</ul>'),
(17, 'Главная', 'Главная', 0, '<img src="045.jpg" alt="анлийская деревня" height="250" width"250">\r\n\r\n\r\n        <p> Деревушка English Village</p>\r\n\r\n\r\n        <p>Мы её жители и создатели этого сайта хотим здесь рассказать всем о нашем прекрасном лагере.Мы построили её для всех,кто хочет уверенно знать английский,с лёгкостью применять свои знания и умения на практике,кто хочет полностью погрузиться в языковую среду и получить от этого максимум удовольствия.Кто хочет испытать чувство внутреннего комфорта в окружении новых друзей,испытать мощный взрыв эмоций.</p>\r\n\r\n\r\n\r\n        <ul>\r\n\r\n\r\n            <li> ходим в кино </li>\r\n\r\n            <li> занимаемся английским </li>\r\n\r\n            <li> делаем сайт </li>\r\n\r\n            <li> ходим в музеи </li>\r\n\r\n            <li> ходим на мастер-классы </li>\r\n\r\n\r\n        </ul>'),
(19, 'О лагере', 'О лагере', 0, '<img src="046.jpg" alt=" фото английской деревушки" height="250" width="250">\r\n<p> Наши игры </p>\r\n<p> Мы в лагере очень много играем в подвижные игры например в собачку, в пионербол, в баскетбол и так далее. Нам очень весело! Так же мы прыгаем на скакалке, рисуем мелками полосы припятствий, пускаем мыльные пузыри и играем на детских площадках.\r\n<ul>\r\n<li> ходим в кино </li>\r\n<li> занимаемся английским </li>\r\n<li> делаем сайт </li>\r\n<li> ходим в музеи </li>\r\n<li> ходим на мастер-классы </li>\r\n</ul>'),
(20, 'Отзывы жителей', 'Отзывы жителей', 0, '<img src="Village1.png" alt="фото английской деревушки" height="250" widht="250">\r\n<p> Наши жители </p>\r\n<p> Жители нашей английской деревушке очень дружны! К нам в лагерь приезжают из Санкт-Петербурга и из Москвы в общем изразных городов не только из нашей Гатчины и это о многом говорит. Но это не важно главное то что мы дружим! так что вы тоже дружите!!! </p>\r\n<ul> \r\n<li> ходим в кино </li> \r\n<li> занимаемся английским </li>\r\n<li> делаем сайт </li>\r\n<li> ходим в музеи </li>\r\n<li> ходим на мастер-классы </li>\r\n</ul>'),
(21, 'Контакты', 'Контакты', 0, '<p> Наши занятия </p>\r\n\r\n<p> У нас не очень много занятий. Но они всё таки есть, страноведение, информатика, английский и у нас есть, точнее мы ходим на лекции, мастер-классы и экскурсии! А бывает и просто гуляем и нам это очень нравится!!!</p>\r\n\r\n<ul>\r\n\r\n<li> ходим в кино </li>\r\n<li> занимаемся английским </li>\r\n<li> делаем сайт </li>\r\n<li> ходим в музеи </li>\r\n<li> ходим на мастер-классы </li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', '2dad492a6aba6e5da14a57a73af97158');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
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
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
