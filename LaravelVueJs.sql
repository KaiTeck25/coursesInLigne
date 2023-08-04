-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 04 août 2023 à 15:02
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `LaravelVueJs`
--

-- --------------------------------------------------------

--
-- Structure de la table `completions`
--

CREATE TABLE `completions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `episode_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noImage.jpeg',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `path`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Mathématiques - Fonctions linéaires', 'En mathématiques, le terme fonction linéaire fait référence à deux notions distinctes mais liées : Dans le calcul et les domaines connexes, une fonction linéaire est une fonction dont le graphique est une ligne droite, c\'est-à-dire une fonction polynomiale de degré zéro ou un.', 'images/CZiQDDZABpvNVUZ4WQgWTZtgFMzOS4dCLgOJ6R4V.jpg', 1, '2023-08-04 13:46:55', '2023-08-04 13:46:55'),
(2, 'Cours d\'arabe', 'Arabe — Wikipédia\r\nLa langue arabe est marquée par une importante diglossie entre l\'arabe littéral, langue véhiculaire surtout écrite, et l\'arabe dialectal, langue vernaculaire surtout orale. L\'arabe littéral comprend l\'arabe classique (pré-coranique, coranique, et post-coranique) et l\'arabe standard moderne.', 'images/DbMyVy6BiKAzPCsYkOWtMU9ZSmgygNO4wvnad1E6.jpg', 1, '2023-08-04 13:53:50', '2023-08-04 13:53:50'),
(3, 'Anglais', 'L\'anglais est une langue germanique occidentale dont l\'origine se trouve dans les dialectes anglo-frisons apportés sur l\'île de Bretagne par les tribus germaniques venues s\'y installer, et fortement influencée ensuite, surtout au plan lexical, par les langues des colons originaires de Scandinavie,', 'images/6R7yxpltEDu1RHilEnRceuqxhdrllJ3QH1JCOFfL.jpg', 1, '2023-08-04 13:57:12', '2023-08-04 13:57:12'),
(4, 'Physique-Chimie', 'Ainsi, la physico-chimie est une sous-discipline de la physique qui s\'intéresse à la nature physique de la chimie. Les physico-chimistes étudient, par exemple, la dynamique des molécules ou l\'aspect quantique des réactions chimiques.', 'images/QfwXWQh5RIRzGcF3r1h1WISQcXupKsIvqcp93wrZ.jpg', 1, '2023-08-04 14:01:31', '2023-08-04 14:01:31');

-- --------------------------------------------------------

--
-- Structure de la table `episodes`
--

CREATE TABLE `episodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `duration` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `episodes`
--

INSERT INTO `episodes` (`id`, `title`, `description`, `video_url`, `course_id`, `created_at`, `updated_at`, `duration`) VALUES
(1, 'Représentation graphique', 'Dans cette vidéo, notre professeur de mathématiques revient sur la notion de fonction linéaire et plus particulièrement sur leur représentation graphique. A l\'aide d\'exemples concrets, découvrez comment construire une courbe et lire les représentations graphiques d\'une fonction linéaire.', 'https://www.youtube.com/watch?v=MSw2KL1xPKk', 1, '2023-08-04 13:46:55', '2023-08-04 13:46:55', NULL),
(2, 'Proportionnalité et pourcentages', 'Dans cette vidéo, notre professeur de mathématiques revient sur la notion de fonction linéaire et plus particulièrement du point de vue de la proportionnalité. A l\'aide d\'exemples concrets, découvrez comment modéliser une fonction à partir d\'un énoncé et comment exprimer des évolutions en pourcentage.', 'https://www.youtube.com/watch?v=kV4w8H90PNU', 1, '2023-08-04 13:46:55', '2023-08-04 13:46:55', NULL),
(3, 'Théorème de Thalès', 'Notre professeur de mathématiques vous explique l\'origine et les éléments clés du Théorème de Thalès ou Théorème des trois rapports égaux.   Révisez ce point crucial du programme de troisième et découvrez toutes les méthodes pour réussir vos exercices à coup sûr !', 'https://www.youtube.com/watch?v=_6j5fUxUnc8', 1, '2023-08-04 13:46:55', '2023-08-04 13:46:55', NULL),
(4, 'Introduction (1)', 'Bienvenue à tous sur cette nouvelle chaîne destinée à l\'apprentissage de la langue arabe !    Aujourd\'hui vidéo de présentation du projet, de ma personne et de ce que j\'attends de vous !  J\'explique également la méthodologie propice à adopter dans notre étude, accompagnée de quelques conseils.   Je tiens en premier lieu à m\'excuser pour la mauvaise qualité de l\'enregistrement audio.  En effet je suis en train de prendre en main l\'outil informatique et à l\'avenir les vidéos seront de meilleure qualité inchallah.   أسأل الله لي ولكم التوفيق  وصلى الله على نبينا وسلم', 'https://www.youtube.com/watch?v=nF4m3dty-gY', 2, '2023-08-04 13:53:50', '2023-08-04 13:53:50', NULL),
(5, 'Introduction (2)', 'Bienvenue à tous sur notre chaîne مبادئ اللغة!  J- 2 avant le début de notre programme !   Dès lundi inchallah j\'enverrai la première vidéo du tome 1 des livres de Médine.  Je ferai en sorte que tous les cours soient sur deux supports , l\'un vidéo et l\'autre pdf.   Malgré cela j\'enjoins toute personne désireuse de suivre le programme sérieusement à ne pas se contenter de ce dernier et à s\'équiper de deux cahiers comme je l\'ai précédemment expliqué.   Cette semaine commencera en douceur inchallah afin de pallier à tous les problèmes techniques éventuels.  Nous nous contenterons donc de trois vidéos pour celle-ci et nous ajusterons la cadence en fonction de la majorité inchallah.   C\'est le moment de se préparer et de faire les causes religieuses pour l\'accomplissement de ce grand projet. Soyez sincères dans cela, recherchez par cela la connaissance de votre religion.   Et certes celui qui emprunte un sentier à la recherche d\'une science Allah lui facilitera par celle-ci un chemin vers le paradis. ( Hadith)   Soyez prêts à vous engager et à fournir les efforts nécessaires à long terme. Ne partez pas défaitistes car l\'arabe est certes très facile à apprendre pour celui qui s\'en donne les moyens inchallah.   Je vous retrouve tous lundi inchallah, en attendant une petite vidéo de présentation de la langue arabe.   Je demande à Allah qu\'il nous rende sincères et véridiques dans nos œuvres.   وفقنا الله وإياكم لما يحبه ويرضى  والحمد لله رب العالمين', 'https://www.youtube.com/watch?v=Gs01M4Ps1YA', 2, '2023-08-04 13:53:50', '2023-08-04 13:53:50', NULL),
(6, 'Les Noms Démonstratifs (Ceci) Tome 1 de Médine', 'COURS 1/1   Nous y voilà pour le premier cours de notre série dans l\'étude de la langue arabe.   Cette semaine sera avant tout un échauffement pour tout le monde.    En effet, il est primordial d\'ajuster la cadence de nos cours et leur qualité.   De même qu\'il est essentiel que chacun adapte son rythme pour le bon suivi du programme.  Je suis donc ouvert à toute critique et conseil venant de vous.   Si quelqu\'un trouve que le rythme est trop rapide qu\'il me le fasse savoir.  Nous accélérerons la cadence dès la semaine prochaine donc manifestez vous si vous êtes nombreux dans ce cas.    Ensuite pour toute question je vais mettre en place un groupe inchallah Télégram.    Pour les exercices et examens, cette semaine ils consistent simplement à réécrire tout ce que nous avons vu dans le cours.   Et vous verrez que c\'est déjà pas mal !!!   qu\'Allah nous accorde la réussite dans ce projet.   وفق الله الجميع لما يحبه ويرضاه', 'https://www.youtube.com/watch?v=JxmZsUBlSv4', 2, '2023-08-04 13:53:50', '2023-08-04 13:53:50', NULL),
(7, 'Les adjectifs possessifs', 'digiSchool vous propose d\'apprendre à utiliser les adjectifs possessifs en anglais grâce à son professeur d\'anglais Mme Bouillet. Les adjectifs possessifs en anglais sont appris en classe de sixième et doivent être connus pour valider le niveau A2.  Tout d\'abord Mme Bouillet vous détaille à quoi servent les adjectifs possessifs : exprimer la possession, désigner ce qui nous appartient.  Elle vous propose ensuite un tableau de la liste des adjectifs possessifs correspondant aux pronoms personnels qu\'ils désignent et vous en donne la traduction française. Elle termine par une explication de l\'accord des adjectifs possessifs.', 'https://www.youtube.com/watch?v=HIWGZMPZfCA', 3, '2023-08-04 13:57:12', '2023-08-04 13:57:12', NULL),
(8, 'Se présenter en anglais : vocabulaire sur la famille', 'Pour vous aider à vous présenter en anglais sans problème, digiSchool vous propose une vidéo dans laquelle notre professeur d\'anglais, Mme Bouillet, vous donne une liste de vocabulaire à retenir. Ce vocabulaire est abordé en classe de sixième et doit donc être connu pour le niveau A2.  Mme Bouillet vous propose ici de revoir le vocabulaire de la famille en anglais, vous pourrez très facilement vous présenter, vous et votre famille.', 'https://www.youtube.com/watch?v=b2U8K3rSCBI', 3, '2023-08-04 13:57:12', '2023-08-04 13:57:12', NULL),
(9, 'Se présenter en anglais : parler de sa famille', 'Mme Bouillet vous propose à présent de revoir comment présenter sa famille en langue anglaise. Il s\'agit d\'un cours destiné aux élèves de sixième ou toute personne souhaitant débuter l\'anglais avec des bases solides.  Elle vous explique ainsi comment demander à une personne si elle a des frères et soeurs, comment dire qu\'on a des frères soeurs plus jeunes ou plus âgés, comment demander quel travail font les parents, comment répondre en donnant un nom de métier.', 'https://www.youtube.com/watch?v=U1r8QVBPic0', 3, '2023-08-04 13:57:12', '2023-08-04 13:57:12', NULL),
(10, 'Sources des rayonnements électromagnétiques', 'Cette vidéo vous est offerte par digiSchool et son professeur, M. Rachini. Il s\'agit d\'un cours de physique chimie sur les sources des rayonnements électromagnétiques.   Revoyez donc les sources naturelles et les sources fabriquées par l\'homme grâce à notre professeur.', 'https://www.youtube.com/watch?v=nPKbx3ca5cQ', 4, '2023-08-04 14:01:31', '2023-08-04 14:01:31', NULL),
(11, 'Interaction entre l\'atmosphère et les rayonnements', 'Cette vidéo est un cours de physique chimie offert par digiSchool et son professeur, M. Rachini.   Ce cours porte sur l\'interaction entre l\'atmosphère terrestre et les rayonnements électromagnétiques.   Ce cours fait partie du chapitre consacré aux sources des rayonnements électromagnétiques au programme de terminale Scientifique.', 'https://www.youtube.com/watch?v=l5pvoTxJd6g', 4, '2023-08-04 14:01:31', '2023-08-04 14:01:31', NULL),
(12, 'Ondes mécaniques : houle et ondes sismiques', 'Cette vidéo de cours de physique vous est offerte par digiSchool et son professeur, M. Rachini. Ce cours porte sur les ondes mécaniques, la houles et les ondes sismiques.   Ce cours fait partie du chapitre sur les sources des rayonnements électromagnétiques et traite donc des ondes qui se propagent dans la matière.', 'https://www.youtube.com/watch?v=Ul-Wg8vTysk', 4, '2023-08-04 14:01:31', '2023-08-04 14:01:31', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(61, '2014_10_12_000000_create_users_table', 1),
(62, '2014_10_12_100000_create_password_resets_table', 1),
(63, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(64, '2019_08_19_000000_create_failed_jobs_table', 1),
(65, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(66, '2020_09_14_130634_create_sessions_table', 1),
(67, '2020_09_14_131600_create_courses_table', 1),
(68, '2020_09_14_131653_create_episodes_table', 1),
(69, '2020_09_14_210801_add_duration_to_episodes_table', 1),
(70, '2020_09_15_162206_create_completions_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2aBc5N1U4VfOVCrIANsSDTCKjnlEBL14ha6ytCBU', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUGQ5NmVjTll1UnZRODVuczhDRlJ2bm1udkFVQlRpZ1FVSTRBT1ZzMyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hbGxDb3Vyc2VzP3BhZ2U9MSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRZMjdGdGl1Q2VPODBsR2l3RHVEUlF1ekdUZjB5MzBOZk9qYm8wL0QvZmJadlRST2Y5UlU3SyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkWTI3RnRpdUNlTzgwbEdpd0R1RFJRdXpHVGYweTMwTmZPamJvMC9EL2ZiWnZUUk9mOVJVN0siO30=', 1691161306);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `status`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'coder', '0', 'coder@gmail.com', '2023-08-04 13:40:21', '$2y$10$Y27FtiuCeO80lGiwDuDRQuzGTf0y30NfOjbo0/D/fbZvTROf9RU7K', NULL, NULL, 'tqmSskDTrW', NULL, NULL, '2023-08-04 13:40:21', '2023-08-04 13:40:21'),
(2, 'user', '1', 'user@tdo.com', '2023-08-04 13:40:21', '$2y$10$hy9veyQ4vt1rl9i3ckjukuSkzdSMhrHgvsoNFrsMNR8/QljvfbBy6', NULL, NULL, 'YvAFKkOajE', NULL, NULL, '2023-08-04 13:40:21', '2023-08-04 13:40:21');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `completions`
--
ALTER TABLE `completions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `completions_user_id_foreign` (`user_id`),
  ADD KEY `completions_episode_id_foreign` (`episode_id`);

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_user_id_foreign` (`user_id`);

--
-- Index pour la table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `episodes_course_id_foreign` (`course_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `completions`
--
ALTER TABLE `completions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `completions`
--
ALTER TABLE `completions`
  ADD CONSTRAINT `completions_episode_id_foreign` FOREIGN KEY (`episode_id`) REFERENCES `episodes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `completions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episodes_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
