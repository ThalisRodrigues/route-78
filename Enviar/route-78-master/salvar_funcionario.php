<br>
<?php

  
  
	$nome     = @$_REQUEST["nome_funcionario"];
	$sexo   = @$_REQUEST["sexo_funcionario"];
	$cpf   = @$_REQUEST["cpf_funcionario"];
	$rg   = @$_REQUEST["rg_funcionario"];
	$telefone    = @$_REQUEST["telefone_funcionario"];
	$email  = @$_REQUEST["email_funcionario"];
	$login  = @$_REQUEST["login_funcionario"];
	$senha   = @$_REQUEST["senha_funcionario"];
	$situacao   = @$_REQUEST["situacao_funcionario"];
	$tipo   = @$_REQUEST["tipo_funcionario"];
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO funcionario
			(nome_funcionario, sexo_funcionario, cpf_funcionario, rg_funcionario, telefone_funcionario, email_funcionario
			, login_funcionario,senha_funcionario,situacao_funcionario,tipo_funcionario)
			VALUES
			('{$nome}',
			'{$sexo}',
			'{$cpf}',
			'{$rg}',
			'{$telefone}',
			'{$email}',
			'{$login}',
			'{$senha}',
			'{$situacao}',
			'{$tipo}')";
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar</div>"; 
			}
		break;
		case "editar":
			$sql = "UPDATE funcionario SET 
						nome_funcionario    = '{$nome}',
						sexo_funcionario = '{$sexo}',
						cpf_funcionario  = '{$cpf}',
						rg_funcionario  = '{$rg}',
						telefone_funcionario   = '{$telefone}',
						email_funcionario    = '{$email}',
						login_funcionario = '{$login}',
						senha_funcionario  = '{$senha}',
						situacao_funcionario  = '{$situacao}',
						tipo_funcionario  = '{$tipo}'
					WHERE 
					codigo_funcionario= ".$_REQUEST["cod_fun"];
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível (Verifique se os campos Nome e Endereço estão preenchidos) editar</div>"; 
			}
		break;
		case "excluir":
			$sql = "DELETE FROM funcionario WHERE codigo_funcionario=".$_REQUEST["cod_fun"];
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir pois este funcionario ja esta associado a uma compra</div>"; 
			}
		break;
	}
?>









