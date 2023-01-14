Selecionar tudo de tabela;
select * from cursos;

Inserir em tabela valores;
insert into cursos values
('1','HTML4','Cursos de HTML 5','40','37','2014'),
('2','Algoritmos','Lógica de Programação','20','15','2014'),
('3','Photoshop','Dicas de Photoshop CC','10','8','2014'),
('4','PGP','Curso de PHP para iniciantes','40','20','2010'),
('5','Jarva','Introdução à linguagem Java','10','29','2000'),
('6','MySQL','Banco de Dados MySQL','30','15','2016'),
('7','Word','Curso completo de Word','40','30','2016'),
('8','Sapateado','Danças Rítmicas','40','30','2018'),
('9','Cozinha Árabe','Aprenda a fazer Kibe','40','30','2018'),
('10','YouTuber','Gerar polêmica e ganhar inscritos','5','2','2018');


Modificando linhas incorretas;

update cursos
set nome = 'HTML5'
where idcurso = '1';

update cursos
set nome = 'PHP', ano = '2015'
where idcurso = '4';

update cursos
set nome = 'Java', ano = '2015', carga = '40'
where idcurso = '5'
limit 1;

update cursos
set ano = '2050', carga = '800'
where ano = '2018';

update cursos
set ano = '2018', carga = '800'
where ano = '2050';


Deletando linhas;
delete from cursos
where idcurso='10';


Deletando todas linhas de uma tabela;
truncate cursos;
ou;
truncate table cursos;