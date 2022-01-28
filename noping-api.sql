-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jan-2022 às 07:16
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `noping-api`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `client`
--

CREATE TABLE `client` (
  `CPF` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NAME` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DT_BIRTH` date DEFAULT NULL,
  `SEX` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `client`
--

INSERT INTO `client` (`CPF`, `NAME`, `DT_BIRTH`, `SEX`, `created_at`, `updated_at`) VALUES
('16410954077', 'KELVIN PEREIRA BISERRA', '1997-04-21', 'MASCULINO', NULL, '2022-01-28 07:37:44'),
('20260451002', 'FERNANDO FREIRE', '1998-09-14', 'MASCULINO', NULL, NULL),
('47086093025', 'DANIEL TOMAZ', '2002-06-30', 'MASCULINO', NULL, '2022-01-28 05:16:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(204, '2014_10_12_000000_create_users_table', 1),
(205, '2014_10_12_100000_create_password_resets_table', 1),
(206, '2019_08_19_000000_create_failed_jobs_table', 1),
(207, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(208, '2022_01_27_203935_create_client_table', 1),
(209, '2022_01_27_203948_create_supplier_table', 1),
(210, '2022_01_27_204002_create_product_table', 1),
(211, '2022_01_27_204008_create_sale_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(9, 'App\\Models\\User', 1, 'auth_token', 'e4a4be100ee40cc4c71a9ed31dea0cb2da281a5f0f81882ba76003430c8e40f6', '[\"*\"]', NULL, '2022-01-28 07:39:16', '2022-01-28 07:39:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `BAR_CODE` int(11) NOT NULL,
  `CNPJ` char(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TITLE` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RELEASE_DT` date DEFAULT NULL,
  `COVER` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PRICE` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`BAR_CODE`, `CNPJ`, `TITLE`, `RELEASE_DT`, `COVER`, `PRICE`, `created_at`, `updated_at`) VALUES
(12345, '13741832000100', 'POKEMON: ARCEUS', '2022-01-28', 'https://www.lendagames.com/wp-content/uploads/2021/11/GAME-POKEMON-LEGENDS-ARCEUS-COVER.jpg', 289.99, NULL, NULL),
(13579, '94081949000107', 'Life Is Strange: Complete Edition', '2015-01-30', 'https://cdn.cdkeys.com/media/catalog/product/l/i/life_is_strange_complete_season_pc_cover.jpg', 59.9, NULL, NULL),
(24680, '94081949000107', 'FINAL FANTASY: XV', '2016-11-29', 'https://upload.wikimedia.org/wikipedia/en/5/5a/FF_XV_cover_art.jpg', 349.99, NULL, NULL),
(67890, '48433848000130', 'LEGEND OF ZELDA: BREATH OF WILD', '2017-03-03', 'https://cdn.cdkeys.com/media/catalog/product/t/h/the_legend_of_zelda_-_breath_of_the_wild_switch_cover.png', 279.99, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sale`
--

CREATE TABLE `sale` (
  `CPF` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BAR_CODE` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DT_SALE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sale`
--

INSERT INTO `sale` (`CPF`, `BAR_CODE`, `DT_SALE`, `created_at`, `updated_at`) VALUES
('16410954077', '\'[\"67890\", \"12345\", \"\"24680\"]\'', '2022-01-27 22:17:42', NULL, NULL),
('20260451002', '\'[\"12345\", \"24680\"]\'', '2022-01-27 22:16:53', NULL, NULL),
('47086093025', '\'[\"12345\", \"67890\", \"24680\", \"13579\"]\'', '2022-01-28 04:00:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `supplier`
--

CREATE TABLE `supplier` (
  `CNPJ` char(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NAME` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LOGO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `supplier`
--

INSERT INTO `supplier` (`CNPJ`, `NAME`, `EMAIL`, `LOGO`, `created_at`, `updated_at`) VALUES
('04399927000105', 'Bandai Namco Games', 'bandainamco@gmail.com', 'https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/0015/7016/brand.gif?itok=m1gJxgXm', NULL, NULL),
('13741832000100', 'GAMEFREAK', 'gamefreak@gmail.com', 'https://seeklogo.com/images/G/game-freak-logo-F83EF2E7C4-seeklogo.com.png', NULL, NULL),
('48433848000130', 'NINTENDO', 'nintendo@gmail.com', 'https://images.squarespace-cdn.com/content/v1/58c35f74d1758e424ee76710/1517405733173-IHX7U326W33E9XN3NGOV/IMG_8513.JPG?format=500w', NULL, NULL),
('94081949000107', 'SQUARE ENIX', 'squareenix@gmail.com', 'https://jolstatic.fr/www/captures/57/5/34565.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
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
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', 'admin@gmail.com', NULL, '$2y$10$yEISDCdU0HNQICcjByNLRu5s6FBAgl5BzZwUJvaXN5OwOk8rkEB.S', NULL, '2022-01-28 07:04:35', '2022-01-28 07:04:35');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CPF`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`BAR_CODE`);

--
-- Índices para tabela `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`CPF`);

--
-- Índices para tabela `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`CNPJ`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
