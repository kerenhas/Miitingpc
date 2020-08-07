-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 07 août 2020 à 13:28
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `miiting0807`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `texte` text NOT NULL,
  `blogue` tinyint(1) NOT NULL,
  `idtheme` int(11) NOT NULL,
  `img` text NOT NULL,
  `alt` text NOT NULL,
  `href` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `texte`, `blogue`, `idtheme`, `img`, `alt`, `href`) VALUES
(1, 'Comment choisir la salle de reception', 'Choisir le lieu ou se déroulera votre réception est certainement un des éléments les plus difficiles et les plus importants à définir de toute l\'organisation de votre mariage. Le choix varie en fonction de la nature de votre mariage,  en fonction du nombre d\'invités et surtout en fonction de votre budget.', 0, 1, 'IMG2.jpeg', 'tactac', 'article-1'),
(2, 'Comment choisir la salle de reception', 'Choisir le lieu ou se déroulera votre réception est certainement un des éléments les plus difficiles et les plus importants à définir de toute l\'organisation de votre mariage. Le choix varie en fonction de la nature de votre mariage,  en fonction du nombre d\'invités et surtout en fonction de votre budget.', 0, 1, 'images/beaumarie.jpeg', 'tactac', 'article-2'),
(3, 'Qu\'est ce qui change quand on est marié?', 'Le mariage civil est un acte juridique qui crée des droits mais aussi des devoirs entre époux. Vous allez vous marier ou venez juste de passer devant Monsieur le maire?', 0, 1, 'images/event.jpeg', 'tactac', 'article-3'),
(4, 'Qu\'est ce qui change quand on est marié?', 'Le mariage civil est un acte juridique qui crée des droits mais aussi des devoirs entre époux. Vous allez vous marier ou venez juste de passer devant Monsieur le maire?', 1, 1, 'img3.jpeg', 'tactac', 'article-4'),
(5, 'Qu\'est ce qui change quand on est marié?', 'Le mariage civil est un acte juridique qui crée des droits mais aussi des devoirs entre époux. Vous allez vous marier ou venez juste de passer devant Monsieur le maire?', 1, 2, 'logo_organiser/anniv.png', 'tactac', 'article-5'),
(6, 'Comment choisir la robe ?', '\r\n \r\n\r\nChoisir le lieu ou se déroulera votre réception es... \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n', 0, 2, 'IMG2.jpeg ', 'tactac', 'article-6'),
(7, 'Comment choisir la robe ?', '\r\n \r\n\r\nChoisir le lieu ou se déroulera votre réception es... \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n', 0, 1, 'IMG2.jpeg ', 'tactac', 'article-7'),
(8, 'Comment choisir la robe ?', '\r\n \r\n\r\nChoisir le lieu ou se déroulera votre réception es... \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n', 0, 1, 'IMG2.jpeg ', 'tactac', 'article-8'),
(9, 'Comment choisir la salle de reception \r\ntactac \r\n\r\n', 'Choisir le lieu ou se déroulera votre réception es... ', 0, 1, 'images/beaumarie.jpeg ', 'article ', 'article-9 '),
(10, 'Comment choisir la salle de reception \r\ntactac \r\n\r\n', 'Choisir le lieu ou se déroulera votre réception es... ', 0, 1, 'images/beaumarie.jpeg ', 'article ', 'article-10');

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

DROP TABLE IF EXISTS `contrat`;
CREATE TABLE IF NOT EXISTS `contrat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idevent` int(11) NOT NULL,
  `idpresta` int(11) NOT NULL,
  `approuv_presta` int(11) NOT NULL,
  `approuv_util` int(11) NOT NULL,
  `lieu` text COLLATE utf8_bin NOT NULL,
  `date_signature` varchar(255) COLLATE utf8_bin NOT NULL,
  `budget` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `contrat`
--

INSERT INTO `contrat` (`id`, `idevent`, `idpresta`, `approuv_presta`, `approuv_util`, `lieu`, `date_signature`, `budget`) VALUES
(1, 2, 2, 0, 0, '2', '030420202', '1200'),
(2, 4, 2, 1, 0, 'cannes', '2020-04-15', '2345');

-- --------------------------------------------------------

--
-- Structure de la table `conversation`
--

DROP TABLE IF EXISTS `conversation`;
CREATE TABLE IF NOT EXISTS `conversation` (
  `idconversation` int(11) NOT NULL AUTO_INCREMENT,
  `idutilisateur` int(11) NOT NULL,
  `idprestataire` int(11) NOT NULL,
  `idevent` int(11) NOT NULL,
  `objet` varchar(255) NOT NULL,
  PRIMARY KEY (`idconversation`),
  KEY `fk_idclient` (`idutilisateur`),
  KEY `fk_idpresta` (`idprestataire`),
  KEY `fk_idevent` (`idevent`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `conversation`
--

INSERT INTO `conversation` (`idconversation`, `idutilisateur`, `idprestataire`, `idevent`, `objet`) VALUES
(14, 56, 1, 105, 'devis'),
(13, 56, 3, 105, 'devis'),
(12, 56, 1, 105, 'devis'),
(15, 56, 1, 105, 'TEST'),
(16, 56, 1, 105, 'TEST'),
(17, 56, 1, 105, 'TEST'),
(18, 56, 2, 105, 'TEST'),
(19, 56, 14, 105, 'TEST'),
(20, 56, 14, 105, 'TEST'),
(21, 56, 14, 105, 'TEST'),
(22, 56, 14, 105, 'TEST'),
(23, 56, 2, 105, 'TEST'),
(24, 56, 14, 105, 'TEST'),
(25, 56, 14, 105, 'TEST'),
(26, 56, 2, 105, 'LOL'),
(27, 56, 1, 105, 'aaa'),
(28, 56, 1, 105, 'je teste '),
(29, 56, 7, 105, 'test de contacter prestataire'),
(30, 56, 10, 105, 'voici le titre'),
(31, 56, 1, 105, ''),
(32, 56, 14, 105, 'dee'),
(33, 56, 1, 105, 'fff'),
(34, 56, 1, 105, ''),
(35, 56, 1, 105, 'ca marche'),
(36, 56, 1, 105, 'ca marche'),
(37, 56, 1, 105, 'ca marche'),
(38, 56, 2, 105, 'ca marche'),
(39, 56, 1, 105, ''),
(40, 56, 2, 105, ''),
(41, 56, 1, 105, ''),
(42, 56, 1, 105, ''),
(43, 56, 2, 105, '');

-- --------------------------------------------------------

--
-- Structure de la table `demandeclient`
--

DROP TABLE IF EXISTS `demandeclient`;
CREATE TABLE IF NOT EXISTS `demandeclient` (
  `iddemande` int(11) NOT NULL AUTO_INCREMENT,
  `idclient` int(11) NOT NULL,
  `idprestation` int(11) NOT NULL,
  `idevent` int(11) NOT NULL,
  PRIMARY KEY (`iddemande`),
  KEY `fk_utilisateur` (`idclient`),
  KEY `fk_prestation` (`idprestation`),
  KEY `fk_idevent` (`idevent`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demandeclient`
--

INSERT INTO `demandeclient` (`iddemande`, `idclient`, `idprestation`, `idevent`) VALUES
(12, 18, 4, 105),
(11, 18, 1, 105),
(10, 18, 1, 105),
(17, 18, 1, 35),
(8, 18, 1, 23),
(7, 18, 1, 22),
(16, 18, 3, 103),
(15, 18, 5, 103),
(18, 18, 4, 3),
(19, 18, 1, 41),
(20, 52, 1, 43),
(21, 52, 4, 43),
(22, 52, 2, 43),
(23, 52, 1, 43),
(24, 52, 4, 43),
(25, 52, 4, 45),
(26, 52, 1, 47),
(27, 52, 1, 48),
(28, 52, 4, 48),
(29, 52, 4, 49),
(30, 52, 4, 50),
(31, 52, 1, 51),
(32, 53, 1, 52),
(33, 53, 4, 52),
(34, 55, 1, 53),
(35, 55, 1, 54),
(36, 55, 4, 54),
(37, 55, 1, 54),
(38, 55, 1, 62),
(39, 56, 1, 105),
(40, 56, 4, 105);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` text CHARACTER SET utf8 COLLATE utf8_bin,
  `date` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `ville` text CHARACTER SET utf8 COLLATE utf8_bin,
  `bninvite` int(11) NOT NULL,
  `idutilisateur` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `idevent` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_utilisateur` (`idutilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `libelle`, `date`, `ville`, `bninvite`, `idutilisateur`, `image`, `idevent`) VALUES
(2, 'testte', '2020-07-30', 'Deauville', 250, 55, NULL, 2),
(103, 'teste', '2020-07-25', '', 250, 55, 'cloud/event103/cc.PNG', 2),
(105, 'KIKIKIKI', '2022-07-26', 'massy', 250, 56, 'cloud/event105/pay.jpeg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `eventpresta`
--

DROP TABLE IF EXISTS `eventpresta`;
CREATE TABLE IF NOT EXISTS `eventpresta` (
  `idpresta` int(11) NOT NULL,
  `idevent` int(11) NOT NULL,
  KEY `fk_presta` (`idpresta`),
  KEY `fk_event` (`idevent`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `eventpresta`
--

INSERT INTO `eventpresta` (`idpresta`, `idevent`) VALUES
(2, 2),
(2, 4),
(2, 8),
(3, 105),
(4, 105),
(3, 105),
(4, 105);

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idquestion` int(11) NOT NULL,
  `reponse` varchar(255) COLLATE utf8_bin NOT NULL,
  `idpresta` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id`, `idquestion`, `reponse`, `idpresta`) VALUES
(1, 1, 'Tous types de règlements', 1),
(2, 2, 'Paris et banlieue', 1),
(3, 1, 'Tous types d\"evenements mais plus dans les mariages..', 1),
(6, 1, 'TEST1', 1),
(7, 2, 'TEST2', 1),
(5, 2, 'Aucune options', 1),
(8, 3, 'TEST3', 1),
(9, 4, 'TEST', 1),
(10, 1, 'tous les reglements', 27),
(11, 2, 'dsdd', 27),
(12, 3, '', 27),
(13, 4, '', 27);

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

DROP TABLE IF EXISTS `lieu`;
CREATE TABLE IF NOT EXISTS `lieu` (
  `id` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `cp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`id`, `ville`, `pays`, `cp`) VALUES
(1, 'Clichy', 'France', 92110),
(2, 'Sarcelles', 'France', 95200);

-- --------------------------------------------------------

--
-- Structure de la table `mariageprestataire`
--

DROP TABLE IF EXISTS `mariageprestataire`;
CREATE TABLE IF NOT EXISTS `mariageprestataire` (
  `idmariage` int(11) NOT NULL,
  `idprestataire` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mariageprestataire`
--

INSERT INTO `mariageprestataire` (`idmariage`, `idprestataire`) VALUES
(1, 1),
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `idmessage` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `heure` varchar(255) NOT NULL,
  `lu` int(11) NOT NULL,
  `idconversation` int(11) NOT NULL,
  `receveur` int(11) NOT NULL,
  `envoyeur` int(11) NOT NULL,
  `piece` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idmessage`),
  KEY `fk_idconversation` (`idconversation`)
) ENGINE=MyISAM AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`idmessage`, `text`, `date`, `heure`, `lu`, `idconversation`, `receveur`, `envoyeur`, `piece`) VALUES
(84, 'prpr', '20/04/2020', '12:19', 0, 12, 56, 1, NULL),
(85, 'je suis miting', '20/04/2020', '12:19', 0, 12, 56, 1, NULL),
(86, 'miiting pardon', '20/04/2020', '12:20', 0, 12, 56, 1, NULL),
(87, 'comment vas tu', '20/04/2020', '12:20', 0, 12, 56, 1, NULL),
(88, 'j\'envoie un messag', '24/04/2020', '14:43', 0, 12, 1, 56, NULL),
(83, 'un autre', '20/04/2020', '12:19', 0, 12, 18, 1, NULL),
(82, 'j\'envois encore', '20/06/2020', '12:19', 0, 12, 56, 1, NULL),
(81, 'ok', '20/04/2020', '12:17', 0, 13, 56, 3, NULL),
(80, 'je te vvv', '20/04/2020', '12:16', 0, 13, 3, 56, NULL),
(79, 'je te rep', '20/06/2020', '12:16', 0, 12, 1, 56, NULL),
(78, '1er message', '20/04/2020', '12:15', 0, 12, 1, 56, NULL),
(90, 'ilannnnnnnnnnnn', '07/07/2020', '16:46', 1, 12, 1, 56, NULL),
(91, 'Bonjour, <br />\n<br />\nje souhaite vous rencontrer et verifier votre identite <br />\ncomment pouvons nous vs voir  ', '07/07/2020', '16:48', 1, 12, 1, 56, NULL),
(92, 'HHHHHHHHHHHH', '07/07/2020', '16:49', 1, 13, 3, 56, NULL),
(93, 'YYYYYYYYYYYYYYY', '07/07/2020', '16:49', 1, 12, 1, 56, NULL),
(94, 'saz', '07/07/2020', '16:53', 1, 13, 3, 56, NULL),
(95, 'ttttttt', '07/07/2020', '16:53', 1, 13, 3, 56, NULL),
(96, 'Bonjour, <br />\ncava ? $', '08/07/2020', '09:29', 1, 13, 3, 56, NULL),
(97, 'Bonjour, <br />\ncava ? $', '08/07/2020', '09:29', 1, 13, 3, 56, NULL),
(98, 'vvvvvvvvvvvv', '08/07/2020', '09:29', 1, 13, 3, 56, NULL),
(99, 'testtt de coco', '08/07/2020', '11:53', 1, 19, 14, 56, NULL),
(100, 'testtt de coco', '08/07/2020', '11:53', 1, 19, 14, 56, NULL),
(101, 'testtt de coco', '08/07/2020', '11:53', 1, 19, 14, 56, NULL),
(102, 'testtt de coco', '08/07/2020', '11:53', 1, 19, 14, 56, NULL),
(103, 'Bonjour ', '08/07/2020', '11:54', 1, 26, 1, 56, NULL),
(104, 'qqqqqqqqqq', '22/07/2020', '14:42', 1, 43, 2, 56, NULL),
(105, 'bonjour, ', '23/07/2020', '11:32', 1, 43, 2, 56, NULL),
(106, 'bonjour, <br />\ntest bdd', '23/07/2020', '13:09', 1, 40, 2, 56, NULL),
(107, 'je repond A TOI <br />\nUn ejoilie phrase<br />\navc leins de text', '23/07/2020', '13:26', 1, 40, 2, 56, NULL),
(108, 'zara je t\'aime', '23/07/2020', '13:27', 1, 38, 7, 2, NULL),
(109, 'les ecritutes sont trop moches et grosse', '24/07/2020', '10:41', 1, 38, 10, 2, NULL),
(110, '', '27/07/2020', '09:18', 1, 31, 1, 56, NULL),
(111, 'ddddd', '27/07/2020', '09:18', 1, 32, 14, 56, NULL),
(112, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '27/07/2020', '09:19', 1, 33, 1, 56, NULL),
(113, '', '27/07/2020', '09:27', 1, 31, 1, 56, NULL),
(114, 'tetettee', '27/07/2020', '12:56', 1, 35, 1, 56, NULL),
(115, 'tetettee', '27/07/2020', '12:56', 1, 35, 1, 56, NULL),
(116, 'tetettee', '27/07/2020', '12:56', 1, 35, 1, 56, NULL),
(117, 'tetettee', '27/07/2020', '12:56', 1, 35, 1, 56, NULL),
(118, 'c\'est repati', '27/07/2020', '12:56', 1, 12, 1, 56, NULL),
(119, '', '27/07/2020', '15:50', 1, 31, 1, 56, NULL),
(120, '', '27/07/2020', '15:50', 1, 31, 1, 56, NULL),
(121, '', '27/07/2020', '15:51', 1, 31, 1, 56, NULL),
(122, '', '27/07/2020', '15:51', 1, 31, 1, 56, NULL),
(123, '', '27/07/2020', '16:04', 1, 31, 1, 56, NULL),
(124, 'qqqqwwwwwwww', '28/07/2020', '15:09', 1, 31, 1, 56, NULL),
(125, ',;s,;,;qqqqqqqq', '28/07/2020', '15:10', 1, 31, 1, 56, NULL),
(126, 'JE REPOND', '29/07/2020', '16:48', 1, 38, 7, 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `miitingor`
--

DROP TABLE IF EXISTS `miitingor`;
CREATE TABLE IF NOT EXISTS `miitingor` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `siret` varchar(255) NOT NULL,
  `activite` varchar(255) NOT NULL,
  `apropos` varchar(255) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `tel` text NOT NULL,
  `mail` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `miitingor`
--

INSERT INTO `miitingor` (`nom`, `prenom`, `siret`, `activite`, `apropos`, `societe`, `tel`, `mail`, `id`) VALUES
(' keren', ' lolo', ' 44444444444', ' commerce', 'dddddddddddddddd', ' carefour', ' 07883596685', ' kere@gmail.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `photomariage`
--

DROP TABLE IF EXISTS `photomariage`;
CREATE TABLE IF NOT EXISTS `photomariage` (
  `idphoto` int(11) NOT NULL,
  `src` varchar(500) NOT NULL,
  `idmariage` int(11) NOT NULL,
  PRIMARY KEY (`idphoto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `prestataire`
--

DROP TABLE IF EXISTS `prestataire`;
CREATE TABLE IF NOT EXISTS `prestataire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `logo` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `contact` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cont_tel` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `description` text NOT NULL,
  `adr` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `idprestation` int(11) DEFAULT NULL,
  `idlieux` int(11) NOT NULL,
  `mdp` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mail` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `siret` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cont_nom` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cont_email` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ville` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tarifs` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_presta` (`idprestation`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prestataire`
--

INSERT INTO `prestataire` (`id`, `libelle`, `logo`, `contact`, `cont_tel`, `description`, `adr`, `idprestation`, `idlieux`, `mdp`, `mail`, `siret`, `cont_nom`, `cont_email`, `ville`, `tarifs`) VALUES
(1, 'miiting', 'logo_prestataires/salle_bondoufle.jpg', 'www.pronovias.com/fr/', '078396224877', 'miiiting super application<br>Un texte est une série orale ou écrite de mots perçus comme constituant un ensemble cohérent, porteur de sens et utilisant les structures propres à une langue. Un texte n\'a pas de longueur déterminée sauf dans le cas de poèmes à forme fixe comme le sonnet ou le haïku.', '4 rue de paris', 2, 1, 'pp', 'miiting@gmail.com', '', 'Jordan Haddad', 'miiting@gmail.com', 'Paris', '3500'),
(2, 'Musical Show', 'logo_prestataires/salle_bondoufle.jpg', '', '0783112439', 'Plus qu\'un orchestre, une source d\'inspiration et d\'originalité qui fera de votre réception un moment d\'émotion unique.\r\n\r\n\r\n', ' 3 Rue de Paris, 92110 Clichy', 2, 1, 'dd', 'dd@gmail.com', '', '0', '', '', '3500'),
(3, 'Dior', 'images/mariagee.jpeg', 'https://www.pronovias.com/fr/', '0769958655', 'Christian Dior, né le 21 janvier 1905 à Granville dans la Un texte est une série orale ou écrite de mots perçus comme constituant un ensemble cohérent, porteur de sens et utilisant les structures propres à une langue. Un texte n\'a pas de longueur déterminée sauf dans le cas de poèmes à forme fixe comme le sonnet ou le haïku.Manche et mort le 24 octobre 1957 à Montecatini Terme en Italie, est un grand couturier français', 'Clichy, Paris', 3, 1, 'dior24', 'ss@gmail.com', '', 'Sebastient clutoir', '', 'Vineccnes', '3500'),
(4, 'Dior', 'images/mariagee.jpeg', 'https://www.pronovias.com/fr/', '0769958655', 'Christian Dior, né le 21 janvier 1905 à Granville dans la Un texte est une série orale ou écrite de mots perçus comme constituant un ensemble cohérent, porteur de sens et utilisant les structures propres à une langue. Un texte n\'a pas de longueur déterminée sauf dans le cas de poèmes à forme fixe comme le sonnet ou le haïku.Manche et mort le 24 octobre 1957 à Montecatini Terme en Italie, est un grand couturier français', 'Clichy, Paris', 3, 1, 'dior24', 'hh@gmail.com', '', 'Benoit Berinard', '', 'Montreuil', '3500'),
(5, 'lancome', 'images/mariage', 'https://www.pronovias.com/fr/', '0855774466', 'Lancôme est une marque de cosmétiques et de produits de luxe créée le 21 février 1935 par Armand Petitjean, parfumeur à Paris. Le nom est choisi pour sa sonorité « bien française ». ', 'Lyon', 12, 2, 'lacome', 'll@gmail.com', '', '0', '', '', '3500'),
(6, 'hatankalla', 'images/alliance', '', '0855774466', 'Lancôme est petit a petit la vie continu, parfumeur à Paris. Le nom est choisi pour sa sonorité « bien française ». ', 'Lyon', 2, 2, 'lacome', '0', '', '0', '', '', '3500'),
(7, 'zara', 'images/table', 'https://www.pronovias.com/fr/', '0855774466', 'Lancôme est petit a petit la vie continu, parfumeur à Paris. Le nom est choisi pour sa sonorité  ', 'grenoble', 13, 2, 'lacome', '0', '', '0', '', '', '3500'),
(8, 'chanel', 'images/event', 'https://www.pronovias.com/fr/', '0855774466', 'Lancôme est petit a petit la vie continu, parfumeur à Paris. Le nom est choisi pour sa sonorité', 'grenoble', 1, 2, 'lacome', '0', '', '0', '', '', '3500'),
(9, 'Charles traiteur', 'images/traiteur.jpg', 'http://www.charlestraiteur.fr/', '0544778899', 'Charles Traiteur est LE traiteur de prestige casher a Paris. Nous organisons des soirées privées ou entreprises, des petits déjeuners, brunch, vin d\'honneur ...', ' 23 Avenue de la Porte de Vincennes, 75020 Paris', 14, 3, 'charles', '0', '', '0', '', '', '3500'),
(10, 'pronovias', 'images/robe.jpg', 'https://www.pronovias.com/fr/', '0566998855', 'Venez découvrir nos modèles sur le site web ou en boutique. Toutes les robes Pronovias. Robes de mariées, robes de soirée & cocktails, accessoires. Design Premium & Glamour. Styles: Moderne, Romantique, Bohème, Classiques.', ' 1922, Barcelone, Espagne', 9, 2, 'pronoviass', '0', '', '0', '', '', '3500'),
(11, 'Elsa Gary', 'images/robe1.jpg', 'https://www.pronovias.com/fr/', '0566998855', 'Venez découvrir nos modèles sur le site web ou en boutique. Toutes les robes Pronovias. Robes de mariées, robes de soirée & cocktails, accessoires. Design Premium & Glamour. Styles: Moderne, Romantique, Bohème, Classiques.', ' 1922, Barcelone, Espagne', 9, 2, 'pronoviass', '0', '', '0', '', '', '3500'),
(12, 'Sunny Mariage', 'images/robe2.jpg', 'https://www.pronovias.com/fr/', '0566998855', 'Venez découvrir nos modèles sur le site web ou en boutique. Toutes les robes Pronovias. Robes de mariées, robes de soirée & cocktails, accessoires. Design Premium & Glamour. Styles: Moderne, Romantique, Bohème, Classiques.', ' 1922, Barcelone, Espagne', 9, 2, 'pronoviass', '0', '', '0', '', '', '3500'),
(13, 'americar prestigue', 'images/voit.jpg', 'https://www.roadstr.fr/location-voiture-mariage', '0555522222', 'Pour célébrer un événement aussi spécial que votre mariage, il faut trouver une voiture mariage toute aussi exceptionnelle pour conduire les heureux du jour. ', ' 5 Rue de Castiglione, 75001 Paris', 10, 2, 'blabla', '0', '', '0', '', '', '3500'),
(14, 'americar prestigue', 'images/voit1.jpg', 'https://www.roadstr.fr/location-voiture-mariage', '0555522222', 'Pour célébrer un événement aussi spécial que votre mariage, il faut trouver une voiture mariage toute aussi exceptionnelle pour conduire les heureux du jour. ', ' 5 Rue de Castiglione, 75001 Paris', 10, 2, 'blabla', '0', '', '0', '', '', '3500'),
(15, 'americar prestigue', 'images/voit2.jpg', 'https://www.roadstr.fr/location-voiture-mariage', '0555522222', 'Pour célébrer un événement aussi spécial que votre mariage, il faut trouver une voiture mariage toute aussi exceptionnelle pour conduire les heureux du jour. ', ' 5 Rue de Castiglione, 75001 Paris', 10, 2, 'blabla', '0', '', '0', '', '', '3500'),
(16, 'au fou rire', 'images/costume.jpg', 'https://www.lesdeuxoursons.com/fr/', '0566998877', 'Trouvez votre Costumes de marié - 2019 idéal grâce à notre moteur de recherche. Découvrez les nouveautés et les dernières tendances en matière de ...', 'Dupleix et La Motte-Picquet Grenelle', 11, 3, 'aaaaaaaa', '0', '', '0', '', '', '3500'),
(17, 'Au fou rire', 'images/costume1.jpg', 'https://www.lesdeuxoursons.com/fr/', '0566998877', 'Trouvez votre Costumes de marié - 2019 idéal grâce à notre moteur de recherche. Découvrez les nouveautés et les dernières tendances en matière de ...', 'Dupleix et La Motte-Picquet Grenelle', 11, 3, 'aaaaaaaa', '0', '', '0', '', '', '3500'),
(18, 'au fou rire', 'images/costume2.jpg', 'https://www.lesdeuxoursons.com/fr/', '0566998877', 'Trouvez votre Costumes de marié - 2019 idéal grâce à notre moteur de recherche. Découvrez les nouveautés et les dernières tendances en matière de ...', 'Dupleix et La Motte-Picquet Grenelle', 11, 3, 'aaaaaaaa', '0', '', '0', '', '', '3500'),
(19, 'cartier', 'img3.jpeg', 'https://www.cartier.fr/', '0788995588', 'Cartier est une entreprise du secteur de luxe qui conçoit, fabrique, distribue et vend des bijoux, des montres, des lunettes, des parfums, des sacs et des portefeuilles. Fondée à Paris en 1847 par Louis-François C', '14 avenue de ta race', 13, 2, 'frfr', '0', '', '0', '', '', '3500'),
(20, 'RONY', 'img3.jpeg', 'https://www.cartier.fr/', '0788995588', 'Cartier est une entreprise du secteur de luxe qui conçoit, fabrique, distribue et vend des bijoux, des montres, des lunettes, des parfums, des sacs et des portefeuilles. Fondée à Paris en 1847 par Louis-François C', '14 avenue de ta race', 13, 2, 'frfr', '0', '', '0', '', '', '3500'),
(21, 'RONY', 'img3.jpeg', 'https://www.cartier.fr/', '0788995588', 'Cartier est une entreprise du secteur de luxe qui conçoit, fabrique, distribue et vend des bijoux, des montres, des lunettes, des parfums, des sacs et des portefeuilles. Fondée à Paris en 1847 par Louis-François C', '14 avenue de ta race', 14, 2, 'frfr', '0', '', '0', '', '', '3500'),
(22, 'paulette', '', 'http://localhost/Miiting/inscription_entreprise', '099882266', 'SSSSSSSS<br />\r\nSSSSSS', '15 avenue de ta race', 2, 1, 'jojo', '', '6677-è44', 'Gertrude', 'paulette@juju.jiji', 'New York momo', '3500'),
(23, 'paulette', '', '', '', '', '15 avenue de ta race', 11, 1, 'eleve', 'pp@gmail.com', '6677-è44', '', '', 'New York', '3500'),
(24, '', '', '', '', '', '', 3, 1, '', '', '', '', '', '', '3500'),
(25, '', '', '', '', '', '', 9, 1, '', '', '', '', '', '', '3500'),
(26, '', '', '', '', '', '', NULL, 1, '', '', '', '', '', '', ''),
(27, 'kerenhas', 'aa.PNG', 'KERE;COM', '0922563892', 'Bonjour,<br />\r\nmeilleur créatrice de robes de maries <br />\r\nvraiment je suis sprcaile<br />\r\net j\'aime ce que je fais<br />\r\nvoici le test<br />\r\nj\'espere quec a vs a plu', '', 9, 1, 'kerenhas', 'Kerenhas', '89hhh7789', 'Keren', 'keren@gmail.com', 'Sarcelles', '900');

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

DROP TABLE IF EXISTS `prestation`;
CREATE TABLE IF NOT EXISTS `prestation` (
  `id` int(11) NOT NULL,
  `libelle` varchar(250) NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prestation`
--

INSERT INTO `prestation` (`id`, `libelle`, `logo`) VALUES
(1, 'traiteur', 'images_miiting/prestataires_logo/traiteur.png'),
(2, 'salle', 'images_miiting/prestataires_logo/salle.png'),
(3, 'orchestre', 'images_miiting/prestataires_logo/orchestre.png'),
(4, 'photographe', 'images_miiting/prestataires_logo/photographe.png'),
(5, 'cameraman', 'images_miiting/prestataires_logo/cameraman.png'),
(6, 'weddingPlanner', 'images_miiting/prestataires_logo/wedding_planner.png'),
(7, 'decorateur', 'images_miiting/prestataires_logo/decorateur.png'),
(8, 'animation', 'images_miiting/prestataires_logo/animation.png'),
(9, 'robemariee', 'images_miiting/prestataires_logo/robe_de_mariee.png'),
(10, 'locvoiture', 'images_miiting/prestataires_logo/location_voiture.png'),
(11, 'costume', 'images_miiting/prestataires_logo/costume.png'),
(12, 'maquillage', 'images_miiting/prestataires_logo/maquillage.png'),
(13, 'bijoux', 'images_miiting/prestataires_logo/bijoux.png'),
(14, 'coiffure', 'images_miiting/prestataires_logo/coiffure.png');

-- --------------------------------------------------------

--
-- Structure de la table `questionspresta`
--

DROP TABLE IF EXISTS `questionspresta`;
CREATE TABLE IF NOT EXISTS `questionspresta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `questionspresta`
--

INSERT INTO `questionspresta` (`id`, `question`) VALUES
(1, 'Type de règlement accepté (CB, Chèque, Espèce...)'),
(2, 'Secteur géographique'),
(3, 'Type d\'événement (Mariage, BM, Anniversaire...)'),
(4, 'Quels options proposez-vous?');

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

DROP TABLE IF EXISTS `taches`;
CREATE TABLE IF NOT EXISTS `taches` (
  `idTache` int(3) NOT NULL AUTO_INCREMENT,
  `libTache` varchar(255) NOT NULL,
  `echeance` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `avancement` int(3) NOT NULL DEFAULT '0',
  `fait` tinyint(1) NOT NULL DEFAULT '0',
  `fk_idFamille` int(3) NOT NULL,
  `idevent` int(11) NOT NULL,
  PRIMARY KEY (`idTache`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`idTache`, `libTache`, `echeance`, `description`, `avancement`, `fait`, `fk_idFamille`, `idevent`) VALUES
(1, 'tache2', '25-25-2020', 'You’ll adore these heart-felt love photos. From images of couples falling in love, hugging and holding hands - to engagement and wedding photos. Discover high-resolution, romantic pictures - HD and free to use on your next commercial project!', 15, 1, 4, 105),
(3, 'tache2', '', 'description2You’ll adore these heart-felt love photos. From images of couples falling in love, hugging and holding hands - to engagement and wedding photos. Discover high-resolution, romantic pictures - HD and free to use on your next commercial project!', 100, 1, 3, 105),
(5, 'tache2', '25-25-2020', 'description2You’ll adore these heart-felt love photos. From images of couples falling in love, hugging and holding hands - to engagement and wedding photos. Discover high-resolution, romantic pictures - HD and free to use on your next commercial project!', 15, 1, 3, 105),
(7, 'tache2', '25-25-2020', 'description2You’ll adore these heart-felt love photos. From images of couples falling in love, hugging and holding hands - to engagement and wedding photos. Discover high-resolution, romantic pictures - HD and free to use on your next commercial project!', 15, 1, 3, 105),
(9, 'testt', '2020-01-03', 'lolYou’ll adore these heart-felt love photos. From images of couples falling in love, hugging and holding hands - to engagement and wedding photos. Discover high-resolution, romantic pictures - HD and free to use on your next commercial project!', 100, 1, 4, 105),
(10, 'cinema', '2020-01-10', 'blablaYou’ll adore these heart-felt love photos. From images of couples falling in love, hugging and holding hands - to engagement and wedding photos. Discover high-resolution, romantic pictures - HD and free to use on your next commercial project!', 25, 0, 2, 105);

-- --------------------------------------------------------

--
-- Structure de la table `themesidees`
--

DROP TABLE IF EXISTS `themesidees`;
CREATE TABLE IF NOT EXISTS `themesidees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `titre` text NOT NULL,
  `alt` text NOT NULL,
  `href` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `themesidees`
--

INSERT INTO `themesidees` (`id`, `img`, `titre`, `alt`, `href`) VALUES
(1, 'images/mariagee.jpeg', 'Avant le mariage', 'ideesavantmariage', 'theme-1'),
(2, 'images/mariagee.jpeg', 'Avant le mariage', 'ideesavantmariage', 'theme-2'),
(3, 'images/beaumarie.jpeg', 'Avant le mariage', '', ''),
(4, 'images/mariage2.jpeg', 'Pendant le mariage', '', ''),
(5, 'images/beaumarie.jpeg', 'Avant le mariage', '', ''),
(6, 'images/mariage2.jpeg', 'Pendant le mariage', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `typeevent`
--

DROP TABLE IF EXISTS `typeevent`;
CREATE TABLE IF NOT EXISTS `typeevent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typeevent`
--

INSERT INTO `typeevent` (`id`, `libelle`) VALUES
(1, 'anniversaire'),
(2, 'corporate'),
(3, 'mariage');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mdp` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `tel` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `mdp`, `nom`, `prenom`, `mail`, `tel`) VALUES
(16, ' kkkkkkkk', ' keren', ' lolo', 'kerenhassan2000@gmail.com', ' 07883596685'),
(17, ' keren034', ' Keren', ' lolo', 'kerenhassan2000@gmail.com', ' 07883596685'),
(55, 'teste', ' teste', 'teste', 'teste@gail.com', '0'),
(56, 'kiki', ' kiki', 'kiki', 'kiki@gmail.com', '5678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
