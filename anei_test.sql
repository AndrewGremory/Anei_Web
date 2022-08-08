-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2022 a las 23:40:21
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anei_test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liquidacion`
--

CREATE TABLE `liquidacion` (
  `Id_Liquidacion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `PrecioFinal` int NOT NULL,
  `Id_Lote` int NOT NULL,
  `Id_Lote2` int DEFAULT NULL,
  `ObservacionLote` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `liquidacion`
--

INSERT INTO `liquidacion` (`Id_Liquidacion`, `PrecioFinal`, `Id_Lote`, `Id_Lote2`, `ObservacionLote`) VALUES
('PB - 04/08/2022', 20000, 1, 3, NULL),
('VP - 04/08/2022 - 1', 25000, 11, NULL, NULL),
('VP - 04/08/2022 - 2', 18000, 12, NULL, NULL),
('VP - 04/08/2022 - 3', 17000, 11, NULL, NULL),
('VP - FECHA HOY - 1', 21000, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE `lote` (
  `Id_Lote` int NOT NULL,
  `Nombre_Lote` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Municipio_Lote` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `lote`
--

INSERT INTO `lote` (`Id_Lote`, `Nombre_Lote`, `Municipio_Lote`) VALUES
(1, 'A', 1),
(2, 'B', 1),
(3, 'C', 1),
(4, 'D', 1),
(5, 'A', 2),
(6, 'B', 2),
(7, 'C', 2),
(8, 'D', 2),
(9, 'A', 4),
(10, 'B', 4),
(11, 'C', 4),
(12, 'D', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `Id_Municipio` int NOT NULL,
  `Nombre_Municipio` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`Id_Municipio`, `Nombre_Municipio`) VALUES
(1, 'PUEBLO BELLO'),
(2, 'LA PAZ\r\n'),
(3, 'SAN JUAN DEL CESAR\r\n'),
(4, 'VALLEDUPAR'),
(5, 'AGUSTIN CODAZZI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productores`
--

CREATE TABLE `productores` (
  `Codigo_Unidad_Productiva` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Nombre_Finca` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Estatus` enum('Estandar','T1','T2','T3','Orgánico') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Productor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Cedula` int NOT NULL,
  `Id_Municipio` int NOT NULL,
  `Id_Vereda` int NOT NULL,
  `Cupo_Cafe` int NOT NULL,
  `Cupo_Cacao` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `productores`
--

INSERT INTO `productores` (`Codigo_Unidad_Productiva`, `Nombre_Finca`, `Estatus`, `Productor`, `Cedula`, `Id_Municipio`, `Id_Vereda`, `Cupo_Cafe`, `Cupo_Cacao`) VALUES
('CA2-02', 'COSTA RICA', 'Orgánico', 'MARCOS GUILLERMO MARTINEZ MONTERO', 77185021, 1, 1, 4063, 600),
('CAR-02', 'LAS NUBES', 'Orgánico', 'JOSE JAIR QUINTANA VARGAS', 77091749, 1, 2, 18025, 600),
('CAR-04', 'LA ENRRAMADA', 'Orgánico', 'ARMANDO CARRILLO ALARCON', 2983693, 1, 2, 2422, 1350),
('CAR-06', 'SINAI 2', 'Orgánico', 'OMAR ANTONIO PEREZ PEREZ', 77019406, 1, 2, 5736, 450),
('CAR-07', 'BUENA VISTA', 'Orgánico', 'MIRIAM LAZARO QUINTERO', 26952670, 1, 2, 21938, 900),
('CHUN-08', 'BUENOS AIRES', 'Orgánico', 'ALEXIS YAMIL GUEVARA ERAZO', 77167094, 1, 3, 8884, 800),
('COST1-02', 'MIRA FLORES', 'Orgánico', 'RICARDO QUINTANA QUINTERO', 5044484, 1, 4, 18470, 200),
('CPL-06', 'NUEVA IDEA', 'Orgánico', 'CASIMIRO VILLAFAÑA ARROYO', 77070078, 1, 5, 1134, 740),
('LF-05', 'BUENOS AIRES', 'Orgánico', 'JHON JAIRO CABALLERO BOLIVAR', 77070058, 1, 6, 2231, 256),
('LF-33', 'LOS RECUERDOS', 'Orgánico', 'OSCAR JAVIER IZQUIERDO TORRES', 18990336, 1, 6, 5610, 400),
('LFA-53', 'NUEVA IDEA', 'Orgánico', 'MARIA ELENA LOPEZ FLOREZ', 49740686, 1, 7, 9118, 90),
('LFSY-40', 'LA HERENCIA', 'Orgánico', 'ALDEMAR ALFONSO ESTRADA GUERRERO', 77020922, 1, 8, 6706, 840),
('LPE-02', 'LA CELESTINA', 'Orgánico', 'JOSE MANUEL FARELO CARVAJAL', 94316091, 2, 9, 5376, 2050),
('LPM-01', 'EL JARDIN', 'Orgánico', 'JOSE CLEMENTE VASQUEZ OÑATE', 77035224, 2, 10, 2177, 2152),
('MAC-20', 'BELLAVISTA', 'Orgánico', 'MARIA ELENA MEJIA ALBERTO', 27008278, 3, 11, 2235, 70),
('MAC-21', 'EL SEGUNDO', 'Orgánico', 'JOSE LUIS MALO MOJICA', 1192798587, 3, 11, 6777, 350),
('MAM-03', 'SAN LUIS', 'Orgánico', 'CARLOS DANIEL ESCOBAR PULIDO', 4980189, 1, 12, 9038, 270),
('MAM-06', 'ESPERANZA', 'Orgánico', 'HEBERT SEGUNDO TORRES RAMOS', 77034320, 1, 12, 3310, 1080),
('MAM-14', 'KEIRA', 'Orgánico', 'VICENTE VILLAFAÑA ARROYO', 18990498, 1, 12, 2704, 300),
('MAM-19', 'EL EDEN', 'Orgánico', 'LUIS ANDRES MESTRE RAMOS', 77070123, 1, 12, 1087, 350),
('MAM-25', 'SAN ISIDRO', 'Orgánico', 'SOL MARINA QUIHAY TRIANA', 49782146, 1, 12, 810, 200),
('MAM-30', 'LA ISLA', 'Orgánico', 'NELVIS TORRES MARQUEZ', 1193187500, 1, 12, 4040, 800),
('MAM-32', 'BRISAS DE SAN PEDRO', 'Orgánico', 'SEGUNDO SANTAMARIA PINZON', 5553679, 1, 12, 2557, 160),
('MAM-33', 'MACONDO', 'Orgánico', 'EMETERIO TORRES CRESPO', 18990370, 1, 12, 1458, 160),
('MAM-38', 'MI FUTURO', 'Orgánico', 'WILLIAN ELIAS MESTRE MARQUEZ', 1133569449, 1, 12, 1409, 200),
('MAM-40', 'EL PANORAMA', 'Orgánico', 'RAFAEL ARNOL TORRES VILLAFAÑA', 1133569317, 1, 12, 5015, 400),
('MAM-49', 'CAMPO ALEGRE', 'Orgánico', 'LUIS FRANCISCO PEREZ TORRES', 1782639, 1, 12, 1965, 400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

CREATE TABLE `recibo` (
  `Codigo_Recibo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Id_Productor` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Kilos_brutos` int NOT NULL,
  `Kilos_Netos` int NOT NULL,
  `Saco_Fique` int DEFAULT NULL,
  `Estopa` int DEFAULT NULL,
  `Id_Usuario` int NOT NULL,
  `Estado_Analisis_Fisico` enum('Pendiente','Evaluado') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pendiente',
  `Estado_Analisis_Sensorial` enum('Pendiente','Evaluado') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pendiente',
  `Cupo_Disponible` int DEFAULT NULL,
  `Fijacion` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `recibo`
--

INSERT INTO `recibo` (`Codigo_Recibo`, `Id_Productor`, `Kilos_brutos`, `Kilos_Netos`, `Saco_Fique`, `Estopa`, `Id_Usuario`, `Estado_Analisis_Fisico`, `Estado_Analisis_Sensorial`, `Cupo_Disponible`, `Fijacion`) VALUES
('PB - 04/08/2022', 'CAR-02', 20, 19, 1, 1, 1, 'Pendiente', 'Pendiente', 500, NULL),
('VP - 04/08/2022 - 1', 'CAR-06', 30, 28, 2, 1, 1, 'Pendiente', 'Pendiente', 1000, NULL),
('VP - 04/08/2022 - 2', 'CAR-04', 15, 12, 1, 1, 1, 'Pendiente', 'Pendiente', 1000, NULL),
('VP - 04/08/2022 - 3', 'COST1-02', 18, 15, 1, 2, 1, 'Pendiente', 'Pendiente', 500, NULL),
('VP - FECHA HOY - 1', 'MAM-30', 20, 19, 2, NULL, 1, 'Pendiente', 'Pendiente', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `Id_Rol` int NOT NULL,
  `Nombre_Rol` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`Id_Rol`, `Nombre_Rol`) VALUES
(1, 'Admin'),
(2, 'Recibo'),
(3, 'Analisista_Fisico'),
(4, 'Analista_Sensorial'),
(5, 'Liquidacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_Usuario` int NOT NULL,
  `Nombre_Usuario` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Id_Rol` int NOT NULL,
  `Id_Municipio` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_Usuario`, `Nombre_Usuario`, `Id_Rol`, `Id_Municipio`) VALUES
(1, 'Andres Amaya', 1, 4),
(2, 'Recibo', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vereda`
--

CREATE TABLE `vereda` (
  `Id_Vereda` int NOT NULL,
  `Nombre_Vereda` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `vereda`
--

INSERT INTO `vereda` (`Id_Vereda`, `Nombre_Vereda`) VALUES
(1, 'EL_CAIRO_2'),
(2, 'CARACOLI'),
(3, 'NUEVO_HORIZONTE'),
(4, 'COSTA_RICA_1'),
(5, 'CUESTA_PLATA'),
(6, 'LA_FLORIDA'),
(7, 'ANTIGUOS'),
(8, 'BUNSICHAMA'),
(9, 'LOS_ENCANTOS'),
(10, 'EL_PLACER'),
(11, 'MAROCASO'),
(12, 'MAMARWA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `liquidacion`
--
ALTER TABLE `liquidacion`
  ADD PRIMARY KEY (`Id_Liquidacion`),
  ADD KEY `liquidacion_ibfk_1` (`Id_Lote`),
  ADD KEY `liquidacion_ibfk_4` (`Id_Lote2`);

--
-- Indices de la tabla `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`Id_Lote`),
  ADD KEY `Municipio_Lote` (`Municipio_Lote`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`Id_Municipio`);

--
-- Indices de la tabla `productores`
--
ALTER TABLE `productores`
  ADD PRIMARY KEY (`Codigo_Unidad_Productiva`),
  ADD KEY `Id_Municipio` (`Id_Municipio`),
  ADD KEY `Id_Vereda` (`Id_Vereda`);

--
-- Indices de la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD PRIMARY KEY (`Codigo_Recibo`),
  ADD KEY `Id_Usuario` (`Id_Usuario`),
  ADD KEY `Id_Productor` (`Id_Productor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`Id_Rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_Usuario`),
  ADD KEY `usuarios_ibfk_1` (`Id_Rol`),
  ADD KEY `usuarios_ibfk_2` (`Id_Municipio`);

--
-- Indices de la tabla `vereda`
--
ALTER TABLE `vereda`
  ADD PRIMARY KEY (`Id_Vereda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lote`
--
ALTER TABLE `lote`
  MODIFY `Id_Lote` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `Id_Municipio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `Id_Rol` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_Usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vereda`
--
ALTER TABLE `vereda`
  MODIFY `Id_Vereda` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `liquidacion`
--
ALTER TABLE `liquidacion`
  ADD CONSTRAINT `liquidacion_ibfk_1` FOREIGN KEY (`Id_Lote`) REFERENCES `lote` (`Id_Lote`) ON UPDATE CASCADE,
  ADD CONSTRAINT `liquidacion_ibfk_3` FOREIGN KEY (`Id_Liquidacion`) REFERENCES `recibo` (`Codigo_Recibo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `liquidacion_ibfk_4` FOREIGN KEY (`Id_Lote2`) REFERENCES `lote` (`Id_Lote`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `lote`
--
ALTER TABLE `lote`
  ADD CONSTRAINT `lote_ibfk_1` FOREIGN KEY (`Municipio_Lote`) REFERENCES `municipios` (`Id_Municipio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productores`
--
ALTER TABLE `productores`
  ADD CONSTRAINT `productores_ibfk_1` FOREIGN KEY (`Id_Municipio`) REFERENCES `municipios` (`Id_Municipio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productores_ibfk_2` FOREIGN KEY (`Id_Vereda`) REFERENCES `vereda` (`Id_Vereda`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD CONSTRAINT `recibo_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuarios` (`Id_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recibo_ibfk_3` FOREIGN KEY (`Id_Productor`) REFERENCES `productores` (`Codigo_Unidad_Productiva`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_Rol`) REFERENCES `rol` (`Id_Rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`Id_Municipio`) REFERENCES `municipios` (`Id_Municipio`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
