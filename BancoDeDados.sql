-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Abr-2021 às 18:21
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `postlogin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `CPF_avaliacao` int(11) NOT NULL,
  `nomepaciente` varchar(20) NOT NULL,
  `cadastro` varchar(20) NOT NULL,
  `queixaprincipal` varchar(20) NOT NULL,
  `historiadadoenca` varchar(20) NOT NULL,
  `v1` varchar(20) NOT NULL,
  `v2` varchar(20) NOT NULL,
  `v3` varchar(20) NOT NULL,
  `v4` varchar(20) NOT NULL,
  `v5` varchar(20) NOT NULL,
  `v6` varchar(20) NOT NULL,
  `v7` varchar(20) NOT NULL,
  `v8` varchar(20) NOT NULL,
  `v9` varchar(20) NOT NULL,
  `v10` varchar(20) NOT NULL,
  `v11` varchar(20) NOT NULL,
  `v12` varchar(20) NOT NULL,
  `13Tuberculose` varchar(20) NOT NULL,
  `v13Sífilis` varchar(20) NOT NULL,
  `v13HepatiteABC` varchar(20) NOT NULL,
  `v13SIDAAIDS` varchar(20) NOT NULL,
  `13Sarampo` varchar(20) NOT NULL,
  `v13Caxumba` varchar(20) NOT NULL,
  `v13Varicela` varchar(20) NOT NULL,
  `v13outras` varchar(20) NOT NULL,
  `v14` varchar(20) NOT NULL,
  `frequencia` varchar(20) NOT NULL,
  `va1_Históriadagestação` varchar(20) NOT NULL,
  `va2` varchar(20) NOT NULL,
  `va3` varchar(20) NOT NULL,
  `va4` varchar(20) NOT NULL,
  `ateaidadede` varchar(20) NOT NULL,
  `va5` varchar(20) NOT NULL,
  `va6` varchar(20) NOT NULL,
  `va7` varchar(20) NOT NULL,
  `primeirosanos` varchar(20) NOT NULL,
  `dificuldadeAprentizado` varchar(20) NOT NULL,
  `Estadoanímico` varchar(20) NOT NULL,
  `sono` varchar(20) NOT NULL,
  `psicomotora` varchar(20) NOT NULL,
  `Alimentacao` varchar(20) NOT NULL,
  `Sociabilidade` varchar(20) NOT NULL,
  `patologia` varchar(20) NOT NULL,
  `Observações` varchar(20) NOT NULL,
  `val1` varchar(20) NOT NULL,
  `val2` varchar(20) NOT NULL,
  `val3` varchar(20) NOT NULL,
  `val4` varchar(20) NOT NULL,
  `val5` varchar(20) NOT NULL,
  `val6` varchar(20) NOT NULL,
  `val7` varchar(20) NOT NULL,
  `val8` varchar(20) NOT NULL,
  `val9` varchar(20) NOT NULL,
  `val10` varchar(20) NOT NULL,
  `val11` varchar(20) NOT NULL,
  `val12` varchar(20) NOT NULL,
  `val13` varchar(20) NOT NULL,
  `val14` varchar(20) NOT NULL,
  `Alteraçõesencontradas` varchar(20) NOT NULL,
  `maxima` varchar(20) NOT NULL,
  `minima` varchar(20) NOT NULL,
  `Diagnosticopresuntivo` varchar(20) NOT NULL,
  `Examescomplementares` varchar(20) NOT NULL,
  `Diagnosticodefinitivo` varchar(20) NOT NULL,
  `TratamentoProservação` varchar(20) NOT NULL,
  `PlanodeTratamentoid` varchar(20) NOT NULL,
  `AtendimentoDeUrgencia` varchar(20) NOT NULL,
  `Medicacao` varchar(20) NOT NULL,
  `tipoMedicacao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_cadastro` int(10) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(5) NOT NULL,
  `altura` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `cor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `escolaridade` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `profissao` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `estadocivil` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `naturalidade_paciente` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `estado_naturalidade` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pai` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nacionalidadepai` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mae` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nacionalidademae` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(5) NOT NULL,
  `complemento` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cadastro`, `nome`, `data`, `sexo`, `peso`, `altura`, `cor`, `escolaridade`, `profissao`, `rg`, `cpf`, `estadocivil`, `naturalidade_paciente`, `estado_naturalidade`, `pai`, `nacionalidadepai`, `mae`, `nacionalidademae`, `fone`, `endereco`, `numero`, `complemento`, `bairro`, `cep`, `cidade`, `estado`) VALUES
(10, 'Endrio', '2021-04-11', 'Feminino', 100, '175', 'Branco', 'Superior', 'Porteiro', '123456789', '123456789', 'Solteiro', 'BR', 'SP', 'OI', 'BR', 'TCHAU', 'BR', '14996522883', 'Rua', 55, 'Casa', 'Itamaraty', '18682450', 'LP', 'SP'),
(10, 'Joao', '2021-04-11', '', 100, '180', 'Branco', 'Superior', 'Suporte', '123456789', '13245678910', 'Solterito', 'BR', 'SP', 'JOAO', 'BR', 'MARIA', 'BR', '14996522883', 'RUA', 55, 'CASA', 'CENTRO', '18682450', 'LP', 'SP'),
(11, 'joao', '2021-04-11', 'Masculino', 0, 'asd', 'Pardo', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'aswd', 'asd', 'asd', 'asd', 'asd', 'asd', 0, 'asd', 'asd', 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

CREATE TABLE `prontuario` (
  `id_prontuario` int(20) NOT NULL,
  `CPF_paciente` int(20) NOT NULL,
  `data` date NOT NULL,
  `medico` varchar(30) NOT NULL,
  `procedimento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `prontuario`
--

INSERT INTO `prontuario` (`id_prontuario`, `CPF_paciente`, `data`, `medico`, `procedimento`) VALUES
(2, 123456789, '2021-04-12', 'Duarte romeu', 'limpeza '),
(3, 1, '2021-04-12', 'ze', 'dor'),
(13, 0, '2021-01-01', 'Nome do Medico', 'Procedimento'),
(50, 123456789, '2021-04-13', 'João Renato', 'Acompanhamento'),
(51, 1, '2021-04-13', 'oi', 'oi'),
(54, 123456789, '2021-04-13', 'TESTE', 'TESTE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id_users` int(5) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_users`, `nome`, `email`, `pass`) VALUES
(0, 'João', 'admin@admin.com.br', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`CPF_avaliacao`);

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `prontuario`
--
ALTER TABLE `prontuario`
  ADD PRIMARY KEY (`id_prontuario`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `prontuario`
--
ALTER TABLE `prontuario`
  MODIFY `id_prontuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
