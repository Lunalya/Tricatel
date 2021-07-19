-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 19 juil. 2021 à 07:11
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_recettes`
--

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `nom_plat` varchar(255) NOT NULL,
  `type_plat` varchar(255) NOT NULL,
  `regime` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `descrip` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id`, `photo`, `nom_plat`, `type_plat`, `regime`, `pays`, `descrip`) VALUES
(4, 'assets/img/bebinca.jpg', 'Bebinca', 'Dessert', 'Végétarien', 'Indien', 'Dessert à base de noix de coco et de beurre clarifié appelé « ghee » venue tout droit de Goa'),
(5, '  assets/img/bibimbap.jpg', '  Bibimbap', '  Plat', '  Aucun', '  Coréen', ' L\'un des plats les plus emblématiques de la cuisine coréenne est sans conteste le bibimbap.                     Il s\'agit d\'un plat complet composé de riz mélangé avec des légumes, de la viande,                     un œuf et de la pâte de piment rouge.  Avant de manger, hop, on mélange. Pour rester dans les règles de l\'art, il faudrait aussi servir le bibimbap dans un bol en pierre ou en terre préalablement chauffé.  Cela permet la formation d\'une couche de riz croustillant au fond du plat.'),
(6, '  assets/img/soe_galb.jpg', '  Soe-Galbijjim', '  Plat', '  Aucun', '  Coréen', 'Plat composé de côtes de bœuf braisées avec des radis blancs ou des champignons parfumés,\r\n                        des légumes et un assaisonnement. \r\n                        C’est un plat coréen typique, très apprécié de tous. '),
(7, '  assets/img/croziflette.jpg', '  Croziflette', '  Plat', '  Aucun', ' Français', 'Inspirée de la tartiflette, la croziflette est un gratin de pâtes onctueux garni de crème et de reblochon.'),
(8, '  assets/img/coqauvin.jpg', '  Coq au vin', '  Plat', '  Aucun', '  Français', 'Le coq au vin, c’est magique : d’abord parce que c’est le symbole vivant de la France, le coq. Un animal robuste et charpenté, mais qui révèle\r\n                     toute sa délicatesse lorsqu’on le fait mijoter dans l’autre grand symbole hexagonal : le vin. Un bon vin rouge, un vin de Bourgogne naturellement,\r\n                      qui va révéler toutes ses saveurs et sa suavité après une longue cuisson. \r\n                    Au final, on obtient un joli ballet dansant dans une sauce onctueuse, goûteuse, chaleureuse.'),
(9, '  assets/img/aloo.jpg', ' Aloo-tikki &amp; Raïta', '  Entrée', '  Végan', '  Indien', ' Beignets crousti-moelleux à base de pomme de terre, \r\n                            relevés de plein d’épices à déguster avec du yaourt au herbes. \r\n                            Essayez pour l’apéro ou en entrée, vous serez conquis'),
(10, '  assets/img/sigemchi.jpg', '  Sigeumchi namul', '  Entrée', ' Végan', ' Coréen', 'Le repas à la coréenne se caractérise par une grande variété de légumes assaisonnés servis avec les mets. \r\n                        On les appelle “Namul”. \r\n                    Cette version de Namul se prépare avec des épinards juste blanchis et mélangés à une sauce très goûteuse et des graines de\r\n                    sésame pour le croustillant. \r\n'),
(11, '  assets/img/gambas.jpg', '  Curry de gambas à la noix de coco', '  Plat', '  Aucun', '  Indien', 'Parfumé, léger, rapide avec une sauce très intéressante\r\n                         (avec du yaourt comme dans le butter chicken ou le poulet tikka) : un curry de gambas à la noix de coco.\r\n                         Délicieux, frais, légèrement acidulé et doux à la fois grâce aux gambas,\r\n                          il est très apprécié lors d’un repas minute mais aussi un peu raffiné et plein d’évasion.'),
(19, 'assets/img/tatin.jpg', 'Tarte tatin', 'Dessert', 'Végétarien', 'Français', 'La légende raconte que la tarte tatin a été inventée par les sœurs Tatin à la fin du XIXè siècle.\r\n                             Les deux sœurs tenaient un restaurant souvent fréquenté par des chasseurs.\r\n                            Un jour, Stéphanie Tatin, en préparant une tarte aux pommes, oublia de mettre la pâte au fond du moule et la mit à cuire avec les pommes uniquement.\r\n                            Se rendant compte de son erreur, elle ajouta ensuite la pâte par dessus. Tadam ! La tarte Tatin était née.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
