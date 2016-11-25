-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2016 a las 17:29:53
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`codigo`, `nombre`) VALUES
(1, 'Informatica'),
(2, 'Administracion'),
(3, 'Produccion'),
(4, 'Recursos humano'),
(5, 'Produccion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(30) COLLATE utf8_bin NOT NULL,
  `edad` int(11) NOT NULL,
  `salario` double DEFAULT NULL,
  `comision` double DEFAULT NULL,
  `codigoDepartamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`codigo`, `nombre`, `apellido`, `edad`, `salario`, `comision`, `codigoDepartamento`) VALUES
(1, 'Ciara', 'Lewis', 23, 2537, 284, 5),
(2, 'Tyler', 'Hammond', 44, 2964, 724, 5),
(3, 'Sade', 'Gray', 30, 2368, 770, 2),
(4, 'Gil', 'Donaldson', 35, 1009, 209, 5),
(5, 'Francesca', 'Garza', 30, 1462, 395, 1),
(6, 'Keely', 'Bryan', 19, 906, 731, 2),
(7, 'Ulla', 'Mccoy', 19, 2179, 248, 3),
(8, 'Simon', 'Hull', 49, 2416, 435, 2),
(9, 'Chester', 'Lloyd', 32, 1562, 360, 2),
(10, 'Carla', 'Jacobs', 20, 2436, 267, 5),
(11, 'Candace', 'Singleton', 20, 1098, 530, 4),
(12, 'Celeste', 'Carpenter', 30, 2801, 555, 4),
(13, 'Xantha', 'Ray', 38, 2034, 243, 3),
(14, 'Unity', 'Navarro', 42, 2375, 717, 4),
(15, 'Daphne', 'Christian', 35, 2475, 403, 5),
(16, 'Eleanor', 'Petty', 19, 1424, 232, 4),
(17, 'Brett', 'Johnson', 50, 2602, 669, 5),
(18, 'Ali', 'Pollard', 30, 1552, 654, 2),
(19, 'Savannah', 'Hicks', 36, 2100, 773, 2),
(20, 'Lunea', 'Stanley', 28, 2363, 341, 1),
(21, 'Igor', 'Shaffer', 32, 2878, 716, 4),
(22, 'Venus', 'Elliott', 31, 1206, 377, 5),
(23, 'Tanek', 'Ware', 30, 1796, 368, 3),
(24, 'Quon', 'Richardson', 30, 1809, 326, 5),
(25, 'Axel', 'Phillips', 49, 2559, 556, 1),
(26, 'Madison', 'Wallace', 19, 2043, 776, 2),
(27, 'Vaughan', 'Warren', 39, 2686, 537, 4),
(28, 'Daphne', 'Peterson', 49, 1787, 232, 4),
(29, 'Calvin', 'Torres', 18, 2207, 630, 1),
(30, 'Moana', 'Mcconnell', 21, 2998, 462, 4),
(31, 'Cairo', 'Hart', 28, 1427, 757, 4),
(32, 'Barrett', 'Gilmore', 19, 1867, 274, 3),
(33, 'Phyllis', 'Green', 50, 1192, 360, 1),
(34, 'Laith', 'Horton', 30, 2048, 682, 2),
(35, 'Fatima', 'Bush', 25, 1134, 402, 3),
(36, 'Shelley', 'Ford', 18, 2325, 750, 1),
(37, 'Oren', 'Rodriquez', 47, 1102, 400, 3),
(38, 'Karina', 'Clements', 39, 991, 296, 5),
(39, 'Amal', 'Bowman', 31, 2548, 787, 2),
(40, 'Germane', 'Burke', 20, 946, 249, 3),
(41, 'Abdul', 'Mendoza', 39, 1328, 559, 4),
(42, 'Rajah', 'Fowler', 50, 1684, 368, 3),
(43, 'Solomon', 'England', 39, 1109, 354, 2),
(44, 'Kieran', 'Hampton', 30, 2265, 306, 1),
(45, 'Tanya', 'Harding', 23, 1508, 236, 2),
(46, 'Slade', 'Orr', 42, 1287, 612, 4),
(47, 'Carl', 'Larsen', 34, 1144, 399, 1),
(48, 'Quyn', 'Day', 42, 1812, 629, 2),
(49, 'Wesley', 'West', 32, 2748, 764, 5),
(50, 'Tad', 'Witt', 45, 2639, 379, 3),
(51, 'Rylee', 'Curtis', 39, 2476, 769, 2),
(52, 'Oprah', 'Thornton', 26, 1395, 251, 1),
(53, 'Charity', 'Moses', 30, 2582, 342, 1),
(54, 'Latifah', 'Chambers', 35, 2743, 687, 4),
(55, 'Donna', 'Bond', 39, 2587, 476, 4),
(56, 'Grace', 'Brady', 33, 1959, 716, 5),
(57, 'Heather', 'Donovan', 20, 2488, 754, 4),
(58, 'Rebekah', 'Cohen', 23, 2272, 495, 3),
(59, 'Kylynn', 'Meyers', 24, 1595, 462, 1),
(60, 'Dora', 'Boone', 49, 1973, 200, 2),
(61, 'Cally', 'Ferguson', 20, 2206, 549, 5),
(62, 'Calista', 'Melendez', 22, 2526, 412, 2),
(63, 'Demetria', 'Lyons', 38, 2230, 502, 4),
(64, 'Sean', 'Reynolds', 32, 2243, 231, 5),
(65, 'Geraldine', 'Ballard', 42, 1658, 253, 3),
(66, 'Xaviera', 'Mccall', 34, 2368, 792, 1),
(67, 'David', 'Hicks', 33, 2126, 257, 1),
(68, 'Malachi', 'Bolton', 32, 1605, 413, 3),
(69, 'Breanna', 'Daugherty', 21, 2583, 406, 1),
(70, 'Rogan', 'Savage', 48, 2409, 740, 2),
(71, 'Colorado', 'Trujillo', 32, 1966, 493, 1),
(72, 'Kenneth', 'Sears', 35, 2105, 213, 1),
(73, 'Drew', 'Cummings', 46, 2993, 604, 2),
(74, 'Rosalyn', 'Caldwell', 33, 1332, 586, 3),
(75, 'Aladdin', 'Fuentes', 41, 2100, 415, 2),
(76, 'Belle', 'Valenzuela', 36, 1087, 583, 1),
(77, 'Gemma', 'Trevino', 33, 2182, 565, 3),
(78, 'Neil', 'Joyner', 29, 2690, 472, 3),
(79, 'Rose', 'Hatfield', 21, 2476, 247, 1),
(80, 'Echo', 'Blankenship', 45, 1227, 299, 4),
(81, 'Portia', 'Glenn', 44, 1271, 502, 4),
(82, 'Cheryl', 'Burt', 31, 2395, 393, 4),
(83, 'Eden', 'Oneill', 27, 1887, 754, 1),
(84, 'Bertha', 'Cantu', 29, 2273, 395, 5),
(85, 'Prescott', 'Roman', 27, 2174, 376, 3),
(86, 'Hayley', 'Cobb', 19, 2072, 660, 4),
(87, 'Josephine', 'Shannon', 38, 1755, 551, 2),
(88, 'Tallulah', 'Richardson', 37, 1382, 248, 5),
(89, 'Hyacinth', 'Mcmahon', 40, 1298, 522, 3),
(90, 'Sasha', 'Garcia', 41, 1682, 653, 5),
(91, 'Ryan', 'Peck', 31, 2310, 683, 4),
(92, 'Channing', 'Mcgee', 35, 2886, 657, 3),
(93, 'Keely', 'Puckett', 27, 2736, 649, 3),
(94, 'Hilel', 'Moody', 31, 2056, 487, 2),
(95, 'Aspen', 'Howell', 32, 2569, 374, 3),
(96, 'Rogan', 'Olsen', 32, 1892, 402, 3),
(97, 'Sophia', 'Bowman', 23, 1007, 468, 1),
(98, 'Fuller', 'Stone', 26, 2924, 381, 4),
(99, 'Callum', 'Lynn', 18, 1302, 634, 1),
(100, 'Montana', 'Alexander', 24, 1654, 354, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(45) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(45) COLLATE utf8_bin NOT NULL,
  `password` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `usuario`, `password`) VALUES
(1, 'Alberto', 'Ortega', 'administrador', 'administrador'),
(2, 'Laura', 'Cañamero', 'laura', 'laura'),
(3, 'Alvaro', 'ortiz', 'alvaro', 'alvaro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigoDepartamento` (`codigoDepartamento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`codigoDepartamento`) REFERENCES `departamento` (`codigo`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
