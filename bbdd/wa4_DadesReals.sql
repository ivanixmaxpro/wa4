-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 21-05-2017 a les 16:06:07
-- Versió del servidor: 10.1.21-MariaDB
-- Versió de PHP: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `wa4`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `albara_compra`
--

CREATE TABLE `albara_compra` (
  `id_albara` bigint(20) UNSIGNED NOT NULL,
  `id_proveidor` bigint(20) UNSIGNED NOT NULL,
  `id_empresa` bigint(20) UNSIGNED NOT NULL,
  `codi` char(50) NOT NULL,
  `observacions` text NOT NULL,
  `preu` double NOT NULL,
  `data` date NOT NULL,
  `localitat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Bolcant dades de la taula `albara_compra`
--

INSERT INTO `albara_compra` (`id_albara`, `id_proveidor`, `id_empresa`, `codi`, `observacions`, `preu`, `data`, `localitat`) VALUES
(1, 1, 1, 'AC-001', 'Urgent de cobrament', 380.05, '2017-05-21', 'Granollers'),
(2, 2, 1, 'AC-002', 'Enviament d\'aquí una setmana.', 475.35, '2017-05-21', 'Granollers'),
(3, 3, 1, 'AC-003', 'Tots els productes han de venir amb una bona refrigeració.', 1062.5, '2017-05-21', 'Granollers');

-- --------------------------------------------------------

--
-- Estructura de la taula `albara_venta`
--

CREATE TABLE `albara_venta` (
  `id_albara` bigint(20) UNSIGNED NOT NULL,
  `id_client` bigint(20) UNSIGNED NOT NULL,
  `id_empresa` bigint(20) UNSIGNED NOT NULL,
  `codi` char(50) NOT NULL,
  `observacions` text NOT NULL,
  `preu` double NOT NULL,
  `data` date NOT NULL,
  `localitat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Bolcant dades de la taula `albara_venta`
--

INSERT INTO `albara_venta` (`id_albara`, `id_client`, `id_empresa`, `codi`, `observacions`, `preu`, `data`, `localitat`) VALUES
(1, 1, 1, 'AV-001', 'Vindrà a recollir-ho aquí.', 909.45, '2017-05-21', 'Granollers'),
(3, 2, 1, 'AV-002', 'Enviament a l\'estranger, França.', 355.39, '2017-05-21', 'Granollers'),
(4, 4, 1, 'AV-003', 'S\'han de posar en un lloc sec i fresc.', 363.57, '2017-05-21', 'Granollers');

-- --------------------------------------------------------

--
-- Estructura de la taula `altres`
--

CREATE TABLE `altres` (
  `id_altres` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `unitats` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcant dades de la taula `altres`
--

INSERT INTO `altres` (`id_altres`, `id_producte`, `unitats`) VALUES
(1, 1, 30);

-- --------------------------------------------------------

--
-- Estructura de la taula `client`
--

CREATE TABLE `client` (
  `id_client` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL,
  `codi` char(20) NOT NULL,
  `informacio` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcant dades de la taula `client`
--

INSERT INTO `client` (`id_client`, `nom`, `codi`, `informacio`) VALUES
(1, 'Farmàcia Camunyas', 'C_FC_0012017', 'Vostè pot demanar-nos en qualsevol moment sense cita prèvia analítiques de glucosa, colesterol total i triglicèrids. Ho fem amb el sistema Roche diagnòstics i no trigarà més de 5 minuts en tenir els resultats. Si vol fer-se aquestes analítiques periòdicament i és vostè una \"persona gran\",\nconsulti  l´apartat \"El racó de l\'avi\".\nFem també una prova d´intoleràncies alimentàries*.\nLa durada d´aquesta prova  és d´aproximadament 20 minuts i només amb una goteta de sang podem determinar 49 aliments potencials de intolerància .Per fer-se aquesta prova ens ha de sol•licitar cita prèvia.'),
(2, 'Farma Molt', 'C_FM_0022017', 'Vostè pot demanar-nos en qualsevol moment sense cita prèvia analítiques de glucosa, colesterol total i triglicèrids. Ho fem amb el sistema Roche diagnòstics i no trigarà més de 5 minuts en tenir els resultats. Si vol fer-se aquestes analítiques periòdicament i és vostè una \"persona gran\",\nconsulti  l´apartat \"El racó de l\'avi\".\nFem també una prova d´intoleràncies alimentàries*.\nLa durada d´aquesta prova  és d´aproximadament 20 minuts i només amb una goteta de sang podem determinar 49 aliments potencials de intolerància .Per fer-se aquesta prova ens ha de sol•licitar cita prèvia.'),
(4, 'BIO Farma', 'C_BF_21052017', 'Vostè pot demanar-nos en qualsevol moment sense cita prèvia analítiques de glucosa, colesterol total i triglicèrids. Ho fem amb el sistema Roche diagnòstics i no trigarà més de 5 minuts en tenir els resultats. Si vol fer-se aquestes analítiques periòdicament i és vostè una \"persona gran\",\r\nconsulti  l´apartat \"El racó de l\'avi\".\r\nFem també una prova d´intoleràncies alimentàries*.\r\nLa durada d´aquesta prova  és d´aproximadament 20 minuts i només amb una goteta de sang podem determinar 49 aliments potencials de intolerància .Per fer-se aquesta prova ens ha de sol•licitar cita prèvia.');

-- --------------------------------------------------------

--
-- Estructura de la taula `control`
--

CREATE TABLE `control` (
  `id_control` bigint(20) UNSIGNED NOT NULL,
  `id_usuari` bigint(20) UNSIGNED NOT NULL,
  `fitxat` tinyint(1) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estructura de la taula `detalls_albara_compra`
--

CREATE TABLE `detalls_albara_compra` (
  `id_detalls_albara` bigint(20) UNSIGNED NOT NULL,
  `id_albara` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `quantitat` bigint(20) NOT NULL,
  `preu` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Bolcant dades de la taula `detalls_albara_compra`
--

INSERT INTO `detalls_albara_compra` (`id_detalls_albara`, `id_albara`, `id_producte`, `quantitat`, `preu`) VALUES
(1, 1, 1, 10, 154.9),
(2, 1, 2, 5, 81),
(3, 1, 3, 2, 28.8),
(4, 1, 4, 15, 115.35000000000001),
(5, 2, 1, 15, 232.35),
(6, 2, 2, 15, 243),
(7, 3, 3, 20, 288),
(8, 3, 1, 50, 774.5);

-- --------------------------------------------------------

--
-- Estructura de la taula `detalls_albara_venta`
--

CREATE TABLE `detalls_albara_venta` (
  `id_detalls_albara` bigint(20) UNSIGNED NOT NULL,
  `id_albara` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `quantitat` bigint(20) NOT NULL,
  `preu` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Bolcant dades de la taula `detalls_albara_venta`
--

INSERT INTO `detalls_albara_venta` (`id_detalls_albara`, `id_albara`, `id_producte`, `quantitat`, `preu`) VALUES
(1, 1, 1, 5, 77.45),
(2, 1, 2, 3, 48.599999999999994),
(3, 1, 3, 1, 14.4),
(4, 1, 4, 100, 769),
(5, 3, 1, 15, 232.35),
(6, 3, 4, 16, 123.04),
(7, 4, 2, 5, 81),
(8, 4, 3, 2, 28.8),
(9, 4, 4, 33, 253.77);

-- --------------------------------------------------------

--
-- Estructura de la taula `dia`
--

CREATE TABLE `dia` (
  `id_dia` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcant dades de la taula `dia`
--

INSERT INTO `dia` (`id_dia`, `nom`) VALUES
(1, 'Dilluns'),
(2, 'Dimarts'),
(3, 'Dimecres'),
(4, 'Dijous'),
(5, 'Divendres'),
(6, 'Dissabte'),
(7, 'Diumenge');

-- --------------------------------------------------------

--
-- Estructura de la taula `empleat`
--

CREATE TABLE `empleat` (
  `id_empleat` bigint(20) UNSIGNED NOT NULL,
  `id_empresa` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL,
  `cognom` char(50) NOT NULL,
  `dni` char(9) NOT NULL,
  `localitat` char(50) NOT NULL,
  `nomina` int(10) NOT NULL,
  `nss` bigint(12) NOT NULL,
  `imatge` char(100) DEFAULT NULL,
  `descripcio` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Bolcant dades de la taula `empleat`
--

INSERT INTO `empleat` (`id_empleat`, `id_empresa`, `nom`, `cognom`, `dni`, `localitat`, `nomina`, `nss`, `imatge`, `descripcio`) VALUES
(1, 1, 'Carlos', 'Ulises Herbert', '92604713C', 'Esplugues de Llobregat', 1000, 281234567840, '/wa4/Project/view/images/empleats/admin.jpg', 'Información del personal al día y completa.Indispensable que conozca de Legislación Laboral del país. Debe ser una persona con alto grado de liderazgo y alto grado de planeación y organización. Debe de tener habilidad para la resolución de conflictos y ser asertivo en sus decisiones. Debe saber identificar las fortalezas y debilidades. Debe ser una persona preventiva y correctiva. Debe manejar las herramientas tecnológicas.'),
(2, 1, 'Sergio', 'Sicilia Nogues', '14969073Y', 'Mollet del Vallès', 945, 148026500190, '/wa4/Project/view/images/empleats/visualitzador.jpg', 'Com evident experiència mostra, la debilitat de la nostra memòria, sotsmetent fàcilment a oblivió no solament los actes per longitud de temps envellits, mas encara los actes frescs de nostres dies, és estat doncs molt condecent, útil e expedient deduir en escrit les gestes e històries antigues dels homens forts e virtuosos, com sien espills molt clars, exemples e virtuosa doctrina de nostra vida, segons recita aquell gran orador Tul·li.'),
(3, 1, 'Nerea', 'Salgueiro Roig', '82687353F', 'Gualba', 1354, 396120465841, '/wa4/Project/view/images/empleats/E_magatzem.jpg', 'Com evident experiència mostra, la debilitat de la nostra memòria, sotsmetent fàcilment a oblivió no solament los actes per longitud de temps envellits, mas encara los actes frescs de nostres dies, és estat doncs molt condecent, útil e expedient deduir en escrit les gestes e històries antigues dels homens forts e virtuosos, com sien espills molt clars, exemples e virtuosa doctrina de nostra vida, segons recita aquell gran orador Tul·li.'),
(4, 1, 'Lorenzo', 'Ugarte Moreno', '98243523N', 'Sant Celoni', 2000, 381100922183, '/wa4/Project/view/images/empleats/E_personal.jpg', 'Com evident experiència mostra, la debilitat de la nostra memòria, sotsmetent fàcilment a oblivió no solament los actes per longitud de temps envellits, mas encara los actes frescs de nostres dies, és estat doncs molt condecent, útil e expedient deduir en escrit les gestes e històries antigues dels homens forts e virtuosos, com sien espills molt clars, exemples e virtuosa doctrina de nostra vida, segons recita aquell gran orador Tul·li.'),
(5, 1, 'Sara', 'Planas Robledo', '52455819H', 'Llinars del Vallès', 800, 215451200796, '/wa4/Project/view/images/empleats/E_carregat_personal.jpg', 'Com evident experiència mostra, la debilitat de la nostra memòria, sotsmetent fàcilment a oblivió no solament los actes per longitud de temps envellits, mas encara los actes frescs de nostres dies, és estat doncs molt condecent, útil e expedient deduir en escrit les gestes e històries antigues dels homens forts e virtuosos, com sien espills molt clars, exemples e virtuosa doctrina de nostra vida, segons recita aquell gran orador Tul·li.'),
(6, 1, 'Nuria', 'Bouzas Salas', '36974608S', 'Cardedeu', 1665, 276234699204, '/wa4/Project/view/images/empleats/E_carregat_magatzem.jpg', 'Com evident experiència mostra, la debilitat de la nostra memòria, sotsmetent fàcilment a oblivió no solament los actes per longitud de temps envellits, mas encara los actes frescs de nostres dies, és estat doncs molt condecent, útil e expedient deduir en escrit les gestes e històries antigues dels homens forts e virtuosos, com sien espills molt clars, exemples e virtuosa doctrina de nostra vida, segons recita aquell gran orador Tul·li.'),
(7, 1, 'Alfonso', 'Samper Tendero', '63722566P', 'Granollers', 1134, 80392899233, '/wa4/Project/view/images/empleats/gerent.jpg', 'Com evident experiència mostra, la debilitat de la nostra memòria, sotsmetent fàcilment a oblivió no solament los actes per longitud de temps envellits, mas encara los actes frescs de nostres dies, és estat doncs molt condecent, útil e expedient deduir en escrit les gestes e històries antigues dels homens forts e virtuosos, com sien espills molt clars, exemples e virtuosa doctrina de nostra vida, segons recita aquell gran orador Tul·li.');

-- --------------------------------------------------------

--
-- Estructura de la taula `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcant dades de la taula `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nom`) VALUES
(1, 'Farma Vallès S.L');

-- --------------------------------------------------------

--
-- Estructura de la taula `funcionalitat`
--

CREATE TABLE `funcionalitat` (
  `id_funcionalitat` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcant dades de la taula `funcionalitat`
--

INSERT INTO `funcionalitat` (`id_funcionalitat`, `nom`) VALUES
(1, 'empleat'),
(2, 'missatge'),
(3, 'producte'),
(4, 'proveidor'),
(5, 'client'),
(6, 'albaraVenta'),
(7, 'albaraCompra'),
(8, 'control'),
(9, 'permisos');

-- --------------------------------------------------------

--
-- Estructura de la taula `gas`
--

CREATE TABLE `gas` (
  `id_gas` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `capacitatMl` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcant dades de la taula `gas`
--

INSERT INTO `gas` (`id_gas`, `id_producte`, `capacitatMl`) VALUES
(1, 2, 50);

-- --------------------------------------------------------

--
-- Estructura de la taula `horari`
--

CREATE TABLE `horari` (
  `id_horari` bigint(20) UNSIGNED NOT NULL,
  `id_usuari` bigint(20) UNSIGNED NOT NULL,
  `id_dia` bigint(20) UNSIGNED NOT NULL,
  `horaInici` time DEFAULT NULL,
  `horaFinal` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Bolcant dades de la taula `horari`
--

INSERT INTO `horari` (`id_horari`, `id_usuari`, `id_dia`, `horaInici`, `horaFinal`) VALUES
(1, 1, 1, '09:00:00', '18:01:00'),
(2, 1, 2, '09:00:00', '17:00:00'),
(3, 1, 3, '09:00:00', '16:00:00'),
(4, 1, 4, '08:00:00', '18:00:00'),
(5, 1, 5, '10:00:00', '18:00:00'),
(6, 1, 6, '10:00:00', '18:00:00'),
(7, 2, 1, '09:00:00', '15:15:00'),
(8, 2, 2, '09:00:00', '15:15:00'),
(9, 2, 3, '09:00:00', '15:15:00'),
(10, 2, 4, '09:00:00', '15:15:00'),
(11, 2, 5, NULL, NULL),
(12, 2, 6, NULL, NULL),
(13, 2, 7, NULL, NULL),
(14, 3, 1, '08:00:00', '17:00:00'),
(15, 3, 2, '08:00:00', '17:00:00'),
(16, 3, 3, '08:00:00', '17:00:00'),
(17, 3, 4, '08:00:00', '17:00:00'),
(18, 3, 5, '08:00:00', '17:00:00'),
(19, 3, 6, '08:00:00', '17:00:00'),
(20, 3, 7, NULL, NULL),
(21, 4, 1, NULL, NULL),
(22, 4, 2, '14:00:00', '22:00:00'),
(23, 4, 3, '14:00:00', '22:00:00'),
(24, 4, 4, '14:00:00', '22:00:00'),
(25, 4, 5, '14:00:00', '22:00:00'),
(26, 4, 6, NULL, NULL),
(27, 4, 7, NULL, NULL),
(28, 5, 1, '07:00:00', '16:30:00'),
(29, 5, 2, '07:00:00', '16:30:00'),
(30, 5, 3, '09:30:00', '17:45:00'),
(31, 5, 4, '09:30:00', '17:45:00'),
(32, 5, 5, '09:30:00', '17:45:00'),
(33, 5, 6, NULL, NULL),
(34, 5, 7, NULL, NULL),
(35, 6, 1, NULL, NULL),
(36, 6, 2, NULL, NULL),
(37, 6, 3, NULL, NULL),
(38, 6, 4, NULL, NULL),
(39, 6, 5, '06:00:00', '14:00:00'),
(40, 6, 6, '06:00:00', '14:00:00'),
(41, 6, 7, '06:00:00', '14:00:00'),
(42, 7, 1, '10:00:00', '18:00:00'),
(43, 7, 2, '10:00:00', '18:00:00'),
(44, 7, 3, '10:00:00', '18:00:00'),
(45, 7, 4, '10:00:00', '18:00:00'),
(46, 7, 5, '10:00:00', '18:00:00'),
(47, 7, 6, NULL, NULL),
(48, 7, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de la taula `liquid`
--

CREATE TABLE `liquid` (
  `id_liquid` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `capacitatMl` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcant dades de la taula `liquid`
--

INSERT INTO `liquid` (`id_liquid`, `id_producte`, `capacitatMl`) VALUES
(1, 3, 250),
(2, 4, 1000);

-- --------------------------------------------------------

--
-- Estructura de la taula `missatge`
--

CREATE TABLE `missatge` (
  `id_missatge` bigint(20) UNSIGNED NOT NULL,
  `id_usuari` bigint(20) UNSIGNED NOT NULL,
  `llegit` tinyint(1) NOT NULL,
  `titol` char(100) NOT NULL,
  `data` datetime NOT NULL,
  `missatge` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estructura de la taula `permis`
--

CREATE TABLE `permis` (
  `id_permis` bigint(20) UNSIGNED NOT NULL,
  `id_usuari` bigint(20) UNSIGNED NOT NULL,
  `id_funcionalitat` bigint(20) UNSIGNED NOT NULL,
  `visualitzar` tinyint(1) NOT NULL,
  `crear` tinyint(1) NOT NULL,
  `editar` tinyint(1) NOT NULL,
  `eliminar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Bolcant dades de la taula `permis`
--

INSERT INTO `permis` (`id_permis`, `id_usuari`, `id_funcionalitat`, `visualitzar`, `crear`, `editar`, `eliminar`) VALUES
(1, 1, 1, 1, 1, 1, 1),
(2, 1, 2, 1, 1, 1, 1),
(3, 1, 3, 1, 1, 1, 1),
(4, 1, 4, 1, 1, 1, 1),
(5, 1, 5, 1, 1, 1, 1),
(6, 1, 6, 1, 1, 1, 1),
(7, 1, 7, 1, 1, 1, 1),
(8, 1, 8, 1, 1, 1, 1),
(9, 1, 9, 1, 1, 1, 1),
(10, 2, 1, 1, 0, 0, 0),
(11, 2, 2, 1, 0, 0, 0),
(12, 2, 3, 1, 0, 0, 0),
(13, 2, 4, 1, 0, 0, 0),
(14, 2, 5, 1, 0, 0, 0),
(15, 2, 6, 1, 0, 0, 0),
(16, 2, 7, 1, 0, 0, 0),
(17, 2, 8, 1, 0, 0, 0),
(18, 2, 9, 1, 0, 0, 0),
(19, 3, 1, 0, 0, 0, 0),
(20, 3, 2, 1, 0, 0, 0),
(21, 3, 3, 1, 0, 0, 0),
(22, 3, 4, 1, 0, 0, 0),
(23, 3, 5, 1, 0, 0, 0),
(24, 3, 6, 1, 0, 0, 0),
(25, 3, 7, 1, 0, 0, 0),
(26, 3, 8, 0, 0, 0, 0),
(27, 3, 9, 0, 0, 0, 0),
(28, 4, 1, 1, 0, 0, 0),
(29, 4, 2, 1, 0, 0, 0),
(30, 4, 3, 0, 0, 0, 0),
(31, 4, 4, 0, 0, 0, 0),
(32, 4, 5, 0, 0, 0, 0),
(33, 4, 6, 0, 0, 0, 0),
(34, 4, 7, 0, 0, 0, 0),
(35, 4, 8, 1, 0, 0, 0),
(36, 4, 9, 0, 0, 0, 0),
(37, 5, 1, 1, 1, 1, 1),
(38, 5, 2, 1, 0, 0, 0),
(39, 5, 3, 0, 0, 0, 0),
(40, 5, 4, 0, 0, 0, 0),
(41, 5, 5, 0, 0, 0, 0),
(42, 5, 6, 0, 0, 0, 0),
(43, 5, 7, 0, 0, 0, 0),
(44, 5, 8, 1, 1, 1, 1),
(45, 5, 9, 0, 0, 0, 0),
(46, 6, 1, 0, 0, 0, 0),
(47, 6, 2, 1, 0, 0, 0),
(48, 6, 3, 1, 1, 1, 1),
(49, 6, 4, 1, 1, 1, 1),
(50, 6, 5, 1, 1, 1, 1),
(51, 6, 6, 1, 1, 1, 1),
(52, 6, 7, 1, 1, 1, 1),
(53, 6, 8, 0, 0, 0, 0),
(54, 6, 9, 0, 0, 0, 0),
(55, 7, 1, 1, 1, 1, 1),
(56, 7, 2, 1, 1, 1, 1),
(57, 7, 3, 1, 1, 1, 1),
(58, 7, 4, 1, 1, 1, 1),
(59, 7, 5, 1, 1, 1, 1),
(60, 7, 6, 1, 1, 1, 1),
(61, 7, 7, 1, 1, 1, 1),
(62, 7, 8, 1, 1, 1, 1),
(63, 7, 9, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de la taula `producte`
--

CREATE TABLE `producte` (
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `id_ubicacio` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL,
  `marca` char(50) NOT NULL,
  `preuBase` double NOT NULL,
  `referencia` int(10) NOT NULL,
  `model` char(50) NOT NULL,
  `descripcio` text,
  `conservarFred` tinyint(1) NOT NULL,
  `imatge` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcant dades de la taula `producte`
--

INSERT INTO `producte` (`id_producte`, `id_ubicacio`, `nom`, `marca`, `preuBase`, `referencia`, `model`, `descripcio`, `conservarFred`, `imatge`) VALUES
(1, 1, 'Armolipid Plus 20comp', 'Armolipid', 15.49, 8732, 'Plus', 'Te ayuda a controlar los niveles de colesterol en sangre.', 0, '/wa4/Project/view/images/productes/ArmolipidPlus.jpg'),
(2, 2, 'Vichy Homme Hydra Mag C+ 50ml', 'Vichy', 16.2, 6654, 'Homme Hydra Mag C+', 'Tratamiento facial antifatiga que atenuará las bolsas y ojeras', 0, '/wa4/Project/view/images/productes/Vichy_Homme_Hydra_Mag.jpg'),
(3, 3, 'Nutergia Ergyepur 250ml', 'Nutergia', 14.4, 5432, 'Ergyepur', 'Apoya la protección y detoxificación hepática.', 1, '/wa4/Project/view/images/productes/Nutergia_Ergyepur_250ml.jpg'),
(4, 4, 'Fluocaril Bi-fluoré colutorio 500ml+500ml', 'Fluocaril', 7.69, 9785, 'Bi-fluoré colutorio', 'Enjuague rico en flúor para la protección dental.', 0, '/wa4/Project/view/images/productes/fluocaril-bi-fluore.jpg');

-- --------------------------------------------------------

--
-- Estructura de la taula `proveidor`
--

CREATE TABLE `proveidor` (
  `id_proveidor` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL,
  `codi` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcant dades de la taula `proveidor`
--

INSERT INTO `proveidor` (`id_proveidor`, `nom`, `codi`) VALUES
(1, 'Siliris GMBH', 'P_SG_0012017'),
(2, 'Equisalud Farma', 'P_EF_0022017'),
(3, 'Bio Life', 'P_BF_0032017');

-- --------------------------------------------------------

--
-- Estructura de la taula `semisolid`
--

CREATE TABLE `semisolid` (
  `id_semisolid` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `capacitatMg` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de la taula `solid`
--

CREATE TABLE `solid` (
  `id_solid` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `capacitatMg` double NOT NULL,
  `unitats` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de la taula `ubicacio`
--

CREATE TABLE `ubicacio` (
  `id_ubicacio` bigint(20) UNSIGNED NOT NULL,
  `quantitatTenda` bigint(10) NOT NULL,
  `quantitatStock` bigint(10) NOT NULL,
  `situacio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Bolcant dades de la taula `ubicacio`
--

INSERT INTO `ubicacio` (`id_ubicacio`, `quantitatTenda`, `quantitatStock`, `situacio`) VALUES
(1, 0, 65, 'Es troba a la 4rt estanteria del passadís número 3, del magatzem. \r\n\r\nEn tenda està al passadís 3B, en el primer prestatge.'),
(2, 14, 87, 'Es troba a la 4rt i 5è estanteria del passadís número 5, del magatzem. \r\n\r\nEn tenda, està al passadís 2-1B, en el primer i segon prestatge.'),
(3, 3, 33, 'Es troba a la 4rt estanteria, a la part esquerra del passadís número 2/C, del magatzem. \r\n\r\nEn tenda està al passadís 7, a la primera estanteria, prestatge número 5.'),
(4, 0, 9, 'Es troba a la 7è estanteria del passadís número 23, zona baixa, del magatzem. \r\n\r\nEn tenda està al passadís 10, en el primer prestatge de la dreta.');

-- --------------------------------------------------------

--
-- Estructura de la taula `usuari`
--

CREATE TABLE `usuari` (
  `id_usuari` bigint(20) UNSIGNED NOT NULL,
  `id_empleat` bigint(20) UNSIGNED NOT NULL,
  `usuari` char(20) NOT NULL,
  `contrasenya` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Bolcant dades de la taula `usuari`
--

INSERT INTO `usuari` (`id_usuari`, `id_empleat`, `usuari`, `contrasenya`) VALUES
(1, 1, 'carlos', '$2y$10$VHSAnJ.SsbdnwG/WC/1SXunlUosN3FGv.Y8/nd8iUrZ.IQYesGUFy'),
(2, 2, 'sergio', '$2y$10$ha7/zoLVdkG24EmDku1wMeyhzoeXFYBXW6RoKhbbdPPr9amYMA7Zy'),
(3, 3, 'nerea', '$2y$10$u9U.vyGILHLkrsSBspSQouRsQqCpHLP/NiZm7OVZBV0j5ULhgd6Rm'),
(4, 4, 'lorenzo', '$2y$10$AcYt/z2pCIta/mCtWYff4eG8eRIbaUn1g50/uuI0Vozuge2YnzX4i'),
(5, 5, 'sara', '$2y$10$5UvzVzXCBlZ6IqsIFXe4ve/R/KReshe7fMrnmfb11GpSlfQRC52Ni'),
(6, 6, 'nuria', '$2y$10$DGG6HKtnEU53.QQIyqzEy.I4sPQR1oCt62zY6xDwiNIUTRjwTL3Ha'),
(7, 7, 'alfonso', '$2y$10$tZiMNCf1wffWk0DOdkfYZ.6as9KjInMTQCVXcoyxKUVY6szqo.oN2');

--
-- Indexos per taules bolcades
--

--
-- Index de la taula `albara_compra`
--
ALTER TABLE `albara_compra`
  ADD PRIMARY KEY (`id_albara`),
  ADD KEY `id_client` (`id_proveidor`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `id_proveidor` (`id_proveidor`),
  ADD KEY `id_empresa_2` (`id_empresa`);

--
-- Index de la taula `albara_venta`
--
ALTER TABLE `albara_venta`
  ADD PRIMARY KEY (`id_albara`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Index de la taula `altres`
--
ALTER TABLE `altres`
  ADD PRIMARY KEY (`id_altres`),
  ADD UNIQUE KEY `id_producte` (`id_producte`);

--
-- Index de la taula `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index de la taula `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`id_control`),
  ADD KEY `id_usuari` (`id_usuari`);

--
-- Index de la taula `detalls_albara_compra`
--
ALTER TABLE `detalls_albara_compra`
  ADD PRIMARY KEY (`id_detalls_albara`),
  ADD KEY `id_albara` (`id_albara`),
  ADD KEY `id_producte` (`id_producte`);

--
-- Index de la taula `detalls_albara_venta`
--
ALTER TABLE `detalls_albara_venta`
  ADD PRIMARY KEY (`id_detalls_albara`),
  ADD KEY `id_albara` (`id_albara`),
  ADD KEY `id_producte` (`id_producte`);

--
-- Index de la taula `dia`
--
ALTER TABLE `dia`
  ADD PRIMARY KEY (`id_dia`);

--
-- Index de la taula `empleat`
--
ALTER TABLE `empleat`
  ADD PRIMARY KEY (`id_empleat`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Index de la taula `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Index de la taula `funcionalitat`
--
ALTER TABLE `funcionalitat`
  ADD PRIMARY KEY (`id_funcionalitat`);

--
-- Index de la taula `gas`
--
ALTER TABLE `gas`
  ADD PRIMARY KEY (`id_gas`),
  ADD UNIQUE KEY `id_producte` (`id_producte`);

--
-- Index de la taula `horari`
--
ALTER TABLE `horari`
  ADD PRIMARY KEY (`id_horari`),
  ADD KEY `id_usuari` (`id_usuari`),
  ADD KEY `id_dia` (`id_dia`);

--
-- Index de la taula `liquid`
--
ALTER TABLE `liquid`
  ADD PRIMARY KEY (`id_liquid`),
  ADD UNIQUE KEY `id_producte` (`id_producte`);

--
-- Index de la taula `missatge`
--
ALTER TABLE `missatge`
  ADD PRIMARY KEY (`id_missatge`),
  ADD KEY `id_usuari` (`id_usuari`);

--
-- Index de la taula `permis`
--
ALTER TABLE `permis`
  ADD PRIMARY KEY (`id_permis`),
  ADD KEY `id_usuari` (`id_usuari`),
  ADD KEY `id_dia` (`id_funcionalitat`);

--
-- Index de la taula `producte`
--
ALTER TABLE `producte`
  ADD PRIMARY KEY (`id_producte`),
  ADD UNIQUE KEY `id_ubicacio` (`id_ubicacio`);

--
-- Index de la taula `proveidor`
--
ALTER TABLE `proveidor`
  ADD PRIMARY KEY (`id_proveidor`);

--
-- Index de la taula `semisolid`
--
ALTER TABLE `semisolid`
  ADD PRIMARY KEY (`id_semisolid`),
  ADD UNIQUE KEY `id_producte` (`id_producte`);

--
-- Index de la taula `solid`
--
ALTER TABLE `solid`
  ADD PRIMARY KEY (`id_solid`),
  ADD UNIQUE KEY `id_producte` (`id_producte`);

--
-- Index de la taula `ubicacio`
--
ALTER TABLE `ubicacio`
  ADD PRIMARY KEY (`id_ubicacio`);

--
-- Index de la taula `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`id_usuari`),
  ADD UNIQUE KEY `id_empleat` (`id_empleat`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `albara_compra`
--
ALTER TABLE `albara_compra`
  MODIFY `id_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT per la taula `albara_venta`
--
ALTER TABLE `albara_venta`
  MODIFY `id_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT per la taula `altres`
--
ALTER TABLE `altres`
  MODIFY `id_altres` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la taula `client`
--
ALTER TABLE `client`
  MODIFY `id_client` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT per la taula `control`
--
ALTER TABLE `control`
  MODIFY `id_control` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la taula `detalls_albara_compra`
--
ALTER TABLE `detalls_albara_compra`
  MODIFY `id_detalls_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT per la taula `detalls_albara_venta`
--
ALTER TABLE `detalls_albara_venta`
  MODIFY `id_detalls_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT per la taula `dia`
--
ALTER TABLE `dia`
  MODIFY `id_dia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT per la taula `empleat`
--
ALTER TABLE `empleat`
  MODIFY `id_empleat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT per la taula `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la taula `funcionalitat`
--
ALTER TABLE `funcionalitat`
  MODIFY `id_funcionalitat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT per la taula `gas`
--
ALTER TABLE `gas`
  MODIFY `id_gas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la taula `horari`
--
ALTER TABLE `horari`
  MODIFY `id_horari` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT per la taula `liquid`
--
ALTER TABLE `liquid`
  MODIFY `id_liquid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la taula `missatge`
--
ALTER TABLE `missatge`
  MODIFY `id_missatge` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la taula `permis`
--
ALTER TABLE `permis`
  MODIFY `id_permis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT per la taula `producte`
--
ALTER TABLE `producte`
  MODIFY `id_producte` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT per la taula `proveidor`
--
ALTER TABLE `proveidor`
  MODIFY `id_proveidor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT per la taula `semisolid`
--
ALTER TABLE `semisolid`
  MODIFY `id_semisolid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la taula `solid`
--
ALTER TABLE `solid`
  MODIFY `id_solid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la taula `ubicacio`
--
ALTER TABLE `ubicacio`
  MODIFY `id_ubicacio` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT per la taula `usuari`
--
ALTER TABLE `usuari`
  MODIFY `id_usuari` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restriccions per taules bolcades
--

--
-- Restriccions per la taula `albara_compra`
--
ALTER TABLE `albara_compra`
  ADD CONSTRAINT `empresa - albara compra ` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`),
  ADD CONSTRAINT `proveidor - albara compra` FOREIGN KEY (`id_proveidor`) REFERENCES `proveidor` (`id_proveidor`);

--
-- Restriccions per la taula `albara_venta`
--
ALTER TABLE `albara_venta`
  ADD CONSTRAINT `client - albara venta` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `empresa - albara venta` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Restriccions per la taula `altres`
--
ALTER TABLE `altres`
  ADD CONSTRAINT `altres_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriccions per la taula `control`
--
ALTER TABLE `control`
  ADD CONSTRAINT `control_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON UPDATE CASCADE;

--
-- Restriccions per la taula `detalls_albara_compra`
--
ALTER TABLE `detalls_albara_compra`
  ADD CONSTRAINT `detalls_albara_compra_ibfk_1` FOREIGN KEY (`id_albara`) REFERENCES `albara_compra` (`id_albara`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalls_albara_compra_ibfk_2` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`);

--
-- Restriccions per la taula `detalls_albara_venta`
--
ALTER TABLE `detalls_albara_venta`
  ADD CONSTRAINT `detalls_albara_venta_ibfk_1` FOREIGN KEY (`id_albara`) REFERENCES `albara_venta` (`id_albara`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalls_albara_venta_ibfk_2` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`);

--
-- Restriccions per la taula `empleat`
--
ALTER TABLE `empleat`
  ADD CONSTRAINT `empleat_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Restriccions per la taula `gas`
--
ALTER TABLE `gas`
  ADD CONSTRAINT `gas_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriccions per la taula `horari`
--
ALTER TABLE `horari`
  ADD CONSTRAINT `horari_ibfk_2` FOREIGN KEY (`id_dia`) REFERENCES `dia` (`id_dia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horari_ibfk_3` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON UPDATE CASCADE;

--
-- Restriccions per la taula `liquid`
--
ALTER TABLE `liquid`
  ADD CONSTRAINT `liquid_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriccions per la taula `missatge`
--
ALTER TABLE `missatge`
  ADD CONSTRAINT `missatge_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON UPDATE CASCADE;

--
-- Restriccions per la taula `permis`
--
ALTER TABLE `permis`
  ADD CONSTRAINT `permis_ibfk_2` FOREIGN KEY (`id_funcionalitat`) REFERENCES `funcionalitat` (`id_funcionalitat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permis_ibfk_3` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON UPDATE CASCADE;

--
-- Restriccions per la taula `producte`
--
ALTER TABLE `producte`
  ADD CONSTRAINT `producte_ibfk_1` FOREIGN KEY (`id_ubicacio`) REFERENCES `ubicacio` (`id_ubicacio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriccions per la taula `semisolid`
--
ALTER TABLE `semisolid`
  ADD CONSTRAINT `semisolid_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriccions per la taula `solid`
--
ALTER TABLE `solid`
  ADD CONSTRAINT `solid_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriccions per la taula `usuari`
--
ALTER TABLE `usuari`
  ADD CONSTRAINT `usuari_ibfk_1` FOREIGN KEY (`id_empleat`) REFERENCES `empleat` (`id_empleat`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
