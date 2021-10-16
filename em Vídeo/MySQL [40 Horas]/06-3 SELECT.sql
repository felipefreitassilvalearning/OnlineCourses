use cadastro;

select * from cursos;

select totaulas from cursos
order by totaulas;

select distinct totaulas from cursos
order by totaulas;

select totaulas from cursos
group by totaulas
order by totaulas;

select totaulas, count(*) from cursos
group by totaulas
order by totaulas;

select * from cursos where totaulas = 12;

select carga, count(nome) from cursos where totaulas > 20
group by carga;

select ano, count(*) from cursos
where totaulas > 30 
group by ano
having ano >= 2013
order by count(*) desc;

select avg(carga) from cursos;

select * from cursos
where ano > 2015;

select carga, count(*) from cursos
where ano > 2015
group by carga
having carga > (select avg(carga) from cursos);