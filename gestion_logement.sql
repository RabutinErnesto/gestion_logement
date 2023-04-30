-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2023 at 09:38 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_logement`
--

-- --------------------------------------------------------

--
-- Table structure for table `acheters`
--

CREATE TABLE `acheters` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` int DEFAULT NULL,
  `logement_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acheters`
--

INSERT INTO `acheters` (`id`, `client_id`, `logement_id`, `created_at`, `updated_at`) VALUES
(1, 9, 2, '2023-04-30 04:07:32', '2023-04-30 04:07:32'),
(2, 5, 3, '2023-04-30 04:41:53', '2023-04-30 06:00:33'),
(3, 1, 1, '2023-04-30 06:00:00', '2023-04-30 06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `agences`
--

CREATE TABLE `agences` (
  `id` bigint UNSIGNED NOT NULL,
  `num_agence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agences`
--

INSERT INTO `agences` (`id`, `num_agence`, `libelle`, `adresse`, `created_at`, `updated_at`) VALUES
(1, '32B', 'AgenceTest1', 'Adresse AgenceTest1', '2023-04-30 03:53:01', '2023-04-30 03:53:01'),
(2, '456AVD', 'Agence Miadana', 'Adress Ag_matsro 2', '2023-04-30 03:53:15', '2023-04-30 03:53:15'),
(3, '512CA', 'Agence RAS', 'Lot 45 ter Ambohintsoa', '2023-04-30 03:53:34', '2023-04-30 03:53:34'),
(4, '573GA', 'AgenceMatsiro', 'Lot 45d ter Mahazo', '2023-04-30 03:53:50', '2023-04-30 03:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `cites`
--

CREATE TABLE `cites` (
  `id` bigint UNSIGNED NOT NULL,
  `num_cite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_agence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cites`
--

INSERT INTO `cites` (`id`, `num_cite`, `libelle`, `pseudo`, `num_agence`, `created_at`, `updated_at`) VALUES
(1, '1234f', 'CiteTest2', 'Cite Ankorondrano', '32B', '2023-04-30 03:54:29', '2023-04-30 03:54:29'),
(2, '421Num', 'CiteTest1', 'Cite Mlam', '456AVD', '2023-04-30 03:55:11', '2023-04-30 03:55:11'),
(3, '78Uf', 'Cite be miray', 'Bem Cite', '512CA', '2023-04-30 03:55:34', '2023-04-30 03:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenoms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu_travail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenoms`, `sexe`, `lieu_travail`, `created_at`, `updated_at`) VALUES
(1, 'Rabutin', 'Ernesto', 'Homme', 'Complexe Ampefiloha', '2023-04-30 02:15:40', '2023-04-30 02:15:40'),
(2, 'Rakotomandimby', 'Voay', 'Homme', 'Tana', '2023-04-30 02:38:19', '2023-04-30 02:38:19'),
(3, 'Rabekoto', 'Koto', 'Homme', '67 ha', '2023-04-30 02:38:42', '2023-04-30 02:38:42'),
(4, 'Randrianaly', 'Maeva', 'Femme', 'Anosy', '2023-04-30 02:39:14', '2023-04-30 02:39:14'),
(5, 'Rasoamanarivo', 'Naivolala', 'Homme', 'Andavamamba', '2023-04-30 02:39:44', '2023-04-30 02:39:44'),
(6, 'RakoTomanaga', 'Edmondine', 'Femme', 'Mahamasina', '2023-04-30 02:40:36', '2023-04-30 02:40:36'),
(7, 'Rabearimanana', 'Bekoto', 'Homme', 'Tanjombato', '2023-04-30 02:41:05', '2023-04-30 02:41:05'),
(8, 'Randriamanarivo', 'patricia', 'Femme', 'Antaninarenina', '2023-04-30 02:41:42', '2023-04-30 02:41:42'),
(9, 'Kiala', 'Kely', 'Femme', 'Tsaralalana', '2023-04-30 02:42:04', '2023-04-30 02:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logements`
--

CREATE TABLE `logements` (
  `id` bigint UNSIGNED NOT NULL,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix_logement` int DEFAULT NULL,
  `nbr_piece` int DEFAULT NULL,
  `terrain_id` int DEFAULT NULL,
  `cite_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logements`
--

INSERT INTO `logements` (`id`, `ref`, `prix_logement`, `nbr_piece`, `terrain_id`, `cite_id`, `created_at`, `updated_at`) VALUES
(1, 'Logement Manjary', 190000, 4, 1, 3, '2023-04-30 04:01:47', '2023-04-30 04:01:47'),
(2, 'Logement Mlamy', 150000, 6, 2, 2, '2023-04-30 04:02:50', '2023-04-30 04:02:50'),
(3, 'log', 50000, 2, 3, 2, '2023-04-30 04:03:13', '2023-04-30 04:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_29_170754_create_clients_table', 1),
(17, '2023_04_29_170847_create_logements_table', 2),
(18, '2023_04_29_170909_create_agences_table', 2),
(19, '2023_04_29_170948_create_cites_table', 2),
(20, '2023_04_29_171006_create_terrains_table', 2),
(21, '2023_04_29_171031_create_acheters_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terrains`
--

CREATE TABLE `terrains` (
  `id` bigint UNSIGNED NOT NULL,
  `num_terrain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `superficie_terrain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terrains`
--

INSERT INTO `terrains` (`id`, `num_terrain`, `superficie_terrain`, `created_at`, `updated_at`) VALUES
(1, '562 Ter1', '200', '2023-04-30 03:55:47', '2023-04-30 03:55:47'),
(2, '78 ter1', '50', '2023-04-30 03:55:58', '2023-04-30 03:55:58'),
(3, '453 ter1', '314', '2023-04-30 03:56:08', '2023-04-30 03:56:08'),
(4, '3 ter1', '15', '2023-04-30 03:56:21', '2023-04-30 03:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rabutin Andrianiko', 'rabutinernesto2@gmail.com', NULL, '$2y$10$GCYu1reMlOfKW0iS0lERvOstr/xt7ohTMKTy2KRz5xm3af2Oyx2cm', NULL, '2023-04-29 14:21:38', '2023-04-29 14:21:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acheters`
--
ALTER TABLE `acheters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agences`
--
ALTER TABLE `agences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cites`
--
ALTER TABLE `cites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logements`
--
ALTER TABLE `logements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `terrains`
--
ALTER TABLE `terrains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acheters`
--
ALTER TABLE `acheters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agences`
--
ALTER TABLE `agences`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cites`
--
ALTER TABLE `cites`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logements`
--
ALTER TABLE `logements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terrains`
--
ALTER TABLE `terrains`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
