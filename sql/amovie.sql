create database amovie;
create table Usuario
(
    idUsuario int not null,
    nome varchar (20) not null,
    senha varchar (20) not null,
    PRIMARY KEY (idUsuario)
);
create table Avaliacao
(
    idAvaliacao int not null,
    idUsuario int not null,
    amou boolean not null,
    PRIMARY KEY (idAvaliacao),
    FOREIGN KEY (idUsuario) References Usuario (idUsuario)
);