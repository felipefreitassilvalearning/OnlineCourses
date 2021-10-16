Apagar banco de dados;
drop database cadastro;

Criar banco de dados;
create database cadastro
default character set utf8
default collate utf8_general_ci;

Criar tabela;
create table pessoas (
	id int NOT NULL AUTO_INCREMENT,
	nome varchar(30) not null,
    nascimento date,
    sexo enum('M','F'),
    peso decimal(5,2),
    altura decimal(3,2),
    nacionalidade varchar(20) DEFAULT 'Brasil',
    primary key (id)
);

Usar banco de dados;
Duplo click com o mouse em cima de seu nome;