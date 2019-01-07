-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 07 jan. 2019 à 09:02
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
-- Base de données :  `cat`
--

-- --------------------------------------------------------

--
-- Structure de la table `classement`
--

DROP TABLE IF EXISTS `classement`;
CREATE TABLE IF NOT EXISTS `classement` (
  `id` varchar(10) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classement`
--

INSERT INTO `classement` (`id`, `points`) VALUES
('MTgwODA3MA', 1),
('tt', 10),
('bmp', 0),
('c8a', 0),
('3kj', 0),
('9pu', 2),
('aca', 0),
('ebk', 0),
('MTg0MTYyOQ', 0),
('6mo', 0),
('4m5', 0),
('5v3', 0),
('52k', 10),
('47s', 0),
('77s', 2),
('8g6', 0),
('6cu', 0),
('71f', 0),
('2pp', 0),
('e6d', 0),
('99t', 25),
('510', 0),
('9u3', 0),
('1dp', 0),
('b8p', 0),
('7q3', 0),
('8v5', 0),
('37p', 0),
('2n0', 0),
('ckc', 0),
('27m', 0),
('di6', 0),
('afr', 0),
('65s', 0),
('abs', 0),
('MjAxMTk1Mw', 0),
('6hn', 0),
('e82', 0),
('bgf', 3),
('93m', 0),
('MTY1Mjg5NQ', 1),
('3dr', 1),
('8o4', 0),
('8g1', 0),
('3s9', 0),
('bjp', 0),
('cgp', 0),
('1e6', 0),
('3b8', 0),
('9us', 0),
('MTY4NDQ5NQ', 1),
('bu5', 0),
('3ic', 0),
('8q', 0),
('ck8', 0),
('s7', 0),
('is', 1),
('2r3', 0),
('btv', 0),
('e3a', 0),
('al8', 1),
('56s', 0),
('aj6', 1),
('46h', 0),
('bd8', 0),
('45k', 0),
('bjc', 0),
('5ts', 0),
('chk', 0),
('ca8', 0),
('MTU0NzgwMA', 1),
('ddp', 0),
('e03', 0),
('9mk', 0),
('3gm', 0),
('6lo', 1),
('MjA2NTY1NQ', 0),
('41c', 0),
('54m', 2),
('bjf', 0),
('e9h', 0),
('ec6', 0),
('4ge', 1),
('ds4', 0),
('MTcwMTgxMg', 0),
('7ts', 0),
('d5c', 0),
('6jf', 0),
('MTY4MDkyOA', 0),
('8hk', 0),
('5no', 0),
('e3v', 0),
('dp', 0),
('6jt', 0),
('1qj', 0),
('5io', 0),
('46o', 0),
('4lt', 0),
('6ps', 0),
('a4e', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
