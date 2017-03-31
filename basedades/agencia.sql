-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-03-2017 a las 15:15:14
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

CREATE TABLE `actor` (
  `nif` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nom` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `cognom1` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `cognom2` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcio` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `sexe` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `actor`
--

INSERT INTO `actor` (`nif`, `nom`, `cognom1`, `cognom2`, `descripcio`, `sexe`, `foto`, `id`) VALUES
('23232323F', 'Iván', 'Mir', 'Mir', '', 'Masculí', 'foto1.jpg', 1),
('45454545C', 'Yaritza', 'Aburdene', 'Aburdene', '', 'Femení', 'foto2.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencia`
--

CREATE TABLE `agencia` (
  `id` int(20) NOT NULL,
  `cif` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nom` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `agencia`
--

INSERT INTO `agencia` (`id`, `cif`, `nom`) VALUES
(1, '88888888G', 'Agència 1'),
(2, '99999999Y', 'Agència 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `id` int(20) NOT NULL,
  `nif` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nom` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `cognom1` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `cognom2` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcio` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`id`, `nif`, `nom`, `cognom1`, `cognom2`, `descripcio`) VALUES
(1, '22222222B', 'Pepe', 'Peña', 'Salgado', ''),
(2, '33333333C', 'María', 'Fernández', 'López', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra`
--

CREATE TABLE `obra` (
  `id` int(20) NOT NULL,
  `nom` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcio` text COLLATE utf8_spanish2_ci NOT NULL,
  `datainici` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `datafi` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `tipus_obra` int(20) NOT NULL,
  `director` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`id`, `nom`, `descripcio`, `datainici`, `datafi`, `tipus_obra`, `director`) VALUES
(2, 'Hamlet', 'La tragedia de Hamlet, Príncipe de Dinamarca, o simplemente Hamlet, es una tragedia del dramaturgo inglés William Shakespeare.', '2017-03-20', '2017-03-24', 1, 1),
(3, 'Otelo', 'El moro de Venecia es una obra teatral de Shakespeare escrita alrededor de 1603. Otelo es una tragedia, como Hamlet, Macbeth y El rey Lear.', '2017-04-03', '2017-04-07', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra_actor`
--

CREATE TABLE `obra_actor` (
  `id` int(20) NOT NULL,
  `id_obra` int(20) NOT NULL,
  `id_actor` int(20) NOT NULL,
  `tipus_paper` int(20) NOT NULL,
  `personatge` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `obra_actor`
--

INSERT INTO `obra_actor` (`id`, `id_obra`, `id_actor`, `tipus_paper`, `personatge`) VALUES
(1, 2, 1, 1, '0'),
(2, 3, 2, 2, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipus_obra`
--

CREATE TABLE `tipus_obra` (
  `id` int(20) NOT NULL,
  `descripcio` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipus_obra`
--

INSERT INTO `tipus_obra` (`id`, `descripcio`) VALUES
(1, 'Teatre'),
(2, 'Dansa'),
(4, 'Cinema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipus_paper`
--

CREATE TABLE `tipus_paper` (
  `id` int(20) NOT NULL,
  `tipus` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipus_paper`
--

INSERT INTO `tipus_paper` (`id`, `tipus`) VALUES
(6, 'primari'),
(7, 'secundari'),
(8, 'extra'),
(9, 'especialista'),
(10, 'repartiment');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuari`
--

CREATE TABLE `usuari` (
  `id` int(20) NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `rol` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuari`
--

INSERT INTO `usuari` (`id`, `username`, `password`, `rol`) VALUES
(2, 'admin', 'admin', 'administrador'),
(3, 'tecnic', 'tecnic', 'tecnic');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `agencia`
--
ALTER TABLE `agencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `obra_actor`
--
ALTER TABLE `obra_actor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipus_obra`
--
ALTER TABLE `tipus_obra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipus_paper`
--
ALTER TABLE `tipus_paper`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actor`
--
ALTER TABLE `actor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `agencia`
--
ALTER TABLE `agencia`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `obra`
--
ALTER TABLE `obra`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `obra_actor`
--
ALTER TABLE `obra_actor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipus_obra`
--
ALTER TABLE `tipus_obra`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipus_paper`
--
ALTER TABLE `tipus_paper`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuari`
--
ALTER TABLE `usuari`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
