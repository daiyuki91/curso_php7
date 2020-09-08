create database dbphp7;

use dbphp7;

create table tb_usuarios (
idusuario int not null auto_increment primary key,
deslogin varchar(64) not null,
dessenha varchar(256) not null,
dtcadastro timestamp not null default current_timestamp()
);

insert into tb_usuarios (deslogin, dessenha) values('shiriyuki','dai@1234'); -- inserindo um novo usuário

select * from tb_usuarios; -- mostrando a tabela

update tb_usuarios set dessenha = 'DAI@1234' where idusuario = 1; -- alterando um campo em uma determinada linha

delete from tb_usuarios where idusuario = 1; -- apaga os dados de uma linha na tabela

truncate table tb_usuarios;