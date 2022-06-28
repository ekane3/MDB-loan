-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 28 juin 2022 à 10:10
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `loanme`
--

-- --------------------------------------------------------

--
-- Structure de la table `borrow`
--

DROP TABLE IF EXISTS `borrow`;
CREATE TABLE IF NOT EXISTS `borrow` (
  `user_id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `borrowed_date` date NOT NULL,
  `return_date` date NOT NULL,
  `rendu` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`,`id_material`),
  KEY `borrow_material0_FK` (`id_material`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `borrow`
--

INSERT INTO `borrow` (`user_id`, `id_material`, `borrowed_date`, `return_date`, `rendu`) VALUES
(1, 1, '2022-06-26', '2022-06-30', 1),
(1, 3, '2022-06-26', '2022-06-30', 0),
(1, 4, '2022-06-28', '2022-07-03', 0),
(6, 5, '2022-06-28', '2022-07-03', 0);

-- --------------------------------------------------------

--
-- Structure de la table `institution`
--

DROP TABLE IF EXISTS `institution`;
CREATE TABLE IF NOT EXISTS `institution` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `institution`
--

INSERT INTO `institution` (`id`, `firstname`, `lastname`, `address`) VALUES
(1, 'EFREI', 'Monod', '163 Rue dupres');

-- --------------------------------------------------------

--
-- Structure de la table `material`
--

DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS `material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codebarre` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `purchased_date` date NOT NULL,
  `purchased_price` float NOT NULL,
  `supplier` varchar(300) NOT NULL,
  `id_institution` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `material_institution_FK` (`id_institution`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `material`
--

INSERT INTO `material` (`id`, `codebarre`, `name`, `description`, `purchased_date`, `purchased_price`, `supplier`, `id_institution`) VALUES
(1, 12121212, 'ordi DELL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et tortor efficitur, rutrum est et, aliquet leo. Curabitur a orci ligula', '2014-06-05', 768, 'HP', 1),
(3, 1111, 'Dell inspiron', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et tortor efficitur, rutrum est et, aliquet leo. Curabitur a orci ligula', '2010-05-22', 554, 'DELL', 1),
(4, 123131, 'HP orange', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et tortor efficitur, rutrum est et, aliquet leo. Curabitur a orci ligula', '2022-06-26', 677, 'Orange', 1),
(5, 120202, 'HP MTN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et tortor efficitur, rutrum est et, aliquet leo. Curabitur a orci ligula', '2022-06-22', 977, 'MTN', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `birthday`, `email`, `password`, `type`) VALUES
(1, 'EKANE', 'aicha', '2013-06-04', 'ekaneemile@google.fr', 'etudiant', 'etudiant'),
(3, 'Orane', 'Bour', '2000-09-04', 'obour@test.fr', 'bourzat', 'etudiant'),
(4, 'admin', 'admin', '2012-06-01', 'admin@efrei.fr', 'admin', 'admin'),
(6, 'test', 'test', '2000-05-22', 'test@gmail.com', 'test', 'etudiant');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_material0_FK` FOREIGN KEY (`id_material`) REFERENCES `material` (`id`),
  ADD CONSTRAINT `borrow_users_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_institution_FK` FOREIGN KEY (`id_institution`) REFERENCES `institution` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
