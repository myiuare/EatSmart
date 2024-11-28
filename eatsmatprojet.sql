-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 nov. 2024 à 15:14
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
-- Base de données : `eatsmatprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prix` decimal(15,2) DEFAULT NULL,
  `description` varchar(480) DEFAULT NULL,
  `id_categorie` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `nom`, `prix`, `description`, `id_categorie`, `image_url`) VALUES
(7, 'Le Qatayef', 5.30, 'Le katayef ou qatayef est un dessert à base de crêpe farcie de crème nappée de pistaches.', 2, 'https://www.fooddolls.com/wp-content/uploads/2022/04/Atayef12726.jpg\r\n'),
(3, 'Le Chawarma', 13.50, 'Viande épicée grillée sur une broche verticale, puis tranchée en lamelles.', 1, 'https://www.luxorandaswan.com/admin/uploads/1605829511Shawarma.png'),
(2, 'Baba Ganousch', 19.50, 'Ce plat est à base d\'aubergine (préalablement grillée), préparée en mousse, mélangée à du tahini.', 1, 'https://www.luxorandaswan.com/admin/uploads/1605829704Baba-Ganoush.jpg\r\n'),
(1, 'La Kofta', 14.00, 'Il s’agit de boulettes de viande hachée concoctées avec des épices. Ces boulettes sont traditionnellement roulées et rôties sur un bâton en bois, à la manière d’une brochette.', 1, 'https://www.voyageegypte.fr/cdn/eg-public/kofta_egyptien_shutterstock_1940304430-MAX-w1000h600.jpg'),
(8, 'Le jalebi égyptien', 4.78, 'Le jilapi ou jalebi est un délicieux beignet léger trempé dans un sirop de sucre.', 2, 'https://www.fooddolls.com/wp-content/uploads/2022/04/Atayef12726.jpg'),
(9, 'Le basbousa', 3.99, 'La basboussa est un gâteau de semoule au sirop de d\'eau de fleur d\'oranger.', 2, 'https://ilovearabicfood.com/wp-content/uploads/2020/08/01-Lotus-Basbousa.jpg'),
(13, 'Coca-cola', 1.50, NULL, 3, 'https://tp2019gmp1.wordpress.com/wp-content/uploads/2019/04/logo-coca-cola.png?w=648'),
(14, 'Sprite', 1.50, NULL, 3, 'https://upload.wikimedia.org/wikipedia/commons/b/b9/Sprite_Logo.svg'),
(15, 'Fanta', 1.50, NULL, 3, 'https://logo-marque.com/wp-content/uploads/2020/06/Fanta-Logo.png');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom`) VALUES
(1, 'Plats'),
(2, 'Desserts'),
(3, 'Boissons');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `Total` decimal(15,2) DEFAULT NULL,
  `Quantite_article` int(11) DEFAULT NULL,
  `dateCommande` date DEFAULT NULL,
  `statut` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

CREATE TABLE `contenir` (
  `id_article` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD PRIMARY KEY (`id_article`,`id_commande`),
  ADD KEY `id_commande` (`id_commande`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
