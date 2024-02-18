<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--estilos-->
    <link rel="stylesheet" href="style/sobre.css">
    <link rel="stylesheet" href="style/cadastre-se.css">
    <!--estilos-->
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <title>Cadastre-se</title>
</head>
<body>
    <div class="navbar">
        <div class="header-inner-contet">
        <a href="home.php"><h1 class="logo">Power <span>Play Palace</span></h1></a>
            <a href="home.php" class="linkHome
            Menu"><img src="./img/logo-removebg-preview.png" alt="logo" class="logoFoto"></a>
        </div>
    </div>
    <header>
        <div class="header-iner-content">
            <div class="header-botton-side">
                <div class="header-botton-side-left">
                  <form action="" method="post">
                    <div class="cadastro-content">
                        <img src="./img/logo-removebg-preview.png" alt="logo">
                        <h3>Cadastre-se:</h3>
                        <div class="cadastro">
                            <label for="TxtNome">Nome:</label>
                            <input type="text" name="TxtNome" id="TxtNome" placeholder="Digite seu nome completo...." required>

                            <label for="TxtCPF">CPF:</label>
                            <input type="text" name="TxtCPF" id="TxtCPF" placeholder="Digite o seu CPF" required>

                            <label for="TxtDataNasc">Data de nascimento:</label>
                            <input type="date" name="TxtDataNasc" id="DataNasc"required>

                            <label for="Sexo">Sexo:</label>
                            <select name="Sexo" id="Sexo">
                                <option>&nbsp;</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                            </select>

                            <label for="TxtEmail">E-mail:</label>
                            <input type="text" name="TxtEmail" id="TxtEmail" placeholder="Informe o seu E-mail" required>

                            <label for="TxtEmailC">Confirme seu E-mail:</label>
                            <input type="text" name="TxtEmailC" id="TxtEmailC" placeholder="Confirme o seu E-mail" required>

                            <label for="Senha">Senha:</label>
                            <input type="password" name="Senha" id="Senha" placeholder="Digite uma senha " required>

                            <label for="SenhaC">Confirme sua senha:</label>
                            <input type="password" name="SenhaC" id="SenhaC" placeholder="Digite uma senha " required>
                                
                            <h3>Endereço:</h3>
                        
                            <label for="">UF:</label>
                            <select name="" id="">
                            <option value="">&nbsp;</option>
                                <option value="Acre">AC</option>
                                 <option value="Alagoas">AL</option>
                                 <option value="Amapa">AP</option>
                                 <option value="Amazonas">AM</option>
                                 <option value="Bahia">BA</option>
                                 <option value="Ceara">CE</option>
                                 <option value="Distrito-Federal">DF</option>
                                 <option value="Espirito-Santo">ES</option>
                                 <option value="Goias">GO</option>
                                 <option value="Maranhao">MA</option>
                                 <option value="Mato Grosso">MT</option>
                                 <option value="Mato-Grosso-do-Sul">MS</option>
                                 <option value="Minas-Gerais">MG</option>
                                 <option value="Para">PA</option>
                                 <option value="Paraiba">PB</option>
                                 <option value="Paraná">PR</option>
                                 <option value="Pernambuco ">PE</option>
                                 <option value="Piaui">PI</option>
                                 <option value="Rio-de-Janeiro">RJ</option>
                                 <option value="Rio-Grande-do-Norte">RN</option>
                                 <option value="Rio-Grande-do-Sul">RS</option>
                                 <option value="Rondonia">RO</option>
                                 <option value="Roraima">RR</option>
                                 <option value="Santa-Catarina">SC</option>
                                 <option value="Sao-Paulo">SP</option>
                                 <option value="Sergipe">SE</option>
                                 <option value="Tocantins">TO</option>    
                            </select>

                            <label for="">Cep:</label>
                            <input type="text" name="" id="">
 
                            <label for="">Cidade:</label>
                            <input type="text" name="" id="">

                            <label for="">Bairro:</label>
                            <input type="text" name="" id="">

                            <label for="">Rua:</label>
                            <input type="text" name="" id="">

                            <label for="">Complemento:</label>
                            <input type="text" name="" id="">
                        </div>
                        <input type="submit" value="Cadastrar" class="cadastrar">
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </header>

    <!--script-->
    <script src="js/index.js"></script>
     <!--script-->
</body>
</html>