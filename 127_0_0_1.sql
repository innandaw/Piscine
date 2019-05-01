-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 01 mai 2019 à 14:32
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eceamazon`
--
CREATE DATABASE IF NOT EXISTS `eceamazon` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `eceamazon`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `photos` blob,
  `description` text NOT NULL,
  `video` blob,
  `categorie` varchar(60) NOT NULL,
  `prix` float DEFAULT NULL,
  `taille` varchar(3) DEFAULT NULL,
  `sous_cat` varchar(50) DEFAULT NULL,
  `couleur` varchar(20) DEFAULT NULL,
  `sexe` char(1) DEFAULT NULL,
  `stock` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `nom`, `photos`, `description`, `video`, `categorie`, `prix`, `taille`, `sous_cat`, `couleur`, `sexe`, `stock`) VALUES
(1, 'Cardigan Slim Court', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a sapien hendrerit,\r\nlobortis ex eget, blandit libero. Morbi vel euismod dolor. Phasellus ac tellus\r\nconsectetur, scelerisque leo id, tempor enim. Fusce cursus venenatis sapien, sed\r\nsuscipit nisi placerat sit amet. Curabitur non egestas ligula.', NULL, 'Vetements', 17.5, '36', 'Hauts', 'Gris', 'F', 10),
(2, 'Haut Court Style Champetre', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a sapien hendrerit,\r\nlobortis ex eget, blandit libero. Morbi vel euismod dolor. Phasellus ac tellus\r\nconsectetur, scelerisque leo id, tempor enim. Fusce cursus venenatis sapien, sed\r\nsuscipit nisi placerat sit amet. Curabitur non egestas ligula.', NULL, 'Vetements', 19.5, '36', 'Hauts', 'Blanc', 'F', 10),
(3, 'Pantacourt millitaire', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu ultricies risus. Cras metus leo, facilisis imperdiet ligula sed, lacinia vehicula arcu. Suspendisse eleifend libero in accumsan dictum. Mauris ac fringilla metus. Mauris ac felis sit amet dui commodo porttitor vitae ac tortor. Cras nec enim blandit, condimentum metus ut, varius velit. Etiam auctor cursus leo eget placerat. Nulla tortor risus, gravida eget urna non, tristique porta nulla. Nullam pretium diam in orci consectetur lacinia. Aenean vehicula tortor a porttitor tincidunt. \r\n', NULL, 'Vetements', 15.05, 'M', 'Bas', 'Vert', 'H', 3),
(4, 'Jean slim', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu ultricies risus. Cras metus leo, facilisis imperdiet ligula sed, lacinia vehicula arcu. Suspendisse eleifend libero in accumsan dictum. Mauris ac fringilla metus. Mauris ac felis sit amet dui commodo porttitor vitae ac tortor. Cras nec enim blandit, condimentum metus ut, varius velit. Etiam auctor cursus leo eget placerat. Nulla tortor risus, gravida eget urna non, tristique porta nulla. Nullam pretium diam in orci consectetur lacinia. Aenean vehicula tortor a porttitor tincidunt. \r\n', NULL, 'Vetements', 29, '38', 'Bas', 'Noir', 'H', 5),
(5, 'Jogging basic', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu ultricies risus. Cras metus leo, facilisis imperdiet ligula sed, lacinia vehicula arcu. Suspendisse eleifend libero in accumsan dictum. Mauris ac fringilla metus. Mauris ac felis sit amet dui commodo porttitor vitae ac tortor. Cras nec enim blandit, condimentum metus ut, varius velit. Etiam auctor cursus leo eget placerat. Nulla tortor risus, gravida eget urna non, tristique porta nulla. Nullam pretium diam in orci consectetur lacinia. Aenean vehicula tortor a porttitor tincidunt. \r\n', NULL, 'Vetements', 17.5, 'S', 'Bas', 'Gris', 'H', 25),
(6, 'Bottes', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu ultricies risus. Cras metus leo, facilisis imperdiet ligula sed, lacinia vehicula arcu. Suspendisse eleifend libero in accumsan dictum. Mauris ac fringilla metus. Mauris ac felis sit amet dui commodo porttitor vitae ac tortor. Cras nec enim blandit, condimentum metus ut, varius velit. Etiam auctor cursus leo eget placerat. Nulla tortor risus, gravida eget urna non, tristique porta nulla. Nullam pretium diam in orci consectetur lacinia. Aenean vehicula tortor a porttitor tincidunt. \r\n', NULL, 'Vetements', 21.5, '39', 'Chaussures', 'Marron', 'F', 20),
(7, 'Sandales', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu ultricies risus. Cras metus leo, facilisis imperdiet ligula sed, lacinia vehicula arcu. Suspendisse eleifend libero in accumsan dictum. Mauris ac fringilla metus. Mauris ac felis sit amet dui commodo porttitor vitae ac tortor. Cras nec enim blandit, condimentum metus ut, varius velit. Etiam auctor cursus leo eget placerat. Nulla tortor risus, gravida eget urna non, tristique porta nulla. Nullam pretium diam in orci consectetur lacinia. Aenean vehicula tortor a porttitor tincidunt. \r\n', NULL, 'Vetements', 17.5, '37', 'Chaussures', 'Rouge', 'F', 30),
(8, 'Jupe', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu ultricies risus. Cras metus leo, facilisis imperdiet ligula sed, lacinia vehicula arcu. Suspendisse eleifend libero in accumsan dictum. Mauris ac fringilla metus. Mauris ac felis sit amet dui commodo porttitor vitae ac tortor. Cras nec enim blandit, condimentum metus ut, varius velit. Etiam auctor cursus leo eget placerat. Nulla tortor risus, gravida eget urna non, tristique porta nulla. Nullam pretium diam in orci consectetur lacinia. Aenean vehicula tortor a porttitor tincidunt. \r\n', NULL, 'Vetements', 18, 'S', 'Bas', 'Noir', 'F', 20),
(9, 'T-shirt', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu ultricies risus. Cras metus leo, facilisis imperdiet ligula sed, lacinia vehicula arcu. Suspendisse eleifend libero in accumsan dictum. Mauris ac fringilla metus. Mauris ac felis sit amet dui commodo porttitor vitae ac tortor. Cras nec enim blandit, condimentum metus ut, varius velit. Etiam auctor cursus leo eget placerat. Nulla tortor risus, gravida eget urna non, tristique porta nulla. Nullam pretium diam in orci consectetur lacinia. Aenean vehicula tortor a porttitor tincidunt. \r\n', NULL, 'Vetements', 17.5, 'L', 'Hauts', 'Vert', 'H', 25),
(10, 'Tennis Nike', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu ultricies risus. Cras metus leo, facilisis imperdiet ligula sed, lacinia vehicula arcu. Suspendisse eleifend libero in accumsan dictum. Mauris ac fringilla metus. Mauris ac felis sit amet dui commodo porttitor vitae ac tortor. Cras nec enim blandit, condimentum metus ut, varius velit. Etiam auctor cursus leo eget placerat. Nulla tortor risus, gravida eget urna non, tristique porta nulla. Nullam pretium diam in orci consectetur lacinia. Aenean vehicula tortor a porttitor tincidunt. \r\n', NULL, 'Vetements', 35, '37', 'Chaussures', 'Blanc', 'H', 20);

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

DROP TABLE IF EXISTS `personnes`;
CREATE TABLE IF NOT EXISTS `personnes` (
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `date_naissance` date NOT NULL,
  `mail` varchar(60) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `CP` int(5) DEFAULT NULL,
  `pays` varchar(20) DEFAULT NULL,
  `tel` int(10) DEFAULT NULL,
  `type_carte` varchar(20) DEFAULT NULL,
  `numero_carte` bigint(16) DEFAULT NULL,
  `nom_carte` varchar(40) DEFAULT NULL,
  `date_exp` date DEFAULT NULL,
  `cvv` int(3) DEFAULT NULL,
  `Connexion` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`nom`, `prenom`, `date_naissance`, `mail`, `mdp`, `adresse`, `ville`, `CP`, `pays`, `tel`, `type_carte`, `numero_carte`, `nom_carte`, `date_exp`, `cvv`, `Connexion`) VALUES
('Ndaw', 'Inna', '1996-09-26', 'inna.ndaw@edu.ece.fr', 'inna2609.', '47 rue Navier', 'Paris', 75017, 'France', 61460553, 'Visa', 1234567890123456, 'Ndaw Inna', '2022-09-21', 0, 1),
('Flaquer', 'Laura', '1998-11-20', 'laura.flaquer-fernandez@edu.ece.fr', 'bluehair', '06 rue des chameaux ', 'Paris', 75016, 'France', 688904562, 'Visa', 6789135678904632, 'Flaquer Laura', '2019-08-19', 222, 0),
('Fong', 'Sarah', '1998-11-15', 'sarah.fong@edu.ece.fr', 'pierrelove', '10 rue des cailloux ', 'Clichy', 92110, 'France', 630825671, 'Visa', 987654321123456, 'Fong Sarah', '2020-03-19', 111, 0);
--
-- Base de données :  `famille`
--
CREATE DATABASE IF NOT EXISTS `famille` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `famille`;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Statut` varchar(255) NOT NULL,
  `DateNaissance` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`ID`, `Nom`, `Prenom`, `Statut`, `DateNaissance`) VALUES
(1, 'Dupond', 'Grégoire', 'Grand-père', '1942-05-17'),
(2, 'Dupond', 'Germaine', 'Grand-mère', '1942-02-15'),
(3, 'Dupond', 'Gérard', 'Père', '1969-12-22'),
(4, 'Dupond', 'Marie', 'Mère', '1971-03-01'),
(5, 'Dupond', 'Julien', 'Fils', '1995-05-17'),
(6, 'Dupond', 'Manon', 'Fille', '2000-11-29');
--
-- Base de données :  `livres`
--
CREATE DATABASE IF NOT EXISTS `livres` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `livres`;

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Auteur` varchar(255) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Année` date NOT NULL,
  `Editeur` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`ID`, `Auteur`, `Titre`, `Année`, `Editeur`) VALUES
(1, 'Victor Hugo', 'Les misérables', '1862-01-01', 'Albert Lacroix et Cie'),
(2, 'Emile Zola', 'Germinal', '1885-01-01', 'Gli Blas');
--
-- Base de données :  `tpnote2`
--
CREATE DATABASE IF NOT EXISTS `tpnote2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tpnote2`;

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

DROP TABLE IF EXISTS `employes`;
CREATE TABLE IF NOT EXISTS `employes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Prenom` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `DateEmbauche` date DEFAULT NULL,
  `ID_Travail` varchar(255) NOT NULL,
  `Salaire` int(11) NOT NULL,
  `ID_Patron` int(11) NOT NULL,
  `ID_Dept` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`ID`, `Prenom`, `Nom`, `DateEmbauche`, `ID_Travail`, `Salaire`, `ID_Patron`, `ID_Dept`) VALUES
(100, 'Steven', 'Chapelle', '2015-07-01', 'AD_VP', 4000, 0, 90),
(101, 'Francois', 'Macron', '2013-05-01', 'IT_MGR', 3200, 100, 90),
(103, 'Beatrice', 'Merkel', '2010-06-01', 'FI_MGR', 3100, 100, 100),
(104, 'Rana', 'Babli', '2015-05-01', 'FI_ACCOUNT', 2200, 103, 100),
(105, 'Jaya', 'Narain', '2012-04-15', 'ST_MGR', 2100, 100, 45),
(106, 'Travis', 'Griffith', '2014-01-05', 'ST_CLERK', 1950, 105, 45),
(107, 'Fatima', 'Cherif', '2007-05-01', 'FI_ACCOUNT', 2400, 103, 100),
(108, 'Pierre', 'Soukane', '2009-05-15', 'SA_MGR', 3225, 100, 60),
(109, 'Leslie', 'Hao', '2016-11-01', 'SA_REP', 1950, 108, 60),
(110, 'Ben', 'Senouci', '2018-03-15', 'IT_PROG', 2650, 101, 90),
(111, '1', '1', '2018-06-01', '1', 1, 1, 1),
(112, '1', '1', NULL, '1', 1, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
