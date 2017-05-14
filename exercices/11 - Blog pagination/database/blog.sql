-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 20 Février 2017 à 11:19
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.4

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `title`, `date`, `content`, `image`) VALUES
(1, 'Article cool', '2017-02-03 11:34:53', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(2, 'Deuxième article', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(3, 'Super titre', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(4, 'Lorem Ipsum', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(5, 'Le dernier', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(6, 'Nouveau article', '2017-02-06 11:52:01', 'bla bla bla', 'http://placehold.it/200x200'),
(7, 'Article cool', '2017-02-03 11:34:53', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(8, 'Deuxième article', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(9, 'Super titre', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(10, 'Lorem Ipsum', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(11, 'Le dernier', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(12, 'Nouveau article', '2017-02-06 11:52:01', 'bla bla bla', 'http://placehold.it/200x200'),
(14, 'Article cool', '2017-02-03 11:34:53', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(15, 'Deuxième article', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(16, 'Super titre', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(17, 'Lorem Ipsum', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(18, 'Le dernier', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(19, 'Nouveau article', '2017-02-06 11:52:01', 'bla bla bla', 'http://placehold.it/200x200'),
(20, 'Article cool', '2017-02-03 11:34:53', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(21, 'Deuxième article', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(22, 'Super titre', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(23, 'Lorem Ipsum', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(24, 'Le dernier', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(25, 'Nouveau article', '2017-02-06 11:52:01', 'bla bla bla', 'http://placehold.it/200x200'),
(29, 'Article cool', '2017-02-03 11:34:53', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(30, 'Deuxième article', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(31, 'Super titre', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(32, 'Lorem Ipsum', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(33, 'Le dernier', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(34, 'Nouveau article', '2017-02-06 11:52:01', 'bla bla bla', 'http://placehold.it/200x200'),
(35, 'Article cool', '2017-02-03 11:34:53', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(36, 'Deuxième article', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(37, 'Super titre', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(38, 'Lorem Ipsum', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(39, 'Le dernier', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(40, 'Nouveau article', '2017-02-06 11:52:01', 'bla bla bla', 'http://placehold.it/200x200'),
(41, 'Article cool', '2017-02-03 11:34:53', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(42, 'Deuxième article', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(43, 'Super titre', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(44, 'Lorem Ipsum', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(45, 'Le dernier', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(46, 'Nouveau article', '2017-02-06 11:52:01', 'bla bla bla', 'http://placehold.it/200x200'),
(47, 'Article cool', '2017-02-03 11:34:53', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(48, 'Deuxième article', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(49, 'Super titre', '2017-02-06 09:52:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(50, 'Lorem Ipsum', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(51, 'Le dernier', '2017-02-06 09:54:06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.', 'http://placehold.it/200x200'),
(52, 'Nouveau article', '2017-02-06 11:52:01', 'bla bla bla', 'http://placehold.it/200x200');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_article` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comment`
--

INSERT INTO `comment` (`id`, `text`, `date`, `id_article`, `id_user`) VALUES
(1, 'mon commentaire', '2017-02-03 11:35:23', 1, 1),
(2, 'test test', '2017-02-06 12:05:41', 6, 1),
(4, 'nouveau commentaire', '2017-02-06 12:10:24', 6, 1),
(5, 'commentaire', '2017-02-06 12:11:00', 6, 1),
(6, 'test test ', '2017-02-10 11:38:19', 1, 1),
(7, 'test', '2017-02-10 11:39:55', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `password`) VALUES
(1, 'julien', 'blabla');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_article` (`id_article`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_id_article` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
