<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--estilos-->
    <link rel="stylesheet" href="style/home.css">
    <!--estilos-->
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <title>Produtos</title>
</head>
<body>
    <div class="navbar">
        <div class="header-inner-contet">
            <a href="home.php"><h1 class="logo">Power <span>Play Palace</span></h1></a>
            <a href="home.php" class="linkHome
            Menu"><img src="./img/logo-removebg-preview.png" alt="logo" class="logoFoto"></a>
            <nav>
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="produtos.php">PRODUTOS</a></li>
                    <li><a href="sobre.php">SOBRE</a></li>
                    <li><a href="contato.php">CONTATO</a></li>
                    <li><a href="conta.php">CONTA</a></li>
                </ul>
            </nav>
            <div class="nav-icons-container">
                <img src="./img/carrinho.png" alt="carrinho" class="carrinhoimg" id="car-button">
                <img src="./img/menuu.png" alt="menu" class="menu-button">
            </div>
        </div>
    </div>
    <div class="carrinho">
    <h3>Carrinho:</h3>
    <div class="compras" id="containerCarrinho">
        <!-- compras -->
    </div>
    <div class="total">
            <!--  valor total da compra compras -->
        </div>
    <button onclick="iraocarrinho()">Ir ao carrinho &#8594;</button>
</div>
    <header>
        <div class="header-iner-content">
            <div class="header-botton-side">
                <div class="header-botton-side-left">
                    <h2>De Um Novo Estilo ao Seu Trabalho<span>!</span></h2>
                    <p>
                        O sucesso nem sempre tem haver com grandeza. Tem haver com concistencia. Trabalho duro consistencia supera o sucesso. Agrandeza virá!
                    </p>
                    <button>Ver Agora &#8594;</button>
                </div>
                <div class="header-botton-side-right">
                    <img src="./img/gaming-msi-header.png" alt="notebook">
                </div>
            </div>
        </div>
    </header>
    <!-- main content -->

    <main>
        <div>
            <div class="page-inner-content">
                <h3 class="section-title">
                    Produtos em alta
                </h3>
                <div class="subtitle-underline"></div>
            </div>
            <div class="cols cols-4" id="containerProdutos1">
               <!-- Seus produtos aqui... -->
            </div>

            <div class="page-inner-content">
                <h3 class="section-title">
                     Produtos que chegam hoje
                </h3>
                <div class="subtitle-underline"></div>
            </div>
            <div class="cols cols-4" id="containerProdutos2">
               <!-- Seus produtos aqui... -->
            </div>

            <div class="page-inner-content">
                <h3 class="section-title">
                     Produtos 3
                </h3>
                <div class="subtitle-underline"></div>
            </div>
            <div class="cols cols-4" id="containerProdutos3">
               <!-- Seus produtos aqui... -->
            </div>

            <div class="page-inner-content">
                <h3 class="section-title">
                     Produtos 4
                </h3>
                <div class="subtitle-underline"></div>
            </div>
            <div class="cols cols-4" id="containerProdutos4">
               <!-- Seus produtos aqui... -->
            </div>
        <div>
            <div class="page-inner-content">
                <div class="feedback">
                    <div class="feedbacks">
                        <p>"</p>
                        <p>A melhor loja online de vendas de eletronicos!</p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                        <p>Usuario anonimo</p>
                    </div>

                    <div class="feedbacks">
                        <p>"</p>
                        <p>A melhor loja online de vendas de eletronicos!</p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                        <p>Keven Ferraz</p>
                    </div>

                    <div class="feedbacks">
                        <p>"</p>
                        <p>A melhor loja online de vendas de eletronicos!</p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                        <p>Kery Netrilyn</p>
                    </div>
                    <!--add more feedback`s-->
                </div>
            </div>
        </div>
    </main> 
    <!-- main content -->
    <footer class="Orange-background">
        <div class="page-inner-content footer-content">
            <div class="download-options">
                <p>Baixe nosso apicativo</p>
                <p>Baixe nosso apicativo para android & IOS</p>
                <div>
                    <img src="./img/app-store.png" alt="app-store">
                    <img src="./img/play-store.png" alt="play-store">
                </div>
            </div>
            <div class="logo-footer">
                <img src="./img/logo3.png" alt="">
                <p>De Um Novo Estilo ao Seu Trabalho<span>!</span></p>
            </div>
            <div class="links-footer">
                <h3>Links úteis</h3>
                <ul>
                    <li>Cupons</li>
                    <li>Blog Post</li>
                    <li>Políticas de privacidade</li>
                    <li>Torne-se afiliado</li>
                </ul>
            </div>
        </div>
        <hr class="page-inner-content">
        <div class="page-inner-content copyright">
            <p>Copyright 2024 Keven Ferraz - todos os direitos Reservados &copy;</p>
        </div>
    </footer>
    <!--script-->
    <script src="js/index.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="js/carrinho.js"></script>
    <script src="js/NewPage.js"></script>
     <!--script-->
</body>
</html>