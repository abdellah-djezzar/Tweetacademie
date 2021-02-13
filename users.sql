-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 11 fév. 2021 à 15:28
-- Version du serveur :  8.0.23-0ubuntu0.20.10.1
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `twitter`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(250) NOT NULL,
  `avatar` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`, `username`, `dob`, `email`, `password`, `avatar`) VALUES
(1, 'erg', 'gre', 'gre', '2021-02-16', '$2y$10$uRcBE59hEiWT6fFhqNAVB.wS9cbj2XpTu5pT.2643e2zy80Jsgsnq', 'ger', NULL),
(2, 'ref', 'rfe', 'ref', '2021-02-23', '$2y$10$fDJfVqLAMUlU16dGnToqfOO8VZ8NADQ5oSP3qfx2NTnSm./Hx8ARK', 'ref', NULL),
(3, 'yjt', 'ytjh', 'ytj', '2021-02-23', '$2y$10$QrkBUDUe9wsrbQKIQLrdbubEW9MTGHfnuKGSY1BaVb3nXA4oXKgKy', 'ytj', NULL),
(4, 'rfe', 'ref', 'rfe', '2021-02-23', '$2y$10$5jKsWqYhKBOExPyvqARL9OSMFdppdPUxdZl.ifNNeicVlIRLxJ7fS', 'ref', NULL),
(5, 'dubar', 'jeremy', 'jeremD', '2021-02-23', '$2y$10$XFb9.aBOPOzFytsbSwVkKu9XcU0aJpOBVjCuNW9wNBbqYOuAVuwsW', 'dubar.jeremy@gmail.com', NULL),
(6, 'jeremy', 'dubar', 'jerem', '2021-02-22', 'jeremy@jeremy.fr', '$2y$10$/YZ77rWCTGpMtkYdwkCEP.45NmZuTOw2Dbd2qRCFOxhLlhIfIOuxm', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
