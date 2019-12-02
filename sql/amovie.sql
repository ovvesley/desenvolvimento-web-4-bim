create database amovie;
create table usuario
(
    idUsuario integer not null,
    nome varchar (20) not null,
    senha varchar (20) not null,
    PRIMARY KEY (idUsuario)
);
create table avaliacao
(
    idAvaliacao integer not null,
    idUsuario integer not null,
    amou boolean not null,
    PRIMARY KEY (idAvaliacao, )
)