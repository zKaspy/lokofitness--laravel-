-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 25 2020 г., 13:35
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lokofitness`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `text`, `approved`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Хороший фитнес-клуб, в котором хорошая атмосфера!', 1, 2, '2020-10-29 15:56:28', '2020-10-29 15:56:28'),
(2, 'Посещаю данный клуб длительное время. Впечатления только положительные! Радует персонал, а особенно администратор Наталья!', 1, 4, '2020-10-29 15:56:28', '2020-10-29 15:56:28'),
(3, 'Все устраивает, однако не хватает грамотного тренера по питанию. В остальном - клуб лучший в городе! #ЯЛюблюLokoFitness', 1, 6, '2020-10-29 15:52:28', '2020-10-29 15:56:28'),
(4, 'Лучший клуб во вселенной!', 1, 1, '2020-10-29 15:56:28', '2020-10-29 15:56:28'),
(5, 'Лучший фитнес-клуб в нашем городе!', 1, 5, '2020-10-31 08:46:29', '2020-10-31 08:46:29'),
(6, 'Лучший фитнес-клуб в нашем городе!', 1, 8, '2020-10-31 08:49:17', '2020-10-31 08:49:17'),
(8, 'Люблю данный фитнес-клуб, в нем есть все: доброжелательный и отзывчивый персонал, новые и чистые тренажеры, а также приятная атмосфера. Я занимался во многих клубах, но только в этом получил истинное удовольствие. \r\n#LokoFitnessРулит', 1, 9, '2020-11-02 13:16:39', '2020-11-02 13:16:39'),
(10, '123', 0, 4, '2020-11-02 13:43:24', '2020-11-02 13:43:24'),
(11, '123', 0, 4, '2020-11-02 13:44:02', '2020-11-02 13:44:02'),
(12, '123', 0, 4, '2020-11-02 13:44:23', '2020-11-02 13:44:23'),
(13, 'Лучший фитнес-клуб в нашем городе!', 0, 4, '2020-11-02 13:44:56', '2020-11-02 13:44:56'),
(14, '#ЯЛюблюLokoFitness', 0, 4, '2020-11-02 13:45:30', '2020-11-02 13:45:30'),
(15, '123', 0, 4, '2020-11-02 13:54:31', '2020-11-02 13:54:31');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `member_teams`
--

CREATE TABLE `member_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'img/default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `member_teams`
--

INSERT INTO `member_teams` (`id`, `name`, `position`, `experience`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Иванова Наталья', 'Директор Lokofitness', '14 лет', 'img/tren1.jpg', NULL, NULL),
(2, 'Алексеева Злата', 'Инструктор групповых программ', '5 лет', 'img/tren2.jpg', NULL, NULL),
(3, 'Оксана Васильева', 'Инструктор групповых программ', '4 года', 'img/tren3.png', NULL, NULL),
(4, 'Ольга Зайцева', 'Инструктор групповых программ', '5 лет', 'img/tren4.png', NULL, NULL),
(5, 'Дмитрий Мальцев', 'Инструктор тренажерного зала', '10 лет', 'img/tren6.jpg', NULL, NULL),
(6, 'Александра Галимова', 'Инструктор групповых программ', '5 лет', 'img/tren5.jpg', NULL, NULL),
(7, 'Буторина Влада', 'Инструктор тренажерного зала', '7 лет', 'img/tren12.jpg', NULL, NULL),
(8, 'Артём Павлов', 'Инструктор тренажерного зала', '8 лет', 'img/tren9.jpg', NULL, NULL),
(9, 'Евгения Ткаченко', 'Инструктор групповых программ', '4 года', 'img/tren7.jpg', NULL, NULL),
(10, 'Юлия Зеленская', 'Инструктор групповых программ', '7 лет', 'img/tren8.jpg', NULL, NULL),
(11, 'Александра Мисутина', 'Инструктор групповых программ', '12 лет', 'img/tren10.jpg', NULL, NULL),
(12, 'Евгения Буцаева ', 'Инструктор тренажерного зала', '8 лет', 'img/tren11.jpg', NULL, NULL);

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
(4, '2020_10_29_103949_add_img_to_user_table', 2),
(5, '2020_10_30_174414_add_emailverify_to_users_table', 3),
(6, '2020_10_31_152344_create_roles_table', 4),
(7, '2020_10_31_185044_create_member_teams_table', 5);

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
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'editor');

-- --------------------------------------------------------

--
-- Структура таблицы `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `social_accounts`
--

INSERT INTO `social_accounts` (`id`, `user_id`, `provider_id`, `provider`, `token`, `created_at`, `updated_at`) VALUES
(1, 4, '134658943', 'vkontakte', '1a6da048d9d03a6102f490f99a06872386dca89411348ec7d550b22d7f8aeb124e84f97ff1b0a73b67001', '2020-10-28 18:50:13', '2020-10-28 18:50:13');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/default.png',
  `email_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `email_verified` tinyint(1) NOT NULL DEFAULT 0,
  `role_id` tinyint(3) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `img`, `email_token`, `email_verified`, `role_id`) VALUES
(1, 'Valera', 'valera-markov-2016@mail.ru', NULL, '$2y$10$VOprqJzKSn0wc0VWEvXi4e7SAIzENSczUrdHBAeIiWxnTJ.jN2UUu', NULL, '2020-10-28 15:58:25', '2020-11-16 03:52:40', 'http://localhost:8000/storage/avatars/NXCJ28t4XM9Ya8lIMlpubaLRvmieMR5LeCfkfe5P.png', '0', 1, 0),
(2, 'contrerasoff', 'contrerasoff@mail.ru', NULL, '$2y$10$o6KD.c4e5J4pnHdxSZqTF.NjJlEXSs6bSPz2vY7Hfqc1rfUM7aOBe', NULL, '2020-10-28 16:08:54', '2020-10-28 16:08:54', 'img/default.png', 'null', 0, 0),
(3, 'tester', 'tester@mail.ru', NULL, '$2y$10$H3s6/r6JOAa6.yZ3I2bm9eqE4aJTnq1a5bb4NzaymXc3i1kue6j3C', NULL, '2020-10-28 16:11:39', '2020-10-28 16:11:39', 'img/default.png', 'null', 0, 0),
(4, 'Sergey Samsonas', 'samsonas2001@bk.ru', NULL, '$2y$10$xUo6zgrrUIA9sjhNhwnJyexOzY5vPOhYPmUhmHAM7.bW5blMI4Yma', '9WT6B8YOncsmg4JU00FiZKYqjliBlNcCqfOEL9JjdYfKsdTZmCgDWv80Wipu', '2020-10-28 18:50:13', '2020-11-09 14:52:24', 'http://localhost:8000/storage/avatars/FjjlmdH4CNSOmWuoBoZZ5xQ4n3hG4koZNTpDSY4t.jpeg', 'e96cb1b24145275f3528', 0, 1),
(5, 'Анжела', 'fitonyashka@mail.ru', NULL, '$2y$10$EE5BYnL3sLvXS86Q94b7Be2Icy5Cvhd5ftwidSwzgLrUqZ4CIHR.S', NULL, '2020-10-29 15:32:29', '2020-11-02 11:26:54', 'http://localhost:8000/storage/avatars/RWVpIAnfjJU237fJ86o4jTxvqYo5V20pBABwpiTQ.jpeg', '0', 1, 0),
(6, 'SeregaLazarev', 'sergelaz@mail.ru', NULL, '$2y$10$lJTqiM7WXa.q7pkKrIPe9e3a4jLwT4ylUBpMc5bnoNtqWXJHzFQy2', NULL, '2020-10-29 15:50:08', '2020-11-02 11:26:01', 'http://localhost:8000/storage/avatars/uEyXhSG11MY8K6AJVVl788jZlPGBiCZRHX0o807P.jpeg', '0', 1, 0),
(7, 'BlackMamba', 'cuzblack@mail.ru', NULL, '$2y$10$gV2OnJLniKFZkiylaMc50OvKcECF0jABuShXCMKgYTTR4IrMBFrFG', NULL, '2020-10-29 15:56:28', '2020-10-29 15:56:45', 'img/default.png', 'null', 0, 0),
(8, 'RussianClown', 'quixerr_wf@mail.ru', NULL, '$2y$10$HpFisXG8BAEu8SsN.uFqXOAnY7SRPy0ynHTACOLBXE3E5C3paxBNG', NULL, '2020-10-30 16:23:54', '2020-10-30 16:24:34', 'img/default.png', '0', 1, 0),
(9, 'Серега', 'sreylonds@bk.ru', NULL, '$2y$10$TOM322z7aT5R4QzpGSwKpeUjJDHzJfesR0Vrk0TBsN1IqczP83FPq', NULL, '2020-10-30 16:30:35', '2020-11-02 13:08:26', 'http://localhost:8000/storage/avatars/wL7EiWGcl7xrbKKiMNeTWgABBaFFfiTgBj8SQ8mI.gif', '0', 1, 1),
(10, 'tester', 'dojoho9362@aieen.com', NULL, '$2y$10$ga1nitJi5JcEVf884SS8.Ok1vFBAQ.bOge4Mtj9YwsGtlqnyzVNOa', NULL, '2020-10-31 08:23:43', '2020-10-31 08:24:29', 'img/default.png', '0', 1, 0),
(11, 'tester', 'testtt@mail.ru', NULL, '$2y$10$Axaoh.uBLrQ7SwTWbcbrEOQT5D3a/8eDz6uGyp/DB4kpZGIkp4gfC', NULL, '2020-10-31 10:47:03', '2020-10-31 10:47:03', 'img/default.png', 'null', 0, 0),
(15, 'RussianClown', 'asdsds@mail.ru', NULL, '$2y$10$2Wf8mGLrXgBS0nBAdN9jS.OOLwqFYTPDh3HnBWVgCzjUj17EFDHc6', NULL, '2020-10-31 11:23:39', '2020-10-31 11:27:31', 'img/default.png', 'bc360ea42a5862b7149c', 0, 0),
(16, 'AdminTest', '123123@mail.ru', NULL, '$2y$10$nEeJF2TS/UvrLTK4mws1De8qXyXPYVJp6IwfejpngYM9jLAVhknJe', NULL, '2020-10-31 13:30:16', '2020-10-31 13:30:16', 'img/default.png', 'null', 0, 1),
(17, 'dsds', 'dsf', NULL, '$2y$10$VF2eyXjRxjmBCx22I2FpPOmO4wbnPTKe2fDlN0mSzyz6aeG4K4gLq', NULL, '2020-11-20 03:01:52', '2020-11-20 03:01:52', 'img/default.png', 'null', 0, 0),
(18, 'Глеб', 'renoc59691@j24blog.com', NULL, '$2y$10$/4Q/jokubgXPACSx4lSVCuhnCgEMpfSA1HUnHB2ocluaOEhaOlxTO', NULL, '2020-12-25 07:20:55', '2020-12-25 07:20:59', 'img/default.png', '1c19abb44947b454f7f6', 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `member_teams`
--
ALTER TABLE `member_teams`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Индексы таблицы `social_accounts`
--
ALTER TABLE `social_accounts`
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
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `member_teams`
--
ALTER TABLE `member_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
