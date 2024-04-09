<?php
        class{

   


    function __construct()
    {
        require_once 'conexao.php';		
        $con = new Conexao();
        $this->pdo = $con->conectar("bd_powerpay","localhost","root","");
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
            public function insereCad($cadnome, $cadtel, $cadsenha , $cadcpf , $cadnres ,$cadcomple , $cademail){

                $insereCad = $this->pdo->prepare(" INSERT INTO cadastro (Nome, Telefone, Senha, CPF ,Nresidencial, Complemento, Email) 
                values  (:nome, :telefone, :senha , :cpf, :nresidencial , :complemento, :email ) ");
                $insereCad->bindValue(":nome",$cadnome);
                $insereCad->bindValue(":telefone",$cadtel);
                $insereCad->bindValue(":senha",$cadsenha);
                $insereCad->bindValue(":cpf", $cadcpf);
                $insereCad->bindValue(":nresidencial",$cadnres);
                $insereCad->bindValue(":complemento",$cadcomple);
                $insereCad->bindValue(":email",$cademail);
            
                $insereCad->execute();
            
                //return intval($this->pdo->lastInsertId());
                return intval($this->pdo->lastInsertId());
                
                
            }
            
            public function insereEnd($cep, $cadlog, $cadcidade, $cadbairro , $caduf , $fk ){
                $insereEnd = $this->pdo->prepare(" INSERT INTO endereco (cep, nomelog, cidade, bairro , uf , fkidUser ) 
                values  (:cep, :nomelog, :cidade ,:bairro, :uf , :fk) ");
            
                $insereEnd->bindValue(":CEP",$cep);
                $insereEnd->bindValue(":NomeLogradouro",$cadlog);
                $insereEnd->bindValue(":Cidade",$cadcidade);
                $insereEnd->bindValue(":Bairro",$cadbairro);
                $insereEnd->bindValue(":UF",$caduf);
                $insereEnd->bindValue(":fk",$fk);
            
                
                $insereEnd->execute();
            
                
            
            
            
                
            
            }
            
            
            //VERIFICAR SE O EMAIL JA ESTA CADASTRADO 
            
            Public function ValidaEmail($cadnome, $cadtel, $cadsenha , $cadcpf , $cadnres ,$cadcomple , $cademail , $cep, $cadlog, $cadcidade, $cadbairro , $caduf , $fk )
            {
            $valida = $this->pdo->prepare("select Email from cadastro Where Email = :e");
            $valida->bindValue(":e" , $cadEmail);
            $valida->execute();
            if($valida->rowCount()>0){
            
            echo"<script>alert('Email já cadastrado')</script>";
            
            }else 
            {
                
                 $fk = $this->insereCad($cadnome, $cadtel, $cadsenha , $cadcpf , $cadnres ,$cadcomple , $cademail );
                 $this->insereEnd($cep, $cadlog, $cadcidade, $cadbairro , $caduf , $fk);
            
                
            
                //echo"<script>alert('cadastro com sucesso')</script>";
                
                        //header("Location: ../View/inicial.php");
                    
            
            }
        }


//Função validar credenciais
public function validLogin($cadsenha, $cademail)
{
    $dados = array();
    $cmd = $this->pdo->query("SELECT idUser, Email FROM cadastro WHERE (Email = '". ($cademail) ."') AND (Senha = '". ($cadsenha) ."')");
    $dados = $cmd->fetch();
    return $dados;
    
}    

public function selectAll($table  )
		{
			if($table == 1){
				$cmd = $this->pdo->query("SELECT  Nome, Senha, Email , idUser  FROM cadastro where idUser = " . $_SESSION['UserID']);
				$con = $cmd->fetchAll(PDO::FETCH_ASSOC);
				if (count($con) > 0) {
					
					for ($i=0; $i < count($con); $i++) {
						echo "<tr>
								<td>
									<p class='dados'>Código de Usuário: ".$con[$i]['idUser']."</p>
									<p class='dados'>Nome: ".$con[$i]['Nome']."</p>
									<p class='dados'>E-mail: ".$con[$i]['Email']."</p>
									<p>Senha: ".$con[$i]['Senha']."</p>
								</td>
								<td class='Consulta'>
								<link rel='stylesheet' type='text/css' href='../View/CSS/Consulta.css' />
									<a href='http://localhost/PJ11/View/VAlterar.php?table=cadastro&id_up=".$con[$i]['idUser']."'>

										<img  src='../img/editar.png' class='Consulta' />
									</a>
								</td>
								<td class='Consulta'>

									<a href='http://localhost/PJ11/Controller/processaEx.php?table=cadastro&id_ex=".$con[$i]['idUser']."'>
										<img  src='../img/excluir.png' class='Consulta'/>
									</a>
								</td>					
							</tr>
						<tr><td><hr/></td></tr>";			
					}
				}
			}
			else if($table == 2 ){
				
				$cmd = $this->pdo->query("SELECT CEP, NomeLogradouro, Cidade, Bairro, UF FROM endereco where fkidUser  = " . $_SESSION['UserID']);
				$con = $cmd->fetchAll(PDO::FETCH_ASSOC);
				if (count($con) > 0) {
					for ($i=0; $i < count($con); $i++) {
						echo "<tr>
								<td>
									<p class='dados'>CEP: ".$con[$i]['CEP']."</p>
									<p class='dados'>UF: ".$con[$i]['UF']."</p>
									<p class='dados'>Cidade: ".$con[$i]['Cidade']."</p>
									<p class='dados'>Bairro: ".$con[$i]['Bairro']."</p>
									<p class='dados'>Rua: ".$con[$i]['NomeLogradouro']."</p>
								
								</td>
								<td class='Consulta'>
								<link rel='stylesheet' type='text/css' href='../View/CSS/Consulta.css' />
									<a href='../View/VAlterar.php?table=endereco&id_up=".$con[$i]['idEnd']."'>
										<img  src='../img/editar.png' class='Consulta'/>
									</a>
								</td>
								<td class='Consulta'>
									<a href='http://localhost/PJ11/Controller/processaEx.php?table=endereco&id_ex=".$con[$i]['idEnd']."'>
										<img  src='../img/excluir.png' class='Consulta'/>
									</a>
								</td>					
							</tr>
						<tr><td><hr/></td></tr>";
					}
				}
			}		




		}

	//FUNÇÂO BUSCA PARA PREENCHER 

	public function edita($id){
		$result = array();
		$cons = $this->pdo->prepare("select * from cadastro where idUser = :id");
		$cons->bindValue(":id",$id);
		$cons->execute();
		$result = $cons->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

	//FUNÇÂO EXCLUIR 

	public function excluir($id, $table)
		{
			if ($table == 1) {
				$cmd = $this->pdo->prepare("DELETE * FROM cadastro WHERE idUser = :id");
				$cmd->bindValue(":id", $id);
				$cmd->execute();
			}
			else if ($table == 2) {
				//Exibição do endereço inativo
				$cmd = $this->pdo->prepare("DELETE * FROM endereco WHERE idEnd = :id");	
				$cmd->bindValue(":id", $id);
				$cmd->execute();				
			}			
		}

	// FUNÇÂO ALTERAR 

	public function altereCad($cadnome, $cadSenha , $cadEmail , $cadTeln , $cadCPF , $cadNRes ,$cadComple , $id){
		$altereCad = $this->pdo->prepare("update cadastro SET Nome = :Nome , Telefone = :Telefone , Senha = :Senha , CPF = :CPF ,
		 Nresidencial = :Nresidencial, Complemento = :Complemento , Email = :Email  where idUser = :id");
		$altereCad->bindValue(":Nome",$cadnome);
		$altereCad->bindValue(":Telefone",$cadTeln);
		$altereCad->bindValue(":Senha",$cadSenha);
		$altereCad->bindValue(":CPF", $cadCPF);
		$altereCad->bindValue(":Nresidencial",$cadNRes);
		$altereCad->bindValue(":Complemento",$cadComple);
		$altereCad->bindValue(":Email",$cadEmail);
		$altereCad->bindValue(":id",$id);
		
		$altereCad->execute();

	}

	public function altereEnd($CEP, $cadlogradouro , $cadCidade , $cadBairro , $cadUF){
		$altereEnd = $this->pdo->prepare("UPDATE endereco SET CEP = :CEP, NomeLogradouro = :NomeLogradouro , Cidade = :Cidade, bairro = :Bairro , UF = :UF  WHERE idEnd = :id");
		$altereEnd->bindValue(":CEP",$CEP);
		$altereEnd->bindValue(":NomeLogradouro",$cadlogradouro);
		$altereEnd->bindValue(":Cidade",$cadCidade);
		$altereEnd->bindValue(":Bairro",$cadBairro);
		$altereEnd->bindValue(":UF",$cadUF);
		
		$altereEnd->execute();
		

	}



	public function MostrarAltera($id, $table )
		{
			if ($table == 1) {
				$cmd = $this->pdo->prepare("SELECT * FROM cadastro WHERE idUser = :id");
				$cmd->bindValue(":id", $id);
				$cmd->execute();
				$alterar = $cmd->fetch(PDO::FETCH_ASSOC);
				echo "<input type='hidden' name='idUser' value=".$alterar['idUser']." required/>
				<tr>
					<td colspan='2'>
						<label for='nome'>Nome *</label>
						<input type='text' id='nome_cad' name='nome' placeholder='Nome Completo' minlength='8' maxlength='40' value='".$alterar['Nome']."' required/><br><br>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<label for='email'>Email *</label>
						<input type='email' id='email_cad' name='email' placeholder='E-mail' minlength='3' maxlength='40' value='".$alterar['Email']."' required/><br><br>
					</td>								
				</tr>
				<tr>
					<td colspan='2'>
						<label for='senha'>Senha *</label>
						<input type='text' id='senha' name='senha' placeholder='Senha' minlength='9' maxlength='32' value='".$alterar['Senha']."' required/><br><br>
					</td>
				</tr>
				
				<tr>
					<td colspan='2'>
						<label for='senha'>Telefone *</label>
						<input type='text' id='email_cad' name='senha' placeholder='Tel' minlength='9' maxlength='32' value='".$alterar['Telefone']."' required/><br><br>
					</td>
				</tr>

				<tr>
					<td>
						<label for='cpf'>CPF *</label>
						<input type='text' id='email_cad' name='cpf' placeholder='___.___.___-__' maxlength='14' value='".$alterar['CPF']."' required/><br><br>
					</td>
					<td>
						<label for='numRes'>Nº Residencial *</label>
						<input type='number' id='senha_cad' name='numRes' placeholder='Nº residencial' value='".$alterar['Nresidencial']."' required/><br><br>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<label for='comp'>Complemento</label>
						<textarea id='senha_cad' name='complemento' placeholder='Complemento' maxlength='100'>".$alterar['Complemento']."</textarea>
					</td>
			</tr>";
			}
			else if ($table == 2){
				$cmd = $this->pdo->prepare("SELECT CEP, NomeLogradouro, Cidade, Bairro, UF , idEnd FROM endereco WHERE idEnd = :id");
				$cmd->bindValue(":id", $idE);
				$cmd->execute();
				$alterar = $cmd->fetch(PDO::FETCH_ASSOC);
				var_dump($alterar);
				echo '<input type="hidden" name="idEnd" value="'.$alterar['idEnd'].'" required/>'."
				<tr>
					<td colspan='3'>
						<label for='senha_cad'>CEP *</label>
						<input type='text' id='cep' name='txtCEP' placeholder='CEP' onblur='buscaCep();' maxlength='11' value='".$alterar['CEP']."' required/><br><br>
					</td>
				</tr>
				<tr>
					<td colspan='3'>
					
						<label for='senha_cad'>Estado *</label>
						<select id='uf' name='txtuf'value'".$alterar['UF']."'/>
							<option value='' selected></option>
							<option value='AC'>AC</option>
							<option value='AL'>AL</option>
							<option value='AP'>AP</option>
							<option value='AM'>AM</option>
							<option value='BA'>BA</option>
							<option value='CE'>CE</option>
							<option value='DF'>DF</option>
							<option value='ES'>ES</option>
							<option value='GO'>GO</option>
							<option value='MA'>MA</option>
							<option value='MT'>MT</option>
							<option value='MS'>MS</option>
							<option value='MG'>MG</option>
							<option value='PA'>PA</option>
							<option value='PB'>PB</option>
							<option value='PR'>PR</option>
							<option value='PE'>PE</option>
							<option value='PI'>PI</option>
							<option value='RJ'>RJ</option>
							<option value='RN'>RN</option>
							<option value='RS'>RS</option>
							<option value='RO'>RO</option>
							<option value='RR'>RR</option>
							<option value='SC'>SC</option>
							<option value='SP'>SP</option>
							<option value='SE'>SE</option>
							<option value='TO'>TO</option>
						</select><br><br>
					</td>								
				</tr>
				<tr>
					<td>
						<label for='senha_cad'>Cidade *</label>
						<input type='text' id='cidade' name='txtcidade' placeholder='Cidade' minlength='5' maxlength='100' value='".$alterar['Cidade']."' required/><br><br>
					</td>

					<td>
						<label for='senha_cad'>Bairro *</label>
						<input type='text' id='bairro' name='txtbairro' placeholder='Bairro' minlength='5' maxlength='50' value='".$alterar['Bairro']."' required/><br><br>
					</td>
				</tr>
				<tr>
					<td colspan='3'>
						<label for='senha_cad'>Rua *</label>
						<input type='text' id='rua' name='txtlogradouro' placeholder='Rua' minlength='5' maxlength='100' value='".$alterar['NomeLogradouro']."' required/><br><br>
					</td>
			</tr>";
			}	
		}




}

?>
















    }

?>