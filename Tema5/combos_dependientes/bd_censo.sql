-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2024 a las 00:08:50
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_censo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departamento` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `departamento`) VALUES
(1, 'CHUQUISACA'),
(2, 'LA PAZ'),
(3, 'COCHABAMBA'),
(4, 'ORURO'),
(5, 'POTOSÍ'),
(6, 'TARIJA'),
(7, 'SANTA CRUZ'),
(8, 'BENI'),
(9, 'PANDO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocupaciones`
--

CREATE TABLE `ocupaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ocupaciones`
--

INSERT INTO `ocupaciones` (`id`, `nombre`) VALUES
(1, 'Agricultor'),
(2, 'Programador'),
(3, 'Ing. en Ciencias de la Computacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombres` varchar(70) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `ocupacion_id` tinyint(4) NOT NULL,
  `fotografia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombres`, `apellidos`, `edad`, `sexo`, `ocupacion_id`, `fotografia`) VALUES
(1, 'Juan', 'Perez', 46, 'M', 1, '664e55ab13e0c.png'),
(2, 'Ramiro', 'Zambrana', 34, 'M', 2, '661462795a07b.jpg'),
(4, 'Pedro2', 'Inchausti2', 65, 'M', 3, '664e5830ece1f.png'),
(6, 'Et enim quaerat ut v', 'Ipsum delectus ut c', 81, 'F', 2, '664e588b554a8.png'),
(7, 'Ramiro', 'Ramirez', 5, 'M', 2, '661462a6d387c.png'),
(8, 'Et illo impedit ita', 'Voluptatem voluptate', 96, 'M', 2, '66145e607f26c.fw'),
(9, 'Quis voluptatibus is', 'Voluptatem recusand', 84, 'M', 1, '661459edc8ccc.png'),
(10, 'Labore ea voluptatem', 'Sint quo voluptatem', 42, 'F', 2, '66145a32e02b3.jpg2'),
(11, 'Accusantium aut quod', 'Duis vel et pariatur', 17, 'M', 2, '664e5ea576f8a.png'),
(17, 'Ullam autem sed exce', 'Recusandae Exercita', 64, 'F', 2, '664e594d291d8.jpg'),
(18, 'Temporibus dicta eos', 'Ipsa commodi illo v', 14, 'F', 1, '664e5a1bf14c9.31'),
(19, 'Ex rerum perspiciati', 'Deserunt quis minima', 31, 'F', 2, '664e5d6a763a1.jpg'),
(20, 'Qui laudantium nisi', 'Debitis fuga Distin', 50, 'M', 2, '664e5d90abc66.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provincia` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iddepartamento` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `provincia`, `iddepartamento`) VALUES
(1, 'Oropeza', 1),
(2, 'Azurduy', 1),
(3, 'Zudáñez', 1),
(4, 'Tomina', 1),
(5, 'Hernando Siles', 1),
(6, 'Yamparaez', 1),
(7, 'Nor Cinti', 1),
(8, 'Belisario Boeto', 1),
(9, 'Sur Cinti', 1),
(10, 'Luis Calvo', 1),
(11, 'Murillo', 2),
(12, 'Omasuyos', 2),
(13, 'Pacajes', 2),
(14, 'Camacho', 2),
(15, 'Muñecas', 2),
(16, 'Larecaja', 2),
(17, 'Franz Tamayo', 2),
(18, 'Ingavi', 2),
(19, 'Loayza', 2),
(20, 'Inquisivi', 2),
(21, 'Sud Yungas', 2),
(22, 'Los Andes', 2),
(23, 'Aroma', 2),
(24, 'Nor Yungas', 2),
(25, 'Abel Iturralde', 2),
(26, 'Bautista Saavedra', 2),
(27, 'Manco Kapac', 2),
(28, 'Gualberto Villarroel', 2),
(29, 'Gral. Jose Manuel Pando', 2),
(30, 'Caranavi', 2),
(31, 'Cercado', 3),
(32, 'Campero', 3),
(33, 'Ayopaya', 3),
(34, 'Esteban Arze', 3),
(35, 'Arani', 3),
(36, 'Arque', 3),
(37, 'Capinota', 3),
(38, 'German Jordan', 3),
(39, 'Quillacollo', 3),
(40, 'Chapare', 3),
(41, 'Tapacari', 3),
(42, 'Carrasco', 3),
(43, 'Mizque', 3),
(44, 'Punata', 3),
(45, 'Bolivar', 3),
(46, 'Tiraque', 3),
(47, 'Avaroa', 4),
(48, 'Carangas', 4),
(49, 'Sajama', 4),
(50, 'Litoral', 4),
(51, 'Poopo', 4),
(52, 'Pantaleon Dalence', 4),
(53, 'Ladislao Cabrera', 4),
(54, 'Atahuallpa', 4),
(55, 'Saucari', 4),
(56, 'Tomas Barron', 4),
(57, 'Sur Carangas', 4),
(58, 'San Pedro de Totora', 4),
(59, 'Sebastian Pagador', 4),
(60, 'Mejillones', 4),
(61, 'Nor Carangas', 4),
(62, 'Cercado', 4),
(63, 'Tomas Frias', 5),
(64, 'Rafael Bustillo', 5),
(65, 'Cornelio Saavedra', 5),
(66, 'Chayanta', 5),
(67, 'Charcas', 5),
(68, 'Nor Chichas', 5),
(69, 'Alonso de Ibañez', 5),
(70, 'Sud Chichas', 5),
(71, 'Nor Lipez', 5),
(72, 'Sud Lipez', 5),
(73, 'Jose Maria Linares', 5),
(74, 'Antonio Quijarro', 5),
(75, 'Gral. Bernardino Bilbao', 5),
(76, 'Daniel Campos', 5),
(77, 'Modesto Omiste', 5),
(78, 'Enrique Baldivieso', 5),
(79, 'Arce', 6),
(80, 'Gran Chaco', 6),
(81, 'Avilez', 6),
(82, 'Mendez', 6),
(83, 'Burnet O connor', 6),
(84, 'Cercado', 6),
(85, 'Andres Ibañez', 7),
(86, 'Warnes', 7),
(87, 'Velasco', 7),
(88, 'Ichilo', 7),
(89, 'Chiquitos', 7),
(90, 'Sara', 7),
(91, 'Cordillera', 7),
(92, 'Valle Grande', 7),
(93, 'Florida', 7),
(94, 'Obispo Santistéban', 7),
(95, 'Ñuflo de Chavez', 7),
(96, 'Angel Sandoval', 7),
(97, 'Manuel Maria Caballero', 7),
(98, 'German Busch', 7),
(99, 'Guarayos', 7),
(100, 'Vaca Diez', 8),
(101, 'Gral. Jose Ballivian', 8),
(102, 'Yacuma', 8),
(103, 'Moxos', 8),
(104, 'Marban', 8),
(105, 'Mamore', 8),
(106, 'Itenez', 8),
(107, 'Cercado', 8),
(108, 'Nicolas Suarez', 9),
(109, 'Manuripi', 9),
(110, 'Madre de Dios', 9),
(111, 'Abuna', 9),
(112, 'Gral. Federico Roman', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `password`, `nivel`) VALUES
(1, 'admin@sis256.com', '0f3fde0103dd44077c040215a2fabd09a097aecc', 1),
(3, 'docente@sis256.com', '81d4970eea2f9d367906eaff8d054dbcf96810dd', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ocupaciones`
--
ALTER TABLE `ocupaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_persona` (`fotografia`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provincias_iddepartamento_foreign` (`iddepartamento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ocupaciones`
--
ALTER TABLE `ocupaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
