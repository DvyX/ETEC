-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jun-2021 às 21:35
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_dicionary`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbwords`
--

CREATE TABLE `tbwords` (
  `idWord` int(11) NOT NULL,
  `titleWord` varchar(40) NOT NULL,
  `descWord` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbwords`
--

INSERT INTO `tbwords` (`idWord`, `titleWord`, `descWord`) VALUES
(1, 'Algorithm ', 'uma série de instruções ou passos de procedimentos para asolução de um problema específico'),
(2, 'Caption', ' legenda, título, cabeçalho'),
(3, 'Alt Key', ' tecla Alt (tecla especial em um teclado de PC usada para ativar funções especiais'),
(4, 'Flowchart', ' gráfico, diagrama que mostra informação como uma série de linhas ou blocos.'),
(5, 'Amplifier', 'amplificador'),
(6, 'Close file', ' fechar um arquivo'),
(7, 'Analog / digital converter', 'conversor analógico / digital'),
(8, 'Data control', 'controle de dados, gereciamento de dados'),
(9, 'Auto activate', 'ativar automaticamente'),
(10, 'Backup (no MS –DOS)', ' comando para salvar os dados de um disco\r\nrígido em disquetes'),
(11, 'BOS (Basic Operating System)', ' Sistema Operacional Básico'),
(12, 'Bottom', ' fundo de alguma coisa inferior'),
(13, ' Bug', ' erro, falha em programa de computador'),
(14, ' Byte', 'byte, grupo de bits ou dígitos binários (geralmente oito que o computador opera como uma unidade simples)'),
(15, 'Caps Lock', ' (trava das maiúsculas) tecla que permite que todos os caracteres sejam digitados em maiúsculas'),
(16, 'Compiler', ' compilar, converter um programa de linguagem de alto nível em um programa em código de máquina que pode ser executado diretamente'),
(17, 'Data Field', ' campo de dados, parte de uma situação, instrução de computador que contém a posição do dado'),
(18, ' DOS (Disk Operating System)', 'Sistema Operacional em disco'),
(19, 'Directory', 'diretório ou lista; método de organização de arquivos armazenados em disco'),
(20, ' Display', ' exibir, mostrar informação'),
(21, ' Extract file', ' extrair arquivo'),
(22, 'Edge', ' borda / margem'),
(23, 'Failure', ' falha, avaria, pane; qualquer problema grave causado por defeito no hardware ou software'),
(24, ' File se', ' conjunto de arquivos'),
(25, ' Flowchart', ' fluxograma'),
(26, 'Hardware', ' unidades físicas, componentes, circuitos integrados e discos e mecanismos que compõem um computador ou seus periféricos'),
(27, 'Hide Edge', ' esconder, ocultar bordas'),
(28, ' Integer', ' número inteiro (sem componentes fracionários)'),
(29, ' ink', ' tinta de caneta, de impressora'),
(30, 'USB', 'circuito paralelo universal em série, é um tipo de conexão para ligar e usar (Plug and Play) que permite a conexão de periféricos sem a\r\nnecessidade de desligar o computador'),
(31, ' Tab ', ' tabular, organizar textos em colunas'),
(32, 'Screen', ' proteger alguma coisa com uma tela33) Scroll = rolar a tela'),
(33, 'Server', ' servidor'),
(34, 'Set up', 'preparar equipamento para operação'),
(35, 'Shift ', ' muda, deslocar, mudança'),
(36, 'Short cut ', ' atalho'),
(37, ' Ram (Randon Access Memory)', ' Memória de acesso aleatório'),
(38, ' Reset', ' restaurar, inicializar'),
(39, ' Ruler', ' régua'),
(40, ' ROM (Read Only Memory)', 'Memória somente para leitura'),
(41, 'Password', 'senha'),
(42, 'Lock', 'travar / bloquear'),
(43, 'Load ', ' carregar');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbwords`
--
ALTER TABLE `tbwords`
  ADD PRIMARY KEY (`idWord`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbwords`
--
ALTER TABLE `tbwords`
  MODIFY `idWord` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
