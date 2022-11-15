-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2022 a las 19:44:54
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
-- Base de datos: `lociones_angelica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_cliente`
--

CREATE TABLE `info_cliente` (
  `id` int(11) NOT NULL,
  `Nom_Cliente` varchar(50) NOT NULL,
  `Doc_Cliente` varchar(15) NOT NULL,
  `Email_Cliente` varchar(50) NOT NULL,
  `Dir_Cliente` varchar(15) NOT NULL,
  `Tel_Cliente` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_producto`
--

CREATE TABLE `info_producto` (
  `id` int(11) NOT NULL,
  `Cod_Referencia` varchar(20) NOT NULL,
  `Cant_Productos` int(11) NOT NULL,
  `Valor_Productos` double NOT NULL,
  `Nom_Producto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_proveedor`
--

CREATE TABLE `info_proveedor` (
  `id` int(11) NOT NULL,
  `Nom_Proveedor` varchar(50) NOT NULL,
  `Doc_Proveedor` varchar(15) NOT NULL,
  `Email_Proveedor` varchar(50) NOT NULL,
  `Dir_Proveedor` varchar(15) NOT NULL,
  `Tel_Proveedor` varchar(15) NOT NULL,
  `Nit_Proveedor` varchar(20) NOT NULL,
  `Producto_Proveedor` varchar(50) NOT NULL,
  `Desc_Empresa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `info_cliente`
--
ALTER TABLE `info_cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `info_producto`
--
ALTER TABLE `info_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `info_proveedor`
--
ALTER TABLE `info_proveedor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `info_cliente`
--
ALTER TABLE `info_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `info_producto`
--
ALTER TABLE `info_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `info_proveedor`
--
ALTER TABLE `info_proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
