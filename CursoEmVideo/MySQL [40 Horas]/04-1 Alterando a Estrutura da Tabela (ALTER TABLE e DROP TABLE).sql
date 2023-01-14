Descrever tabela;
describe pessoas;
desc gafanhotos;


Selecionar coluna de uma tabela;
select profissao from pessoas;

Selecionar tudo de uma tabela;
select * from pessoas;


Alterar tabela;

Alterar nome tabela para nome tabela;
alter table pessoas
rename to gafanhotos;

Adicionar coluna;
alter table pessoas
add column profissao varchar(10);

depois de outra;
alter table pessoas
add column profissao varchar(10) after nome;

em primeiro lugar;
alter table pessoas
add column profissao varchar(10) first;

Remover coluna;
alter table pessoas
drop column profissao;

Alterar coluna;
alter table pessoas
modify column profissao varchar(20) not null default '';

Alterar nome coluna (tem que refazer os parâametros);
alter table pessoas
change column profissao prof varchar(20);