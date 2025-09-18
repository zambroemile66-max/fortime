-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 18 sep. 2025 à 12:09
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fortime`
--

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

CREATE TABLE `application` (
  `id` char(36) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `job_id` char(36) DEFAULT NULL,
  `applied_at` datetime DEFAULT current_timestamp(),
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(512) DEFAULT NULL,
  `portfolio_url` varchar(512) DEFAULT NULL,
  `additional_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `application`
--

INSERT INTO `application` (`id`, `user_id`, `job_id`, `applied_at`, `full_name`, `email`, `phone`, `job_title`, `linkedin_url`, `portfolio_url`, `additional_info`) VALUES
('0d79f364-93f6-11f0-a013-106530278473', '53eefa8a-931f-11f0-aeef-106530278473', '5fa7738c-9362-11f0-aeef-106530278473', '2025-09-17 19:42:24', 'testuser', 'test@example.com', '+237 657 82 21 89', 'Assistant SEO', 'https://linkedin.com/testuser', 'https://github.io/testuser', 'I\'m fullstack dev');

--
-- Déclencheurs `application`
--
DELIMITER $$
CREATE TRIGGER `before_insert_application` BEFORE INSERT ON `application` FOR EACH ROW BEGIN
    SET NEW.id = UUID();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE `company` (
  `id` char(36) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `logo_url` varchar(512) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `founded_date` date DEFAULT NULL,
  `location` text DEFAULT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `tech_stack` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `company`
--

INSERT INTO `company` (`id`, `user_id`, `name`, `logo_url`, `website`, `founded_date`, `location`, `industry`, `description`, `tech_stack`) VALUES
('87285b1e-9333-11f0-aeef-106530278473', NULL, 'Codecraft inc', NULL, NULL, NULL, 'Cameroun,Afrique du Sud,Nigeria,Senegal,Congo ', 'Technology', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis placeat tempore necessitatibus quaerat maiores cupiditate earum, fugit illum ipsa laborum pariatur quod blanditiis dolores quos eos beatae eligendi. Natus, exercitationem.', 'HTML5,CSS3,PHP8,JavaScript,TypeScript'),
('88d68672-931a-11f0-aeef-106530278473', '7594b371-931a-11f0-aeef-106530278473', 'Codecraft corp', NULL, NULL, NULL, NULL, NULL, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque vero facere deleniti unde esse placeat?', NULL);

--
-- Déclencheurs `company`
--
DELIMITER $$
CREATE TRIGGER `before_insert_company` BEFORE INSERT ON `company` FOR EACH ROW BEGIN
    SET NEW.id = UUID();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `job`
--

CREATE TABLE `job` (
  `id` char(36) NOT NULL,
  `company_id` char(36) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `salary` varchar(100) DEFAULT NULL,
  `posted_on` date DEFAULT current_timestamp(),
  `apply_before` date DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `job`
--

INSERT INTO `job` (`id`, `company_id`, `title`, `description`, `location`, `type`, `salary`, `posted_on`, `apply_before`, `skills`, `category`) VALUES
('5fa7738c-9362-11f0-aeef-106530278473', '87285b1e-9333-11f0-aeef-106530278473', 'UX/UI Developper\r\n', 'Lorem ipsum dolor sit amet consectetur adipisicing...', 'Bangui,RCA', 'CDI', '100000', '2025-09-17', '2025-09-27', 'Project,Copywriting,Social,Media,Marketing,English,Copy Editing', 'Hacking,Coding,AI programming'),
('cb3fc663-933f-11f0-aeef-106530278473', '87285b1e-9333-11f0-aeef-106530278473', 'Assistant SEO', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sed cupiditate nobis at eos facere.', 'Yaoundé,Cameroun', 'CDD', 'Stage professionnel', '2025-09-16', '2025-09-30', NULL, 'Programming,Web Marketing');

--
-- Déclencheurs `job`
--
DELIMITER $$
CREATE TRIGGER `before_insert_job` BEFORE INSERT ON `job` FOR EACH ROW BEGIN
    SET NEW.id = UUID();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `team_member`
--

CREATE TABLE `team_member` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `avatar_url` varchar(512) DEFAULT NULL,
  `company_id` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déclencheurs `team_member`
--
DELIMITER $$
CREATE TRIGGER `before_insert_team_member` BEFORE INSERT ON `team_member` FOR EACH ROW BEGIN
    SET NEW.id = UUID();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `type` enum('job_seeker','company') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`, `type`) VALUES
('53eefa8a-931f-11f0-aeef-106530278473', 'Codecraft', 'codecraft@example.com', '$2y$10$P4pDsDeeYrEsujnPAa1xoemPzhhpqhzdQYhwlE/NHN8EpNir44z2m', 'job_seeker'),
('7594b371-931a-11f0-aeef-106530278473', 'testuser', 'test@example.com', '$2y$10$powzXmelQceMnSIjbv3IuurPQLE/rtYLaV7Ew5zChuo2/Pg8CPq1u', 'company');

--
-- Déclencheurs `user`
--
DELIMITER $$
CREATE TRIGGER `before_insert_user` BEFORE INSERT ON `user` FOR EACH ROW BEGIN
SET NEW.id = UUID();
END
$$
DELIMITER ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Index pour la table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Index pour la table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Index pour la table `team_member`
--
ALTER TABLE `team_member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `fk_company_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `team_member`
--
ALTER TABLE `team_member`
  ADD CONSTRAINT `team_member_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
