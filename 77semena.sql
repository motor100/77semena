-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 24 2022 г., 23:35
-- Версия сервера: 5.7.33
-- Версия PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `77semena`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zelma Raynor', 'david.nitzsche', 'faustino.bode@example.net', '2022-11-24 15:14:18', '$2y$10$wuM/94PYYiiBv2.Dq535A.m3wtK80YFVu/NPczy0622Zg1SqIcc/u', 'Ta213TAKpB', '2022-11-24 15:14:18', '2022-11-24 15:14:18'),
(2, 'Daphney Wilkinson', 'fmcclure', 'mayert.dell@example.com', '2022-11-24 15:14:18', '$2y$10$fTHm8/xyjpKbeTNjqDyYSu76.yaFI9kyRKt9A5zvW00TPTzVWIRE6', '5ceeg1ym4b', '2022-11-24 15:14:18', '2022-11-24 15:14:18'),
(3, 'Samara Kuphal Jr.', 'whuels', 'lynch.lavina@example.net', '2022-11-24 15:14:18', '$2y$10$Hxq5n2rn4eS8pyrQGAe9WODU7tg6S1RVrVvBrHmFYkC.cMG133kBS', '0IVlTAmfVx', '2022-11-24 15:14:18', '2022-11-24 15:14:18');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 0, 'Семена', 'semena', '2022-11-23 14:44:41', '2022-11-23 14:44:41'),
(2, 0, 'Агрохимия', 'agrohimiya', '2022-11-23 14:44:41', '2022-11-24 14:33:30'),
(3, 1, 'Огурцы', 'ogurcy', '2022-11-23 14:44:41', '2022-11-24 14:46:56'),
(4, 1, 'Перцы', 'percy', '2022-11-23 14:44:41', '2022-11-23 14:44:41'),
(5, 1, 'Томаты', 'tomaty', '2022-11-23 14:44:41', '2022-11-23 14:44:41'),
(6, 1, 'Овощи', 'ovoshchi', '2022-11-23 14:44:41', '2022-11-23 14:44:41'),
(7, 1, 'Газон', 'gazon', '2022-11-23 14:44:41', '2022-11-23 14:44:41'),
(8, 1, 'Цветы', 'cvety', '2022-11-23 14:44:41', '2022-11-23 14:44:41'),
(9, 1, 'Ягоды', 'yagody', '2022-11-23 14:44:41', '2022-11-23 14:44:41');

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `city`, `region`, `created_at`, `updated_at`) VALUES
(1, 'Миасс', 'Челябинская область', '1984-06-14 20:43:13', '1992-09-26 23:01:07'),
(2, 'Златоуст', 'Челябинская область', '1977-01-29 02:56:16', '1988-05-11 20:50:00'),
(3, 'Чебаркуль', 'Челябинская область', '1988-06-09 00:36:07', '1972-08-12 06:49:47'),
(4, 'Челябинск', 'Челябинская область', '2010-06-14 01:14:32', '1979-04-19 14:46:27'),
(5, 'Магнитогорск', 'Челябинская область', '2009-01-26 00:57:58', '1996-10-18 21:57:36');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 16, 'https://via.placeholder.com/640x480.png/00dd22?text=veniam', '1977-06-14 21:56:54', '1995-11-01 03:48:40'),
(2, 20, 'https://via.placeholder.com/640x480.png/00eeee?text=voluptates', '2017-11-16 12:31:07', '1991-05-14 13:44:29'),
(3, 7, 'https://via.placeholder.com/640x480.png/0077ff?text=sit', '1984-10-13 20:17:24', '2007-02-20 15:45:18'),
(4, 6, 'https://via.placeholder.com/640x480.png/00ee66?text=temporibus', '2002-01-12 17:04:47', '1974-01-22 07:39:43'),
(5, 7, 'https://via.placeholder.com/640x480.png/00dd99?text=hic', '2013-01-01 23:25:52', '1988-08-23 00:42:03'),
(6, 13, 'https://via.placeholder.com/640x480.png/000011?text=provident', '2007-08-22 13:23:23', '1992-09-20 18:17:56'),
(7, 16, 'https://via.placeholder.com/640x480.png/00ff44?text=necessitatibus', '2014-05-24 14:07:03', '1984-01-09 12:52:01'),
(8, 15, 'https://via.placeholder.com/640x480.png/00bb00?text=atque', '1993-04-13 10:04:08', '1972-01-23 23:48:48'),
(9, 16, 'https://via.placeholder.com/640x480.png/002255?text=vitae', '1989-01-29 07:41:57', '2011-08-20 14:42:00'),
(10, 7, 'https://via.placeholder.com/640x480.png/004400?text=a', '1981-08-08 04:33:39', '1976-01-22 23:27:55'),
(11, 16, 'https://via.placeholder.com/640x480.png/00bb33?text=architecto', '2017-05-12 04:33:26', '2005-12-18 08:35:52'),
(12, 9, 'https://via.placeholder.com/640x480.png/00ccbb?text=laboriosam', '2005-11-05 05:30:34', '2018-02-22 11:13:35'),
(13, 2, 'https://via.placeholder.com/640x480.png/004477?text=ut', '1975-06-05 20:33:32', '1976-10-12 11:32:00'),
(14, 17, 'https://via.placeholder.com/640x480.png/000077?text=incidunt', '1972-09-21 12:55:20', '1985-07-24 08:08:34'),
(15, 3, 'https://via.placeholder.com/640x480.png/004444?text=tempore', '2017-11-29 17:42:24', '1971-10-08 04:53:14'),
(16, 2, 'https://via.placeholder.com/640x480.png/00ffcc?text=facere', '2001-05-29 08:39:38', '2017-05-15 09:53:21'),
(17, 14, 'https://via.placeholder.com/640x480.png/00ccee?text=quia', '1978-03-04 11:45:31', '1982-10-29 19:29:05'),
(18, 8, 'https://via.placeholder.com/640x480.png/005511?text=id', '1993-01-09 17:05:08', '1983-09-07 13:46:41'),
(19, 20, 'https://via.placeholder.com/640x480.png/001122?text=non', '2002-02-28 12:29:23', '1980-07-25 23:46:14'),
(20, 10, 'https://via.placeholder.com/640x480.png/0022dd?text=et', '1975-04-05 06:12:24', '2013-11-07 18:47:26'),
(21, 18, 'https://via.placeholder.com/640x480.png/002299?text=praesentium', '1983-01-29 20:37:42', '2012-09-25 11:13:35'),
(22, 8, 'https://via.placeholder.com/640x480.png/008800?text=nemo', '2012-01-22 10:42:15', '2009-09-23 02:25:06'),
(23, 2, 'https://via.placeholder.com/640x480.png/00bb66?text=saepe', '2022-10-21 10:45:37', '2022-07-02 03:16:35'),
(24, 18, 'https://via.placeholder.com/640x480.png/00ee77?text=reprehenderit', '2013-06-07 07:36:49', '1989-08-05 04:35:30'),
(25, 15, 'https://via.placeholder.com/640x480.png/003366?text=provident', '2014-12-15 03:45:00', '2006-07-22 19:12:21'),
(26, 19, 'https://via.placeholder.com/640x480.png/00aa00?text=aliquam', '1989-09-10 04:00:27', '2006-08-23 15:55:20'),
(27, 5, 'https://via.placeholder.com/640x480.png/0033bb?text=qui', '1983-11-06 01:48:14', '1988-11-20 21:18:20'),
(28, 7, 'https://via.placeholder.com/640x480.png/00cc33?text=rem', '2016-06-07 14:20:31', '1979-07-25 13:51:08'),
(29, 18, 'https://via.placeholder.com/640x480.png/0022ee?text=vel', '2010-04-23 05:50:07', '2018-09-15 09:07:39'),
(30, 9, 'https://via.placeholder.com/640x480.png/005566?text=debitis', '2018-07-02 14:00:39', '1985-10-02 08:57:34'),
(31, 17, 'https://via.placeholder.com/640x480.png/006688?text=corporis', '1997-09-12 23:04:23', '2011-07-11 02:33:16'),
(32, 9, 'https://via.placeholder.com/640x480.png/0088bb?text=itaque', '1984-10-20 13:57:54', '1974-12-08 04:28:06'),
(33, 2, 'https://via.placeholder.com/640x480.png/008877?text=et', '1974-02-21 12:24:26', '1987-12-25 22:23:09'),
(34, 1, 'https://via.placeholder.com/640x480.png/0088aa?text=ipsum', '1988-06-09 08:32:57', '1996-08-09 06:24:33'),
(35, 2, 'https://via.placeholder.com/640x480.png/004477?text=possimus', '1978-06-16 16:31:58', '2008-03-08 05:52:41'),
(36, 15, 'https://via.placeholder.com/640x480.png/00cc77?text=ut', '1980-08-16 13:14:15', '2001-09-30 01:09:04'),
(37, 14, 'https://via.placeholder.com/640x480.png/0011dd?text=omnis', '1991-12-27 22:15:28', '1997-08-01 11:28:13'),
(38, 3, 'https://via.placeholder.com/640x480.png/001177?text=pariatur', '1982-12-21 09:49:06', '2007-02-02 22:00:06'),
(39, 10, 'https://via.placeholder.com/640x480.png/0011aa?text=eligendi', '1999-10-17 10:07:12', '1981-10-01 08:54:41'),
(40, 11, 'https://via.placeholder.com/640x480.png/001133?text=sint', '2014-08-04 05:32:58', '2022-09-16 01:26:06'),
(41, 1, 'https://via.placeholder.com/640x480.png/00bb33?text=nobis', '2022-01-25 17:06:02', '1974-03-08 20:23:18'),
(42, 20, 'https://via.placeholder.com/640x480.png/00bb11?text=dicta', '2018-04-12 14:02:42', '1999-03-31 18:18:45'),
(43, 19, 'https://via.placeholder.com/640x480.png/001111?text=minus', '2020-08-19 16:53:37', '2016-11-05 00:27:30'),
(44, 19, 'https://via.placeholder.com/640x480.png/0077dd?text=est', '2012-05-01 01:44:14', '1991-10-20 19:51:32'),
(45, 13, 'https://via.placeholder.com/640x480.png/00ee11?text=rerum', '2004-05-08 18:17:41', '2019-10-04 13:06:35'),
(46, 16, 'https://via.placeholder.com/640x480.png/0011ff?text=optio', '2007-04-03 03:42:04', '1981-11-11 12:50:49'),
(47, 2, 'https://via.placeholder.com/640x480.png/0088ff?text=voluptatem', '2007-12-29 01:17:35', '2011-05-08 11:33:01'),
(48, 1, 'https://via.placeholder.com/640x480.png/00cc22?text=sit', '2012-08-25 10:17:30', '1971-02-20 04:31:10'),
(49, 6, 'https://via.placeholder.com/640x480.png/001100?text=et', '1998-02-26 20:26:47', '2006-02-27 03:31:47'),
(50, 15, 'https://via.placeholder.com/640x480.png/0066cc?text=architecto', '2018-09-15 00:29:56', '1977-03-07 13:22:19'),
(51, 21, '/uploads/products/novyi-tovar555-24112022-2021494577.jpg', '2022-11-24 15:27:44', '2022-11-24 15:27:44');

-- --------------------------------------------------------

--
-- Структура таблицы `mainnews`
--

CREATE TABLE `mainnews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mainnews`
--

INSERT INTO `mainnews` (`id`, `title`, `slug`, `image`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Aut sed neque consequatur odio quia corrupti velit amet.', 'quia-cum-quo-blanditiis-aut-omnis-et', 'https://via.placeholder.com/640x480.png/00bb00?text=perferendis', 'Explicabo ea labore qui quia. Cumque molestias sunt est. Est et magni beatae consequatur quod sint.', '1979-08-09 17:43:40', '2000-12-12 22:09:24'),
(2, 'Cum adipisci at distinctio vel quaerat occaecati perferendis.', 'vitae-rem-est-quia-assumenda-saepe-qui-est', 'https://via.placeholder.com/640x480.png/0022bb?text=ea', 'Qui fugit cum ipsum. Aperiam consequatur est est.', '2020-08-26 13:28:22', '1983-05-28 09:56:06'),
(3, 'Quos placeat nihil fugiat aut praesentium nihil.', 'nemo-exercitationem-voluptatem-aspernatur-aut-voluptates', 'https://via.placeholder.com/640x480.png/009911?text=eius', 'Molestiae aut atque excepturi omnis ut quisquam. Ducimus aspernatur voluptatem magnam ut.', '1982-08-12 05:27:10', '2015-01-12 03:06:55'),
(4, 'Odit occaecati dicta quisquam molestiae tenetur atque ut.', 'laudantium-laborum-mollitia-laboriosam-magnam', 'https://via.placeholder.com/640x480.png/001122?text=quo', 'Consequuntur id error amet eum aut in rem. Qui est quidem repellendus tempore enim rerum.', '1987-11-27 10:21:17', '1980-09-08 15:11:04'),
(5, 'Aut dolorem facere dolorum consequatur.', 'debitis-veritatis-incidunt-adipisci-a-neque-quaerat', 'https://via.placeholder.com/640x480.png/00ee88?text=et', 'Quia quae laborum rem et est officia ut nihil. Qui asperiores labore quo dolorum labore veniam.', '1988-05-23 13:28:47', '2011-06-29 11:12:23'),
(6, 'Molestiae voluptate unde labore.', 'nobis-est-eveniet-et-quia-sed-eos', 'https://via.placeholder.com/640x480.png/00ee55?text=ipsam', 'Commodi earum incidunt quo occaecati. Omnis natus deleniti dignissimos.', '1999-07-07 06:36:37', '1971-07-27 07:55:53'),
(7, 'Aut rerum eos nisi unde rerum vel incidunt soluta.', 'quibusdam-dolores-quisquam-dolores-dolores', 'https://via.placeholder.com/640x480.png/0000dd?text=sunt', 'Neque non pariatur aut perferendis distinctio iste ut ut. Eaque ut voluptatem beatae quia sed.', '2020-03-04 16:23:08', '1988-05-27 18:09:35'),
(8, 'Aperiam consequuntur expedita repellendus esse.', 'quod-et-consequatur-ullam-distinctio-quibusdam', 'https://via.placeholder.com/640x480.png/009922?text=nesciunt', 'Est omnis praesentium vitae. Qui error sequi tempora quia. Fuga atque enim cupiditate magni.', '1971-03-21 12:13:58', '2022-09-16 19:52:43'),
(9, 'Quis et quo sed pariatur aut.', 'laudantium-velit-id-quo-at-illo-voluptas-iusto', 'https://via.placeholder.com/640x480.png/00ffdd?text=quasi', 'Ea voluptas veniam deleniti est. Et a amet est ipsam accusamus quis.', '2002-02-05 09:07:08', '1975-11-19 08:24:53'),
(10, 'Ipsam voluptatem quis omnis veritatis distinctio sequi.', 'repudiandae-asperiores-praesentium-dolor', 'https://via.placeholder.com/640x480.png/008855?text=quas', 'Nam est nisi molestiae quam ullam. Ut distinctio et asperiores nam molestiae officia ipsum.', '2009-01-24 16:13:18', '2021-01-19 22:13:57'),
(11, 'Officia pariatur aut quo maxime accusamus dolor.', 'suscipit-nesciunt-cum-incidunt-corrupti-est-facere', 'https://via.placeholder.com/640x480.png/0066ff?text=beatae', 'Quam est distinctio ea eveniet deserunt. Sunt architecto quibusdam et voluptate quis quia id.', '2004-06-13 18:15:43', '1982-10-15 08:31:10'),
(12, 'Temporibus omnis nobis explicabo.', 'dicta-qui-voluptatem-sunt-quam', 'https://via.placeholder.com/640x480.png/00aaee?text=unde', 'Autem hic id rerum est. Ut veritatis cupiditate a recusandae quidem libero aperiam.', '1972-11-22 01:18:51', '1985-05-28 00:09:43'),
(13, 'Consequatur in animi cumque consequatur libero cumque consequatur.', 'doloribus-voluptatem-doloribus-cumque-ut-totam-cupiditate', 'https://via.placeholder.com/640x480.png/0077ff?text=voluptas', 'A sequi vel quasi incidunt. Tempore nulla laboriosam provident illum et.', '1991-03-11 11:55:58', '1979-09-12 06:25:15'),
(14, 'Repellendus consequatur dolorem et at.', 'tempore-est-temporibus-natus-corrupti-sint-aut', 'https://via.placeholder.com/640x480.png/002288?text=doloremque', 'Veniam qui dolorum dolor similique est harum. Cumque sit eius dignissimos sit.', '1996-08-26 13:43:17', '2006-03-19 12:57:33'),
(15, 'Suscipit sed quasi cum aut error.', 'quo-eveniet-sit-animi-molestiae', 'https://via.placeholder.com/640x480.png/0066ee?text=illo', 'Omnis inventore quibusdam id qui. Dolores alias omnis ut eaque.', '2016-12-19 18:29:36', '1993-01-23 20:17:07'),
(16, 'Laborum reiciendis est nemo placeat sunt aut vel.', 'provident-omnis-et-voluptatem-repudiandae-doloremque-laboriosam-odio', 'https://via.placeholder.com/640x480.png/0066ff?text=laborum', 'Ex omnis est quo et. Iure aut temporibus vel et asperiores quis sed. Voluptatem dicta vel quas.', '2007-06-14 02:34:35', '2016-04-06 02:17:10'),
(17, 'Fuga quia sunt possimus in deserunt voluptatem saepe.', 'ab-magni-voluptas-laudantium-consequatur-nihil-consequatur-eum', 'https://via.placeholder.com/640x480.png/0066bb?text=doloremque', 'Libero minus facere distinctio. Debitis veniam ea voluptatem voluptatem et qui.', '1980-08-22 07:20:30', '1983-12-15 07:17:20'),
(18, 'Enim hic velit libero nihil omnis omnis occaecati blanditiis.', 'aut-qui-rerum-repellendus', 'https://via.placeholder.com/640x480.png/004411?text=unde', 'Labore nam ea voluptatem consequatur quia. Non quam suscipit aut. Quae quaerat possimus dolorum.', '2013-06-06 21:09:41', '1979-11-22 06:03:33'),
(19, 'Animi voluptatem quia eaque sed labore sint officia consectetur.', 'magnam-est-harum-itaque', 'https://via.placeholder.com/640x480.png/002288?text=molestiae', 'Repudiandae quos et veniam laudantium. Magni nam nostrum voluptatem eos sunt ut accusantium.', '2003-08-09 14:40:51', '2001-04-28 09:46:38'),
(20, 'Rerum fugit similique omnis necessitatibus natus placeat maxime.', 'sapiente-qui-voluptatem-ut-velit-minus-explicabo', 'https://via.placeholder.com/640x480.png/004422?text=beatae', 'Inventore aut quod ea quasi facilis ullam doloribus. Iusto adipisci laboriosam et modi.', '1970-05-10 13:02:18', '1973-03-11 06:23:48');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_20_122024_create_sessions_table', 1),
(6, '2022_05_20_124158_create_password_resets_admin_table', 1),
(7, '2022_05_20_124457_create_admins_table', 1),
(8, '2022_09_19_174133_create_mainnews_table', 1),
(9, '2022_09_26_113832_create_testimonials_table', 1),
(10, '2022_09_26_133307_create_cities_table', 1),
(11, '2022_11_16_173820_create_pages_table', 1),
(12, '2022_11_18_172439_create_products_table', 1),
(13, '2022_11_20_150656_create_galleries_table', 1),
(14, '2022_11_23_192512_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets_admin`
--

CREATE TABLE `password_resets_admin` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `wholesale_price` int(11) NOT NULL,
  `retail_price` int(11) NOT NULL,
  `sku` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `category`, `image`, `text`, `code`, `quantity`, `wholesale_price`, `retail_price`, `sku`, `weight`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'Porro est et.', 'voluptas-consequatur-est-laudantium-quod', 0, 'https://via.placeholder.com/640x480.png/009955?text=repellat', 'Ea nesciunt et nihil enim nobis ipsa. Soluta doloremque totam consequatur ipsum omnis debitis aut. Esse quam consequatur enim alias beatae velit. Sit perspiciatis iusto quia voluptatem est.', 65114, 21, 2, 175, 260, 493, 'repellendus', '1997-07-01 15:41:30', '2010-07-12 10:55:30'),
(2, 'Minus odio non.', 'et-doloribus-tempora-aliquam-ullam-libero-dignissimos', 1, 'https://via.placeholder.com/640x480.png/008822?text=quia', 'Voluptatibus vero veniam commodi. Illum accusantium et maxime sed. Aut possimus et repellendus ut quibusdam iusto. Officiis et possimus accusantium qui. Rerum hic dolorem distinctio rem molestias.', 78924, 743, 84, 181, 84, 228, 'eum', '1988-03-14 13:18:25', '1985-12-13 23:59:37'),
(3, 'Libero ipsam minima voluptatem.', 'exercitationem-reprehenderit-temporibus-placeat-velit-quod-ut', 3, 'https://via.placeholder.com/640x480.png/001188?text=eum', 'Molestiae qui eum maiores culpa incidunt. Consequuntur quia dolores beatae praesentium.', 14176, 86, 25, 132, 661, 525, 'quo', '2005-06-06 19:22:04', '2022-10-07 20:46:40'),
(4, 'Aliquam neque debitis in.', 'excepturi-accusamus-fugit-ab-laudantium-eius-modi', 10, 'https://via.placeholder.com/640x480.png/0066bb?text=et', 'Esse enim atque fugiat omnis quasi quasi. Ut sed et quis maiores ea illo molestias. Voluptatem et quo magnam aliquid voluptas deleniti. Amet voluptas optio quis.', 71695, 694, 50, 160, 887, 646, 'inventore', '1974-05-03 03:22:27', '2020-02-28 01:32:56'),
(5, 'Voluptas hic nobis sit.', 'culpa-consequatur-voluptatum-harum-iste-laboriosam-et', 6, 'https://via.placeholder.com/640x480.png/00cc66?text=quis', 'Voluptatibus earum ut vero beatae. Voluptas excepturi est dolorem neque. Recusandae voluptatem eos quisquam est.', 60734, 514, 70, 155, 682, 922, 'quo', '1982-01-17 20:35:19', '2013-08-31 17:10:01'),
(6, 'Dolorem et eos maiores.', 'suscipit-facilis-blanditiis-qui', 6, 'https://via.placeholder.com/640x480.png/0077bb?text=aspernatur', 'Similique quas dolorem recusandae non quis et voluptates. Molestiae pariatur et ut laboriosam animi blanditiis soluta omnis. Voluptates adipisci quasi reprehenderit sapiente repellat.', 56478, 352, 24, 150, 735, 823, 'quisquam', '2005-04-22 19:27:07', '2014-09-13 02:44:57'),
(7, 'Earum numquam aliquid optio.', 'veritatis-accusantium-sed-tempore-placeat-doloremque', 5, 'https://via.placeholder.com/640x480.png/003377?text=in', 'Nisi nemo accusantium consequatur. Commodi provident cupiditate sequi et. Impedit saepe nostrum sunt quo recusandae quia.', 62211, 295, 93, 186, 272, 552, 'incidunt', '1997-01-11 21:03:43', '1995-08-31 23:40:05'),
(8, 'Aut consequatur tempora.', 'quia-omnis-odit-porro-quod-sint-consequatur', 0, 'https://via.placeholder.com/640x480.png/007766?text=impedit', 'Ea quia qui eius animi ratione ut. Rerum aut libero sunt aspernatur ipsum. Vero ducimus sapiente in animi mollitia dolorum ut aliquid. Inventore voluptatem debitis laudantium provident ipsam.', 66425, 811, 74, 129, 741, 945, 'est', '2005-12-25 14:36:20', '2011-10-31 06:27:39'),
(9, 'Est vitae deserunt.', 'quis-pariatur-sit-sed-incidunt-voluptas-omnis-assumenda', 6, 'https://via.placeholder.com/640x480.png/004488?text=incidunt', 'Officia ut in enim nihil quaerat. Commodi et officia vel voluptatem deserunt. Et facere consequatur blanditiis nihil molestiae.', 21630, 281, 75, 140, 139, 14, 'quasi', '1972-10-07 00:41:05', '2020-09-29 23:13:34'),
(10, 'Expedita velit qui minus.', 'molestias-ab-rem-doloribus-perferendis-ipsam-debitis-doloremque', 0, 'https://via.placeholder.com/640x480.png/008811?text=est', 'Nesciunt aspernatur culpa alias consectetur et nihil sunt debitis. Consequatur beatae fugiat itaque debitis. Cum voluptatem ea doloremque earum rerum facere nihil.', 30091, 379, 13, 169, 450, 773, 'quisquam', '2015-09-11 05:41:55', '2017-09-25 13:15:41'),
(11, 'Illo ut perspiciatis.', 'libero-id-quia-dolorum-officia-voluptatibus', 4, 'https://via.placeholder.com/640x480.png/00ffcc?text=modi', 'Vel hic laudantium iusto odio corporis qui. Rerum et occaecati corrupti esse consequatur. Nisi sit qui molestias ad aliquam.', 93473, 123, 76, 199, 476, 51, 'explicabo', '1995-09-05 02:10:13', '1990-03-21 16:49:10'),
(12, 'Velit nam doloribus.', 'voluptatem-nihil-aut-ut-quo-voluptatem', 8, 'https://via.placeholder.com/640x480.png/003300?text=dolorem', 'Omnis natus ea numquam odio error. Sit maxime deserunt adipisci fugiat hic. Aliquam qui autem molestias consequatur earum. Et quam alias odio incidunt.', 55227, 268, 70, 182, 940, 993, 'culpa', '1975-03-14 15:05:45', '1995-06-05 12:38:51'),
(13, 'Necessitatibus molestias voluptatibus.', 'officia-in-commodi-magnam-qui-qui-optio-consequuntur-repellendus', 10, 'https://via.placeholder.com/640x480.png/003377?text=itaque', 'Et et quo accusantium. Quis occaecati blanditiis porro perferendis aut. Repellendus et modi labore quibusdam quia ratione dolores. Non voluptatem ipsam eos sunt eos.', 55574, 657, 41, 139, 506, 570, 'impedit', '1977-09-28 01:36:26', '1994-04-23 04:28:25'),
(14, 'Dolor voluptates illo.', 'sint-ipsam-adipisci-pariatur', 1, 'https://via.placeholder.com/640x480.png/001177?text=voluptatem', 'Ipsam eos nam nihil blanditiis voluptatem. Aspernatur corporis voluptate explicabo provident id maiores non. Quibusdam quia reprehenderit laudantium labore.', 90247, 958, 84, 190, 632, 764, 'dolore', '1985-04-15 05:34:57', '1981-08-31 22:53:07'),
(15, 'Quidem vero ut.', 'consequatur-a-eius-maiores-omnis-rem-rem', 2, 'https://via.placeholder.com/640x480.png/004411?text=quod', 'Reprehenderit voluptatem at eos sunt sit hic facilis. Iure quod enim deserunt et.', 75200, 624, 59, 181, 985, 414, 'tenetur', '2007-04-09 23:16:34', '1992-10-24 00:10:31'),
(16, 'Eos est earum.', 'ab-aut-ut-nulla-laudantium-eum-maxime', 9, 'https://via.placeholder.com/640x480.png/00cc00?text=hic', 'Possimus officia voluptatem modi sequi rerum inventore. Harum impedit dolores ut earum voluptatem. Voluptatibus voluptatem ipsam autem.', 37452, 942, 91, 124, 451, 435, 'quis', '1988-09-28 04:39:54', '1973-07-20 07:53:34'),
(17, 'Aut sunt velit ut dolores.', 'mollitia-quibusdam-dolorem-nam-sed-repellat-ut-non', 3, 'https://via.placeholder.com/640x480.png/00aa88?text=rerum', 'Et ut adipisci temporibus rem enim ipsum tempora provident. Vero ea culpa soluta voluptas labore sint aut quibusdam. Soluta rerum qui sed earum minima possimus autem vitae.', 84562, 889, 45, 163, 866, 902, 'et', '1992-12-23 21:12:32', '2019-10-06 13:40:01'),
(18, 'Itaque corporis vitae exercitationem.', 'quo-possimus-ut-dolores-et', 6, 'https://via.placeholder.com/640x480.png/009977?text=nemo', 'Aut et qui et ex laudantium fugit quaerat error. Quos est nisi aspernatur sequi. Ipsum dolore id corrupti repellat placeat temporibus et. Dolorem inventore consequuntur rerum non qui.', 96704, 123, 73, 112, 537, 893, 'aut', '1985-04-08 03:19:23', '2004-10-23 19:23:42'),
(19, 'Voluptatem consectetur voluptatem.', 'sit-aut-alias-exercitationem-culpa-accusamus-aspernatur', 0, 'https://via.placeholder.com/640x480.png/0055bb?text=dolorem', 'Vitae officiis dolorem nihil sunt error dolores. Rerum quasi ut perferendis voluptas voluptatem. Perferendis fuga velit a aut.', 60612, 791, 100, 107, 397, 95, 'ratione', '1979-06-25 09:11:13', '2019-10-25 07:51:16'),
(20, 'Autem quis eum est.', 'nihil-ipsam-autem-mollitia-quia-iusto', 3, 'https://via.placeholder.com/640x480.png/003311?text=facere', 'Cum excepturi enim ut et quisquam. Dolorem molestiae repudiandae eos error. Iusto eaque inventore laudantium libero distinctio.', 30156, 790, 25, 138, 986, 572, 'accusantium', '2008-06-21 09:18:38', '2014-09-24 13:01:50'),
(21, 'Новый товар555', 'novyi-tovar555', 1, '/uploads/products/novyi-tovar555-24112022-1462258637.jpg', '<p>Новый товар555</p>', 6745674678, 5, 10, 11, NULL, NULL, NULL, '2022-11-24 15:27:44', '2022-11-24 15:27:44');

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicated_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `city`, `text`, `publicated_at`, `created_at`, `updated_at`) VALUES
(1, 'Loraine Marvin', 'Wendellmouth', 'Recusandae sed dolor minima aut. Quos ea exercitationem autem. Delectus sed ipsum omnis nam.', '2022-11-24 20:14:17', '1999-03-31 04:09:53', '1983-05-27 21:28:29'),
(2, 'Mrs. Joanne Stracke Jr.', 'Port Celinetown', 'A nam consequuntur rerum provident qui modi. Atque dolor est quis optio minima quaerat assumenda.', '2022-11-24 20:14:17', '1996-03-27 09:49:15', '2018-11-11 21:38:20'),
(3, 'Lue Runolfsson III', 'Fidelborough', 'Error nihil non omnis nihil culpa. Repellendus eveniet asperiores iste veniam minus ullam.', '2022-11-24 20:14:17', '2017-08-31 17:25:16', '1989-12-02 20:06:26'),
(4, 'Prof. Jaylen Pouros V', 'Jewelberg', 'Ipsam veritatis culpa in. Ab sapiente impedit in nulla.', '2022-11-24 20:14:17', '2000-01-13 10:13:32', '1996-11-19 01:42:43'),
(5, 'Pablo Grady', 'South Jedidiahmouth', 'Eos architecto suscipit quia sit. Voluptatem ut magnam sed rerum deserunt nemo.', '2022-11-24 20:14:17', '1992-07-07 02:24:37', '1989-06-14 06:55:45'),
(6, 'Mr. Cole Robel', 'Lilachester', 'Eum quasi quaerat nihil cum. Eligendi tempora veniam molestiae quae. Aut debitis autem qui eum.', '2022-11-24 20:14:17', '2014-12-27 11:48:01', '1977-11-14 21:23:08'),
(7, 'Mr. Dereck Sauer I', 'Kingtown', 'Eius a doloremque maxime blanditiis libero et in. Et quia aspernatur omnis est sunt.', '2022-11-24 20:14:17', '2015-12-04 07:53:13', '2017-12-25 01:48:33'),
(8, 'Jamal Lemke DDS', 'Rauberg', 'Et aspernatur sit aut delectus delectus. Et sit necessitatibus adipisci consectetur qui.', '2022-11-24 20:14:17', '1978-03-25 08:21:21', '1984-06-14 19:05:06'),
(9, 'Prof. Jesse Grant IV', 'New Adelinebury', 'Autem expedita asperiores voluptates et eveniet. Rerum ut sed ullam.', '2022-11-24 20:14:17', '1980-10-05 10:02:25', '1982-10-29 07:38:34'),
(10, 'Barton Grimes', 'North Mabelmouth', 'Consequatur nihil molestiae similique in. Alias voluptatem et molestiae eum et.', '2022-11-24 20:14:17', '2018-12-04 22:56:27', '1986-07-10 02:31:54'),
(11, 'Camren Mitchell', 'Haleyfurt', 'Provident deserunt ab voluptatibus eaque. Commodi ut sed cum et quam omnis consectetur.', '2022-11-24 20:14:17', '1995-06-02 20:56:34', '1993-04-04 09:09:54'),
(12, 'Clarabelle Jacobson', 'Zeldafurt', 'Ipsum vero et ut molestias eos aperiam saepe. Illo in a modi earum ipsa corporis.', '2022-11-24 20:14:17', '1979-11-10 21:48:06', '1971-11-19 10:30:38'),
(13, 'Georgiana Torp Sr.', 'East Wiley', 'Quis eos iure qui deleniti. Labore sit dolor eos est. Molestiae aut ea sapiente odit nisi non.', '2022-11-24 20:14:18', '2002-01-24 02:52:14', '1970-02-15 00:26:09'),
(14, 'Ms. Mallie Quitzon', 'North William', 'Ratione asperiores enim et id corporis nobis unde. Officia ab qui consequuntur dolor vel est cum.', '2022-11-24 20:14:18', '1994-03-03 01:00:22', '2010-05-05 12:08:47'),
(15, 'Therese Haag PhD', 'Borisport', 'Quasi beatae a assumenda aperiam excepturi. Et distinctio est ipsa. Et ipsum deleniti excepturi ea.', '2022-11-24 20:14:18', '1983-04-07 13:51:07', '1981-12-04 18:43:28'),
(16, 'Nadia Crooks', 'New Chelsieshire', 'Et dolorem fuga aut. Quia quo quis porro tempora reprehenderit.', '2022-11-24 20:14:18', '2022-08-30 18:26:26', '2010-01-07 07:34:16'),
(17, 'Adele Frami', 'Dorotheafort', 'Repellendus vero corporis sit. Perferendis ut minima esse voluptas perspiciatis.', '2022-11-24 20:14:18', '1985-03-09 21:09:40', '1980-09-29 22:21:40'),
(18, 'Fidel Willms', 'Turnerside', 'Eos commodi ipsa optio nisi. Iste placeat quae nihil cumque.', '2022-11-24 20:14:18', '2013-01-24 20:47:25', '2015-02-06 19:53:36'),
(19, 'Tyree Greenholt', 'West Kennaborough', 'Quo sit dicta aut maiores consequatur. Autem quibusdam qui placeat nulla.', '2022-11-24 20:14:18', '1976-08-16 07:47:24', '1991-10-15 02:14:02'),
(20, 'Prof. Sasha Parisian V', 'Lake Daphne', 'Laboriosam rerum sint illo voluptatem neque. Tempore error eaque neque vel itaque.', '2022-11-24 20:14:18', '2018-10-01 23:42:02', '2022-06-21 14:24:37');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. Katrine Ullrich DDS', 'eliseo.hegmann@example.net', '2022-11-24 15:14:16', '$2y$10$X/IGeXQnLhPHCVOrm/aWo.LHMXh1MBnVL8SYyW.6eq/fiprbUrvpi', 'iVcbJI1YKd', '2022-11-24 15:14:17', '2022-11-24 15:14:17'),
(2, 'Eda Schmidt', 'cortney.bernier@example.com', '2022-11-24 15:14:17', '$2y$10$eRP8CEwg1K3yqHksoZcCK.oxSqO4ponPE71lmWqm61vA8olbFR6lC', 'KQ8n9u0ZlH', '2022-11-24 15:14:17', '2022-11-24 15:14:17'),
(3, 'Scottie Leuschke IV', 'doyle.susan@example.net', '2022-11-24 15:14:17', '$2y$10$Ec/xdC.i.JPZiA9fHw3RGuG11WYkASCNnCHAyRquA5TRNZNUd7uBm', 'WlEDelAokf', '2022-11-24 15:14:17', '2022-11-24 15:14:17');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Индексы таблицы `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_product_id_foreign` (`product_id`),
  ADD KEY `galleries_image_index` (`image`);

--
-- Индексы таблицы `mainnews`
--
ALTER TABLE `mainnews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mainnews_slug_unique` (`slug`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `password_resets_admin`
--
ALTER TABLE `password_resets_admin`
  ADD KEY `password_resets_admin_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Индексы таблицы `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT для таблицы `mainnews`
--
ALTER TABLE `mainnews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
