-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 27 Avril 2014 à 15:34
-- Version du serveur :  5.6.16
-- Version de PHP :  5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `site_enchere`
--

-- --------------------------------------------------------

--
-- Structure de la table `enchere`
--

CREATE TABLE IF NOT EXISTS `enchere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produit_id` int(11) NOT NULL,
  `vendeur_pseudo` varchar(45) NOT NULL,
  `dernier_pseudo` varchar(45) NOT NULL,
  `prix_initial` double DEFAULT NULL,
  `duree` float DEFAULT NULL,
  `prix` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`,`produit_id`,`vendeur_pseudo`,`dernier_pseudo`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_enchere_produit_idx` (`produit_id`),
  KEY `fk_enchere_users1_idx` (`vendeur_pseudo`),
  KEY `fk_enchere_users2_idx` (`dernier_pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `enchere`
--

INSERT INTO `enchere` (`id`, `produit_id`, `vendeur_pseudo`, `dernier_pseudo`, `prix_initial`, `duree`, `prix`, `date`) VALUES
(1, 1, 'sam', 'samo', 120, 2, '100', '2014-04-26'),
(2, 2, 'samo', 'sam', 1200, 5, '1500', '2014-04-26'),
(3, 1, 'samo', 'samo', 1000, 3, '1050', '2014-04-26');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) DEFAULT NULL,
  `categorie` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `titre`, `categorie`, `description`) VALUES
(1, 'asus', 'Pcportable', 'qmkdqjsdqklj'),
(2, 'asus', 'Pcportable', 'qd:hsjkq');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `pseudo` varchar(45) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `adresse_email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pseudo`),
  UNIQUE KEY `pseudo_UNIQUE` (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`pseudo`, `nom`, `prenom`, `adresse`, `adresse_email`) VALUES
('sam', 'sami', 'marrekchi', 'afrane', 'marrekchisami@gmail.com'),
('samo', 'sami', 'marre', 'dlqksmdq', 'samimarrekchi@hotmail.fr');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `enchere`
--
ALTER TABLE `enchere`
  ADD CONSTRAINT `fk_enchere_produit` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_enchere_users1` FOREIGN KEY (`vendeur_pseudo`) REFERENCES `users` (`pseudo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_enchere_users2` FOREIGN KEY (`dernier_pseudo`) REFERENCES `users` (`pseudo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
