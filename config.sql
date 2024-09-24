create database cadastro;
create table cadastro.registro (
	id int not null auto_increment,
    name varchar(255) not null,
    email varchar(320) not null,
    pw char(32) not null,
    primary key (id)
);