create database testedemysql;
use testedemysql;

create table Empregado(
	id int not null auto_increment
    ,nome varchar(20)
    ,idade int not null
    ,primary key (id)
);

create table Pagamento(
	empregado_id int not null
    ,data date
    ,valor int
);

insert into Empregado (nome, idade) values
	('João', 20)
    ,('Maria', 30)
    ,('José', 22)
    ,('Joaquim', 26)
    ,('Manoel', 21);
    
drop table Pagamento;
    
insert into Pagamento (empregado_id, data, valor) values
	(1, '2008-07-02', 1000)
    ,(2, '2008-07-02', 2000)
    ,(3, '2008-07-02', 1400)
    ,(4, '2008-07-02', 1200)
    ,(5, '2008-07-02', 5000);
    
    select * from Empregado;
    select * from Pagamento;
    
    select count(*) from Empregado e, Pagamento p
    where e.id = p.empregado_id
    and e.idade < 25 and p.valor > 1500;