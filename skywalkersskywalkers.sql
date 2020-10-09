-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 09 oct. 2020 à 07:22
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `skywalkers`
--

-- --------------------------------------------------------

--
-- Structure de la table `entrainements`
--

CREATE TABLE `entrainements` (
  `entrainement_id` int(11) NOT NULL,
  `entrainement_date` date NOT NULL,
  `entrainement_adresse` varchar(60) NOT NULL,
  `entrainement_heure_debut` time NOT NULL,
  `entrainement_heure_fin` time NOT NULL,
  `entrainement_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entrainements`
--

INSERT INTO `entrainements` (`entrainement_id`, `entrainement_date`, `entrainement_adresse`, `entrainement_heure_debut`, `entrainement_heure_fin`, `entrainement_type`) VALUES
(1, '2020-10-08', 'Centre sportif Solvay de La Hulpe', '20:00:00', '22:00:00', 'Entrainement'),
(2, '2020-10-12', 'Stade Gaston Reiff à Braine L\'Alleud', '20:00:00', '22:00:00', 'Entrainement'),
(5, '2020-10-17', 'Centre sportif Solvay de La Hulpe', '09:00:00', '19:00:00', 'Tournoi'),
(6, '2020-10-15', 'Centre sportif Solvay de La Hulpe', '20:00:00', '22:00:00', 'Entrainement'),
(7, '2020-10-19', 'Stade Gaston Reiff à Braine L\'alleud', '20:00:00', '22:00:00', 'Entrainement'),
(13, '2020-10-22', 'Centre sportif Solvay de La Hulpe', '20:00:00', '22:00:00', 'Entrainement'),
(14, '2020-10-26', 'Stade Gaston Reiff à Braine L\'Alleud', '20:00:00', '22:00:00', 'Entrainement'),
(15, '2020-10-29', 'Centre sportif Solvay de La Hulpe', '20:00:00', '22:00:00', 'Entrainement'),
(18, '2020-11-02', 'Stade Gaston Reiff à Braine L\'Alleud', '20:00:00', '22:00:00', 'Entrainement'),
(20, '2020-11-05', 'Centre sportif Solvay de La Hulpe', '20:00:00', '22:00:00', 'Entrainement'),
(21, '2020-11-09', 'Centre sportif Solvay de La Hulpe', '20:00:00', '22:00:00', 'Entrainement');

-- --------------------------------------------------------

--
-- Structure de la table `joueurs`
--

CREATE TABLE `joueurs` (
  `joueur_id` int(11) NOT NULL,
  `joueur_nom` varchar(30) NOT NULL,
  `joueur_prenom` varchar(30) NOT NULL,
  `joueur_email` varchar(30) NOT NULL,
  `joueur_mdp` varchar(30) NOT NULL,
  `joueur_niveau` varchar(30) NOT NULL,
  `joueur_role` varchar(30) NOT NULL,
  `joueur_position` varchar(30) NOT NULL,
  `joueur_nom_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `joueurs`
--

INSERT INTO `joueurs` (`joueur_id`, `joueur_nom`, `joueur_prenom`, `joueur_email`, `joueur_mdp`, `joueur_niveau`, `joueur_role`, `joueur_position`, `joueur_nom_user`) VALUES
(16, 'Lechat', 'Régis', 'baudlechat@gmail.com', 'b4udmi4ou', 'Débutant', 'Coach', 'Handler', 'BaLech'),
(17, 'Flamand', 'Léonie', 'elise.flamand@gmail.com', 'il0veultim4te', 'Débutant', 'Joueur', 'Cutter', 'ElFlam'),
(18, 'Hansart', 'Marine', 'hansart.marine@gmail.com', 'MarineH1708', 'Avancé', 'Joueur', 'Handler', 'MaHans'),
(19, 'Rochez', 'Arthur', 'arthur.rochez@gmail.com', 'jho30_jg', 'Avancé', 'Coach', 'Handler', 'ArRoch'),
(26, 'Leclercq', 'Isabelle', 'isaLeclercq@gmail.com', 'isa1258', 'Débutant', 'Joueur', 'Cutter', 'IsLecl'),
(27, 'Coenen', 'Aurore', 'auri.coen@gmail.com', 'auri9308', 'Avancé', 'Coach', 'Handler', 'AuCoen'),
(28, 'Moussa', 'Ernestine', 'ernie_mouss@gmail.com', '4rnie1393', 'Débutant', 'Joueur', 'Cutter', 'ErMous'),
(30, 'Dupont', 'Alexandra', 'alex.leblanc@gmail.com', 'f3_078alex', 'Débutant', 'Joueur', 'Handler', 'AlLebl'),
(31, 'Smith', 'John', 'smith.john@gmail.com', 'isugfl', 'Débutant', 'Joueur', 'Cutter', 'kafake'),
(32, 'Marghem', 'Gilles', 'gillos.marg@gmail.com', 'gillos91', 'Avancé', 'Coach', 'Handler', 'GiMarg'),
(33, 'Dupont', 'Juliette', 'cocosenet@gmail.com', '93sep18', 'Débutant', 'Joueur', 'Cutter', 'CoSene'),
(34, 'Verslipe', 'Corentin', 'coco.vers@hotmail.com', 'c0c05987', 'Avancé', 'Coach', 'Handler', 'CoVers'),
(35, 'Couplet', 'Adeline', 'ade.couplet@gmail.com', '@deC0uplet', 'Avancé', 'Coach', 'Handler', 'AdCoup'),
(36, 'Imani', 'Sara', 'sara.imani@gmail.com', 's4r@Im4ni', 'Avancé', 'Joueur', 'Handler', 'SaIman'),
(37, 'Hazard', 'Eden', 'edythebest@gmail.com', 'EdenH4$4rd', 'Avancé', 'Joueur', 'Handler', 'EdHaza'),
(38, 'Geerts', 'Mélanie', 'm.geerts@gmail.com', 'M4lan!eG', 'Débutant', 'Joueur', 'Cutter', 'MéGeer'),
(51, 'Maesfrancx', 'Paul', 'p.maes@gmail.com', 'P4u!M4e$', 'Débutant', 'Coach', 'Handler', 'PaMaes'),
(55, 'Divok', 'Origi', 'd.origi@gmail.com', '0r!g!D!v0k', 'Avancé', 'Joueur', 'Handler', 'OrDivo'),
(62, 'De saxe ', 'Philippe', 'phiphi.leroi@gmail.com', 'Ph!l!p4D', 'Débutant', 'Coach', 'Cutter', 'PhDe s');

-- --------------------------------------------------------

--
-- Structure de la table `joueurs_entrainements`
--

CREATE TABLE `joueurs_entrainements` (
  `joueur_id` int(11) NOT NULL,
  `entrainement_id` int(11) NOT NULL,
  `presence` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `joueurs_entrainements`
--

INSERT INTO `joueurs_entrainements` (`joueur_id`, `entrainement_id`, `presence`) VALUES
(30, 6, 0),
(30, 7, 0),
(30, 14, 0),
(32, 1, 1),
(32, 2, 1),
(32, 5, 1),
(32, 7, 1),
(32, 13, 0),
(32, 14, 0),
(32, 15, 0),
(32, 20, 0),
(32, 21, 0),
(34, 1, 0),
(34, 5, 0),
(34, 7, 0),
(34, 14, 0),
(36, 7, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `entrainements`
--
ALTER TABLE `entrainements`
  ADD PRIMARY KEY (`entrainement_id`);

--
-- Index pour la table `joueurs`
--
ALTER TABLE `joueurs`
  ADD PRIMARY KEY (`joueur_id`),
  ADD UNIQUE KEY `joueur_email` (`joueur_email`);

--
-- Index pour la table `joueurs_entrainements`
--
ALTER TABLE `joueurs_entrainements`
  ADD PRIMARY KEY (`joueur_id`,`entrainement_id`),
  ADD KEY `fk_entrainjoueur_entrainement` (`entrainement_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `entrainements`
--
ALTER TABLE `entrainements`
  MODIFY `entrainement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `joueurs`
--
ALTER TABLE `joueurs`
  MODIFY `joueur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `joueurs_entrainements`
--
ALTER TABLE `joueurs_entrainements`
  ADD CONSTRAINT `fk_entrainjoueur_entrainement` FOREIGN KEY (`entrainement_id`) REFERENCES `entrainements` (`entrainement_id`),
  ADD CONSTRAINT `fk_entrainjoueur_joueurs` FOREIGN KEY (`joueur_id`) REFERENCES `joueurs` (`joueur_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
