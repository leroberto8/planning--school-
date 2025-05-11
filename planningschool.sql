-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 11 mai 2025 à 18:49
-- Version du serveur : 8.4.3
-- Version de PHP : 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `planningschool`
--

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `id` int NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `matiere_id` int DEFAULT NULL,
  `note` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

CREATE TABLE `salles` (
  `id` int NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`id`, `nom`) VALUES
(1, 'RBO'),
(2, 'Tusd');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('student','teacher','admin','superadmin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `secret_code`, `created_at`) VALUES
(1, 'Robert Toto', 'tidoghost135@gmail.com', '$2y$10$zWCxH65Vx/l7Vf1n2PQHeODre/NK0yKmOz8bOhPfCZPlwICgr4LZm', 'student', 'STUDENT123', '2025-04-28 23:05:26'),
(2, 'BOBI', 'pawel.risk@gmail.com', '$2y$10$LUUXEGvqar/TIz2IvE6jN.fd3viekHpwhobEoAxh607pWU95KezXO', 'student', 'STUDENT123', '2025-04-28 23:08:25'),
(3, 'Test User', 'test@example.com', 'hashed_password', 'student', 'STUDENT123', '2025-04-28 23:52:54'),
(4, 'Rob', 'robert.mbogni@hotmail.com', '$2y$10$uVfd2mNxilvIh5IdGWMR2el3.pjI.5u3t9P5U.YoJlbstsK8c6y3q', 'student', 'STUDENT123', '2025-04-29 00:22:36'),
(6, 'Nto', 'ghost135@gmail.com', '$2y$10$T.SIEQQ9OUJkxi3J0qlnuOHn2hrR8qsINrci4iwXNDKPXVFrMm1lS', 'student', 'STUDENT123', '2025-04-29 08:51:32'),
(7, 'Tata Toto', 'rt@gmail.com', '$2y$10$iqKs5G3Pynn2KAGakTGZCOe0jWBga6ScqOhhKb8e.i/QgkkWCyzpG', 'student', 'STUDENT123', '2025-04-29 10:28:57'),
(8, 'Natang', 'robert.mbogni@outlook.fr', '$2y$10$J80SvxTWlE.WDxcHPvO/2.Ppkc7AV3RqUaxJCXQgfbxmWFBueUvf2', 'student', 'STUDENT123', '2025-05-02 11:48:23');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `matiere_id` (`matiere_id`);

--
-- Index pour la table `salles`
--
ALTER TABLE `salles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salles`
--
ALTER TABLE `salles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `notes_ibfk_2` FOREIGN KEY (`matiere_id`) REFERENCES `matieres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
