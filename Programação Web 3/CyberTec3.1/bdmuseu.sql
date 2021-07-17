-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2020 às 05:46
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdmuseu`
--
CREATE DATABASE bdmuseu
USE bdmuseu
-- --------------------------------------------------------

--
-- Estrutura da tabela `tbobra`
--

CREATE TABLE `tbobra` (
  `idObra` int(16) NOT NULL,
  `imageurl` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomeObra` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoriaObra` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periodoObra` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomeautor` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbobra`
--
ALTER TABLE `tbobra`
  ADD PRIMARY KEY (`idObra`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbobra`
--
ALTER TABLE `tbobra`
  MODIFY `idObra` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
