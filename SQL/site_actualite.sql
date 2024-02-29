-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 28 fév. 2024 à 19:48
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site_actualite`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `id_actualite` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) NOT NULL,
  `sous_titre` varchar(500) NOT NULL,
  `article` text NOT NULL,
  `image` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_publication` datetime NOT NULL,
  `date_modification` datetime NOT NULL,
  `id_auteur` int NOT NULL,
  `id_tag` int NOT NULL,
  `id_nom_source` int NOT NULL,
  `id_lien` int NOT NULL,
  PRIMARY KEY (`id_actualite`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id_actualite`, `titre`, `sous_titre`, `article`, `image`, `date_publication`, `date_modification`, `id_auteur`, `id_tag`, `id_nom_source`, `id_lien`) VALUES
(1, 'PlayStation 5 : Les ventes de la console déçoivent, Sony va supprimer 900 postes', 'Le studio PlayStation London, fondé en 2002 et spécialisé dans les projets de jeux en réalité virtuelle, va complètement fermer ses portes', 'Sony a annoncé ce mardi le licenciement de 8 % des effectifs mondiaux de PlayStation, devenant ainsi la dernière entreprise technologique en date à supprimer des emplois. Qualifiant cette décision de « triste nouvelle », le directeur de PlayStation, Jim Ryan, a déclaré que cette réduction affecterait 900 personnes dans le monde, y compris dans les studios de création de jeux vidéo.\r\n\r\nLe studio PlayStation London, fondé en 2002 et spécialisé dans les projets de jeux en réalité virtuelle, va complètement fermer ses portes, a précisé le géant japonais du divertissement. Une déclaration séparée indique que les studios américains Insomniac Games et Naughty Dog sont également concernés.\r\nObjectifs de ventes pas atteints\r\n\r\nHermen Hulst, directeur de PlayStation Studios, a déclaré que l’entreprise avait besoin de plus de ressources pour se concentrer sur les jeux mobiles et PC. « Nous avons examiné nos studios et notre portefeuille, évalué les projets à différents stades de développement et décidé que certains d’entre eux ne continueraient pas », a-t-il déclaré.\r\n\r\n« Notre philosophie a toujours été d’encourager l’expérimentation créative. Parfois, les grandes idées ne deviennent pas de grands jeux », a ajouté Hermen Hulst. Ce plan social intervient après que Sony a averti ce mois-ci que les ventes de la PlayStation 5 n’atteindraient pas les objectifs initiaux, alors que la console phare en est à sa quatrième année de commercialisation.\r\n\r\nL’activité de jeux vidéo de Sony a connu un grand succès avec « Marvel’s Spider-Man 2 », qui est sorti sur la PS5 en octobre de l’année dernière et qui est devenu le jeu de PlayStation Studios le plus rapidement vendu dans les 24 heures qui ont suivi sa sortie.\r\nConcurrence de la Switch et de la Xbox\r\n\r\nMais la PlayStation 5 est confrontée à la concurrence acharnée de la Nintendo Switch et pourrait voir sa rivalité avec la Xbox de Microsoft se durcir, après le rachat par le groupe américain de l’éditeur de « Call of Duty », Activision Blizzard. En janvier, Microsoft a annoncé le licenciement de 1.900 personnes, soit 8 % de son personnel, dans sa division « jeux », afin de consolider l’acquisition d’Activision.\r\n\r\nAu total, l’année dernière, les entreprises de la « tech » ont perdu 260.000 emplois, selon layoffs.fyi, un site californien qui suit l’évolution du secteur. Depuis le début de l’année, les licenciements s’élèvent à près de 44.000 personnes, selon le site, dans 171 sociétés.', 'playstation5.webp', '2024-02-28 00:00:00', '2024-02-28 00:00:00', 1, 3, 1, 1),
(2, '« Holly » : Stephen King revient en terrain horrifique connu', '« Holly » de Stephen King est paru en février 2024 chez Albin Michel', 'eremy du « ClubStephenKing », contributeur du groupe de lecture 20 Minutes Books, vous recommande vivement « Holly » de Stephen King, paru le 28 février 2024 aux Éditions Albin Michel.\r\n\r\nSa citation préférée :\r\n\r\n    « Parfois, l’univers vous lance une corde. Dans ce cas, saisis-la et grimpe pour voir ce qu’il y a tout en haut. » »\r\n\r\nPourquoi ce livre ?\r\n\r\n    Parce que le nouveau roman de Stephen King édité ce mercredi en France permet de retrouver Holly Gibney, introduit par l’auteur dès 2014 dans Mr Mercedes. Une héroïne que Stephen King a eu du mal à la lâcher au point de continuer à lui donner des aventures. Ainsi, on l’a retrouvée dans les deux autres livres de la saga dite « Billy Hodges » (le détective à la retraite de Mr ', 'holly.webp', '2024-02-28 00:00:00', '2024-02-28 00:00:00', 2, 1, 1, 2),
(3, 'Colère des agriculteurs : La Coordination rurale est-elle proche du RN, comme l’affirme Macron ?', 'Lors de sa visite mouvementée au Salon de l’agriculture, Emmanuel Macron a pointé la proximité entre la Coordination rurale et le Rassemblement national', 'l y a des gens qui sont là avec un projet politique qui est de servir le Rassemblement national. » L’accusation, sans appel, a été portée samedi par Emmanuel Macron à destination de la Coordination rurale (CR), deuxième syndicat agricole (21 % aux élections professionnelles de 2019). Et à la question de savoir si des militants du RN étaient également membres de la CR, il n’a pas laissé de place au doute. « Bien sûr qu’il y en a dans ce syndicat, il y en a aussi dans d’autres, mais c’est le principal, qui avait très clairement assumé ça et qui est connu pour cela […] On a le droit de ne pas être dupe. » Mais le président dit-il vrai ?\r\nFAKE OFF\r\n\r\n« Il n’y a pas un seul dirigeant de la CR qui appartient au RN, à LR ou à un autre parti politique », martèle Véronique Le Floc’h, la présidente de la Coordination rurale. Attablée ce mardi au stand de la Coordination dans le hall 4 du Salon international de l’agriculture (SIA) avec sa première vice-présidente, Sophie Lenaerts, elle est visiblement lassée qu’on lui pose la question. Il faut dire que sa sortie sur France Inter fin janvier, affirmant que « si tout le monde avait le même discours que [le Rassemblement national], on pourrait aller dans le bon sens » n’a pas aidé à dissiper les doutes.', '1444x920_le-stand-de-la-coordination-rurale-au-salon-de-l-agriculture-avec-sa-couleur-jaune-reconnaissable.webp', '2024-02-28 00:00:00', '2024-02-28 00:00:00', 3, 5, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

DROP TABLE IF EXISTS `auteurs`;
CREATE TABLE IF NOT EXISTS `auteurs` (
  `id_auteur` int NOT NULL AUTO_INCREMENT,
  `nom_auteur` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fonction` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id_auteur`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`id_auteur`, `nom_auteur`, `fonction`, `photo`) VALUES
(1, '20 Minutes avec AFP', '', ''),
(2, 'ClubStephenKing', 'membre de la communauté 20 Minutes Books', ''),
(3, 'Guillaume Novello', 'Editeur Web', '');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `nom_contact` varchar(30) NOT NULL,
  `prenom_contact` varchar(30) NOT NULL,
  `mail_contact` varchar(50) NOT NULL,
  `motif` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id_contact`, `nom_contact`, `prenom_contact`, `mail_contact`, `motif`) VALUES
(1, 'qzdqzd', 'qzdqzdzdqd', 'aria.merlet@gmail.com', 'qzdqzdqzd'),
(2, 'qzdqzd', 'zdzqd', 'qzd', 'qzd'),
(3, 'zdqd', 'zdzqdzq', 'aria.merlet@gmail.com', 'qzdqzd'),
(4, 'test', 'test', 't.merlet1996@gmail.com', 'ceci est un text');

-- --------------------------------------------------------

--
-- Structure de la table `liens`
--

DROP TABLE IF EXISTS `liens`;
CREATE TABLE IF NOT EXISTS `liens` (
  `id_lien` int NOT NULL AUTO_INCREMENT,
  `lien_source` varchar(500) NOT NULL,
  PRIMARY KEY (`id_lien`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `liens`
--

INSERT INTO `liens` (`id_lien`, `lien_source`) VALUES
(1, 'https://www.20minutes.fr/high-tech/jeux_video/4078611-20240227-playstation-5-ventes-console-decoivent-sony-va-supprimer-900-postes'),
(2, 'https://www.20minutes.fr/arts-stars/culture/4078106-20240228-holly-stephen-king-revient-terrain-horrifique-connu'),
(3, 'https://www.20minutes.fr/politique/4078515-20240228-manifestations-agriculteurs-coordination-rurale-proche-rn-comme-affirme-macron');

-- --------------------------------------------------------

--
-- Structure de la table `sources`
--

DROP TABLE IF EXISTS `sources`;
CREATE TABLE IF NOT EXISTS `sources` (
  `id_source` int NOT NULL AUTO_INCREMENT,
  `nom_source` varchar(50) NOT NULL,
  PRIMARY KEY (`id_source`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `sources`
--

INSERT INTO `sources` (`id_source`, `nom_source`) VALUES
(1, '20 minutes');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id_tag` int NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id_tag`, `tag`) VALUES
(1, 'divertissement'),
(2, 'sport'),
(3, 'tech'),
(4, 'tempo'),
(5, 'politique');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
