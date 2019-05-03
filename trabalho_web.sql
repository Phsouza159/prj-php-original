-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jun-2018 às 00:55
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabalho_web`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--
create schema if not exists `trabalho_web`;
use `trabalho_web`;

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `ativo` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `data_nascimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `ativo`, `nome`, `cpf`, `data_nascimento`) VALUES
(1, 1, 'ADMIN', '1', '2018-06-11'),
(2, 1, 'admin', '2', '2018-06-08'),
(3, 1, 'paulo', '3', '2018-06-13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionario`
--

CREATE TABLE `questionario` (
  `id` int(11) NOT NULL,
  `id_pessoa` int(11) NOT NULL,
  `quest1` varchar(3) NOT NULL,
  `quest2` varchar(3) NOT NULL,
  `quest3` varchar(3) NOT NULL,
  `quest4` varchar(3) NOT NULL,
  `quest5` varchar(3) NOT NULL,
  `quest6` varchar(3) NOT NULL,
  `quest7` varchar(3) NOT NULL,
  `quest8` varchar(3) NOT NULL,
  `quest9` varchar(3) NOT NULL,
  `quest10` varchar(3) NOT NULL,
  `nota` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `questionario`
--

INSERT INTO `questionario` (`id`, `id_pessoa`, `quest1`, `quest2`, `quest3`, `quest4`, `quest5`, `quest6`, `quest7`, `quest8`, `quest9`, `quest10`, `nota`) VALUES
(19, 1, 'A', 'C', 'C', 'A', 'A', 'D', 'B', 'C', 'B', 'B', '2.00'),
(20, 2, 'A', 'B', 'C', 'D', 'D', 'D', 'C', 'C', 'E', 'C', '2.00'),
(21, 3, 'A', 'B', 'D', 'B', 'A', 'C', 'B', 'A', 'A', 'A', '7.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `questionario`
--
ALTER TABLE `questionario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `questao` (`id`),
  ADD KEY `id_pessoa` (`id_pessoa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `questionario`
--
ALTER TABLE `questionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `questionario`
--
ALTER TABLE `questionario`
  ADD CONSTRAINT `questionario_ibfk_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
