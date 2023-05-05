-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Maio-2023 às 23:20
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `moztopup`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `games`
--

CREATE TABLE `games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `produced_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `games`
--

INSERT INTO `games` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`, `deleted_at`, `produced_by`) VALUES
(1, 'Free Fire', 'Free Fire_cover.jpg/5e31850a-e96c-11ed-9898-6045cb22b23b_cover.png', 'Este e um teste de atualizacao', '2023-04-23 06:52:32', '2023-05-03 03:44:47', NULL, 'Garena'),
(2, 'Fortnite', 'Fortnite_cover.jfif', 'Jogo de ação a ceu aberto', '2023-04-24 10:15:42', '2023-04-24 10:15:42', '2023-05-05 19:28:20', NULL),
(3, 'PubG', 'PubG_cover.jpg', 'Jogo de guerra a céu aberto', '2023-04-24 12:50:02', '2023-04-24 12:50:02', '2023-05-05 19:28:27', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_23_005525_add_permission_to_users_table', 2),
(6, '2023_04_23_062413_create_games_table', 2),
(7, '2023_04_23_062442_create_recharge_types_table', 2),
(8, '2023_04_23_062452_create_recharges_table', 2),
(9, '2023_04_28_082635_add_phone_to_users_table', 3),
(10, '2023_04_28_165500_add_image_to_recharge_types_table', 4),
(11, '2023_04_28_170112_add_created_by_to_gamess_table', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `recharges`
--

CREATE TABLE `recharges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_id` bigint(20) UNSIGNED NOT NULL,
  `recharge_type_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL DEFAULT 'AVALIABLE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `recharges`
--

INSERT INTO `recharges` (`id`, `game_id`, `recharge_type_id`, `user_id`, `description`, `code`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 4, NULL, 'AMAT-555FFDfs', 'AVALIABLE', '2023-04-23 08:51:35', '2023-05-05 15:28:42', NULL),
(2, 2, 3, NULL, NULL, 'AMAT555HsV21', 'AVALIABLE', '2023-04-24 10:19:09', '2023-05-05 12:53:06', '2023-05-05 12:53:06'),
(3, 3, 4, NULL, NULL, '10111OlasaNwel43', 'AVALIABLE', '2023-04-24 12:55:36', '2023-05-05 12:53:43', '2023-05-05 12:53:43'),
(4, 3, 5, NULL, NULL, '1102plsaRtsMdsdf33', 'AVALIABLE', '2023-04-24 12:56:05', '2023-05-05 12:54:33', '2023-05-05 12:54:33'),
(5, 1, 2, 4, NULL, 'M55-444', 'AVALIABLE', '2023-05-05 17:51:10', '2023-05-05 19:10:47', NULL),
(6, 1, 7, NULL, NULL, '1102BBBBhsadahjda', 'AVALIABLE', '2023-05-05 19:11:54', '2023-05-05 19:11:54', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `recharge_types`
--

CREATE TABLE `recharge_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` double NOT NULL,
  `promotion` tinyint(1) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `recharge_types`
--

INSERT INTO `recharge_types` (`id`, `game_id`, `title`, `description`, `price`, `promotion`, `start_date`, `end_date`, `created_at`, `updated_at`, `deleted_at`, `image`) VALUES
(1, 1, '100 Diamantes', NULL, 300, 0, NULL, NULL, '2023-04-23 08:34:30', '2023-04-23 08:34:30', NULL, NULL),
(2, 1, '200 Diamantes', NULL, 600, 0, NULL, NULL, '2023-04-23 11:26:19', '2023-04-23 11:26:19', NULL, NULL),
(7, 1, '410 Diamantes', 'Alusivo ao mes dos trabalhadores, para voce que e trabalhador e precisa relaxar com jogos', 360, 1, '2023-05-01', '2023-05-31', '2023-05-05 18:12:49', '2023-05-05 18:12:49', NULL, 'Free Fire_cover.jpg/3500e1a0-eb81-11ed-ab83-6045cb22b23b_type.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permissions` varchar(255) DEFAULT 'client',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `verify_phone_code` tinyint(1) DEFAULT NULL,
  `verifyed_phone` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `permissions`, `deleted_at`, `phone`, `verify_phone_code`, `verifyed_phone`) VALUES
(1, 'Klayton Massango', 'klayton0304massango@gmail.com', NULL, '$2y$10$a7efPP/6MQDYPXo/AUxc3ezbhG/ibmOSh1a0BHhGOqBSfEx8746wK', 'hkP07d506TybOc5Nr96vkKlM99SzYISDkF7VgmtC9ly5K0JihE71dE6VUT2z', '2023-04-21 09:51:49', '2023-04-28 05:49:35', 'admin', NULL, NULL, NULL, 0),
(3, 'Amadeu Abreu', 'amadeu@gmail.com', '2023-04-28 06:10:13', '$2y$10$vZSRWGxCXLb3gEK.kZjkTeT9oEvurLWVufyfVhWW8k5pylOMjHL4a', NULL, '2023-04-24 10:09:06', '2023-05-05 12:17:24', 'EDITOR', NULL, NULL, NULL, 0),
(4, 'Kenny Mondlane', 'kenny@gmail.com', '2023-05-05 19:06:48', '$2y$10$bLM7X4uYN/i/JgAVoO0ZF.L4qNHAf/ackj8WwMPiqC7/ynBLN4MVm', NULL, '2023-04-24 12:39:31', '2023-05-05 19:06:48', 'client', NULL, NULL, NULL, 0),
(7, 'José Explicador', 'info@explicador.co.mz', NULL, '$2y$10$/nxCaFaP0lurL00AZ/Wss.GCnWHQBIN7JCGfHKKCTVlGPtL7NjfZ2', NULL, '2023-04-26 07:31:51', '2023-04-26 07:31:51', 'client', NULL, NULL, NULL, 0),
(8, 'Edmilson Saiete', 'eddy@gmail.com', NULL, '$2y$10$jwoyWgG5AoQhs67moknbq.V7KTBttMVjk6tzLrdPFSsGMMBm3JoAO', NULL, '2023-04-28 15:28:34', '2023-04-28 15:28:34', 'client', NULL, NULL, NULL, 0),
(9, 'Antony Joseph', 'ajoseph@gmail.com', NULL, '$2y$10$A10oXK.57wZmFJLSeCRcgexNMNYJB2LXzgfbdPLNPq/4XRnAX74S2', NULL, '2023-04-28 15:39:29', '2023-04-28 15:39:29', 'client', NULL, NULL, NULL, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `recharges`
--
ALTER TABLE `recharges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recharges_game_id_foreign` (`game_id`),
  ADD KEY `recharges_recharge_type_id_foreign` (`recharge_type_id`),
  ADD KEY `recharges_user_id_foreign` (`user_id`);

--
-- Índices para tabela `recharge_types`
--
ALTER TABLE `recharge_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recharge_types_game_id_foreign` (`game_id`);

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
-- AUTO_INCREMENT de tabela `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `recharges`
--
ALTER TABLE `recharges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `recharge_types`
--
ALTER TABLE `recharge_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `recharges`
--
ALTER TABLE `recharges`
  ADD CONSTRAINT `recharges_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `recharges_recharge_type_id_foreign` FOREIGN KEY (`recharge_type_id`) REFERENCES `recharge_types` (`id`),
  ADD CONSTRAINT `recharges_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `recharge_types`
--
ALTER TABLE `recharge_types`
  ADD CONSTRAINT `recharge_types_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
