-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2022 a las 22:36:48
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anei`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisisfisico`
--

CREATE TABLE `analisisfisico` (
  `codigo_analisisfisico` varchar(40) NOT NULL,
  `fecha_analisisfisico` date NOT NULL,
  `almendra_total` float(10,1) NOT NULL,
  `almendra_sana` float(10,1) NOT NULL,
  `broca` float(10,1) NOT NULL,
  `broca_punto` float(10,1) NOT NULL,
  `negro` float(10,1) NOT NULL,
  `vinagre` float(10,1) NOT NULL,
  `humedad` float(10,1) NOT NULL,
  `factor` float(10,1) NOT NULL,
  `observaciones_analisisfisico` varchar(40) NOT NULL,
  `almendra_sana1` float(10,1) NOT NULL,
  `almendra_total1` float(10,1) NOT NULL,
  `broca1` float(10,1) NOT NULL,
  `broca_punto1` float(10,1) NOT NULL,
  `negro1` float(10,1) NOT NULL,
  `vinagre1` float(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `analisisfisico`
--

INSERT INTO `analisisfisico` (`codigo_analisisfisico`, `fecha_analisisfisico`, `almendra_total`, `almendra_sana`, `broca`, `broca_punto`, `negro`, `vinagre`, `humedad`, `factor`, `observaciones_analisisfisico`, `almendra_sana1`, `almendra_total1`, `broca1`, `broca_punto1`, `negro1`, `vinagre1`) VALUES
('PB 2022-07-31 2', '2022-07-31', 198.0, 200.0, 45.0, 45.0, 45.0, 45.0, 54.0, 87.5, 'gh', 80.0, 79.2, 18.0, 18.0, 18.0, 18.0),
('PB 2022-07-31 3', '2022-08-01', 178.0, 200.0, 34.0, 54.0, 23.0, 23.0, 23.0, 87.5, '3bn', 80.0, 71.2, 13.6, 21.6, 9.2, 9.2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisissensorial`
--

CREATE TABLE `analisissensorial` (
  `codigo_sensorial` varchar(40) NOT NULL,
  `fecha_sensorial` date NOT NULL,
  `puntaje_scaa` float(10,1) NOT NULL,
  `acidez` varchar(40) NOT NULL,
  `notas` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `analisissensorial`
--

INSERT INTO `analisissensorial` (`codigo_sensorial`, `fecha_sensorial`, `puntaje_scaa`, `acidez`, `notas`) VALUES
('PB 2022-07-31 3', '2022-08-01', 34.0, 'media', 'rt'),
('PB 2022-07-31 2', '2022-08-01', 3.0, 'baja', 'dfdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociados`
--

CREATE TABLE `asociados` (
  `nombre_usuario` varchar(40) NOT NULL,
  `municipio` varchar(40) NOT NULL,
  `vereda` varchar(40) NOT NULL,
  `finca` varchar(40) NOT NULL,
  `fecha_registro` date NOT NULL,
  `cedula_usuario` bigint(20) NOT NULL,
  `numero_up` bigint(20) NOT NULL,
  `codigo_up` varchar(40) NOT NULL,
  `estatus` varchar(40) NOT NULL,
  `contacto` bigint(20) NOT NULL,
  `cupo_bcs` bigint(20) NOT NULL,
  `tipo_vinculacion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asociados`
--

INSERT INTO `asociados` (`nombre_usuario`, `municipio`, `vereda`, `finca`, `fecha_registro`, `cedula_usuario`, `numero_up`, `codigo_up`, `estatus`, `contacto`, `cupo_bcs`, `tipo_vinculacion`) VALUES
('juan', 'pueblo bello', 'manantial', 'velen', '2022-07-31', 1, 1, '1p', 'estandar', 313478549, 1000, 'estandar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `cedula` bigint(20) NOT NULL,
  `producto` varchar(40) NOT NULL,
  `unidad` varchar(10) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `numero_estopas` bigint(20) NOT NULL,
  `estado_estopas` varchar(40) NOT NULL,
  `numero_sacos` bigint(20) NOT NULL,
  `estado_sacos` varchar(40) NOT NULL,
  `observaciones` varchar(40) NOT NULL,
  `fecha_compra` date NOT NULL,
  `kilos_brutos` float(10,1) NOT NULL,
  `kilos_netos` float(10,1) NOT NULL,
  `municipio_compra` varchar(40) NOT NULL,
  `tipo_grano` varchar(40) NOT NULL,
  `latas_compra` float(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`cedula`, `producto`, `unidad`, `marca`, `numero_estopas`, `estado_estopas`, `numero_sacos`, `estado_sacos`, `observaciones`, `fecha_compra`, `kilos_brutos`, `kilos_netos`, `municipio_compra`, `tipo_grano`, `latas_compra`) VALUES
(1, 'cafe pergamino seco', 'kilo', 'PB 2022-07-31 1', 6, 'seleccione', 6, 'seleccione', 'bn', '2022-07-31', 280.0, 275.2, '', '', 0.0),
(1, 'cafe pergamino seco', 'kilo', 'PB 2022-07-31 2', 6, 'buena', 6, 'regular', 'yt', '2022-07-31', 456.0, 451.2, '', 'estandar', 0.0),
(1, 'cafe mojado', 'lata', 'PB 2022-07-31 3', 0, 'seleccione', 0, 'seleccione', 'rt', '2022-07-31', 0.0, 184.0, '', 'estandar', 23.0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liquidacion`
--

CREATE TABLE `liquidacion` (
  `codigo_liquidacion` varchar(40) NOT NULL,
  `precio_dia` float(10,1) NOT NULL,
  `rendimiento` float(10,1) NOT NULL,
  `bonificacion` float(10,1) NOT NULL,
  `prima` float(10,1) NOT NULL,
  `precio_final` float(20,1) NOT NULL,
  `subtotal` float(20,1) NOT NULL,
  `fecha_liquidacion` date NOT NULL,
  `hora_liquidacion` time NOT NULL,
  `politica` varchar(40) NOT NULL,
  `observaciones_liquidacion` varchar(40) NOT NULL,
  `dian` float(20,1) NOT NULL,
  `asociados` float(20,1) NOT NULL,
  `neto_pagar` float(20,1) NOT NULL,
  `ahorro` float(10,1) NOT NULL,
  `total_ahorro` float(10,1) NOT NULL,
  `kilos_liquidacion` float(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `liquidacion`
--

INSERT INTO `liquidacion` (`codigo_liquidacion`, `precio_dia`, `rendimiento`, `bonificacion`, `prima`, `precio_final`, `subtotal`, `fecha_liquidacion`, `hora_liquidacion`, `politica`, `observaciones_liquidacion`, `dian`, `asociados`, `neto_pagar`, `ahorro`, `total_ahorro`, `kilos_liquidacion`) VALUES
('PB 2022-07-31 2', 20000.0, 21211.4, 200.0, 1500.0, 22911.0, 10332861.0, '2022-07-31', '04:38:30', 'politica1', 'df', 51664.3, 90200.0, 10177869.0, 0.0, 0.0, 0.0),
('PB 2022-07-31 2', 20000.0, 21211.4, 300.0, 1500.0, 23011.0, 10377961.0, '2022-07-31', '04:40:31', 'politica1', '', 51889.8, 103779.6, 10222293.0, 200.0, 90200.0, 451.2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noasociados`
--

CREATE TABLE `noasociados` (
  `cedula_noasociados` bigint(20) NOT NULL,
  `centro_acopio` varchar(40) NOT NULL,
  `fecha_noasociado` date NOT NULL,
  `nombres_completos` varchar(60) NOT NULL,
  `contacto_noasociado` bigint(20) NOT NULL,
  `tipo_cliente` varchar(40) NOT NULL,
  `municipio_noasociado` varchar(40) NOT NULL,
  `vereda_noasociado` varchar(40) NOT NULL,
  `finca_noasociado` varchar(40) NOT NULL,
  `producion_noasociado` float(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noasociados`
--

INSERT INTO `noasociados` (`cedula_noasociados`, `centro_acopio`, `fecha_noasociado`, `nombres_completos`, `contacto_noasociado`, `tipo_cliente`, `municipio_noasociado`, `vereda_noasociado`, `finca_noasociado`, `producion_noasociado`) VALUES
(0, '', '0000-00-00', 'sara', 0, '', 'san diego', 'media luna', 'alaska', 0.0),
(0, '', '0000-00-00', 'sara', 0, '', 'san diego', 'media luna', 'alaska', 0.0),
(1, '', '0000-00-00', 'sara', 0, 'estandar', 'san diego', 'media luna', 'alaska', 0.0),
(2, '', '2022-07-19', 'sara', 2, 'organico', 'san diego', 'media luna', 'alaska', 2.0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `precio` float(10,1) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `prima_producto` float(10,1) NOT NULL,
  `politica` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigo`, `nombre`, `tipo`, `precio`, `descripcion`, `prima_producto`, `politica`) VALUES
('2', 'cafe mojado', 'organico', 18000.0, 'el mejor', 1600.0, 'politica1'),
('1', 'cafe pergamino seco', 'estandar', 20000.0, 'el mejor', 1500.0, 'politica1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultadosecado`
--

CREATE TABLE `resultadosecado` (
  `codigo_resultado` varchar(40) NOT NULL,
  `fecha_resultado` date NOT NULL,
  `cantidad_resultado` bigint(20) NOT NULL,
  `costo_resultado` float(10,1) NOT NULL,
  `costo_total_resultado` float(10,1) NOT NULL,
  `tiposecado_resultado` varchar(40) NOT NULL,
  `observaciones_resultado` varchar(40) NOT NULL,
  `tipo_pago` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secado`
--

CREATE TABLE `secado` (
  `producto_secado` varchar(40) NOT NULL,
  `numero_latas` float(10,1) NOT NULL,
  `fecha_secado` date NOT NULL,
  `tipo_usuario` varchar(40) NOT NULL,
  `observaciones_secado` varchar(40) NOT NULL,
  `humedad_secado` varchar(40) NOT NULL,
  `codigo_secado` varchar(40) NOT NULL,
  `cedula_secado` bigint(20) NOT NULL,
  `municipio_secado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `secado`
--

INSERT INTO `secado` (`producto_secado`, `numero_latas`, `fecha_secado`, `tipo_usuario`, `observaciones_secado`, `humedad_secado`, `codigo_secado`, `cedula_secado`, `municipio_secado`) VALUES
('cafe mojado', 8.0, '2022-07-31', 'estandar', '', '', 'PB 2022-07-31 1', 0, ''),
('cacao en baba', 8.0, '2022-07-31', 'estandar', 'er', '', 'PB 2022-07-31 2', 0, ''),
('cafe mojado', 4.0, '2022-07-31', 'estandar', 'se', 'oreado', 'PB 2022-07-31 3', 0, ''),
('cafe mojado', 2.0, '2022-07-31', 'estandar', '434', 'mojado', 'PB 2022-07-31 4', 1, ''),
('cafe mojado', 10.0, '2022-08-01', 'estandar', 'fg', 'mojado', 'PB 2022-08-01 1', 1, 'pueblo bello');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `cedula_turno` bigint(20) NOT NULL,
  `municipio_turno` varchar(40) NOT NULL,
  `fecha_turno` date NOT NULL,
  `hora_turno` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`cedula_turno`, `municipio_turno`, `fecha_turno`, `hora_turno`) VALUES
(1, 'P. Bello', '2022-07-22', '02:08:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisisfisico`
--
ALTER TABLE `analisisfisico`
  ADD PRIMARY KEY (`codigo_analisisfisico`);

--
-- Indices de la tabla `asociados`
--
ALTER TABLE `asociados`
  ADD PRIMARY KEY (`numero_up`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`marca`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `resultadosecado`
--
ALTER TABLE `resultadosecado`
  ADD PRIMARY KEY (`codigo_resultado`);

--
-- Indices de la tabla `secado`
--
ALTER TABLE `secado`
  ADD PRIMARY KEY (`codigo_secado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
