-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Nov-2015 às 13:30
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `financeiro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`, `usuario`, `data`, `tipo`) VALUES
(11, 'Alimentacao', 15, '2001-11-15', 2),
(12, 'Banco', 15, '2001-11-15', 1),
(13, 'Salario', 15, '2001-11-15', 1),
(14, 'Transporte', 15, '2001-11-15', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesas`
--

CREATE TABLE IF NOT EXISTS `despesas` (
  `id` int(11) NOT NULL,
  `despesa` varchar(20) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `categoria` int(10) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

CREATE TABLE IF NOT EXISTS `receita` (
  `id` int(11) NOT NULL,
  `receita` varchar(20) DEFAULT NULL,
  `data` date NOT NULL,
  `valor` double NOT NULL,
  `categoria` varchar(10) NOT NULL,
  `usuario` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `receita`
--

INSERT INTO `receita` (`id`, `receita`, `data`, `valor`, `categoria`, `usuario`, `status`) VALUES
(1, 'Pgto', '0000-00-00', 2400, '13', 15, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(210) DEFAULT NULL,
  `email` varchar(240) DEFAULT NULL,
  `senha` varchar(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `status`) VALUES
(2, 'admin', 'admin@admin.com', '1234', 1),
(15, 'luiz', 'luiz@hotmail.com', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `categoria` (`categoria`), ADD UNIQUE KEY `categoria_2` (`categoria`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `despesas`
--
ALTER TABLE `despesas`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `despesa` (`despesa`);

--
-- Indexes for table `receita`
--
ALTER TABLE `receita`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `data` (`data`,`valor`,`categoria`,`usuario`,`status`), ADD UNIQUE KEY `receita` (`receita`), ADD UNIQUE KEY `receita_2` (`receita`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `despesas`
--
ALTER TABLE `despesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receita`
--
ALTER TABLE `receita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
