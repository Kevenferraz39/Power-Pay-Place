<?php 

require_once '../Model/conexao.php';
$pdo = new Conexao("BD_PowerPayPalace","localhost","root","",);
//include ('../View/index.html');

$cadSenha = addslashes($_POST['txtsenha']);
    $cadEmail = addslashes($_POST['txtemail']);
	
    $dados = $pdo->validLogin($cadSenha, $cadEmail);
if (empty($dados) || $dados == false) {
    echo "<script>alert('Login invalido!')</script>
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../View/index.html?error=1'>";
		}
		else{			
			if (!isset($_SESSION)) {
				session_start();

			}
			
			$_SESSION['UserID'] = $dados['id'];
			
            $_SESSION['UserEmail'] = $dados['Email'];

 

			//header("Location: ../View/inicial.php");
			exit;
		}


?>