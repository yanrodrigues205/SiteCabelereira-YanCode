-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Abr-2022 às 00:26
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `cli_cod` int(4) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(100) NOT NULL,
  `cli_telefone` int(12) NOT NULL,
  `cli_endereco` varchar(150) NOT NULL,
  `cli_email` varchar(150) NOT NULL,
  `cli_cpf` varchar(12) NOT NULL,
  `cli_senha` varchar(100) NOT NULL,
  PRIMARY KEY (`cli_cod`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cli_cod`, `cli_nome`, `cli_telefone`, `cli_endereco`, `cli_email`, `cli_cpf`, `cli_senha`) VALUES
(41, 'Amanda Araujo', 2147483647, 'Maria Bertoloni Souza', 'amanda.araujo@hotmail.com', '23434467899', 'amanda123'),
(37, 'Yan Rodrigues', 2147483647, 'Rua Francisca Rodrigues Becegato', 'yan.rodrigues4@etec.sp.gov.br', '13326788900', 'yan123123123'),
(42, 'Anthony Sander', 2147483647, 'Rua Francisca Rodrigues Becegato', 'anthony.sander@gmail.com', '13813813877', 'sghdygfeua');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
