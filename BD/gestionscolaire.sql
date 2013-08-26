-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Lun 26 Août 2013 à 12:14
-- Version du serveur: 5.5.27
-- Version de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gestionscolaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `accesoires`
--

CREATE TABLE IF NOT EXISTS `accesoires` (
  `ACCESOIRE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ETABLISSEMENT_ID` int(11) NOT NULL,
  `NOM` varchar(255) DEFAULT NULL,
  `DESCRIPTION` text,
  PRIMARY KEY (`ACCESOIRE_ID`),
  KEY `FK_RELATIONSHIP_1` (`ETABLISSEMENT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `accesoires`
--

INSERT INTO `accesoires` (`ACCESOIRE_ID`, `ETABLISSEMENT_ID`, `NOM`, `DESCRIPTION`) VALUES
(1, 1, 'Feutre', 'Feutre');

-- --------------------------------------------------------

--
-- Structure de la table `anneeacademiques`
--

CREATE TABLE IF NOT EXISTS `anneeacademiques` (
  `ANNEEACADEMIQUE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ETABLISSEMENT_ID` int(11) NOT NULL,
  `DATEDEB` date DEFAULT NULL,
  `DATEFIN` date DEFAULT NULL,
  PRIMARY KEY (`ANNEEACADEMIQUE_ID`),
  KEY `FK_RELATIONSHIP_4` (`ETABLISSEMENT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `anneeacademiques`
--

INSERT INTO `anneeacademiques` (`ANNEEACADEMIQUE_ID`, `ETABLISSEMENT_ID`, `DATEDEB`, `DATEFIN`) VALUES
(1, 1, '2013-09-01', '2014-06-30');

-- --------------------------------------------------------

--
-- Structure de la table `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('admin', '1', NULL, 'N;'),
('test', '2', NULL, 'N;');

-- --------------------------------------------------------

--
-- Structure de la table `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Accesoires.*', 1, NULL, NULL, 'N;'),
('Accesoires.Admin', 0, NULL, NULL, 'N;'),
('Accesoires.Create', 0, NULL, NULL, 'N;'),
('Accesoires.Delete', 0, NULL, NULL, 'N;'),
('Accesoires.Index', 0, NULL, NULL, 'N;'),
('Accesoires.Update', 0, NULL, NULL, 'N;'),
('Accesoires.View', 0, NULL, NULL, 'N;'),
('admin', 2, NULL, NULL, 'N;'),
('Anneeacademiques.*', 1, NULL, NULL, 'N;'),
('Anneeacademiques.Admin', 0, NULL, NULL, 'N;'),
('Anneeacademiques.Create', 0, NULL, NULL, 'N;'),
('Anneeacademiques.Delete', 0, NULL, NULL, 'N;'),
('Anneeacademiques.Index', 0, NULL, NULL, 'N;'),
('Anneeacademiques.Update', 0, NULL, NULL, 'N;'),
('Anneeacademiques.View', 0, NULL, NULL, 'N;'),
('Authenticated', 2, NULL, NULL, 'N;'),
('Classes.*', 1, NULL, NULL, 'N;'),
('Classes.Admin', 0, NULL, NULL, 'N;'),
('Classes.Create', 0, NULL, NULL, 'N;'),
('Classes.Delete', 0, NULL, NULL, 'N;'),
('Classes.Index', 0, NULL, NULL, 'N;'),
('Classes.Update', 0, NULL, NULL, 'N;'),
('Classes.View', 0, NULL, NULL, 'N;'),
('Cours.*', 1, NULL, NULL, 'N;'),
('Cours.Admin', 0, NULL, NULL, 'N;'),
('Cours.Create', 0, NULL, NULL, 'N;'),
('Cours.Delete', 0, NULL, NULL, 'N;'),
('Cours.Index', 0, NULL, NULL, 'N;'),
('Cours.Update', 0, NULL, NULL, 'N;'),
('Cours.View', 0, NULL, NULL, 'N;'),
('Eleves.*', 1, NULL, NULL, 'N;'),
('Eleves.Admin', 0, NULL, NULL, 'N;'),
('Eleves.Create', 0, NULL, NULL, 'N;'),
('Eleves.Delete', 0, NULL, NULL, 'N;'),
('Eleves.Index', 0, NULL, NULL, 'N;'),
('Eleves.Update', 0, NULL, NULL, 'N;'),
('Eleves.View', 0, NULL, NULL, 'N;'),
('Enseignants.*', 1, NULL, NULL, 'N;'),
('Enseignants.Admin', 0, NULL, NULL, 'N;'),
('Enseignants.Create', 0, NULL, NULL, 'N;'),
('Enseignants.Delete', 0, NULL, NULL, 'N;'),
('Enseignants.Index', 0, NULL, NULL, 'N;'),
('Enseignants.Update', 0, NULL, NULL, 'N;'),
('Enseignants.View', 0, NULL, NULL, 'N;'),
('Etablissements.*', 1, NULL, NULL, 'N;'),
('Etablissements.Admin', 0, NULL, NULL, 'N;'),
('Etablissements.Create', 0, NULL, NULL, 'N;'),
('Etablissements.Delete', 0, NULL, NULL, 'N;'),
('Etablissements.Index', 0, NULL, NULL, 'N;'),
('Etablissements.Update', 0, NULL, NULL, 'N;'),
('Etablissements.View', 0, NULL, NULL, 'N;'),
('Examen.*', 1, NULL, NULL, 'N;'),
('Examen.Admin', 0, NULL, NULL, 'N;'),
('Examen.Create', 0, NULL, NULL, 'N;'),
('Examen.Delete', 0, NULL, NULL, 'N;'),
('Examen.Index', 0, NULL, NULL, 'N;'),
('Examen.Update', 0, NULL, NULL, 'N;'),
('Examen.View', 0, NULL, NULL, 'N;'),
('Examens.*', 1, NULL, NULL, 'N;'),
('Examens.Admin', 0, NULL, NULL, 'N;'),
('Examens.Create', 0, NULL, NULL, 'N;'),
('Examens.Delete', 0, NULL, NULL, 'N;'),
('Examens.Index', 0, NULL, NULL, 'N;'),
('Examens.Update', 0, NULL, NULL, 'N;'),
('Examens.View', 0, NULL, NULL, 'N;'),
('Guest', 2, NULL, NULL, 'N;'),
('Site.*', 1, NULL, NULL, 'N;'),
('Site.Administration', 0, NULL, NULL, 'N;'),
('Site.Error', 0, NULL, NULL, 'N;'),
('Site.Index', 0, NULL, NULL, 'N;'),
('Site.Login', 0, NULL, NULL, 'N;'),
('Site.Logout', 0, NULL, NULL, 'N;'),
('Societe.*', 1, NULL, NULL, 'N;'),
('Societe.Admin', 0, NULL, NULL, 'N;'),
('Societe.Create', 0, NULL, NULL, 'N;'),
('Societe.Delete', 0, NULL, NULL, 'N;'),
('Societe.Index', 0, NULL, NULL, 'N;'),
('Societe.Update', 0, NULL, NULL, 'N;'),
('Societe.View', 0, NULL, NULL, 'N;'),
('Societes.*', 1, NULL, NULL, 'N;'),
('Societes.Admin', 0, NULL, NULL, 'N;'),
('Societes.Create', 0, NULL, NULL, 'N;'),
('Societes.Delete', 0, NULL, NULL, 'N;'),
('Societes.Index', 0, NULL, NULL, 'N;'),
('Societes.Update', 0, NULL, NULL, 'N;'),
('Societes.View', 0, NULL, NULL, 'N;'),
('Statuts.*', 1, NULL, NULL, 'N;'),
('Statuts.Admin', 0, NULL, NULL, 'N;'),
('Statuts.Create', 0, NULL, NULL, 'N;'),
('Statuts.Delete', 0, NULL, NULL, 'N;'),
('Statuts.Index', 0, NULL, NULL, 'N;'),
('Statuts.Update', 0, NULL, NULL, 'N;'),
('Statuts.View', 0, NULL, NULL, 'N;'),
('test', 2, 'rôle pour le test des fonctions ', NULL, 'N;'),
('Typepaiements.*', 1, NULL, NULL, 'N;'),
('Typepaiements.Admin', 0, NULL, NULL, 'N;'),
('Typepaiements.Create', 0, NULL, NULL, 'N;'),
('Typepaiements.Delete', 0, NULL, NULL, 'N;'),
('Typepaiements.Index', 0, NULL, NULL, 'N;'),
('Typepaiements.Update', 0, NULL, NULL, 'N;'),
('Typepaiements.View', 0, NULL, NULL, 'N;'),
('Utilisateurs.*', 1, NULL, NULL, 'N;'),
('Utilisateurs.Admin', 0, NULL, NULL, 'N;'),
('Utilisateurs.Create', 0, NULL, NULL, 'N;'),
('Utilisateurs.Delete', 0, NULL, NULL, 'N;'),
('Utilisateurs.Index', 0, NULL, NULL, 'N;'),
('Utilisateurs.Update', 0, NULL, NULL, 'N;'),
('Utilisateurs.View', 0, NULL, NULL, 'N;');

-- --------------------------------------------------------

--
-- Structure de la table `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `CLASSE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ETABLISSEMENT_ID` int(11) DEFAULT NULL,
  `NOM` varchar(255) NOT NULL,
  `NIVEAU` varchar(255) DEFAULT NULL,
  `FRAIS_SCOLARITE` decimal(10,0) DEFAULT NULL,
  `MOYENE` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`CLASSE_ID`),
  KEY `FK_RELATIONSHIP_7` (`ETABLISSEMENT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `classes`
--

INSERT INTO `classes` (`CLASSE_ID`, `ETABLISSEMENT_ID`, `NOM`, `NIVEAU`, `FRAIS_SCOLARITE`, `MOYENE`) VALUES
(1, 1, 'CM2 A', 'CM2', 60000, NULL),
(2, 1, 'SLI B', 'SIL', 60000, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
  `COURS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ETABLISSEMENT_ID` int(11) NOT NULL,
  `NOM` varchar(255) DEFAULT NULL,
  `DESCRIPTION` text,
  PRIMARY KEY (`COURS_ID`),
  KEY `FK_RELATIONSHIP_3` (`ETABLISSEMENT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`COURS_ID`, `ETABLISSEMENT_ID`, `NOM`, `DESCRIPTION`) VALUES
(1, 1, 'Mathématique', 'cours de math SIL'),
(2, 1, 'Orthographe SIL', 'cours d''orthographe pour la SIL');

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE IF NOT EXISTS `eleves` (
  `ELEVE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ETABLISSEMENT_ID` int(11) NOT NULL,
  `STATUT_ID` int(11) DEFAULT NULL,
  `NOM` varchar(255) DEFAULT NULL,
  `PRENOM` varchar(255) DEFAULT NULL,
  `DATE_NAISSANCE` date DEFAULT NULL,
  `DATE_ENREGISTREMENT` date DEFAULT NULL,
  `NOM_PRENOM_PERE` varchar(255) DEFAULT NULL,
  `NOM__PRENOM_MERE` varchar(255) DEFAULT NULL,
  `ADRESSE` varchar(255) DEFAULT NULL,
  `TELEPHONE_PERE` varchar(255) DEFAULT NULL,
  `SEXE` varchar(50) DEFAULT NULL,
  `TELEPHONE_MERE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ELEVE_ID`),
  KEY `FK_RELATIONSHIP_6` (`ETABLISSEMENT_ID`),
  KEY `FK_RELATIONSHIP_9` (`STATUT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `eleves`
--

INSERT INTO `eleves` (`ELEVE_ID`, `ETABLISSEMENT_ID`, `STATUT_ID`, `NOM`, `PRENOM`, `DATE_NAISSANCE`, `DATE_ENREGISTREMENT`, `NOM_PRENOM_PERE`, `NOM__PRENOM_MERE`, `ADRESSE`, `TELEPHONE_PERE`, `SEXE`, `TELEPHONE_MERE`) VALUES
(1, 1, 1, 'BANO', 'Jean', '2013-08-11', '2013-08-11', 'Père', 'Mère', 'douala', '', 'Masculin', ''),
(2, 1, 1, 'TITO', 'Merlin', '2013-08-01', '2013-08-16', '', '', '', '', 'Masculin', ''),
(3, 1, 1, 'Meumi', 'Blanche', '2012-06-01', '0000-00-00', '', '', '', '', 'Féminin', ''),
(4, 1, 1, 'TOTO', 'TOTO', '2012-08-01', '2013-08-17', 'Père toto', 'mère toto', 'bafoussam Antenne télé', '237987056', 'Masculin', '');

-- --------------------------------------------------------

--
-- Structure de la table `enseignants`
--

CREATE TABLE IF NOT EXISTS `enseignants` (
  `ESEIGNANT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ETABLISSEMENT_ID` int(11) NOT NULL,
  `STATUT_ID` int(11) DEFAULT NULL,
  `NOM` varchar(255) DEFAULT NULL,
  `PRENOM` varchar(255) DEFAULT NULL,
  `LOGIN` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `TELEPHONE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ESEIGNANT_ID`),
  KEY `FK_RELATIONSHIP_10` (`STATUT_ID`),
  KEY `FK_RELATIONSHIP_2` (`ETABLISSEMENT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `enseignants`
--

INSERT INTO `enseignants` (`ESEIGNANT_ID`, `ETABLISSEMENT_ID`, `STATUT_ID`, `NOM`, `PRENOM`, `LOGIN`, `PASSWORD`, `TELEPHONE`) VALUES
(1, 1, 1, 'FOKOU', ' Jacque', '', '', '23768946758'),
(2, 1, 1, 'TCHOULA', 'Bertrand', NULL, NULL, '23790324567');

-- --------------------------------------------------------

--
-- Structure de la table `enseigner`
--

CREATE TABLE IF NOT EXISTS `enseigner` (
  `ESEIGNANT_ID` int(11) NOT NULL,
  `ANNEEACADEMIQUE_ID` int(11) NOT NULL,
  `CLASSE_ID` int(11) NOT NULL,
  `COURS_ID` int(11) NOT NULL,
  `ETABLISSEMENT_ID` int(11) NOT NULL,
  `ROLE` char(250) DEFAULT NULL,
  `enseigner_id` varchar(255) NOT NULL,
  PRIMARY KEY (`enseigner_id`),
  KEY `FK_ENSEIGNER2` (`ESEIGNANT_ID`),
  KEY `FK_ENSEIGNER3` (`ANNEEACADEMIQUE_ID`),
  KEY `FK_ENSEIGNER4` (`CLASSE_ID`),
  KEY `FK_ENSEIGNER5` (`COURS_ID`),
  KEY `FK_REFERENCE_30` (`ETABLISSEMENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etablissements`
--

CREATE TABLE IF NOT EXISTS `etablissements` (
  `ETABLISSEMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SOCIETE_ID` int(11) NOT NULL,
  `NOM` varchar(255) DEFAULT NULL,
  `DESCRIPTION` text,
  PRIMARY KEY (`ETABLISSEMENT_ID`),
  KEY `FK_EST_MEMBRE` (`SOCIETE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `etablissements`
--

INSERT INTO `etablissements` (`ETABLISSEMENT_ID`, `SOCIETE_ID`, `NOM`, `DESCRIPTION`) VALUES
(1, 1, 'Alpha', 'Ecole primaire et maternelle  Alpha');

-- --------------------------------------------------------

--
-- Structure de la table `evaluer`
--

CREATE TABLE IF NOT EXISTS `evaluer` (
  `ELEVE_ID` int(11) NOT NULL,
  `ANNEEACADEMIQUE_ID` int(11) NOT NULL,
  `COURS_ID` int(11) NOT NULL,
  `EXAMEN_ID` int(11) NOT NULL,
  `ETABLISSEMENT_ID` int(11) DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  `MOYENE` decimal(10,0) DEFAULT NULL,
  `CLASSE_ID` int(11) NOT NULL,
  `OBSERV` varchar(255) NOT NULL,
  `EVAL_ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`EVAL_ID`),
  KEY `FK_EVALUER2` (`ELEVE_ID`),
  KEY `FK_EVALUER3` (`ANNEEACADEMIQUE_ID`),
  KEY `FK_EVALUER4` (`COURS_ID`),
  KEY `FK_EVALUER5` (`EXAMEN_ID`),
  KEY `FK_REFERENCE_31` (`ETABLISSEMENT_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `examens`
--

CREATE TABLE IF NOT EXISTS `examens` (
  `EXAMEN_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ETABLISSEMENT_ID` int(11) DEFAULT NULL,
  `NOM` varchar(255) DEFAULT NULL,
  `DESCRIPTION` text,
  `COURS_ID` int(11) NOT NULL,
  `ANNEEACADEMIQUE_ID` int(11) NOT NULL,
  `DATE_DEB` date NOT NULL,
  `CLASSE_ID` int(11) NOT NULL,
  PRIMARY KEY (`EXAMEN_ID`),
  KEY `FK_RELATIONSHIP_8` (`ETABLISSEMENT_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `examens`
--

INSERT INTO `examens` (`EXAMEN_ID`, `ETABLISSEMENT_ID`, `NOM`, `DESCRIPTION`, `COURS_ID`, `ANNEEACADEMIQUE_ID`, `DATE_DEB`, `CLASSE_ID`) VALUES
(1, 1, 'Évaluation math dexième trimestre', '', 1, 1, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `ANNEEACADEMIQUE_ID` int(11) NOT NULL,
  `ELEVE_ID` int(11) NOT NULL,
  `CLASSE_ID` int(11) NOT NULL,
  `ETABLISSEMENT_ID` int(11) NOT NULL,
  `DATE` date DEFAULT NULL,
  `NUMERO` int(11) DEFAULT NULL,
  `inscription_id` varchar(255) NOT NULL,
  PRIMARY KEY (`inscription_id`),
  KEY `FK_INSCRIPTION2` (`ANNEEACADEMIQUE_ID`),
  KEY `FK_INSCRIPTION3` (`ELEVE_ID`),
  KEY `FK_INSCRIPTION4` (`CLASSE_ID`),
  KEY `FK_REFERENCE_29` (`ETABLISSEMENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`ANNEEACADEMIQUE_ID`, `ELEVE_ID`, `CLASSE_ID`, `ETABLISSEMENT_ID`, `DATE`, `NUMERO`, `inscription_id`) VALUES
(1, 1, 1, 1, '2013-08-15', NULL, '1#1#1#1'),
(1, 2, 1, 1, '2013-08-16', NULL, '1#2#1#1'),
(1, 4, 2, 1, '2013-08-17', NULL, '1#4#2#1');

-- --------------------------------------------------------

--
-- Structure de la table `payement`
--

CREATE TABLE IF NOT EXISTS `payement` (
  `ANNEEACADEMIQUE_ID` int(11) NOT NULL,
  `ELEVE_ID` int(11) DEFAULT NULL,
  `TYPE_PAIEMENT_ID` int(11) NOT NULL,
  `ESEIGNANT_ID` int(11) DEFAULT NULL,
  `ACCESOIRE_ID` int(11) DEFAULT NULL,
  `ETABLISSEMENT_ID` int(11) NOT NULL,
  `DATE` date DEFAULT NULL,
  `MONTANT` decimal(10,0) DEFAULT NULL,
  `payement_id` varchar(255) NOT NULL,
  PRIMARY KEY (`payement_id`),
  KEY `FK_PAYEMENT2` (`ANNEEACADEMIQUE_ID`),
  KEY `FK_PAYEMENT3` (`ELEVE_ID`),
  KEY `FK_PAYEMENT4` (`TYPE_PAIEMENT_ID`),
  KEY `FK_PAYEMENT5` (`ESEIGNANT_ID`),
  KEY `FK_PAYEMENT6` (`ACCESOIRE_ID`),
  KEY `FK_REFERENCE_28` (`ETABLISSEMENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `payement`
--

INSERT INTO `payement` (`ANNEEACADEMIQUE_ID`, `ELEVE_ID`, `TYPE_PAIEMENT_ID`, `ESEIGNANT_ID`, `ACCESOIRE_ID`, `ETABLISSEMENT_ID`, `DATE`, `MONTANT`, `payement_id`) VALUES
(1, 1, 1, NULL, NULL, 1, '2013-08-16', 2000, '1#1#1#2013-08-16H:11:34'),
(1, 1, 1, NULL, NULL, 1, '2013-08-16', 20000, '1#1#1#2013-08-16T21:12:44'),
(1, 1, 2, NULL, NULL, 1, '2013-08-15', 5000, '1#2#1'),
(1, 2, 2, NULL, NULL, 1, '2013-08-16', 4000, '1#2#1#1376686917'),
(1, 4, 2, NULL, NULL, 1, '2013-08-17', 90000, '1#2#1#2013-08-17T11:47:17');

-- --------------------------------------------------------

--
-- Structure de la table `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `societes`
--

CREATE TABLE IF NOT EXISTS `societes` (
  `SOCIETE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) DEFAULT NULL,
  `DESCRIPTION` text,
  PRIMARY KEY (`SOCIETE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `societes`
--

INSERT INTO `societes` (`SOCIETE_ID`, `NOM`, `DESCRIPTION`) VALUES
(1, 'Société test', 'Société test');

-- --------------------------------------------------------

--
-- Structure de la table `statuts`
--

CREATE TABLE IF NOT EXISTS `statuts` (
  `STATUT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) DEFAULT NULL,
  `DESCRIPTION` text,
  `TYPE` int(11) DEFAULT NULL,
  `etablissement_id` int(11) NOT NULL,
  PRIMARY KEY (`STATUT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `statuts`
--

INSERT INTO `statuts` (`STATUT_ID`, `NOM`, `DESCRIPTION`, `TYPE`, `etablissement_id`) VALUES
(1, 'ACTIF', 'STATUT DES OBJETS ACTIF', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typepaiements`
--

CREATE TABLE IF NOT EXISTS `typepaiements` (
  `TYPE_PAIEMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ETABLISSEMENT_ID` int(11) NOT NULL,
  `NOM` varchar(255) DEFAULT NULL,
  `TPYE` int(11) DEFAULT NULL,
  PRIMARY KEY (`TYPE_PAIEMENT_ID`),
  KEY `FK_RELATIONSHIP_5` (`ETABLISSEMENT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `typepaiements`
--

INSERT INTO `typepaiements` (`TYPE_PAIEMENT_ID`, `ETABLISSEMENT_ID`, `NOM`, `TPYE`) VALUES
(1, 1, 'Pension', 1),
(2, 1, 'Inscription', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `utilisateur_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `portable` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  PRIMARY KEY (`utilisateur_id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`utilisateur_id`, `login`, `password`, `nom`, `prenom`, `telephone`, `portable`, `fonction`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '', '', ''),
(2, 'ptchuimamo', 'tkamgap', 'TCHUIMAMO KAMGA', 'Pécos', '94022438', '76424344', 'testeur');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `accesoires`
--
ALTER TABLE `accesoires`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ETABLISSEMENT_ID`) REFERENCES `etablissements` (`ETABLISSEMENT_ID`);

--
-- Contraintes pour la table `anneeacademiques`
--
ALTER TABLE `anneeacademiques`
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ETABLISSEMENT_ID`) REFERENCES `etablissements` (`ETABLISSEMENT_ID`);

--
-- Contraintes pour la table `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ETABLISSEMENT_ID`) REFERENCES `etablissements` (`ETABLISSEMENT_ID`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ETABLISSEMENT_ID`) REFERENCES `etablissements` (`ETABLISSEMENT_ID`);

--
-- Contraintes pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ETABLISSEMENT_ID`) REFERENCES `etablissements` (`ETABLISSEMENT_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`STATUT_ID`) REFERENCES `statuts` (`STATUT_ID`);

--
-- Contraintes pour la table `enseignants`
--
ALTER TABLE `enseignants`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`STATUT_ID`) REFERENCES `statuts` (`STATUT_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ETABLISSEMENT_ID`) REFERENCES `etablissements` (`ETABLISSEMENT_ID`);

--
-- Contraintes pour la table `enseigner`
--
ALTER TABLE `enseigner`
  ADD CONSTRAINT `FK_ENSEIGNER2` FOREIGN KEY (`ESEIGNANT_ID`) REFERENCES `enseignants` (`ESEIGNANT_ID`),
  ADD CONSTRAINT `FK_ENSEIGNER3` FOREIGN KEY (`ANNEEACADEMIQUE_ID`) REFERENCES `anneeacademiques` (`ANNEEACADEMIQUE_ID`),
  ADD CONSTRAINT `FK_ENSEIGNER4` FOREIGN KEY (`CLASSE_ID`) REFERENCES `classes` (`CLASSE_ID`),
  ADD CONSTRAINT `FK_ENSEIGNER5` FOREIGN KEY (`COURS_ID`) REFERENCES `cours` (`COURS_ID`),
  ADD CONSTRAINT `FK_REFERENCE_30` FOREIGN KEY (`ETABLISSEMENT_ID`) REFERENCES `etablissements` (`ETABLISSEMENT_ID`);

--
-- Contraintes pour la table `etablissements`
--
ALTER TABLE `etablissements`
  ADD CONSTRAINT `FK_EST_MEMBRE` FOREIGN KEY (`SOCIETE_ID`) REFERENCES `societes` (`SOCIETE_ID`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `FK_INSCRIPTION2` FOREIGN KEY (`ANNEEACADEMIQUE_ID`) REFERENCES `anneeacademiques` (`ANNEEACADEMIQUE_ID`),
  ADD CONSTRAINT `FK_INSCRIPTION3` FOREIGN KEY (`ELEVE_ID`) REFERENCES `eleves` (`ELEVE_ID`),
  ADD CONSTRAINT `FK_INSCRIPTION4` FOREIGN KEY (`CLASSE_ID`) REFERENCES `classes` (`CLASSE_ID`),
  ADD CONSTRAINT `FK_REFERENCE_29` FOREIGN KEY (`ETABLISSEMENT_ID`) REFERENCES `etablissements` (`ETABLISSEMENT_ID`);

--
-- Contraintes pour la table `payement`
--
ALTER TABLE `payement`
  ADD CONSTRAINT `FK_PAYEMENT2` FOREIGN KEY (`ANNEEACADEMIQUE_ID`) REFERENCES `anneeacademiques` (`ANNEEACADEMIQUE_ID`),
  ADD CONSTRAINT `FK_PAYEMENT3` FOREIGN KEY (`ELEVE_ID`) REFERENCES `eleves` (`ELEVE_ID`),
  ADD CONSTRAINT `FK_PAYEMENT4` FOREIGN KEY (`TYPE_PAIEMENT_ID`) REFERENCES `typepaiements` (`TYPE_PAIEMENT_ID`),
  ADD CONSTRAINT `FK_PAYEMENT5` FOREIGN KEY (`ESEIGNANT_ID`) REFERENCES `enseignants` (`ESEIGNANT_ID`),
  ADD CONSTRAINT `FK_PAYEMENT6` FOREIGN KEY (`ACCESOIRE_ID`) REFERENCES `accesoires` (`ACCESOIRE_ID`),
  ADD CONSTRAINT `FK_REFERENCE_28` FOREIGN KEY (`ETABLISSEMENT_ID`) REFERENCES `etablissements` (`ETABLISSEMENT_ID`);

--
-- Contraintes pour la table `rights`
--
ALTER TABLE `rights`
  ADD CONSTRAINT `rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `typepaiements`
--
ALTER TABLE `typepaiements`
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ETABLISSEMENT_ID`) REFERENCES `etablissements` (`ETABLISSEMENT_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
