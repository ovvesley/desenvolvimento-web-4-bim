create database amovie;
create table Usuario
(
    idUsuario int not null auto_increment,
    nome varchar (20) not null,
    senha varchar (20) not null,
    primary key (idUsuario)
);
create table Avaliacao
(
    idAvaliacao int not null auto_increment,
    idUsuario int not null,
    amou boolean not null,
    primary key(idAvaliacao),
    foreign key (idUsuario) references Usuario (idUsuario)
);
alter table Avaliacao add
(
    idFilme int not null
);