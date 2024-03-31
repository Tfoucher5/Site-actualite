-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 31 mars 2024 à 10:37
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

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
(4, 'Article Actualité', 'Ceci est un article que je dois remplir parce qu\'il faut du texte ici étant donné que je suis en train d\'écrire dans la partie dans laquelle se trouve le corps de l\'actualité c\'est pour cela que j\'écris beaucoup sans réel but et sans réelle intention d\'écrire quelque chose de vraiment très cohérent, j\'essaye juste de remplir un peu cette partie pour que ce ne soit pas trop ridicule', 'images\\travail.jpg', '2024-01-01', '2024-02-11', 'Theo Foucher', 'travail, équipe, bureau', 'TKT'),
(5, 'La neige elle fond', 'La neige elle fond vite en ce moment a cause du réchauffement climatique la je suis allé skié (un peu tard parce que nos vacances sont pas en même temps que les autres en février) mais du coup le premier jour de ski yavait pas beaucoup de neige et c\'est dommage parce que quand ya beaucoup de neige c\'est vraiment cool de skier. Le deuxième jour du coup on a pris un peu d\'altitude pour avoir plus de neige et c\'était mieux meme si en fin de matinée mes jambes en pouvaient plus xD.', 'images\\famille.jpg', '2024-02-28', '2024-02-28', 'Theo Foucher', 'neige, ski, hiver, rechauffement climatique', 'La météo'),
(6, 'encore du lorem parce que pourquoi pas ?', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis doloribus necessitatibus inventore excepturi? Porro, assumenda! Accusamus voluptates corporis saepe aut repellat earum aliquam nulla laboriosam voluptate. Error voluptate voluptates deserunt?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis doloribus necessitatibus inventore excepturi? Porro, assumenda! Accusamus voluptates corporis saepe aut repellat earum aliquam nulla laboriosam voluptate. Error voluptate voluptates deserunt?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis doloribus necessitat', 'images\\espace.jpg', '2022-02-04', '2023-06-14', 'Lorem', 'Lorem, ipsum, dolor, amet, earum', 'VS Code'),
(7, 'Lorem a fond', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis doloribus necessitatibus inventore excepturi? Porro, assumenda! Accusamus voluptates corporis saepe aut repellat earum aliquam nulla laboriosam voluptate. Error voluptate voluptates deserunt?\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis doloribus necessitatibus inventore excepturi? Porro, assumenda! Accusamus voluptates corporis saepe aut repellat earum aliquam nulla laboriosam voluptate. Error voluptate voluptates deserunt?\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis doloribus necess', 'images\\rayan.jpg', '2024-02-29', '2024-02-27', 'Lorem', 'lorem, ipsum, dolor, amet', 'vs code');

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `chemin`, `categorie_id`) VALUES
(1, 'Sport', '', NULL),
(3, 'foot', 'contact.php', 1),
(4, 'ski nordique', '', 1),
(5, 'Technologies', '', NULL),
(6, 'IA', '', 5);

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
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `prenom`, `mail`) VALUES
(49, 'Foucher', 'Theo', 'theonicolas.foucher@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ref_nom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `contenu` varchar(600) NOT NULL,
  `image` varchar(100) NOT NULL,
  `tags` varchar(50) NOT NULL,
  `date_publication` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `page`
--

INSERT INTO `page` (`id`, `ref_nom`, `nom`, `contenu`, `image`, `tags`, `date_publication`) VALUES
(1, 'foot', 'L\'Histoire du football', 'Les jeux de balle au pied existent dès l\'Antiquité. Ce sont des jeux et non des sports. Les Grecs connaissent ainsi plusieurs jeux de balle se pratiquant avec les pieds : aporrhaxis et phéninde à Athènes et episkyros, notamment à Sparte où le jeu semblait particulièrement violent. La situation est identique chez les Romains où l\'on pratique la pila paganica, la pila trigonalis, la follis et l\'harpastum. Les Chinois accomplissent également des exercices avec un ballon qu\'ils utilisent pour jongler et effectuer des passes ; cette activité pratiquée sans buts et en dehors de toute compétition ser', 'images\\foot.jpg', 'football, histoire, information', '2024-03-07'),
(2, 'ski nordique', 'La définition du Ski Nordique', 'Le terme de ski nordique fait référence à plusieurs disciplines de ski d\'inspiration scandinave relevant des activités nordiques. Selon le contexte, le terme de ski nordique a un sens différent.\r\n\r\nAinsi, le ski nordique est un terme générique qui regroupe plusieurs disciplines historiques du ski : le ski de fond, le saut à ski, le combiné nordique (sous l\'autorité de la Fédération internationale de ski qui fixe les règles pour la compétition) et le ski de randonnée nordique. Le biathlon, discipline plus récente et régie par une instance indépendante (Union internationale de biathlon), y est é', 'images\\ski nordique.png', 'ski, information, definition', '2024-03-27'),
(3, 'IA', 'L\'intelligencce Artificielle', 'Le terme « intelligence artificielle », créé par John McCarthy, est souvent abrégé par le sigle « IA » (ou « AI » en anglais, pour artificial intelligence). McCarthy définit l\'IA ainsi : « C\'est la science et l\'ingénierie de la fabrication de machines intelligentes, en particulier de programmes informatiques intelligents. Elle est liée à la tâche similaire qui consiste à utiliser des ordinateurs pour comprendre l\'intelligence humaine, mais l\'IA ne doit pas se limiter aux méthodes qui sont biologiquement observables. »\r\n\r\nElle est également définie par l\'un de ses créateurs, Marvin Lee Minsky, ', 'images\\IA.png', 'Technologie, innovations, intelligence artificiell', '2024-03-31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
