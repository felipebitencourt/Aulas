-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 17-Out-2024 às 21:52
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `codemaster_10_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `apelido` varchar(200) NOT NULL,
  `morada` varchar(200) NOT NULL,
  `nif` varchar(9) NOT NULL,
  `idade` int(11) NOT NULL,
  `saldo_bonus` double NOT NULL,
  `data_criacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `apelido`, `morada`, `nif`, `idade`, `saldo_bonus`, `data_criacao`) VALUES
(1, 'Fabrício', 'Vidal', 'Covilhã', '111', 46, 0, '10/01/2015'),
(2, 'Maria', 'Silva', 'Lisboa', '222', 20, 12.5, '31/10/2022'),
(3, 'João', 'Carlos', 'Almada', '333', 77, 10, '15/05/2024');

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `apelido` varchar(300) NOT NULL,
  `nif` varchar(9) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `nome`, `apelido`, `nif`, `login`, `senha`) VALUES
(1, 'Gabriel', 'Ramos', '444', 'gabriel', 'code'),
(4, 'Ana', 'Teresa', '777', 'ana_t', 'neve'),
(5, 'Alice', 'Carla', '888', 'alice_c', 'apple'),
(6, 'José', 'Campos', '999', 'j_campos', 'relva');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` double NOT NULL,
  `quantidade` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `fornecedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `quantidade`, `codigo`, `fornecedor`) VALUES
(1, 'Papel A4', 3.99, 12, 111, 'Papel PT'),
(2, 'Cadeira Gamer', 129.49, 44, 222, 'Gamer PT'),
(3, 'Monitor 4K', 296.54, 100, 333, 'Gamer PT'),
(4, 'Caneta Vermelha', 1.27, 125, 444, 'Canetas Portugal'),
(5, 'Caneta Verde', 1.29, 15, 555, 'Canetas Portugal'),
(6, 'Rato Gamer', 90.98, 3, 666, 'Gamer PT'),
(7, 'Caneta Azul', 1.29, 459, 999, 'Canetas Portugal'),
(8, 'A Caneta Mágica', 5.98, 125, 444, 'Canetas Portugal'),
(9, 'A Caneta', 5.98, 125, 444, 'Canetas Portugal'),
(10, 'Caneta Rosa', 5.98, 32, 1010, 'Canetas Portugal'),
(11, 'X-Acto Vermelho', 5.98, 32, 1010, 'Canetas Portugal'),
(12, 'X-Acto Verde', 5.98, 32, 1010, 'Canetas Portugal'),
(13, 'X-Acto Branco', 5.98, 32, 1010, 'Canetas Portugal'),
(14, 'X-Acto Preto', 5.98, 32, 1010, 'Canetas Portugal'),
(15, 'X-Acto Rosa', 5.98, 32, 1010, 'Canetas Portugal'),
(16, 'X-Acto Roxo', 5.98, 32, 1010, 'Canetas Portugal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

CREATE TABLE `teste` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `idade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `teste`
--

INSERT INTO `teste` (`id`, `nome`, `idade`) VALUES
(1, 'fabricio', 18),
(2, 'maria', 55),
(3, 'joao', 32),
(4, 'alice', 78),
(5, 'bruno', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `teste`
--
ALTER TABLE `teste`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `teste`
--
ALTER TABLE `teste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
