CREATE DATABASE boutique;
-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 29 mars 2021 à 16:51
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_produit` int(11) NOT NULL,
  `resum` varchar(300) NOT NULL,
  `description` varchar(700) NOT NULL,
  `image` text NOT NULL,
  `date_ajout` datetime NOT NULL,
  `systeme` text NOT NULL,
  `interface_utilisateur` varchar(150) NOT NULL,
  `processeur` varchar(150) NOT NULL,
  `nb_coeur` int(11) NOT NULL,
  `frequence_processeur` int(11) NOT NULL,
  `puce_graphique` text NOT NULL,
  `ram` int(11) NOT NULL,
  `memoire_flash` int(11) NOT NULL,
  `das` int(11) NOT NULL,
  `double_sim` varchar(150) NOT NULL,
  `taile` int(11) NOT NULL,
  `type_ecran` varchar(150) NOT NULL,
  `definition_ecran` int(11) NOT NULL,
  `resolution_ecran` int(11) NOT NULL,
  `batterie` int(11) NOT NULL,
  `quality_capteur_principal` int(11) NOT NULL,
  `quality_video_principal` int(11) NOT NULL,
  `nb_capteur` int(11) NOT NULL,
  `id_vendeur` int(11) NOT NULL,
  `taile_gravure` int(11) NOT NULL,
  `nb_stock` int(11) NOT NULL,
  `nom_model` varchar(150) NOT NULL,
  `marque_model` varchar(150) NOT NULL,
  `prix_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `commendes`
--

CREATE TABLE `commendes` (
  `id_commende` int(11) NOT NULL,
  `id_panier` int(11) NOT NULL,
  `date_commende` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `nom_article` varchar(150) NOT NULL,
  `resum_article` varchar(300) NOT NULL,
  `prix_article` int(11) NOT NULL,
  `nom_user` varchar(150) NOT NULL,
  `nom_seller` varchar(150) NOT NULL,
  `nombres` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `paniers`
--

CREATE TABLE `paniers` (
  `id_user` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `nombres` int(11) NOT NULL,
  `id_panier` int(11) NOT NULL,
  `date_panier` datetime NOT NULL,
  `prix_panier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sellers`
--

CREATE TABLE `sellers` (
  `id_user` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `registration_date` datetime NOT NULL,
  `pseudo` varchar(150) NOT NULL,
  `rank` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `registration_date` datetime NOT NULL,
  `pseudo` varchar(150) NOT NULL,
  `rank` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_produit`);

--
-- Index pour la table `commendes`
--
ALTER TABLE `commendes`
  ADD PRIMARY KEY (`id_commende`);

--
-- Index pour la table `paniers`
--
ALTER TABLE `paniers`
  ADD PRIMARY KEY (`id_panier`),
  ADD UNIQUE KEY `prix` (`id_user`);

--
-- Index pour la table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commendes`
--
ALTER TABLE `commendes`
  MODIFY `id_commende` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `paniers`
--
ALTER TABLE `paniers`
  MODIFY `id_panier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
