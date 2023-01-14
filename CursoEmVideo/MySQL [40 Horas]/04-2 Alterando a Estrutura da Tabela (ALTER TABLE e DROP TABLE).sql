Criar tabela apenas se outra com o mesmo nome não existir;
create table if not exists gafanhotos (teste int);

create table if not exists cursos(
	nome varchar(30) not null unique,
    descricao text,
    carga int unsigned,
    totaulas int unsigned,
    ano year default '2021'
) default charset=utf8;


Descrever tabela;
desc cursos;


Alterar tabela tabela;

adicionar id;
alter table cursos
add column idcurso int first;

adicionar primary_key;
alter table cursos
add primary key (idcurso);