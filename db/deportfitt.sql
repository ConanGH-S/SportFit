-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2022 a las 17:51:54
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `deportfitt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `Id_articulo` int(5) NOT NULL,
  `Tipo_articulo` varchar(30) NOT NULL,
  `Estado_articulo` varchar(30) NOT NULL,
  `Descripción` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_articulo`
--

CREATE TABLE `detalle_articulo` (
  `Id_prestamo` int(5) NOT NULL,
  `Id_devolución` int(5) NOT NULL,
  `Id_articulo` int(5) NOT NULL,
  `Documento` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolución`
--

CREATE TABLE `devolución` (
  `Id_devolución` int(5) NOT NULL,
  `Id_prestamo` int(5) NOT NULL,
  `Fecha_devolución` date NOT NULL,
  `Observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pretamo`
--

CREATE TABLE `pretamo` (
  `Id_prestamo` int(5) NOT NULL,
  `Fecha_prestamo` date NOT NULL,
  `Id_articulo` int(5) NOT NULL,
  `Documento` int(5) NOT NULL,
  `Fecha_devolución` date NOT NULL,
  `observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `Documento` int(5) NOT NULL,
  `Nombres` varchar(10) NOT NULL,
  `Apellidos` varchar(10) NOT NULL,
  `Grado` int(3) DEFAULT NULL,
  `Jornada` varchar(7) DEFAULT NULL,
  `Correo` varchar(100) NOT NULL,
  `Contacto` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `Stock_min` int(1) NOT NULL,
  `Stock_max` int(3) NOT NULL,
  `Id_articulo_stock` int(5) NOT NULL,
  `Id_articulo` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`Id_articulo`);

--
-- Indices de la tabla `detalle_articulo`
--
ALTER TABLE `detalle_articulo`
  ADD PRIMARY KEY (`Id_prestamo`),
  ADD KEY `Id_devolución` (`Id_devolución`,`Id_articulo`),
  ADD KEY `Documento` (`Documento`),
  ADD KEY `Id_articulo` (`Id_articulo`);

--
-- Indices de la tabla `devolución`
--
ALTER TABLE `devolución`
  ADD PRIMARY KEY (`Id_devolución`),
  ADD KEY `Id_prestamo` (`Id_prestamo`);

--
-- Indices de la tabla `pretamo`
--
ALTER TABLE `pretamo`
  ADD PRIMARY KEY (`Id_prestamo`),
  ADD KEY `Id_articulo` (`Id_articulo`,`Documento`),
  ADD KEY `Documento` (`Documento`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`Documento`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Id_articulo_stock`),
  ADD KEY `Id_articulo` (`Id_articulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `Id_articulo` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `devolución`
--
ALTER TABLE `devolución`
  MODIFY `Id_devolución` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pretamo`
--
ALTER TABLE `pretamo`
  MODIFY `Id_prestamo` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `Documento` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `Id_articulo_stock` int(5) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_articulo`
--
ALTER TABLE `detalle_articulo`
  ADD CONSTRAINT `detalle_articulo_ibfk_1` FOREIGN KEY (`Documento`) REFERENCES `registro` (`Documento`),
  ADD CONSTRAINT `detalle_articulo_ibfk_2` FOREIGN KEY (`Id_articulo`) REFERENCES `articulo` (`Id_articulo`);

--
-- Filtros para la tabla `pretamo`
--
ALTER TABLE `pretamo`
  ADD CONSTRAINT `pretamo_ibfk_1` FOREIGN KEY (`Documento`) REFERENCES `registro` (`Documento`),
  ADD CONSTRAINT `pretamo_ibfk_2` FOREIGN KEY (`Id_articulo`) REFERENCES `articulo` (`Id_articulo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
