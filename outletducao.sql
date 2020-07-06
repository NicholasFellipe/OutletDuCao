-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 30-Jul-2019 às 21:47
-- Versão do servidor: 5.7.23-23
-- versão do PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agnald39_outletducao`
--
CREATE DATABASE IF NOT EXISTS `agnald39_outletducao` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `agnald39_outletducao`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_categorias`
--

DROP TABLE IF EXISTS `as_categorias`;
CREATE TABLE `as_categorias` (
  `cate_id` int(11) NOT NULL,
  `cate_nome` varchar(80) DEFAULT NULL,
  `cate_slug` varchar(80) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=4096 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `as_categorias`
--

INSERT INTO `as_categorias` (`cate_id`, `cate_nome`, `cate_slug`) VALUES
(2, 'Alimento', 'alimento'),
(3, 'Roupas', 'roupas'),
(4, 'Higiene', 'higiene'),
(5, 'Banho e Tosa', 'banho-e-tosa'),
(6, 'Adestramento', 'adestramento'),
(7, 'Farmácia', 'farmacia'),
(8, 'Passeio', 'passeio'),
(9, 'Transporte', 'transporte'),
(10, 'Lazer', 'lazer'),
(11, 'Banho e Tosa', 'banho-e-tosa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_clientes`
--

DROP TABLE IF EXISTS `as_clientes`;
CREATE TABLE `as_clientes` (
  `cli_id` int(10) UNSIGNED NOT NULL,
  `cli_usuario` varchar(80) DEFAULT NULL,
  `cli_nome` varchar(80) DEFAULT NULL,
  `cli_sobrenome` varchar(80) DEFAULT NULL,
  `cli_endereco` varchar(100) DEFAULT NULL,
  `cli_numero` varchar(20) DEFAULT NULL,
  `cli_bairro` varchar(80) DEFAULT NULL,
  `cli_cidade` varchar(150) DEFAULT NULL,
  `cli_uf` varchar(2) DEFAULT NULL,
  `cli_cep` varchar(10) DEFAULT NULL,
  `cli_cpf` varchar(12) DEFAULT NULL,
  `cli_rg` varchar(20) DEFAULT NULL,
  `cli_ddd` int(2) DEFAULT NULL,
  `cli_fone` varchar(10) DEFAULT NULL,
  `cli_celular` varchar(10) DEFAULT NULL,
  `cli_email` varchar(60) DEFAULT NULL,
  `cli_pass` varchar(128) DEFAULT NULL,
  `cli_data_nasc` date DEFAULT NULL,
  `cli_data_cad` date DEFAULT NULL,
  `cli_hora_cad` time DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=2048 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `as_clientes`
--

INSERT INTO `as_clientes` (`cli_id`, `cli_usuario`, `cli_nome`, `cli_sobrenome`, `cli_endereco`, `cli_numero`, `cli_bairro`, `cli_cidade`, `cli_uf`, `cli_cep`, `cli_cpf`, `cli_rg`, `cli_ddd`, `cli_fone`, `cli_celular`, `cli_email`, `cli_pass`, `cli_data_nasc`, `cli_data_cad`, `cli_hora_cad`) VALUES
(14, '', 'Roberto', 'Noob Souza 222', 'eeee', '222', 'centro', 'santos', 'sp', '14940000', '57620831363', 'sssss', 14, '33335598', '877779999', 'c94054965734042346217@sandbox.pagseguro.com.br', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '1985-05-06', '2017-05-06', '19:58:03'),
(15, '', 'Adriano', 'Teste', 'eeee', '222', 'centro', 'santos', 'sp', '14940000', '111111111456', 'sssss', NULL, '', '', 'contato@adrianosites.com.br', '123', '1985-05-06', '2017-05-06', '19:58:03'),
(16, '', 'Thiago ', 'Noob', 'rua sem nome ', '122', 'centro', 'Bauru', 'sp', '14940555', '123456789789', '12345678900', 14, '33559988', '999998877', 'thiagonoob@teste.com', 'e0090fae3971fe245662772efbec44e3', '2017-05-08', '2017-05-09', '02:21:34'),
(17, '', 'Thiago ', 'Noob', 'rua sem nome ', '122', 'centro', 'Bauru', 'sp', '14940555', '123456789789', '12345678900', 14, '33559988', '999998877', 'thiagonoob@teste.com', '9b7c25ec0d11c539cccdf67a70ea8b98', '2017-05-08', '2017-05-09', '02:25:07'),
(18, '', 'Thiago ', 'Noob', 'rua sem nome ', '122', 'centro', 'Bauru', 'sp', '14940555', '123456789789', '12345678900', 14, '33559988', '999998877', 'thiagonoob@teste.com', '18513ba35987a447b98f075bd226a1fc', '2017-05-08', '2017-05-09', '02:27:17'),
(19, '', 'jose', 'santos 2222', 'rua 1', '111', 'centro', 'santos', 'SP', '55980000', '97433289801', '12345678900', 11, '11111111', '11111111', 'jose001@teste.com', '3290cc3b86c30c7cd2b23173b7715861', '2017-05-09', '2017-05-09', '19:43:22'),
(20, '', 'Pedro', 'santos', 'rua 1', '111', 'centro', 'santos', 'SP', '55980000', '72375393880', '12345678900', 11, '11111111', '11111111', 'pedro@gmail.com', '1e7beb9c73c889e9086fd2e128d52197', '2017-05-09', '2017-05-09', '19:53:45'),
(21, '', 'Lucas', 'teste', 'rua sem nome', 'sem', 'centro', 'bauru', 'sp', '15987000', '12121212121', '1234567890', 12, '33335588', '999887741', 'marverik2@gmail.com', '336aa96b25c130dcd637a064d0fe0c50', '2017-05-10', '2017-05-10', '17:04:00'),
(22, '', 'Roberto', 'Noob Souza 222', 'eeee', '222', 'centro', 'santos', 'sp', '14940000', '57620831363', 'sssss', 14, '33335598', '877779999', 'c94054965734042346217@sandbox.pagseguro.com.br', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '1985-05-06', '2017-05-06', '19:58:03'),
(23, '', 'Adriano', 'Teste', 'eeee', '222', 'centro', 'santos', 'sp', '14940000', '111111111456', 'sssss', NULL, '', '', 'contato@adrianosites.com.br', '123', '1985-05-06', '2017-05-06', '19:58:03'),
(24, '', 'Thiago ', 'Noob', 'rua sem nome ', '122', 'centro', 'Bauru', 'sp', '14940555', '123456789789', '12345678900', 14, '33559988', '999998877', 'thiagonoob@teste.com', 'e0090fae3971fe245662772efbec44e3', '2017-05-08', '2017-05-09', '02:21:34'),
(25, '', 'Thiago ', 'Noob', 'rua sem nome ', '122', 'centro', 'Bauru', 'sp', '14940555', '123456789789', '12345678900', 14, '33559988', '999998877', 'thiagonoob@teste.com', '9b7c25ec0d11c539cccdf67a70ea8b98', '2017-05-08', '2017-05-09', '02:25:07'),
(26, '', 'Thiago ', 'Noob', 'rua sem nome ', '122', 'centro', 'Bauru', 'sp', '14940555', '123456789789', '12345678900', 14, '33559988', '999998877', 'thiagonoob@teste.com', '18513ba35987a447b98f075bd226a1fc', '2017-05-08', '2017-05-09', '02:27:17'),
(27, '', 'jose', 'santos 2222', 'rua 1', '111', 'centro', 'santos', 'SP', '55980000', '97433289801', '12345678900', 11, '11111111', '11111111', 'jose001@teste.com', '3290cc3b86c30c7cd2b23173b7715861', '2017-05-09', '2017-05-09', '19:43:22'),
(28, '', 'Pedro', 'santos', 'rua 1', '111', 'centro', 'santos', 'SP', '55980000', '72375393880', '12345678900', 11, '11111111', '11111111', 'pedro@gmail.com', '1e7beb9c73c889e9086fd2e128d52197', '2017-05-09', '2017-05-09', '19:53:45'),
(29, '', 'Lucas', 'teste', 'rua sem nome', 'sem', 'centro', 'bauru', 'sp', '15987000', '12121212121', '1234567890', 12, '33335588', '999887741', 'marverik2@gmail.com', '336aa96b25c130dcd637a064d0fe0c50', '2017-05-10', '2017-05-10', '17:04:00'),
(30, NULL, 'Nicholas', 'Pereira', 'Rua Expedicionário José de Moura e Silva', '36A', 'Jardim Esperança', 'Guaratinguetá', 'SP', '12518493', '43125933889', '451953381', 12, '997284072', '21030304', 'nicholasfelliperp@gmail.com', 'ee4f317b8936f0aa0ab5f3440e6536e0a282b3a174bf620498fc977c2ad7ac325fdd73e126dbe642eb687f27f58ccabeb1e6472d612ab0ff6d256839a6a0d95b', '1996-03-28', '2019-03-12', '10:41:04'),
(31, '', 'Roberto', 'Noob Souza 222', 'eeee', '222', 'centro', 'santos', 'sp', '14940000', '57620831363', 'sssss', 14, '33335598', '877779999', 'c94054965734042346217@sandbox.pagseguro.com.br', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '1985-05-06', '2017-05-06', '19:58:03'),
(32, '', 'Adriano', 'Teste', 'eeee', '222', 'centro', 'santos', 'sp', '14940000', '111111111456', 'sssss', NULL, '', '', 'contato@adrianosites.com.br', '123', '1985-05-06', '2017-05-06', '19:58:03'),
(33, '', 'Thiago ', 'Noob', 'rua sem nome ', '122', 'centro', 'Bauru', 'sp', '14940555', '123456789789', '12345678900', 14, '33559988', '999998877', 'thiagonoob@teste.com', 'e0090fae3971fe245662772efbec44e3', '2017-05-08', '2017-05-09', '02:21:34'),
(34, '', 'Thiago ', 'Noob', 'rua sem nome ', '122', 'centro', 'Bauru', 'sp', '14940555', '123456789789', '12345678900', 14, '33559988', '999998877', 'thiagonoob@teste.com', '9b7c25ec0d11c539cccdf67a70ea8b98', '2017-05-08', '2017-05-09', '02:25:07'),
(35, '', 'Thiago ', 'Noob', 'rua sem nome ', '122', 'centro', 'Bauru', 'sp', '14940555', '123456789789', '12345678900', 14, '33559988', '999998877', 'thiagonoob@teste.com', '18513ba35987a447b98f075bd226a1fc', '2017-05-08', '2017-05-09', '02:27:17'),
(36, '', 'jose', 'santos 2222', 'rua 1', '111', 'centro', 'santos', 'SP', '55980000', '97433289801', '12345678900', 11, '11111111', '11111111', 'jose001@teste.com', '3290cc3b86c30c7cd2b23173b7715861', '2017-05-09', '2017-05-09', '19:43:22'),
(37, '', 'Pedro', 'santos', 'rua 1', '111', 'centro', 'santos', 'SP', '55980000', '72375393880', '12345678900', 11, '11111111', '11111111', 'pedro@gmail.com', '1e7beb9c73c889e9086fd2e128d52197', '2017-05-09', '2017-05-09', '19:53:45'),
(38, '', 'Lucas', 'teste', 'rua sem nome', 'sem', 'centro', 'bauru', 'sp', '15987000', '12121212121', '1234567890', 12, '33335588', '999887741', 'marverik2@gmail.com', '336aa96b25c130dcd637a064d0fe0c50', '2017-05-10', '2017-05-10', '17:04:00'),
(39, NULL, 'Willians', 'Freitas', 'Rua Alagoas', '760', 'Cidade Industrial', 'Lorena', 'SP', '12609270', '43100817893', '123456789', 12, '31523146', '981425087', 'williansvpf@gmail.com', 'ec9713b3df1619a06a70dbd33cad942af91d926823be4a51b3c38a9ac6d9dfa60c4246d9b7614f5d1d694bf4fa199e0a21179b103df39b3b34b1fe8d1c6dac55', '1993-02-23', '2019-03-18', '00:54:59'),
(40, NULL, 'Luis Gustavo ', 'Monteiro Rodrigues ', 'Rua Benedito Rodrigues Alves', '98', 'Vila Jacobelli', 'Guaratinguetá', 'SP', '12505190', '32085372805', '408500347', 12, '31326310', '997872685', 'fisiodrgustavorodrigues@gmail.com', '15410d5d4bf9254b15104ced051e2fbc2a5982179caf6e1435fea2551f9b5434a50c8bd476cb63eb14a7f179ab9ba45f1862cb390ea31d1881e68e93a94ce58e', '1984-03-26', '2019-04-03', '05:35:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_estados`
--

DROP TABLE IF EXISTS `as_estados`;
CREATE TABLE `as_estados` (
  `estado_id` int(10) UNSIGNED NOT NULL,
  `estado_sigla` char(2) DEFAULT NULL,
  `estado_nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=606 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_imagens`
--

DROP TABLE IF EXISTS `as_imagens`;
CREATE TABLE `as_imagens` (
  `img_id` int(11) NOT NULL,
  `img_nome` varchar(60) DEFAULT NULL,
  `img_pro_id` int(11) DEFAULT NULL,
  `img_pasta` varchar(34) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=1820 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `as_imagens`
--

INSERT INTO `as_imagens` (`img_id`, `img_nome`, `img_pro_id`, `img_pasta`) VALUES
(1, 'casa-dog2.jpg', 52, NULL),
(2, 'casa-dog3.jpg', 52, NULL),
(3, 'casa-dog4.jpg', 52, NULL),
(5, '190301144955casinha-2.jpg.jpg', 67, NULL),
(6, '190301145025casinha-3.jpg.jpg', 67, NULL),
(7, '190302093958casinha-1.jpg.jpg', 67, NULL),
(8, '190302095027cama-dog-1.jpg.jpg', 54, NULL),
(9, '190302095035cama-dog-2.jpg.jpg', 54, NULL),
(10, '190302095043cama-dog-3.jpg.jpg', 54, NULL),
(12, '190302095232carrinho-1.jpg.jpg', 60, NULL),
(13, '190302095241carrinho-2.jpg.jpg', 60, NULL),
(14, '190302095250carrinho-3.jpg.jpg', 60, NULL),
(15, '190302100923bolsa-transporte-1.jpg.jpg', 68, NULL),
(16, '190302100930bolsa-transporte-2.jpg.jpg', 68, NULL),
(17, '190302100938bolsa-transporte-3.jpg.jpg', 68, NULL),
(21, '1904011837racao-dog-chow.jpg.jpg', 73, NULL),
(29, '1904060911almofada.jpg.jpg', 73, NULL),
(30, '1904061321picos-de-ouro-cravejado-de-couro-pet-dog.jpg.jpg', 74, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_pedidos`
--

DROP TABLE IF EXISTS `as_pedidos`;
CREATE TABLE `as_pedidos` (
  `ped_id` int(11) NOT NULL,
  `ped_data` date DEFAULT NULL,
  `ped_hora` time DEFAULT NULL,
  `ped_cliente` int(11) DEFAULT NULL,
  `ped_cod` varchar(100) DEFAULT NULL,
  `ped_ref` varchar(40) DEFAULT NULL,
  `ped_pag_status` varchar(20) DEFAULT 'NAO',
  `ped_pag_forma` varchar(20) DEFAULT NULL,
  `ped_pag_tipo` varchar(20) DEFAULT NULL,
  `ped_pag_codigo` varchar(220) DEFAULT NULL,
  `ped_frete_valor` double(9,2) DEFAULT NULL,
  `ped_frete_tipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=1024 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `as_pedidos`
--

INSERT INTO `as_pedidos` (`ped_id`, `ped_data`, `ped_hora`, `ped_cliente`, `ped_cod`, `ped_ref`, `ped_pag_status`, `ped_pag_forma`, `ped_pag_tipo`, `ped_pag_codigo`, `ped_frete_valor`, `ped_frete_tipo`) VALUES
(13, '2017-06-04', '20:42:52', 3, '1706042042523', '1706042042523', 'Pago', 'Cartao', 'PAGSEGURO', 'BF43AE76-41E6-4FCC-B682-CF6461E9027A', 31.80, NULL),
(47, '2019-03-15', '19:08:17', 30, '19031519081730', '19031519081730', 'NAO', NULL, NULL, NULL, 36.80, NULL),
(48, '2019-03-15', '19:09:04', 30, '19031519090430', '19031519090430', 'NAO', NULL, NULL, NULL, 33.40, NULL),
(49, '2019-04-01', '20:39:40', 30, '19040120394030', '19040120394030', 'NAO', NULL, NULL, NULL, 36.80, NULL),
(50, '2019-04-01', '20:41:51', 30, '19040120415130', '19040120415130', 'NAO', NULL, NULL, NULL, 36.80, NULL),
(51, '2019-04-02', '09:03:03', 39, '19040209030339', '19040209030339', 'NAO', NULL, NULL, NULL, 33.40, NULL),
(52, '2019-04-06', '10:31:39', 30, '19040610313930', '19040610313930', 'NAO', NULL, NULL, NULL, 115.80, NULL),
(53, '2019-04-23', '21:14:06', 30, '19042321140630', '19042321140630', 'NAO', NULL, NULL, NULL, 32.20, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_pedidos_itens`
--

DROP TABLE IF EXISTS `as_pedidos_itens`;
CREATE TABLE `as_pedidos_itens` (
  `item_id` int(11) UNSIGNED NOT NULL,
  `item_produto` int(11) DEFAULT NULL,
  `item_valor` double(9,2) DEFAULT NULL,
  `item_qtd` int(6) DEFAULT NULL,
  `item_ped_cod` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=143 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `as_pedidos_itens`
--

INSERT INTO `as_pedidos_itens` (`item_id`, `item_produto`, `item_valor`, `item_qtd`, `item_ped_cod`) VALUES
(65, 66, 19.88, 1, '19031519081730'),
(66, 50, 1.00, 1, '19031519090430'),
(67, 53, 1.99, 1, '19031519090430'),
(68, 71, 79.90, 2, '19040120394030'),
(69, 72, 49.90, 1, '19040120394030'),
(70, 70, 19.90, 1, '19040120394030'),
(71, 66, 19.88, 1, '19040120394030'),
(72, 62, 70.88, 1, '19040120415130'),
(73, 68, 49.90, 1, '19040120415130'),
(74, 66, 19.88, 1, '19040209030339'),
(75, 65, 59.88, 1, '19040209030339'),
(76, 72, 49.90, 1, '19040610313930'),
(77, 74, 33.90, 1, '19042321140630');

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_produtos`
--

DROP TABLE IF EXISTS `as_produtos`;
CREATE TABLE `as_produtos` (
  `pro_id` int(11) NOT NULL,
  `pro_categoria` int(11) DEFAULT NULL,
  `pro_nome` varchar(100) DEFAULT NULL,
  `pro_desc` text,
  `pro_peso` double(9,3) DEFAULT '0.000',
  `pro_valor` double(15,2) DEFAULT '0.00',
  `pro_altura` int(5) DEFAULT '0',
  `pro_largura` int(5) DEFAULT '0',
  `pro_comprimento` int(5) DEFAULT '0',
  `pro_img` varchar(60) DEFAULT NULL,
  `pro_slug` varchar(100) DEFAULT NULL,
  `pro_estoque` int(9) DEFAULT '0',
  `pro_modelo` varchar(40) DEFAULT NULL,
  `pro_ref` varchar(20) DEFAULT NULL,
  `pro_fabricante` int(11) DEFAULT NULL,
  `pro_ativo` char(3) DEFAULT 'NAO',
  `pro_frete_free` varchar(3) DEFAULT 'NAO'
) ENGINE=InnoDB AVG_ROW_LENGTH=682 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `as_produtos`
--

INSERT INTO `as_produtos` (`pro_id`, `pro_categoria`, `pro_nome`, `pro_desc`, `pro_peso`, `pro_valor`, `pro_altura`, `pro_largura`, `pro_comprimento`, `pro_img`, `pro_slug`, `pro_estoque`, `pro_modelo`, `pro_ref`, `pro_fabricante`, `pro_ativo`, `pro_frete_free`) VALUES
(49, 2, 'Racao DOG', 'Ração', 1.010, 35.78, 20, 20, 20, 'racao.jpg', 'racao', 10, 'hhhh', '00011', NULL, 'SIM', 'NAO'),
(50, 4, 'Escova dente DOG', '<p>fsdfsffsdfdsf</p>', 0.165, 1.00, 30, 20, 30, 'escova-dente.jpg', 'escova-dente-dog', 10, '', '00002', NULL, 'SIM', 'NAO'),
(51, 3, 'Roupa DOG', '<p>twrtrwtrwtwr</p>', 0.345, 200.00, 10, 20, 20, 'roupa-dog.jpg', 'roupa-dog', 5, '', '0005', NULL, 'SIM', 'NAO'),
(52, 8, 'casa DOG', '<p>Tela Retina HD Widescreen de 4,7 polegadas (na diagonal) retroiluminada por LED Tela Multi-Touch com tecnologia IPS Resolu&ccedil;&atilde;o de 1334 x 750 pixels, 326 ppp Propor&ccedil;&atilde;o de contraste: 1400:1 (t&iacute;pica) Tela Retina HD Widescreen de 5,5 polegadas (na diagonal) retroiluminada por LED Tela Multi-Touch com tecnologia IPS Resolu&ccedil;&atilde;o de 1920 x 1080 pixels, 401 ppp Propor&ccedil;&atilde;o de contraste: 1300:1 (t&iacute;pica) Os dois modelos: Tela com ampla tonalidade de cores (P3) Brilho m&aacute;x. 625 cd/m2 (t&iacute;pico) Pixels dual-domain para &acirc;ngulos de visualiza&ccedil;&atilde;o amplos Revestimento resistente &agrave; impress&atilde;o digital e oleosidade Suporte &agrave; exibi&ccedil;&atilde;o simult&acirc;nea de v&aacute;rios idiomas e caracteres Zoom da Tela Alcan&ccedil;abilidade</p>', 1.090, 19.90, 20, 20, 20, 'casa-dog.jpg', 'casa-dog', 200, 'hhhh', '00011', NULL, 'SIM', 'NAO'),
(53, 6, 'Educa dog', '<p>fsdfsffsdfdsf</p>', 0.470, 1.99, 30, 20, 30, 'educa-dog.jpg', 'educa-dog', 10, '', '00002', NULL, 'SIM', 'NAO'),
(54, 3, 'Cama DOG', '<p>twrtrwtrwtwr</p>', 1.045, 200.00, 10, 20, 20, 'cama-dog.jpg', 'cama-dog', 10, '', '0005', NULL, 'SIM', 'NAO'),
(55, 3, 'Gravata DOG', 'Tela Retina HD\r\nWidescreen de 4,7 polegadas (na diagonal) retroiluminada por LED\r\nTela Multi-Touch com tecnologia IPS\r\nResolução de 1334 x 750 pixels, 326 ppp\r\nProporção de contraste: 1400:1 (típica)\r\nTela Retina HD\r\nWidescreen de 5,5 polegadas (na diagonal) retroiluminada por LED\r\nTela Multi-Touch com tecnologia IPS\r\nResolução de 1920 x 1080 pixels, 401 ppp\r\nProporção de contraste: 1300:1 (típica)\r\nOs dois modelos:\r\nTela com ampla tonalidade de cores (P3)\r\nBrilho máx. 625 cd/m2 (típico)\r\nPixels dual-domain para ângulos de visualização amplos\r\nRevestimento resistente à impressão digital e oleosidade\r\nSuporte à exibição simultânea de vários idiomas e caracteres\r\nZoom da Tela\r\nAlcançabilidade', 1.044, 349.00, 20, 20, 20, 'gravata-dog.jpg', 'GRAVATA-DOG', 10, 'hhhh', '00011', NULL, 'SIM', 'NAO'),
(57, 4, 'Shampoo DOG', '<p>Moment Shop - Grupo Shopping Vila S&ocirc;nia Super Kit Pet Antipulgas com 4 Produtos Cont&eacute;m: 1x Shampoo Antipulgas e Carrapatos 500ml 1x Coleira Antipulgas e Carrapatos 56cm de comprimento 1x Talco Antipulgas 100g 1x Sabonete Clorexidina 80g A Moment faz parte do grupo Shopping Vila S&ocirc;nia uma das maiores lojas de departamento do Brasil, atuamos nos segmentos de eletr&ocirc;nicos, esportivo, infantil, casa, moda, automotivo, telefonia e pet Estamos em constante amplia&ccedil;&atilde;o de nosso catalogo, buscando ter sempre a solu&ccedil;&atilde;o que voc&ecirc; procura. Contamos com todos produtos a pronta entrega, garantia, pronto atendimento, al&eacute;m de profissionais especializados em cada segmento para lhe oferecer a melhor experi&ecirc;ncia poss&iacute;vel atrav&eacute;s de um atendimento cordial e eficiente.</p>', 0.090, 200.00, 10, 20, 20, 'shampoo.jpg', 'shampoo-dog', 5, '', '0005', NULL, 'SIM', 'NAO'),
(58, 2, 'Biscoito Golden Cookie ', '<p>Indicado para c&atilde;es adultos; - Ideal para os pets de ra&ccedil;as pequenas; - Auxilia na sa&uacute;de bucal; - N&atilde;o cont&eacute;m adi&ccedil;&atilde;o de a&ccedil;&uacute;car; - &Eacute; livre de corantes e aromatizantes artificiais, - Dispon&iacute;vel em embalagem com 400 g.</p>', 0.400, 12.00, 5, 5, 5, 'biscoito.jpg', 'biscoito-golden-cookie', 500, '0001', '00001', NULL, 'SIM', 'NAO'),
(59, 2, 'Antipulgas Econômico Advocate ', '<p>Indicado para c&atilde;es; - Elimina e previne infesta&ccedil;&otilde;es de pulgas; - Trata vermes intestinais; - Previne o verme do cora&ccedil;&atilde;o; - Recomendado para o tratamento de sarnas, - Dispon&iacute;vel em embalagem com 3 bisnagas com 0,4ml.</p>', 0.081, 142.00, 5, 5, 5, 'antipulgas.jpg', 'antipulgas-economico-advocate', 500, '0001', '032201', NULL, 'SIM', 'NAO'),
(60, 9, 'Carrinho Chalesco Confort Ride', '<p>- Indicado para c&atilde;es e gatos; - Apresenta uma solu&ccedil;&atilde;o segura, pratica e com grande comodidade nos passeios com o seu melhor amigo; - Sua roda dianteira dupla, gira 360&deg; e as rodas traseiras possuem freios de seguran&ccedil;a para manter o carrinho parado, com suas tr&ecirc;s rodas o passeio ser&aacute; f&aacute;cil e tranquilo, seja na terra, asfalto, areia ou grama, tornando poss&iacute;vel levar seu pet para passear nos mais diversos locais.</p>', 0.680, 476.88, 5, 5, 5, 'carrinho.jpg', 'carrinho-chalesco-confort-ride', 500, '0001', '02222', NULL, 'SIM', 'NAO'),
(61, 9, 'Caixa de Transporte Chalesco Gulliver', '<p>A Caixa de Transporte Chalesco Gulliver Cinza Com Rodinhas &eacute; uma caixa ideal para o transporte do seu pet em viagens de avi&atilde;o, pois atende aos pr&eacute; requisitos de metragem padr&atilde;o da IATA. Al&eacute;m disso &eacute; completa e equipada com rodinhas remov&iacute;veis, com trava de seguran&ccedil;a, al&ccedil;as para transporte, comedouro na parte interna e compartimento para pequenos objetos e grades para ventila&ccedil;&atilde;o. Aproveite sua caixa de transporte Gulliver para te auxiliar no transporte do pet veterin&aacute;rio com mais conforto.</p>', 0.980, 100.88, 5, 5, 5, 'caixa.jpg', 'caixa-de-transporte-chalesco-gulliver', 500, '0001', '00001', NULL, 'SIM', 'NAO'),
(62, 5, 'Máquina de Tosa Wahl Clipper Bravura', '<p>Indicada para c&atilde;es e gatos; - Potente e silenciosa; - Desliza suavemente sobre qualquer tipo de pelagem; - Recarreg&aacute;vel, possui autonomia de at&eacute; 80 minutos, - Possui 2 anos de garantia do fabricante.</p>\r\n<p>Recarreg&aacute;vel Bivolt</p>', 0.960, 70.88, 5, 5, 5, 'maquina.jpg', 'maquina-de-tosa-wahl-clipper-bravura', 500, '22301', '33331', NULL, 'SIM', 'NAO'),
(63, 9, 'Bolsa Transporte Náutico Bic', '<p>- Indicada para c&atilde;es; - Feita toda em tecido 100% algod&atilde;o; - Almofada remov&iacute;vel; - Tela para conforto e z&iacute;per para fechamento.</p>', 0.950, 145.80, 5, 5, 5, 'bolsa.jpg', 'bolsa-transporte-nautico-bic', 500, '222201', '376711', NULL, 'SIM', 'NAO'),
(64, 10, 'Almofadão Zooz Snoopy Quadrinho ', '<p>Indicada para c&atilde;es; - Leve e f&aacute;cil de carregar; - Ideal para maior conforto do seu pet; - Possui capa remov&iacute;vel e abertura em z&iacute;per, facilitando a higieniza&ccedil;&atilde;o; - Feita com enchimento de TNT e fibra siliconada, - Dispon&iacute;vel em 2 tamanhos: M e G</p>', 1.024, 120.55, 5, 5, 5, 'almofada.jpg', 'almofadao-zooz-snoopy-quadrinho', 500, '22301', '33331', NULL, 'SIM', 'NAO'),
(65, 7, 'Escada ou Rampa Tubline Rosa', '<p>- Indicado para c&atilde;es e gatos; - Ideal para animais de at&eacute; 15kg; - Pode ser usada como escada ou como rampa; - Acesso facilitado para c&atilde;es e gatos com dificuldade de mobilidade.</p>', 1.125, 59.88, 5, 5, 5, 'escada.jpg', 'escada-ou-rampa-tubline-rosa', 500, '25301', '312331', NULL, 'SIM', 'NAO'),
(66, 2, 'Grade ', '<p>- Indicado para c&atilde;es e gatos; - Pode ser usada como escada ou como rampa; - Acesso facilitado para c&atilde;es e gatos com dificuldade de mobilidade.</p>', 0.095, 19.88, 5, 5, 5, 'grade.jpg', 'grade', 100, '253601', '392331', NULL, 'SIM', 'NAO'),
(67, 10, 'Casinha', '<p>- Indicado para c&atilde;es e gatos; - Ideal para animais de at&eacute; 15kg; - Pode ser usada como escada ou como rampa; - Acesso facilitado para c&atilde;es e gatos com dificuldade de mobilidade.</p>', 0.090, 29.88, 5, 5, 5, 'casinha.jpg', 'casinha', 500, 'casa', '302331', NULL, 'SIM', 'NAO'),
(68, 8, 'BOLSA MALA PARA CACHORRO ', '<p><span style=\"color: #333333; font-family: robotoregular; font-size: 13px;\">Mala desenvolvida com sistema de abertura que permite o transporte de c&atilde;es e gatos. Ap&oacute;s &uacute;tilizada, sua estrutura interna pode ser totalmente aberta, facilitando o armazenamento da mala.</span><br style=\"color: #333333; font-family: robotoregular; font-size: 13px;\" /><span style=\"color: #333333; font-family: robotoregular; font-size: 13px;\">Totalmente desmont&aacute;vel.</span><br style=\"color: #333333; font-family: robotoregular; font-size: 13px;\" /><span style=\"color: #333333; font-family: robotoregular; font-size: 13px;\">Dimens&otilde;es:: 24 cm de altura x 35 cm de largura x 18 cm de profundidade Suporta at&eacute; 6 KG.</span><br style=\"color: #333333; font-family: robotoregular; font-size: 13px;\" /><span style=\"color: #333333; font-family: robotoregular; font-size: 13px;\">Dispon&iacute;vel em diversas cores, enviamos de acordo com o sexo do aninal</span></p>', 0.300, 49.90, 35, 40, 80, '190302100812bolsa-transporte.jpg.jpg', 'bolsa-mala-para-cachorro', 100, ' BF1405', '12345', NULL, 'SIM', 'NAO'),
(69, 10, 'Brinquedo Chalesco Pelúcia Macaco', '<p><span style=\"color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\">- Pel&uacute;cia macia e resistente;&nbsp;</span><br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\" /><span style=\"color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\">- Brinquedo que distrai e diverte seu pet</span><br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\" /><span style=\"color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\">- Formato criativo e divertido.&nbsp;</span><br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\" /><br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\" /><br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\" /><span style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: bolder; color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\">&Eacute; importante lembrar que nenhum brinquedo &eacute; 100% indestrut&iacute;vel e a brincadeira precisa ser monitorada.</span></p>', 0.100, 29.90, 35, 40, 80, '190321104035macaco.jpg.jpg', 'brinquedo-chalesco-pelucia-macaco', 40, 'brinquedo', '31014', NULL, 'SIM', 'NAO'),
(70, 10, 'Brinquedo Chalesco Pelúcia Porquinho', '<p><span style=\"color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\">- Macio e resistente;&nbsp;</span><br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\" /><span style=\"color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\">- Brinquedo que distrai e diverte seu pet</span><br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\" /><span style=\"color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\">- Formato criativo e divertido.&nbsp;</span><br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\" /><br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\" /><br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\" /><span style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: bolder; color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\">&Eacute; importante lembrar que nenhum brinquedo &eacute; 100% indestrut&iacute;vel e a brincadeira precisa ser monitorada.</span></p>', 0.900, 19.90, 0, 0, 0, '190321171740porquinho.jpg.jpg', 'brinquedo-chalesco-pelucia-porquinho', 60, 'brinquedo', '34435', NULL, 'SIM', 'NAO'),
(71, 7, 'Gel Dental Sabor Tutty Frutty', '<p><span style=\"color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\">&nbsp;Indicado para c&atilde;es e gatos;</span><br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\" /><span style=\"color: #666666; font-family: Arial, sans-serif; letter-spacing: 0.14px;\">- D&aacute; aos pets um h&aacute;lito mais agrad&aacute;vel e refrescante.</span></p>', 0.015, 79.90, 0, 0, 0, '190321115148geldental.jpg.jpg', 'gel-dental-sabor-tutty-frutty', 60, 'Pet clean', '25466', NULL, 'SIM', 'NAO'),
(72, 3, 'Peitoral para cachorro Fireball      ', '<pre style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; font-family: Roboto, Arial, sans-serif; font-size: 16px; white-space: pre-wrap; color: #484848; text-align: center; padding: 10px;\">\"PEITORAL PARA CACHORROS FIREBALL\r\n\r\nT&atilde;o feliz quanto fazer um pedido ao ver uma estrela cadente desenhando o c&eacute;u &eacute; vestir o seu melhor amigo com a energia e encanto que a estampa Fireball da Bellbold tem. Aqui a for&ccedil;a dos desejos trazem consigo o encanto de momentos &uacute;nicos e inesquec&iacute;veis.\r\n\r\nOs peitorais da Bellbold possuem fecho com sistema de seguran&ccedil;a de 4 pontos e o nosso poli&eacute;ster &eacute; hiper-resistente, sem deixar de lado o toque confort&aacute;vel que seu pet precisa. O tamanho do peitoral &eacute; ajust&aacute;vel para um encaixe perfeito.\r\n\r\n\r\nLARGURA DA FITA\r\n\r\nP: 1,5 cm\r\n\r\nM: 2 cm\r\n\r\nG: 2,5 cm\r\n\r\nREGULAGEM\r\n\r\nP: 35 - 50 cm\r\n\r\nM: 45 - 68 cm\r\n\r\nG: 55 - 78 cm\"\r\n\r\nObserva&ccedil;&atilde;o: Prazo para fabrica&ccedil;&atilde;o e postagem do produto em at&eacute; 5 dias &uacute;teis.\r\n\r\nTipo de embalagem dos Correios: Caixa</pre>', 0.100, 49.90, 0, 0, 0, '1903251638bolsa-transporte-2.jpg.jpg', 'peitoral-para-cachorro-fireball', 500, ' Bellbold', '3225', NULL, 'SIM', 'NAO'),
(73, 2, 'Ração Dog Chow ', '<p>Indicado para&nbsp; c&atilde;es adultos.</p>\r\n<p>4 sabores: carne, peixe, frago</p>', 1.000, 89.00, 30, 50, 60, '1904060912thumb.jpg.jpg', 'racao-dog-chow', 200, 'Purina', '545454', NULL, 'SIM', 'NAO'),
(74, 8, 'Coleira para cães e gatos', '<p>Coleira indicada para c&atilde;es adultos de pequeno e m&eacute;dio porte;</p>\r\n<p>Para c&atilde;es de at&eacute; 40cm de altura;</p>', 0.050, 33.90, 20, 20, 40, '1904061318images.jpg.jpg', 'coleira-para-caes-e-gatos', 50, ' Bellbold', '0055', NULL, 'SIM', 'NAO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_user`
--

DROP TABLE IF EXISTS `as_user`;
CREATE TABLE `as_user` (
  `user_id` int(11) NOT NULL,
  `user_nome` varchar(30) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_pw` varchar(128) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=16384 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `as_user`
--

INSERT INTO `as_user` (`user_id`, `user_nome`, `user_email`, `user_pw`) VALUES
(1, 'Adriano', 'admin@teste.com', '202cb962ac59075b964b07152d234b70'),
(2, 'nic', 'nic@gmail.com', '9580b90b39df16fb93f2282a6bbac4f5afe47f349e22f71c5650b8c54571fb09587181541a4a51f4c5018604bc93e9f44232370d0d4cac18c04274a6b6e3cdc0'),
(3, 'Nicholas', 'nicholasfelliperp@gmail.com', '9580b90b39df16fb93f2282a6bbac4f5afe47f349e22f71c5650b8c54571fb09587181541a4a51f4c5018604bc93e9f44232370d0d4cac18c04274a6b6e3cdc0'),
(4, 'Adriano', 'nicholasfelliperp@gmail.com', ''),
(5, 'Adriano', 'nicholasfelliperp@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `as_categorias`
--
ALTER TABLE `as_categorias`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `as_clientes`
--
ALTER TABLE `as_clientes`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indexes for table `as_estados`
--
ALTER TABLE `as_estados`
  ADD PRIMARY KEY (`estado_id`);

--
-- Indexes for table `as_imagens`
--
ALTER TABLE `as_imagens`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `as_pedidos`
--
ALTER TABLE `as_pedidos`
  ADD PRIMARY KEY (`ped_id`);

--
-- Indexes for table `as_pedidos_itens`
--
ALTER TABLE `as_pedidos_itens`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `as_produtos`
--
ALTER TABLE `as_produtos`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `as_user`
--
ALTER TABLE `as_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `as_categorias`
--
ALTER TABLE `as_categorias`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `as_clientes`
--
ALTER TABLE `as_clientes`
  MODIFY `cli_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `as_estados`
--
ALTER TABLE `as_estados`
  MODIFY `estado_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `as_imagens`
--
ALTER TABLE `as_imagens`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `as_pedidos`
--
ALTER TABLE `as_pedidos`
  MODIFY `ped_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `as_pedidos_itens`
--
ALTER TABLE `as_pedidos_itens`
  MODIFY `item_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `as_produtos`
--
ALTER TABLE `as_produtos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `as_user`
--
ALTER TABLE `as_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
