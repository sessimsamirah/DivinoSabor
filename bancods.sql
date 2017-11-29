CREATE DATABASE bancoDS;

CREATE TABLE `cliente` (
  `CPF` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `endereco` text NOT NULL,
  `telefone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `compra` (
  `codigoCompra` int(15) NOT NULL,
  `codigoProduto` int(4) NOT NULL,
  `cpf` int(11) NOT NULL,
  `quantidadeProduto` int(4) NOT NULL,
  `valorTotal` double NOT NULL,
  `dataEntrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `produto` (
  `codigoProduto` int(4) NOT NULL,
  `nomeProduto` varchar(20) NOT NULL,
  `descricao` text NOT NULL,
  `preco` double NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CPF`);


ALTER TABLE `compra`
  ADD PRIMARY KEY (`codigoCompra`),
  ADD KEY `fk_compra_produto` (`codigoProduto`),
  ADD KEY `fk_compra_cliente` (`cpf`);


ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigoProduto`);


ALTER TABLE `compra`
  MODIFY `codigoCompra` int(15) NOT NULL AUTO_INCREMENT;


ALTER TABLE `produto`
  MODIFY `codigoProduto` int(4) NOT NULL AUTO_INCREMENT;

ALTER TABLE `compra`
  ADD CONSTRAINT `fk_compra_cliente` FOREIGN KEY (`cpf`) REFERENCES `cliente` (`CPF`),
  ADD CONSTRAINT `fk_compra_produto` FOREIGN KEY (`codigoProduto`) REFERENCES `produto` (`codigoProduto`);

INSERT INTO `produto`(`nomeProduto`, `descricao`, `preco`, `imagem`) VALUES ("brigadeiro simples","brigadeiro nos sabores chocolate belga, morango, amendoim, beijinho, leite ninho, Ovomaltine, Nutella, Oreo, maracujá, limão e Nestlé Classic", 0.60, "/images/FOTA2.png");

INSERT INTO `produto`(`nomeProduto`, `descricao`, `preco`, `imagem`) VALUES ("brigadeiro especial","brigadeiros recheados com doce de leite ou Nutella e nos sabores Estikadinho, churros Prestígio e casadinho", 0.80, "/images/FOTA9.png");

INSERT INTO `produto`(`nomeProduto`, `descricao`, `preco`, `imagem`) VALUES ("cupcake","sabores diversos", 2.50, "/images/FOTA3.png");

INSERT INTO `produto`(`nomeProduto`, `descricao`, `preco`, `imagem`) VALUES ("coração recheado", "coração de chocolate ao leite, meio amargo, branco ou misto, com recheio e cobertura variados",35.0,"/images/FOTA6.png");

INSERT INTO `produto`(`nomeProduto`, `descricao`, `preco`, `imagem`) VALUES ("bolo de frutas vermelhas", "Naked cake de frutas vermelhas", 50.0, "/images/FOTA1.png");

INSERT INTO `produto`(`nomeProduto`, `descricao`, `preco`, `imagem`) VALUES ("bolo de morango e brigadeiro","Naked cake de morango e brigadeiro, decorado com M&M's e marshmallow", 80.0,"/images/FOTA4.png");

INSERT INTO `produto`(`nomeProduto`, `descricao`, `preco`, `imagem`) VALUES ("bolo M&M's","bolo com tubetes de chocolate e M&M's", 60.0,"/images/FOTA5.png");