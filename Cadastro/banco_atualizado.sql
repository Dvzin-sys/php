create database face;

use face;

create table empresa(
id_emp int primary key auto_increment, 
nome varchar(120),
cnpj varchar(20),
email varchar(120), 
senha varchar(12));

create table candidato(
id_cand int primary key auto_increment, 
nome varchar(120),
email varchar(20),
telefone varchar(120), 
senha varchar(12));





select * from empresa;

