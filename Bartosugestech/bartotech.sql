CREATE DATABASE bartosugestech;
USE bartosugestech;




CREATE TABLE usuario (
    id INT  AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(15),
    rm int,
    senha VARCHAR(10),
    nome VARCHAR(45));



CREATE TABLE tipo(
    id_tipo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    postagem VARCHAR (200)
);



CREATE TABLE postagens(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    postagens VARCHAR(200),
    data_post DATE,
    hora TIME,
    id_usuario INT,
    id_tipo INT,

    FOREIGN KEY (id_tipo) REFERENCES tipo (id_tipo),
    FOREIGN KEY (id_usuario) REFERENCES usuario (id)
);
insert INTO tipo values (null,'sugestoes');
insert INTO tipo values (null,'elogios');
insert INTO tipo values (null,'criticas');
insert INTO postagens values (null,'criticas');