CREATE SCHEMA grafica;

use grafica;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    categoria VARCHAR(255),
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL
);

INSERT INTO `grafica`.`produtos` (`id`, `nome`, `categoria`, `descricao`, `preco`) VALUES ('1', 'Adesivo Vinil', 'Adesivos', 'Adesivo vinil sem acabamento', '30');
INSERT INTO `grafica`.`produtos` (`id`, `nome`, `categoria`, `descricao`, `preco`) VALUES ('2', 'Adesivo Transparente', 'Adesivos', 'Adesivo vinil transparente', '32');
INSERT INTO `grafica`.`produtos` (`id`, `nome`, `categoria`, `descricao`, `preco`) VALUES ('3', 'Adesivo Blackout', 'Adesivos', 'Adesivo furta luz fosco', '35');
INSERT INTO `grafica`.`produtos` (`id`, `nome`, `categoria`, `descricao`, `preco`) VALUES ('4', 'Faixa', 'Lonas', 'Lona com acabamento em madeira e ilhós na horizontal', '32');
INSERT INTO `grafica`.`produtos` (`id`, `nome`, `categoria`, `descricao`, `preco`) VALUES ('5', 'Banner', 'Lonas', 'Lona com acabamento em madeira e ilhós na vertical', '32');
INSERT INTO `grafica`.`produtos` (`id`, `nome`, `categoria`, `descricao`, `preco`) VALUES ('6', 'Caneca', 'Outros', 'Caneca com impressão em sublimação', '8.5');
INSERT INTO `grafica`.`produtos` (`id`, `nome`, `categoria`, `descricao`, `preco`) VALUES ('7', 'Placa PS', 'Placas', 'Placa de PS 1mm ou 2mm adesivada frente e verso', '90');
INSERT INTO `grafica`.`produtos` (`id`, `nome`, `categoria`, `descricao`, `preco`) VALUES ('8', 'Bag', 'Outros', 'Sacola ecológica com impressão em sublimação', '25');
