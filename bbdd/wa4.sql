-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2017 a las 16:33:46
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wa4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albara_compra`
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
-- Volcado de datos para la tabla `albara_compra`
--

INSERT INTO `albara_compra` (`id_albara`, `id_proveidor`, `id_empresa`, `codi`, `observacions`, `preu`, `data`, `localitat`) VALUES
(1, 1, 1, '000000000001', 'Entregar al medio día.', 548.97, '2017-04-12', 'Lliça d''Amunt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albara_venta`
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
-- Volcado de datos para la tabla `albara_venta`
--

INSERT INTO `albara_venta` (`id_albara`, `id_client`, `id_empresa`, `codi`, `observacions`, `preu`, `data`, `localitat`) VALUES
(1, 1, 1, '000000000002', 'Entregar por la mañana.', 687.16, '2017-04-03', 'Granollers');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `altres`
--

CREATE TABLE `altres` (
  `id_altres` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `unitats` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `id_client` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL,
  `codi` bigint(20) NOT NULL,
  `informacio` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`id_client`, `nom`, `codi`, `informacio`) VALUES
(1, 'Grifols', 1, 'Los proyectos de investigación de Grifols están dirigidos a aumentar el nivel de innovación de productos y servicios que mejoren la calidad de vida de los pacientes y la atención sanitaria.  Las actividades de I+D se desarrollan en los ámbitos de cada división.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `id_control` bigint(20) UNSIGNED NOT NULL,
  `id_usuari` bigint(20) UNSIGNED NOT NULL,
  `fitxat` tinyint(1) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `control`
--

INSERT INTO `control` (`id_control`, `id_usuari`, `fitxat`, `data`) VALUES
(1, 1, 1, '2017-05-09 16:15:33'),
(2, 1, 0, '2017-05-09 16:17:25'),
(3, 1, 1, '2017-05-12 15:11:52'),
(4, 1, 0, '2017-05-12 15:12:15'),
(5, 1, 1, '2017-05-15 17:06:40'),
(6, 1, 0, '2017-05-15 17:06:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalls_albara_compra`
--

CREATE TABLE `detalls_albara_compra` (
  `id_detalls_albara` bigint(20) UNSIGNED NOT NULL,
  `id_albara` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `quantitat` bigint(20) NOT NULL,
  `preu` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalls_albara_compra`
--

INSERT INTO `detalls_albara_compra` (`id_detalls_albara`, `id_albara`, `id_producte`, `quantitat`, `preu`) VALUES
(1, 1, 1, 150, 5.5),
(2, 1, 2, 25, 8.15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalls_albara_venta`
--

CREATE TABLE `detalls_albara_venta` (
  `id_detalls_albara` bigint(20) UNSIGNED NOT NULL,
  `id_albara` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `quantitat` bigint(20) NOT NULL,
  `preu` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalls_albara_venta`
--

INSERT INTO `detalls_albara_venta` (`id_detalls_albara`, `id_albara`, `id_producte`, `quantitat`, `preu`) VALUES
(1, 1, 1, 540, 9.15),
(2, 1, 2, 210, 3.98);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dia`
--

CREATE TABLE `dia` (
  `id_dia` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dia`
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
-- Estructura de tabla para la tabla `empleat`
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

--
-- Volcado de datos para la tabla `empleat`
--

INSERT INTO `empleat` (`id_empleat`, `id_empresa`, `nom`, `cognom`, `dni`, `localitat`, `nomina`, `nss`, `imatge`, `descripcio`) VALUES
(1, 1, 'Ivan', 'Mir Arroyo', '47921561A', 'Lliça d''Amunt', 2800, 25165464, 'Home/ivan.jpg', 'Developer de la secció I+D.'),
(7, 1, 'asd', 'asdf', '123', 'adsf', 123, 123, 'asd', 'asd'),
(8, 1, 'asd', 'asdf', '123', 'adsf', 123, 123, 'asd', 'asd'),
(9, 1, 'asd', 'asdf', '123', 'adsf', 123, 123, 'asd', 'asd'),
(10, 1, 'asd', 'asdf', '123', 'adsf', 123, 123, 'asd', 'asd'),
(11, 1, 'asd', 'asdf', '123', 'adsf', 123, 123, 'asd', 'asd'),
(12, 1, 'asd', 'asdf', '123', 'adsf', 123, 123, 'asd', 'asd'),
(13, 1, 'asd', 'asdf', '123', 'adsf', 123, 123, 'asd', 'asd'),
(14, 1, 'asd123', 'asdf', '123', 'adsf', 123, 123, 'asd', 'asd'),
(15, 1, 'asd123', 'asdf', '123', 'adsf', 123, 123, 'asd', 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nom`) VALUES
(1, 'WA4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionalitat`
--

CREATE TABLE `funcionalitat` (
  `id_funcionalitat` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `funcionalitat`
--

INSERT INTO `funcionalitat` (`id_funcionalitat`, `nom`) VALUES
(1, 'empleat'),
(3, 'producte'),
(4, 'proveidor'),
(5, 'client'),
(6, 'albaraVenta'),
(7, 'albaraCompra'),
(8, 'control'),
(9, 'permisos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gas`
--

CREATE TABLE `gas` (
  `id_gas` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `capacitatMl` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horari`
--

CREATE TABLE `horari` (
  `id_horari` bigint(20) UNSIGNED NOT NULL,
  `id_usuari` bigint(20) UNSIGNED NOT NULL,
  `id_dia` bigint(20) UNSIGNED NOT NULL,
  `horaInici` time NOT NULL,
  `horaFinal` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horari`
--

INSERT INTO `horari` (`id_horari`, `id_usuari`, `id_dia`, `horaInici`, `horaFinal`) VALUES
(1, 1, 1, '10:00:00', '20:00:00'),
(2, 1, 2, '10:00:00', '19:00:00'),
(3, 1, 3, '10:00:00', '19:00:00'),
(4, 1, 4, '10:00:00', '19:00:00'),
(5, 1, 5, '10:00:00', '14:00:00'),
(6, 1, 6, null, null),
(7, 1, 7, null, null);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liquid`
--

CREATE TABLE `liquid` (
  `id_liquid` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `capacitatMl` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `liquid`
--

INSERT INTO `liquid` (`id_liquid`, `id_producte`, `capacitatMl`) VALUES
(1, 1, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `missatge`
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
-- Volcado de datos para la tabla `missatge`
--

INSERT INTO `missatge` (`id_missatge`, `id_usuari`, `llegit`, `titol`, `data`, `missatge`) VALUES
(1, 1, 1, 'Advertensia', '2017-04-19 08:21:23', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...'),
(2, 1, 1, 'sdf', '2017-05-15 17:11:08', 'sdf'),
(3, 1, 1, 'asdf', '2017-05-15 17:11:26', 'asdf'),
(4, 1, 1, 'asd', '2017-05-15 17:11:49', 'sdakfjyhuapsldfjañslkdfjñalskdfjñlaskdjfñlaskdjfñlaskdfj'),
(5, 1, 0, 'PENEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEES', '2017-05-16 16:54:37', 'PENES POR TODOS LADOS CORREEED!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permis`
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
-- Volcado de datos para la tabla `permis`
--

INSERT INTO `permis` (`id_permis`, `id_usuari`, `id_funcionalitat`, `visualitzar`, `crear`, `editar`, `eliminar`) VALUES
(3, 1, 1, 1, 1, 1, 1),
(5, 1, 3, 1, 1, 1, 1),
(6, 1, 4, 1, 1, 1, 1),
(7, 1, 5, 1, 1, 1, 1),
(8, 1, 6, 1, 1, 1, 1),
(9, 1, 7, 1, 1, 1, 1),
(10, 1, 8, 1, 1, 1, 1),
(11, 1, 9, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producte`
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
-- Volcado de datos para la tabla `producte`
--

INSERT INTO `producte` (`id_producte`, `id_ubicacio`, `nom`, `marca`, `preuBase`, `referencia`, `model`, `descripcio`, `conservarFred`, `imatge`) VALUES
(1, 1, 'Dalsy', 'Dalsy', 5.01, 1, 'Dalsy 2.9', 'El Dalsy® como se conoce en España es el ibuprofeno de 400 mg como se le conoce genéricamente, pertenece al grupo de los antiinflamorios no esteroideos o AINEs. Es utilizado sobretodo en pediatría para aliviar los síntomas de la fiebre, es decir como antipirético de uso infantil. También se puede utilizar contra el dolor de cabeza (cefalea), contra el dolor de los dientes (odontalgia) y contra el dolor postquirúrgico.  Otros síntomas se pueden tratar son el dolor neurológico de características débiles.\r\n', 0, '/img/dalsy.png'),
(2, 2, 'Ibuprofenoooooooo', 'Kern Pharma', 8.59, 2, 'Comprimidos recubiertos con película EFG', 'Ibuprofeno pertenece al grupo de medicamentos llamados antiinflamatorios no esteroideos (AINEs).\r\nEste medicamento está indicado para el tratamiento de la fiebre, el tratamiento del dolor de intensidad leve o moderado incluida la migraña, el tratamiento de la artritis (inflamación de las articulaciones, incluyendo habitualmente las de manos y pies, dando lugar a hinchazón y dolor), la artritis reumatoide juvenil, artrosis (trastorno de carácter crónico que ocasiona el daño del cartílago), espondilitis anquilosante (inflamación que afecta las articulaciones de la columna vertebral), inflamación no reumática y la dismenorrea primaria (menstruación dolorosa).\r\n', 0, 'img/ibuprofeno.png'),
(3, 3, 'asdfasas', 'asdf', 456, 456, 'asdf', 'asdf', 1, 'asdf'),
(4, 4, 'asdfasdasd', 'asd', 123, 123, 'asd', '123', 1, 'asd'),
(5, 5, 'asdfasdasd', 'asd', 123, 123, 'asd', '123', 1, 'asd'),
(6, 6, 'asdfasdasd', 'asd', 123, 123, 'asd', '123', 1, 'asd'),
(7, 7, 'asdfasdasd', 'asd', 123, 123, 'asd', '123', 1, 'asd'),
(8, 8, 'pene', 'penaso', 123, 1243, 'osdfdoi', 'asdfsdf', 1, '/wa4/Project/view/images/productes/business-man-avatar.png'),
(9, 9, 'pene', 'penaso', 123, 1243, 'osdfdoi', 'asdfsdf', 1, '/wa4/Project/view/images/productes/business-man-avatar.png'),
(10, 10, 'pene', 'penaso', 123, 1243, 'osdfdoi', 'asdfsdf', 1, '/wa4/Project/view/images/productes/business-man-avatar.png'),
(11, 11, 'pene', 'penaso', 123, 1243, 'osdfdoi', 'asdfsdf', 1, '/wa4/Project/view/images/productes/business-man-avatar.png'),
(12, 12, 'pene', 'penaso', 123, 1243, 'osdfdoi', 'asdfsdf', 1, '/wa4/Project/view/images/productes/2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveidor`
--

CREATE TABLE `proveidor` (
  `id_proveidor` bigint(20) UNSIGNED NOT NULL,
  `nom` char(50) NOT NULL,
  `codi` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveidor`
--

INSERT INTO `proveidor` (`id_proveidor`, `nom`, `codi`) VALUES
(1, 'Vulcania', '00001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semisolid`
--

CREATE TABLE `semisolid` (
  `id_semisolid` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `capacitatMg` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solid`
--

CREATE TABLE `solid` (
  `id_solid` bigint(20) UNSIGNED NOT NULL,
  `id_producte` bigint(20) UNSIGNED NOT NULL,
  `capacitatMg` double NOT NULL,
  `unitats` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `solid`
--

INSERT INTO `solid` (`id_solid`, `id_producte`, `capacitatMg`, `unitats`) VALUES
(1, 2, 400, 30),
(2, 3, 456, 456),
(3, 4, 12, 12),
(4, 5, 12, 12),
(5, 6, 12, 12),
(6, 7, 12, 12),
(7, 8, 78, 98),
(8, 9, 78, 98),
(9, 10, 78, 98),
(10, 11, 78, 98),
(11, 12, 78, 98);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacio`
--

CREATE TABLE `ubicacio` (
  `id_ubicacio` bigint(20) UNSIGNED NOT NULL,
  `quantitatTenda` bigint(10) NOT NULL,
  `quantitatStock` bigint(10) NOT NULL,
  `situacio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ubicacio`
--

INSERT INTO `ubicacio` (`id_ubicacio`, `quantitatTenda`, `quantitatStock`, `situacio`) VALUES
(1, 150, 75, 'Estantería AB2'),
(2, 500, 400, 'En mostrador central AA2'),
(3, 0, 0, 'NULL'),
(4, 0, 0, 'NULL'),
(5, 0, 0, 'NULL'),
(6, 0, 0, 'NULL'),
(7, 0, 0, 'NULL'),
(8, 0, 0, 'NULL'),
(9, 0, 0, 'NULL'),
(10, 0, 0, 'NULL'),
(11, 0, 0, 'NULL'),
(12, 0, 0, 'NULL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuari`
--

CREATE TABLE `usuari` (
  `id_usuari` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_empleat` bigint(20) UNSIGNED NOT NULL,
  `usuari` char(20) NOT NULL,
  `contrasenya` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuari`
--

INSERT INTO `usuari` (`id_usuari`, `id_empleat`, `usuari`, `contrasenya`) VALUES
(1, 1, 'admin', '$2y$10$W0jQClK.OcRq6taHrV3q/.53.y3fwE05JZGoLJ9SQdanoBvE70K8S');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `albara_compra`
--
ALTER TABLE `albara_compra`
  ADD PRIMARY KEY (`id_albara`),
  ADD KEY `id_client` (`id_proveidor`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `id_proveidor` (`id_proveidor`),
  ADD KEY `id_empresa_2` (`id_empresa`);

--
-- Indices de la tabla `albara_venta`
--
ALTER TABLE `albara_venta`
  ADD PRIMARY KEY (`id_albara`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `altres`
--
ALTER TABLE `altres`
  ADD PRIMARY KEY (`id_altres`),
  ADD UNIQUE KEY `id_producte` (`id_producte`);

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indices de la tabla `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`id_control`),
  ADD KEY `id_usuari` (`id_usuari`);

--
-- Indices de la tabla `detalls_albara_compra`
--
ALTER TABLE `detalls_albara_compra`
  ADD PRIMARY KEY (`id_detalls_albara`),
  ADD KEY `id_albara` (`id_albara`),
  ADD KEY `id_producte` (`id_producte`);

--
-- Indices de la tabla `detalls_albara_venta`
--
ALTER TABLE `detalls_albara_venta`
  ADD PRIMARY KEY (`id_detalls_albara`),
  ADD KEY `id_albara` (`id_albara`),
  ADD KEY `id_producte` (`id_producte`);

--
-- Indices de la tabla `dia`
--
ALTER TABLE `dia`
  ADD PRIMARY KEY (`id_dia`);

--
-- Indices de la tabla `empleat`
--
ALTER TABLE `empleat`
  ADD PRIMARY KEY (`id_empleat`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `funcionalitat`
--
ALTER TABLE `funcionalitat`
  ADD PRIMARY KEY (`id_funcionalitat`);

--
-- Indices de la tabla `gas`
--
ALTER TABLE `gas`
  ADD PRIMARY KEY (`id_gas`),
  ADD UNIQUE KEY `id_producte` (`id_producte`);

--
-- Indices de la tabla `horari`
--
ALTER TABLE `horari`
  ADD PRIMARY KEY (`id_horari`),
  ADD KEY `id_usuari` (`id_usuari`),
  ADD KEY `id_dia` (`id_dia`);

--
-- Indices de la tabla `liquid`
--
ALTER TABLE `liquid`
  ADD PRIMARY KEY (`id_liquid`),
  ADD UNIQUE KEY `id_producte` (`id_producte`);

--
-- Indices de la tabla `missatge`
--
ALTER TABLE `missatge`
  ADD PRIMARY KEY (`id_missatge`),
  ADD KEY `id_usuari` (`id_usuari`);

--
-- Indices de la tabla `permis`
--
ALTER TABLE `permis`
  ADD PRIMARY KEY (`id_permis`),
  ADD KEY `id_usuari` (`id_usuari`),
  ADD KEY `id_dia` (`id_funcionalitat`);

--
-- Indices de la tabla `producte`
--
ALTER TABLE `producte`
  ADD PRIMARY KEY (`id_producte`),
  ADD UNIQUE KEY `id_ubicacio` (`id_ubicacio`);

--
-- Indices de la tabla `proveidor`
--
ALTER TABLE `proveidor`
  ADD PRIMARY KEY (`id_proveidor`);

--
-- Indices de la tabla `semisolid`
--
ALTER TABLE `semisolid`
  ADD PRIMARY KEY (`id_semisolid`),
  ADD UNIQUE KEY `id_producte` (`id_producte`);

--
-- Indices de la tabla `solid`
--
ALTER TABLE `solid`
  ADD PRIMARY KEY (`id_solid`),
  ADD UNIQUE KEY `id_producte` (`id_producte`);

--
-- Indices de la tabla `ubicacio`
--
ALTER TABLE `ubicacio`
  ADD PRIMARY KEY (`id_ubicacio`);

--
-- Indices de la tabla `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`id_usuari`),
  ADD UNIQUE KEY `id_empleat` (`id_empleat`),
  ADD UNIQUE KEY `usuari` (`usuari`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `albara_compra`
--
ALTER TABLE `albara_compra`
  MODIFY `id_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `albara_venta`
--
ALTER TABLE `albara_venta`
  MODIFY `id_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `altres`
--
ALTER TABLE `altres`
  MODIFY `id_altres` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `id_client` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `control`
--
ALTER TABLE `control`
  MODIFY `id_control` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `detalls_albara_compra`
--
ALTER TABLE `detalls_albara_compra`
  MODIFY `id_detalls_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `detalls_albara_venta`
--
ALTER TABLE `detalls_albara_venta`
  MODIFY `id_detalls_albara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `dia`
--
ALTER TABLE `dia`
  MODIFY `id_dia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `empleat`
--
ALTER TABLE `empleat`
  MODIFY `id_empleat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `funcionalitat`
--
ALTER TABLE `funcionalitat`
  MODIFY `id_funcionalitat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `gas`
--
ALTER TABLE `gas`
  MODIFY `id_gas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `horari`
--
ALTER TABLE `horari`
  MODIFY `id_horari` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `liquid`
--
ALTER TABLE `liquid`
  MODIFY `id_liquid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `missatge`
--
ALTER TABLE `missatge`
  MODIFY `id_missatge` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `permis`
--
ALTER TABLE `permis`
  MODIFY `id_permis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `producte`
--
ALTER TABLE `producte`
  MODIFY `id_producte` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `proveidor`
--
ALTER TABLE `proveidor`
  MODIFY `id_proveidor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `semisolid`
--
ALTER TABLE `semisolid`
  MODIFY `id_semisolid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `solid`
--
ALTER TABLE `solid`
  MODIFY `id_solid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `ubicacio`
--
ALTER TABLE `ubicacio`
  MODIFY `id_ubicacio` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `albara_compra`
--
ALTER TABLE `albara_compra`
  ADD CONSTRAINT `empresa - albara compra ` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`),
  ADD CONSTRAINT `proveidor - albara compra` FOREIGN KEY (`id_proveidor`) REFERENCES `proveidor` (`id_proveidor`);

--
-- Filtros para la tabla `albara_venta`
--
ALTER TABLE `albara_venta`
  ADD CONSTRAINT `client - albara venta` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `empresa - albara venta` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Filtros para la tabla `altres`
--
ALTER TABLE `altres`
  ADD CONSTRAINT `altres_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `control`
--
ALTER TABLE `control`
  ADD CONSTRAINT `control_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalls_albara_compra`
--
ALTER TABLE `detalls_albara_compra`
  ADD CONSTRAINT `detalls_albara_compra_ibfk_1` FOREIGN KEY (`id_albara`) REFERENCES `albara_compra` (`id_albara`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalls_albara_compra_ibfk_2` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`);

--
-- Filtros para la tabla `detalls_albara_venta`
--
ALTER TABLE `detalls_albara_venta`
  ADD CONSTRAINT `detalls_albara_venta_ibfk_1` FOREIGN KEY (`id_albara`) REFERENCES `albara_venta` (`id_albara`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalls_albara_venta_ibfk_2` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`);

--
-- Filtros para la tabla `empleat`
--
ALTER TABLE `empleat`
  ADD CONSTRAINT `empleat_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Filtros para la tabla `gas`
--
ALTER TABLE `gas`
  ADD CONSTRAINT `gas_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horari`
--
ALTER TABLE `horari`
  ADD CONSTRAINT `horari_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horari_ibfk_2` FOREIGN KEY (`id_dia`) REFERENCES `dia` (`id_dia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `liquid`
--
ALTER TABLE `liquid`
  ADD CONSTRAINT `liquid_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `missatge`
--
ALTER TABLE `missatge`
  ADD CONSTRAINT `missatge_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `permis`
--
ALTER TABLE `permis`
  ADD CONSTRAINT `permis_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permis_ibfk_2` FOREIGN KEY (`id_funcionalitat`) REFERENCES `funcionalitat` (`id_funcionalitat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producte`
--
ALTER TABLE `producte`
  ADD CONSTRAINT `producte_ibfk_1` FOREIGN KEY (`id_ubicacio`) REFERENCES `ubicacio` (`id_ubicacio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `semisolid`
--
ALTER TABLE `semisolid`
  ADD CONSTRAINT `semisolid_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `solid`
--
ALTER TABLE `solid`
  ADD CONSTRAINT `solid_ibfk_1` FOREIGN KEY (`id_producte`) REFERENCES `producte` (`id_producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuari`
--
ALTER TABLE `usuari`
  ADD CONSTRAINT `usuari_ibfk_1` FOREIGN KEY (`id_empleat`) REFERENCES `empleat` (`id_empleat`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
