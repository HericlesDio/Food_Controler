create database foodcontroler;
use foodcontroler;

create table cadastro(
	idUsu int not null auto_increment, 
	nome varchar 20 not null,
    sobrenome varchar 20 not null,
    login varchar 45 not null unique,
    senha varchar 20 not null,
    tipoUse enum 'admin','func' not null,
    primary key idUsu
    );
    
create table produto(
	idProd int not null auto_increment,
	nome varchar 20 not null,
    quantidade int not null,
    tipoProd varchar 45 not null unique,
    fornecedor varchar 40 not null,
    primary key idProd
    );
    
    
    

