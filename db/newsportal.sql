-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 07:30 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', 'bangladesh', '2020-06-08 11:31:54', '2020-06-08 11:31:54'),
(2, 'International', 'International', '2020-06-08 11:32:10', '2020-06-08 11:32:10'),
(3, 'BUSINESS', 'business', '2020-06-08 23:19:43', '2020-06-08 23:19:43'),
(4, 'OPINION', 'opinion', '2020-06-08 23:19:53', '2020-06-08 23:19:53'),
(5, 'SPORTS', 'sports', '2020-06-08 23:20:09', '2020-06-08 23:20:09'),
(6, 'Entertainment', 'entertainment', '2020-06-08 23:20:25', '2020-06-08 23:20:25'),
(7, 'LIFESTYLE', 'lifestyle', '2020-06-08 23:20:52', '2020-06-08 23:20:52'),
(8, 'HEALTH', 'health', '2020-06-08 23:21:16', '2020-06-08 23:21:16'),
(9, 'SCIENCE', 'science', '2020-06-08 23:21:27', '2020-06-08 23:21:27'),
(10, 'TRAVEL', 'travel', '2020-06-08 23:21:47', '2020-06-08 23:21:47'),
(11, 'Environment', 'environement', '2020-06-08 23:22:30', '2020-06-08 23:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `categoriesnews`
--

CREATE TABLE `categoriesnews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categoriesnews`
--

INSERT INTO `categoriesnews` (`id`, `news_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 3, 1, NULL, NULL),
(3, 4, 8, NULL, NULL),
(4, 5, 3, NULL, NULL),
(5, 6, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` int(10) UNSIGNED NOT NULL,
  `commentable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2019_10_11_181258_create_news_table', 1),
(19, '2019_11_17_150102_create_pages_number_category', 1),
(21, '2014_10_12_000000_create_users_table', 2),
(22, '2014_10_12_100000_create_password_resets_table', 2),
(23, '2019_10_08_042347_create_categories_table', 2),
(24, '2019_10_08_043821_create_roles_table', 2),
(25, '2019_10_12_105719_create_tags_table', 2),
(26, '2019_10_16_084826_tags_news', 2),
(27, '2019_10_16_085240_categories_news', 2),
(28, '2019_12_12_064237_create_comments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_id`, `user_id`, `title`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 1, 0, 'Police Brutality in US: Anti-racism protests spread around world', 'police brutality in us: anti-racism protests spread around world', 'Police Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around world', '1591637580.jpg', '2020-06-08 11:33:01', '2020-06-08 11:33:01'),
(3, 1, 0, 'Shimulia-Kathalbari water transport to be suspended for 8 hours this Wednesday', 'shimulia-kathalbari water transport to be suspended for 8 hours this wednesday', 'Operation of ferries, launches, speed boats and trawlers will remain suspended on Shimulia-Kathalbari route from 11:00am to 7:00pm on Wednesday.\r\n\r\nThe authority took the decision to facilitate the installation of 31st span of the long-awaited Padma Bridge in the middle of Shimulia-Kathalbari channel of the Padma river on Wednesday, according to a press release of Bridge Division.\r\n\r\nPeople are requested to use the alternative route -- Paturia-Daulatdia -- on that day. Bridge Division also expressed regrets for the temporary problem.\r\n\r\n\r\n&nbsp;\r\n', '1591637880.jpg', '2020-06-08 11:38:00', '2020-06-08 11:38:00'),
(4, 8, 0, 'Favipiravir: A light of hope for COVID-19', 'favipiravir: a light of hope for covid-19', 'The antiviral drug Favipiravir, better known as Avigan, is being trialed as a treatment for the novel coronavirus disease (COVID-19). Avigan is the brand name of the drug Favipiravir, it was developed by the Japanese Fujifilm Toyama Chemical Company, has emerged as a potential drug to treat patients infected with the deadly novel coronavirus.\r\n\r\n&nbsp;Two renowned pharmaceutical industries of Bangladesh have manufactured this drug in their plant for the trial of COVID-19 patients in Bangladesh. Other pharmaceutical industries are also in the process of getting permission to produce the drug from the Directorate General of Drug Administration (DGDA), Bangladesh.\r\n\r\nIn Japan, Favipiravir was approved in 2014 for sale domestically under the brand name Avigan for stockpiling against influenza pandemics. Testing in the development stages, however, revealed that the drug can result in elevated blood uric acid levels and cause deformities in the unborn young of animals.\r\n\r\nThis anti-influenza drug has shown some promise in the fight against COVID-19, but experts warn that it has known side effects and that there is insufficient clinical data for its use. Favipiravir works by blocking the ability of a virus to replicate inside a cell. It induces lethal RNA transversion mutations, producing a nonviable viral phenotype.\r\n\r\nFavipiravir is a prodrug that is metabolised to its active form, favipiravir-ribofuranosyl-5-triphosphate, available in both oral and intravenous formulations. It does not inhibit RNA or DNA synthesis in mammalian cells and is not toxic to them.\r\n\r\nHowever, Favipiravir has not proven effective in primary human airway cells, casting doubt on its efficacy in influenza treatment. Japan approved favipiravir for treating influenza strains unresponsive to current antivirals. The Japanese Fujifilm Toyama Chemical Company initially hoped that favipiravir would become a new influenza medication that could replace oseltamivir (brand name Tamiflu).\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\nঅ্যা\r\n\r\n&nbsp;\r\n', '1591680330.jpg', '2020-06-08 23:25:31', '2020-06-08 23:25:31'),
(5, 3, 0, 'World Bank forecasts Bangladesh’s growth to slow to 1.6 percent', 'world bank forecasts bangladesh’s growth to slow to 1.6 percent', 'World Bank predicts that Bangladesh&#39;s growth will slow to 1.6 percent in the current fiscal year.\r\n\r\nThe global lender made the prediction in its &quot;Global Economic Prospects 2020&quot; report last night.\r\n\r\nThe country&#39;s growth is estimated to have slowed as the recovery in industrial production is reversed by Covid-19 related disruptions such as mitigation measures and global exports plunge, and as remittances fall -- the World Bank observed in its report.\r\n\r\nThe report said the GDP in the South Asian region is projected to contract by 2.7 percent in 2020 as pandemic mitigation measures hinder consumption and services activity and uncertainty about the course of the pandemic chills private investment.\r\n\r\nThe WB, in its global outlook, said the shock of the coronavirus pandemic and shutdown measures to contain it have plunged the global economy into a severe contraction. It predicted that the global economy will shrink by 5.2 percent this year.', '1591680495.jpg', '2020-06-08 23:28:16', '2020-06-08 23:28:16'),
(6, 9, 0, 'Annular solar eclipse on December 26, 2019', 'annular solar eclipse on december 26, 2019', 'A partial solar eclipse will be visible on December 26 in Bangladesh if the sky remains clear, according to Bangladesh Meteorological Department.\r\n\r\nThe solar eclipse will begin at 8.30am and end at 2.05pm (BST), said the BMD.\r\n\r\nApart from Bangladesh, the eclipse will be visible in India, Saudi Arabia, Qatar, United Arab Emirates, Oman, Sri Lanka, Malaysia, Indonesia and Singapore.\r\n\r\nPeople are requested to visit&nbsp;www.bmd.gov.bd/astronomy/eclipse&nbsp;for particulars.', '1591680591.jpg', '2020-06-08 23:29:51', '2020-06-08 23:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `pages_number_category`
--

CREATE TABLE `pages_number_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`) VALUES
(1, 'Admin', 'admin'),
(2, 'Author', 'author'),
(3, 'Editor', 'editor\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tagnews`
--

CREATE TABLE `tagnews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tagnews`
--

INSERT INTO `tagnews` (`id`, `news_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 3, 1, NULL, NULL),
(3, 4, 1, NULL, NULL),
(4, 5, 2, NULL, NULL),
(5, 6, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'banagladesh', '2020-06-08 11:32:23', '2020-06-08 11:32:23'),
(2, 'economoy', '2020-06-08 11:32:32', '2020-06-08 11:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mizanur Rahman', 'admin', 'mrahman5037@gmail.com', NULL, '$2y$10$7/fT3UjVy1oNtwHiVavJt.05uJPA8QJopuq.zCLgGMqq7ZznsZwFC', NULL, NULL, NULL),
(2, 2, 'Mizan', 'author', 'programmer620@gmail.com', NULL, '$2y$10$kicxfWyG3a7U4xa6xdz.fuWr4X/j8yh5nsZSm696rFFD0gGDS/kM2', NULL, NULL, NULL),
(3, 2, 'Farjana Akter Mitu', 'author', 'farjana@gmail.com', NULL, '$2y$10$i0D3yR9WY0mI8TOhEdsQLOEFiZiE3xKx.I3Nd1wrobLvDBvlVcgyS', NULL, NULL, NULL),
(4, 3, 'Editor', 'editor', 'editor@gmail.com', NULL, '$2y$10$i0D3yR9WY0mI8TOhEdsQLOEFiZiE3xKx.I3Nd1wrobLvDBvlVcgyS', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoriesnews`
--
ALTER TABLE `categoriesnews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoriesnews_news_id_foreign` (`news_id`),
  ADD KEY `categoriesnews_category_id_foreign` (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages_number_category`
--
ALTER TABLE `pages_number_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tagnews`
--
ALTER TABLE `tagnews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagnews_news_id_foreign` (`news_id`),
  ADD KEY `tagnews_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categoriesnews`
--
ALTER TABLE `categoriesnews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages_number_category`
--
ALTER TABLE `pages_number_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tagnews`
--
ALTER TABLE `tagnews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categoriesnews`
--
ALTER TABLE `categoriesnews`
  ADD CONSTRAINT `categoriesnews_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categoriesnews_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tagnews`
--
ALTER TABLE `tagnews`
  ADD CONSTRAINT `tagnews_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tagnews_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
