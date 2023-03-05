-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.25a
-- Versão do PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `db_lgerken`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(85) NOT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `url`) VALUES
(1, 'Concessionaria de Carros', 'http://www.carros.com.br'),
(2, 'Concessionaria de Motos', 'http://www.motos.com.br'),
(4, 'Escola Central 2', 'http://www.escolacentral.com.br');
(5, 'Senac', 'https://www.mg.senac.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(85) NOT NULL,
  `email` varchar(85) NOT NULL,
  `assunto` varchar(85) NOT NULL,
  `mensagem` mediumtext NOT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(1, 'Lucas Gerken', 'lucas_gerken@gmail.com', 'Teste de Assunto', 'Teste de Assunto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `titulo` varchar(85) NOT NULL,
  `descricao` longtext NOT NULL,
  `img` varchar(85) NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `data`, `titulo`, `descricao`, `img`) VALUES
(1, '2016-10-18', 'Título da notícia publicada no Blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dapibus, mauris vel consectetur efficitur, enim massa semper mi, eget iaculis ligula nibh id dui. Etiam quis ex a urna volutpat posuere nec lacinia magna. Fusce sem est, rutrum quis rhoncus nec, ultricies a justo. Nam a lacinia orci. Aliquam lacinia eu nulla eget egestas. Quisque mollis volutpat eros non pretium. Duis mauris ligula, tristique vitae elementum vitae, blandit eget est. Praesent sit amet tellus at nibh pharetra mattis. Quisque in consequat massa. Quisque condimentum egestas eleifend. Fusce volutpat laoreet consequat. Morbi fermentum ornare erat, non malesuada enim consectetur id.\r\n\r\nNullam sit amet vulputate erat, eu tristique urna. Etiam nec tempor quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam nec erat a elit posuere luctus quis non mauris. Maecenas ut ultrices ligula. Aliquam erat volutpat. Mauris tincidunt leo et aliquet posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum interdum aliquet odio. Phasellus porttitor aliquet metus sit amet fermentum. Fusce in condimentum diam, a vulputate elit. Nunc ipsum odio, molestie in sem sed, sodales porttitor orci.\r\n\r\nMorbi a mi egestas, cursus enim a, dignissim quam. Nullam sit amet consectetur est. Sed nec egestas ante. Curabitur quis urna aliquet, luctus ante vitae, egestas odio. In lorem velit, pulvinar ut sem vel, tincidunt volutpat nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in elit quis ex tempor dictum eget ut ante. Nam eu odio eu neque feugiat fermentum eget vel lorem. Aliquam hendrerit justo et diam porttitor efficitur. Mauris at volutpat lectus.\r\n\r\nIn porttitor luctus feugiat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque vitae quam diam. Sed vitae nisl lectus. Nulla sed elit ornare, tincidunt diam eu, dictum leo. Phasellus tempus tristique velit, vitae cursus orci. Cras a augue nisi. Proin ultrices tempor libero, ac laoreet massa. Nulla molestie dignissim dapibus. Quisque eleifend et ante at lacinia. Curabitur vitae fermentum leo, a venenatis metus. Maecenas mattis volutpat enim. Nullam efficitur est luctus elit bibendum, at tempor felis maximus.', 'img/thumb-pequena.jpg'),
(4, '2016-01-01', 'Titulo de Noticia Teste', 'Descrição de teste.', 'img/thumb-pequena.jpg'),
(5, '2016-10-10', 'Título da notícia publicada no Blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dapibus, mauris vel consectetur efficitur, enim massa semper mi, eget iaculis ligula nibh id dui. Etiam quis ex a urna volutpat posuere nec lacinia magna. Fusce sem est, rutrum quis rhoncus nec, ultricies a justo. Nam a lacinia orci. Aliquam lacinia eu nulla eget egestas. Quisque mollis volutpat eros non pretium. Duis mauris ligula, tristique vitae elementum vitae, blandit eget est. Praesent sit amet tellus at nibh pharetra mattis. Quisque in consequat massa. Quisque condimentum egestas eleifend. Fusce volutpat laoreet consequat. Morbi fermentum ornare erat, non malesuada enim consectetur id.\r\n\r\nNullam sit amet vulputate erat, eu tristique urna. Etiam nec tempor quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam nec erat a elit posuere luctus quis non mauris. Maecenas ut ultrices ligula. Aliquam erat volutpat. Mauris tincidunt leo et aliquet posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum interdum aliquet odio. Phasellus porttitor aliquet metus sit amet fermentum. Fusce in condimentum diam, a vulputate elit. Nunc ipsum odio, molestie in sem sed, sodales porttitor orci.\r\n\r\nMorbi a mi egestas, cursus enim a, dignissim quam. Nullam sit amet consectetur est. Sed nec egestas ante. Curabitur quis urna aliquet, luctus ante vitae, egestas odio. In lorem velit, pulvinar ut sem vel, tincidunt volutpat nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in elit quis ex tempor dictum eget ut ante. Nam eu odio eu neque feugiat fermentum eget vel lorem. Aliquam hendrerit justo et diam porttitor efficitur. Mauris at volutpat lectus.\r\n\r\nIn porttitor luctus feugiat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque vitae quam diam. Sed vitae nisl lectus. Nulla sed elit ornare, tincidunt diam eu, dictum leo. Phasellus tempus tristique velit, vitae cursus orci. Cras a augue nisi. Proin ultrices tempor libero, ac laoreet massa. Nulla molestie dignissim dapibus. Quisque eleifend et ante at lacinia. Curabitur vitae fermentum leo, a venenatis metus. Maecenas mattis volutpat enim. Nullam efficitur est luctus elit bibendum, at tempor felis maximus.', 'img/thumb-pequena.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(85) NOT NULL,
  `email` varchar(85) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`) VALUES
(1, 'Lucas Gerken', 'lucas_gerken@gmail.com', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
