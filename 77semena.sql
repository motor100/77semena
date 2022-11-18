-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 16 2022 г., 22:28
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
(1, 'Prof. Edmond O\'Reilly II', 'justen97', 'julio.langosh@example.org', '2022-11-16 12:41:53', '$2y$10$X1P2KY8mOAV8z.FnQTCwr./xnbwTTRmyUH1Cz0nvIZ1UtXtADDFmi', '8GAXlwWuIZ', '2022-11-16 12:41:54', '2022-11-16 12:41:54'),
(2, 'Ron Batz', 'mavis10', 'vena.kuhn@example.net', '2022-11-16 12:41:53', '$2y$10$XcY2gVmfAC5hR9XxGauO3.BEJi50Gt8dvUbjYqhjdyCCpVfO/EYkq', 'YqB8CkIlZn', '2022-11-16 12:41:54', '2022-11-16 12:41:54'),
(3, 'Kayla Parker', 'doyle.francis', 'jschamberger@example.com', '2022-11-16 12:41:54', '$2y$10$XqkbopFo4dQD0EuLtVK./uJJ/3.vL0H7QmpVHJUt211VZ1tHIpj7W', 'Zat2HM3ibT', '2022-11-16 12:41:54', '2022-11-16 12:41:54');

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `city`, `region`, `postal_code`, `created_at`, `updated_at`) VALUES
(1, 'Миасс', 'Челябинская область', 456300, '1980-06-13 09:41:50', '2022-05-31 19:15:29'),
(2, 'Златоуст', 'Челябинская область', 456200, '2012-03-11 05:59:04', '1986-06-19 06:43:54'),
(3, 'Чебаркуль', 'Челябинская область', 456440, '1990-07-14 13:35:57', '1987-04-01 10:52:12'),
(4, 'Челябинск', 'Челябинская область', 454000, '2015-01-19 08:08:50', '1985-04-21 16:06:00'),
(5, 'Магнитогорск', 'Челябинская область', 455000, '1997-12-08 14:52:00', '2014-02-18 14:50:46');

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
-- Структура таблицы `mainnews`
--

CREATE TABLE `mainnews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mainnews`
--

INSERT INTO `mainnews` (`id`, `title`, `slug`, `image`, `gallery`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Autem eum et aspernatur voluptatum quaerat debitis facere voluptatem.', 'sint-accusantium-sunt-rem-eum-maxime-quidem-cupiditate', 'https://via.placeholder.com/640x480.png/00dddd?text=nulla', NULL, 'Nemo sunt odio saepe enim. Rerum maxime quam maiores consequatur maiores tempora consectetur.', '1976-03-03 05:40:47', '1978-02-01 18:27:32'),
(2, 'Ullam animi explicabo repellendus et voluptas aut.', 'quas-sapiente-atque-aut', 'https://via.placeholder.com/640x480.png/007744?text=amet', NULL, 'Quas vel enim consectetur consectetur qui. Quis omnis eius voluptates.', '2003-11-05 03:24:18', '2005-10-21 19:35:44'),
(3, 'Et velit molestias ad voluptatem.', 'qui-eum-dolor-voluptates-veritatis', 'https://via.placeholder.com/640x480.png/00ee88?text=inventore', NULL, 'Quam quia modi ipsam reprehenderit. Reiciendis doloremque nihil officia et quos quod aliquam.', '2001-07-22 08:48:08', '2003-10-31 09:53:45'),
(4, 'Recusandae doloribus aspernatur quidem enim quos ad distinctio.', 'repudiandae-occaecati-dolores-soluta-est-dignissimos-dolorum-maiores-ullam', 'https://via.placeholder.com/640x480.png/0022dd?text=qui', NULL, 'Expedita dicta inventore iure voluptatem. Quaerat quibusdam sed sit sapiente cupiditate.', '2021-03-09 07:26:51', '1988-08-18 22:40:46'),
(5, 'Cum dolor qui totam reprehenderit.', 'et-aut-ratione-unde', 'https://via.placeholder.com/640x480.png/006677?text=non', NULL, 'Repudiandae repudiandae voluptatem omnis est sed. Ab quasi qui magnam dolorem illo soluta suscipit.', '1970-01-27 18:24:50', '1996-06-17 18:50:05'),
(6, 'Aut earum et molestias autem.', 'sapiente-porro-sequi-veritatis-saepe-unde-consectetur-et', 'https://via.placeholder.com/640x480.png/004488?text=suscipit', NULL, 'Voluptatem aut cum ea maiores. Aut non incidunt deleniti labore at.', '2019-12-10 19:20:10', '1984-02-16 14:16:48'),
(7, 'Quae aut quae alias repudiandae cum.', 'explicabo-quia-exercitationem-vero-rem-tempora-numquam', 'https://via.placeholder.com/640x480.png/002299?text=dicta', NULL, 'Enim quidem neque commodi maxime natus. Quibusdam molestias quis odit ut vel nihil.', '1998-09-10 18:00:53', '1998-05-01 23:22:12'),
(8, 'Voluptatem quos qui voluptatem dolorem.', 'voluptates-sint-accusamus-fugit-hic', 'https://via.placeholder.com/640x480.png/001144?text=dolores', NULL, 'Quasi itaque nobis commodi ipsum. Occaecati delectus sint ipsa nihil.', '2015-07-07 16:49:46', '1984-07-06 16:22:51'),
(9, 'Sint porro ipsum sapiente blanditiis eligendi eveniet.', 'sed-assumenda-et-neque-eum-repellendus-et-et', 'https://via.placeholder.com/640x480.png/006688?text=ipsam', NULL, 'Error et soluta quod molestiae id expedita qui. Iusto sequi aut ad reiciendis soluta officia earum.', '1993-03-14 18:50:49', '2006-12-25 14:05:55'),
(10, 'Corrupti est corporis et.', 'voluptate-qui-veritatis-doloremque-et', 'https://via.placeholder.com/640x480.png/00eeff?text=nostrum', NULL, 'Ea quia enim quas earum aliquam. Odit eum repellendus mollitia.', '1980-11-03 09:38:28', '1980-10-19 02:29:48'),
(11, 'Velit debitis dolorem voluptatem.', 'nulla-suscipit-et-ut-fugiat-architecto-assumenda-quam', 'https://via.placeholder.com/640x480.png/00aa77?text=quo', NULL, 'Vel dicta assumenda est est voluptas. Molestias non nihil molestias ut.', '1987-01-17 02:47:15', '1980-08-07 00:46:01'),
(12, 'Recusandae aut minima sit numquam.', 'numquam-magni-voluptatem-quasi-eum-sed-aliquid-error', 'https://via.placeholder.com/640x480.png/00aa00?text=et', NULL, 'A eius consequuntur ea consequuntur incidunt. Praesentium deserunt in similique repellat.', '1976-02-25 19:52:51', '1996-10-28 18:40:56'),
(13, 'Dolor adipisci odio ab.', 'cumque-et-harum-repudiandae-recusandae', 'https://via.placeholder.com/640x480.png/00cc44?text=nihil', NULL, 'Itaque minima voluptatum ab qui ut. Fugit maxime necessitatibus illum qui et et.', '1982-02-06 10:50:48', '2001-05-17 01:55:17'),
(14, 'Quo cum temporibus non fugiat eum.', 'et-vitae-natus-odit-voluptatem-repellendus-voluptas', 'https://via.placeholder.com/640x480.png/00eeaa?text=fugiat', NULL, 'Rerum incidunt et excepturi doloremque dolores. Laborum ipsa praesentium aut dolor nobis rerum.', '2011-05-08 11:18:36', '2018-06-23 01:02:07'),
(15, 'Tempora aut sint asperiores laudantium corrupti odit enim.', 'dignissimos-libero-dolores-fugiat-alias', 'https://via.placeholder.com/640x480.png/0099ee?text=qui', NULL, 'Vel accusamus molestias et accusantium occaecati. Ea voluptatibus sunt culpa et.', '2005-01-21 02:23:08', '1990-11-16 08:05:08'),
(16, 'Officia magni ut pariatur reprehenderit quia harum aut.', 'vero-ea-voluptatibus-quo-impedit-aut-consequatur', 'https://via.placeholder.com/640x480.png/00bb11?text=et', NULL, 'Et amet assumenda doloribus vel enim. Ducimus deserunt quia autem ullam quasi.', '1973-09-06 10:31:05', '1994-02-02 02:20:53'),
(17, 'Repellendus non accusamus iste ut ipsam et quod.', 'sequi-eius-quas-rerum', 'https://via.placeholder.com/640x480.png/0011bb?text=numquam', NULL, 'Reprehenderit dolorem delectus iusto et. Non alias rerum laudantium qui vel eos est.', '1997-05-25 17:00:19', '2010-08-09 02:36:21'),
(18, 'Omnis perspiciatis sapiente voluptates et.', 'et-necessitatibus-molestiae-perferendis-maxime-quos-laboriosam-neque', 'https://via.placeholder.com/640x480.png/0033ff?text=sed', NULL, 'Ducimus beatae delectus commodi qui quidem sint animi facere. Ipsa non ut eum adipisci quo dolorum.', '2010-09-17 21:34:55', '1993-07-30 13:24:17'),
(19, 'Enim laborum necessitatibus sed quod.', 'corrupti-suscipit-omnis-distinctio-quibusdam-et', 'https://via.placeholder.com/640x480.png/00ee44?text=ipsum', NULL, 'Ut non consectetur molestiae iusto. Aliquid quis eveniet a. Veniam deleniti autem nobis ab iste.', '2008-10-29 14:39:13', '1973-04-06 10:50:28'),
(20, 'Accusantium nobis quis omnis eos et aliquam.', 'non-est-voluptatem-recusandae-laudantium-dignissimos-eaque-minus', 'https://via.placeholder.com/640x480.png/0088aa?text=aut', NULL, 'Et ullam delectus tenetur laborum. Eaque asperiores aliquid ipsam ipsa quis.', '2016-09-07 19:10:51', '1988-04-17 19:24:03');

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
(11, '2022_11_16_173820_create_pages_table', 1);

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

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 'О компании', '<div class=\"text\">\r\n<div class=\"text-subtitle\">Наша миссия</div>\r\n<p>&laquo;Предоставить любому клиенту самый широкий ассортимент посадочного материала лучшего качества от надежных поставщиков, высокий уровень сервиса и конкурентные цены&raquo;.</p>\r\n<p>Ежегодно, перед каждым сезоном мы лично проверяем семена на всхожесть и энергию роста в собственной лаборатории! Не говоря уже о том, что вся продукция (посевной материал), поступающая на наши склады, имеет сертификаты соответствия на сортовые и посевные качества, соответствующие требованиям ГОСТ. А на наших складах поддерживаются самые высокие стандарты хранения с оптимальной температурой и влажностью воздуха.</p>\r\n</div>\r\n<div class=\"suppliers\">\r\n<div class=\"suppliers-subtitle\">В нашем магазине 77semena.ru представлена продукция следующих поставщиков:</div>\r\n<ul class=\"suppliers-list\">\r\n<li class=\"suppliers-list__item\">Семена от Челябинской селекционной станции</li>\r\n<li class=\"suppliers-list__item\">Семена Уральский дачник</li>\r\n<li class=\"suppliers-list__item\">Семена Аэлита</li>\r\n<li class=\"suppliers-list__item\">Семена Гавриш</li>\r\n<li class=\"suppliers-list__item\">Семена Поиск</li>\r\n<li class=\"suppliers-list__item\">Семена Агрос, в том числе цветы Sakata</li>\r\n<li class=\"suppliers-list__item\">Семена Русский огород</li>\r\n</ul>\r\n<div class=\"suppliers-remark\">(список будет пополняться)</div>\r\n</div>', '2022-11-16 17:42:17', '2022-11-16 14:19:30');

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
(1, 'Miss Cathy Grimes IV', 'Halvorsonburgh', 'Velit consequatur animi reprehenderit quis molestias. Eligendi mollitia modi nulla veniam.', '2022-11-16 17:41:53', '2012-09-11 05:04:08', '2000-02-01 00:34:10'),
(2, 'Keyon Walsh', 'Port Kendrafort', 'Nostrum inventore fugiat quod enim. Rem neque et natus excepturi repellendus similique et quod.', '2022-11-16 17:41:53', '1995-11-29 04:31:46', '2002-09-15 04:08:23'),
(3, 'Alycia Reynolds', 'Helgastad', 'Sit rerum hic qui sequi. Libero et iure quo aspernatur reiciendis. Qui modi recusandae a.', '2022-11-16 17:41:53', '2022-04-18 18:53:31', '2003-05-14 22:34:31'),
(4, 'Elody Harris', 'Estrellaland', 'Provident rem totam et deleniti. Vel id id rem officiis et. Dolores qui ex provident.', '2022-11-16 17:41:53', '2013-04-17 05:08:19', '1999-01-30 23:12:21'),
(5, 'Nickolas McCullough', 'Shanahanmouth', 'Ipsa quia modi quo consectetur nulla nihil. Aut labore voluptatem voluptatem earum.', '2022-11-16 17:41:53', '1985-09-03 02:49:38', '2006-02-02 06:19:25'),
(6, 'Reina Waters', 'Katharinafurt', 'Qui esse corrupti occaecati quasi expedita. Autem at eaque sed velit voluptas rerum adipisci.', '2022-11-16 17:41:53', '2001-07-19 03:47:30', '1980-10-29 22:17:22'),
(7, 'Devon Hansen', 'Hildegardton', 'Quas ea sunt occaecati. Debitis accusamus omnis totam dolorem. Quibusdam itaque quis et quis.', '2022-11-16 17:41:53', '1995-02-07 09:06:43', '2009-01-02 17:03:46'),
(8, 'Orie Mayert', 'Halshire', 'Cum id necessitatibus rerum illum dolores. Nostrum pariatur qui laudantium eum. Illo et aut nihil.', '2022-11-16 17:41:53', '1999-06-16 02:30:14', '1973-06-04 21:53:36'),
(9, 'Werner Hudson DVM', 'Starkview', 'Voluptatum sed id expedita nihil magnam. Aliquid et explicabo quis voluptas minus magnam.', '2022-11-16 17:41:53', '1970-05-31 23:48:17', '1984-06-28 19:01:10'),
(10, 'Efrain Adams', 'Lake Opalton', 'Fugit aut non nemo sed temporibus omnis dolores. Adipisci praesentium eos qui et quae in nulla.', '2022-11-16 17:41:53', '1981-11-23 02:53:13', '1988-10-23 12:00:10'),
(11, 'Harvey Predovic MD', 'Burdettemouth', 'Ut dolorem aut quae aut voluptatum. Sit culpa et error quis.', '2022-11-16 17:41:53', '2012-04-27 14:04:11', '1980-06-22 21:54:55'),
(12, 'Keon Kshlerin', 'Cronachester', 'Veniam explicabo ut dicta libero illum quo. Quia sequi aut laborum.', '2022-11-16 17:41:53', '1986-04-24 19:13:37', '1980-05-17 05:12:12'),
(13, 'Ubaldo Walsh', 'Oberbrunnerborough', 'Sed aut ut debitis nesciunt quo neque neque. Dolor quia id possimus qui.', '2022-11-16 17:41:53', '2022-02-03 00:31:05', '1995-12-25 11:01:34'),
(14, 'Dr. Demarco Stokes MD', 'Fannyport', 'Assumenda cupiditate molestiae eum quas. Odit error odio ut aut debitis perferendis molestias.', '2022-11-16 17:41:53', '2005-01-05 04:43:15', '1999-12-17 00:44:06'),
(15, 'Mr. Ervin Becker', 'Kaceyland', 'Sed deserunt qui laboriosam necessitatibus nostrum nemo molestiae ut. Provident error ut aut.', '2022-11-16 17:41:53', '2001-12-18 00:17:23', '1976-12-12 10:57:07'),
(16, 'Dr. Otto Pollich', 'East Marlinton', 'Fugit dicta et aperiam voluptatem voluptate saepe. Fugit nisi pariatur tempora aut dolorum ut.', '2022-11-16 17:41:53', '1974-07-07 05:25:48', '2013-06-27 00:12:15'),
(17, 'Jerad Weber DVM', 'Nolanmouth', 'Doloribus iure est eum ea culpa porro. Autem optio quis quia amet voluptas molestiae assumenda.', '2022-11-16 17:41:53', '2008-01-27 14:47:41', '1972-08-07 05:26:52'),
(18, 'Mr. Gino O\'Hara', 'Marleneview', 'Distinctio iste dolorum laudantium corporis magnam. Deserunt dolores quas laudantium veritatis.', '2022-11-16 17:41:53', '2016-10-31 07:51:21', '2021-05-19 05:17:42'),
(19, 'Viviane Bode', 'North Lilianamouth', 'Architecto quaerat suscipit a non. Nihil esse sit vero non. Eaque qui animi sint.', '2022-11-16 17:41:53', '1993-01-01 03:52:30', '1989-03-21 00:50:46'),
(20, 'Mr. Doug Wiza', 'North Elvaview', 'Dicta excepturi ipsum qui eius et. Perspiciatis eum doloribus quae et adipisci.', '2022-11-16 17:41:53', '1970-02-04 12:19:20', '1971-02-11 13:29:00');

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
(1, 'Enos Renner', 'pleannon@example.net', '2022-11-16 12:41:52', '$2y$10$vITs2SoAwCFQucDI2u9Kd.jwlEhSv7c5BiUD.c7.V1PgzCkwQt.oS', 'Syxi8iWjZM', '2022-11-16 12:41:52', '2022-11-16 12:41:52'),
(2, 'Mrs. Lucienne Veum', 'stark.lauriane@example.com', '2022-11-16 12:41:52', '$2y$10$oeA/f6UkfFvsy87mBOkcv.uCB5nunkvTqvp80Nl9WyaM0h7VWPGBu', 'Sf5M7Pe3mS', '2022-11-16 12:41:52', '2022-11-16 12:41:52'),
(3, 'Shaina Wiegand', 'dorothy.schuppe@example.com', '2022-11-16 12:41:52', '$2y$10$ahqAycqnAF.JscBAqGpFQOxmGMBERxamXSynjjwfsPC3JAhmqHznW', 'pSDR7Zg0zq', '2022-11-16 12:41:52', '2022-11-16 12:41:52');

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
-- AUTO_INCREMENT для таблицы `mainnews`
--
ALTER TABLE `mainnews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
