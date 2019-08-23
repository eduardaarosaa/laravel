-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Ago-2019 às 23:55
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `company_adress`
--

CREATE TABLE `company_adress` (
  `id_adress` int(11) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` int(10) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `company_adress`
--

INSERT INTO `company_adress` (`id_adress`, `rua`, `numero`, `bairro`, `cep`, `cidade`, `estado`) VALUES
(1, 'Rua das flores', 250, 'Jardins', '00789236', 'Maravilha', 'SP'),
(2, 'Rua jardins', 20, 'Primavera', '44444-444', 'São Paulo', 'SP'),
(3, 'Rua jardins', 36, 'Jardins', '00000-000', 'São Paulo', 'SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `company_data`
--

CREATE TABLE `company_data` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `razao` varchar(100) NOT NULL,
  `cnpj` varchar(100) NOT NULL,
  `obj_social` varchar(100) NOT NULL,
  `tipo_socio` varchar(30) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `company_data`
--

INSERT INTO `company_data` (`id`, `email`, `razao`, `cnpj`, `obj_social`, `tipo_socio`, `data`) VALUES
(1, 'duda@gmail.com', 'Duda', '1233334', 'Duda', 'ltda', '2019-08-16 13:50:40'),
(2, 'eduardarosa@bloco1.com.br', 'Duda', '31.472.537/0001-88', 'Desenvolve', 'mei', '2019-08-16 13:50:40'),
(3, 'eduardarosa@bloco1.com.br', 'Duda', '31.472.537/0001-88', 'Desenvolve', 'mei', '2019-08-16 13:50:40'),
(4, 'eduardarosa@bloco1.com.br', 'Duda', '31.472.537/0001-88', 'Desenvolve', 'mei', '2019-08-16 13:52:54'),
(5, 'eduardarosa@bloco1.com.br', 'Duda', '31.472.537/0001-88', 'Desenvolve', 'mei', '2019-08-16 13:53:09'),
(6, 'paulo@gmail.com', 'Paulo', '22.222.222/2222-22', 'paulo', 'ltda', '2019-08-16 14:00:48'),
(7, 'paulo@gmail.com', 'Paulo', '22.222.222/2222-22', 'paulo', 'ltda', '2019-08-16 14:01:13'),
(8, 'marcos@gmail.com', 'Duda', '31.472.537/0001-88', 'Desenvolve', 'ltda', '2019-08-16 16:13:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `company_info`
--

CREATE TABLE `company_info` (
  `id` int(11) NOT NULL,
  `file1` varchar(50) NOT NULL,
  `file2` varchar(50) NOT NULL,
  `faturamento` varchar(50) NOT NULL,
  `file3` varchar(50) NOT NULL,
  `file4` varchar(50) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `company_info`
--

INSERT INTO `company_info` (`id`, `file1`, `file2`, `faturamento`, `file3`, `file4`, `data`) VALUES
(1, 'controller.PNG', 'controller.PNG', '25,65', 'controller.PNG', 'controller.PNG', '2019-08-19 20:20:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_adress`
--
ALTER TABLE `company_adress`
  ADD PRIMARY KEY (`id_adress`);

--
-- Indexes for table `company_data`
--
ALTER TABLE `company_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_adress`
--
ALTER TABLE `company_adress`
  MODIFY `id_adress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_data`
--
ALTER TABLE `company_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
