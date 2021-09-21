CREATE TABLE usuario
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    login varchar(50) NOT NULL,
    senha varchar(255) NOT NULL,
    status int(1) NOT NULL,
    data_cadastro timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE hash
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    hash VARCHAR(255) NOT NULL,
    status INT NOT NULL,
    idUsuario INT NOT NULL,
    data_cadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)