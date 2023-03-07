
CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `preco` decimal(10,5) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
