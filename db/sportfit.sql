-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2022 a las 02:12:13
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sportfit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(5) NOT NULL,
  `tipo_articulo` varchar(30) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `estado_articulo` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `tipo_articulo`, `cantidad`, `estado_articulo`, `descripcion`) VALUES
(1, 'Pesa', 26, 'Regular', 'Pesas deportivas para su uso práctico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_articulo`
--

CREATE TABLE `detalle_articulo` (
  `id_prestamo` int(5) NOT NULL,
  `id_devolucion` int(5) NOT NULL,
  `id_articulo` int(5) NOT NULL,
  `documento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

CREATE TABLE `devolucion` (
  `id_devolucion` int(5) NOT NULL,
  `id_prestamo` int(5) NOT NULL,
  `fecha_devolucion` date NOT NULL,
  `observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `id_prestamo` int(5) NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `id_articulo` int(5) NOT NULL,
  `documento` int(11) NOT NULL,
  `fecha_devolucion` date NOT NULL,
  `observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(4) NOT NULL,
  `documento` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `contacto` int(11) NOT NULL,
  `contrasena` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `documento`, `nombre_completo`, `correo`, `contacto`, `contrasena`) VALUES
(1, 777, 'admin', 'admin@admin', 12345, '$2y$10$Lk9Dco6DsjGXlUKNWTrpTuBlsLe7cx3WS7KvFsab3KP4zCBIhm8RC'),
(2, 1, 'a', 'a', 0, '$2y$10$aQwtvVcSykn6J.d6QVC6gODsnpDAAuBoI5GGjDvTeFvAf3dlr03Py'),
(3, 123, 'awdawd', 'awdawd@dawdawd', 1132, '$2y$10$bkG7beEB8jeuVW0qOBd3I.Qzf8GDIqDo2WoEcNr1DZv2Nd1QXhuPi'),
(4, 1035972513, 'karen gomez', 'karne@gomela.com', 12234456, '$2y$10$4m1fgVI4C8D7Yo/I9ibY1eODYjYjlpPAgFU7r2hSqqnlyWBXLMTXm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `detalle_articulo`
--
ALTER TABLE `detalle_articulo`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `Id_devolución` (`id_devolucion`,`id_articulo`),
  ADD KEY `Documento` (`documento`),
  ADD KEY `Id_articulo` (`id_articulo`);

--
-- Indices de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD PRIMARY KEY (`id_devolucion`),
  ADD KEY `Id_prestamo` (`id_prestamo`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `Id_articulo` (`id_articulo`,`documento`),
  ADD KEY `Documento` (`documento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  MODIFY `id_devolucion` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id_prestamo` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_articulo`
--
ALTER TABLE `detalle_articulo`
  ADD CONSTRAINT `detalle_articulo_ibfk_1` FOREIGN KEY (`Documento`) REFERENCES `usuarios` (`Documento`),
  ADD CONSTRAINT `detalle_articulo_ibfk_2` FOREIGN KEY (`Id_articulo`) REFERENCES `articulo` (`Id_articulo`);

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `usuarios` (`Documento`),
  ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`Id_articulo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONN