-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2023 a las 23:57:56
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_muni`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `codigo_referencia` varchar(50) NOT NULL,
  `numero_existente` varchar(50) NOT NULL,
  `ubicacion_original` varchar(100) NOT NULL,
  `soporte` varchar(100) NOT NULL,
  `velocidad_grabacion` varchar(50) NOT NULL,
  `tranca_seguridad` tinyint(1) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `numero_serie_soporte` varchar(50) NOT NULL,
  `fecha_grabacion` datetime NOT NULL,
  `generacion` varchar(50) NOT NULL,
  `duracion_de_la_generacion` varchar(50) NOT NULL,
  `duracion_soporte` varchar(50) NOT NULL,
  `entrada_descriptiva_caja` varchar(150) NOT NULL,
  `entrada_desriptiva_soporte` varchar(150) NOT NULL,
  `entrada_descriptiva_documentacion_secundaria` varchar(250) NOT NULL,
  `deterioro` varchar(100) NOT NULL,
  `estado_conservacion` varchar(100) NOT NULL,
  `restauraciones` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`codigo_referencia`, `numero_existente`, `ubicacion_original`, `soporte`, `velocidad_grabacion`, `tranca_seguridad`, `marca`, `numero_serie_soporte`, `fecha_grabacion`, `generacion`, `duracion_de_la_generacion`, `duracion_soporte`, `entrada_descriptiva_caja`, `entrada_desriptiva_soporte`, `entrada_descriptiva_documentacion_secundaria`, `deterioro`, `estado_conservacion`, `restauraciones`) VALUES
('pedro', '1234', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
('pedro', '1234', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
