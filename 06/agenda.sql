-- CRIA O BANCO
CREATE DATABASE IF NOT EXISTS agenda;
USE agenda;
 
 -- CRIA A TABELA DE CONTATOS
CREATE TABLE IF NOT EXISTS contatos (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    endereco VARCHAR(255)
);

-- INSERCAO DE DADOS INICIAIS
INSERT INTO contatos (nome, telefone, email, endereco) VALUES 
	('Mickey', '11999887766', 'mickey@mail.com', 'Rua X, Disney'),
    ('Donald', '11988881155', 'donald@mail.com', 'Ladeira Z, Disney'),
    ('Margarida', '11955887711', 'margarida@mail.com', 'Avenida Y, Disney');

-- INSERCAO COM ENDERECO NULO
INSERT INTO contatos (nome, telefone, email, endereco) VALUES 
	('Batman', '11955557766', 'batman@mail.com', null);

-- INSERCAO SEM O CAMPO ENDERECO
INSERT INTO contatos (nome, telefone, email) VALUES 
	('Superman', '11933553366', 'superman@mail.com');