-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/04/2025 às 16:47
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_damaju`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_carrinho`
--

CREATE TABLE `tb_carrinho` (
  `id` int(11) NOT NULL,
  `id_pessoa` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `cep` varchar(9) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_pessoa`
--

INSERT INTO `tb_pessoa` (`id`, `nome`, `email`, `nascimento`, `cpf`, `telefone`, `cep`, `img`) VALUES
(1, 'Harry Potter', 'harrypotter@gmail.com', '0000-00-00', '12345678901', '(11)98765-4321', 'Hogwarts', 'teste_form.png'),
(2, 'Luke Skywalker', '', '0000-00-00', '23456789012', '(11)22334-4556', '', ''),
(3, 'Frodo Baggins', '', '0000-00-00', '34567890123', '(11)91122-3344', '', ''),
(4, 'Indiana Jones', '', '0000-00-00', '45678901234', '(11)33445-5667', '', ''),
(5, 'teste-san', 'teste2@gmail.com', '2000-02-20', '12345678900', '(11)11111-1111', '19473300', 'Mídia.jpg'),
(6, 'teste-san', 'teste2@gmail.com', '2000-02-20', '12345678900', '(11)11111-1111', '19473300', ''),
(7, 'Josue Orellaa', 'josue@gmail.com', '2006-01-19', '238.412.298', '(19)31941-9000', '13949-141', ''),
(8, 'Josue Orellana ', 'josue@gmail.com', '2006-01-19', '378.228.908', '(19)39491-4000', '13914-914', 'visa.jpg'),
(9, 'David Gabriel Tarley', 'david.tarleyy@gmail.com', '2000-09-08', '480.844.328-77', '(19)98717-1918', '13473-300', 'logo2.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id_produtos` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descrição` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `valor` varchar(6) NOT NULL,
  `img` varchar(255) NOT NULL,
  `quantidade` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id_produtos`, `nome`, `descrição`, `categoria`, `valor`, `img`, `quantidade`) VALUES
(1, 'Hamburguer', 'Um hambúrguer suculento, com carne perfeitamente grelhada, queijo derretido, alface fresca, tomate crocante e molho especial, tudo envolto em um pão macio e levemente tostado. Uma explosão de sabor a cada mordida!', 'Hamburguer', '25.99', 'ImgHaburFrango.png', 1),
(2, 'Hamburguer Clássico', 'Hamburguer de carne com queijo, alface, tomate e maionese.', 'Hamburguer', '15.90', 'hamburguer.png', 1),
(3, 'Pizza Margherita', 'Pizza de massa fina com molho de tomate, mozzarella, manjericão e azeite.', 'Pizza', '35.50', 'Pizza.png', 1),
(4, 'Refrigerante', 'Refrigerante de cola de 350ml.', 'Bebidas', '5.00', 'Refrigerante.png', 1),
(5, 'Batata Frita', 'Porção de batata frita crocante.', 'Guarnição', '10.00', 'batataFrita.png', 1),
(6, 'Hamburguer Bacon', 'Hamburguer de carne com queijo cheddar, bacon crocante, alface, tomate e maionese.', 'Hamburguer', '18.90', 'hamburguer.png', 1),
(7, 'Pizza Calabresa', 'Pizza de massa fina com molho de tomate, queijo mozzarella e calabresa fatiada.', 'Pizza', '38.00', 'ImgPizzaFrango.png', 1),
(8, 'Suco de Laranja', 'Suco natural de laranja, sem adição de açúcar.', 'Bebidas', '7.50', 'sucoLaranja.png', 1),
(9, 'Nuggets', 'Porção de nuggets de frango empanados e fritos.', 'Guarnição', '12.00', 'nugget.png', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `id_pessoa` int(11) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `usuario`, `senha`, `id_pessoa`, `status`) VALUES
(1, 'harry_potter', 'senha123', 1, ''),
(2, 'luke_skywalker', 'forca123', 2, ''),
(3, 'frodo_baggins', 'anello123', 3, ''),
(4, 'indy_jones', 'arqueologia123', 4, ''),
(5, 'admin', 'admin', 5, 'admin'),
(6, 'teste update', '123456', 6, 'admin'),
(7, 'Raccon', 'Josue123#', 7, ''),
(8, 'JosueTeste', 'Testesenha*1', 8, ''),
(9, 'Teste Final', 'final123D&', 9, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_carrinho`
--
ALTER TABLE `tb_carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id_produtos`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pessoa` (`id_pessoa`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_carrinho`
--
ALTER TABLE `tb_carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id_produtos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `tb_usuario_ibfk_1` FOREIGN KEY (`id_pessoa`) REFERENCES `tb_pessoa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
