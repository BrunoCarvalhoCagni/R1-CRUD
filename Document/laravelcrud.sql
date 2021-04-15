-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Abr-2021 às 17:58
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravelcrud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(65) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `picture`) VALUES
(1, 'Tesoura pequena', 'Tesoura pequena para arremate', '30.00', 5, 'https://www.romaaviamentos.com.br/octopus/design/images/102/products/s/1-797-445.jpg'),
(2, 'Tesoura grande', 'tesoura grande para cortar tecidos.', '50.00', 5, 'https://www.romaaviamentos.com.br/octopus/design/images/102/products/s/32558.jpg'),
(3, 'Agulha de crochê', 'Agulha de metal para crochê.', '5.00', 60, 'https://www.romaaviamentos.com.br/octopus/design/images/102/products/s/8328-AGULHAS.jpg'),
(4, 'Agulha de tricô', 'Agulha de plástico de tricô', '8.00', 50, 'https://www.romaaviamentos.com.br/octopus/design/images/102/products/s/1-709-2631.jpg'),
(5, 'Kit de agulhas para máquina de costura', 'Kit com 10 unidades para máquina de costura.', '20.00', 6, 'https://www.romaaviamentos.com.br/octopus/design/images/102/products/s/dbx1agulh.jpg'),
(6, 'Bainha instantânea', 'Bainha de instantânea de 4 mts', '7.00', 30, 'https://www.romaaviamentos.com.br/octopus/design/images/102/products/s/1-1342-7182.jpg'),
(7, 'Fio de algodão mercerizado', 'Fio de algodão mercerizado de 1000 metros diversas cores.', '14.00', 50, 'https://www.romaaviamentos.com.br/octopus/design/images/102/products/s/2627_PRIN.jpg'),
(8, 'Barbante - círculo 941m', 'Barbante em círculo de 941 metros', '18.90', 40, 'https://www.romaaviamentos.com.br/octopus/design/images/102/products/s/apolo4cru.jpg'),
(9, 'Fio de malha', 'Fio de malha de diversas cores', '22.00', 35, 'https://www.romaaviamentos.com.br/octopus/design/images/102/products/s/fiodemalhatotoracores.jpg'),
(10, 'Fita dupla face 10mm x 10m', 'Fita dupla face com brilho', '5.10', 20, 'https://www.romaaviamentos.com.br/octopus/design/images/102/products/s/35847_PRIIN.jpg'),
(11, 'Fita Gorgurão Lisa 10mm x 10m', 'Fita Gorgurão Lisa 10mm x 10m', '7.50', 20, 'https://www.romaaviamentos.com.br/octopus/design/images/102/products/s/sanding_10mm.jpg'),
(12, 'Fita Gorgurão estampada 38mm x 10m', 'Fita Gorgurão estampada 38mm x 10m', '12.50', 34, 'https://www.romaaviamentos.com.br/octopus/design/images/102/products/s/progresso_abacaxi001.jpg'),
(13, 'Kit de agulhas de tapeçaria', 'Kit de agulhas de tapeçaria 17cm', '30.00', 23, 'https://www.romaaviamentos.com.br/octopus/design/images/102/products/s/26959-AgulhaTap17cm.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`) VALUES
(1, 'usuario', 'usuario@email.com', '123', 'usuario'),
(2, 'admin', 'admin@email.com', 'admin', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
