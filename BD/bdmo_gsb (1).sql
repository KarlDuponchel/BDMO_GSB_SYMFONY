-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 03 mai 2021 à 06:51
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdmo_gsb`
--

-- --------------------------------------------------------

--
-- Structure de la table `associer`
--

DROP TABLE IF EXISTS `associer`;
CREATE TABLE IF NOT EXISTS `associer` (
  `LAB_ID` int(11) NOT NULL,
  `UTI_ID` int(11) NOT NULL,
  PRIMARY KEY (`LAB_ID`,`UTI_ID`),
  KEY `FK_ASSOCIER_UTILISATEUR` (`UTI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `droit_utilisateur`
--

DROP TABLE IF EXISTS `droit_utilisateur`;
CREATE TABLE IF NOT EXISTS `droit_utilisateur` (
  `DRO_ID` int(11) NOT NULL,
  `DRO_NOM_DROIT` varchar(38) DEFAULT NULL,
  PRIMARY KEY (`DRO_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `excipient`
--

DROP TABLE IF EXISTS `excipient`;
CREATE TABLE IF NOT EXISTS `excipient` (
  `EXC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `EXC_NOM` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`EXC_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `excipient`
--

INSERT INTO `excipient` (`EXC_ID`, `EXC_NOM`) VALUES
(1, 'Exc1'),
(2, 'Exc2'),
(4, 'exc3');

-- --------------------------------------------------------

--
-- Structure de la table `famille_medicament`
--

DROP TABLE IF EXISTS `famille_medicament`;
CREATE TABLE IF NOT EXISTS `famille_medicament` (
  `FAM_CODE` varchar(10) NOT NULL,
  `FAM_NOM` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`FAM_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `famille_medicament`
--

INSERT INTO `famille_medicament` (`FAM_CODE`, `FAM_NOM`) VALUES
('AA', 'Antalgiques en association'),
('AAA', 'Antalgiques antipyréques en association'),
('AAC', 'Antidépresseur d action centrale'),
('AAH', 'Antivertigineux antihistaminique H1'),
('ABA', 'Antibiotique antituberculeux'),
('ABC', 'Antibiotique antiacnénique local'),
('ABP', 'Antibiotique de la famille des béta-lactamines'),
('AFC', 'Antibiotique de la famille des cyclines'),
('AFM', 'Antibiotique de la famille des macrolides'),
('AH', 'Antihistaminique H1 local'),
('AIM', 'Antidépresseur imipraminique -tricyclique-'),
('AIN', 'Antidépresseur inhibiteur sélectif'),
('ALO', 'Antibiotique local -ORL-'),
('ANS', 'Antidépresseur IMAO non sélectif'),
('AO', 'Antibiotique ophtalmique'),
('AP', 'Antipsychotique normothymique'),
('AUM', 'Antibiotique urinaire minute'),
('CRT', 'Corticoide,antibiotique,antifongique à usage local'),
('HYP', 'Hypnotique antihistaminique'),
('PSA', 'Psychostimulant antiasthésique');

-- --------------------------------------------------------

--
-- Structure de la table `laboratoire`
--

DROP TABLE IF EXISTS `laboratoire`;
CREATE TABLE IF NOT EXISTS `laboratoire` (
  `LAB_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LAB_LIBELLE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`LAB_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `laboratoire`
--

INSERT INTO `laboratoire` (`LAB_ID`, `LAB_LIBELLE`) VALUES
(1, 'Adison Laboratories'),
(2, 'Abbott France'),
(3, 'Sanofi'),
(4, 'Actavis'),
(5, 'Safran'),
(6, 'Médipole'),
(7, 'CERP'),
(8, 'GLAXO'),
(9, 'IBIOS'),
(10, 'SAVARA'),
(11, 'VENUS PHARMA'),
(12, 'DEXO');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

DROP TABLE IF EXISTS `medicament`;
CREATE TABLE IF NOT EXISTS `medicament` (
  `MED_DEPOTLEGAL` varchar(50) NOT NULL,
  `FAM_CODE` varchar(10) DEFAULT NULL,
  `LAB_ID` int(11) DEFAULT NULL,
  `MED_NOMCOMMERCIAL` varchar(50) DEFAULT NULL,
  `MED_PRIX` float DEFAULT NULL,
  `MED_EFFETS` varchar(255) DEFAULT NULL,
  `MED_COMPOSITION` varchar(100) DEFAULT NULL,
  `MED_CONTREINDIC` varchar(255) DEFAULT NULL,
  `MED_QUANTITE` varchar(10) DEFAULT NULL,
  `EXC_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`MED_DEPOTLEGAL`),
  KEY `FK_MEDICAMENT_FAMILLE_MEDICAMENT` (`FAM_CODE`),
  KEY `FK_MEDICAMENT_LABORATOIRE` (`LAB_ID`),
  KEY `FK_MEDICAMENT_EXCIPIENT` (`EXC_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`MED_DEPOTLEGAL`, `FAM_CODE`, `LAB_ID`, `MED_NOMCOMMERCIAL`, `MED_PRIX`, `MED_EFFETS`, `MED_COMPOSITION`, `MED_CONTREINDIC`, `MED_QUANTITE`, `EXC_ID`) VALUES
('ADIMOL9', 'ABP', 1, 'ADIMOL', 46.93, 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Amoxicilline + Acide', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines ou aux céphalosporines.', '43 ml', 0),
('AMOPIL7', 'ABP', 7, 'AMOPIL', 32.36, 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Amoxicilline ', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit étre administré avec prudence en cas d\'allergie aux céphalosporines.', '12 ml', 0),
('AMOX45', 'ABP', 1, 'AMOXAR', 18.48, 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Amoxicilline', 'La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.    ', '27 ml', 0),
('AMOXIG12', 'ABP', 6, 'AMOXI Gé', 17.37, 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Amoxicilline', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit étre administré avec prudence en cas d\'allergie aux céphalosporines.   ', '63 ml', 0),
('APATOUX22', 'ALO', 9, 'APATOUX Vitamine C', 1.5, 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Tyrothricine + Tétracaéne + Acide ascorbique (Vitamine C)', 'Ce médicament est contre-indiqué en cas d\'allergie éé l\'un des constituants, en cas de phénylcétonurie et chez l\'enfant de moins de 6 ans. ', '2 ml', 0),
('BACTIG10', 'ABC', 3, 'BACTIGEL', 22.57, 'Ce médicament est utilisé en application locale pour traiter l\'acné et les infections cutanées bactériennes associées.', 'Erythromycine', 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques de la famille des macrolides ou des lincosanides.  ', '47 ml', 0),
('BACTIV13', 'AFM', 6, 'BACTIVIL', 34.24, 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. ', 'Erythromycine', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine). ', '69 ml', 0),
('BITALV', 'AAA', 2, 'BIVALIC', 18.46, 'Ce médicament est utilisé pour traiter les douleurs d\'intensité modérée ou intense. ', 'Dextropropoxyphéne + Paracétamol', 'Ce médicament est contre-indiqué en cas d\'allergie aux médicaments de cette famille, d\'insuffisance hépatique ou d\'insuffisance rénale. ', '91 ml', 0),
('CARTION6', 'AAA', 5, 'CARTION', 28.19, 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fiévre. ', 'Acide acétylsalicylique (aspirine)+ Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est contre-indiqué en cas de troubles de la coagulation (tendances aux hémorragies), d\'ulcére gastroduodénal, maladies graves du foie. ', '77 ml', 0),
('CLAZER6', 'AFM', 9, 'CLAZER', 45.17, 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également utilisé dans le traitement de l\'ulcére gastro-duodénal, en association avec d\'autres médicaments. ', 'Clarithromycine', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', '50ml', 0),
('DEPRIL9', 'AIM', 6, 'DEPRAMIL', 38.68, 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévéres, certaines douleurs rebelles, les troubles obsessionnels compulsifs et certaines énurésies chez l\'enfant.  ', 'Clomipramine', 'Ce médicament est contre-indiqué en cas de glaucome ou d\'adénome de la prostate, d\'infarctus récent, ou si vous avez eu un traitement par IMAO durant les 2 semaines précédentes ou en cas d\'allergie aux antidépresseurs imipraminiques.', '58 ml', 0),
('DIMIRTAM6', 'AAC', 8, 'DIMIRTAM', 5.2, 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévéres.', 'Mirtazapine', 'La prise de ce produit est contre-indiquée en cas de d\'allergie à l\'un des constituants.', '15 ml', 0),
('DOLRIL7', 'AAA', 10, 'DOLORIL', 4.63, 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fiévre.', 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est contre-indiqué en cas d\'allergie au paracétamol ou aux salicylates.', '52 ml', 0),
('DORNOM8', 'HYP', 1, 'NORMADOR', 15.48, 'Ce médicament est utilisé pour traiter l\'insomnie chez l\'adulte.', 'Doxylamine', 'Ce médicament est contre-indiqué en cas de glaucome, de certains troubles urinaires (rétention urinaire) et chez l\'enfant de moins de 15 ans.', '88 ml', 0),
('EQUILARX6', 'AAH', 12, 'EQUILAR', 16.7, 'Ce médicament est utilisé pour traiter les vertiges et pour prévenir et pour prévenir le mal des transports.', 'Méclozine', 'Ce médicament ne doit pas étre utilisé en cas d\'allergie au produit, en cas de glaucome ou de rétention urinaire.', '6 ml', 0),
('EVILR7', 'PSA', 3, 'EVEILLOR', 8.34, 'Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptomes neurologiques chez le sujet agé.', 'Adrafinil', 'Ce médicament est contre-indiqué en cas d\'allergie é l\'un des constituants.', '24 ml', 0),
('INSXT5', 'AH', 12, 'INSECTIL', 0.2, 'Ce médicament est utilisé en application locale sur les piqéres d insecte et l urticaire.', 'Diphénydramine', 'Ce médicament est contre-indiqué en cas d allergie aux antihistaminiques.', '11 ml', 0),
('JOVAI8', 'AFM', 4, 'JOVENIL', 15.55, 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Josamycine', 'Ce médicament est contre-indiqué en cas d allergie aux macrolides ', '42 ml', 0),
('LIDOXY23', 'AFC', 11, 'LIDOXYTRACINE', 6.08, 'Ce médicament est utilisé en injection intramusculaire pour traiter certaines infections spécifiques', 'Oxytétracycline +Lidocaéne', 'Ce médicament est contre-indiqué en cas d allergie à l un des constituants', '18 ml', 0),
('LITHOR12', 'AP', 2, 'LITHORINE', 45.99, 'Ce médicament est indiqué dans la prévention des psychoses maniaco-dépressives	', 'Lithium', 'Ce médicament ne doit pas étre utilisé si vous étes allergique au lithium.', '1 ml', 0),
('PARMOL16', 'AA', 5, 'PARMOCODEINE', 3.78, 'Ce médicament est utilisé pour le traitement des douleurs lorsque des antalgiques simples ne sont pas efficaces', 'Codéine + Paracétamol', 'Ce médicament est contre-indiqué en cas d allergie à l un des constituants ', '38 ml', 0),
('PHYSOI8', 'PSA', 7, 'PHYSICOR', 9.24, 'Ce médicament est utilisé pour traiter les baisses d activité physique ou psychique ', 'Sulbutiamine', 'Ce médicament est contre-indiqué en cas d allergie éé l un des constituants.', '38 ml', 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `UTI_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DRO_ID` int(11) DEFAULT NULL,
  `UTI_NOM` varchar(38) DEFAULT NULL,
  `UTI_PRENOM` varchar(38) DEFAULT NULL,
  `UTI_IDENTIFIANT` varchar(50) DEFAULT NULL,
  `UTI_MDP` varchar(50) DEFAULT NULL,
  `UTI_EMAIL` varchar(50) DEFAULT NULL,
  `UTI_TYPE_UTILISATEUR` varchar(38) DEFAULT NULL,
  PRIMARY KEY (`UTI_ID`),
  KEY `FK_UTILISATEUR_DROIT_UTILISATEUR` (`DRO_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `associer`
--
ALTER TABLE `associer`
  ADD CONSTRAINT `FK_ASSOCIER_LABORATOIRE` FOREIGN KEY (`LAB_ID`) REFERENCES `laboratoire` (`LAB_ID`),
  ADD CONSTRAINT `FK_ASSOCIER_UTILISATEUR` FOREIGN KEY (`UTI_ID`) REFERENCES `utilisateur` (`UTI_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
