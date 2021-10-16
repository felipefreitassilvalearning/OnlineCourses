Criar tabela, se não existir outra com o mesmo nome;
create table if not exists teste(
	id int,
    nome varchar(10),
    idade int
);


Inserir nessa nova tabela os valores;
insert into teste value
('1','Pedro','22'),
('2','Maria','12'),
('3','Maricota','77');

Selecionar tudo deuma tabela;
select * from teste;

Deletar tabela, se existir tabela;
drop table if exists teste;