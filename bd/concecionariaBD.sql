create database concecionaria;

create table usuario(
id_usu int(3),
login varchar(20),
senha varchar(30),
primary key(id_usu));

create table cliente(
id_cli int(3),
cpf varchar(14),
nome varchar(40),
telefone varchar(16),
endereco varchar(50),
primary key(id_cli));

create table veiculo(
id_vei int(3),
placa varchar(8),
cor varchar(25),
fabricante varchar(30),
ano date,
primary key(id_vei));

create table vendedor(
id_ven int(3),
cpf varchar(14),
nome varchar(40),
telefone varchar(16),
endereco varchar(50),
primary key(id_ven));

create table venda(
id_venda int(3),
id_ven int(3),
id_cli int(3),
id_vei int(3),
anotacoes varchar(500),
primary key(id_venda),
foreign key(id_ven) references vendedor(id_ven),
foreign key(id_cli) references cliente(id_cli),
foreign key(id_vei) references veiculo(id_vei));