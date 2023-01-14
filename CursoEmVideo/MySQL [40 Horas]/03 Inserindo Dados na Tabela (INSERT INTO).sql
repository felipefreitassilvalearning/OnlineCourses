Usar tabela;
use cadastro;

Inserir em que tabela;
insert into pessoas
(id, nome, nascimento, sexo, peso, altura, nacionalidade)
values
(DEFAULT,'Creuza','1920-12-30','F','50.2','1.65', default);
('Maria','1999-12-30','F','55.2','1.65','Portugal');
('Godofredo','1984-01-02','M','78.5','1.83','Brasil');

Se os valores forem inseridos na mesma ordem das colunas da tabela;
insert into pessoas values
(default,'Adalgiza','1930-11-2','F','63.2','1.75','Irlanda');

Para inserir vários valores de uma só vez;
insert into pessoas values
(DEFAULT,'Cláudio','1975-4-22','M','99.0','2.15','Brasil'),
(default,'Pedro','1999-12-3','M','87','2',default),
(default,'Janaína','1987-11-12','F','75.4','1.66','EUA');

Selecionar tudo de tabela;
select * from pessoas;