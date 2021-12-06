-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 00:23:02
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
-- Base de datos: `ultimas_memorias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `Nombre_completo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Nacimiento` datetime DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `CP` float DEFAULT NULL,
  `clave` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_tiene_difunto`
--

CREATE TABLE `cliente_tiene_difunto` (
  `Idcliente` int(11) NOT NULL,
  `Iddifunto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE `contratos` (
  `Fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `Realizado` varchar(255) DEFAULT NULL,
  `Idservicio` int(11) NOT NULL,
  `Idcliente` int(11) NOT NULL,
  `Iddifunto` int(11) NOT NULL,
  `Id_MDP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `difunto`
--

CREATE TABLE `difunto` (
  `id` int(11) NOT NULL,
  `Nombre_completo` varchar(255) DEFAULT NULL,
  `Ubicacion` varchar(32) DEFAULT NULL,
  `tipo_enterramiento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_de_pago`
--

CREATE TABLE `metodo_de_pago` (
  `Id` int(11) NOT NULL,
  `Tipo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `metodo_de_pago`
--

INSERT INTO `metodo_de_pago` (`Id`, `Tipo`) VALUES
(1, 'Paypal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `Tipo` varchar(255) DEFAULT NULL,
  `precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `Tipo`, `precio`) VALUES
(1, 'Arreglo floral 1', 5),
(2, 'Arreglo floral 2', 6),
(3, 'Arreglo floral 3', 7),
(4, 'Limpieza 1', 5),
(5, 'Limpieza 2', 6),
(6, 'Limpieza 3', 7),
(7, 'Rezos Coran', 5),
(8, 'Rezos Torah', 5),
(9, 'Rezos Biblia', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_de_enterramientos`
--

CREATE TABLE `tipos_de_enterramientos` (
  `id` int(11) NOT NULL,
  `Tipo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos_de_enterramientos`
--

INSERT INTO `tipos_de_enterramientos` (`id`, `Tipo`) VALUES
(1, 'Enterramiento en tierra'),
(2, 'Nicho'),
(3, 'Panteón');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente_tiene_difunto`
--
ALTER TABLE `cliente_tiene_difunto`
  ADD PRIMARY KEY (`Idcliente`,`Iddifunto`),
  ADD KEY `Iddifunto` (`Iddifunto`);

--
-- Indices de la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`Fecha`,`Idservicio`,`Idcliente`,`Iddifunto`),
  ADD KEY `Idcliente` (`Idcliente`),
  ADD KEY `Iddifunto` (`Iddifunto`),
  ADD KEY `Idservicio` (`Idservicio`),
  ADD KEY `Id_MDP` (`Id_MDP`) USING BTREE;

--
-- Indices de la tabla `difunto`
--
ALTER TABLE `difunto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_enterramiento` (`tipo_enterramiento`);

--
-- Indices de la tabla `metodo_de_pago`
--
ALTER TABLE `metodo_de_pago`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id_2` (`Id`),
  ADD KEY `Id` (`Id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos_de_enterramientos`
--
ALTER TABLE `tipos_de_enterramientos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `difunto`
--
ALTER TABLE `difunto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `metodo_de_pago`
--
ALTER TABLE `metodo_de_pago`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipos_de_enterramientos`
--
ALTER TABLE `tipos_de_enterramientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente_tiene_difunto`
--
ALTER TABLE `cliente_tiene_difunto`
  ADD CONSTRAINT `cliente_tiene_difunto_ibfk_1` FOREIGN KEY (`Idcliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `cliente_tiene_difunto_ibfk_2` FOREIGN KEY (`Iddifunto`) REFERENCES `difunto` (`id`);

--
-- Filtros para la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD CONSTRAINT `contratos_ibfk_1` FOREIGN KEY (`Id_MDP`) REFERENCES `metodo_de_pago` (`Id`),
  ADD CONSTRAINT `contratos_ibfk_2` FOREIGN KEY (`Idcliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `contratos_ibfk_3` FOREIGN KEY (`Iddifunto`) REFERENCES `difunto` (`id`),
  ADD CONSTRAINT `contratos_ibfk_4` FOREIGN KEY (`Idservicio`) REFERENCES `servicios` (`id`);

--
-- Filtros para la tabla `difunto`
--
ALTER TABLE `difunto`
  ADD CONSTRAINT `difunto_ibfk_1` FOREIGN KEY (`tipo_enterramiento`) REFERENCES `tipos_de_enterramientos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
