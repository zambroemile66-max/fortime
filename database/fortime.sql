-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 sep. 2025 à 15:44
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
('728ea6bd-98c8-11f0-b3dc-106530278473', '53eefa8a-931f-11f0-aeef-106530278473', '150ab293-98c8-11f0-b3dc-106530278473', '2025-09-23 22:58:33', 'Codecraft', 'codecraft@example.com', '12345678', 'Dev fullStack', 'AZZERTTYYU', '68d3180912164_Python_Essentials_1_certificate_danielzklug-gmail-com_f5839ec3-65ce-4b6f-a1f0-aaeda837f273.pdf', 'AZERTYUI');

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
('88d68672-931a-11f0-aeef-106530278473', '7594b371-931a-11f0-aeef-106530278473', 'Codecraft corp', '68d316d87de8b_493736402_122132246456789506_5815203807398932455_n.jpg', 'https://github.com/DanielZklug', '2025-09-21', 'Cameroon,Germany', 'Technology', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, non cumque. Deserunt, unde cumque? Nemo nesciunt, velit enim odio reiciendis molestiae officia dicta laborum eius ducimus blanditiis commodi amet, error nisi doloribus praesentium, esse tempora veritatis at pariatur deleniti saepe quis et. Incidunt ex possimus asperiores saepe suscipit! Odit cupiditate reiciendis qui amet expedita tenetur, inventore facere? Atque officia corrupti fugit, recusandae cumque magni quibusdam quidem doloribus non facere corporis! Eius autem obcaecati sunt unde fugit sed porro sapiente consequatur perspiciatis! Ad ipsum minus dicta, nesciunt vitae fuga rerum maiores cupiditate et, iure, libero consequatur deleniti alias minima! Sequi, excepturi.\r\n', 'HTML5,CSS3,PHP8,JavaScript,TypeScript,Angular,Laravel,Ionic');

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
  `skills` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `role` varchar(255) DEFAULT NULL,
  `company_id` char(36) DEFAULT NULL,
  `user_id` varchar(254) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
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
  `photo` varchar(200) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `type` enum('job_seeker','company') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `photo`, `name`, `email`, `password_hash`, `type`) VALUES
('53eefa8a-931f-11f0-aeef-106530278473', '68d317c9c18b8_OIP.jpg', 'Codecraft', 'codecraft@example.com', '$2y$10$P4pDsDeeYrEsujnPAa1xoemPzhhpqhzdQYhwlE/NHN8EpNir44z2m', 'job_seeker'),
('7594b371-931a-11f0-aeef-106530278473', '', 'testuser', 'test@example.com', '$2y$10$powzXmelQceMnSIjbv3IuurPQLE/rtYLaV7Ew5zChuo2/Pg8CPq1u', 'company');

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
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `user_id` (`user_id`);

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
