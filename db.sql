CREATE DATABASE mercado;
USE mercado;

CREATE TABLE Fornecedor(CNPJ VARCHAR(14), NomeFantasia VARCHAR(30), Contato VARCHAR(14), PRIMARY KEY(CNPJ));

CREATE TABLE Produto(ID INT, Nome VARCHAR(50), Quantidade INT, PreçoVenda FLOAT, PreçoCompra FLOAT, PRIMARY KEY(ID));

CREATE TABLE Compra(NrNotaFiscal INT, PreçoTotal FLOAT, DataHora VARCHAR(20), PRIMARY KEY(NrNotaFiscal));

CREATE TABLE Possui(NrNotaFiscal INT, IDProduto INT, Quantidade INT, PRIMARY KEY(NrNotaFiscal, IDProduto), FOREIGN KEY(NrNotaFiscal) REFERENCES Compra(NrNotaFiscal), FOREIGN KEY(IDProduto) REFERENCES Produto(ID));

CREATE TABLE Funcionário(CPF VARCHAR(14), Nome VARCHAR(30), Salário FLOAT, Cargo VARCHAR(20), CondiçõesDeSaúde VARCHAR(90), PRIMARY KEY(CPF));

CREATE TABLE Usuário(ID INT, CPFFuncionário VARCHAR(14), Tipo INT, Senha VARCHAR(200), PRIMARY KEY(ID), FOREIGN KEY(CPFFuncionário) REFERENCES Funcionário(CPF));

ALTER TABLE Produto ADD(CNPJFornecedor VARCHAR(14), FOREIGN KEY(CNPJFornecedor) REFERENCES Fornecedor(CNPJ));

ALTER TABLE Compra ADD(IDUsuário int, FOREIGN KEY(IDUsuário) REFERENCES Usuário(ID));
