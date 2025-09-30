-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 29-Set-2025 às 23:31
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `folha_pagto`
--
CREATE DATABASE IF NOT EXISTS `folha_pagto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `folha_pagto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionarios`
--

CREATE TABLE IF NOT EXISTS `tb_funcionarios` (
  `N_Registro` int(20) NOT NULL,
  `Nome_Funcionario` varchar(50) NOT NULL,
  `Data_admissao` date NOT NULL,
  `Cargo` varchar(40) NOT NULL,
  `QTDE_Salarios` decimal(10,0) NOT NULL,
  `Salario_bruto` float NOT NULL,
  `INSS` float NOT NULL,
  `Salario_liquito` float NOT NULL,
  PRIMARY KEY (`N_Registro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
