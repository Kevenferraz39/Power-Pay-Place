<?php
 class{

    function __construct()
    {
        require_once 'conexao.php';		
        $con = new Conexao();
        $this->pdo = $con->conectar("BD_PowePayPalace","localhost","root","");
    }
    function __set($atributo, $value)
    {
        $this->$atributo = $value;
    }
    function __get($atributo)
    {
        return $this->$atributo;
    }



        /*
	    		status é campo em bit
	    		1 = ativo
	    		0 = inativo
                
	    	*/
            public function insereCad($cadUsuario, $cadEmail, $cadSenha, $cadNome , $cadCpf ,$cadIdade, $cadCelular, $cadTel,
             $cadCidade, $cadrua , $cadCep , $cadBairo , $cadNres , $cadComple){

                $insereCad = $this->pdo->prepare(" INSERT INTO cadastro (usuario, email, senha, nome , cpf , idade, celular , telefone , 
                cidade , rua , cep , nresidencial , complemento ) values  (:usuario, :email, :senha , :nome, :cpf , :idade , :celular, :telefone ,
                :cidade , :rua , :cep , :bairro  , :uf , :nresidencial , :complemento ) ");
                $insereCad->bindValue(":usuario",$cadUsuario);
                $insereCad->bindValue(":email",$cadEmail);
                $insereCad->bindValue(":senha",$cadSenha);
                $insereCad->bindValue(":nome", $cadNome);
                $insereCad->bindValue(":cpf",$cadCpf);
                $insereCad->bindValue(":idade",$cadIdade);
                $insereCad->bindValue(":celular",$cadCelular);
                $insereCad->bindValue(":telefone",$cadTel);
                //endereco
                $insereCad->bindValue(":cidade",$cadCidade);
                $insereCad->bindValue(":rua",$cadrua);
                $insereCad->bindValue(":cep",$cadCep);
                $insereCad->bindValue(":bairro", $cadBairro);
                $insereCad->bindValue(":uf",$cadUf);
                $insereCad->bindValue(":nresidencial",$cadNRes);
                $insereCad->bindValue(":complemento",$cadComple);
                $insereCad->execute();
            
            
                
                
            }

           
           
           
        Public function ValidaEmail($cadUsuario, $cadEmail, $cadSenha, $cadNome , $cadCpf ,$cadIdade, 
        $cadCelular, $cadTel, $cadCidade, $cadrua , $cadCep , $cadBairo , $cadNres , $cadComple)
            {
                $valida = $this->pdo->prepare("select email from usuario Where email = :e");
                $valida->bindValue(":e" , $cadEmail);
                $valida->execute();
                if($valida->rowCount()>0){

                echo"<script>alert('Email já cadastrado')</script>";

                }else 
                {
                    
                    insereCad($cadUsuario, $cadEmail, $cadSenha, $cadNome , $cadCpf ,$cadIdade, $cadCelular, $cadTel,
                     $cadCidade, $cadrua , $cadCep , $cadBairo , $cadNres , $cadComple);
             
                    //echo"<script>alert('cadastro com sucesso')</script>";
                    
                            //header("Location: ../View/inicial.php");
                        

                }













 }
}

?>