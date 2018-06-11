<br>
<?php
	
  
	$nome     = @$_REQUEST["nome_produto"];
	$descricao   = @$_REQUEST["descricao_produto"];
	$estoque     = @$_REQUEST["estoque_produto"];
	$valor  = @$_REQUEST["valor_produto"];
	$situacao = @$_REQUEST["situacao_produto"];
	
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO produto (nome_produto, descricao_produto,estoque_produto ,valor_produto,situacao_produto) 
			VALUES 
			('{$nome}',
			'{$descricao}',
			'{$estoque}',
			'{$valor}',
			'{$situacao}')";
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar</div>"; 
			}
		break;
		case "editar":
			$sql = "UPDATE produto SET
						nome_produto ='{$nome}',
						descricao_produto ='{$descricao}',
						estoque_produto ='{$estoque}',
						valor_produto ='{$valor}',
						situacao_produto ='{$situacao}'
						
					WHERE
						codigo_produto=".$_REQUEST["cod_bike"];
						//REQUEST tirei "cod_bike" daqui e do editar e vou por codigo_produto
						
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar </div>"; 
			}
		break;
		case "excluir":
			$sql = "DELETE FROM produto WHERE codigo_produto =".$_REQUEST["cod_bike"];
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir</div>"; 
			}
		break;
	}
?>






