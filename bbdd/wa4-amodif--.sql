-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2017 at 04:46 
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wa4`
--

-- --------------------------------------------------------

--
-- Table structure for table `albara_compra`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `albara_compra`
--

INSERT INTO `albara_compra` (`id_albara`, `id_proveidor`, `id_empresa`, `codi`, `observacions`, `preu`, `data`, `localitat`) VALUES
(1, 2, 1, '1', 'Pal ivan no', 338.6, '2016-06-06', 'Llinors del vullus'),
(2, 1, 1, '32123', 'JIJI', 161983.8, '2001-01-02', 'adssad');

-- --------------------------------------------------------

--
-- Table structure for table `albara_venta`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `albara_venta`
--

INSERT INTO `albara_venta` (`id_albara`, `id_client`, `id_empresa`, `codi`, `observacions`, `preu`, `data`, `localitat`) VALUES
(12, 1, 1, '1', '1', 441, '2001-01-01', '1'),
(13, 1, 1, '1', '1', 80.28999999999999, '2017-01-01', '1'),
(14, 1, 1, '1', 'Pal ivan', 16.2, '2001-01-01', 'SANS PAU'),
(15, 1, 1, '1', '1', 23.07, '2001-01-07', '1');

-- --------------------------------------------------------

--
-- Table structure for table `altres`
--

CREATE TABLE `altres` (
  `id_altres` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `unitats` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `altres`
--

INSERT INTO `altres` (`id_altres`, `id_producte`, `unitats`) VALUES
(1, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL,
  `codi` char(20) NOT NULL,
  `informacio` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `codi`, `informacio`) VALUES
(1, 'Farmàcia Camunyas', 'C_FC_0012017', 'Vostè pot demanar-nos en qualsevol moment sense cita prèvia analítiques de glucosa, colesterol total i triglicèrids. Ho fem amb el sistema Roche diagnòstics i no trigarà més de 5 minuts en tenir els resultats. Si vol fer-se aquestes analítiques periòdicament i és vostè una "persona gran",\nconsulti  l´apartat "El racó de l''avi".\nFem també una prova d´intoleràncies alimentàries*.\nLa durada d´aquesta prova  és d´aproximadament 20 minuts i només amb una goteta de sang podem determinar 49 aliments potencials de intolerància .Per fer-se aquesta prova ens ha de sol•licitar cita prèvia.'),
(2, 'Farma Molt', 'C_FM_0022017', 'Vostè pot demanar-nos en qualsevol moment sense cita prèvia analítiques de glucosa, colesterol total i triglicèrids. Ho fem amb el sistema Roche diagnòstics i no trigarà més de 5 minuts en tenir els resultats. Si vol fer-se aquestes analítiques periòdicament i és vostè una "persona gran",\r\nconsulti  l´apartat "El racó de l''avi".\r\nFem també una prova d´intoleràncies alimentàries*.\r\nLa durada d´aquesta prova  és d´aproximadament 20 minuts i només amb una goteta de sang podem determinar 49 aliments potencials de intolerància .Per fer-se aquesta prova ens ha de sol•licitar cita prèvia.'),
(3, 'Bon Hàbit', 'C_BH_0032017', 'Vostè pot demanar-nos en qualsevol moment sense cita prèvia analítiques de glucosa, colesterol total i triglicèrids. Ho fem amb el sistema Roche diagnòstics i no trigarà més de 5 minuts en tenir els resultats. Si vol fer-se aquestes analítiques periòdicament i és vostè una "persona gran",\r\nconsulti  l´apartat "El racó de l''avi".\r\nFem també una prova d´intoleràncies alimentàries*.\r\nLa durada d´aquesta prova  és d´aproximadament 20 minuts i només amb una goteta de sang podem determinar 49 aliments potencials de intolerància .Per fer-se aquesta prova ens ha de sol•licitar cita prèvia.');

-- --------------------------------------------------------

--
-- Table structure for table `control`
--

CREATE TABLE `control` (
  `id_control` bigint(20) UNSIGNED NOT NULL,
  `id_usuari` bigint(20) UNSIGNED NOT NULL,
  `fitxat` tinyint(1) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `control`
--

INSERT INTO `control` (`id_control`, `id_usuari`, `fitxat`, `data`) VALUES
(1, 1, 1, '2017-05-15 19:21:23'),
(2, 1, 0, '2017-05-15 19:21:23'),
(3, 1, 1, '2017-05-15 19:21:24'),
(4, 1, 1, '2017-05-15 19:21:24'),
(5, 1, 0, '2017-05-15 19:21:24'),
(6, 1, 1, '2017-05-15 19:21:24'),
(7, 1, 0, '2017-05-15 19:21:25'),
(8, 1, 1, '2017-05-15 19:21:25'),
(9, 1, 0, '2017-05-15 19:21:25'),
(10, 1, 1, '2017-05-15 19:21:25'),
(11, 1, 0, '2017-05-15 19:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `detalls_albara_compra`
--

CREATE TABLE `detalls_albara_compra` (
  `id_detalls_albara` bigint(20) UNSIGNED NOT NULL,
  `id_albara` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `quantitat` bigint(20) NOT NULL,
  `preu` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detalls_albara_compra`
--

INSERT INTO `detalls_albara_compra` (`id_detalls_albara`, `id_albara`, `id_producte`, `quantitat`, `preu`) VALUES
(1, 1, 3, 2, 28.8),
(2, 1, 1, 20, 309.8),
(3, 2, 2, 9999, 161983.8);

-- --------------------------------------------------------

--
-- Table structure for table `detalls_albara_venta`
--

CREATE TABLE `detalls_albara_venta` (
  `id_detalls_albara` bigint(20) UNSIGNED NOT NULL,
  `id_albara` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `quantitat` bigint(20) NOT NULL,
  `preu` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detalls_albara_venta`
--

INSERT INTO `detalls_albara_venta` (`id_detalls_albara`, `id_albara`, `id_producte`, `quantitat`, `preu`) VALUES
(1, 12, 1, 23, 345),
(2, 12, 2, 6, 96),
(3, 13, 1, 1, 15.49),
(4, 13, 2, 4, 64.8),
(5, 14, 2, 1, 16.2),
(8, 15, 4, 3, 23.07);

-- --------------------------------------------------------

--
-- Table structure for table `dia`
--

CREATE TABLE `dia` (
  `id_dia` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dia`
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
-- Table structure for table `empleat`
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
-- Dumping data for table `empleat`
--

INSERT INTO `empleat` (`id_empleat`, `id_empresa`, `nom`, `cognom`, `dni`, `localitat`, `nomina`, `nss`, `imatge`, `descripcio`) VALUES
(1, 1, 'admin', 'Ulises Herberto', '92604713C', 'Esplugues de Llobregat', 1000, 281234567840, NULL, 'Información del personal al día y completa.Indispensable que conozca de Legislación Laboral del país. Debe ser una persona con alto grado de liderazgo y alto grado de planeación y organización. Debe de tener habilidad para la resolución de conflictos y ser asertivo en sus decisiones. Debe saber identificar las fortalezas y debilidades. Debe ser una persona preventiva y correctiva. Debe manejar las herramientas tecnológicas.');


-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nom`) VALUES
(1, 'Farma Vallès S.L');

-- --------------------------------------------------------

--
-- Table structure for table `funcionalitat`
--

CREATE TABLE `funcionalitat` (
  `id_funcionalitat` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `funcionalitat`
--

INSERT INTO `funcionalitat` (`id_funcionalitat`, `nom`) VALUES
(1, 'empleat'),
(2, 'missatge'),
(3, 'producte'),
(4, 'proveidor'),
(5, 'client'),
(6, 'albaraVenta'),
(7, 'albaraCompra');

-- --------------------------------------------------------

--
-- Table structure for table `gas`
--

CREATE TABLE `gas` (
  `id_gas` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `capacitatMl` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gas`
--

INSERT INTO `gas` (`id_gas`, `id_producte`, `capacitatMl`) VALUES
(1, 2, 50);

-- --------------------------------------------------------

--
-- Table structure for table `horari`
--

CREATE TABLE `horari` (
  `id_horari` bigint(20) UNSIGNED NOT NULL,
  `id_usuari` bigint(20) UNSIGNED NOT NULL,
  `id_dia` bigint(20) UNSIGNED NOT NULL,
  `horaInici` time DEFAULT NULL,
  `horaFinal` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `horari`
--

INSERT INTO `horari` (`id_horari`, `id_usuari`, `id_dia`, `horaInici`, `horaFinal`) VALUES
(1, 1, 1, '09:00:00', '18:01:00'),
(2, 1, 2, '09:00:00', '17:00:00'),
(3, 1, 3, '09:00:00', '16:00:00'),
(4, 1, 4, '08:00:00', '18:00:00'),
(5, 1, 5, '10:00:00', '18:00:00'),
(6, 1, 6, '10:00:00', '18:00:00'),
(7, 1, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `liquid`
--

CREATE TABLE `liquid` (
  `id_liquid` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `capacitatMl` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `liquid`
--

INSERT INTO `liquid` (`id_liquid`, `id_producte`, `capacitatMl`) VALUES
(1, 3, 250),
(2, 4, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `missatge`
--

CREATE TABLE `missatge` (
  `id_missatge` bigint(20) UNSIGNED NOT NULL,
  `id_usuari` bigint(20) UNSIGNED NOT NULL,
  `llegit` tinyint(1) NOT NULL,
  `titol` char(100) NOT NULL,
  `data` datetime NOT NULL,
  `missatge` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `missatge`
--

INSERT INTO `missatge` (`id_missatge`, `id_usuari`, `llegit`, `titol`, `data`, `missatge`) VALUES
(1, 1, 1, 'Recordatori Estoc', '2017-05-08 08:10:00', 'Hola, bon dia.\r\n\r\nEnrecordat que el dia 8 de maig, arribarà un camió per descarregar.\r\n\r\nGràcies.');

-- --------------------------------------------------------

--
-- Table structure for table `permis`
--

CREATE TABLE `permis` (
  `id_permis` bigint(20) UNSIGNED NOT NULL,
  `id_usuari` bigint(20) UNSIGNED NOT NULL,
  `id_funcionalitat` bigint(20) UNSIGNED NOT NULL,
  `visualitzar` tinyint(1) NOT NULL,
  `crear` tinyint(1) NOT NULL,
  `editar` tinyint(1) NOT NULL,
  `eliminar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permis`
--

INSERT INTO `permis` (`id_permis`, `id_usuari`, `id_funcionalitat`, `visualitzar`, `crear`, `editar`, `eliminar`) VALUES
(1, 1, 1, 1, 1, 1, 1),
(2, 1, 2, 1, 1, 1, 1),
(3, 1, 3, 1, 1, 0, 1),
(4, 1, 4, 1, 1, 1, 1),
(5, 1, 5, 0, 0, 0, 0),
(6, 1, 6, 1, 1, 1, 1),
(7, 1, 7, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `producte`
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
-- Dumping data for table `producte`
--

INSERT INTO `producte` (`id_producte`, `id_ubicacio`, `nom`, `marca`, `preuBase`, `referencia`, `model`, `descripcio`, `conservarFred`, `imatge`) VALUES
(1, 1, 'Armolipid Plus 20comp', 'Armolipid', 15.49, 8732, 'Plus', 'Te ayuda a controlar los niveles de colesterol en sangre.', 0, NULL),
(2, 2, 'Vichy Homme Hydra Mag C+ 50ml', 'Vichy', 16.2, 6654, 'Homme Hydra Mag C+', 'Tratamiento facial antifatiga que atenuará las bolsas y ojeras', 0, NULL),
(3, 3, 'Nutergia Ergyepur 250ml', 'Nutergia', 14.4, 5432, 'Ergyepur', 'Apoya la protección y detoxificación hepática.', 1, NULL),
(4, 4, 'Fluocaril Bi-fluoré colutorio 500ml+500ml', 'Fluocaril', 7.69, 9785, 'Bi-fluoré colutorio', 'Enjuague rico en flúor para la protección dental.', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `proveidor`
--

CREATE TABLE `proveidor` (
  `id_proveidor` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL,
  `codi` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proveidor`
--

INSERT INTO `proveidor` (`id_proveidor`, `nom`, `codi`) VALUES
(1, 'Siliris GMBH', 'P_SG_0012017'),
(2, 'Equisalud Farma', 'P_EF_0022017'),
(3, 'Bio Life', 'P_BF_0032017');

-- --------------------------------------------------------

--
-- Table structure for table `semisolid`
--

CREATE TABLE `semisolid` (
  `id_semisolid` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `capacitatMg` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `solid`
--

CREATE TABLE `solid` (
  `id_solid` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `capacitatMg` double NOT NULL,
  `unitats` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ubicacio`
--

CREATE TABLE `ubicacio` (
  `id_ubicacio` bigint(20) UNSIGNED NOT NULL,
  `quantitatTenda` bigint(10) NOT NULL,
  `quantitatStock` bigint(10) NOT NULL,
  `situacio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ubicacio`
--

INSERT INTO `ubicacio` (`id_ubicacio`, `quantitatTenda`, `quantitatStock`, `situacio`) VALUES
(1, 0, 20, 'Es troba a la 4rt estanteria del passadís número 3, del magatzem. \r\n\r\nEn tenda està al passadís 3B, en el primer prestatge.'),
(2, 0, 10101, 'Es troba a la 4rt i 5è estanteria del passadís número 5, del magatzem. \r\n\r\nEn tenda, està al passadís 2-1B, en el primer i segon prestatge.'),
(3, 0, 2, 'Es troba a la 4rt estanteria, a la part esquerra del passadís número 2/C, del magatzem. \r\n\r\nEn tenda està al passadís 7, a la primera estanteria, prestatge número 5.'),
(4, 0, 75, 'Es troba a la 7è estanteria del passadís número 23, zona baixa, del magatzem. \r\n\r\nEn tenda està al passadís 10, en el primer prestatge de la dreta.');

-- --------------------------------------------------------

--
-- Table structure for table `usuari`
--

CREATE TABLE `usuari` (
  `id_usuari` bigint(20) UNSIGNED NOT NULL,
  `id_empleat` bigint(20) UNSIGNED NOT NULL,
  `usuari` char(20) NOT NULL,
  `contrasenya` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `usuari`
--

INSERT INTO `usuari` (`id_usuari`, `id_empleat`, `usuari`, `contrasenya`) VALUES
(1, 1, 'admin', '$2y$10$q2MuessRhxUNQkFv2q5TCOTGbvjcxBR.1QRKbX.VRMCHPd0RM3QC2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albara_compra`
--
ALTER TABLE `albara_compra`
  ADD PRIMARY KEY (`id_albara`),
  ADD KEY `id_client` (`id_proveidor`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `id_proveidor` (`id_proveidor`),
  ADD KEY `id_empresa_2` (`id_empresa`);

--
-- Indexes for table `albara_venta`
--
ALTER TABLE `albara_venta`
  ADD PRIMARY KEY (`id_albara`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indexes for table `altres`
--
ALTER TABLE `altres`
  ADD PRIMARY KEY (`id_altres`),
  ADD UNIQUE KEY `id_producte` (`id_producte`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`id_control`),
  ADD KEY `id_usuari` (`id_usuari`);

--
-- Indexes for table `detalls_albara_compra`
--
ALTER TABLE `detalls_albara_compra`
  ADD PRIMARY KEY (`id_detalls_albara`),
  ADD KEY `id_albara` (`id_albara`),
  ADD KEY `id_producte` (`id_producte`);

--
-- Indexes for table `detalls_albara_venta`
--
ALTER TABLE `detalls_albara_venta`
  ADD PRIMARY KEY (`id_detalls_albara`),
  ADD KEY `id_albara` (`id_albara`),
  ADD KEY `id_producte` (`id_producte`);

--
-- Indexes for table `dia`
--
ALTER TABLE `dia`
  ADD PRIMARY KEY (`id_dia`);

--
-- Indexes for table `empleat`
--
ALTER TABLE `empleat`
  ADD PRIMARY KEY (`id_empleat`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indexes for table `funcionalitat`
--
ALTER TABLE `funcionalitat`
  ADD PRIMARY KEY (`id_funcionalitat`);

--
-- Indexes for table `gas`
--
ALTER TABLE `gas`
  ADD PRIMARY KEY (`id_gas`),
  ADD UNIQUE KEY `id_producte` (`id_producte`);

--
-- Indexes for table `horari`
--
ALTER TABLE `horari`
  ADD PRIMARY KEY (`id_horari`),
  ADD KEY `id_usuari` (`id_usuari`),
  ADD KEY `id_dia` (`id_dia`);

--
-- Indexes for table `liquid`
--
ALTER TABLE `liquid`
  ADD PRIMARY KEY (`id_liquid`),
  ADD UNIQUE KEY `id_producte` (`id_producte`);

--
-- Indexes for table `missatge`
--
ALTER TABLE `missatge`
  ADD PRIMARY KEY (`id_missatge`),
  ADD KEY `id_usuari` (`id_usuari`);

--
-- Indexes for table `permis`
--
ALTER TABLE `permis`
  ADD PRIMARY KEY (`id_permis`),
  ADD KEY `id_usuari` (`id_usuari`),
  ADD KEY `id_dia` (`id_funcionalitat`);

--
-- Indexes for table `producte`
--
ALTER TABLE `producte`
  ADD PRIMARY KEY (`id_producte`),
  ADD UNIQUE KEY `id_ubicacio` (`id_ubicacio`);

--
-- Indexes for table `proveidor`
--
ALTER TABLE `proveidor`
  ADD PRIMARY KEY (`id_proveidor`);

--
-- Indexes for table `semisolid`
--
ALTER TABLE `semisolid`
  ADD PRIMARY KEY (`id_semisolid`),
  ADD UNIQUE KEY `id_producte` (`id_producte`);

--
-- Indexes for table `solid`
--
ALTER TABLE `solid`
  ADD PRIMARY KEY (`id_solid`),
  ADD UNIQUE KEY `id_producte` (`id_producte`);

--
-- Indexes for table `ubicacio`
--
ALTER TABLE `ubicacio`
  ADD PRIMARY KEY (`id_ubicacio`);

--
-- Indexes for table `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`id_usuari`),
  ADD UNIQUE KEY `id_empleat` (`id_empleat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albara_compra`
--
ALTER TABLE `albara_compra`
  MODIFY `id_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `albara_venta`
--
ALTER TABLE `albara_venta`
  MODIFY `id_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `altres`
--
ALTER TABLE `altres`
  MODIFY `id_altres` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `control`
--
ALTER TABLE `control`
  MODIFY `id_control` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `detalls_albara_compra`
--
ALTER TABLE `detalls_albara_compra`
  MODIFY `id_detalls_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `detalls_albara_venta`
--
ALTER TABLE `detalls_albara_venta`
  MODIFY `id_detalls_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dia`
--
ALTER TABLE `dia`
  MODIFY `id_dia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `empleat`
--
ALTER TABLE `empleat`
  MODIFY `id_empleat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `funcionalitat`
--
ALTER TABLE `funcionalitat`
  MODIFY `id_funcionalitat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gas`
--
ALTER TABLE `gas`
  MODIFY `id_gas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `horari`
--
ALTER TABLE `horari`
  MODIFY `id_horari` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `liquid`
--
ALTER TABLE `liquid`
  MODIFY `id_liquid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `missatge`
--
ALTER TABLE `missatge`
  MODIFY `id_missatge` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `permis`
--
ALTER TABLE `permis`
  MODIFY `id_permis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `producte`
--
ALTER TABLE `producte`
  MODIFY `id_producte` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `proveidor`
--
ALTER TABLE `proveidor`
  MODIFY `id_proveidor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `semisolid`
--
ALTER TABLE `semisolid`
  MODIFY `id_semisolid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `solid`
--
ALTER TABLE `solid`
  MODIFY `id_solid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ubicacio`
--
ALTER TABLE `ubicacio`
  MODIFY `id_ubicacio` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuari`
--
ALTER TABLE `usuari`
  MODIFY `id_usuari` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `albara_compra`
--
ALTER TABLE `albara_compra`
  ADD CONSTRAINT `empresa - albara compra ` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`),
  ADD CONSTRAINT `proveidor - albara compra` FOREIGN KEY (`id_proveidor`) REFERENCES `proveidor` (`id_proveidor`);

--
-- Constraints for table `albara_venta`
--
ALTER TABLE `albara_venta`
  ADD CONSTRAINT `client - albara venta` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `empresa - albara venta` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Constraints for table `altres`
--
ALTER TABLE `altres`
  ADD CONSTRAINT `altres_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `control`
--
ALTER TABLE `control`
  ADD CONSTRAINT `control_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON UPDATE CASCADE;

--
-- Constraints for table `detalls_albara_compra`
--
ALTER TABLE `detalls_albara_compra`
  ADD CONSTRAINT `detalls_albara_compra_ibfk_1` FOREIGN KEY (`id_albara`) REFERENCES `albara_compra` (`id_albara`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalls_albara_compra_ibfk_2` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`);

--
-- Constraints for table `detalls_albara_venta`
--
ALTER TABLE `detalls_albara_venta`
  ADD CONSTRAINT `detalls_albara_venta_ibfk_1` FOREIGN KEY (`id_albara`) REFERENCES `albara_venta` (`id_albara`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalls_albara_venta_ibfk_2` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`);

--
-- Constraints for table `empleat`
--
ALTER TABLE `empleat`
  ADD CONSTRAINT `empleat_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Constraints for table `gas`
--
ALTER TABLE `gas`
  ADD CONSTRAINT `gas_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `horari`
--
ALTER TABLE `horari`
  ADD CONSTRAINT `horari_ibfk_2` FOREIGN KEY (`id_dia`) REFERENCES `dia` (`id_dia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horari_ibfk_3` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON UPDATE CASCADE;

--
-- Constraints for table `liquid`
--
ALTER TABLE `liquid`
  ADD CONSTRAINT `liquid_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `missatge`
--
ALTER TABLE `missatge`
  ADD CONSTRAINT `missatge_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON UPDATE CASCADE;

--
-- Constraints for table `permis`
--
ALTER TABLE `permis`
  ADD CONSTRAINT `permis_ibfk_2` FOREIGN KEY (`id_funcionalitat`) REFERENCES `funcionalitat` (`id_funcionalitat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permis_ibfk_3` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON UPDATE CASCADE;

--
-- Constraints for table `producte`
--
ALTER TABLE `producte`
  ADD CONSTRAINT `producte_ibfk_1` FOREIGN KEY (`id_ubicacio`) REFERENCES `ubicacio` (`id_ubicacio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `semisolid`
--
ALTER TABLE `semisolid`
  ADD CONSTRAINT `semisolid_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `solid`
--
ALTER TABLE `solid`
  ADD CONSTRAINT `solid_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuari`
--
ALTER TABLE `usuari`
  ADD CONSTRAINT `usuari_ibfk_1` FOREIGN KEY (`id_empleat`) REFERENCES `empleat` (`id_empleat`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
