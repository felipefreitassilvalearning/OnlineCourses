Criar banco de dados;
create database cadastro;

Usar banco de dados;
use cadastro;

Criar tabela;
create table pessoas (
	nome varchar(30),
    idade tinyint,
    sexo char(1),
    peso float,
    altura float,
    nacionalidade varchar(20)
);

Descrever tabelas;
describe pessoas;