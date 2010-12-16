-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Dez 16, 2010 as 04:43 PM
-- Versão do Servidor: 5.1.36
-- Versão do PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Banco de Dados: `bertoni`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `idCategoria` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `descricao` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nome`, `descricao`) VALUES
(1, 'Eletrônicos', 'Nessa categoria você encontrará seções referentes à produtos eletrônicos'),
(2, 'Livros', 'Nessa categoria você encontrará seções referentes à livros'),
(3, 'Esportes', 'Nessa categoria você encontrará produtos relacionados com o seu esporte favorito'),
(4, 'Músicas', 'Nessa categoria você encontrará seções referentes ao seu gosto musical');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `Usuarios_id_usuario` int(20) unsigned NOT NULL,
  `cep` varchar(9) COLLATE utf8_bin DEFAULT NULL,
  `mail` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `numero_casa` int(6) unsigned DEFAULT NULL,
  `Complemento_endereco` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  PRIMARY KEY (`Usuarios_id_usuario`),
  KEY `clientes_FKIndex1` (`Usuarios_id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `clientes`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `idcompras` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `clientes_Usuarios_id_usuario` int(20) unsigned NOT NULL,
  `valor` float DEFAULT NULL,
  `data_2` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `pgto` int(1) unsigned DEFAULT NULL,
  `num_parcelas` int(2) unsigned DEFAULT NULL,
  `Situacao` int(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`idcompras`),
  KEY `compras_FKIndex1` (`clientes_Usuarios_id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `compras`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `compras_has_produtos`
--

CREATE TABLE IF NOT EXISTS `compras_has_produtos` (
  `compras_idcompras` int(20) unsigned NOT NULL,
  `produtos_cod` int(20) unsigned NOT NULL,
  `quantidade` int(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`compras_idcompras`,`produtos_cod`),
  KEY `compras_has_produtos_FKIndex1` (`compras_idcompras`),
  KEY `compras_has_produtos_FKIndex2` (`produtos_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `compras_has_produtos`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `corporativos`
--

CREATE TABLE IF NOT EXISTS `corporativos` (
  `Usuarios_id_usuario` int(5) unsigned NOT NULL,
  `Permissao_subcategoria` int(2) unsigned DEFAULT NULL,
  `Permissao_produto` int(2) unsigned DEFAULT NULL,
  `Permissao_promocao` int(2) unsigned DEFAULT NULL,
  `Permissao_relatorio` int(2) unsigned DEFAULT NULL,
  `Permissao_categoria` int(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`Usuarios_id_usuario`),
  KEY `corporativos_FKIndex1` (`Usuarios_id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `corporativos`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `edicoes`
--

CREATE TABLE IF NOT EXISTS `edicoes` (
  `id_edicao` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `corporativos_Usuarios_id_usuario` int(20) unsigned NOT NULL,
  `data_2` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `conteudo` varchar(512) COLLATE utf8_bin DEFAULT NULL,
  `local_2` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_edicao`),
  KEY `edicoes_FKIndex1` (`corporativos_Usuarios_id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `edicoes`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE IF NOT EXISTS `imagens` (
  `produtos_cod` int(20) unsigned NOT NULL,
  `foto` varchar(1000) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`produtos_cod`),
  KEY `imagens_FKIndex1` (`produtos_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`produtos_cod`, `foto`) VALUES
(0, 'cc89fbea685d00710edd22026912907c91777d75.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `cod` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `subcategorias_idSubcategoria` int(20) unsigned NOT NULL,
  `descricao` mediumtext COLLATE utf8_bin,
  `nome` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `quantidade` int(8) unsigned DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `promocional` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`cod`),
  KEY `produtos_FKIndex1` (`subcategorias_idSubcategoria`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod`, `subcategorias_idSubcategoria`, `descricao`, `nome`, `quantidade`, `preco`, `promocional`) VALUES
(1, 1, 'Celular GSM, quadriband, com carregador e manual.', 'Nokia 3310', 22, 120, 0),
(2, 1, 'Celular GSM, quadriband, desbloqueado com câmera de 1.3mpx, bluetooth.', 'Motorola v3', 21, 250, 0),
(3, 2, 'Batedeira de 4 litros com 3 palhetas e 5 níveis de velocoidade', 'Batedeira', 14, 120, 0),
(4, 2, NULL, 'Cafeteira', 32, 80, 0),
(5, 3, 'livro de calculo', 'Calculo A - Diva', 2, 150, 0),
(6, 3, 'livro de física 3', 'Física III - Hallyday', 52, 123, 0),
(7, 4, 'Livro que fala sobre a anatômia humana.', 'Anatomia', 56, 112, 1),
(8, 4, 'Estudos de fisiologia de qwetyu', 'Fisiologia', 454, 1, 1),
(9, 5, 'Uniforme completo do Bahia de Feira', 'Uniforme Bahia de Feira', 45, 98, 1),
(10, 5, 'Camiseta numero 10 do Flamengo', 'Camisa do Flamengo', 12, 109, 1),
(11, 6, 'Chuteira Nike Total 90 branca número 38', 'Chuteira Total 90', 12, 250, 1),
(12, 6, 'Chuteira de birro dalponte número 41', 'Chuteira Birro Dalponte', 2, 80, 0),
(13, 7, 'Bateria 7 peças pearl export preta', 'Bateria pearl export', 2, 8500, 0),
(14, 7, 'Bateria Tur Bo 7 peças verde', 'Bateria Tur Bo', 1, 1600, 0),
(15, 8, 'Cd Restart Ao vivo:\r\nindicado para homossexuais\r\nCom o sucesso: "Eu hoje dei dei dei, não vou dar mais"', 'Cd RESTART', 1, 1.99, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategorias`
--

CREATE TABLE IF NOT EXISTS `subcategorias` (
  `idSubcategoria` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `categorias_idCategoria` int(20) unsigned NOT NULL,
  `descricao` varchar(512) COLLATE utf8_bin DEFAULT NULL,
  `nome` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idSubcategoria`),
  KEY `subcategorias_FKIndex1` (`categorias_idCategoria`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `subcategorias`
--

INSERT INTO `subcategorias` (`idSubcategoria`, `categorias_idCategoria`, `descricao`, `nome`) VALUES
(1, 1, 'Aparelhos modernos e inovadores, com os melhores preços do mercado.', 'Celulares'),
(2, 1, 'Conheça as novidades de eletrodoméstico que a Bertoni tem para a sua casa.', 'Eletrodomésticos'),
(3, 2, 'Livros que abordam as disciplinas básicas da engenharia.', 'Engenharias'),
(4, 2, 'Livros que abordam temas relacionados com a saúde.', 'Saúde'),
(5, 3, NULL, 'Uniformes'),
(6, 3, NULL, 'Chuteiras'),
(7, 4, NULL, 'Instrumentos'),
(8, 4, NULL, 'Mídias');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cpf` varchar(10) DEFAULT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `telefone` varchar(9) DEFAULT NULL,
  `nome` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nome` (`nome`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `cpf`, `username`, `password`, `permission`, `telefone`, `nome`) VALUES
(37, NULL, 'alen', '3b3b9558f9fde1000316abec4c43908e3d50db18', 'cliente', NULL, NULL),
(30, NULL, 'dede', '54d799098b973e9d5cef24d37484302c385b6cba', 'admin', NULL, NULL),
(38, NULL, 'gimp', '7b942d62753eb163bcabb5e2330d7e1c6c69bb76', 'funcionario', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `login` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `senha` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `telefone` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `nome` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `usuarios`
--

