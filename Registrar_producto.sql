-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2015 a las 02:00:48
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `registro_producto`
--
CREATE DATABASE IF NOT EXISTS `registro_producto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `registro_producto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
`id` int(11) NOT NULL,
  `Categorias` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `Categorias`) VALUES
(1, 'Baño'),
(2, 'Cocina'),
(7, 'Interiores'),
(8, 'Exteriores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
`id_producto` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `Codigo_producto` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `categoria`, `precio`, `Codigo_producto`) VALUES
(24, 'lejia', '1', '0.12', '1234'),
(25, 'bolsas para basura', '8', '1.00', '0469'),
(26, 'detergente', '2', '3.75', '0000'),
(27, 'escoba ', '7', '2.50', '1467'),
(28, 'carretilla', '8', '25.00', '4578'),
(29, 'guantes de hule', '1', '1.50', '5647'),
(30, 'jabon para platos', '2', '4.00', '1980'),
(31, 'escoba de araÃ±a', '8', '3.00', '1267');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
`id_venta` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `cantidad` varchar(15) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `precio_total` varchar(50) NOT NULL,
  `fecha_venta` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `nombre`, `cantidad`, `precio`, `precio_total`, `fecha_venta`) VALUES
(1, 'lejia', '12', '0.12', '1.44', '2015-06-19'),
(2, 'lejia', '34', '0.12', '4.08', '2015-06-19'),
(3, 'lejia', '23', '0.12', '2.76', '2015-06-19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
 ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
 ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
