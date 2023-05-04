CREATE DATABASE trabalhopw

CREATE TABLE usuarios (
    id int not null AUTO_INCREMENT,
    nome varchar(250) not null,
    email varchar(250) not null,
    senha varchar(250) not null,
    PRIMARY KEY (id))

CREATE TABLE arquivos (
    id int not null AUTO_INCREMENT,
    id_usuario int not null,
    arquivo varchar(250),
    data DATETIME NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id))