create database concessionaria;

create table usuario(
id_usu int(3) NOT NULL AUTO_INCREMENT,
login varchar(20),
senha varchar(30),
primary key(id_usu));

create table cliente(
id_cli int(3) NOT NULL AUTO_INCREMENT,
cpf varchar(14) not null,
nome varchar(40) not null,
telefone varchar(16) not null,
endereco varchar(50) not null,
primary key(id_cli));

create table veiculo(
id_vei int(3) NOT NULL AUTO_INCREMENT,
placa varchar(8) not null,
modelo varchar(30) not null,
cor varchar(25) not null,
fabricante varchar(30) not null,
ano date not null,
primary key(id_vei));

create table vendedor(
id_ven int(3) NOT NULL AUTO_INCREMENT,
cpf varchar(14) not null,
nome varchar(40) not null,
telefone varchar(16) not null,
endereco varchar(50) not null,
primary key(id_ven));

create table venda(
id_venda int(3) NOT NULL AUTO_INCREMENT,
id_ven int(3) not null,
id_cli int(3) not null,
id_vei int(3) not null,
anotacoes varchar(500),
primary key(id_venda),
foreign key(id_ven) references vendedor(id_ven),
foreign key(id_cli) references cliente(id_cli),
foreign key(id_vei) references veiculo(id_vei));

INSERT INTO usuario (login, senha)
VALUES ('jonatan', '123');

INSERT INTO cliente (cpf, nome, telefone, endereco)
VALUES ('1234567890', 'Rian', '3406-1002', 'Rua A');

INSERT INTO veiculo (placa, modelo, cor, fabricante, ano)
VALUES ('DHH-8307', 'Azera', 'Preto','Hyundai', '2020/10/10');

INSERT INTO vendedor (cpf, nome, telefone, endereco)
VALUES ('0123456789', 'Gustavo', '997960501', 'Rua B');

INSERT INTO venda (id_ven, id_cli, id_vei, anotacoes)
VALUES (1, 1, 1, 'Venda foi paga a vista');