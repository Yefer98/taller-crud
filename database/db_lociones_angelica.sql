CREATE DATABASE `lociones_angelica`;
USE `lociones_angelica`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `info_cliente` (
  `id` int(11) NOT NULL,
  `Nom_Cliente` varchar(50) NOT NULL,
  `Doc_Cliente` varchar(15) NOT NULL,
  `Email_Cliente` varchar(50) NOT NULL,
  `Dir_Cliente` varchar(15) NOT NULL,
  `Tel_Cliente` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `info_producto` (
  `id` int(11) NOT NULL,
  `Cod_Referencia` varchar(20) NOT NULL,
  `Cant_Productos` int(11) NOT NULL,
  `Valor_Productos` double NOT NULL,
  `Nom_Producto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

ALTER TABLE `info_cliente`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `info_producto`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `info_proveedor`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `info_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `info_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `info_proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

