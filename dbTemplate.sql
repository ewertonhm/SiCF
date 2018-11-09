--CREATE DATABASE sicfdb;

CREATE TABLE passivos(
    codPsv SERIAL NOT NULL PRIMARY KEY,
    nome VARCHAR NOT NULL,
    valor FLOAT NOT NULL,
    data DATE,
    multa FLOAT,
    juros FLOAT
);

CREATE TABLE ativos(
    codAtv SERIAL NOT NULL PRIMARY KEY,
    nome VARCHAR NOT NULL,
    valor FLOAT NOT NULL,
    data DATE
);

CREATE TABLE usuario(
    codUsu SERIAL NOT NULL PRIMARY KEY,
    nome VARCHAR NOT NULL,
    login VARCHAR NOT NULL,
    senha VARCHAR(32) NOT NULL
    --email VARCHAR NOT NULL,
    --celular VARCHAR NOT NULL
);

CREATE TABLE caixa(
    codConta SERIAL NOT NULL PRIMARY KEY,
    competencia INT NOT NULL,
    saldo FLOAT NOT NULL,
    codUsu INT REFERENCES usuario(codUsu)
);