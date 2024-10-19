-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 27 avr. 2021 à 22:03
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `naturalist`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `id_animal` int(30) NOT NULL AUTO_INCREMENT,
  `type_animal` varchar(30) NOT NULL,
  PRIMARY KEY (`id_animal`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `animal`
--

INSERT INTO `animal` (`id_animal`, `type_animal`) VALUES
(30, 'chien'),
(15, 'chat'),
(26, 'chÃ¨vre'),
(31, 'souris');

-- ------------------------------------------------------

--
-- Structure de la table `cathegorie`
--

DROP TABLE IF EXISTS `cathegorie`;
CREATE TABLE IF NOT EXISTS `cathegorie` (
  `id_cath` int(30) NOT NULL AUTO_INCREMENT,
  `designation` varchar(30) NOT NULL,
  `type_animal` varchar(30) NOT NULL,
  PRIMARY KEY (`id_cath`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cathegorie`
--

INSERT INTO `cathegorie` (`id_cath`, `designation`, `type_animal`) VALUES
(30, 'Aliment pour chat', 'chat'),
(29, 'anti puce pour chien', 'chien'),
(28, 'Aliment pour chien', 'chien');

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(30) NOT NULL,
  `sujet` varchar(30) NOT NULL,
  `message` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id_produit` int(30) NOT NULL AUTO_INCREMENT,
  `cathegorie` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `descriptionProd` text NOT NULL,
  `prix_achat` int(255) NOT NULL,
  `prix_vente` int(11) NOT NULL,
  `quantiteStock` int(30) NOT NULL,
  `img` blob NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `cathegorie`, `designation`, `marque`, `descriptionProd`, `prix_achat`, `prix_vente`, `quantiteStock`, `img`) VALUES
(11, 'Aliment pour chien', 'patÃ©e pour chien adulte', 'Edgard &amp; Cooper', 'Votre chien va les adorer ! DÃ©couvrez les pÃ¢tÃ©es Edgard &amp; Cooper Adulte sans cÃ©rÃ©ales ! Elles conviennent aux chiens de toutes tailles et d\'Ã¢ge adulte. ComposÃ©es de viande et poisson frais, de lÃ©gumes, de fruits et d\'herbes fraÃ®ches, ces pÃ¢tÃ©es ne contiennent pas de farine de viande ni de colorants et d\'arÃ´mes artificiels. Plusieurs saveurs existent pour plaire Ã  tous les chiens gourmands : Poulet et dinde Agneau et bÅ“uf Gibier et canard Faites de votre chien un hÃ©ros ! Edgard &amp; Cooper soutient les animaux qui sont dans le besoin et reverse 1% de son chiffre d\'affaires Ã  un projet caritatif pour leur venir en aide.', 4, 6, 6, 0x70726f647563742d332e6a7067),
(12, 'Aliment pour chien', 'croquette pour chien', 'frontline', 'idÃ©al pour la digestion de votre chien', 6, 4, 7, 0x70726f647563742d342e6a7067),
(13, 'anti puce pour chien', 'collier anti-bactÃ©rien', 'Edgard &amp; Cooper', 'idÃ©al pour la lutte contre les puces et tiques sur votre chien', 6, 6, 6, 0x70726f647563742d352e6a7067);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
