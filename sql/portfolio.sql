-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 18 mai 2020 à 13:18
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `id_experience` int(3) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `soustitre` varchar(30) NOT NULL,
  `contenu` text NOT NULL,
  `date_debut` varchar(20) NOT NULL,
  `date_fin` varchar(20) NOT NULL,
  `deletion_flag` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id_experience`, `titre`, `soustitre`, `contenu`, `date_debut`, `date_fin`, `deletion_flag`) VALUES
(1, 'Stage Carrefour', 'Informatique', '     Lors de mon ann&eacute;e de 3&egrave;me j&#039;ai eu la chance d&#039;effectuer un stage au sein du si&egrave;ge social de Carrefour. J&#039;ai pu y d&eacute;couvrir de nombreux m&eacute;tiers requis au bon fonctionnement de l&#039;entreprise tel qu&#039;ing&eacute;nieur informatique ou m&ecirc;me le syst&egrave;me de gestion de demandes clients. Durant cette semaine j&#039;ai chaque jour eu l&#039;occasion d&#039;&eacute;tudier un m&eacute;tier diff&eacute;rent, en suivant les faits du tuteur de la journ&eacute;e. ', '2015-01-20', '2015-01-25', 0),
(7, 'Travail en entreprise', 'Logistique', '  J&#039;ai eu l&#039;occasion lors d&#039;une journ&eacute;e de d&eacute;couvrir le monde du travail &agrave; travers une &eacute;quipe de logistique. En effet, cette journ&eacute;e m&#039;a permise de me mettre en situation et d&#039;&eacute;tudier un m&eacute;tier totalement diff&eacute;rent, pour en conna&icirc;tre de plus les difficult&eacute;s.', 'date1', 'date2', 0),
(8, 'test', 'test', 'ope', 'date1', 'date2', 1);

-- --------------------------------------------------------

--
-- Structure de la table `userinfo`
--

CREATE TABLE `userinfo` (
  `id_userinfo` int(3) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `telephone` int(12) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `description_texte` text NOT NULL,
  `image_profil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `userinfo`
--

INSERT INTO `userinfo` (`id_userinfo`, `nom`, `prenom`, `adresse`, `ville`, `telephone`, `mail`, `description_texte`, `image_profil`) VALUES
(1, 'PEIXOTO', 'Flavio', '8 rue Voltaire', 'Puteaux 92800', 652928915, 'flavio.peixoto@ynov.com', 'Je suis actuellement étudiant en bachelor 1 à lécole Ynov dans laquelle je suit la formation ingénierie informatique.', 'profile.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `userlogin`
--

CREATE TABLE `userlogin` (
  `id_login` int(3) NOT NULL,
  `nom_utilisateur` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `userlogin`
--

INSERT INTO `userlogin` (`id_login`, `nom_utilisateur`, `mdp`) VALUES
(1, 'PEIXOTOFlavio', 'adminFP**');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_experience`);

--
-- Index pour la table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id_userinfo`);

--
-- Index pour la table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id_experience` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id_userinfo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id_login` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
