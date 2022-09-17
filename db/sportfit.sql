-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2022 a las 04:43:19
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
(1, 'Balon/es de fútbol', 80, 'Buen estado', 'Pelota de futbol para su uso recreativo'),
(2, 'Colchonetas', 60, 'Buen estado', 'Colchoneta de gimnasia para su uso práctico'),
(3, 'Bastones', 100, 'Buen estado', 'Bastones de gimnasia para su uso práctico'),
(4, 'Balon de volleyball', 10, 'Buen estado', 'Balones de volleyball para su uso recreativo'),
(5, 'Ula ula', 25, 'Buen estado', 'Hoola hoops para su uso recreativo y práctico'),
(6, 'Conos', 10, 'Buen estado', 'Conos de gimnasia para su uso recreativo y práctico'),
(7, 'Platillos', 20, 'Buen estado', 'Platillos de gimnasia para su uso recreativo y práctico'),
(8, 'Lazos', 5, 'Buen estado', 'Lazos de gimnasia para su uso recreativo y práctico'),
(9, 'Pesa', 1, 'Buen estado', 'Pesa de gimnasia para su uso práctico'),
(10, 'Cronómetro', 1, 'Buen estado', 'Cronometro de uso práctico y recreativo'),
(11, 'Ping pong', 20, 'Buen estado', 'Pelotas de mesas de ping pong para su uso recreativo'),
(12, 'Metro/s', 2, 'Buen estado', 'Metro para uso práctico'),
(13, 'Raqueta/s', 10, 'Buen estado', 'Raquetas de mesas de ping pong para uso recreativo'),
(14, 'Pesa/s pequeña/s', 10, 'Buen estado', 'Pesas pequeñas de gimnasia para uso recreativo y práctico');

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
  `contacto` varchar(11) NOT NULL,
  `contrasena` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `documento`, `nombre_completo`, `correo`, `contacto`, `contrasena`) VALUES
(1, 1111111111, 'Admin', 'admin@admin', '1111111111', 'admin');

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
  MODIFY `id_articulo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
