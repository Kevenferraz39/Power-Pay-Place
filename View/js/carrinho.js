const itens = [
    {
        id: 0,
        nome: "Combo Gaming",
        img: "./img/Products/product-4.png",
        valor: 575.89,
        quantidade: 0
    },
    {
        id: 1,
        nome: "Placa de video GTX",
        img: "./img/Products/product-5.png",
        valor: 2950.55,
        quantidade: 0
    },
    {
        id: 2,
        nome: "Duallsense",
        img: "./img/Products/product-6.png",
        valor: 499.79,
        quantidade: 0
    },
    {
        id: 3,
        nome: "Cadeira Gamer Redragon",
        img: "./img/Products/product-7.png",
        valor: 1099.00,
        quantidade: 0
    },
    {
        id: 4,
        nome: "Iphone 14 Pro Max",
        img: "./img/Products/product-8.png",
        valor: 11499.00,
        quantidade: 0
    },
    {
        id: 5,
        nome: "Samsung Galaxy s23 Ultra",
        img: "./img/Products/product-9.png",
        valor: 2950.55,
        quantidade: 0
    },
    {
        id: 6,
        nome: "Asus Rog Phone 3 Gamer",
        img: "./img/Products/product-10.png",
        valor: 2789.10,
        quantidade: 0
    },
    {
        id: 7,
        nome: "Xaiomi Ultra 13 ",
        img: "./img/Products/product-11.png",
        valor: 5275.50, 
        quantidade: 0
    },
    {
        id: 8,
        nome: "Xbox Series X",
        img: "./img/Products/product-12.png",
        valor: 4950.99, 
        quantidade: 0
    },
    {
        id: 9,
        nome: "Racingwheel GT480 Ferrari",
        img: "./img/Products/product-13.png",
        valor: 1450.99, 
        quantidade: 0
    },
    {
        id: 10,
        nome: "Play Station 5",
        img: "./img/Products/product-14.png",
        valor: 4450.59, 
        quantidade: 0
    },
    {
        id: 11,
        nome: "Gamming dasktop RTX 3090 TI",
        img: "./img/Products/product-15.png",
        valor: 5500.99, 
        quantidade: 0
    },
    // Adicione outros produtos conforme necessário
];

inicializarLoja = () => {
    var containerProdutos1 = document.getElementById('containerProdutos1');
    var containerProdutos2 = document.getElementById('containerProdutos2');
    var containerProdutos3 = document.getElementById('containerProdutos3');
    var containerProdutos4 = document.getElementById('containerProdutos4');
    itens.map((val) => {
        containerProdutos1.innerHTML += `
            <div class="product">
                <img src="${val.img}" alt="${val.nome}">
                <p class="product-name">${val.nome}</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p class="product-price">${val.valor.toFixed(2)} <span>R$</span></p>
                <br>
                <button data-key="${val.id}">Adicionar ao carrinho</button>
            </div>
        `;
        containerProdutos2.innerHTML += `
        <div class="product">
            <img src="${val.img}" alt="${val.nome}">
            <p class="product-name">${val.nome}</p>
            <p class="rate">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
            <p class="product-price">${val.valor.toFixed(2)} <span>R$</span></p>
            <br>
            <button data-key="${val.id}">Adicionar ao carrinho</button>
        </div>
        `;
        containerProdutos3.innerHTML += `
        <div class="product">
            <img src="${val.img}" alt="${val.nome}">
            <p class="product-name">${val.nome}</p>
            <p class="rate">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
            <p class="product-price">${val.valor.toFixed(2)} <span>R$</span></p>
            <br>
            <button data-key="${val.id}">Adicionar ao carrinho</button>
        </div>
        `;
        containerProdutos4.innerHTML += `
        <div class="product">
            <img src="${val.img}" alt="${val.nome}">
            <p class="product-name">${val.nome}</p>
            <p class="rate">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
            <p class="product-price">${val.valor.toFixed(2)} <span>R$</span></p>
            <br>
            <button data-key="${val.id}">Adicionar ao carrinho</button>
        </div>
        `;
    });
};
calcularParcelas = () => {
    let totalParcelas = 0;
    itens.forEach((val) => {
        totalParcelas += (val.quantidade * val.valor) / 12;
    });
    return totalParcelas;
};

calcularTotalValor = () => {
    let totalValor = 0;
    itens.forEach((val) => {
        totalValor += val.quantidade * val.valor;
    });
    return totalValor;
};

atualizarCarrinho = () => {
    var containerCarrinho = document.getElementById('containerCarrinho');
    containerCarrinho.innerHTML = "";
    itens.forEach((val) => {
        if (val.quantidade > 0) {
            val.totalParcelas = (val.quantidade * val.valor) / 12; // Adicione esta linha para calcular as parcelas
            containerCarrinho.innerHTML += `
            <div class="produtos2">
                <img src="${val.img}" alt="iphone" class="imagem-do-produto">
                <div class="textos">
                    <h3 class="nome">${val.nome}</h3>
                    <p class="valor"><span>R$:</span> ${val.valor}</p>
                    <p class="parcela"><span>R$:</span> ${val.totalParcelas.toFixed(2)} 12X sem juros</p>
                </div> 
                <div class="quantidade">
                    <p class="qtd">${val.quantidade}</p>
                </div> 
            </div>
            `;
        }
    });

    var totalDiv = document.querySelector('.total');
    totalDiv.innerHTML = `<p><span>Total Valor:</span> R$ ${calcularTotalValor().toFixed(2)}</p>`;
};

document.addEventListener("DOMContentLoaded", () => {
    inicializarLoja();

    var buttons = document.querySelectorAll('.product button');
    buttons.forEach((button) => {
        button.addEventListener("click", function () {
            let key = this.getAttribute('data-key');
            itens[key].quantidade++;
            atualizarCarrinho();
            return false;
        });
    });
});

