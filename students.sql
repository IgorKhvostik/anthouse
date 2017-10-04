-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 04 2017 г., 17:34
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
-- База данных: `antHouse`
--

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `name` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `groupNumb` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `rate` smallint(5) UNSIGNED NOT NULL,
  `birthday` date NOT NULL,
  `residence` enum('resident','non-resident') NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`name`, `lastName`, `gender`, `groupNumb`, `email`, `rate`, `birthday`, `residence`, `updated_at`, `created_at`) VALUES
('Kostya', 'akademik', 'female', 'TAZ88', 'akademik@gmail.com', 300, '1975-04-12', 'resident', '2017-10-04 14:30:59', '2017-10-04 14:30:59'),
('Anna', 'Petrova', 'female', 'TK133', 'anna@gmail.com', 520, '1985-05-20', 'resident', '2017-10-04 14:26:48', '2017-10-04 14:26:48'),
('Igor', 'Khvostyk', 'male', 'TSM17', 'igor@gmail.com', 225, '1970-02-01', 'non-resident', '2017-10-04 14:26:13', '2017-10-04 14:26:13'),
('Julia', 'Marchenko', 'female', 'IK13', 'julia@gmail.com', 530, '1994-05-12', 'non-resident', '2017-10-04 14:29:11', '2017-10-04 14:29:11'),
('Nasya', 'Andreeva', 'male', 'TR07', 'nastya@gmail.com', 850, '1996-06-02', 'non-resident', '2017-10-04 14:33:07', '2017-10-04 14:33:07'),
('Sergei', 'Ivanov', 'male', 'TSM17', 'sergei@gmail.com', 740, '1980-07-02', 'resident', '2017-10-04 14:32:14', '2017-10-04 14:32:14'),
('Anatoliy', 'Savchenko', 'male', 'HCC78', 'tolya@gmail.com', 840, '1944-05-02', 'resident', '2017-10-04 14:28:07', '2017-10-04 14:28:07');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
