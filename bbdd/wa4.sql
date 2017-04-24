-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2017 at 03:17 
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

-- --------------------------------------------------------

--
-- Table structure for table `altres`
--

CREATE TABLE `altres` (
  `id_altres` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `unitats` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL,
  `codi` bigint(20) NOT NULL,
  `informacio` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `nss` int(12) NOT NULL,
  `imatge` char(100) DEFAULT NULL,
  `descripcio` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `funcionalitat`
--

CREATE TABLE `funcionalitat` (
  `id_funcionalitat` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gas`
--

CREATE TABLE `gas` (
  `id_gas` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `capacitatMl` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `horari`
--

CREATE TABLE `horari` (
  `id_horari` bigint(20) UNSIGNED NOT NULL,
  `id_usuari` bigint(20) UNSIGNED NOT NULL,
  `id_dia` bigint(20) UNSIGNED NOT NULL,
  `horaInici` time NOT NULL,
  `horaFinal` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `liquid`
--

CREATE TABLE `liquid` (
  `id_liquid` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `capacitatMl` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `proveidor`
--

CREATE TABLE `proveidor` (
  `id_proveidor` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL,
  `codi` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `usuari`
--

CREATE TABLE `usuari` (
  `id_usuari` bigint(20) UNSIGNED NOT NULL,
  `id_empleat` bigint(20) UNSIGNED NOT NULL,
  `usuari` char(20) NOT NULL,
  `contrasenya` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `id_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `albara_venta`
--
ALTER TABLE `albara_venta`
  MODIFY `id_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `altres`
--
ALTER TABLE `altres`
  MODIFY `id_altres` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `control`
--
ALTER TABLE `control`
  MODIFY `id_control` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detalls_albara_compra`
--
ALTER TABLE `detalls_albara_compra`
  MODIFY `id_detalls_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detalls_albara_venta`
--
ALTER TABLE `detalls_albara_venta`
  MODIFY `id_detalls_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dia`
--
ALTER TABLE `dia`
  MODIFY `id_dia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `empleat`
--
ALTER TABLE `empleat`
  MODIFY `id_empleat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `funcionalitat`
--
ALTER TABLE `funcionalitat`
  MODIFY `id_funcionalitat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gas`
--
ALTER TABLE `gas`
  MODIFY `id_gas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `horari`
--
ALTER TABLE `horari`
  MODIFY `id_horari` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `liquid`
--
ALTER TABLE `liquid`
  MODIFY `id_liquid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `missatge`
--
ALTER TABLE `missatge`
  MODIFY `id_missatge` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permis`
--
ALTER TABLE `permis`
  MODIFY `id_permis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `producte`
--
ALTER TABLE `producte`
  MODIFY `id_producte` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proveidor`
--
ALTER TABLE `proveidor`
  MODIFY `id_proveidor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_ubicacio` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
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
  ADD CONSTRAINT `control_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `horari_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horari_ibfk_2` FOREIGN KEY (`id_dia`) REFERENCES `dia` (`id_dia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `liquid`
--
ALTER TABLE `liquid`
  ADD CONSTRAINT `liquid_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `missatge`
--
ALTER TABLE `missatge`
  ADD CONSTRAINT `missatge_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permis`
--
ALTER TABLE `permis`
  ADD CONSTRAINT `permis_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permis_ibfk_2` FOREIGN KEY (`id_funcionalitat`) REFERENCES `funcionalitat` (`id_funcionalitat`) ON DELETE CASCADE ON UPDATE CASCADE;

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
