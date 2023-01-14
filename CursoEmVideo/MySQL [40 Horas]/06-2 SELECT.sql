select * from cursos
where nome like 'P%';

like = parecido;

% = carta coringa - substitui nenhum ou qualquer caracter
se % vier antes, resultados com tal letra no final
, se vier depois, no começo
, se vier nas pontas, em qualquer lugar
, se vier no meio, o que vem a esquerda é o começo, e a direita, o final;

select * from cursos
where nome like '%a';

update cursos set nome = 'PáOO' where idcurso = '9';
select * from cursos
where nome not like 'A%';

select * from cursos
where nome like '%h%';

select * from cursos
where nome like 'ph%p';

_ = carta coringa - exige que haja um caracter naquele local;

select * from cursos
where nome like 'ph%p_';

select * from cursos
where nome like 'p_p%';

select * from cursos
where nome like 'p__t%';


pessoas com o nome silva;

select * from gafanhotos
where nome like '%_silva%';


distinct impede que repita o mesmo valor várias vezes;

select * from gafanhotos;
select nacionalidade from gafanhotos;

select distinct nacionalidade from gafanhotos
order by nacionalidade;

select distinct carga from cursos
order by carga;


Contando quanto de cada há;

select * from cursos;
select count(*) from cursos;

select * from cursos where carga > 40;
select count(*) from cursos where carga > 40;

Qual a maior de algo;

select * from cursos order by carga;
select max(carga) from cursos;

select * from cursos
where ano = '2016';

select max(totaulas) from cursos
where ano = '2016';

Qual a menor de algo;

select min(totaulas) from cursos
where ano = '2016';

Somando tudo;

select sum(totaulas) from cursos
where ano = 2016;

Média;

select avg(totaulas) from cursos
where ano = 2016;