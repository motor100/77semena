-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 23 2022 г., 17:28
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
(1, 'Vel soluta et cupiditate alias esse illum.', 'ducimus-id-assumenda-ad-autem-neque-quisquam-corporis', 'https://via.placeholder.com/640x480.png/000033?text=unde', NULL, 'Odit architecto unde nostrum. Ducimus tempora ut voluptas qui dolorum est.', '2005-10-23 06:56:31', '1976-07-17 14:07:51'),
(2, 'Vero molestiae natus vero ducimus nam consequatur eligendi.', 'repellat-impedit-esse-dolorum-rerum-corporis-corrupti-totam', 'https://via.placeholder.com/640x480.png/007744?text=tempora', NULL, 'Incidunt laborum dicta et enim. Dolores officiis voluptate iure.', '1980-04-25 21:30:33', '1996-08-07 08:13:50'),
(3, 'Ut tempora culpa iusto fugiat officia sint ut.', 'quaerat-qui-eos-totam-quas', 'https://via.placeholder.com/640x480.png/003344?text=aperiam', NULL, 'Occaecati non est necessitatibus ut et tempore consequuntur. Numquam repellendus odit officia quod.', '2000-03-06 13:52:10', '1973-08-04 19:23:37'),
(4, 'Aliquid dolorem vero tenetur doloribus qui.', 'quasi-assumenda-modi-voluptas-perferendis-fugit-eius', 'https://via.placeholder.com/640x480.png/00bbbb?text=optio', NULL, 'Et voluptates repellat amet asperiores quibusdam. Sed soluta libero in molestiae error aut.', '1974-03-23 01:08:15', '2012-12-18 07:25:35'),
(5, 'Voluptatem iste assumenda nobis rerum eaque corrupti dolorem.', 'cum-ratione-et-laudantium-nobis', 'https://via.placeholder.com/640x480.png/0011dd?text=nam', NULL, 'Veritatis delectus similique necessitatibus sequi voluptas. Maiores asperiores sint aut et aliquam.', '1992-06-15 04:15:07', '2015-09-13 05:25:41'),
(6, 'Aut doloremque placeat esse nisi repellendus beatae harum.', 'totam-est-et-quos-officiis-ipsa-labore', 'https://via.placeholder.com/640x480.png/00bbee?text=dolorum', NULL, 'Nobis eum facilis molestiae voluptatem sint. Ut qui ea laborum aut. In quos natus dicta.', '1974-11-02 17:09:55', '1983-05-05 03:18:29'),
(7, 'Eveniet est ducimus corrupti sed ab.', 'suscipit-vero-nihil-facilis', 'https://via.placeholder.com/640x480.png/004455?text=sed', NULL, 'Amet dolores vitae atque ipsam id. Impedit qui in nemo. Nihil odit itaque magnam nostrum.', '2019-10-05 18:44:29', '1997-08-29 23:26:58'),
(8, 'Amet odio ipsum culpa dolor.', 'voluptatem-molestiae-vero-odio-neque-nihil', 'https://via.placeholder.com/640x480.png/00ff99?text=omnis', NULL, 'Soluta consequuntur labore modi. Consequatur possimus rerum porro necessitatibus iusto aut ut.', '2012-04-12 12:38:46', '1997-05-04 06:19:56'),
(9, 'Et ea ea et qui nesciunt ab quia.', 'sit-numquam-nemo-ut-quaerat-nobis-ut', 'https://via.placeholder.com/640x480.png/007799?text=minus', NULL, 'Ut non minus et dolores ut. At repellat quia esse.', '2003-04-07 10:24:26', '2016-12-21 08:16:00'),
(10, 'Et dolore repellendus sunt aperiam porro.', 'quis-consequuntur-distinctio-non-facilis', 'https://via.placeholder.com/640x480.png/003377?text=quia', NULL, 'Possimus sunt quia maxime laboriosam. Exercitationem qui quia recusandae odio.', '2013-02-26 04:45:29', '2014-03-09 19:18:02');

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
(5, '2022_09_19_174133_create_mainnews_table', 1);

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
-- Индексы сохранённых таблиц
--

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
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `mainnews`
--
ALTER TABLE `mainnews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
