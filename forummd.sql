-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 jan. 2022 à 20:52
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forummd`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `descript` text NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categori`
--

CREATE TABLE `categori` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `lien_img` text NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `civilite` enum('m','f') NOT NULL,
  `mdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `email`, `civilite`, `mdp`) VALUES
(1, 'SOSSA ', 'Eunice', 'eunice@gmail.com', 'f', '$2y$10$6ZAnIhq1xJT9A59S/oAmLetYY9CW/a3Be7VvVVrLxg.Bp8qgnaLgO'),
(2, 'KPEKPASSI ', 'Martine', 'martine@gmail.com', 'f', '$2y$10$PIfrqHopsGkM/5pcgu.lq.EvseCdR6ITxRGTm4uOvjv.s1GTBmb/i'),
(3, 'MOMO', 'Bérida', 'berida11@gmail.com', 'f', '$2y$10$ll8Ernr920j4Rps5Wwiq3u7hXJJVWdvMr6nvrndz3Ax7OaehRN0iS'),
(4, 'KPANOU', 'Charles', 'kpanoucharles@gmail.com', 'm', '$2y$10$QciJ0pfpUa/5l5CoUlW6ruOKxfO58isRgv/mSXrCbIabWEsYz8Csu'),
(5, 'SANT-ANNA', 'Martine', 'mdtech3007@gmail.com', 'f', '$2y$10$l6lgrm/igl35LzejXuH5/eyisxthti252mgo5vBT/fb76rQbA4ydO');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `descriptions` text NOT NULL,
  `contenu` text NOT NULL,
  `id_membre` int(11) NOT NULL,
  `email_membre` varchar(255) NOT NULL,
  `datpublication` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `titre`, `descriptions`, `contenu`, `id_membre`, `email_membre`, `datpublication`) VALUES
(1, 'Salut', 'Quand est-ce qu\'on utilise htmlentities? ', 'Et quand est-ce qu\'on utilise htmlspecialchars?', 4, 'kpanoucharles@gmail.com', '06/01/2022'),
(2, 'Bonsoir', 'Comment Héberger un site web', 'Au revoir', 4, 'kpanoucharles@gmail.com', '06/01/2022'),
(4, 'Android studio', 'Comment créer une activité dans android studio', 'Je ne me retrouve pas', 1, 'eunice@gmail.com', '07/01/2022');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `email_membre` varchar(255) NOT NULL,
  `id_question` int(11) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`id`, `id_membre`, `email_membre`, `id_question`, `contenu`) VALUES
(1, 4, 'kpanoucharles@gmail.com', 2, 'J\'attends'),
(2, 1, 'eunice@gmail.com', 2, 'Eh bien salut a tous<br />\r\n');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categori`
--
ALTER TABLE `categori`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categori`
--
ALTER TABLE `categori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
