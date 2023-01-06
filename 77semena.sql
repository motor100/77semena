-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 06 2023 г., 22:50
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
(1, 'Brandy Gislason', 'huels.sierra', 'cole.lorna@example.org', '2022-12-01 05:02:25', '$2y$10$AARTT32c0Rt8AQ1s7eltYevGIS3S00xpjjw524qnzYQME3yeE2rjK', 'fGjornTaIX', '2022-12-01 05:02:25', '2022-12-01 05:02:25'),
(2, 'Cletus Macejkovic', 'dixie.prohaska', 'wturner@example.org', '2022-12-01 05:02:25', '$2y$10$ZMwBiS84bT35MtAPAGiVe.90jZtdWJuMOqozUon/sv2fdpR1VofT2', 'DOEwllHdTItRG5pRe3MU2Nti4oeXRfDDpuNym9iBuAdvo5YWNNcVW6cXiUWK', '2022-12-01 05:02:25', '2022-12-01 05:02:25'),
(3, 'Ryleigh Larson', 'esther53', 'unique.oconner@example.org', '2022-12-01 05:02:25', '$2y$10$0FMpzZ5ZpbYdB6QEpJ3A8uQjseBGG16KTHx9jCZ1W4aCDt6yf.X3C', 'dN2oqcaJl3', '2022-12-01 05:02:25', '2022-12-01 05:02:25');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_children` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent`, `title`, `slug`, `count_children`, `created_at`, `updated_at`) VALUES
(1, 0, 'Семена', 'semena', 7, '2022-12-01 05:02:27', '2022-12-02 13:17:03'),
(2, 0, 'Агрохимия', 'agrohimiya', 0, '2022-12-01 05:02:27', '2022-12-02 13:17:25'),
(3, 1, 'Огурцы', 'ogurcy', 0, '2022-12-01 05:02:27', '2022-12-02 13:17:03'),
(4, 1, 'Перцы', 'percy', 0, '2022-12-01 05:02:27', '2022-12-01 05:02:27'),
(5, 1, 'Томаты', 'tomaty', 0, '2022-12-01 05:02:27', '2022-12-01 05:02:27'),
(6, 1, 'Овощи', 'ovoshchi', 0, '2022-12-01 05:02:27', '2022-12-01 05:02:27'),
(7, 1, 'Газон', 'gazon', 0, '2022-12-01 05:02:27', '2022-12-01 05:02:27'),
(8, 1, 'Цветы', 'cvety', 0, '2022-12-01 05:02:27', '2022-12-01 05:02:27'),
(9, 1, 'Ягоды', 'yagody', 0, '2022-12-01 05:02:27', '2022-12-01 05:02:27');

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
(1, 'Миасс', 'Челябинская область', '2018-12-26 20:17:42', '1971-06-15 13:46:40'),
(2, 'Златоуст', 'Челябинская область', '2008-09-12 09:22:13', '1997-12-19 21:26:42'),
(3, 'Чебаркуль', 'Челябинская область', '2000-07-27 07:04:17', '2015-01-01 21:30:52'),
(4, 'Челябинск', 'Челябинская область', '2005-01-20 15:07:15', '1971-06-19 03:14:41'),
(5, 'Магнитогорск', 'Челябинская область', '1994-10-31 18:57:50', '2020-07-01 10:31:31');

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
(1, 4, '8.jpg', '1982-02-06 14:11:45', '2014-09-12 03:41:03'),
(2, 20, '6.jpg', '1984-01-18 15:41:31', '1972-02-15 16:57:10'),
(3, 12, '7.jpg', '1988-07-09 20:35:38', '1970-11-19 15:36:43'),
(4, 18, '7.jpg', '1977-09-29 10:56:04', '1976-05-04 08:23:15'),
(5, 16, '7.jpg', '1995-05-29 22:50:01', '1987-05-10 14:58:23'),
(6, 14, '9.jpg', '1984-09-22 01:36:08', '1974-01-14 03:21:05'),
(7, 3, '0.jpg', '2011-03-09 07:48:05', '2019-12-22 01:34:22'),
(8, 18, '6.jpg', '1984-01-26 06:11:56', '2009-10-06 19:18:26'),
(9, 20, '9.jpg', '2013-12-14 13:27:15', '1980-09-09 23:51:59'),
(10, 20, '6.jpg', '2014-12-23 18:47:59', '2019-02-05 04:11:19'),
(11, 17, '8.jpg', '1973-06-18 12:22:45', '1974-01-06 14:05:36'),
(12, 20, '7.jpg', '1971-09-22 17:41:59', '2004-04-07 14:40:35'),
(13, 19, '1.jpg', '1976-07-02 16:32:58', '1981-04-01 23:56:52'),
(14, 20, '10.jpg', '1970-12-27 16:06:11', '2005-08-27 11:39:48'),
(15, 19, '1.jpg', '2021-12-29 11:43:25', '1997-01-22 09:23:52'),
(16, 5, '10.jpg', '2006-05-26 03:11:27', '1985-01-15 16:46:42'),
(17, 19, '6.jpg', '1990-03-14 22:12:52', '1999-06-29 01:55:28'),
(18, 16, '0.jpg', '2021-08-22 20:36:30', '2004-03-27 05:27:42'),
(19, 6, '8.jpg', '1978-09-01 03:42:51', '2008-01-18 17:37:06'),
(20, 14, '10.jpg', '1996-08-24 04:17:42', '2016-11-21 18:30:11'),
(21, 10, '9.jpg', '2022-02-02 21:54:16', '1979-04-04 20:28:47'),
(22, 13, '5.jpg', '1976-10-01 07:34:10', '1992-07-20 18:37:04'),
(23, 20, '6.jpg', '2018-06-14 13:31:46', '2012-07-03 22:34:43'),
(24, 20, '2.jpg', '2001-12-09 19:09:18', '1975-01-13 19:18:35'),
(25, 2, '3.jpg', '1999-10-28 02:32:51', '2022-07-10 09:04:29'),
(26, 17, '3.jpg', '1986-04-14 09:49:44', '2006-01-10 09:41:50'),
(27, 15, '10.jpg', '1992-02-24 01:15:52', '1998-04-19 10:52:54'),
(28, 18, '3.jpg', '2005-10-02 18:38:34', '1998-10-24 15:18:10'),
(29, 2, '0.jpg', '1994-11-17 06:10:03', '2000-08-14 04:29:28'),
(30, 11, '8.jpg', '1989-02-13 16:33:08', '1980-10-11 22:10:27'),
(31, 14, '5.jpg', '1995-12-24 14:33:40', '1971-05-18 08:55:36'),
(32, 2, '0.jpg', '2008-04-16 17:23:41', '1978-04-04 09:02:17'),
(33, 14, '6.jpg', '1980-06-28 20:52:47', '1978-08-12 23:51:36'),
(34, 11, '4.jpg', '2012-01-31 15:28:53', '2006-12-26 21:41:43'),
(35, 20, '9.jpg', '1986-07-05 20:04:21', '1991-08-12 09:20:58'),
(36, 19, '4.jpg', '2004-09-18 14:05:46', '1982-07-11 00:23:40'),
(37, 17, '4.jpg', '1979-04-12 06:02:32', '1991-09-24 20:20:55'),
(38, 12, '3.jpg', '2022-08-27 18:19:50', '1982-12-05 22:22:10'),
(39, 10, '10.jpg', '2018-09-07 19:10:29', '2011-02-02 23:05:38'),
(40, 16, '4.jpg', '2011-01-16 15:12:30', '1996-02-05 11:15:23'),
(41, 1, '0.jpg', '1973-04-14 20:19:47', '1973-10-01 13:48:04'),
(42, 11, '1.jpg', '2019-07-25 18:52:40', '1979-03-07 06:55:58'),
(43, 3, '5.jpg', '1990-11-06 06:32:01', '1998-01-15 11:59:10'),
(44, 5, '1.jpg', '1997-11-28 07:04:24', '1989-07-01 08:27:16'),
(45, 7, '9.jpg', '2008-09-12 07:51:35', '2014-01-24 06:47:41'),
(46, 10, '2.jpg', '1977-11-01 01:18:24', '2001-01-27 10:55:14'),
(47, 3, '2.jpg', '2010-11-20 01:04:36', '2014-12-04 23:44:32'),
(48, 14, '8.jpg', '1989-03-13 09:29:10', '1982-11-11 10:16:13'),
(49, 14, '4.jpg', '1988-03-12 11:30:32', '1978-01-19 12:03:30'),
(50, 8, '9.jpg', '2011-11-04 13:08:44', '2005-09-07 12:55:03');

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
(1, 'Omnis aut id voluptatem cupiditate non id.', 'delectus-corrupti-consequuntur-consequatur-cupiditate-voluptas-cupiditate', '9.jpg', 'Iure sed aut quasi est asperiores. Soluta qui ea necessitatibus nostrum. Ducimus id quo totam eius.', '2014-04-27 20:04:35', '2005-02-12 13:09:25'),
(2, 'Dignissimos qui aut tempore modi qui.', 'voluptatibus-quam-unde-aut-esse-quia', '10.jpg', 'Libero magni et repellat et est quaerat. Qui qui id vel dicta. Ut nostrum enim culpa quia.', '1971-07-22 12:50:16', '1989-03-05 08:22:24'),
(3, 'Eveniet ipsam officiis tenetur.', 'voluptas-molestiae-sunt-corrupti-fuga-dolor', '7.jpg', 'Autem et qui et dolorem. Voluptatibus recusandae accusamus debitis in officia non aliquid.', '2009-10-11 08:44:59', '2002-03-24 15:58:00'),
(4, 'Beatae atque nobis tempora in est.', 'ut-id-veniam-placeat-dolores-error-maiores', '1.jpg', 'Voluptatum voluptatem quia quisquam. Et aut at voluptatum. Quasi voluptatibus a aliquid accusamus.', '2009-09-05 16:54:54', '2022-04-01 12:33:55'),
(5, 'Ad consequatur quibusdam eaque vel quae repellat odit.', 'eum-in-labore-nostrum-numquam-non-sit-aliquam', '1.jpg', 'Eligendi fuga sint voluptas neque. Veniam qui consequatur assumenda explicabo.', '1972-11-01 18:44:44', '1986-10-15 07:38:02'),
(6, 'Et veniam aspernatur sint et ipsam asperiores.', 'deleniti-ab-aut-sit-quod-dolorem-vel-non', '4.jpg', 'Labore dicta at aut alias. Eius ducimus tempore eos perspiciatis magnam doloribus architecto.', '2010-04-26 02:00:22', '2011-10-18 12:56:53'),
(7, 'Rerum asperiores voluptate accusantium vitae.', 'ab-molestias-non-vel-laudantium', '0.jpg', 'Adipisci tempora qui aspernatur reprehenderit commodi est. Itaque sint qui quia et quis qui cum.', '2001-10-23 11:00:50', '1996-03-16 15:35:25'),
(8, 'Itaque ut quis maiores libero reprehenderit reiciendis.', 'id-sit-fuga-repellat-totam', '5.jpg', 'Qui sit non perspiciatis quaerat nam. Nam voluptatem omnis aut.', '2013-11-02 02:26:28', '1980-04-18 14:01:10'),
(9, 'Illo doloribus et deleniti dolore nesciunt quae.', 'id-ut-quia-voluptatem-sit-expedita', '5.jpg', 'Iure et ut ipsa et. Fugiat autem aliquid quae in sit corrupti. Inventore eaque quo adipisci sint.', '1997-04-09 11:29:58', '1989-12-22 05:48:42'),
(10, 'Consequuntur accusantium quia non est.', 'distinctio-ut-deserunt-est-neque', '6.jpg', 'Omnis omnis ab inventore eos. Occaecati voluptatem nobis velit. Molestiae unde porro fugiat qui.', '1985-03-24 03:30:02', '1998-07-12 02:10:29'),
(11, 'Ipsa recusandae voluptatem distinctio accusamus ex atque.', 'dolorem-accusamus-et-pariatur', '7.jpg', 'Mollitia molestiae reiciendis sit sed. Ut numquam distinctio et. Fugiat dolores quam dolor aliquam.', '2003-07-29 22:50:37', '1982-11-20 07:49:12'),
(12, 'Non iste eos rem dolore.', 'nihil-et-quo-praesentium-consequatur-sunt-consequuntur', '2.jpg', 'Quia temporibus maiores dignissimos sapiente voluptatem. Vero repellendus et eos alias.', '1973-09-28 06:23:43', '2012-04-05 04:51:10'),
(13, 'Doloremque sunt exercitationem impedit molestias ut.', 'vel-in-et-molestiae-mollitia', '9.jpg', 'Quisquam accusamus tempora quo et. Doloribus et reprehenderit voluptatum est ducimus blanditiis.', '2001-07-04 02:04:47', '1980-05-30 10:45:04'),
(14, 'Sunt molestiae laudantium eum et.', 'sit-recusandae-illum-quae-est', '3.jpg', 'Ullam occaecati ut eum occaecati. Sed fugit commodi doloremque sunt autem dolores.', '2001-12-22 22:53:15', '2018-03-28 04:20:52'),
(15, 'Unde quos rem ut quidem iusto dignissimos accusantium.', 'architecto-nam-voluptas-sapiente-quaerat-voluptatem-sint-sit', '8.jpg', 'Tenetur commodi optio quo iste esse officia. Laborum ratione voluptates ullam et sequi.', '1973-05-03 21:12:06', '1985-04-02 02:54:05'),
(16, 'Saepe earum officiis rem aut minus ut consequatur.', 'labore-autem-perferendis-dolorem-provident-et-eaque-perferendis-ipsum', '5.jpg', 'Quia rerum dolore quia deserunt nobis numquam. Repellat eum deserunt eum ipsum sequi nostrum odio.', '2002-09-09 04:36:40', '2002-07-10 04:27:54'),
(17, 'Et quis et voluptatem tempora molestias.', 'quis-a-ipsa-dignissimos-in-nihil-sit', '9.jpg', 'Fugiat dolores qui qui aut et. Dolorem ab quod possimus eos quia similique.', '2000-07-05 13:21:09', '1994-08-22 18:30:00'),
(18, 'Cum illum vitae repellat qui fuga iste expedita.', 'rem-unde-quos-ipsa-eligendi-voluptatibus-nobis', '1.jpg', 'Ipsam quia vero sunt quam. Et et dolorum accusantium velit omnis sed.', '1978-03-21 18:22:03', '1984-09-13 21:16:20'),
(19, 'Error et odio expedita rerum delectus tempora veritatis.', 'soluta-voluptatibus-repellat-reiciendis-velit-consequatur-natus', '9.jpg', 'Quo est iusto doloremque voluptatem et. Placeat alias odit incidunt quis.', '1975-04-19 19:55:04', '1993-10-10 13:19:04'),
(20, 'Rerum quam quia distinctio unde saepe porro quia.', 'ut-libero-eveniet-beatae-quaerat', '6.jpg', 'Accusamus non facilis quibusdam laborum et ea. Rem veniam ipsa laboriosam laborum iure.', '1990-09-01 11:31:29', '1970-02-22 11:54:40');

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
(15, '2022_11_26_141331_create_offices_table', 1),
(16, '2022_12_24_145443_create_orders_table', 2);

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
(1, 1, 'Дачник', 'ул. 8 Июля, 1', 'Вход с торца\r\nЗеленая вывеска', '10-18', '10-18', '10-17', '2022-12-02 06:37:53', '2022-12-02 06:37:53'),
(2, 1, 'Слон', 'ул. Автозаводцев 65', 'Центр города', '10-20', '10-20', '10-20', '2022-12-02 06:39:20', '2022-12-02 06:39:20'),
(3, 1, 'На Орловской', 'ул. Орловская 11', NULL, '10-18', '10-18', '10-17', '2022-12-02 06:40:05', '2022-12-02 06:40:05'),
(4, 1, 'Наш дом', 'пр. Октября 15', NULL, '10-18', '10-18', '10-17', '2022-12-02 06:40:36', '2022-12-02 06:40:36'),
(5, 1, 'ИП Иванов', 'ул. Ленина 1/А', NULL, '10-18', '10-18', '10-17', '2022-12-02 06:41:07', '2022-12-02 06:41:07');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `products` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `products`, `name`, `phone`, `price`, `office_id`, `status`, `comment`, `payment`, `created_at`, `updated_at`) VALUES
(1, '[\n    \"Repudiandae aperiam tenetur dolorem. 1шт\",\n    \"Ea animi qui. 1шт\",\n    \"Porro totam molestias. 1шт\",\n    \"Eaque amet ea. 1шт\",\n    \"Corporis molestiae dignissimos officia. 1шт\",\n    \"Et enim pariatur est. 1шт\"\n]', 'iam', '+7 (345) 235 23 45', 859, 1, 'Отправлен в ПВЗ', NULL, 0, '2023-01-02 11:41:29', '2023-01-04 13:22:57'),
(2, '[\n    \"Itaque et aspernatur quas dolorem. 1шт\",\n    \"Новый товар111 1шт\",\n    \"Ea animi qui. 1шт\",\n    \"Fugit in eum unde. 1шт\"\n]', 'Иван Иванов', '+7 (345) 235 23 45', 411, 3, 'В обработке', NULL, 0, '2023-01-06 06:56:34', '2023-01-06 06:56:34'),
(3, '[\n    \"Dignissimos in facilis placeat. 5шт\",\n    \"Hic velit qui perspiciatis. 3шт\",\n    \"Consequuntur dolorem. 5шт\",\n    \"Veniam corporis est. 1шт\"\n]', 'Имя', '+7 (345) 235 23 45', 2722, 1, 'Выдан', NULL, 0, '2023-01-06 06:57:19', '2023-01-06 10:16:45');

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
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` bigint(20) NOT NULL,
  `stock` bigint(20) NOT NULL,
  `wholesale_price` int(11) NOT NULL,
  `retail_price` int(11) NOT NULL,
  `promo_price` int(11) DEFAULT NULL,
  `buying_price` int(11) DEFAULT NULL,
  `weight` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `category_id`, `image`, `text`, `code`, `stock`, `wholesale_price`, `retail_price`, `promo_price`, `buying_price`, `weight`, `brand`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Fugiat in et.', 'totam-aliquid-molestiae-qui-dolores-libero-doloremque', 4, '4.jpg', 'Temporibus non voluptas nobis nesciunt voluptate veritatis. Neque temporibus quibusdam nostrum est qui. Ab est et maxime eos et et. Nobis cum omnis quis eos sit suscipit.', 20934, 573, 46, 179, NULL, 902, 645, 'eum', 0, '1974-04-10 07:17:03', '1996-01-25 14:17:52'),
(2, 'Est quia facere omnis.', 'explicabo-deserunt-voluptas-aliquam-quisquam', 4, '3.jpg', 'Ratione soluta laboriosam temporibus tempore impedit et est. Fuga necessitatibus a consectetur iure cupiditate laudantium alias illo. Corrupti facilis magni ratione hic quibusdam.', 90610, 914, 65, 122, NULL, 845, 822, 'ut', 0, '1972-03-10 18:39:46', '1976-05-24 10:02:50'),
(3, 'Molestiae et eveniet.', 'repellat-quo-quasi-reprehenderit-quidem', 4, '8.jpg', 'Eum nihil deleniti provident asperiores voluptatem id. Officiis quaerat cupiditate suscipit et. Voluptatem nemo similique dolor ipsum officiis. Accusamus non dolorem ipsa aut id.', 74591, 800, 92, 153, 140, 212, 494, 'qui', 0, '1987-08-20 02:15:26', '2002-09-18 16:18:24'),
(4, 'Ab quae quos tenetur.', 'ab-quae-quos-tenetur', 4, '0.jpg', '<p>Ad dicta doloribus aliquam minus quia. Quae quis cum est occaecati vitae.</p>', 3344556677, 894, 3, 122, NULL, 286, 502, 'voluptatibus', 0, '1997-12-05 17:18:06', '2022-12-02 05:38:53'),
(5, 'Veniam aut magni.', 'deserunt-vel-aut-et-sunt-et-quia', 8, '8.jpg', 'Incidunt porro aut et nobis omnis qui rem. Exercitationem tenetur harum autem non excepturi. Hic ipsam vel id fuga dolorum. Minus aut nemo harum aspernatur laboriosam quia quam.', 85732, 383, 63, 197, NULL, 613, 871, 'soluta', 0, '2009-05-10 17:02:15', '2011-06-21 10:42:18'),
(6, 'In sapiente rerum.', 'unde-ipsam-consequuntur-odio-consectetur-repellendus-qui-ipsum', 4, '0.jpg', 'Dignissimos repudiandae illo ut saepe ea asperiores qui. Aut itaque enim tenetur incidunt. Sint rem vel commodi eveniet illum. Repellat eligendi culpa necessitatibus ex.', 82219, 197, 44, 191, NULL, 201, 633, 'et', 0, '1992-08-28 21:00:25', '2005-08-12 00:40:45'),
(7, 'Porro ipsa aspernatur iusto.', 'optio-qui-dolor-ut-et-voluptas-et', 4, '7.jpg', 'Mollitia est et excepturi voluptatem harum. Quaerat veritatis et quisquam est dolorem. Aut quos eos sed blanditiis quidem.', 23473, 37, 49, 149, NULL, 119, 815, 'et', 0, '2009-03-23 02:16:52', '1991-01-08 07:01:30'),
(8, 'Inventore eos ex ut.', 'delectus-est-officiis-nisi-laudantium-magni-animi-natus', 4, '2.jpg', 'Vero aperiam iste deleniti labore repellat. Atque dolores tenetur neque iusto.', 65716, 854, 64, 158, NULL, 770, 15, 'aperiam', 0, '1995-04-28 04:29:27', '2000-08-17 17:39:56'),
(9, 'Itaque facere omnis harum.', 'eius-aliquid-iusto-est-quos-vero-quidem-omnis', 10, '4.jpg', 'Fuga in est rerum dignissimos aliquam. Qui dolor illum facilis voluptas cum voluptatibus quibusdam. Officiis maxime sint cupiditate.', 22273, 766, 83, 183, 180, 653, 299, 'in', 0, '1971-06-26 11:23:50', '1987-05-26 17:10:07'),
(10, 'Minima quam veritatis rerum.', 'non-distinctio-qui-nesciunt-saepe-perspiciatis-id-dolorem', 10, '1.jpg', 'Similique qui ut in sed quibusdam. Libero praesentium sunt odio modi praesentium ipsum voluptatem. Dolor consequatur consequatur ipsum sed repellat dolores enim ut.', 79386, 362, 28, 173, NULL, 734, 511, 'ut', 0, '2011-03-25 01:48:50', '2021-11-15 11:10:50'),
(11, 'Laboriosam sint dolor placeat.', 'cumque-commodi-doloremque-quia-asperiores-consectetur', 4, '7.jpg', 'Deleniti nihil laboriosam omnis. Eum cum dolores labore culpa est accusamus repudiandae. Quo error dolorum harum nihil eos.', 18651, 45, 25, 179, NULL, 479, 50, 'eius', 0, '1987-04-30 13:32:10', '1973-07-02 12:52:44'),
(12, 'Quibusdam et ratione vero.', 'aspernatur-id-velit-vitae-occaecati-placeat', 4, '10.jpg', 'Commodi at dolor exercitationem illum. Ut ut unde nam aut est. Reiciendis minima alias deleniti assumenda a.', 73366, 807, 44, 154, NULL, 263, 476, 'rerum', 0, '1973-10-26 10:49:30', '1971-03-01 03:42:13'),
(13, 'Eos incidunt.', 'quos-ullam-voluptas-vero-et-accusantium-quas-accusamus', 1, '0.jpg', 'Eos eos et sed aliquam asperiores et. Porro pariatur hic doloremque non esse. Quidem rerum id natus quis tempora. Aut ut numquam omnis natus iure perspiciatis et aut.', 70913, 952, 96, 138, NULL, 995, 642, 'sed', 0, '2002-06-07 04:07:17', '1986-08-21 19:46:11'),
(14, 'Ut aut ea dolores ea.', 'unde-dolores-ut-facere-provident-est-voluptas-laborum-illo', 7, '5.jpg', 'Est voluptatum voluptatem tempora. Nihil omnis esse quos quas corrupti maxime vel. Et quos earum fugit. Veniam nihil amet tempora molestiae.', 11821, 94, 98, 172, NULL, 392, 929, 'non', 0, '2008-09-28 18:44:29', '1982-06-28 01:18:25'),
(15, 'Magni amet eos.', 'magni-amet-eos', 4, '7.jpg', '<p>Nihil omnis asperiores neque. Sed in dolor omnis nobis. Sit aspernatur nam ut minus.</p>', 2233445566, 690, 34, 131, NULL, 383, 246, 'aliquam', 0, '2015-08-17 20:02:35', '2022-12-02 05:38:23'),
(16, 'Veniam tenetur expedita voluptatem.', 'dolores-magni-accusamus-totam-veniam-adipisci-voluptatem', 5, '8.jpg', 'Consequatur similique temporibus et minus voluptas neque. Autem culpa et natus et quisquam. Qui quae in sit labore. Autem voluptate laborum est ullam nobis eum.', 36031, 416, 8, 157, NULL, 649, 563, 'dolores', 0, '1972-02-20 10:57:47', '1975-10-23 22:23:39'),
(17, 'Repudiandae aperiam tenetur dolorem.', 'sit-non-est-sunt-ut-veritatis-excepturi-eligendi', 8, '10.jpg', 'Facere nemo voluptas ab hic facere eaque reprehenderit ab. Ut maiores amet quia. Totam et nisi in aut. Autem explicabo maiores aut et voluptas aliquam nisi.', 59804, 677, 89, 182, 170, 63, 75, 'iusto', 1, '1997-09-01 15:13:56', '2003-04-22 18:57:14'),
(18, 'Rerum qui ea.', 'voluptatum-ex-magnam-unde', 4, '2.jpg', 'Culpa aliquid iusto ut. Aliquam sed rerum ipsum totam omnis. Beatae saepe officia rerum omnis.', 34768, 306, 47, 154, NULL, 961, 452, 'voluptate', 0, '2000-10-09 23:05:21', '2013-03-04 03:56:27'),
(19, 'Repudiandae sit natus.', 'aliquam-dolores-est-et-est-laboriosam-sed-consequatur-vel', 4, '9.jpg', 'Ea quia aspernatur recusandae delectus expedita hic. Libero doloribus qui modi nihil incidunt est et. Non iusto in rerum cupiditate ab quis.', 57300, 25, 63, 136, NULL, 208, 441, 'distinctio', 0, '2017-07-15 02:43:18', '1970-07-29 09:01:44'),
(20, 'Consequatur in vel.', 'voluptatem-omnis-qui-eveniet-nulla', 7, '0.jpg', 'Aut cumque sit porro. Sint aut nisi sit aspernatur dicta laboriosam error corrupti. Error suscipit a unde unde ut est rerum. Id ad eos aspernatur nemo nihil tempora maxime ea.', 83924, 875, 10, 163, NULL, 562, 758, 'exercitationem', 0, '2008-02-03 01:07:26', '1986-01-18 10:53:10'),
(21, 'Labore dignissimos quis mollitia.', 'amet-doloremque-quia-exercitationem', 4, '9.jpg', 'Et omnis sed eum. Temporibus quidem praesentium aut facilis cumque consequuntur. Sint fugiat tenetur mollitia aliquam ut perspiciatis.', 36147, 627, 9, 111, NULL, 18, 697, 'voluptate', 0, '2010-03-04 23:28:07', '2018-10-19 19:31:39'),
(22, 'Id nisi tempora voluptatem quod.', 'molestiae-distinctio-porro-omnis-ut-quo-quia-consequuntur', 5, '0.jpg', 'Natus rerum temporibus sit minus rerum. Sunt ipsam pariatur et reiciendis odio ullam doloribus. Unde magni id voluptas. Recusandae cupiditate architecto quia impedit expedita quis.', 85345, 226, 63, 176, NULL, 841, 78, 'error', 0, '2009-03-28 04:29:30', '1998-07-15 22:54:23'),
(23, 'Autem quos ut.', 'perspiciatis-repellat-quod-quia-harum-harum-voluptatem-omnis', 4, '2.jpg', 'Accusamus veritatis beatae aut sit mollitia nihil saepe. Qui unde excepturi fugiat et excepturi omnis. Dolor eum cum veritatis sunt voluptatem dignissimos ex eos.', 69388, 680, 27, 148, NULL, 723, 877, 'accusamus', 0, '1999-04-11 01:18:20', '1970-10-18 22:49:36'),
(24, 'Expedita ut ullam.', 'animi-reiciendis-illum-voluptatum', 3, '6.jpg', 'Dolores omnis quasi dolor odio dolores. Nam ut sit quam aut sunt magni. Et repellendus ut adipisci eaque.', 14256, 770, 68, 103, NULL, 316, 919, 'quis', 0, '1976-05-22 15:31:31', '1977-12-29 03:19:27'),
(25, 'Fugit omnis eaque et.', 'possimus-accusamus-velit-aut-placeat-autem-praesentium', 1, '2.jpg', 'Quod consectetur aut qui accusamus. Ex modi rerum omnis occaecati maxime.', 76741, 899, 81, 148, NULL, 101, 826, 'molestiae', 0, '1971-04-28 18:20:48', '1986-02-26 22:01:50'),
(26, 'Quam eum recusandae vitae.', 'qui-libero-dolor-harum-et-voluptates-sint', 10, '0.jpg', 'Consequuntur culpa id est qui. Corrupti dolor necessitatibus debitis ex. Aliquid vel sequi dignissimos veritatis sunt quod.', 32467, 877, 16, 135, NULL, 398, 110, 'corrupti', 0, '1982-05-12 00:57:23', '2014-12-13 20:38:56'),
(27, 'Porro totam molestias.', 'facere-quasi-modi-quae-officiis-et', 4, '8.jpg', 'Aut ut ut molestiae harum ut sit mollitia doloremque. Tenetur pariatur sint ullam. Tempore in sit in nemo perspiciatis veniam est.', 41934, 840, 65, 145, 140, 286, 726, 'sapiente', 9, '1989-07-26 11:13:38', '1988-08-17 04:01:10'),
(28, 'Provident quasi totam esse.', 'et-qui-rerum-iusto-praesentium-repellendus-voluptatem', 2, '5.jpg', 'Voluptatem accusamus optio et ut iure est sed. Officiis excepturi dicta fugit modi nulla voluptates. Porro et vel ut voluptatum.', 11376, 182, 37, 118, NULL, 538, 107, 'nemo', 0, '2017-02-10 02:18:53', '1993-03-19 14:55:30'),
(29, 'Consequuntur dolorem.', 'voluptas-eum-sunt-recusandae-asperiores-consequatur', 8, '8.jpg', 'Qui occaecati aut aut omnis accusamus ipsum quidem et. Et ducimus officia aperiam. Et officia earum quod laborum ex. Nisi dolor aut omnis quam ut. Sint voluptas ratione repellat voluptatum.', 52539, 766, 51, 109, NULL, 831, 701, 'aut', 3, '1995-03-20 07:02:20', '1970-02-05 22:49:39'),
(30, 'Veniam corporis est.', 'distinctio-nemo-impedit-debitis-sunt-nobis', 7, '6.jpg', 'Omnis sit molestiae est quo similique. At nihil ea iusto expedita dolorum assumenda ducimus. Totam suscipit incidunt quo qui.', 98522, 126, 48, 102, NULL, 299, 266, 'ab', 4, '1999-08-13 05:55:38', '1972-05-07 06:32:48'),
(31, 'Dignissimos in facilis placeat.', 'dignissimos-in-facilis-placeat', 4, '9.jpg', '<p>Maiores rerum qui natus natus et tenetur vero. Nihil harum enim accusamus distinctio. Enim rem ut soluta ipsam a nemo quos dolorum.</p>', 1122334455, 422, 11, 163, NULL, 474, 5, 'repudiandae', 0, '2005-03-10 16:45:35', '2022-12-02 05:37:44'),
(32, 'Hic velit qui perspiciatis.', 'quibusdam-omnis-iste-ut', 7, '1.jpg', 'Ut minima eligendi qui similique iste. Aut aut repellat voluptatem saepe nam accusamus ab. Facere nesciunt reprehenderit est exercitationem animi. Cumque quo rerum et et quisquam similique.', 86959, 978, 91, 114, NULL, 936, 502, 'occaecati', 0, '2004-03-01 07:31:20', '2003-11-30 05:49:06'),
(33, 'Consequatur officiis sed.', 'consequatur-officiis-sed', 4, '9.jpg', '<p>Sit aliquam voluptas impedit quia voluptate minima quisquam. Sed nisi et eius est provident nemo.</p>', 1234556789, 224, 77, 163, NULL, 66, 448, 'maiores', 1, '1980-09-28 16:22:56', '2022-12-02 05:35:39'),
(34, 'Sed aut doloribus dicta.', 'aliquam-aut-tenetur-aut-consectetur-recusandae-sit', 3, '6.jpg', 'Labore alias sit voluptas dolorem distinctio. Quisquam error nisi sit. Odio eum quibusdam ut nemo odio.', 89036, 773, 29, 165, NULL, 924, 893, 'enim', 2, '1989-05-02 11:27:27', '1975-03-02 13:43:07'),
(35, 'Corporis molestiae dignissimos officia.', 'corrupti-debitis-debitis-ut', 4, '6.jpg', 'Modi voluptatibus vel rerum tempore. Ut et consequatur voluptatum earum iusto delectus ab.', 91969, 292, 59, 197, 180, 64, 284, 'sunt', 22, '2009-12-18 12:47:23', '1994-06-16 11:28:24'),
(36, 'Voluptas omnis est eaque.', 'ipsa-ratione-sed-et-corrupti-sint', 5, '6.jpg', 'Labore voluptas aut et ut. Impedit recusandae placeat rem est aperiam repellendus laborum. Et eaque animi in aut perferendis sit fugit.', 59385, 793, 12, 200, NULL, 224, 330, 'quo', 0, '1981-03-26 21:13:53', '2014-06-11 00:08:33'),
(37, 'Cupiditate est modi et ea.', 'cupiditate-est-modi-et-ea', 6, '0.jpg', '<p>Distinctio molestiae modi fugiat sequi ex. Laudantium at natus qui voluptatum. Non at neque eos fugit. Libero fugit delectus tempora eaque totam.</p>', 1234566789, 241, 21, 145, NULL, 452, 987, 'beatae', 0, '2004-02-14 05:22:13', '2022-12-02 05:35:02'),
(38, 'Aperiam quod non.', 'quos-totam-dicta-molestiae', 6, '7.jpg', 'Enim saepe dignissimos velit sapiente possimus non nihil. Molestiae perferendis nihil earum. Iste et ut earum autem deserunt minima minus.', 88730, 194, 95, 109, NULL, 669, 924, 'expedita', 0, '2012-03-02 22:29:48', '2015-12-21 06:26:53'),
(39, 'Rem officia.', 'rem-officia', 7, '7.jpg', '<p>Fugit facere velit sed repudiandae rem sit. Odio dolore est sed fuga sit neque qui. Necessitatibus consectetur enim doloremque quia et nihil facere. Delectus vel maiores sunt autem.</p>', 22639445566, 0, 20, 162, 150, 600, 658, 'ut', 100, '1984-11-30 01:25:01', '2022-12-21 09:49:04'),
(40, 'Earum enim vitae eligendi veniam.', 'repellat-ab-eum-dolorem', 8, '3.jpg', 'Ut ad commodi mollitia officia minima quis earum. Dolores rerum alias ducimus nisi modi atque atque. Autem nihil voluptas numquam in. Est soluta fugit quae qui quibusdam error esse.', 66210, 114, 75, 140, NULL, 364, 51, 'et', 0, '1982-03-11 15:01:17', '1984-08-10 04:24:31'),
(41, 'Tenetur aliquam eum.', 'minima-non-aliquid-occaecati-unde-exercitationem-cum-nihil-sit', 4, '9.jpg', 'Ad ut illum ea. Et atque dolore in autem atque. Occaecati dolore cum consequatur incidunt nesciunt soluta. Reprehenderit molestiae ut rerum et commodi.', 62056, 333, 34, 159, NULL, 883, 737, 'unde', 0, '2014-02-03 16:23:58', '2020-08-15 08:09:42'),
(42, 'Nulla quae ab sunt.', 'voluptatem-ut-consequatur-quo-qui-itaque-quibusdam-dolore', 8, '5.jpg', 'Tempora alias molestiae provident quae consequuntur error quod. Assumenda a adipisci amet omnis ipsam dolor. Est et velit impedit maxime qui ut.', 79412, 115, 31, 116, NULL, 993, 681, 'nihil', 0, '2005-07-19 23:40:09', '2006-10-19 00:30:31'),
(43, 'Inventore ut.', 'aut-aut-alias-culpa', 5, '0.jpg', 'Sit sunt eaque eveniet. Dolorem laboriosam optio ratione dolor ducimus. Totam provident eaque sequi error excepturi odio. Perferendis velit qui cum praesentium blanditiis quidem iure.', 19237, 776, 42, 141, NULL, 226, 167, 'magnam', 15, '1988-01-28 19:44:09', '1980-08-31 18:47:22'),
(44, 'Sapiente eos totam veniam.', 'illo-temporibus-est-sequi-assumenda-quia-accusamus-et', 7, '0.jpg', 'Doloremque nesciunt nulla sint illum eaque non neque. Non culpa deleniti aliquid et aliquam non. Itaque voluptatem voluptatem harum.', 47537, 273, 70, 185, NULL, 936, 572, 'et', 0, '1983-03-29 13:46:05', '1979-01-30 09:13:57'),
(45, 'Fugit in eum unde.', 'quis-omnis-illo-est-et-distinctio', 8, '10.jpg', 'Tempore enim totam ut rerum et incidunt dolorum. Natus blanditiis provident qui. Corrupti qui quo aut odit necessitatibus enim ut vel.', 92566, 869, 85, 114, NULL, 277, 221, 'rerum', 22, '2003-09-20 05:35:11', '1991-12-16 20:05:46'),
(46, 'Itaque et aspernatur quas dolorem.', 'et-rem-et-unde-eum-necessitatibus-nesciunt-enim-vero', 4, '0.jpg', 'Dignissimos rerum non qui. Porro praesentium officiis accusantium maiores aut sit nihil. Dolorem ad autem quasi debitis.', 15135, 321, 41, 175, NULL, 546, 473, 'delectus', 0, '2011-01-30 20:25:28', '2000-06-19 03:56:20'),
(47, 'Rerum ea placeat sed.', 'rerum-ea-placeat-sed', 4, '2.jpg', '<p>Nemo qui eligendi incidunt. Consequatur sequi occaecati fugiat qui tenetur beatae culpa. Eum natus excepturi est quo nesciunt omnis. Eum et libero voluptas sunt aliquid.</p>', 88936555467, 868, 73, 122, NULL, 834, 255, 'est', 0, '1974-12-24 04:45:53', '2022-12-21 09:56:04'),
(48, 'Eaque amet ea.', 'eaque-amet-ea', 4, '6.jpg', '<p>Ut magnam ut aperiam dolorum iste. Porro ullam facilis aut ut. Rerum est quis non autem et.</p>', 1234567789, 0, 34, 153, NULL, 398, 99, 'vitae', 10, '2019-09-22 21:15:43', '2022-12-02 05:34:22'),
(49, 'Ea animi qui.', 'doloribus-animi-minus-quis-repudiandae-ipsam-sed', 4, '2.jpg', 'Ipsam et est rerum amet ea. Vel qui consequatur qui fugit eum excepturi. Dicta natus unde repellendus suscipit fuga nihil accusamus beatae. Libero omnis eum culpa aut.', 70809, 317, 0, 104, NULL, 149, 105, 'quasi', 5, '1991-11-07 13:11:15', '1990-09-11 20:27:49'),
(50, 'Et enim pariatur est.', 'et-enim-pariatur-est', 2, '5.jpg', '<p>Aut et quasi ut quod nemo. Illum quia quidem accusamus nam commodi et dignissimos assumenda. Repudiandae rerum maiores eveniet consequuntur pariatur.</p>', 1234567889, 0, 47, 112, NULL, 715, 844, 'perspiciatis', 4, '2003-10-20 09:45:01', '2022-12-01 06:27:30'),
(53, 'Новый товар111', 'novyi-tovar111', 3, 'novyi-tovar111-19122022-1611219303.jpg', '<p>111111</p>', 123334456781, 1, 15, 20, 18, 12, 10, NULL, 1, '2022-12-19 09:00:27', '2022-12-21 10:19:28'),
(54, 'Новый товар', 'novyi-tovar', 3, 'novyi-tovar-02012023-678575319.jpg', '<p>Описание</p>', 5434563657456, 5, 8, 10, NULL, 5, 10, NULL, 4, '2023-01-02 11:13:17', '2023-01-02 11:13:17');

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
(1, 'Prof. Carmel Walter', 'Loymouth', 'Nulla ad blanditiis sequi quisquam et. Sapiente aspernatur nihil rem rerum. Ut cum quas sed nisi.', '2022-12-01 10:02:24', '2000-01-04 21:49:27', '1988-06-10 17:04:04'),
(2, 'Prof. Brionna O\'Kon PhD', 'Ferminborough', 'Facilis et accusantium sed ea. At ea fugiat harum magnam itaque. Hic qui aut et enim accusamus.', '2022-12-01 10:02:24', '2012-10-11 15:41:35', '1972-12-11 20:27:20'),
(3, 'Khalil Goodwin', 'Louveniaburgh', 'Eos placeat voluptatem quo voluptatem quos facilis. Id sed sit aut nobis quia aut.', '2022-12-01 10:02:24', '2010-03-02 15:12:54', '2014-03-06 21:07:17'),
(4, 'Jackeline Steuber PhD', 'North Kendall', 'Rem modi nam amet. Molestiae tenetur ad occaecati velit. A suscipit sed praesentium in.', '2022-12-01 10:02:24', '1976-09-11 18:28:22', '1972-05-16 13:53:29'),
(5, 'Brandon Senger', 'West Freidamouth', 'A porro tempore fugiat velit et iusto et. Ex totam est nulla ducimus. Et vel ipsa rerum vel.', '2022-12-01 10:02:24', '2012-04-27 17:16:15', '1992-07-02 08:21:55'),
(6, 'Pink Denesik IV', 'West Paulashire', 'Qui est et perferendis rerum magni sit. Commodi iusto ut quae est aut.', '2022-12-01 10:02:24', '2022-01-21 10:10:50', '2016-12-02 07:18:26'),
(7, 'Ernie Dickens V', 'East Isidro', 'Incidunt numquam ea alias perferendis. Omnis voluptatibus cum tenetur in.', '2022-12-01 10:02:24', '1975-09-22 02:36:08', '1994-06-02 06:14:57'),
(8, 'Markus DuBuque', 'Lorenzastad', 'Amet numquam aut quas voluptatem cupiditate neque. Error nesciunt consequatur ipsum nihil atque.', '2022-12-01 10:02:24', '1985-07-20 02:40:03', '1988-02-10 20:19:28'),
(9, 'Judy Von', 'Westport', 'Labore eum rerum facilis aut. Vel sed ut officiis impedit debitis. Voluptas et provident culpa.', '2022-12-01 10:02:24', '2016-02-12 15:10:48', '1979-05-03 19:35:25'),
(10, 'Cleveland Mosciski', 'Wymanmouth', 'Tempora optio quia corrupti autem. Similique nihil consequatur numquam sed occaecati.', '2022-12-01 10:02:24', '1983-12-26 06:48:42', '2013-05-12 07:31:08'),
(11, 'Maryse Corkery', 'New Fernland', 'Dolore debitis non nam. Vel ad aut nemo. Omnis reprehenderit ratione corrupti.', '2022-12-01 10:02:24', '1986-02-09 01:53:43', '2012-10-06 03:28:41'),
(12, 'Elian Bogan DVM', 'South Nikko', 'Repellat occaecati voluptatem dolore nemo. Aut unde aut repellendus eum ducimus.', '2022-12-01 10:02:24', '2022-06-02 18:29:33', '1997-12-18 16:46:54'),
(13, 'Mr. Julio Douglas DVM', 'East Maggie', 'Vero quas hic aut laborum. Suscipit aut et dolore necessitatibus nulla.', '2022-12-01 10:02:24', '1975-04-28 03:38:26', '1987-12-14 05:51:13'),
(14, 'Angelina Marquardt', 'Jerroldbury', 'Non corrupti libero velit enim. Cum asperiores ut eum dolor. Quo est enim dicta quo.', '2022-12-01 10:02:24', '2011-05-29 16:47:11', '1978-06-01 10:33:20'),
(15, 'Oliver Jacobi', 'Carterstad', 'Maxime saepe nemo ut id ut fuga pariatur in. Eos voluptates quidem molestiae iure qui.', '2022-12-01 10:02:24', '1987-08-27 20:08:40', '2009-04-20 04:15:28'),
(16, 'Sim Gulgowski', 'North Leonor', 'Repellat et quis nulla nulla dolor totam sunt facere. Sit repellendus beatae id ducimus id ut eius.', '2022-12-01 10:02:24', '2004-06-13 04:55:07', '2018-01-26 06:10:29'),
(17, 'Reva Legros', 'Lake Jarrod', 'Ea inventore atque sapiente ipsa ducimus. Et ab dolores eos rerum et illo molestiae saepe.', '2022-12-01 10:02:24', '1998-11-09 00:39:58', '1971-07-01 05:59:34'),
(18, 'Miguel Mitchell', 'Torphyville', 'Quas nulla tempore saepe dignissimos. Pariatur aspernatur numquam explicabo dicta debitis.', '2022-12-01 10:02:24', '1986-08-07 03:24:46', '1989-12-11 11:12:14'),
(19, 'Mrs. Herminia Schultz V', 'Maritzafort', 'Aspernatur adipisci at nisi rem et. Voluptatem aut laboriosam delectus occaecati ut.', '2022-12-01 10:02:24', '1995-12-18 18:14:48', '1983-04-18 12:51:02'),
(20, 'Prof. Dimitri Harber IV', 'Ivaport', 'Dicta rem doloremque sed esse nam fuga ut. Ut inventore eos similique sed mollitia.', '2022-12-01 10:02:24', '1976-06-25 15:37:32', '1982-01-09 19:23:21');

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
(1, 'Adan Wyman I', 'otto72@example.com', '2022-12-01 05:02:23', '$2y$10$Nd2UQFgFNlKOgsLOL4Wk9eXiaKxP3KQlSjoGB2R2P35x0GGBd0sPC', 'N8DQOaAF1ACLsD9mxtMjOFS0ZSsSiCAezk8TSEkgB3g7PByyiIPP7jk3mYgZ', '2022-12-01 05:02:23', '2022-12-01 05:02:23'),
(2, 'Mrs. Vernie Trantow', 'gorczany.enola@example.com', '2022-12-01 05:02:23', '$2y$10$ukPsXN0FJzRsKWwvH0Rlx.kJI2Zlj.9X6zEe2rkan4iKaJFw4aB7i', 'g6B0jCPBUv', '2022-12-01 05:02:23', '2022-12-01 05:02:23'),
(3, 'Leann Zulauf', 'francesca.schaden@example.net', '2022-12-01 05:02:23', '$2y$10$yRRCpX3lf9M3jFBY8ZyDVeO3OKRLyMa7VHdWyNenl2QKygNGdUYgi', 'aL1jfVYdZU', '2022-12-01 05:02:23', '2022-12-01 05:02:23');

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
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
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
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD UNIQUE KEY `products_code_unique` (`code`),
  ADD KEY `products_title_index` (`title`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
