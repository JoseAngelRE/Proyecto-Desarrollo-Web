-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2021 a las 10:42:18
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `imcuidate`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ShowIMCData` (IN `id_usuario` INT(11))  NO SQL
SELECT peso, altura, resultado FROM imchistorial WHERE imchistorial.id_usuario = id_usuario$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imc`
--

CREATE TABLE `imc` (
  `id_usuario` int(11) NOT NULL,
  `id_imc` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `altura` int(11) NOT NULL,
  `resultado` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `imchistorial`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `imchistorial` (
`id_usuario` int(11)
,`peso` int(11)
,`altura` int(11)
,`resultado` char(20)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(35) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(16) COLLATE utf8_spanish2_ci NOT NULL,
  `fileName` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `contrasena`, `fileName`) VALUES
(1, 'root', 'rootcorreo@outlook.com', 'password', '420c00c00af48db40258068a6383a5a8.jpg'),
(3, 'prueba', 'pruebacorreo@outlook.com', 'password', 'f3f0dfeced88ee5d52d2bbe5a3fa9847.jpg');

-- --------------------------------------------------------

--
-- Estructura para la vista `imchistorial`
--
DROP TABLE IF EXISTS `imchistorial`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `imchistorial`  AS SELECT `imc`.`id_usuario` AS `id_usuario`, `imc`.`peso` AS `peso`, `imc`.`altura` AS `altura`, `imc`.`resultado` AS `resultado` FROM `imc` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imc`
--
ALTER TABLE `imc`
  ADD PRIMARY KEY (`id_imc`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imc`
--
ALTER TABLE `imc`
  MODIFY `id_imc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imc`
--
ALTER TABLE `imc`
  ADD CONSTRAINT `imc_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
