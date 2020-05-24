-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Maio-2020 às 20:28
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bruno`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa_startup`
--

CREATE TABLE `empresa_startup` (
  `id` int(11) NOT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `razao_social` varchar(45) DEFAULT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `data_fundacao` date DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `descricao_curta` varchar(45) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `tags` varchar(45) DEFAULT NULL,
  `modelo_negocio` varchar(45) DEFAULT NULL,
  `publico_alvo` varchar(45) DEFAULT NULL,
  `momento` varchar(45) DEFAULT NULL,
  `segmento_principal` varchar(45) DEFAULT NULL,
  `segmento_secundario` varchar(45) DEFAULT NULL,
  `tamanho_time` varchar(45) DEFAULT NULL,
  `faturamento_anual` varchar(45) DEFAULT NULL,
  `website` varchar(45) DEFAULT NULL,
  `linkedin` varchar(45) DEFAULT NULL,
  `facebook` varchar(45) DEFAULT NULL,
  `app_store` varchar(45) DEFAULT NULL,
  `google_play` varchar(45) DEFAULT NULL,
  `youtube` varchar(45) DEFAULT NULL,
  `instagram` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `logradouro` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `endereco_principal` tinyint(4) DEFAULT NULL,
  `cargo_funcao` varchar(45) DEFAULT NULL,
  `nivel_hierarquico` varchar(100) DEFAULT NULL,
  `id_pessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `id_pessoa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cadastrar_login` varchar(100) DEFAULT NULL,
  `validar_login` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `nome_completo` varchar(45) DEFAULT NULL,
  `foto` varchar(250) DEFAULT '',
  `sexo` varchar(45) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `telefone_whatsapp` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `confirmacao_email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `confirmacao_senha` varchar(45) DEFAULT NULL,
  `login_id_login` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresa_startup`
--
ALTER TABLE `empresa_startup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_empresa_startup_login1_idx` (`id_pessoa`);

--
-- Índices para tabela `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_instituicao_login2_idx` (`id_pessoa`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`),
  ADD KEY `fk_pessoa_login_idx` (`login_id_login`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa_startup`
--
ALTER TABLE `empresa_startup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `empresa_startup`
--
ALTER TABLE `empresa_startup`
  ADD CONSTRAINT `fk_empresa_startup_login1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `instituicao`
--
ALTER TABLE `instituicao`
  ADD CONSTRAINT `fk_instituicao_login2` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD CONSTRAINT `fk_pessoa_login` FOREIGN KEY (`login_id_login`) REFERENCES `login` (`id_login`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
