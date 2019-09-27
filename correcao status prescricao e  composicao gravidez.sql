-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Set-2019 às 03:48
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
-- Estrutura da tabela `medicamentos`
--

CREATE TABLE `medicamentos` (
  `medicamentos_id` int(11) UNSIGNED NOT NULL,
  `nome_popular` varchar(50) DEFAULT NULL,
  `nome_tecnico` varchar(50) NOT NULL,
  `tipo` text,
  `composicao` text NOT NULL,
  `contra_indicacoes` text NOT NULL,
  `indicacao` text NOT NULL,
  `posologia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medicamentos`
--

INSERT INTO `medicamentos` (`medicamentos_id`, `nome_popular`, `nome_tecnico`, `tipo`, `composicao`, `contra_indicacoes`, `indicacao`, `posologia`) VALUES
(1, 'testando', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaa', 'aaaa'),
(2, 'numero 2', 'numero 2', 'asass', 'asdsad', 'asdasd', 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

CREATE TABLE `medicos` (
  `medico_id` int(10) UNSIGNED NOT NULL,
  `crm` varchar(20) NOT NULL,
  `especialidade` varchar(50) NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`medico_id`, `crm`, `especialidade`, `usuario_id`) VALUES
(1, '12345678910', 'Pediatra', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `paciente_id` int(10) UNSIGNED NOT NULL,
  `rg` varchar(25) NOT NULL,
  `numero_convenio` varchar(30) NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `status_gravida` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`paciente_id`, `rg`, `numero_convenio`, `usuario_id`, `data_nascimento`, `status_gravida`) VALUES
(1, '123456', '122333444455555', 11, NULL, NULL);

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
  `medicamentos_id` int(10) UNSIGNED NOT NULL,
  `status_prescricao` tinyint(1) DEFAULT NULL,
  `restricao_idade` int(11) DEFAULT NULL,
  `restricao_composicao` varchar(1000) DEFAULT NULL,
  `restricao_gravidez` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `prescricoes`
--

INSERT INTO `prescricoes` (`precricao_id`, `periodicidade`, `quantidade`, `duracao`, `observacao`, `dt_prescricao`, `medico_id`, `paciente_id`, `medicamentos_id`, `status_prescricao`, `restricao_idade`, `restricao_composicao`, `restricao_gravidez`) VALUES
(0, 'diario', 5, 'doia anos', 'tomar varios dias', '2019-09-26 03:58:00', 1, 1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `roles_id` int(10) UNSIGNED NOT NULL,
  `role` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`roles_id`, `role`) VALUES
(4, 'fer'),
(5, 'MED'),
(6, 'PAC');

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
  `roles_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `dt_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_modificacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`usuario_id`, `cpf`, `senha`, `nome_completo`, `sexo`, `roles_id`, `status`, `dt_criacao`, `dt_modificacao`) VALUES
(9, '04053085071', '$2y$10$f2uCyv1l08wSVTxlp48kgOhpopS6.VrYARZeUtefabB6PrxMG0M6W', 'Diego Santos', 'M', 5, 1, '2019-09-06 21:23:00', '2019-09-06 21:38:00'),
(10, '12345678910', '$2y$10$qe5sBQpb2Mq0NVWAOwU/YegXEePb6b83mV.BPyNJKILlHV3tZOKHS', 'admin', 'M', 4, 1, '2019-09-13 05:24:00', '2019-09-13 05:24:00'),
(11, '98765432100', '$2y$10$l9eIyMX/fEFBUPGu4yjUbejVBjlAgpJkDfyc8vzndZUtSLk0K.C.a', 'Luis Fernando Costa', 'M', 6, 1, '2019-09-13 20:31:00', '2019-09-13 20:31:00'),
(12, '12345678911', '$2y$10$cDKgkblB9Pf5vhfn4VH2h.aDUFxx4uY97w7e9yIaxhm/Hr5i292PK', 'ifrs feliz', 'M', 6, 1, '2019-09-13 22:18:00', '2019-09-13 22:18:00'),
(13, '1', '$2y$10$9AcZmNrqaz3kQKhpZbpXFubuPneMTArurcGGcYP6niZQHwCn38dVG', 'ifififif', 'M', 4, 1, '2019-09-13 22:19:00', '2019-09-13 22:19:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`medicamentos_id`);

--
-- Indexes for table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`medico_id`),
  ADD UNIQUE KEY `crm` (`crm`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`paciente_id`),
  ADD UNIQUE KEY `rg` (`rg`,`numero_convenio`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `prescricoes`
--
ALTER TABLE `prescricoes`
  ADD PRIMARY KEY (`precricao_id`),
  ADD KEY `med_pres_ibfk_1` (`medico_id`),
  ADD KEY `pac_pres_ibfk_1` (`paciente_id`),
  ADD KEY `medicamento_pres_ibfk_1` (`medicamentos_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roles_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD KEY `roles_id` (`roles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `medicamentos_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicos`
--
ALTER TABLE `medicos`
  MODIFY `medico_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `paciente_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roles_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usuario_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `medicos`
--
ALTER TABLE `medicos`
  ADD CONSTRAINT `medicos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`usuario_id`);

--
-- Limitadores para a tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`usuario_id`);

--
-- Limitadores para a tabela `prescricoes`
--
ALTER TABLE `prescricoes`
  ADD CONSTRAINT `med_pres_ibfk_1` FOREIGN KEY (`medico_id`) REFERENCES `medicos` (`medico_id`),
  ADD CONSTRAINT `medicamento_pres_ibfk_1` FOREIGN KEY (`medicamentos_id`) REFERENCES `medicamentos` (`medicamentos_id`),
  ADD CONSTRAINT `pac_pres_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`paciente_id`);

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`roles_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
