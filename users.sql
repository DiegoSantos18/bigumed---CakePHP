-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Set-2019 às 01:02
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigumed`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome_completo` varchar(50) NOT NULL,
  `sexo` enum('M','F') NOT NULL,
  `tipo` enum('ADM','MED','PAC') NOT NULL,
  `status` tinyint(1) NOT NULL,
  `dt_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_modificacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`usuario_id`, `cpf`, `senha`, `nome_completo`, `sexo`, `tipo`, `status`, `dt_criacao`, `dt_modificacao`) VALUES
(7, '04053085071', '12345', 'Diego Santos', 'M', 'MED', 1, '2019-09-06 07:44:00', '2019-09-06 07:44:00'),
(8, '03500088090', '123456', 'Henrique Dario Müller', 'M', 'PAC', 1, '2019-09-06 22:51:47', '2019-09-06 22:51:47'),
(9, '37258994017', '123456789', 'Fulano de Almeida', 'M', 'PAC', 0, '2019-09-06 22:53:33', '2019-09-06 22:54:16'),
(10, '95014123007', '987654321', 'Cicrana de Souza Filho', 'F', 'PAC', 1, '2019-09-06 22:54:03', '2019-09-06 22:54:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usuario_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
