CREATE DATABASE MusicLibrary /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;

USE MusicLibrary;

CREATE TABLE PlaylistTrack (
  id INT AUTO_INCREMENT PRIMARY KEY,
  Nome VARCHAR(255) NOT NULL,
  Artista VARCHAR(255) NOT NULL,
  Album VARCHAR(255) NOT NULL
);

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  usuario VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL
);

INSERT INTO MusicLibrary.usuarios (
(nome, email, usuario, senha)
VALUES('Thiago', 'thiagomartins.floresal@gmail.com', 'thiago', '123')
);
