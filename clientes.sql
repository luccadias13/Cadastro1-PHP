CREATE DATABASE clientes;
USE clientes;

CREATE TABLE clientes{
id_cliente INT NOT NULL AUTO_INCREMENT UNSIGNED PRIMARY KEY,
nome_cliente varchar (100) NOT NULL,
email_cliente varchar(100) NOT NULL,
telefone_cliente varchar(11) NOT NULL,
senha varchar(100) NOT NULL,
data_nasc_cliente varchar(100) NOT NULL 
}