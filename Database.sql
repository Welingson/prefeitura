-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 04-Abr-2020 às 15:29
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_prefeitura`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id` int(11) NOT NULL,
  `banner` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'draft' COMMENT 'draft, post, trash '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_banner`
--

INSERT INTO `tb_banner` (`id`, `banner`, `created_at`, `status`) VALUES
(1, 'images/banners/2020/02/banner-1.jpg', '2020-02-19 17:40:59', 'draft'),
(2, 'images/banners/2020/02/banner-2.jpg', '2020-02-19 17:40:59', 'draft'),
(3, 'images/banners/2020/02/banner-4.png', '2020-02-19 17:40:59', 'draft'),
(4, 'images/banners/2020/02/banner-5.jpg', '2020-02-19 17:40:59', 'draft'),
(5, 'images/banners/2020/02/banner-6.jpg', '2020-02-19 17:40:59', 'draft'),
(6, 'images/banners/2020/02/banner-7.jpg', '2020-02-19 17:40:59', 'draft'),
(7, 'images/banners/2020/02/banner-8.jpg', '2020-02-19 17:40:59', 'draft');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_bidding`
--

CREATE TABLE `tb_bidding` (
  `id` int(11) NOT NULL,
  `process_number` int(11) NOT NULL,
  `object` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bidding_number` int(11) NOT NULL,
  `modality` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_bidding`
--

INSERT INTO `tb_bidding` (`id`, `process_number`, `object`, `bidding_number`, `modality`, `status`, `created_at`) VALUES
(9, 10, 'Objeto tal coisa ', 1, 6, 1, '2020-02-20 12:56:07'),
(10, 15, 'Objeto tal do processo tal', 2, 7, 1, '2020-02-20 12:56:07'),
(11, 16, 'Objeto do processo 16 e tal sdjjshd dhsjdhfhuryewjfdnmscbxbvhsdgfygfhdbvncxbvksfjkhuirhtiuerytiuryuitytr', 3, 9, 1, '2020-02-20 16:40:58'),
(12, 17, 'Objeto do processo 17 jdshsjfhduery usfhh', 4, 8, 2, '2020-02-20 16:40:58'),
(13, 20, 'Objeto djsfsdbfdb', 14, 9, 1, '2020-02-21 13:31:24'),
(14, 898, 'licitacao editada pra teste', 14, 6, 2, '2020-02-21 13:31:24'),
(15, 25, 'Objeto tal', 7, 9, 2, '2019-05-01 17:16:01'),
(16, 45, 'WWWWWWWWWWWKWKWKKWKWKWKWKW', 7, 9, 1, '2020-03-18 17:09:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_bidding_attachment`
--

CREATE TABLE `tb_bidding_attachment` (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dir_attachment` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_bidding` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_bidding_attachment`
--

INSERT INTO `tb_bidding_attachment` (`id`, `title`, `dir_attachment`, `created_at`, `id_bidding`) VALUES
(1, 'Edital N° 16', 'documents/bidding/2020/02/edital-processo-2.pdf', '2020-02-20 17:06:14', 11),
(2, 'Edital N° 16', 'documents/bidding/2020/02/edital-processo-1.pdf', '2020-02-20 17:06:14', 11),
(3, 'Edital n° 12', 'documents/bidding/2020/02/edital-processo-1.pdf', '2020-02-20 17:26:18', 12),
(4, 'Edital N° 9', 'documents/bidding/2020/02/edital-processo-1.pdf', '2020-02-20 17:26:18', 9),
(5, 'Edital do processo de id 10', 'documents/bidding/2020/02/edital-processo-1.pdf', '2020-02-20 17:32:57', 10),
(6, 'Documento em PDF', 'documents/bidding/2020/02/edital-processo-2.pdf', '2020-02-21 13:33:06', 13),
(7, 'Documento em PDF TAL', 'documents/bidding/2020/02/edital-processo-2.pdf', '2020-02-21 13:33:06', 14),
(8, 'Edital do processo 25', 'documents/bidding/2020/02/edital-processo-2.pdf', '2020-02-21 17:32:04', 14),
(9, 'Edital do processo 25', 'documents/bidding/2020/02/edital-processo-2.pdf', '2020-02-21 17:33:53', 15),
(10, 'Edita não sei o que', 'documents/bidding/2020/02/edital-processo-2.pdf', '2020-03-18 17:14:13', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_bidding_status`
--

CREATE TABLE `tb_bidding_status` (
  `id` int(11) NOT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_bidding_status`
--

INSERT INTO `tb_bidding_status` (`id`, `status`, `created_at`) VALUES
(1, 'Em andamento', '2020-02-20 12:27:21'),
(2, 'Finalizada', '2020-02-20 12:27:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_category`
--

CREATE TABLE `tb_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'bidding, news',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_category`
--

INSERT INTO `tb_category` (`id`, `category`, `type`, `created_at`) VALUES
(1, 'Administração', 'news', '2020-02-17 12:32:00'),
(2, 'Educação', 'news', '2020-02-17 12:32:00'),
(3, 'Engenharia', 'news', '2020-02-17 12:32:00'),
(5, 'Saúde', 'news', '2020-02-17 15:19:00'),
(6, 'Pregão Presencial', 'bidding', '2020-02-20 11:52:49'),
(7, 'Dispensa', 'bidding', '2020-02-20 11:52:49'),
(8, 'Chamada Publica', 'bidding', '2020-02-20 16:34:23'),
(9, 'Inexigibilidade', 'bidding', '2020-02-20 16:34:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contact_manager`
--

CREATE TABLE `tb_contact_manager` (
  `id` int(11) NOT NULL,
  `telephone` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_manager` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_contact_manager`
--

INSERT INTO `tb_contact_manager` (`id`, `telephone`, `email`, `created_at`, `id_manager`) VALUES
(1, '359894541', 'carlos@gmail.com', '2020-03-03 13:57:10', 1),
(2, '98989898', 'madalena@gmail.com', '2020-03-03 13:57:10', 2),
(3, '12345678', 'juliana@gmail.com', '2020-03-05 17:56:37', 4),
(4, '987654321', 'josebenedito@gmail.com', '2020-03-05 17:56:37', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_decree`
--

CREATE TABLE `tb_decree` (
  `id` int(11) NOT NULL,
  `number_decree` int(11) NOT NULL,
  `decree` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type` int(11) NOT NULL COMMENT 'Municipal, Complementar, Estadual',
  `decree_attachment` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_decree`
--

INSERT INTO `tb_decree` (`id`, `number_decree`, `decree`, `type`, `decree_attachment`, `created_at`) VALUES
(3, 1, 'Dipoe sobre tal coisa', 2, 'documents/document', '2020-04-04 18:26:07'),
(4, 2, 'Esse é um decreto', 2, 'documents/documents', '2020-04-04 18:26:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_documents_type`
--

CREATE TABLE `tb_documents_type` (
  `id` int(11) NOT NULL,
  `type` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Estadual, Municipal, Complementar',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_documents_type`
--

INSERT INTO `tb_documents_type` (`id`, `type`, `created_at`) VALUES
(1, 'Estadual', '2020-04-04 01:01:52'),
(2, 'Municipal', '2020-04-04 01:01:52'),
(3, 'Complementar', '2020-04-04 01:01:52');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_employee`
--

CREATE TABLE `tb_employee` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `secretary` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `photo` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_employee`
--

INSERT INTO `tb_employee` (`id`, `employee_name`, `secretary`, `title`, `photo`, `created_at`) VALUES
(1, 'José Benedito Visoto\r\n', 1, 'Vice Prefeito', '/image', '2020-02-28 19:09:58'),
(2, 'Juliana Alves de Freitas\r\n', 1, 'Chefe de Gabinete\r\n', 'images/', '2020-02-28 19:09:58'),
(3, 'Madalena', 2, 'Chefe de governo', 'images/', '2020-03-04 14:19:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_laws`
--

CREATE TABLE `tb_laws` (
  `id` int(11) NOT NULL,
  `law` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `law_number` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT 'Municipal, Complementar, Estadual',
  `law_attachment` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_laws`
--

INSERT INTO `tb_laws` (`id`, `law`, `law_number`, `type`, `law_attachment`, `created_at`) VALUES
(1, 'Lei que dispoe de tal coisa', 1, 2, 'documents/law/document', '2020-04-04 18:29:16'),
(2, 'Lei municipal é uma lei ', 2, 2, 'documents/law/documents', '2020-04-04 18:29:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_log_attempt`
--

CREATE TABLE `tb_log_attempt` (
  `id_attempt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_manager`
--

CREATE TABLE `tb_manager` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `secretary` int(11) NOT NULL,
  `level` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'manager, employee',
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `photo` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_manager`
--

INSERT INTO `tb_manager` (`id`, `name`, `secretary`, `level`, `title`, `photo`, `created_at`) VALUES
(1, 'Carlos Alberto Moraes', 1, 'manager', 'Prefeito', 'images/management/dsjfhdf', '2020-02-28 18:37:38'),
(2, 'Madalena Moraes', 2, 'manager', 'Secretária de Governo\r\n', 'image/dsfsd', '2020-02-28 18:37:38'),
(3, 'José Benedito Visoto\r\n', 1, 'employee', 'Vice Prefeito', 'images/', '2020-03-04 19:04:03'),
(4, 'Juliana Alves de Freitas\r\n', 1, 'employee', 'Chefe de Gabinete', 'images/', '2020-03-04 19:04:03'),
(5, 'Pedro', 2, 'employee', 'Gerente', 'images/', '2020-03-05 18:12:08'),
(6, 'Rayan', 2, 'employee', 'Programador', 'images/', '2020-03-05 18:12:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_news`
--

CREATE TABLE `tb_news` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `news` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `uri` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `category` int(11) NOT NULL,
  `status` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'draft' COMMENT 'draft, trash, post'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_news`
--

INSERT INTO `tb_news` (`id`, `title`, `news`, `uri`, `created_at`, `deleted_at`, `views`, `category`, `status`) VALUES
(3, 'Prefeitura investe em educação', 'Educação na 3 idade', 'prefeitura-investe-em-educacao', '2020-03-31 12:55:21', NULL, 76, 1, 'draft'),
(4, 'Nova escola técnica ', 'Compra de servidor web dshjfhdhghdgjdfhgjdhfg Compra de servidor web dshjfhdhghdgjdfhgjdhfg Compra de servidor web dshjfhdhghdgjdfhgjdhfg Compra de servidor web dshjfhdhghdgjdfhgjdhfg Compra de servidor web dshjfhdhghdgjdfhgjdhfg Compra de servidor web dshjfhdhghdgjdfhgjdhfg Compra de servidor web dshjfhdhghdgjdfhgjdhfg Compra de servidor web dshjfhdhghdgjdfhgjdhfg Compra de servidor web dshjfhdhghdgjdfhgjdhfg Compra de servidor web dshjfhdhghdgjdfhgjdhfg Compra de servidor web dshjfhdhghdgjdfhgjdhfgCompra de servidor web dshjfhdhghdgjdfhgjdhfgCompra de servidor web dshjfhdhghdgjdfhgjdhfgCompra de servidor web dshjfhdhghdgjdfhgjdhfgCompra de servidor web dshjfhdhghdgjdfhgjdhfgCompra de servidor web dshjfhdhghdgjdfhgjdhfgCompra de servidor web dshjfhdhghdgjdfhgjdhfgCompra de servidor web dshjfhdhghdgjdfhgjdhfg', 'nova-escola-tecnica ', '2020-02-17 12:55:21', NULL, 726, 2, 'draft');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_news_attachment`
--

CREATE TABLE `tb_news_attachment` (
  `id` int(11) NOT NULL,
  `dir_image` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `id_news` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_news_attachment`
--

INSERT INTO `tb_news_attachment` (`id`, `dir_image`, `id_news`, `created_at`) VALUES
(1, 'images/news/2020/02/nova-escola-tecnica-1.jpg', 4, '2020-02-18 17:28:47'),
(2, 'images/news/2020/02/nova-escola-tecnica-2.jpg', 4, '2020-02-18 17:28:47'),
(4, 'images/news/2020/02/prefeitura-investe-em-educacao.png', 3, '2020-02-18 17:28:47'),
(5, 'images/news/2020/02/prefeitura-investe-em-educacao.jpg', 3, '2020-02-18 23:37:23'),
(6, 'images/news/2020/02/prefeitura-investe-em-educacao-(2).jpg', 3, '2020-02-18 23:37:23'),
(7, 'images/news/2020/02/nova-escola-tecnica-3.jpg', 4, '2020-02-18 23:48:44'),
(8, 'images/news/2020/02/nova-escola-tecnica-4.jpg', 4, '2020-02-19 17:20:21'),
(9, 'images/news/2020/02/nova-escola-tecnica-2.jpg', 4, '2020-02-24 18:11:25'),
(10, 'images/news/2020/02/nova-escola-tecnica-2.jpg', 4, '2020-02-24 18:11:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_news_iframe`
--

CREATE TABLE `tb_news_iframe` (
  `id` int(11) NOT NULL,
  `news_iframe` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_news` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_news_iframe`
--

INSERT INTO `tb_news_iframe` (`id`, `news_iframe`, `created_at`, `id_news`) VALUES
(1, '<iframe src=\"https://www.youtube.com/embed/wlkCQXHEgjA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-02-24 12:36:17', 4),
(2, '<iframe width=\"350\" height=\"197\" src=\"https://www.youtube.com/embed/wlkCQXHEgjA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-02-24 12:36:17', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ordinance`
--

CREATE TABLE `tb_ordinance` (
  `id` int(11) NOT NULL,
  `number_ordinance` int(11) NOT NULL,
  `ordinance` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ordinance_attachment` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_secretary`
--

CREATE TABLE `tb_secretary` (
  `id` int(11) NOT NULL,
  `secretary` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_secretary`
--

INSERT INTO `tb_secretary` (`id`, `secretary`, `description`, `created_at`) VALUES
(1, 'Gabinete', NULL, '2020-02-28 18:36:05'),
(2, 'Governo', NULL, '2020-02-28 18:36:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_bidding`
--
ALTER TABLE `tb_bidding`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modality` (`modality`),
  ADD KEY `status` (`status`);
ALTER TABLE `tb_bidding` ADD FULLTEXT KEY `object` (`object`);

--
-- Índices para tabela `tb_bidding_attachment`
--
ALTER TABLE `tb_bidding_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_bidding_attachment_ibfk_1` (`id_bidding`);

--
-- Índices para tabela `tb_bidding_status`
--
ALTER TABLE `tb_bidding_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `status` (`status`);

--
-- Índices para tabela `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_contact_manager`
--
ALTER TABLE `tb_contact_manager`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_manager` (`id_manager`);

--
-- Índices para tabela `tb_decree`
--
ALTER TABLE `tb_decree`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Índices para tabela `tb_documents_type`
--
ALTER TABLE `tb_documents_type`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_name` (`employee_name`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `secretary` (`secretary`);

--
-- Índices para tabela `tb_laws`
--
ALTER TABLE `tb_laws`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Índices para tabela `tb_log_attempt`
--
ALTER TABLE `tb_log_attempt`
  ADD PRIMARY KEY (`id_attempt`);

--
-- Índices para tabela `tb_manager`
--
ALTER TABLE `tb_manager`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD UNIQUE KEY `manager_name` (`name`),
  ADD KEY `secretary` (`secretary`);

--
-- Índices para tabela `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);
ALTER TABLE `tb_news` ADD FULLTEXT KEY `search` (`title`,`news`);

--
-- Índices para tabela `tb_news_attachment`
--
ALTER TABLE `tb_news_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_news_attachment_ibfk_1` (`id_news`);

--
-- Índices para tabela `tb_news_iframe`
--
ALTER TABLE `tb_news_iframe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_news` (`id_news`);

--
-- Índices para tabela `tb_ordinance`
--
ALTER TABLE `tb_ordinance`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_secretary`
--
ALTER TABLE `tb_secretary`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`secretary`);

--
-- Índices para tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_bidding`
--
ALTER TABLE `tb_bidding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tb_bidding_attachment`
--
ALTER TABLE `tb_bidding_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_bidding_status`
--
ALTER TABLE `tb_bidding_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_decree`
--
ALTER TABLE `tb_decree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_documents_type`
--
ALTER TABLE `tb_documents_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_employee`
--
ALTER TABLE `tb_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_laws`
--
ALTER TABLE `tb_laws`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_log_attempt`
--
ALTER TABLE `tb_log_attempt`
  MODIFY `id_attempt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_manager`
--
ALTER TABLE `tb_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_news_attachment`
--
ALTER TABLE `tb_news_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_news_iframe`
--
ALTER TABLE `tb_news_iframe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_ordinance`
--
ALTER TABLE `tb_ordinance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_secretary`
--
ALTER TABLE `tb_secretary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_bidding`
--
ALTER TABLE `tb_bidding`
  ADD CONSTRAINT `tb_bidding_ibfk_1` FOREIGN KEY (`modality`) REFERENCES `tb_category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `tb_bidding_ibfk_2` FOREIGN KEY (`status`) REFERENCES `tb_bidding_status` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `tb_bidding_attachment`
--
ALTER TABLE `tb_bidding_attachment`
  ADD CONSTRAINT `tb_bidding_attachment_ibfk_1` FOREIGN KEY (`id_bidding`) REFERENCES `tb_bidding` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_decree`
--
ALTER TABLE `tb_decree`
  ADD CONSTRAINT `tb_decree_ibfk_1` FOREIGN KEY (`type`) REFERENCES `tb_documents_type` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD CONSTRAINT `tb_employee_ibfk_1` FOREIGN KEY (`secretary`) REFERENCES `tb_secretary` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `tb_laws`
--
ALTER TABLE `tb_laws`
  ADD CONSTRAINT `tb_laws_ibfk_1` FOREIGN KEY (`type`) REFERENCES `tb_documents_type` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `tb_manager`
--
ALTER TABLE `tb_manager`
  ADD CONSTRAINT `tb_manager_ibfk_1` FOREIGN KEY (`secretary`) REFERENCES `tb_secretary` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `tb_news`
--
ALTER TABLE `tb_news`
  ADD CONSTRAINT `tb_news_ibfk_1` FOREIGN KEY (`category`) REFERENCES `tb_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_news_attachment`
--
ALTER TABLE `tb_news_attachment`
  ADD CONSTRAINT `tb_news_attachment_ibfk_1` FOREIGN KEY (`id_news`) REFERENCES `tb_news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_news_iframe`
--
ALTER TABLE `tb_news_iframe`
  ADD CONSTRAINT `tb_news_iframe_ibfk_1` FOREIGN KEY (`id_news`) REFERENCES `tb_news` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
