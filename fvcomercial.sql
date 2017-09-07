-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Set-2017 às 13:47
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fvcomercial`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `idendereco` int(11) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `cobraca` tinyint(1) NOT NULL,
  `complemento` varchar(20) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `logradouro` varchar(30) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `observacao` varchar(200) NOT NULL,
  `codigocidade` varchar(255) NOT NULL,
  `codigoestado` varchar(255) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`idendereco`, `bairro`, `cep`, `cobraca`, `complemento`, `endereco`, `logradouro`, `numero`, `observacao`, `codigocidade`, `codigoestado`, `idusuario`) VALUES
(1, 'antonio bezerra', '60360440', 0, '', 'guine', 'travessa', '26', '', '', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemorcamento`
--

CREATE TABLE `itemorcamento` (
  `iditem` int(11) NOT NULL,
  `precounitario` float NOT NULL,
  `quantidade` float NOT NULL,
  `valortotalitem` float NOT NULL,
  `idorcamento` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `idorcamento` int(11) NOT NULL,
  `nomeusuario` varchar(200) NOT NULL,
  `valortotalitens` float NOT NULL,
  `valortotalorcamento` float NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idusuariovendedor` int(11) NOT NULL,
  `dtemissao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `unidade` varchar(100) NOT NULL,
  `precovenda` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `tipo` varchar(31) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fonecelular` varchar(15) NOT NULL,
  `nomefantasia` varchar(45) NOT NULL,
  `observacao` varchar(200) NOT NULL,
  `tipopessoa` varchar(15) NOT NULL,
  `cpfcnpj` varchar(20) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `razaosocial` varchar(200) NOT NULL,
  `vendedor_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`tipo`, `idusuario`, `email`, `fonecelular`, `nomefantasia`, `observacao`, `tipopessoa`, `cpfcnpj`, `senha`, `razaosocial`, `vendedor_idusuario`) VALUES
('CLIENTE', 1, 'emerson.jx13@gmail.com', '988725804', 'emerson', '', 'FISICA', '', '123', 'emerson', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`idendereco`);

--
-- Indexes for table `itemorcamento`
--
ALTER TABLE `itemorcamento`
  ADD PRIMARY KEY (`iditem`);

--
-- Indexes for table `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`idorcamento`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `idendereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `itemorcamento`
--
ALTER TABLE `itemorcamento`
  MODIFY `iditem` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `idorcamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
