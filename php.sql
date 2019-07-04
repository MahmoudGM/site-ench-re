-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Ven 25 Avril 2014 à 23:40
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `php`
--

-- --------------------------------------------------------

--
-- Structure de la table `bidding`
--

CREATE TABLE IF NOT EXISTS `bidding` (
  `prixAV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(30) NOT NULL,
  `prix` float NOT NULL,
  `description` text NOT NULL,
  `duree` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `titre`, `prix`, `description`, `duree`) VALUES
(1, 'portable', 200, 'Evertek T9', '2'),
(2, 'pc', 100, 'asus', '30'),
(3, 'portable', 150.5, 'nokia', '30'),
(7, 'pc', 100.5, 'acer', '25'),
(8, 'livre', 5, 'html', '5'),
(10, 'restaurant', 120.5, 'description', '60'),
(11, 'pc', 1200, 'lenovo', '50');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `pseudo` varchar(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `adresse` text NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`pseudo`, `nom`, `prenom`, `adresse`, `email`) VALUES
('ach', 'achraf', 'charfeddine', 'rte tanyour', 'ach@yahoo.com'),
('bibou', 'mhiri', 'saber', 'sfax', 'bibou@hotmail.fr'),
('jiji', 'siala', 'hejer', 'sfax', 'jiji@hotmail.fr'),
('mayma', 'khlif', 'omaima', 'sfax', 'mayma@hotmail.fr'),
('moucha', 'charfeddine', 'rahma', 'tunis-sfax', 'rahma@hotmail.fr'),
('noussa', 'mhiri', 'ines', 'sfax', 'ines@hotmail.fr'),
('pidou', 'khlif', 'ahmed', 'sfax', 'pidou@yahoo.com'),
('rannou', 'rania', 'ch', 'sfax', 'rania@hotmail.fr'),
('sifou', 'zouwari', 'safa', 'sfax', 'sifou@hotmail.fr'),
('sou', 'ammar', 'souhir', 'tunis', 'souhir@hotmail.fr'),
('tes', 'tes', 'tes', 'tes', 'tes@hotmail.fr'),
('www', 'rabhi', 'wael', 'sfax', 'wael@hotmail.fr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
