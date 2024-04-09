
<?php


require_once '../Model/conexao.php';
$pdo = new Conexao("bd_powerpay","localhost","root","",);
//include ('../view/cadastro.html');


$cadnome = addslashes($_POST['txtnome']);
$cadtel = addslashes($_POST['txttel']);
$cadsenha = addslashes($_POST['txtsenha']);
$cadcpf = addslashes($_POST['txtcpf']);
$cadNRes = addslashes($_POST['txtnres']);
$cadcomple = addslashes($_POST['txtcomp']);
$cademail = addslashes($_POST['txtemail']);

//cad Endereco 

$cep = addslashes($_POST['txtcep']);
$cadlog = addslashes($_POST['txtlogradouro']);
$cadcidade = addslashes($_POST['txtcidade']);
$cadbairro = addslashes($_POST['txtbairro']);
$caduf = addslashes($_POST['txtuf']); // ESTADO 



$pdo->ValidaEmail($cadnome, $cadtel, $cadsenha , $cadcpf , $cadnres ,$cadcomple , $cademail , $cep, $cadlog, $cadcidade, $cadbairro , $caduf , $fk );



?>