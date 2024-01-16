CREATE DATABASE BD_Power_Pay_Palace;
USE BD_Power_Pay_Palace;

-- Tabela para armazenar informações sobre os usuários
CREATE TABLE usuarios (
    id INT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    senha_hash VARCHAR(255) NOT NULL, -- Usar hash para a senha
    tipo_usuario VARCHAR(20) NOT NULL -- Pode ser substituído por uma tabela de referência
);

-- Tabela para armazenar informações sobre os administradores
CREATE TABLE administradores (
    id INT PRIMARY KEY,
    usuario_id INT UNIQUE,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- Tabela para armazenar informações sobre os vendedores
CREATE TABLE vendedores (
    id INT PRIMARY KEY,
    usuario_id INT UNIQUE,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- Tabela para armazenar informações sobre os produtos
CREATE TABLE produtos (
    id INT PRIMARY KEY,
    imagem_produto VARCHAR(255),
    nome_produto VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL
);

-- Tabela para armazenar informações sobre as vendas
CREATE TABLE vendas (
    id INT PRIMARY KEY,
    produto_id INT,
    quantidade_vendida INT,
    FOREIGN KEY (produto_id) REFERENCES produtos(id) ON DELETE CASCADE
);


-- Inserindo valores na tabela de usuários
INSERT INTO usuarios (id, nome, senha_hash, tipo_usuario) VALUES
(1, 'kevenAdm@Power.com', '040820', 'ADM'),
(2, 'Vendedor1', 'hash_da_senha_vendedor1', 'Vendedor'),
(3, 'Vendedor2', 'hash_da_senha_vendedor2', 'Vendedor');

-- Inserindo valores na tabela de administradores
INSERT INTO administradores (id, usuario_id) VALUES
(1, 1);

-- Inserindo valores na tabela de vendedores
INSERT INTO vendedores (id, usuario_id) VALUES
(2, 2),
(3, 3);

-- Inserindo valores na tabela de produtos
INSERT INTO produtos (id, imagem_produto, nome_produto, descricao, preco) VALUES
(1, 'caminho_da_imagem1.jpg', 'Produto 1', 'Descrição do Produto 1', 19.99),
(2, 'caminho_da_imagem2.jpg', 'Produto 2', 'Descrição do Produto 2', 29.99);

-- Inserindo valores na tabela de vendas
INSERT INTO vendas (id, produto_id, quantidade_vendida) VALUES
(1, 1, 5),
(2, 2, 3);
