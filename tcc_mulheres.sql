-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Nov-2021 às 22:34
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc_mulheres`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentários`
--

CREATE TABLE `comentários` (
  `cod_comentario` int(100) NOT NULL,
  `descricao` varchar(900) NOT NULL,
  `cod_usuario` int(100) NOT NULL,
  `cod_relato` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL,
  `name` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `mensagem` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `cod_projeto` int(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contato` varchar(100) NOT NULL,
  `local` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `duracao` varchar(100) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`cod_projeto`, `titulo`, `contato`, `local`, `data`, `duracao`, `descricao`) VALUES
(71, 'Teste', 'Teste', 'Teste', '2010-10-10', 'Teste', 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relato`
--

CREATE TABLE `relato` (
  `cod_relato` int(100) NOT NULL,
  `nome_relato` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `validar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `relato`
--

INSERT INTO `relato` (`cod_relato`, `nome_relato`, `data`, `descricao`, `validar`) VALUES
(8, 'TESTE', '0000-00-00', 'TESTE', 0),
(9, 'TESTE', '0000-00-00', 'Isso é um relato teste', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `conf_senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nome`, `email`, `senha`, `conf_senha`) VALUES
(1, 'Alice', 'alice@gmail.com', '123', '123'),
(2, 'Amanda Guidi', 'amanda@gmail.com', 'lalala', 'lalala'),
(3, 'Ana', 'ana@gmail.com', '123', '123'),
(4, 'Administrador', 'admin@admin.com', '123456789', '123456789');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentários`
--
ALTER TABLE `comentários`
  ADD PRIMARY KEY (`cod_comentario`),
  ADD KEY `relato_ibfk_1` (`cod_relato`),
  ADD KEY `usuario_ibfk_2` (`cod_usuario`);

--
-- Índices para tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`cod_projeto`);

--
-- Índices para tabela `relato`
--
ALTER TABLE `relato`
  ADD PRIMARY KEY (`cod_relato`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentários`
--
ALTER TABLE `comentários`
  MODIFY `cod_comentario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `cod_projeto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de tabela `relato`
--
ALTER TABLE `relato`
  MODIFY `cod_relato` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comentários`
--
ALTER TABLE `comentários`
  ADD CONSTRAINT `relato_ibfk_1` FOREIGN KEY (`cod_relato`) REFERENCES `relato` (`cod_relato`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
