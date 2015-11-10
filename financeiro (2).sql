-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Nov-2015 às 22:46
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`, `usuario`, `data`, `tipo`) VALUES
(12, 'Banco', 15, '2001-11-15', 1),
(13, 'Salario', 15, '2001-11-15', 1),
(14, 'Transporte', 15, '2001-11-15', 1),
(15, 'Alimentacao', 15, '2008-11-15', 2);

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
  `data` varchar(10) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `categoria` int(10) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `despesas`
--

INSERT INTO `despesas` (`id`, `despesa`, `data`, `valor`, `categoria`, `usuario`, `status`) VALUES
(5, 'Almoço', '21/10/2015', 50, 15, 15, 1),
(6, 'Almoço', '19/10/2015', 25, 15, 15, 1),
(7, 'teste', '12/12/2018', 18, 15, 15, 1),
(8, 'teste á  acento à pd', '21/10/2015', 1500, 15, 15, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

CREATE TABLE IF NOT EXISTS `receita` (
  `id` int(11) NOT NULL,
  `receita` varchar(20) DEFAULT NULL,
  `data` varchar(10) NOT NULL,
  `valor` double NOT NULL,
  `categoria` int(10) NOT NULL,
  `usuario` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `receita`
--

INSERT INTO `receita` (`id`, `receita`, `data`, `valor`, `categoria`, `usuario`, `status`) VALUES
(21, 'VT', '21/10/2015', 120, 14, 15, 1),
(22, 'SL', '21/10/2015', 20, 12, 15, 1),
(23, 'data', '22/10/2015', 2208, 12, 15, 1),
(25, 'Salario', '01/11/2015', 1500, 12, 15, 1),
(26, 'teste', '08/08/2008', 1200, 12, 15, 1),
(27, 'Receita teste', '23/10/2015', 1200, 12, 15, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `status`) VALUES
(2, 'admin', 'admin@admin.com', '1234', 1),
(15, 'luiz', 'luiz@hotmail.com', '1234', 1),
(19, 'teste', 'teste@teste.com', '1234', 1);

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
  ADD PRIMARY KEY (`id`), ADD KEY `index` (`id`);

--
-- Indexes for table `receita`
--
ALTER TABLE `receita`
  ADD PRIMARY KEY (`id`), ADD KEY `Index` (`id`), ADD FULLTEXT KEY `receita` (`receita`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `despesas`
--
ALTER TABLE `despesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `receita`
--
ALTER TABLE `receita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
