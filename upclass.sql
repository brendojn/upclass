-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jun-2017 às 17:44
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upclass`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `amizades`
--

CREATE TABLE `amizades` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_de` int(11) DEFAULT NULL,
  `usuario_para` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `amizades`
--

INSERT INTO `amizades` (`id`, `usuario_de`, `usuario_para`, `status`) VALUES
(1, 13, 14, 0),
(2, 13, 15, 0),
(3, 13, 14, 0),
(4, 13, 15, 0),
(5, 13, 15, 0),
(6, 13, 14, 0),
(7, 13, 15, 0),
(8, 16, 15, 0),
(9, 16, 14, 0),
(10, 16, 13, 0),
(11, 17, 13, 0),
(12, 17, 16, 0),
(13, 17, 15, 0),
(14, 13, 17, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `titulo` varchar(80) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `grupos`
--

INSERT INTO `grupos` (`id`, `id_usuario`, `titulo`) VALUES
(1, 13, 'adxad'),
(2, 13, 'GrupÃ£o'),
(3, 13, 'wxwsxwx'),
(4, 13, ' d d d '),
(5, 13, 'eefefe'),
(6, 13, 'rfrff'),
(7, 13, 'gjfgjfj'),
(8, 13, 'fgfh'),
(9, 13, 'gjgjj'),
(10, 13, 'fhfh'),
(11, 13, 'swfsf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

CREATE TABLE `postagens` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `data_criacao` datetime DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `texto` text,
  `url` varchar(50) DEFAULT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `postagens`
--

INSERT INTO `postagens` (`id`, `id_usuario`, `data_criacao`, `tipo`, `texto`, `url`, `id_grupo`) VALUES
(149, 13, '2017-06-14 09:26:09', 'foto', 'brendo', '781f95a82ef39cd6563dbb336f41254f.jpg', 0),
(150, 13, '2017-06-14 10:00:13', 'foto', 'brendo', 'de4f96fad6199c96a63682f70f32d3de.jpg', 0),
(151, 13, '2017-06-14 10:05:04', 'foto', 'brendo', '1a4db8018e82d2282bdec91211e22e15.jpg', 0),
(152, 13, '2017-06-14 10:06:18', 'foto', 'brendo', '7712490cf9e15f0d560743d761d33fcc.jpg', 0),
(153, 13, '2017-06-14 10:07:11', 'foto', 'brendo', 'a0192b5208006b1f481c805ffd3fbe26.jpg', 0),
(154, 13, '2017-06-14 10:08:35', 'foto', 'brendo', '5be2a7d9cf96959a09488e30373165e2.jpg', 0),
(155, 16, '2017-06-14 14:10:55', 'texto', 'Brendo', '', 0),
(156, 16, '2017-06-14 14:11:05', 'foto', 'dtgdtgdtgdtg', '773596ccb8b7f511275a116c8273c416.jpg', 0),
(148, 13, '2017-06-14 09:24:15', 'foto', 'brendo', '43b23960fedebc9da89bba2a08cdad39.jpg', 0),
(147, 13, '2017-06-14 09:23:12', 'foto', 'brendo', 'f0ef09cbbbebcad2968fd8110cd26d94.jpg', 0),
(146, 13, '2017-06-14 09:16:14', 'foto', 'brendo', '4be2048e2c1c53bb4da4f6c382a2b59c.jpg', 0),
(145, 13, '2017-06-14 09:11:38', 'texto', 'OlÃ¡', '', 0),
(144, 13, '2017-06-14 09:10:48', 'texto', 'OlÃ¡', '', 0),
(143, 13, '2017-06-14 09:10:36', 'texto', 'OlÃ¡', '', 0),
(142, 13, '2017-06-14 09:09:40', 'texto', 'OlÃ¡', '', 0),
(141, 13, '2017-06-14 09:09:14', 'texto', 'OlÃ¡', '', 0),
(140, 13, '2017-06-14 09:08:45', 'texto', 'OlÃ¡', '', 0),
(139, 13, '2017-06-14 09:04:16', 'texto', 'OlÃ¡', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens_comment`
--

CREATE TABLE `postagens_comment` (
  `id` int(11) NOT NULL,
  `id_post` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `data_criacao` datetime DEFAULT NULL,
  `texto` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `disciplina` varchar(100) NOT NULL,
  `instituicao` varchar(80) NOT NULL,
  `metodologia` text,
  `senha` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nome`, `disciplina`, `instituicao`, `metodologia`, `senha`) VALUES
(13, 'brendojnio@hotmail.com', 'Brendo', 'TIS', 'PUC', 'Cafesidjsidjsidjssfc\r\nsfcsfvsd\r\ncsdvsdv\r\nsvsvsd\r\nsvsdvs\r\nsvdsvs\r\nsdvsdv\r\n', '202cb962ac59075b964b07152d234b70'),
(14, 'brendojnio@gmail.com', 'Brendo', 'ProgramaÃ§Ã£o', 'PUC', '3 provas de 40 pontos', 'd9b1d7db4cd6e70935368a1efb10e377'),
(15, 'ssantos@gattecnologia.com.br', 'Brendo', 'Engenharia de Software', 'PUC', '', 'd9b1d7db4cd6e70935368a1efb10e377'),
(16, 'd@hotmail.com', 'Davi ', 'PortuguÃªs', 'UNA', '', 'd9b1d7db4cd6e70935368a1efb10e377'),
(17, 'h@h.comn', 'jyihgyf', 'Psicopatia', 'INFERNO', '', 'd9b1d7db4cd6e70935368a1efb10e377');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amizades`
--
ALTER TABLE `amizades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postagens`
--
ALTER TABLE `postagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postagens_comment`
--
ALTER TABLE `postagens_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amizades`
--
ALTER TABLE `amizades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `postagens`
--
ALTER TABLE `postagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
--
-- AUTO_INCREMENT for table `postagens_comment`
--
ALTER TABLE `postagens_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
