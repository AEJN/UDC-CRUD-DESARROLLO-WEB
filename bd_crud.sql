-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2023 a las 01:32:21
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleos`
--

CREATE TABLE `empleos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `areaTrabajo` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `nivel` varchar(100) NOT NULL,
  `sueldo` decimal(10,2) NOT NULL,
  `funciones` text NOT NULL,
  `cargoJefe` varchar(50) NOT NULL,
  `cc_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empleos`
--

INSERT INTO `empleos` (`id`, `nombre`, `categoria`, `areaTrabajo`, `empresa`, `nivel`, `sueldo`, `funciones`, `cargoJefe`, `cc_usuario`) VALUES
(323, 'papiarca', 'cantante', 'estudio', 'picheros', '1000', '10000000.00', 'cantar y componer', 'productor', 432123),
(12, 'adrian', 'programador', 'distancia', 'Los Reales SAS', 'Junior', '1.00', 'asd', 'full stack', 1043294519);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cc` int(11) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cc`, `pass`, `nombre`, `apellido`, `genero`, `email`) VALUES
(720, 'abc', 'muralla', 'arrieta', 'M', 'arrietamuralla@hotmail.com'),
(123456, 'adrian', 'adrian', 'jadid', 'M', 'adrian@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleos`
--
ALTER TABLE `empleos`
  ADD PRIMARY KEY (`cc_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
