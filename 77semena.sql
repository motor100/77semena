-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 04 2022 г., 21:39
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
(1, 'Миасс', 'Челябинская область', 456300, '1989-12-04 09:09:10', '1989-12-30 23:13:46'),
(2, 'Златоуст', 'Челябинская область', 456200, '1976-01-04 18:20:38', '2001-11-16 11:04:23'),
(3, 'Чебаркуль', 'Челябинская область', 456440, '1978-06-05 19:38:43', '2003-12-06 06:23:31');

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
(1, 'Explicabo doloribus est maxime mollitia atque autem illum.', 'aut-aut-et-sed-fugit-libero-est-ea', 'https://via.placeholder.com/640x480.png/00ee33?text=sunt', NULL, 'Officiis hic saepe quasi quo quae ex. Ut quia qui eos ex et minima sit. Neque quis dolorem fuga.', '1970-11-18 02:58:07', '1992-06-04 00:14:26'),
(2, 'Voluptatem veritatis occaecati voluptas atque aut assumenda.', 'qui-non-dolor-odio', 'https://via.placeholder.com/640x480.png/007744?text=iure', NULL, 'Enim quisquam commodi nostrum totam aut quam. Laborum eos quidem odio quia ut dignissimos.', '1987-06-14 07:42:59', '2022-01-15 14:31:50'),
(3, 'Adipisci aut voluptate dolor iste sint.', 'sit-modi-rerum-aut-vel-dolor', 'https://via.placeholder.com/640x480.png/009944?text=quia', NULL, 'Recusandae reiciendis ut nihil nihil odio ut culpa. Eveniet et ea aut eos.', '2015-08-05 06:54:17', '2009-03-04 13:46:02'),
(4, 'Explicabo ea dolorem iusto molestiae voluptas optio eum optio.', 'consectetur-sit-eos-earum-velit-amet-sed', 'https://via.placeholder.com/640x480.png/0011aa?text=unde', NULL, 'Et et ea enim sed tenetur voluptatem. Quis eius qui vitae quia consectetur.', '2015-08-18 11:07:08', '1975-06-08 07:14:36'),
(5, 'Sed ut aut dolore ea minus qui.', 'temporibus-repudiandae-sequi-eveniet', 'https://via.placeholder.com/640x480.png/005522?text=aut', NULL, 'Quam expedita porro porro est quo earum ut. Fuga est doloribus nostrum quia inventore sint.', '2006-03-19 13:20:24', '2020-01-19 06:35:45'),
(6, 'Repudiandae quos dolorem earum.', 'ipsum-magnam-exercitationem-illum-libero-tempore-alias', 'https://via.placeholder.com/640x480.png/000022?text=est', NULL, 'Fuga aut voluptas nemo necessitatibus dolor quae. Sapiente vero ex voluptatem ea molestias.', '1982-11-09 17:37:49', '2005-06-23 10:13:16'),
(7, 'Officiis voluptas distinctio autem veritatis cum eligendi quas.', 'quia-saepe-quae-quo-quo-omnis-ut-dolores', 'https://via.placeholder.com/640x480.png/0022ee?text=molestiae', NULL, 'Esse officiis tempore distinctio est. Debitis minima sed ut.', '2004-04-26 01:06:23', '1999-11-15 23:25:02'),
(8, 'Rem inventore temporibus consequatur.', 'qui-omnis-sunt-soluta-vero', 'https://via.placeholder.com/640x480.png/00ee77?text=voluptatum', NULL, 'Velit saepe nobis aspernatur. Modi rem aut magnam totam voluptatem est aperiam.', '2012-08-26 05:31:07', '1995-03-21 22:17:33'),
(9, 'Molestias dolorem ut qui deleniti architecto facilis omnis.', 'libero-minus-cumque-ex-quo-delectus', 'https://via.placeholder.com/640x480.png/005577?text=cumque', NULL, 'Sunt molestiae cumque et quod commodi. Tempore neque corrupti aut repudiandae dicta molestiae.', '2007-03-17 05:29:42', '1972-01-18 12:41:54'),
(10, 'Eveniet consectetur labore minima omnis.', 'sed-voluptatem-nihil-omnis-corrupti-placeat-error', 'https://via.placeholder.com/640x480.png/008866?text=est', NULL, 'Libero dolorem et sed saepe modi. Enim quia sint repellendus. Velit atque et numquam eum.', '2016-05-07 23:59:48', '2016-09-17 11:32:03'),
(11, 'Voluptatem quod vel consequatur magni architecto vero laborum.', 'consequuntur-dolorem-ea-natus-et-omnis-dolor-officiis-nesciunt', 'https://via.placeholder.com/640x480.png/001122?text=unde', NULL, 'Voluptates repellat consectetur nemo architecto. Qui excepturi debitis saepe in.', '1997-01-09 04:00:32', '2013-09-08 19:09:13'),
(12, 'Fuga porro sed quis est modi aut.', 'enim-voluptate-eaque-quia-autem-omnis-enim-ducimus', 'https://via.placeholder.com/640x480.png/009966?text=quidem', NULL, 'Nobis veritatis voluptatem dicta perspiciatis tempore cupiditate. Quia ab ipsam sint.', '2018-09-14 02:56:12', '2012-11-05 13:03:47'),
(13, 'Recusandae sequi repellat aspernatur sed itaque voluptate.', 'nemo-voluptatem-et-accusamus-vitae-ut-et-sed', 'https://via.placeholder.com/640x480.png/0088bb?text=neque', NULL, 'Id quidem similique cumque aperiam. Minima molestiae nihil ipsum.', '1973-03-19 08:41:16', '1974-09-27 15:19:29'),
(14, 'Molestiae nam sit omnis consequatur autem atque labore.', 'voluptas-dolorem-inventore-voluptatibus-quasi', 'https://via.placeholder.com/640x480.png/005544?text=inventore', NULL, 'Aut fugit nostrum repellendus soluta possimus. Harum sed dignissimos ut velit amet quisquam.', '1979-06-24 11:44:17', '1999-05-28 22:59:42'),
(15, 'Et maxime consequatur voluptatem reprehenderit omnis beatae.', 'nostrum-ex-est-aut-sed-temporibus-dicta-ipsa', 'https://via.placeholder.com/640x480.png/005588?text=officia', NULL, 'Placeat neque tenetur tenetur id eveniet. Repudiandae doloribus omnis ea delectus.', '1988-01-02 17:48:40', '1978-07-06 11:37:15'),
(16, 'Omnis et doloribus quia tempore beatae illum.', 'tempore-ut-dicta-nam-blanditiis-harum', 'https://via.placeholder.com/640x480.png/00eeee?text=sed', NULL, 'Rem hic velit sed qui omnis. Quod est occaecati ipsum et molestiae est.', '2017-06-05 15:39:17', '1976-05-26 05:42:18'),
(17, 'Quas provident sunt aut sit veritatis quis quo.', 'consequatur-molestiae-neque-quo-et', 'https://via.placeholder.com/640x480.png/00aa00?text=dolores', NULL, 'Vitae odit a nostrum. Voluptas odit error facilis et aut. Nemo nisi nostrum magni eos.', '1983-03-30 05:32:14', '2002-02-08 21:31:46'),
(18, 'Aperiam repellat quia culpa.', 'deserunt-tenetur-sapiente-voluptate', 'https://via.placeholder.com/640x480.png/00cc22?text=ullam', NULL, 'Provident officiis amet esse rerum et eum. Voluptas quo aspernatur aut atque.', '2007-08-21 08:12:33', '2019-10-25 01:00:57'),
(19, 'Consequuntur distinctio voluptatibus adipisci aperiam animi.', 'eaque-et-soluta-non-delectus-at', 'https://via.placeholder.com/640x480.png/004488?text=itaque', NULL, 'Ea et sit et. Illo nulla maiores blanditiis sit. Deleniti et qui in ad.', '2018-01-11 14:08:40', '1998-04-28 09:58:13'),
(20, 'Cumque voluptas ex harum occaecati sit dolor delectus.', 'at-corrupti-voluptatum-minima-et-ut-quia-quo', 'https://via.placeholder.com/640x480.png/000055?text=totam', NULL, 'Dolorum soluta veniam dolorem enim. Necessitatibus aspernatur quod rerum dolorem modi nesciunt.', '1993-07-19 04:44:33', '2014-09-25 19:51:33');

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
(5, '2022_09_19_174133_create_mainnews_table', 1),
(6, '2022_09_26_113832_create_testimonials_table', 1),
(7, '2022_09_26_133307_create_cities_table', 1);

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
-- Структура таблицы `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `city`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Damaris Simonis', 'New Joellemouth', 'Debitis officia et iure blanditiis ut ducimus. Omnis unde et beatae ab recusandae.', '2012-06-27 18:14:02', '2016-08-06 04:53:00'),
(2, 'Mrs. Jennyfer Bernier MD', 'Hesseltown', 'Voluptates quo fuga rerum perferendis commodi dolores tempore dolorem. Totam excepturi et ut id.', '1988-12-11 11:14:06', '1971-10-12 08:04:14'),
(3, 'Dr. Rodolfo Hirthe', 'Trompberg', 'Magnam et et incidunt. Esse neque voluptatibus magni qui tenetur. Earum qui voluptatem amet.', '1993-02-02 06:30:24', '2002-01-29 15:50:39'),
(4, 'Enoch Heidenreich', 'East Monique', 'Vel impedit id laboriosam reiciendis facere quis. Totam excepturi ratione nemo totam consequatur.', '1976-10-01 15:24:09', '1991-06-15 21:51:52'),
(5, 'Prof. Brook Witting', 'Simonisfort', 'Iste quasi blanditiis aut eveniet ullam totam. Quis quidem molestiae harum et.', '1996-05-01 07:56:56', '2017-03-22 14:58:54'),
(6, 'Oda Jacobi', 'South Gagefurt', 'Et sint et et dolores recusandae alias assumenda. Earum id non ea. Ut qui tenetur dolor nostrum.', '2017-10-24 10:08:18', '1988-06-24 19:42:02'),
(7, 'Earnest Borer', 'Alanamouth', 'Vel amet et nihil. Dolorum aut pariatur esse et enim porro. Voluptatem esse earum asperiores.', '2020-02-17 20:10:48', '2016-01-05 02:25:29'),
(8, 'Eugene Muller Jr.', 'Kozeyside', 'Voluptatum itaque asperiores ducimus voluptatem. Dicta modi sit aut est.', '1979-12-13 04:13:58', '2011-02-08 21:53:19'),
(9, 'Kellie Abernathy', 'North Geoffrey', 'Ratione laudantium velit voluptatem qui unde qui. Quia qui est minus magnam.', '1973-01-23 08:19:39', '1974-09-06 15:44:32'),
(10, 'Isobel Considine IV', 'Brownstad', 'Et quis cupiditate error optio. Aut sed delectus quisquam eius.', '1988-01-04 19:43:19', '2020-01-03 16:26:58'),
(11, 'Amina Kovacek', 'Calitown', 'Cumque eveniet quia nisi. Voluptatem non quasi odio sunt consequatur ipsum totam.', '2010-02-15 19:19:49', '2010-10-30 01:42:59'),
(12, 'Adrienne Schneider', 'Lake Monserrat', 'Sed id et nam sunt. Ipsa alias enim est dolorum ut autem. Sunt veniam est illo et omnis nihil quia.', '1973-08-14 21:30:59', '2001-09-07 02:36:13'),
(13, 'Catalina Bergnaum', 'Uptonmouth', 'Quia quo rerum illo sed modi voluptatum et. Dolore ducimus eius laborum.', '2003-10-15 01:15:30', '1990-03-19 10:47:11'),
(14, 'Mr. Ray Kreiger', 'Gretaville', 'Quibusdam aut quo ut aut. Et illum asperiores et sit. Dolores dicta deserunt voluptatibus amet.', '2004-01-01 11:04:18', '2015-12-05 22:32:52'),
(15, 'Ardella Johnson', 'Salvadorburgh', 'Et rerum atque sed nisi. Cumque provident sunt voluptate. Cumque est odio cum.', '1970-02-02 06:51:40', '2020-10-10 03:10:31'),
(16, 'Bud Beatty', 'McCulloughland', 'Ut sit sint corporis. Doloribus harum cumque sapiente veniam. Ut inventore ex sed voluptatum iusto.', '1972-02-16 07:57:51', '1970-09-18 17:52:40'),
(17, 'Randi Borer Sr.', 'Howellshire', 'Est aut vero cumque rerum in. Excepturi facilis sunt ipsum.', '1980-03-01 21:19:15', '1997-02-25 13:36:42'),
(18, 'Estelle Zieme', 'New Coltfurt', 'Ducimus in autem omnis et sint. Ea quis at tempore enim ut sit. Facilis et nemo rem quasi.', '1987-10-09 05:05:21', '2014-04-17 20:55:16'),
(19, 'Mable Watsica MD', 'Charleyburgh', 'Cumque possimus voluptatem consequatur sed. Excepturi ut nam quidem. Molestias dolor non omnis.', '2008-04-22 01:01:17', '2018-10-13 04:40:41'),
(20, 'Dr. Eunice Murazik DVM', 'Rippintown', 'Corrupti eveniet consectetur numquam doloribus. Sapiente qui assumenda maxime accusamus.', '1997-11-18 03:39:31', '2012-11-26 13:11:12');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Kade Ziemann I', 'pbergstrom@example.com', 'partner', '2022-10-04 13:34:02', '$2y$10$FEPLYF9UmqnK0TmpkThdVuTesS7bXj2sY8WeskCuGySkwWeEtRcXm', 'lG7maowPYf', '2022-10-04 13:34:02', '2022-10-04 13:34:02'),
(2, 'Mr. Armani Bradtke IV', 'jaime.mante@example.net', 'partner', '2022-10-04 13:34:02', '$2y$10$8ppxz2SukNRIM4qXIi1YJe4L4p61x81mesFu5NqAoHq0DHWBG96b2', 'BNhyOMUpwD', '2022-10-04 13:34:02', '2022-10-04 13:34:02'),
(3, 'Delmer Wyman', 'kuhlman.elenor@example.net', 'partner', '2022-10-04 13:34:02', '$2y$10$Z2xdj8FYV2LOyDLuWNCCRefKsQ6Se5CBuy3.x2vJFsqyWnCuWKdxm', 'Ye7MIatPLp', '2022-10-04 13:34:02', '2022-10-04 13:34:02');

--
-- Индексы сохранённых таблиц
--

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
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT для таблицы `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
