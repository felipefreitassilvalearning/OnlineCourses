Ex01: Uma lista com o nome de todas as gafanhotas;
Ex02: Uma lista com os dados de todos aqueles que nasceram entre 1/Jan/2000 e 31/Dez/2015;
Ex03: Uma lista com o nome de todos os homens que trabalham como programadores;
Ex04: Uma lista com os dados de todas as mulheres que nasceram no Brasil e que tem seu nome iniciado com a letra J;
Ex05: Uma lista com o nome e nacionalidade de todos os homens que têm silva no nome, não nasceram no Brasil e pesam menos de 100kg;
Ex06: Qual a maior altura entre gafanhotos homens que moram no Braisl?;
Ex07: Qual a média de peso dos gafanhotos cadastrados?;
Ex08: Qual é o menor peso entre as gafanhotos mulheres que nasceram fora do Brasil e entre 01/jan/1990 e 31/Dez/2000?;
Ex09: Quantas gafanhotos mulheres tem mais de 1.90m de altura?;

Ex01: Uma lista com as profissões dos gafanhotos e seus respectivos quantitativos;
Ex02: Quantos gafanhotos homens e quantas mulheres nasceram após 01/Jan/2005?;
Ex03: Uma lista com os gafanhotos que nasceram fora do Brasil, mostrando o país de origem e o total de pesoas nascidas lá. Só nos interessam os países que tiverem mais de 3 gafanhotos com essa nacionalidade.;
Ex04: Uma lista agrupada pela altura dos gafanhotos, mostarndo quantas pessoas pesam mais de 100Kg e que estão acima da média de altura de todos os cadastrados.;

1o - Agrupe a nacionalidade de todos os gafanhotos homens nascidos entre 01-01-1990 à 31-12-2020. O resultado tem ser visto da nacionalidade com menor número de  gafanhotos ao maior.;
2o - Agrupe o peso de todos os gafanhotos sendo que só devem aparecer o peso que contem dois mais gafanhotos.;
3o - Agrupe a altura de todos os gafanhotos sendo que só devem ser mostrados aquelas que contem 4 à 6 gafanhotos. À altura e o número de gafanhotos deve ser mostrado de forma descendente.;
4o - Agrupe o total de aulas existentes nos cursos feitos no ano de 2016, 2018 e 2019. Só devem ser mostrados o total de aulas iguais ou cima da méida de aulas, ordenados pela quantidade existente nelas.;


Desc gafanhotos;
Select * from gafanhotos;


Ex01:;
select nome from gafanhotos
where sexo = 'F'
order by nome;

Ex02:;
select * from gafanhotos
where nascimento between '2000-1-1' and '2015-12-31'
order by nascimento;

Ex03:;
select nome from gafanhotos
where sexo = 'M' and profissao = 'Programador'
order by nome;

Ex04:;
select * from gafanhotos
where sexo = 'F' and nacionalidade = 'Brasil' and nome like 'J%';

Ex05:;
select nome, nacionalidade from gafanhotos
where sexo = 'M' and nome like '%silva%' and nacionalidade <> 'Brasil' and peso < 100;

Ex06:;
select max(altura) from gafanhotos
where sexo = 'M' and nacionalidade = 'Brasil';

Ex07:;
select avg(peso) from gafanhotos;

Ex08:;
select min(peso) from gafanhotos
where sexo = 'F' and nacionalidade != 'Brasil' and nascimento >= '1990-1-1' and nascimento <= '2000-12-31';

Ex09:;
select count(*) from gafanhotos
where sexo = 'F' and altura > '1.90';


Ex01:;
select profissao, count(profissao) from gafanhotos
group by profissao;

Ex02:;
select sexo, count(sexo) from gafanhotos
where nascimento > '2005-1-1'
group by sexo;

Ex03:;
select nome, nacionalidade, count(nacionalidade) from gafanhotos
where nacionalidade != 'Brasil'
group by nacionalidade
having count(nacionalidade) > 3;

Ex04:;
select *, count(peso) from gafanhotos
where peso > 100
group by altura
having altura > (select avg(altura) from gafanhotos);


