CREATE DATABASE mercado;
USE mercado;

CREATE TABLE Produto(ID INT AUTO_INCREMENT NOT NULL, Nome VARCHAR(50), PreçoVenda FLOAT, PreçoCompra FLOAT, PRIMARY KEY(ID));

CREATE TABLE Usuário(ID INT AUTO_INCREMENT NOT NULL, Email VARCHAR(70) UNIQUE, Senha VARCHAR(30), PRIMARY KEY(ID));
