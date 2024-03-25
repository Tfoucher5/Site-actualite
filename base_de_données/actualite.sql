-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 25 mars 2024 à 15:56
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `actualite`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `corps_texte` varchar(600) NOT NULL,
  `image` varchar(90) NOT NULL,
  `date_publication` date NOT NULL,
  `date_revision` date NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `tags` varchar(150) NOT NULL,
  `sources` varchar(300) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `corps_texte`, `image`, `date_publication`, `date_revision`, `auteur`, `tags`, `sources`) VALUES
(1, 'Lorem Ipsum dolor amet', 'Lorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem Lorem', 'images\\ponton.jpg', '2022-02-04', '2024-02-15', 'Jean Luc Melenchon', 'nature, montagne', 'Lorem Ipsum Incorporation'),
(3, 'Ceci est un deuxième article', 'Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Article 2Articl', 'images\\montagne.jpg', '2023-02-08', '2023-06-14', 'Marine Le Pen', 'nature, montagne', 'La société de consommationennh'),
(4, 'Leo c\'est un bg', 'Leo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo JTMLeo J', 'images\\travail.jpg', '2024-01-01', '2024-02-11', 'Theo Foucher', 'travail, équipe, bureau', 'TKT'),
(5, 'Rayan il est jamais la', 'C\'est quand meme une dinguerie que Rayan il soit quasi jamais la nan mais sérieux un coup il a mal a la tête, un coup il se réveille pas et la il a le cul en feu ?! Comme si c\'était une excuse de dire qu\'on a le cul en feu pour pas aller en cours nan mais allo quoi !', 'images\\famille.jpg', '2024-02-28', '2024-02-28', 'Theo Foucher énervé', 'énervé, coup-de-gueule, tête-de-neuille', 'Theo Foucher qui pète un câble'),
(6, 'Leo et les blondes', 'Pourquoi Leo aime les blondes ?\r\n\r\nJe me demande pourquoi il aime les blondes ce garçon. Pour lui toutes les blondes sont des bombes haha ça rime je suis un poète ou quoi ? QUOICOUBEH ! Pardon je me suis laissé emporter je vais arrêter d\'écrire peut être mais la je dois faire un texte assez long parce que c\'est le contenu de l\'article donc ce serait dommage qu\'il soit tout petit nan vous trouvez pas ? Moi je trouve que si sérieux si yavait que 2 lignes ça aurait aucune gueule Lol ! Oh lala je suis cringe aller c\'est ciao !', 'images\\espace.jpg', '2022-02-04', '2023-06-14', 'Theo Foucher (Le confus)', 'discussion, blabla, cringe', 'Le cerveau de Theo'),
(7, 'Rayan le gros BG', 'BG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAHBG WLLAH', 'images\\rayan.jpg', '2024-02-29', '2024-02-27', 'ce que tu veux', 'rayan, love, bg, gigachad', 'comment ça mon boeuf');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `chemin` varchar(50) NOT NULL,
  `categorie_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categorie_id` (`categorie_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `chemin`, `categorie_id`) VALUES
(1, 'Sport', '', NULL),
(3, 'foot', 'contact.php', 1),
(4, 'ski nordique', '', 1),
(5, 'actualité', '', NULL),
(6, 'politique', '', 5);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `prenom`, `mail`) VALUES
(49, 'Foucher', 'Theo', 'theonicolas.foucher@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
