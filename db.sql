CREATE DATABASE concessionaria;
USE concessionaria;

CREATE TABLE carros(id INT AUTO_INCREMENT NOT NULL, marca VARCHAR(255) NOT NULL, modelo VARCHAR(255) NOT NULL, ano INT(4) NOT NULL, preco FLOAT NOT NULL, cor VARCHAR(255) NOT NULL, descricao VARCHAR(255) NOT NULL, PRIMARY KEY (id), foto longblob);
