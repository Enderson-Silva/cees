-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 20/07/2023 às 08:47
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cees`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'https://i.imgur.com/98YN6Q7.png',
  `role` enum('vendedor','telemarketing','gerente') NOT NULL DEFAULT 'vendedor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `name`, `nickname`, `password`, `photo`, `role`) VALUES
(1, 'Maria Luiza Camargos', 'Malu', '$2y$10$IcV01OJINbxXX61XMQOQqeI2ME7iHchGNmw8OxqrUIcyX/oUvrVFy', 'https://i.imgur.com/98YN6Q7.png', 'vendedor'),
(2, 'Adrieny', 'Adrieny', '$2y$10$F0ZdUveqRFf0/4QGgHcRYuh5CAGvOXcAeN2TOHeWnrl1lWbSdiQi2', 'https://i.imgur.com/98YN6Q7.png', 'telemarketing'),
(3, 'Enderson França da Silva', 'Enderson', '$2y$10$rm4IGVNjpxf1bvV8o1TWveBFCInF7gx6d2tdm4UEpTkCGLn4XknZq', 'https://i.imgur.com/98YN6Q7.png', 'vendedor'),
(4, 'Dayanne', 'Dayanne', '$2y$10$jEpaJ/uEQzeB2FoZc6L4PO0BklAt/WOvc/aghv1Daa.915czEycnu', 'https://i.imgur.com/98YN6Q7.png', 'gerente'),
(5, 'Afonso Ibiapina', 'Afonso', '$2y$10$jEpaJ/uEQzeB2FoZc6L4PO0BklAt/WOvc/aghv1Daa.915czEycnu', 'https://i.imgur.com/98YN6Q7.png', 'gerente');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comercial`
--

CREATE TABLE `comercial` (
  `id` int(11) NOT NULL,
  `responsible` varchar(255) NOT NULL,
  `time_visit` time NOT NULL,
  `date_visit` date NOT NULL,
  `name_one` varchar(255) NOT NULL,
  `name_two` varchar(255) NOT NULL DEFAULT '-',
  `number_one` varchar(255) NOT NULL,
  `number_two` varchar(255) NOT NULL DEFAULT '(00) 00000-0000',
  `status` enum('agendamento','matrícula','sem interesse','pendente','inativo') NOT NULL DEFAULT 'inativo',
  `tag` enum('macro','indicação','fachada','outro') NOT NULL,
  `observation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `comercial`
--

INSERT INTO `comercial` (`id`, `responsible`, `time_visit`, `date_visit`, `name_one`, `name_two`, `number_one`, `number_two`, `status`, `tag`, `observation`) VALUES
(15, 'Enderson', '00:00:01', '0000-00-00', '1', '1', '1', '1', 'pendente', 'macro', ''),
(16, 'Enderson', '15:30:00', '2023-05-08', 'a', 'a', 'a', 'a', 'pendente', 'macro', ''),
(17, 'Enderson', '15:30:00', '2023-05-08', 'Maria Josefina', 'Hercules menezes', '(61) 99323-0432', '(61) 99934-5523', 'sem interesse', 'indicação', ''),
(18, 'Enderson', '15:30:00', '2023-05-08', 'Maria Josefina', 'Hercules menezes', '(61) 99323-0432', '(61) 99934-5523', 'sem interesse', 'indicação', ''),
(19, 'Enderson', '15:30:00', '2023-05-08', 'Maria Josefina', 'Hercules menezes', '(61) 99323-0432', '(61) 99934-5523', 'sem interesse', 'indicação', ''),
(20, 'Enderson', '05:10:00', '2023-05-09', 'a', 'a', 'a', 'a', 'pendente', '', ''),
(21, 'Enderson', '09:00:00', '2023-05-09', 'Maria de Fátima', 'Antônio Fonseca', '(61) 99327-3321', '(61) 5432-2354', 'pendente', '', ''),
(22, 'Enderson', '09:00:00', '2023-05-09', 'Maria de Fátima', 'Antônio Fonseca', '(61) 99327-3321', '(61) 5432-2354', 'pendente', '', 'Ela tem observação.'),
(23, 'Enderson', '04:03:00', '2023-05-18', 'Enderson', 'gsdfgsdf', 'sdfgsdf', 'gsdfgfsdgs', 'inativo', 'macro', 'sdfgsdfg'),
(24, 'Enderson', '04:03:00', '2023-05-18', 'Enderson', 'gsdfgsdf', 'sdfgsdf', 'gsdfgfsdgs', 'inativo', 'macro', 'sdfgsdfg'),
(25, 'Enderson', '06:00:00', '2023-05-04', 'dfsd', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'pendente', '', 'sdfsadfasd'),
(26, 'Enderson', '00:06:00', '2023-05-02', 'sdfsdaf', 'sadfsadf', 'asdfsd', 'asdf', 'sem interesse', 'macro', 'asdfsadfdsf');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pages_acess`
--

CREATE TABLE `pages_acess` (
  `id` int(11) NOT NULL,
  `id_colaborador` tinyint(1) NOT NULL,
  `dashboard` tinyint(1) NOT NULL,
  `comercial` tinyint(1) NOT NULL,
  `matriculas` tinyint(1) NOT NULL,
  `atendimento` tinyint(1) NOT NULL,
  `arquivos` tinyint(1) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pages_acess`
--

INSERT INTO `pages_acess` (`id`, `id_colaborador`, `dashboard`, `comercial`, `matriculas`, `atendimento`, `arquivos`, `admin`) VALUES
(1, 3, 1, 0, 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `visitas`
--

CREATE TABLE `visitas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `rg` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comercial`
--
ALTER TABLE `comercial`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pages_acess`
--
ALTER TABLE `pages_acess`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `comercial`
--
ALTER TABLE `comercial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `pages_acess`
--
ALTER TABLE `pages_acess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
