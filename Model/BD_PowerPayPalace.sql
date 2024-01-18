
CREATE DATABASE BD_PowerPlayPalace;
USE BD_PowerPlayPalace;

create table usuario (
id int primary key auto_increment, 
usuario varchar(50) not null ,
email varchar (62)not null ,
senha varchar(32) not null ,
nome varchar (50) not null , 
cpf char (11) unique not null , 
idade date not null , 
celular char (13) not null , 
telefone char (13) null , 
cidade varchar (32) not null ,
rua varchar (100) not null , 
cep varchar (8) not null ,
nresidencial char(10) not null ,
complemento varchar (100) null 
stats bit not null
)

create table adm (
id_adm int primary key auto_increment,
nome varchar (50) not null ,
usuario varchar(50) not null ,
email varchar (62)not null ,
senha varchar(32) not null 
)

create table categoria(
id_cate int primary key auto_increment , 
nome_cate varchar (50) not null 
)

create table produto (
id_prod int primary key auto_increment , 
nome_prod varchar (50) not null , 
valor money not null ,
nlote varchar (32) not null , 
validade date not null ,
id_cate int fereign key (fk_cate) references categoria( id_cate )
stats bit not null
)

create table vendas (
id_venda int primary key auto_increment , 
id_prod int foreign key (id_prod) references produto(id_prod) , 
qntd_vendida int , 
)