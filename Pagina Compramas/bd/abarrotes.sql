-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2022 a las 23:41:48
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abarrotes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(20) NOT NULL,
  `marca` text NOT NULL,
  `tipo` text NOT NULL,
  `precio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `marca`, `tipo`, `precio`) VALUES
(1, 'Grano de oro', 'avena', '2.00'),
(2, 'Ace', 'detergente', '7.00'),
(3, 'Opal', 'detergente', '8.00'),
(4, 'Don Vitorio', 'fideos', '6.00'),
(5, 'Ayudin', 'lavavajillas', '4.00'),
(6, 'Kirma', 'cafe', '3.00'),
(7, 'Gloria', 'tarro de leche', '5.00'),
(8, 'Quaker', 'avena', '1.00'),
(9, 'Sapolio', 'lavavajillas', '2.00'),
(10, 'Ideal', 'tarro de leche', '4.50'),
(11, 'Lays', 'snacks', '1.50'),
(12, 'Cheesetris', 'snacks', '1.00'),
(13, 'Bolivar', 'jabon', '5.00'),
(14, 'Altomayo', 'cafe', '2.50'),
(15, 'Gloria', 'tarro de leche', '5.00'),
(16, 'Marsella', 'jabon', '5.00'),
(17, 'Piqueos', 'snacks', '1.00'),
(18, 'Patito', 'detergente', '4.00'),
(19, 'Tres ositos', 'avena', '5.00'),
(20, 'Nescafe', 'cafe', '1.50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
