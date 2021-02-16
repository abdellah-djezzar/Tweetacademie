-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 16 fév. 2021 à 09:42
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
-- Base de données : `my_twitter`
--

-- --------------------------------------------------------

--
-- Structure de la table `aime`
--

CREATE TABLE `aime` (
  `ID_aime` int NOT NULL,
  `ID_user` int NOT NULL,
  `ID_tweet` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `ID_comment` int NOT NULL,
  `ID_user` int NOT NULL,
  `text` varchar(255) NOT NULL,
  `ID_tweet` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `follow`
--

CREATE TABLE `follow` (
  `ID_follow` int NOT NULL,
  `id_following` int NOT NULL,
  `ID_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `follow`
--

INSERT INTO `follow` (`ID_follow`, `id_following`, `ID_user`) VALUES
(4, 2, 1),
(5, 3, 1),
(6, 4, 1),
(7, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `hashtag`
--

CREATE TABLE `hashtag` (
  `ID_hashtag` int NOT NULL,
  `hashtag` varchar(255) NOT NULL,
  `ID_tweet` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `identification`
--

CREATE TABLE `identification` (
  `ID_identification` int NOT NULL,
  `iD_user` int NOT NULL,
  `ID_tweet` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `ID_message` int NOT NULL,
  `adressee_id` int NOT NULL,
  `text` varchar(255) NOT NULL,
  `ID_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

CREATE TABLE `picture` (
  `ID_picture` int NOT NULL,
  `path` varchar(255) NOT NULL,
  `ID_tweet` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `retweet`
--

CREATE TABLE `retweet` (
  `ID_retweet` int NOT NULL,
  `ID_user` int NOT NULL,
  `ID_tweet` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tweet`
--

CREATE TABLE `tweet` (
  `ID_tweet` int NOT NULL,
  `ID_user` int NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tweet`
--

INSERT INTO `tweet` (`ID_tweet`, `ID_user`, `text`, `date`) VALUES
(1, 1, 'mon premier tweet', '2021-02-14'),
(2, 1, 'second tweet', '2021-02-14'),
(3, 1, 'troisième', '2021-02-14'),
(4, 1, '4', '2021-02-14'),
(5, 3, 'tweet from lola', '2021-02-14'),
(6, 1, 'frfrffrrfrfrffr', '2021-02-15'),
(7, 1, 'tgrtrgtgr', '2021-02-15'),
(8, 1, 'rtgtgrtrggrt', '2021-02-15'),
(9, 1, 'testtweet', '2021-02-15'),
(10, 1, 'test2', '2021-02-15'),
(11, 1, '1111111', '2021-02-15'),
(12, 1, '1111111', '2021-02-15'),
(13, 1, '1111111', '2021-02-15'),
(14, 1, 'test22222222222', '2021-02-15'),
(15, 1, '1111111moi', '2021-02-15'),
(16, 1, '252', '2021-02-15'),
(17, 1, 'uè-jytyjhngyjng', '2021-02-15'),
(18, 1, '0230320320320320320', '2021-02-15'),
(19, 1, '0230320320320320320oùpiomimomio', '2021-02-15'),
(20, 1, 'dd', '2021-02-15'),
(21, 1, 'dd', '2021-02-15'),
(22, 1, 'dd v v', '2021-02-15'),
(23, 1, 'dd v vv ', '2021-02-15'),
(24, 1, 'dd v vv ccc', '2021-02-15'),
(25, 1, 'c', '2021-02-15'),
(26, 1, '1', '2021-02-15'),
(27, 1, 'cddc', '2021-02-16'),
(28, 1, 'zqs', '2021-02-16'),
(29, 7, 'test tweet', '2021-02-16'),
(30, 1, 'autre test', '2021-02-16'),
(31, 1, 'ceci', '2021-02-16'),
(32, 1, 'AZZ', '2021-02-16'),
(33, 1, 'ah ok', '2021-02-16'),
(34, 1, 'd\'accord', '2021-02-16'),
(35, 1, 'ef', '2021-02-16'),
(36, 1, 'k,', '2021-02-16'),
(37, 1, 'aaaaa', '2021-02-16'),
(38, 1, 'AZ', '2021-02-16'),
(39, 1, 'c', '2021-02-16'),
(40, 1, 'f', '2021-02-16'),
(41, 1, 'azerty', '2021-02-16'),
(42, 1, 'ded', '2021-02-16'),
(43, 1, 'lorem lorem', '2021-02-16'),
(44, 1, 'un tweet', '2021-02-16'),
(45, 1, 'un autre tweet', '2021-02-16'),
(46, 1, 'instantanné', '2021-02-16'),
(47, 1, 'un autre tweet', '2021-02-16'),
(48, 1, 'aa', '2021-02-16'),
(49, 1, 'test', '2021-02-16'),
(50, 1, 'test32', '2021-02-16');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID_user` int NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `deleted` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID_user`, `lastname`, `firstname`, `username`, `pseudo`, `dob`, `email`, `password`, `avatar`, `bio`, `city`, `link`, `deleted`) VALUES
(1, 'Dubar', 'Jérémy', 'jerem-d', 'jerem-d-pseudo', '2021-02-14', 'dubar.jeremy@gmail.com', '$2y$10$hgn/D4LjUK7qJ0Y5blQK5ufbwrWPoVkeN1HS3zLHa1e38lMUNn0te', NULL, NULL, NULL, NULL, NULL),
(2, 'Ege', 'Yalcin', 'ege-username', 'ege-pseudo', '2021-02-14', 'ege@ege.fr', '$2y$10$jXsK6h0zl/YrztSJcWTo3ui1r9Kq0caTBef/bqh3uTSxxONbwjwtO', NULL, NULL, NULL, NULL, NULL),
(3, 'lola', 'pierron', 'lola-username', 'lola-pseudo', '2001-12-12', 'pierron@pierron.fr', '$2y$10$2smRvp1mRabh37PxfMC1E.pTH1hDy3MkVmFFt0Fk8Wf2q94.e5LEa', NULL, NULL, NULL, NULL, NULL),
(4, 'Paul', 'paulnom', 'paul-username', 'paul-pseudo', '2021-02-04', 'paul@paul.fr', '$2y$10$f5io9buqs5t97nKST37NRugR.ZutLk/5WvfD2hVYhMu/.lbVVbQpG', NULL, NULL, NULL, NULL, NULL),
(5, 'Amelie', 'Stanic', 'amel-username', 'Amelou', '2001-12-12', 'stanic@stanic.fr', '$2y$10$wayH2aaLypyyat6k6pFep.KCYSzHGTu4AIPwB2K5SjTLa2aqo7AIa', NULL, NULL, NULL, NULL, NULL),
(6, 'ryan', 'betrat', 'betra-username', 'ryanotea', '2001-10-10', 'betrat@betra.fr', '$2y$10$jWnKH26wClvRv1ahDWnnp.zQM4Jq5vFCDIhAY8n1Uh5/Z/ji1Az26', NULL, NULL, NULL, NULL, NULL),
(7, 'laurie', 'tosan', 'laurie', 'mypseudo', '2007-12-12', 'laurie@laurie.fr', '$2y$10$ZYVBGnmo5RBqkddrQ2gaxeUmnTMSrhQ1Ff.Ke74CCp.beujbWl2KK', NULL, NULL, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `aime`
--
ALTER TABLE `aime`
  ADD PRIMARY KEY (`ID_aime`),
  ADD KEY `aime_tweet_FK` (`ID_tweet`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID_comment`),
  ADD KEY `comment_tweet_FK` (`ID_tweet`);

--
-- Index pour la table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`ID_follow`),
  ADD KEY `follow_user_FK` (`ID_user`);

--
-- Index pour la table `hashtag`
--
ALTER TABLE `hashtag`
  ADD PRIMARY KEY (`ID_hashtag`),
  ADD KEY `hashtag_tweet_FK` (`ID_tweet`);

--
-- Index pour la table `identification`
--
ALTER TABLE `identification`
  ADD PRIMARY KEY (`ID_identification`),
  ADD KEY `identification_tweet_FK` (`ID_tweet`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID_message`),
  ADD KEY `message_user_FK` (`ID_user`);

--
-- Index pour la table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`ID_picture`),
  ADD KEY `picture_tweet_FK` (`ID_tweet`);

--
-- Index pour la table `retweet`
--
ALTER TABLE `retweet`
  ADD PRIMARY KEY (`ID_retweet`),
  ADD KEY `retweet_tweet_FK` (`ID_tweet`);

--
-- Index pour la table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`ID_tweet`),
  ADD KEY `ID_user_FK` (`ID_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `aime`
--
ALTER TABLE `aime`
  MODIFY `ID_aime` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID_comment` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `follow`
--
ALTER TABLE `follow`
  MODIFY `ID_follow` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `hashtag`
--
ALTER TABLE `hashtag`
  MODIFY `ID_hashtag` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `identification`
--
ALTER TABLE `identification`
  MODIFY `ID_identification` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `ID_message` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picture`
--
ALTER TABLE `picture`
  MODIFY `ID_picture` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `retweet`
--
ALTER TABLE `retweet`
  MODIFY `ID_retweet` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `ID_tweet` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `aime`
--
ALTER TABLE `aime`
  ADD CONSTRAINT `aime_tweet_FK` FOREIGN KEY (`ID_tweet`) REFERENCES `tweet` (`ID_tweet`);

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_tweet_FK` FOREIGN KEY (`ID_tweet`) REFERENCES `tweet` (`ID_tweet`);

--
-- Contraintes pour la table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_user_FK` FOREIGN KEY (`ID_user`) REFERENCES `user` (`ID_user`);

--
-- Contraintes pour la table `hashtag`
--
ALTER TABLE `hashtag`
  ADD CONSTRAINT `hashtag_tweet_FK` FOREIGN KEY (`ID_tweet`) REFERENCES `tweet` (`ID_tweet`);

--
-- Contraintes pour la table `identification`
--
ALTER TABLE `identification`
  ADD CONSTRAINT `identification_tweet_FK` FOREIGN KEY (`ID_tweet`) REFERENCES `tweet` (`ID_tweet`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_user_FK` FOREIGN KEY (`ID_user`) REFERENCES `user` (`ID_user`);

--
-- Contraintes pour la table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `picture_tweet_FK` FOREIGN KEY (`ID_tweet`) REFERENCES `tweet` (`ID_tweet`);

--
-- Contraintes pour la table `retweet`
--
ALTER TABLE `retweet`
  ADD CONSTRAINT `retweet_tweet_FK` FOREIGN KEY (`ID_tweet`) REFERENCES `tweet` (`ID_tweet`);

--
-- Contraintes pour la table `tweet`
--
ALTER TABLE `tweet`
  ADD CONSTRAINT `ID_user_FK` FOREIGN KEY (`ID_user`) REFERENCES `user` (`ID_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
