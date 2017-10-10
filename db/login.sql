-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Out 10, 2017 as 12:33 
-- Versão do Servidor: 5.1.41
-- Versão do PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `sobrenome` varchar(160) NOT NULL,
  `email` varchar(180) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='// Tabelas De Contas Do Sistema De Login.' AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `email`, `senha`, `status`) VALUES
(1, 'Ewerson', 'S.', 'ewerson@silva.com', '123', 1),
(2, 'Ewerson', 'Banido', 'ewerson@ban.com', '123', 0),
(3, 'Ewerson', 'Não Verificado', 'ewerson@naoverificado.com', '123', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_ban`
--

CREATE TABLE IF NOT EXISTS `usuarios_ban` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) NOT NULL,
  `motivo` text NOT NULL,
  `data` datetime NOT NULL,
  `data_expire` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios_ban`
--

INSERT INTO `usuarios_ban` (`id`, `email`, `motivo`, `data`, `data_expire`) VALUES
(1, 'ewerson@ban.com', 'teste....', '2017-10-09 15:09:31', '2018-10-09 15:09:31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
