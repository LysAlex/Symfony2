-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Dim 27 Novembre 2016 à 17:37
-- Version du serveur :  5.7.15-log
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `link`
--

INSERT INTO `link` (`id`, `link`, `date`, `description`) VALUES
(11, 'http://www.developpez.com/actu/106587/Blisk-un-nouveau-navigateur-web-destine-specifiquement-aux-developpeurs-mais-il-faudra-compter-un-abonnement-mensuel-pour-en-profiter/', '2016-11-27 00:00:00', 'LinkedIn va-t-il faire disparaître Viadeo ? Le réseau social professionnel français a demandé la suspension de son cours en Bourse'),
(14, 'http://www.developpez.com/actu/106584/Suite-a-la-victoire-de-Trump-de-nombreuses-personnes-se-ruent-vers-ProtonMail-pour-tenter-d-echapper-a-la-surveillance-de-la-NSA/', '2016-11-15 00:00:00', 'Suite à la victoire de Trump, de nombreuses personnes se ruent vers ProtonMail, pour tenter d\'échapper à la surveillance de la NSA'),
(17, 'http://symfony.developpez.com/cours/', '2016-11-20 00:00:00', 'Les meilleurs cours et tutoriels pour apprendre le framework PHP Symfony, mise à jour avec trois nouvelles publications'),
(18, 'http://www.developpez.com/actu/106405/Microsoft-corrige-la-faille-critique-de-Windows-exploitee-par-les-Hackers-russes-dans-le-Patch-Tuesday-de-novembre/', '2016-11-17 00:00:00', 'Microsoft corrige la faille critique de Windows exploitée par les Hackers russes, dans le Patch Tuesday de novembre'),
(19, 'http://www.developpez.com/actu/106392/Visual-Studio-Code-1-7-est-disponible-cette-version-de-l-editeur-de-code-multiplateforme-met-l-accent-sur-l-amelioration-de-l-experience-utilisateur/', '2016-11-27 00:00:00', 'Visual Studio Code 1.7 est disponible, cette version de l\'éditeur de code multiplateforme met l\'accent sur l\'amélioration de l\'expérience utilisateur'),
(20, 'http://bousk.developpez.com/cours/reseau-c++/TCP/03-mise-en-place-protocole/', '2016-11-27 00:00:00', 'Cours de programmation réseau en C++ - chapitre 3 : TCP - mise en place de votre protocole, un tutoriel de Bousk'),
(21, 'http://www.developpez.com/actu/106799/Ile-de-France-Les-remunerations-des-developpeurs-et-RSSI-sont-en-hausse-et-superieures-a-celles-des-autres-regions-du-pays/', '2016-11-27 00:00:00', 'Île-de-France : Les rémunérations des développeurs et RSSI sont en hausse et supérieures à celles des autres régions du pays');

-- --------------------------------------------------------

--
-- Structure de la table `link_tag`
--

CREATE TABLE `link_tag` (
  `link_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `link_tag`
--

INSERT INTO `link_tag` (`link_id`, `tag_id`) VALUES
(11, 11),
(14, 13),
(17, 4),
(17, 12),
(18, 13),
(19, 13),
(20, 12),
(20, 14),
(21, 13);

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tag`
--

INSERT INTO `tag` (`id`, `nom`) VALUES
(1, 'Android'),
(2, 'PHP'),
(4, 'Symfony'),
(9, 'SQL'),
(11, 'web'),
(12, 'tutoriel'),
(13, 'Autres'),
(14, 'Python/C++');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `link_tag`
--
ALTER TABLE `link_tag`
  ADD PRIMARY KEY (`link_id`,`tag_id`),
  ADD KEY `IDX_4FF23AB8ADA40271` (`link_id`),
  ADD KEY `IDX_4FF23AB8BAD26311` (`tag_id`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `link_tag`
--
ALTER TABLE `link_tag`
  ADD CONSTRAINT `FK_4FF23AB8ADA40271` FOREIGN KEY (`link_id`) REFERENCES `link` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_4FF23AB8BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
