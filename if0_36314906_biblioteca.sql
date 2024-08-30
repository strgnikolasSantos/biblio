-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql310.infinityfree.com
-- Tempo de geração: 30/08/2024 às 18:46
-- Versão do servidor: 10.6.19-MariaDB
-- Versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `if0_36314906_biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `codigoLivro` int(11) NOT NULL,
  `tituloLIvro` varchar(50) DEFAULT NULL,
  `codigoIsbn` char(17) DEFAULT NULL,
  `autorLivro` varchar(50) DEFAULT NULL,
  `nomeEditora` varchar(50) DEFAULT NULL,
  `quantPaginas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`codigoLivro`, `tituloLIvro`, `codigoIsbn`, `autorLivro`, `nomeEditora`, `quantPaginas`) VALUES
(1, 'Mais esperto que o diabo', '978-85-68014-00-4', 'Napoleon Hill', 'Citadel', 200),
(2, 'A biblioteca da meia-noite', '978-65-58380-54-2', 'Matt Haig', 'Bertrand Brasil', 309),
(4, 'Inove para ser único', '978-65-55443-93-6', 'Johnathan Alves', 'Gente', 120),
(5, 'É assim que acaba', '78-85-01112-51-4', 'Colleen Hoover', 'Galera Record', 368),
(6, 'O poder da autorresponsabilidade', '978-85-45202-21-9', 'Paulo Vieira', 'Gente', 160),
(8, 'Hábitos atômicos', '978-85-50807-56-0', 'James Clear', 'Alta Life', 320),
(10, 'É assim que começa', '978-65-59811-39-7', 'Colleen Hoover', 'Galera Record', 336),
(12, 'O Pequeno PrÃ­ncipe', 'O Pequeno PrÃ­nci', 'Antoine de Saint-ExupÃ©ry', ' Editora Gallimard', 96),
(13, 'Harry Potter e a Pedra Filosofal', ' 978-85-325-2561-', 'J.K. Rowling', 'Bloomsbury Publishing', 223);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`codigoLivro`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `codigoLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
