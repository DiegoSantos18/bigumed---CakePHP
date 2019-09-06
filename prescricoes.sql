-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Set-2019 às 09:47
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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
-- Estrutura da tabela `prescricoes`
--

CREATE TABLE `prescricoes` (
  `precricao_id` int(11) NOT NULL,
  `periodicidade` varchar(100) DEFAULT NULL,
  `quantidade` int(20) DEFAULT NULL,
  `duracao` varchar(50) DEFAULT NULL,
  `observacao` varchar(300) DEFAULT NULL,
  `dt_prescricao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `medico_id` int(10) UNSIGNED NOT NULL,
  `paciente_id` int(10) UNSIGNED NOT NULL,
  `medicamentos_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prescricoes`
--
ALTER TABLE `prescricoes`
  ADD PRIMARY KEY (`precricao_id`),
  ADD KEY `med_pres_ibfk_1` (`medico_id`),
  ADD KEY `pac_pres_ibfk_1` (`paciente_id`),
  ADD KEY `medicamento_pres_ibfk_1` (`medicamentos_id`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `prescricoes`
--
ALTER TABLE `prescricoes`
  ADD CONSTRAINT `med_pres_ibfk_1` FOREIGN KEY (`medico_id`) REFERENCES `medicos` (`medico_id`),
  ADD CONSTRAINT `medicamento_pres_ibfk_1` FOREIGN KEY (`medicamentos_id`) REFERENCES `medicamentos` (`medicamentos_id`),
  ADD CONSTRAINT `pac_pres_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`paciente_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
