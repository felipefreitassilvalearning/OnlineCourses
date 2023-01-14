use cadastro;
select * from gafanhotos;
select * from cursos;


Selecionando Colunas;
select * from cursos 
order by nome desc;
desc = descendente, não descrever;
desc cursos;

select nome, carga, ano from cursos
order by nome;

select ano, carga, nome from cursos
order by ano;

select ano, nome, carga from cursos
order by ano, nome;


Selecionando linhas;
select * from cursos
where ano = '2016'
order by nome;

select nome, descricao, carga from cursos
where ano = '2016'
order by nome;

select nome, descricao from cursos
where ano <= 2015
order by nome;

select nome, descricao, ano from cursos
where ano <= 2015
order by ano, nome;

<> igual a != (diferente);

select nome, ano from cursos
where ano between 2014 and 2016
order by ano desc, nome asc;

ano decrescente, nome crescente (ascendente);

select nome, descricao, ano from cursos
where ano in (2014, 2016, 2020)
order by ano;


Com Operadores lógicos;
select * from cursos
where carga < 35 and totaulas < 30
order by nome;

select nome, carga, totaulas from cursos
where carga > 35 and totaulas < 30
order by nome;

select nome, carga, totaulas from cursos
where carga > 35 or totaulas < 30;