
<?php


require_once '../Model/conexao.php';
$pdo = new Conexao("BD_PowerPayPalace","localhost","root","",);
//include ('../view/cadastro.html');

$cadUsuario = addslashes($_POST['txtusuario']);
$cadEmail = addslashes($_POST['txtemail']);
$cadSenha = addslashes($_POST['txtsenha']);
$cadNome = addslashes($_POST['txtnome']);
$cadCpf = addslashes($_POST['txtcpf']);
$cadIdade = addslashes($_POST['txtidade']);
$cadCelular = addslashes($_POST['txtcel']);
$cadTel = addslashes($_POST['txttel'])




//cad Endereco 

$cadCep = addslashes($_POST['txtcep']);
$cadRua = addslashes($_POST['txtrua']);
$cadCidade = addslashes($_POST['txtcidade']);
$cadBairro = addslashes($_POST['txtbairro']);
$cadUf = addslashes($_POST['txtuf']);
$cadComple = addslashes($_POST['txtcomple'])
$cadNres = addslashes($_POST['txtnres'])

 // ESTADO 

/*
id int primary key auto_increment, 
usuario varchar(50) not null ,
email varchar (62)not null ,
senha varchar(32) not null ,
nome varchar (50) not null , 
cpf char (11) unique not null , 
idade date not null , 
celular char (13) not null , 
telefone char (13) null ,

ENDERECO

cidade varchar (32) not null ,
rua varchar (100) not null , 
cep varchar (8) not null ,
nresidencial char(10) not null ,
complemento varchar (100) null 
stats bit not null
*/




$pdo->ValidaEmail($cadUsuario, $cadEmail, $cadSenha, $cadNome , $cadCpf ,$cadIdade, 
$cadCelular, $cadTel, $cadCidade, $cadrua , $cadCep , $cadBairo , $cadNres , $cadComple);
?>