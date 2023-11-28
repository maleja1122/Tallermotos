-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2023 a las 14:26:05
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tallermotos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(80) NOT NULL,
  `celular` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `nombre`, `apellido`, `celular`, `email`, `contraseña`) VALUES
(1, 'pepito', 'Reyes', 2310245, 'usuario1@gmail.com', '$2y$10$cBZowikZQCqFTTkayv0tWuhA.SNGHnipHLBjYLQd7zj3tohD3qOQa'),
(2, 'carlitos', 'chachan', 2147483647, 'chch@gmail', '$2y$10$KZ8mENf6vWylD/FgVR1eteyfZ6X8iimBe5QleLM5lXNM1eJGQoOKO'),
(3, 'dcdc', 'edwed', 0, 'edew', '$2y$10$QMXZl3DEOcLiZJ7INR.wvu0uVlkef2i3EUCis314vRxWwe1NOywEK'),
(4, 'SS', 'SS', 0, 'SS', '$2y$10$mhRmY60TmeAmxZ1AiwHfyOcJX0YGwe/cKvJNzgfnQI67eMQTkWObi'),
(5, 'SS', 'SS', 0, 'SS', '$2y$10$sMxw062apvs5WF6uL5I2t.pqSlCI9ymHxwads62bN0oj1tq5Lyls2'),
(6, 'COCO', 'COCO', 2563, 'SSS', '$2y$10$ujraE63Bn4gfU5IARYTA0ewTKklSTG2gUG3i7Gt5i8nfKEmju40y6'),
(7, 'carlitos', 'salazar', 123456, 'us@gmail.com', '$2y$10$I/Nm1qLXooAn0PbX/cM3uuWewG6jU/gMBUt3RclnwB2DcD.5aaVyi'),
(8, 'Alvaro', 'qqq', 32645, '1@gmail.com', '$2y$10$vNTSCc.QrBLMmgzL9G7FIeiErjKkLDc2JSuKWLwWRmvb9omMf2VtO'),
(9, 'pasta', 'arroz', 123456, 'PATASCONARROZ@GMAIL.COM', '$2y$10$B/oruZHAdJeshDkDHltVoOPbGUz23.ACIrXIXRgqjdZFAYzBsGNpS'),
(10, 'xasdc', 'dcdcs', 30422452, 'efeffr@gamil', '$2y$10$GJaBoc2QWTgcj0ZXXSEaU.n32lsHkbPswZR5C.NOrQu90369K8sQa'),
(11, 'Steven', 'Luar', 258963, 'luar@gmail.com', '$2y$10$QOmQ4hWakNZgj/HO840sKe.PG8acFwq2zJza/Tc59SMHMtIqe0K76');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` int(11) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `id_mecanico` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `moto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id_cita`, `hora`, `fecha`, `id_mecanico`, `id_cliente`, `moto`) VALUES
(16, '08:38:11', '2023-11-08', 4, 84, 1),
(17, '11:40:18', '2023-11-22', 1, 98, 2),
(18, '00:20:23', '0000-00-00', 10, 100, 2),
(19, '00:20:23', '0000-00-00', 5, 100, 10),
(20, '12:17:00', '2023-11-14', 5, 84, 1),
(21, '14:08:00', '2023-11-14', 12, 101, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `celular` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasenia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `celular`, `email`, `contrasenia`) VALUES
(79, 'Ale', 'Reyes', 2147483647, 'media2022@gmail.com', '$2y$10$dkOa0vxPoyObzsf.9hM5j.7ZlQsWavqLsSQDaaLKSszxaUSblTGkS'),
(80, 'Ale', 'kjhh', 2147483647, 'pepi@gmail', '$2y$10$yB0ymem3SEKsxy0ClN6CRu/4wwnmV0VclWrQwXja/1p0tZrOmve72'),
(81, 'AA', 'AA', 0, 'AA', '$2y$10$S26nY3Ges3S5qj0goLG5jem2pYFEqVjx1dkQNAMMUEA4Q7/BEZzAS'),
(82, 'A', 'kjhh', 2147483647, 'media2022@gmail.com', '$2y$10$HB6ViOmxtZyZnbpGTnwstuitMnDG58QbQTtBhq7RUVN.yRwBcG/xK'),
(83, 'Ale', 'Reyes', 2147483647, 'usuario1@gmail.com', '$2y$10$fOrHi.tqMByAQ2v5V6.NYOOu.tCpVZ/BbjBUB2ZWC36WRqLoXqUqC'),
(84, 'Alvaro', 'LALA', 2123, 'lala@gmail.com', '$2y$10$yUwLqO5JbUyus4T2rnJoneRZ/ozHmtz58CQjsfZu41jBZWK8nmSXa'),
(85, 'jjjh', 'Reyes', 2147483647, 'media@gmail.com', '$2y$10$AmWoENzj/PrVatpKXYYHoe90KM.2n0ROJp4z.Oyd81wEb0qvyznE6'),
(86, 'lizeth', 'caamaño', 123654, 'liz@gmail.com', '$2y$10$CA.h/FXldaEWuuu.AhKAEe1TaCQN1DYWvex4AkbSfyS7oNQp.Doju'),
(87, 'juan', 'camilo', 3456289, 'juan@gmail.com', '$2y$10$m7592e91i7Ez9LdW5RKMUOdGQpEyBWXvigM/Q1/vLesmyfa11Desi'),
(88, 'charlie', 'charlie', 456123, 'charlie@gmail.com', '$2y$10$UwFePrx1zOnp6T9.vSFX4OV1O/zaLYlntfMH1F/Adsfq13mY3LFxW'),
(89, 'hh', 'dd', 0, 'dd', '$2y$10$unM7Bb1ZlOxvnEcyOnB/3u3PDR7TLot3yW63/rOj3vzVtA2cySLpW'),
(90, 'Ale', 'Reyes', 2147483647, 'ali@gmail.com', '$2y$10$hDHQkVMqtdTRBhBpoyQcWuyqE3i7YNmLOaJ/Ht14FHegTLVL5BsMm'),
(91, 'C', 'C', 0, 'C@C.GMAIL', '$2y$10$jp86KlaTfCSI32oQoHnrlex3ZSx9aPqm01jv5BaRSw5hbzFKaTQ8.'),
(92, 'Ale', 'Alarcon', 2147483647, 'media@gmail.com', '$2y$10$A5LLYPPuXkYaLhnONhWwLuwDUlF7CyPikyFATF5JFZRXtDNK/4rSO'),
(93, 'as', 'as', 0, 'as@as', '$2y$10$baxuuxkMg7qOMXfoKoGsnuZNy2vkyD2fD8UZE2jcm8KaQaAcw2rgu'),
(94, 'LuisaPrueba', 'AlarconPrueba', 1031180334, 'LuisaP@gmail.com', '$2y$10$/idYIb5/RAYQT6R.v.uIJOxrqHl2sX405rfaaJMu16zVgocKf8K76'),
(95, 'Ale', 'Reyes', 2147483647, 'media@gmail.com', '$2y$10$3sRvb9IzzCsXysenB1RqPel/eI0lwpPaBDCByJxvGCu38BAGMpVuW'),
(96, 'Ale', 'kjhh', 2147483647, 'usuario1@gmail.com', '$2y$10$YTArxmYE38D88MKP9IqH6.AmFsxGaBMYDS.OQyBY1Onoii3jJ3OpW'),
(97, 'Ale', 'Salazar', 2147483647, 'AleSalazar@gmail.com', '$2y$10$xdyKu3M4eVS6gz6wiVD.GO5HSlp8G2kndpzIVnMCbIc0lKjMlMvo.'),
(98, 'feid', 'ferxxo', 3102456, 'ferxxo100@gmail.com', '$2y$10$hJQV3dM25VBCIVKg2nC9..j7D.1dCWKAUdM0gpI5kI5x6Zky8xio6'),
(99, 'Carlos', 'Andres', 2147483647, 'carlo@gmail.com', '$2y$10$ihEzRsRlJ8xoQAYEaCy0Q.ESaht49DgxE/ORIj3sg9lKp83KyMzR.'),
(100, 'Chanclas', 'pepas', 2147483647, 'chanclas@gmail.com', '$2y$10$/x9brQrB8OxXmkCx3ANvie1TJpo0sJoVdcgtlqT4uTGPmUXlZPF/W'),
(101, 'Juanito', 'Suarez', 2147483647, 'suarez@gmail.com', '$2y$10$Nkq6mn647RHo8cD2p6FpouwJWC5k/se1NOEtoUBSt.rExsMSNl26O');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanico`
--

CREATE TABLE `mecanico` (
  `id_mecanico` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `celular` int(11) NOT NULL,
  `especializacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mecanico`
--

INSERT INTO `mecanico` (`id_mecanico`, `nombre`, `apellido`, `celular`, `especializacion`) VALUES
(1, 'Toño', 'cruz', 0, 'mecánico general'),
(2, 'andres', 'herrera', 0, 'mecánico general'),
(3, 'Ale', 'kjhh', 0, '3043756021'),
(4, 'carlos', 'Reyes', 0, '30124598'),
(5, 'pepito', 'Reyes', 2147483647, 'Mecanico General'),
(6, 'jjjh', 'opez', 30215478, 'Mecanico General'),
(7, 'cristian', 'Salazar', 2147483647, 'Mecanico General'),
(8, 'jjjh', 'kjhh', 2147483647, 'Mecanico General'),
(9, 'Alvaro', 'kjhh', 2147483647, 'Mecanico General'),
(10, 'Alvaro', 'kjhh', 2147483647, 'Mecanico General'),
(11, 'jjjh', 'dsccdc', 5145, 'Mecanico General'),
(12, 'TABLA', 'ARMARIO', 3012145, 'Mecanico General'),
(13, 'Alvaro', 'Wili', 30245879, 'Mecanico General');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moto`
--

CREATE TABLE `moto` (
  `id_moto` int(11) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `año` int(5) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `moto`
--

INSERT INTO `moto` (`id_moto`, `placa`, `marca`, `año`, `id_cliente`) VALUES
(1, 'awa312', 'Ducati', 2019, 0),
(2, 'qwk23e', 'BMW', 2020, 0),
(3, 'awa312', 'Ducati', 2019, 3),
(4, '34435', 'ducati', 2018, 88),
(5, '123', 'ducati', 2024, 91),
(6, '123', 'ducati', 4554, 100),
(7, '123efr', 'ducati', 2024, 98),
(8, '123efr', 'bmw', 2025, 99),
(9, '123efr', 'ducati', 2026, 84),
(10, '777www', 'Ducati', 2030, 98),
(11, 'kql546', 'ducati', 2020, 101);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moto_mecanico`
--

CREATE TABLE `moto_mecanico` (
  `id_moto_mecanico` int(11) NOT NULL,
  `id_mecanico` int(11) NOT NULL,
  `id_moto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `moto_mecanico`
--

INSERT INTO `moto_mecanico` (`id_moto_mecanico`, `id_mecanico`, `id_moto`) VALUES
(1, 1, 1),
(2, 2, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_mecanico` (`id_mecanico`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `moto` (`moto`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `mecanico`
--
ALTER TABLE `mecanico`
  ADD PRIMARY KEY (`id_mecanico`);

--
-- Indices de la tabla `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id_moto`);

--
-- Indices de la tabla `moto_mecanico`
--
ALTER TABLE `moto_mecanico`
  ADD PRIMARY KEY (`id_moto_mecanico`),
  ADD KEY `id_mecanico` (`id_mecanico`),
  ADD KEY `id_moto` (`id_moto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de la tabla `mecanico`
--
ALTER TABLE `mecanico`
  MODIFY `id_mecanico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `moto`
--
ALTER TABLE `moto`
  MODIFY `id_moto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `moto_mecanico`
--
ALTER TABLE `moto_mecanico`
  MODIFY `id_moto_mecanico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`id_mecanico`) REFERENCES `mecanico` (`id_mecanico`),
  ADD CONSTRAINT `cita_ibfk_3` FOREIGN KEY (`moto`) REFERENCES `moto` (`id_moto`);

--
-- Filtros para la tabla `moto_mecanico`
--
ALTER TABLE `moto_mecanico`
  ADD CONSTRAINT `moto_mecanico_ibfk_1` FOREIGN KEY (`id_mecanico`) REFERENCES `mecanico` (`id_mecanico`),
  ADD CONSTRAINT `moto_mecanico_ibfk_2` FOREIGN KEY (`id_moto`) REFERENCES `moto` (`id_moto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
