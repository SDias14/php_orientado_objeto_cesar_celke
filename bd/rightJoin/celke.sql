-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Nov-2021 às 18:17
-- Versão do servidor: 8.0.27
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

DROP TABLE IF EXISTS `niveis_acessos`;
CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordem` int NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `ordem`, `created`, `modified`) VALUES
(1, 'Super Administrador', 1, '2021-11-23 15:24:57', NULL),
(2, 'Administrador', 2, '2021-11-23 15:24:57', NULL),
(3, 'Aluno', 5, '2021-11-23 15:25:16', NULL),
(4, 'Financeiro', 3, '2021-11-23 11:54:53', NULL),
(5, 'Atendimento', 4, '2021-11-23 16:49:37', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sists_usuarios`
--

DROP TABLE IF EXISTS `sists_usuarios`;
CREATE TABLE IF NOT EXISTS `sists_usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sists_usuarios`
--

INSERT INTO `sists_usuarios` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Ativo', '2021-11-23 15:16:58', NULL),
(2, 'Inativo', '2021-11-23 15:16:58', NULL),
(3, 'Aguardado confirmação', '2021-11-23 15:17:13', NULL),
(4, 'Spam', '2021-11-23 11:30:44', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sists_usuario_id` int NOT NULL DEFAULT '3',
  `niveis_acesso_id` int NOT NULL DEFAULT '3',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sists_usuario_id` (`sists_usuario_id`),
  KEY `niveis_acesso_id` (`niveis_acesso_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `sists_usuario_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Cesar', 'cesar@celke.com.br', '$2y$10$H1JY9xNvH01ZfH0n8GJcJeY7LIudr/aFW11zoTvMRWLomOe0T8eeW', 1, 1, '2021-11-15 10:55:51', NULL),
(2, 'kelly', 'kelly@celke.com.br', '$2y$10$lhZq0ICwkZurkYkwN7V9YeUuHDG16yKYy5/w5oESjCMOEWl8ZGLAG', 1, 2, '2021-11-16 13:17:58', NULL),
(3, 'Jessica', 'jessica@celke.com.br', '$2y$10$mOZSAD26aMn9Cag4e6MKvOeZNkBspejSeI6w4hL0bxSAkcosvyMsW', 3, 3, '2021-11-17 13:19:52', NULL),
(4, 'Gabrielly', 'gabrielly@celke.com.br', '$2y$10$R7SwL/7GZmv8Rn7U8pJLWugKvCCsrQy/ybYENmVX2E4xwRg4TDouW', 3, 2, '2021-11-18 13:20:42', NULL),
(5, 'Cesar 1', 'cesar1@celke.com.br', '$2y$10$lhZq0ICwkZurkYkwN7V9YeUuHDG16yKYy5/w5oESjCMOEWl8ZGLAG', 3, 3, '2021-11-19 15:39:52', NULL),
(6, 'Cesar 2', 'cesar2@celke.com.br', '$2y$10$lhZq0ICwkZurkYkwN7V9YeUuHDG16yKYy5/w5oESjCMOEWl8ZGLAG', 3, 3, '2021-11-20 15:39:52', NULL),
(7, 'A Cesar 3', 'cesar3@celke.com.br', '$2y$10$lhZq0ICwkZurkYkwN7V9YeUuHDG16yKYy5/w5oESjCMOEWl8ZGLAG', 3, 3, '2021-11-21 15:39:52', NULL),
(8, 'Gabrielly 1', 'gabrielly1@celke.com.br', '$2y$10$lhZq0ICwkZurkYkwN7V9YeUuHDG16yKYy5/w5oESjCMOEWl8ZGLAG', 3, 4, '2021-11-22 15:39:52', NULL),
(9, 'Gabrielly 2', 'gabrielly2@celke.com.br', '$2y$10$lhZq0ICwkZurkYkwN7V9YeUuHDG16yKYy5/w5oESjCMOEWl8ZGLAG', 3, 5, '2021-11-23 15:39:52', NULL),
(10, 'kelly 1', 'kelly1@celke.com.br', '$2y$10$lhZq0ICwkZurkYkwN7V9YeUuHDG16yKYy5/w5oESjCMOEWl8ZGLAG', 3, 4, '2021-11-24 15:39:52', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
