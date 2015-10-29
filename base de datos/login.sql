-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2015 a las 16:31:15
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `identificacion` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `fechaafiliacion` date NOT NULL,
  `vendedor` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `diasc` varchar(50) NOT NULL,
  `valor` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1093221469 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`identificacion`, `nombres`, `apellidos`, `telefono`, `direccion`, `fechaafiliacion`, `vendedor`, `ciudad`, `diasc`, `valor`) VALUES
(15679979, 'David ', 'Guerra', 2147483647, 'Cr 2 # 26-20', '2015-10-27', 'jose vicente petros', 'Planeta rica', 'domingo lunes martes', 10000),
(1063722732, 'Eric ', 'Martinez Muentes', 2147483647, 'Cr 2 # 26-20', '2015-10-27', '', 'monitos', '', 2000000),
(1093221468, 'maria', 'ospina', 2147483647, 'Cr 2 # 32-123', '0000-00-00', '', 'cerete', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratofamiliar`
--

CREATE TABLE IF NOT EXISTS `contratofamiliar` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratoindividual`
--

CREATE TABLE IF NOT EXISTS `contratoindividual` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagosabonos`
--

CREATE TABLE IF NOT EXISTS `pagosabonos` (
  `id` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `valortot` int(10) NOT NULL,
  `abono` int(10) NOT NULL,
  `saldoactual` int(10) NOT NULL,
  `fechaabono` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagosabonos`
--

INSERT INTO `pagosabonos` (`id`, `cedula`, `valortot`, `abono`, `saldoactual`, `fechaabono`) VALUES
(4, 1063722732, 2000000, 345000, 0, '2015-10-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `pass`, `nombre`, `apellido`) VALUES
(2, 'ejmm19', '12345', 'Eric', 'Martinez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`identificacion`),
  ADD KEY `valor` (`valor`);

--
-- Indices de la tabla `contratofamiliar`
--
ALTER TABLE `contratofamiliar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `contratoindividual`
--
ALTER TABLE `contratoindividual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `pagosabonos`
--
ALTER TABLE `pagosabonos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cedula` (`cedula`),
  ADD KEY `valortot` (`valortot`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `identificacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1093221469;
--
-- AUTO_INCREMENT de la tabla `contratofamiliar`
--
ALTER TABLE `contratofamiliar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contratoindividual`
--
ALTER TABLE `contratoindividual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pagosabonos`
--
ALTER TABLE `pagosabonos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contratofamiliar`
--
ALTER TABLE `contratofamiliar`
  ADD CONSTRAINT `contratofamiliar_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`identificacion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `contratoindividual`
--
ALTER TABLE `contratoindividual`
  ADD CONSTRAINT `contratoindividual_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`identificacion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`identificacion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pagosabonos`
--
ALTER TABLE `pagosabonos`
  ADD CONSTRAINT `pagosabonos_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `clientes` (`identificacion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pagosabonos_ibfk_2` FOREIGN KEY (`valortot`) REFERENCES `clientes` (`valor`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
