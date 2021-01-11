CREATE DATABASE produto;

use produto;

create table produto(
idproduto INT(11) auto_increment NOT NULL,
idcategoria INT NOT NULL,
nomeproduto VARCHAR(30) NOT NULL,
imagem VARCHAR(60) NOT NULL,
estoque_minimo INT(11) NOT NULL,
estoque_maximo INT(11) NOT NULL,
quant_estoque INTEGER NOT NULL,
PRIMARY KEY (idproduto),
KEY idcategoria (idcategoria)
);

create table categoria(
idcategoria INT(11) auto_increment NOT NULL,
descricao VARCHAR(50) NOT NULL,
PRIMARY KEY (idcategoria)
);

CREATE TABLE Cliente(
IdCliente INT NOT NULL AUTO_INCREMENT,
Nome VARCHAR(30) NOT NULL,
Sobrenome VARCHAR(70) NOT NULL,
Telefone INT(15) NOT NULL,
Email VARCHAR(70) NOT NULL,
Senha VARCHAR(20) NOT NULL,
PRIMARY KEY (IdCliente)
);

CREATE TABLE Endereco(
IdCliente INT NOT NULL,
Estado VARCHAR(30) NOT NULL,
Cidade VARCHAR(30) NOT NULL,
Bairro VARCHAR(30) NOT NULL,
Rua VARCHAR(30) NOT NULL,
Numero INT(5) NOT NULL,
FOREIGN KEY (IdCliente) REFERENCES Cliente (IdCliente) ON UPDATE CASCADE ON DELETE CASCADE
);