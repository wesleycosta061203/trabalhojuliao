-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2016 at 05:30 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `funildevendas`
--

-- --------------------------------------------------------

--
-- Table structure for table `alteracoes_sitacoes_vendas`
--

CREATE TABLE IF NOT EXISTS `alteracoes_sitacoes_vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `venda_id` int(11) NOT NULL,
  `situacoes_venda_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `alteracoes_sitacoes_vendas`
--

INSERT INTO `alteracoes_sitacoes_vendas` (`id`, `venda_id`, `situacoes_venda_id`, `created`, `modified`) VALUES
(1, 1, 1, '2016-03-30 00:00:00', NULL),
(2, 2, 1, '2016-03-30 00:00:00', NULL),
(3, 1, 2, '2016-03-30 00:14:51', '2016-03-30 00:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `categorias_produtos`
--

CREATE TABLE IF NOT EXISTS `categorias_produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(520) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categorias_produtos`
--

INSERT INTO `categorias_produtos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'AutomaÃ§Ã£o', '2016-03-28 00:00:00', '2016-03-29 22:14:19'),
(2, 'MediÃ§Ã£o', '2016-03-29 22:09:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `niveis_acessos`
--

CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-03-25 00:00:00', NULL),
(2, 'Colaborador', '2016-03-25 00:00:00', NULL),
(3, 'Cliente', '2016-03-25 00:00:00', '2016-03-27 20:26:18'),
(4, 'Fornecedor', '2016-03-27 20:12:03', '2016-03-27 20:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(520) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` varchar(20) NOT NULL,
  `categorias_produto_id` int(11) NOT NULL,
  `situacoes_produto_id` int(11) NOT NULL,
  `foto` varchar(120) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `quantidade`, `preco`, `categorias_produto_id`, `situacoes_produto_id`, `foto`, `created`, `modified`) VALUES
(1, 'Inversor de frequÃªncia 7,5cv', 15, '1956,16', 1, 0, NULL, '2016-03-28 00:00:00', '2016-03-28 22:11:36'),
(2, 'Inversor de frequÃªncia 0,33cv monofÃ¡sico', 25, '773,36', 1, 2, NULL, '2016-03-28 21:57:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `situacoes`
--

CREATE TABLE IF NOT EXISTS `situacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `situacoes`
--

INSERT INTO `situacoes` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Ativo', '2016-03-25 00:00:00', NULL),
(2, 'Inativo', '2016-03-25 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `situacoes_produtos`
--

CREATE TABLE IF NOT EXISTS `situacoes_produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `situacoes_produtos`
--

INSERT INTO `situacoes_produtos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Ativo', '2016-03-28 00:00:00', NULL),
(2, 'Inativo', '2016-03-28 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `situacoes_vendas`
--

CREATE TABLE IF NOT EXISTS `situacoes_vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `situacoes_vendas`
--

INSERT INTO `situacoes_vendas` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Aguardando Pagamento', '2016-03-29 00:00:00', NULL),
(2, 'Em AnÃ¡lise', '2016-03-29 00:00:00', '2016-03-29 23:04:14'),
(3, 'Pago', '2016-03-29 23:01:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `senha` varchar(240) NOT NULL,
  `situacoe_id` int(11) NOT NULL,
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Cesar Szpak', 'cesar@celke.com.br', '202cb962ac59075b964b07152d234b70', 1, 1, '2016-03-25 01:01:01', NULL),
(2, 'Kelly1', 'kelly1@celke.com.br', '202cb962ac59075b964b07152d234b70', 1, 1, '2016-03-25 02:02:02', '2016-03-27 19:22:38'),
(3, 'Jessica', 'jessica@celke.com.br', '202cb962ac59075b964b07152d234b70', 2, 3, '2016-03-25 03:03:33', NULL),
(4, 'Gabriely', 'gabriely@celke.com.br', '202cb962ac59075b964b07152d234b70', 1, 1, '2016-03-25 22:50:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendas`
--

CREATE TABLE IF NOT EXISTS `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto_id` int(11) NOT NULL,
  `situacoes_venda_id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `data_venda` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `vendas`
--

INSERT INTO `vendas` (`id`, `produto_id`, `situacoes_venda_id`, `usuario_id`, `data_venda`, `created`, `modified`) VALUES
(1, 1, 1, 1, '2016-03-29 00:00:00', '2016-03-29 00:00:00', NULL),
(2, 1, 3, 3, '2016-03-29 23:29:20', '2016-03-29 23:29:20', '2016-03-29 23:40:04'),
(3, 2, 2, 3, '2016-03-29 23:29:34', '2016-03-29 23:29:34', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
