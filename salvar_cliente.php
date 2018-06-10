<br>
<?php

  
	$nome  = @$_REQUEST["nome_cliente"];
	$tipo  = @$_REQUEST["tipo_cliente"];
	$cpf  = @$_REQUEST["cpf_cliente"];
	$telefone  = @$_REQUEST["telefone_cliente"];
	$email = @$_REQUEST["email_cliente"];
	$endereco = @$_REQUEST["endereco_cliente"];
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO cliente (nome_cliente,tipo_cliente, cpf_cliente,telefone_cliente ,email_cliente,endereco_cliente)
			VALUES ('{$nome}',
			'{$tipo}',
			'{$cpf}',
			'{$telefone}',
			'{$email}',
			'{$endereco}')";
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar</div>"; 
			}
		break;
		case "editar":
			$sql = "UPDATE cliente SET 
						nome_cliente  = '{$nome}',
						tipo_cliente  = '{$tipo}',
						cpf_cliente = '{$cpf}',
						telefone_cliente  = '{$telefone}', 
						email_cliente  = '{$email}',
						endereco_cliente  = '{$endereco}' 
					WHERE 
					codigo_cliente = ".$_REQUEST["cod_cli"];
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar</div>"; 
			}
		break;
		case "excluir":
			$sql = "DELETE FROM cliente WHERE codigo_cliente=".$_REQUEST["cod_cli"];
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir pois este cliente ja esta associado a uma compra</div>"; 
			}
		break;
	}
?>









