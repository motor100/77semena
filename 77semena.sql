-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 26 2022 г., 22:01
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
(1, 'Mr. Rodrick Howe', 'peter.rutherford', 'purdy.nathanial@example.com', '2022-11-26 13:30:31', '$2y$10$tYl8hea4hG.oLh1Lu.ACG.9P.fHaui9RP9L8S5allyXQUCV8gMahu', '28dy9xwLwi', '2022-11-26 13:30:31', '2022-11-26 13:30:31'),
(2, 'Velva Spinka', 'breichel', 'pouros.thelma@example.org', '2022-11-26 13:30:31', '$2y$10$YY.MuZTmt/8IgrX.wHaUCukObQG42I8n5TF7xFg.3V6yh.VQ.OEyS', '1VsGnoNJp4', '2022-11-26 13:30:31', '2022-11-26 13:30:31'),
(3, 'Mr. Odell Rolfson', 'alena83', 'cbarrows@example.net', '2022-11-26 13:30:31', '$2y$10$JykGxqS18Dy1XJTloEzTP.yLoprG58G/NdFGPtKuqmarjTU33uMb6', 'M6rL3K0Ggh', '2022-11-26 13:30:31', '2022-11-26 13:30:31');

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
(1, 0, 'Семена', 'semena', '2022-11-26 13:30:33', '2022-11-26 13:30:33'),
(2, 0, 'Агрохимия', 'agrohimiya', '2022-11-26 13:30:33', '2022-11-26 13:30:33'),
(3, 1, 'Огурцы', 'ogurcy', '2022-11-26 13:30:33', '2022-11-26 13:30:33'),
(4, 1, 'Перцы', 'percy', '2022-11-26 13:30:33', '2022-11-26 13:30:33'),
(5, 1, 'Томаты', 'tomaty', '2022-11-26 13:30:33', '2022-11-26 13:30:33'),
(6, 1, 'Овощи', 'ovoshchi', '2022-11-26 13:30:33', '2022-11-26 13:30:33'),
(7, 1, 'Газон', 'gazon', '2022-11-26 13:30:33', '2022-11-26 13:30:33'),
(8, 1, 'Цветы', 'cvety', '2022-11-26 13:30:33', '2022-11-26 13:30:33'),
(9, 1, 'Ягоды', 'yagody', '2022-11-26 13:30:33', '2022-11-26 13:30:33');

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `title`, `region`, `created_at`, `updated_at`) VALUES
(1, 'Миасс', 'Челябинская область', '2005-05-25 23:15:54', '1978-02-04 00:31:31'),
(2, 'Златоуст', 'Челябинская область', '2013-08-07 17:59:40', '1972-06-09 06:43:38'),
(3, 'Чебаркуль', 'Челябинская область', '2001-04-23 22:09:37', '2008-09-23 01:08:59'),
(4, 'Челябинск', 'Челябинская область', '1979-05-16 07:29:07', '1973-06-13 13:09:41'),
(5, 'Магнитогорск', 'Челябинская область', '1996-09-01 12:43:52', '2006-03-06 18:45:03');

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
(1, 14, 'https://via.placeholder.com/640x480.png/003388?text=quibusdam', '1993-02-20 06:32:44', '1971-11-10 02:13:26'),
(2, 14, 'https://via.placeholder.com/640x480.png/003366?text=ut', '1974-11-23 15:17:09', '1973-01-14 08:54:59'),
(3, 6, 'https://via.placeholder.com/640x480.png/008866?text=possimus', '1973-09-02 19:03:45', '1985-08-15 23:41:14'),
(4, 4, 'https://via.placeholder.com/640x480.png/0088ff?text=repellendus', '1975-11-20 07:02:00', '2002-10-02 09:15:31'),
(5, 5, 'https://via.placeholder.com/640x480.png/00ccdd?text=voluptatem', '2021-04-01 13:50:32', '2006-05-28 03:10:15'),
(6, 20, 'https://via.placeholder.com/640x480.png/002299?text=libero', '1992-07-05 06:57:56', '1983-06-06 13:44:01'),
(7, 4, 'https://via.placeholder.com/640x480.png/0088bb?text=nemo', '1998-10-23 12:34:39', '1973-06-23 00:57:11'),
(8, 20, 'https://via.placeholder.com/640x480.png/000099?text=perferendis', '2017-05-20 08:16:46', '2014-05-10 16:47:48'),
(9, 7, 'https://via.placeholder.com/640x480.png/00bb00?text=dolorem', '2002-04-23 19:17:48', '2017-03-22 11:22:21'),
(10, 5, 'https://via.placeholder.com/640x480.png/0022ff?text=error', '1984-06-09 03:59:43', '1984-12-19 20:23:34'),
(11, 8, 'https://via.placeholder.com/640x480.png/003399?text=incidunt', '1971-07-30 06:10:07', '1998-10-21 15:12:44'),
(12, 12, 'https://via.placeholder.com/640x480.png/0077dd?text=quis', '1971-11-07 07:56:55', '1993-10-08 18:59:41'),
(13, 10, 'https://via.placeholder.com/640x480.png/000000?text=odio', '1970-09-20 05:45:58', '2014-06-16 23:29:05'),
(14, 9, 'https://via.placeholder.com/640x480.png/0011aa?text=eum', '2020-03-14 15:47:31', '1976-02-24 13:50:57'),
(15, 20, 'https://via.placeholder.com/640x480.png/004400?text=sit', '1976-07-20 07:37:31', '2004-07-03 17:00:54'),
(16, 12, 'https://via.placeholder.com/640x480.png/00ff55?text=est', '1990-12-10 00:52:16', '1995-08-09 16:29:52'),
(17, 18, 'https://via.placeholder.com/640x480.png/0011dd?text=ut', '2013-10-11 12:59:38', '1977-06-09 07:21:15'),
(18, 9, 'https://via.placeholder.com/640x480.png/00bbcc?text=dolores', '1995-10-11 00:12:28', '1972-06-03 13:03:59'),
(19, 12, 'https://via.placeholder.com/640x480.png/0022ee?text=ut', '2020-11-14 03:20:32', '2011-05-23 20:01:48'),
(20, 18, 'https://via.placeholder.com/640x480.png/003388?text=aut', '1973-05-09 05:40:25', '2011-03-26 11:14:09'),
(21, 6, 'https://via.placeholder.com/640x480.png/0022dd?text=aut', '2013-09-16 12:30:08', '1981-07-18 16:07:38'),
(22, 13, 'https://via.placeholder.com/640x480.png/0033bb?text=est', '1994-12-23 04:41:21', '1985-09-07 07:08:50'),
(23, 10, 'https://via.placeholder.com/640x480.png/007788?text=sint', '2002-10-13 09:41:29', '1992-02-26 09:34:36'),
(24, 16, 'https://via.placeholder.com/640x480.png/003388?text=quo', '1998-08-24 00:51:41', '2020-11-26 21:29:06'),
(25, 1, 'https://via.placeholder.com/640x480.png/001177?text=ratione', '2005-10-31 04:17:25', '2016-06-21 13:32:43'),
(26, 20, 'https://via.placeholder.com/640x480.png/009933?text=aut', '2012-10-22 09:52:42', '1984-04-15 02:04:47'),
(27, 17, 'https://via.placeholder.com/640x480.png/00eebb?text=numquam', '1972-08-27 07:56:52', '2014-10-26 06:46:54'),
(28, 3, 'https://via.placeholder.com/640x480.png/004477?text=voluptates', '1996-09-01 09:55:07', '1987-01-24 14:29:58'),
(29, 2, 'https://via.placeholder.com/640x480.png/00bbaa?text=aperiam', '1983-10-02 10:17:21', '2004-08-17 21:40:28'),
(30, 16, 'https://via.placeholder.com/640x480.png/009922?text=odio', '1990-05-15 04:41:55', '2000-06-25 02:25:14'),
(31, 15, 'https://via.placeholder.com/640x480.png/004411?text=numquam', '1991-08-19 09:51:09', '2006-12-21 23:17:30'),
(32, 8, 'https://via.placeholder.com/640x480.png/000077?text=dolore', '1970-08-11 20:32:45', '1991-04-29 18:21:18'),
(33, 19, 'https://via.placeholder.com/640x480.png/007777?text=pariatur', '1972-03-28 10:49:46', '2017-10-24 17:06:02'),
(34, 4, 'https://via.placeholder.com/640x480.png/009900?text=totam', '1991-09-24 09:13:24', '2011-03-14 12:14:19'),
(35, 5, 'https://via.placeholder.com/640x480.png/00dd00?text=earum', '2022-02-22 11:28:11', '2000-11-25 11:24:51'),
(36, 18, 'https://via.placeholder.com/640x480.png/000000?text=voluptatem', '1977-02-27 02:38:51', '1980-05-16 16:34:23'),
(37, 15, 'https://via.placeholder.com/640x480.png/00dd99?text=rerum', '1997-10-22 11:58:29', '2021-02-19 15:59:58'),
(38, 9, 'https://via.placeholder.com/640x480.png/0088dd?text=officia', '1999-01-27 05:35:57', '2007-02-01 07:15:02'),
(39, 15, 'https://via.placeholder.com/640x480.png/002288?text=doloremque', '1986-04-14 04:56:53', '2012-02-01 15:10:54'),
(40, 8, 'https://via.placeholder.com/640x480.png/007744?text=alias', '2011-08-15 04:29:11', '1982-10-19 17:58:03'),
(41, 4, 'https://via.placeholder.com/640x480.png/002211?text=est', '2003-11-17 05:53:06', '2011-05-30 09:33:03'),
(42, 1, 'https://via.placeholder.com/640x480.png/00ee88?text=culpa', '2012-02-12 07:53:05', '2020-07-26 06:33:20'),
(43, 10, 'https://via.placeholder.com/640x480.png/0044aa?text=minima', '1993-04-10 12:53:42', '1987-12-15 23:57:26'),
(44, 15, 'https://via.placeholder.com/640x480.png/0044bb?text=iure', '1988-07-20 09:33:41', '2008-10-27 23:00:39'),
(45, 4, 'https://via.placeholder.com/640x480.png/009933?text=et', '2014-09-17 08:38:43', '2021-12-16 20:21:40'),
(46, 2, 'https://via.placeholder.com/640x480.png/00ffcc?text=eligendi', '1996-08-03 06:07:30', '1992-05-18 00:43:47'),
(47, 16, 'https://via.placeholder.com/640x480.png/007777?text=quisquam', '2005-09-03 10:32:34', '1970-05-23 04:17:36'),
(48, 3, 'https://via.placeholder.com/640x480.png/003311?text=et', '1982-08-07 08:42:26', '1982-05-31 08:25:10'),
(49, 1, 'https://via.placeholder.com/640x480.png/00dd99?text=veniam', '1989-01-15 18:07:25', '2009-09-02 07:49:43'),
(50, 2, 'https://via.placeholder.com/640x480.png/008866?text=explicabo', '2005-01-01 22:37:01', '2019-02-14 17:43:19');

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
(1, 'Voluptate similique ullam libero nesciunt est cum est.', 'explicabo-eos-sit-autem-non-sed', 'https://via.placeholder.com/640x480.png/00ccff?text=ut', 'Illo nihil amet enim voluptas. Nihil quod et nulla voluptate. Culpa ut est a dolor et dicta nihil.', '1970-11-05 18:33:50', '2006-01-22 09:09:20'),
(2, 'Iusto cumque voluptatem voluptates aut.', 'omnis-non-et-necessitatibus-optio', 'https://via.placeholder.com/640x480.png/0022bb?text=neque', 'Sunt natus totam illo et. Error et odio id dolores consequuntur porro omnis.', '1983-04-21 15:31:32', '2019-12-31 10:09:15'),
(3, 'Omnis et aut et commodi rerum cupiditate.', 'asperiores-voluptas-iusto-molestiae-corporis-sunt-rerum-voluptatum', 'https://via.placeholder.com/640x480.png/002211?text=dolore', 'Odit porro voluptas nobis at. Facilis officiis debitis deleniti tenetur excepturi.', '1976-02-25 06:22:35', '1980-06-08 16:14:11'),
(4, 'Aut soluta earum distinctio.', 'sint-quo-autem-hic-ut-suscipit-id', 'https://via.placeholder.com/640x480.png/006666?text=aut', 'Et et amet totam inventore est vel. Sit eum et qui unde et. Esse quis libero omnis quidem.', '1970-09-19 16:31:32', '1989-08-25 10:25:28'),
(5, 'Recusandae possimus cumque voluptas quibusdam et dolor.', 'molestiae-voluptates-autem-maiores-est-voluptatibus-illum', 'https://via.placeholder.com/640x480.png/008855?text=modi', 'Autem ut consequatur alias nisi aut sequi qui ad. Hic eos suscipit debitis. Omnis aut eum nihil.', '2010-04-24 11:50:43', '1986-04-01 13:02:01'),
(6, 'Officia et aliquid quidem.', 'esse-vel-necessitatibus-sint-quidem-voluptate-id-impedit', 'https://via.placeholder.com/640x480.png/00ff22?text=voluptatem', 'Cupiditate itaque temporibus ut. Vel qui in perferendis. Voluptas magnam a voluptatem et aut vero.', '1970-02-25 14:59:25', '2019-04-26 12:17:49'),
(7, 'Ex accusantium et et maxime enim.', 'quas-est-saepe-amet-id-aperiam-quod-nihil', 'https://via.placeholder.com/640x480.png/0044cc?text=quis', 'Sed odio reiciendis quae sunt sit ut. Ab et et est ad. Quia eos et ipsa et et.', '1982-06-30 18:55:10', '2014-05-29 16:38:37'),
(8, 'Laboriosam vel et excepturi eius non.', 'est-perferendis-minus-porro', 'https://via.placeholder.com/640x480.png/005599?text=explicabo', 'Vel dolorem ipsa sit enim est nobis saepe. Similique laudantium vitae inventore.', '1997-10-19 20:45:03', '1986-03-27 01:04:49'),
(9, 'Atque esse non perferendis aut.', 'aut-quia-fugit-dolor-aspernatur-dolores', 'https://via.placeholder.com/640x480.png/00ccaa?text=modi', 'Est qui necessitatibus neque magnam voluptatibus. Rerum voluptatum aliquam provident pariatur.', '1970-03-15 04:38:14', '1998-10-07 13:34:05'),
(10, 'Alias vero voluptatem itaque quia esse.', 'omnis-distinctio-aut-dolores-aut-unde', 'https://via.placeholder.com/640x480.png/00ff88?text=ipsa', 'Consequatur magnam aperiam est fuga et neque vitae. Amet labore autem autem eum et.', '1988-04-28 06:35:38', '2015-06-02 20:15:10'),
(11, 'Dolor ut porro ut et consequuntur illum.', 'eos-voluptates-eius-possimus-et', 'https://via.placeholder.com/640x480.png/00dd66?text=atque', 'Illo est aperiam velit dicta culpa. Voluptas in voluptates beatae maiores sed eum officiis.', '1980-04-07 12:06:11', '2012-04-28 18:32:44'),
(12, 'Ea optio omnis possimus voluptatum maiores est ut esse.', 'saepe-ut-sunt-non-velit-eum-nisi-neque-sunt', 'https://via.placeholder.com/640x480.png/004411?text=sit', 'Quia aut ut omnis maxime. Aperiam esse numquam tempore porro magnam fugit.', '1989-05-13 06:31:33', '1985-05-23 10:07:43'),
(13, 'Hic veniam aut rerum.', 'explicabo-fugiat-nesciunt-consequatur-dicta-sapiente', 'https://via.placeholder.com/640x480.png/00bbaa?text=id', 'A hic est sed provident. Est aut distinctio totam recusandae.', '2004-07-30 08:12:24', '1985-05-26 20:58:48'),
(14, 'Qui dolores tempora dignissimos in dolorem pariatur aut.', 'odio-incidunt-odit-explicabo-ex-nobis', 'https://via.placeholder.com/640x480.png/00aa22?text=nisi', 'Numquam sunt qui autem ea. Unde quas qui quo et. Molestiae quia laborum aut nisi.', '2001-02-21 09:52:33', '1993-07-26 03:46:21'),
(15, 'Tempore ut et corporis architecto quo repellendus.', 'facilis-fugit-assumenda-occaecati-ipsum-minus-nam-voluptas', 'https://via.placeholder.com/640x480.png/007777?text=aut', 'Ipsum quidem autem occaecati nisi culpa excepturi non. Explicabo in fugit consequatur est odio.', '1977-07-15 12:39:40', '1985-01-14 11:38:41'),
(16, 'Earum harum est iusto praesentium quae quis voluptate.', 'laboriosam-ut-est-omnis-omnis-rem-omnis', 'https://via.placeholder.com/640x480.png/00eebb?text=odit', 'Magni repellendus nisi reprehenderit autem. Dolorem libero quasi deleniti at. Magnam ipsa unde in.', '2022-08-13 22:17:30', '2000-08-15 23:13:33'),
(17, 'Libero expedita quaerat aut recusandae eos omnis hic.', 'omnis-dolor-saepe-recusandae-optio-consequatur', 'https://via.placeholder.com/640x480.png/007799?text=distinctio', 'Dolores nobis ut culpa quia nulla et et minus. Et ea voluptas possimus cupiditate.', '1991-12-26 18:24:08', '1988-06-20 09:44:00'),
(18, 'Omnis illo in qui accusamus quod eum eveniet.', 'autem-iste-illum-explicabo-ut-autem-voluptatem-ipsa-esse', 'https://via.placeholder.com/640x480.png/005544?text=sint', 'Illo repellendus saepe est. Maiores in a ducimus numquam. Itaque quo sed assumenda rerum ullam.', '1971-01-17 02:47:02', '1992-08-27 13:29:36'),
(19, 'Officia saepe qui aut earum expedita dolorum.', 'harum-et-repellendus-mollitia-quia', 'https://via.placeholder.com/640x480.png/001111?text=laboriosam', 'Vero incidunt natus recusandae. Dolor libero est quis numquam.', '1989-01-30 21:43:01', '2012-07-04 23:52:51'),
(20, 'Molestias omnis qui sequi voluptates soluta repellat.', 'cumque-nemo-rerum-similique', 'https://via.placeholder.com/640x480.png/00ff99?text=qui', 'Velit quisquam reprehenderit voluptatem. Et natus fuga omnis suscipit laborum.', '2001-03-12 18:49:24', '2004-03-01 06:36:23');

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
(14, '2022_11_23_192512_create_categories_table', 1),
(15, '2022_11_26_141331_create_offices_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `time_weekday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_saturday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_sunday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `offices`
--

INSERT INTO `offices` (`id`, `city_id`, `title`, `address`, `description`, `time_weekday`, `time_saturday`, `time_sunday`, `created_at`, `updated_at`) VALUES
(1, 1, 'Дачник', 'ул. 8 Июля, 1', 'Вход с торца\r\nКрасная вывеска', '10-18', '10-18', '10-17', '2022-11-26 13:31:37', '2022-11-26 13:52:10');

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
(1, 'Consequatur itaque sed.', 'qui-placeat-a-dolor-rerum-earum-rem-neque-ut', 6, 'https://via.placeholder.com/640x480.png/008855?text=quidem', 'Similique non omnis sapiente alias maxime sit sint dignissimos. Voluptatum ut voluptatibus eos est. Aut rem praesentium et.', 66145, 39, 47, 200, 783, 61, 'est', '2010-04-23 16:11:58', '2005-04-11 18:34:14'),
(2, 'Odit corrupti.', 'hic-perferendis-enim-velit', 2, 'https://via.placeholder.com/640x480.png/006633?text=illo', 'Illum quos aut sint aut incidunt. Aut error beatae voluptatem. Corrupti et et voluptatem aspernatur molestiae rerum.', 49187, 348, 11, 127, 506, 667, 'et', '1999-05-08 11:48:00', '1993-09-28 23:26:54'),
(3, 'Non dignissimos quibusdam non iure.', 'numquam-laboriosam-distinctio-aperiam-facilis', 2, 'https://via.placeholder.com/640x480.png/009955?text=neque', 'Nam et sint necessitatibus incidunt. Dolorum qui sed distinctio a molestiae.', 77042, 608, 35, 180, 829, 84, 'officiis', '1973-03-05 08:57:36', '1973-09-27 16:05:05'),
(4, 'Eaque tempora perspiciatis.', 'ut-porro-deleniti-libero-accusantium', 6, 'https://via.placeholder.com/640x480.png/00bbaa?text=earum', 'Voluptatem rem et ut. Deleniti aliquam vel magni eum quisquam. Ratione magni laboriosam aut consequatur doloribus. Molestiae quos nulla ut aut cum qui consequuntur ab.', 17427, 865, 62, 169, 762, 37, 'voluptas', '2014-01-18 08:08:06', '2018-02-24 17:24:34'),
(5, 'Dolores voluptatem debitis.', 'eaque-deleniti-dolorum-non-ex', 1, 'https://via.placeholder.com/640x480.png/00ff77?text=iure', 'Et ex quibusdam quis ipsa perspiciatis. Rem ut exercitationem voluptates voluptatibus error recusandae vel. Consectetur aut deserunt aliquid voluptate et non reiciendis consequatur.', 92013, 602, 98, 109, 536, 21, 'dignissimos', '1995-07-30 04:24:25', '2005-04-27 10:11:39'),
(6, 'Ea dolor temporibus.', 'assumenda-porro-ea-assumenda-culpa-soluta', 5, 'https://via.placeholder.com/640x480.png/00bb88?text=fugit', 'Rerum aliquid ab nostrum non tempore dolorem. Asperiores fugit quasi et natus.', 56461, 13, 95, 108, 901, 510, 'sunt', '1975-04-12 04:09:09', '2010-09-24 20:29:07'),
(7, 'Iste vero aut.', 'aspernatur-repellendus-saepe-eveniet-accusamus', 5, 'https://via.placeholder.com/640x480.png/00eeff?text=voluptas', 'Sed error quia vel animi consequatur est. Neque voluptatum sint earum necessitatibus. Ut et consequatur nam enim quas. Nam dolor impedit delectus optio. Est unde voluptatem nulla odit repudiandae.', 33407, 982, 2, 151, 675, 735, 'pariatur', '2018-09-30 04:47:03', '1993-02-23 20:37:47'),
(8, 'Voluptatem tempore nesciunt maxime ullam.', 'et-unde-itaque-quidem-ad-qui-qui-temporibus-incidunt', 0, 'https://via.placeholder.com/640x480.png/0033ee?text=laudantium', 'Autem itaque et dignissimos commodi architecto. Quasi nemo aut dolor. Deserunt quia sed amet cupiditate necessitatibus.', 95480, 303, 92, 131, 786, 476, 'facere', '2006-12-27 06:35:16', '1986-01-24 08:52:02'),
(9, 'Aliquam nisi qui culpa.', 'earum-perspiciatis-in-sit-excepturi-laudantium-nesciunt-rerum', 0, 'https://via.placeholder.com/640x480.png/000055?text=accusamus', 'Esse architecto omnis occaecati ea porro dicta. Qui omnis quam alias ea. Odio omnis eos distinctio sit aut quia.', 68060, 133, 39, 192, 497, 616, 'est', '1997-04-11 14:09:29', '1975-01-19 00:47:24'),
(10, 'Sit modi soluta.', 'pariatur-velit-eaque-voluptates-sunt-voluptates', 2, 'https://via.placeholder.com/640x480.png/00aa11?text=totam', 'Necessitatibus et quidem ut quia. Et et amet aut quis. Nemo voluptatem velit et minus. In rem sunt provident praesentium. Ad vero animi non est.', 26428, 258, 44, 159, 629, 454, 'corporis', '1995-12-27 17:09:25', '2019-03-25 21:17:15'),
(11, 'Reiciendis et ut.', 'dicta-voluptates-ex-ratione-fugiat-blanditiis-modi-perferendis', 8, 'https://via.placeholder.com/640x480.png/0055aa?text=voluptatum', 'Voluptatem fugiat vitae soluta magnam. Dicta tempora rerum cupiditate amet at vero. Rerum placeat corrupti omnis illo sit vitae. Qui repellat aspernatur suscipit est aut.', 65818, 483, 49, 173, 866, 534, 'quos', '1995-08-29 12:45:34', '2001-12-24 20:06:43'),
(12, 'Explicabo delectus fugiat sed.', 'veritatis-nam-aut-velit-molestiae-laborum-optio', 9, 'https://via.placeholder.com/640x480.png/00dd77?text=est', 'Iure ea aut id. Maxime et aut deleniti placeat aut laborum quis. At ratione aut libero eum. Et id non autem iste fuga qui dolor.', 82993, 429, 58, 188, 496, 364, 'laboriosam', '1978-04-20 19:30:39', '1973-02-08 20:36:35'),
(13, 'Incidunt error similique et.', 'dolore-et-velit-cumque-iure', 3, 'https://via.placeholder.com/640x480.png/0011ee?text=repellendus', 'Consequuntur enim est odit amet. Repellendus eum reprehenderit quasi adipisci necessitatibus et sit. Rerum odio enim at quibusdam.', 72220, 714, 66, 155, 154, 808, 'facilis', '1981-03-24 19:02:56', '1988-02-27 15:33:58'),
(14, 'Nesciunt magnam corporis est.', 'exercitationem-deserunt-culpa-architecto', 0, 'https://via.placeholder.com/640x480.png/001111?text=odit', 'Dolore ex iste perspiciatis repellendus voluptate sunt. Sit velit deleniti saepe saepe voluptatem nulla consectetur. Molestiae saepe non omnis.', 80766, 744, 78, 115, 5, 545, 'ullam', '2012-01-09 09:25:12', '2010-08-12 06:00:17'),
(15, 'Eum libero nemo labore.', 'blanditiis-reiciendis-consequatur-et-dolorem-autem-qui-et-ullam', 2, 'https://via.placeholder.com/640x480.png/00aa66?text=est', 'Culpa alias veritatis quasi corporis sunt qui. Beatae ut sed eum aperiam tenetur perferendis. Qui nisi voluptatibus eum qui dolor omnis. A optio repellendus et consectetur excepturi soluta rerum.', 97951, 305, 6, 151, 137, 942, 'nulla', '1972-10-12 08:00:33', '1978-05-21 09:20:36'),
(16, 'Ea est error.', 'vitae-velit-suscipit-nihil-repellat', 4, 'https://via.placeholder.com/640x480.png/00bbee?text=voluptate', 'Tempora quis dolorem rerum consequatur quia. Repellendus in soluta soluta repellat dolores. Doloremque reiciendis voluptatibus nesciunt magnam soluta.', 56177, 541, 93, 136, 635, 829, 'ullam', '2003-07-23 07:48:05', '2004-10-08 14:24:34'),
(17, 'Quae accusantium nihil.', 'est-est-sed-amet-quaerat-enim', 5, 'https://via.placeholder.com/640x480.png/003311?text=asperiores', 'Sunt tempore consequatur eligendi placeat et qui. Distinctio mollitia deserunt quo quo et at id. In corporis non quia id maiores. Eveniet cumque fugit vel ut ea.', 56705, 171, 6, 103, 71, 891, 'molestiae', '1989-06-06 14:16:47', '2002-03-23 01:16:36'),
(18, 'Aut est et.', 'fuga-quaerat-quod-voluptatem-aut-dolor', 7, 'https://via.placeholder.com/640x480.png/00bb33?text=accusantium', 'Ipsam eveniet dolor quam. Veniam est et deserunt ut. Repellat nostrum similique quo et. Rerum voluptatem commodi molestiae aut eos.', 34069, 932, 4, 141, 792, 397, 'reprehenderit', '2010-06-06 05:28:55', '1984-12-15 16:58:09'),
(19, 'Expedita modi sint porro.', 'sint-totam-et-quia-officia-ut-ut-odio-numquam', 7, 'https://via.placeholder.com/640x480.png/004477?text=pariatur', 'Nobis et aliquam dicta id. Omnis corporis quo ratione qui et. Nostrum est accusamus ea excepturi a nulla.', 47976, 420, 77, 129, 817, 422, 'exercitationem', '1975-09-25 21:29:03', '2001-03-15 05:26:20'),
(20, 'Corporis omnis qui.', 'ea-sint-aut-cupiditate-quo-dolores-quas-reiciendis', 4, 'https://via.placeholder.com/640x480.png/0077ff?text=labore', 'Aut voluptatem nihil fugit ut consequatur rem est. At modi est blanditiis corporis aut in facilis. Dolore quia non aspernatur autem aspernatur.', 31974, 206, 21, 180, 895, 942, 'odio', '1975-07-20 00:05:54', '1989-03-09 17:41:13');

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
(1, 'Ivy Hilpert', 'South Julianne', 'Ab magnam eos iusto illum. Et blanditiis saepe quas. Debitis et eaque inventore.', '2022-11-26 18:30:30', '1988-03-01 06:41:19', '1998-12-22 13:41:58'),
(2, 'Concepcion Hirthe', 'Lubowitzville', 'Deserunt molestias fugit dolor et dignissimos. Esse praesentium autem aut nemo iusto.', '2022-11-26 18:30:30', '2004-03-01 13:38:52', '2011-04-22 10:17:45'),
(3, 'Felipe Bins', 'East Rainaland', 'Facere mollitia sit dolorem et libero at. Dolores nobis praesentium voluptas est ipsum aut eos eos.', '2022-11-26 18:30:30', '2000-10-14 13:49:34', '1971-10-10 07:45:44'),
(4, 'Vallie Jakubowski', 'New Magnusland', 'Placeat amet et est. Suscipit quia et delectus et et.', '2022-11-26 18:30:30', '1980-02-01 15:41:08', '1975-01-27 11:24:35'),
(5, 'Nestor Ratke', 'Port Malliestad', 'Ad cumque voluptatem voluptatem. Necessitatibus similique asperiores ab earum aut natus.', '2022-11-26 18:30:30', '1974-04-07 21:08:29', '2004-05-11 05:16:47'),
(6, 'Sincere Fahey I', 'Predovicbury', 'Et nostrum culpa earum quod ut. Enim dolor natus harum tempore.', '2022-11-26 18:30:30', '1982-03-02 18:22:18', '1995-11-08 03:17:55'),
(7, 'Marisa Hartmann', 'Rathtown', 'Aut rerum doloribus quia. Iste et dolores aperiam quia. Corporis blanditiis et nostrum.', '2022-11-26 18:30:30', '1973-07-13 15:35:06', '1977-07-23 03:39:01'),
(8, 'Alanna Robel', 'Rosalindtown', 'Odit dolor at velit quaerat aut. Sed voluptas qui aliquam eos voluptas est.', '2022-11-26 18:30:30', '2017-08-08 16:53:47', '2000-06-10 16:02:46'),
(9, 'Raquel Tillman', 'Glovertown', 'Voluptatem commodi tempore nam consectetur ut. Aut ducimus eos enim. Vel autem similique ratione.', '2022-11-26 18:30:30', '2005-07-15 15:25:52', '2011-07-04 03:01:10'),
(10, 'River Toy', 'East Lorinefurt', 'Et unde iure quisquam. Ut et aut voluptatem. Rerum magnam ipsam deserunt aperiam voluptates facere.', '2022-11-26 18:30:30', '1973-11-11 00:15:46', '1998-03-06 18:50:58'),
(11, 'Ethelyn Beier DDS', 'North Dorthaport', 'Nemo consequatur tenetur animi et facere beatae dolore. Sunt qui reiciendis voluptate omnis.', '2022-11-26 18:30:30', '2019-05-19 08:49:18', '1980-03-23 13:55:32'),
(12, 'Prof. Baylee DuBuque PhD', 'New Henriette', 'Laboriosam consequatur ipsum sequi et quos. Vel mollitia laboriosam reprehenderit vel quam in nisi.', '2022-11-26 18:30:30', '2002-07-31 19:34:24', '1995-09-01 06:36:36'),
(13, 'Maxime Roob Jr.', 'East Reese', 'Quam magni aperiam qui cum et soluta numquam. Animi ipsa pariatur est totam.', '2022-11-26 18:30:30', '1975-08-25 17:45:13', '2005-12-01 08:42:14'),
(14, 'Gerry Bashirian', 'Corwintown', 'Vero fugit iste quia. Fugiat quidem similique laudantium debitis voluptas soluta natus.', '2022-11-26 18:30:30', '1991-09-02 09:31:47', '1998-09-04 20:25:52'),
(15, 'Dr. German Bartell III', 'North Alexandretown', 'Dolor est ut ab et sint. Alias omnis ab cum. Labore officiis deleniti voluptas architecto.', '2022-11-26 18:30:30', '1998-10-14 16:03:11', '1977-05-20 18:16:25'),
(16, 'Deanna VonRueden', 'Brakustown', 'Eum amet ut at rerum eos. Ut dolore tempora ipsam exercitationem voluptas.', '2022-11-26 18:30:30', '2022-10-20 13:18:05', '2009-03-17 03:23:30'),
(17, 'Prof. Neva McKenzie', 'North Marcia', 'Commodi sapiente soluta sapiente. Laboriosam eos non nisi et ullam dolorum officiis.', '2022-11-26 18:30:30', '1979-01-25 07:01:58', '2021-11-09 02:57:08'),
(18, 'Brielle Okuneva DVM', 'Michealfort', 'Et optio rerum dolor omnis officia eaque. Voluptatibus voluptatem non sit dolore aut.', '2022-11-26 18:30:30', '1972-04-02 22:29:03', '2017-05-18 18:41:36'),
(19, 'Golden Marquardt', 'Kasandraberg', 'Consequatur eligendi consequatur est et aliquam illo. Et reiciendis veniam ad nam sint.', '2022-11-26 18:30:30', '2013-08-10 05:24:57', '2018-10-12 19:27:47'),
(20, 'Prof. Akeem O\'Hara', 'Claudietown', 'At numquam dolor unde qui. Nemo ullam quia quo iste. Placeat rem et sequi.', '2022-11-26 18:30:30', '1994-08-10 00:41:34', '2008-03-02 10:14:51');

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
(1, 'Nichole Moore', 'alf66@example.com', '2022-11-26 13:30:29', '$2y$10$U0x3TSoWG0ZLgw49N0I5IeCZ4LIj5JynLvwCnfL0B9Jluv20iJdjK', 'JWNfMjNCpG', '2022-11-26 13:30:29', '2022-11-26 13:30:29'),
(2, 'Sydnie Ward', 'sterry@example.com', '2022-11-26 13:30:29', '$2y$10$brDNoqT4Rn2dct0v9DcWv.3H89mWIR2bjcB59/WxICcT1OInJjYva', 'YS4JFVRFdE', '2022-11-26 13:30:30', '2022-11-26 13:30:30'),
(3, 'Timmothy Hagenes', 'morissette.lisandro@example.com', '2022-11-26 13:30:29', '$2y$10$lW8FzgI3WQuRe24YDgOgL.K1R8S7PmOSWl05AhzPQ28ruXc81bNTC', 'hMLadvAVzK', '2022-11-26 13:30:30', '2022-11-26 13:30:30');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cities_title_unique` (`title`);

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
-- Индексы таблицы `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offices_city_id_foreign` (`city_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `mainnews`
--
ALTER TABLE `mainnews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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

--
-- Ограничения внешнего ключа таблицы `offices`
--
ALTER TABLE `offices`
  ADD CONSTRAINT `offices_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
