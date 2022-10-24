-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 24 2022 г., 22:13
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
(1, 'Миасс', 'Челябинская область', 456300, '1999-08-24 00:55:46', '2018-02-27 03:18:12'),
(2, 'Златоуст', 'Челябинская область', 456200, '2014-03-05 04:23:24', '2000-11-10 09:13:47'),
(3, 'Чебаркуль', 'Челябинская область', 456440, '1995-04-19 03:20:05', '1985-12-09 08:55:36'),
(4, 'Челябинск', 'Челябинская область', 454000, '2004-03-03 05:18:42', '2012-07-07 17:14:14'),
(5, 'Магнитогорск', 'Челябинская область', 455000, '1981-08-06 21:51:06', '2022-01-21 17:09:20');

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
(1, 'Quas voluptas maiores architecto consequuntur et corrupti non.', 'nam-repellendus-laudantium-eius-sint-dolores', 'https://via.placeholder.com/640x480.png/005511?text=sapiente', NULL, 'Quia qui consequuntur porro non voluptas quidem delectus. Et error et quidem ut.', '1984-04-13 09:18:22', '2003-04-05 20:40:55'),
(2, 'Nihil autem distinctio perferendis quidem suscipit quod.', 'laudantium-reiciendis-sed-atque-dicta-omnis', 'https://via.placeholder.com/640x480.png/0077cc?text=rem', NULL, 'Natus saepe similique ut illum illo. Sit rerum nulla quaerat eos magnam.', '2000-06-26 01:55:32', '2005-07-04 10:53:53'),
(3, 'Dolorum voluptatem porro architecto voluptatem qui qui in ducimus.', 'voluptatem-explicabo-optio-tempora-molestiae-quos-et-quo', 'https://via.placeholder.com/640x480.png/0022dd?text=minus', NULL, 'Mollitia voluptates quia aut non iste. Ut enim natus odit dolorem numquam.', '1995-10-04 08:24:04', '1976-02-27 20:51:25'),
(4, 'Voluptate ipsum officiis error.', 'qui-deleniti-sapiente-et-ratione-officiis-hic', 'https://via.placeholder.com/640x480.png/003300?text=quaerat', NULL, 'Enim id quia molestiae sit impedit. Aperiam consequatur vel est doloremque distinctio cumque nihil.', '2014-07-12 23:02:17', '2007-08-10 13:18:21'),
(5, 'Unde occaecati sint voluptate iure incidunt ut aut.', 'vitae-pariatur-et-eum-culpa-vel-sed-deserunt-quibusdam', 'https://via.placeholder.com/640x480.png/005544?text=rerum', NULL, 'Voluptas omnis natus ipsam provident odit fugit. Blanditiis perspiciatis impedit laudantium earum.', '2013-10-28 15:13:47', '1997-03-09 00:28:05'),
(6, 'Fugiat expedita rerum odio molestiae in.', 'quidem-minima-qui-delectus-et', 'https://via.placeholder.com/640x480.png/00aa33?text=magni', NULL, 'Est voluptate consequatur sequi aut id est qui numquam. Et nemo modi exercitationem.', '1977-02-26 17:50:26', '2002-06-15 08:19:44'),
(7, 'Nemo quia odit repellat quia quos eveniet error.', 'numquam-occaecati-voluptatibus-sint-corrupti-quisquam-consequatur-perferendis', 'https://via.placeholder.com/640x480.png/006600?text=dignissimos', NULL, 'Sit ut veritatis harum tempora in et. Veniam quasi repellat in repellat.', '1994-04-01 04:52:43', '2004-05-29 15:55:35'),
(8, 'Magnam corrupti dolor nemo iste dolorum.', 'tempora-nemo-et-reiciendis', 'https://via.placeholder.com/640x480.png/00bb22?text=consequatur', NULL, 'Voluptate cumque illo sint. Non tenetur sit unde accusamus. Aut deleniti qui quisquam ad.', '2009-05-10 22:25:09', '1989-08-10 00:05:03'),
(9, 'Quos ex laudantium ab quo qui reprehenderit vel.', 'quod-mollitia-nulla-ipsum-aliquid-reprehenderit', 'https://via.placeholder.com/640x480.png/002211?text=deserunt', NULL, 'Optio est fuga temporibus autem et ex voluptatum. Deserunt esse et dolorem vel et accusantium.', '1984-07-10 03:55:47', '2022-06-22 19:46:43'),
(10, 'Aliquid quod nobis nostrum atque sapiente maiores ad.', 'est-a-aut-iste-nihil-pariatur-eum', 'https://via.placeholder.com/640x480.png/00bb33?text=harum', NULL, 'Commodi culpa perspiciatis qui ut nulla. Sunt sint vel aut ut dolorem. Suscipit id sint aut aut.', '1984-03-04 16:45:29', '1982-10-16 15:46:56'),
(11, 'Itaque quia et odio.', 'non-doloremque-sed-necessitatibus-soluta-hic-aut-eos', 'https://via.placeholder.com/640x480.png/0000ff?text=sit', NULL, 'Consequuntur id non accusantium. Odio aut amet aut atque. Impedit deserunt sed quae quia.', '1980-02-07 16:07:38', '2019-02-13 11:54:25'),
(12, 'Qui nam excepturi sed et consequatur iste optio.', 'aut-est-nihil-quia-quae-molestiae-eligendi-accusantium', 'https://via.placeholder.com/640x480.png/00cc44?text=reprehenderit', NULL, 'Voluptatem iste qui nemo et quidem sapiente magni. Porro iusto dolor non modi quia qui.', '1984-12-15 23:11:32', '2015-06-03 08:02:23'),
(13, 'A enim quia dolorem omnis repudiandae minus omnis fuga.', 'rem-dignissimos-voluptas-sit-aut-blanditiis-in-veritatis-omnis', 'https://via.placeholder.com/640x480.png/0022cc?text=ut', NULL, 'Sunt porro rerum consequatur ipsa. Facilis aspernatur non rerum voluptatum modi et.', '2001-02-22 10:15:29', '2006-12-29 12:51:38'),
(14, 'Libero esse eaque ducimus sed.', 'autem-aut-qui-eos', 'https://via.placeholder.com/640x480.png/008844?text=at', NULL, 'Quam quasi voluptatem quis. Omnis quo aspernatur nam iste eius quia.', '1987-11-10 17:23:06', '1996-03-05 23:48:18'),
(15, 'Incidunt dolores veniam quidem sapiente et.', 'aspernatur-dolores-deserunt-nobis-aperiam-odio-ea', 'https://via.placeholder.com/640x480.png/0099bb?text=architecto', NULL, 'Vel in incidunt quod dicta. Et officia non molestiae omnis fugit aut.', '2021-09-05 10:36:24', '1988-01-09 22:01:20'),
(16, 'Odio nisi et qui est odio est voluptates illum.', 'non-delectus-explicabo-laboriosam-sed', 'https://via.placeholder.com/640x480.png/00cc44?text=et', NULL, 'Vel est quaerat quibusdam quod. Qui expedita adipisci qui.', '2015-04-20 14:05:39', '1996-01-30 04:48:05'),
(17, 'Cumque ad fugit fugiat voluptatibus deserunt tenetur.', 'nihil-maxime-voluptatem-adipisci-est', 'https://via.placeholder.com/640x480.png/003300?text=non', NULL, 'Mollitia sed quidem sit quo magnam corrupti et. Ex fugit quod adipisci ipsa dolorum in quidem quos.', '2007-12-01 01:32:01', '1980-08-25 03:53:07'),
(18, 'Numquam odit possimus porro officiis qui odio fugit.', 'saepe-aut-repudiandae-qui-tenetur-quisquam-ea-nihil', 'https://via.placeholder.com/640x480.png/006666?text=quis', NULL, 'Repudiandae sed in qui et. Harum repudiandae molestias sed ipsa deleniti nesciunt.', '1997-07-22 03:22:29', '1996-12-27 01:28:00'),
(19, 'Consequatur aut nihil laudantium ea.', 'autem-occaecati-molestias-enim-magnam-recusandae-repellat-magnam', 'https://via.placeholder.com/640x480.png/00eecc?text=magnam', NULL, 'Quibusdam sed cumque facere ut inventore. Beatae ipsum ea est corrupti provident.', '1997-06-03 23:55:21', '2004-04-02 08:03:19'),
(20, 'Ex assumenda asperiores cumque.', 'atque-molestiae-labore-architecto-est-est', 'https://via.placeholder.com/640x480.png/0033aa?text=sint', NULL, 'Dolorem sint nobis dicta nihil. Molestiae non iusto ipsam molestiae deserunt quae ut.', '2003-12-18 01:48:32', '2001-05-02 11:51:40');

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
  `publicated_at` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `city`, `text`, `publicated_at`, `created_at`, `updated_at`) VALUES
(1, 'Carol Doyle', 'Lake Tate', 'Consequatur blanditiis autem quidem. In dolores voluptas dolorem vel facere.', '2022-10-24 18:59:47', '1994-07-18 05:59:53', '1994-07-18 02:51:59'),
(2, 'Marian Senger', 'North Antoniaview', 'Odio dignissimos ratione dolores eligendi eum nisi placeat. Ut qui provident facilis officia.', '2022-10-24 18:59:47', '1976-01-17 01:36:15', '2016-07-18 15:51:01'),
(3, 'Estelle Hartmann DVM', 'West Luzmouth', 'Repudiandae qui modi eos. Labore fugit corporis dolores rerum. Dolor nisi officia vel qui.', '2022-10-24 18:59:47', '1994-04-10 22:20:27', '1981-05-15 12:02:42'),
(4, 'Reece Rempel III', 'Genovevabury', 'In sit nihil molestiae ipsam in non occaecati. Sint qui qui consequuntur. Aut iusto quam deserunt.', '2022-10-24 18:59:47', '2007-01-06 06:12:28', '1981-07-11 13:13:23'),
(5, 'Wiley Jacobs', 'New Austintown', 'Qui voluptas magnam ut. Assumenda velit sequi ea repellat aut. Consequatur nihil saepe debitis.', '2022-10-24 18:59:47', '2000-02-10 13:54:52', '1988-07-03 09:57:43'),
(6, 'Dr. Braulio Williamson', 'North Johnside', 'Ducimus id eos tempora quis. Laudantium sint hic quo quaerat quos sunt.', '2022-10-24 18:59:47', '1987-02-18 16:56:37', '2019-11-18 01:32:34'),
(7, 'Caesar Lindgren', 'New Katharinatown', 'Fugiat ut quasi saepe adipisci. Et quidem cum itaque nihil. Delectus eius omnis velit a ut autem.', '2022-10-24 18:59:47', '1983-05-24 10:29:28', '1987-10-28 04:53:50'),
(8, 'Lillian Mitchell III', 'West Bertamouth', 'Ducimus rerum nisi et est. In aperiam dolor atque quis dignissimos illo. Ut quo error et.', '2022-10-24 18:59:47', '1979-06-07 21:07:33', '1984-03-31 09:48:28'),
(9, 'Leone Feil MD', 'Lake Laurettaview', 'In sed ut esse. Maxime exercitationem ad sint eligendi est. Quis eos sed exercitationem velit.', '2022-10-24 18:59:47', '2005-01-26 20:48:27', '2013-11-12 20:53:09'),
(10, 'Prof. Eino Farrell Jr.', 'Port Valentine', 'Corrupti suscipit a dolorem dolorem. Alias minima id ab. Quas molestiae omnis numquam et quos.', '2022-10-24 18:59:47', '1972-03-25 19:24:04', '1986-06-24 23:49:43'),
(11, 'Carolyne Walsh IV', 'West Esmeraldaborough', 'Rerum quia quos temporibus omnis incidunt nihil. Mollitia voluptatem enim est aliquid enim.', '2022-10-24 18:59:47', '1995-12-25 00:54:36', '2016-02-05 02:36:50'),
(12, 'Liliana Schulist', 'Leschchester', 'Nam id eligendi esse ipsum assumenda. Tenetur ut ab dolores voluptas sunt.', '2022-10-24 18:59:47', '1973-08-06 03:30:13', '2011-02-03 19:01:18'),
(13, 'Noel D\'Amore', 'Orlandomouth', 'Voluptas ab error sed. Sint amet quia impedit quis. Aut est qui a est illum.', '2022-10-24 18:59:47', '1999-05-25 23:46:39', '1999-11-12 05:37:35'),
(14, 'Mrs. Verlie Roberts V', 'Lake Ladariusland', 'Quia numquam quo ut qui error dicta eum. Ipsum nesciunt tenetur sint cum quibusdam.', '2022-10-24 18:59:47', '2001-04-23 13:32:30', '1992-10-31 18:01:54'),
(15, 'Lynn Lang MD', 'Wintheiserchester', 'Quo est modi inventore porro. Quidem porro enim est est hic aut deserunt.', '2022-10-24 18:59:47', '2019-01-11 11:46:17', '1981-08-08 10:06:42'),
(16, 'Name Wisozk II', 'Omarichester', 'Voluptatibus dolores dolorem corrupti. Ea vel quia perferendis.', '2022-10-24 18:59:47', '1989-06-02 05:16:16', '1997-04-28 19:28:42'),
(17, 'Lottie Christiansen', 'Angelineport', 'In quam et veritatis sed pariatur. Fuga est odio adipisci et.', '2022-10-24 18:59:47', '1979-07-09 07:24:29', '1979-05-30 16:35:46'),
(18, 'Lulu Jones', 'Anikastad', 'Magnam eaque ut quidem veniam est. Temporibus voluptates quis aspernatur dolorum neque.', '2022-10-24 18:59:47', '1989-03-30 19:03:05', '1977-04-22 00:30:10'),
(19, 'Juliana McDermott', 'Karleebury', 'Assumenda aperiam architecto saepe accusamus. Commodi est qui ex assumenda a.', '2022-10-24 18:59:47', '1999-05-18 10:41:19', '1983-05-08 22:28:01'),
(20, 'Mrs. Ofelia Leuschke II', 'Duaneside', 'Quia quia voluptatem itaque est molestiae. Assumenda officia dolores in alias ut rerum.', '2022-10-24 18:59:47', '2013-03-29 04:59:40', '1977-09-30 18:34:47'),
(22, 'Имя', 'Москва', 'Это отзыв', NULL, '2022-10-24 14:10:55', '2022-10-24 14:10:55');

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
(1, 'Dolly Grimes', 'tatyana02@example.net', 'partner', '2022-10-24 13:59:46', '$2y$10$N.JOeV9RUKjw7m25MZufXu.mtg1zwQotlm7G7Q8uivkEYNGq/Xemy', 'ZTfNevQmMX', '2022-10-24 13:59:46', '2022-10-24 13:59:46'),
(2, 'Cedrick Prosacco II', 'ggrady@example.org', 'partner', '2022-10-24 13:59:46', '$2y$10$BtT9CWEAgNCXgTmjpFXLy.S4Ib8Xe9TG7I0PIfLN6MEbfKdcSF1YW', '7rHqSsgEy2', '2022-10-24 13:59:46', '2022-10-24 13:59:46'),
(3, 'Cecilia Runolfsson', 'lang.lillie@example.net', 'partner', '2022-10-24 13:59:46', '$2y$10$AeRCnhY5jHazDQOgH8gwO.6HdFKrese4gU3BmuBOTgLt033KVO8OC', 'tMTHvimcqV', '2022-10-24 13:59:46', '2022-10-24 13:59:46');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
