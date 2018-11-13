--CREATE DATABASE sicfdb;

CREATE TABLE despesas(
    codDespesas SERIAL NOT NULL PRIMARY KEY,
    nome VARCHAR NOT NULL,
    valor FLOAT NOT NULL,
    data DATE,
    multa FLOAT,
    juros FLOAT
);

CREATE TABLE ganhos(
    codGanhos SERIAL NOT NULL PRIMARY KEY,
    nome VARCHAR NOT NULL,
    valor FLOAT NOT NULL,
    data DATE
);

CREATE TABLE usuario(
    codUsuario SERIAL NOT NULL PRIMARY KEY,
    nome VARCHAR NOT NULL,
    login VARCHAR NOT NULL,
    senha VARCHAR(32) NOT NULL
    --email VARCHAR NOT NULL,
    --celular VARCHAR NOT NULL
);

CREATE TABLE Conta(
    codConta SERIAL NOT NULL PRIMARY KEY,
    competencia INT NOT NULL,
    saldo FLOAT NOT NULL,
    codUsu INT REFERENCES usuario(codUsu)
);