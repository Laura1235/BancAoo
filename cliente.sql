-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2024 a las 23:07:40
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bancapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `numeroCta` int(10) NOT NULL,
  `fechaApertura` timestamp NOT NULL DEFAULT current_timestamp(),
  `nombre` varchar(100) NOT NULL,
  `saldo` int(11) DEFAULT NULL,
  `estado` varchar(20) NOT NULL,
  `cedulaCliente` varchar(12) NOT NULL,
  `telefono` double NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `rol` int(3) NOT NULL,
  `pasadmin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `numeroCta`, `fechaApertura`, `nombre`, `saldo`, `estado`, `cedulaCliente`, `telefono`, `contraseña`, `correo`, `rol`, `pasadmin`) VALUES
(2, 2, '2024-02-16 05:00:00', 'Laura Sofia', 100, 'activo', '1007760581', 3138549098, 'Laura', 'laura@admin.com', 1, 'LauraAdmin'),
(3, 0, '2024-02-16 05:00:00', 'Juan Diego', 0, 'Activo', '1007158683', 3152175319, 'Juan', 'Juan@gmail.com', 2, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
