-- Tabela de Clientes
CREATE TABLE Clientes (
    ClienteID INT PRIMARY KEY,
    Nome VARCHAR(100),
    Email VARCHAR(100),
    Telefone VARCHAR(20)
);

-- Tabela de Administradores
CREATE TABLE Administradores (
    AdminID INT PRIMARY KEY,
    Nome VARCHAR(100),
    Email VARCHAR(100),
    Senha VARCHAR(50) -- Recomenda-se armazenar senhas de forma segura
);

-- Tabela de Produtos
CREATE TABLE Produtos (
    ProdutoID INT PRIMARY KEY,
    Nome VARCHAR(100),
    Preco DECIMAL(10, 2),
    Estoque INT
);

-- Tabela de Vendas
CREATE TABLE Vendas (
    VendaID INT PRIMARY KEY,
    ClienteID INT,
    DataVenda DATE,
    ValorTotal DECIMAL(10, 2),
    FOREIGN KEY (ClienteID) REFERENCES Clientes(ClienteID)
);

-- Tabela de ItensVenda (para armazenar os itens de cada venda)
CREATE TABLE ItensVenda (
    ItemID INT PRIMARY KEY,
    VendaID INT,
    ProdutoID INT,
    Quantidade INT,
    PrecoUnitario DECIMAL(10, 2),
    ValorTotalItem DECIMAL(10, 2),
    FOREIGN KEY (VendaID) REFERENCES Vendas(VendaID),
    FOREIGN KEY (ProdutoID) REFERENCES Produtos(ProdutoID)
);
