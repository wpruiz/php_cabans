-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-02-2020 a las 18:45:15
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cabans`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_solicitudes`
--

CREATE TABLE `tab_solicitudes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `cab_sel` varchar(50) NOT NULL,
  `fec_ini` date NOT NULL,
  `fec_fin` date NOT NULL,
  `transporte` enum('SI','NO') NOT NULL,
  `mensaje` text NOT NULL,
  `fec_reg` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tab_solicitudes`
--

INSERT INTO `tab_solicitudes` (`id`, `nombre`, `email`, `telefono`, `ciudad`, `cab_sel`, `fec_ini`, `fec_fin`, `transporte`, `mensaje`, `fec_reg`) VALUES
(15, 'actividad 6', 'ruizwilson01@gmail.com', '3133259725', 'Facatativá', 'ELA del Mar (8 personas)', '2020-01-01', '2020-01-01', 'SI', 'sfmjgsdjfas<df', '2020-02-16 06:29:00'),
(16, 'actividad 6', 'ruizwilson01@gmail.com', '3133259725', 'Facatativá', 'ELATE Azul (4 personas)', '2020-01-01', '2020-01-01', 'SI', 'sfdgadfgasd', '2020-02-16 06:37:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tab_solicitudes`
--
ALTER TABLE `tab_solicitudes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tab_solicitudes`
--
ALTER TABLE `tab_solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
