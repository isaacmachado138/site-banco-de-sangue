-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 12:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `contato`
--

CREATE TABLE `contato` (
  `idcontato` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(25) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contato`
--

INSERT INTO `contato` (`idcontato`, `nome`, `email`, `telefone`, `mensagem`) VALUES
(1, 'Reginaldo Jose', 'reginaldinho@outlook.com.', '19952256556', 'O site e muito bom, estao de parabens!\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `doador`
--

CREATE TABLE `doador` (
  `iddoador` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `idade` int(11) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `celular` varchar(18) NOT NULL,
  `email` varchar(30) NOT NULL,
  `rg` varchar(18) NOT NULL,
  `peso` int(11) NOT NULL,
  `tipo_sangue` varchar(10) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `fumante` varchar(6) NOT NULL,
  `tempo_fumante` int(11) NOT NULL,
  `alcoolatra` varchar(6) NOT NULL,
  `tatuagem` varchar(6) NOT NULL,
  `usa_drogas` varchar(6) NOT NULL,
  `medicacao` varchar(6) NOT NULL,
  `nome_medicacao` text NOT NULL,
  `cirurgia` varchar(6) NOT NULL,
  `tempo_cirurgia` int(11) NOT NULL,
  `vacina` varchar(4) NOT NULL,
  `nome_vacina` text NOT NULL,
  `exame` varchar(6) NOT NULL,
  `nome_exame` text NOT NULL,
  `doenca` varchar(6) NOT NULL,
  `nome_doenca` int(11) NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doador`
--

INSERT INTO `doador` (`iddoador`, `nome`, `idade`, `cidade`, `estado`, `endereco`, `celular`, `email`, `rg`, `peso`, `tipo_sangue`, `sexo`, `fumante`, `tempo_fumante`, `alcoolatra`, `tatuagem`, `usa_drogas`, `medicacao`, `nome_medicacao`, `cirurgia`, `tempo_cirurgia`, `vacina`, `nome_vacina`, `exame`, `nome_exame`, `doenca`, `nome_doenca`, `data_cadastro`) VALUES
(2, 'João', 51, 'Pirituba', 'PR', 'Av. Francisco Vidal', '40028922', 'ggsfhsfhs@fddfh.com', '555511114', 55, 'O+', 'Masculino', 'Não', 0, 'Não', 'Sim', 'Sim', 'Não', '', 'Não', 0, 'Não', '', 'Não', '', 'Não', 0, '0000-00-00'),
(3, 'João Da Silva', 22, 'Maua', 'PR', 'Rua Bernardo Cunha', '9515131612', 'joaodsilva@gmail.com', '121546515', 91, 'A-', 'Masculino', 'Não', 0, 'Sim', 'Sim', 'Sim', 'Não', '', 'Não', 0, 'Não', '', 'Não', '', 'Não', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`idlogin`, `email`, `senha`) VALUES
(1, 'isaac@gmail.com', 'adminadm'),
(2, 'milton@outlook.com.br', 'mirtao12'),
(3, 'adminadmin@hotmail.com', 'adminadm'),
(4, 'fsdgsdgaghedhd@hfdse.xhf', 'hhthsa'),
(5, 'reginaldinho@outlook.com.br', 'sdagasfh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idcontato`);

--
-- Indexes for table `doador`
--
ALTER TABLE `doador`
  ADD PRIMARY KEY (`iddoador`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idlogin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `idcontato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doador`
--
ALTER TABLE `doador`
  MODIFY `iddoador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
