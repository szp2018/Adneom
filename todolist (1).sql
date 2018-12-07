-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 07 déc. 2018 à 10:56
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `todolist`
--

-- --------------------------------------------------------

--
-- Structure de la table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `episode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `saison` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `todo`
--

INSERT INTO `todo` (`id`, `name`, `episode`, `saison`, `link`) VALUES
(1, 'L\'Hymne national (The National Anthem)', 'L\'Hymne national (The National Anthem)', 'Prémiere saison (2011)', 'https://openload.co/embed/fSpoLIMezcc/Black_Mirror_-_S01E01_-_FRENCH_SDTV_X264-Spikie.mp4/'),
(2, '15 millions de mérites (15 Million Merits)', 'episode 2', 'Prémiere saison (2011)', 'https://openload.co/embed/1Jw7-Ry-13U/Black_Mirror_-_S01E02_-_FRENCH_SDTV_-Spikie.mp4/'),
(3, 'Retour sur image (The Entire History of You)', 'episode 3', 'Prémiere saison (2011)', 'https://openload.co/embed/h_VykahgBQw/Black_Mirror_-_S01E03_FINAL_-_FRENCH_SDTV_-Spikie.avi/'),
(4, 'Bientot de retour (Be Right Back', '', 'Deuxieme saison (2013)', 'https://openload.co/embed/qJZbwuPY2gg/Black.Mirror.S02E01.FRENCH.DVDRip.XviD-AUTHORiTY.avi/'),
(5, 'La Chasse (White Bear)', '', 'Deuxieme saison (2013)', 'https://openload.co/embed/5IPYHHkzeW4/Black.Mirror.S02E02.FRENCH.DVDRip.XviD-AUTHORiTY.avi/'),
(6, 'Le Show de Waldo (The Waldo Moment)', '', 'Deuxieme saison (2013)', 'https://openload.co/embed/qk3IwNO9_vU/Black.Mirror.S02E03.FiNAL.FRENCH.DVDRip.XviD-AUTHORiTY.avi/'),
(7, 'Blanc comme neige (White Christmas)', '', 'Deuxieme saison (2013)', 'https://openload.co/embed/5IPYHHkzeW4/Black.Mirror.S02E02.FRENCH.DVDRip.XviD-AUTHORiTY.avi/'),
(8, 'Playtest (Playtest)', '', 'Troisiéme saison (2016)', 'https://openload.co/embed/-E2MLrnEmmw/Black.Mirror.S03E01.FRENCH.WEBRip.XviD-ZT.avi/'),
(9, 'Tais-toi et danse (Shut Up and Dance)', '', 'Troisiéme saison (2016)', 'https://openload.co/embed/ttodY7heTKY/Black.Mirror.S03E02.FRENCH.WEBRip.XviD-ZT.avi/'),
(10, 'San Junipero (San Junipero)', '', 'Troisiéme saison (2016)', 'https://openload.co/embed/FstoQ71HFhY/Black.Mirror.S03E03.FRENCH.WEBRip.XviD-ZT.avi/'),
(11, 'USS Callister (USS Callister)', '', 'Quatriéme saison (2017)', 'https://openload.co/embed/WpN-PyILIYU/Black.Mirror.S04E01.FRENCH.WEB-DL.avi/'),
(12, 'Archange (Arkangel)', '', 'Quatriéme saison (2017)', 'https://openload.co/embed/szjwP7g7KQg/Black.Mirror.S04E02.VOSTFR.WEBRip.avi/'),
(13, 'Crocodile (Crocodile)', '', 'Quatriéme saison (2017)', 'https://openload.co/embed/nTmNH-xuLC8'),
(14, 'Hang the DJ (Hang the DJ)', '', 'Quatriéme saison (2017)', 'https://openload.co/embed/4GabwcSNfsY'),
(15, 'Metalhead (Metalhead)', '', 'Quatriéme saison (2017)', 'https://openload.co/embed/nFOMfXSW0SQ'),
(16, 'Black Museum (Black Museum)', '', 'Quatriéme saison (2017)', 'https://openload.co/embed/bw1ZyHICSqU/Black.Mirror.S04E06.FINAL.FRENCH.WEB-DL.avi/');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
