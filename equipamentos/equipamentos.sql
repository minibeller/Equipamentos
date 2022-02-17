-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Nov-2021 às 13:53
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `equipamentos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

CREATE TABLE `equipamentos` (
  `id_equipamentos` int(11) NOT NULL,
  `imei` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `numero_equipamento` int(11) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `cor` varchar(45) NOT NULL,
  `conta_google` varchar(45) NOT NULL,
  `senha_google` varchar(45) NOT NULL,
  `linha` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `observacao` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `equipamentos`
--

INSERT INTO `equipamentos` (`id_equipamentos`, `imei`, `tipo`, `numero_equipamento`, `marca`, `modelo`, `cor`, `conta_google`, `senha_google`, `linha`, `status`, `observacao`) VALUES
(10, '353002/05/095929/4', 'TABLET', 14, 'SAMSUNG ', 'SAMSUNG GALAX GT-P3100', 'BRANCO', '', '', '', 'INATIVO', '*TELA QUEBRADA*'),
(11, '359133/06/181193/7', 'TABLET', 44, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'PRETO', '', '', '', 'INATIVO', '*TELA QUEBRADA*'),
(12, '359133/06/172768/7', 'TABLET', 64, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'PRETO', '', '', '', 'INATIVO', '*PROBLEMA NO TOUCH*'),
(13, '357561/06/191410/9', 'TABLET', 32, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T211', 'PRETO', '', '', '', 'INATIVO', '*TELA QUEBRADA*'),
(14, '353002/05/096857/6', 'TABLET', 16, 'SAMSUNG ', 'SAMSUNG GALAX GT-P3100', 'BRANCO', '', '', '', 'INATIVO', '*PROBLEMA COM A BATERIA*'),
(15, '358492/06/309239/6', 'TABLET', 122, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'BRANCO', '', '', '', 'INATIVO', '*TELA COM DEFEITO NO TOUCH*'),
(16, '358878/04/096214/1', 'TABLET', 8, 'SAMSUNG ', 'SAMSUNG GALAX GT-P6200L', 'PRETO', '', '', '', 'INATIVO', '*PROBLEMA COM A BATERIA *'),
(17, '353002/05/095928/6', 'TABLET', 13, 'SAMSUNG ', 'SAMSUNG GALAX GT-P3100', 'BRANCO', '', '', '', 'INATIVO', '*PROBLEMAS COM A BATERIA*'),
(18, '353002/05/095932/8', 'TABLET', 19, 'SAMSUNG ', 'SAMSUNG GALAX GT-P3100', 'BRANCO', '', '', '', 'INATIVO', '*PROBLEMAS COM A BATERIA*'),
(19, '359133/06/179372/1', 'TABLET', 89, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'PRETO', '', '', '', 'INATIVO', '*BATERIA ESTUFOU*'),
(20, '358878/04/020862/8', 'TABLET', 12, 'SAMSUNG ', 'SAMSUNG GALAX GT-P6200L', 'PRETO', '', '', '', 'INATIVO', '*PROBLEMAS COM A BATERIA*'),
(21, '357561/05/020141/7', 'TABLET', 27, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T211', 'BRANCO', '', '', '', 'INATIVO', '*PROBLEMAS COM SOFTWARE DO EQUIPAMENTO*'),
(22, '359133/06/203825/8', 'TABLET', 99, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'PRETO', '', '', '', 'INATIVO', '*BATERIA ESTUFOU*'),
(23, '353002/05/570237/6', 'TABLET', 20, 'SAMSUNG ', 'SAMSUNG GALAX GT-P3100', 'PRATA', '', '', '', 'INATIVO', '*DESGASTE BATERIA POR MUITO TEMPO DE USO*'),
(24, '358878/04/028066/8', 'TABLET', 1, 'SAMSUNG ', 'SAMSUNG GALAX GT-P6200L', 'PRETO', '', '', '0', 'INATIVO', '*TELA QUEBRADA*'),
(25, '357561/05/131066/2', 'TABLET', 28, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T211', 'BRANCO', '', '', '', 'INATIVO', '*PROBLEMAS COM O SOFTWARE*'),
(26, '358492/06/309240/4', 'TABLET', 127, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'BRANCO', '', '', '', 'INATIVO', '*TELA QUEBRADA*'),
(27, '358878/04/020859/4', 'TABLET', 4, 'SAMSUNG ', 'SAMSUNG GALAX GT-P6200L', 'PRETO', '', '', '', 'INATIVO', '*PROBLEMAS COM A BATERIA*'),
(28, '353002/05/570268/1', 'TABLET', 24, 'SAMSUNG ', 'SAMSUNG GALAX GT-P3100', 'PRATA', '', '', '', 'INATIVO', '*PROBLEMAS COM A BATERIA*'),
(29, '358878/04/023322/0', 'TABLET', 11, 'SAMSUNG ', 'SAMSUNG GALAX GT-P6200L', 'PRETO', '', '', '', 'INATIVO', '*PROBLEMAS COM A BATERIA*'),
(30, '358878/04/022684/4', 'TABLET', 6, 'SAMSUNG ', 'SAMSUNG GALAX GT-P6200L', 'PRETO', '', '', '', 'INATIVO', '*PROBLEMAS COM A BATERIA*'),
(31, '358878/04/022756/0', 'TABLET', 9, 'SAMSUNG ', 'SAMSUNG GALAX GT-P6200L', 'PRETO', '', '', '', 'INATIVO', '*PROBLEMAS COM A BATERIA*'),
(32, '359133/06/176875/6', 'TABLET', 80, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'PRETO/BRANCO', 'tabletmd80@gmail.com', 'tabletmd80', '', 'INATIVO', 'RCA 144 - JOELSON DIAS NASCIMENTO RECEBEU UM SMARTPHONE NA DATA 22/04/2021 IMEI 355751/11/694954/5.\r\n*PARADO POIS O VENDEDOR COLOCOU UM TELA DIFERENTE DA COR DO TABLET*\r\n'),
(33, '358878/04/020851/1', 'TABLET', 7, 'SAMSUNG ', 'SAMSUNG GALAX GT-P6200L', 'PRETO', '', '', '', 'INATIVO', '*PROBLEMAS COM A  BATERIA*'),
(34, '359133/06/225162/0', 'TABLET', 83, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'PRETO', '', '', '', 'ATIVO', '*TELA QUEBRADA*'),
(35, '358492/06/311044/6', 'TABLET', 112, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'BRANCO', '', '', '', 'INATIVO', '*TELA QUEBRADA*'),
(36, '357561/05/189869/0', 'TABLET', 31, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T211', 'PRETO', '', '', '', 'INATIVO', '*TELA QUEBRADA*'),
(37, '358878/04/022725/5', 'TABLET', 2, 'SAMSUNG ', 'SAMSUNG GALAX GT-P6200L', 'PRETO', '', '', '', 'INATIVO', '*PROBLEMAS COM A BATERIA*'),
(38, '353002/05/096599/4', 'TABLET', 18, 'SAMSUNG ', 'SAMSUNG GALAX GT-P3100', 'BRANCO', '', '', '', 'INATIVO', '*PROBLEMAS COM O CONECTOU DO CARREGADOR*'),
(39, '353002/05/095917/9', 'TABLET', 15, 'SAMSUNG ', 'SAMSUNG GALAX GT-P3100', 'BRANCO', '', '', '', 'INATIVO', '*PROBLEMAS COM A BATERIA*'),
(40, '359133/06/220591/5', 'TABLET', 73, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'PRETO', '', '', '', 'INATIVO', '*DISPLAY COM MANCHA*'),
(42, '359106/10/162147/4', 'SMARTPHONE', 8, 'MOTOROLA ', 'MOTOROLA XT1952-2 - MOTO G7 PLAY', 'ÍNDICO', 'smartphone.md08@gmail.com.br', 'Mant010105*', '19 99602-4649', 'INATIVO', 'EQUIPAMENTO RESERVA T.I.\r\nRCA ANTERIOR: 250-SUPERVISORA - ANA COLETI	\r\n'),
(43, '358620/10/234523/1', 'SMARTPHONE', 28, 'LG ', 'LG LMX430 - K40S', 'PRETO', 'smartphone.md28@gmail.com.br', 'Mant010105*', '19 99651-4566', 'INATIVO', 'RESERVA T.I.'),
(44, '356721/69/170197/4', 'SMARTPHONE', 37, 'SAMSUNG ', 'SAMSUNG GALAXY SM-A015', 'PRETO', 'smartphone.md37@gmail.com.br', 'Mant010105*', '19 99889-1772', 'INATIVO', 'RESERVA T.I.'),
(45, '352817/09/139763/9', 'TABLET', 136, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T285M', 'PRETO', ' tab.md136@gmail.com', 'Mant010105*', '19 97142-4535', 'INATIVO', '*RESERVA T.I.*'),
(46, '352817/09/139711/8', 'TABLET', 131, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T285M', 'PRETO', 'tablet.md131@gmail.com', 'tabletmd131', '19 97158-6844', 'INATIVO', '*RESERVA T.I.*'),
(47, '357561/06/189835/1', 'TABLET', 33, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T211', 'PRETO', '', '', '', 'INATIVO', '*EQUIPAMENTO COM A ENTRADA MICRO-USB QUEBRADA*'),
(48, '358492/06/305578/1', 'TABLET', 117, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'BRANCO', 'tablet.md117@gmail.com', 'tabletmd117', '19 99958-6501', 'INATIVO', '*RESERVA T.I.*'),
(49, '359133/06/180534/3', 'TABLET', 35, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'PRETO', 'tabletmd135@gmail.com', 'tabletmd35', '19 99790-8523', 'INATIVO', '*RESERVA T.I.*'),
(50, '358492/06/311049/5', 'TABLET', 115, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'BRANCO', 'tabletmd115@gmail.com', 'tabletmd115', '19 99884-7573', 'INATIVO', '*RESERVA T.I.*\r\n*CAPA SUBSTITUÍDA EM 06/08/2020 - MANTIQUEIRA*'),
(51, '359133/06/203414/1', 'TABLET', 100, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'PRETO', 'tabletmd100@gmail.com', 'tablet100', '19 97130-9069', 'INATIVO', '\"Realizada a substituição da capa do tablet e entregue ao RCA em 05/04/19, conforme os termos de substituição \r\nde acessórios.\"			\r\n			\r\n			\r\n			\r\n'),
(52, '359133/06/249503/7', 'TABLET', 107, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'PRETO', 'tabletmd107@gmail.com', 'tabletmd107', '19 97100-1423', 'INATIVO', ''),
(53, '359133/06/221018/8', 'TABLET', 79, 'SAMSUNG ', 'SAMSUNG GALAXY SM-T116', 'PRETO', 'tabletmd79@gmail.com', 'tabletmd79', '19 99771-7475', 'INATIVO', '\"Realizada a substituição da capa do tablet e entregue ao RCA em 05/04/19, conforme os termos de substituição \r\nde acessórios.\"			\r\n			\r\n			\r\n			\r\n'),
(54, '353170/50/178094/8', 'SMARTPHONE', 47, 'SAMSUNG ', 'SAMSUNG GALAXY SM-A015', 'PRETO', 'smartphone.dm47@gmail.com', 'Mant010105*', '19 99722-9820', 'ATIVO', '*FOI REALIZADA A TROCA DE CAPA E PELÍCULA NA DATA 09/11/2021.*'),
(55, '358620/10/718881/8', 'SMARTPHONE', 22, 'LG ', 'LG LMX430 - K40S', 'PRETO', 'smartphone.dm22@gmail.com.br', 'Mant010105*', '19 97128-3622', 'INATIVO', ''),
(56, '357234/10/893185/2', 'SMARTPHONE', 20, 'MOTOROLA ', 'MOTOROLA XT1952-2 - MOTO G7 PLAY', 'ÍNDICO', 'smartphone.md01@gmail.com.br', 'Mant010105*', '19 99609-5330', 'INATIVO', ''),
(57, '358620/10/718935/0', 'SMARTPHONE', 21, 'LG ', 'LG LMX430 - K40S', 'PRETO', 'smartphone.dm21@gmail.com.br', 'Mant010105*', '19 99934-2903', 'ATIVO', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `id_historico` int(11) NOT NULL,
  `nome_representante` varchar(45) NOT NULL,
  `atuacao` varchar(45) NOT NULL,
  `supervisor` varchar(45) NOT NULL,
  `data_configuracao` date NOT NULL,
  `data_desligamento` date NOT NULL,
  `observacao` varchar(80) NOT NULL,
  `equipamentos_id_equipamentos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`id_historico`, `nome_representante`, `atuacao`, `supervisor`, `data_configuracao`, `data_desligamento`, `observacao`, `equipamentos_id_equipamentos`) VALUES
(17, '728 PJ - PEDRO PAULO HIPÓLITO DOS SANTOS', 'CAPITAL', 'DIOGO CAMPOS', '2021-11-10', '0000-00-00', 'setor 06 TREMEMBE/ TAUBATE/REDENÇÃO DA SERRA/ NATIVIDADE DA SERRA/SÃO LUIZ DO PA', 0),
(18, 'RCA 082 - JULIO FLORÍO', 'INTERIOR', 'SUB. FRANCISCO OTSUKA', '2021-11-11', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_user`, `nome`, `email`, `senha`) VALUES
(1, 'JULIA', 'julia@gmail.com', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD PRIMARY KEY (`id_equipamentos`);

--
-- Índices para tabela `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id_historico`,`equipamentos_id_equipamentos`),
  ADD KEY `fk_historico_equipamentos_idx` (`equipamentos_id_equipamentos`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  MODIFY `id_equipamentos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `historico`
--
ALTER TABLE `historico`
  MODIFY `id_historico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `fk_historico_equipamentos` FOREIGN KEY (`equipamentos_id_equipamentos`) REFERENCES `equipamentos` (`id_equipamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
