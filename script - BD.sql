create database bd_loja;
use bd_loja;

create table tb_funcionario(
id_funcionario int primary key auto_increment,
nm_funcionario varchar(45),
sobrenome varchar(45),
dt_nascimento date,
cargo varchar(45),
salario decimal,
dt_admissao date,
senha text
);

create table tb_cliente(
id_cliente int primary key auto_increment,
nm_cliente varchar(45),
sobrenome varchar(45),
email varchar(45),
telefone varchar(45),
endereco varchar(45)
);

create table tb_fornecedor(
id_fornecedor int primary key auto_increment,
nm_fornecedor varchar(45),
contato varchar(45),
email varchar(45),
telefone varchar(45),
endereco varchar(45)
);

create table tb_categoria(
id_categoria int primary key auto_increment,
nome varchar(45),
descricao varchar(100)
);

create table tb_lançamento(
id_despesa int primary key auto_increment, 
descricao varchar(100),
valor decimal,
tipo varchar(45),
data_lancamento date,
id_categoria int,
id_funcionario int,
FOREIGN KEY (id_categoria) REFERENCES tb_categoria(id_categoria),
FOREIGN KEY (id_funcionario) REFERENCES tb_funcionario(id_funcionario)
)

